<?php 

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "basket");




function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ){
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data){

	global $conn;

	// ambil data dari form
	$nama = htmlspecialchars($data["nama"]);
	$prodi = htmlspecialchars($data["prodi"]);
	$nim = htmlspecialchars($data["nim"]);
	$no_hp = htmlspecialchars($data["no_hp"]);
	$angkatan = htmlspecialchars($data["angkatan"]);
		
	// insert data
	$query = "INSERT INTO basket_tim VALUES
				('', '$nama', '$prodi', '$nim', '$no_hp', '$angkatan')
				";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);	

}

function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM basket_tim WHERE id = $id");
	return mysqli_affected_rows($conn);
}

function ubah($data){
	global $conn;

	// ambil data dari form
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$prodi = htmlspecialchars($data["prodi"]);
	$nim = htmlspecialchars($data["nim"]);
	$no_hp = htmlspecialchars($data["no_hp"]);
	$angkatan = htmlspecialchars($data["angkatan"]);
		
	// insert data
	$query = "UPDATE basket_tim SET
			nama = '$nama', prodi = '$prodi', nim = '$nim', no_hp = '$no_hp', angkatan = '$angkatan' WHERE id = $id
	";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

 ?>