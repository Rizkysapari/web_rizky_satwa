<?php
	include('koneksi.php');
	//nama db 		//nama di web
	$id_satwa				=	$_POST['id_satwa'];
	$gambar		=	$_POST['gambar'];
	$nama		=	$_POST['nama'];
	$biografi			=	$_POST['biografi'];
	
	
	$sql = mysqli_query($koneksi, "INSERT INTO tb_akun(id_satwa, gambar, nama, biografi) VALUES('$id_satwa', '$gambar', '$nama', '$biografi')") or die(mysqli_error($koneksi)); //GANTI
				
				if($sql) //jika data berhasil ditambahkan, maka halaman yang akan terbuka adalah halaman namafile1
				{
					echo '<script>alert("Berhasil menambahkan data."); document.location="data_satwa_admin.php";</script>'; //GANTI
				}
				else //jika tid_satwaak berhasi ditambahkan ke database, maka halaman yang akan terbuka adalah halaman namafile2
				{
					echo '<script>alert("Gagal melakukan proses tambah data"); document.location="data_satwa_admin_tambah.php";</script>'; //GANTI
				}
?>




