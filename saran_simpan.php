<?php
	include('koneksi.php');
	//nama db 		//nama di web
	$nama			=	$_POST['nama'];
	$email			=	$_POST['email'];
	$saran			=	$_POST['saran'];
	
	$sql = mysqli_query($koneksi, "INSERT INTO tb_saran(id_saran, nama, email, saran) VALUES('', '$nama', '$email', '$saran')") or die(mysqli_error($koneksi)); //GANTI
				
				if($sql) //jika data berhasil ditambahkan, maka halaman yang akan terbuka adalah halaman namafile1
				{
					echo '<script>alert("Berhasil menambahkan data."); document.location="data_saran.php";</script>'; //GANTI
				}
				else //jika tid_saranak berhasi ditambahkan ke database, maka halaman yang akan terbuka adalah halaman namafile2
				{
					echo '<script>alert("Gagal melakukan proses tambah data"); document.location="tambah_saran.php";</script>'; //GANTI
				}
?>




