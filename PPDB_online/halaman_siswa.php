<?php include 'database/koneksi.php'; 

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
$page = 'home'; include './template_admin/sidebar_siswa.php';
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