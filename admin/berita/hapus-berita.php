<?php 

	include "../config/koneksi.php";
	
	$id = $_GET['id'];

	$sql = mysqli_query($connection, "DELETE FROM tb_berita WHERE id_berita='$id'");

	if($sql) {
		echo "<script>alert('Berhasil Menghapus')</script>";
		echo "<script>window.location.href='index.php?page=tampil-berita'</script>";
	}

 ?>