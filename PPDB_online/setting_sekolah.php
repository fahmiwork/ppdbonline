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

$page = 'setting'; include './template_admin/sidebar.php';
?>





<div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Setting Sekolah</h4>
                                </div>

                                 <?php 
                                          include 'database/koneksi.php';
                                        
                                            $data = mysqli_query($koneksi, "SELECT * FROM tb_sekolah ")or die(mysqli_error());
                                          $nomor = 1;
                                          while($d = mysqli_fetch_array($data)){
                                          ?>
								<div class="card-body">
									<div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <form enctype="multipart/form-data" action="./sekolah/update_sekolah.php" method="post">
                                      
                                            <div class="form-group">
                                                <label>Nama Sekolah</label>
                                                <input type="text" class="form-control" name="nama_sekolah" value="<?php echo $d['nama_sekolah']; ?>">
                                            </div>
                                            <?php 
                                                    if 
                                                    ($d['logo'] == '') {
                                                              echo ' 


                                                              <div class="text-danger"><h5>Gambar Belum Diupload</h5></div>';
                                                            } else{
                                                                echo '<embed src="./sekolah/files/'. $d['logo'] .'" width="200px" height="200px"></embed>';

                                                            } ?>
                                            <div class="form-group">
                                                <label>Logo</label>
                                                <input type="file" class="form-control" name="logo" value="<?php echo $d['logo']; ?>" required>
                                                <div class="text-danger">*Masukkan ukuran file 2000*1333b pixel</div>
                                            </div>

                                            <div class="form-group">
                                                <label>Alamat</label>
                                                <input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat']; ?>" required>
                                            </div>

                                             <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="email" value="<?php echo $d['email']; ?>" required>
                                            </div>
                            

                             </div>

                                      </div>      
                                
                                    <button class="btn btn-primary" type="submit" value="Simpan"><i class="far fa-check-circle"> Simpan</i></button>
                            </tr>
                       
                    </form>
<?php } ?>
                </div>
            </div>
        </div>
    </div>

<?php
include './template_admin/footer.php';
?>