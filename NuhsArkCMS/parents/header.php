<?php
session_start();

if(!isset($_SESSION["username"]))
{
	header("Location: login.php");
	exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nuh's Ark Islamic Montessori School</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="../assets/css/nuhsArkParents/styles.css">
  <link rel="stylesheet" href="../assets/css/nuhsArkParents/navbar.css">
  <link rel="stylesheet" href="../assets/css/nuhsArkParents/footer.css">
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light" style="margin: 1px;background-color: rgba(248,249,250,0);">
        <div class="container-fluid"><a class="navbar-brand" id="nuhsArkLogo" href="index.php"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgba(0,0,0,0.5);">Account</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="student_manage-account.php">Manage Account</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a href="logout.php" class="btn btn-dark">Logout</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <nav class="navbar navbar-light navbar-expand-md bg-white">
        <div class="container-fluid"><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-2">
                <ul class="nav navbar-nav">
                    <li class="nav-item active" role="presentation"><a class="nav-link" href="index.php">Dashboard</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Nuh's Ark</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="account-statement.php">Account Statement</a><a class="dropdown-item" role="presentation" href="invoice_select-invoice.php">Invoices</a><a class="dropdown-item" role="presentation" href="payment_summary.php">Payments</a></div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>