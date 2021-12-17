<?php
    require '../koneksi.php';
    require 'session.php'; 
//Read Rekap Transaksi
    $queryRead = mysqli_query($koneksi, "SELECT m.tgl_transaksi, m.keterangan, m.nama_user, d.nama_laptop, d.series, m.jumlah 
    FROM barang_masuk m, data_laptop d WHERE d.id_laptop = m.id_laptop UNION SELECT k.tgl_transaksi, k.keterangan, k.nama_user, 
    d.nama_laptop, d.series, k.jumlah FROM  barang_keluar k, data_laptop d WHERE d.id_laptop = k.id_laptop ORDER BY tgl_transaksi");
//Pencarian Data
    if(isset($_POST["searchData"])){
        $cari = $_POST["pencarian"];
        $queryRead = mysqli_query($koneksi, "SELECT DISTINCT m.tgl_transaksi, m.keterangan, m.nama_user, d.nama_laptop, d.series, m.jumlah 
        FROM barang_masuk m, data_laptop d WHERE d.id_laptop = m.id_laptop AND m.tgl_transaksi LIKE '%$cari%' OR m.keterangan LIKE 
        '%$cari%' OR m.nama_user LIKE '%$cari%' OR d.nama_laptop LIKE '%$cari%' OR d.series LIKE '%$cari%' OR m.jumlah LIKE '%$cari%' 
        UNION SELECT DISTINCT k.tgl_transaksi, k.keterangan, k.nama_user, d.nama_laptop, d.series, k.jumlah FROM  barang_keluar k, data_laptop d 
        WHERE d.id_laptop = k.id_laptop AND k.tgl_transaksi LIKE '%$cari%' OR k.keterangan LIKE '%$cari%' OR k.nama_user LIKE '%$cari%' 
        OR d.nama_laptop LIKE '%$cari%' OR d.series LIKE '%$cari%' OR k.jumlah LIKE '%$cari%' ORDER BY tgl_transaksi");
    }
?>