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
																
<link rel="stylesheet" href="css/style.css" />
<body>
<div class="form" style="width: 100%">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p><a href="logout.php">Logout</a></p>
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
<h2>PAYMENT &gt; SELECT PAYMENT</h2>

<!-- Script -->
		<script src='jquery-3.3.1.min.js' type="text/javascript"></script>
        <script type="text/javascript">
            $(document).ready(function(){

                // Check/Uncheck ALl
                $('#checkAll').change(function(){
                    if($(this).is(':checked')){
                        $('input[name="update[]"]').prop('checked',true);
                    }else{
                        $('input[name="update[]"]').each(function(){
                            $(this).prop('checked',false);
                        }); 
                    }
                });

                // Checkbox click
                $('input[name="update[]"]').click(function(){
                    var total_checkboxes = $('input[name="update[]"]').length;
                    var total_checkboxes_checked = $('input[name="update[]"]:checked').length;

                    if(total_checkboxes_checked == total_checkboxes){
                        $('#checkAll').prop('checked',true);
                    }else{
                        $('#checkAll').prop('checked',false);
                    }
                });
            });
        </script>
        
<form method='post' action=''>

     <!-- Submit button -->
    <p><button type="submit" class="btn btn-default" name='but_update'>Update All Data</button>&nbsp;<a href="payment_search.php">SEARCH</a></p>

     <!-- Record list -->
     <table class="table">

         <!-- Check/Uncheck All-->
<tr>
<th><input type='checkbox' id='checkAll' >CHECK ALL RECEIPT</th>
<th>PAYMENT DATE</th>
<th>RECEIPT DATE</th>
<th>STUDENT ID</th>
<th>NAME</th>
<th>AMOUNT</th>
<th>ANNUAL FEES</th>
<th>TERM FEES</th>
<th>MISC FEES</th>
<th>REG. FEE<br>
<a target="_blank" href="report_annual-fees-report.php">ANNUAL</a><br>
<a target="_blank" href="report_term-fees-report.php">TERM</a></th>
<th>PDF RCPT.</th>
<th>SEND MAIL</th>
<th><strong>MANAGE</strong></th>

</tr>
<?php

if (isset($_GET['page_no']) && $_GET['page_no']!="") {
    $page_no = $_GET['page_no'];
    } else {
        $page_no = 1;
        }
        
$total_records_per_page = 25;

$offset = ($page_no-1) * $total_records_per_page;
$previous_page = $page_no - 1;
$next_page = $page_no + 1;
$adjacents = "2";

$result_count = mysqli_query(
$con,
"SELECT COUNT(*) As total_records FROM payment ORDER BY ReceiptNo DESC;"
);
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1; // total pages minus 1

// $Username=$_SESSION['username'];
$count=1;
?>

        <?php 
        if(isset($_POST['but_update'])){

            if(isset($_POST['update'])){
                foreach($_POST['update'] as $updateid){
                    $Status1 = $_POST['Status1_'.$updateid];
                    $Status2 = $_POST['Status2_'.$updateid];
                    $Status3 = $_POST['Status3_'.$updateid];

                    // if($fname !='' && $lname !='' && $age >0 && $salary >0 && $email != '' ){
                        $updateUser = "UPDATE payment SET 
                            Status1='".$Status1."',
                            Status2='".$Status2."',
                            Status3='".$Status3."'
                        WHERE ReceiptNo=".$updateid;
                        mysqli_query($con,$updateUser);
                    // }
                    
                }
            }
            
        }
        ?>

       <?php 
       // $query = "SELECT * FROM payment ORDER BY ReceiptNo DESC LIMIT $offset, $total_records_per_page;";
       $query = "SELECT * FROM payment ORDER BY ReceiptNo DESC LIMIT $offset, $total_records_per_page;";
       $result = mysqli_query($con,$query);

       while($row = mysqli_fetch_array($result) ){
         $ReceiptNo = $row['ReceiptNo'];
         $Date = $row['Date'];
         $PaymentDate = $row['PaymentDate'];
         $StudentID = $row['StudentID'];
         $Name = $row['Name'];
         $Amount = $row['Amount'];
         $AnnualFees = $row['AnnualFees'];
         $TermFees = $row['TermFees'];
         $MiscFees = $row['MiscFees'];
         $Status1 = $row['Status1'];
         $Status2 = $row['Status2'];
         $Status3 = $row['Status3'];
       ?>

         <tr>
           <!-- Checkbox -->
           <td><input type='checkbox' name='update[]' value='<?= $ReceiptNo ?>' ><?php echo $row['ReceiptNo']; ?></td>
           <td><?= $PaymentDate ?></td>           
           <td><?= $Date ?></td>
           <td><?= $StudentID ?></td>
           <td><?= $Name ?></td>
           <td><?= $Amount ?></td>
           <td><?= $AnnualFees ?></td>
           <td><?= $TermFees ?></td>
           <td><?= $MiscFees ?></td>
           <td>
			<input type='text' name='Status1_<?= $ReceiptNo ?>' value='<?= $Status1 ?>' style="width: 90px" ></td>
           <td>
			<input type='text' name='Status2_<?= $ReceiptNo ?>' value='<?= $Status2 ?>' style="width: 90px" ></td> 
           <td>
			<input type='text' name='Status3_<?= $ReceiptNo ?>' value='<?= $Status3 ?>' style="width: 90px" ></td>
		   <td><a target="_blank" href="payment_view.php?ReceiptNo=<?php echo $row["ReceiptNo"]; ?>">VIEW RECEIPT</a> |
<a href="payment_update.php?ReceiptNo=<?php echo $row["ReceiptNo"]; ?>">UPDATE RECEIPT</a> |
<a href="account-statement_details.php?StudentID=<?php echo $row["StudentID"]; ?>">STUDENT ACCOUNT STATEMENT</a> 
| <a href="payment_delete.php?ReceiptNo=<?php echo $row["ReceiptNo"]; ?>">DELETE RECEIPT</a></td>
         </tr>
       <?php

       }
       ?>
     </table>
   </form>
  
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
} ?>
</ul>

</tbody>
</table>
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
