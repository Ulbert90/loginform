<?php
session_start();
include_once "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($koneksi, $_POST["username"]);
    $password = mysqli_real_escape_string($koneksi, $_POST["password"]);

    // Hash the entered password with MD5 for comparison
    $hashedPassword = md5($password);

    $query = "SELECT * FROM users WHERE username='$username' AND password='$hashedPassword'";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Error: " . mysqli_error($koneksi));
    }

    $cek = mysqli_num_rows($result);

    if ($cek > 0) {
        $_SESSION["username"] = $username;
        $_SESSION["status"] = "login";
        header("location: index.php");
        exit();
    } else {
        header("location: error404.html");
        exit();
    }
} else {
    header("location: error404.html");
    exit();
}
?>