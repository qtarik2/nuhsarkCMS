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
.style22 {
				font-size: small;
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
<!--webbot BOT="GeneratedScript" PREVIEW=" " startspan --><script Language="JavaScript" Type="text/javascript"><!--
function FrontPage_Form1_Validator(theForm)
{

  if (theForm.Method.selectedIndex < 0)
  {
    alert("Please select one of the \"Method\" options.");
    theForm.Method.focus();
    return (false);
  }

  if (theForm.Method.selectedIndex == 0)
  {
    alert("The first \"Method\" option is not a valid selection.  Please choose one of the other options.");
    theForm.Method.focus();
    return (false);
  }
  return (true);
}
//--></script><!--webbot BOT="GeneratedScript" endspan --><form method="post" action="payment_select-invoice_payment_result.php" onsubmit="return FrontPage_Form1_Validator(this)" language="JavaScript" name="FrontPage_Form1">
<h2>PAYMENT &gt; SELECT INVOICE &gt; PAYMENT</h2>

<?php

require('db.php');
include("auth.php");

$ID=$_REQUEST["ID"];
// $ReceiptNo=$_REQUEST["ReceiptNo"];
$InvoiceNo=$_REQUEST["InvoiceNo"];

$count=1;
$sel_query="SELECT * FROM madrasati_invoice WHERE InvoiceNo='$InvoiceNo'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {

$InvoiceNo=$_REQUEST["InvoiceNo"];
$EmailAddress=$_REQUEST["EmailAddress"];
$Name=$_REQUEST["Name"];
$StudentID=$_REQUEST["StudentID"];
$Programme=$_REQUEST["Programme"];

?>
																								<table class="table">
																												<tr>
																																<td style="width: 170px" class="style14">Student ID</td>
																																<td><input name="StudentID" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["StudentID"]; ?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Email Address</td>
																																<td><input name="EmailAddress" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["EmailAddress"]; ?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px; height: 40px;" class="style14">Name</td>
																																<td style="height: 40px"><input name="Name" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" InvoiceNo" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" size="100" value="<?php echo $row["Name"]; ?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px; height: 40px;" class="style14">Invoice No</td>
																																<td style="height: 40px"><input name="InvoiceNo" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" InvoiceNo" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" size="100" value="<?php echo $row["InvoiceNo"]; ?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Programme</td>
																																<td><input name="Programme" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Programme"]; ?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Date</td>
																																<td><input type="text" name="Date" class="date" readonly placeholder="DD/MM/YYYY" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" /> <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script><script>
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
																																<td style="width: 170px" class="style14">Payment Date</td>
																																<td><input type="text" name="PaymentDate" class="date" readonly placeholder="DD/MM/YYYY" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" /> <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script><script>
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
																																<td style="width: 170px" class="style14">Method</td>
																																<td><!--webbot bot="Validation" b-value-required="TRUE" b-disallow-first-item="TRUE" --><select name="Method" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;">
																																<option>Method</option>
																																<option value="CASH DEPOSIT">CASH DEPOSIT</option>
																																<option value="FUNDS TRANSFER">FUNDS TRANSFER</option>
																																<option value="CHEQUE">CHEQUE</option>
																																</select></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Cheque No</td>
																																<td><input name="ChequeNo" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="000000"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">PAY FOR:</td>
																																<td>&nbsp;</td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">ANNUAL FEES</td>
																																<td>&nbsp;</td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Registration</td>
																																<td><input name="Registration" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="0.00"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Security</td>
																																<td><input name="Security" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="0.00"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Program</td>
																																<td><input name="Program" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="0.00"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Equipment</td>
																																<td><input name="Equipment" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="0.00"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Uniform</td>
																																<td><input name="Uniform" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="0.00"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Takaful</td>
																																<td><input name="Takaful" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="0.00"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">6 Years Old / Others</td>
																																<td><input name="Extra1" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="0.00"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">TERM FEES</td>
																																<td>&nbsp;</td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Term</td>
																																<td><input name="Term" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="0.00"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Transport / Others</td>
																																<td><input name="Extra2" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="0.00"> [ TRANSPORT / OTHERS ]</td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Notes</td>
																																<td><textarea name="Notes" style="font-family: Verdana; font-size: 16 pt; width: 242px; height: 90px"></textarea> <span style="color: rgb(0, 0, 0); font-family: Calibri; font-size: medium; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;"><br>
																																</span> <span style="color: rgb(0, 0, 0); font-family: Calibri; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 400; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255); text-decoration-style: initial; text-decoration-color: initial; display: inline !important; float: none;" class="style22">&lt;p&gt;Notes Row 1&lt;/p&gt;<br>
																																&lt;p&gt;Notes Row 2&lt;/p&gt;<br>
																																OR<br>
																																Notes Row 1&lt;br&gt;<br>
																																Notes Row 2&lt;br&gt;</span></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">MISCELLANEOUS FEES</td>
																																<td><input name="MiscFees" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="0.00"></td>
																												</tr>
																												</table>
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
