<?php
   require_once '../dbConnection/db.php';
// Start the session
session_start(); 

// Check if the login user session variable is set
if (!isset($_SESSION['current_id']) && !isset($_SESSION['current_user'])) {
    header("Location: ../views/loginForm.php"); // redirects to the login page
    exit;
  }