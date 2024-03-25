
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

$page = 'pengumuman'; include './template_admin/sidebar.php';
?>


<div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Pengumuman</h4>
                                </div>

                                 <?php 
                                          include 'database/koneksi.php';
                                          $id_pengumuman = $_GET['id_pengumuman'];
                                          $data = mysqli_query($koneksi, "SELECT * FROM pengumuman WHERE id_pengumuman='$id_pengumuman'");
                                          $nomor = 1;
                                          while($d = mysqli_fetch_array($data)){
                                          ?>
								<div class="card-body">
									<div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <form enctype="multipart/form-data" action="./pengumuman/update.php" method="post">
                                      
                                            <div class="form-group">
												<label>Judul</label>
                                                <input type="hidden" class="form-control" name="id_pengumuman" value="<?= $d['id_pengumuman'] ?>" required>
                        						<input type="text" class="form-control" name="judul" value="<?= $d['judul'] ?>" required>
											</div> 
											<div class="form-group">
												<label>Deskripsi</label>
												<input type="text" class="form-control" name="deskripsi" value="<?= $d['deskripsi'] ?>" required>
                                                <input type="hidden" class="form-control" name="tanggal" value="<?= date('d-m-Y'); ?>" required>
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