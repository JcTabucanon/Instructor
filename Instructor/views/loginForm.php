<?php 
   // require_once '../include/verify.inc.php';
   require_once '../include/login.inc.php';

// Check if the login user session variable is set
   if (isset($_SESSION['current_id']) && isset($_SESSION['current_user'])) {
    header("Location: ../views/home.php"); // redirects to the login page
    exit;
  }
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Login Page</title>
   </head>
   
   <body>
      <h2>Login Page</h2>
      
      <form method="post" action="">
         <label>Username:</label>
         <input type="text" name="USERNAME" required><br>
         <label>Password:</label>
         <input type="password" name="PASSWORD" required><br>
         <input type="submit" value="Submit">
      </form>
      <a href="signup.php">
         <label>Create an account?</label>
      </a>

      <?php
         if(isset($error)) { 
            echo '<div style="color:red">'.$error.'</div>';
         }
      ?>
   </body>
</html>
