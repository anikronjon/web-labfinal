<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "user";

// connection
$conn = mysqli_connect($hostname, $username, $password, $database);

// check
if (!$conn) {
    die("Error :" . mysqli_connect_error());
}