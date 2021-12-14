<?php
    function active($currect_page){
        $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
        $url = end($url_array);  
        if($currect_page == $url){
            echo 'active-bar';
        } else {
            echo 'warna-2';
        }
    }
?>
<!-- Sidebar -->
        <div class="bg-4" id="sidebar-wrapper">
            <div class="list-group list-group-flush my-3">
                <a href="index.php" class="list-group-item list-group-item-action bg-4 fw-bold <?php active('index.php');?>"><i class="bi bi-house me-2"></i>Dashboard</a>
                <a href="data_laptop.php" class="list-group-item list-group-item-action bg-4 fw-bold <?php active('data_laptop.php');?>"><i class="bi bi-laptop me-2"></i>Data Laptop</a>
                <a href="barang_masuk.php" class="list-group-item list-group-item-action bg-4 fw-bold <?php active('barang_masuk.php');?>"><i class="bi bi-box-arrow-in-down me-2"></i>Barang Masuk</a>
                <a href="barang_keluar.php" class="list-group-item list-group-item-action bg-4 fw-bold <?php active('barang_keluar.php');?>"><i class="bi bi-box-arrow-up me-2"></i>Barang Keluar</a>
                <a href="rekap_transaksi.php" class="list-group-item list-group-item-action bg-4 fw-bold <?php active('rekap_transaksi.php');?>"><i class="bi bi-box-arrow-in-down me-2"></i>Riwayat Transaksi</a>
                <a href="kelola_user.php" class="list-group-item list-group-item-action bg-4 fw-bold <?php active('kelola_user.php');?>"><i class="bi bi-box-arrow-in-down me-2"></i>Kelola User</a>
                <a href="../logout.php" class="list-group-item list-group-item-action bg-4 text-danger fw-bold"
                onclick="return confirm('Keluar ?')"><i class="bi bi-door-open me-2"></i>Keluar</a>
            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Menu</h2>
                </div>
            </nav>