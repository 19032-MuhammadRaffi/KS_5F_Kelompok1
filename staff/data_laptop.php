<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/styles.css" />
    <title>Data Laptop</title>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <?php include 'sidebar.php'; ?>
            <div class="container-fluid px-4">
                <div class="row px-3">
<!-- Form Input Data -->
                    <div class="col-md-12">
                        <form class="form-group mx-2">
                        <h3 class="h3 mb-4 text-center">Form Input Data Laptop</h3>
                        <div class="row d-flex flex-sm-wrap">
                            <div class="col px-auto mx-2 my-1">
                                <label for="series" class="form-label">Series</label>
                                <input type="text" name="" class="form-control" maxlength="30">
                            </div>
                            <div class="col px-auto mx-2 my-1">
                                <label for="type_storage" class="form-label">Type Storage</label>
                                <select class="form-select">
                                    <option>SSD</option>
                                    <option>HDD</option>
                                </select>
                            </div>
                            <div class="col px-auto mx-2 my-1">
                                <label for="firstName" class="form-label">Kamera</label>
                                <select class="form-select">
                                <option>Yes</option>
                                <option>No</option>
                                </select>
                            </div>   
                        </div>
                        <div class="row d-flex flex-sm-wrap">                      
                            <div class="col px-auto mx-2 my-1">
                                <label for="firstName" class="form-label">Nama Laptop</label>
                                <input type="text" name="" class="form-control" maxlength="50">
                            </div>
                            <div class="col px-auto mx-2 my-1">
                                <label for="firstName" class="form-label">Size Storage</label>
                                <input type="text" name="" class="form-control" maxlength="4">
                            </div>  
                            <div class="col px-auto mx-2 my-1">
                                <label for="firstName" class="form-label">DVD</label>
                                <select class="form-select">
                                <option>Yes</option>
                                <option>No</option>
                                </select>
                            </div>  
                        </div>
                        <div class="row d-flex flex-sm-wrap">                      
                            <div class="col px-auto mx-2 my-1">
                                <label for="firstName" class="form-label">Merk</label>
                                <input type="text" name="" class="form-control" maxlength="30">
                            </div>
                            <div class="col px-auto mx-2 my-1">
                                <label for="firstName" class="form-label">RAM</label>
                                <input type="number" name="" class="form-control" maxlength="2">
                            </div>
                            <div class="col px-auto mx-2 my-1">
                                <label for="firstName" class="form-label">Harga</label>
                                <input type="number" name="" class="form-control" maxlength="11">
                            </div>
                        </div>
                        <div class="row d-flex flex-sm-wrap">                         
                            <div class="col px-auto mx-2 my-1">
                                <label for="firstName" class="form-label">Processor</label>
                                <input type="text" name="" class="form-control" maxlength="30">
                            </div>
                            <div class="col px-auto mx-2 my-1">
                                <label for="firstName" class="form-label">VGA Discrete</label>
                                <input type="text" name="" class="form-control" maxlength="30">
                            </div>
                            <div class="col px-auto mx-2 my-1">
                                <label for="firstName" class="form-label">Stok</label>
                                <input type="number" name="" class="form-control" maxlength="11">
                            </div> 
                        <div class="row mt-3">  
                            <div class="col-md-12 mx-2 d-flex justify-content-center">
                                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alertModal" style="width: 200px;"><label>Simpan</label></button>
                            </div>                                     
                        </div>                                              
                    </form>
                    </div>
                    <div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="alertModalLabel">PEMBERITAHUAN !</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Simpan Perubahan?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
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
<!-- Tabel Data -->
                <div class="row py-2 mx-1">
                    <h3 class="h3 mb-3 text-center pt-3">Tabel Data Laptop</h3>
                    <form class="form-group d-flex justify-content-end mb-3">
                        <input class="form-control btn-light border-bottom rounded-0 shadow-none w-25" type="text" placeholder="Search" style="background: transparent; border: none; outline: hidden;">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                    </form>
                        <div class="table-responsive" style="max-height: 250px;">
                            <table class="table table-bordered border-dark align-middle text-center mx-auto">		              	
                                <thead class="bg-4 warna-2">
                                    <tr>
                                        <th>No</th>
                                        <th>ID Laptop</th>
                                        <th>Nama Laptop</th>
                                        <th>Merk</th>
                                        <th>Series</th>
                                        <th>Processor</th>                    
                                        <th>VGA Ciscrete</th>
                                        <th>RAM</th>
                                        <td>Type Storage</td>
                                        <td>Size Storage</td>
                                        <td>Kamera</td>
                                        <td>DVD</td>
                                        <td>Harga</td>
                                        <td>Stok</td>
                                        <th class="text-center">Aksi</th>                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>No</td>
                                        <td>ID Laptop</td>
                                        <td>Nama Laptop</td>
                                        <td>Merk</td>
                                        <td>Series</td>
                                        <td>Processor</td>
                                        <td>VGA Ciscrete</td>
                                        <td>RAM</td>
                                        <td>Type Storage</td>
                                        <td>Size Storage</td>
                                        <td>Kamera</td>
                                        <td>DVD</td>
                                        <td>Harga</td>
                                        <td>Stok</td>
                                        <td class="text-center text-nowrap">
                                            <a href="#" class="btn btn-warning"  data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square warna-2"></i></a>
                                            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="bi bi-trash warna-2"></i></button>
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
                            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal">Edit</button>
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
                    <div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="alertModalLabel">PEMBERITAHUAN !</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Simpan Perubahan?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                            <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan data</button>
                        </div>
                        </div>
                    </div>
                    </div> 		
<!-- Edit Modal -->       
                <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="editModalLabel">Edit Data Laptop</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="form-group">
                                <div class="row">                 
                                    <div class="col px-auto mx-2">
                                        <label for="firstName" class="form-label">Series</label>
                                        <input type="text" name="" class="form-control" maxlength="30">
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col px-auto mx-2">
                                        <label for="firstName" class="form-label">Nama Laptop</label>
                                        <input type="text" name="" class="form-control" maxlength="50">
                                    </div>
                                </div>
                                <div class="row my-2">
                                    <div class="col px-auto mx-2">
                                        <label for="firstName" class="form-label">Merk</label>
                                        <input type="text" name="" class="form-control" maxlength="30">
                                    </div>
                                    <div class="col px-auto mx-2">
                                        <label for="firstName" class="form-label">Processor</label>
                                        <input type="text" name="" class="form-control" maxlength="30">
                                    </div>
                                </div> 
                                <div class="row my-2">
                                    <div class="col px-auto mx-2">
                                        <label for="firstName" class="form-label">Type Storage</label>
                                        <select class="form-select">
                                            <option>SSD</option>
                                            <option>HDD</option>
                                        </select>
                                    </div>   
                                    <div class="col px-auto mx-2">
                                        <label for="firstName" class="form-label">Size Storage</label>
                                        <input type="text" name="" class="form-control" maxlength="4">
                                    </div>
                                </div>  
                                <div class="row my-2"> 
                                    <div class="col px-auto mx-2">
                                        <label for="firstName" class="form-label">Kamera</label>
                                        <select class="form-select">
                                        <option>Yes</option>
                                        <option>No</option>
                                        </select>
                                    </div>    
                                    <div class="col px-auto mx-2">
                                        <label for="firstName" class="form-label">DVD</label>
                                        <select class="form-select">
                                        <option>Yes</option>
                                        <option>No</option>
                                        </select>
                                    </div>   
                                    <div class="col px-auto mx-2">
                                        <label for="firstName" class="form-label">RAM</label>
                                        <input type="number" name="" class="form-control" maxlength="2">
                                    </div>
                                </div>
                                <div class="row my-2">  
                                    <div class="col px-auto mx-2">
                                        <label for="firstName" class="form-label">VGA Discrete</label>
                                        <input type="text" name="" class="form-control" maxlength="30">
                                    </div>
                                    <div class="col px-auto mx-2">
                                        <label for="firstName" class="form-label">Harga</label>
                                        <input type="number" name="" class="form-control" maxlength="11">
                                    </div>  
                                </div> 
                                <div class="row mt-3">  
                                <div class="col-md-12 d-flex justify-content-end">
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alertModal">Simpan</button>
                                </div>                                     
                                </div>                                              
                            </form>
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
