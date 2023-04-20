<?php
include_once '../dbConnection/db.php';

     if (isset($_POST['delete'])) {
          if(!empty($_POST['id']) && !empty($_POST['selected']) && !empty($_POST['ylvl'])){
               $id = $_POST['id'];
               $selected = $_POST['selected'];
               $ylvl = $_POST['ylvl'];
               
               // delete record from database
               $sql = "DELETE FROM CURRICULUM WHERE ID = '$id'";
               $result = mysqli_query($conn, $sql);
               
               // check if delete was successful
               if($result){
                    // redirect back to curriculum list page
                    header("location:../views/BSIT.php?selected=$selected&ylvl=$ylvl");
                    exit();
                } else {
                    echo "Error deleting record: " . mysqli_error($conn);
                }
                
          } else {
               echo "Invalid request.";
               }
     }
