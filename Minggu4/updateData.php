<?php
include "connection.php";
$id=$_GET['id'];
 
$sql="select * from mahasiswa WHERE nim='$id'";

$hasil=mysqli_query($kon,$sql);
 
$data=mysqli_fetch_array($hasil);

?>
    <form id="form_mhs_update" method="post">

        <label>NIM</label><br>
        <input type="text" name="nim" value="<?php echo $data['nim'];?>"><br><br>

        <label>Nama</label><br>
        <input type="text" name="nama" value="<?php echo $data['nama'];?>"><br><br>

        <label>Prodi</label><br>
        <input type="text" name="prodi" value="<?php echo $data['prodi'];?>"><br><br>

        <label>Angkatan</label><br>
        <input type="text" name="angkatan" value="<?php echo $data['angkatan'];?>"><br><br>
        
        <button id="btn_submitUpdate" type="submit" value="Update" id="saveFile">Update</button>
    </form>