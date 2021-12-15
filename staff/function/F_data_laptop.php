<?php
    require '../koneksi.php';
    require 'session.php';
//Read Data Laptop
    $queryRead = mysqli_query($koneksi, "SELECT * FROM data_laptop");
//Create Data Laptop
    if(isset($_POST["createData"])){
        $series = $_POST["series"];
        $nama_laptop = $_POST["nama_laptop"];
        $merk = $_POST["merk"];
        $processor = $_POST["processor"];
        $vga_discrete = $_POST["vga_discrete"];
        $ram = $_POST["ram"];
        $type_storage = $_POST["type_storage"];
        $size_storage = $_POST["size_storage"];
        $camera = $_POST["camera"];
        $dvd = $_POST["dvd"];
        $harga = $_POST["harga"];
        // mengambil data laptop dengan id_laptop paling besar
        $queryID = mysqli_query($koneksi, "SELECT max(id_laptop) as id_terbesar FROM data_laptop");
        $data = mysqli_fetch_array($queryID);
        $id_laptop = $data['id_terbesar'];
        $urutan = (int) substr($id_laptop, 3, 7);
        $urutan++;
        $huruf = "LTP";
        $id_laptop = $huruf . sprintf("%07s", $urutan);
        // file upload gambar laptop
        $namaAsli = $_FILES['gambar_laptop']['name'];
        $x = explode('.',$namaAsli);
        $eks = strtolower(end($x));
        $asal = $_FILES['gambar_laptop']['tmp_name'];
        $dir = "../gambarLaptop/";
        $nama_gambar = uniqid();
        $nama_gambar .= '.'.$eks;
        $targetFile = $dir.$nama_gambar;
        $uploadOk = 1;
        // Cek apakah file sudah ada difolder ?
        if (file_exists($targetFile)){
            $uploadOk = 0;
        }
        // Cek Proses Upload
        if ($uploadOk == 0){
            echo '<script>alert("Nama file sudah ada!");</script>';
        } else if ($namaAsli=="") {
            $queryCreate = "INSERT INTO data_laptop VALUES ('$id_laptop', '$series', '$nama_laptop', '$merk', '$processor', '$vga_discrete', '$ram', '$type_storage', '$size_storage', '$camera', '$dvd', '', '$harga','')";
            $createData = mysqli_query($koneksi, $queryCreate);
            if ($createData){
                echo "<script>alert('Data berhasil ditambahkan!')
                window.location.replace('data_laptop.php');</script>";
            }
        }
        else {
            if (move_uploaded_file($asal, $targetFile)){
                $queryCreate = "INSERT INTO data_laptop VALUES ('$id_laptop', '$series', '$nama_laptop', '$merk', '$processor', '$vga_discrete', '$ram', '$type_storage', '$size_storage', '$camera', '$dvd', '$nama_gambar', '$harga','')";
                $createData = mysqli_query($koneksi, $queryCreate);
                if ($createData){
                    echo "<script>alert('Data berhasil ditambahkan!')
                    window.location.replace('data_laptop.php');</script>";
                }
            } else {
                echo '<script>alert("Proses Upload GAGAL!");</script>';
            }
        }
    }
//Edit Data Laptop
//Delete Data Laptop
//Pencarian Data
    if(isset($_POST["searchData"])){
        $cari = $_POST["pencarian"];
        $queryRead = mysqli_query($koneksi, "SELECT * FROM data_laptop WHERE id_laptop LIKE '%$cari%' OR nama_laptop LIKE '%$cari%' OR series LIKE '%$cari%' OR merk LIKE '%$cari%' 
        OR processor LIKE '%$cari%' OR vga_discrete LIKE '%$cari%' OR ram LIKE '%$cari%' OR type_storage LIKE '%$cari%' OR size_storage LIKE '%$cari%' OR camera LIKE '%$cari%' 
        OR harga LIKE '%$cari%' OR stok LIKE '%$cari%'");
    }
?>