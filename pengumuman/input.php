<?php
include '../database/koneksi.php';

$judul = $_POST['judul'];
$deskripsi = $_POST['deskripsi'];
$tanggal = $_POST['tanggal'];

mysqli_query($koneksi, "INSERT INTO pengumuman VALUES ('','$judul','$deskripsi','$tanggal')");
  
            
  header("location:../pengumuman.php?pesan=input");


?>