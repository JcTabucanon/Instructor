<?php require_once '../include/verify.inc.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Home</title>
</head>
<body>
<?php
// Start the session

// Get the user ID from the session
$user_id = $_SESSION["current_user"];

// Display the user ID on the page
echo "Welcome, user " . $_SESSION["current_user"];
?>

</body>
</html>