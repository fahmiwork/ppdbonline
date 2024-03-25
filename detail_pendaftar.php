
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


									




								<div class="card-footer">
									<div class="form">
										<div class="form-group from-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-12">

											</div>
											
										</div>
									</div>
									<h5><b>A. KETERANGAN CALON PESERTA DIDIK</b></h5>
									No. Pendaftaran : <?php echo $d['no_pendaftar']; ?><br>
									Nama Lengkap    : <?php echo $d['nama_lengkap']; ?><br>
									Jenis Kelamin   : <?php echo $d['jenis_kelamin']; ?><br>
									NIK    : <?php echo $d['nik']; ?><br>
									Tempat, Tgl. Bln. Thn. Lahir : <?php echo $d['ttl']; ?><br>
									Agama           : <?php echo $d['agama']; ?><br>
									Alamat Tempat Tinggal : <?php echo $d['alamat_rumah']; ?><br>
									Tempat Tinggal   : <?php echo $d['tempat_tinggal']; ?><br>
									Mode Transportasi Kesekolah   : <?php echo $d['mode_transportasi']; ?><br>
									No. Telp: <?php echo $d['no_telp']; ?><br>
									No. KPS : <?php echo $d['no_kps']; ?><br><br>

									<h5><b>B. KETERANGAN ORANGTUA KANDUNG</b></h5>
									<h5>1. Nama Lengkap</h5>
									Ayah : <?php echo $d['nama_ayah']; ?><br>
									Ibu    : <?php echo $d['nama_ibu']; ?><br>
									<h5>2. Tahun Lahir</h5>
									Ayah : <?php echo $d['tahun_lahir_ayah']; ?><br>
									Ibu    : <?php echo $d['tahun_lahir_ibu']; ?><br>
									<h5>3. Pendidikan Terakhir</h5>
									Ayah : <?php echo $d['pendidikan_ayah']; ?><br>
									Ibu    : <?php echo $d['pendidikan_ibu']; ?><br>
									<h5>4. Pekerjaan</h5>
									Ayah : <?php echo $d['pekerjaan_ayah']; ?><br>
									Ibu    : <?php echo $d['pekerjaan_ibu']; ?><br>
									<h5>5. Keterangan</h5>
									Ayah : <?php echo $d['keterangan_ayah']; ?><br>
									Ibu    : <?php echo $d['keterangan_ibu']; ?><br><br>

									<h5><b>C. DATA PERIODIK CALON PESERTA DIDIK</b></h5>
									Tinggi / Berat Badan   : <?php echo $d['tinggi_badan']; ?> CM / <?php echo $d['berat_badan']; ?> KG<br>
									Jarak Rumah Ke Sekolah    : <?php echo $d['jarak_tempuh']; ?><br>
									Waktu Tempuh Ke Sekolah : <?php echo $d['waktu_tempuh']; ?><br>
									Anak Ke           : <?php echo $d['anak_ke']; ?> dari <?php echo $d['jumlah_total_saudara']; ?> Saudara<br>
									Jumlah Saudara Kandung : <?php echo $d['jumlah_total_saudara']; ?> Orang. Jumlah Adik = <?php echo $d['jumlah_adik']; ?>. Jumlah Kakak = <?php echo $d['jumlah_kakak']; ?> <br><br>
									<h5><b>D. LAMPIRAN YANG DISERAHKAN BERSAMA FORMULIR PENDAFTARAN</b></h5>
									
								 
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

												<p class="ttd">Mengetahui, Orang tua siswa</p>
												<img src="pendaftaran/upload/<?= $d['signature_img'] ?>" width="200x" height="150px">

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

