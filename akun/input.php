<?php
include '../database/koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

mysqli_query($koneksi, "INSERT INTO tb_user VALUES('','$username','$password')");
header("location:../login_user.php?pesan=input");

?>

