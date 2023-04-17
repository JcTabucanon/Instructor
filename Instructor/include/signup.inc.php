<?php
    // Create a database connection
    include_once '../dbConnection/db.php';

     // Check if the form was submitted
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
     // Retrieve form data
     $username = $_POST["username"];
     $password = $_POST["password"];

     // Perform server-side validation (e.g., checking for empty fields, validating password strength, etc.)
     // ...

     // Hash the password
     $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

     // Check the database connection
     // if ($conn->connect_error) {
     //      die("Connection failed: " . $conn->connect_error);
     // }

     // Prepare a SQL statement with a parameterized query to protect against SQL injection
     $stmt = $conn->prepare("INSERT INTO user (username, password) VALUES (?, ?)");
     $stmt->bind_param("ss", $username, $hashedPassword);

     // Execute the prepared statement
     if ($stmt->execute()) {
          // Redirect to success page
          echo '<script>alert("Account created successfully!");</script>';
          // header("Location: ../views/loginForm.php");
          // header("Location: ../views/signup.php");     

          // exit();
     } else {
          // Display an error message
          echo "Error: " . $stmt->error;
     }

     // Close the database connection
     $stmt->close();
     $conn->close();
     }
?>
