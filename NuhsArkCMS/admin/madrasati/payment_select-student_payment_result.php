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
<p><a href="../logout.php">Logout</a></p>
<form method="post" action="payment_select-student_payment_result.php" onsubmit="return FrontPage_Form1_Validator(this)" language="JavaScript" name="FrontPage_Form1">
<h2>PAYMENT &gt; SELECT INVOICE &gt; PAYMENT &gt; RESULT</h2>

<?php

require('db.php');
include("auth.php");

$ReceiptNo=$_POST['ReceiptNo'];
$EmailAddress=$_POST['EmailAddress'];
$StudentID=$_POST['StudentID'];
$Name=$_POST['Name'];
$InvoiceNo=$_POST['InvoiceNo'];
$Date=$_POST['Date'];
$Programme=$_POST['Programme'];

$PaymentDate=$_POST['PaymentDate'];
$Method=$_POST['Method'];
$ChequeNo=$_POST['ChequeNo'];
$Amount=$_POST['Amount'];

$Registration=$_POST['Registration'];
$Security=$_POST['Security'];
$Equipment=$_POST['Equipment'];
$Program=$_POST['Program'];
$Uniform=$_POST['Uniform'];
$Takaful=$_POST['Takaful'];
$Extra1=$_POST['Extra1'];

$Term=$_POST['Term'];
$Extra2=$_POST['Extra2'];
$Notes=$_POST['Notes'];

$AnnualFees=$_POST['AnnualFees'];
$TermFees=$_POST['TermFees'];
$MiscFees=$_POST['MiscFees'];

$Status1=$_POST["Status1"];
$Status2=$_POST["Status2"];
$Status3=$_POST["Status3"];

$AnnualFees = $Registration + $Security + $Equipment + $Program + $Uniform + $Takaful + $Extra1;
$TermFees = $Term + $Extra2;

$Amount = $AnnualFees + $TermFees + $MiscFees;
$Surestart = $Amount;

	// Insert data into mysql 
	
	$query = "INSERT INTO madrasati_payment VALUES (NULL, '$EmailAddress', '$StudentID', '$Name', '$InvoiceNo', '$Date', '$PaymentDate', '$Method', '$ChequeNo', '$Amount', '$Registration', '$Security', '$Program', '$Equipment', '$Uniform', '$Takaful', '$Extra1', '$Term', '$Extra2', '$Notes', '$AnnualFees', '$TermFees', '$MiscFees', '$Programme', '$Amount', '0.00', '0.00', '$Status1', '$Status2', '$Status3')";
	mysqli_query($con, $query);
		
	print("<br>DATA UPDATED!");
	print("<br><br>");  
	print("<a href='payment_select-student.php'>ADD DATA</a>");
	print("<br>");  
	print("<a href='payment_summary.php'>SUMMARY</a>");
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
