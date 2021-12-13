<?php
    require 'koneksi.php';
// SIGN IN
    if (isset($_POST["signIn"])){
        $id_user = $_POST["id_user"];
        $pass = $_POST["password"];
        $signin = "SELECT * FROM user WHERE id_user='$id_user' AND password=SHA1('$pass',512)";
        $result = mysqli_query($koneksi, $signin);
        
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_array($result);
            if ($row > 0){
                // Set Session
				session_start();
				$_SESSION['id_user'] = $_POST["id_user"];
                if ($row["hak_akses"]=="Admin"){
                    $_SESSION["Admin"] = true;
                    header("Location:admin/index.php");
                }
                else if ($row["hak_akses"]=="Staff"){
                    $_SESSION["Staff"] = true;
                    header("Location:staff/index.php");
                }
                exit;
            }
        }
        $error = true;
        if (isset($error)){
            ?>
                <script>
                alert("Username atau Password yang anda masukkan salah!");
                </script>
            <?php
        }
    }
?>
