<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "rspelita";

$koneksi = mysqli_connect($host, $username, $password, $database);

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}
?>