<?php
// Include database connection
include 'db_connection.php';

// Check if the form is submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $role = $_POST['role'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validate input fields
    if (empty($role) || empty($name) || empty($email) || empty($password)) {
        echo "All fields are required!";
        exit;
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Query to insert new user
    $query = "INSERT INTO users (name, email, password, role) VALUES ('$name', '$email', '$hashedPassword', '$role')";
    
    if (mysqli_query($connection, $query)) {
        echo "User registered successfully!";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}
?>
