<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>View</title>
  <link rel="stylesheet" href="../stylesheet/BSIT.css">
</head>
<body>

     <?php
          // include_once '../templates/nav.php';
     ?>
     <div class="container">
          <table class="table">
               <thead>
                    <tr class="clm">
                         <th scope="col">CORSE CODE</th>
                         <th scope="col">DESCRIPTIVE TITLE</th>
                         <th scope="col">INSTRUCTOR</th>
                         <th scope="col">LEC</th>
                         <th scope="col">LAB</th>
                         <th scope="col">TOTAL UNITS</th>
                         <th scope="col">ACTION</th>
                    </tr>
               </thead>
               <?php
                    include_once '../include/BSIT.inc.php';
               ?>
          <!-- <tbody> -->
               <div id="btn">
                    <a href="home.php" class="text-light">
                         <button id="b1" class="btn btn-primary my";>Home</button>
                    </a>
                    <a href="create.php" class="text-light">
                    <button id="b2" class="btn btn-primary my";>Add</button>
                    </a>
               </div>
          </table>

     </div>
  
</body>
</html>
