<?php
    require '../koneksi.php';
    require 'session.php';
//Read Data Laptop
    $queryRead = mysqli_query($koneksi, "SELECT * FROM user");
//Create Data User
    if(isset($_POST["createUser"])){
        $id_user = $_POST["id_user"];
        $password = $_POST["password"];
        $nama = $_POST["nama"];
        $no_hp = $_POST["no_hp"];
        $hak_akses = $_POST["hak_akses"];
        $queryCreate = "INSERT INTO user VALUES ('$id_user', SHA1('$password'), '$nama', '$no_hp', '$hak_akses')";
        $createData = mysqli_query($koneksi, $queryCreate);
        if ($createData){
            echo "<script>alert('User berhasil didaftarkan!')
            window.location.replace('kelola_user.php');</script>";
        }
        else {
            echo "<script>alert('User gagal didaftarkan!')
            window.location.replace('kelola_user.php');</script>";
        }
    }

//EDIT USER
    if(isset($_POST["editUser"])){
        $id_user = $_POST["id_user"];
        $password = $_POST["password"];
        $nama = $_POST["nama"];
        $no_hp = $_POST["no_hp"];
        $hak_akses = $_POST["hak_akses"];
        if ($password==""){
            $queryUpdate = "UPDATE user SET nama='$nama', no_hp='$no_hp', hak_akses='$hak_akses' WHERE id_user='$id_user'";
            $executeUpdate = mysqli_query($koneksi, $queryUpdate) or die($koneksi);
            if ($executeUpdate){
                echo "
                    <script>
                        alert('Berhasil Update Data User $id_user !');
                        document.location.href = 'kelola_user.php';
                    </script>
                ";
            }
            else {
                echo "
                    <script>
                        alert('Gagal Update Data User $id_user !');
                        document.location.href = 'kelola_user.php';
                    </script>
                ";
            }
        } else {
            $queryUpdate = "UPDATE user SET password=SHA1('$password'), nama='$nama', no_hp='$no_hp', hak_akses='$hak_akses' WHERE id_user='$id_user'";
            $executeUpdate = mysqli_query($koneksi, $queryUpdate) or die($koneksi);
            if ($executeUpdate){
                echo "
                    <script>
                        alert('Berhasil Update Data User $id_user !');
                        document.location.href = 'kelola_user.php';
                    </script>
                ";
            }
            else {
                echo "
                    <script>
                        alert('Gagal Update Data User $id_user !');
                        document.location.href = 'kelola_user.php';
                    </script>
                ";
            }
        }
    }



?>
