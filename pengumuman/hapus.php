<?php
include '../database/koneksi.php';

$id_pengumuman = $_GET['id_pengumuman'];
mysqli_query($koneksi, "DELETE FROM pengumuman WHERE id_pengumuman='$id_pengumuman'");
 
header("location:../pengumuman.php?pesan=hapus");

?>