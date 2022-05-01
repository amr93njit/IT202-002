<?php
//requires a duration to be set
if (!isset($duration)) {
    $duration = "day"; //default to day
}

if (in_array($duration, ["day", "week", "month", "lifetime"])) {
    $results = get_top_10($duration);
} else if ($duration === "latest") {
    if (!isset($user_id)) {
        $user_id = get_user_id();
    }
    $results = get_latest_scores($user_id);
     
} else if ($duration === "competition") {
    $results = get_top_scores_for_comp($comp_id);
}
switch ($duration) {
    case "day":
        $title = "Top Scores Today";
        break;
    case "week":
        $title = "Top Scores This Week";
        break;
    case "month":
        $title = "Top Scores This Month";
        break;
    case "lifetime":
        $title = "All Time Top Scores";
        break;
    case "latest":
        $title = "Latest Scores";
        break;
    case "competition":
        
        break;
    default:
        $title = "Invalid Scoreboard";
        break;
}
?>
<div class="card bg-transparent border-dark">
    <div class="card-text">
        <table class="table border-secondary mb-3">
            <?php if (count($results) == 0) : ?>
                <h4 class="card-header mb-3" style="background-color:#319e9e;" > <?php se($title); ?> </h4>
                <p>No results to show</p> 
            <?php else : ?>
                <h4 class="card-header mb-3" style="background-color:#319e9e;"> <?php se($title); ?> </h4>
                <?php foreach ($results as $index => $record) : ?>
                    <?php if ($index == 0) : ?>
                        <thead>
                            <?php foreach ($record as $column => $value) : ?>
                                <th><?php se($column); ?></th>
                            <?php endforeach; ?>
                        </thead>
                    <?php endif; ?>
                    <tr>
                        <?php foreach ($record as $column => $value) : ?>
                            <td><?php se($value, null, "N/A"); ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>        
    </div>
</div>
