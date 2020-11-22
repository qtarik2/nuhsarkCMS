<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nuh's Ark Islamic Montessori School</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../assets/css/nuhsArkStaffs/style.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-3 "> 
			<form action="includes/signup.inc.php" method="post">			 
				<input type="text" name="name" placeholder="Enter Fullname...">
			 	<input type="text" name="email" placeholder="Enter Email...">
				<input type="text" name="uid" placeholder="Enter Username...">
				<input type="password" name="password" placeholder="Enter password...">
				<input type="password" name="passwordRepeat" placeholder="Repeat Password...">
				<br><br>
			    <button type="submit" name="submit" class="btn btn-dark">Sign Up</button>
			</form>
		</div> 
		<?php
			if(isset($_GET["error"])) {
				if($_GET["error"] == "emptyinput") {
					echo "<p class='red'> Fill in all fields! </p>";
				}
				elseif($_GET["error"] == "invaliduid") {
					echo "<p> Choose a proper username! </p>";
				}
				elseif($_GET["error"] == "invalidemail") {
					echo "<p> Choose a proper username! </p>";
				}
				elseif($_GET["error"] == "passwordsdontmatch") {
					echo "<p> Password doesn't match! </p>";
				}
				elseif($_GET["error"] == "stmtfailed") {
					echo "<p> Something went wrong, Please try again! </p>";
				}
				elseif($_GET["error"] == "usernametaken") {
					echo "<p> Username already taken! </p>";
				}
				elseif($_GET["error"] == "none") {
					echo "<p> You have sign up succussfully! </p>";
				}
			}
		?>
	</div>
</div>
</body>
</html>
