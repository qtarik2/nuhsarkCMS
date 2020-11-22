<?php
require_once "header.php";
?>

<?php
// Connect to database
require ('connect.php');

$ICNo = $_SESSION["username"];

// if(isset($_POST['search'])){
	// $searchByMonth = $_POST['searchByMonth'];
	// $_SESSION['searchByMonth'] = $searchByMonth;
// } 
// else {
	// $searchByMonth = $_SESSION['searchByMonth'];
// }	

// Find out the number of results stored in database
$sql = "SELECT * FROM madrasati_staff WHERE ICNo = $ICNo";

// Find out the number of results stored in database
$result = mysqli_query($con, $sql);

// Define how many results per page
$resultsPerPage = 5;
$number_of_results = mysqli_num_rows($result);

// Determine number of total page available
$numberOfPages = ceil($number_of_results / $resultsPerPage);

// determine which page number visitor is currently on
$pageActive = (isset($_GET["page"])) ? $_GET["page"] : 1;

// Determine the sql LIMIT starting number for the results on the displaying page
$thisPageFirstResult = ($resultsPerPage * $pageActive) - $resultsPerPage;

$sql = "SELECT * FROM madrasati_staff WHERE ICNo = $ICNo LIMIT ". $thisPageFirstResult .',' . $resultsPerPage ;
$searchResult = mysqli_query($con, $sql);

// smart pagination style
$maxPageNumber = 3;

if($pageActive > $maxPageNumber)
{
	$startNumber = $pageActive - $maxPageNumber;
}
else
{
	$startNumber = 1;
}

if($pageActive < ($numberOfPages - $maxPageNumber))
{
	$endNumber = $pageActive + $maxPageNumber;
}
else
{
	$endNumber = $numberOfPages;
}
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
					
			<!--<form class="form-inline" action="payslip_summary.php" method="POST">		
			  <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Search by Month..." name="searchByMonth" autofocus value="<?php //$searchByMonth; ?>">		
			  <button type="submit" class="btn btn-dark mb-2" value="Search Data" name="search">Search</button>
			  <div class="form-group">
			  <label for="sel1">Number of rows:</label>
			  <select class="form-control" id="sel1">
				<option>25</option>
				<option>50</option>
				<option>100</option>
				<option>250</option>
				<option>500</option>
			  </select>
			</div>
			</form>-->
			
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
				<?php while($row = mysqli_fetch_assoc($searchResult)) { 
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