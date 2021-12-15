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
                <a href="tambah_data_laptop.php" class="list-group-item list-group-item-action bg-4 fw-bold <?php active('tambah_data_laptop.php');?>"><i class="bi bi-plus-square me-2"></i>Tambah Data Laptop</a>
                <a href="data_laptop.php" class="list-group-item list-group-item-action bg-4 fw-bold <?php active('data_laptop.php');?>"><i class="bi bi-laptop me-2"></i>Data Laptop</a>
                <a href="barang_masuk.php" class="list-group-item list-group-item-action bg-4 fw-bold <?php active('barang_masuk.php');?>"><i class="bi bi-box-arrow-in-down me-2"></i>Barang Masuk</a>
                <a href="barang_keluar.php" class="list-group-item list-group-item-action bg-4 fw-bold <?php active('barang_keluar.php');?>"><i class="bi bi-box-arrow-up me-2"></i>Barang Keluar</a>
                <a href="rekap_transaksi.php" class="list-group-item list-group-item-action bg-4 fw-bold <?php active('rekap_transaksi.php');?>"><i class="bi bi-box-arrow-in-down me-2"></i>Riwayat Transaksi</a>
                <a href="../logout.php" class="list-group-item list-group-item-action bg-4 text-danger fw-bold"
                onclick="return confirm('Keluar ?')"><i class="bi bi-door-open me-2"></i>Keluar</a>
            </div>
        </div>
        
