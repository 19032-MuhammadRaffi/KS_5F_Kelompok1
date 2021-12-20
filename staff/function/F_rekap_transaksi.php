<?php
    require '../koneksi.php';
    require 'session.php'; 
//Read Rekap Transaksi
    $queryRead = mysqli_query($koneksi, "SELECT m.tgl_transaksi, m.keterangan, m.nama_user, d.nama_laptop, d.series, m.jumlah 
    FROM barang_masuk m, data_laptop d WHERE d.id_laptop = m.id_laptop 
    UNION SELECT k.tgl_transaksi, k.keterangan, k.nama_user, d.nama_laptop, d.series, k.jumlah 
    FROM  barang_keluar k, data_laptop d WHERE d.id_laptop = k.id_laptop ORDER BY tgl_transaksi");
//Pencarian Data
    if(isset($_POST["searchData"])){
        $cari = $_POST["pencarian"];
        $queryRead = mysqli_query($koneksi, "SELECT m.tgl_transaksi, m.keterangan, m.nama_user, d.nama_laptop, d.series, m.jumlah 
        FROM barang_masuk m, data_laptop d WHERE d.id_laptop = m.id_laptop AND (
        tgl_transaksi LIKE '%$cari%' OR 
        keterangan LIKE '%$cari%' OR 
        nama_user LIKE '%$cari%' OR  
        nama_laptop LIKE '%$cari%' OR 
        series LIKE '%$cari%') 
        UNION SELECT k.tgl_transaksi, k.keterangan, k.nama_user, d.nama_laptop, d.series, k.jumlah 
        FROM  barang_keluar k, data_laptop d WHERE d.id_laptop = k.id_laptop AND (
        tgl_transaksi LIKE '%$cari%' OR 
        keterangan LIKE '%$cari%' OR 
        nama_user LIKE '%$cari%' OR  
        nama_laptop LIKE '%$cari%' OR 
        series LIKE '%$cari%') ORDER BY tgl_transaksi");
    }
?>
