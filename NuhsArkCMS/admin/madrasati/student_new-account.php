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
<!--webbot BOT="GeneratedScript" PREVIEW=" " startspan --><script Language="JavaScript" Type="text/javascript"><!--
function FrontPage_Form1_Validator(theForm)
{

  if (theForm.ChildsAge.selectedIndex < 0)
  {
    alert("Please select one of the \"ChildsAge\" options.");
    theForm.ChildsAge.focus();
    return (false);
  }

  if (theForm.ChildsAge.selectedIndex == 0)
  {
    alert("The first \"ChildsAge\" option is not a valid selection.  Please choose one of the other options.");
    theForm.ChildsAge.focus();
    return (false);
  }

  if (theForm.Gender.selectedIndex < 0)
  {
    alert("Please select one of the \"Gender\" options.");
    theForm.Gender.focus();
    return (false);
  }

  if (theForm.Gender.selectedIndex == 0)
  {
    alert("The first \"Gender\" option is not a valid selection.  Please choose one of the other options.");
    theForm.Gender.focus();
    return (false);
  }

  if (theForm.Intake.selectedIndex < 0)
  {
    alert("Please select one of the \"Intake\" options.");
    theForm.Intake.focus();
    return (false);
  }

  if (theForm.Intake.selectedIndex == 0)
  {
    alert("The first \"Intake\" option is not a valid selection.  Please choose one of the other options.");
    theForm.Intake.focus();
    return (false);
  }

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
//--></script><!--webbot BOT="GeneratedScript" endspan --><form method="post" action="student_new-account-result.php" onsubmit="return FrontPage_Form1_Validator(this)" language="JavaScript" name="FrontPage_Form1">
<h2>STUDENT &gt; NEW ACCOUNT</h2>
																								<table class="table">
																												<tr>
																																<td style="width: 170px" class="style14">Email Address</td>
																																<td><input name="EmailAddress" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Password</td>
																																<td><input name="Password" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" type="password"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Reconfirm Password</td>
																																<td><input name="Password0" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100" type="password"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Student ID</td>
																																<td><input name="StudentID" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Name</td>
																																<td><input name="Name" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">MYKID</td>
																																<td><input name="MYKID" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">DOB</td>
																																<td><input type="text" name="DOB" class="date" readonly placeholder="DD/MM/YYYY" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" /> <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script><script>
$(function() {
 $( ".date" ).datepicker({
 dateFormat : 'dd/mm/yy',
 showOn: "both",
 buttonImage: "b_calendar.png",
 buttonImageOnly: true,
 buttonText: "Select Date",
 changeMonth: true,
 changeYear: true,
 yearRange: "-100:+0"
 }); 
}); 
</script><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script><script>
$(function() {
 $( ".date" ).datepicker({
 dateFormat : 'dd/mm/yy',
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
																																<td style="width: 170px" class="style14">Age</td>
																																<td><!--webbot bot="Validation" b-value-required="TRUE" b-disallow-first-item="TRUE" --><select name="ChildsAge" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;">
																																<option>Child's Age</option>
																																<option value="3">3</option>
																																<option value="4">4</option>
																																<option value="5">5</option>
																																<option value="6">6</option>
																																<option value="7">7</option>
																																<option value="8">8</option>
																																<option value="9">9</option>
																																<option value="10">10</option>
																																<option value="11">11</option>
																																<option value="12">12</option>
																																</select></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Gender</td>
																																<td><!--webbot bot="Validation" b-value-required="TRUE" b-disallow-first-item="TRUE" --><select name="Gender" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;">
																																<option>Gender</option>
																																<option value="M">Male</option>
																																<option value="F">Female</option>
																																</select></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Address</td>
																																<td><input name="Address" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Mother&#39;s Name</td>
																																<td><input name="MotherName" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Mother&#39;s Contact</td>
																																<td><input name="MotherContact" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Father&#39;s Name</td>
																																<td><input name="FatherName" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Father&#39;s Contact</td>
																																<td><input name="FatherContact" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="100" size="100"></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Intake</td>
																																<td><!--webbot bot="Validation" b-value-required="TRUE" b-disallow-first-item="TRUE" --><select name="Intake" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;">
																																<option>Intake</option>
																																<option value="2020">2020</option>
																																</select></td>
																												</tr>
																												<tr>
																																<td style="width: 170px" class="style14">Registration Date</td>
																																<td><input type="text" name="RegistrationDate" class="date" readonly placeholder="DD/MM/YYYY" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" /> <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script><script>
$(function() {
 $( ".date" ).datepicker({
 dateFormat : 'dd/mm/yy',
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
																																<td style="width: 170px" class="style14">Programme</td>
																																<td><!--webbot bot="Validation" b-value-required="TRUE" b-disallow-first-item="TRUE" --><select name="Programme" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;">
																																<option>Programme</option>
																																<option value="PRIMARY MADRASATI">PRIMARY MADRASATI</option>
																																<option value="PRIMARY MADRASATI FULL DAY">PRIMARY MADRASATI FULL DAY</option>
																																<option value="KAFA">KAFA</option>
																																<option value="WITHDRAW">WITHDRAW</option>
																																</select></td>
																												</tr>
																												</table>
																								<br>
																								<p><button type="submit" class="btn btn-default">Submit</button></p></form>
																				


<p>&nbsp;</p>
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
