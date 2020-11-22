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
</div>

<?php
require('db.php');
include("auth.php");

$ID=$_REQUEST['ID'];

$query = "SELECT * FROM madrasati_payslip WHERE ID='".$ID."'"; 
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
<h2>PAYSLIP &gt; SELECT STAFF &gt; DELETE PAYSLIP</h2>
<form name="FrontPage_Form1" method="post" action="" onsubmit="return FrontPage_Form1_Validator(this)" language="JavaScript"> 
<input type="hidden" name="new" value="1" />
<input name="ID" type="hidden" value="<?php echo $row['ID'];?>" />

<?php
$Progress = "UPDATING...";
if(isset($_POST['new']) && $_POST['new']==1)
{

$ICNo=$_REQUEST["ICNo"];
$Name=$_REQUEST["Name"];
$EPFNo=$_REQUEST["EPFNo"];
$Position=$_REQUEST["Position"];

$Month=$_REQUEST['Month'];

$GrossBasic=$_REQUEST['GrossBasic'];
$NettBasic=$GrossBasic;
$GrossAllowance=$_REQUEST['GrossAllowance'];
$NettAllowance=$GrossAllowance;

$Others=$_REQUEST['Others'];
$Claims=$_REQUEST['Claims'];

$EPFEmployee=$_REQUEST['EPFEmployee'];
$EPFEmployer=$_REQUEST['EPFEmployer'];
$SOCSOEmployee=$_REQUEST['SOCSOEmployee'];
$SOCSOEmployer=$_REQUEST['SOCSOEmployer'];
$SOCSOSIPEmployee=$_REQUEST['SOCSOSIPEmployee'];
$SOCSOSIPEmployer=$_REQUEST['SOCSOSIPEmployer'];

$GrossEarnings=$GrossBasic+$GrossAllowance+$EPFEmployer+$SOCSOEmployer+$SOCSOSIPEmployer+$Claims;
$NettEarnings=$NettBasic+$NettAllowance+$Claims;
$TotalDeductions=$EPFEmployee+$SOCSOEmployee+$SOCSOSIPEmployee+$Others;
$NettSalary=$NettEarnings-$TotalDeductions;

$ApprovedBy=$_REQUEST['ApprovedBy'];
$ReceivedBy=$_REQUEST['ReceivedBy'];
$ChequeNo=$_REQUEST['ChequeNo'];
$Date=$_REQUEST['Date'];

$Notes=$_REQUEST['Notes'];
$Notes1=$_REQUEST['Notes1'];

	$update = "DELETE FROM madrasati_payslip WHERE ID='$ID'";
	mysqli_query($con, $update) or die(mysqli_error());
	$Progress = "DATA DELETED!</br></br>";
	echo '<p style="color:#FF0000;">'.$Progress.'</p>';
	print("<a href='payslip_select-staff.php'>ADD DATA</a>");
	print("<br>");  
	print("<a href='payslip_summary.php'>SUMMARY</a>");
	print("<br>");
	}
	else {
	?>

<table class="table">
				<tr>
								<td style="width: 150px">ID</td>
								<td style="width: 442px"><?php echo $row["ID"]; ?></td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Month</td>
								<td style="width: 442px"><?php echo $row["Month"]; ?></td>
								<td>
								<input name="Month" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Month"]; ?>"></td>
				</tr>
				<tr>
								<td style="width: 150px">Name</td>
								<td style="width: 442px"><?php echo $row["Name"]; ?></td>
								<td>
								<input name="Name" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Name"]; ?>"></td>
				</tr>
				<tr>
								<td style="width: 150px">Position</td>
								<td style="width: 442px"><?php echo $row["Position"]; ?></td>
								<td>
								<input name="Position" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Position"]; ?>"></td>
				</tr>
				<tr>
								<td style="width: 150px">NRIC</td>
								<td style="width: 442px"><?php echo $row["ICNo"]; ?></td>
								<td>
								<input name="ICNo" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["ICNo"]; ?>"></td>
				</tr>
				<tr>
								<td style="width: 150px">EPF Account No</td>
								<td style="width: 442px"><?php echo $row["EPFNo"]; ?></td>
								<td>
								<input name="EPFNo" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["EPFNo"]; ?>"></td>
				</tr>
				<tr>
								<td style="width: 150px">EARNINGS</td>
								<td style="width: 442px"></td>
								<td>
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Gross Basic</td>
								<td style="width: 442px"><?php echo $row["GrossBasic"]; ?></td>
								<td><input name="GrossBasic" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["GrossBasic"]; ?>">
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Gross Allowance</td>
								<td style="width: 442px"><?php echo $row["GrossAllowance"]; ?></td>
								<td>
								<input name="GrossAllowance" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["GrossAllowance"]; ?>">
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">EPF</td>
								<td style="width: 442px"><?php echo $row["EPFEmployer"]; ?></td>
								<td>
								<input name="EPFEmployer" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["EPFEmployer"]; ?>">
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">SOCSO</td>
								<td style="width: 442px"><?php echo $row["SOCSOEmployer"]; ?></td>
								<td>
								<input name="SOCSOEmployer" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["SOCSOEmployer"]; ?>">
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">SIP</td>
								<td style="width: 442px"><?php echo $row["SOCSOSIPEmployer"]; ?></td>
								<td>
								<input name="SOCSOSIPEmployer" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["SOCSOSIPEmployer"]; ?>">
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Claims</td>
								<td style="width: 442px"><?php echo $row["Claims"]; ?></td>
								<td>
								<input name="Claims" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Claims"]; ?>"></td>
				</tr>
				<tr>
								<td style="width: 150px">Gross Earnings</td>
								<td style="width: 442px"><?php echo $row["GrossEarnings"]; ?></td>
								<td>&nbsp;&nbsp;AUTO CALCULATE</td>
				</tr>
				<tr>
								<td style="width: 150px">Nett Earnings</td>
								<td style="width: 442px"><?php echo $row["NettEarnings"]; ?></td>
								<td>&nbsp;&nbsp;AUTO CALCULATE</td>
				</tr>
				<tr>
								<td style="width: 150px">DEDUCTIONS</td>
								<td style="width: 442px">&nbsp;</td>
								<td>
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">EPF</td>
								<td style="width: 442px"><?php echo $row["EPFEmployee"]; ?></td>
								<td>
								<input name="EPFEmployee" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["EPFEmployee"]; ?>">
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">SOCSO</td>
								<td style="width: 442px"><?php echo $row["SOCSOEmployee"]; ?></td>
								<td>
								<input name="SOCSOEmployee" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["SOCSOEmployee"]; ?>">
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">SIP</td>
								<td style="width: 442px"><?php echo $row["SOCSOSIPEmployee"]; ?></td>
								<td>
								<input name="SOCSOSIPEmployee" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["SOCSOSIPEmployee"]; ?>">
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Absent</td>
								<td style="width: 442px"><?php echo $row["Others"]; ?></td>
								<td>
								<input name="Others" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Others"]; ?>">
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Absent Notes</td>
								<td style="width: 442px"><?php echo $row["Notes"]; ?></td>
								<td>
								<input name="Notes" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="255" value="<?php echo $row["Notes"]; ?>"></td>
				</tr>
				<tr>
								<td style="width: 150px">Notes</td>
								<td style="width: 442px"><?php echo $row["Notes1"]; ?></td>
								<td>
								<input name="Notes1" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="255" value="<?php echo $row["Notes1"]; ?>"></td>
				</tr>
				<tr>
								<td style="width: 150px">Total Deductions</td>
								<td style="width: 442px"><?php echo $row["TotalDeductions"]; ?></td>
								<td>
								AUTO CALCULATE</td>
				</tr>
				<tr>
								<td style="width: 150px">Nett Salary</td>
								<td style="width: 442px"><?php echo $row["NettSalary"]; ?></td>
								<td>
								AUTO CALCULATE</td>
				</tr>
				<tr>
								<td style="width: 150px">Approved By</td>
								<td style="width: 442px"><?php echo $row["ApprovedBy"]; ?></td>
								<td>
								<input name="ApprovedBy" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["ApprovedBy"]; ?>"></td>
				</tr>
				<tr>
								<td style="width: 150px">Received By</td>
								<td style="width: 442px"><?php echo $row["ReceivedBy"]; ?></td>
								<td>
								<input name="ReceivedBy" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["ReceivedBy"]; ?>"></td>
				</tr>
				<tr>
								<td style="width: 150px">Cheque No</td>
								<td style="width: 442px"><?php echo $row["ChequeNo"]; ?></td>
								<td>
								<input name="ChequeNo" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["ChequeNo"]; ?>"></td>
				</tr>
				<tr>
								<td style="width: 150px">Date</td>
								<td style="width: 442px"><?php echo $row["Date"]; ?></td>
								<td><input type="text" name="Date" class="date" readonly placeholder="DD/MM/YYYY" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" value="<?php echo $row["Date"]; ?>" /><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script><script>
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
</script>
								&nbsp;</td>
				</tr>
				</table>
<p><button type="submit" class="btn btn-default">Submit and Confirm Data Delete</button></p></form>
</div>
<?php
}
?>
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
