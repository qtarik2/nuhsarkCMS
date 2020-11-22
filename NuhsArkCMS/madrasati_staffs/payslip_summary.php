<?php
require_once "header.php";
?>

<?php
// Connect to database
require ('includes/connect.inc.php');
$ICNo = $_SESSION["username"];

// Find out the number of results stored in database
$sql = "SELECT * FROM madrasati_payslip WHERE ICNo = $ICNo";

// Find out the number of results stored in database
$result = mysqli_query($con, $sql);

// Define how many results per page
$resultsPerPage = 15;
$number_of_results = mysqli_num_rows($result);

// Determine number of total page available
$numberOfPages = ceil($number_of_results / $resultsPerPage);

// determine which page number visitor is currently on
$pageActive = (isset($_GET["page"])) ? $_GET["page"] : 1;

// Determine the sql LIMIT starting number for the results on the displaying page
$thisPageFirstResult = ($resultsPerPage * $pageActive) - $resultsPerPage;

$sql = "SELECT * FROM madrasati_payslip WHERE ICNo = $ICNo LIMIT ". $thisPageFirstResult .',' . $resultsPerPage ;
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
	  <h1>PAYSLIPS</h1>
	  <div class="DashboardInfo">
        <a id="home" href="index.php">Home</a><i class="fa fa-chevron-right"></i><a href="#">Payslips</a>
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
						<th>Month</th>
						<th>Name</th>
						<th>IC No</th>
						<th>Nett Salary</th>
						<th>Manage</th>
					  </tr>
					</thead>
					<tbody>
				<?php $count = 0 + $thisPageFirstResult; ?>
				<?php while($row = mysqli_fetch_assoc($searchResult)) { 
						$count++;?>
					  <tr>
						<td><?php echo $count; ?></td>
						<td><?php echo $row["Month"]; ?></td>
						<td><?php echo $row["Name"]; ?></td>
						<td><?php echo $row["ICNo"]; ?></td>
						<td><?php echo $row["NettSalary"]; ?></td>
						<td><a target="_blank" href="payslip_view.php?ID=<?php echo $row["ID"]; ?>">View Payslip</a></td>
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
<main/>

<?php
require_once "footer.php";
?>