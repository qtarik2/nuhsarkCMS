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
																
<link rel="stylesheet" href="../../css/style.css" />
<body>
<div class="form" style="width: 100%">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p><a href="../logout.php">Logout</a></p>
</div>

<?php
require('db.php');
include("auth.php");

$ID=$_REQUEST['ID'];
$query = "SELECT * FROM expenses WHERE ID='".$ID."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../../css/style.css" />
</head>
<body>
<div class="form" style="width: 100%">
<h2>EXPENSES &gt; MONTHLY/ANNUALLY BILLS &gt; UPDATE TRANSACTION</h2>
<!--webbot BOT="GeneratedScript" PREVIEW=" " startspan --><script Language="JavaScript" Type="text/javascript"><!--
function FrontPage_Form1_Validator(theForm)
{

  if (theForm.Type.selectedIndex < 0)
  {
    alert("Please select one of the \"Type\" options.");
    theForm.Type.focus();
    return (false);
  }

  if (theForm.Type.selectedIndex == 0)
  {
    alert("The first \"Type\" option is not a valid selection.  Please choose one of the other options.");
    theForm.Type.focus();
    return (false);
  }
  return (true);
}
//--></script><!--webbot BOT="GeneratedScript" endspan --><form name="FrontPage_Form1" method="post" action="" onsubmit="return FrontPage_Form1_Validator(this)" language="JavaScript"> 
<input type="hidden" name="new" value="1" />
<input name="ID" type="hidden" value="<?php echo $row['ID'];?>" />

<?php
$Progress = "UPDATING...";
if(isset($_POST['new']) && $_POST['new']==1)
{
$Date=$_REQUEST["Date"];
$Type=$_REQUEST["Type"];
$Name=$_REQUEST["Name"];
$Amount=$_REQUEST["Amount"];
$AccountNo=$_REQUEST["AccountNo"];
$AdditionalInfo=$_REQUEST["AdditionalInfo"];
$Status=$_REQUEST["Status"];

	$update="UPDATE expenses SET Date='".$Date."', Name='".$Name."', Amount='".$Amount."', AccountNo='".$AccountNo."', AdditionalInfo='".$AdditionalInfo."', Status='".$Status."'  WHERE ID='".$ID."'";
	mysqli_query($con, $update) or die(mysqli_error());
	
	$Progress = "UPDATED!</br></br>";
	echo '<p style="color:#FF0000;">'.$Progress.'</p>';
	print("<a href='nuhsark_account-transaction_add-transaction.php'>ADD DATA</a>");
	print("<br>");  
	print("<a href='nuhsark_account-transaction_summary.php'>SUMMARY</a>");
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
								<td style="width: 150px">Date</td>
								<td style="width: 442px"><?php echo $row["Date"]; ?></td>
								<td>
								<input type="text" name="Date" class="date" readonly placeholder="DD/MM/YYYY" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" value="<?php echo $row["Date"]; ?>" /><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script><script>
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
								<td style="width: 150px">Type</td>
								<td style="width: 442px"><?php echo $row["Type"]; ?></td>
								<td>
								<!--webbot bot="Validation" b-value-required="TRUE" b-disallow-first-item="TRUE" -->
								<select name="Type" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;">
																																<option>Type</option>
																																<option value="NUHSARK SALARY">NUHSARK SALARY</option>
																																<option value="MMP SALARY">MMP SALARY</option>
																																<option value="CLAIM">CLAIM</option>
																																<option value="ALLOWANCES">ALLOWANCES</option>
																																<option value="MONTHLY BILLS">MONTHLY BILLS</option>
																																<option value="PERKESO">PERKESO</option>
																																<option value="PERKESO SIP">PERKESO SIP</option>
																																<option value="KWSP">KWSP</option>
																																<option value="OTHERS">OTHERS</option>
																																<option value="NASB">NASB</option>
																																<option value="ANNUAL BILLS">ANNUAL BILLS</option>
																																<option value="CASH OUT MAINTENANCE">CASH OUT MAINTENANCE</option>
																																<option value="CASH OUT SERVICE">CASH OUT SERVICE</option>
																																<option value="PETTY CASH">PETTY CASH</option>
																																</select></td>
				</tr>
				<tr>
								<td style="width: 150px">Name</td>
								<td style="width: 442px"><?php echo $row["Name"]; ?></td>
								<td>
								<input name="Name" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Name"]; ?>"></td>
				</tr>
				<tr>
								<td style="width: 150px">Amount</td>
								<td style="width: 442px"><?php echo $row["Amount"]; ?></td>
								<td>
								<input name="Amount" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Amount"]; ?>"></td>
				</tr>
				<tr>
								<td style="width: 150px">Account No.</td>
								<td style="width: 442px"><?php echo $row["AccountNo"]; ?></td>
								<td>
								<input name="AccountNo" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["AccountNo"]; ?>"></td>
				</tr>
				<tr>
								<td style="width: 150px">Additional Info</td>
								<td style="width: 442px"><?php echo $row["AdditionalInfo"]; ?></td>
								<td>
								<input name="AdditionalInfo" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["AdditionalInfo"]; ?>"></td>
				</tr>
				<tr>
								<td style="width: 150px">Status</td>
								<td style="width: 442px"><?php echo $row["Status"]; ?></td>
								<td>
								<select name="Status" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;">
																																<option value="UNPAID">UNPAID</option>
																																<option value="PAID">PAID</option>
																																</select></td>
				</tr>
				</table>
<br>
																								<p><button type="submit" class="btn btn-default">Submit</button></p></form>
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
