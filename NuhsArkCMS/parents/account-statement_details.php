<?php
  require_once "header.php";
?>

<?php
// Connect to database
require ('connect.php');

$StudentID = $_SESSION["username"];

// if(isset($_POST['search'])){
	// $searchByMonth = $_POST['searchByMonth'];
	// $_SESSION['searchByMonth'] = $searchByMonth;
// } 
// else {
	// $searchByMonth = $_SESSION['searchByMonth'];
// }	

// Find out the number of results stored in database
$sql = "SELECT * FROM invoice WHERE StudentID = $StudentID";

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

$sql = "SELECT * FROM invoice WHERE StudentID = $StudentID LIMIT ". $thisPageFirstResult .',' . $resultsPerPage ;
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
	  <h1>Account Details</h1>
	  <div class="DashboardInfo">
        <a id="home" href="index.php">Home</a><i class="fa fa-chevron-right"></i><a href="account-statement.php">Account Statement</a><i class="fa fa-chevron-right"></i><a href="#">Details</a>
	  </div>
	</div>
	  
	<div class="container-fluid tableData">
	  <div class="row">
		<div class="col-12">
			<h3 style="border-bottom: 3px solid;">Invoices</h3>
			<div class="table-responsive">
				<table class="table table-hover table-bordered">
					<thead>
					  <tr>
						<th>Invoice No</th>
						<th>Date</th>
						<th>Amount</th>
						<th>View Invoice</th>
					  </tr>
					</thead>
					<tbody>
				<?php while($row = mysqli_fetch_assoc($searchResult)) { ?>
					  <tr>
						<td><?php echo $row["InvoiceNo"]; ?></td>
						<td><?php echo $row["Date"]; ?></td>
						<td><?php echo $row["Amount"]; ?></td>
						<td><a target="_blank" href="invoice_select-invoice_view.php?InvoiceNo=<?php echo $row["InvoiceNo"]; ?>">View</a></td>
					  </tr>
				<?php  } ?>
					</tbody>
				</table>
			</div>
			
			<nav>
				<ul class="pagination">
					<?php									
					$nextPage = $pageActive + 1;
					$previousPage = $pageActive - 1;									
					
					// Previous Button
					if($pageActive == 1)
					{
					?>									
						<li class="page-item disabled"><a class="page-link" href="payslip_summary.php?page=<?php echo $previousPage ?>" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
					<?php
					}
					else
					{
					?>
						<li class="page-item"><a class="page-link" href="payslip_summary.php?page=<?php echo $previousPage ?>" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
					<?php
					}
					?>									

					<?php
					// Pages with number
					for ($i = $startNumber; $i <= $endNumber; $i++) {
						if($i == $pageActive)
						{
					?>
						
							<li class="page-item active"><a class="page-link" href="payslip_summary.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
						<?php
						}
						else
						{
						?>
							<li class="page-item"><a class="page-link" href="payslip_summary.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
					<?php
						}
					}
					
					// Next Button
					if($pageActive == $numberOfPages)
					{
					?>
						<li class="page-item disabled"><a class="page-link" href="payslip_summary.php?page=<?php echo $nextPage ?>" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
					<?php
					}
					else
					{
					?>
						<li class="page-item"><a class="page-link" href="payslip_summary.php?page=<?php echo $nextPage ?>" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
					<?php
					}								
					?>	
				</ul>
			</nav>
		</div>   
	  </div>
	</div>
	
	<div class="container-fluid tableData">
	  <div class="row">
		<div class="col-12">
			<h3 style="border-bottom: 3px solid;">Payments</h3>		
			<div class="table-responsive">
				<table class="table table-hover table-bordered">
					<thead>
					  <tr>
						<th>Receipt No</th>
						<th>Date</th>
						<th>Amount</th>
						<th>Annual Fees</th>
						<th>Term Fees</th>
						<th>Misc Fees</th>
						<th>View Receipt</th>
					  </tr>
					</thead>
					<tbody>
				<?php while($row = mysqli_fetch_assoc($searchResult)) { ?>
					  <tr>
						<td><?php echo $row["ReceiptNo"]; ?></td>
						<td><?php echo $row["Date"]; ?></td>
						<td><?php echo $row["Amount"]; ?></td>
						<td><?php echo $row["AnnualFees"]; ?></td>
						<td><?php echo $row["TermFees"]; ?></td>
						<td><?php echo $row["MiscFees"]; ?></td>
						<td><a target="_blank" href="payment_view.php?ReceiptNo=<?php echo $row["ReceiptNo"]; ?>">View Receipt</a></td>
					  </tr>
				<?php  } ?>
					</tbody>
				</table>
			</div>
			
			<nav>
				<ul class="pagination">
					<?php									
					$nextPage = $pageActive + 1;
					$previousPage = $pageActive - 1;									
					
					// Previous Button
					if($pageActive == 1)
					{
					?>									
						<li class="page-item disabled"><a class="page-link" href="payslip_summary.php?page=<?php echo $previousPage ?>" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
					<?php
					}
					else
					{
					?>
						<li class="page-item"><a class="page-link" href="payslip_summary.php?page=<?php echo $previousPage ?>" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
					<?php
					}
					?>									

					<?php
					// Pages with number
					for ($i = $startNumber; $i <= $endNumber; $i++) {
						if($i == $pageActive)
						{
					?>
						
							<li class="page-item active"><a class="page-link" href="payslip_summary.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
						<?php
						}
						else
						{
						?>
							<li class="page-item"><a class="page-link" href="payslip_summary.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
					<?php
						}
					}
					
					// Next Button
					if($pageActive == $numberOfPages)
					{
					?>
						<li class="page-item disabled"><a class="page-link" href="payslip_summary.php?page=<?php echo $nextPage ?>" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
					<?php
					}
					else
					{
					?>
						<li class="page-item"><a class="page-link" href="payslip_summary.php?page=<?php echo $nextPage ?>" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
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