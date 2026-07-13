<?php

$username = $_POST['username'];
$password = $_POST['password'];

session_start();

if (empty($username) || empty($password)) {
    $_SESSION['pesan'] = 'masukkan username atau password';
    header('location: index.php');
} else {
    if ($username === "faiz" && $password === "1234") {

        $_SESSION['pesan'] = "login berhasil";
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";

        // unset($_SESSION['pesan']);

        header('location: dashboard.php');
    } else {
        $_SESSION['pesan'] = 'username atau password salah';
        header('location: index.php');
    }
}
    // $_SESSION['pesan'] = 'username dan password salah';
