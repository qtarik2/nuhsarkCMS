<?php
/*

*/

include("auth.php"); //include auth.php file on all secure pages ?>
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
</style>
<meta charset="utf-8">
</head>
<body style="background-color: #C0C0C0">
<?php
require('db.php');
include("auth.php");

?>
<?php

$Username=$_SESSION['username'];
$ID=$_REQUEST["ID"];
$InvoiceNo=$_REQUEST["InvoiceNo"];

$count=1;
$sel_query="SELECT * FROM invoice WHERE StudentID='$Username' AND InvoiceNo='$InvoiceNo'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {

?>

<page size="A4">

<table width="100%" border="1" style="border-collapse:collapse;">
<tbody>

<table style="width: 100%" cellspacing="0" cellpadding="5">
				<tr>
								<td style="width: 211px">
								<img alt="" src="../images/nuhsarkislamicmontessorischool.jpg"></td>
								<td>
<h2 class="style25">
								NUH’S ARK ISLAMIC MONTESSORI SCHOOL<br>
								2A, JALAN JASPER 7/15, SEKSYEN 7,<br>
								40000, SHAH ALAM, SELANGOR.<br>
								Tel: 03-5524 2489 Hp: 019-337 2789<br>
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
								<td class="style14">
								<table style="width: 100%" cellspacing="0" cellpadding="5" class="style20">
												<tr>
																<td style="width: 65px" class="style19">
																NO</td>
																<td style="width: 280px" class="style19">
																DESCRIPTIONS</td>
																<td style="width: 200px" class="style19">
																PRICE/UNIT</td>
																<td class="style19">
																TOTAL PRICE</td>
												</tr>
												<tr>
																<td style="width: 65px">
																1</td>
																<td style="width: 280px">
																REGISTRATION</td>
																<td style="width: 200px">
																250.00</td>
																<td><?php echo $row["Registration"]; ?></td>
												</tr>
												<tr>
																<td style="width: 65px">
																2</td>
																<td style="width: 280px">
																SECURITY</td>
																<td style="width: 200px">
																500.00</td>
																<td><?php echo $row["Security"]; ?></td>
												</tr>
												<tr>
																<td style="width: 65px">
																3</td>
																<td style="width: 280px">
																EQUIPMENT</td>
																<td style="width: 200px">
																500.00</td>
																<td><?php echo $row["Equipment"]; ?></td>
												</tr>
												<tr>
																<td style="width: 65px">
																4</td>
																<td style="width: 280px">
																PROGRAM</td>
																<td style="width: 200px">
																500.00</td>
																<td><?php echo $row["Program"]; ?></td>
												</tr>
												<tr>
																<td style="width: 65px">
																5</td>
																<td style="width: 280px">
																UNIFORM</td>
																<td style="width: 200px">
																250.00</td>
																<td><?php echo $row["Uniform"]; ?></td>
												</tr>
												<tr>
																<td style="width: 65px">
																6</td>
																<td style="width: 280px">
																TAKAFUL</td>
																<td style="width: 200px">
																20.00</td>
																<td><?php echo $row["Takaful"]; ?></td>
												</tr>
												<tr>
																<td style="width: 65px">
																7</td>
																<td style="width: 280px">
																TERM</td>
																<td style="width: 200px">
																1300.00</td>
																<td><?php echo $row["Term"]; ?></td>
												</tr>
												<tr>
																<td style="width: 65px" class="style19">
																&nbsp;</td>
																<td style="width: 280px" class="style19">
																&nbsp;</td>
																<td class="style19" style="width: 200px">
																AMOUNT</td>
																<td class="style19"><?php echo $row["Amount"]; ?></td>
												</tr>
								</table>
								</td>
				</tr>
				<tr>
								<td class="style17">&nbsp;</td>
				</tr>
</table>

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
																<td>TOTAL PAYABLE : 
								MYR  <?php echo $row["Amount"]; ?></td>
												</tr>
												<tr>
																<td style="width: 150px">
																PAYMENT DUE :</td>
																<td style="width: 320px">
																Registration Fee 
																(Item 1)</td>
																<td>IMMEDIATE</td>
												</tr>
												<tr>
																<td style="width: 150px">
																&nbsp;</td>
																<td style="width: 320px">
																Entrance Fees 
																(Item 2 - 6)</td>
																<td><?php echo $row["Due2"]; ?></td>
												</tr>
												<tr>
																<td style="width: 150px">
																&nbsp;</td>
																<td style="width: 320px">
																Term Fee (Item 
																7)</td>
																<td><?php echo $row["Due3"]; ?></td>
												</tr>
								</table>
								</td>
				</tr>
				<tr>
								<td class="style14">Term fee is due on the first 
								week of every term. No invoice will be issued 
								thereafter. If no payment found, a reminder will 
								be sent to respective parents.<br>
								<br>
								Any discrepancies regarding this invoice should 
								be lodge within SEVEN (7) days<br>
								<br>
								Payment by cheque should be crossed and made 
								payable to:<br>
								“NUHS ARK CHILDCARE CENTRE”; MAYBANK ACC: 562106 
								639 546<br>
								<br>
								Please send us the proof of payment to 
								nuhsark86@gmail.com or 0193372789<br>
								<br>
								Do include your child&#39;s name and payment 
								description for our reference</td>
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