<?php
// start session for authentication
session_start(); 

if($_SERVER["REQUEST_METHOD"] == "POST") {
   // connect to database
   require_once '../dbConnection/db.php';

   // get input values
   $USERNAME = mysqli_real_escape_string($conn,$_POST['USERNAME']);
   $PASSWORD = mysqli_real_escape_string($conn,$_POST['PASSWORD']);

   // query database for user
   $sql = "SELECT * FROM USERS WHERE USERNAME = '$USERNAME' and PASSWORD = '$PASSWORD'";
   $result = mysqli_query($conn,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);
   
   // if user is found, start session and redirect to instructor dashboard
   if($count == 1) {
      $ID=$row['ID'];
      $USERNAME=$row['USERNAME'];
      $ROLE=$row['ROLE'];
      $_SESSION['current_id'] = $ID;
      $_SESSION['current_user'] = $USERNAME;
      $_SESSION['current_role'] = $ROLE;

      if($ROLE == "admin"){
         header("Location: admin.php");
         exit();
      }
      elseif($ROLE == "instructor"){
         header("location: home.php");
         exit();
      }
      elseif($ROLE == "student"){
         header("Location: student.php");
         exit();
      }
   } else {
      $error = "Your Login Name or Password is invalid";
   }
   mysqli_close($conn);
}