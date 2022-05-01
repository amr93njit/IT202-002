<?php
/**  Calculates and shows top scores for a competition
 * A user can only get one placement in the competition
 */
function get_top_scores_for_comp($comp_id, $limit=10)
{
    $db = getDB();
    #select entire scores table (score, user_id, time created) and use DENSE_RANK() to partition scores data into "ranks" and order by descending order.
    #ranks identify the placement of the user, that is a user with the highest score has a rank of 1
    $query = "SELECT * FROM (SELECT s.score, s.user_id, s.created, DENSE_RANK() OVER (PARTITION BY s.user_id ORDER BY s.score desc) as `rank` FROM Scores s
    #add data from other related competition tables.
    JOIN CompetitionParticipants cp ON cp.user_id = s.user_id
    JOIN Competitions c ON cp.comp_id = c.id AND min_score
    #count only scores made during the users time since joining competition: do not carry in scores. al
    WHERE c.id = :cid AND s.score > c.min_score AND s.created BETWEEN cp.created AND c.expires
    #sort by rank descending, where rank begins at 1 and scores that exceed the min_score
    ) AS t WHERE `rank` = 1 ORDER BY score DESC LIMIT :limit";
    $stmt = $db->prepare($query);
    $scores = [];
    try {
        $stmt->bindValue(":cid", $comp_id, PDO::PARAM_INT);
        $stmt->bindValue(":limit", $limit, PDO::PARAM_INT);
        $stmt->execute();
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $scores = $r;
        }
    } catch (PDOException $e) {
        flash("There was a problem fetching scores, please try again later", "danger");
        error_log("List competition scores error: " . var_export($e, true));
        return false;
    }
    return $scores;
}

/* Gets the top 10 scores for valid durations (day, week, month, lifetime) */
function get_top_10($duration = "day")
{
    $d = "day";
    //be very careful passing in a variable directly to SQL, I ensure it's a specific value from the in_array() above
    //Note: This is residual from using Option 1 and INTERVAL to generate the date offsets
    //but it's still good to keep here
    if (in_array($duration, ["day", "week", "month", "lifetime"])) {
        //variable is safe
        $d = $duration;
    }
    $db = getDB();
    $query = "SELECT user_id, username, score, Scores.created from Scores join Users on Scores.user_id = Users.id";
    if ($d === "day") {
        $query .= " WHERE Scores.created >= addtime(CURDATE(), '00:00:00') AND Scores.created <= addtime(CURDATE(), '23:59:59')";
    } else if ($d === "week") {
        //https://stackoverflow.com/a/42540446
        $query .= " WHERE 
        Scores.created >= addtime(date_add(curdate(), interval  -WEEKDAY(curdate()) day), '00:00:00')
        AND
        Scores.created <= addtime(date_add(date_add(curdate(), interval  -WEEKDAY(curdate())-1 day), interval 7 day), '23:59:59')";
    } else if ($d === "month") {
        //https://www.mysqltutorial.org/mysql-last_day/
        $query .= " WHERE 
        Scores.created >=  addtime(dATE_SUB(curdate(),INTERVAL DAYOFMONTH(curdate())-1 DAY), '00:00:00')
        AND
        Scores.created <= addtime(LAST_DAY(CURDATE()), '23:59:59')";
    }
    //remember to prefix any ambiguous columns (Users and Scores both have created, modified, and id columns)
    $query .= " ORDER BY score Desc, Scores.created desc LIMIT 10"; //newest of the same score is ranked higher
    error_log("get top 10 query: $query");
    $stmt = $db->prepare($query);
    $results = [];
    try {
        $stmt->execute();
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            $results = $r;
        }
    } catch (PDOException $e) {
        error_log("Error fetching scores for $d: " . var_export($e->errorInfo, true));
        flash("Error fetching top 10 list", "danger");
    }
    return $results;
}

function get_best_score($user_id)
{
    $query = "SELECT score from Scores WHERE user_id = :id ORDER BY score desc LIMIT 1";
    $db = getDB();
    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":id" => $user_id]);
        $r = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($r) {
            return (int)se($r, "score", 0, false);
        }
    } catch (PDOException $e) {
        error_log("Error fetching best score for user $user_id: " . var_export($e->errorInfo, true));
        flash("Error looking up best score", "danger");
    }
    return 0;
}

function get_latest_scores($user_id, $limit = 10)
{
    //I'm capping my limit to 1-50
    if ($limit < 1 || $limit > 50) {
        $limit = 10;
    }
    $query = "SELECT score created from Scores where user_id = :id ORDER BY created desc LIMIT :limit";
    $db = getDB();
    //IMPORTANT: this is required for the execute to set the limit variables properly
    //otherwise it'll convert the values to a string and the query will fail since LIMIT expects only numerical values and doesn't cast
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    //END IMPORTANT

    $stmt = $db->prepare($query);
    try {
        $stmt->execute([":id" => $user_id, ":limit" => $limit]);
        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($r) {
            return $r;
        }
    } catch (PDOException $e) {
        error_log("Error getting latest $limit scores for user $user_id: " . var_export($e->errorInfo, true));
        flash("Error getting latest scores", "danger");
    }
    return [];
}