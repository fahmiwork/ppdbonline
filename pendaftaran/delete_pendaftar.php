<?php 
include '../database/koneksi.php';
$id_pendaftar = $_GET['id_pendaftar'];
mysqli_query($koneksi,"DELETE FROM tb_pendaftar WHERE id_pendaftar='$id_pendaftar'");
 
header("location:../data_pendaftaran.php?pesan=hapus");
?>
