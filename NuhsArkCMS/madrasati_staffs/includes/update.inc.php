<?php

if(isset($_POST["update"])) {
	$icno = $_POST["ICNo"];
	$name = $_POST["Name"];
	$password = $_POST["Password"];
	
	require_once 'connect.inc.php';
	require_once 'functions.inc.php';
	
	if (emptyInputUpdate($name, $password) !== false) {
		header("location: ../staff_manage-account_update-account.php?error=emptyinput");
		exit();
	}
	
	updateStaff($con, $name, $password, $icno);
}
else {
	header("location: ../staff_manage-account_update-account.php");
	exit();
}