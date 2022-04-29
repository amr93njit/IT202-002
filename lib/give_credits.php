<?php

/**
 * Points should be passed as a positive value.
 * $losing should be where the points are coming from
 * $gaining should be where the points are going
 */
function give_credits($userid, $credits, $reason)
{
    if ($credits > 0) {
        $query = "INSERT INTO CreditsHistory (user_id, credit_diff, reason) VALUES (:u, :c, :r),";
        $params[":u"] = $userid;
        $params[":c"] = ($credits);
        $params[":r"] = $reason;
        
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute($params);
            return true;
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("There was an error transfering credits", "danger");
            //return false;
        }

        $query = "UPDATE Users set credits = (SELECT IFNULL(SUM(credit_diff), 0) from CreditsHistory WHERE user_id = :user_id) WHERE user_id = :user_id";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":user_id" => get_user_id()]);
            //get_or_create_account(); //refresh session data
            return true;
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("Error refreshing credit balance", "danger");
            return false;
        }
    }
    return false;
}
