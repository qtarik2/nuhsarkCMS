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
				background-color: #000000;
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
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="dashboard.php">NUH'S ARK</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="../index.php">MAIN DASHBOARD</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">EXPENSES
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">MONTHLY BILLS</a></li>
          <li><a href="account-transaction_add-transaction.php">Add Data</a></li>
          <li><a href="account-transaction_summary.php">Current/Update Data</a></li>
          <li><a href="#">ANNUAL BILLS</a></li>
          <li><a href="account-transaction_add-transaction.php">Add Data</a></li>
          <li><a href="account-transaction_annual_summary.php">Current/Update Data</a></li>
          <li><a href="#">PAYSLIPS</a></li>
          <li><a href="payslip_select-staff.php">Add Data</a></li>
          <li><a href="payslip_summary.php">Current/Update Data</a></li>
          <li><a href="report_expense-report.php">EXPENSES REPORT</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">INCOMES
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">INVOICES</a></li>
          <li><a href="invoice_select-student.php">Add Data</a></li>
          <li><a href="invoice_select-invoice.php">Current/Update Data</a></li>
          <li><a href="#">PAYMENTS</a></li>
          <li><a href="payment_select-student.php">Add Data</a></li>
          <li><a href="payment_summary.php">Current/Update Data</a></li>
          <li><a href="#">OTHER INCOMES</a></li>
          <li><a href="account-transaction_incomes_add-transaction.php">Add Data</a></li>
          <li><a href="account-transaction_incomes.php">Current/Update Data</a></li>
          <li><a href="report_payment-report.php">INCOME STATEMENT REPORT</a></li>
          <li><a href="#">STUDENT STATEMENT</a></li>
          <li><a href="account-statement.php">Student Statement Report</a></li>
          <li><a href="account-statement_search.php">Search</a></li>
          <li><a href="#">INVOICE STATUS</a></li>
          <li><a href="invoice_paid.php">Paid</a></li>
          <li><a href="invoice_partial.php">Partial Paid</a></li>
          <li><a href="invoice_unpaid.php">Unpaid</a></li>
        </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">STUDENTS
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">STUDENTS MANAGEMENT</a></li>
          <li><a href="student_new-account.php">Add Data</a></li>
          <li><a href="student_manage-account.php">Current/Update Data</a></li>
        </ul>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">STAFFS
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">STAFFS MANAGEMENT</a></li>
          <li><a href="staff_new-account.php">Add Data</a></li>
          <li><a href="staff_manage-account.php">Current/Update Data</a></li>
          <li><a href="staff-directory.php">Staff Directory</a></li>
         </ul>
      </li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">REPORTS
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">REPORTS</a></li>
          <li><a href="report_account-statement-report.php">Accounts Statement</a></li>
          <li><a href="report_account-statement-report-annual.php">Annual Accounts Statement</a></li>
          <li><a href="account-statement.php">Students Statement</a></li>
          <li><a href="report_expense-report.php">Expenses Statement</a></li>
          <li><a href="report_payment-report.php">Payments Statement</a></li>
          <li><a href="report_payslip-report.php">Payslips Statement</a></li>
          <li><a href="report_annual-fees-report.php">Annual Fees Report</a></li>
          <li><a href="report_term-fees-report.php">Term Fees Report</a></li>
         </ul>
      </li>

    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../madrasati/dashboard.php"><span class="glyphicon glyphicon-user"></span>MADRASATI</a></li>
      <li><a href="../logout.php"><span class="glyphicon glyphicon-log-in"></span>LOGOUT</a></li>
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
<table class="table">
				<tr>
								<td>ANNOUNCEMENT!</td>
				</tr>
				<tr>
								<td>
								NO ANNOUNCEMENT.<br>
								</td>
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
								<td style="width: 25%">DASHBOARD SETTINGS : <?php echo $Month; ?></td>
								<td></td>
				</tr>
				<tr>
								<td style="width: 25%">&gt; 
								<a href="../user-management_change-password.php">CHANGE PASSWORD</a><br>
								</td>
								<td style="width: 25%">&gt; 
								<a href="../user-management_profile.php">PROFILE</a></td>
								<td style="width: 25%">&gt; 
								<a href="../dashboard_settings.php">UPDATE DASHBOARD</a><br>
								</td>
								<td></td>
				</tr>
				<tr>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">&gt;
								<a href="oc-balance_add.php">ADD O/C 
								BALANCE</a></td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">&gt;
								<a href="oc-balance_summary.php">MANAGE 
								O/C BALANCE</a></td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 25%"><strong>AT THE GLANCE</strong></td>
								<td style="width: 25%"><strong>TOTAL INVOICES (MYR)</strong></td>
								<td style="width: 25%"><strong>TOTAL PAYMENTS (MYR)</strong></td>
								<td><strong>TOTAL EXPENSES (MYR)</strong></td>
				</tr>
				<tr>
								<td style="width: 25%"><?php echo $Month; ?></td>
								<td style="width: 25%">
<?php
require('db.php');
include("auth.php");

$count=1;
$sel_query="SELECT * FROM invoices WHERE Date LIKE '%$Month'";
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
								<td style="width: 25%">2020 </td>
								<td style="width: 25%"><?php
require('db.php');
include("auth.php");

$count=1;
$sel_query="SELECT * FROM invoice WHERE Date LIKE '%2020'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {
}

// Calculation
    	$QuerySum1 = "SELECT SUM(Amount) FROM invoice WHERE Date LIKE '%2020'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$AnnualInvoice = $row['SUM(Amount)'];
	 		}
	 	}
	 	
echo "MYR $AnnualInvoice";

?></td>
								<td style="width: 25%"><?php
require('db.php');
include("auth.php");

$count=1;
$sel_query="SELECT * FROM payment WHERE Date LIKE '%2020'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {
}

// Calculation
    	$QuerySum1 = "SELECT SUM(Amount) FROM payment WHERE Date LIKE '%2020'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$AnnualPayment = $row['SUM(Amount)'];
	 		}
	 	}
	 	
echo "MYR $AnnualPayment";

?></td>
								<td><?php
require('db.php');
include("auth.php");

$count=1;
$sel_query="SELECT * FROM expenses WHERE Date LIKE '%2020'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {
}

// Calculation
    	$QuerySum1 = "SELECT SUM(Amount) FROM expenses WHERE Date LIKE '%2020'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$AnnualExpenses = $row['SUM(Amount)'];
	 		}
	 	}
	 	
echo "MYR $AnnualExpenses";

?></td>
				</tr>
				<tr>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 25%"><strong>PAID INVOICES&nbsp;</strong></td>
								<td style="width: 25%"><strong>PARTIAL PAID 
								INVOICES</strong></td>
								<td style="width: 25%"><strong>UNPAID INVOICES</strong></td>
								<td><strong></strong></td>
				</tr>
				<tr>
								<td style="width: 25%"><?php
require('db.php');
include("auth.php");

$count=1;
$sel_query="SELECT * FROM invoice WHERE Status LIKE 'PAID'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {
}

// Calculation
    	$QuerySum1 = "SELECT COUNT(InvoiceNo) FROM invoice WHERE Status LIKE 'PAID'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$CountPaid = $row['COUNT(InvoiceNo)'];
	 		}
	 	}
	 	
echo "$CountPaid";

?></td>
								<td style="width: 25%"><?php
require('db.php');
include("auth.php");

$count=1;
$sel_query="SELECT * FROM invoice WHERE Status LIKE 'PARTIAL PAID'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {
}

// Calculation
    	$QuerySum1 = "SELECT COUNT(InvoiceNo) FROM invoice WHERE Status LIKE 'PARTIAL PAID'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$CountPartial = $row['COUNT(InvoiceNo)'];
	 		}
	 	}
	 	
echo "$CountPartial";

?></td>
								<td style="width: 25%"><?php
require('db.php');
include("auth.php");

$count=1;
$sel_query="SELECT * FROM invoice WHERE Status LIKE 'UNPAID'";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {
}

// Calculation
    	$QuerySum1 = "SELECT COUNT(InvoiceNo) FROM invoice WHERE Status LIKE 'UNPAID'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$CountUnpaid = $row['COUNT(InvoiceNo)'];
	 		}
	 	}
	 	
echo "$CountUnpaid";

?></td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td>&nbsp;</td>
				</tr>
				<tr>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td style="width: 25%">&nbsp;</td>
								<td>&nbsp;</td>
				</tr>
				</table>



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
