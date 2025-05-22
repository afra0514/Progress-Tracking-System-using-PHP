<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab Marks Calculation | Progress Pal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Lab Marks Calculation</h2>
        <form action="lab_save.php" method="POST">
            <div class="mb-3">
                <label for="courseName" class="form-label">Course Name</label>
                <input type="text" class="form-control" name="course_name" required>
            </div>
            <div class="mb-3">
                <label for="courseCode" class="form-label">Course Code</label>
                <input type="text" class="form-control" name="course_code" required>
            </div>
            <div class="mb-3">
                <label for="labAssessmentMarks" class="form-label">Lab Assessment Marks (10)</label>
                <input type="number" class="form-control" name="lab_assessment_marks" max="10" min="0" required>
            </div>
            <div class="mb-3">
                <label for="midtermMarks" class="form-label">Midterm Marks (30)</label>
                <input type="number" class="form-control" name="midterm_marks" max="30" min="0" required>
            </div>
            <div class="mb-3">
                <label for="targetMarks" class="form-label">Target Marks (40-100)</label>
                <input type="number" class="form-control" name="target_marks" max="100" min="40" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
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
