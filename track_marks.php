<?php
// Include database connection
include('db_connection.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form values
    $semester = $_POST['semester'];
    $courseType = $_POST['courseType'];

    // Optionally, you can store or process the form data in your database

    // Redirect based on course type
    if ($courseType === 'theory') {
        header('Location: theory.php');
    } else if ($courseType === 'lab') {
        header('Location: lab.php');
    }
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Marks | Progress Pal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
        <h2 class="text-center mb-4">Track Marks</h2>
        <form id="trackMarksForm" method="POST">
            <!-- Semester Selection -->
            <div class="mb-3">
                <label for="semester" class="form-label">Select Semester</label>
                <select class="form-control" id="semester" name="semester" required>
                    <option value="semester1">1st</option>
                    <option value="semester2">2nd</option>
                    <option value="semester3">3rd</option>
                    <option value="semester4">4th</option>
                    <option value="semester5">5th</option>
                    <option value="semester6">6th</option>
                    <option value="semester7">7th</option>
                    <option value="semester8">8th</option>
                </select>
            </div>

            <!-- Course Type Selection -->
            <div class="mb-3">
                <label for="courseType" class="form-label">Course Type</label>
                <select class="form-control" id="courseType" name="courseType" required>
                    <option value="theory">Theory</option>
                    <option value="lab">Lab</option>
                </select>
            </div>

            <!-- Buttons: Submit on the left, Target List on the right -->
            <div class="row">
                <div class="col-6">
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
                </div>
                <div class="col-6">
                    <a href="target.php" class="btn btn-info w-100">Target List</a>
                </div>
            </div>
        </form>

        <a href="user-dashboard.php" class="btn btn-secondary mt-5">Back to Dashboard</a>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
