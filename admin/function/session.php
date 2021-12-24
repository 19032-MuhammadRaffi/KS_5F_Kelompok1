<?php
    require '../koneksi.php';
// Ambil Session
    session_start();
    $id_user = $_SESSION['id_user'];
    $querySession = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'");
    $rowSession = mysqli_fetch_array($querySession);
    $_SESSION['nama'] = $rowSession['nama'];
// Cek Session
    if (!isset($_SESSION[null]) && !isset($_SESSION["Admin"])){
        header("Location: ../login.php");
        exit;
    }
    $id_user = $_SESSION['id_user'];
    $querySession = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id_user'");
    $rowSession = mysqli_fetch_array($querySession);
    $_SESSION['nama'] = $rowSession['nama'];
    $sqlEditUser = "SELECT * FROM user WHERE id_user = '$id_user'";
    $querySetting = mysqli_query($koneksi, $sqlEditUser);
    $rowSet = mysqli_fetch_array($querySetting);
// Setting User
    $sqlEditUser = "SELECT * FROM user WHERE id_user = '$id_user'";
    $querySetting = mysqli_query($koneksi, $sqlEditUser);
    $rowSet = mysqli_fetch_array($querySetting);
    if(isset($_POST["eksekusiEdit"])){
        $id_user = $_POST["id_user"];
        $password_lama = $_POST["password_lama"];
        $password_baru = $_POST["password_baru"];
        $nama = $_POST["nama"];
        $no_hp = $_POST["no_hp"];
        if($password_baru==""){
            $querySet = mysqli_query($koneksi, "UPDATE user SET nama='$nama', no_hp='$no_hp' WHERE id_user='$id_user'") or die($koneksi);
            if ($querySet){
                echo "
                    <script>
                        alert('Berhasil Update User!');
                        document.location.href = 'index.php';
                    </script>
                ";
            }
            else{
                echo "
                    <script>
                        alert('Gagal Update User!');
                        document.location.href = 'index.php';
                    </script>
                ";
            }
        }
        else {
            $querySet = mysqli_query($koneksi, "UPDATE user SET password=SHA1('$password_baru'), nama='$nama', no_hp='$no_hp' WHERE id_user='$id_user' AND password=SHA1('$password_lama')") or die($koneksi);
            if ($querySet){
                echo "
                    <script>
                        alert('Berhasil Update User dan Password!');
                        document.location.href = 'index.php';
                    </script>
                ";
            }
            else{
                echo "
                    <script>
                        alert('Gagal Update User!');
                        document.location.href = 'index.php';
                    </script>
                ";
            }
        }
    }
?>
