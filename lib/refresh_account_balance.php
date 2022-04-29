<?php
function refresh_account_balance()
{
    //TODO: Change code to better fit arcade requirements
    if (is_logged_in()) {
        //cache account balance via RM_Gem_History history
        $query = "UPDATE Users set balance = (SELECT IFNULL(SUM(diff), 0) from CreditHistory WHERE src = :src) where id = :src";
        $db = getDB();
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([":src" => get_user_id()]);
            //get_or_create_account(); //refresh session data
        } catch (PDOException $e) {
            error_log(var_export($e->errorInfo, true));
            flash("Error refreshing credit balance", "danger");
        }
    }
}