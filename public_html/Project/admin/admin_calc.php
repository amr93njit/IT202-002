<?php
//note we need to go up 1 more directory
require(__DIR__ . "/../../../partials/nav.php");

if (!has_role("Admin")) {
    flash("You do not have permission to view this page", "warning");
    redirect("home.php");
}
calc_winners();
require(__DIR__ . "/../../../partials/flash.php");