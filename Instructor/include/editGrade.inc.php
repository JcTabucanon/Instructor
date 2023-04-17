<?php
// Database connection
require_once '../dbConnection/db.php';
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstsem = $_POST["firstsem"];
    $secondsem = $_POST["secondsem"];

    // Calculate the average
    $genAverage = ($firstsem + $secondsem) / 2;

    // Save the inputs and calculated average in the database
    $sql = "INSERT INTO STUDENT_GRADE (firstsem, secondsem, genAverage) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ddd", $firstsem, $secondsem, $genAverage);
    $stmt->execute();

    // Check if the query was successful
    if ($stmt->affected_rows > 0) {
        $message = "Data saved successfully!";
        echo "FIRSTSEM - $firstsem | ";
        echo "SECONDSEM - $secondsem | ";
        echo "GEN.AVE - $genAverage";
    } else {
        $message = "Failed to save data.";
    }
    $stmt->close();
    $conn->close();
}
?>