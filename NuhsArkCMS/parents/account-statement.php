<?php
  require_once "header.php";
?>

<?php
// Connect to database
require ('db.php');

$Username=$_SESSION['username'];

// if(isset($_POST['search'])){
	// $searchByStudentID = $_POST['searchByStudentID'];
	// $_SESSION['searchByStudentID'] = $searchByStudentID;
// } 
// else {
	// $searchByStudentID = @$_SESSION['searchByStudentID'];
// }	

// Find out the number of results stored in database
$sql = "SELECT * FROM accountsummary WHERE StudentID='$Username'";

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

$sql = "SELECT * FROM accountsummary WHERE StudentID='$Username' LIMIT ". $thisPageFirstResult .',' . $resultsPerPage ;
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

// Calculation
$QuerySum1 = "SELECT SUM(Debit) FROM accountsummary WHERE StudentID='$Username'";
if ($result1 = mysqli_query($con, $QuerySum1)) {
	/* fetch associative array */
	while ($row = mysqli_fetch_array($result1)) {
		$TotalDebitMYR = $row['SUM(Debit)'];
	}
}
$QuerySum2 = "SELECT SUM(Credit) FROM accountsummary WHERE StudentID='$Username'";
if ($result2 = mysqli_query($con, $QuerySum2)) {
	/* fetch associative array */
	while ($row = mysqli_fetch_array($result2)) {
		$TotalCreditMYR = $row['SUM(Credit)'];
	}
}
	 	
$BalanceMYR = $TotalDebitMYR-$TotalCreditMYR;
?>


<main>
	<div class="jumbotron">
	  <h1>Account Statement Summary</h1>
	  <div class="DashboardInfo">
		<a id="home" href="index.php">Home</a><i class="fa fa-chevron-right"></i><a href="#">Account Statement</a>
	  </div>
	</div>
	
	<div class="container-fluid" >
		<div class="row">
			<div class="col-2 tableData">
				<p>Total Debit: MYR <?php echo $TotalDebitMYR ?></p>
				<p>Total Credit: MYR <?php echo $TotalCreditMYR ?></p>
				<p>Balace: MYR <?php echo number_format((float)$BalanceMYR, 2, '.', ''); ?></p>
			</div>
		</div>			
	</div>
	
	<div class="container-fluid tableData">
	  <div class="row">
		<div class="col-12">			
			<!--<form class="form-inline" action="account-statement.php" method="POST">		
			  <input type="text" class="form-control mb-2 mr-sm-2" placeholder="Search by Student ID..." name="searchByStudentID" autofocus value="<?php $searchByStudentID; ?>">		
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
						<th>Email Address</th>
						<th>Student ID</th>
						<th>Name</th>
						<th>Currency</th>
						<th>Debit</th>
						<th>Credit</th>
						<th>Balace</th>
						<th>Manage</th>
					  </tr>
					</thead>
					<tbody>
				<?php $count = 0; ?>
				<?php while($row = mysqli_fetch_assoc($searchResult)) { 
						$count++;?>
					  <tr>
						<td><?php echo $count; ?></td>
						<td><?php echo $row["EmailAddress"]; ?></td>
						<td><?php echo $row["StudentID"]; ?></td>
						<td><?php echo $row["Name"]; ?></td>
						<td><?php echo $row["Currency"]; ?></td>
						<td><?php echo $row["Debit"]; ?></td>
						<td><?php echo $row["Credit"]; ?></td>
						<td><?php echo $row["Balance"]; ?></td>
						<td><a href="account-statement_details.php?StudentID=<?php echo $row["StudentID"]; ?>">Details</a></td>
					  </tr>
				<?php  } ?>
					  <tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td align="right">Total</td>
						<td>MYR <?php echo $TotalDebitMYR ?></td>
						<td>MYR <?php echo $TotalCreditMYR ?></td>
						<td>MYR <?php echo number_format((float)$BalanceMYR, 2, '.', ''); ?></td>
						<td></td>
					  </tr>
					</tbody>
				</table>
			</div>
			
			<nav>
				<ul class="pagination">
					<?php
					$firstPage = 1;
					$nextPage = $pageActive + 1;
					$previousPage = $pageActive - 1;
					
					?>
					
					<?php
					// First Button
					if($pageActive == 1)
					{
					?>								
						<li class="page-item disabled"><a class="page-link" href="account-statement.php?page=<?php echo $firstPage ?>" aria-label="Previous"><span aria-hidden="true">First</span></a></li>
					<?php
					}
					else
					{
					?>
						<li class="page-item"><a class="page-link" href="account-statement.php?page=<?php echo $firstPage ?>" aria-label="Previous"><span aria-hidden="true">First</span></a></li>
					<?php
					}
					?>
					
					<?php
					// Previous Button
					if($pageActive == 1)
					{
					?>								
						<li class="page-item disabled"><a class="page-link" href="account-statement.php?page=<?php echo $previousPage ?>" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
					<?php
					}
					else
					{
					?>
						<li class="page-item"><a class="page-link" href="account-statement.php?page=<?php echo $previousPage ?>" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
					<?php
					}
					?>									

					<?php
					// Pages with number
					for ($i = $startNumber; $i <= $endNumber; $i++) {
						if($i == $pageActive)
						{
					?>
						
							<li class="page-item active"><a class="page-link" href="account-statement.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
						<?php
						}
						else
						{
						?>
							<li class="page-item"><a class="page-link" href="account-statement.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
					<?php
						}
					}
					
					// Next Button
					if($pageActive == $numberOfPages)
					{
					?>
						<li class="page-item disabled"><a class="page-link" href="account-statement.php?page=<?php echo $nextPage ?>" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
					<?php
					}
					else
					{
					?>
						<li class="page-item"><a class="page-link" href="account-statement.php?page=<?php echo $nextPage ?>" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
					<?php
					}								
					?>

					<?php
					// Last Button
					if($pageActive == $numberOfPages)
					{
					?>								
						<li class="page-item disabled"><a class="page-link" href="account-statement.php?page=<?php echo $numberOfPages ?>" aria-label="Previous"><span aria-hidden="true">Last</span></a></li>
					<?php
					}
					else
					{
					?>
						<li class="page-item"><a class="page-link" href="account-statement.php?page=<?php echo $numberOfPages ?>" aria-label="Previous"><span aria-hidden="true">Last</span></a></li>
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