<?php
	require 'koneksi.php';
	// Cek Session
    session_start();
    if (isset($_SESSION["Admin"])){
        header("Location: #");
        exit;
    }
    else if (isset($_SESSION["Staff"])){
        header("Location: #");
        exit;
    }
	// Ke login.php
    else{
        header("Location: login.php");
        exit;
    }
?>
