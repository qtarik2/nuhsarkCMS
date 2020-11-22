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
  <link rel="stylesheet" href="../assets/css/nuhsArkParents/login.css">
</head>
<body>

<div class="sidebar d-flex flex-wrap align-content-center bg-dark text-white">
  <h2>Nuh's Ark Islamic Montessori School</h2>
  <p>Authorised Personnel Only</p>
</div>

<div class="content">
	<form method="post" action="includes/login.inc.php">
		<div class="form-group">
			<label for="username">User ID</label>
			<input type="text" name="username" class="form-control" placeholder="Enter Student ID...">
		</div>
		<!--<div class="form-group">
			<label for="password">Password</label>
			<input type="password" name="password" class="form-control" placeholder="Enter password...">
		</div> -->
			<button type="submit" name="submit" class="btn btn-dark">Sign in</button>
		<?php
			if(isset($_GET["error"])) {
				if($_GET["error"] == "emptyinput") {
					echo "<p class='red'> Fill in all fields! </p>";
				}
				elseif($_GET["error"] == "wronglogin") {
					echo "<p> Incorrect login information! </p>";
				}
			}
		?>
	</form>	
</div>

</body>
</html>
