<?php 

	require 'functions.php';



	// ambil data url id
	$id = $_GET["id"];

	// query data basket_tim berdasarkan id
	$mhs = query("SELECT * FROM basket_tim WHERE id = $id")[0];

	if(isset($_POST["submit"])){
		
		// cek apakah data berhasil diubah atau tidak
		if( ubah($_POST) > 0 ){
			echo "
				<script>
					alert('data berhasil diubah');
					document.location.href = 'index.php';
				</script>
			";
		}
		else{
			echo "
				<script>
					alert('data gagal diubah');
					document.location.href = 'index.php';
				</script>
			";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Anggota ITERA Basketball Team</title>

	<style type="text/css">
		ul{
			list-style-type: none;
		}
	</style>
</head>
<body>

	<h1>Ubah Data Anggota Pendaftar</h1>

	<form action="" method="POST">

		<input type="hidden" name="id" value="<?= $mhs["id"]?>">

		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" id="nama" name="nama"></td>
			</tr>
			<tr>
				<td>Prodi</td>
				<td>:</td>
				<td><input type="text" id="prodi" name="prodi"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" id="nim" name="nim"></td>
			</tr>
			<tr>
				<td>No HP</td>
				<td>:</td>
				<td><input type="text" id="no_hp" name="no_hp"></td>
			</tr>
			<tr>
				<td>Angkatan</td>
				<td>:</td>
				<td><input type="text" id="angkatan" name="angkatan"></td>
			</tr>
		</table>
		<button type="submit" name="submit">Ubah Data</button>

	</form>

</body>
</html>	
