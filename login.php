<?php

$username = $_POST['username'];
$password = $_POST['password'];

if($username === "faiz" && $password === "1234") {
    session_start();

    $_SESSION[$username];
    $_SESSION['status'] = 'login';


    header('location: dashboard.php');
} else {
    header('location: index.php');
}

?>