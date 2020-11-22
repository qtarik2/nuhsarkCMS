<?php
/*

*/

// include("auth.php"); //include auth.php file on all secure pages ?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nuh's Ark Islamic Montessori School</title>
<style type="text/css">
.style9 {
				background-color: #FFFFFF;
}
a {
				color: #FF0000;
}
a:visited {
				color: #FF0000;
}
a:hover {
				color: #800080;
}
.style13 {
				font-family: Calibri;
}
.style19 {
				color: #FFFFFF;
				font-family: Calibri;
}
</style>
</head>
<body bgcolor="#ffffff" style="margin: 0; color: #000000;">

<div id="header">
								<table cellpadding="5" cellspacing="0" style="width: 100%" align="left" class="style9">
												<!-- MSTableType="layout" -->
												<tr>
<?php
require('db.php');
$count=1;
	$sel_query1="SELECT header FROM pageinfo WHERE ID='1'";
	$result1 = mysqli_query($con,$sel_query1);
	while($row = mysqli_fetch_assoc($result1)) { 
	echo $row["header"];
	}
?>

												</tr>
								</table>
</div>

<div id="nav">

<table cellpadding="0" cellspacing="0" style="width: 100%" align="left">
				<!-- MSTableType="layout" -->
				<tr>
								<td style="height: 30px" class="style9" valign="top">
								<table cellpadding="5" cellspacing="0" style="width: 100%" align="left">
												<!-- MSTableType="layout" -->
												<tr>
																<td style="height: 30px" valign="top" class="style19">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">NUH'S ARK & MADRASATI</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">WELCOME</a></li>
    </ul>
 	<ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">NUH'S ARK
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="nuhsark_parents/login.php">PARENTS ACCESS</a></li>
          <li><a href="nuhsark_staffs/login.php">STAFFS ACCESS</a></li>
        </ul>
      </li>
     </ul>
     <ul class="nav navbar-nav">
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">MADRASATI
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="css/madrasati_parents/login.php">PARENTS ACCESS</a></li>
          <li><a href="madrasati_staffs/login.php">STAFFS ACCESS</a></li>
        </ul>
      </li>
     </ul>
    <ul class="nav navbar-nav">
      <li><a href="admin/login.php">ADMINISTRATOR</a></li>
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>NUH'S ARK</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span>MADRASATI</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span>LOGIN</a></li>
    </ul>
  </div>
</nav>
												</tr>
								</table>
								</td>
				</tr>
</table>

</div>

<div id="content">
<table cellpadding="0" cellspacing="0" style="width: 100%" align="left" class="style9">
				<!-- MSTableType="layout" -->
				<tr>
								<td style="height: 400px" valign="top" class="style9">
								<table cellpadding="5" cellspacing="0" style="width: 100%" align="left" class="style9">
												<!-- MSTableType="layout" -->
												<tr>
																<td style="height: 400px" class="style13" valign="top">
																<table style="width: 100%" cellspacing="0" cellpadding="5">
																				<tr>
																								<td class="style16">
																								<table class="table">
																												<tr>
																																<td>AUTHORISED PERSONNEL ONLY</td>
																												</tr>
																												<tr>
																																<td>&nbsp;</td>
																												</tr>
																												<tr>
																																<td class="style16">
																<img alt="" src="images/nuhsarklogo1.jpg" width="177" height="120"></td>
																												</tr>
																												<tr>
																																<td class="style16">
																&gt; <a href="nuhsark_parents/index.php">LOGON AS PARENTS</a></td>
																												</tr>
																												<tr>
																																<td class="style16">
																&nbsp;</td>
																												</tr>
																												<tr>
																																<td class="style16">
																<img alt="" src="images/logo_madrasati_v3.jpg" width="168" height="160"></td>
																												</tr>
																												<tr>
																																<td class="style16">
																&gt; 
																<a href="css/madrasati_parents/index.php">LOGON AS 
																PARENTS</a></td>
																												</tr>
																												<tr>
																																<td class="style16">
																&nbsp;</td>
																												</tr>
																												<tr>
																																<td class="style16">
																&nbsp;</td>
																												</tr>
																												</table>
																								<br>
																								</td>
																				</tr>
																				<tr>
																								<td class="style16">&nbsp;</td>
																				</tr>
																</table>
																</td>
												</tr>
								</table>
								</td>
				</tr>
</table>
</div>

<div id="footer">
<table cellpadding="0" cellspacing="0" style="width: 100%" align="left">
				<!-- MSTableType="layout" -->
				<tr>
								<td style="height: 30px" class="style9" valign="top">
								<table cellpadding="5" cellspacing="0" style="width: 100%" align="left">
												<!-- MSTableType="layout" -->
												<tr>
																<td style="height: 30px" valign="top" class="style19">
<?php
require('db.php');
$count=1;
	$sel_query1="SELECT footer FROM pageinfo WHERE ID='1'";
	$result1 = mysqli_query($con,$sel_query1);
	while($row = mysqli_fetch_assoc($result1)) { 
	echo $row["footer"];
	}
?>
</td>
												</tr>
								</table>
								</td>
				</tr>
</table>
</div>
</body>
</html>