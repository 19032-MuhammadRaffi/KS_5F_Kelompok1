<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Barang Masuk</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap-icons-1.7.2/bootstrap-icons.css">

    <style>
      #sidebarMenu{
        background: #c4dce4;
        min-height: 100vh;
      }
      .active{
        color: #0773c4;
        font-weight: 700;
      }
      .nav-link{
        color: #0773c4;
      }
      .text-blue{
        color: #15b8fc;
      }      
      thead>tr{
        background: #055693;
      }
      tbody>tr:nth-of-type(odd){
        background: #c4dce4;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
  <div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
          <div class="position-fixed pt-3">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.html">
                  <i class="bi bi-house me-2"></i>
                  <span>Dashboard</span>              
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="input-data-laptop">
                  <i class="bi bi-clipboard-plus me-2"></i>
                  <span>Kelola Data Laptop</span>
                </a>
              </li>               
              <li class="nav-item">
                <a class="nav-link" href="data-laptop.html">
                  <i class="bi bi-laptop me-2"></i>
                  <span>Data Laptop</span>
                </a>
              </li>                           
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <i class="bi bi-box-arrow-in-down me-2"></i>
                  <span>Barang Masuk</span>                  
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="barang-keluar.html">
                  <i class="bi bi-box-arrow-up me-2"></i>
                  <span>Barang Keluar</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="table.html">
                  <i class="bi bi-clock-history me-2"></i>
                  <span>Riwayat Transaksi</span>
                </a>
              </li>
            </ul>
            <hr/>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="buat-user.html">
                  <i class="bi bi-person-plus me-2"></i>
                  <span>Kelola User</span>
                </a>
              </li>          
              <li class="nav-item">
                <a class="nav-link" href="data-user.html">
                  <i class="bi bi-people me-2"></i>
                  <span>Data User</span>
                </a>
              </li>
              <hr/>
              <li class="nav-item fixed-bottom">
                <a class="nav-link" href="#">
                  <i class="bi bi-door-open me-2"></i>
                  <span>Keluar</span> 
                </a>
              </li>          
            </ul>
          </div>
          </nav>
    <main class="col-md-9 min-vh-100 ms-sm-auto col-lg-10 px-md-4" style="background: #016b97;">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
        <h1 class="h1 text-white">Barang masuk</h1>
      </div>
      <div class="row px-3 pt-3 pb-4" style="background: white; border-radius: 1em">
        <div class="col-md-12">
          <div class="row g-5">
            <div class="col-md-6" style="border-right: 1px solid black">               
              <form class="form-group d-flex justify-content-end mb-3">
                  <input class="form-control btn-light border-bottom rounded-0 shadow-none w-25" type="text" placeholder="Search" aria-label="Search" style="background: transparent; border: none; outline: hidden;">
                  <button type="submit" class="btn shadow-none border-bottom rounded-0 btn-md"><i class="bi bi-search"></i></button>
                </form>
                <h3 class="h3 mb-3 text-center text-blue">Tabel Data Laptop</h3>
                <div class="table-responsive">              
                <table class="table table-striped border border-dark border-2">                                    
                  <thead class="text-nowrap">
                    <tr>
                      <th scope="col">No</th>
                      <th scope="col">ID Laptop</th>
                      <th scope="col">Nama Laptop</th>
                      <th scope="col">Series</th>                    
                      <th scope="col">Jumlah</th>
                    </tr>
                  </thead>
                  <tbody>
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
            <div class="col-md-6">
              <h3 class="h3 mb-5 text-center text-blue">Form Barang Masuk</h3>
              <form class="form-group">
                <label for="firstName" class="form-label mt-2">ID Masuk</label>
                <input type="number" name="" class="form-control" maxlength="5">
                <label for="firstName" class="form-label mt-2">ID User</label>
                <input type="text" name="" class="form-control" maxlength="20">
                <label for="firstName" class="form-label mt-2">ID Laptop</label>
                <select class="form-select">
                  <option></option>
                  <option></option>
                  <option></option>
                  <option></option>
                </select>
                <label for="firstName" class="form-label mt-2">Tanggal</label>
                <input type="date" name="" class="form-control">  
                <label for="firstName" class="form-label mt-2">Jumlah</label>
                <input type="number" name="" class="form-control" maxlength="11" min="0">
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
    </main>

    <script src="bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
      function action(){
        document.getElementById("block").style.display="block";
      }
    </script>
  </body>
</html>
