﻿<?php
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
<?php
require('db.php');
$count=1;
	$sel_query1="SELECT navigation FROM pageinfo WHERE ID='1'";
	$result1 = mysqli_query($con,$sel_query1);
	while($row = mysqli_fetch_assoc($result1)) { 
	echo $row["navigation"];
	}
?>
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
$query = "SELECT * FROM staff WHERE ID='".$ID."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<html>
<head>
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<div class="form" style="width: 100%">
<h2>STAFF &gt; MANAGE ACCOUNT &gt; UPDATE ACCOUNT<body><div class="form" style="width: 100%">
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
	$ICNo=$_REQUEST['ICNo'];
	$EPFNo=$_REQUEST['EPFNo'];
	$Name=$_REQUEST['Name'];
	$Position=$_REQUEST['Position'];
	$GrossBasic=$_REQUEST['GrossBasic'];
	$EmailAddress=$_REQUEST['EmailAddress'];
	$HiredDate=$_REQUEST['HiredDate'];
	$EPFEmployee=$_REQUEST['EPFEmployee'];
	$EPFEmployer=$_REQUEST['EPFEmployer'];
	$SOCSOEmployee=$_REQUEST['SOCSOEmployee'];
	$SOCSOEmployer=$_REQUEST['SOCSOEmployer'];
	$SOCSOSIPEmployee=$_REQUEST['SOCSOSIPEmployee'];
	$SOCSOSIPEmployer=$_REQUEST['SOCSOSIPEmployer'];
	$DayRate=$_REQUEST['DayRate'];
	$DayRate=$GrossBasic/25;

	$update="UPDATE staff SET 
		ICNo='".$ICNo."',
		EPFNo='".$EPFNo."', 
		Name='".$Name."', 
		Position='".$Position."', 
		GrossBasic='".$GrossBasic."', 
		EmailAddress='".$EmailAddress."', 
		HiredDate='".$HiredDate."',
		EPFEmployee='".$EPFEmployee."',
		EPFEmployer='".$EPFEmployer."',
		SOCSOEmployee='".$SOCSOEmployee."',
		SOCSOEmployer='".$SOCSOEmployer."',
		SOCSOSIPEmployee='".$SOCSOSIPEmployee."',
		SOCSOSIPEmployer='".$SOCSOSIPEmployer."',
		DayRate='".$DayRate."'
		WHERE ID='".$ID."'";
	mysqli_query($con, $update) or die(mysqli_error());
	$Progress = "UPDATED!</br></br>";
	echo '<p style="color:#FF0000;">'.$Progress.'</p>';
	print("<a href='staff_manage-account.php'>SUMMARY</a>");
	print("<br>");
	}
	else {
	?>

																												<tr>
																																<td style="width: 170px" class="style14">ID</td>
																																<td><?php echo $row['ID']; ?></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">IC No.</td>
																																<td><?php echo $row['Username']; ?><input name="ICNo" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['ICNo'];?>"></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">EPF No.</td>
																																<td><input name="EPFNo" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['EPFNo'];?>"></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Name</td>
																																<td><input name="Name" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['Name'];?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Position</td>
																																<td><input name="Position" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['Position'];?>"></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Gross Basic</td>
																																<td><input name="GrossBasic" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['GrossBasic'];?>"></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Email Address</td>
																																<td><input name="EmailAddress" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['EmailAddress'];?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Hired Date</td>
																																<td><input type="text" name="HiredDate" class="date" readonly placeholder="DD/MM/YYYY" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" value="<?php echo $row['HiredDate']; ?>" /><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script><script>
$(function() {
 $( ".date" ).datepicker({
 dateFormat : 'dd/mm/yy',
 showOn: "both",
 buttonImage: "b_calendar.png",
 buttonImageOnly: true,
 buttonText: "Select Date",
 changeMonth: true,
 changeYear: true,
 yearRange: "-100:+0"
 }); 
}); 
</script></td>
																												</tr>


																												<tr>
																																<td style="width: 170px" class="style14">EPF Employee</td>
																																<td><input name="EPFEmployee" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['EPFEmployee'];?>"></td>
																												</tr>


																												<tr>
																																<td style="width: 170px" class="style14">EPF Employer</td>
																																<td><input name="EPFEmployer" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['EPFEmployer'];?>"></td>
																												</tr>


																												<tr>
																																<td style="width: 170px" class="style14">SOCSO Employee</td>
																																<td><input name="SOCSOEmployee" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['SOCSOEmployee'];?>"></td>
																												</tr>


																												<tr>
																																<td style="width: 170px" class="style14">SOCSO Employer</td>
																																<td><input name="SOCSOEmployer" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['SOCSOEmployer'];?>"></td>
																												</tr>


																												<tr>
																																<td style="width: 170px" class="style14">SOCSO SIP Employee</td>
																																<td><input name="SOCSOSIPEmployee" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['SOCSOSIPEmployee'];?>"></td>
																												</tr>


																												<tr>
																																<td style="width: 170px" class="style14">SOCSO SIP Employer</td>
																																<td><input name="SOCSOSIPEmployer" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['SOCSOSIPEmployer'];?>"></td>
																												</tr>


																												<tr>
																																<td style="width: 170px" class="style14">Day Rate</td>
																																<td>AUTO CALCULATE (BASIC SALARY/25 DAYS)</td>
																												</tr>


																												</table>
																								<p>
																								<p><button type="submit" class="btn btn-default">Submit</button></p>
</form>
<?php } ?>

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
