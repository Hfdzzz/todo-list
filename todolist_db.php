<?php

$host = "localhost";
$username = "root";
$password = "";

$db_name = "todolist";

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn) {
    echo "Conecction Failed!";
}