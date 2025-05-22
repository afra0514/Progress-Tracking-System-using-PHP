<?php
include 'db_connection.php';

$course_name = $_POST['course_name'];
$course_code = $_POST['course_code'];
$lab_assessment_marks = $_POST['lab_assessment_marks'];
$midterm_marks = $_POST['midterm_marks'];
$target_marks = $_POST['target_marks'];

$total_obtained = $lab_assessment_marks + $midterm_marks;
$remaining_marks = max($target_marks - $total_obtained, 0);

$sql = "INSERT INTO lab_marks (course_name, course_code, lab_assessment_marks, midterm_marks, target_marks, remaining_marks) 
        VALUES ('$course_name', '$course_code', $lab_assessment_marks, $midterm_marks, $target_marks, $remaining_marks)";

if (mysqli_query($connection, $sql)) {
    header("Location: target.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>
