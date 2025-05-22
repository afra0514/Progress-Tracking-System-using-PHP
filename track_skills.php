<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track Skills | Progress Pal</title>
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
    <div class="container">
        <img src="img/log.png" alt="Logo" class="mb-5 d-block mx-auto" style="width: 100px; height: 100px;">
        <h2 class="mt-5">Track Skills</h2>
        <form action="track_skills_save.php" method="POST">
            <div class="mb-3">
                <label for="skill" class="form-label">Skill Name</label>
                <input type="text" class="form-control" id="skill" name="skill_name" placeholder="Enter skill name" required>
            </div>
            <div class="mb-3">
                <label for="startDate" class="form-label">Start Date</label>
                <input type="date" class="form-control" id="startDate" name="start_date" required>
            </div>
            <div class="mb-3">
                <label for="completionDate" class="form-label">Completion Date</label>
                <input type="date" class="form-control" id="completionDate" name="completion_date" required>
            </div>
           <!-- Buttons -->
           <div class="row">
            <div class="col-6">
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </div>
            <div class="col-6">
                <a href="view_skills.php" class="btn btn-info w-100">Skill List</a>
            </div>
        </div>
        </form>
        <a href="userdash.php" class="btn btn-secondary mt-5">Back to Dashboard</a>
    </div>
    <!-- Footer Section -->
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
