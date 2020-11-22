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
$ReceiptNo=$_REQUEST['ReceiptNo'];

$query = "SELECT * FROM madrasati_payment WHERE ReceiptNo='".$ReceiptNo."'"; 
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
<h2>PAYMENT &gt; SELECT PAYMENT &gt; UPDATE</h2>
<form name="FrontPage_Form1" method="post" action="" onsubmit="return FrontPage_Form1_Validator(this)" language="JavaScript"> 
<input type="hidden" name="new" value="1" />
<input name="ID" type="hidden" value="<?php echo $row['ID'];?>" />

<?php
$Progress = "UPDATING...";
if(isset($_POST['new']) && $_POST['new']==1)
{

$EmailAddress=$_REQUEST["EmailAddress"];
$StudentID=$_REQUEST["StudentID"];
$Name=$_REQUEST["Name"];
$ReceiptNo=$_REQUEST["ReceiptNo"];
$InvoiceNo=$_REQUEST["InvoiceNo"];
$Date=$_REQUEST["Date"];
$PaymentDate=$_REQUEST["PaymentDate"];
$Amount=$_REQUEST["Amount"];
$Programme=$_REQUEST["Programme"];

$Registration=$_REQUEST["Registration"];
$Security=$_REQUEST["Security"];
$Program=$_REQUEST["Program"];
$Equipment=$_REQUEST["Equipment"];
$Uniform=$_REQUEST["Uniform"];
$Takaful=$_REQUEST["Takaful"];
$Extra1=$_REQUEST["Extra1"];

$Term=$_REQUEST["Term"];
$Extra2=$_REQUEST["Extra2"];

$Notes=$_REQUEST["Notes"];

$AnnualFees=$_REQUEST["AnnualFees"];
$TermFees=$_REQUEST["TermFees"];
$MiscFees=$_REQUEST["MiscFees"];
$Surestart=$_REQUEST["Surestart"];
$NACC=$_REQUEST["NACC"];
$MMP=$_REQUEST["MMP"];

$Status1=$_REQUEST["Status1"];
$Status2=$_REQUEST["Status2"];
$Status3=$_REQUEST["Status3"];

$AnnualFees = $Registration + $Security + $Equipment + $Program + $Uniform + $Takaful + $Extra1;
$TermFees = $Term + $Extra2;

$Amount = $AnnualFees + $TermFees + $MiscFees;
$Surestart = $Amount;

	$update="UPDATE madrasati_payment SET 
	Date='".$Date."', 
	PaymentDate='".$PaymentDate."', 
	Amount='".$Amount."', 
	Registration='".$Registration."',
	Security='".$Security."',
	Program='".$Program."',
	Equipment='".$Equipment."',
	Uniform='".$Uniform."',
	Takaful='".$Takaful."',
	Extra1='".$Extra1."',
	Term='".$Term."',
	Extra2='".$Extra2."',
	AnnualFees='".$AnnualFees."',
	TermFees='".$TermFees."',
	MiscFees='".$MiscFees."',
	Notes='".$Notes."',
	Programme='".$Programme."',
	Surestart='".$Surestart."',
	NACC='".$NACC."',
	MMP='".$MMP."',
	Status1='".$Status1."',
	Status2='".$Status2."',
	Status3='".$Status3."'
	WHERE ReceiptNo='".$ReceiptNo."'";
	mysqli_query($con, $update) or die(mysqli_error());
	$Progress = "UPDATED!</br></br>";
	echo '<p style="color:#FF0000;">'.$Progress.'</p>';  
	print("<a href='payment_summary.php'>SUMMARY</a>");
	print("<br>");
	}
	else {
	?>

<table class="table">
				<tr>
								<td style="width: 150px">Receipt No</td>
								<td style="width: 442px"><?php echo $row["ReceiptNo"]; ?></td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Invoice No</td>
								<td style="width: 442px"><?php echo $row["InvoiceNo"]; ?></td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Email Address</td>
								<td style="width: 442px"><?php echo $row["EmailAddress"]; ?></td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Student ID</td>
								<td style="width: 442px"><?php echo $row["StudentID"]; ?></td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Name</td>
								<td style="width: 442px"><?php echo $row["Name"]; ?></td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Date</td>
								<td style="width: 442px"><?php echo $row["Date"]; ?><br><input type="text" name="Date" class="date" readonly placeholder="DD/MM/YYYY" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" value="<?php echo $row["Date"]; ?>" /><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script><script>
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
								<td>
								</td>
				</tr>
<tr>
								<td style="width: 150px">Payment Date</td>
								<td style="width: 442px"><?php echo $row["PaymentDate"]; ?><br><input type="text" name="PaymentDate" class="date" readonly placeholder="DD/MM/YYYY" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" value="<?php echo $row["PaymentDate"]; ?>" /><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script><script>
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
								<td>
								</td>
				</tr>

				<tr>
								<td style="width: 150px">Registration</td>
								<td style="width: 442px">
								<input name="Registration" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Registration"]; ?>"></td>
								<td>
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Security</td>
								<td style="width: 442px">
								<input name="Security" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Security"]; ?>"></td>
								<td>
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Program</td>
								<td style="width: 442px">
								<input name="Program" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Program"]; ?>"></td>
								<td>
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Equipment</td>
								<td style="width: 442px">
								<input name="Equipment" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Equipment"]; ?>"></td>
								<td>
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Uniform</td>
								<td style="width: 442px">
								<input name="Uniform" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Uniform"]; ?>"></td>
								<td>
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Takaful</td>
								<td style="width: 442px">
								<input name="Takaful" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Takaful"]; ?>"></td>
								<td>
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Extra 1</td>
								<td style="width: 442px">
								<input name="Extra1" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Extra1"]; ?>"> [ 6 YEARS OLD / OTHERS 
								]</td>
								<td>
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Term Fee</td>
								<td style="width: 442px">
								<input name="Term" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Term"]; ?>"></td>
								<td>
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Extra 2</td>
								<td style="width: 442px">
								<input name="Extra2" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Extra2"]; ?>"> [ TRANSPORT / OTHERS ]</td>
								<td>
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Notes</td>
								<td style="width: 442px">
								<textarea name="Notes" style="font-family: Verdana; font-size: 16 pt; width: 242px; height: 90px" rows="1" cols="20"><?php echo $row["Notes"]; ?>
</textarea></td>
								<td>
								&lt;p&gt;Notes Row 1&lt;/p&gt;<br>
								&lt;p&gt;Notes Row 2&lt;/p&gt;<br>
								OR <br>
								Notes Row 1&lt;br&gt;<br>
								Notes Row 2&lt;br&gt;</td>
				</tr>
				<tr>
								<td style="width: 150px">Miscellaneous Fee</td>
								<td style="width: 442px">
								<input name="MiscFees" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["MiscFees"]; ?>"></td>
								<td>
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Programme</td>
								<td style="width: 442px">
								<input name="Programme" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Programme"]; ?>"></td>
								<td>
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Registration Fee</td>
								<td style="width: 442px">
								<input name="Status1" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Status1"]; ?>"> 
								[PENDING / DONE]</td>
								<td>
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">PDF Receipt</td>
								<td style="width: 442px">
								<input name="Status2" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Status2"]; ?>"> 
								[PENDING / DONE]</td>
								<td>
								&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Send Mail</td>
								<td style="width: 442px">
								<input name="Status3" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Status3"]; ?>"> 
								[PENDING / DONE]</td>
								<td>
								&nbsp;</td>
				</tr>
				</table>
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
