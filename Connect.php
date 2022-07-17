<?php
$servername = "localhost";
$database = "klinik_312010204";
$username = "adminklinik";
$password = "312010204";
 
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Failed to connect: " . mysqli_connect_error());}
?>