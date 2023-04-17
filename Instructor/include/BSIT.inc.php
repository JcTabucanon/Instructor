<?php
  session_start();
  include_once '../dbConnection/db.php';
  
     $course = $_POST['course'];
     $yearlvl = $_POST['yearlvl'];
     
     echo "$course - ";
     echo "$yearlvl";
  
     // query database for user
     $sql = "SELECT * from CURRICULUM WHERE COURSE = '$course' and YLEVEL = '$yearlvl'";

    $result=mysqli_query($conn,$sql);
      if($result){
        while($row=mysqli_fetch_assoc($result)){
          $course_code=$row['COURSE_CODE'];
          $descriptive_title=$row['DESCRIPTIVE_TITLE'];
          $instructor_name=$row['INSTRUCTOR_NAME'];
          $lec=$row['LEC'];
          $lab=$row['LAB'];
          $total_units=$row['TOTAL_UNITS'];          
          echo '
          <tr>
              
              <td>'.$course_code.'</td>
              <td>'.$descriptive_title.'</td>
              <td>'.$instructor_name.'</td>
              <td>'.$lec.'</td>
              <td>'.$lab.'</td>
              <td>'.$total_units.'</td>
              
                <td style="text-align: center;">
                  <a href="update.php?updateid='.$course_code.'" class="text-light"><button class="btn btn-primary text-light">Edit</button></a>
                  <a href="delete.php?deleteid='.$course_code.'" class="text-light"><button class="btn btn-danger">Remove</button></a>
                </td>
          </tr>';
          
        }
      }
     mysqli_close($conn);
  ?>