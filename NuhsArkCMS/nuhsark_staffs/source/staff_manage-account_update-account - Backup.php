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
																<td style="height: 50px" class="style9" valign="top">
																<img alt="" src="../images/nuhsarklogo1.jpg" width="177" height="120"></td>
												</tr>
								</table>
</div>

<div id="nav">

<table cellpadding="0" cellspacing="0" style="width: 100%" align="center">
				<!-- MSTableType="layout" -->
				<tr>
								<td style="height: 30px" class="style9" valign="top">
								<table cellpadding="5" cellspacing="0" style="width: 100%" align="left">
												<!-- MSTableType="layout" -->
												<tr>
																<td style="height: 30px" valign="top" class="style19">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">NUH'S ARK</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">DASHBOARD</a></li>
    </ul>
 	<ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">NUH'S ARK
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="payslip_summary.php">PAYSLIP</a></li>
          <li><a href="student_manage-account.php">STUDENT</a></li>
          <li><a href="staff-directory.php">STAFF DIRECTORY</a></li>
        </ul>
      </li>
     </ul>
 	<ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">PROFILE
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="staff_manage-account.php">MANAGE ACCOUNT</a></li>
        </ul>
      </li>
     </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>Welcome <?php echo $_SESSION['username']; ?>!</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span>LOGOUT</a></li>
    </ul>
  </div>
</nav>
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

$Username=$_SESSION['username'];

$ID=$_REQUEST['ID'];
$query = "SELECT * FROM staff WHERE ICNo='".$Username."'"; 
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
<h2>STAFF &gt; MANAGE ACCOUNT &gt; UPDATE ACCOUNT
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../css/style.css" />
</head>
<body>
<div class="form" style="width: 100%">
<h2>STAFF &gt; MANAGE ACCOUNT &gt; UPDATE ACCOUNT<body><div class="form" style="width: 100%">
<table width="100%" border="1" style="border-collapse:collapse;">


<!--webbot BOT="GeneratedScript" PREVIEW=" " startspan --><script Language="JavaScript" Type="text/javascript"><!--
function FrontPage_Form1_Validator(theForm)
{

  if (theForm.ICNo.value == "")
  {
    alert("Please enter a value for the \"ICNo\" field.");
    theForm.ICNo.focus();
    return (false);
  }

  if (theForm.ICNo.value.length < 10)
  {
    alert("Please enter at least 10 characters in the \"ICNo\" field.");
    theForm.ICNo.focus();
    return (false);
  }

  if (theForm.ICNo.value.length > 50)
  {
    alert("Please enter at most 50 characters in the \"ICNo\" field.");
    theForm.ICNo.focus();
    return (false);
  }

  if (theForm.EPFNo.value == "")
  {
    alert("Please enter a value for the \"EPFNo\" field.");
    theForm.EPFNo.focus();
    return (false);
  }

  if (theForm.EPFNo.value.length < 10)
  {
    alert("Please enter at least 10 characters in the \"EPFNo\" field.");
    theForm.EPFNo.focus();
    return (false);
  }

  if (theForm.EPFNo.value.length > 50)
  {
    alert("Please enter at most 50 characters in the \"EPFNo\" field.");
    theForm.EPFNo.focus();
    return (false);
  }

  if (theForm.Name.value == "")
  {
    alert("Please enter a value for the \"Name\" field.");
    theForm.Name.focus();
    return (false);
  }

  if (theForm.Name.value.length < 10)
  {
    alert("Please enter at least 10 characters in the \"Name\" field.");
    theForm.Name.focus();
    return (false);
  }

  if (theForm.Name.value.length > 50)
  {
    alert("Please enter at most 50 characters in the \"Name\" field.");
    theForm.Name.focus();
    return (false);
  }

  if (theForm.Position.value == "")
  {
    alert("Please enter a value for the \"Position\" field.");
    theForm.Position.focus();
    return (false);
  }

  if (theForm.Position.value.length < 10)
  {
    alert("Please enter at least 10 characters in the \"Position\" field.");
    theForm.Position.focus();
    return (false);
  }

  if (theForm.Position.value.length > 50)
  {
    alert("Please enter at most 50 characters in the \"Position\" field.");
    theForm.Position.focus();
    return (false);
  }

  if (theForm.GrossBasic.value == "")
  {
    alert("Please enter a value for the \"GrossBasic\" field.");
    theForm.GrossBasic.focus();
    return (false);
  }

  if (theForm.GrossBasic.value.length < 10)
  {
    alert("Please enter at least 10 characters in the \"GrossBasic\" field.");
    theForm.GrossBasic.focus();
    return (false);
  }

  if (theForm.GrossBasic.value.length > 50)
  {
    alert("Please enter at most 50 characters in the \"GrossBasic\" field.");
    theForm.GrossBasic.focus();
    return (false);
  }

  if (theForm.NettBasic.value == "")
  {
    alert("Please enter a value for the \"NettBasic\" field.");
    theForm.NettBasic.focus();
    return (false);
  }

  if (theForm.NettBasic.value.length < 10)
  {
    alert("Please enter at least 10 characters in the \"NettBasic\" field.");
    theForm.NettBasic.focus();
    return (false);
  }

  if (theForm.NettBasic.value.length > 50)
  {
    alert("Please enter at most 50 characters in the \"NettBasic\" field.");
    theForm.NettBasic.focus();
    return (false);
  }
  return (true);
}
//--></script><!--webbot BOT="GeneratedScript" endspan --><form name="FrontPage_Form1" method="post" action="" onsubmit="return FrontPage_Form1_Validator(this)" language="JavaScript"> 
<input type="hidden" name="new" value="1" />
<input name="ID" type="hidden" value="<?php echo $row['ID'];?>" />
<table class="table">
<?php
$Progress = "UPDATING...";
if(isset($_POST['new']) && $_POST['new']==1)
{
	$ID=$_REQUEST['ID'];
	$ICNo=$_REQUEST['ICNo'];
	$EPFNo=$_REQUEST['EPFNo'];
	$Name=$_REQUEST['Name'];
	$Position=$_REQUEST['Position'];
	$GrossBasic=$_REQUEST['GrossBasic'];
	$NettBasic=$_REQUEST['NettBasic'];

	$update="UPDATE staff SET EPFNo='".$EPFNo."' WHERE ICNo='".$Username."'";
	mysqli_query($con, $update) or die(mysqli_error());
	$Progress = "UPDATED!</br></br>";
	echo '<p style="color:#FF0000;">'.$Progress.'</p>';
	}
	else {
	?>

																												<tr>
																																<td style="width: 170px" class="style14">ID</td>
																																<td><?php echo $row['ID']; ?></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">IC No.</td>
																																<td><?php echo $row['Username']; ?><!--webbot bot="Validation" b-value-required="TRUE" i-minimum-length="10" i-maximum-length="50" --><input name="ICNo" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="2" value="<?php echo $row['ICNo'];?>"></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">EPF No.</td>
																																<td><!--webbot bot="Validation" b-value-required="TRUE" i-minimum-length="10" i-maximum-length="50" --><input name="EPFNo" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="2" value="<?php echo $row['EPFNo'];?>"></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Name</td>
																																<td><!--webbot bot="Validation" b-value-required="TRUE" i-minimum-length="10" i-maximum-length="50" --><input name="Name" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="2" value="<?php echo $row['Name'];?>"></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Position</td>
																																<td><!--webbot bot="Validation" b-value-required="TRUE" i-minimum-length="10" i-maximum-length="50" --><input name="Position" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="2" value="<?php echo $row['Position'];?>"></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Password</td>
																																<td><?php echo "******"; ?></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Gross Basic</td>
																																<td><!--webbot bot="Validation" b-value-required="TRUE" i-minimum-length="10" i-maximum-length="50" --><input name="GrossBasic" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="2" value="<?php echo $row['GrossBasic'];?>"></td>
																												</tr>

																												<tr>
																																<td style="width: 170px" class="style14">Nett Basic</td>
																																<td><!--webbot bot="Validation" b-value-required="TRUE" i-minimum-length="10" i-maximum-length="50" --><input name="NettBasic" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 220px;" maxlength="2" value="<?php echo $row['NettBasic'];?>"></td>
																												</tr>

																												</table>
																								<p><button type="submit" class="btn btn-default">Submit</button></p></form>
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
<table cellpadding="0" cellspacing="0" style="width: 100%" align="center">
				<!-- MSTableType="layout" -->
				<tr>
								<td style="height: 120px" class="style18" valign="top">
								<table cellpadding="5" cellspacing="0" style="width: 100%" align="left" class="style21">
												<!-- MSTableType="layout" -->
												<tr>
																<td style="height: 120px" valign="top">
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
