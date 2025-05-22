<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'progresspal');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the CV ID
$id = $_GET['id'];

// Fetch the current CV data
$sql = "SELECT * FROM cv WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$cv = $result->fetch_assoc();
$stmt->close();

// If the form is submitted, update the CV
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

    $update_sql = "UPDATE cv SET 
        name = ?, 
        email = ?, 
        phone = ?, 
        address = ?, 
        skills = ?, 
        experience = ?, 
        education = ?, 
        projects = ?, 
        hobbies = ?, 
        volunteer_work = ?
        WHERE id = ?";

    $update_stmt = $conn->prepare($update_sql);
    $update_stmt->bind_param(
        "ssssssssssi", 
        $name, $email, $phone, $address, $skills, $experience, $education, $projects, $hobbies, $volunteer_work, $id
    );

    if ($update_stmt->execute()) {
        header("Location: view_cv.php");
        exit();
    } else {
        echo "Error updating CV: " . $conn->error;
    }

    $update_stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update CV | Progress Pal</title>
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
        <h2 class="mt-5">Update CV</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?php echo htmlspecialchars($cv['name']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo htmlspecialchars($cv['email']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo htmlspecialchars($cv['phone']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php echo htmlspecialchars($cv['address']); ?>" required>
            </div>
            <div class="mb-3">
                <label for="skills" class="form-label">Skills</label>
                <textarea class="form-control" id="skills" name="skills" rows="3" required><?php echo htmlspecialchars($cv['skills']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="experience" class="form-label">Experience</label>
                <textarea class="form-control" id="experience" name="experience" rows="3" required><?php echo htmlspecialchars($cv['experience']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="education" class="form-label">Education</label>
                <textarea class="form-control" id="education" name="education" rows="3" required><?php echo htmlspecialchars($cv['education']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="projects" class="form-label">Projects</label>
                <textarea class="form-control" id="projects" name="projects" rows="3"><?php echo htmlspecialchars($cv['projects']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="hobbies" class="form-label">Hobbies</label>
                <textarea class="form-control" id="hobbies" name="hobbies" rows="3"><?php echo htmlspecialchars($cv['hobbies']); ?></textarea>
            </div>
            <div class="mb-3">
                <label for="volunteer_work" class="form-label">Volunteer Work</label>
                <textarea class="form-control" id="volunteer_work" name="volunteer_work" rows="3"><?php echo htmlspecialchars($cv['volunteer_work']); ?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
            <a href="view_cv.php" class="btn btn-secondary">Cancel</a>
        </form>
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
