<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "provido_756";

$conn = new mysqli(hostname: $servername, username: $username, password: $password, database: $dbname);


if ($conn->connect_error) {
    die ("Connection Failed" .$conn->connect_error);
} 






?>