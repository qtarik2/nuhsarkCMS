<?php
require_once "header.php";
?>

<?php
// Connect to database
require ('includes/connect.inc.php');

if(!isset($_POST['search'])) {
	$searchByName = @$_SESSION['searchByName'];
} 
else {
	$searchByName = $_POST['searchByName'];
	$_SESSION['searchByName'] = $searchByName;
}	

// Find out the number of results stored in database
$sql = "SELECT * FROM staff WHERE Name LIKE '%$searchByName%'";

// Find out the number of results stored in database
$result = mysqli_query($con, $sql);

// Define how many results per page
$resultsPerPage = 10;
$number_of_results = mysqli_num_rows($result);

// Determine number of total page available
$numberOfPages = ceil($number_of_results / $resultsPerPage);

// determine which page number visitor is currently on
$pageActive = (isset($_GET["page"])) ? $_GET["page"] : 1;

// Determine the sql LIMIT starting number for the results on the displaying page
$thisPageFirstResult = ($resultsPerPage * $pageActive) - $resultsPerPage;

$sql = "SELECT * FROM staff WHERE Name LIKE '%$searchByName%' LIMIT ". $thisPageFirstResult .',' . $resultsPerPage ;
$searchResult = mysqli_query($con, $sql);

// smart pagination style
$maxPageNumber = 3;

if($pageActive > $maxPageNumber) {
	$startNumber = $pageActive - $maxPageNumber;
}
else {
	$startNumber = 1;
}

if($pageActive < ($numberOfPages - $maxPageNumber)) {
	$endNumber = $pageActive + $maxPageNumber;
}
else {
	$endNumber = $numberOfPages;
}
?>

<main>
<div class="jumbotron">
	  <h1>STAFF DIRECTORY</h1>
	  <div class="DashboardInfo">
                <a id="home" href="index.php">Home</a><i class="fa fa-chevron-right"></i><a href="#">Staff Lists</a>
			</div>
	</div>
	  
	<div class="container-fluid tableData">
	  <div class="row">
		<div class="col-12">			
			<form class="form-inline" action="staff-directory.php" method="POST">		
			  <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Search by Name..." name="searchByName" autofocus value="<?php $searchByName; ?>">		
			  <button type="submit" class="btn mb-2 btn-gradient-yellow" value="Search Data" name="search">Search</button>
			  <div class="form-group">
			  <!--<label for="sel1">Number of rows:</label>
			  <select class="form-control" id="sel1">
				<option>25</option>
				<option>50</option>
				<option>100</option>
				<option>250</option>
				<option>500</option>
			  </select>-->
			</div>
			</form>
			
			<div class="table-responsive">
				<table class="table table-hover table-bordered">
					<thead>
					  <tr>
						<th>#</th>
						<th>IC No</th>
						<th>EPF No</th>
						<th>Name</th>
						<th>Position</th>
					  </tr>
					</thead>
					<tbody>
				<?php $count = 0 + $thisPageFirstResult; ?>
				<?php while($row = mysqli_fetch_assoc($searchResult)) { 
						$count++;?>
					  <tr>
						<td><?php echo $count; ?></td>
						<td><?php echo $row["ICNo"]; ?></td>
						<td><?php echo $row["EPFNo"]; ?></td>
						<td><?php echo $row["Name"]; ?></td>
						<td><?php echo $row["Position"]; ?></td>						
					  </tr>
				<?php  } ?>
					</tbody>
				</table>
			</div>
			
						<nav>
				<ul class="pagination">
					<?php
					$currentPage = $pageActive;
					$firstPage = 1;
					$nextPage = $currentPage + 1;
					$previousPage = $currentPage - 1;
					
					?>
					
					<?php
					// First Button
					if($currentPage == 1)
					{
					?>								
						<li class="page-item disabled"><a class="page-link" href="?page=<?php echo $firstPage ?>" aria-label="Previous"><span aria-hidden="true">First</span></a></li>
					<?php
					}
					else
					{
					?>
						<li class="page-item"><a class="page-link" href="?page=<?php echo $firstPage ?>" aria-label="Previous"><span aria-hidden="true">First</span></a></li>
					<?php
					}
					?>
					
					<?php
					// Previous Button
					if($currentPage == 1)
					{
					?>								
						<li class="page-item disabled"><a class="page-link" href="?page=<?php echo $previousPage ?>" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
					<?php
					}
					else
					{
					?>
						<li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
					<?php
					}
					?>									

					<?php
					// Pages with number
					for ($i = $startNumber; $i <= $endNumber; $i++) {
						if($i == $currentPage)
						{
					?>
						
							<li class="page-item"><a class="page-link active" href="?page=<?php echo $i ?>"><?php echo $i ?></a></li>
						<?php
						}
						else
						{
						?>
							<li class="page-item"><a class="page-link" href="?page=<?php echo $i ?>"><?php echo $i ?></a></li>
					<?php
						}
					}
					
					// Next Button
					if($currentPage >= $numberOfPages)
					{
					?>
						<li class="page-item disabled"><a class="page-link" href="?page=<?php echo $nextPage ?>" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
					<?php
					}
					else
					{
					?>
						<li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
					<?php
					}								
					?>

					<?php
					// Last Button
					if($currentPage >= $numberOfPages)
					{
					?>								
						<li class="page-item disabled"><a class="page-link" href="?page=<?php echo $numberOfPages ?>" aria-label="Previous"><span aria-hidden="true">Last</span></a></li>
					<?php
					}
					else
					{
					?>
						<li class="page-item"><a class="page-link" href="?page=<?php echo $numberOfPages ?>" aria-label="Previous"><span aria-hidden="true">Last</span></a></li>
					<?php
					}
					?>					
				</ul>
			</nav>
		</div>   
	  </div>
	</div>
</main>

<?php
require_once "footer.php";
?>