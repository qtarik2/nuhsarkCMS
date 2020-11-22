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
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md bg-light" style="margin: 1px;">
        <div class="container-fluid">
            <h4>Login Panel</h4><a class="navbar-brand" id="madrasatiLogo" href="../madrasati/dashboard.php"></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#">Dashboard</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgba(0,0,0,0.5);">Account</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="#">Profile</a><a class="dropdown-item" role="presentation" href="#">Change Password</a><a class="dropdown-item" role="presentation" href="#">Third Item</a></div>
                    </li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../logout.php">Logout</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <nav class="navbar navbar-light navbar-expand-md bg-white">
        <div class="container-fluid"><a class="navbar-brand" href="#">NuhsArk</a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-2">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../index.php">Hybrid Dashboard</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Expenses</a>
                        <div class="dropdown-menu" role="menu">
                            <div class="nav-item dropright dropdown-submenu"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Monthly Bills</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="account-transaction_add-transaction.php">Add Data</a><a class="dropdown-item" role="presentation" href="account-transaction_summary.php">Edit/Update Data</a></div>
                            </div>
                            <div class="nav-item dropright dropdown-submenu"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Annual Bills</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="account-transaction_add-transaction.php">Add Data</a><a class="dropdown-item" role="presentation" href="account-transaction_annual_summary.php">Edit/Update Data</a></div>
                            </div>
                            <div class="nav-item dropright dropdown-submenu"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Payslips</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="payslip_select-staff.php">Add Data</a><a class="dropdown-item" role="presentation" href="payslip_summary.php">Edit/Update Data</a></div>
                            </div><a class="dropdown-item" role="presentation" href="report_expense-report.php">Expense Report</a></div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Incomes</a>
                        <div class="dropdown-menu" role="menu">
                            <div class="nav-item dropright dropdown-submenu"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Invoices</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="invoice_select-student.php">Add Data</a><a class="dropdown-item" role="presentation" href="invoice_select-invoice.php">Edit/Update Data</a></div>
                            </div>
                            <div class="nav-item dropright dropdown-submenu"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Payments</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="payment_select-student.php">Add Data</a><a class="dropdown-item" role="presentation" href="payment_summary.php">Edit/Update Data</a></div>
                            </div>
                            <div class="nav-item dropright dropdown-submenu"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Other Incomes</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="account-transaction_incomes_add-transaction.php">Add Data</a><a class="dropdown-item" role="presentation" href="account-transaction_incomes.php">Edit/Update Data</a></div>
                            </div>
                            <div class="nav-item dropright dropdown-submenu"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Student Statement</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="account-statement.php">Student Statement Report</a><a class="dropdown-item" role="presentation" href="account-statement_search.php">Search</a></div>
                            </div>
                            <div class="nav-item dropright dropdown-submenu"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Invoice Status</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="invoice_paid.php">Paid</a><a class="dropdown-item" role="presentation" href="invoice_partial.php">Partial Paid</a><a class="dropdown-item" role="presentation" href="invoice_unpaid.php">Unpaid</a></div>
                            </div><a class="dropdown-item" role="presentation" href="report_payment-report.php">Income Statement Report</a></div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Students</a>
                        <div class="dropdown-menu" role="menu">
                            <div class="nav-item dropright dropdown-submenu"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Student Management</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="student_new-account.php">Add Data</a><a class="dropdown-item" role="presentation" href="student_manage-account.php">Edit/Update Data</a></div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Staffs</a>
                        <div class="dropdown-menu" role="menu">
                            <div class="nav-item dropright dropdown-submenu"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Staffs Management</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="staff_new-account.php">Add Data</a><a class="dropdown-item" role="presentation" href="staff_manage-account.php">Edit/Update Data</a><a class="dropdown-item" role="presentation" href="staff-directory.php">Staff Directory</a></div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Reports</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="report_account-statement-report.php">Accounts Statement</a><a class="dropdown-item" role="presentation" href="report_account-statement-report-annual.php">Annual Accounts Statement</a><a class="dropdown-item" role="presentation" href="account-statement.php">Students Statement</a>
                            <a
                                class="dropdown-item" role="presentation" href="report_expense-report.php">Expenses Statement</a><a class="dropdown-item" role="presentation" href="report_payment-report.php">Payments Statement</a><a class="dropdown-item" role="presentation" href="report_payslip-report.php">Payslips Statement</a><a class="dropdown-item" role="presentation" href="report_annual-fees-report.php">Annual Fees Report</a>
                                <a
                                    class="dropdown-item" role="presentation" href="report_term-fees-report.php">Term Fees Report</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="row no-gutters" id="Content">
        <div class="col">
            <div class="DashboardInfo">
                <h3>Nuhs Ark Dashboard</h3><a id="home" href="#">Home</a><i class="fa fa-chevron-right"></i><a href="#">Dashboard</a></div>
            <div class="container-fluid contentBody">
                <div class="row" id="contentItems">
                    <div class="col-md-3 item">
                        <p>Paragraph</p>
                    </div>
                    <div class="col-md-3 item">
                        <p>Paragraph</p>
                    </div>
                    <div class="col-md-3 item">
                        <p>Paragraph</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>