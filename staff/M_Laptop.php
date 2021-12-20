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
                </div>
            </div>
        </div>
    </div>