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

/*
page[size="A4"] {  
  width: 21cm;
  height: 29.7cm; 
}
*/


page[size="A4"][layout="landscape"] {  
  width: 29.7cm;
  height: 21cm;
}

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
.style13 {
				font-family: Calibri;
				text-align: left;
}
.style21 {
				font-size: medium;
}
.style24 {
				font-family: Calibri;
				text-align: center;
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
.style28 {
				border: 1px solid #000000;
				text-align: right;
}
.style29 {
				border: 0 solid #000000;
				text-align: right;
}
</style>
<meta charset="utf-8">
</head>
<body style="background-color: #C0C0C0">
<?php
require('db.php');
// include("auth.php");

// $Username=$_SESSION['username'];
$ID=$_REQUEST["ID"];
$count=1;
$sel_query="SELECT * FROM payslip WHERE ID='$ID'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {

?>

<page size="A4" layout="landscape">

<table width="100%" border="1" style="border-collapse:collapse;">
<tbody>


<table style="width: 100%" cellspacing="0" cellpadding="5">
				<tr>
								<td class="style25" colspan="2"><strong>PAYSLIP</strong></td>
				</tr>
				<tr>
								<td class="style14" colspan="2">
								<table style="width: 100%" cellspacing="0" cellpadding="5">
												<tr>
																<td style="width: 10%">
																Month :</td>
																<td style="width: 50%">
																<?php echo $row["Month"]; ?></td>
																<td style="width: 20%">
																&nbsp;</td>
																<td></td>
												</tr>
												<tr>
																<td style="width: 10%">
																Name :</td>
																<td style="width: 50%">
																<?php echo $row["Name"]; ?></td>
																<td style="width: 20%">
																IC No. :</td>
																<td><?php echo $row["ICNo"]; ?></td>
												</tr>
												<tr>
																<td style="width: 10%">
																Position :</td>
																<td style="width: 50%">
																<?php echo $row["Position"]; ?></td>
																<td style="width: 20%">
																EPF No. :</td>
																<td><?php echo $row["EPFNo"]; ?></td>
												</tr>
												</table>
								</td>
				</tr>
				<tr>
								<td class="style14" colspan="2">
								EARNINGS</td>
				</tr>
				<tr>
								<td class="style14" colspan="2">
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
																<td style="width: 25%" class="style28">
																MYR  <?php echo $row["GrossBasic"]; ?></td>
																<td class="style28">
																MYR  <?php echo $row["NettBasic"]; ?></td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																2</td>
																<td style="width: 25%" class="style26">
																ALLOWANCE</td>
																<td style="width: 25%" class="style28">
																MYR  <?php echo $row["GrossAllowance"]; ?></td>
																<td class="style28">
																MYR  <?php echo $row["NettAllowance"]; ?></td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																3</td>
																<td style="width: 25%" class="style26">
																EPF (12%)</td>
																<td style="width: 25%" class="style28">
																MYR  <?php echo $row["EPFEmployer"]; ?></td>
																<td class="style28">
																&nbsp;</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																4</td>
																<td style="width: 25%" class="style26">
																SOCSO</td>
																<td style="width: 25%" class="style28">
																MYR  <?php echo $row["SOCSOEmployer"]; ?></td>
																<td class="style28">
																&nbsp;</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																5</td>
																<td style="width: 25%" class="style26">
																SOCSO SIP</td>
																<td style="width: 25%" class="style28">
																MYR  <?php echo $row["SOCSOSIPEmployer"]; ?></td>
																<td class="style28">
																&nbsp;</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																&nbsp;</td>
																<td style="width: 25%" class="style26">
																TOTAL EARNINGS</td>
																<td style="width: 25%" class="style28">
																MYR  <?php echo $row["GrossEarnings"]; ?></td>
																<td class="style28">
																MYR  <?php echo $row["NettEarnings"]; ?></td>
												</tr>
								</table>
								</td>
				</tr>
				<tr>
								<td class="style14" colspan="2">
								DEDUCTIONS</td>
				</tr>
				<tr>
								<td class="style14" colspan="2">
								<table style="width: 100%" cellspacing="0" cellpadding="5">
												<tr>
																<td style="width: 25%" class="style26">
																NO</td>
																<td style="width: 25%" class="style26">
																DESCRIPTIONS</td>
																<td class="style26">
																&nbsp;</td>
																<td style="width: 25%" class="style26">
																GROSS</td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">1</td>
																<td style="width: 25%" class="style26">
																EPF (11%)</td>
																<td class="style28">
																&nbsp;</td>																
																<td style="width: 25%" class="style28">
																MYR  <?php echo $row["EPFEmployee"]; ?></td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																2</td>
																<td style="width: 25%" class="style26">
																SOCSO</td>
																<td class="style28">
																&nbsp;</td>
																<td style="width: 25%" class="style28">
																MYR  <?php echo $row["SOCSOEmployee"]; ?></td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																3</td>
																<td style="width: 25%" class="style26">
																SOCSO SIP</td>
																<td class="style28">
																&nbsp;</td>
																<td style="width: 25%" class="style28">
																MYR  <?php echo $row["SOCSOSIPEmployee"]; ?></td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																4</td>
																<td style="width: 25%" class="style26">
																ABSENT</td>
																<td class="style28">
																MYR <?php echo $row["Notes"]; ?></td>
																<td style="width: 25%" class="style28">
																MYR  <?php echo $row["Others"]; ?></td>
												</tr>
												<tr>
																<td style="width: 25%" class="style26">
																&nbsp;</td>
																<td style="width: 25%" class="style26">
																TOTAL DEDUCTIONS</td>
																<td style="width: 25%" class="style28">
																MYR  <?php echo $row["TotalDeductions"]; ?></td>
																<td class="style28">
																&nbsp;</td>
												</tr>
								</table>
								</td>
				</tr>
				<tr>
								<td class="style14" colspan="2">
								<table style="width: 100%" cellspacing="0" cellpadding="5">
												<tr>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td style="width: 25%" class="style27">
																&nbsp;</td>
																<td style="width: 25%" class="style27">
																NETT SALARY</td>
																<td class="style29">
																MYR  <?php echo $row["NettSalary"]; ?></td>
												</tr>
												</table>
								</td>
				</tr>
				<tr>
								<td class="style14" colspan="2">
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
								<td class="style14" colspan="2">
								&nbsp;</td>
				</tr>
				<tr>
								<td class="style13" colspan="2">
								<p class="style24">Nuh&#39;s Ark Islamic Montessori School<br>
								2A Jalan Jasper 7/15, Seksyen 7,
								40000 Shah Alam, Selangor.<br>
								Tel: 6019-337 2789 |
								Email: <a href="mailto:nuhsark81@gmail.com">
								nuhsark81@gmail.com</a> |
								Website: <a href="http://www.nuhsark.edu.my">
								www.nuhsark.edu.my</a> &nbsp;</p></td>
				</tr>
				<tr>
								<td class="style25" colspan="2"><strong>PAYSLIP</strong></td>
				</tr>
				<tr>
								<td class="style14" colspan="2">
								<table style="width: 100%" cellspacing="0" cellpadding="5">
												<tr>
																<td style="width: 10%">
																Month :</td>
																<td style="width: 50%">
																<?php echo $row["Month"]; ?></td>
																<td style="width: 20%">
																&nbsp;</td>
																<td></td>
												</tr>
												<tr>
																<td style="width: 10%">
																Name :</td>
																<td style="width: 50%">
																<?php echo $row["Name"]; ?></td>
																<td style="width: 20%">
																IC No. :</td>
																<td><?php echo $row["ICNo"]; ?></td>
												</tr>
												<tr>
																<td style="width: 10%">
																Position :</td>
																<td style="width: 50%">
																<?php echo $row["Position"]; ?></td>
																<td style="width: 20%">
																EPF No. :</td>
																<td><?php echo $row["EPFNo"]; ?></td>
												</tr>
												</table>
								</td>
				</tr>
				<tr>
								<td class="style14" colspan="2">
								EARNINGS</td>
				</tr>
				<tr>
								<td class="style13" style="width: 50%">

<table style="width: 100%" cellspacing="0" cellpadding="5">
				<tr>
								<td style="width: 211px">
								<img alt="" src="../images/nuhsarklogo2.jpg" width="56" height="120"></td>
								<td>
<h2 class="style14">
								<strong><span class="style21">Nuh&#39;s Ark Islamic Montessori School<br>
								2A Jalan Jasper 7/15, Seksyen 7,<br>
								40000 Shah Alam, Selangor.<br>
								Tel: 6019-337 2789<br>
								Email: <a href="mailto:nuhsark86@gmail.com">nuhsark86@gmail.com</a><br>
								Website: </span> </strong> <a href="http://www.nuhsark.edu.my">
								<strong><span class="style21">www.nuhsark.edu.my</span></strong></a></h2>
								</td>
				</tr>
</table>


								</td>
								<td class="style13">

<table style="width: 100%" cellspacing="0" cellpadding="5">
				<tr>
								<td style="width: 211px">
								<img alt="" src="../images/nuhsarklogo2.jpg" width="56" height="120"></td>
								<td>
<h2 class="style14">
								<strong><span class="style21">Nuh&#39;s Ark Islamic Montessori School<br>
								2A Jalan Jasper 7/15, Seksyen 7,<br>
								40000 Shah Alam, Selangor.<br>
								Tel: 6019-337 2789<br>
								Email: <a href="mailto:nuhsark86@gmail.com">nuhsark86@gmail.com</a><br>
								Website: </span> </strong> <a href="http://www.nuhsark.edu.my">
								<strong><span class="style21">www.nuhsark.edu.my</span></strong></a></h2>
								</td>
				</tr>
</table>


								</td>
				</tr>
				<tr>
								<td class="style13" style="width: 50%">
								&nbsp;</td>
								<td class="style13">
								&nbsp;</td>
				</tr>
				<tr>
								<td class="style13" style="width: 50%">
								&nbsp;</td>
								<td class="style13">
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