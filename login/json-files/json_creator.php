
<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "food_delivery";

$conn = mysqli_connect($host, $username, $password, $database) or die("Connection failed.");

$query = "select * from users";
$result = mysqli_query($conn, $query) or die("SQL query failed.");
$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

$json_data = json_encode($output, JSON_PRETTY_PRINT);

$file_name = "Signed_in_users" . ".json";

if (file_put_contents("json/{$file_name}", $json_data)) {
    echo $file_name . "<br> File created.";
} else {
    echo "Can't insert data in json file.";
}

?>