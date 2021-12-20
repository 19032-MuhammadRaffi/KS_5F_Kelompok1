<?php
    require '../koneksi.php';
    require 'session.php'; 
//Read Data Laptop
    $queryRead = mysqli_query($koneksi, "SELECT id_laptop, series, nama_laptop, stok FROM data_laptop");
//Read ID_Laptop
    $queryID = mysqli_query($koneksi, "SELECT id_laptop FROM data_laptop");
