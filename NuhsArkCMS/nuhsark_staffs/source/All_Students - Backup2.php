<?php
// Session
include("auth.php");
// <!--search box: cari ; button: value Cari data name tombolcari; page= halaman-->
if(isset($_POST['search']))
{
	$searchByStudentID = $_POST['searchByStudentID'];
	$searchByName = $_POST['SearchByName'];
	$searchByMYKID = $_POST['SearchByMYKID'];
	
	$_SESSION['searchByStudentID'] = $searchByStudentID;
	$_SESSION['searchByName'] = $searchByName;
	$_SESSION['searchByMYKID'] = $searchByMYKID;
}
else
{
	$searchByStudentID = $_SESSION['searchByStudentID'];
	$searchByName = $_SESSION['searchByName'];
	$searchByMYKID = $_SESSION['searchByMYKID'];	
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Nuh's Ark Islamic Montessori School</title>
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="../../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/admin/NavBar.css">
    <link rel="stylesheet" href="../../assets/css/admin/Sidebar.css">
    <link rel="stylesheet" href="../../assets/css/admin/Style.css">
    <link rel="stylesheet" href="../../assets/css/madrasatiStaffs/Style.css">
    <link rel="stylesheet" href="../../assets/css/nuhsArkParents/Pretty-Footer.css">
    <link rel="stylesheet" href="../../assets/css/nuhsArkParents/Style.css">
    <link rel="stylesheet" href="../../assets/css/nuhsArkStaffs/Style.css">
</head>

<body style="background-color: rgb(180,180,180);">
    <nav class="navbar navbar-light navbar-expand-md bg-light" style="margin-bottom: 1px;">
        <div class="container-fluid"><a class="navbar-brand" href="#">Brand</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">First Item</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Second Item</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Third Item</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <nav class="navbar navbar-light navbar-expand-md bg-white">
        <div class="container-fluid"><a class="navbar-brand" href="#">Nuh's Ark</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-2">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Dashboard</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Nuh's Ark</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Payslip</a><a class="dropdown-item" role="presentation" href="#">Student</a><a class="dropdown-item" role="presentation" href="#">Staff Directory</a></div>
                    </li>
                    <li class="nav-item" role="presentation"></li>
                </ul>
            </div>
        </div>
    </nav>
	

    <div class="row no-gutters" id="Content">
        <div class="col">
            <div class="DashboardInfo">
                <h3>Nuhs Ark Staff Dashboard</h3><a id="home" href="#">Home</a><i class="fa fa-chevron-right"></i><a href="#">Student</a></div>
            <div class="container-fluid contentBody">
                <div class="row" id="contentItems">
                    <div class="col-12 item">
                        <h3>All Students Data</h3>
					<form action="../All_Students.php" method="post">
					<!--search box: cari ; button: value Cari data name tombolcari; page= halaman-->
						<div><input type="search" name="searchByStudentID" autofocus value="<?php echo $searchByStudentID; ?>" placeholder="Search by Student ID..." ><input type="search" name="SearchByName" value="<?php echo $searchByStudentID; ?>" placeholder="Search by Name..." ><input type="search" name="SearchByMYKID" value="<?php echo $searchByStudentID; ?>" placeholder="Search by MYKID..." ><button class="btn btn-success" type="submit" value="keyword" name="search">Search</button></div>
							<div class="table-responsive">
								<table class="table">
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
<?php
// Connect to database
require ('connect.php'); 

// Define how many results per page
$resultsPerPage = 5;

// Find out the number of results stored in database
$sql = "SELECT * FROM students";

// Find out the number of results stored in database
$result = mysqli_query($con, $sql);
$number_of_results = mysqli_num_rows($result);

// Determine number of total page available
$numberOfPages = ceil($number_of_results / $resultsPerPage);

// determine which page number visitor is currently on
$pageActive = (isset($_GET["page"])) ? $_GET["page"] : 1;

// Determine the sql LIMIT starting number for the results on the displaying page
$thisPageFirstResult = ($resultsPerPage * $pageActive) - $resultsPerPage;

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

if(isset($_POST['search']))
{
	if($_POST['searchByStudentID'])
	{
		//$searchByStudentID = $_POST['searchByStudentID'];
		$sql = "SELECT * FROM students WHERE StudentID LIKE '%".$searchByStudentID."%'";
		$search_Result = filterTable($sql);
		// $number_of_results = mysqli_num_rows($search_Result);
		// $numberOfPages = ceil($number_of_results / $resultsPerPage);

	}
	elseif($_POST['SearchByName'])
	{
		//$SearchByName = $_POST['SearchByName'];
		$sql = "SELECT * FROM students WHERE Name LIKE '%".$SearchByName."%'";
		$search_Result = filterTable($sql);

	}
	elseif($_POST['SearchByMYKID'])
	{
		//$SearchByMYKID = $_POST['SearchByMYKID'];
		$sql = "SELECT * FROM students WHERE MYKID LIKE '%".$SearchByMYKID."%' LIMIT ". $thisPageFirstResult .',' . $resultsPerPage;
		$search_Result = filterTable($sql);
	}
	else
	{
		$sql = "SELECT * FROM students LIMIT ". $thisPageFirstResult .',' . $resultsPerPage;
		$search_Result = filterTable($sql);
	}
}
else
{
	// Retrive selected results from database and display them on page
	$sql = "SELECT * FROM students LIMIT ". $thisPageFirstResult .',' . $resultsPerPage ;
	$search_Result = filterTable($sql);
}

function filterTable($sql)
{
	require ('connect.php');	
	$filter_Result = mysqli_query($con, $sql);
	
	return $filter_Result;
}

while($row = mysqli_fetch_array($search_Result)) 
{
?>
										<tr>
											<td><?php echo $row["ID"]; ?></td>
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
											<td><a href="../student_manage-account_details.php?ID=<?php echo $row["ID"]; ?>">Details</a></td>
										</tr>							
<?php 
}
?>
									</tbody>
								</table>
							</div>
							<div>								
								<nav>
									<ul class="pagination">
									<?php									
									$nextPage = $pageActive + 1;
									$previousPage = $pageActive - 1;									
									
									// Previous Button
									if($pageActive == 1)
									{
									?>									
										<li class="page-item disabled"><a class="page-link" href="../All_Students.php?page=<?php echo $previousPage ?>" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
									<?php
									}
									else
									{
									?>
										<li class="page-item"><a class="page-link" href="../All_Students.php?page=<?php echo $previousPage ?>" aria-label="Previous"><span aria-hidden="true">Previous</span></a></li>
									<?php
									}
									?>									
							
									<?php
									// Pages with number
									for ($i = $startNumber; $i <= $endNumber; $i++) {
										if($i == $pageActive)
										{
									?>
										
											<li class="page-item active"><a class="page-link" href="../All_Students.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
										<?php
										}
										else
										{
										?>
											<li class="page-item"><a class="page-link" href="../All_Students.php?page=<?php echo $i ?>"><?php echo $i ?></a></li>
									<?php
										}
									}
									
									// Next Button
									if($pageActive == $numberOfPages)
									{
									?>
										<li class="page-item disabled"><a class="page-link" href="../All_Students.php?page=<?php echo $nextPage ?>" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
									<?php
									}
									else
									{
									?>
										<li class="page-item"><a class="page-link" href="../All_Students.php?page=<?php echo $nextPage ?>" aria-label="Next"><span aria-hidden="true">Next</span></a></li>
									<?php
									}								
									?>	
									</ul>
								</nav>
							</div>
						</div>
					</form>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>