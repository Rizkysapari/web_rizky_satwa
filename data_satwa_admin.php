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
								<li><a href="dashboard_admin.php">dashboard</a></li>
								<li><a href="data_satwa_admin.php">data satwa</a></li>
								<li><a href="data_saran.php">saran tamu</a></li>
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
	<form method="GET" action="data_satwa_admin.php" style="text-align: center;">
	<label>Kata Pencarian : </label>
	<input type="text" name="kata_cari" value="<?php if(isset($_GET['kata_cari'])) { echo $_GET['kata_cari']; } ?>"  />
	<button type="submit">Cari</button>
</form>
<div>
<center>
<a href="data_satwa_admin_tambah.php">+Tambah data satwa</a>
</center>
</div>
<hr>
<div>
<table border="1" id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>id_satwa</th>
			<th>gambar</th>
			<th>nama</th>
			<th>biografi</th>
			<th>keterangan</th>
		</tr>
	</thead>
	<tbody>
		<?php
		include('koneksi.php');
			if(isset($_GET['kata_cari'])) {
				$kata_cari = $_GET['kata_cari'];
				$query = "SELECT * FROM tb_satwa WHERE id_satwa like '%".$kata_cari."%' OR gambar like '%".$kata_cari."%' OR nama like '%".$kata_cari."%' OR biografi like '%".$kata_cari."%'  ORDER BY id_satwa ASC";
			} else {
				$query = "SELECT * FROM tb_satwa ORDER BY id_satwa ASC";
			}
				
			$result = mysqli_query($koneksi, $query);

			if(!$result) {
				die("Query Error : ".mysqli_errno($koneksi)." - ".mysqli_error($koneksi));
			}
			while ($row = mysqli_fetch_assoc($result)) {
		?>
		<tr>
			<td align="center"><?php echo $row['id_satwa']; ?></td>
			<td><img src="images/<?php echo $row['gambar']; ?>" width="100px"></td>
			<td><?php echo $row['nama']; ?></td>
			<td><?php echo $row['biografi']; ?></td>
			<td><?php echo '
			  <a href="data_satwa_admin_edit.php?id_satwa='.$row['id_satwa'].'" class="badge badge-warning">Edit</a> 
			  <a href="data_satwa_admin_delete.php?id_satwa='.$row['id_satwa'].'" class="badge badge-danger" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
			  ';?>
			</td>
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