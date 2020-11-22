<?php
/*

*/

include("auth.php"); //include auth.php file on all secure pages ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
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
.style18 {
				background-color: #003366;
}
.style19 {
				color: #FFFFFF;
				font-family: Calibri;
}
.style21 {
				background-color: #000000;
}
</style>
</head>
<body bgcolor="#ffffff" style="margin: 0; color: #000000;">

<div id="header">
								<table cellpadding="5" cellspacing="0" style="width: 100%" align="left" class="style9">
												<!-- MSTableType="layout" -->
												<tr>
																<td style="height: 50px" class="style9" valign="top">
																<img alt="" src="../images/logo_madrasati.png" width="120" height="120"></td>
												</tr>
								</table>
</div>

<div id="nav">

<table cellpadding="0" cellspacing="0" style="width: 100%" align="center">
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
      <a class="navbar-brand" href="#">MADRASATI</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">DASHBOARD</a></li>
    </ul>
 	<ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">MADRASATI
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="payslip_summary.php">PAYSLIP</a></li>
          <li><a href="student_manage-account.php">STUDENT</a></li>
          <li><a href="staff-directory.php">STAFF DIRECTORY</a></li>
        </ul>
      </li>
     </ul>
 	<ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">PROFILE
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="staff_manage-account.php">MANAGE ACCOUNT</a></li>
        </ul>
      </li>
     </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>Welcome <?php echo $_SESSION['username']; ?>!</a></li>
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

?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<div class="form" style="width: 100%">
<h2>STUDENT &gt; MANAGE ACCOUNT &gt; DETAILS</h2>

<?php

$Username=$_SESSION['username'];
$ID=$_REQUEST["ID"];
$count=1;
$sel_query="SELECT * FROM madrasati_students WHERE MYKID='$Username'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {

$EmailAddress=$_REQUEST["EmailAddress"];
$StudentID=$_REQUEST["StudentID"];
$Name=$_REQUEST["Name"];
$MYKID=$_REQUEST["MYKID"];
$DOB=$_REQUEST["DOB"];
$Age=$_REQUEST["Age"];
$Gender=$_REQUEST["Gender"];
$Address=$_REQUEST["Address"];
$MotherName=$_REQUEST["MotherName"];
$MotherContact=$_REQUEST["MotherContact"];
$FatherName=$_REQUEST["FatherName"];
$FatherContact=$_REQUEST["FatherContact"];
$Intake=$_REQUEST["Intake"];
$RegistrationDate=$_REQUEST["RegistrationDate"];

?>

<table class="table">
				<tr>
								<td style="width: 150px">ID</td>
								<td><?php echo $row["ID"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Email Address</td>
								<td><?php echo $row["EmailAddress"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Student ID</td>
								<td><?php echo $row["StudentID"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Name</td>
								<td><?php echo $row["Name"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">MYKID</td>
								<td><?php echo $row["MYKID"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">DOB</td>
								<td><?php echo $row["DOB"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Age</td>
								<td><?php echo $row["Age"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Gender</td>
								<td><?php echo $row["Gender"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Address</td>
								<td><?php echo $row["Address"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Mother&#39;s Name</td>
								<td><?php echo $row["MotherName"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Mother&#39;s Contact</td>
								<td><?php echo $row["MotherContact"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Father&#39;s Name</td>
								<td><?php echo $row["FatherName"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Father&#39;s Contact</td>
								<td><?php echo $row["FatherContact"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Intake</td>
								<td><?php echo $row["Intake"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Registration Date</td>
								<td><?php echo $row["RegistrationDate"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Programme</td>
								<td><?php echo $row["Programme"]; ?></td>
				</tr>
				</table>
<?php
}
?>
</div>
</body>
</html>

																
																
																</td>
												</tr>
								</table>
								</td>
				</tr>
</table>
</div>

<div id="footer">
<table cellpadding="0" cellspacing="0" style="width: 100%" align="center">
				<!-- MSTableType="layout" -->
				<tr>
								<td style="height: 120px" class="style18" valign="top">
								<table cellpadding="5" cellspacing="0" style="width: 100%" align="left" class="style21">
												<!-- MSTableType="layout" -->
												<tr>
																<td style="height: 120px" valign="top">
<?php
require('db.php');
$count=1;
	$sel_query1="SELECT footer FROM pageinfo WHERE ID='2'";
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
