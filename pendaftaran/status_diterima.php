<?php 
 
include '../database/koneksi.php';
$id_pendaftar = $_GET['id_pendaftar'];


// $bobot = $_POST['bobot'];

mysqli_query($koneksi, "UPDATE tb_pendaftar SET  status_pendaftaran='Diterima' WHERE id_pendaftar='$id_pendaftar'");
 
header("location:../data_pendaftaran.php?");
 
?>