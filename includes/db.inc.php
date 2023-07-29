<?php
$serverName = "localhost";
$dbUsername = "vidu";
$dbPassword = "vidumini2001";
$dbName = "web-project";
$port = 8111;

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName, $port);
if (!$conn) {
    die("Connection faild: " . mysqli_connect_error());
} else {
    // echo "It's working!";
}