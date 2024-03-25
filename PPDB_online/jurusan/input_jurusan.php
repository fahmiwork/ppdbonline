<?php

include '../database/koneksi.php';



$lokasi_file = $_FILES['gambar']['tmp_name'];
$gambar   = $_FILES['gambar']['name'];
// Tentukan folder untuk menyimpan file
$folder = "files/$gambar";
// tanggal sekarang




// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$gambar</b> sukses di upload";
  
  // Masukkan informasi file ke database
 $koneksi = mysqli_connect("localhost","root", "", "ppdb");

$query =  mysqli_query($koneksi, "insert into tb_jurusan (nama_jurusan, gambar, deskripsi) values ('{$_POST['nama_jurusan']}','$gambar','{$_POST['deskripsi']}')");
  
            
  mysqli_query($koneksi,$query);
  header("location:../data_jurusan.php?pesan=input");

}






  ?>
