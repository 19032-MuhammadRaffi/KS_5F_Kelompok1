<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/styles.css" />
    <title>Data Transaksi</title>
</head>
<body>
    <div class="d-flex" id="wrapper">
        <?php include 'sidebar.php'; ?>
            <div class="container-fluid px-4">                        
<!-- Tabel Data -->
                <div class="row py-2 mx-1">
                    <h3 class="h3 mb-3 text-center pt-3">History Data Transaksi</h3>
                    <form class="form-group d-flex justify-content-end mb-3">
                        <input class="form-control btn-light border-bottom rounded-0 shadow-none w-25" type="text" placeholder="Search" style="background: transparent; border: none; outline: hidden;">
                        <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                    </form>
                        <div class="table-responsive" style="max-height: 250px;">
                            <table class="table table-bordered border-dark align-middle text-center mx-auto">		              	
                                <thead class="bg-4 warna-2">
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Transaksi</th>
                                        <th>Keterangan</th>
                                        <th>Nama User</th>
                                        <th>Nama Laptop</th>
                                        <th>Series</th> 
                                        <th>Jumlah</th>                   
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>No</td>
                                        <td>Tanggal Transaksi</td>
                                        <td>Keterangan</td>
                                        <td>Nama Laptop</td>
                                        <td>Nama User</td>
                                        <td>Series</td>
                                        <td>Jumlah</td>          
                                    </tr>                                   
                                </tbody>
                            </table>
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
