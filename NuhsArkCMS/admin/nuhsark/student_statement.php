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
.style29 {
				font-size: medium;
				font-family: Calibri;
}
.style30 {
				font-size: small;
				text-align: right;
				font-family: Calibri;
}
</style>
<meta charset="utf-8">
</head>
<body style="background-color: #C0C0C0">
<?php

require('db.php');
include("auth.php");

// $Username=$_SESSION['username'];
$StudentID=$_REQUEST["StudentID"];

$count=1;
$sel_query="SELECT * FROM statement WHERE StudentID='$StudentID'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {

$StudentID=$_REQUEST["StudentID"];

$TermRebates=$row["Term1Rebates"]+$row["Term2Rebates"]+$row["Term3Rebates"]+$row["Term4Rebates"];
$TermRebates_Format = number_format($TermRebates, 2, '.', '');

?>

<page size="A4">

<table width="100%" border="1" style="border-collapse:collapse;">
<tbody>

<table style="width: 100%" cellspacing="0" cellpadding="5">
				<tr>
								<td style="width: 211px">
								<img alt="" src="../../images/nuhsarkislamicmontessorischool.jpg" width="200" height="197"></td>
								<td>
<table style="width: 100%">
				<tr>
								<td class="style30">
								<h1><strong>STUDENT STATEMENT</strong></h1>
								</td>
				</tr>
				<tr>
								<td class="style29">NUH’S ARK ISLAMIC MONTESSORI SCHOOL<br>
								2A, JALAN JASPER 7/15, SEKSYEN 7,
								40000, SHAH ALAM, SELANGOR.<br>
								Tel: 03-5524 2489 HP: 019-336 2789 <br>
								Email: nuhsark86@gmail.com Website:
								www.nuhsark.edu.my</td>
				</tr>
				<tr>
								<td>
								<table style="width: 100%">
												<tr class="style26">
																<td style="width: 120px">
																Name :</td>
																<td><?php echo $row["Name"]; ?></td>
												</tr>
												<tr class="style26">
																<td style="width: 120px">
																Program :</td>
																<td><?php echo $row["Programme"]; ?></td>
												</tr>
												<tr class="style26">
																<td style="width: 120px">
																Student ID :</td>
																<td><?php echo $row["StudentID"]; ?></td>
												</tr>
												<tr class="style26">
																<td style="width: 120px">
																Date :</td>
																<td><?php echo $row["Date"]; ?></td>
												</tr>
								</table>
								</td>
				</tr>
</table>
								</td>
				</tr>
</table>


<table style="width: 100%" cellspacing="0" cellpadding="5">
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
																TERM 1 FEES</td>
																<td style="width: 125px">
																MYR <?php echo $row["DiscountTerm1"]; ?></td>
												</tr>
												<tr class="style26">
																<td style="width: 400px">
																TERM 2 FEES</td>
																<td style="width: 125px">
																MYR <?php echo $row["DiscountTerm2"]; ?></td>
												</tr>
												<tr class="style26">
																<td style="width: 400px">
																TERM 3 FEES</td>
																<td style="width: 125px">
																MYR <?php echo $row["DiscountTerm3"]; ?></td>
												</tr>
												<tr class="style26">
																<td style="width: 400px">
																TERM 4 FEES</td>
																<td style="width: 125px">
																MYR <?php echo $row["DiscountTerm4"]; ?></td>
												</tr>
												<tr class="style26">
																<td style="width: 400px" class="style27">
																ANNUAL FEES</td>
																<td style="width: 125px" class="style27">
																MYR <?php echo $row["AnnualTermFees"]; ?></td>
												</tr>
												<tr class="style26">
																<td style="width: 400px" class="style27">
																TOTAL DEDUCTIONS</td>
																<td style="width: 125px" class="style27">
																-
																MYR	<?php echo $row["Rebates2"]; ?>															
																</td>
												</tr>
												<tr class="style26">
																<td style="width: 400px" class="style19">
																REBATES</td>
																<td style="width: 125px" class="style19">
																- MYR <?php echo $TermRebates_Format; ?></td>
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
																																TOTAL ANNUAL 
																FEES PAID</td>
																<td style="width: 125px" class="style19">
																-
																MYR <?php echo $row["Paid"]; ?></td>
												</tr>
												<tr class="style26">
																<td style="width: 400px" class="style19">
																<strong>TOTAL 
																BALANCE TO PAY 
																UNTIL DECEMBER</strong></td>
																<td style="width: 125px" class="style19">
																<strong>MYR <?php echo $row["Balance"]; ?></strong></td>
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
<th>NO</th>
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

$Query_Payment="SELECT * FROM payment WHERE StudentID='$StudentTemp'";
$Result_Payment = mysqli_query($con,$Query_Payment);
while($row = mysqli_fetch_assoc($Result_Payment)) { 
?>
<tr>
<td align="left"><?php echo $Query_count; ?></td>
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
$sel_query_account_1="SELECT * FROM statement WHERE StudentID='$StudentTemp'";
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
																				</table>
																</td>
												</tr>


												<tr>
																<td colspan="8">
																<table style="width: 100%" cellspacing="0" cellpadding="5">
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
																<td>
																<table style="width: 100%">
																				<tr>
																								<td style="width: 69px">LEGEND:</td>
																								<td style="width: 369px">&nbsp;</td>
																								<td style="width: 69px">&nbsp;</td>
																								<td>&nbsp;</td>
																				</tr>
																				<tr>
																								<td style="width: 69px">REG</td>
																								<td style="width: 369px">REGSITRATION FEE</td>
																								<td style="width: 69px">SEC</td>
																								<td>SECURITY FEE</td>
																				</tr>
																				<tr>
																								<td style="width: 69px">PRO</td>
																								<td style="width: 369px">PROGRAMME FEE</td>
																								<td style="width: 69px">EQU</td>
																								<td>EQUIPMENT FEE</td>
																				</tr>
																				<tr>
																								<td style="width: 69px">UNI</td>
																								<td style="width: 369px">UNIFORM FEE</td>
																								<td style="width: 69px">TAK</td>
																								<td>TAKAFUL FEE</td>
																				</tr>
																				<tr>
																								<td style="width: 69px">6YR</td>
																								<td style="width: 369px">6 YEARS OLD FEE</td>
																								<td style="width: 69px">&nbsp;</td>
																								<td>&nbsp;</td>
																				</tr>
																</table>
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