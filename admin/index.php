<html>
    <head>
        <title>Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
<!-- Sidebar -->
                <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
                    <div class="position-fixed pt-3">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link fw-bold active bg-dark" aria-current="page" href="#"><i class="bi bi-house me-2"></i><span>Dashboard</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold warna-2" href="input-data-laptop.html"><i class="bi bi-clipboard-plus me-2"></i><span>Kelola Data Laptop</span></a>
                            </li> 
                            <li class="nav-item">
                                <a class="nav-link fw-bold warna-2" href="data-laptop.html"><i class="bi bi-laptop me-2"></i><span>Data Laptop</span></a>
                            </li>                           
                            <li class="nav-item">
                                <a class="nav-link fw-bold warna-2" href="barang-masuk.html"><i class="bi bi-box-arrow-in-down me-2"></i><span>Barang Masuk</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold warna-2" href="barang-keluar.html"><i class="bi bi-box-arrow-up me-2"></i><span>Barang Keluar</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link fw-bold warna-2" href="table.html"><i class="bi bi-clock-history me-2"></i><span>Riwayat Transaksi</span></a>
                            </li>
                        </ul>
                        <hr>
                        <ul class="nav flex-column mb-2">
                            <li class="nav-item">
                                <a class="nav-link fw-bold warna-2" href="buat-user.html"><i class="bi bi-person-plus me-2"></i><span>Kelola User</span></a>
                            </li>          
                            <li class="nav-item">
                                <a class="nav-link fw-bold warna-2" href="data-user.html"><i class="bi bi-people me-2"></i><span>Data User</span></a>
                            </li>
                            <hr>
                            <li class="nav-item fixed-bottom">
                                <a class="nav-link fw-bold warna-2" href="../logout.php"><i class="bi bi-door-open me-2"></i><span>Keluar</span></a>
                            </li>          
                        </ul>
                    </div>
                </nav>
<!-- Main Content -->
                <main class="col-md-9 min-vh-100 ms-sm-auto col-lg-10 px-md-4 bg-5">
                    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
                        <h1 class="h1 text-white">Dashboard</h1>
                    </div>
                    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-3">
                        <div class="col">
                            <div class="card card-cover h-100 overflow-hidden text-white rounded-5 shadow-none" style="background: rgba(108,207,252,0.9);">
                                <div class="d-flex flex-column h-100 p-4 pb-3 text-white text-shadow-1">
                                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Stok Laptop</h2>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="me-auto">
                                            <div class="icon"><i class="bi bi-collection-fill"></i></div>
                                        </li>
                                        <li class="d-flex align-items-center me-3">
                                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg><small>Total</small>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg><small>520</small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card card-cover h-100 overflow-hidden text-white rounded-5 shadow-none" style="background:rgba(108,207,252);">
                                <div class="d-flex flex-column h-100 p-4 pb-3 text-shadow-1">
                                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Total Type</h2>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="me-auto">
                                            <div class="icon"><i class="bi bi-laptop"></i></div>
                                        </li>
                                        <li class="d-flex align-items-center me-3">
                                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"/></svg><small>Total</small>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"/></svg><small>50</small>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
<!-- Javascript -->
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    </body>
</html>