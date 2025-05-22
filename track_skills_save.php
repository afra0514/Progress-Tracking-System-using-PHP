<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'progresspal');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$skill_name = $_POST['skill_name'];
$start_date = $_POST['start_date'];
$completion_date = $_POST['completion_date'];

// Insert data into database
$sql = "INSERT INTO skills (skill_name, start_date, completion_date) VALUES ('$skill_name', '$start_date', '$completion_date')";
if (mysqli_query($conn, $sql)) {
    echo "Skill added successfully!";
    header("Location: view_skills.php"); // Redirect to view_skills.php
    exit(); // Ensure the script stops after redirection
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
$conn->close();
?>
