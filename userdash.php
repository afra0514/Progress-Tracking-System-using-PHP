<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Start the session
session_start();
// Include database connection
include 'db_connection.php';
// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php"); // Redirect to login if not logged in
    exit;
}

// Fetch user details securely using prepared statements
$user_id = $_SESSION['user_id'];
$query = "SELECT * FROM users WHERE id = ?";
$stmt = $connection->prepare($query);
$stmt->bind_param("i", $user_id); // Bind user_id as an integer
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

if (!$user) {
    echo "Error: User not found.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard | Progress Pal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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
        <h2 class="mb-4 text-center">Welcome to User Dashboard</h2>
        <p class="text-center">Hello, <?php echo htmlspecialchars($user['name']); ?>!</p>
    <!-- Row 1: Track Marks, Track Projects -->
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
                    <h5 class="card-title">Track Marks</h5>
                    <p class="card-text">Monitor your academic performance.</p>
                    <a href="track_marks.php" class="btn btn-success">Go</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <i class="fas fa-tasks fa-3x text-info mb-3"></i>
                    <h5 class="card-title">Track Projects</h5>
                    <p class="card-text">Manage your project progress efficiently.</p>
                    <a href="track_projects.php" class="btn btn-info">Go</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 2: Make CV, Track Skills -->
    <div class="row row-cols-1 row-cols-md-2 g-4 mt-4">
        <div class="col">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <i class="fas fa-file-alt fa-3x text-primary mb-3"></i>
                    <h5 class="card-title">Make CV</h5>
                    <p class="card-text">Set and follow through on your personal information.</p>
                    <a href="make_cv.php" class="btn btn-primary">Go</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <i class="fas fa-lightbulb fa-3x text-warning mb-3"></i>
                    <h5 class="card-title">Track Skills</h5>
                    <p class="card-text">Track of skills you have learned or plan to learn.</p>
                    <a href="track_skills.php" class="btn btn-warning">Go</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Row 3: Edit Profile (Centered) -->
    <div class="d-flex justify-content-center mt-4">
        <div class="card text-center shadow-sm" style="width: 18rem;">
            <div class="card-body">
                <i class="fas fa-user-edit fa-3x text-secondary mb-3"></i>
                <h5 class="card-title">Edit Profile</h5>
                <p class="card-text">Update your personal information and preferences.</p>
                <a href="edit_profile.php" class="btn btn-secondary">Edit</a>
            </div>
        </div>
    </div>

    <!-- Row 4: Log Out Button (Centered) -->
    <div class="d-flex justify-content-center mt-4">
        <a href="logout.php" class="btn btn-danger">
            <i class="fas fa-sign-out-alt"></i> Log Out
        </a>
    </div>
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
