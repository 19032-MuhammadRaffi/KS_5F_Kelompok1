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
<!-- Tabel Data -->
            <div class="row py-2 mx-1">
                <h3 class="h3 mb-3 text-center pt-3">Tabel Data Laptop</h3>
                <form method="POST" class="form-group d-flex justify-content-end mb-3">
                    <input name="pencarian" class="form-control btn-light border-bottom rounded-0 shadow-none w-25" type="text" placeholder="Search" style="background: transparent; border: none; outline: hidden;">
                    <button name="searchData" type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                </form>
                <div class="table-responsive" style="max-height: 65vh;">
                    <table class="table table-bordered border-dark align-middle mx-auto" style="min-width: 2000px;">		              	
                        <thead class="bg-4 warna-2 text-center">
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
                                <td>Gambar Laptop</td>
                                <td>Harga</td>
                                <td>Stok</td>
                                <th style="width: 50px;">Aksi</th>                    
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            $no = 1;
                            $i = 0;
                            while ($row = mysqli_fetch_array($queryRead)){
                                $gambar = $row['gambar_laptop'];
                                $id_laptop[$i] = $row['id_laptop'];
                                $nama_laptop[$i] = $row['nama_laptop'];
                                $merk[$i] = $row['merk'];
                                $series[$i] = $row['series'];
                                $processor[$i] = $row['processor'];
                                $vga_discrete[$i] = $row['vga_discrete'];
                                $ram[$i] = $row['ram'];
                                $type_storage[$i] = $row['type_storage'];
                                $size_storage[$i] = $row['size_storage'];
                                $camera[$i] = $row['camera'];
                                $dvd[$i] = $row['dvd'];
                                $harga[$i] = $row['harga'];
                                $stok[$i] = $row['stok'];
                                echo '
                                <form method="POST" class="form-group" enctype="multipart/form-data">
                                    <div class="invisible position-absolute">
                                        <input type="text" class="form-control" name="getID" value="'.$id_laptop[$i].'">
                                    </div>
                                    <tr>
                                        <td class="text-center">'.$no++.'</td>
                                        <td class="text-center">'.$id_laptop[$i].'</td>
                                        <td class="text-center">'.$nama_laptop[$i].'</td>
                                        <td class="text-center">'.$merk[$i].'</td>
                                        <td class="text-center">'.$series[$i].'</td>
                                        <td class="text-center">'.$processor[$i].'</td>
                                        <td class="text-center">'.$vga_discrete[$i].'</td>
                                        <td class="text-center">'.$ram[$i].'GB</td>
                                        <td class="text-center">'.$type_storage[$i].'</td>
                                        <td class="text-center">'.$size_storage[$i].'GB</td>
                                        <td class="text-center">'.$camera[$i].'</td>
                                        <td class="text-center">'.$dvd[$i].'</td>
                                        <td class="text-center">'.'';
                                            if ($gambar=="") {
                                                echo '';
                                            } else {
                                                echo '<img src="../gambarLaptop/'.$gambar.'" style="height: 150px;">';
                                            }
                                            echo '
                                        </td>
                                    <td>Rp. '.number_format($row['harga'], 0, ',', '.').'</td>
                                    <td class="text-center">'.$row['stok'].'</td>
                                    <td>'?>
                                        <button class="btn btn-warning my-1" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="bi bi-pencil-square warna-2"></i></button>
                                        <button class="btn btn-danger my-1" data-bs-toggle="modal" data-bs-target="#hapusModal"><i class="bi bi-trash warna-2"></i></button>
                                    </td>                  
                                </tr><?php echo'
                                </form>';
                            }
                        ?>                                   
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
                <div class="modal fade" id="hapusModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                <option value="SSD">SSD</option>
                                                <option value="HDD">HDD</option>
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
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>    
                                        <div class="col px-auto mx-2">
                                            <label for="firstName" class="form-label">DVD</label>
                                            <select class="form-select">
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
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
