<?php
// Include any required configuration or functionality files if needed.
// For example, include 'config.php'; if you have a settings file.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Progress Pal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet"> <!-- Bootstrap Icons -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container welcome-section">
        <img src="img/log.png" alt="Logo" class="mb-5" style="width: 100px; height: 100px;">
        <h1>Welcome to Progress Pal</h1>
        <p class="mb-4">Your personal self-progress tracking system. Get started to track and manage your goals, skills, hobbies, and more!</p>
        
        <!-- Cards for About and Benefits -->
        <div class="row">
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="bi bi-info-circle-fill text-primary"></i> About Us
                        </h4>
                        <p class="card-text">Learn more about Progress Pal and how it can help you achieve your goals.</p>
                        <a href="about.php" class="btn btn-success">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h4 class="card-title">
                            <i class="bi bi-gift-fill text-warning"></i> Benefits
                        </h4>
                        <p class="card-text">Discover the benefits of using Progress Pal for tracking your progress.</p>
                        <a href="benefits.php" class="btn btn-success">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sign Up / Log In Button -->
        <div class="action-button">
            <a href="login.php" class="btn btn-primary btn-lg">Get Started</a>
        </div>
    </div>
    
    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <!-- Contact Us Section -->
                <div class="col-md-6 col-lg-7 mb-3">
                    <h5><strong>Contact Us</strong></h5>
                    <p style="margin-bottom: 5px;">Email: <a href="mailto:afracse05@gmail.com">afracse05@gmail.com</a></p>
                    <p style="margin-top: 0; margin-bottom: 5px;">Phone: 01755573659</p>
                </div>
                
                <!-- Quick Links Section -->
                <div class="col-md-6 col-lg-4 mb-3">
                    <h5><strong>Quick Links</strong></h5>
                    <ul class="list-unstyled">
                        <li><a href="privacy-terms.php">Privacy Policy</a></li>
                        <li><a href="privacy-terms.php">Terms and Conditions</a></li>
                    </ul>
                </div>
            </div>
            <!-- Copyright Section -->
            <div class="row">
                <div class="col-12 text-center mt-3">
                    <p style="margin-bottom: 5px;">&copy; 2024 Syeda Afra Anam.</p>
                    <p style="margin-top: 0; margin-bottom: 5px;">All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
