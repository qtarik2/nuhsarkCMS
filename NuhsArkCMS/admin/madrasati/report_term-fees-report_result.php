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
<h2>TERM FEES REPORT (ANNUAL FEES REPORT)</h2>
<p><a target="_blank" href="report_term-fees-report_print.php">PRINT</a></p>

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
<th>STUDENT ID</th>
<th>STUDENT NAME</th>
<th>TERM</th>
<th>JAN</th>
<th>FEB</th>
<th>MAR</th>
<th>APR</th>
<th>MAY</th>
<th>JUN</th>
<th>JUL</th>
<th>AUG</th>
<th>SEP</th>
<th>OCT</th>
<th>NOV</th>
<th>DEC</th>
<th>EXTRA</th>
<th>VIEW</th>
</tr>
<tr>
<th colspan="20">PRIMARY MADRASATI</th>
</tr>

        <?php 
        if(isset($_POST['but_update'])){

            if(isset($_POST['update'])){
                foreach($_POST['update'] as $updateid){
                    $M01 = $_POST['M01_'.$updateid];
                    $M02 = $_POST['M02_'.$updateid];
                    $M03 = $_POST['M03_'.$updateid];
                    $M04 = $_POST['M04_'.$updateid];
                    $M05 = $_POST['M05_'.$updateid];
                    $M06 = $_POST['M06_'.$updateid];
                    $M07 = $_POST['M07_'.$updateid];
                    $M08 = $_POST['M08_'.$updateid];
                    $M09 = $_POST['M09_'.$updateid];
                    $M10 = $_POST['M10_'.$updateid];
                    $M11 = $_POST['M11_'.$updateid];
                    $M12 = $_POST['M12_'.$updateid];

                    // if($fname !='' && $lname !='' && $age >0 && $salary >0 && $email != '' ){
                        $updateUser = "UPDATE madrasati_accountsummary SET 
                            M01='".$M01."',
                            M02='".$M02."',
                            M03='".$M03."',
                            M04='".$M04."',
                            M05='".$M05."',
                            M06='".$M06."',
                            M07='".$M07."',
                            M08='".$M08."',
                            M09='".$M09."',
                            M10='".$M10."',
                            M11='".$M11."',
                            M12='".$M12."'
                        WHERE ID=".$updateid;
                        mysqli_query($con,$updateUser);
                    // }
                    
                }
            }
            
        }
        ?>

       <?php 
       $query = "SELECT * FROM madrasati_accountsummary WHERE StudentID LIKE '$Month%' AND Programme LIKE 'PRIMARY MADRASATI%'";
       $result = mysqli_query($con,$query);

       while($row = mysqli_fetch_array($result) ){
         $ID = $row['ID'];
         $StudentID = $row['StudentID'];
         $Name = $row['Name'];
         $Programme = $row['Programme'];
         $Term = $row['Term'];
         $M01 = $row['M01'];
         $M02 = $row['M02'];
         $M03 = $row['M03'];
         $M04 = $row['M04'];
         $M05 = $row['M05'];
         $M06 = $row['M06'];
         $M07 = $row['M07'];
         $M08 = $row['M08'];
         $M09 = $row['M09'];
         $M10 = $row['M10'];
         $M11 = $row['M11'];
         $M12 = $row['M12'];
         $Extra2 = $row['Extra2'];
       ?>
         <tr>
           <!-- Checkbox -->
           <td><input type='checkbox' name='update[]' value='<?= $ID ?>' ><?php echo $count++; ?></td>
           <td><?= $StudentID ?></td>
           <td><?= $Name ?></td>
           <td>
           <?php
           		$SumTerm=$M01+$M02+$M03+$M04+$M05+$M06+$M07+$M08+$M09+$M10+$M11+$M12;
           		echo number_format((float)$SumTerm, 2, '.', '');
           ?>
           </td>
           <td>
			<input type='text' name='M01_<?= $ID ?>' value='<?= $M01 ?>' style="width: 70px" ></td>
           <td>
			<input type='text' name='M02_<?= $ID ?>' value='<?= $M02 ?>' style="width: 70px" ></td> 
           <td>
			<input type='text' name='M03_<?= $ID ?>' value='<?= $M03 ?>' style="width: 70px" ></td>
           <td>
			<input type='text' name='M04_<?= $ID ?>' value='<?= $M04 ?>' style="width: 70px" ></td> 
           <td>
			<input type='text' name='M05_<?= $ID ?>' value='<?= $M05 ?>' style="width: 70px" ></td>
           <td>
			<input type='text' name='M06_<?= $ID ?>' value='<?= $M06 ?>' style="width: 70px" ></td> 
           <td>
			<input type='text' name='M07_<?= $ID ?>' value='<?= $M07 ?>' style="width: 70px" ></td>
           <td>
			<input type='text' name='M08_<?= $ID ?>' value='<?= $M08 ?>' style="width: 70px" ></td> 
           <td>
			<input type='text' name='M09_<?= $ID ?>' value='<?= $M09 ?>' style="width: 70px" ></td>
           <td>
			<input type='text' name='M10_<?= $ID ?>' value='<?= $M10 ?>' style="width: 70px" ></td> 
           <td>
			<input type='text' name='M11_<?= $ID ?>' value='<?= $M11 ?>' style="width: 70px" ></td>
           <td>
			<input type='text' name='M12_<?= $ID ?>' value='<?= $M12 ?>' style="width: 70px" ></td> 
		   <td><?= $Extra2 ?></td>
		   <td><a target="_blank" href="account-statement_details.php?StudentID=<?php echo $row["StudentID"]; ?>">STUDENT ACCOUNT STATEMENT</a> </td>
         </tr>
       <?php

       }
       ?>
       
<tr>
<th colspan="20">PRIMARY MADRASATI FULL DAY</th>
</tr>

        <?php 
        if(isset($_POST['but_update'])){

            if(isset($_POST['update'])){
                foreach($_POST['update'] as $updateid){
                    $M01 = $_POST['M01_'.$updateid];
                    $M02 = $_POST['M02_'.$updateid];
                    $M03 = $_POST['M03_'.$updateid];
                    $M04 = $_POST['M04_'.$updateid];
                    $M05 = $_POST['M05_'.$updateid];
                    $M06 = $_POST['M06_'.$updateid];
                    $M07 = $_POST['M07_'.$updateid];
                    $M08 = $_POST['M08_'.$updateid];
                    $M09 = $_POST['M09_'.$updateid];
                    $M10 = $_POST['M10_'.$updateid];
                    $M11 = $_POST['M11_'.$updateid];
                    $M12 = $_POST['M12_'.$updateid];

                    // if($fname !='' && $lname !='' && $age >0 && $salary >0 && $email != '' ){
                        $updateUser = "UPDATE madrasati_accountsummary SET 
                            M01='".$M01."',
                            M02='".$M02."',
                            M03='".$M03."',
                            M04='".$M04."',
                            M05='".$M05."',
                            M06='".$M06."',
                            M07='".$M07."',
                            M08='".$M08."',
                            M09='".$M09."',
                            M10='".$M10."',
                            M11='".$M11."',
                            M12='".$M12."'
                        WHERE ID=".$updateid;
                        mysqli_query($con,$updateUser);
                    // }
                    
                }
            }
            
        }
        ?>

       <?php 
       $query = "SELECT * FROM madrasati_accountsummary WHERE StudentID LIKE '$Month%' AND Programme LIKE 'PRIMARY MADRASATI FULL DAY%'";
       $result = mysqli_query($con,$query);

       while($row = mysqli_fetch_array($result) ){
         $ID = $row['ID'];
         $StudentID = $row['StudentID'];
         $Name = $row['Name'];
         $Programme = $row['Programme'];
         $Term = $row['Term'];
         $M01 = $row['M01'];
         $M02 = $row['M02'];
         $M03 = $row['M03'];
         $M04 = $row['M04'];
         $M05 = $row['M05'];
         $M06 = $row['M06'];
         $M07 = $row['M07'];
         $M08 = $row['M08'];
         $M09 = $row['M09'];
         $M10 = $row['M10'];
         $M11 = $row['M11'];
         $M12 = $row['M12'];
         $Extra2 = $row['Extra2'];
       ?>
         <tr>
           <!-- Checkbox -->
           <td><input type='checkbox' name='update[]' value='<?= $ID ?>' ><?php echo $count++; ?></td>
           <td><?= $StudentID ?></td>
           <td><?= $Name ?></td>
           <td>
           <?php
           		$SumTerm=$M01+$M02+$M03+$M04+$M05+$M06+$M07+$M08+$M09+$M10+$M11+$M12;
           		echo number_format((float)$SumTerm, 2, '.', '');
           ?>
           </td>
           <td>
			<input type='text' name='M01_<?= $ID ?>' value='<?= $M01 ?>' style="width: 70px" ></td>
           <td>
			<input type='text' name='M02_<?= $ID ?>' value='<?= $M02 ?>' style="width: 70px" ></td> 
           <td>
			<input type='text' name='M03_<?= $ID ?>' value='<?= $M03 ?>' style="width: 70px" ></td>
           <td>
			<input type='text' name='M04_<?= $ID ?>' value='<?= $M04 ?>' style="width: 70px" ></td> 
           <td>
			<input type='text' name='M05_<?= $ID ?>' value='<?= $M05 ?>' style="width: 70px" ></td>
           <td>
			<input type='text' name='M06_<?= $ID ?>' value='<?= $M06 ?>' style="width: 70px" ></td> 
           <td>
			<input type='text' name='M07_<?= $ID ?>' value='<?= $M07 ?>' style="width: 70px" ></td>
           <td>
			<input type='text' name='M08_<?= $ID ?>' value='<?= $M08 ?>' style="width: 70px" ></td> 
           <td>
			<input type='text' name='M09_<?= $ID ?>' value='<?= $M09 ?>' style="width: 70px" ></td>
           <td>
			<input type='text' name='M10_<?= $ID ?>' value='<?= $M10 ?>' style="width: 70px" ></td> 
           <td>
			<input type='text' name='M11_<?= $ID ?>' value='<?= $M11 ?>' style="width: 70px" ></td>
           <td>
			<input type='text' name='M12_<?= $ID ?>' value='<?= $M12 ?>' style="width: 70px" ></td> 
		   <td><?= $Extra2 ?></td>
		   <td><a target="_blank" href="account-statement_details.php?StudentID=<?php echo $row["StudentID"]; ?>">STUDENT ACCOUNT STATEMENT</a> </td>
         </tr>
       <?php

       }
       ?>

<tr>
<th colspan="20">KAFA</th>
</tr>

        <?php 
        if(isset($_POST['but_update'])){

            if(isset($_POST['update'])){
                foreach($_POST['update'] as $updateid){
                    $M01 = $_POST['M01_'.$updateid];
                    $M02 = $_POST['M02_'.$updateid];
                    $M03 = $_POST['M03_'.$updateid];
                    $M04 = $_POST['M04_'.$updateid];
                    $M05 = $_POST['M05_'.$updateid];
                    $M06 = $_POST['M06_'.$updateid];
                    $M07 = $_POST['M07_'.$updateid];
                    $M08 = $_POST['M08_'.$updateid];
                    $M09 = $_POST['M09_'.$updateid];
                    $M10 = $_POST['M10_'.$updateid];
                    $M11 = $_POST['M11_'.$updateid];
                    $M12 = $_POST['M12_'.$updateid];

                    // if($fname !='' && $lname !='' && $age >0 && $salary >0 && $email != '' ){
                        $updateUser = "UPDATE madrasati_accountsummary SET 
                            M01='".$M01."',
                            M02='".$M02."',
                            M03='".$M03."',
                            M04='".$M04."',
                            M05='".$M05."',
                            M06='".$M06."',
                            M07='".$M07."',
                            M08='".$M08."',
                            M09='".$M09."',
                            M10='".$M10."',
                            M11='".$M11."',
                            M12='".$M12."'
                        WHERE ID=".$updateid;
                        mysqli_query($con,$updateUser);
                    // }
                    
                }
            }
            
        }
        ?>

       <?php 
       $query = "SELECT * FROM madrasati_accountsummary WHERE StudentID LIKE '$Month%' AND Programme = 'KAFA'";
       $result = mysqli_query($con,$query);

       while($row = mysqli_fetch_array($result) ){
         $ID = $row['ID'];
         $StudentID = $row['StudentID'];
         $Name = $row['Name'];
         $Programme = $row['Programme'];
         $Term = $row['Term'];
         $M01 = $row['M01'];
         $M02 = $row['M02'];
         $M03 = $row['M03'];
         $M04 = $row['M04'];
         $M05 = $row['M05'];
         $M06 = $row['M06'];
         $M07 = $row['M07'];
         $M08 = $row['M08'];
         $M09 = $row['M09'];
         $M10 = $row['M10'];
         $M11 = $row['M11'];
         $M12 = $row['M12'];
         $Extra2 = $row['Extra2'];
       ?>
         <tr>
           <!-- Checkbox -->
           <td><input type='checkbox' name='update[]' value='<?= $ID ?>' ><?php echo $count++; ?></td>
           <td><?= $StudentID ?></td>
           <td><?= $Name ?></td>
           <td>
           <?php
           		$SumTerm=$M01+$M02+$M03+$M04+$M05+$M06+$M07+$M08+$M09+$M10+$M11+$M12;
           		echo number_format((float)$SumTerm, 2, '.', '');
           ?>
           </td>
           <td>
			<input type='text' name='M01_<?= $ID ?>' value='<?= $M01 ?>' style="width: 70px" ></td>
           <td>
			<input type='text' name='M02_<?= $ID ?>' value='<?= $M02 ?>' style="width: 70px" ></td> 
           <td>
			<input type='text' name='M03_<?= $ID ?>' value='<?= $M03 ?>' style="width: 70px" ></td>
           <td>
			<input type='text' name='M04_<?= $ID ?>' value='<?= $M04 ?>' style="width: 70px" ></td> 
           <td>
			<input type='text' name='M05_<?= $ID ?>' value='<?= $M05 ?>' style="width: 70px" ></td>
           <td>
			<input type='text' name='M06_<?= $ID ?>' value='<?= $M06 ?>' style="width: 70px" ></td> 
           <td>
			<input type='text' name='M07_<?= $ID ?>' value='<?= $M07 ?>' style="width: 70px" ></td>
           <td>
			<input type='text' name='M08_<?= $ID ?>' value='<?= $M08 ?>' style="width: 70px" ></td> 
           <td>
			<input type='text' name='M09_<?= $ID ?>' value='<?= $M09 ?>' style="width: 70px" ></td>
           <td>
			<input type='text' name='M10_<?= $ID ?>' value='<?= $M10 ?>' style="width: 70px" ></td> 
           <td>
			<input type='text' name='M11_<?= $ID ?>' value='<?= $M11 ?>' style="width: 70px" ></td>
           <td>
			<input type='text' name='M12_<?= $ID ?>' value='<?= $M12 ?>' style="width: 70px" ></td> 
		   <td><?= $Extra2 ?></td>
		   <td><a target="_blank" href="account-statement_details.php?StudentID=<?php echo $row["StudentID"]; ?>">STUDENT ACCOUNT STATEMENT</a> </td>
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
