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
<p><a href="logout.php">Logout</a></p>
</div>

<?php
require('db.php');
include("auth.php");

$StudentID=$_REQUEST['StudentID'];
$query = "SELECT * FROM students WHERE StudentID='".$StudentID."'"; 
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
<h2>STUDENT &gt; MANAGE ACCOUNT &gt; UPDATE ACCOUNT<html>
<div class="form" style="width: 100%">

<!--webbot BOT="GeneratedScript" PREVIEW=" " startspan --><script Language="JavaScript" Type="text/javascript"><!--
function FrontPage_Form1_Validator(theForm)
{

  if (theForm.Programme.selectedIndex < 0)
  {
    alert("Please select one of the \"Programme\" options.");
    theForm.Programme.focus();
    return (false);
  }

  if (theForm.Programme.selectedIndex == 0)
  {
    alert("The first \"Programme\" option is not a valid selection.  Please choose one of the other options.");
    theForm.Programme.focus();
    return (false);
  }
  return (true);
}
//--></script><!--webbot BOT="GeneratedScript" endspan --><form name="FrontPage_Form1" method="post" action="" onsubmit="return FrontPage_Form1_Validator(this)" language="JavaScript"> 
<input type="hidden" name="new" value="1" />
<input name="StudentID" type="hidden" value="<?php echo $row['StudentID'];?>" />
<table class="table">
<?php
$Progress = "UPDATING...";
if(isset($_POST['new']) && $_POST['new']==1)
{

$EmailAddress=$_REQUEST["EmailAddress"];
$StudentID=$_REQUEST["StudentID"];
$Name=$_REQUEST["Name"];
$MYKID=$_REQUEST["MYKID"];
$DOB=$_REQUEST["DOB"];
$Age=$_REQUEST["Age"];
$Gender=$_REQUEST["Gender"];
$Address=$_REQUEST["Address"];
$MotherName=$_REQUEST["MotherName"];
$MotherContact=$_REQUEST["MotherContact"];
$FatherName=$_REQUEST["FatherName"];
$FatherContact=$_REQUEST["FatherContact"];
$Intake=$_REQUEST["Intake"];
$RegistrationDate=$_REQUEST["RegistrationDate"];
$Programme=$_POST['Programme'];
$TermFeesQ=$_POST['TermFeesQ'];
$TermFeesM=$_POST['TermFeesM'];
$TermFeesA=$_POST['TermFeesA'];
	
	$update="UPDATE students SET 
	EmailAddress='".$EmailAddress."', 
	Name='".$Name."',
	MYKID='".$MYKID."',
	DOB='".$DOB."',
	Age='".$Age."',
	Gender='".$Gender."',
	Address='".$Address."',
	MotherName='".$MotherName."',
	MotherContact='".$MotherContact."',
	FatherName='".$FatherName."',
	FatherContact='".$FatherContact."',
	Programme='".$Programme."',
	TermFeesQ='".$TermFeesQ."',
	TermFeesM='".$TermFeesM."',
	TermFeesA='".$TermFeesA."'
	WHERE StudentID='".$StudentID."'";
	mysqli_query($con, $update) or die(mysqli_error());
	
	$update1="UPDATE accountsummary SET 
	EmailAddress='".$EmailAddress."', 
	Name='".$Name."'
	WHERE StudentID='".$StudentID."'";
	mysqli_query($con, $update1) or die(mysqli_error());

	$Progress = "UPDATED!</br></br>";
	echo '<p style="color:#FF0000;">'.$Progress.'</p>'; 
	print("<a href='student_manage-account.php'>SUMMARY</a>");
	print("<br>");
	}
	else {
	?>

																												<tr>
																																<td style="width: 170px" class="style14">ID</td>
													
																																<td><?php echo $row["ID"]; ?></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Email Address<td><input name="EmailAddress" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['EmailAddress'];?>"></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Student ID<td><?php echo $row['StudentID'];?></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Name</td>
																																<td><input name="Name" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" value="<?php echo $row['Name'];?>"></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">MYKID</td>
																																<td><input name="MYKID" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['MYKID'];?>"></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">DOB</td>
																																<td><input name="DOB" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['DOB'];?>"></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Age</td>
																																<td><input name="Age" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['Age'];?>"></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Gender</td>
																																<td><input name="Gender" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['Gender'];?>"></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Address</td>
																																<td><input name="Address" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['Address'];?>">&nbsp;</td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Mother&#39;s Name</td>
																																<td><input name="MotherName" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['MotherName'];?>"></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Mother&#39;s Contact</td>
																																<td><input name="MotherContact" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['MotherContact'];?>"></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Father&#39;s Name</td>
																																<td><input name="FatherName" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['FatherName'];?>"></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Father&#39;s Contact</td>
																																<td><input name="FatherContact" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['FatherContact'];?>"></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Intake</td>
																Registration Date</td>
																																<td><?php echo $row['RegistrationDate'];?></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Programme</td>
																																<td><?php echo $row['Programme'];?></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">&nbsp;</td>
																																<td><!--webbot bot="Validation" b-value-required="TRUE" b-disallow-first-item="TRUE" --><select name="Programme" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;">
																																<option>Programme</option>
																																<option value="PRESCHOOL HALF DAY">PRESCHOOL HALF DAY</option>
																																<option value="PRESCHOOL FULL DAY">PRESCHOOL FULL DAY</option>
																																<option value="PRESCHOOL HALF DAY SPECIAL">PRESCHOOL HALF DAY SPECIAL</option>
																																<option value="PRESCHOOL FULL DAY SPECIAL">PRESCHOOL FULL DAY SPECIAL</option>
																																<option value="RECEPTION">RECEPTION</option>
																																<option value="RECEPTION FULL DAY">RECEPTION FULL DAY</option>
																																<option value="RECEPTION 6 YEARS OLD">RECEPTION 6 YEARS OLD</option>
																																<option value="COMPLIMENTARY">COMPLIMENTARY</option>
																																<option value="WITHDRAW">WITHDRAW</option>
																																</select></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Term Fees																																</select></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Term Fees</td>
																																<td><input name="TermFeesQ" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['TermFeesQ'];?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Term Fees (Monthly)</td>
																																<td><input name="TermFeesM" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['TermFeesM'];?>"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Term Fees (Annually)</td>
																																<td><input name="TermFeesA" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="50" value="<?php echo $row['TermFeesA'];?>"></td>
																												</tr>

																												</table>
																								<p><button type="submit" class="btn btn-default">Submit</button></p>
</form>
<?php } ?>

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
