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
																
<link rel="stylesheet" href="css/style.css" />
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
</head>
<body>
<div class="form" style="width: 100%">
<h2>ANNUAL FEES REPORT (ENTRANCE FEES REPORT)</h2>
<p><a target="_blank" href="report_annual-fees-report_print.php">PRINT</a>
</p>
<?php 
$Month=$_POST['Month'];

echo "Year:";
echo "$Month";
echo "<br><br>";
?>
<table class="table">
<thead>
<tr>
<th><strong>ID</strong></th>
<th>STUDENT NAME</th>
<th>INVOICE</th>
<th>PAYMENT</th>
<th>BALANCE</th>
<th>REG</th>
<th>SEC</th>
<th>PRO</th>
<th>EQU</th>
<th>UNI</th>
<th>TAK</th>
<th>6YR</th>
<th>MISC</th>
<th>TERM</th>
<th>EXTRA</th>
<th>UPDATE</th>
</tr>
</thead>
<tr><td colspan="4">PRESCHOOL HALF DAY</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM accountsummary WHERE StudentID LIKE '$Month%' AND Programme = 'PRESCHOOL HALF DAY'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

?>

<tr>
<td align="left"><?php echo $row["ID"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Debit"]; ?></td>
<td align="left"><?php echo $row["Credit"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
<td align="left"><?php echo $row["Registration"]; ?></td>
<td align="left"><?php echo $row["Security"]; ?></td>
<td align="left"><?php echo $row["Program"]; ?></td>
<td align="left"><?php echo $row["Equipment"]; ?></td>
<td align="left"><?php echo $row["Uniform"]; ?></td>
<td align="left"><?php echo $row["Takaful"]; ?></td>
<td align="left"><?php echo $row["Extra1"]; ?></td>
<td align="left"><?php echo $row["MiscFees"]; ?></td>
<td align="left"><?php echo $row["Term"]; ?></td>
<td align="left"><?php echo $row["Extra2"]; ?></td>
<td align="left">
<a target="_blank" href="account-statement_details.php?StudentID=<?php echo $row["StudentID"]; ?>">STUDENT ACCOUNT STATEMENT</a> 
</td>
</tr>

<?php $count++; } ?>

<tr><td colspan="4">PRESCHOOL FULL DAY</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM accountsummary WHERE StudentID LIKE '$Month%' AND Programme = 'PRESCHOOL FULL DAY'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

?>

<tr>
<td align="left"><?php echo $row["ID"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Debit"]; ?></td>
<td align="left"><?php echo $row["Credit"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
<td align="left"><?php echo $row["Registration"]; ?></td>
<td align="left"><?php echo $row["Security"]; ?></td>
<td align="left"><?php echo $row["Program"]; ?></td>
<td align="left"><?php echo $row["Equipment"]; ?></td>
<td align="left"><?php echo $row["Uniform"]; ?></td>
<td align="left"><?php echo $row["Takaful"]; ?></td>
<td align="left"><?php echo $row["Extra1"]; ?></td>
<td align="left"><?php echo $row["MiscFees"]; ?></td>
<td align="left"><?php echo $row["Term"]; ?></td>
<td align="left"><?php echo $row["Extra2"]; ?></td>
<td align="left">
<a target="_blank" href="account-statement_details.php?StudentID=<?php echo $row["StudentID"]; ?>">STUDENT ACCOUNT STATEMENT</a> 
</td>
</tr>

<?php $count++; } ?>

<tr><td colspan="4">PRESCHOOL HALF DAY SPECIAL</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM accountsummary WHERE StudentID LIKE '$Month%' AND Programme = 'PRESCHOOL HALF DAY SPECIAL'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

?>

<tr>
<td align="left"><?php echo $row["ID"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Debit"]; ?></td>
<td align="left"><?php echo $row["Credit"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
<td align="left"><?php echo $row["Registration"]; ?></td>
<td align="left"><?php echo $row["Security"]; ?></td>
<td align="left"><?php echo $row["Program"]; ?></td>
<td align="left"><?php echo $row["Equipment"]; ?></td>
<td align="left"><?php echo $row["Uniform"]; ?></td>
<td align="left"><?php echo $row["Takaful"]; ?></td>
<td align="left"><?php echo $row["Extra1"]; ?></td>
<td align="left"><?php echo $row["MiscFees"]; ?></td>
<td align="left"><?php echo $row["Term"]; ?></td>
<td align="left"><?php echo $row["Extra2"]; ?></td>
<td align="left">
<a target="_blank" href="account-statement_details.php?StudentID=<?php echo $row["StudentID"]; ?>">STUDENT ACCOUNT STATEMENT</a> 
</td>
</tr>

<?php $count++; } ?>

<tr><td colspan="4">PRESCHOOL FULL DAY SPECIAL</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM accountsummary WHERE StudentID LIKE '$Month%' AND Programme = 'PRESCHOOL FULL DAY SPECIAL'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

?>

<tr>
<td align="left"><?php echo $row["ID"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Debit"]; ?></td>
<td align="left"><?php echo $row["Credit"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
<td align="left"><?php echo $row["Registration"]; ?></td>
<td align="left"><?php echo $row["Security"]; ?></td>
<td align="left"><?php echo $row["Program"]; ?></td>
<td align="left"><?php echo $row["Equipment"]; ?></td>
<td align="left"><?php echo $row["Uniform"]; ?></td>
<td align="left"><?php echo $row["Takaful"]; ?></td>
<td align="left"><?php echo $row["Extra1"]; ?></td>
<td align="left"><?php echo $row["MiscFees"]; ?></td>
<td align="left"><?php echo $row["Term"]; ?></td>
<td align="left"><?php echo $row["Extra2"]; ?></td>
<td align="left">
<a target="_blank" href="account-statement_details.php?StudentID=<?php echo $row["StudentID"]; ?>">STUDENT ACCOUNT STATEMENT</a> 
</td>
</tr>

<?php $count++; } ?>

<tr><td colspan="4">RECEPTION</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM accountsummary WHERE StudentID LIKE '$Month%' AND Programme = 'RECEPTION'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

?>

<tr>
<td align="left"><?php echo $row["ID"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Debit"]; ?></td>
<td align="left"><?php echo $row["Credit"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
<td align="left"><?php echo $row["Registration"]; ?></td>
<td align="left"><?php echo $row["Security"]; ?></td>
<td align="left"><?php echo $row["Program"]; ?></td>
<td align="left"><?php echo $row["Equipment"]; ?></td>
<td align="left"><?php echo $row["Uniform"]; ?></td>
<td align="left"><?php echo $row["Takaful"]; ?></td>
<td align="left"><?php echo $row["Extra1"]; ?></td>
<td align="left"><?php echo $row["MiscFees"]; ?></td>
<td align="left"><?php echo $row["Term"]; ?></td>
<td align="left"><?php echo $row["Extra2"]; ?></td>
<td align="left">
<a target="_blank" href="account-statement_details.php?StudentID=<?php echo $row["StudentID"]; ?>">STUDENT ACCOUNT STATEMENT</a> 
</td>
</tr>

<?php $count++; } ?>

<tr><td colspan="4">RECEPTION FULL DAY</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM accountsummary WHERE StudentID LIKE '$Month%' AND Programme = 'RECEPTION FULL DAY'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

?>

<tr>
<td align="left"><?php echo $row["ID"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Debit"]; ?></td>
<td align="left"><?php echo $row["Credit"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
<td align="left"><?php echo $row["Registration"]; ?></td>
<td align="left"><?php echo $row["Security"]; ?></td>
<td align="left"><?php echo $row["Program"]; ?></td>
<td align="left"><?php echo $row["Equipment"]; ?></td>
<td align="left"><?php echo $row["Uniform"]; ?></td>
<td align="left"><?php echo $row["Takaful"]; ?></td>
<td align="left"><?php echo $row["Extra1"]; ?></td>
<td align="left"><?php echo $row["MiscFees"]; ?></td>
<td align="left"><?php echo $row["Term"]; ?></td>
<td align="left"><?php echo $row["Extra2"]; ?></td>
<td align="left">
<a target="_blank" href="account-statement_details.php?StudentID=<?php echo $row["StudentID"]; ?>">STUDENT ACCOUNT STATEMENT</a> 
</td>
</tr>

<?php $count++; } ?>

<tr><td colspan="4">RECEPTION 6 YEARS OLD</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM accountsummary WHERE StudentID LIKE '$Month%' AND Programme = 'RECEPTION 6 YEARS OLD'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

?>

<tr>
<td align="left"><?php echo $row["ID"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Debit"]; ?></td>
<td align="left"><?php echo $row["Credit"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
<td align="left"><?php echo $row["Registration"]; ?></td>
<td align="left"><?php echo $row["Security"]; ?></td>
<td align="left"><?php echo $row["Program"]; ?></td>
<td align="left"><?php echo $row["Equipment"]; ?></td>
<td align="left"><?php echo $row["Uniform"]; ?></td>
<td align="left"><?php echo $row["Takaful"]; ?></td>
<td align="left"><?php echo $row["Extra1"]; ?></td>
<td align="left"><?php echo $row["MiscFees"]; ?></td>
<td align="left"><?php echo $row["Term"]; ?></td>
<td align="left"><?php echo $row["Extra2"]; ?></td>
<td align="left">
<a target="_blank" href="account-statement_details.php?StudentID=<?php echo $row["StudentID"]; ?>">STUDENT ACCOUNT STATEMENT</a> 
</td>
</tr>

<?php $count++; } ?>

<tr><td colspan="4">COMPLIMENTARY</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM accountsummary WHERE StudentID LIKE '$Month%' AND Programme = 'COMPLIMENTARY'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

?>

<tr>
<td align="left"><?php echo $row["ID"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Debit"]; ?></td>
<td align="left"><?php echo $row["Credit"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
<td align="left"><?php echo $row["Registration"]; ?></td>
<td align="left"><?php echo $row["Security"]; ?></td>
<td align="left"><?php echo $row["Program"]; ?></td>
<td align="left"><?php echo $row["Equipment"]; ?></td>
<td align="left"><?php echo $row["Uniform"]; ?></td>
<td align="left"><?php echo $row["Takaful"]; ?></td>
<td align="left"><?php echo $row["Extra1"]; ?></td>
<td align="left"><?php echo $row["MiscFees"]; ?></td>
<td align="left"><?php echo $row["Term"]; ?></td>
<td align="left"><?php echo $row["Extra2"]; ?></td>
<td align="left">
<a target="_blank" href="account-statement_details.php?StudentID=<?php echo $row["StudentID"]; ?>">STUDENT ACCOUNT STATEMENT</a> 
</td>
</tr>

<?php $count++; } ?>



</tbody>
</table>
<?php

// Calculation
//    	$QuerySum1 = "SELECT SUM(Amount) FROM payment WHERE Date LIKE '%$Month'";
//	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
//		    /* fetch associative array */
//		    while ($row = mysqli_fetch_array($result1)) {
//	 			$Deposit = $row['SUM(Amount)'];
//	 		}
//	 	}
	 	
// $Closing = $Opening + $Deposit - $Withdrawal;
	 	
		// $update="UPDATE ocbalance SET Closing='".$Closing."' WHERE Date LIKE '%$Month'";
		// mysqli_query($con, $update) or die(mysqli_error());

?>

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
