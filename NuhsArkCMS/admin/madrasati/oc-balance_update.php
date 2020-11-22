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
</div>

<?php
require('db.php');
include("auth.php");

$ID=$_REQUEST['ID'];
$query = "SELECT * FROM madrasati_ocbalance WHERE ID='".$ID."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<div class="form" style="width: 100%">
<h2>O/C BALANCE &gt; UPDATE</h2>
<form name="FrontPage_Form1" method="post" action="" onsubmit="return FrontPage_Form1_Validator(this)" language="JavaScript"> 
<input type="hidden" name="new" value="1" />
<input name="ID" type="hidden" value="<?php echo $row['ID'];?>" />

<?php
$Progress = "UPDATING...";
if(isset($_POST['new']) && $_POST['new']==1)
{
$Date=$_REQUEST["Date"];
$Opening=$_REQUEST["Opening"];
$Closing=$_REQUEST["Closing"];

	$update="UPDATE madrasati_ocbalance SET Date='".$Date."', Opening='".$Opening."', Closing='".$Closing."' WHERE ID='".$ID."'";
	mysqli_query($con, $update) or die(mysqli_error());
	
	// $updatetrans="UPDATE accountstatement SET Date='".$Date."', Amount='".$Amount."' WHERE Folio='".$ID."'";
	// mysqli_query($con, $updatetrans) or die(mysqli_error());

	$Progress = "UPDATED!</br></br>";
	echo '<p style="color:#FF0000;">'.$Progress.'</p>';
	}
	else {
	?>

<table class="table">
				<tr>
								<td style="width: 150px">ID</td>
								<td style="width: 442px"><?php echo $row["ID"]; ?></td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 150px">Month</td>
								<td style="width: 442px"><?php echo $row["Date"]; ?></td>
								<td>
								<input type="text" name="Date" class="date" readonly placeholder="MM/YYYY" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" value="<?php echo $row["Date"]; ?>" /><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script><script>
$(function() {
 $( ".date" ).datepicker({
 dateFormat : 'mm/yy',
 showOn: "both",
 buttonImage: "b_calendar.png",
 buttonImageOnly: true,
 buttonText: "Select Date",
 changeMonth: true,
 changeYear: true,
 yearRange: "-100:+0"
 }); 
}); 
</script></td>
				</tr>
				<tr>
								<td style="width: 150px">Opening</td>
								<td style="width: 442px"><?php echo $row["Opening"]; ?></td>
								<td>
								<input name="Opening" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Opening"]; ?>"></td>
				</tr>
				<tr>
								<td style="width: 150px">Closing</td>
								<td style="width: 442px"><?php echo $row["Closing"]; ?></td>
								<td>
								<input name="Closing" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" value="<?php echo $row["Closing"]; ?>"></td>
				</tr>
				</table>
<br>
																								<p><button type="submit" class="btn btn-default">Submit</button></p></form>
</div>
<?php
}
?>
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
