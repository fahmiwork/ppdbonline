
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

 <h3>Tambah Data User</h3>

               <div class="card-body">
									<div class="row">
										<div class="col-md-6 pr-1">
											<form action="./pengumuman/input.php" method="post">
											<div class="form-group">
												<label>Judul</label>
												
                        						<input type="text" class="form-control" name="judul" required>
											</div> 
											<div class="form-group">
												<label>Deskripsi</label>
												<input type="text" class="form-control" name="deskripsi" required>
                                                <input type="hidden" class="form-control" name="tanggal" value="<?= date('d-m-Y'); ?>" required>
                                            </div>
											
										
											
											
								
									 <td><button class="btn btn-primary" type="submit" value="Simpan"><i class="far fa-check-circle"> Simpan</i></td>
                            </tr>
                       
                    </form>
								
							</div>
						</div>
					</div>

					                                   


<?php
include './template_admin/footer.php';
?>