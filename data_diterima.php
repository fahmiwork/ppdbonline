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

$page = 'diterima'; include './template_admin/sidebar.php';
?>







<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="row">
						<div class="col-md-12">
							
								<div class="card-header">
									<h4 class="card-title">Data Pendaftar Lolos/Diterima</h4>
								</div>
								<div class="card">
								<div class="card-body">
									
									  
									

        <form method="get" action="data_diterima.php">
            <div class="row">
                <div class="col-sm-6 col-md-4">
                    <div class="form-group">
                        <label>Filter Tanggal Pendaftaran</label>
                        <div class="input-group">
                            <input type="date" name="tgl_awal" value="<?= @$_GET['tgl_awal'] ?>" class="form-control tgl_awal" placeholder="Tanggal Awal">
                            <span class="input-group-addon">s/d</span>
                            <input type="date" name="tgl_akhir" value="<?= @$_GET['tgl_akhir'] ?>" class="form-control tgl_akhir" placeholder="Tanggal Akhir">
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" name="filter" value="true" class="btn btn-primary btn-sm">TAMPILKAN</button>

            <?php
            if(isset($_GET['filter'])) // Jika user mengisi filter tanggal, maka munculkan tombol untuk reset filter
                echo '<a href="data_diterima.php" class="btn btn-default btn-sm">RESET</a>';
            ?>
        </form>

        <?php
        // Load file koneksi.php
        include "./database/koneksi.php";

        $tgl_awal = @$_GET['tgl_awal']; // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
        $tgl_akhir = @$_GET['tgl_akhir']; // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)

        if(empty($tgl_awal) or empty($tgl_akhir)){ // Cek jika tgl_awal atau tgl_akhir kosong, maka :
            // Buat query untuk menampilkan semua data transaksi
            $query = "SELECT * FROM tb_pendaftar WHERE status_pendaftaran='Diterima'";
            $url_cetak = "print.php";
            $url_cetak_excel = "export.php";
            $label = "Semua Data Pendaftar yang lolos";
        
        }else{ // Jika terisi
            // Buat query untuk menampilkan data transaksi sesuai periode tanggal
            $query = "SELECT * FROM tb_pendaftar WHERE (status_pendaftaran='Diterima' AND tgl BETWEEN '".$tgl_awal."' AND '".$tgl_akhir."')";
            $url_cetak = "print.php?tgl_awal=".$tgl_awal."&tgl_akhir=".$tgl_akhir."&filter=true";
            $url_cetak_excel = "print.php?tgl_awal=".$tgl_awal."&tgl_akhir=".$tgl_akhir."&filter=true";
            $tgl_awal = date('d-m-Y', strtotime($tgl_awal)); // Ubah format tanggal jadi dd-mm-yyyy
            $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir)); // Ubah format tanggal jadi dd-mm-yyyy
            $label = 'Periode Tanggal '.$tgl_awal.' s/d '.$tgl_akhir;
        //     echo "<div style='margin-top: 5px;'>
        //     <a href='$url_cetak' class='btn btn-danger btn-sm'><i class='fa fa-print'> Cetak PDF</i></a>
        // </div";
        }
        ?>
        <hr />
        <h4 style="margin-bottom: 5px;"><b>Data Pendaftaran</b></h4>
        <?php echo $label ?><br />
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
                        <th class="text-center">No</th>
                        <th>Tanggal Pendaftaran</th>
                        <th>No Pendaftaran</th>
                        <th>Nama Peserta</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
                    $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

                    if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                        $nomor=0;
                        while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
                            $tgl = date('d-m-Y', strtotime($data['tgl'])); // Ubah format tanggal jadi dd-mm-yyyy
                            $nomor++;
                            echo "<tr>";
                            echo "<td class='text-center'>".$nomor."</td>";
                            echo "<td>".$tgl."</td>";
                            echo "<td>".$data['no_pendaftar']."</td>";
                            echo "<td>".$data['nama_lengkap']."</td>";
                            echo "</tr>";
                            
                        }
                    }else{ // Jika data tidak ada
                        echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
                    }
                    
                    ?>
                </tbody>
            </table>

            <?php
                    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
                    $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

                    if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
                      
                        echo "<div style='margin-top: 5px;'>
                        <a href='$url_cetak' class='btn btn-danger btn-sm'><i class='fa fa-print'> Cetak PDF</i></a>
                        <a href='$url_cetak_excel' class='btn btn-success btn-sm'><i class='fa fa-print'> Cetak Excel</i></a>
                    </div";     
                        
                    }else{ // Jika data tidak ada
                        echo "";
                    }
                    
                    ?>
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



