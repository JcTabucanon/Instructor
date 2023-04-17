<?php
require_once 'xlsx.php'; // Include the SimpleXLSX library
require_once '../dbConnection/db.php';

if (isset($_POST['submit'])) {
    
    if (isset($_FILES['excel']['name'])) {


        if ($conn) {
            $excel = SimpleXLSX::parse($_FILES['excel']['tmp_name']);
            echo "<pre>";
            // print_r($excel->rows(1));
            // print_r($excel->dimension(14));
            // print_r($excel->sheetNames());
            for ($sheet = 0; $sheet < sizeof($excel->sheetNames()); $sheet++) {
                $rowcol = $excel->dimension($sheet);
                $i = 0;
                if ($rowcol[0] != 1 && $rowcol[1] != 1) {
                    $sheetName = $excel->sheetNames()[$sheet];
                    if ($sheetName == "LISTING") { // Check if the sheet name matches the table name
                        foreach ($excel->rows($sheet) as $key => $row) {
                            $q = "";
                            foreach ($row as $key => $cell) {
                              //   if ($i == 0) {
                                   //  $q .= "ID INT AUTO_INCREMENT PRIMARY KEY,";
                                if ($i == 1) {
                                    $q .= ",";
                                } elseif ($i == 2) {
                                    $q .= ",";
                                } elseif ($i == 3) {
                                    $q .= ",";
                                } elseif ($i == 4) {
                                   $q .= ",";
                               } elseif ($i == 5) {
                                   $q .= ",";
                               } elseif ($i == 6) {
                                   $q .= ",";
                               } elseif ($i == 7) {
                                   $q .= ",";
                               } elseif ($i == 8) {
                                   $q .= ",";
                               } elseif ($i == 9) {
                                   $q .= ",";
                               } elseif ($i == 10) {
                                   $q .= ",";
                               } elseif ($i == 11) {
                                   $q .= ",";
                               }
                                $i++;
                            }
                            if ($i > 11) {
                              //   $q = rtrim($q, ",");
                                $course = $row[1];
                                $level = $row[2];
                                $courseCode = $row[3];
                                $descTitle = $row[4];
                                $instructorId = $row[5];
                                $instructorName = $row[6];
                                $lec = $row[7];
                                $lab = $row[8];
                                $totalUnits = $row[9];
                                $sy = $row[10];
                                $semester = $row[11];

                                $check_query = "SELECT * FROM CURRICULUM WHERE COURSE_CODE = '$courseCode' and DESCIPTIVE_TITLE = '$descTitle';";
                                $check_result = mysqli_query($conn, $check_query);
                                $check_row = mysqli_fetch_assoc($check_result);
                                if (!$check_row) {
                                   $query = "INSERT INTO `curriculum`(`COURSE`, `LEVEL`, `COURSE_CODE`, `DESCIPTIVE_TITLE`, `INSTRUCTOR_ID`, `INSTRUCOR_NAME`, `LEC`, `LAB`, `TOTAL_UNITS`, `SY`, `SEMESTER`) VALUES ('$course','$level','$courseCode','$descTitle','$instructorId','$instructorName','$lec','$lab','$totalUnits','$sy','$semester')";
                                    if (mysqli_query($conn, $query)) {
                                        echo "Data inserted successfully.<br>";
                                    }
                                } else {
                                    echo "School ID $descTitle already exists in the database. Ignoring this entry.<br>";
                                }
                            }
                        }
                    } else {
                        echo "Excel sheet $sheetName does not match the name of the database table. Ignoring this sheet.<br>";
                    }
                }
            }
        }
    }
}
