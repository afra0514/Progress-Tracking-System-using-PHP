<?php
// Database connection settings for ProgressPal
$host = "localhost"; // Database server
$user = "root"; // Database username
$password = ""; // Database password (update if needed)
$db_name = "ProgressPal"; // Name of the database

// Create connection
$connection = mysqli_connect($host, $user, $password, $db_name);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
