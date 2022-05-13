<?php
require(__DIR__ . "/../../../partials/nav.php");
if (!has_role("Admin")) {
    flash("You do not have permission to view this page", "warning");
    redirect("home.php");
}
$db = getDB();

$id = se($_GET, "id", -1, false);
if ($id < 1) {
    flash("Invalid competition", "danger");
    redirect("active_competitions.php");
}else{
	$query = "SELECT paid_out FROM Competitions WHERE Competitions.id = $id";
	$stmt = $db->prepare($query);
	try {
		$stmt->execute();
		$r = $stmt->fetch();
		if ($r) {
			$paidout = (int)se($r, "paid_out", 0, false);
			if ($paidout == 1) {
				flash("Competition has already been paid out and cannot be edited.", "warning");
				redirect("active_competitions.php");
			}
		}
	} catch (PDOException $e) {
		flash("There was a problem finding this competition", "danger");
		error_log("List competitions error: " . var_export($e, true));
	}
}

	
if (isset($_POST["name"])) {
	$name = se($_POST, "name", false, false);
    $duration = (int)se($_POST, "duration", 1, false);
	$current_reward = (int)se($_POST, "current_reward", 1, false);
    $join_fee = (int)se($_POST, "join_fee", 0, false);
    $current_participants = (int)se($_POST, "current_participants", 0, false);
    $min_participants = (int)se($_POST, "min_participants", 3, false);
    $min_score = (int)se($_POST, "min_score", 1, false);
    $first_place_per = (int)se($_POST, "first", 60, false);
    $second_place_per = (int)se($_POST, "second", 30, false);
    $third_place_per = (int)se($_POST, "third", 10, false);
	
	$isValid = true;
    //validate
    if (!!$name === false) {
        flash("Competition must have a title", "warning");
        $isValid = false;
    }
    if ($first_place_per + $second_place_per + $third_place_per != 100) {
        flash("First/second/third place earnings must total to 100%", "warning");
        $isValid = false;
    }
    if ($duration < 1 || is_nan($duration)) {
        flash("Duration must be at least 1 day", "warning");
        $isValid = false;
    }
    if ($current_reward < 1) {
        flash("Current reward must be greater than 0", "warning");
        $isValid = false;
    }
    if ($join_fee < 0) {
        flash("Join fee must be greater than 1", "warning");
        $isValid = false;
    }
    if ($min_participants < 3) {
        flash("At least 3 users must be allowed to enter", "warning");
        $isValid = false;
    }
    if ($isValid) {
        $db = getDB();
        $query = "UPDATE Competitions SET
					name = $name,
					duration = $duration,
					expires = DATE_ADD(NOW(), INTERVAL $duration day),
					current_reward = $current_reward,
					join_fee = $join_fee,
					min_participants = $min_participants,
					min_score = $min_score,
					first_place_per = $first_place_per,
					second_place_per = $second_place_per,
					third_place_per = $third_place_per
					WHERE Competitions.id = $id";
        $stmt = $db->prepare($query);
        try {
            $stmt->execute();
			flash("Competition successfully edited", "success");
        } catch (PDOException $e) {
            error_log("Error editing competition: " . var_export($e->errorInfo, true));
            flash("Error editing the competition: " . var_export($e->errorInfo[2]), "danger");
        }
    }
}
?>
<div class="container-fluid">
<h1>Edit Competition</h1>
<form method="POST" autocomplete="off">
	<!-- title -->
	<div class="mb-3">
		<label for="name" class="form-label"> Title </label>
		<input id="name" name="name" class="form-control"/>
	</div>
	<!-- first/second/third distribution % -->
	<div class="row">
		<!-- first -->
		<div class="col"> 
			<label for="first" class="form-label">First Place % Winnings</label>
			<input id="first" name="first" class="form-control form-inline" type="number" min="0" />
		</div>
		<!-- second -->
		<div class="col"> 
			<label for="second" class="form-label">Second Place % Winnings</label>
			<input id="second" name="second" class="form-control form-inline" type="number" placeholder="30" min="0"/> 
		</div>
		<!-- third -->
		<div class="col mb-3">  
			<label for="third" class="form-label">Third Place % Winnings</label>
			<input id="third" name="third" class="form-control form-inline" type="number" placeholder="10" min="0"/>
		</div>
	</div>
	<!-- current reward (>=1) -->
	<div class=>
		<label for="current_reward" class="form-label">Current Reward</label>
		<input id="current_reward" name="current_reward" type="number" class="form-control" onchange="updateCost()" placeholder=">= 1" min="1" />
	</div>
	<!-- cost to join (>=0)-->
	<div class=>
		<label for="join_fee" class="form-label">Cost to Join</label>
		<input id="join_fee" name="join_fee" type="number" class="form-control" onchange="updateCost()" placeholder=">= 0" min="0" />
	</div>
	<!-- duration (>=1)-->
	<div class=>
		<label for="duration" class="form-label">Duration (in Days)</label>
		<input id="duration" name="duration" type="number" class="form-control" placeholder=">= 1" min="1" />
	</div>
	<!-- min score to qualify (>=1) -->
	<div class=>
		<label for="min_score" class="form-label">Minimum Score to Qualify</label>
		<input id="min_score" name="min_score" type="number" class="form-control" placeholder=">= 1" min="1" />
	</div>
	<!-- min participants (>=3) -->
	<div class=>
		<label for="min_participants" class="form-label">Mininum Participants</label>
		<input id="min_participants" name="min_participants" type="number" class="form-control" placeholder=">= 3" min="3" />
	</div>
	<!-- submit -->
	<div class="mb-3">
		<input type="submit" value="Update Competition" class="btn btn-primary"/>
	</div>
</form>

</div>
<?php require(__DIR__ . "/../../../partials/flash.php"); ?>