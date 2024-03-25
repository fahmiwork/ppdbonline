<?php
include '../database/koneksi.php';

$id_pengumuman = $_POST['id_pengumuman'];
$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];

mysqli_query($koneksi, "UPDATE pengumuman SET id_pengumuman='$id_pengumuman', judul='$judul', deskripsi='$deskripsi', tanggal='$tanggal' WHERE id_pengumuman='$id_pengumuman'");
  
            
  header("location:../pengumuman.php?pesan=input");


?>