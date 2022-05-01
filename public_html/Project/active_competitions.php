<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$db = getDB();

//handle join
if (isset($_POST["join"])) {
    $user_id = get_user_id();
    $comp_id = se($_POST, "comp_id", 0, false);
    $cost = se($_POST, "cost", 0, false);
    $balance = get_credits(get_user_id());
    join_competition($user_id, $comp_id, $cost);
}
//table data
$query = "SELECT Competitions.id, name, duration, expires, current_reward, starting_reward, join_fee, current_participants, 
			min_participants, paid_out, did_calc, min_score, first_place_per, second_place_per, third_place_per, 
			cost_to_create, created_by, IF(comp_id is null, 0, 1) AS joined FROM Competitions 
		LEFT JOIN (SELECT * FROM CompetitionParticipants WHERE user_id = :uid) AS cp ON cp.comp_id = Competitions.id
		WHERE expires > current_timestamp() AND paid_out < 1 AND did_calc < 1
		ORDER BY expires ASC LIMIT 10";
$stmt = $db->prepare($query);
$results = [];
try {
    $stmt->execute([":uid" => get_user_id()]);
    $r = $stmt->fetchAll();
    if ($r) {
        $results = $r;
    }
} catch (PDOException $e) {
    flash("There was a problem fetching competitions, please try again later", "danger");
    error_log("List competitions error: " . var_export($e, true));
}

?>
<div class = "container-fluid">
	<div class= "card bg-transparent border-primary">
		<div class="card-text">
			<h1 class="card-header mb-3" style = "background-color:#319e9e;"> Active Competitions</h1>
			<?php if (count($results) > 0) : ?>
				<table class="table border-secondary mb-3">
					<thead>
						<tr>
							<th> Name </th>
							<th> Expires </th>
							<th> Reward </th>
							<th> Participants </th>
							<th> Min Score </th>
							<th> Actions </th> 
						</tr>
					</thead>
					<tbody>
						<?php foreach ($results as $row) : ?>
							<tr>
								<td><?php se($row, "name"); ?></td>
								<td><?php se($row, "expires"); ?></td>
								<td><?php se($row, "current_reward"); ?><br>Payout: <?php se($row, "first_place_per", "-"); echo "-"; se($row, "second_place_per", "-"); echo "-"; se($row, "third_place_per", "-") ?></td>
								<td><?php se($row, "current_participants"); ?>/<?php se($row, "min_participants"); ?></td>
								<td><?php se($row, "min_score"); ?></td>
								<td>
									<?php if (se($row, "joined", 0, false)) : ?>
										<button class="btn btn-primary disabled" onclick="event.preventDefault()" disabled>Already Joined</button>
									<?php else : ?>
										<form method="POST">
											<input type="hidden" name="comp_id" value="<?php se($row, 'id'); ?>" />
											<input type="hidden" name="cost" value="<?php se($row, "join_fee", 0); ?>" />
											<input type="submit" name="join" class="btn btn-primary" value="Join (Cost: <?php se($row, "join_fee", 0) ?>)" />
										</form>
									<?php endif; ?>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			<?php else : ?>
				<p>There are no active competitions.</p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>