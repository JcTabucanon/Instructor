<?php
  session_start();
  include_once '../dbConnection/db.php';
  
     // get input values

  
     // query database for user
     $sql = "SELECT * from STUDENT_GRADE";

    $result=mysqli_query($conn,$sql);
      if($result){
        while($row=mysqli_fetch_assoc($result)){
          $ID=$row['ID'];         
          $firstSem=$row['FIRSTSEM'];
          $seconsem=$row['SECONDSEM'];
          $genAverage=$row['genAverage'];         
          echo '
          <tr>
              
              <td>'.$firstSem.'</td>
              <td>'.$seconsem.'</td>
              <td>'.$genAverage.'</td>
              
                <td style="text-align: center;">
                  <a href="update.php?updateid='.$ID.'" class="text-light"><button class="btn btn-primary text-light">Edit</button></a>
                  <a href="delete.php?deleteid='.$ID.'" class="text-light"><button class="btn btn-danger">Remove</button></a>
                </td>
          </tr>';
          
        }
      }
     mysqli_close($conn);
  ?>