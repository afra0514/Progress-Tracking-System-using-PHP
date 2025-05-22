<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom shadow-sm">
    <div class="container-fluid">
        <!-- Logo aligned to the leftmost corner -->
        <a class="navbar-brand" href="#" style="margin-left: 0; padding-left: 0;">
            <img src="img/log.png" alt="Logo" style="width: 50px; height: 50px; border-radius: 50%;">
        </a>

        <!-- Navbar links aligned to the right -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about-us">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#benefits">Benefits</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact-us">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="privacy-terms.html">Privacy & Terms</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-5">
    <h4 class="text-center">Forgot Password</h4>
    <form id="emailForm">
        <div class="mb-3">
            <label for="email" class="form-label">Enter your email address</label>
            <input type="email" class="form-control" id="email" required>
        </div>
        <button type="submit" class="btn btn-primary w-100">Send Code</button>
    </form>
</div>
    <!-- Footer -->
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
document.getElementById('emailForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent default form submission

    const email = document.getElementById('email').value;

    const xhr = new XMLHttpRequest();
    xhr.open("POST", "send_code.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onload = function() {
        if (xhr.status === 200) {
            const response = JSON.parse(xhr.responseText);
            if (response.status === 'success') {
                alert('Verification code sent to your email!');
                window.location.href = 'verify_code.php'; // Redirect to verify code page
            } else {
                alert(response.message); // Show error message
            }
        }
    };

    xhr.send(`email=${email}`);
});
</script>

</body>
</html>
