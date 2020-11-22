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

?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<div class="form" style="width: 100%">
<h2>PAYMENT &gt; SELECT PAYMENT</h2>
<table class="table">
<thead>
<tr>
<th>NO</th>
<th>PAYMENT DATE</th>
<th>RECEIPT DATE</th>
<th><strong>RECEIPT NO</strong></th>
<th>STUDENT ID</th>
<th>NAME</th>
<th>AMOUNT</th>
<th>ANNUAL FEES</th>
<th>TERM FEES</th>
<th>MISC FEES</th>
<th>REG. FEE</th>
<th>PDF RCPT.</th>
<th>SEND MAIL</th>
<th><strong>MANAGE</strong></th>

</tr>
</thead>
<tbody>
<?php

if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
        }
        
$total_records_per_page = 100;

$offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";

$result_count = mysqli_query(
$con,
"SELECT COUNT(*) As total_records FROM madrasati_payment ORDER BY ReceiptNo DESC"
);
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1; // total pages minus 1

// $Username=$_SESSION['username'];
$count=1;
$sel_query="SELECT * FROM madrasati_payment ORDER BY ReceiptNo DESC LIMIT $offset, $total_records_per_page;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>

<form name="FrontPage_Form1" method="post" action="" onsubmit="return FrontPage_Form1_Validator(this)" language="JavaScript"> 
<input type="hidden" name="new" value="1" />
<input name="ReceiptNo" type="hidden" value="<?php echo $row['ReceiptNo'];?>" />

<?php

$Progress = "UPDATING...";
if(isset($_POST['new']) && $_POST['new']==1)
{
$ReceiptNo=$_REQUEST["ReceiptNo"];
$Status1=$_REQUEST["Status1"];
$Status2=$_REQUEST["Status2"];
$Status3=$_REQUEST["Status3"];

	$update="UPDATE madrasati_payment SET Status1='".$Status1."', Status2='".$Status2."', Status3='".$Status3."' WHERE ReceiptNo='".$ReceiptNo."'";
	mysqli_query($con, $update) or die(mysqli_error());
	
	$Progress = "<br>DATA UPDATED FOR $ReceiptNo<br>";
	echo '<p style="color:#FF0000;">'.$Progress.'</p>';
	print("<a href='payment_summary.php'>REFRESH</a>");
	print("<br>");
	}
	else {
	?>

<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left"><?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><?php echo $row["StudentID"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Amount"]; ?></td>
<td align="left"><?php echo $row["AnnualFees"]; ?></td>
<td align="left"><?php echo $row["TermFees"]; ?></td>
<td align="left"><?php echo $row["MiscFees"]; ?></td>
<td align="left"><input name="Status1" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["Status1"]; ?>"><br>
<br>
PENDING / DONE</td>
<td align="left"><input name="Status2" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["Status2"]; ?>"><br>
<br>
PENDING / DONE</td>
<td align="left"><input name="Status3" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["Status3"]; ?>"><br>
<br>
PENDING / DONE</td>
<td align="left">
<p><button type="submit" class="btn btn-default">Update This Data</button></p>
<a target="_blank" href="payment_view.php?ReceiptNo=<?php echo $row["ReceiptNo"]; ?>">VIEW RECEIPT</a> |
<a href="payment_update.php?ReceiptNo=<?php echo $row["ReceiptNo"]; ?>">UPDATE RECEIPT</a> |
<a href="account-statement_details.php?StudentID=<?php echo $row["StudentID"]; ?>">STUDENT ACCOUNT STATEMENT</a> 
| <a href="payment_delete.php?ReceiptNo=<?php echo $row["ReceiptNo"]; ?>">DELETE RECEIPT</a></tr>
</form>
<?php
}
?>

<?php $count++;
} ?>

<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>

<ul class="pagination">
<?php if($page_no > 1){
echo "<li><a href='?page_no=1'>First Page</a></li>";
} ?>
    
<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
<a <?php if($page_no > 1){
echo "href='?page_no=$previous_page'";
} ?>>Previous</a>
</li>
    
<li <?php if($page_no >= $total_no_of_pages){
echo "class='disabled'";
} ?>>
<a <?php if($page_no < $total_no_of_pages) {
echo "href='?page_no=$next_page'";
} ?>>Next</a>
</li>
 
<?php if($page_no < $total_no_of_pages){
echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
} ?>
</ul>

<?php

// Calculation
    	$QuerySum1 = "SELECT SUM(Debit) FROM madrasati_accountsummary";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$TotalDebitMYR = $row['SUM(Debit)'];
	 		}
	 	}
    	$QuerySum2 = "SELECT SUM(Credit) FROM madrasati_accountsummary";
	 	if ($result2 = mysqli_query($con, $QuerySum2)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result2)) {
	 			$TotalCreditMYR = $row['SUM(Credit)'];
	 		}
	 	}
	 	
    	$QuerySum3 = "SELECT SUM(AnnualFees) FROM madrasati_payment";
	 	if ($result3 = mysqli_query($con, $QuerySum3)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result3)) {
	 			$AnnualFees = $row['SUM(AnnualFees)'];
	 		}
	 	}
    	$QuerySum4 = "SELECT SUM(TermFees) FROM madrasati_payment";
	 	if ($result4 = mysqli_query($con, $QuerySum4)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result4)) {
	 			$TermFees = $row['SUM(TermFees)'];
	 		}
	 	}
	 	$QuerySum5 = "SELECT SUM(MiscFees) FROM madrasati_payment";
	 	if ($result5 = mysqli_query($con, $QuerySum5)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result5)) {
	 			$MiscFees = $row['SUM(MiscFees)'];
	 		}
	 	}

	 	$BalanceMYR = $TotalDebitMYR-$TotalCreditMYR;
	 	$Payments = $AnnualFees + $TermFees + $MiscFees;
	 	$Difference = $Payments - $TotalCreditMYR - $MiscFees;

// echo "<br>Total Invoices  : MYR $TotalDebitMYR";
// echo "<br>Total Payments : MYR $TotalCreditMYR";
// echo "<br>Balance       : MYR $BalanceMYR";
// echo "<br><br>Annual Fees Collected  : MYR $AnnualFees";
// echo "<br>Term Fees Collected : MYR $TermFees";
// echo "<br>Payments Collected : MYR $Payments";
// echo "<br>";
// echo "<br>Differences : MYR $Difference";
// echo "<br>Note: Payments calculation is always correct as per Payment Receipts. Total Credits are fetched from ACCOUNT SUMMARY. MANUAL UPDATE is required.";
// echo "<br><br>";

?>

</tbody>
</table>
<table class="table">
<tbody>
<tr>
	<td>ANNUAL FEES</td>
	<td>MYR <?php echo "$AnnualFees"; ?></td>
	<td>TERM FEES</td>
	<td>MYR <?php echo "$TermFees"; ?></td>
	<td>MISCELLANEOUS FEES</td>
	<td>MYR <?php echo "$MiscFees"; ?></td>
	<td>TOTAL PAYMENTS</td>
	<td>MYR <?php echo "$Payments"; ?></td>					
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
