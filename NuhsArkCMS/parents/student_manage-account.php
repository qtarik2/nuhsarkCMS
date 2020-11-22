<?php
  require_once "header.php";
?>

<?php
// Connect to database
require ('connect.php');

$Username=$_SESSION['username'];

// Find out the number of results stored in database
$sql = "SELECT * FROM students WHERE studentID = $Username";
$result = mysqli_query($con, $sql);
?>


<main>
	<div class="jumbotron">
	  <h1>Manage Account</h1>
	  <div class="DashboardInfo">
		<a id="home" href="index.php">Home</a><i class="fa fa-chevron-right"></i><a href="#">Manage Account</a>
	  </div>
	</div>
	  
	<div class="container-fluid tableData">
	  <div class="row">
		<div class="col-12">						
			<div class="table-responsive">
				<table class="table table-hover table-bordered">
					<thead>
					  <tr>
						<th>ID</th>
						<th>Email Address</th>
						<th>Student ID</th>
						<th>Name</th>
						<th>MYKID</th>
						<th>Date Of Birth</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Mother&#39;s Contact</th>
						<th>Father&#39;s Contact</th>
						<th>Intake</th>
						<th>Manage</th>
					  </tr>
					</thead>
					<tbody>
				<?php $count = 0; ?>
				<?php while($row = mysqli_fetch_assoc($result)) { 
						$count++;?>
					  <tr>
						<td><?php echo $count; ?></td>
						<td><?php echo $row["EmailAddress"]; ?></td>
						<td><?php echo $row["StudentID"]; ?></td>
						<td><?php echo $row["Name"]; ?></td>
						<td><?php echo $row["MYKID"]; ?></td>
						<td><?php echo $row["DOB"]; ?></td>
						<td><?php echo $row["Age"]; ?></td>
						<td><?php echo $row["Gender"]; ?></td>
						<td><?php echo $row["MotherContact"]; ?></td>
						<td><?php echo $row["FatherContact"]; ?></td>
						<td><?php echo $row["Intake"]; ?></td>
						<td><a href="student_manage-account_details.php?ID=<?php echo $row["ID"]; ?>">Details</a></td>
					  </tr>
				<?php  } ?>
					</tbody>
				</table>
			</div>
		</div>   
	  </div>
	</div>
<main/>
<?php
  require_once "footer.php";
?>