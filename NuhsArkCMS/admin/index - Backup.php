<?php
/*

*/

include("auth.php"); //include auth.php file on all secure pages ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
.style19 {
				color: #FFFFFF;
				font-family: Calibri;
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
<!--																
// <?php
// require('db.php');
// $count=1;
	// $sel_query1="SELECT bavigation FROM pageinfo WHERE ID='1'";
	// $result1 = mysqli_query($con,$sel_query1);
	// while($row = mysqli_fetch_assoc($result1)) { 
	// echo $row["Navigation"];
	// }
// ?>																
-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ADMNISTRATOR</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">DASHBOARD</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">NUH'S ARK
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="nuhsark/dashboard.php">GO TO NUH'S ARK DASHBOARD</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">MADRASATI
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="madrasati/dashboard.php">GO TO MADRASATI DASHBOARD</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">UTILITIES
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="user-management_profile.php">Profile</a></li>
          <li><a href="user-management_change-password.php">Change Password</a></li>
          <li><a href="dashboard_settings.php">Dashboard Settings</a></li>
        </ul>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="nuhsark/dashboard.php"><span class="glyphicon glyphicon-user"></span>NUH'S ARK</a></li>
      <li><a href="madrasati/dashboard.php"><span class="glyphicon glyphicon-user"></span>MADRASATI</a></li>
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




<div id="nav">

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

<div class="alert alert-success">
  <strong>SUCCESS!</strong> Verify Login Information. System OK.
</div>

<div class="alert alert-info">
  <strong>INFO!</strong> System Has Been Restored To Original Version.
</div>

<div class="alert alert-warning">
  <strong>WARNING!</strong> Check Announcement.
<br>
	<br>
	DUE TO RECENT CHANGES OF INVOICING SYSTEM DUE TO RECOVERY MOVEMENT CONTROL 
	ORDER (RMCO), ANY DATA ENTERED WILL BE NOT ACCEPTED. SYSTEM DEVELOPER WILL 
	MAKE AN ANNOUNCEMENT SHOULD THE REVISION IS COMPLETED.</div>

<div class="alert alert-danger">
  <strong>DANGER!</strong> Contact System Developer For Any Updated Information.
</div>

<div class="panel-group">
	<div class="panel panel-success">
		<div class="panel-footer">
			LOGIN INFORMATION:
		</div>
    	<div class="panel-body">
								<?php 
								
								echo ini_get("session.gc_maxlifetime");
								echo " SECONDS. 12 HOURS.";
								echo("<br>");
								date_default_timezone_set("Asia/Kuala_Lumpur");
								echo "Asia/Kuala_Lumpur:".time(); 
								$t=time();
								echo($t . "<br>");
								echo(date("d/m/Y", $t));								
								?>
    	</div>
	</div>
</div>


<table class="table">
				<tr>
								<td>ANNOUNCEMENT!</td>
				</tr>
				<tr>
								<td>
								NO ANNOUNCEMENT.<br>
								</td>
				</tr>
				<tr>
								<td>
								&nbsp;</td>
				</tr>
</table>
<?php
require('db.php');
include("auth.php");

$count=1;
$sel_query="SELECT * FROM dashboard";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {
	$Month = $row["Date"];
}

?>
<table class="table">
				<tr>
								<td style="width: 25%">USER ACCOUNT MANAGEMENT</td>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">CURRENT SETTING : <?php echo $Month; ?></td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 25%">&gt; 
								<a href="user-management_change-password.php">CHANGE PASSWORD</a><br>
								</td>
								<td style="width: 25%">&gt; 
								<a href="user-management_profile.php">PROFILE</a></td>
								<td style="width: 25%">&gt; <a href="dashboard.php">
								UPDATE DASHBOARD</a><br>
								</td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 25%">
								<img alt="" src="../images/nuhsarklogo1.jpg" width="177" height="120"></td>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 25%">AT THE GLANCE</td>
								<td style="width: 25%">TOTAL INVOICES (MYR)</td>
								<td style="width: 25%">TOTAL PAYMENTS (MYR)</td>
								<td>TOTAL EXPENSES (MYR)</td>
				</tr>
				<tr>
								<td style="width: 25%"><?php echo $Month; ?></td>
								<td style="width: 25%">
<?php
require('db.php');
include("auth.php");

$count=1;
$sel_query="SELECT * FROM invoice WHERE Date LIKE '%$Month'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {
}

// Calculation
    	$QuerySum1 = "SELECT SUM(Amount) FROM invoice WHERE Date LIKE '%$Month'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$AmountInvoices = $row['SUM(Amount)'];
	 		}
	 	}
	 	
echo "MYR $AmountInvoices";

?>
</td>
								<td style="width: 25%"><?php
require('db.php');
include("auth.php");

$count=1;
$sel_query="SELECT * FROM payment WHERE Date LIKE '%$Month'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {
}

// Calculation
    	$QuerySum1 = "SELECT SUM(Amount) FROM payment WHERE Date LIKE '%$Month'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$AmountPayments = $row['SUM(Amount)'];
	 		}
	 	}
	 	
echo "MYR $AmountPayments";

?></td>
								<td><?php
require('db.php');
include("auth.php");

$count=1;
$sel_query="SELECT * FROM expenses WHERE Date LIKE '%$Month'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {
}

// Calculation
    	$QuerySum1 = "SELECT SUM(Amount) FROM expenses WHERE Date LIKE '%$Month'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$AmountExpenses = $row['SUM(Amount)'];
	 		}
	 	}
	 	
echo "MYR $AmountExpenses";

?></td>
				</tr>
				<tr>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 25%">GO TO
								<a href="nuhsark/dashboard.php">NUH&#39;S ARK DASHBOARD</a></td>
								<td style="width: 25%">
								&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 25%">
								<img alt="" src="../images/logo_madrasati.png" width="150" height="150"></td>
								<td style="width: 25%">
								&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 25%">AT THE GLANCE</td>
								<td style="width: 25%">TOTAL INVOICES (MYR)&nbsp;</td>
								<td style="width: 25%">TOTAL PAYMENTS (MYR)</td>
								<td>TOTAL EXPENSES (MYR)</td>
				</tr>
				<tr>
								<td style="width: 25%"><?php echo $Month; ?></td>
								<td style="width: 25%"><?php
require('db.php');
include("auth.php");

$count=1;
$sel_query="SELECT * FROM madrasati_invoice WHERE Date LIKE '%$Month'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {
}

// Calculation
    	$QuerySum1 = "SELECT SUM(Amount) FROM madrasati_invoice WHERE Date LIKE '%$Month'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$MAmountInvoices = $row['SUM(Amount)'];
	 		}
	 	}
	 	
echo "MYR $MAmountInvoices";

?></td>
								<td style="width: 25%"><?php
require('db.php');
include("auth.php");

$count=1;
$sel_query="SELECT * FROM madrasati_payment WHERE Date LIKE '%$Month'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {
}

// Calculation
    	$QuerySum1 = "SELECT SUM(Amount) FROM madrasati_payment WHERE Date LIKE '%$Month'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$MAmountPayments = $row['SUM(Amount)'];
	 		}
	 	}
	 	
echo "MYR $MAmountPayments";

?>
</td>
								<td><?php
require('db.php');
include("auth.php");

$count=1;
$sel_query="SELECT * FROM madrasati_expenses WHERE Date LIKE '%$Month'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {
}

// Calculation
    	$QuerySum1 = "SELECT SUM(Amount) FROM madrasati_expenses WHERE Date LIKE '%$Month'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$MAmountExpenses = $row['SUM(Amount)'];
	 		}
	 	}
	 	
echo "MYR $MAmountExpenses";

?>
</td>
				</tr>
				<tr>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 25%">GO TO
								<a href="madrasati/dashboard.php">MADRASATI 
								DASHBOARD</a></td>
								<td style="width: 25%">
								&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td>&nbsp;</td>
				</tr>
				</table>
<p><br>
</p>
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
