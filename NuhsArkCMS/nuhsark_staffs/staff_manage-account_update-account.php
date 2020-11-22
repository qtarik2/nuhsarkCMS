<?php
  include_once "header.php";
?>

<?php
// Connect to database
require ('includes/connect.inc.php');
$ICNo = $_SESSION["username"];

$sql = "SELECT * FROM staff WHERE ICNo = $ICNo";
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_assoc($result)) {
?>

<main>
	<div class="jumbotron">
	  <h1>UPDATE ACCOUNT</h1>
	  <div class="DashboardInfo">
        <a id="home" href="index.php">Home</a><i class="fa fa-chevron-right"></i><a href="staff_manage-account.php">Manage Account</a><i class="fa fa-chevron-right"></i><a href="#">Update</a>
	  </div>
	</div>
	<div class="container-fluid tableData">
	  <div class="row">
		<div class="col">
			<form class="formMargin" action="includes/update.inc.php" method="post">
				<div class="form-group row">
					<div class="col-sm-3">
					  <label for="staff">IC No:</label>
					  <input type="text" class="form-control" value="<?php echo $row["ICNo"] ?>" disabled>
					  <input type="hidden" name="ICNo" class="form-control" value="<?php echo $row["ICNo"] ?>">
					</div>
				</div>  
				<div class="form-group row">
					<div class="col-sm-3">
					  <label for="staff">EPF No:</label>
					  <input type="text"  class="form-control" placeholder="<?php echo $row["EPFNo"] ?>" disabled>
					</div>
				</div>  
				<div class="form-group row">
					<div class="col-sm-3">
					  <label for="staff">Name:</label>
					  <input type="text" name="Name" class="form-control" placeholder="<?php echo $row["Name"] ?>" value="">
					</div>
				</div>
				<div class="form-group row">
					<div class="col-sm-3">
					  <label for="staff">Password:</label>
					  <input name="Password" type="password" class="form-control">
					</div>
				</div>  
				<div class="form-group row">
					<div class="col-sm-3">
					  <label for="staff">Position:</label>
					  <input type="text" class="form-control" placeholder="<?php echo $row["Position"] ?>" disabled>
					</div>
				</div>  				
				<div class="form-group row">
					<div class="col-sm-3">
					  <label for="staff">Gross Basic:</label>
					  <input type="text" class="form-control" value="<?php echo $row["GrossBasic"] ?>" disabled>
					</div>
				</div>  
				 <div class="form-group row">
					<div class="col-sm-3">
					  <label for="staff">Nett Basic:</label>
					  <input type="text" class="form-control" value="<?php echo $row["NettBasic"] ?>" disabled>			  
					</div>
				</div>
			  <button type="submit" class="btn btn-gradient-yellow" name="update">Update</button>
			  <?php
				if(isset($_GET["error"])) {
					if($_GET["error"] == "emptyinput") {
						echo "<p class='error'> Fill in all fields! </p>";
					}
					elseif($_GET["error"] == "stmtfailed") {
						echo "<p class='error'> Something went wrong, Please try again! </p>";
					}
					elseif($_GET["error"] == "none") {
						echo "<p class='error'> you have successfully updated! </p>";
					}
				}
			?>	
			</form>		
<?php 
}
?>
		</div>
	  </div>
	</div>
<main/>

<?php 
  include_once "footer.php";
?>