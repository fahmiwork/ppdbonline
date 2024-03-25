
<?php include 'database/koneksi.php'; 

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
  header("location:index.php");
}
$username = $_SESSION['username'];
$query = "SELECT * FROM tb_user WHERE username='$username'";
$result = mysqli_query($koneksi, $query);
?>

<?php
  if(mysqli_num_rows($result)>0) {
    $data = mysqli_fetch_array($result);
    $_SESSION["id_user"] = $data["id_user"];

    

  }

  ?>

<?php 
include 'template_user/header.php';
$page = 'daftar'; include 'template_user/menubar_user.php';
?>

<?php


// menghubungkan dengan koneksi database
include './database/koneksi.php';

// mengambil data barang dengan kode paling besar
$query = mysqli_query($koneksi, "SELECT max(id_pendaftar) as noTerbesar FROM tb_pendaftar");
$data = mysqli_fetch_array($query);
$noDaftar = $data['noTerbesar']+1;



// membentuk kode barang baru
// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
$huruf = "NP000";
$noDaftar = $huruf . $noDaftar;


?>
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
<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
			
					
					

			<div class="row block-9">
				<div class="col-md-12">
					<form enctype="multipart/form-data" action="./pendaftaran/input_pendaftaran.php" method="post">
					
					<div class="row">
						<div class="col-md-12">
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
						</div>
					
						<?php


if(isset($_SESSION['no_pendaftar'])) {
    echo "<br>Maaf, Anda Sudah Mengisi Formulir !";
} else {
    echo '
	<h2 class="mb-4">Isi Data Pendaftaran anda!</h2>
	<div class="col-md-12">
								<label><b>No. Pendaftaran</b></label>
								<div class="form-group">
									<input  type="text" class="form-control" name="no_pendaftar" placeholder="masukkan nisn anda" value="'.$noDaftar.'" readonly>
									<input  type="hidden" class="form-control" name="tgl" value="' . date("Y-m-d") . '">
									<input  type="hidden" class="form-control" name="id_user" value="' . $_SESSION['id_user'] . '">
								</div>
							</div>
							<div class="col-md-12">
								<h5><b>A. KETERANGAN CALON PESERTA DIDIK</b></h5>
								
							</div>
							<div class="col-md-6">
								<label>Nama Lengkap</label>
								<div class="form-group">
									<input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan nama lengkap anda" require>
								</div>
							</div>
							<div class="col-md-6">
								<label>Jenis Kelamin</label>
								<div class="form-group">
									    <select name="jenis_kelamin" placeholder="Pilih Kriteria..." class="form-control" required>
                                    <option value="">---Pilih Jenis Kelamin---</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                    
                                 </select>
								</div>
							</div>
							<div class="col-md-6">
								<label>NIK</label>
								<div class="form-group">
									<input type="number" class="form-control" name="nik" placeholder="masukkan nik anda" require>
								</div>
							</div>
							<div class="col-md-6">
								<label>Tempat, Tgl. Bln. Thn. Lahir</label>
								<div class="form-group">
									<input type="text" class="form-control" name="ttl" placeholder="Masukkan nama lengkap anda" require>
								</div>
							</div>
							<div class="col-md-6">
								<label>Agama</label>
								<div class="form-group">
									<select name="agama" placeholder="... Pilih ..." class="form-control" required>
                                    <option value="">---Pilih Agama---</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Budha">Budha</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Konghuchu">Konghuchu</option>
                                  
                                    
                                 </select>
								</div>
							</div>
							<div class="col-md-6">
								<label>Alamat Tempat Tinggal</label>
								<div class="form-group">
									<textarea name="alamat_rumah" id="" cols="5" rows="3" class="form-control" placeholder="Masukkan alamat rumah anda" require></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<label>Tempat Tinggal</label>
								<div class="form-group">
									    <select name="tempat_tinggal" placeholder="Pilih Kriteria..." class="form-control" required>
                                    <option value="">---Pilih Tempat Tinggal---</option>
                                    <option value="Besama Orang Tua">Besama Orang Tua</option>
                                    <option value="Kost">Kost</option>
									<option value="Lainnya">Lainnya</option>
                                    
                                 </select>
								</div>
							</div>
							<div class="col-md-6">
								<label>Mode Transportasi</label>
								<div class="form-group">
									    <select name="mode_transportasi" placeholder="Pilih Kriteria..." class="form-control" required>
                                    <option value="">---Pilih Mode Transportasi---</option>
                                    <option value="Sepeda Motor">Sepeda Motor</option>
                                    <option value="Jalan Kaki">Jalan Kaki</option>
									<option value="Lainnya">Lainnya</option>
                                    
                                 </select>
								</div>
							</div>
							<div class="col-md-6">
								<label>No. Telephone</label>
								<div class="form-group">
									<input type="text" class="form-control" name="no_telp" placeholder="Masukkan nama lengkap anda" require>
								</div>
							</div>
							<div class="col-md-6">
								<label>No. KPS / KKS (jika punya)</label>
								<div class="form-group">
									<input type="text" class="form-control" name="no_kps" placeholder="Masukkan nama lengkap anda">
								</div>
							</div>

							<div class="col-md-12">
								<h5><b>B. KETERANGAN ORANGTUA KANDUNG</b></h5>
							</div>
							<div class="col-md-12">
								<p>1. Nama Lengkap</p>
							</div>
							<div class="col-md-6">
								<label>Ayah</label>
								<div class="form-group">
									<input type="text" class="form-control" name="nama_ayah" placeholder="Masukkan nama ayah anda">
								</div>
							</div>
							<div class="col-md-6">
								<label>Ibu</label>
								<div class="form-group">
									<input type="text" class="form-control" name="nama_ibu" placeholder="Masukkan nama ibu anda">
								</div>
							</div>
							<div class="col-md-12">
								<p>2. Tahun Lahir</p>
							</div>
							<div class="col-md-6">
								<label>Ayah</label>
								<div class="form-group">
									<input type="date" class="form-control" name="tahun_lahir_ayah">
								</div>
							</div>
							<div class="col-md-6">
								<label>Ibu</label>
								<div class="form-group">
									<input type="date" class="form-control" name="tahun_lahir_ibu">
								</div>
							</div>
							<div class="col-md-12">
								<p>3. Pendidikan Terakhir</p>
							</div>
							<div class="col-md-6">
								<label>Ayah</label>
								<div class="form-group">
									<input type="text" class="form-control" name="pendidikan_ayah" placeholder="Masukkan Pendidikan Terakhir Ayah">
								</div>
							</div>
							<div class="col-md-6">
								<label>Ibu</label>
								<div class="form-group">
									<input type="text" class="form-control" name="pendidikan_ibu" placeholder="Masukkan Pendidikan Terakhir Ibu">
								</div>
							</div>
							<div class="col-md-12">
								<p>4. Pekerjaan</p>
							</div>
							<div class="col-md-6">
								<label>Ayah</label>
								<div class="form-group">
									<input type="text" class="form-control" name="pekerjaan_ayah" placeholder="Masukkan Pekerjaan Ayah">
								</div>
							</div>
							<div class="col-md-6">
								<label>Ibu</label>
								<div class="form-group">
									<input type="text" class="form-control" name="pekerjaan_ibu" placeholder="Masukkan Pekerjaan Ibu">
								</div>
							</div>
							<div class="col-md-12">
								<p>5. Penghasilan rata-rata perbulan</p>
							</div>
							<div class="col-md-6">
								<label>Ayah</label>
								<div class="form-group">
								<select name="penghasilan_ayah" placeholder="Pilih Kriteria..." class="form-control" required>
                                    <option value="">---Pilih Penghasilan---</option>
                                    <option value="0 - 999.999">0 - 999.999</option>
                                    <option value="1 Juta - 1.999.999">1 Juta - 1.999.999</option>
									<option value="2 Juta - 4.999.999">2 Juta - 4.999.999</option>
                                    <option value="5 Juta - 20 Juta">5 Juta - 20 Juta</option>
                                 </select>
								</div>
							</div>
							<div class="col-md-6">
								<label>Ibu</label>
								<div class="form-group">
								<select name="penghasilan_ibu" placeholder="Pilih Kriteria..." class="form-control" required>
                                    <option value="">---Pilih Penghasilan---</option>
                                    <option value="0 - 999.999">0 - 999.999</option>
                                    <option value="1 Juta - 1.999.999">1 Juta - 1.999.999</option>
									<option value="2 Juta - 4.999.999">2 Juta - 4.999.999</option>
                                    <option value="5 Juta - 20 Juta">5 Juta - 20 Juta</option>
                                 </select>
								</div>
							</div>
							<div class="col-md-12">
								<p>6. Keterangan</p>
							</div>
							<div class="col-md-6">
								<label>Ayah</label>
								<div class="form-group">
									    <select name="keterangan_ayah" placeholder="Pilih Keterangan..." class="form-control" required>
                                    <option value="">---Pilih Keterangan Ayah---</option>
                                    <option value="Hidup">Hidup</option>
                                    <option value="Meninggal">Meninggal</option>
                                    
                                 </select>
								</div>
							</div>
							<div class="col-md-6">
								<label>Ibu</label>
								<div class="form-group">
									    <select name="keterangan_ibu" placeholder="Pilih Keterangan..." class="form-control" required>
                                    <option value="">---Pilih Keterangan Ibu---</option>
                                    <option value="Hidup">Hidup</option>
                                    <option value="Meninggal">Meninggal</option>
                                    
                                 </select>
								</div>
							</div>
							<div class="col-md-12">
								<h5><b>C. DATA PERIODIK CALON PESERTA DIDIK</b></h5>
							</div>
							<div class="col-md-6">
								<label>Tinggi Badan (cm)</label>
								<div class="form-group">
									<input type="number" class="form-control" name="tinggi_badan" placeholder="Masukkan tinggi badan anda">
								</div>
							</div>
							<div class="col-md-6">
								<label>Berat Badan (kg)</label>
								<div class="form-group">
									<input type="number" class="form-control" name="berat_badan" placeholder="Masukkan berat badan anda">
								</div>
							</div>
							<div class="col-md-6">
								<label>Jarak Tempuh Ke Sekolah (km)</label>
								<div class="form-group">
									<input type="number" class="form-control" name="jarak_tempuh" placeholder="Masukkan jarak tempuh">
								</div>
							</div>
							<div class="col-md-6">
								<label>Waktu Tempuh Ke Sekolah (km)</label>
								<div class="form-group">
									<input type="number" class="form-control" name="waktu_tempuh" placeholder="Masukkan waktu tempuh">
								</div>
							</div>
							<div class="col-md-6">
								<label>Anak Ke</label>
								<div class="form-group">
									<input type="number" class="form-control" name="anak_ke" placeholder="Masukkan nama lengkap anda">
								</div>
							</div>
							<div class="col-md-6">
								<label>Jumlah Adik</label>
								<div class="form-group">
									<input type="number" class="form-control" name="jumlah_adik" placeholder="Masukkan jumlah adik">
								</div>
							</div>
							<div class="col-md-6">
								<label>Jumlah Kakak</label>
								<div class="form-group">
									<input type="number" class="form-control" name="jumlah_kakak" placeholder="Masukkan jumlah kakak">
								</div>
							</div>
							<div class="col-md-6">
								<label>Jumlah Total Saudara Kandung</label>
								<div class="form-group">
									<input type="number" class="form-control" name="jumlah_total_saudara" placeholder="Masukkan total saudara kandung">
								</div>
							</div>


							<div class="col-md-12">
								<h5><b>D. LAMPIRAN YANG DISERAHKAN BERSAMA FORMULIR PENDAFTARAN</b></h5>
							</div>
							<div class="col-md-6">
								<label>Dokumen Lainnya</label>
								<div class="form-group">
									<input type="file" class="form-control" name="nama_dokumen" required>
									<input type="hidden" class="form-control" name="status_pendaftaran" value="Menunggu pengecekan dokumen" required>
									<div class="text-danger">*Masukkan jenis file pdf</div>
								</div>
							</div>
							
						
							
							<div class="col-md-12">
                        <label class="" for="">Tanda tangan orangtua:</label>
                        <br />
                        <div id="sig"></div>
                        <br />

                        <textarea id="signature64" name="signature" style="display: none"></textarea>
                        <div class="col-12">
                            <button class="btn btn-sm btn-warning" id="clear">&#x232B;Clear </button>
                        </div>
                    	
<br>
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" value="Simpan" class="btn btn-primary py-3 px-5" onclick="return confirm("Apakah anda yakin ingin menyimpan data?")"><i class="far fa-window-close">
								</div>
							</div>
						</div>
					</form>
            </div>';
}
?>
							

    <script type="text/javascript">
        var sig = $('#sig').signature({
            syncField: '#signature64',
            syncFormat: 'PNG'
        });
        $('#clear').click(function(e) {
            e.preventDefault();
            sig.signature('clear');
            $("#signature64").val('');
        });
    </script>
					
				</div>
			</div>
		</div>
		
				</div>
			</div>

 <?php include 'template_user/footer.php'; ?>
                               


 