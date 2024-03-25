
<?php include './database/koneksi.php'; 
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
  header("location:index.php");
}
?>
<?php include  './template_admin/header.php';
?>

<?php
 include './template_admin/navbar.php';
?>
<?php

$page = 'pendaftaran'; include './template_admin/sidebar.php';
?>



<div class="main-panel">
			<div class="content">
				<div class="page-inner">
									<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Detail Dokumen</div>
									
								</div>
								<div class="card-body">
									<div class="form">
										



										<?php 
										 
										  $id_pendaftar = $_GET['id_pendaftar'];
										  $data = mysqli_query($koneksi, "SELECT * FROM tb_pendaftar WHERE id_pendaftar='$id_pendaftar'");
										  $nomor = 1;
										  while($d = mysqli_fetch_array($data)){
										  ?>


									




								 
									<br>
													<?php 
													if 
													($d['nama_dokumen'] == '') {
													          echo ' 


													          <div class="text-danger"><h5>Dokumen Belum Diupload</h5></div>';
													        } else{
													        	echo '<embed src="./pendaftaran/files/'. $d['nama_dokumen'] .'" width="800px" height="1000px"></embed>';

													        } ?>
											

										
								</div>
								<div class="card-footer">
									<div class="form">
										<div class="form-group from-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-12">

											</div>
											
										</div>
									</div>
									No. Pendaftaran : <?php echo $d['no_pendaftar']; ?><br>
									NISN            : <?php echo $d['nisn']; ?><br> 
									Nama Lengkap    : <?php echo $d['nama_lengkap']; ?><br>
									Jenis Kelamin   : <?php echo $d['jenis_kelamin']; ?><br>
									Agama           : <?php echo $d['agama']; ?><br>
									Alamat Rumah    : <?php echo $d['alamat_rumah']; ?><br>
									Nama Orangtua   : <?php echo $d['nama_orangtua']; ?><br>
									No. Hp Orangtua : <?php echo $d['no_hp_orangtua']; ?><br>
									No. Asal Sekolah : <?php echo $d['asal_sekolah']; ?><br><br>



 <div class="col-lg-4 col-md-9 col-sm-12"><b>Keputusan :</b> 
								  	<a class="btn btn-warning btn-sm" href="./pendaftaran/status_diterima.php?id_pendaftar=<?php echo $d['id_pendaftar']; ?>" onclick="return confirm('Apakah anda yakin ingin merubah status Diterima?')"><i class="far fa-edit"> Diterima</i></a> | <a class="btn btn-danger btn-sm" href="./pendaftaran/status_ditolak.php?id_pendaftar=<?php echo $d['id_pendaftar']; ?>" onclick="return confirm('Apakah anda yakin ingin merubah status Ditolak?')"><i class="far fa-window-close"> Ditolak</i></a>

												
											</div>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>



<?php
include './template_admin/footer.php';
?>

