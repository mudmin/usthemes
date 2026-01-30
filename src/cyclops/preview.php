<?php
$template_override = "cyclops";
require_once '../../../users/init.php';
require_once $abs_us_root.$us_url_root.'users/includes/template/prep.php';
if (!isset($user) || !hasPerm(2)) {
  die("You do not have permission to be here");
}
require_once $abs_us_root . $us_url_root . "users/includes/bootstrap5_demo.php";
require_once $abs_us_root.$us_url_root.'users/includes/html_footer.php';
