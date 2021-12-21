<?php
    require '../koneksi.php';
    require 'session.php';
    
//Read Data Laptop
    $queryRead = mysqli_query($koneksi, "SELECT id_laptop, series, nama_laptop, stok FROM data_laptop");
//Read ID_Laptop
    $queryID = mysqli_query($koneksi, "SELECT id_laptop FROM data_laptop");
//Transaksi
    $nowID = "";
    if(isset($_POST["pilihID"])){
        $id_laptop = $_POST['id_laptop'];
        $nowID = $id_laptop;
        $queryGetID = mysqli_query($koneksi, "SELECT nama_laptop, series FROM data_laptop WHERE id_laptop='$id_laptop'");
        $getRow = mysqli_fetch_array($queryGetID);
    }
    if(!isset($_POST["pilihID"])){
        $getRow['nama_laptop'] = "";
        $getRow['series'] = "";
    }
