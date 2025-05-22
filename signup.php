<?php
// Start the session
session_start();

// Include database connection
include 'db_connection.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> <!-- Keeping your custom CSS -->
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm">
    <div class="container-fluid">
        <!-- Logo aligned to the leftmost corner -->
        <a class="navbar-brand" href="userdash.php" style="margin-left: 0; padding-left: 0;">
            <img src="img/log.png" alt="Logo" style="width: 50px; height: 50px; border-radius: 50%;">
        </a>

        <!-- Navbar links aligned to the right -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="benefit.php">Benefits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pri_term.php">Privacy & Terms</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-5">
        <img src="img/log.png" alt="Logo" class="mb-5 d-block mx-auto" style="width: 100px; height: 100px;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h4 class="text-center">Sign Up</h4>
                <form id="signupForm">
                    <!-- Role Selection -->
                    <div class="mb-3">
                        <label for="userRole" class="form-label">Select Role</label>
                        <select class="form-control" id="userRole" required>
                            <option value="">Select Role</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>

                    <!-- Name -->
                    <div class="mb-3">
                        <label for="signupName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="signupName" required>
                    </div>

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="signupEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="signupEmail" required>
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="signupPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="signupPassword" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm w-100">Sign Up</button>
                </form>

                <p class="text-center mt-3">Already have an account? <a href="login.php" class="btn btn-link">Log In</a></p>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <!-- Contact Us Section -->
                <div class="col-md-6 col-lg-7 mb-3">
                    <h5><strong>Contact Us</strong></h5>
                    <p>Email: <a href="mailto:afracse05@gmail.com">afracse05@gmail.com</a></p>
                    <p>Phone: +8801755573659</p>
                </div>

                <!-- Quick Links Section -->
                <div class="col-md-6 col-lg-4 mb-3">
                    <h5><strong>Quick Links</strong></h5>
                    <ul class="list-unstyled">
                        <li><a href="pri_term.php">Privacy Policy</a></li>
                        <li><a href="pri_term.php">Terms and Conditions</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center mt-3">
                    <p>&copy; 2024 Syeda Afra Anam. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script>
        document.getElementById('signupForm').addEventListener('submit', function(e) {
            e.preventDefault(); // Prevent default form submission

            const role = document.getElementById('userRole').value;
            const name = document.getElementById('signupName').value;
            const email = document.getElementById('signupEmail').value;
            const password = document.getElementById('signupPassword').value;

            const xhr = new XMLHttpRequest();
            xhr.open("POST", "signup_save.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onload = function() {
                if (xhr.status === 200) {
                    alert(xhr.responseText); // Show success/error message
                    if (xhr.responseText.includes('success')) {
                        window.location.href = 'login.php'; // Redirect to login
                    }
                }
            };

            xhr.send(`role=${role}&name=${name}&email=${email}&password=${password}`);
        });
    </script>
</body>
</html>
