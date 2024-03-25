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

$page = 'jurusan'; include './template_admin/sidebar.php';
?>





<div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Edit Jurusan</h4>
                                </div>

                                 <?php 
                                          include 'database/koneksi.php';
                                          $id_jurusan = $_GET['id_jurusan'];
                                          $data = mysqli_query($koneksi, "SELECT * FROM tb_jurusan WHERE id_jurusan='$id_jurusan'");
                                          $nomor = 1;
                                          while($d = mysqli_fetch_array($data)){
                                          ?>
								<div class="card-body">
									<div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 pr-1">
                                            <form enctype="multipart/form-data" action="./jurusan/update_jurusan.php" method="post">
                                      
                                            <div class="form-group">
                                                <label>Nama Jurusan</label>
                                                <input type="text" class="form-control" name="nama_jurusan" value="<?php echo $d['nama_jurusan']; ?>">
                                            </div>
                                            <?php 
                                                    if 
                                                    ($d['gambar'] == '') {
                                                              echo ' 


                                                              <div class="text-danger"><h5>Gambar Belum Diupload</h5></div>';
                                                            } else{
                                                                echo '<embed src="./jurusan/files/'. $d['gambar'] .'" width="800px" height="1000px"></embed>';

                                                            } ?>
                                            <div class="form-group">
                                                <label>Gambar</label>
                                                <input type="file" class="form-control" name="gambar" value="<?php echo $d['gambar']; ?>" required>
                                                <div class="text-danger">*Masukkan ukuran file 2000*1333b pixel</div>
                                            </div>

                                            <div class="form-group">
                                                <label>Deskripsi</label>
                                                <input type="text" class="form-control" name="deskripsi" value="<?php echo $d['deskripsi']; ?>" required>
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