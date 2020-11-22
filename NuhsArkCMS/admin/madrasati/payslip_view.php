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
.style26 {
				border: 1px solid #000000;
}
.style27 {
				border: 0 solid #000000;
}
.style29 {
				font-family: Calibri;
}
.style30 {
				font-size: medium;
}
.style31 {
				border: 1px solid #000000;
				text-align: right;
}
.style32 {
				border: 0 solid #000000;
				text-align: right;
}
</style>
<meta charset="utf-8">
</head>
<body style="margin: 0; background-color: #C0C0C0">
<?php

require('db.php');
// include("auth.php");

// $Username=$_SESSION['username'];
$ID=$_REQUEST["ID"];
$count=1;
$sel_query="SELECT * FROM madrasati_payslip WHERE ID='$ID'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {

?>

<page size="A4">

<table width="100%" border="1" style="border-collapse:collapse;">
<tbody>

<table style="width: 100%" cellspacing="0" cellpadding="5">
				<tr>
								<td style="width: 211px">
								<img alt="" src="../../images/logo_madrasati.png" width="250" height="250"></td>
								<td>
<p class="style14">
								<strong><span class="style30">MADRASATI MONTESSORI 
								PRIMARY SCHOOL<br>
								2A, JALAN JASPER 7/15, SEKSYEN 7,<br>
								40000, SHAH ALAM, SELANGOR.<br>
								Tel: 019-336 2789<br>
								Email: madrasatihq@gmail.com<br>
								www.madrasati.edu.my</span></strong></p>
<table style="width: 100%" cellspacing="0" cellpadding="5">
				<tr class="style29">
								<td style="width: 100px"><strong>PAYSLIP</strong></td>
								<td>&nbsp;</td>
				</tr>
				<tr class="style29">
								<td style="width: 100px">Month :</td>
								<td><?php echo $row["Month"]; ?></td>
				</tr>
				<tr class="style29">
								<td style="width: 100px">Name :</td>
								<td><?php echo $row["Name"]; ?></td>
				</tr>
				<tr class="style29">
								<td style="width: 100px">Position :</td>
								<td><?php echo $row["Position"]; ?></td>
				</tr>
				<tr class="style29">
								<td style="width: 100px">IC No. :</td>
								<td><?php echo $row["ICNo"]; ?></td>
				</tr>
				<tr class="style29">
								<td style="width: 100px">EPF No. :</td>
								<td><?php echo $row["EPFNo"]; ?></td>
				</tr>
</table>
								</td>
				</tr>
</table>


<table style="width: 100%" cellspacing="0" cellpadding="5">
				<tr>
								<td class="style14">
								EARNINGS</td>
				</tr>
				<tr>
								<td class="style14">
								<table style="width: 100%" cellspacing="0" cellpadding="5">
												<tr>
																<td style="width: 25%" class="style26">
																NO</td>
																<td style="width: 25%" class="style26">
																DESCRIPTIONS</td>
																<td style="width: 25%" class="style26">
																GROSS</td>
																<td class="style26">
																NETT</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">1</td>
																<td style="width: 25%" class="style26">
																SALARY</td>
																<td style="width: 25%" class="style31">
																MYR  <?php echo $row["GrossBasic"]; ?></td>
																<td class="style31">
																MYR  <?php echo $row["NettBasic"]; ?></td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																2</td>
																<td style="width: 25%" class="style26">
																ALLOWANCE</td>
																<td style="width: 25%" class="style31">
																MYR  <?php echo $row["GrossAllowance"]; ?></td>
																<td class="style31">
																MYR  <?php echo $row["NettAllowance"]; ?></td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																3</td>
																<td style="width: 25%" class="style26">
																EPF (13%)</td>
																<td style="width: 25%" class="style31">
																MYR  <?php echo $row["EPFEmployer"]; ?></td>
																<td class="style31">
																&nbsp;</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																4</td>
																<td style="width: 25%" class="style26">
																SOCSO</td>
																<td style="width: 25%" class="style31">
																MYR  <?php echo $row["SOCSOEmployer"]; ?></td>
																<td class="style31">
																&nbsp;</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																5</td>
																<td style="width: 25%" class="style26">
																SOCSO SIP</td>
																<td style="width: 25%" class="style31">
																MYR  <?php echo $row["SOCSOSIPEmployer"]; ?></td>
																<td class="style31">
																&nbsp;</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																6</td>
																<td style="width: 25%" class="style26">
																CLAIMS</td>
																<td style="width: 25%" class="style31">
																MYR <?php echo $row["Claims"]; ?></td>
																<td class="style31">
																MYR <?php echo $row["Claims"]; ?></td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																&nbsp;</td>
																<td style="width: 25%" class="style26">
																TOTAL EARNINGS</td>
																<td style="width: 25%" class="style31">
																MYR  <?php echo $row["GrossEarnings"]; ?></td>
																<td class="style31">
																MYR  <?php echo $row["NettEarnings"]; ?></td>
												</tr>
								</table>
								</td>
				</tr>
				<tr>
								<td class="style14">
								DEDUCTIONS</td>
				</tr>
				<tr>
								<td class="style14">
								<table style="width: 100%" cellspacing="0" cellpadding="5">
												<tr>
																<td style="width: 25%" class="style26">
																1</td>
																<td style="width: 25%" class="style26">
																EPF (11%)</td>
																<td style="width: 25%" class="style31">
																&nbsp;</td>
																<td class="style31">
																MYR <?php echo $row["EPFEmployee"]; ?></td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																2</td>
																<td style="width: 25%" class="style26">
																SOCSO</td>
																<td style="width: 25%" class="style31">
																&nbsp;</td>
																<td class="style31">
																MYR <?php echo $row["SOCSOEmployee"]; ?></td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																3</td>
																<td style="width: 25%" class="style26">
																SOCSO SIP</td>
																<td style="width: 25%" class="style31">
																&nbsp;</td>
																<td class="style31">
																MYR <?php echo $row["SOCSOSIPEmployee"]; ?></td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																4</td>
																<td style="width: 25%" class="style26">
																ABSENT</td>
																<td style="width: 25%" class="style26">
																<?php echo $row["Notes"]; ?></td>
																<td class="style31">
																MYR <?php echo $row["Others"]; ?></td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																5</td>
																<td style="width: 25%" class="style26">
																ADVANCE</td>
																<td style="width: 25%" class="style26">
																&nbsp;</td>
																<td class="style31">
																MYR <?php echo $row["Advance"]; ?></td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																&nbsp;</td>
																<td style="width: 25%" class="style26">
																TOTAL DEDUCTIONS</td>
																<td style="width: 25%" class="style26">
																</td>
																<td class="style31">
																MYR <?php echo $row["TotalDeductions"]; ?></td>
												</tr>
												<tr>
																<td class="style26" colspan="4">
																NOTES</td>
												</tr>
												<tr>
																<td class="style26" colspan="4">
																<?php echo $row["Notes1"]; ?></td>
												</tr>
								</table>
								</td>
				</tr>
				<tr>
								<td class="style14">
								<table style="width: 100%" cellspacing="0" cellpadding="5">
												<tr>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td style="width: 25%" class="style27">
																NETT SALARY</td>
																<td class="style32">
																MYR  <?php echo $row["NettSalary"]; ?></td>
												</tr>
												</table>
								</td>
				</tr>
				<tr>
								<td class="style14">
								<table style="width: 100%" cellspacing="0" cellpadding="5">
												<tr>
																<td style="width: 25%" class="style27">
																Approved By :</td>
																<td style="width: 25%" class="style27">
																<?php echo $row["ApprovedBy"]; ?></td>
																<td style="width: 25%" class="style27">
																Cheque No. :</td>
																<td class="style27">
																<?php echo $row["ChequeNo"]; ?></td>
												</tr>
												<tr>
																<td style="width: 25%" class="style27">
																Received By :</td>
																<td style="width: 25%" class="style27">
																<?php echo $row["ReceivedBy"]; ?></td>
																<td style="width: 25%" class="style27">
																Date :</td>
																<td class="style27">
																<?php echo $row["Date"]; ?></td>
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