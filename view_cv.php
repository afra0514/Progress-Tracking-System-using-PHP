<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'progresspal');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch CV data
$sql = "SELECT * FROM cv";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View CVs | Progress Pal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
    <div class="container">
        <h2 class="mt-5">Saved CVs</h2>
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo htmlspecialchars($row['name']); ?></h5>
                        <p class="card-text"><strong>Email:</strong> <?php echo htmlspecialchars($row['email']); ?></p>
                        <p class="card-text"><strong>Phone:</strong> <?php echo htmlspecialchars($row['phone']); ?></p>
                        <p class="card-text"><strong>Address:</strong> <?php echo htmlspecialchars($row['address']); ?></p>
                        <p class="card-text"><strong>Skills:</strong> <?php echo htmlspecialchars($row['skills']); ?></p>
                        <p class="card-text"><strong>Experience:</strong><br><?php echo nl2br(htmlspecialchars($row['experience'])); ?></p>
                        <p class="card-text"><strong>Education:</strong><br><?php echo nl2br(htmlspecialchars($row['education'])); ?></p>
                        <p class="card-text"><strong>Projects:</strong><br><?php echo nl2br(htmlspecialchars($row['projects'])); ?></p>
                        <p class="card-text"><strong>Hobbies:</strong><br><?php echo nl2br(htmlspecialchars($row['hobbies'])); ?></p>
                        <p class="card-text"><strong>Volunteer Work:</strong><br><?php echo nl2br(htmlspecialchars($row['volunteer_work'])); ?></p>
                        <a href="update_cv.php?id=<?php echo $row['id']; ?>" class="btn btn-warning">Update CV</a>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No CVs found. <a href="make_cv.php">Create one now</a>.</p>
        <?php endif; ?>
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
</body>
</html>

<?php $conn->close(); ?>
