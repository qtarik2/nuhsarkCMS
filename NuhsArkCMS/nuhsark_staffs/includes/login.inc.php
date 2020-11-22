<?php

if(isset($_POST["submit"])) {
	require_once 'functions.inc.php';
	require_once 'connect.inc.php';
	
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);
	
	
	
	
	if(emptyInputLogin($username, $password) !== false) {
		header("location: ../login.php?error=emptyinput");
		exit();
	}
	
	loginUser($con, $username, $password);
}
else {
	header("location: ../login.php");
	exit();
}