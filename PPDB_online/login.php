<?php 
include 'database/koneksi.php';



// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"SELECT * FROM tb_pendaftar where username='$username' and password='$password'");



// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

 
// cek apakah username dan password di temukan pada database
	// cek jika user login sebagai admin
	if($cek > 0){
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:halaman_siswa.php");

;
	
}else{
	header("location:../index.php");
}
 
?>

