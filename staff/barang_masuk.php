<?php
    require 'function/F_barang_masuk.php';
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/styles.css" />
    <title>Barang Masuk</title>
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
                <div class="row px-3">
                    <div class="py-2 border-bottom">
                        <h1 class="h1 text-center">Transaksi Barang Masuk</h1>
                    </div>
                    <div class="row px-3 pt-3 pb-4" style="background: white; border-radius: 1em">
                        <div class="col-lg-12">
                            <div class="row g-5">
<!-- Tabel Data -->                            
                                <div class="col-lg-9">        
                                    <form class="form-group d-flex justify-content-end mb-3">
                                        <input class="form-control btn-light border-bottom rounded-0 shadow-none w-25" type="text" placeholder="Search" aria-label="Search" style="background: transparent; border: none; outline: hidden;">
                                        <button type="submit" class="btn shadow-none border-bottom rounded-0 btn-md"><i class="bi bi-search"></i></button>
                                    </form>
                                    <div class="table-responsive" style="max-height: 500px;">              
                                        <table class="table table-bordered border-dark align-middle text-center mx-auto" style="min-width: 800px;">                                    
                                            <thead class="bg-4 border-dark warna-2">
                                                <tr>
                                                    <th style="width: 8%;">No</th>
                                                    <th style="width: 17%;">ID Laptop</th>
                                                    <th style="width: 45%;">Nama Laptop</th>
                                                    <th style="width: 20%;">Series</th>                    
                                                    <th style="width: 10%;">Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody class="bg-light border-dark">
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>                               
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                                <tr>
                                                    <td>No</td>
                                                    <td>ID Laptop</td>
                                                    <td>Nama Laptop</td>
                                                    <td>Series</td>
                                                    <td>Jumlah</td>                    
                                                </tr>  
                                            </tbody>
                                        </table>
                                    </div>                                         
                                </div>
<!-- Form Transaksi Masuk -->                                
                                <div class="col-lg-3">
                                    <h3 class="h4 mb-3 text-center">Form Barang Masuk</h3>
                                    <form class="form-group">
                                        <label class="form-label mt-2">ID Laptop</label>
                                        <select class="form-select">
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                            <option></option>
                                        </select> 
                                        <label class="form-label mt-2">Nama Laptop</label>
                                        <input type="text" name="" class="form-control" readonly>
                                        <label class="form-label mt-2">Series</label>
                                        <input type="text" name="" class="form-control" readonly>
                                        <label class="form-label mt-2">Jumlah</label>
                                        <input type="number" name="" class="form-control">
                                        <div class="d-flex justify-content-end mt-3" id="block">
                                        <button class="w-10 btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#alertModal" onclick="action()"><label>Simpan</label></button> 
                                        </div>                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="alertModalLabel">PEMBERITAHUAN !</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            Simpan Perubahan?
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alertModal1">Simpan data</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="modal fade" id="alertModal1" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-sm modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-body">
                                <div class="text-center">
                                    <i class="bi bi-check-circle" style="font-size: 2.5em; color: #15b8fc"></i><br>
                                    Data berhasil disimpan.
                                </div>
                                </div>
                                <div class="modal-footer">
                                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                                </div>
                            </div>
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
