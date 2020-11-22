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
<form method="post" action="payslip_select-staff_summary_result.php" onsubmit="return FrontPage_Form1_Validator(this)" language="JavaScript" name="FrontPage_Form1">
<h2>PAYSLIP &gt; SELECT STAFF &gt; SUMMARY &gt; RESULT</h2>

</form>
																				
<?php
require('db.php');
include("auth.php");

// $Username=$_SESSION['username'];
// $ID=$_REQUEST['ID'];
$ICNo=$_POST['ICNo'];
// $EmailAddress=$_POST['EmailAddress'];

$count=1;
$sel_query1="SELECT * FROM madrasati_staff WHERE ICNo='$ICNo';";
$result1 = mysqli_query($con,$sel_query1);
while($row = mysqli_fetch_assoc($result1)) {

	$ICNo=$_REQUEST["ICNo"];
	$Name=$_REQUEST["Name"];
	$EPFNo=$_REQUEST["EPFNo"];
	$Position=$_REQUEST["Position"];
	
	echo "IC No.        : ";
	echo $row["ICNo"];
	echo "<br>";
	echo "Name          : ";
	echo $row["Name"];
	echo "<br>";
	echo "EPF No.       : ";
	echo $row["EPFNo"];
	echo "<br>";
	echo "Position      : ";
	echo $row["Position"];
	echo "<br>";
	
	}
	
?>

<div class="form" style="width: 100%">
<br>
<table class="table">
<thead>
<tr>
<th>ID</th>
<th>IC NO</th>
<th>EPF NO</th>
<th>NAME</th>
<th>POSITION</th>
<th>NETT SALARY</th>

</tr>
</thead>
<tbody>
<?php

// $Username=$_SESSION['username'];
// $EmailAddress=$_POST['EmailAddress'];
$StudentID=$_POST['StudentID'];
$count=1;

$sel_query="SELECT * FROM madrasati_payslip WHERE ICNo='$ICNo';";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { 
?>
<tr>
<td align="left"><?php echo $row["ID"]; ?></td>
<td align="left"><?php echo $row["ICNo"]; ?></td>
<td align="left"><?php echo $row["EPFNo"]; ?></td>
<td align="left"><?php echo $row["Name"]; ?></td>
<td align="left"><?php echo $row["Position"]; ?></td>
<td align="left"><?php echo $row["NettSalary"]; ?></td>
</tr>
<?php $count++; } ?>

</tbody>
</table>
</div>
																				
<p>
<?php

// Calculation
    	$QuerySum1 = "SELECT SUM(NettSalary) FROM madrasati_payslip WHERE ICNo='ICNo'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$TotalNettSalary = $row['SUM(NettSalary)'];
	 		}
	 	}
	 	
echo "<br>Total Nett Salary : MYR $TotalNettSalary";
echo "<br><br>";


?></p>
</div>
																
																
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
