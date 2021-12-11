<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Data Laptop</title>
</head>

<body>
    <!-- form input -->
    <div class="container">
        <div class="row my-4">
            <h3 class="fs-4 text-center mb-4">Tambah Data Laptop</h3>
            <form method="POST" class="mx-auto px-5" style="width: 700px;">
                <div class="row pb-3">
                    <div class="col-3"><label>ID Laptop</label></div>
                    <div class="col">
                        <input type="text" class="form-control" name="id_laptop">
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3"><label>Series</label></div>
                    <div class="col">
                        <input type="text" class="form-control form-box" name="series">
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3"><label>Merk</label></div>
                    <div class="col">
                        <input type="text" class="form-control form-box" name="merk">
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3"><label>processor</label></div>
                    <div class="col">
                        <input type="text" class="form-control form-box" name="processor">
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3"><label>VGA Discrete</label></div>
                    <div class="col">
                        <input type="text" class="form-control form-box" name="vga_discrete">
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3"><label>RAM</label></div>
                    <div class="col">
                        <input type="number" class="form-control form-box" name="ram">
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3"><label>Storage Type</label></div>
                    <div class="col">
                        <select name="type_storage" class="form-select">
                            <option value="SSD">SSD</option>
                            <option value="HDD">HDD</option>
                        </select>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3"><label>Size Storage</label></div>
                    <div class="col">
                        <input type="number" class="form-control form-box" name="size_storage">
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3"><label>Camera</label></div>
                    <div class="col">
                        <select name="camera" class="form-select">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3"><label>DVD</label></div>
                    <div class="col">
                        <select name="dvd" class="form-select">
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3"><label>Harga</label></div>
                    <div class="col">
                        <input type="number" class="form-control form-box" name="harga">
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3"><label>Stok</label></div>
                    <div class="col">
                        <input type="number" class="form-control form-box" name="stok">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col ps-5">
                        <button class="btn btn-primary" type="submit" style="width: 30%;" name="Data_Laptop">Tambah</button>
                    </div>
                </div>
            </form>
        </div>
</body>

</html>