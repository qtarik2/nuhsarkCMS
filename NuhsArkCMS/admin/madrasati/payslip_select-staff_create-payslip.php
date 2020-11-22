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
	$sel_query1="SELECT header FROM pageinfo WHERE ID='2'";
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
	$sel_query1="SELECT navigation FROM pageinfo WHERE ID='2'";
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
<h2>PAYSLIP &gt; SELECT STAFF &gt; CREATE PAYSLIP</h2>

<?php

require('db.php');
include("auth.php");

$ID=$_REQUEST["ID"];
$count=1;
$sel_query="SELECT * FROM madrasati_staff WHERE ID='$ID'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {

$ICNo=$_REQUEST["ICNo"];
$Name=$_REQUEST["Name"];
$EPFNo=$_REQUEST["EPFNo"];
$Position=$_REQUEST["Position"];
$GrossBasic=$_REQUEST["GrossBasic"];
$NettBasic=$_REQUEST["NettBasic"];



?>
																								<table class="table">
																												<tr>
																																<td style="width: 170px" class="style14">Name</td>
																																<td><input name="Name" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Name"]; ?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">IC No.</td>
																																<td><input name="ICNo" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["ICNo"]; ?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Position</td>
																																<td><input name="Position" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Position"]; ?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">EPF No.</td>
																																<td><input name="EPFNo" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["EPFNo"]; ?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Month</td>
																																<td><input name="Month" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Month"]; ?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">EARNINGS</td>
																																<td>&nbsp;</td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Basic Salary</td>
																																<td><input name="GrossBasic" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["GrossBasic"]; ?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Allowance</td>
																																<td>
																																<input name="GrossAllowance" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="0.00"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">EPF Employer</td>
																																<td>AUTO CALCULATE&nbsp;</td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">SOCSO Employer</td>
																																<td><input name="SOCSOEmployer" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["SOCSOEmployer"]; ?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">SOCSO SIP Employer</td>
																																<td><input name="SOCSOSIPEmployer" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["SOCSOSIPEmployer"]; ?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Claims</td>
																																<td><input name="Claims" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="0.00"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">TOTAL EARNINGS</td>
																																<td>
																																<table class="table">
																																				<tr>
																																								<td style="width: 100px">Gross</td>
																																								<td style="width: 220px">AUTO CALCULATE</td>
																																								<td style="width: 100px">Nett</td>
																																								<td>AUTO CALCULATE</td>
																																				</tr>
																																</table>
																																</td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">DEDUCTIONS</td>
																																<td>&nbsp;</td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">EPF Employee</td>
																																<td>AUTO CALCULATE</td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">SOCSO Employee</td>
																																<td><input name="SOCSOEmployee" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["SOCSOEmployee"]; ?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">SOCSO SIP Employee</td>
																																<td><input name="SOCSOSIPEmployee" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["SOCSOSIPEmployee"]; ?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Day Rate</td>
																																<td><input name="DayRate" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["DayRate"]; ?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Absent (Days)</td>
																																<td><input name="AbsentDays" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="0.00">&nbsp;</td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Absent Deduction</td>
																																<td>AUTO CALCULATE</td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Absent Notes</td>
																																<td><input name="Notes" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="255" value="Absent Notes"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Notes</td>
																																<td><input name="Notes1" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="255" value="Notes"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Advance</td>
																																<td><input name="Advance" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="0.00"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">TOTAL DEDUCTIONS</td>
																																<td>AUTO CALCULATE</td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">NETT SALARY</td>
																																<td>AUTO CALCULATE</td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Approved By</td>
																																<td><input name="ApprovedBy" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Received By</td>
																																<td><input name="ReceivedBy" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Cheque No.</td>
																																<td><input name="ChequeNo" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="000000"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Date</td>
																																<td><input type="text" name="Date" class="date" readonly placeholder="DD/MM/YYYY" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" /><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script><script>
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
																												</table>
																								<br>
																																																<br>
																								<p><button type="submit" class="btn btn-default">Submit</button></p></form>
																				


<p>&nbsp;</p>
<?php

}
?>
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
