<!DOCTYPE html>
<html>
<head>
	<title>website education</title>
	<meta name="viewport" content="width=device-width">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="css/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="css/jquery.rateyo.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css" /> -->
	<!-- <link rel="stylesheet" type="text/css" href="css/meanmenu.min.css"> -->
	<link rel="stylesheet" type="text/css" href="inner-page-style.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700" rel="stylesheet">
</head>
<body>
<center>
<div id="page" class="site" itemscope itemtype="http://schema.org/LocalBusiness">
		<header class="site-header">
			<div class="top-header">
				<div class="container">
					<div class="top-header-left">
						<div class="top-header-block">
						</div>
					</div>
				</div>
			</div>
			<!-- Top header Close -->
			<div class="main-header">
				<div class="container">
					<div class="logo-wrap" itemprop="logo">
						<img src="images/logo7.jpg" alt="Logo Image" width="100px">
						<!-- <h1>Education</h1> -->
					</div>
					</center>		
				<center>
					<div class="nav-wrap">
						<nav class="nav-desktop">
							<ul class="menu-list">										
								<li><a href="dashboard.php">dashboard</a></li>
								<li><a href="data_satwa_admin.php">data satwa</a></li>
								<li><a href="data_saran.php">saran tamu</a></li>
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</nav>
						<div id="bar">
							<i class="fas fa-bars"></i>
						</div>
						<div id="close">
							<i class="fas fa-times"></i>
						</div>
					</div>
					</center>
					<section class="contact-page-section">
			<div class="container">
				<div class="people-info-wrap">
				<h2>Silahkan Edit Data Satwa</h2>
<?php
	include('koneksi.php'); 
    $id_satwa = $_GET['id_satwa'];
    $select = mysqli_query($koneksi, "SELECT * FROM tb_satwa WHERE id_satwa='$id_satwa'") or die(mysqli_error($koneksi));
    $data = mysqli_fetch_assoc($select);
?>

<form role="form" method="POST" action="data_satwa_admin_update.php">
  <div>
	<input type="text" placeholder="id_satwa" class="input- subject" name="id_satwa" required value="<?php echo $data['id_satwa']?>">
  </div>
  <div>
	<input type="text" placeholder="gambar" class="input- subject" name="gambar" required value="<?php echo $data['gambar']?>">
  </div>
  <div>
	<input type="text" placeholder="nama" class="input- subject" name="nama" required value="<?php echo $data['nama']?>">
  </div>
  <div>
	<input type="text" placeholder="biografi" class="input- subject" name="biografi" required value="<?php echo $data['biografi']?>">
  </div>
	<input type="submit" value="SIMPAN PERUBAHAN">
</form>
</div>
						</center>
		</section>

	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<!-- <script type="text/javascript" src="js/jquery.mmenu.all.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery.meanmenu.min.js"></script> -->
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>