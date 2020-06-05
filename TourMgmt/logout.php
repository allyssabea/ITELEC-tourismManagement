<?php
session_start();
$_SESSION['phone'] == null;
unset($_SESSION['phone']);
session_destroy();
header('Location: /TourMgmt/login.php');
?>