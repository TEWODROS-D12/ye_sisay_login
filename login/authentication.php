<?php

$name = "";
$password = "";
$err = "";
include("Config/db.php");

if (isset($_POST['LOGIN'])) {
    $name = mysqli_real_escape_string($conn, $_POST['fname']); // Taking fname from user input 
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $query = "select * from users where username = '" . $name . "' and password = '" . $password . "' limit 1"; //'username' and 'password' are some of 'users' table columns.
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    // $count = mysqli_num_rows($result);
    // if($count >0) {
    //      header("Location: home_page.php");
    //}

    if (empty($name) && empty($password)) {
        $err = "User name and password fields are empty.";
    } else if (empty($name)) {
        $err = "User name field is empty.";
    } else if (empty($password)) {
        $err = "Password field is empty";
    } else if (mysqli_num_rows($result) == 1) {
        header("Location: home_page.php");
    } else {
        $err = "Invalid username or password!";
    }
}
