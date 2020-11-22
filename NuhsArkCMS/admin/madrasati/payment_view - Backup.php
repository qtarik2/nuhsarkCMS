<?php
/*

*/

// include("auth.php"); //include auth.php file on all secure pages ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>																															
<link rel="stylesheet" href="../css/style.css" />
<meta charset="utf-8">
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

/*page[size="A5"][layout="landscape"] {  
  width: 21cm;
  height: 14.85cm; 
}
*/

page[size="A4"]{  
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
.style25 {
				font-family: Calibri;
				text-align: left;
				font-size: medium;
}
.style26 {
				border: 1px solid #000000;
}
.style27 {
				border: 0 solid #000000;
}
.style30 {
				font-size: medium;
}
</style>
<meta charset="utf-8">
</head>
<body style="background-color: #C0C0C0">
<?php
require('db.php');
// include("auth.php");

// $Username=$_SESSION['username'];
$ReceiptNo=$_REQUEST["ReceiptNo"];
$count=1;
$sel_query="SELECT * FROM madrasati_payment WHERE ReceiptNo='$ReceiptNo'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {

?>

<page size="A4">

<table width="100%" border="1" style="border-collapse:collapse;">
<tbody>

<table style="width: 100%" cellspacing="0" cellpadding="5">
				<tr>
								<td style="width: 211px">
								<img alt="" src="../../images/logo_madrasati.png" width="200" height="200"></td>
								<td>
<p class="style14">
								<strong><span class="style30">MADRASATI MONTESSORI 
								PRIMARY SCHOOL<br>
								2A, JALAN JASPER 7/15, SEKSYEN 7,<br>
								40000, SHAH ALAM, SELANGOR.<br>
								Tel: 019-336 2789<br>
								Email: madrasatihq@gmail.com<br>
								www.madrasati.edu.my</span></strong></p>
								</td>
				</tr>
</table>


<table style="width: 100%" cellspacing="0" cellpadding="5">
				<tr>
								<td class="style25"><strong>PAYMENT RECEIPT</strong></td>
				</tr>
				<tr>
								<td class="style14">&nbsp;</td>
				</tr>
				<tr>
								<td class="style14">
								<table style="width: 100%" cellspacing="0" cellpadding="5">
												<tr>
																<td style="width: 10%">
																Date :</td>
																<td style="width: 50%">
																<?php echo $row["Date"]; ?></td>
																<td style="width: 20%">
																Receipt No. :</td>
																<td><?php echo $row["ReceiptNo"]; ?></td>
												</tr>
												<tr>
																<td style="width: 10%">
																Program :</td>
																<td style="width: 50%">
																<?php echo $row["Programme"]; ?></td>
																<td style="width: 20%">
																Invoice No. :</td>
																<td><?php echo $row["InvoiceNo"]; ?></td>
												</tr>
												<tr>
																<td style="width: 10%">
																Name :</td>
																<td style="width: 50%">
																<?php echo $row["Name"]; ?></td>
																<td style="width: 20%">
																Student ID :</td>
																<td><?php echo $row["StudentID"]; ?></td>
												</tr>
								</table>
								</td>
				</tr>
				<tr>
								<td class="style14">
								&nbsp;</td>
				</tr>
				<tr>
								<td class="style14">
								<table style="width: 100%" cellspacing="0" cellpadding="5">
												<tr>
																<td style="width: 25%" class="style26">Amount</td>
																<td style="width: 25%" class="style26">Payment 
																Method</td>
																<td style="width: 25%" class="style26">Cheque No.</td>
																<td class="style26">Payment Date</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">MYR <?php echo $row["Amount"]; ?></td>
																<td style="width: 25%" class="style26"><?php echo $row["Method"]; ?></td>
																<td style="width: 25%" class="style26"><?php echo $row["ChequeNo"]; ?></td>
																<td class="style26"><?php echo $row["PaymentDate"]; ?></td>
												</tr>
												<tr>
																<td style="width: 25%" class="style27">
																PAY FOR</td>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td class="style27">
																&nbsp;</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																Registration</td>
																<td style="width: 25%" class="style26">
																MYR <?php echo $row["Registration"]; ?></td>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td class="style27">
																</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																Security</td>
																<td style="width: 25%" class="style26">
																MYR <?php echo $row["Security"]; ?></td>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td class="style27">
																</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																Program</td>
																<td style="width: 25%" class="style26">
																MYR <?php echo $row["Program"]; ?></td>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td class="style27">
																</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																Equipment</td>
																<td style="width: 25%" class="style26">
																MYR <?php echo $row["Equipment"]; ?></td>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td class="style27">
																&nbsp;</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																Uniform</td>
																<td style="width: 25%" class="style26">
																MYR <?php echo $row["Uniform"]; ?></td>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td class="style27">
																&nbsp;</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																Takaful</td>
																<td style="width: 25%" class="style26">
																MYR <?php echo $row["Takaful"]; ?></td>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td class="style27">
																&nbsp;</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																6 Years Old / 
																Others*</td>
																<td style="width: 25%" class="style26">
																MYR <?php echo $row["Extra1"]; ?></td>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td class="style27">
																&nbsp;</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																Term</td>
																<td style="width: 25%" class="style26">
																MYR <?php echo $row["Term"]; ?></td>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td class="style27">
																&nbsp;</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																Others**</td>
																<td style="width: 25%" class="style26">
																MYR <?php echo $row["Extra2"]; ?></td>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td class="style27">
																&nbsp;</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																Transport /
																Miscellaneous</td>
																<td style="width: 25%" class="style26">
																MYR <?php echo $row["MiscFees"]; ?></td>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td class="style27">
																&nbsp;</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td class="style27">
																&nbsp;</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																Notes</td>
																<td class="style26" colspan="3">
																<?php echo $row["Notes"]; ?></td>
												</tr>
												<tr>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td class="style27">
																&nbsp;</td>
												</tr>
								</table>
								</td>
				</tr>
				<tr>
								<td class="style14">
								&nbsp;</td>
				</tr>
				</table>
<?php
}
?>	

</tbody>
</table>

</page>
					
</body>
</html>