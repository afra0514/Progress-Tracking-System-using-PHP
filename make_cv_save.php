<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'progresspal');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$skills = $_POST['skills'];
$experience = $_POST['experience'];
$education = $_POST['education'];
$projects = $_POST['projects'];
$hobbies = $_POST['hobbies'];
$volunteer_work = $_POST['volunteer_work'];

// Insert data into database
$sql = "INSERT INTO cv (name, email, phone, address, skills, experience, education, projects, hobbies, volunteer_work) 
        VALUES ('$name', '$email', '$phone', '$address', '$skills', '$experience', '$education', '$projects', '$hobbies', '$volunteer_work')";

if (mysqli_query($conn, $sql)) {
    echo "CV saved successfully!";
    header("Location: view_cv.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
$conn->close();
?>
