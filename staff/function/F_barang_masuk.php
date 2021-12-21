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
    if(isset($_POST["prosesMasuk"])){
        $queryID = mysqli_query($koneksi, "SELECT max(id_masuk) as id_terbesar FROM barang_masuk");
        $data = mysqli_fetch_array($queryID);
        $id_masuk = $data['id_terbesar'];
        $urutan = (int) substr($id_masuk, 3, 7);
        $urutan++;
        $huruf = "MSK";
        $id_masuk = $huruf . sprintf("%07s", $urutan);
        $id_laptop = $_POST['id_laptop'];
        $id_user = $_SESSION['id_user'];
        $nama_user = $_SESSION['nama'];
        $jumlah = $_POST['jumlah'];
        $queryCreate = "INSERT INTO barang_masuk VALUES ('$id_masuk','$id_user','$id_laptop',NOW(),'$nama_user','$jumlah','Masuk')";
        $queryUpdate = "UPDATE data_laptop SET stok=stok+$jumlah WHERE id_laptop='$id_laptop'";
        $createData = mysqli_query($koneksi, $queryCreate);
        $updateData = mysqli_query($koneksi, $queryUpdate);
        if ($createData AND $updateData){
            echo "<script>alert('Transaksi berhasil diproses!')
            window.location.replace('barang_masuk.php');</script>";
        }
    }
//Pencarian Data
    if(isset($_POST["searchData"])){
        $cari = $_POST["pencarian"];
        $queryRead = mysqli_query($koneksi, "SELECT id_laptop, series, nama_laptop, stok FROM data_laptop WHERE 
        
