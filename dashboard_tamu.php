<?php
session_start();
if (!isset($_SESSION["username"])) 
{
	echo "Anda harus login dulu <br><a href='login.php'>Klik disini</a>";
	exit;
}
$username=$_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="copyright" content="MACode ID, https://macodeid.com">
  <title>TOKO KURANG DUIT</title>
  <link rel="stylesheet" href="assets/vendor/animate/animate.css">
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/maicons.css">
  <link rel="stylesheet" href="assets/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light navbar-float">
      <div class="container">
        <a href="" class="navbar-brand">TOKO <span class="text-primary">KURANG DUIT</span></a>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarContent">
          <ul class="navbar-nav ml-lg-4 pt-3 pt-lg-0">
            <li class="nav-item active">
              <a href="dashboard_pembeli.php" class="nav-link">Home</a>
            </li>
			<li class="nav-item">
              <a href="data_produk.php" class="nav-link">data produk</a>
            </li>
			<li class="nav-item">
              <a href="logout.php" class="nav-link">Logout</a>
            </li>
          </ul>
		</div>

        <div class="ml-auto">
        </div>
      </div>
    </nav>
  </header>
 
  <main>
    <div class="page-section">
      <div class="container">
        <div class="text-center wow fadeInUp">
          <div class="subhead">
		    <div class="page-section border-top">
			  <div class="container">

			      
                <h1 div class="mb-4"> Selamat Datang
				<span class="text-primary">
				  <?php 
				  require_once ('koneksi.php');
					$query = "SELECT * FROM tb_akun WHERE username='$_SESSION[username]'";
					$result = mysqli_query($koneksi, $query);	
					while($data = mysqli_fetch_assoc($result) )
					{
					  ?>
						<?php echo $data['username']; ?>
					  <?php 
					} 				
				  ?>
				</span>
			    </h1>
				<h1 div class="mb-4"> TOKO KURANG DUIT </h1>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>



  </main>
</body>
</html>

<script src="assets/js/jquery-3.5.1.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/wow/wow.min.js"></script>
<script src="assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/animateNumber/jquery.animateNumber.min.js"></script>
<script src="assets/js/google-maps.js"></script>
<script src="assets/js/theme.js"></script>