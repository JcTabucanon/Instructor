<?php
// Check if the form has been submitted
if (isset($_POST['submit'])) {
  // Get the values from the form
  $id = $_POST['id'];
  $course_code = $_POST['course_code'];
  $descriptive_title = $_POST['descriptive_title'];
  $instructor_name = $_POST['instructor_name'];
  $lec = $_POST['lec'];
  $lab = $_POST['lab'];
  $total_units = $_POST['total_units'];

  // Perform the update query
  // Replace table_name and column_names with your own values
  $query = "UPDATE CURRICULUM SET 
            course_code = '$course_code', 
            descriptive_title = '$descriptive_title', 
            instructor_name = '$instructor_name', 
            lec = '$lec', 
            lab = '$lab', 
            total_units = '$total_units' 
            WHERE id = $id";

  // Execute the query
  // Replace $conn with your own database connection variable
  if (mysqli_query($conn, $query)) {
    // Redirect to the previous page with a success message
    header("Location: ../previous_page.php?message=update_success");
    exit();
  } else {
    // Redirect to the previous page with an error message
    header("Location: ../previous_page.php?message=update_error");
    exit();
  }
} else {
  // If the form has not been submitted, redirect to the previous page
  header("Location: ../previous_page.php");
  exit();
}
