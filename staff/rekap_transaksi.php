<?php
    require 'function/F_rekap_transaksi.php';
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/styles.css" />
    <title>Data Transaksi</title>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <?php include 'sidebar.php'; ?>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Menu</h2>
                </div>
            </nav>
            <div class="container-fluid px-4">                        
<!-- Tabel Data -->
                <div class="row py-2 mx-1">
                    <h3 class="h3 mb-3 text-center pt-3">History Data Transaksi</h3>
                    <form method="POST" class="form-group d-flex justify-content-end mb-3">
                        <input name="pencarian" class="form-control btn-light border-bottom rounded-0 shadow-none w-25" type="text" placeholder="Search" style="background: transparent; border: none; outline: hidden;">
                        <button name="searchData" type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                    </form>
                        <div class="table-responsive" style="max-height: 700px;">
                            <table class="table table-bordered border-dark align-middle text-center mx-auto" style="min-width: 900px;">		              	
                                <thead class="bg-4 warna-2">
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Keterangan</th>
                                        <th>Nama User</th>
                                        <th>Nama Laptop</th>
                                        <th>Series</th> 
                                        <th>Jumlah</th>                   
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $no = 1;
                                    while ($row = mysqli_fetch_array($queryRead)){
                                        echo '
                                        <tr>
                                            <td>'.$no++.'</td>
                                            <td>'.$row['tgl_transaksi'].'</td>
                                            <td>'.$row['keterangan'].'</td>
                                            <td>'.$row['nama_user'].'</td>
                                            <td>'.$row['nama_laptop'].'</td>
                                            <td>'.$row['series'].'</td>
                                            <td>'.$row['jumlah'].'</td>
                                        </tr>';
                                    }
                                ?>                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>	
            </div>  
        </div>
    </div>
<!-- Javascript -->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");
        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>
</html>
