<?php 

session_start();

session_unset();

session_destroy();

header("Location: http://localhost/dashboard/AJAX_PHP/core.php");
die();

?>