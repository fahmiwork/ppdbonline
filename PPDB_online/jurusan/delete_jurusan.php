<?php 
include '../database/koneksi.php';
$id_jurusan = $_GET['id_jurusan'];
mysqli_query($koneksi,"DELETE FROM tb_jurusan WHERE id_jurusan='$id_jurusan'");
 
header("location:../data_jurusan.php?pesan=hapus");
?>

