<?php
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