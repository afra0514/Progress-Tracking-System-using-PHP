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
    <title>User Management Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Font Awesome Icons CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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
    <h2 class="mb-4 text-center">Admin Dashboard</h2>

    <!-- Display Admin's Name (optional) -->
    <p class="text-center">Hello, <?php echo htmlspecialchars($user['name']); ?>!</p>

    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <!-- Add User Card -->
        <div class="col">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-user-plus"></i> Add User</h5>
                    <p class="card-text">Create a new user profile and manage their details.</p>
                    <a href="add_user.php" class="btn btn-success">Add</a>
                </div>
            </div>
        </div>
        
        <!-- Manage Users Card -->
        <div class="col">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-users-cog"></i> Manage Users</h5>
                    <p class="card-text">Update user profiles or change their access status.</p>
                    <a href="manage_users.php" class="btn btn-warning">Manage</a>
                </div>
            </div>
        </div>
        
        <!-- User List Card -->
        <div class="col">
            <div class="card text-center shadow-sm">
                <div class="card-body">
                    <h5 class="card-title"><i class="fas fa-list-alt"></i> User List</h5>
                    <p class="card-text">View the list of all users in the system.</p>
                    <a href="user_list_view.php" class="btn btn-info">View List</a>
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
