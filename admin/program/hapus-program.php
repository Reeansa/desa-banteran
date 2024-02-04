<?php 

	include "../config/koneksi.php";
	
	$id = $_GET['id'];

	$sql = mysqli_query($connection, "DELETE FROM tb_program WHERE id_program='$id'");

	if($sql) {
		echo "<script>alert('Berhasil Menghapus')</script>";
		echo "<script>window.location.href='index.php?page=tampil-program'</script>";
	}
 ?>