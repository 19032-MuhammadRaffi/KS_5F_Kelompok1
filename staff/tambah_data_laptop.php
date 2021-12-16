<?php
    require 'function/F_data_laptop.php';
?>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/styles.css" />
    <title>Data Laptop</title>
</head>
<body
<!-- Form Input Data -->
                    <div class="col-md-12">
                        <form method="POST" class="form-group mx-2 justify-content-center" enctype="multipart/form-data">
                            <h3 class="h3 mb-4 text-center">Form Input Data Laptop</h3>
                            <div class="row justify-content-md-center">
                                <div class="col-lg-4 mx-2 my-1">
                                    <label for="series" class="form-label">Series</label>
                                    <input type="text" name="series" class="form-control">
                                </div>
                                <div class="col-lg-4 mx-2 my-1">
                                    <label for="nama_laptop" class="form-label">Nama Laptop</label>
                                    <input type="text" name="nama_laptop" class="form-control">
                                </div>
                            </div>
                            <div class="row justify-content-md-center">    
                                <div class="col-lg-4 mx-2 my-1">
                                    <label for="merk" class="form-label">Merk</label>
                                    <input type="text" name="merk" class="form-control">
                                </div>                  
                                <div class="col-lg-4 mx-2 my-1">
                                    <label for="processor" class="form-label">Processor</label>
                                    <input type="text" name="processor" class="form-control">
                                </div>
                            </div>

                                <div class="col-lg-4 mx-2 my-1">
                                    <label for="size_storage" class="form-label">Size Storage</label>
                                    <input type="text" name="size_storage" class="form-control" placeholder="GB">
                                </div>
                            </div>
                            <div class="row justify-content-md-center">
                                <div class="col-lg-4 mx-2 my-1">
                                    <label for="camera" class="form-label">Camera</label>
                                    <select class="form-select" name="camera">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <div class="col-lg-4 mx-2 my-1">
                                    <label for="dvd" class="form-label">DVD</label>
                                    <select class="form-select" name="dvd">
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div> 
                            </div>
                            <div class="row justify-content-md-center">  
                                <div class="col-lg-4 mx-2 my-1">
                                    <label for="gambar_laptop" class="form-label">Gambar Laptop</label>
                                    <input type="file" name="gambar_laptop" class="form-control">
                                </div> 
                                <div class="col-lg-4 mx-2 my-1">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="number" name="harga" class="form-control" placeholder="Rp. ">
                                </div>
                            </div> 
                            <div class="row mt-3">  
                                <div class="col-md-12 mx-2 d-flex justify-content-center">
                                    <button class="w-10 btn btn-primary btn-md" data-bs-toggle="modal" data-bs-target="#alertModal" onclick="action()"><label>Simpan</label></button>
                                    <!-- <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alertModal" onclick="action()" style="width: 200px;"><label>Simpan</label></button> -->
                                </div>                                     
                            </div>      
                            <div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="alertModalLabel">PEMBERITAHUAN !</h5>
                                            <button class="btn-close" data-bs-dismiss="modal"></button>
                                        </div>
                                        <div class="modal-body">Simpan Data Laptop ?</div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" data-bs-dismiss="modal">Keluar</button>
                                            <button type="submit" name="createData" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alertModal1">Simpan data</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>  
                    </div>
                </div>	
            </div>  
        </div>
    </div>
    </script>
</body>
</html>
