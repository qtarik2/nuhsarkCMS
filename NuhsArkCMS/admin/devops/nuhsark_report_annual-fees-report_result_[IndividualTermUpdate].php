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
	$sel_query1="SELECT header FROM pageinfo WHERE ID='1'";
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
	$sel_query1="SELECT navigation FROM pageinfo WHERE ID='1'";
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
<p><a href="../logout.php">Logout</a></p>
</div>

<?php
require('db.php');
include("auth.php");

?>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
<div class="form" style="width: 100%">
<h2>ANNUAL FEES REPORT</h2>
<p><a target="_blank" href="../nuhsark_report_annual-fees-report_print.php">PRINT</a>
</p>
<?php 
$Month=$_POST['Month'];

echo "Year:";
echo "$Month";
echo "<br><br>";
?>
<table class="table">
<thead>
<tr>
<th><strong>NO</strong></th>
<th>STUDENT ID</th>
<th>STUDENT NAME</th>
<th>INVOICE</th>
<th>PAYMENT</th>
<th>BALANCE</th>
<th>PROGRAMME</th>
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
<th>UPDATE</th>
</tr>
</thead>
<tbody>
<?php
// $Username=$_SESSION['username'];
$Month=$_POST['Month'];

$count=1;
$sel_query="SELECT * FROM accountsummary WHERE StudentID LIKE '$Month%'";
// $sel_query="SELECT * FROM accountsummary WHERE Year LIKE '%$Month' ORDER BY StudentID ASC;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 

?>

<form name="FrontPage_Form1" method="post" action="" onsubmit="return FrontPage_Form1_Validator(this)" language="JavaScript"> 
<input type="hidden" name="new" value="1" />
<input name="StudentID" type="hidden" value="<?php echo $row['StudentID'];?>" />

<?php

$Progress = "UPDATING...";
if(isset($_POST['new']) && $_POST['new']==1)
{

$StudentID=$_REQUEST["StudentID"];
$M01=$_REQUEST["M01"];
$M02=$_REQUEST["M02"];
$M03=$_REQUEST["M03"];
$M04=$_REQUEST["M04"];
$M05=$_REQUEST["M05"];
$M06=$_REQUEST["M06"];
$M07=$_REQUEST["M07"];
$M08=$_REQUEST["M08"];
$M09=$_REQUEST["M09"];
$M10=$_REQUEST["M10"];
$M11=$_REQUEST["M11"];
$M12=$_REQUEST["M12"];

	$update="UPDATE accountsummary SET M01='".$M01."', M02='".$M02."', M03='".$M03."', M04='".$M04."', M05='".$M05."', M06='".$M06."', M07='".$M07."', M08='".$M08."', M09='".$M09."', M10='".$M10."', M11='".$M11."', M12='".$M12."' WHERE StudentID='".$StudentID."'";
	mysqli_query($con, $update) or die(mysqli_error());
	
	$Progress = "<br>DATA UPDATED FOR $StudentID<br>";
	echo '<p style="color:#FF0000;">'.$Progress.'</p>';
	print("<a href='nuhsark_report_annual-fees-report_result.php'>REFRESH</a>");
	print("<br>");
	}
	else {
	?>

<tr>
<td align="left"><?php echo $count; ?></td>
<td align="left"><?php echo $row["StudentID"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Debit"]; ?></td>
<td align="left"><?php echo $row["Credit"]; ?></td>
<td align="left"><?php echo $row["Balance"]; ?></td>
<td align="left"><?php echo $row["Programme"]; ?></td>
<td align="left"><?php echo $row["Registration"]; ?></td>
<td align="left"><?php echo $row["Security"]; ?></td>
<td align="left"><?php echo $row["Program"]; ?></td>
<td align="left"><?php echo $row["Equipment"]; ?></td>
<td align="left"><?php echo $row["Uniform"]; ?></td>
<td align="left"><?php echo $row["Takaful"]; ?></td>
<td align="left"><?php echo $row["Extra1"]; ?></td>
<td align="left"><?php echo $row["MiscFees"]; ?></td>
<td align="left"><?php echo $row["Term"]; ?></td>
<td align="left"><input name="M01" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["M01"]; ?>"></td>
<td align="left"><input name="M02" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["M02"]; ?>"></td>
<td align="left"><input name="M03" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["M03"]; ?>"></td>
<td align="left"><input name="M04" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["M04"]; ?>"></td>
<td align="left"><input name="M05" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["M05"]; ?>"></td>
<td align="left"><input name="M06" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["M06"]; ?>"></td>
<td align="left"><input name="M07" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["M07"]; ?>"></td>
<td align="left"><input name="M08" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["M08"]; ?>"></td>
<td align="left"><input name="M09" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["M09"]; ?>"></td>
<td align="left"><input name="M10" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["M10"]; ?>"></td>
<td align="left"><input name="M11" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["M11"]; ?>"></td>
<td align="left"><input name="M12" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["M12"]; ?>"></td>
<td align="left"><?php echo $row["Extra2"]; ?></td>
<td align="left">
<p><button type="submit" class="btn btn-default">Update This Data</button></p>
<a target="_blank" href="../nuhsark_account-statement_details.php?StudentID=<?php echo $row["StudentID"]; ?>">STUDENT ACCOUNT STATEMENT</a> 
</td>
</tr>
</form>
<?php
}
?>

<?php $count++; } ?>
</tbody>
</table>
<?php

// Calculation
//    	$QuerySum1 = "SELECT SUM(Amount) FROM payment WHERE Date LIKE '%$Month'";
//	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
//		    /* fetch associative array */
//		    while ($row = mysqli_fetch_array($result1)) {
//	 			$Deposit = $row['SUM(Amount)'];
//	 		}
//	 	}
	 	
// $Closing = $Opening + $Deposit - $Withdrawal;
	 	
		// $update="UPDATE ocbalance SET Closing='".$Closing."' WHERE Date LIKE '%$Month'";
		// mysqli_query($con, $update) or die(mysqli_error());

?>

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
	$sel_query1="SELECT footer FROM pageinfo WHERE ID='1'";
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
