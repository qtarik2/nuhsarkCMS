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
</head>
<body>
<div class="form" style="width: 100%">
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<div class="form" style="width: 100%">
<h2>ANNUAL ACCOUNT STATEMENT REPORT</h2>
<?php 
$Month=$_POST['Month'];

echo "Year:";
echo "$Month";
echo "<br><br>";
?>
<table class="table">
<h3>JANUARY</h3>
<thead>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>PAYMENTS RECEIVED</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_payment WHERE PaymentDate LIKE '/01/%$Month' ORDER BY PaymentDate ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Notes"]; ?></td>
<td align="left"><?php echo $row["Amount"]; ?></td>
<td align="left"></td>

</tr>
<?php $count++; } ?>
</tbody>
<tbody>
<thead>
<tr>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
</tr>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>EXPENSES</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_expenses WHERE Backdated LIKE '/01/%$Month' AND Status='PAID' ORDER BY Backdated ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["Backdated"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Type"]; ?></td>
<td align="left"></td>
<td align="left"><?php echo $row["Amount"]; ?></td>

</tr>
<?php $count++; } ?>

<table class="table">
<h3>FEBRUARY</h3>
<thead>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>PAYMENTS RECEIVED</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_payment WHERE PaymentDate LIKE '/02/%$Month' ORDER BY PaymentDate ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Notes"]; ?></td>
<td align="left"><?php echo $row["Amount"]; ?></td>
<td align="left"></td>

</tr>
<?php $count++; } ?>
</tbody>
<tbody>
<thead>
<tr>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
</tr>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>EXPENSES</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_expenses WHERE Backdated LIKE '/02/%$Month' AND Status='PAID' ORDER BY Backdated ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["Backdated"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Type"]; ?></td>
<td align="left"></td>
<td align="left"><?php echo $row["Amount"]; ?></td>

</tr>
<?php $count++; } ?>

<table class="table">
<h3>MARCH</h3>
<thead>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>PAYMENTS RECEIVED</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_payment WHERE PaymentDate LIKE '/03/%$Month' ORDER BY PaymentDate ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Notes"]; ?></td>
<td align="left"><?php echo $row["Amount"]; ?></td>
<td align="left"></td>

</tr>
<?php $count++; } ?>
</tbody>
<tbody>
<thead>
<tr>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
</tr>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>EXPENSES</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_expenses WHERE Backdated LIKE '/03/%$Month' AND Status='PAID' ORDER BY Backdated ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["Backdated"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Type"]; ?></td>
<td align="left"></td>
<td align="left"><?php echo $row["Amount"]; ?></td>

</tr>
<?php $count++; } ?>

<table class="table">
<h3>APRIL</h3>
<thead>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>PAYMENTS RECEIVED</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_payment WHERE PaymentDate LIKE '/04/%$Month' ORDER BY PaymentDate ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Notes"]; ?></td>
<td align="left"><?php echo $row["Amount"]; ?></td>
<td align="left"></td>

</tr>
<?php $count++; } ?>
</tbody>
<tbody>
<thead>
<tr>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
</tr>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>EXPENSES</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_expenses WHERE Backdated LIKE '/04/%$Month' AND Status='PAID' ORDER BY Backdated ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["Backdated"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Type"]; ?></td>
<td align="left"></td>
<td align="left"><?php echo $row["Amount"]; ?></td>

</tr>
<?php $count++; } ?>

<table class="table">
<h3>MAY</h3>
<thead>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>PAYMENTS RECEIVED</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_payment WHERE PaymentDate LIKE '/05/%$Month' ORDER BY PaymentDate ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Notes"]; ?></td>
<td align="left"><?php echo $row["Amount"]; ?></td>
<td align="left"></td>

</tr>
<?php $count++; } ?>
</tbody>
<tbody>
<thead>
<tr>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
</tr>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>EXPENSES</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_expenses WHERE Backdated LIKE '/05/%$Month' AND Status='PAID' ORDER BY Backdated ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["Backdated"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Type"]; ?></td>
<td align="left"></td>
<td align="left"><?php echo $row["Amount"]; ?></td>

</tr>
<?php $count++; } ?>

<table class="table">
<h3>JUNE</h3>
<thead>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>PAYMENTS RECEIVED</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_payment WHERE PaymentDate LIKE '/06/%$Month' ORDER BY PaymentDate ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Notes"]; ?></td>
<td align="left"><?php echo $row["Amount"]; ?></td>
<td align="left"></td>

</tr>
<?php $count++; } ?>
</tbody>
<tbody>
<thead>
<tr>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
</tr>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>EXPENSES</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_expenses WHERE Backdated LIKE '/06/%$Month' AND Status='PAID' ORDER BY Backdated ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["Backdated"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Type"]; ?></td>
<td align="left"></td>
<td align="left"><?php echo $row["Amount"]; ?></td>

</tr>
<?php $count++; } ?>

<table class="table">
<h3>JULY</h3>
<thead>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>PAYMENTS RECEIVED</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_payment WHERE PaymentDate LIKE '/07/%$Month' ORDER BY PaymentDate ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Notes"]; ?></td>
<td align="left"><?php echo $row["Amount"]; ?></td>
<td align="left"></td>

</tr>
<?php $count++; } ?>
</tbody>
<tbody>
<thead>
<tr>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
</tr>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>EXPENSES</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_expenses WHERE Backdated LIKE '/07/%$Month' AND Status='PAID' ORDER BY Backdated ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["Backdated"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Type"]; ?></td>
<td align="left"></td>
<td align="left"><?php echo $row["Amount"]; ?></td>

</tr>
<?php $count++; } ?>

<table class="table">
<h3>AUGUST</h3>
<thead>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>PAYMENTS RECEIVED</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_payment WHERE PaymentDate LIKE '/08/%$Month' ORDER BY PaymentDate ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Notes"]; ?></td>
<td align="left"><?php echo $row["Amount"]; ?></td>
<td align="left"></td>

</tr>
<?php $count++; } ?>
</tbody>
<tbody>
<thead>
<tr>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
</tr>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>EXPENSES</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_expenses WHERE Backdated LIKE '/08/%$Month' AND Status='PAID' ORDER BY Backdated ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["Backdated"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Type"]; ?></td>
<td align="left"></td>
<td align="left"><?php echo $row["Amount"]; ?></td>

</tr>
<?php $count++; } ?>

<table class="table">
<h3>SEPTEMBER</h3>
<thead>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>PAYMENTS RECEIVED</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_payment WHERE PaymentDate LIKE '/09/%$Month' ORDER BY PaymentDate ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Notes"]; ?></td>
<td align="left"><?php echo $row["Amount"]; ?></td>
<td align="left"></td>

</tr>
<?php $count++; } ?>
</tbody>
<tbody>
<thead>
<tr>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
</tr>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>EXPENSES</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_expenses WHERE Backdated LIKE '/09/%$Month' AND Status='PAID' ORDER BY Backdated ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["Backdated"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Type"]; ?></td>
<td align="left"></td>
<td align="left"><?php echo $row["Amount"]; ?></td>

</tr>
<?php $count++; } ?>

<table class="table">
<h3>OCTOBER</h3>
<thead>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>PAYMENTS RECEIVED</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_payment WHERE PaymentDate LIKE '/10/%$Month' ORDER BY PaymentDate ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Notes"]; ?></td>
<td align="left"><?php echo $row["Amount"]; ?></td>
<td align="left"></td>

</tr>
<?php $count++; } ?>
</tbody>
<tbody>
<thead>
<tr>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
</tr>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>EXPENSES</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_expenses WHERE Backdated LIKE '/10/%$Month' AND Status='PAID' ORDER BY Backdated ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["Backdated"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Type"]; ?></td>
<td align="left"></td>
<td align="left"><?php echo $row["Amount"]; ?></td>

</tr>
<?php $count++; } ?>

<table class="table">
<h3>NOVEMBER</h3>
<thead>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>PAYMENTS RECEIVED</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_payment WHERE PaymentDate LIKE '/11/%$Month' ORDER BY PaymentDate ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Notes"]; ?></td>
<td align="left"><?php echo $row["Amount"]; ?></td>
<td align="left"></td>

</tr>
<?php $count++; } ?>
</tbody>
<tbody>
<thead>
<tr>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
</tr>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>EXPENSES</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_expenses WHERE Backdated LIKE '/11/%$Month' AND Status='PAID' ORDER BY Backdated ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["Backdated"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Type"]; ?></td>
<td align="left"></td>
<td align="left"><?php echo $row["Amount"]; ?></td>

</tr>
<?php $count++; } ?>

<table class="table">
<h3>DECEMBER</h3>
<thead>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>PAYMENTS RECEIVED</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_payment WHERE PaymentDate LIKE '/12/%$Month' ORDER BY PaymentDate ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Notes"]; ?></td>
<td align="left"><?php echo $row["Amount"]; ?></td>
<td align="left"></td>

</tr>
<?php $count++; } ?>
</tbody>
<tbody>
<thead>
<tr>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
<th><strong></strong></th>
</tr>
<tr>
<th><strong>NO</strong></th>
<th><strong>DATE</strong></th>
<th><strong>NAME</strong></th>
<th><strong>DETAILS</strong></th>
<th><strong>DEPOSITS</strong></th>
<th><strong>WITHDRAWAL</strong></th>
</tr>
<tr>
<th colspan="6"><strong>EXPENSES</strong></th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM madrasati_expenses WHERE Backdated LIKE '/12/%$Month' AND Status='PAID' ORDER BY Backdated ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["Backdated"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Type"]; ?></td>
<td align="left"></td>
<td align="left"><?php echo $row["Amount"]; ?></td>

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
	 			$Deposit = $row['SUM(Amount)'];
	 		}
	 	}
    	$QuerySum2 = "SELECT SUM(Surestart) FROM madrasati_payment WHERE PaymentDate LIKE '%$Month'";
	 	if ($result2 = mysqli_query($con, $QuerySum2)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result2)) {
	 			$Surestart = $row['SUM(Surestart)'];
	 		}
	 	}
	 	$QuerySum3 = "SELECT SUM(NACC) FROM madrasati_payment WHERE PaymentDate LIKE '%$Month'";
	 	if ($result3 = mysqli_query($con, $QuerySum3)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result3)) {
	 			$NACC = $row['SUM(NACC)'];
	 		}
	 	}
    	$QuerySum4 = "SELECT SUM(MMP) FROM madrasati_payment WHERE PaymentDate LIKE '%$Month'";
	 	if ($result4 = mysqli_query($con, $QuerySum4)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result4)) {
	 			$MMP = $row['SUM(MMP)'];
	 		}
	 	}

    	$QuerySum5 = "SELECT SUM(Amount) FROM madrasati_expenses WHERE Backdated LIKE '%$Month' AND Account='NACC' AND Status='PAID'";
	 	if ($result5 = mysqli_query($con, $QuerySum5)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result5)) {
	 			$PayToNACC = $row['SUM(Amount)'];
	 		}
	 	}
    	$QuerySum6 = "SELECT SUM(Amount) FROM madrasati_expenses WHERE Backdated LIKE '%$Month' AND Account='ROSELINA' AND Status='PAID'";
	 	if ($result6 = mysqli_query($con, $QuerySum6)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result6)) {
	 			$PayToRoselina = $row['SUM(Amount)'];
	 		}
	 	}
	 	
    	$QuerySum7 = "SELECT SUM(AnnualFees) FROM madrasati_payment WHERE PaymentDate LIKE '%$Month'";
	 	if ($result7 = mysqli_query($con, $QuerySum7)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result7)) {
	 			$TotalAnnualFees = $row['SUM(AnnualFees)'];
	 		}
	 	}
    	$QuerySum8 = "SELECT SUM(TermFees) FROM madrasati_payment WHERE PaymentDate LIKE '%$Month'";
	 	if ($result8 = mysqli_query($con, $QuerySum8)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result8)) {
	 			$TotalTermFees = $row['SUM(TermFees)'];
	 		}
	 	}
    	$QuerySum9 = "SELECT SUM(MiscFees) FROM madrasati_payment WHERE PaymentDate LIKE '%$Month'";
	 	if ($result9 = mysqli_query($con, $QuerySum9)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result9)) {
	 			$TotalMiscFees = $row['SUM(MiscFees)'];
	 		}
	 	}
    	$QuerySum10 = "SELECT SUM(Amount) FROM madrasati_expenses WHERE Backdated LIKE '%$Month'";
	 	if ($result10 = mysqli_query($con, $QuerySum10)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result10)) {
	 			$TotalExpenses = $row['SUM(Amount)'];
	 		}
	 	}

// Calculation
    	$Query1 = "SELECT SUM(Opening) FROM ocbalance WHERE Date LIKE '%$Month'";
	 	if ($result1 = mysqli_query($con, $Query1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$Opening = $row['SUM(Opening)'];
	 		}
	 	}
	 	
// $Deposit=$Surestart+$NACC+$MMP;
// $Withdrawal=$PayToNACC+$PayToRoselina;
// $Balance=$Deposit-$Withdrawal;

$Withdrawal=$TotalExpenses;
$Balance=$Deposit-$Withdrawal;

$Format_Deposit = number_format($Deposit, 2, '.', '');
$Format_Withdrawal = number_format($Withdrawal, 2, '.', '');
$Format_Balance = number_format($Balance, 2, '.', '');
	 	
//		$update="UPDATE ocbalance SET Closing='".$Closing."' WHERE Date LIKE '%$Month'";
//		mysqli_query($con, $update) or die(mysqli_error());

?>
<table class="table">
<thead>
<tr>
<th>DEPOSIT</th>
<th>MYR <?php echo "$Format_Deposit"; ?></th>
<th>WITHDRAWAL</th>
<th>MYR <?php echo "$Format_Withdrawal"; ?></th>
<th>BALANCE</th>
<th>MYR <?php echo "$Format_Balance"; ?></th>
</tr>
<tr>
<th>ENTRANCE FEES</th>
<th><?php echo "MYR $TotalAnnualFees"; ?></th>
<th>ANNUAL FEES</th>
<th><?php echo "MYR $TotalTermFees"; ?></th>
<th>MISC FEES</th>
<th><?php echo "MYR $TotalMiscFees"; ?></th>
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
