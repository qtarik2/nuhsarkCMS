<?php

if(isset($_POST["submit"])) {
	
	$name = $_POST["name"];
	$email = $_POST["email"];
	$username = $_POST["uid"];
	$password = $_POST["password"];
	$passwordRepeat = $_POST["passwordRepeat"];
	
	require_once 'connect.inc.php';
	require_once 'functions.inc.php';
	
	if (emptyInputSignup($name, $email, $username, $password, $passwordRepeat) !== false) {
		header("location: ../signup.php?error=emptyinput");
		exit();
	}
	if (invalidUid($username) !== false) {
		header("location: ../signup.php?error=invaliduid");
		exit();
	}
	if (invalidEmail($email) !== false) {
		header("location: ../signup.php?error=invalidemail");
		exit();
	}
	if (passwordMatch($password, $passwordRepeat) !== false) {
		header("location: ../signup.php?error=passwords dont match");
		exit();
	}
	if (uidExists($con, $username, $email) !== false) {
		header("location: ../signup.php?error=username taken");
		exit();
	}
	
	createUser($con, $name, $email, $username, $password);
}
else {
	header("location: ../Signup.php");
	exit();
}