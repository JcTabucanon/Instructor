<?php 
     require_once '../include/editGrade.inc.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Calculate Average Grade</title>
</head>

<body>
    <h1>Calculate Average Grade</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="firstsem">First Semester:</label>
        <input type="number" step="0.1" name="firstsem" id="firstsem" required>
        <br>
        <label for="secondsem">Second Semester:</label>
        <input type="number" step="0.1" name="secondsem" id="secondsem" required>
        <br>
        <input type="submit" name="submit" value="Calculate">
    </form>

    <?php if(isset($message)) { echo $message; } ?>
</body>

</html>
