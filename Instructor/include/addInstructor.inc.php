<?php
     $sql = "SELECT * from INSTRUCTORS";
     $result=mysqli_query($conn,$sql);
      if($result){
        while($row=mysqli_fetch_assoc($result)){
          $INSTRUCTOR_ID=$row['USER_ID'];
          $FIRSTNAME=$row['FIRSTNAME'];
          $MI=$row['MI'];
          $LASTNAME=$row['LASTNAME'];
          $GENDER=$row['GENDER'];
          $fname = $FIRSTNAME." ".$MI." ".$LASTNAME;
          echo '
          <tr class="tr-rows">
              
              <td>'.$INSTRUCTOR_ID.'</td>
              <td>'.$fname.'</td>
              <td>'.$GENDER.'</td>
              
                <td style="text-align: center;">
                  <a href="addCurriculum.php?selected='.$INSTRUCTOR_ID.'" class="text-light"><button class="btn">Add</button></a>
                </td>
          </tr>';
          
        }
      }
