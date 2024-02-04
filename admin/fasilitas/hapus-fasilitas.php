<?php 

	include "../config/koneksi.php";
	
	$id = $_GET['id'];

	$sql = mysqli_query($connection, "DELETE FROM tb_fasilitas WHERE id_fasilitas='$id'");

	if($sql) {
		echo "<script>alert('Berhasil Menghapus')</script>";
		echo "<script>window.location.href='index.php?page=galeri'</script>";
	}

 ?>