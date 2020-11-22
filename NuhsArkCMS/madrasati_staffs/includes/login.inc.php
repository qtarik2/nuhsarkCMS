<?php

if(isset($_POST["submit"])) {
	
	$username = $_POST["username"];
	$password = $_POST["password"];
	
	require_once 'connect.inc.php';
	require_once 'functions.inc.php';
	
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