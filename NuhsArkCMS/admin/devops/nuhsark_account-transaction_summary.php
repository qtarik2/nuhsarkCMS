<?php
/*

*/

include("../auth.php"); //include auth.php file on all secure pages ?>
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
require('../db.php');
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
require('../db.php');
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
																
<link rel="stylesheet" href="../../css/style.css" />
<body>
<div class="form" style="width: 100%">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p><a href="../logout.php">Logout</a></p>
</div>

<?php
require('../db.php');
include("../auth.php");

?>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../../css/style.css" />
</head>
<body>
<div class="form" style="width: 100%">
<h2>EXPENSES &gt; MONTHLY/ANNUALLY BILLS &gt; SUMMARY</h2>
<?php
$count=1;
$sel_query="SELECT * FROM dashboard";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {
	$Month = $row["Date"];
}
?>
<table class="table">
<thead>
<tr>
<th><strong>ID</strong></th>
<th>DATE</th>
<th>TYPE</th>
<th>NAME</th>
<th>AMOUNT</th>
<th>ACCOUNT NO</th>
<th>ADDITIONAL INFO</th>
<th>STATUS</th>
<th><strong>MANAGE</strong></th>

</tr>
</thead>
<tbody>
<?php

$count=1;
$sel_query="SELECT * FROM dashboard";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) {
	$Date = $row["Date"];
}

if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
        }
        
$total_records_per_page = 40;

$offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";

$result_count = mysqli_query(
$con,
"SELECT COUNT(*) As total_records FROM expenses WHERE Date LIKE '%$Date' ORDER BY ID ASC"
);
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1; // total pages minus 1

// $Username=$_SESSION['username'];
$count=1;
$sel_query="SELECT * FROM expenses WHERE Date LIKE '%$Date' ORDER BY ID ASC LIMIT $offset, $total_records_per_page;";
$result = mysqli_query($con,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr>

<form name="FrontPage_Form1" method="post" action="" onsubmit="return FrontPage_Form1_Validator(this)" language="JavaScript"> 
<input type="hidden" name="new" value="1" />
<input name="ID" type="hidden" value="<?php echo $row['ID'];?>" />

<?php

$Progress = "UPDATING...";
if(isset($_POST['new']) && $_POST['new']==1)
{
$ID=$_REQUEST["ID"];
$Date=$_REQUEST["Date"];
$Type=$_REQUEST["Type"];
$Name=$_REQUEST["Name"];
$Amount=$_REQUEST["Amount"];
$AccountNo=$_REQUEST["AccountNo"];
$AdditionalInfo=$_REQUEST["AdditionalInfo"];
$Status=$_REQUEST["Status"];

	// $update="UPDATE expenses SET Date='".$Date."', Name='".$Name."', Amount='".$Amount."', AccountNo='".$AccountNo."', AdditionalInfo='".$AdditionalInfo."', Status='".$Status."'  WHERE ID='".$ID."'";
	$update="UPDATE expenses SET AdditionalInfo='".$AdditionalInfo."' WHERE ID='".$ID."'";
	mysqli_query($con, $update) or die(mysqli_error());
	
	$Progress = "<br>DATA UPDATED FOR $ID<br>COUNT $count<br>";
	echo '<p style="color:#FF0000;">'.$Progress.'</p>';
	print("<a href='nuhsark_account-transaction_summary.php'>REFRESH</a>");
	print("<br>");
	header("Location: https://www.nuhsark.edu.my/cms/admin/devops/nuhsark_account-transaction_summary.php");
	}
	else {
	?>

<td align="left"><?php echo $row["ID"]; ?></td>
<td align="left">
<input type="text" name="Date" class="date" readonly placeholder="DD/MM/YYYY" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 100px;" value="<?php echo $row["Date"]; ?>" /><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script><script>
$(function() {
 $( ".date" ).datepicker({
 dateFormat : 'dd/mm/yy',
 showOn: "both",
 buttonImage: "../b_calendar.png",
 buttonImageOnly: true,
 buttonText: "Select Date",
 changeMonth: true,
 changeYear: true,
 yearRange: "-100:+0"
 }); 
}); 
</script></td>
<td align="left"><input name="Type" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["Type"]; ?>"></td>
<td align="left"><input name="Name" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 180px;" maxlength="100" size="100" value="<?php echo $row["Name"]; ?>"></td>
<td align="left"><input name="Amount" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["Amount"]; ?>"></td>
<td align="left"><input name="AccountNo" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["AccountNo"]; ?>"></td>
<td align="left"><input name="AdditionalInfo" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["AdditionalInfo"]; ?>"></td>
<td align="left"><input name="Status" style="font-family: Verdana; font-size: 16 pt; height: 30px; width: 120px;" maxlength="100" size="100" value="<?php echo $row["Status"]; ?>"></td>
<td align="left">
<p><button type="submit" class="btn btn-default">Update This Data</button></p></td>
</form>

<?php
}
?>
</tr>
<?php $count++;
} ?>
<div style='padding: 10px 20px 0px; border-top: dotted 1px #CCC;'>
<strong>Page <?php echo $page_no." of ".$total_no_of_pages; ?></strong>
</div>

<ul class="pagination">
<?php if($page_no > 1){
echo "<li><a href='?page_no=1'>First Page</a></li>";
} ?>
    
<li <?php if($page_no <= 1){ echo "class='disabled'"; } ?>>
<a <?php if($page_no > 1){
echo "href='?page_no=$previous_page'";
} ?>>Previous</a>
</li>
    
<li <?php if($page_no >= $total_no_of_pages){
echo "class='disabled'";
} ?>>
<a <?php if($page_no < $total_no_of_pages) {
echo "href='?page_no=$next_page'";
} ?>>Next</a>
</li>
 
<?php if($page_no < $total_no_of_pages){
echo "<li><a href='?page_no=$total_no_of_pages'>Last &rsaquo;&rsaquo;</a></li>";
} 

// Calculation

    	$QuerySum1 = "SELECT SUM(Amount) FROM expenses WHERE Date LIKE '%$Date'";
	 	if ($result1 = mysqli_query($con, $QuerySum1)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result1)) {
	 			$TotalMYR = $row['SUM(Amount)'];
	 		}
	 	}
	 	
	 	$QuerySum2 = "SELECT COUNT(Date) FROM expenses WHERE Date LIKE '%$Date'";
	 	if ($result2 = mysqli_query($con, $QuerySum2)) {
		    /* fetch associative array */
		    while ($row = mysqli_fetch_array($result2)) {
	 			$TotalData = $row['COUNT(Date)'];
	 		}
	 	}
	 
echo "<br><br>Month          : $Date";	
echo "<br>Total 		     : MYR $TotalMYR";
echo "<br>Transactions Count : $TotalData";
echo "<br><br>";

?>
</ul>

</tbody>
</table>
BULK UPDATE
<p><button type="submit" class="btn btn-default">BULK UPDATE</button></p>

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
require('../db.php');
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
