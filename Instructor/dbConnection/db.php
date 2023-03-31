<?php
// database credentials
$host = "localhost";
$username = "root";
$password = "8b3237yB";
$dbname = "gradingsystem";

// create connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// connection successful
// echo "Connected successfully to database.";