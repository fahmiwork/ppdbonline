

<?php

include '../database/koneksi.php';



$lokasi_file = $_FILES['nama_dokumen']['tmp_name'];
$nama_dokumen   = $_FILES['nama_dokumen']['name'];
// Tentukan folder untuk menyimpan file
$folder = "files/$nama_dokumen";
// tanggal sekarang




// Apabila file berhasil di upload
if (move_uploaded_file($lokasi_file,"$folder")){
  echo "Nama File : <b>$nama_dokumen</b> sukses di upload";
  
  // Masukkan informasi file ke database
$koneksi = mysqli_connect("localhost","root", "", "ppdb");
$query =  mysqli_query($koneksi, "insert into tb_pendaftar (no_pendaftar, nisn, nama_lengkap, jenis_kelamin, agama, alamat_rumah, nama_orangtua, no_hp_orangtua, asal_sekolah, nama_dokumen, username, password, status_pendaftaran, tgl) values ('{$_POST['no_pendaftar']}','{$_POST['nisn']}','{$_POST['nama_lengkap']}','{$_POST['jenis_kelamin']}','{$_POST['agama']}','{$_POST['alamat_rumah']}','{$_POST['nama_orangtua']}','{$_POST['no_hp_orangtua']}','{$_POST['asal_sekolah']}','$nama_dokumen','{$_POST['username']}','{$_POST['password']}','{$_POST['status_pendaftaran']}','{$_POST['tgl']}' )");
  
            
  mysqli_query($koneksi,$query);
  header("location:../pendaftaran.php?pesan=input");

}






  ?>
