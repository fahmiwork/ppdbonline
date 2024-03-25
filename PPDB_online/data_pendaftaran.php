
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
							
								<div class="card-header">
									<h4 class="card-title">Data Pendaftaran</h4>
								</div>
								<div class="card">
								<div class="card-body">
									
									  
									
									<div class="table-responsive">
										<?php 
if(isset($_GET['pesan'])){
	$pesan = $_GET['pesan'];
	if($pesan == "input"){
		echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil di tambah.</div>';
	}else if($pesan == "update"){
		echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil di update.</div>';
	}else if($pesan == "hapus"){
		echo '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil di hapus.</div>';
	}
}
?>
										<table id="basic-datatables" class="isplay table table-striped table-bordered table-hover" >
											<thead>
												<tr>
												    <th style='text-align:center;'>No</th>
												    
												    <th style='text-align:center;'>No Pendaftaran</th>
												    <th style='text-align:center;'>Nama</th>
												    <th style='text-align:center;'>Status Pendaftaran</th>
												    <th style='text-align:center;'>Opsi</th>
																									
												</tr>
											</thead>
											<tbody>
										
											<?php
											include 'database/koneksi.php';
												
												$data = mysqli_query($koneksi, "SELECT * FROM tb_pendaftar ");
												$nomor = 1;
												while($d = mysqli_fetch_array($data))
												{ 
											?>

										
												  <tr>
												  <td style='text-align:center;'><?php echo $nomor++; ?></td>
												  <td><?php echo $d['no_pendaftar']; ?></td>
												  <td><?php echo $d['nama_lengkap']; ?></td>
												  <td> <a class="badge badge-warning badge-sm"><?php echo $d['status_pendaftaran']; ?></a></td>
												  <td style='text-align:center;'><a class="btn btn-primary btn-sm" href="detail_pendaftar.php?id_pendaftar=<?php echo $d['id_pendaftar'];?>"><i class="far fa-info"> Detail</i></a> | <a class="btn btn-danger btn-sm" href="./pendaftaran/delete_pendaftar.php?id_pendaftar=<?php echo $d['id_pendaftar'];?>"><i class="far fa-window-close"> Hapus</i></a></td>
												  
										
												 </tr>
											<?php } ?>
											</tbody>	
										</table>
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



