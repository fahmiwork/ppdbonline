<?php include 'database/koneksi.php'; 

session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
  header("location:index.php");
}
$username = $_SESSION['username'];
$query = "SELECT * FROM tb_pendaftar WHERE username='$username'";
$result = mysqli_query($koneksi, $query);

  ?>


  <?php
  if(mysqli_num_rows($result)>0) {
    $data = mysqli_fetch_array($result);
    $_SESSION["id_pendaftar"] = $data["id_pendaftar"];
    $_SESSION["no_pendaftar"] = $data["no_pendaftar"];
    $_SESSION["nisn"] = $data["nisn"];
    $_SESSION["nama_lengkap"] = $data["nama_lengkap"];
    $_SESSION["jenis_kelamin"] = $data["jenis_kelamin"];
    $_SESSION["agama"] = $data["agama"];
    $_SESSION["username"] = $data["username"];
    $_SESSION["alamat_rumah"] = $data["alamat_rumah"];
    $_SESSION["no_hp_orangtua"] = $data["no_hp_orangtua"];
    $_SESSION["asal_sekolah"] = $data["asal_sekolah"];
    $_SESSION["status_pendaftaran"] = $data["status_pendaftaran"];

    

  }

  ?>

<?php include  './template_admin/header.php';
?>

<?php
include './template_admin/navbar.php';
?>
<?php
$page = 'profil_siswa'; include './template_admin/sidebar_siswa.php';
?>
<div class="main-panel">
			<div class="content">
				<div class="page-inner">
									<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Data Profil</div>
									
								</div>
								<div class="card-body">
								
								<div class="card-footer">
									<div class="form">
										<div class="form-group from-show-notify row">
											<div class="col-lg-3 col-md-3 col-sm-12">

											</div>
											
										</div>
									</div>
									No. Pendaftaran : <?php echo $_SESSION['no_pendaftar']; ?><br>
									NISN            : <?php echo $_SESSION['nisn']; ?><br> 
									Nama Lengkap    : <?php echo $_SESSION['nama_lengkap']; ?><br>
									Jenis Kelamin   : <?php echo $_SESSION['jenis_kelamin']; ?><br>
									Agama           : <?php echo $_SESSION['agama']; ?><br>
									Alamat Rumah    : <?php echo $_SESSION['alamat_rumah']; ?><br>
									Nama Orangtua   : <?php echo $_SESSION['nama_orangtua']; ?><br>
									No. Hp Orangtua : <?php echo $_SESSION['no_hp_orangtua']; ?><br>
									No. Asal Sekolah : <?php echo $_SESSION['asal_sekolah']; ?><br><br>


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
		</div>



<?php
include 'template_admin/footer.php';
?>
