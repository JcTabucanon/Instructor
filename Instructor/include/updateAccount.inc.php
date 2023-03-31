<?php
     session_start();
     $_SESSION = 1;
     include_once "../dbConnection/db.php";
     if(isset($_POST['update'])){
     $name=$_POST['name'];
     $email=$_POST['email'];
     $password=$_POST['password'];
     $id=$_SESSION['id'];
     $sql="update instructors set name='$name',email='$email',password='$password' where id='$id'";
     $query=mysqli_query($conn,$sql);
     if($query){
          echo "<script>alert('Profile updated successfully')</script>";
          header("Refresh:0");
     }
     else{
          echo "<script>alert('Failed to update profile')</script>";
          header("Refresh:0");
     }
     }
     $id=$_SESSION['id'];
     $sql="select * from instructors where id='$id'";
     $query=mysqli_query($conn,$sql);
     $result = mysqli_query($conn, $sql);
     if ($result === false) {
     die(mysqli_error($conn));
     }
     $row = mysqli_fetch_assoc($result);