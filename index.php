<?php
	require 'koneksi.php';
	// Cek Session
    session_start();
    if (isset($_SESSION["Admin"])){
        header("Location: admin/index.php");
        exit;
    }
    else if (isset($_SESSION["Staff"])){
        header("Location: staff/index.php");
        exit;
    }
    else{
        header("Location: landing_page.php");
        exit;
    }
?>
