<?php
// Database configuration
$dbHost = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "students";

// Creating database connection
$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
//Checking connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
