<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$user_id = (int)se($_GET, "id", get_user_id(), false);
$isMe = $user_id == get_user_id();
$isEdit = isset($_GET["edit"]);

$db = getDB();
?>
<?php
if (isset($_POST["save"]) && $isMe && $isEdit) {
    $email = se($_POST, "email", null, false);
    $username = se($_POST, "username", null, false);
    $vis = se($_POST, "visibility", 0, false);
    $params = [":email" => $email, ":username" => $username, ":id" => get_user_id(), ":vis" => $vis];
    $hasError = false;
    //sanitize
    $email = sanitize_email($email);
    //validate
    if (!is_valid_email($email)) {
        flash("Invalid email address", "danger");
        $hasError = true;
    }
    if (!is_valid_username($username)) {
        flash("Username must only contain 3-16 characters a-z, 0-9, _, or -", "danger");
        $hasError = true;
    }
    if (!$hasError) {
        $db = getDB();
        $stmt = $db->prepare("UPDATE Users set email = :email, username = :username, visibility = :vis where id = :id");
        try {
            $stmt->execute($params);
            flash("Profile saved", "success");
        } catch (Exception $e) {
            users_check_duplicate($e->errorInfo);
        }
    }

    //check/update password
    $current_password = se($_POST, "currentPassword", null, false);
    $new_password = se($_POST, "newPassword", null, false);
    $confirm_password = se($_POST, "confirmPassword", null, false);
    if (!empty($current_password) && !empty($new_password) && !empty($confirm_password)) {
        $hasError = false;
        if (!is_valid_password($password)) {
            flash("Password too short", "danger");
            $hasError = true;
        }
        if (!$hasError) {
            if ($new_password === $confirm_password) {
                //validate current
                $stmt = $db->prepare("SELECT password from Users where id = :id");
                try {
                    $stmt->execute([":id" => get_user_id()]);
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);
                    if (isset($result["password"])) {
                        if (password_verify($current_password, $result["password"])) {
                            $query = "UPDATE Users set password = :password where id = :id";
                            $stmt = $db->prepare($query);
                            $stmt->execute([
                                ":id" => get_user_id(),
                                ":password" => password_hash($new_password, PASSWORD_BCRYPT)
                            ]);

                            flash("Password reset", "success");
                        } else {
                            flash("Current password is invalid", "warning");
                        }
                    }
                } catch (Exception $e) {
                    echo "<pre>" . var_export($e->errorInfo, true) . "</pre>";
                }
            } else {
                flash("New passwords don't match", "warning");
            }
        }
    }
}
//select fresh data from table
$stmt = $db->prepare("SELECT id, email, username, visibility, created FROM Users WHERE id = :id LIMIT 1");
$isVisible = false;
try {
    $stmt->execute([":id" => $user_id]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($user) {
        if ($isMe) {
            $_SESSION["user"]["email"] = $user["email"];
            $_SESSION["user"]["username"] = $user["username"];
        }
        if (se($user, "visibility", 0, false) > 0) {
            $isVisible = true;
        }
        $email = se($user, "email", "", false);
        $username = se($user, "username", "", false);
        $joined = se($user, "created", "", false);
    } else {
        flash("User doesn't exist", "danger");
    }
} catch (Exception $e) {
    flash ("error", "danger");
}

?>


<div class="container-fluid">
    <h1>Profile</h1>
    <?php if ($isMe && $isEdit) : ?>
        <?php
        $email = get_user_email();
        $username = get_username();
        ?>
        <a href="<?php echo get_url("profile.php"); ?>">View Profile</a>
        <form method="POST" onsubmit="return validate(this);">
            <p> </p>
            <div class="mb-5">
                <h5> <strong> Toggle Profile Visibility </strong> </h5>
                <p> </p>  
                <?php if ($isVisible) : ?>
                    <label class = "btn btn-success"> 
                        <input type = "radio" name = "visibility" id = "visibility" value="1" checked> Public
                    </label>
                    <label class = "btn btn-secondary">
                        <input type = "radio" name = "visibility" id = "visibility" value="0"> Private
                    </label>
                <?php else : ?>
                    <label class = "btn btn-success"> 
                        <input type = "radio" name = "visibility" id = "visibility" value="1"> Public
                    </label>
                    <label class = "btn btn-secondary"> 
                        <input type = "radio" name = "visibility" id = "visibility" value="0" checked> Private
                    </label>
                <?php endif; ?>
            </div>
            <h5> <strong> Change Email/Username </strong> </h5>
            <p> </p>
            <div class="mb-3">
                <label class="form-label" for="email"> <h5> Email </h5> </label>
                <input class="form-control" type="email" name="email" id="email" value="<?php se($email); ?>" />
            </div>
            <div class="mb-5">
                <label class="form-label" for="username"> <h5> Username</h5> </label>
                <input class="form-control" type="text" name="username" id="username" value="<?php se($username); ?>" />
            </div>
            <!-- DO NOT PRELOAD PASSWORD -->
            <div class="mb-3"> <h5> <strong> Password Reset </strong></h5> </div>
            <div class="mb-3">
                <label class="form-label" for="cp"> <h5> Current Password </h5> </label>
                <input class="form-control" type="password" name="currentPassword" id="cp" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="np"> <h5> New Password </h5> </label>
                <input class="form-control" type="password" name="newPassword" id="np" />
            </div>
            <div class="mb-3">
                <label class="form-label" for="conp"> <h5> Confirm Password </h5> </label>
                <input class="form-control" type="password" name="confirmPassword" id="conp" />
            </div>
            <input type="submit" class="mt-3 btn btn-primary" value="Update Profile" name="save" />
        </form>
        <?php else : ?>
        <?php if ($isMe) : ?>
            <h5> <a href="?edit">Edit Profile</a> </h5>
            <h5> <a href=<?php echo get_url("competition_history.php"); ?>>View Competition History</a> </h5>
        <?php endif; ?>
        <?php if ($isVisible || $isMe) : ?>
            <div> 
                <h2> <strong> <?php se($username); ?> </h2> </strong>
            </div>
            <p> </p>
            <div> 
                <h5> Credits: <?php echo get_credits($user_id); ?> </h5>
            </div>
            <div>
                <h5> Best Score: <?php echo get_best_score($user_id); ?> </h5> 
            </div>
            <div>
                <h5> Joined: <?php se($joined); ?>  </h5>
            </div>
            <div>
                <?php
                /*$duration = "latest";
                //Note: $user_id will be defined prior to this require() so should use whatever is set at the top
                /require(__DIR__ . "/../../partials/scores_table.php");
                I couldn't get it to work in partials so it's being done entirely over here now :( */
                    $db = getDB();
                    $base_query = "SELECT score, created FROM Scores WHERE user_id = :id"; 
                    $total_query = "SELECT count(1) AS total FROM Scores";
                    $query = " ORDER BY created DESC";
                    $stmt = $db->prepare($total_query . $query);
                    $per_page = 10; 
                    paginate($total_query . $query, [], $per_page);
                    $query .= " LIMIT :offset, :count";
                    $stmt = $db->prepare($base_query . $query);
                    $stmt->bindValue(":id", $user_id, PDO::PARAM_INT);
                    $stmt->bindValue(":offset", $offset, PDO::PARAM_INT);
                    $stmt->bindValue(":count", $per_page, PDO::PARAM_INT);
                    $results = [];
                    try {
                        $stmt->execute();
                        $r = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        if ($r) {
                            $results = $r;
                        }
                    } catch (PDOException $e) {
                        error_log("Error getting latest scores for user $user_id: " . var_export($e->errorInfo, true));
                        flash("Error getting latest scores", "danger");
                    }
                    ?>
                    <div class = "container-fluid">
                        <div class= "card bg-transparent border-primary">
                            <div class="card-text">
                                <h1 class="card-header mb-3" style = "background-color:#319e9e;"> Latest Scores</h1>
                                <?php if (count($results) > 0) : ?>
                                    <table class="table border-secondary mb-3">
                                        <thead>
                                            <tr>
                                                <th> Score </th>
                                                <th> Created </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($results as $row) : ?>
                                                <tr>
                                                    <td><?php se($row, "score"); ?></td>
                                                    <td><?php se($row, "created"); ?></td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                <?php else : ?>
                                    <p>This user has no scores to display.</p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
            </div>
            <?php if ($isMe && !$isVisible) : ?>
                <h4> <strong> This page is private and is only visible to you. </strong> <h4> 
            <?php endif; ?>    
        <?php else : ?>
            Profile is private
            <?php
            flash("Profile is private", "warning");
            ?>
        <?php endif; ?>
    <?php endif; ?>
</div>

<script>
    function validate(form) {
        let pw = form.newPassword.value;
        let con = form.confirmPassword.value;
        //client side validation....
        let isValid = true;
        if (!isValidPassword(password)){
            flash("Password too short", "danger");
            isValid = false;
        }
        //example of using flash via javascript
        //find the flash container, create a new element, appendChild
        if (!isEqual(pw, con)) {
            flash("Password and confirm password must match", "warning");
            isValid = false;
        }
        return isValid;
    }
</script>
<?php
require_once(__DIR__ . "/../../partials/flash.php");
require(__DIR__ . "/../../partials/pagination.php");
?>