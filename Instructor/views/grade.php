<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <title>Grade</title>
  <link rel="stylesheet" href="../stylesheet/grade.css">
</head>
<body>

     <?php
          // include_once '../templates/nav.php';
     ?>
     <div class="container">
          <table class="table"> 
               <thead>
                    <tr class="clm">
                         <th scope="col">First Sem</th>
                         <th scope="col">Secon Sem</th>
                         <th scope="col">Gen. Ave.</th>
                         <th scope="col">ACTION</th>
                    </tr>
               </thead>
               <?php
                    include_once '../include/grade.inc.php';
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
