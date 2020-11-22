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
																<td style="height: 50px" class="style9" valign="top">
																<img alt="" src="../images/logo_madrasati.png" width="120" height="120"></td>
												</tr>
								</table>
</div>

<div id="nav">

<table cellpadding="0" cellspacing="0" style="width: 100%" align="center">
				<!-- MSTableType="layout" -->
				<tr>
								<td style="height: 30px" class="style9" valign="top">
								<table cellpadding="5" cellspacing="0" style="width: 100%" align="left">
												<!-- MSTableType="layout" -->
												<tr>
																<td style="height: 30px" valign="top" class="style19">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">NUH'S ARK</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">DASHBOARD</a></li>
    </ul>
 	<ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">NUH'S ARK
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="account-statement.php">ACCOUNT STATEMENT</a></li>
          <li><a href="invoice_select-invoice.php">INVOICES</a></li>
          <li><a href="payment_summary.php">PAYMENTS</a></li>
        </ul>
      </li>
     </ul>
 	<ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">PROFILE
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="student_manage-account.php">MANAGE ACCOUNT</a></li>
        </ul>
      </li>
     </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>Welcome <?php echo $_SESSION['username']; ?>!</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>LOGOUT</a></li>
    </ul>
  </div>
</nav>
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
<h2>ACCOUNT STATEMENT &gt; ACCOUNT DETAILS</h2>

<?php

$Username=$_SESSION['username'];
$StudentID=$_REQUEST["StudentID"];
$count=1;
$sel_query="SELECT * FROM accountsummary WHERE StudentID='$Username'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {

$EmailAddress=$_REQUEST["EmailAddress"];
$StudentID=$_REQUEST["StudentID"];
$Name=$_REQUEST["Name"];
$Debit=$_REQUEST["Debit"];
$Credit=$_REQUEST["Credit"];
$Balance=$_REQUEST["Balance"];

?>

<table class="table">
				<tr>
								<td style="width: 150px">Student ID</td>
								<td><?php echo $row["StudentID"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Email Address</td>
								<td><?php echo $row["EmailAddress"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Name</td>
								<td><?php echo $row["Name"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Debit</td>
								<td><?php echo $row["Debit"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Credit</td>
								<td><?php echo $row["Credit"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Balance</td>
								<td><?php echo $row["Balance"]; ?></td>
				</tr>
				</table>
<?php
}
?>
<br>
INVOICES<br>
<br>
<table class="table">
<thead>
<tr>
<th>NO</th>
<th>INVOICE NO</th>
<th>DATE</th>
<th>AMOUNT</th>

</tr>
</thead>
<tbody>
<?php

// $Username=$_SESSION['username'];
// $EmailAddress=$_POST['EmailAddress'];
// $StudentID=$_REQUEST['StudentID'];
$count=1;

$sel_query="SELECT * FROM invoice WHERE StudentID='$StudentID';";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["InvoiceNo"]; ?> <a href="invoice_select-invoice_view.php?InvoiceNo='<?php echo $row["InvoiceNo"]; ?>'" target="_blank">INVOICE</a></td>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left"><?php echo $row["Amount"]; ?></td>
</tr>
<?php $count++; } ?>

</tbody>
</table>
</div>
																				
<p>
<?php

// Calculation
    	$QuerySum1 = "SELECT SUM(Amount) FROM invoice WHERE StudentID='$StudentID'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {	 			
		    	$InvoicesMYR = $row['SUM(Amount)'];
	 		}
	 	}
	 	
	 	$QuerySum2 = "SELECT SUM(Amount) FROM payment WHERE StudentID='$StudentID'";
	 	if ($result2 = mysqli_query($con, $QuerySum2)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result2)) {
	 			$PaymentsMYR = $row['SUM(Amount)'];
	 		}
	 	}
		 	
		$BalanceMYR=$InvoicesMYR-$PaymentsMYR;
		
		$updateMYR = "UPDATE accountsummary SET Debit='$InvoicesMYR', Credit='$PaymentsMYR', Balance='$BalanceMYR' WHERE StudentID='$StudentID'";
		mysqli_query($con, $updateMYR);

?>

<br>
PAYMENTS</div>
																				
<p>
<table class="table">
<thead>
<tr>
<th>NO</th>
<th>RECEIPT NO</th>
<th>DATE</th>
<th>AMOUNT</th>
<th>ANNUAL FEES</th>
<th>TERM FEES</th>
<th>MISC FEES</th>
</tr>
</thead>
<tbody>
<?php

// $Username=$_SESSION['username'];
// $EmailAddress=$_POST['EmailAddress'];
// $StudentID=$_REQUEST['StudentID'];
$count=1;

$sel_query="SELECT * FROM payment WHERE StudentID='$StudentID';";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><a target="_blank" href="payment_view.php?ReceiptNo=<?php echo $row["ReceiptNo"]; ?>">VIEW RECEIPT</a> <?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left"><?php echo $row["Amount"]; ?></td>
<td align="left"><?php echo $row["AnnualFees"]; ?></td>
<td align="left"><?php echo $row["TermFees"]; ?></td>
<td align="left"><?php echo $row["MiscFees"]; ?></td>
</tr>
<?php $count++; } ?>

</tbody>
</table>
</div>
																				
<p>
<?php

// Calculation
    	$QuerySum1 = "SELECT SUM(Amount) FROM invoice WHERE StudentID='$StudentID' AND Currency='MYR'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {	 			
		    	$InvoicesMYR = $row['SUM(Amount)'];
	 		}
	 	}
	 	
	 	$QuerySum2 = "SELECT SUM(Amount) FROM payment WHERE StudentID='$StudentID' AND Currency='MYR'";
	 	if ($result2 = mysqli_query($con, $QuerySum2)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result2)) {
	 			$PaymentsMYR = $row['SUM(Amount)'];
	 		}
	 	}
		 	
		$BalanceMYR=$InvoicesMYR-$PaymentsMYR;
		
		$updateMYR = "UPDATE accountsummary SET Debit='$InvoicesMYR', Credit='$PaymentsMYR', Balance='$BalanceMYR' WHERE StudentID='$StudentID' AND Currency='MYR'";
		mysqli_query($con, $updateMYR);

?>
																				
<p>
<?php

// Calculation
    	$QuerySum1 = "SELECT SUM(Amount) FROM invoice WHERE StudentID='$StudentID' AND Currency='MYR'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$InvoicesMYR = $row['SUM(Amount)'];
	 		}
	 	}
	 	
	 	$QuerySum2 = "SELECT SUM(Amount) FROM payment WHERE StudentID='$StudentID' AND Currency='MYR'";
	 	if ($result2 = mysqli_query($con, $QuerySum2)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result2)) {
	 			$PaymentsMYR = $row['SUM(Amount)'];
	 		}
	 	}

    	$QuerySum3 = "SELECT SUM(AnnualFees) FROM payment WHERE StudentID='$StudentID'";
	 	if ($result3 = mysqli_query($con, $QuerySum3)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result3)) {
	 			$AnnualFees = $row['SUM(AnnualFees)'];
	 		}
	 	}
    	$QuerySum4 = "SELECT SUM(TermFees) FROM payment WHERE StudentID='$StudentID'";
	 	if ($result4 = mysqli_query($con, $QuerySum4)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result4)) {
	 			$TermFees = $row['SUM(TermFees)'];
	 		}
	 	}
	 	$QuerySum5 = "SELECT SUM(MiscFees) FROM payment WHERE StudentID='$StudentID'";
	 	if ($result5 = mysqli_query($con, $QuerySum5)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result5)) {
	 			$MiscFees = $row['SUM(MiscFees)'];
	 		}
	 	}
		 
		$BalanceMYR=$InvoicesMYR-$PaymentsMYR;	
		$FinalBalanceMYR=$BalanceMYR+$MiscFees;
		
		$updateMYR = "UPDATE accountsummary SET Debit='$InvoicesMYR', Credit='$PaymentsMYR', Balance='$BalanceMYR' WHERE StudentID='$StudentID' AND Currency='MYR'";
		mysqli_query($con, $updateMYR);

echo "<br>Total Invoices : MYR $InvoicesMYR";
echo "<br>Total Payments : MYR $PaymentsMYR (Inclusives of Miscellaneous Fees of MYR $MiscFees)";
echo "<br>Balance : MYR $BalanceMYR";
echo "<br>Final Balance : MYR $FinalBalanceMYR";
echo "<br><br>";

?></p>

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
