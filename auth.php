<?php
    require 'koneksi.php';
//test
// SIGN IN
    if (isset($_POST["signIn"])){
        $id_user = $_POST["id_user"];
        $pass = $_POST["password"];
        $signin = "SELECT * FROM user WHERE id_user='$id_user' AND password=md5('$pass')";
        $result = mysqli_query($koneksi, $signin);
        
        if(mysqli_num_rows($result) === 1){
            $row = mysqli_fetch_array($result);
            if ($row > 0){
                // Set Session
				session_start();
				$_SESSION['id_user'] = $_POST["id_user"];
                if ($row["hak_akses"]=="Admin"){
                    $_SESSION["Pemilik"] = true;
                    header("Location:pemilik/index.php");
                }
                else if ($row["hak_akses"]=="Staff"){
                    $_SESSION["Teller"] = true;
                    header("Location:teller/index.php");
                }
                exit;
            }
        }
        $error = true;
        if (isset($error)){
            ?>
                <script>
                alert("Username/Password salah!");
                </script>
            <?php
        }
    }
?>
