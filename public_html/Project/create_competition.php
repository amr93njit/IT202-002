<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);

if (isset($_POST["name"])) {
    $name = se($_POST, "name", false, false);
    $duration = (int)se($_POST, "duration", 1, false);
    $starting_reward = (int)se($_POST, "starting_reward", 1, false);
    $join_fee = (int)se($_POST, "join_fee", 0, false);
    $current_participants = (int)se($_POST, "current_participants", 0, false);
    $min_participants = (int)se($_POST, "min_participants", 3, false);
    $min_score = (int)se($_POST, "min_score", 1, false);
    $first_place_per = (int)se($_POST, "first", 60, false);
    $second_place_per = (int)se($_POST, "second", 30, false);
    $third_place_per = (int)se($_POST, "third", 10, false);
    $cost = $starting_reward;
	$cost++;

    $isValid = true;
    //validate
    $balance = get_credits(get_user_id());
    if ($cost < 1) { 
        flash("Invalid cost", "danger");
        $isValid = false;
    }
    if ($cost > $balance) {
        flash("Insufficient funds to create this competition: requires $cost — you have $balance", "warning");
        $isValid = false;
    }
    //if (empty($name)) {
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
    if ($starting_reward < 1) {
        flash("Starting reward must be greater than 0", "warning");
        $isValid = false;
    }
    if ($join_fee < 0) {
        flash("Invalid join fee", "warning");
        $isValid = false;
    }
    if ($min_participants < 3) {
        flash("At least 3 users must be allowed to enter", "warning");
        $isValid = false;
    }
    if ($isValid) {
        $db = getDB();
        $query = "INSERT INTO Competitions (name, duration, expires, current_reward, starting_reward, join_fee, current_participants, min_participants, paid_out, did_calc, min_score, first_place_per, second_place_per, third_place_per, cost_to_create, created_by)
                  VALUES (:n, :d, DATE_ADD(NOW(), INTERVAL $duration day), :cr, :sr, :jf, :cp, :mp, :po, :dc, :ms, :one, :two, :three, :cost, :cb)";
        $stmt = $db->prepare($query);
        try {
            $stmt->execute([
                ":n" => $name,
                ":d" => $duration,
                ":cr" => $starting_reward,
                ":sr" => $starting_reward,
                ":jf" => $join_fee,
                ":cp" => 1, #the 1 participant is the competition organizer
                ":mp" => $min_participants,
                ":po" => 0,
                ":dc" => 0, 
                ":ms" => $min_score,
                ":one" => $first_place_per,
                ":two" => $second_place_per,
                ":three" => $third_place_per,
                ":cost" => $cost,
                ":cb" => get_user_id()
            ]);
            $comp_id = (int)$db->lastInsertId();
            if ($comp_id > 0) {
                deduct_credits(get_user_id(), $cost, "Created Competition");
                join_competition(get_user_id(), $comp_id, 0); 
                flash("Successfully created competition", "success");
            }
        } catch (PDOException $e) {
            error_log("Error creating competition: " . var_export($e->errorInfo, true));
            flash("Error creating the competition: " . var_export($e->errorInfo[2]), "danger");
        }
    }
}
?>

<div class="container-fluid">
    <h1>Create Competition</h1>
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
				<input id="first" name="first" class="form-control form-inline" type="number" placeholder="60" min="0"/>
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
        <!-- starting reward (>=1) -->
        <div class=>
            <label for="starting_reward" class="form-label">Starting Reward</label>
            <input id="starting_reward" name="starting_reward" type="number" class="form-control" onchange="updateCost()" placeholder=">= 1" min="1" />
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
            <input type="submit" value="Create Competition (Cost: 2)" class="btn btn-primary"/>
        </div>
    </form>
    <script>
        function updateCost() {
            let starting = parseInt(document.getElementById("starting_reward").value || 0) + 1;
            let join = parseInt(document.getElementById("join_fee").value || 0);
            if (join < 0) {
                join = 1;
            }
            let cost = starting + join;
            document.querySelector("[type=submit]").value = `Create Competition (Cost: ${cost})`;
        }
    </script>
</div>

<?php
require(__DIR__ . "/../../partials/flash.php");
?>