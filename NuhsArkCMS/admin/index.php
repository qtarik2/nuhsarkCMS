<?php 
include "auth.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Nuh'sArcCMS</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="../assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/admin/navbar.css">
    <link rel="stylesheet" href="../assets/css/admin/sidebar.css">
    <link rel="stylesheet" href="../assets/css/admin/style.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light" style="margin: 5px;">
        <div class="container-fluid">
            <h4>Login Panel</h4><a class="navbar-brand" id="nuhsArkLogo" href="nuhsark/dashboard.php"></a><a class="navbar-brand" id="madrasatiLogo" href="madrasati/dashboard.php"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="index.html">Main Dashboard</a></li>
                    <li class="nav-item" role="presentation">
                        <div class="nav-item dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgba(0,0,0,0.5);">Account</a>
                            <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Profile</a><a class="dropdown-item" role="presentation" href="#">Change Password</a><a class="dropdown-item" role="presentation" href="#">Dashboard setting</a></div>
                        </div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">Logout</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="row no-gutters" style="background-color: #dddcdc;">
        <div class="col offset-1">
            <h3>Admin Dashboard</h3>
        </div>
    </div>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>