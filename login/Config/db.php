<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "food_delivery";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {

    // echo "Connection failed!";

    header("Location: ../errors/db_error.php");
    die();
    //die(mysqli_connect_errno());
    //die(mysqli_connect_errno($conn));
} 
// else {
//     echo "Database connected!";
// }  // To make many lines a comment at once, select them and press ctrl+'/' key.
