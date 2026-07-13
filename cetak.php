<?php
session_start();

if (isset($_GET['kata'])) {
    $cetak = $_GET['kata'];


    if (empty($_GET['kata'])) {
        $cetak = "Mantap";
    }

    $_SESSION['kata'] = $cetak;
    header('location: dashboard.php');  
}