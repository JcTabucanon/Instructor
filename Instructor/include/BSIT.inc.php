<?php
  include '../dbConnection/db.php';
    $count = 0;
     if(!empty($_GET['selected']) && !empty($_GET['ylvl'])){
      $course = $_GET['selected'];
      $yearlvl = $_GET['ylvl'];
    }else{
      $course = '';
      $yearlvl = '';
    }  
     // query database for user
     $sql = "SELECT * from CURRICULUM WHERE COURSE = '$course' and YLEVEL = '$yearlvl'";

    $result=mysqli_query($conn,$sql);
      if($result){
        while($row=mysqli_fetch_assoc($result)){
          $count++;
          $action = $row['ID'];
          $course_code=$row['COURSE_CODE'];
          $descriptive_title=$row['DESCRIPTIVE_TITLE'];
          $instructor_name=$row['INSTRUCTOR_NAME'];
          $lec=$row['LEC'];
          $lab=$row['LAB'];
          $total_units=$row['TOTAL_UNITS'];
          
          echo '
            <tr>
              <td>'.$count.'</td>
              <td>'.$course_code.'</td>
              <td>'.$descriptive_title.'</td>
              <td>'.$instructor_name.'</td>
              <td>'.$lec.'</td>
              <td>'.$lab.'</td>
              <td class="center"><span>'.$total_units.'</span></td>
              <td class="btn-con" style="text-align: center;">
                <div class="action-con">
                
                  <button class="open_modal btn btn-primary" 
                    data-id="'.$action.'" 
                    data-course-code="'.$course_code.'" 
                    data-descriptive-title="'.$descriptive_title.'" 
                    data-instructor-name="'.$instructor_name.'" 
                    data-lec="'.$lec.'" 
                    data-lab="'.$lab.'" 
                    data-total-units="'.$total_units.'">Edit</button>

                  <form action="../include/delete.inc.php" method="POST">
                    <input type="hidden" name="id" value="'.$action.'">
                    <input type="hidden" name="selected" value="'.$course.'">
                    <input type="hidden" name="ylvl" value="'.$yearlvl.'">
                    <button type="submit" name="delete" class="btn btn-danger">Remove</button>
                  </form>
                </div>
              </td>
            </tr>';

        }

      }
     mysqli_close($conn);
