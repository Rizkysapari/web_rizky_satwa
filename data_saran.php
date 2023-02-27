<!DOCTYPE html>
<html>
<head>
	<title>WEB SATWA LANGKA</title>
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
								<li><a href="saran.php">saran tamu</a></li>
								<li><a href="logout.php">logout</a></li>
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
				</div>
			</div>
	<form method="GET" action="data_saran.php" style="text-align: center;">
	<label>Kata Pencarian : </label>
	<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
	<button type="submit">Cari</button>
</form>
<hr>
<div>
<table border="1" id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>id_saran</th>
			<th>nama</th>
			<th>email</th>
			<th>isi saran</th>
			
		</tr>
	</thead>
	<tbody>
		<?php
		include('koneksi.php');
			if(isset($_GET['kata_cari'])) {
				$kata_cari = $_GET['kata_cari'];
				$query = "SELECT * FROM tb_saran WHERE id_saran like '%".$kata_cari."%' OR nama like '%".$kata_cari."%' OR email like '%".$kata_cari."%' OR saran like '%".$kata_cari."%'  ORDER BY id_saran ASC";
			} else {
				$query = "SELECT * FROM tb_saran ORDER BY id_saran ASC";
			}
				
			$result = mysqli_query($koneksi, $query);

			if(!$result) {
				die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
			}
			while ($row = mysqli_fetch_assoc($result)) {
		?>
		<tr>
			<td><?php echo $row['id_saran']; ?></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['saran']; ?></td>
		</tr>
		<?php
		}
		?>
	</tbody>
</table>
</div>
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