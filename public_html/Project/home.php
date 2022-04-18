<?php
require(__DIR__ . "/../../partials/nav.php");
?>
<div class="container-fluid">
    <!-- <h1>Home</h1> -->
    <p> </p>
    <h1> <strong> Collect the Green Square  </strong> </h1>
    <h4> Controls: Arrow Keys <h4>
    <p> </p>
    <h4> Player controls a blue square with the objective of collecting green squares. </h4>
    <h4> Points are earned when hitting green squares and lives are deducted by hitting red squares. </h4>
    <h4> The size of the red square increases every ten seconds and the game ends when you run out of lives.</h4>
    <p> </p>
    <h3> <a href="<?php echo get_url('game.php'); ?>">You can play the game here</a> </h3>
    <br> </br> 
    
    <?php
    /* remove logged in requirement
    if (is_logged_in(true)) {
        echo "Welcome home, " . get_username();
        //comment this out if you don't want to see the session variables
        error_log("Session data: " . var_export($_SESSION, true));
    }
    */
    ?>

    <?php
    //this is day which is the default
    require(__DIR__ . "/../../partials/scores_table.php");
    ?>
    <?php
    $duration = "week";
    require(__DIR__ . "/../../partials/scores_table.php");
    ?>
    <?php
    $duration = "month";
    require(__DIR__ . "/../../partials/scores_table.php");
    ?>
    <?php
    $duration = "lifetime";
    require(__DIR__ . "/../../partials/scores_table.php");
    ?>
</div>
<?php
require(__DIR__ . "/../../partials/flash.php");
?>