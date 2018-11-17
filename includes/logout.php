<?php
include 'dbh.inc.php';
if (isset($_GET['logout'])) {

	session_start();
	session_unset();
	session_destroy();
	header("Location: ../admin_login.php?logout=success");

	
	exit();
	  
}