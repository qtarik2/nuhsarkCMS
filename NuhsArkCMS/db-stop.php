<?php
/*

*/

// $con = mysqli_connect("localhost:3306","cabincr1_ccaklcms","ccaklcms#2020","cabincr1_ccaklcms");
$con = mysqli_connect("localhost:3306","mirakama_ccaklcms","ccaklcms#2020","mirakama_ccaklcms");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>