<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "akademik";

$conn = mysqli_connect($host, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>
