<?php include 'template/header.php'; ?>
<?php $page = 'pendaftaran'; include 'template/menubar.php'; ?>

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
$huruf = "NP";
$noDaftar = $huruf . $noDaftar;


?>
<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
			
					
					<h2 class="mb-4">Isi Data Pendaftaran anda!</h2>

			<div class="row block-9">
				<div class="col-md-12">
					<form enctype="multipart/form-data" action="./pendaftaran/input_pendaftaran.php" method="post">
						<div class="row">
							<div class="col-md-6">
								<label>No. Pendaftaran</label>
								<div class="form-group">
									<input  type="text" class="form-control" name="no_pendaftar" placeholder="masukkan nisn anda" value="<?php echo $noDaftar ?>" readonly>
									<input  type="hidden" class="form-control" name="tgl" value="<?php echo date("d-m-Y"); ?>">
								</div>
							</div>

							<div class="col-md-6">
								<label>NISN</label>
								<div class="form-group">
									<input type="text" class="form-control" name="nisn" placeholder="masukkan nisn anda">
								</div>
							</div>
							<div class="col-md-6">
								<label>Nama Lengkap</label>
								<div class="form-group">
									<input type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan nama lengkap anda">
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
								<label>Alamat Rumah</label>
								<div class="form-group">
									<textarea name="alamat_rumah" id="" cols="5" rows="3" class="form-control" placeholder="Masukkan alamat rumah anda"></textarea>
								</div>
							</div>
							<div class="col-md-6">
								<label>Nama Orangtua</label>
								<div class="form-group">
									<input type="text" class="form-control" name="nama_orangtua" placeholder="masukkan nisn anda">
								</div>
							</div>
							<div class="col-md-6">
								<label>No. Telephone Orangtua</label>
								<div class="form-group">
									<input type="text" class="form-control" name="no_hp_orangtua" placeholder="Masukkan nama lengkap anda">
								</div>
							</div>

							<div class="col-md-6">
								<label>Asal Sekolah</label>
								<div class="form-group">
									<input type="text" class="form-control" name="asal_sekolah" placeholder="Masukkan nama lengkap anda">
								</div>
							</div>

						<div class="col-md-6">
								<label>Username</label>
								<div class="form-group">
									<input type="text" class="form-control" name="username" placeholder="Username Anda">
								</div>
							</div>
							<div class="col-md-6">
								<label>Password</label>
								<div class="form-group">
									<input type="text" class="form-control" name="password" placeholder="Password anda">
								</div>
							</div>
							<div class="col-md-6">
                                                <label>Dokumen Persyaratan</label>
                                                <div class="form-group">
                                                <input type="file" class="form-control" name="nama_dokumen" required>
                                                <input type="hidden" class="form-control" name="status_pendaftaran" value="Menunggu pengecekan dokumen" required>
                                                <div class="text-danger">*Masukkan ukuran file pdf</div>
                                            </div>

							
							
							<div class="col-md-12">
								<div class="form-group">
									<input type="submit" value="Simpan" class="btn btn-primary py-3 px-5">
								</div>
							</div>
						</div>
					</form>

					
					
				</div>
			</div>
		</div>
		
				</div>
			</div>

 <?php include 'template/footer.php'; ?>
                               