<?php include 'database/koneksi.php'; 

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
  header("location:index.php");
}
$username = $_SESSION['username'];
$query = "SELECT * FROM tb_user INNER JOIN tb_pendaftar ON tb_user.id_user=tb_pendaftar.id_user WHERE username='$username'";
$result = mysqli_query($koneksi, $query);
?>

<?php
  if(mysqli_num_rows($result)>0) {
    $data = mysqli_fetch_array($result);
    $_SESSION["id_user"] = $data["id_user"];

    $_SESSION["id_pendaftar"] = $data["id_pendaftar"];
  $_SESSION["no_pendaftar"] = $data["no_pendaftar"];
  $_SESSION["nik"] = $data["nik"];
  $_SESSION["nama_lengkap"] = $data["nama_lengkap"];
  $_SESSION["jenis_kelamin"] = $data["jenis_kelamin"];
  $_SESSION["ttl"] = $data["ttl"];
  $_SESSION["agama"] = $data["agama"];
  $_SESSION["username"] = $data["username"];
  $_SESSION["password"] = $data["password"];
  $_SESSION["alamat_rumah"] = $data["alamat_rumah"];
  $_SESSION["tempat_tinggal"] = $data["tempat_tinggal"];
  $_SESSION["no_telp"] = $data["no_telp"];
  $_SESSION["no_kps"] = $data["no_kps"];
  $_SESSION["status_pendaftaran"] = $data["status_pendaftaran"];
  $_SESSION["nama_ayah"] = $data["nama_ayah"];
  $_SESSION["nama_ibu"] = $data["nama_ibu"];
  $_SESSION["pendidikan_ayah"] = $data["pendidikan_ayah"];
  $_SESSION["pendidikan_ibu"] = $data["pendidikan_ibu"];
  $_SESSION["penghasilan_ayah"] = $data["penghasilan_ayah"];
  $_SESSION["penghasilan_ibu"] = $data["penghasilan_ibu"];

  }
  

  ?>

  

<?php 
include 'template_user/header.php';
$page = 'lihat'; include 'template_user/menubar_user.php';
?>

        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-6 col-sm-4 clearfix">
                        <ul class="notification-area pull-right">
                            <li><h3><div class="date">
								<script type='text/javascript'>
						
						var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
						var myDays = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
						var date = new Date();
						var day = date.getDate();
						var month = date.getMonth();
						var thisDay = date.getDay(),
							thisDay = myDays[thisDay];
						var yy = date.getYear();
						var year = (yy < 1000) ? yy + 1900 : yy;
						document.write(thisDay + ', ' + day + ' ' + months[month] + ' ' + year);		
						//-->
						</script></b></div></h3>

						</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header area end -->
			
            <!-- page title area end -->
            <div class="main-content-inner">
                <!-- market value area start -->
                <div class="row mt-5 mb-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-sm-flex justify-content-between align-items-center">
									<h2>Data Anda :</h2>
                                </div>
                                <div class="market-status-table mt-4">
                                    <div class="table-responsive">

                                    <?php


if(isset($_SESSION['no_pendaftar'])) {
    echo "No. Pendaftaran : " . $_SESSION['no_pendaftar'] . "<br>";
    echo "NIK            : " . $_SESSION['nik'] . "<br>";
    echo "Nama Lengkap    : " . $_SESSION['nama_lengkap'] . "<br>";
    echo "Jenis Kelamin   : " . $_SESSION['jenis_kelamin'] . "<br>";
    echo "Agama           : " . $_SESSION['agama'] . "<br>";
    echo "Alamat Rumah    : " . $_SESSION['alamat_rumah'] . "<br>";
    echo "No. Telp        : " . $_SESSION['no_telp'] . "<br>";
} else {
    echo "Data tidak ada. Anda belum mengisi pendaftaran !";
}
?>






                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              
                
                <!-- row area start-->
            </div>
        </div>
        <!-- main content area end -->
        <!-- footer area start-->
        
<?php 
include 'template_user/footer.php';
?>