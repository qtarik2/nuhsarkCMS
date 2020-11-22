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
<form method="post" action="payslip_select-staff_create-payslip_result.php" onsubmit="return FrontPage_Form1_Validator(this)" language="JavaScript" name="FrontPage_Form1">
<h2>PAYSLIP &gt; SELECT STAFF &gt; CREATE PAYSLIP &gt; RESULT</h2>

<?php

require('db.php');
include("auth.php");

// $ID=$_POST['ID'];
$Name=$_POST['Name'];
$ICNo=$_POST['ICNo'];
$EPFNo=$_POST['EPFNo'];
$Position=$_POST['Position'];

$Month=$_POST['Month'];

$GrossBasic=$_POST['GrossBasic'];
$NettBasic=$_POST['GrossBasic'];
$GrossAllowance=$_POST['GrossAllowance'];
$NettAllowance=$_POST['GrossAllowance'];

// $Others=$GrossBasic/25*$_POST['Others'];
$DayRate=$_POST['DayRate'];
$AbsentDays=$_POST['AbsentDays'];
$Others=$DayRate*$AbsentDays;
$Claims=$_POST['Claims'];
$Advance=$_POST['Advance'];

$Total=$GrossBasic+$GrossAllowance;

// $EPFEmployee=0.11 * $GrossBasic;
// $EPFEmployer=0.13 * $GrossBasic;
$EPFEmployee=$_POST['EPFEmployee'];
$EPFEmployer=$_POST['EPFEmployer'];
$SOCSOEmployee=$_POST['SOCSOEmployee'];
$SOCSOEmployer=$_POST['SOCSOEmployer'];
$SOCSOSIPEmployee=$_POST['SOCSOSIPEmployee'];
$SOCSOSIPEmployer=$_POST['SOCSOSIPEmployer'];

$GrossEarnings=$GrossBasic+$GrossAllowance+$EPFEmployer+$SOCSOEmployer+$SOCSOSIPEmployer+$Claims;
$NettEarnings=$NettBasic+$NettAllowance+$Claims;
$TotalDeductions=$EPFEmployee+$SOCSOEmployee+$SOCSOSIPEmployee+$Others+$Advance;
$NettSalary=$NettEarnings-$TotalDeductions;

$ApprovedBy=$_POST['ApprovedBy'];
$ReceivedBy=$_POST['ReceivedBy'];
$ChequeNo=$_POST['ChequeNo'];
$Date=$_POST['Date'];

$Notes=$_POST['Notes'];
$Notes1=$_POST['Notes1'];

	// Insert data into mysql 
	
	$query = "INSERT INTO payslip VALUES (
	NULL, 
	'$Month', '$Name', '$ICNo', '$EPFNo', '$Position',
	'$GrossBasic', '$NettBasic', '$GrossAllowance', '$NettAllowance',
	'$EPFEmployer', '$SOCSOEmployer', '$SOCSOSIPEmployer', '$Claims',
	'$GrossEarnings', '$NettEarnings',
	'$EPFEmployee', '$SOCSOEmployee', '$SOCSOSIPEmployee', '$Others',
	'$TotalDeductions', '$NettSalary',
	'$ApprovedBy', '$ChequeNo', '$Date', '$ReceivedBy', '$Notes', '$Notes1', '$DayRate', '$AbsentDays', '$Advance')";
	mysqli_query($con, $query);

	print("<br>DATA UPDATED!");
	print("<br><br>");
	print("<a href='payslip_select-staff.php'>ADD DATA</a>");
	print("<br>");  
	print("<a href='payslip_summary.php'>SUMMARY</a>");
	print("<br>");

?>

																								</form>
																				


<p>&nbsp;</p>
</div>
																
																
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
