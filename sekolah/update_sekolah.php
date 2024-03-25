<?php
include '../database/koneksi.php';

$id_sekolah = $_POST['id_sekolah'];
$nama_sekolah = $_POST['nama_sekolah'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

mysqli_query($koneksi, "UPDATE tb_sekolah SET id_sekolah='$id_sekolah', nama_sekolah='$nama_sekolah', alamat='$alamat', no_telp='$no_telp' WHERE id_sekolah='$id_sekolah'");
  
            
  header("location:../data_sekolah.php?pesan=input");


?>