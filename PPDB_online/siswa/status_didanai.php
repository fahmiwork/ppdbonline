<?php 
 
include '../aksilogin/config.php';
$id_siswa = $_GET['id_siswa'];


// $bobot = $_POST['bobot'];

mysqli_query($koneksi, "UPDATE tb_siswa SET  status_bantuan='Didanai' WHERE id_siswa='$id_siswa'");
 
header("location:../calon_didanai.php?");
 
?>