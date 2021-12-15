<?php
    require 'function/F_index.php';
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/styles.css" />
    <title>Dashboard</title>
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
<!-- Status Box -->
                <div class="row g-3 my-2">
                    <div class="col-md-4">
                        <div class="p-3 bg-4 shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2 warna-2 pt-2"><?php echo $rowData ?></h3>
                                <p class="fs-5 fw-bold warna-2" name>Data Laptop</p>
                            </div>
                            <i class="fas fa-book-reader fs-1 warna-3 rounded-full bg-light p-3"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 bg-4 shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2 warna-2 pt-2"><?php echo $rowSeries ?></h3>
                                <p class="fs-5 fw-bold warna-2">Series Laptop</p>
                            </div>
                            <i class="fas fa-tasks fs-1 warna-3 rounded-full bg-light p-3"></i>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="p-3 bg-4 shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2 warna-2 pt-2"><?php echo $rowStok[0] ?></h3>
                                <p class="fs-5 fw-bold warna-2">Jumlah Stok</p>
                            </div>
                            <i class="fas fa-users fs-1 warna-3 rounded-full bg-light p-3"></i>
                        </div>
                    </div>
                </div>
<!-- Page Content -->
                <div class="row my-5">
                    <h3 class="fs-4 mb-3">Selamat Datang <?php echo $rowSession['nama'] ?></h3>
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
