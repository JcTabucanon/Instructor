<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../stylesheet/addCurriculum.css">
     <link rel="stylesheet" href="../modal/stylesheet/addInstructor_modal.css">
     <link rel="stylesheet" href="../stylesheet/addInstructor.css">
     <link rel="stylesheet" href="../stylesheet/alert.css">
     <title>Create Curriculum</title>
</head>
<body>
    <?php 
        include_once '../templates/nav.php';
        include_once '../include/addCurrilum.inc.php';
        include_once '../modal/addInstructor_modal.php';
    ?>
    <div class= "import">
        <div class = "move">
            <div class = "imp-con line">
                <!-- import data  -->
                <h1>Import Data from Excel</h1>
                <form action="../include/impCurriculum.inc.php" method="POST" enctype="multipart/form-data">
                    <label for="excel">Select Excel File :  </label>
                    <input type="file" name="excel" id="excel" class="imp-excel">
                    <input type="submit" name="submit" value="Import" class="imp-btn">
                </form>
            </div>
            <h1 class="imp-manual-txt">Create Curriculum - Manual</h1>

            <!-- select instructor -->
            <div class="select-instructor-con">

                <?php 
                    $insname = "";
                    if(!empty($_GET['selected'])){
                        $id = $_GET['selected'];
                        include_once '../dbConnection/db.php';
                        $sql = "SELECT * from `INSTRUCTORS` WHERE USER_ID = $id";
                        $result=mysqli_query($conn,$sql);
                        if($result){
                            while($row=mysqli_fetch_assoc($result)){
                                $ID=$row['USER_ID'];
                                $FIRSTNAME=$row['FIRSTNAME'];
                                $MI=$row['MI'];
                                $LASTNAME=$row['LASTNAME'];
                                $insname = $FIRSTNAME." ".$MI." ".$LASTNAME;  
                            }
                        }
                    }
                ?>
                <!-- // to display the selected instructor -->

                <label for="instructor_name">Instructor</label>     
                <div class="select-instructor">
                    <input disabled placeholder="Select a Instructor" type="text" class="txt-select-ins" value="<?php echo$insname?>" name="instructor_name" id="instructor_name">
                    <button id="open_modal" class="open_modal">Select</button>
                </div>
            </div>

            <!-- <h1>Create Curriculum</h1> -->
            <div class = "imp-con">
                <form action="#" method="POST">
                    <div class = "imp-manual">

                        <!-- to pass value  -->
                        <input type="text" name="ins_name" id="ins_name" class="hide" value="<?php echo $insname;?>">
                        <input type="text" name="ins_id" id="ins_id" class="hide" value="<?php echo $ID;?>">

                        <label for="course">Course</label>
                        <input type="text" name="course" id="course" required>
                        <label for="level">Level</label>
                        <input type="text" name="level" id="level" required>
                        <label for="course_code">Course Code</label>
                        <input type="text" name="course_code" id="course_code" required>
                        <label for="desc_title">Descriptive Title</label>
                        <input type="text" name="desc_title" id="desc_title" required>
                        <label for="lec">Lecture</label>
                        <input type="text" name="lec" id="lec">
                        <label for="lab">Laboratory</label>
                        <input type="text" name="lab" id="lab">
                        <label for="sy">School Year</label>
                        <input type="text" name="sy" id="sy" required>
                        <label for="semester">Semester</label required>
                        <div class="sem">
                            <label for="semester">1st</label>
                            <input type="radio" name="semester" id="semester" value="1st" required>
                            <label for="semester">2nd</label>
                            <input type="radio" name="semester" id="semester" value="2nd" required>
                        </div>
                        <input type="submit" name="submit" value="Submit" id="imp-btn-manual">
                    </div>

                </form>
            </div>
        </div>

    </div>
    
    <?php include_once '../templates/footer.php';?>

<script src="../modal/javascript/addInstructor_modal.js"></script>