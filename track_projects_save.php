<?php
include 'db_connection.php';

// Retrieve form data
$project_name = $_POST['project_name'];
$project_status = $_POST['project_status'];
$project_link = $_POST['project_link'];

// Insert into the database
$sql = "INSERT INTO projects (project_name, project_status, project_link) 
        VALUES ('$project_name', '$project_status', '$project_link')";

if (mysqli_query($connection, $sql)) {
    echo "Project successfully tracked!";
    header("Location: view_projects.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>
