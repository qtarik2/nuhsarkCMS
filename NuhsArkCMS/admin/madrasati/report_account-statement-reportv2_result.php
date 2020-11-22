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
<p><a href="../logout.php">Logout</a></p>
</div>

<?php
require('db.php');
include("auth.php");

?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<div class="form" style="width: 100%">
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<div class="form" style="width: 100%">
<h2>ACCOUNT STATEMENT REPORT</h2>
<?php 
$Month=$_POST['Month'];

echo "Month of:";
echo "$Month";
echo "<br><br>";
?>
<table class="table">
<thead>
<tr>
<th><strong>DATE</strong></th>
<th><strong>TYPE</strong></th>
<th><strong>DESCRIPTIONS</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>FOLIO</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_accountstatement WHERE Date LIKE '%$Month' AND TransactionID='DEPOSITS' ORDER BY Date ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left"><?php echo $row["Type"]; ?></td>
<td align="left"><?php echo $row["Description"]; ?></td>
<td align="left"><?php echo $row["Details"]; ?></td>
<td align="left"><?php echo $row["Folio"]; ?></td>
<td align="left">MYR <?php echo $row["Deposit"]; ?></td>
<td align="left"></td>
</tr>
<?php $count++; } ?>
</tbody>
<tr>
<th><strong>DATE</strong></th>
<th><strong>TYPE</strong></th>
<th><strong>DESCRIPTIONS</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>FOLIO</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_accountstatement WHERE Date LIKE '%$Month' AND TransactionID='WITHDRAWALS' ORDER BY Date ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left"><?php echo $row["Type"]; ?></td>
<td align="left"><?php echo $row["Description"]; ?></td>
<td align="left"><?php echo $row["Details"]; ?></td>
<td align="left"><?php echo $row["Folio"]; ?></td>
<td align="left"></td>
<td align="left">MYR <?php echo $row["Withdrawal"]; ?></td>
</tr>
<?php $count++; } ?>
</tbody>
</table>

<?php

// Calculation
    	$QuerySum1 = "SELECT SUM(Deposit) FROM madrasati_accountstatement WHERE Date LIKE '%$Month'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$Deposit = $row['SUM(Deposit)'];
	 		}
	 	}
    	$QuerySum2 = "SELECT SUM(Withdrawal) FROM madrasati_accountstatement WHERE Date LIKE '%$Month'";
	 	if ($result2 = mysqli_query($con, $QuerySum2)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result2)) {
	 			$Withdrawal = $row['SUM(Withdrawal)'];
	 		}
	 	}

// Calculation
    	$Query1 = "SELECT SUM(Opening) FROM madrasati_ocbalance WHERE Date LIKE '%$Month'";
	 	if ($result1 = mysqli_query($con, $Query1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$Opening = $row['SUM(Opening)'];
	 		}
	 	}
    	$Query2 = "SELECT SUM(Closing) FROM madrasati_ocbalance WHERE Date LIKE '%$Month'";
	 	if ($result2 = mysqli_query($con, $Query2)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result2)) {
	 			$Closing = $row['SUM(Closing)'];
	 		}
	 	}
	 	
// $Deposit=$Surestart+$NACC+$MMP;
// $Withdrawal=$PayToNACC+$PayToRoselina;
// $Balance=$Deposit-$Withdrawal;

$Format_Deposit = number_format($Deposit, 2, '.', '');
$Format_Withdrawal = number_format($Withdrawal, 2, '.', '');
$Format_Balance = number_format($Balance, 2, '.', '');
$Format_Opening = number_format($Opening, 2, '.', '');
$Format_Closing = number_format($Closing, 2, '.', '');
	 	
//		$update="UPDATE madrasati_ocbalance SET Closing='".$Closing."' WHERE Date LIKE '%$Month'";
//		mysqli_query($con, $update) or die(mysqli_error());

?>
<table class="table">
<thead>
<tr>
<th>OPENING BALANCE</th>
<th>MYR <?php echo "$Format_Opening"; ?></th>
<th>DEPOSIT</th>
<th>MYR <?php echo "$Format_Deposit"; ?></th>
<th>WITHDRAWAL</th>
<th>MYR <?php echo "$Format_Withdrawal"; ?></th>
<th>CLOSING BALANCE</th>
<th>MYR <?php echo "$Format_Closing"; ?></th>
</tr>

</thead>
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
