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
																
<link rel="stylesheet" href="css/style.css" />
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
<h2>INCOMES &gt; MONTHLY INCOMES &gt; SUMMARY</h2>

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
    <p><button type="submit" class="btn btn-default" name='but_update'>Update All Data</button></p>

     <!-- Record list -->
     <table class="table">

         <!-- Check/Uncheck All-->
<tr>
<th><input type='checkbox' id='checkAll' >CHECK ALL</th>
<th>BACKDATED</th>
<th>DATE</th>
<th>TYPE</th>
<th>NAME</th>
<th>AMOUNT</th>
<th>ACCOUNT NO</th>
<th>ADDITIONAL INFO</th>
<th>STATUS</th>
<th>ACTION</th>

</tr>

<?php

$Date=$_POST["Month"];

/*
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
"SELECT COUNT(*) As total_records FROM incomes WHERE Backdated LIKE '%$Date' ORDER BY ID ASC "
);
$total_records = mysqli_fetch_array($result_count);
$total_records = $total_records['total_records'];
$total_no_of_pages = ceil($total_records / $total_records_per_page);
$second_last = $total_no_of_pages - 1; // total pages minus 1
*/

// $Username=$_SESSION['username'];
$count=1;
?>

        <?php 
        if(isset($_POST['but_update'])){

            if(isset($_POST['update'])){
                foreach($_POST['update'] as $updateid){
                    $Backdated = $_POST['Backdated_'.$updateid];
                    $Date = $_POST['Date_'.$updateid];
                    $Type = $_POST['Type_'.$updateid];
                    $Name = $_POST['Name_'.$updateid];
                    $Amount = $_POST['Amount_'.$updateid];
                    $AccountNo = $_POST['AccountNo_'.$updateid];
                    $AdditionalInfo = $_POST['AdditionalInfo_'.$updateid];
				    $Status = $_POST['Status_'.$updateid];

                    // if($fname !='' && $lname !='' && $age >0 && $salary >0 && $email != '' ){
                        $updateUser = "UPDATE incomes SET 
                            Backdated='".$Backdated."',
                            Date='".$Date."',
                            Type='".$Type."',
                            Name='".$Name."',
                            Amount='".$Amount."',
                            AccountNo='".$AccountNo."',
                            AdditionalInfo='".$AdditionalInfo."',
                            Status='".$Status."'
                        WHERE ID=".$updateid;
                        mysqli_query($con,$updateUser);
                    // }
                    
                }
            }
            
        }
        ?>

       <?php 
       // $query = "SELECT * FROM payment ORDER BY ReceiptNo DESC LIMIT $offset, $total_records_per_page;";
       // $query = "SELECT * FROM expenses WHERE Date LIKE '%$Date' ORDER BY ID DESC LIMIT $offset, $total_records_per_page;";
       $query = "SELECT * FROM incomes WHERE Backdated LIKE '%$Date' ORDER BY ID ASC";
       $result = mysqli_query($con,$query);

       while($row = mysqli_fetch_array($result) ){
		$ID=$row['ID'];
		$Backdated=$row['Backdated'];
		$Date=$row['Date'];
		$Type=$row['Type'];
		$Name=$row['Name'];
		$Amount=$row['Amount'];
		$AccountNo=$row['AccountNo'];
		$AdditionalInfo=$row['AdditionalInfo'];
		$Status=$row['Status'];
       ?>

         <tr>
           <!-- Checkbox -->
           <td><input type='checkbox' name='update[]' value='<?= $ID ?>' ><?php echo $row['ID']; ?></td>
           <td>
<input type="text" name='Backdated_<?= $ID ?>' class="date" readonly placeholder="DD/MM/YYYY" value='<?= $Backdated ?>' style="width: 90px"  /><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script><script>
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
</script>
           <td>
<input type="text" name='Date_<?= $ID ?>' class="date" readonly placeholder="DD/MM/YYYY" value='<?= $Date ?>' style="width: 90px"  /><script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script><script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script><script>
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
</script>
           <td>
			<input type='text' name='Type_<?= $ID ?>' value='<?= $Type ?>' style="width: 150px" ></td> 
           <td>
			<input type='text' name='Name_<?= $ID ?>' value='<?= $Name ?>' style="width: 150px" ></td>
		   <td>
		    <input type='text' name='Amount_<?= $ID ?>' value='<?= $Amount ?>' style="width: 90px" ></td>
		   <td>
		    <input type='text' name='AccountNo_<?= $ID ?>' value='<?= $AccountNo ?>' style="width: 150px" ></td>
		   <td>
		    <input type='text' name='AdditionalInfo_<?= $ID ?>' value='<?= $AdditionalInfo ?>' style="width: 150px" ></td>
		   <td>
		    <input type='text' name='Status_<?= $ID ?>' value='<?= $Status ?>' style="width: 90px" >
		   </td>
		   <td>
		    <a href="account-transaction_incomes_delete-transaction.php?ID=<?php echo $row["ID"]; ?>">DELETE</a>
		   </td>
         </tr>
       <?php

       }
       ?>
     </table>
   </form>
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
