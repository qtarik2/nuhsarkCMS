<?php
require_once "header.php";
?>

<?php
// Connect to database
require ('includes/connect.inc.php');
$ICNo = $_SESSION["username"];

// Find out the number of results stored in database
$sql = "SELECT * FROM staff WHERE ICNo = $ICNo";
$result = mysqli_query($con, $sql);

?>

<main>
<div class="jumbotron">
	  <h1>MANAGE ACCOUNT</h1>
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
						<th>#</th>
						<th>ICNo</th>
						<th>EPF No</th>
						<th>Name</th>
						<th>Position</th>
						<th>Manage</th>
					  </tr>
					</thead>
					<tbody>
				<?php $count = 0; ?>
				<?php while($row = mysqli_fetch_assoc($result)) { 
						$count++;?>
					  <tr>
						<td><?php echo $count; ?></td>
						<td><?php echo $row["ICNo"]; ?></td>
						<td><?php echo $row["EPFNo"]; ?></td>
						<td><?php echo $row["Name"]; ?></td>
						<td><?php echo $row["Position"]; ?></td>
						<td><a target="_blank" href="staff_manage-account_update-account.php?ID=<?php echo $row["ID"]; ?>">Update</a></td>
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