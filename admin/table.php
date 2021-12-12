<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Riwayat Transaksi</title>
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
  </head>
  <body>
	  <div class="container-fluid">
	    <div class="row">
	    <!-- sidebar -->
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
                <a class="nav-link" href="input-data-laptop.html">
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
                <a class="nav-link" href="barang-masuk.html">
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
                <a class="nav-link active" href="#">
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
	    <!-- end sidebar -->
	    <!-- content -->
    		<main class="col-md-9 min-vh-100 ms-sm-auto col-lg-10 px-md-4" style="background: #016b97;">
		      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-2 border-bottom">
		        <h1 class="h1 text-white">Riwayat Transaksi</h1>
		      </div>
		      <div class="row px-3 pt-3 pb-4" style="background: white; border-radius: 1em">
		            <h3 class="h3 mb-5 text-center text-blue">Tabel Riwayat Transaksi</h3>		      	
		            <div class="table-responsive">
		              <table class="table table-striped border border-dark border-2">
		                <thead class="text-nowrap">
		                  <tr>
		                    <th scope="col">No</th>
		                    <th scope="col">ID User</th>
		                    <th scope="col">ID Laptop</th>
		                    <th scope="col">Nama Laptop</th>
		                    <th scope="col">Series</th>
		                    <th scope="col">Keterangan</th>                    
		                    <th scope="col">Tanggal Transaksi</th>
		                    <th scope="col">Jumlah</th>
		                    <th class="text-center">Aksi</th>                    
		                  </tr>
		                </thead>
		                <tbody>
		                  <tr>
		                    <td>No</td>
		                    <td>ID User</td>
		                    <td>ID Laptop</td>
		                    <td>Nama Laptop</td>
		                    <td>Series</td>
		                    <td>Keterangan</td>
		                    <td>Tanggal Transaksi</td>
		                    <td>Jumlah</td>  
		                    <td class="text-center">
		                    	<a href="#" class="btn btn-sm"  data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square" style="color: yellow"></i></a>
		                    	<button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="bi bi-trash" style="color: red"></i></button>
		                    </td>                  
		                  </tr>
		                  <tr>
		                    <td>No</td>
		                    <td>ID User</td>
		                    <td>ID Laptop</td>
		                    <td>Nama Laptop</td>
		                    <td>Series</td>
		                    <td>Keterangan</td>
		                    <td>Tanggal Transaksi</td>
		                    <td>Jumlah</td>  
		                    <td class="text-center">
		                    	<a href="#" class="btn btn-sm"  data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square" style="color: yellow"></i></a>
		                    	<button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="bi bi-trash" style="color: red"></i></button>
		                    </td>                                    
		                  </tr>
		                  <tr>
		                    <td>No</td>
		                    <td>ID User</td>
		                    <td>ID Laptop</td>
		                    <td>Nama Laptop</td>
		                    <td>Series</td>
		                    <td>Keterangan</td>
		                    <td>Tanggal Transaksi</td>
		                    <td>Jumlah</td>    
		                    <td class="text-center">
		                    	<a href="#" class="btn btn-sm"  data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square" style="color: yellow"></i></a>
		                    	<button class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="bi bi-trash" style="color: red"></i></button>
		                    </td>                                                        
		                  </tr>                                    
		                </tbody>
		              </table>
		            </div>
		        </div>
		        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		          <div class="modal-dialog modal-dialog-centered">
		            <div class="modal-content">
		              <div class="modal-header">
		                <h5 class="modal-title" id="exampleModalLabel">PEMBERITAHUAN !</h5>
		                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		              </div>
		              <div class="modal-body">
		                Edit data?
		              </div>
		              <div class="modal-footer">
		                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
		                <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Edit</button>
		              </div>
		            </div>
		          </div>
		        </div>    
		        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		          <div class="modal-dialog modal-sm modal-dialog-centered">
		            <div class="modal-content">
		              <div class="modal-header">
		                <h5 class="modal-title" id="exampleModalLabel">PEMBERITAHUAN !</h5>
		                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		              </div>
		              <div class="modal-body">
		                Hapus data?<br>
		              </div>
		              <div class="modal-footer">
		                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
		                <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal2">Hapus</button>
		              </div>
		            </div>
		          </div>
		        </div>   
		      <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		        <div class="modal-dialog modal-sm modal-dialog-centered">
		          <div class="modal-content">
		            <div class="modal-body">
		              <div class="text-center">
		                <i class="bi bi-check-circle" style="font-size: 2.5em; color: #15b8fc"></i><br>
		                Data berhasil dihapus
		              </div>
		            </div>
		            <div class="modal-footer">
		              <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
		            </div>
		          </div>
		        </div>
		      </div>                          
    		</main>
    	<!-- end content -->
		</div>
	</div>
    <script src="bootstrap.bundle.min.js"></script>
  	</body>
</html>
