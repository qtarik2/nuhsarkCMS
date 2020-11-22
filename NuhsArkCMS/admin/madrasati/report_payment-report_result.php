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
<h2>PAYMENT REPORT</h2>
<?php 
$Month=$_POST['Month'];

echo "Month of:";
echo "$Month";
echo "<br><br>";
?>
<table class="table">
<thead>
<tr>
<th><strong>ID</strong></th>
<th>PAYMENT DATE</th>
<th>RECEIPT NO</th>
<th>NAME</th>
<th>AMOUNT</th>

</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_payment WHERE PaymentDate LIKE '%$Month' ORDER BY PaymentDate ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Amount"]; ?></td>
<td align="left"></td>

</tr>
<?php $count++; } ?>
</tbody>
</table>
<?php

// Calculation
    	$QuerySum1 = "SELECT SUM(Amount) FROM madrasati_payment WHERE PaymentDate LIKE '%$Month'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$TotalAmount = $row['SUM(Amount)'];
	 		}
	 	}
    	$QuerySum2 = "SELECT SUM(AnnualFees) FROM madrasati_payment WHERE PaymentDate LIKE '%$Month'";
	 	if ($result2 = mysqli_query($con, $QuerySum2)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result2)) {
	 			$TotalAnnualFees = $row['SUM(AnnualFees)'];
	 		}
	 	}
    	$QuerySum3 = "SELECT SUM(TermFees) FROM madrasati_payment WHERE PaymentDate LIKE '%$Month'";
	 	if ($result3 = mysqli_query($con, $QuerySum3)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result3)) {
	 			$TotalTermFees = $row['SUM(TermFees)'];
	 		}
	 	}
    	$QuerySum4 = "SELECT SUM(MiscFees) FROM madrasati_payment WHERE PaymentDate LIKE '%$Month'";
	 	if ($result4 = mysqli_query($con, $QuerySum4)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result4)) {
	 			$TotalMiscFees = $row['SUM(MiscFees)'];
	 		}
	 	}

/*
echo "<br>Amount        : MYR $TotalAmount";
echo "<br>Annual Fees   : MYR $TotalAnnualFees";
echo "<br>Term Fees     : MYR $TotalTermFees";
echo "<br><br>";
*/

?>

<table class="table">
<tbody>
<tr>
<td>TOTAL AMOUNT</td>
<td><?php echo "MYR $TotalAmount"; ?></td>
<td>TOTAL ENTRANCE FEES</td>
<td><?php echo "MYR $TotalAnnualFees"; ?></td>
<td>TOTAL ANNUAL FEES</td>
<td><?php echo "MYR $TotalTermFees"; ?></td>
<td>TOTAL MISC FEES</td>
<td><?php echo "MYR $TotalMiscFees"; ?></td>
</tr>
</tbody>
</table>

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
