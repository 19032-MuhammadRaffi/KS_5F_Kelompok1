<!-- Detail Modal -->     
    <div class="modal fade text-start" id="detail<?php echo $id_laptop[$i] ?>" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Detail Data Laptop</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="text-center">
                        <img src="../gambarLaptop/<?php echo $gambar[$i] ?>" style="height: 150px;">
                    </div>
                    <div class="invisible position-absolute">
                        <input type="text" class="form-control" name="id_laptop" value="<?php echo $id_laptop[$i] ?>" readonly>
                    </div>
                    <div class="row"> 
                        <div class="col px-auto mx-2">
                            <label for="firstName" class="form-label">Harga</label>
                            <input type="text" class="form-control" value="Rp. <?php echo number_format($harga[$i], 0, ',', '.')?>" readonly>
                        </div>                
                        <div class="col px-auto mx-2">
                            <label for="firstName" class="form-label">Series</label>
                            <input type="text" class="form-control"  value="<?php echo $series[$i] ?>" readonly>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col px-auto mx-2">
                            <label for="firstName" class="form-label">Nama Laptop</label>
                            <input type="text" class="form-control" value="<?php echo $nama_laptop[$i] ?>" readonly>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col px-auto mx-2">
                            <label for="firstName" class="form-label">Merk</label>
                            <input type="text" class="form-control" value="<?php echo $merk[$i] ?>" readonly>
                        </div>
                        <div class="col px-auto mx-2">
                            <label for="firstName" class="form-label">Processor</label>
                            <input type="text" class="form-control" value="<?php echo $processor[$i] ?>" readonly>
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col px-auto mx-2">
                            <label for="firstName" class="form-label">Type Storage</label>
                            <input type="text" class="form-control" value="<?php echo $type_storage[$i] ?>" readonly>
                        </div>   
                        <div class="col px-auto mx-2">
                            <label for="firstName" class="form-label">Size Storage</label>
                            <input type="text" class="form-control" value="<?php echo $size_storage[$i] ?>GB" readonly>
                        </div>
                    </div>  
                    <div class="row my-2">
                        <div class="col px-auto mx-2">
                            <label for="firstName" class="form-label">VGA Discrete</label>
                            <input type="text" class="form-control" value="<?php echo $vga_discrete[$i] ?>" readonly>
                        </div>
                    </div>
                    <div class="row my-2"> 
                        <div class="col px-auto mx-2">
                            <label for="firstName" class="form-label">RAM</label>
                            <input type="text" class="form-control" value="<?php echo $ram[$i] ?>GB" readonly>
                        </div>
                        <div class="col px-auto mx-2">
                            <label for="firstName" class="form-label">Kamera</label>
                            <input type="text" class="form-control" value="<?php echo $camera[$i] ?>" readonly>
                        </div>    
                        <div class="col px-auto mx-2">
                            <label for="firstName" class="form-label">DVD</label>
                            <input type="text" class="form-control" value="<?php echo $dvd[$i] ?>" readonly>
                        </div> 
                        <div class="col px-auto mx-2">
                            <label for="firstName" class="form-label">Stok</label>
                            <input type="text" class="form-control" value="<?php echo $stok[$i] ?>" readonly>
                        </div>
                    </div>
                    <div class="row mt-3">  
                        <div class="col-md-12 d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>                                     
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Modal Tambah Data -->
    <form method="POST" enctype="multipart/form-data">
        <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="headerLabel">Tambah Data Laptop</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start">
                        <div class="row py-1">
                            <div class="col-5 mt-1"><label>Series</label></div>
                            <div class=col>
                                <input type="text" class="form-control form-box" name="series">
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-5 mt-1"><label>Nama Laptop</label></div>
                            <div class=col>
                                <input type="text" class="form-control form-box" name="nama_laptop">
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-5 mt-1"><label>Merk</label></div>
                            <div class=col>
                                <input type="text" class="form-control form-box" name="merk">
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-5 mt-1"><label>Processor</label></div>
                            <div class=col>
                                <input type="text" class="form-control form-box" name="processor">
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-5 mt-1"><label>VGA Discrete</label></div>
                            <div class=col>
                                <input type="text" class="form-control form-box" name="vga_discrete">
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-5 mt-1"><label>RAM</label></div>
                            <div class=col>
                                <input type="number" class="form-control form-box" name="ram">
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-5 mt-1"><label>Type Storage</label></div>
                            <div class=col>
                                <select class="form-select" name="type_storage">
                                    <option value="SSD">SSD</option>
                                    <option value="HDD">HDD</option>
                                </select>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-5 mt-1"><label>Size Storage</label></div>
                            <div class=col>
                                <input type="number" class="form-control form-box" name="size_storage">
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-5 mt-1"><label>Camera</label></div>
                            <div class=col>
                                <select class="form-select" name="camera">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-5 mt-1"><label>DVD</label></div>
                            <div class=col>
                                <select class="form-select" name="dvd">
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                </select>
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-5 mt-1"><label>Gambar Laptop</label></div>
                            <div class=col>
                                <input type="file" class="form-control form-box" name="gambar_laptop">
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-5 mt-1"><label>Harga</label></div>
                            <div class=col>
                                <input type="number" class="form-control form-box" name="harga">
                            </div>
                        </div>
                        <div class="row mt-3">  
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alertTambahModal">Simpan</button>
                            </div>                                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade text-start" id="alertTambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Data sudah benar ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary" name="createData">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!-- Edit Modal -->     
    <form method="POST" class="form-group" enctype="multipart/form-data">
        <div class="modal fade text-start" id="edit<?php echo $id_laptop[$i] ?>" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Data Laptop</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="text-center">
                            <img src="../gambarLaptop/<?php echo $gambar[$i] ?>" style="height: 150px;">
                        </div>
                        <div class="invisible position-absolute">
                            <input type="text" class="form-control" name="id_laptop" value="<?php echo $id_laptop[$i] ?>">
                        </div>
                        <div class="row">                 
                            <div class="col px-auto mx-2">
                                <label for="firstName" class="form-label">Series</label>
                                <input type="text" name="series" class="form-control"  value="<?php echo $series[$i] ?>">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col px-auto mx-2">
                                <label for="firstName" class="form-label">Nama Laptop</label>
                                <input type="text" name="nama_laptop" class="form-control" value="<?php echo $nama_laptop[$i] ?>">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col px-auto mx-2">
                                <label for="firstName" class="form-label">Merk</label>
                                <input type="text" name="merk" class="form-control" value="<?php echo $merk[$i] ?>">
                            </div>
                            <div class="col px-auto mx-2">
                                <label for="firstName" class="form-label">Processor</label>
                                <input type="text" name="processor" class="form-control" value="<?php echo $processor[$i] ?>">
                            </div>
                        </div> 
                        <div class="row my-2">
                            <div class="col px-auto mx-2">
                                <label for="firstName" class="form-label">Type Storage</label>
                                <select class="form-select" name="type_storage">
                                    <option <?php if ($type_storage[$i] == "SSD") { echo 'selected'; }?> value="SSD">SSD</option>
                                    <option <?php if ($type_storage[$i] == "HDD") { echo 'selected'; }?> value="HDD">HDD</option>
                                </select>
                            </div>   
                            <div class="col px-auto mx-2">
                                <label for="firstName" class="form-label">Size Storage</label>
                                <input type="number" name="size_storage" class="form-control" value="<?php echo $size_storage[$i] ?>">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col px-auto mx-2">
                                <label for="firstName" class="form-label">VGA Discrete</label>
                                <input type="text" name="vga_discrete" class="form-control" value="<?php echo $vga_discrete[$i] ?>">
                            </div>
                            <div class="col px-auto mx-2">
                                <label for="firstName" class="form-label">RAM</label>
                                <input type="number" name="ram" class="form-control" value="<?php echo $ram[$i] ?>">
                            </div>
                        </div>
                        <div class="row my-2"> 
                            <div class="col px-auto mx-2">
                                <label for="firstName" class="form-label">Kamera</label>
                                <select class="form-select" name="camera">
                                    <option <?php if ($camera[$i] == "Yes") { echo 'selected'; }?> value="Yes">Yes</option>
                                    <option <?php if ($camera[$i] == "No") { echo 'selected'; }?> value="No">No</option>
                                </select>
                            </div>    
                            <div class="col px-auto mx-2">
                                <label for="firstName" class="form-label">DVD</label>
                                <select class="form-select" name="dvd">
                                    <option <?php if ($dvd[$i] == "Yes") { echo 'selected'; }?> value="Yes">Yes</option>
                                    <option <?php if ($dvd[$i] == "No") { echo 'selected'; }?> value="No">No</option>
                                </select>
                            </div> 
                        </div>
                        <div class="row my-2">
                            <div class="col px-auto mx-2">
                                <label for="gambar_laptop" class="form-label">Gambar Laptop</label>
                                <input type="file" name="gambar_laptop" class="form-control">
                            </div>  
                            <div class="col px-auto mx-2">
                                <label for="firstName" class="form-label">Harga</label>
                                <input type="number" name="harga" class="form-control" value="<?php echo $harga[$i] ?>">
                            </div>  
                        </div> 
                        <div class="row mt-3">  
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alertEditModal<?php echo $id_laptop[$i] ?>">Simpan</button>
                            </div>                                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade text-start" id="alertEditModal<?php echo $id_laptop[$i] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Edit data <?php echo $id_laptop[$i] ?> ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary" name="editData">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
<!-- Tombol Konfirmasi Hapus -->
    <form method="POST" class="form-group" enctype="multipart/form-data">
        <div class="modal fade text-start" id="hapus<?php echo $id_laptop[$i] ?>" tabindex="-1" aria-labelledby="alertHapusModal" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Hapus data <?php echo $id_laptop[$i] ?> ?<br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button name="hapusData" type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
