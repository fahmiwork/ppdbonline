<?php 
										 
$id_pendaftar = $_GET['id_pendaftar'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_pendaftar WHERE id_pendaftar='$id_pendaftar'");
$nomor = 1;


    // fungsi header dengan mengirimkan raw data excel
    header("Content-type: application/vnd-ms-excel");      
    // membuat nama file ekspor "data-anggota.xls"
    header("Content-Disposition: attachment; filename=data-pendaftar_id.xls");    
    // data source
    include 'data_excel_id.php';
?>