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
    if(isset($_POST["prosesKeluar"])){
        $queryID = mysqli_query($koneksi, "SELECT max(id_keluar) as id_terbesar FROM barang_keluar");
        $data = mysqli_fetch_array($queryID);
        $id_keluar = $data['id_terbesar'];
        $urutan = (int) substr($id_keluar, 3, 7);
        $urutan++;
        $huruf = "KLR";
        $id_keluar = $huruf . sprintf("%07s", $urutan);
        $id_laptop = $_POST['id_laptop'];
        $id_user = $_SESSION['id_user'];
        $nama_user = $_SESSION['nama'];
        $jumlah = $_POST['jumlah'];
        $queryCreate = "INSERT INTO barang_keluar VALUES ('$id_keluar','$id_user','$id_laptop',NOW(),'$nama_user','$jumlah','Keluar')";
        $queryUpdate = "UPDATE data_laptop SET stok=stok-$jumlah WHERE id_laptop='$id_laptop'";
        $createData = mysqli_query($$updateData = mysqli_query($koneksi, $queryUpdate);
        $updateData = mysqli_query($koneksi, $queryUpdate);
        if ($createData AND $updateData){
            echo "<script>alert('Transaksi berhasil diproses!')
            window.location.replace('barang_keluar.php');</script>";
        }
    }
                                   
 //Pencarian Data
    if(isset($_POST["searchData"])){
        $cari = $_POST["pencarian"];
        $queryRead = mysqli_query($koneksi, "SELECT id_laptop, series, nama_laptop, stok FROM data_laptop WHERE 
        	id_laptop LIKE '%$cari%' OR 
        	nama_laptop LIKE '%$cari%' OR 
        	series LIKE '%$cari%'");
    }
?>
        
