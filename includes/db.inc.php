<?php
$serverName = "localhost";
$dbUsername = "ztoxy";
$dbPassword = "watchdogs@me2";
$dbName = "web_login";
$port = 8111;

$conn = mysqli_connect($serverName, $dbUsername, $dbPassword, $dbName, $port);
if (!$conn) {
    die("Connection faild: " . mysqli_connect_error());
} else {
    // echo "It's working!";
}