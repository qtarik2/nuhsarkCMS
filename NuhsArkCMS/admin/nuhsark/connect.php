 <?php
$con = mysqli_connect("localhost:3306","nuhsark_cms","Nuhs#cms@2020","nuhsark_cms");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?> 