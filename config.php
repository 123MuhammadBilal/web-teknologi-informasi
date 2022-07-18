<?php

$server = "localhost";
$user = "root";
$pass = "";
$database = "interview2"; //nama database

// mengconnectkan ke database
$conn = mysqli_connect($server, $user, $pass, $database);

// jika tidak connect maka tampilkan alert
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
