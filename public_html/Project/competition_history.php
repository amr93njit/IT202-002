<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
$db = getDB();
$user_id = (int)se($_GET, "id", get_user_id(), false);

//if a different user tries to access this page
if ($user_id != get_user_id()):
	flash("You do not have permission to view this user's competition history.");
	redirect("home.php");
endif;

$base_query = "SELECT Competitions.id, name, duration, expires, current_reward, starting_reward, join_fee, current_participants, 
				min_participants, paid_out, did_calc, min_score, first_place_per, second_place_per, third_place_per, 
				cost_to_create, created_by, IF(comp_id is null, 0, 1) AS joined FROM Competitions
			   LEFT JOIN (SELECT * FROM CompetitionParticipants WHERE user_id = :uid) AS cp ON cp.comp_id = Competitions.id";	   
$total_query = "SELECT count(1) AS total FROM Competitions";
$query = " ORDER BY expires DESC";

$per_page = 10;
paginate($total_query . $query, [], $per_page);

$query .= " LIMIT :offset, :count";

$stmt = $db->prepare($base_query . $query);
$stmt->bindValue(":uid", get_user_id(), PDO::PARAM_INT);
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
    flash("There was a problem fetching competitions, please try again later", "danger");
    error_log("List competitions error: " . var_export($e, true));
}


?>
<div class = "container-fluid">
	<div class= "card bg-transparent border-primary">
		<div class="card-text">
			<h1 class="card-header mb-3" style = "background-color:#319e9e;"> Competition History</h1>
			<?php if (count($results) > 0) : ?>
				<table class="table border-secondary mb-3">
					<thead>
						<tr>
							<th> Name </th>
							<th> Expires </th>
							<th> Participants </th>
							<th> Reward </th>
							<th> Created By You </th>
							<th> Scores </th> 
						</tr>
					</thead>
					<tbody>
						<?php foreach ($results as $row) : ?>
							<tr>
								<td><?php se($row, "name"); ?></td>
								<td><?php if ($row["expires"] > (date("Y-m-d", time()))):
									se($row, "expires"); 
									else: echo("Expired"); 
								endif; ?></td>
								<td><?php se($row, "current_participants"); ?></td>
								<td><?php se($row, "current_reward"); ?><br>Payout: <?php se($row, "first_place_per", "-"); echo "-"; se($row, "second_place_per", "-"); echo "-"; se($row, "third_place_per", "-") ?></td>
								<td><?php if ($row["created_by"] == get_user_id()):
									echo("Yes"); else: echo ("No"); 
								endif; ?></td>
								<td>
									<a class="btn btn-secondary" href="view_competition.php?id=<?php se($row, 'id'); ?>">View</a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			<?php else : ?>
				<p>You have not entered any competitions.</p>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php
require(__DIR__ . "/../../partials/pagination.php");
require(__DIR__ . "/../../partials/flash.php");
?>