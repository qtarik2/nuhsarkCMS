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
                        <div id="search"><input type="search" placeholder="Search by Student ID..."><input type="search" placeholder="Search by Name..."><input type="search" placeholder="Search by MYKID..."><button class="btn btn-primary" type="button">Search</button></div>
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
$results_per_page = 10;

// Find out the number of results stored in database
$sql = "SELECT * FROM students";
$result = mysqli_query($con, $sql);
$number_of_results = mysqli_num_rows($result);

// Determine number of total page available
$number_of_pages = ceil($number_of_results / $results_per_page);

// determine which page number visitor is currently on
if(!isset($_GET['page']))
{
	$page = 1;
} 
else 
{
	$page = $_GET['page'];
}

// Determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;

// Display the links to the pages
for($page=1; $page <= $number_of_pages; $page++)
{
	echo '<a href="All_Student.php?page=' . $page . '">' . $page . '</a>';
}

// Retrive selected results from database and display them on page
$sql = "SELECT * FROM students LIMIT ". $this_page_first_result .',' . $results_per_page ;
$result = mysqli_query($con, $sql);

while($row = mysqli_fetch_array($result)) 
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
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../../assets/js/Dropdown.js"></script>
</body>

</html>