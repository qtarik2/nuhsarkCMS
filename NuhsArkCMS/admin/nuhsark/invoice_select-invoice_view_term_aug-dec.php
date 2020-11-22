<?php
/*

*/

include("auth.php"); //include auth.php file on all secure pages ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>																															
<meta charset="utf-8">
<link rel="stylesheet" href="../../css/style.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuh&#39;s Ark Islamic Montessori School</title>
<style type="text/css">
a {
				color: #FF0000;
}
a:visited {
				color: #FF0000;
}
a:hover {
				color: #800080;
}
body {
  				background-position: 0% 0%;
				background-image: none;
				background-repeat: repeat;
				background-attachment: scroll;
}
page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0cm rgba(0,0,0,0);
  /*box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);*/
}

page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}

/*
page[size="A4"][layout="landscape"] {  
  width: 29.7cm;
  height: 21cm;
}
*/

@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}
.style14 {
				font-family: Calibri;
				text-align: left;
}
.style17 {
				text-align: left;
}
.style20 {
				border-color: #000000;
				border-width: 0;
}
.style19 {
				border: 1px solid #000000;
}
.style25 {
				font-family: Calibri;
				text-align: left;
				font-size: medium;
}
.style26 {
				font-family: Calibri;
}
.style27 {
				text-decoration: underline;
}
.style28 {
				border: 1px solid #000000;
				text-decoration: underline;
}
</style>
<meta charset="utf-8">
</head>
<body style="background-color: #C0C0C0">
<?php

require('db.php');
include("auth.php");

// $Username=$_SESSION['username'];
$InvoiceNo=$_REQUEST["InvoiceNo"];

$count=1;
$sel_query="SELECT * FROM invoice WHERE InvoiceNo='$InvoiceNo'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {

$StudentID=$_REQUEST["StudentID"];

?>

<page size="A4">

<table width="100%" border="1" style="border-collapse:collapse;">
<tbody>

<table style="width: 100%" cellspacing="0" cellpadding="5">
				<tr>
								<td style="width: 211px">
								<img alt="" src="../../images/nuhsarkislamicmontessorischool.jpg"></td>
								<td>
<h2 class="style25">
								NUH’S ARK ISLAMIC MONTESSORI SCHOOL<br>
								2A, JALAN JASPER 7/15, SEKSYEN 7,<br>
								40000, SHAH ALAM, SELANGOR.<br>
								Tel: 03-5524 2489 Hp: 019-336 2789<br>
								Email: nuhsark86@gmail.com<br>
								www.nuhsark.edu.my</h2>
<p class="style14">
								&nbsp;</p>
								</td>
				</tr>
</table>


<table style="width: 100%" cellspacing="0" cellpadding="5">
				<tr>
								<td class="style25"><strong>INVOICE</strong></td>
				</tr>
				<tr>
								<td class="style14">&nbsp;</td>
				</tr>
				<tr>
								<td class="style14">
								<table style="width: 100%" cellspacing="0" cellpadding="5">
												<tr>
																<td style="width: 15%">
																Name :</td>
																<td style="width: 50%">
																<?php echo $row["Name"]; ?></td>
																<td style="width: 20%">
																Invoice No. :</td>
																<td><?php echo $row["InvoiceNo"]; ?></td>
												</tr>
												<tr>
																<td style="width: 15%">
																Student ID :</td>
																<td style="width: 50%">
																<?php echo $row["StudentID"]; ?></td>
																<td style="width: 20%">
																Date :</td>
																<td><?php echo $row["Date"]; ?></td>
												</tr>
												<tr>
																<td style="width: 15%">
																Program :</td>
																<td style="width: 50%">
																<?php echo $row["Programme"]; ?></td>
																<td style="width: 20%">
																Term Info :</td>
																<td><?php echo $row["TermInfo"]; ?></td>
												</tr>
												</table>
								</td>
				</tr>
				<tr>
								<td class="style14" style="height: 18px">
								&nbsp;</td>
				</tr>
				<tr>
								<td class="style14">ITEMISED FEE STRUCTURE</td>
				</tr>
				<tr>
								<td class="style17">
								<table style="width: 100%" cellspacing="0" cellpadding="5" class="style20">
												<tr class="style26">
																<td style="width: 400px" class="style19">
																DESCRIPTION</td>
																<td style="width: 125px" class="style19">
																AMOUNT</td>
												</tr>
												<tr class="style26">
																<td style="width: 400px">
																INITIAL TERM FEE</td>
																<td style="width: 125px">
																MYR <?php echo $row["Term"]; ?></td>
												</tr>
												<tr class="style26">
																<td style="width: 400px" class="style27">
																ANNUAL FEES =
																TERM FEE 
																X 4</td>
																<td style="width: 125px" class="style27">
																MYR <?php echo $row["AnnualTermFees"]; ?></td>
												</tr>
												<tr class="style26">
																<td style="width: 400px" class="style27">
																DEDUCTIONS</td>
																<td style="width: 125px">
																&nbsp;</td>
												</tr>
												<tr class="style26">
																<td style="width: 400px">
																[1] REBATES / 
																BANTUAN ANIS / 
																TERM 2 
																ADJUSTMENT</td>
																<td style="width: 125px">
																-
																MYR <?php echo $row["Term2Rebates"]; ?>														
																</td>
												</tr>
												<tr class="style26">
																<td style="width: 400px">
																[2] REBATES / 
																BANTUAN ANIS / 
																TERM 3 
																ADJUSTMENT</td>
																<td style="width: 125px">
																-
																MYR <?php echo $row["Term3Rebates"]; ?>	</td>
												</tr>
												<tr class="style26">
																<td style="width: 400px">
																[3] REBATES / 
																BANTUAN ANIS / 
																TERM 4 
																ADJUSTMENT</td>
																<td style="width: 125px">
																-
																MYR	<?php echo $row["Term4Rebates"]; ?>																
																</td>
												</tr>
												<tr class="style26">
																<td style="width: 400px">
																[4] APRIL / 20% 
																OFF</td>
																<td style="width: 125px">
																-
																MYR <?php echo $row["MCOApr"]; ?></td>
												</tr>
												<tr class="style26">
																<td style="width: 400px">
																[5] MAY / 20% 
																OFF</td>
																<td style="width: 125px">
																-
																MYR <?php echo $row["MCOMay"]; ?></td>
												</tr>
												<tr class="style26">
																<td style="width: 400px">
																[6] JUNE / 20% 
																OFF</td>
																<td style="width: 125px">
																-
																MYR <?php echo $row["MCOJun"]; ?></td>
												</tr>
												<tr class="style26">
																<td style="width: 400px">
																[7] JULY / 20% 
																OFF</td>
																<td style="width: 125px">
																-
																MYR <?php echo $row["MCOJul"]; ?></td>
												</tr>
												<tr class="style26">
																<td style="width: 400px" class="style27">
																TOTAL DEDUCTIONS 
																(FROM ITEM 1 
																TILL 7)</td>
																<td style="width: 125px" class="style27">
																-
																MYR	<?php echo $row["Rebates2"]; ?>															
																</td>
												</tr>
												<tr class="style26">
																<td style="width: 400px" class="style19">
																REVISED ANNUAL FEES = 
																ANNUAL FEES - DEDUCTIONS</td>
																<td style="width: 125px" class="style19">
																MYR <?php echo $row["AnnualTermFeesRevised"]; ?></td>
												</tr>
												<tr class="style26">
																<td style="width: 400px" class="style19">
																WAIVED</td>
																<td style="width: 125px" class="style19">
																- MYR <?php echo $row["Rebates1"]; ?></td>
												</tr>
												<tr class="style26">
																<td style="width: 400px" class="style19">
																TOTAL 
																ANNUAL FEES 
																PAID AS PER 
																<?php echo $row["Date"]; ?></td>
																<td style="width: 125px" class="style19">
																-
																MYR <?php echo $row["Paid"]; ?></td>
												</tr>
												<tr class="style26">
																<td style="width: 400px" class="style19">
																<strong>TOTAL 
																BALANCE TO PAY 
																UNTIL DECEMBER 
																2020</strong></td>
																<td style="width: 125px" class="style19">
																<strong>MYR <?php echo $row["Balance"]; ?></strong></td>
												</tr>
												</table>
								<table style="width: 100%" cellspacing="0" cellpadding="5">
												<tr class="style26">
																<td style="width: 200px" class="style19">
																REMARKS</td>
																<td class="style19"><?php echo $row["Remarks"]; ?></td>
												</tr>
								</table>
								</td>
				</tr>
				</table>

<?php

$Monthly=$row["Term"]/5;
$Monthly_Format = number_format($Monthly, 2, '.', '');
?>

<table style="width: 100%" cellspacing="0" cellpadding="5">
				<tr>
								<td class="style14">
								<table style="width: 100%" cellspacing="0" cellpadding="5">
												<tr>
																<td style="width: 150px">
																PAYMENT TERMS :</td>
																<td style="width: 320px">
																CASH DEPOSIT / 
																FUNDS TRANSFER / 
																CHEQUE</td>
												</tr>
												</table>
								</td>
				</tr>
				<tr>
								<td class="style14">&nbsp;</td>
				</tr>
				<tr>
								<td class="style14">MONTHLY PAYMENTS REFER TO 
								TERM FEES ON THE NEXT PAGE</td>
				</tr>
				<tr>
								<td class="style14">&nbsp;</td>
				</tr>
				<tr>
								<td class="style14">Term Fee (Paid by Monthly 
								Basis) is due on the first 
								week of every month. No invoice will be issued 
								thereafter. If no payment found, a reminder will 
								be sent to respective parents.<br>
								<br>
								Any discrepancies regarding this invoice should 
								be lodge within SEVEN (7) days<br>
								<br>
								Payment by cheque should be crossed and made 
								payable to:<br>
								<table style="width: 100%" cellspacing="0" cellpadding="5">
												<tr>
																<td style="width: 151px">
																Bank</td>
																<td>MAYBANK</td>
												</tr>
												<tr>
																<td style="width: 151px">
																Account Holder</td>
																<td>NUHS ARK 
																CHILDCARE CENTRE</td>
												</tr>
												<tr>
																<td style="width: 151px">
																Account Number</td>
																<td>
																5621-0663-9546</td>
												</tr>
								</table>
								<br>
								Please send us the proof of payment to 
								nuhsark86@gmail.com or 0193362789<br>
								<br>
								Do include your child&#39;s name and payment 
								description for our reference</td>
				</tr>
				<tr>
								<td class="style14">PAYMENT HISTORY</td>
				</tr>
				<tr>
								<td class="style14">
<html>
<body>
<p>
<?php echo $row["StudentID"]; 
$StudentTemp=$row["StudentID"]; 

    	$Query_Sum1 = "SELECT SUM(AnnualFees) FROM payment WHERE StudentID='$StudentTemp'";
	 	if ($result_1 = mysqli_query($con, $Query_Sum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result_1)) {
	 			$Paid_AnnualFees = $row['SUM(AnnualFees)'];
	 		}
	 	}
	 	
	 	$Query_Sum2 = "SELECT SUM(TermFees) FROM payment WHERE StudentID='$StudentTemp'";
	 	if ($result_2 = mysqli_query($con, $Query_Sum2)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result_2)) {
	 			$Paid_TermFees = $row['SUM(TermFees)'];
	 		}
	 	}

	 	$Query_Sum3 = "SELECT SUM(MiscFees) FROM payment WHERE StudentID='$StudentTemp'";
	 	if ($result_3 = mysqli_query($con, $Query_Sum3)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result_3)) {
	 			$Paid_MiscFees = $row['SUM(MiscFees)'];
	 		}
	 	}

?> </td>
				</tr>
				<tr>
								<td class="style14">
<table style="width: 100%" cellspacing="0" cellpadding="5">
<thead>
<tr>
<th>RECEIPT NO</th>
<th>PAYMENT DATE</th>
<th>RECEIPT DATE</th>
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
// $StudentID=$_REQUEST['StudentID'];
$Query_count=1;

$Query_Payment="SELECT * FROM payment WHERE StudentID='$StudentTemp' AND PaymentDate LIKE '%/10/2019'";
$Result_Payment = mysqli_query($con,$Query_Payment);
while($row = mysqli_fetch_assoc($Result_Payment)) { 
?>
<tr>
<td align="left"><?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left">MYR <?php echo $row["Amount"]; ?></td>
<td align="left">MYR <?php echo $row["AnnualFees"]; ?></td>
<td align="left">MYR <?php echo $row["TermFees"]; ?></td>
<td align="left">MYR <?php echo $row["MiscFees"]; ?></td>
</tr>
<?php $Query_count++; } ?>

<?php

// $Username=$_SESSION['username'];
// $EmailAddress=$_POST['EmailAddress'];
// $StudentID=$_REQUEST['StudentID'];
$Query_count=1;

$Query_Payment="SELECT * FROM payment WHERE StudentID='$StudentTemp' AND PaymentDate LIKE '%/11/2019'";
$Result_Payment = mysqli_query($con,$Query_Payment);
while($row = mysqli_fetch_assoc($Result_Payment)) { 
?>
<tr>
<td align="left"><?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left">MYR <?php echo $row["Amount"]; ?></td>
<td align="left">MYR <?php echo $row["AnnualFees"]; ?></td>
<td align="left">MYR <?php echo $row["TermFees"]; ?></td>
<td align="left">MYR <?php echo $row["MiscFees"]; ?></td>
</tr>
<?php $Query_count++; } ?>

<?php

// $Username=$_SESSION['username'];
// $EmailAddress=$_POST['EmailAddress'];
// $StudentID=$_REQUEST['StudentID'];
$Query_count=1;

$Query_Payment="SELECT * FROM payment WHERE StudentID='$StudentTemp' AND PaymentDate LIKE '%/12/2019'";
$Result_Payment = mysqli_query($con,$Query_Payment);
while($row = mysqli_fetch_assoc($Result_Payment)) { 
?>
<tr>
<td align="left"><?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left">MYR <?php echo $row["Amount"]; ?></td>
<td align="left">MYR <?php echo $row["AnnualFees"]; ?></td>
<td align="left">MYR <?php echo $row["TermFees"]; ?></td>
<td align="left">MYR <?php echo $row["MiscFees"]; ?></td>
</tr>
<?php $Query_count++; } ?>

<?php

// $Username=$_SESSION['username'];
// $EmailAddress=$_POST['EmailAddress'];
// $StudentID=$_REQUEST['StudentID'];
$Query_count=1;

$Query_Payment="SELECT * FROM payment WHERE StudentID='$StudentTemp' AND PaymentDate LIKE '%/01/2020'";
$Result_Payment = mysqli_query($con,$Query_Payment);
while($row = mysqli_fetch_assoc($Result_Payment)) { 
?>
<tr>
<td align="left"><?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left">MYR <?php echo $row["Amount"]; ?></td>
<td align="left">MYR <?php echo $row["AnnualFees"]; ?></td>
<td align="left">MYR <?php echo $row["TermFees"]; ?></td>
<td align="left">MYR <?php echo $row["MiscFees"]; ?></td>
</tr>
<?php $Query_count++; } ?>

<?php

// $Username=$_SESSION['username'];
// $EmailAddress=$_POST['EmailAddress'];
// $StudentID=$_REQUEST['StudentID'];
$Query_count=1;

$Query_Payment="SELECT * FROM payment WHERE StudentID='$StudentTemp' AND PaymentDate LIKE '%/02/2020'";
$Result_Payment = mysqli_query($con,$Query_Payment);
while($row = mysqli_fetch_assoc($Result_Payment)) { 
?>
<tr>
<td align="left"><?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left">MYR <?php echo $row["Amount"]; ?></td>
<td align="left">MYR <?php echo $row["AnnualFees"]; ?></td>
<td align="left">MYR <?php echo $row["TermFees"]; ?></td>
<td align="left">MYR <?php echo $row["MiscFees"]; ?></td>
</tr>
<?php $Query_count++; } ?>

<?php

// $Username=$_SESSION['username'];
// $EmailAddress=$_POST['EmailAddress'];
// $StudentID=$_REQUEST['StudentID'];
$Query_count=1;

$Query_Payment="SELECT * FROM payment WHERE StudentID='$StudentTemp' AND PaymentDate LIKE '%/03/2020'";
$Result_Payment = mysqli_query($con,$Query_Payment);
while($row = mysqli_fetch_assoc($Result_Payment)) { 
?>
<tr>
<td align="left"><?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left">MYR <?php echo $row["Amount"]; ?></td>
<td align="left">MYR <?php echo $row["AnnualFees"]; ?></td>
<td align="left">MYR <?php echo $row["TermFees"]; ?></td>
<td align="left">MYR <?php echo $row["MiscFees"]; ?></td>
</tr>
<?php $Query_count++; } ?>

<?php

// $Username=$_SESSION['username'];
// $EmailAddress=$_POST['EmailAddress'];
// $StudentID=$_REQUEST['StudentID'];
$Query_count=1;

$Query_Payment="SELECT * FROM payment WHERE StudentID='$StudentTemp' AND PaymentDate LIKE '%/04/2020'";
$Result_Payment = mysqli_query($con,$Query_Payment);
while($row = mysqli_fetch_assoc($Result_Payment)) { 
?>
<tr>
<td align="left"><?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left">MYR <?php echo $row["Amount"]; ?></td>
<td align="left">MYR <?php echo $row["AnnualFees"]; ?></td>
<td align="left">MYR <?php echo $row["TermFees"]; ?></td>
<td align="left">MYR <?php echo $row["MiscFees"]; ?></td>
</tr>
<?php $Query_count++; } ?>

<?php

// $Username=$_SESSION['username'];
// $EmailAddress=$_POST['EmailAddress'];
// $StudentID=$_REQUEST['StudentID'];
$Query_count=1;

$Query_Payment="SELECT * FROM payment WHERE StudentID='$StudentTemp' AND PaymentDate LIKE '%/05/2020'";
$Result_Payment = mysqli_query($con,$Query_Payment);
while($row = mysqli_fetch_assoc($Result_Payment)) { 
?>
<tr>
<td align="left"><?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left">MYR <?php echo $row["Amount"]; ?></td>
<td align="left">MYR <?php echo $row["AnnualFees"]; ?></td>
<td align="left">MYR <?php echo $row["TermFees"]; ?></td>
<td align="left">MYR <?php echo $row["MiscFees"]; ?></td>
</tr>
<?php $Query_count++; } ?>

<?php

// $Username=$_SESSION['username'];
// $EmailAddress=$_POST['EmailAddress'];
// $StudentID=$_REQUEST['StudentID'];
$Query_count=1;

$Query_Payment="SELECT * FROM payment WHERE StudentID='$StudentTemp' AND PaymentDate LIKE '%/06/2020'";
$Result_Payment = mysqli_query($con,$Query_Payment);
while($row = mysqli_fetch_assoc($Result_Payment)) { 
?>
<tr>
<td align="left"><?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left">MYR <?php echo $row["Amount"]; ?></td>
<td align="left">MYR <?php echo $row["AnnualFees"]; ?></td>
<td align="left">MYR <?php echo $row["TermFees"]; ?></td>
<td align="left">MYR <?php echo $row["MiscFees"]; ?></td>
</tr>
<?php $Query_count++; } ?>

<?php

// $Username=$_SESSION['username'];
// $EmailAddress=$_POST['EmailAddress'];
// $StudentID=$_REQUEST['StudentID'];
$Query_count=1;

$Query_Payment="SELECT * FROM payment WHERE StudentID='$StudentTemp' AND PaymentDate LIKE '%/07/2020'";
$Result_Payment = mysqli_query($con,$Query_Payment);
while($row = mysqli_fetch_assoc($Result_Payment)) { 
?>
<tr>
<td align="left"><?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left">MYR <?php echo $row["Amount"]; ?></td>
<td align="left">MYR <?php echo $row["AnnualFees"]; ?></td>
<td align="left">MYR <?php echo $row["TermFees"]; ?></td>
<td align="left">MYR <?php echo $row["MiscFees"]; ?></td>
</tr>
<?php $Query_count++; } ?>

<?php

// $Username=$_SESSION['username'];
// $EmailAddress=$_POST['EmailAddress'];
// $StudentID=$_REQUEST['StudentID'];
$Query_count=1;

$Query_Payment="SELECT * FROM payment WHERE StudentID='$StudentTemp' AND PaymentDate LIKE '%/08/2020'";
$Result_Payment = mysqli_query($con,$Query_Payment);
while($row = mysqli_fetch_assoc($Result_Payment)) { 
?>
<tr>
<td align="left"><?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left">MYR <?php echo $row["Amount"]; ?></td>
<td align="left">MYR <?php echo $row["AnnualFees"]; ?></td>
<td align="left">MYR <?php echo $row["TermFees"]; ?></td>
<td align="left">MYR <?php echo $row["MiscFees"]; ?></td>
</tr>
<?php $Query_count++; } ?>

<?php

// $Username=$_SESSION['username'];
// $EmailAddress=$_POST['EmailAddress'];
// $StudentID=$_REQUEST['StudentID'];
$Query_count=1;

$Query_Payment="SELECT * FROM payment WHERE StudentID='$StudentTemp' AND PaymentDate LIKE '%/09/2020'";
$Result_Payment = mysqli_query($con,$Query_Payment);
while($row = mysqli_fetch_assoc($Result_Payment)) { 
?>
<tr>
<td align="left"><?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left">MYR <?php echo $row["Amount"]; ?></td>
<td align="left">MYR <?php echo $row["AnnualFees"]; ?></td>
<td align="left">MYR <?php echo $row["TermFees"]; ?></td>
<td align="left">MYR <?php echo $row["MiscFees"]; ?></td>
</tr>
<?php $Query_count++; } ?>

<?php

// $Username=$_SESSION['username'];
// $EmailAddress=$_POST['EmailAddress'];
// $StudentID=$_REQUEST['StudentID'];
$Query_count=1;

$Query_Payment="SELECT * FROM payment WHERE StudentID='$StudentTemp' AND PaymentDate LIKE '%/10/2020'";
$Result_Payment = mysqli_query($con,$Query_Payment);
while($row = mysqli_fetch_assoc($Result_Payment)) { 
?>
<tr>
<td align="left"><?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left">MYR <?php echo $row["Amount"]; ?></td>
<td align="left">MYR <?php echo $row["AnnualFees"]; ?></td>
<td align="left">MYR <?php echo $row["TermFees"]; ?></td>
<td align="left">MYR <?php echo $row["MiscFees"]; ?></td>
</tr>
<?php $Query_count++; } ?>

<?php

// $Username=$_SESSION['username'];
// $EmailAddress=$_POST['EmailAddress'];
// $StudentID=$_REQUEST['StudentID'];
$Query_count=1;

$Query_Payment="SELECT * FROM payment WHERE StudentID='$StudentTemp' AND PaymentDate LIKE '%/11/2020'";
$Result_Payment = mysqli_query($con,$Query_Payment);
while($row = mysqli_fetch_assoc($Result_Payment)) { 
?>
<tr>
<td align="left"><?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left">MYR <?php echo $row["Amount"]; ?></td>
<td align="left">MYR <?php echo $row["AnnualFees"]; ?></td>
<td align="left">MYR <?php echo $row["TermFees"]; ?></td>
<td align="left">MYR <?php echo $row["MiscFees"]; ?></td>
</tr>
<?php $Query_count++; } ?>

<?php

// $Username=$_SESSION['username'];
// $EmailAddress=$_POST['EmailAddress'];
// $StudentID=$_REQUEST['StudentID'];
$Query_count=1;

$Query_Payment="SELECT * FROM payment WHERE StudentID='$StudentTemp' AND PaymentDate LIKE '%/12/2020'";
$Result_Payment = mysqli_query($con,$Query_Payment);
while($row = mysqli_fetch_assoc($Result_Payment)) { 
?>
<tr>
<td align="left"><?php echo $row["ReceiptNo"]; ?></td>
<td align="left"><?php echo $row["PaymentDate"]; ?></td>
<td align="left"><?php echo $row["Date"]; ?></td>
<td align="left">MYR <?php echo $row["Amount"]; ?></td>
<td align="left">MYR <?php echo $row["AnnualFees"]; ?></td>
<td align="left">MYR <?php echo $row["TermFees"]; ?></td>
<td align="left">MYR <?php echo $row["MiscFees"]; ?></td>
</tr>
<?php $Query_count++; } ?>

</tbody>
</table></td>
				</tr>
				<tr>
								<td class="style14">
								<table style="width: 100%" cellspacing="0" cellpadding="5">
												<tr>
																<td style="width: 670px">
																TOTAL ENTRANCE 
																FEES PAID</td>
																<td>MYR <?php echo $Paid_AnnualFees; ?></td>
												</tr>
												<tr>
																<td style="width: 670px">
																TOTAL ANNUAL FEES 
																PAID</td>
																<td>MYR <?php echo $Paid_TermFees; ?></td>
												</tr>
												<tr>
																<td style="width: 670px">
																TOTAL MISC FEES 
																PAID</td>
																<td>MYR <?php echo $Paid_MiscFees; ?></td>
												</tr>
												</table>

								<table style="width: 100%" cellspacing="0" cellpadding="5">
<?php

$count_account_1=1;
$sel_query_account_1="SELECT * FROM invoice WHERE StudentID='$StudentTemp' AND InvoiceNo='$InvoiceNo'";
$result_account_1 = mysqli_query($con,$sel_query_account_1);
while($row = mysqli_fetch_assoc($result_account_1)) { 

?>

												<tr>
																<td colspan="8">
																&nbsp;</td>
												</tr>

												<tr>
																<td colspan="8">
																TERM FEES</td>
												</tr>

												<tr>
																<td colspan="8">
																<table style="width: 100%" cellspacing="0" cellpadding="5">
																				<tr>
																								<td>&nbsp;</td>
																								<td>JAN</td>
																								<td>FEB</td>
																								<td>MAR</td>
																								<td>APR</td>
																								<td>MAY</td>
																								<td>JUN</td>
																								<td>JUL</td>
																								<td>AUG</td>
																								<td>SEP</td>
																								<td>OCT</td>
																								<td>NOV</td>
																								<td>DEC</td>
																				</tr>
																				<tr>
																								<td>ENTITLEMENT FEE</td>
																								<td><?php echo $row["Fee01"]; ?></td>
																								<td><?php echo $row["Fee02"]; ?></td>
																								<td><?php echo $row["Fee03"]; ?></td>
																								<td><?php echo $row["Fee04"]; ?></td>
																								<td><?php echo $row["Fee05"]; ?></td>
																								<td><?php echo $row["Fee06"]; ?></td>
																								<td><?php echo $row["Fee07"]; ?></td>
																								<td><?php echo $row["Fee08"]; ?></td>
																								<td><?php echo $row["Fee09"]; ?></td>
																								<td><?php echo $row["Fee10"]; ?></td>
																								<td><?php echo $row["Fee11"]; ?></td>
																								<td><?php echo $row["Fee12"]; ?></td>
																				</tr>
																				<tr>
																								<td>PAID</td>
																								<td><?php echo $row["Paid01"]; ?></td>
																								<td><?php echo $row["Paid02"]; ?></td>
																								<td><?php echo $row["Paid03"]; ?></td>
																								<td><?php echo $row["Paid04"]; ?></td>
																								<td><?php echo $row["Paid05"]; ?></td>
																								<td><?php echo $row["Paid06"]; ?></td>
																								<td><?php echo $row["Paid07"]; ?></td>
																								<td><?php echo $row["Paid08"]; ?></td>
																								<td><?php echo $row["Paid09"]; ?></td>
																								<td><?php echo $row["Paid10"]; ?></td>
																								<td><?php echo $row["Paid11"]; ?></td>
																								<td><?php echo $row["Paid12"]; ?></td>
																				</tr>
																				<tr>
																								<td class="style19"><strong>BALANCE</strong></td>
																								<td class="style19"><strong><?php echo $row["Bal01"]; ?></strong></td>
																								<td class="style19"><strong><?php echo $row["Bal02"]; ?></strong></td>
																								<td class="style19"><strong><?php echo $row["Bal03"]; ?></strong></td>
																								<td class="style19"><strong><?php echo $row["Bal04"]; ?></strong></td>
																								<td class="style19"><strong><?php echo $row["Bal05"]; ?></strong></td>
																								<td class="style19"><strong><?php echo $row["Bal06"]; ?></strong></td>
																								<td class="style19"><strong><?php echo $row["Bal07"]; ?></strong></td>
																								<td class="style19"><strong><?php echo $row["Bal08"]; ?></strong></td>
																								<td class="style19"><strong><?php echo $row["Bal09"]; ?></strong></td>
																								<td class="style19"><strong><?php echo $row["Bal10"]; ?></strong></td>
																								<td class="style19"><strong><?php echo $row["Bal11"]; ?></strong></td>
																								<td class="style19"><strong><?php echo $row["Bal12"]; ?></strong></td>
																				</tr>
																				</table>
																</td>
												</tr>


												<tr>
																<td colspan="8">
																<table style="width: 100%" cellspacing="0" cellpadding="5">
																				<tr>
																								<td style="width: 191px">NOTE</td>
																								<td>TOTAL WAIVED IS BASED ON REMARKS ON PAGE 1 OF THIS INVOICE.</td>
																				</tr>
																				<tr>
																								<td style="width: 191px">TOTAL ENTITLEMENT FEE</td>
																								<td>MYR <?php echo $row["AnnualTermFeesRevised"]; ?> (REVISED ANNUAL FEES)</td>
																				</tr>
																				<tr>
																								<td style="width: 191px">TOTAL PAID</td>
																								<td>MYR <?php echo $row["Paid"]; ?></td>
																				</tr>
																				<tr>
																								<td style="width: 191px">TOTAL WAIVED</td>
																								<td>- MYR <?php echo $row["Rebates1"]; ?> (FROM APR - JUN)</td>
																				</tr>
																				<tr>
																								<td style="width: 191px" class="style28">TOTAL BALANCE TO PAY</td>
																								<td class="style28">MYR <?php echo $row["Balance"]; ?> (FROM JAN - DEC)</td>
																				</tr>
																</table>
																</td>
												</tr>

												<tr>
																<td colspan="8">
																&nbsp;</td>
												</tr>

<?php 
} 
$count_account_1++;
?>

<?php

$count_account=1;
$sel_query_account="SELECT * FROM accountsummary WHERE StudentID='$StudentTemp'";
$result_account = mysqli_query($con,$sel_query_account);
while($row = mysqli_fetch_assoc($result_account)) { 

?>

												<tr>
																<td colspan="8">
																ENTRANCE FEES</td>
												</tr>
												<tr>
																<td></td>
																<td>REG</td>
																<td>SEC</td>
																<td>PRO</td>
																<td>EQU</td>
																<td>UNI</td>
																<td>TAK</td>
																<td>6YR</td>
												</tr>
												<tr>
																<td>PAID</td>
																<td><?php echo $row["Registration"]; ?></td>
																<td><?php echo $row["Security"]; ?></td>
																<td><?php echo $row["Program"]; ?></td>
																<td><?php echo $row["Equipment"]; ?></td>
																<td><?php echo $row["Uniform"]; ?></td>
																<td><?php echo $row["Takaful"]; ?></td>
																<td><?php echo $row["Extra1"]; ?></td>
<?php 
} 
$count_account++;
?>
												</tr>
								</table>
								<table style="width: 100%" cellspacing="0" cellpadding="5">
												<tr>
																<td>LEGEND:<br>
																REG - 
																REGISTRATION FEE<br>
																SEC - SECURITY 
																FEE<br>
																PRO - PROGRAMME 
																FEE<br>
																EQU - EQUIPMENT 
																FEE<br>
																UNI - UNIFORM 
																FEE<br>
																TAK - TAKAFUL 
																FEE<br>
																6YR - 6 YEARS 
																OLD FEE<br>
																</td>
												</tr>
												<tr>
																<td>&nbsp;</td>
												</tr>
								</table>
								</td>
				</tr>
				</table>

<table class="table">
<tbody>

</tbody>
</table>

<?php $count++; } ?>

</page>
					
</body>
</html>