<?php include 'database/koneksi.php'; 

// mengaktifkan session
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
$page = 'home'; include './template_admin/sidebar.php';
?>

      
    <div class="main-panel">
      <div class="content">
        <div class="panel-header bg-secondary-gradient">
          <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
              <div>
                                      
                <h2 class="text-white pb-2 fw-bold">Home</h2>
                <h5 class="text-white op-7 mb-2" >Selamat Datang admin di PPDB Online </h5>
                
              </div>
            
            
            </div>
          </div>
        </div>

<?php
$sql = mysqli_query($koneksi, "SELECT * FROM tb_pendaftar");
$jumlah_data = mysqli_num_rows($sql);
?>


        <div class="page-inner mt--5">
          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-round">
                <div class="card-body">
                  <div class="row">
                    <div class="col-5">
                      <div class="icon-big text-center icon-danger bubble-shadow-small">
                        <i class="flaticon-users"></i>
                      </div>
                    </div>
                    <div class="col-7 col-stats">
                      <div class="numbers">
                        <p class="card-category">Pendaftar</p>
                        <h4 class="card-title"><?php echo $jumlah_data ; ?></h4>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<?php 
$query = mysqli_query($koneksi, 'select * from tb_admin');
$numrows2 = mysqli_num_rows($query);
?>
            <div class="col-sm-6 col-md-3">
              <div class="card card-stats card-round">
                <div class="card-body ">
                  <div class="row">
                    <div class="col-5">
                      <div class="icon-big text-center icon-warning bubble-shadow-small">
                        <i class="flaticon-user"></i>
                      </div>
                    </div>
                    <div class="col-7 col-stats">
                      <div class="numbers">
                        <p class="card-category">Admin</p>
                        <h4 class="card-title"><?php echo $numrows2 ?></h4>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           <div class="page-inner">
          
          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Status</div>
                </div>
                <div class="card-body">
                  <div class="chart-container">
                    <canvas id="pieChart" style="width: 50%; height: 50%"></canvas>
                  </div>
                </div>
              </div>
            </div>




            <div class="col-md-6">
              <div class="card">
                <div class="card-header">
                  <div class="card-title">Gender</div>
                </div>
                <div class="card-body">
                  <div class="chart-container">
                    <canvas id="barChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
                

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h4 class="card-title">About</h4>
                  
                </div>
                <div class="card-body">
                  
                    <p class="text-justify">Dalam dunia pendidikan di Indonesia terdapat berbagai macam bantuan, baik bagi siswa  berprestasi hingga bantuan yang ditunjukkan khusus bagi siswa kurang mampu. Salah satu batuan yang ada adalah bantuan PIP (Program Indonesia Pintar). Bantuan PIP dirancang untuk membantu anak-anak dari keluarga kurang mampu dalam mendapatkan layanan pendidikan hingga tamat pendidikan menegah.
                                        SDN Kalisalak 03 merupakan salah satu sekolah yang termasuk mendapatkan bantuan PIP, karena di SDN Kalisalak 03 terdapat siswa yang kurang mampu dan layak untuk mendapatkan bantuan PIP.</p>


                  
                </div>
              </div>
            </div>
          </div>
          </div>
<?php
include './template_admin/footer.php';
?>