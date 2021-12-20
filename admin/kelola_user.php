<?php
    require 'function/F_kelola_user.php';
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/styles.css" />
    <title>Data User</title>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <?php include 'sidebar.php'; ?>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center me-auto">
                    <i class="fas fa-align-left fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Menu</h2>
                </div>
                <div class="dropdown">
                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw me-3"></i>Pengaturan Akun</a>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <li>
                            <button type="button" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#edit<?php echo $id_user ?>">
                            <i class="fas fa-cog me-3"></i>Setting</button>
                        </li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item text-danger" href="../logout.php" name="logout"><i class="fas fa-sign-out-alt me-3"></i>Logout</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container px-4">
            <div class="row py-2 mx-1">
                <h3 class="h3 mb-3 text-center pt-3">Data User</h3>
                <div class="row">
                    <div class="col d-flex justify-content-start">
                        <button type="button" class="btn btn-primary mb-4" style="width: 160px;" data-bs-toggle="modal" data-bs-target="#tambahData"><i class="fas fa-plus-circle me-3"></i>Tambah Data</button>
                    </div>
                    <div class="col">
                        <form method="POST" class="form-group d-flex justify-content-end">
                            <input name="pencarian" class="form-control border-bottom rounded-0 shadow-none w-50" type="text" placeholder="Search" style="background: transparent; border: none; outline: hidden;">
                            <button name="searchData" type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                </div>
<!-- Tabel Data -->
                <div class="row table-responsive" style="max-height: 65vh;">
                    <table class="table table-bordered border-dark align-middle mx-auto text-center" style="min-width: 700px; max-width: 1200px;">		              	
                        <thead class="bg-4 warna-2 text-center">
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>No HP</th>
                                <th>Hak Akses</th>
                                <th style="width: 110px;">Aksi</th>                    
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1;
                            $i = 0;
                            while ($row = mysqli_fetch_array($queryRead)){
                                ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $row['nama'] ?></td>
                                    <td><?php echo $row['no_hp'] ?></td>
                                    <td><?php echo $row['hak_akses'] ?></td>
                                    <td>
                                        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editUser<?php echo $row['id_user'] ?>"><i class="bi bi-pencil-square warna-2"></i></button>
                                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusUser<?php echo $row['id_user'] ?>"><i class="bi bi-trash warna-2"></i></button>
                                        <?php include 'M_User.php'; ?>
                                    </td>                
                                </tr><?php
                            }
                        ?>                                   
                        </tbody>
                    </table>
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