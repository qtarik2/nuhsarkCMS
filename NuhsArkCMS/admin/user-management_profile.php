﻿<?php
/*

*/

include("auth.php"); //include auth.php file on all secure pages ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuh's Ark Islamic Montessori School</title>
<style type="text/css">
.style9 {
				background-color: #FFFFFF;
}
a {
				color: #FF0000;
}
a:visited {
				color: #FF0000;
}
a:hover {
				color: #800080;
}
.style13 {
				font-family: Calibri;
}
.style19 {
				color: #FFFFFF;
				font-family: Calibri;
}
</style>
</head>
<body bgcolor="#ffffff" style="margin: 0; color: #000000;">

<div id="header">
								<table cellpadding="5" cellspacing="0" style="width: 100%" align="left" class="style9">
												<!-- MSTableType="layout" -->
												<tr>
<?php
require('db.php');
$count=1;
	$sel_query1="SELECT header FROM pageinfo WHERE ID='1'";
	$result1 = mysqli_query($con,$sel_query1);
	while($row = mysqli_fetch_assoc($result1)) { 
	echo $row["header"];
	}
?>

												</tr>
								</table>
</div>

<div id="nav">

<table cellpadding="0" cellspacing="0" style="width: 100%" align="left">
				<!-- MSTableType="layout" -->
				<tr>
								<td style="height: 30px" class="style9" valign="top">
								<table cellpadding="5" cellspacing="0" style="width: 100%" align="left">
												<!-- MSTableType="layout" -->
												<tr>
																<td style="height: 30px" valign="top" class="style19">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ADMNISTRATOR</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">DASHBOARD</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">NUH'S ARK
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="nuhsark/dashboard.php">GO TO NUH'S ARK DASHBOARD</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">MADRASATI
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="madrasati/dashboard.php">GO TO MADRASATI DASHBOARD</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">UTILITIES
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="user-management_profile.php">Profile</a></li>
          <li><a href="user-management_change-password.php">Change Password</a></li>
          <li><a href="dashboard_settings.php">Dashboard Settings</a></li>
        </ul>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="nuhsark/dashboard.php"><span class="glyphicon glyphicon-user"></span>NUH'S ARK</a></li>
      <li><a href="madrasati/dashboard.php"><span class="glyphicon glyphicon-user"></span>MADRASATI</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>LOGOUT</a></li>
    </ul>
  </div>
</nav>
															</td>
												</tr>
								</table>
								</td>
				</tr>
</table>

</div>

<div id="content">
<table cellpadding="0" cellspacing="0" style="width: 100%" align="left" class="style9">
				<!-- MSTableType="layout" -->
				<tr>
								<td style="height: 400px" valign="top" class="style9">
								<table cellpadding="5" cellspacing="0" style="width: 100%" align="left" class="style9">
												<!-- MSTableType="layout" -->
												<tr>
																<td style="height: 400px" class="style13" valign="top">
																
<link rel="stylesheet" href="../css/style.css" />
<body>
<div class="form" style="width: 100%">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p><a href="logout.php">Logout</a></p>
</div>

<?php
require('db.php');
include("auth.php");

$ID=$_REQUEST['ID'];
$Username=$_SESSION['username'];
$query = "SELECT * FROM administrator WHERE Username='".$Username."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<div class="form" style="width: 100%">
<h2>USER MANAGEMENT &gt; PROFILE</h2>
<table width="100%" border="1" style="border-collapse:collapse;">


<form name="FrontPage_Form1" method="post" action="" onsubmit="return FrontPage_Form1_Validator(this)" language="JavaScript"> 
<input type="hidden" name="new" value="1" />
<input name="ID" type="hidden" value="<?php echo $row['ID'];?>" />
<table class="table">
<?php
$Progress = "UPDATING...";
if(isset($_POST['new']) && $_POST['new']==1)
{
	$ID=$_REQUEST['ID'];
	$Username=$_REQUEST['Username'];
	$Password=$_REQUEST['Password'];
	$Name=$_REQUEST['Name'];

	$update="UPDATE administrator SET Name='".$Name."' WHERE Username='".$Username."'";
	mysqli_query($con, $update) or die(mysqli_error());
	$Progress = "UPDATED!</br></br>";
	echo '<p style="color:#FF0000;">'.$Progress.'</p>';
	}
	else {
	?>

	<tr>
		<td style="width: 170px" class="style14">Username</td>
		<td><input type="text" class="form-control" id="Username" name="Username" required name="Username" value="<?php echo $row["Username"]; ?>" readonly /></td>
	</tr>
	<tr>
		<td style="width: 170px" class="style14">Password</td>
		<td><input type="password" class="form-control" id="Password" name="Password" required name="Password" value="<?php echo $row["Password"]; ?>" readonly /></td>
	</tr>
	<tr>
		<td style="width: 170px" class="style14">Name</td>
		<td><input type="text" class="form-control" id="Name" name="Name" required name="Name" value="<?php echo $row["Name"]; ?>" /></td>
	</tr>
<?php } ?>

</div>
</body>
</html>

																
																
																</td>
												</tr>
								</table>
								<br>
	<button type="submit" class="btn btn-default">SUBMIT</button>

</form>

</td>
				</tr>
</table>
</div>

<div id="footer">
<table cellpadding="0" cellspacing="0" style="width: 100%" align="left">
				<!-- MSTableType="layout" -->
				<tr>
								<td style="height: 30px" class="style9" valign="top">
								<table cellpadding="5" cellspacing="0" style="width: 100%" align="left">
												<!-- MSTableType="layout" -->
												<tr>
																<td style="height: 30px" valign="top" class="style19">
<?php
require('db.php');
$count=1;
	$sel_query1="SELECT footer FROM pageinfo WHERE ID='1'";
	$result1 = mysqli_query($con,$sel_query1);
	while($row = mysqli_fetch_assoc($result1)) { 
	echo $row["footer"];
	}
?>
</td>
												</tr>
								</table>
								</td>
				</tr>
</table>
</div>
								</body>
</html>
