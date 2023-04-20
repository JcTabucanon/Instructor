<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>View | Curriculum</title>
  <link rel="stylesheet" href="../stylesheet/BSIT.css">
  <link rel="stylesheet" href="../stylesheet/nav.css">
  <link rel="stylesheet" href="../stylesheet/footer.css">
  <link rel="stylesheet" href="../stylesheet//alert.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</head>
<body>
     <?php 
          include  '../templates/nav.php';
          if(!empty($_GET['selected']) && !empty($_GET['ylvl'])){
               $course = $_GET['selected'];
               $yearlvl = $_GET['ylvl'];
             }else{
               $course = '';
               $yearlvl = '';
             }  
     ?>
     
     <div class="container">
          <div class = "c-con">
               <div class="btn-container">
                    <span>
                         <h1><?php echo"$course"?></h1>
                         <h1><?php echo" - "?></h1>
                         <h1><?php echo"$yearlvl"?></h1>
                    </span>
                    <div class="btn-wrapper">
                         <a href="home.php" class="text-light">
                              <button id="b1" class="btn btn-primary my";>Enrolled</button>
                         </a>
                         <a href="../views/addCurriculum.php" class="text-light">
                              <button id="b2" class="btn btn-primary my";>Add</button>
                         </a>
                    </div>
               </div>
               <table class="table">
                    <thead>
                         <tr>
                              <th scope="col">No.</th>
                              <th scope="col">CORSE&nbsp;CODE</th>
                              <th scope="col">DESCRIPTIVE TITLE</th>
                              <th scope="col">INSTRUCTOR</th>
                              <th scope="col">LEC</th>
                              <th scope="col">LAB</th>
                              <th scope="col">TOTAL</th>
                              <th scope="col">ACTION</th>
                         </tr>
                    </thead>
                    <?php 
                         include '../include/BSIT.inc.php';
                    ?>
               </table>
               <!-- add  -->
               <?php include_once '../modal/curEdit_popup.php67089=-'?>

               <!-- add  -->

          </div>
     </div>
  
<?php include_once '../templates/footer.php';?>
<script src="../modal/javascript/curEdit_modal.js"></script>