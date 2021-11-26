<?php 
	
require 'functions.php';



$mahasiswa = query("SELECT * FROM basket_tim");

?>	

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
</head>
<body>

	<h1>Data Pendaftar Anggota ITERA Basketball Team</h1>
	<br>
	<table border='1' cellpadding="10" cellspacing="0">
		
		<tr>
			<th>No.</th>
			<th>Aksi</th>
			<th>Nama</th>
			<th>Prodi</th>
			<th>NIM</th>
			<th>No HP</th>
			<th>Angkatan</th>
		</tr>

		<?php $i=1; ?>
		<?php foreach( $mahasiswa as $row):?>
		
			<tr>
				<td><?= $i ?></td>
				<td>
					<a href="ubah.php?id=<?= $row["id"];?>">Ubah</a> |
					<a href="hapus.php?id=<?= $row["id"];?>" onclick="return contifrm('yakin?')">Hapus</a>
				</td>
				<td><?= $row["nama"] ?></td>
				<td><?= $row["prodi"] ?></td>
				<td><?= $row["nim"] ?></td>
				<td><?= $row["no_hp"] ?></td>
				<td><?= $row["angkatan"] ?></td>
			</tr>
		<?php $i++; ?>
		<?php endforeach; ?>


	</table>
	<br><a href="tambah.php">Tambah Data</a>		
</body>
</html>