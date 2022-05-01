<?php
/** Calculates the winners of a competition
 * 
 */

function calc_winners()
{
    $db = getDB();
    error_log("Starting winner calc");
    $calced_comps = [];
    $stmt = $db->prepare("SELECT id, name, duration, expires, current_reward, starting_reward, join_fee, current_participants, min_participants, paid_out, did_calc, min_score, first_place_per, second_place_per, third_place_per FROM Competitions
						WHERE expires <= CURRENT_TIMESTAMP() AND did_calc = 0 AND current_participants >= min_participants LIMIT 10");
    try {
        $stmt->execute();
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $rc = $stmt->rowCount();
            error_log("Validating $rc comps");
            foreach ($r as $row) {
				#calculate each placement prize distribution by percent as float * reward
				$reward = (int)se($row, "current_reward", 0, false);
				$fp = floatval(se($row, "first_place_per", 0, false) / 100);
                $sp = floatval(se($row, "second_place_per", 0, false) / 100);
                $tp = floatval(se($row, "third_place_per", 0, false) / 100);
                $name = se($row, "name", "-", false);
                $fpr = ceil($reward * $fp);
                $spr = ceil($reward * $sp);
                $tpr = ceil($reward * $tp);
                $comp_id = se($row, "id", -1, false);

                try {
                    $r = get_top_scores_for_comp($comp_id, 3);
                    if ($r) {
                        $atleastOne = false;
                        foreach ($r as $index => $row) {
                            $score = se($row, "score", 0, false);
                            $user_id = se($row, "user_id", -1, false);
							#handle transactions for placements
                            if ($index == 0) {
                                if (give_credits($user_id, $fpr,"First place in $name with score of $score")) {
                                    $atleastOne = true;
                                }
                                error_log("User $user_id First place in $name with score of $score");
                            } else if ($index == 1) {
                                if (give_credits($user_id, $spr, "Second place in $name with score of $score")) {
                                    $atleastOne = true;
                                }
                                error_log("User $user_id Second place in $name with score of $score");
                            } else if ($index == 2) {
                                if (give_credits($user_id, $tpr, "Third place in $name with score of $score")) {
                                    $atleastOne = true;
                                }
                                error_log("User $user_id Third place in $name with score of $score");
                            }
                        }
						#this comp has now paid-out: move to calced_comps array
                        if ($atleastOne) {
                            array_push($calced_comps, $comp_id);
                        }
                    } else {
                        error_log("No eligible scores");
                    }
                } catch (PDOException $e) {
                    error_log("Error getting winners: " . var_export($e, true));
                }
            }
        } else {
            error_log("No competitions ready");
        }
    } catch (PDOException $e) {
        error_log("Getting Expired Comps error: " . var_export($e, true));
    }
    //closing calced comps
    if (count($calced_comps) > 0) {
        #IN query to use ? as position so that the array can map everything
		$query = "UPDATE Competitions set did_calc = 1 AND did_payout = 1 WHERE id IN "; 
        $query = "(" . str_repeat("?,", count($calced_comps) - 1) . "?)";
        error_log("Close query: $query");
        $stmt = $db->prepare($query);
        try {
            $stmt->execute($calced_comps);
            $updated = $stmt->rowCount();
            error_log("Marked $updated comps complete and calced");
        } catch (PDOException $e) {
            error_log("Closing valid comps error: " . var_export($e, true));
        }
    } else {
        error_log("No competitions to calc");
    }
    //close invalid comps
    $stmt = $db->prepare("UPDATE Competitions set did_calc = 1 WHERE expires <= CURRENT_TIMESTAMP() AND current_participants < min_participants AND did_calc = 0");
    try {
        $stmt->execute();
        $rows = $stmt->rowCount();
        error_log("Closed $rows invalid competitions");
    } catch (PDOException $e) {
        error_log("Closing invalid comps error: " . var_export($e, true));
    }
    error_log("Done calc winners");
}

/** Adds a participant to a competition. 
 * Reward increases by 50% so long as the organizer is not the one who joined.
*/
function join_competition($user_id, $comp_id, $cost)
{
    $db = getDB();
    $query = "SELECT paid_out, did_calc FROM Competitions WHERE id = :id";
    $stmt = $db->prepare($query);
    $comp = [];
    try {
        $stmt->execute(["id" => $comp_id]);
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($r) {
            $comp = $r;
        }
    } catch (PDOException $e) {
		flash("Error finding competition", "danger");
        error_log("Error finding competition to join $comp_id: " . var_export($e->errorInfo, true));
		return false; 
    }
    if ($comp > 0) {
        //check to make sure the competition has not already paid out
        $paid_out = (int)se($comp, "paid_out", 0, false);
        if ($paid_out) { 
			flash("Error joining competition: competition has already completed.", "danger"); 
			return false; 
		}

        //check to make sure the competition has not expired
        $is_expired = (int)se($comp, "is_expired", 0, false);
        if ($is_expired) { 
			flash("Error joining competition: competition has already expired.", "danger"); 
			return false; 
		}

        //check to make sure the user can afford to enter the competitition
        $balance = get_credits($user_id);
        if ($cost > $balance) { 
			flash("Insufficient funds to join this competition: requires $cost — you have $balance", "danger");
			return false; 
		}

        //insert user into CompetitionParticipants table
        $query = "INSERT INTO CompetitionParticipants (comp_id, user_id) VALUES (:cid, :uid)";
        $stmt = $db->prepare($query);
		$joined = false;
        try {
            $stmt->execute([":cid" => $comp_id, ":uid" => $user_id]);
            $joined = true;
        } catch (PDOException $e) {
            $err = $e->errorInfo;
            if ($err[1] === 1062) {
                flash("You have already joined this competition", "warning");
				return false; 
            } else {
				flash("Error joining competition", "danger");
				error_log("Error joining competition: " . var_export($err, true));
				return false; 
			}
        }   

		$organizer = (int)se($comp, "created_by", 0, false);
        if ($joined && $organizer==0) {
			//charge users for joining if it costs anything
			if ($cost > 0) {
				deduct_credits($user_id, $cost, "Joined Competition #$comp_id");
				//reward increases by 50% for the users that are charged (not organizer)
				$query = "UPDATE Competitions set current_participants = (SELECT IFNULL(COUNT(1),0) FROM CompetitionParticipants WHERE comp_id = :cid), 
						current_reward = IF(join_fee > 0 && current_participants > 0, current_reward + CEILING(join_fee * 0.5), current_reward) WHERE id = :cid";
				$stmt = $db->prepare($query);
				try {
					$stmt->execute([":cid" => $comp_id]);
				} catch (PDOException $e) {
					flash("Error updating competition", "danger");
					error_log("Error updating competition: " . var_export($e->errorInfo, true));
					return false; 
				}
			}
		}
    } else {
		flash("Error: Competition has already expired or paid out.", "danger");
		return false; 
	}
	flash("Successfully entered competition", "success");
}
?>