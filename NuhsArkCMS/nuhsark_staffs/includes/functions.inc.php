<?php

function emptyInputSignup($name, $email, $username, $password, $passwordRepeat) {
	$result;
	if(empty($name) || empty($email) || empty($username) || empty($password) || empty($passwordRepeat)) {
		$result = true;
	}
	else {
		$result = false;
	}
	
	return $result;
}

function invalidUid($username) {
	$result;
	if(!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		$result = true;
	}
	else {
		$result = false;
	}
	
	return $result;
}

function invalidEmail($email) {
	$result;
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else {
		$result = false;
	}
	
	return $result;
}

function passwordMatch($password, $passwordRepeat) {
	$result;
	if($password !== $passwordRepeat) {
		$result = true;
	}
	else {
		$result = false;
	}
	
	return $result;
}

function uidExists($con, $username, $email) {
	$sql = "SELECT * FROM staff WHERE ICNo = ? OR EmailAddress = ?;";
	$stmt = mysqli_stmt_init($con);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}
	mysqli_stmt_bind_param($stmt, "ss", $username, $email);
	mysqli_stmt_execute($stmt);
	
	$resultData = mysqli_stmt_get_result($stmt);
	
	if($row = mysqli_fetch_assoc($resultData)) {
		return $row;
	}
	else {
		$result = false;
		return $result;
	}
	mysqli_stmt_close($stmt);
}

function createUser($con, $name, $email, $username, $password) {
	$sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPassword) VALUE (?, ?, ?, ?);";
	$stmt = mysqli_stmt_init($con);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../signup.php?error=stmtfailed");
		exit();
	}
	
	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
	
	mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $username, $hashedPassword);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../signup.php?error=none");
	exit();
}

function emptyInputLogin($username, $password) {
	$result;
	if(empty($username) || empty($password)) {
		$result = true;
	}
	else {
		$result = false;
	}
	
	return $result;
}

// function emptyInputLogin($username) {
	// $result;
	// if(empty($username)) {
		// $result = true;
	// }
	// else {
		// $result = false;
	// }
	
	// return $result;
// }

function loginUser($con, $username, $password) {
	$uidExists = uidExists($con, $username, $username);
	
	if($uidExists === false) {
		header("location: ../login.php?error=wronglogin");
		exit();
	}
	
	$passwordHashed = $uidExists["Password"];	
	$checkPassword = password_verify($password, $passwordHashed);
	
	if($checkPassword === false) {
		header("location: ../login.php?error=wrongpassword");
		exit();
	}
	if($checkPassword === true) {
		session_start();
		
		$_SESSION["ID"] = $uidExists["ID"];
		$_SESSION["username"] = $uidExists["ICNo"];
		$_SESSION["name"] = $uidExists["Name"];
		$_SESSION['start'] = time(); // Taking now logged in time.
        header("location: ../index.php");
		exit();
	}
}

// function loginUser($con, $username) {
	// $uidExists = uidExists($con, $username, $username);
	
	// if($uidExists === false) {
		// header("location: ../login.php?error=wronglogin");
		// exit();
	// }	
	// else {
		// session_start();
		
		// $_SESSION["ID"] = $uidExists["ID"];
		// $_SESSION["username"] = $uidExists["ICNo"];
		// header("location: ../index.php");
		// exit();
	// }
// }

function emptyInputUpdate($name, $password) {
	$result;
	if(empty($name) || empty($password)) {
		$result = true;
	}
	else {
		$result = false;
	}
	
	return $result;
}

function updateStaff($con, $name, $password, $icno) {
	$sql = "UPDATE staff SET Name= ?, Password= ? WHERE ICNo = ?;";
	$stmt = mysqli_stmt_init($con);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		header("location: ../?error=stmtfailed");
		exit();
	}
	
	$hashedPassword = password_hash($password, PASSWORD_DEFAULT);
	
	mysqli_stmt_bind_param($stmt, "sss", $name, $hashedPassword, $icno);
	mysqli_stmt_execute($stmt);
	mysqli_stmt_close($stmt);
	header("location: ../?error=none");
	exit();
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}