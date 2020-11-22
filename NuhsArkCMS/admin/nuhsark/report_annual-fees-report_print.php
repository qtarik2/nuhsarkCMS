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
<h2>ANNUAL FEES REPORT (ENTRANCE FEES REPORT)</h2>
<?php 
$Month=$_POST['Month'];

echo "Year:";
echo "$Month";
echo "<br><br>";
?>
<table class="table">
<thead>
<tr>
<th><strong>ID</strong></th>
<th>STUDENT NAME</th>
<th>INVOICE</th>
<th>PAYMENT</th>
<th>BALANCE</th>
<th>REG</th>
<th>SEC</th>
<th>PRO</th>
<th>EQU</th>
<th>UNI</th>
<th>TAK</th>
<th>6YR</th>
<th>MISC</th>
<th>TERM</th>
<th>JAN</th>
<th>FEB</th>
<th>MAR</th>
<th>APR</th>
<th>MAY</th>
<th>JUN</th>
<th>JUL</th>
<th>AUG</th>
<th>SEP</th>
<th>OCT</th>
<th>NOV</th>
<th>DEC</th>
<th>EXTRA</th>
</tr>
</thead>
<tr><td colspan="4">PRESCHOOL HALF DAY</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM accountsummary WHERE StudentID LIKE '$Month%' AND Programme = 'PRESCHOOL HALF DAY'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

?>

<tr>
<td align="left"><?php echo $row["ID"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Debit"]; ?></td>
<td align="left"><?php echo $row["Credit"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
<td align="left"><?php echo $row["Registration"]; ?></td>
<td align="left"><?php echo $row["Security"]; ?></td>
<td align="left"><?php echo $row["Program"]; ?></td>
<td align="left"><?php echo $row["Equipment"]; ?></td>
<td align="left"><?php echo $row["Uniform"]; ?></td>
<td align="left"><?php echo $row["Takaful"]; ?></td>
<td align="left"><?php echo $row["Extra1"]; ?></td>
<td align="left"><?php echo $row["MiscFees"]; ?></td>
<td align="left"><?php echo $row["Term"]; ?></td>
<td align="left"><?php echo $row["M01"]; ?></td>
<td align="left"><?php echo $row["M02"]; ?></td>
<td align="left"><?php echo $row["M03"]; ?></td>
<td align="left"><?php echo $row["M04"]; ?></td>
<td align="left"><?php echo $row["M05"]; ?></td>
<td align="left"><?php echo $row["M06"]; ?></td>
<td align="left"><?php echo $row["M07"]; ?></td>
<td align="left"><?php echo $row["M08"]; ?></td>
<td align="left"><?php echo $row["M09"]; ?></td>
<td align="left"><?php echo $row["M10"]; ?></td>
<td align="left"><?php echo $row["M11"]; ?></td>
<td align="left"><?php echo $row["M12"]; ?></td>
<td align="left"><?php echo $row["Extra2"]; ?></td>
</tr>
<?php $count++; } ?>

<tr><td colspan="4">PRESCHOOL FULL DAY</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM accountsummary WHERE StudentID LIKE '$Month%' AND Programme = 'PRESCHOOL FULL DAY'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

?>

<tr>
<td align="left"><?php echo $row["ID"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Debit"]; ?></td>
<td align="left"><?php echo $row["Credit"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
<td align="left"><?php echo $row["Registration"]; ?></td>
<td align="left"><?php echo $row["Security"]; ?></td>
<td align="left"><?php echo $row["Program"]; ?></td>
<td align="left"><?php echo $row["Equipment"]; ?></td>
<td align="left"><?php echo $row["Uniform"]; ?></td>
<td align="left"><?php echo $row["Takaful"]; ?></td>
<td align="left"><?php echo $row["Extra1"]; ?></td>
<td align="left"><?php echo $row["MiscFees"]; ?></td>
<td align="left"><?php echo $row["Term"]; ?></td>
<td align="left"><?php echo $row["M01"]; ?></td>
<td align="left"><?php echo $row["M02"]; ?></td>
<td align="left"><?php echo $row["M03"]; ?></td>
<td align="left"><?php echo $row["M04"]; ?></td>
<td align="left"><?php echo $row["M05"]; ?></td>
<td align="left"><?php echo $row["M06"]; ?></td>
<td align="left"><?php echo $row["M07"]; ?></td>
<td align="left"><?php echo $row["M08"]; ?></td>
<td align="left"><?php echo $row["M09"]; ?></td>
<td align="left"><?php echo $row["M10"]; ?></td>
<td align="left"><?php echo $row["M11"]; ?></td>
<td align="left"><?php echo $row["M12"]; ?></td>
<td align="left"><?php echo $row["Extra2"]; ?></td>
</tr>
<?php $count++; } ?>

<tr><td colspan="4">PRESCHOOL HALF DAY SPECIAL</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM accountsummary WHERE StudentID LIKE '$Month%' AND Programme = 'PRESCHOOL HALF DAY SPECIAL'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

?>

<tr>
<td align="left"><?php echo $row["ID"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Debit"]; ?></td>
<td align="left"><?php echo $row["Credit"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
<td align="left"><?php echo $row["Registration"]; ?></td>
<td align="left"><?php echo $row["Security"]; ?></td>
<td align="left"><?php echo $row["Program"]; ?></td>
<td align="left"><?php echo $row["Equipment"]; ?></td>
<td align="left"><?php echo $row["Uniform"]; ?></td>
<td align="left"><?php echo $row["Takaful"]; ?></td>
<td align="left"><?php echo $row["Extra1"]; ?></td>
<td align="left"><?php echo $row["MiscFees"]; ?></td>
<td align="left"><?php echo $row["Term"]; ?></td>
<td align="left"><?php echo $row["M01"]; ?></td>
<td align="left"><?php echo $row["M02"]; ?></td>
<td align="left"><?php echo $row["M03"]; ?></td>
<td align="left"><?php echo $row["M04"]; ?></td>
<td align="left"><?php echo $row["M05"]; ?></td>
<td align="left"><?php echo $row["M06"]; ?></td>
<td align="left"><?php echo $row["M07"]; ?></td>
<td align="left"><?php echo $row["M08"]; ?></td>
<td align="left"><?php echo $row["M09"]; ?></td>
<td align="left"><?php echo $row["M10"]; ?></td>
<td align="left"><?php echo $row["M11"]; ?></td>
<td align="left"><?php echo $row["M12"]; ?></td>
<td align="left"><?php echo $row["Extra2"]; ?></td>
</tr>
<?php $count++; } ?>

<tr><td colspan="4">PRESCHOOL FULL DAY SPECIAL</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM accountsummary WHERE StudentID LIKE '$Month%' AND Programme = 'PRESCHOOL FULL DAY SPECIAL'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

?>

<tr>
<td align="left"><?php echo $row["ID"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Debit"]; ?></td>
<td align="left"><?php echo $row["Credit"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
<td align="left"><?php echo $row["Registration"]; ?></td>
<td align="left"><?php echo $row["Security"]; ?></td>
<td align="left"><?php echo $row["Program"]; ?></td>
<td align="left"><?php echo $row["Equipment"]; ?></td>
<td align="left"><?php echo $row["Uniform"]; ?></td>
<td align="left"><?php echo $row["Takaful"]; ?></td>
<td align="left"><?php echo $row["Extra1"]; ?></td>
<td align="left"><?php echo $row["MiscFees"]; ?></td>
<td align="left"><?php echo $row["Term"]; ?></td>
<td align="left"><?php echo $row["M01"]; ?></td>
<td align="left"><?php echo $row["M02"]; ?></td>
<td align="left"><?php echo $row["M03"]; ?></td>
<td align="left"><?php echo $row["M04"]; ?></td>
<td align="left"><?php echo $row["M05"]; ?></td>
<td align="left"><?php echo $row["M06"]; ?></td>
<td align="left"><?php echo $row["M07"]; ?></td>
<td align="left"><?php echo $row["M08"]; ?></td>
<td align="left"><?php echo $row["M09"]; ?></td>
<td align="left"><?php echo $row["M10"]; ?></td>
<td align="left"><?php echo $row["M11"]; ?></td>
<td align="left"><?php echo $row["M12"]; ?></td>
<td align="left"><?php echo $row["Extra2"]; ?></td>
</tr>
<?php $count++; } ?>

<tr><td colspan="4">RECEPTION</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM accountsummary WHERE StudentID LIKE '$Month%' AND Programme = 'RECEPTION'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

?>

<tr>
<td align="left"><?php echo $row["ID"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Debit"]; ?></td>
<td align="left"><?php echo $row["Credit"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
<td align="left"><?php echo $row["Registration"]; ?></td>
<td align="left"><?php echo $row["Security"]; ?></td>
<td align="left"><?php echo $row["Program"]; ?></td>
<td align="left"><?php echo $row["Equipment"]; ?></td>
<td align="left"><?php echo $row["Uniform"]; ?></td>
<td align="left"><?php echo $row["Takaful"]; ?></td>
<td align="left"><?php echo $row["Extra1"]; ?></td>
<td align="left"><?php echo $row["MiscFees"]; ?></td>
<td align="left"><?php echo $row["Term"]; ?></td>
<td align="left"><?php echo $row["M01"]; ?></td>
<td align="left"><?php echo $row["M02"]; ?></td>
<td align="left"><?php echo $row["M03"]; ?></td>
<td align="left"><?php echo $row["M04"]; ?></td>
<td align="left"><?php echo $row["M05"]; ?></td>
<td align="left"><?php echo $row["M06"]; ?></td>
<td align="left"><?php echo $row["M07"]; ?></td>
<td align="left"><?php echo $row["M08"]; ?></td>
<td align="left"><?php echo $row["M09"]; ?></td>
<td align="left"><?php echo $row["M10"]; ?></td>
<td align="left"><?php echo $row["M11"]; ?></td>
<td align="left"><?php echo $row["M12"]; ?></td>
<td align="left"><?php echo $row["Extra2"]; ?></td>
</tr>
<?php $count++; } ?>

<tr><td colspan="4">RECEPTION FULL DAY</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM accountsummary WHERE StudentID LIKE '$Month%' AND Programme = 'RECEPTION FULL DAY'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

?>

<tr>
<td align="left"><?php echo $row["ID"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Debit"]; ?></td>
<td align="left"><?php echo $row["Credit"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
<td align="left"><?php echo $row["Registration"]; ?></td>
<td align="left"><?php echo $row["Security"]; ?></td>
<td align="left"><?php echo $row["Program"]; ?></td>
<td align="left"><?php echo $row["Equipment"]; ?></td>
<td align="left"><?php echo $row["Uniform"]; ?></td>
<td align="left"><?php echo $row["Takaful"]; ?></td>
<td align="left"><?php echo $row["Extra1"]; ?></td>
<td align="left"><?php echo $row["MiscFees"]; ?></td>
<td align="left"><?php echo $row["Term"]; ?></td>
<td align="left"><?php echo $row["M01"]; ?></td>
<td align="left"><?php echo $row["M02"]; ?></td>
<td align="left"><?php echo $row["M03"]; ?></td>
<td align="left"><?php echo $row["M04"]; ?></td>
<td align="left"><?php echo $row["M05"]; ?></td>
<td align="left"><?php echo $row["M06"]; ?></td>
<td align="left"><?php echo $row["M07"]; ?></td>
<td align="left"><?php echo $row["M08"]; ?></td>
<td align="left"><?php echo $row["M09"]; ?></td>
<td align="left"><?php echo $row["M10"]; ?></td>
<td align="left"><?php echo $row["M11"]; ?></td>
<td align="left"><?php echo $row["M12"]; ?></td>
<td align="left"><?php echo $row["Extra2"]; ?></td>
</tr>
<?php $count++; } ?>

<tr><td colspan="4">RECEPTION 6 YEARS OLD</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM accountsummary WHERE StudentID LIKE '$Month%' AND Programme = 'RECEPTION 6 YEARS OLD'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

?>

<tr>
<td align="left"><?php echo $row["ID"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Debit"]; ?></td>
<td align="left"><?php echo $row["Credit"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
<td align="left"><?php echo $row["Registration"]; ?></td>
<td align="left"><?php echo $row["Security"]; ?></td>
<td align="left"><?php echo $row["Program"]; ?></td>
<td align="left"><?php echo $row["Equipment"]; ?></td>
<td align="left"><?php echo $row["Uniform"]; ?></td>
<td align="left"><?php echo $row["Takaful"]; ?></td>
<td align="left"><?php echo $row["Extra1"]; ?></td>
<td align="left"><?php echo $row["MiscFees"]; ?></td>
<td align="left"><?php echo $row["Term"]; ?></td>
<td align="left"><?php echo $row["M01"]; ?></td>
<td align="left"><?php echo $row["M02"]; ?></td>
<td align="left"><?php echo $row["M03"]; ?></td>
<td align="left"><?php echo $row["M04"]; ?></td>
<td align="left"><?php echo $row["M05"]; ?></td>
<td align="left"><?php echo $row["M06"]; ?></td>
<td align="left"><?php echo $row["M07"]; ?></td>
<td align="left"><?php echo $row["M08"]; ?></td>
<td align="left"><?php echo $row["M09"]; ?></td>
<td align="left"><?php echo $row["M10"]; ?></td>
<td align="left"><?php echo $row["M11"]; ?></td>
<td align="left"><?php echo $row["M12"]; ?></td>
<td align="left"><?php echo $row["Extra2"]; ?></td>
</tr>
<?php $count++; } ?>

<tr><td colspan="4">COMPLIMENTARY</td></tr>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM accountsummary WHERE StudentID LIKE '$Month%' AND Programme = 'COMPLIMENTARY'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

?>

<tr>
<td align="left"><?php echo $row["ID"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Debit"]; ?></td>
<td align="left"><?php echo $row["Credit"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
<td align="left"><?php echo $row["Registration"]; ?></td>
<td align="left"><?php echo $row["Security"]; ?></td>
<td align="left"><?php echo $row["Program"]; ?></td>
<td align="left"><?php echo $row["Equipment"]; ?></td>
<td align="left"><?php echo $row["Uniform"]; ?></td>
<td align="left"><?php echo $row["Takaful"]; ?></td>
<td align="left"><?php echo $row["Extra1"]; ?></td>
<td align="left"><?php echo $row["MiscFees"]; ?></td>
<td align="left"><?php echo $row["Term"]; ?></td>
<td align="left"><?php echo $row["M01"]; ?></td>
<td align="left"><?php echo $row["M02"]; ?></td>
<td align="left"><?php echo $row["M03"]; ?></td>
<td align="left"><?php echo $row["M04"]; ?></td>
<td align="left"><?php echo $row["M05"]; ?></td>
<td align="left"><?php echo $row["M06"]; ?></td>
<td align="left"><?php echo $row["M07"]; ?></td>
<td align="left"><?php echo $row["M08"]; ?></td>
<td align="left"><?php echo $row["M09"]; ?></td>
<td align="left"><?php echo $row["M10"]; ?></td>
<td align="left"><?php echo $row["M11"]; ?></td>
<td align="left"><?php echo $row["M12"]; ?></td>
<td align="left"><?php echo $row["Extra2"]; ?></td>
</tr>
<?php $count++; } ?>




</tbody>
</table>
</body>
</page>
</html>
