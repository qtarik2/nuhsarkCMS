<?php

// File Name	: require_once.php
// Remarks		: This file is for server configuration

// $link = mysqli_connect("localhost", "dbuser", "dbpassword", "dbname");

// For Testing Only
// $link = mysqli_connect("localhost", "mywork", "mywork@2015", "mywork");

// For Live Only
// $link = mysqli_connect("localhost:3306", "cabincr1_simflightkl", "Sfkl#2019", "cabincr1_simflightkl");
$link = mysqli_connect("localhost:3306", "simflightkl", "Sfkl#2019", "simflightkl_promo");

/* This line for debugging purposes

if (!$link) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;
*/

// Connection remains OPEN
?><head><title>Nuh's Ark Islamic Montessori School</title></head>