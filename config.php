<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fitness";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    echo "Connection fail.." . mysqli_connect_error();
}

?>