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
																
<link rel="stylesheet" href="../../css/style.css" />
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
<link rel="stylesheet" href="../../css/style.css" />
</head>
<body>
<div class="form" style="width: 100%">
<h2>STUDENT STATEMENT &gt; ACCOUNT DETAILS</h2>

<?php

// $Username=$_SESSION['username'];
$ID=$_REQUEST["ID"];
$StudentID=$_REQUEST["StudentID"];

$count=1;
$sel_query="SELECT * FROM madrasati_accountsummary WHERE StudentID='$StudentID'";
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
								<td style="width: 150px">ID</td>
								<td><?php echo $row["ID"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Email Address</td>
								<td><?php echo $row["EmailAddress"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Student ID</td>
								<td><?php echo $row["StudentID"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Name</td>
								<td><?php echo $row["Name"]; ?></td>
				</tr>
				<tr>
								<td style="width: 150px">Statement</td>
								<td><a target="_blank" href="student_statement.php?StudentID=<?php echo $row["StudentID"]; ?>">STATEMENT</a></td>
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

$sel_query="SELECT * FROM madrasati_invoice WHERE StudentID='$StudentID';";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["InvoiceNo"]; ?> INVOICE VIEW AS | 
<a target="_blank" href="invoice_select-invoice_view.php?InvoiceNo=<?php echo $row["InvoiceNo"]; ?>">STANDARD</a> |
<a target="_blank" href="invoice_select-invoice_view_term_aug-dec.php?InvoiceNo=<?php echo $row["InvoiceNo"]; ?>">AUG-DEC 2020</a> | 
<a target="_blank" href="invoice_select-invoice_view_2020.php?InvoiceNo=<?php echo $row["InvoiceNo"]; ?>">2020</a> |
<a target="_blank" href="invoice_select-invoice_view_2020_RS.php?InvoiceNo=<?php echo $row["InvoiceNo"]; ?>">2020 (RS)</a> | <br>
<a target="_blank" href="invoice_select-invoice_view_2021.php?InvoiceNo=<?php echo $row["InvoiceNo"]; ?>">2021</a> |
<a target="_blank" href="invoice_select-invoice_view_2021_RS.php?InvoiceNo=<?php echo $row["InvoiceNo"]; ?>">2021 (RS)</a></td>
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
    	$QuerySum1 = "SELECT SUM(Amount) FROM madrasati_invoice WHERE StudentID='$StudentID'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {	 			
		    	$InvoicesMYR = $row['SUM(Amount)'];
	 		}
	 	}
	 	
	 	$QuerySum2 = "SELECT SUM(Amount) FROM madrasati_payment WHERE StudentID='$StudentID'";
	 	if ($result2 = mysqli_query($con, $QuerySum2)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result2)) {
	 			$PaymentsMYR = $row['SUM(Amount)'];
	 		}
	 	}
		 	
		// $BalanceMYR=$InvoicesMYR-$PaymentsMYR;
		
		// $updateMYR = "UPDATE madrasati_accountsummary SET Debit='$InvoicesMYR', Credit='$PaymentsMYR', Balance='$BalanceMYR' WHERE StudentID='$StudentID'";
		// mysqli_query($con, $updateMYR);

?>

<br>
PAYMENTS</div>
																				
<p>
<table class="table">
<thead>
<tr>
<th>NO</th>
<th>RECEIPT NO</th>
<th>ACTION</th>
<th>PAYMENT DATE</th>
<th>AMOUNT</th>
<th>ENTRANCE FEES</th>
<th>TERM FEES</th>
<th>MISC FEES</th>
</tr>
</thead>
<tbody>
<?php

// $Username=$_SESSION['username'];
// $EmailAddress=$_POST['EmailAddress'];
$StudentID=$_REQUEST['StudentID'];
$count=1;

$sel_query="SELECT * FROM madrasati_payment WHERE StudentID='$StudentID';";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
?>
<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><a target="_blank" href="payment_view.php?ReceiptNo=<?php echo $row["ReceiptNo"]; ?>">VIEW RECEIPT</a> <?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><a target="_blank" href="payment_delete.php?ReceiptNo=<?php echo $row["ReceiptNo"]; ?>">DELETE RECEIPT</a> <?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
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
    	$QuerySum1 = "SELECT SUM(Amount) FROM madrasati_invoice WHERE StudentID='$StudentID' AND Currency='MYR'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {	 			
		    	$InvoicesMYR = $row['SUM(Amount)'];
	 		}
	 	}
	 	
	 	$QuerySum2 = "SELECT SUM(Amount) FROM madrasati_payment WHERE StudentID='$StudentID' AND Currency='MYR'";
	 	if ($result2 = mysqli_query($con, $QuerySum2)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result2)) {
	 			$PaymentsMYR = $row['SUM(Amount)'];
	 		}
	 	}
		 	
		// $BalanceMYR=$InvoicesMYR-$PaymentsMYR;
		
		// $updateMYR = "UPDATE madrasati_accountsummary SET Debit='$InvoicesMYR', Credit='$PaymentsMYR', Balance='$BalanceMYR' WHERE StudentID='$StudentID' AND Currency='MYR'";
		// mysqli_query($con, $updateMYR);

?>
																				
<p>
<?php

// Calculation
    	$QuerySum1 = "SELECT SUM(Amount) FROM madrasati_invoice WHERE StudentID='$StudentID' AND Currency='MYR'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$InvoicesMYR = $row['SUM(Amount)'];
	 		}
	 	}
	 	
	 	$QuerySum2 = "SELECT SUM(Amount) FROM madrasati_payment WHERE StudentID='$StudentID' AND Currency='MYR'";
	 	if ($result2 = mysqli_query($con, $QuerySum2)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result2)) {
	 			$PaymentsMYR = $row['SUM(Amount)'];
	 		}
	 	}

    	$QuerySum3 = "SELECT SUM(AnnualFees) FROM madrasati_payment WHERE StudentID='$StudentID'";
	 	if ($result3 = mysqli_query($con, $QuerySum3)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result3)) {
	 			$AnnualFees = $row['SUM(AnnualFees)'];
	 		}
	 	}
    	$QuerySum4 = "SELECT SUM(TermFees) FROM madrasati_payment WHERE StudentID='$StudentID'";
	 	if ($result4 = mysqli_query($con, $QuerySum4)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result4)) {
	 			$TermFees = $row['SUM(TermFees)'];
	 		}
	 	}
	 	$QuerySum5 = "SELECT SUM(MiscFees) FROM madrasati_payment WHERE StudentID='$StudentID'";
	 	if ($result5 = mysqli_query($con, $QuerySum5)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result5)) {
	 			$MiscFees = $row['SUM(MiscFees)'];
	 		}
	 	}

	 	$Sum1 = "SELECT SUM(Registration) FROM madrasati_payment WHERE StudentID='$StudentID'";
	 	if ($ResultSum1 = mysqli_query($con, $Sum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($ResultSum1)) {
	 			$Registration = $row['SUM(Registration)'];
	 		}
	 	}
	 	$Sum2 = "SELECT SUM(Security) FROM madrasati_payment WHERE StudentID='$StudentID'";
	 	if ($ResultSum2 = mysqli_query($con, $Sum2)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($ResultSum2)) {
	 			$Security = $row['SUM(Security)'];
	 		}
	 	}
	 	$Sum3 = "SELECT SUM(Program) FROM madrasati_payment WHERE StudentID='$StudentID'";
	 	if ($ResultSum3 = mysqli_query($con, $Sum3)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($ResultSum3)) {
	 			$Program = $row['SUM(Program)'];
	 		}
	 	}
	 	$Sum4 = "SELECT SUM(Equipment) FROM madrasati_payment WHERE StudentID='$StudentID'";
	 	if ($ResultSum4 = mysqli_query($con, $Sum4)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($ResultSum4)) {
	 			$Equipment = $row['SUM(Equipment)'];
	 		}
	 	}
	 	$Sum5 = "SELECT SUM(Uniform) FROM madrasati_payment WHERE StudentID='$StudentID'";
	 	if ($ResultSum5 = mysqli_query($con, $Sum5)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($ResultSum5)) {
	 			$Uniform = $row['SUM(Uniform)'];
	 		}
	 	}
	 	$Sum6 = "SELECT SUM(Takaful) FROM madrasati_payment WHERE StudentID='$StudentID'";
	 	if ($ResultSum6 = mysqli_query($con, $Sum6)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($ResultSum6)) {
	 			$Takaful = $row['SUM(Takaful)'];
	 		}
	 	}
	 	$Sum7 = "SELECT SUM(Extra1) FROM madrasati_payment WHERE StudentID='$StudentID'";
	 	if ($ResultSum7 = mysqli_query($con, $Sum7)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($ResultSum7)) {
	 			$Extra1 = $row['SUM(Extra1)'];
	 		}
	 	}
	 	$Sum8 = "SELECT SUM(Extra2) FROM madrasati_payment WHERE StudentID='$StudentID'";
	 	if ($ResultSum8 = mysqli_query($con, $Sum8)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($ResultSum8)) {
	 			$Extra2 = $row['SUM(Extra2)'];
	 		}
	 	}

		$UpdateSum = "UPDATE madrasati_accountsummary SET Registration='$Registration', Security='$Security', Program='$Program', Equipment='$Equipment', Uniform='$Uniform', Takaful='$Takaful', Extra1='$Extra1', Extra2='$Extra2', Term='$TermFees' WHERE StudentID='$StudentID'";
		mysqli_query($con, $UpdateSum);
		 
		// $BalanceMYR=$InvoicesMYR-$PaymentsMYR;	
		// $FinalBalanceMYR=$BalanceMYR+$MiscFees;
		
		// $updateMYR = "UPDATE madrasati_accountsummary SET Debit='$InvoicesMYR', Credit='$PaymentsMYR', Balance='$BalanceMYR' WHERE StudentID='$StudentID' AND Currency='MYR'";
		// mysqli_query($con, $updateMYR);

// echo "<br>Total Invoices : MYR $InvoicesMYR";
// echo "<br>Total Payments : MYR $PaymentsMYR (Inclusives of Miscellaneous Fees of MYR $MiscFees)";
// echo "<br>Balance : MYR $BalanceMYR";
// echo "<br>Final Balance : MYR $FinalBalanceMYR";
// echo "<br><br>";

?></p>

<div class="alert alert-info">
  <strong>INFO!</strong> BALANCE AND FINAL BALANCE MAY BE SLIGHTLY DIFFERENT. PLEASE REFER TO INVOICE (AUG-DEC).
</div>

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
