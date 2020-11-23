<?php

if(isset($_POST["submit"])) {
	$selector = $_POST["selector"];
	$validator = $_POST["validator"];
	$password = $_POST["password"];
	$passwordRepeat = $_POST["passwordRepeat"];
	
	if(empty($password) || empty($passwordRepeat)) {
		header("Location: ../create-new-password.php?newpassword=empty");
		exit();
	}
	elseif($password != $passwordRepeat) {
		header("Location: ../create-new-password.php?newpassword=passwordnotsame");
		exit();
	}
	
	$currentDate = date("U");
	
	require_once "connect.inc.php";
	
	$sql = "SELECT * FROM PwdReset WHERE pwdResetSelector = ? AND pwdResetExpires >= ?";
	$stmt = mysqli_stmt_init($con);
	if(!mysqli_stmt_prepare($stmt, $sql)) {
		echo "There was an error1!";
		exit();
	}
	else {
		mysqli_stmt_bind_param($stmt, "ss", $selector, $currentDate);
		mysqli_stmt_execute($stmt);
		
		$result = mysqli_stmt_get_result($stmt);
		if(!$row = mysqli_fetch_assoc($result)) {
			echo "You need to re-submit your reset request.";
			exit();
		}
		else {
			$tokenBin = hex2bin($validator);
			$tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);
			
			if ($tokenCheck === false) {
				echo "You need to re-submit your reset request.";
				exit();
			}
			elseif ($tokenCheck === true) {
				$tokenEmail = $row['pwdResetEmail'];
				
				$sql = "SELECT * FROM staff WHERE EmailAddress=?;";
				$stmt = mysqli_stmt_init($con);
				if(!mysqli_stmt_prepare($stmt, $sql)) {
					echo "There was an error2!";
					exit();
				}
				else {
					mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
					mysqli_stmt_execute($stmt);
					$result = mysqli_stmt_get_result($stmt);
					if(!$row = mysqli_fetch_assoc($result)) {
						echo "There was an error3!";
						exit();
					}
					else {
						$sql = "UPDATE staff SET Password=? WHERE EmailAddress=?";
						$stmt = mysqli_stmt_init($con);
						if(!mysqli_stmt_prepare($stmt, $sql)) {
							echo "There was an error4!";
							exit();
						}
						else {
							$newPasswordHash = password_hash($password, PASSWORD_DEFAULT);
							mysqli_stmt_bind_param($stmt, "ss", $newPasswordHash, $tokenEmail);
							mysqli_stmt_execute($stmt);
							
							$sql = "DELETE FROM pwdReset WHERE pwdResetEmail=?";
							$stmt = mysqli_stmt_init($con);
							if(!mysqli_stmt_prepare($stmt, $sql)) {
								echo "There was an error5!";
								exit();
							}
							else {
								mysqli_stmt_bind_param($stmt, "s", $tokenEmail);
								mysqli_stmt_execute($stmt);
								header("Location: ../login.php?newpwd=passwordupdated");
							}
						}
					}
				}
			}
		}
	}
}
else {
	header("Location: ../index.php");
}