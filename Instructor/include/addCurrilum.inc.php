<?php
// Database connection
include_once '../dbConnection/db.php';
session_start();
$totalUnits = 0;
$semester = '';
// Check if form is submitted
if (isset($_POST['submit'])) {
    // Get user input
    $course = $_POST['course'];
    $ylevel = $_POST['level'];
    $courseCode = $_POST['course_code'];
    $descTitle = $_POST['desc_title'];
    $instructorId = $_POST['ins_id'];
    $instructorName = $_POST['ins_name'];
    $lec = $_POST['lec'];
    $lab = $_POST['lab'];
    if(!empty($lec) && !empty($lab)){
        $totalUnits = $lec + $lab;
    }
    $sy = $_POST['sy'];
    if(!empty($_POST['semester'])){
        $semester = $_POST['semester'];
    }
    $adviser_id = $_SESSION['current_id'];
    $program_adviser = $_SESSION['current_user'];

    // Query to insert curriculum data
    $query = "INSERT INTO `curriculum`(`COURSE`, `YLEVEL`, `COURSE_CODE`, `DESCRIPTIVE_TITLE`, `INSTRUCTOR_ID`, `INSTRUCTOR_NAME`, `LEC`, `LAB`, `TOTAL_UNITS`, `SY`, `SEMESTER`, `ADVISER_ID`, `PROGRAM_ADVISER`) VALUES ('$course','$ylevel','$courseCode','$descTitle','$instructorId','$instructorName','$lec','$lab','$totalUnits','$sy','$semester','$adviser_id','$program_adviser')";

    $result = mysqli_query($conn, $query);
    if ($result) {
        // Display success message using custom alert
        echo "<script>
            var successAlert = document.createElement('div');
            successAlert.innerHTML = 'Curriculum added successfully.';
            successAlert.className = 'alert success';
            document.body.appendChild(successAlert);
            setTimeout(function() {
                successAlert.style.display = 'none';
            }, 3000); // Hide the alert after 3 seconds
        </script>";
    } else {
        // Display failure message using custom alert
        echo "<script>
            var failureAlert = document.createElement('div');
            failureAlert.innerHTML = 'Failed to create curriculum.';
            failureAlert.className = 'alert failure';
            document.body.appendChild(failureAlert);
            setTimeout(function() {
                failureAlert.style.display = 'none';
            }, 3000); // Hide the alert after 3 seconds
        </script>";
    }
    // Close database connection
}