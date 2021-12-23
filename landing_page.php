<?php
	require 'koneksi.php';
    $queryRead = mysqli_query($koneksi, "SELECT * FROM data_laptop LIMIT 6");
?>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SIMGL</title>
	<link rel="stylesheet" type="text/css" href="css/style-landingpage.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
	<header class="navbar">
		<div class="logo">
			<h2>SIMGL</h2>
		</div>
		<nav class="nav-bar">
			<a class="nav-item" href="#banner">Home</a>
			<a class="nav-item" href="#galeri">Products</a>
			<a class="nav-item" href="#footer">About</a>
			<a class="nav-item" href="#footer">Contact</a>
			<a class="btn btn-signin" href="login.php">Login</a>
		</nav>
	</header>
	<section class="banner" id="banner" style="background-image: url(banner.png);">
		<div class="text-banner">
			<h1>Check the Stock<br>of Laptop You Want to Buy Here!</h1>
		</div>
	</section>
	<section class="galery" id="galeri">
		<div class="title">
			<h3>Our Best Products</h3>
		</div>
		<div class="product">
			<?php
				while ($row = mysqli_fetch_array($queryRead)){?>
				<div class="galery-item">
					<div class="img-galery">
						<img src="gambarLaptop/<?php echo $row['gambar_laptop'] ?>" style="border-radius: 10px">
						<div class="detail-item">
							<h4><?php echo $row['merk'] ?></h4>
							<p><?php echo $row['nama_laptop'] ?></p>
							<h5><i class="bi bi-currency-dollar me-2"></i>Rp. <?php echo number_format($row['harga'], 0, ',', '.') ?></h5>
							<h6><i class="bi bi-bag me-2"></i><?php echo $row['stok'] ?> pcs</h6>
						</div>					
					</div>
				</div><?php
				};
				?>													
		</div>										
	</section>
	<footer id="footer">
		<div class="top-footer">
			<div class="logo">
				<h2>SIMGL</h2>
			</div>
			<div class="detail">
				<p>Situs Gudang Laptop Terpercaya & Terlengkap di Indonesia</p>
			</div>
		</div>
		<div class="bottom-footer">
			<div class="information">
				<h4 style="padding-bottom: 5px;">Information</h4>
				<ul class="info">
					<li style="padding-bottom: 5px;">About Us</li>
					<li style="padding-bottom: 5px;">Costumer Support</li>
					<li style="padding-bottom: 5px;">Features</li>
					<li style="padding-bottom: 5px;">Product Index</li>
					<li style="padding-bottom: 5px;">Privacy Policy</li>
					<li style="padding-bottom: 5px;">Terms & Condition</li>
					<li style="padding-bottom: 5px;">Help Center</li>
				</ul>
			</div>
			<div class="follow">
				<h4 style="padding-bottom: 10px;">Follow Us</h4>
				<ul class="sosial-media">
					<li><i class="bi bi-facebook"></i></li>
					<li><i class="bi bi-twitter"></i></li>
					<li><i class="bi bi-instagram"></i></li>
					<li><i class="bi bi-youtube"></i></li>
					<li><i class="bi bi-linkedin"></i></li>
					<li><i class="bi bi-line"></i></li>					
				</ul>
			</div>	
			<div class="contact">
				<h4 style="padding-bottom: 10px;">Contact Us</h4>
				<form>
					<label class="contact-label">Customer Service</label>
					<input type="text" name="" value="081312341234">
					<label class="contact-label">Email</label>
					<input type="mail" name="" value="simgl_service@gmail.com">
				</form>
			</div>
		</div>
	</footer>
</body>
</html>