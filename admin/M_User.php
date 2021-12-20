<!-- Modal Tambah Data -->
    <form method="POST">
        <div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="headerLabel">Pendaftaran User</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-start">
                        <div class="row py-1">
                            <div class="col-5 mt-1"><label>ID User</label></div>
                            <div class=col>
                                <input type="text" class="form-control form-box" name="id_user">
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-5 mt-1"><label>Password</label></div>
                            <div class=col>
                                <input type="password" class="form-control form-box" name="password">
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-5 mt-1"><label>Nama</label></div>
                            <div class=col>
                                <input type="text" class="form-control form-box" name="nama">
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-5 mt-1"><label>No HP</label></div>
                            <div class=col>
                                <input type="text" class="form-control form-box" name="no_hp">
                            </div>
                        </div>
                        <div class="row py-1">
                            <div class="col-5 mt-1"><label>Hak Akses</label></div>
                            <div class=col>
                                <select class="form-select" name="hak_akses">
                                    <option value="Admin">Admin</option>
                                    <option value="Staff">Staff</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-3">  
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alertTambahModal">Daftar</button>
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
                        <button type="submit" class="btn btn-primary" name="createUser">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </form> 
<!-- Edit Modal -->     
    <form method="POST" class="form-group">
        <div class="modal fade text-start" id="editUser<?php echo $row['id_user'] ?>" tabindex="-1" aria-labelledby="alertModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Edit Data Laptop</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="invisible position-absolute">
                            <input type="text" class="form-control" name="id_user" value="<?php echo $row['id_user'] ?>" readonly>
                        </div>
                        <div class="row my-2">
                            <div class="col px-auto mx-2">
                                <label for="firstName" class="form-label">Nama</label>
                                <input type="text" name="nama" class="form-control" value="<?php echo $row['nama'] ?>">
                            </div>
                        </div>
                        <div class="row my-2">
                            <div class="col px-auto mx-2">
                                <label for="firstName" class="form-label">No HP</label>
                                <input type="text" name="no_hp" class="form-control" value="<?php echo $row['no_hp'] ?>">
                            </div>
                        </div> 
                        <div class="row my-2">
                            <div class="col px-auto mx-2">
                                <label for="firstName" class="form-label">Hak Akses</label>
                                <select class="form-select" name="hak_akses">
                                    <option <?php if ($row['hak_akses'] == "Admin") { echo 'selected'; }?> value="Admin">Admin</option>
                                    <option <?php if ($row['hak_akses'] == "Staff") { echo 'selected'; }?> value="Staff">Staff</option>
                                </select>
                            </div>   
                        </div>
                        <div class="row my-2">
                            <div class="col px-auto mx-2">
                                <label for="firstName" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Opsional">
                            </div>
                        </div>  
                        <div class="row mt-3">  
                            <div class="col-md-12 d-flex justify-content-end">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#alertEditUser<?php echo $row['id_user'] ?>">Simpan</button>
                            </div>                                     
                        </div>   
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade text-start" id="alertEditUser<?php echo $row['id_user'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Edit data <?php echo $row['id_user'] ?> ?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary" name="editUser">Yes</button>
                    </div>
                </div>
            </div>
        </div>  
    </form>  
<!-- Tombol Konfirmasi Hapus -->
    <form method="POST" class="form-group">
        <div class="invisible position-absolute">
            <input type="text" class="form-control" name="id_user" value="<?php echo $row['id_user'] ?>" readonly>
        </div>
        <div class="modal fade text-start" id="hapusUser<?php echo $row['id_user'] ?>" tabindex="-1" aria-labelledby="alertHapusModal" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Pemberitahuan</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Hapus data <?php echo $row['id_user'] ?> ?<br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button name="hapusUser" type="submit" class="btn btn-primary">Yes</button>
                    </div>
                </div>
            </div>
        </div>
    </form>