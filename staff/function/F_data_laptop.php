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
    if(isset($_POST["editData"])){
        $id_laptop = $_POST["id_laptop"];
        $series = $_POST["series"];
        $nama_laptop = $_POST["nama_laptop"];
        $merk = $_POST["merk"];
        $processor = $_POST["processor"];
        $type_storage = $_POST["type_storage"];
        $size_storage = $_POST["size_storage"];
        $vga_discrete = $_POST["vga_discrete"];
        $ram = $_POST["ram"];
        $camera = $_POST["camera"];
        $dvd = $_POST["dvd"];
        $harga = $_POST["harga"];
        // File Upload
        $namaAsli = $_FILES['gambar_laptop']['name'];
        if($namaAsli==""){
            $queryUpdate = "UPDATE data_laptop SET series='$series', nama_laptop='$nama_laptop', merk='$merk',
             processor='$processor', type_storage='$type_storage', size_storage='$size_storage', vga_discrete='$vga_discrete', 
             ram='$ram', camera='$camera', dvd='$dvd', harga='$harga' WHERE id_laptop='$id_laptop'";
            $executeUpdate = mysqli_query($koneksi, $queryUpdate) or die($koneksi);
            if ($executeUpdate){
                echo "
                    <script>
                        alert('Berhasil Update Data Laptop $id_laptop !');
                        document.location.href = 'data_laptop.php';
                    </script>
                ";
            }
        }
        else{
            // Hapus Gambar Lama
            $cariFile = mysqli_query($koneksi, "SELECT * FROM data_laptop WHERE id_laptop = '$id_laptop'") or die(mysqli_error($koneksi));
            $cariRow = mysqli_fetch_array($cariFile);
            $namaFile = $cariRow['gambar_laptop'];
            $lokasi = "../gambarLaptop/".$namaFile;
            if (file_exists($lokasi)){
                unlink($lokasi);
            }
            $x = explode('.',$namaAsli);
            $eks = strtolower(end($x));
            $asal = $_FILES['gambar_laptop']['tmp_name'];
            $dir = "../gambarLaptop/";
            $gambar_laptop = uniqid();
            $gambar_laptop .= '.'.$eks;
            $targetFile = $dir.$gambar_laptop;
            $uploadOk = 1;
            // Cek apakah file sudah ada difolder ?
            if (file_exists($targetFile)){
                $uploadOk = 0;
            }
            // Cek Proses Upload
            if ($uploadOk == 0){
                echo '<script>alert("Nama file sudah ada!");</script>';
            } 
            else {
                if (move_uploaded_file($asal, $targetFile)){
                    $queryUpdate = "UPDATE data_laptop SET series='$series', nama_laptop='$nama_laptop', merk='$merk',
                    processor='$processor', type_storage='$type_storage', size_storage='$size_storage', vga_discrete='$vga_discrete', 
                    ram='$ram', camera='$camera', dvd='$dvd', harga='$harga', gambar_laptop='$gambar_laptop' WHERE id_laptop='$id_laptop'";
                    $executeUpdate = mysqli_query($koneksi, $queryUpdate) or die($koneksi);
                    if ($executeUpdate){
                        echo "<script>alert('Data Laptop $id_laptop berhasil diedit !')
                        window.location.replace('data_laptop.php');</script>";
                    }
                } else {
                    echo '<script>alert("Proses Upload GAGAL!");</script>';
                }
            }
        }
    }
//Delete Data Laptop
    if(isset($_POST["hapusData"])){
        $id_laptop = $_POST['id_laptop'];
        $cariFile = mysqli_query($koneksi, "SELECT * FROM data_laptop WHERE id_laptop = '$id_laptop'") or die(mysqli_error($koneksi));
        $cariRow = mysqli_fetch_array($cariFile);
        $namaFile = $cariRow['gambar_laptop'];
        $lokasi = "../gambarLaptop/".$namaFile;
        if (file_exists($lokasi)){
            unlink($lokasi);
        }
        $queryHapus = mysqli_query($koneksi, "DELETE FROM data_laptop WHERE id_laptop = '$id_laptop'") or die($koneksi);
        if ($queryHapus){
            echo "
                <script>
                    alert('Berhasil Menghapus Data!');
                    document.location.href = 'data_laptop.php';
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('Gagal Menghapus Data!');
                    document.location.href = 'data_laptop.php';
                </script>
            ";
        }
    }
//Pencarian Data
    if(isset($_POST["searchData"])){
        $cari = $_POST["pencarian"];
        $queryRead = mysqli_query($koneksi, "SELECT * FROM data_laptop WHERE id_laptop LIKE '%$cari%' OR nama_laptop LIKE '%$cari%' OR series LIKE '%$cari%' OR merk LIKE '%$cari%' 
        OR processor LIKE '%$cari%' OR vga_discrete LIKE '%$cari%' OR ram LIKE '%$cari%' OR type_storage LIKE '%$cari%' OR size_storage LIKE '%$cari%' OR camera LIKE '%$cari%' 
        OR harga LIKE '%$cari%' OR stok LIKE '%$cari%'");
    }
?>
