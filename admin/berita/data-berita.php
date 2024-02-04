<?php 

	$author = $_SESSION['pengguna'];

	$sql = mysqli_query($connection, "SELECT * FROM tb_berita ORDER BY tanggal DESC");

 ?>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-header">
				<h5>Data Postingan Berita</h5>
			</div>
			<div class="card-body">
				<table class="table table-bordered">
					<tr class="text-center">
						<th>No</th>
						<th>Judul</th>
						<th>Artikel</th>
						<!-- <th>Image</th> -->
						<th>Tanggal</th>
						<th>pengarang</th>
						<th>Tindakan</th>
					</tr>
				<?php $no = 1; foreach($sql as $data): ?>
					<tr>
						<td><?= $no++; ?></td>
						<td><?= $data['judul_berita'] ?></td>
						<td><?= substr($data['artikel_berita'], 0, 100) ?></td>
<!-- 						<td class="text-center">
							<img src="../assets/file/post/<?= $data['img'] ?>" width="80" height="50">
						</td> -->
						<td><?= $data['tanggal'] ?></td>
						<td><?= $data['pengarang'] ?></td>
						<td class="text-center">
							<a href="index.php?page=hapus-berita&id=<?=$data['id_berita'] ?>" class="btn btn-danger">
								<i class="fas fa-trash"></i>
							</a>
							<a href="index.php?page=edit-berita&id=<?=$data['id_berita'] ?>" class="btn btn-warning text-white">
								<i class="fas fa-edit"></i>
							</a>
						</td>
					</tr>
				<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>
</div>