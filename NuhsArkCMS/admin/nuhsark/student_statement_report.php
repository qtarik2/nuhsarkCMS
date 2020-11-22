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
a {
				color: #FF0000;
}
a:visited {
				color: #FF0000;
}
a:hover {
				color: #800080;
}

page {
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0cm rgba(0,0,0,0);
  /*box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);*/
}
page[size="A4"][layout="landscape"] {  
  width: 29.7cm;
  height: 21cm;
}
@media print {
  body, page {
    margin: 0;
    box-shadow: 0;
  }
}a {
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

</style>
</head>

<page size="A4" layout="landscape">
<body bgcolor="#ffffff" style="margin: 0; color: #000000; background-color: #C0C0C0;">
<?php
require('db.php');
$count=1;
	$sel_query1="SELECT header FROM pageinfo WHERE ID='1'";
	$result1 = mysqli_query($con,$sel_query1);
	while($row = mysqli_fetch_assoc($result1)) { 
	echo $row["header"];
	}
?>
																
<?php
require('db.php');
include("auth.php");

?>
<h2>STUDENT STATEMENT TERM FEES REPORT (ANNUAL FEES REPORT)</h2>
<?php 
$Month='2020';
// $Month=$_POST['Month'];

echo "Year:";
echo "$Month";
echo "<br><br>";
?>
<table class="table">
<thead>
<tr>
<th><strong>ID</strong></th>
<th>STUDENT NAME</th>
<th>PROGRAMME</th>
<th>T1</th>
<th>T2</th>
<th>T3</th>
<th>T4</th>
<th>ANNUAL FEES</th>
<th>REBATES</th>
<th>DEDUCTIONS</th>
<th>REVISED FEES</th>
<th>WAIVED</th>
<th>PAID</th>
<th>BALANCE</th>
</tr>
</thead>
<tr><td colspan="14">PRESCHOOL HALF DAY</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month='2020';
// $Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM statement WHERE StudentID LIKE '$Month%' AND Code='1'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

$TermRebates=$row["Term1Rebates"]+$row["Term2Rebates"]+$row["Term3Rebates"]+$row["Term4Rebates"];
$TermRebates_Format = number_format($TermRebates, 2, '.', '');

?>

<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["StudentID"]; ?><br><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Programme"]; ?></td>
<td align="left"><?php echo $row["DiscountTerm1"]; ?></td>
<td align="left"><?php echo $row["DiscountTerm2"]; ?></td>
<td align="left"><?php echo $row["DiscountTerm3"]; ?></td>
<td align="left"><?php echo $row["DiscountTerm4"]; ?></td>
<td align="left"><?php echo $row["AnnualTermFees"]; ?></td>
<td align="left"><?php echo $TermRebates_Format; ?></td>
<td align="left"><?php echo $row["Rebates2"]; ?></td>
<td align="left"><?php echo $row["AnnualTermFeesRevised"]; ?></td>
<td align="left"><?php echo $row["Rebates1"]; ?></td>
<td align="left"><?php echo $row["Paid"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
</tr>
<?php $count++; } ?>

<tr><td colspan="14">PRESCHOOL FULL DAY</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month='2020';
// $Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM statement WHERE StudentID LIKE '$Month%' AND Code='2'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

$TermRebates=$row["Term1Rebates"]+$row["Term2Rebates"]+$row["Term3Rebates"]+$row["Term4Rebates"];
$TermRebates_Format = number_format($TermRebates, 2, '.', '');

?>

<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["StudentID"]; ?><br><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Programme"]; ?></td>
<td align="left"><?php echo $row["DiscountTerm1"]; ?></td>
<td align="left"><?php echo $row["DiscountTerm2"]; ?></td>
<td align="left"><?php echo $row["DiscountTerm3"]; ?></td>
<td align="left"><?php echo $row["DiscountTerm4"]; ?></td>
<td align="left"><?php echo $row["AnnualTermFees"]; ?></td>
<td align="left"><?php echo $TermRebates_Format; ?></td>
<td align="left"><?php echo $row["Rebates2"]; ?></td>
<td align="left"><?php echo $row["AnnualTermFeesRevised"]; ?></td>
<td align="left"><?php echo $row["Rebates1"]; ?></td>
<td align="left"><?php echo $row["Paid"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
</tr>
<?php $count++; } ?>

<tr><td colspan="14">RECEPTION HALF DAY</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month='2020';
// $Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM statement WHERE StudentID LIKE '$Month%' AND Code='3'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

$TermRebates=$row["Term1Rebates"]+$row["Term2Rebates"]+$row["Term3Rebates"]+$row["Term4Rebates"];
$TermRebates_Format = number_format($TermRebates, 2, '.', '');

?>

<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["StudentID"]; ?><br><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Programme"]; ?></td>
<td align="left"><?php echo $row["DiscountTerm1"]; ?></td>
<td align="left"><?php echo $row["DiscountTerm2"]; ?></td>
<td align="left"><?php echo $row["DiscountTerm3"]; ?></td>
<td align="left"><?php echo $row["DiscountTerm4"]; ?></td>
<td align="left"><?php echo $row["AnnualTermFees"]; ?></td>
<td align="left"><?php echo $TermRebates_Format; ?></td>
<td align="left"><?php echo $row["Rebates2"]; ?></td>
<td align="left"><?php echo $row["AnnualTermFeesRevised"]; ?></td>
<td align="left"><?php echo $row["Rebates1"]; ?></td>
<td align="left"><?php echo $row["Paid"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
</tr>
<?php $count++; } ?>

<tr><td colspan="14">RECEPTION FULL DAY</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month='2020';
// $Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM statement WHERE StudentID LIKE '$Month%' AND Code='4'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

$TermRebates=$row["Term1Rebates"]+$row["Term2Rebates"]+$row["Term3Rebates"]+$row["Term4Rebates"];
$TermRebates_Format = number_format($TermRebates, 2, '.', '');

?>

<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["StudentID"]; ?><br><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Programme"]; ?></td>
<td align="left"><?php echo $row["DiscountTerm1"]; ?></td>
<td align="left"><?php echo $row["DiscountTerm2"]; ?></td>
<td align="left"><?php echo $row["DiscountTerm3"]; ?></td>
<td align="left"><?php echo $row["DiscountTerm4"]; ?></td>
<td align="left"><?php echo $row["AnnualTermFees"]; ?></td>
<td align="left"><?php echo $TermRebates_Format; ?></td>
<td align="left"><?php echo $row["Rebates2"]; ?></td>
<td align="left"><?php echo $row["AnnualTermFeesRevised"]; ?></td>
<td align="left"><?php echo $row["Rebates1"]; ?></td>
<td align="left"><?php echo $row["Paid"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
</tr>
<?php $count++; } ?>

</tbody>

</table>
</body>
</page>
</html>
