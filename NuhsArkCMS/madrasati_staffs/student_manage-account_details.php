<?php
include_once "header.php";
?>

<?php
// Connect database
require "includes/connect.inc.php";
$ID=$_REQUEST["ID"];

$sql = "SELECT * FROM madrasati_students WHERE ID = $ID";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)) {
?>
<main>
<div class="jumbotron">
	<h1>STUDENT DETAILS</h1>
	<div class="DashboardInfo">
		<a id="home" href="index.php">Home</a><i class="fa fa-chevron-right"></i><a href="student_manage-account.php">Student Lists</a><i class="fa fa-chevron-right"></i><a href="#">Student Details</a>
	</div>
</div>

<div class="container-fluid studentDetails">
	<div class="row">
		<div class="col-4">
			<table class="table table-borderless formMargin">
				<tbody>
				  <tr>
					<td>Name:</td>
					<th><?php echo $row["Name"]; ?></th>       
				  </tr>
				  <tr>
					<td>Student ID:</td>
					<th><?php echo $row["StudentID"]; ?></th>       
				  </tr>
				  <tr>
					<td>MyKID:</td>
					<th><?php echo $row["MYKID"]; ?></th>       
				  </tr>
				  <tr>
					<td>Gender:</td>
					<th><?php echo $row["Gender"]; ?></th>       
				  </tr>
				  <tr>
					<td>Mother Name:</td>
					<th><?php echo $row["MotherName"]; ?></th>       
				  </tr>
				  <tr>
					<td>Mother Contact:</td>
					<th><?php echo $row["MotherContact"]; ?></th>       
				  </tr>
				  <tr>
					<td>Father Name:</td>
					<th><?php echo $row["FatherName"]; ?></th>       
				  </tr>
				  <tr>
					<td>Father Contact:</td>
					<th><?php echo $row["FatherContact"]; ?></th>       
				  </tr>
					<tr>
					<td>Address:</td>
					<th><?php echo $row["Address"]; ?></th>       
				  </tr>
				  <tr>
					<td>Date Of Birth:</td>
					<th><?php echo $row["DOB"]; ?></th>       
				  </tr>
				  <tr>
					<td>Age:</td>
					<th><?php echo $row["Age"]; ?></th>       
				  </tr>
				  <tr>
					<td>E-Mail:</td>
					<th><?php echo $row["EmailAddress"]; ?></th>       
				  </tr>
				  <tr>
					<td>Intake:</td>
					<th><?php echo $row["Intake"]; ?></th>       
				  </tr>
				  <tr>
					<td>Registration Date:</td>
					<th><?php echo $row["RegistrationDate"]; ?></th>       
				  </tr>
				  <tr>
					<td>Programme:</td>
					<th><?php echo $row["Programme"]; ?></th>       
				  </tr>      
				</tbody>
			</table>
			<?php 
			} 
			?>
		</div>
	</div>
</div>
</main>

<?php
include_once "footer.php";
?>