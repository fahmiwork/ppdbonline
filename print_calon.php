<?php include 'database/koneksi.php'; 

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if($_SESSION['status'] !="login"){
  header("location:index.php");
}
$username = $_SESSION['username'];
$query = "SELECT * FROM tb_user INNER JOIN tb_pendaftar ON tb_user.id_user=tb_pendaftar.id_user WHERE username='$username'";
$result = mysqli_query($koneksi, $query);
?>

<?php
  if(mysqli_num_rows($result)>0) {
    $data = mysqli_fetch_array($result);
    $_SESSION["id_user"] = $data["id_user"];

    $_SESSION["id_pendaftar"] = $data["id_pendaftar"];
  $_SESSION["no_pendaftar"] = $data["no_pendaftar"];
  $_SESSION["nik"] = $data["nik"];
  $_SESSION["nama_lengkap"] = $data["nama_lengkap"];
  $_SESSION["jenis_kelamin"] = $data["jenis_kelamin"];
  $_SESSION["ttl"] = $data["ttl"];
  $_SESSION["agama"] = $data["agama"];
  $_SESSION["username"] = $data["username"];
  $_SESSION["password"] = $data["password"];
  $_SESSION["alamat_rumah"] = $data["alamat_rumah"];
  $_SESSION["tempat_tinggal"] = $data["tempat_tinggal"];
  $_SESSION["no_telp"] = $data["no_telp"];
  $_SESSION["no_kps"] = $data["no_kps"];
  $_SESSION["status_pendaftaran"] = $data["status_pendaftaran"];
  $_SESSION["nama_ayah"] = $data["nama_ayah"];
  $_SESSION["nama_ibu"] = $data["nama_ibu"];
  $_SESSION["pendidikan_ayah"] = $data["pendidikan_ayah"];
  $_SESSION["pendidikan_ibu"] = $data["pendidikan_ibu"];
  $_SESSION["penghasilan_ayah"] = $data["penghasilan_ayah"];
  $_SESSION["penghasilan_ibu"] = $data["penghasilan_ibu"];
  $_SESSION["mode_transportasi"] = $data["mode_transportasi"];
  $_SESSION["tahun_lahir_ayah"] = $data["tahun_lahir_ayah"];
  $_SESSION["tahun_lahir_ibu"] = $data["tahun_lahir_ibu"];
  $_SESSION["pekerjaan_ayah"] = $data["pekerjaan_ayah"];
  $_SESSION["pekerjaan_ibu"] = $data["pekerjaan_ibu"];
  $_SESSION["keterangan_ayah"] = $data["keterangan_ayah"];
  $_SESSION["keterangan_ibu"] = $data["keterangan_ibu"];
  $_SESSION["tinggi_badan"] = $data["tinggi_badan"];
  $_SESSION["berat_badan"] = $data["berat_badan"];
  $_SESSION["jarak_tempuh"] = $data["jarak_tempuh"];
  $_SESSION["waktu_tempuh"] = $data["waktu_tempuh"];
  $_SESSION["anak_ke"] = $data["anak_ke"];
  $_SESSION["jumlah_total_saudara"] = $data["jumlah_total_saudara"];
  $_SESSION["jumlah_adik"] = $data["jumlah_adik"];
  $_SESSION["jumlah_kakak"] = $data["jumlah_kakak"];
  $_SESSION["signature_img"] = $data["signature_img"];

  }
  

  ?>

<html>
<head>

  <title>Data Pendaftaran</title>
  <style>

    .table {
      border-collapse:collapse;
      table-layout:fixed;width: 630px;
      margin-left: auto;
      margin-right: auto;
    }
    .table th {
      padding: 5px;
    }
    .image{
      width: 65px;
      height: 70px;
      text-align: center;
      margin-right: 10px;
      
    }
    .txtc {
      text-align: center;
    }
    .ttd {
      text-align: right;
      margin-right: 100px;
    }
    .ttd2 {
      text-align: right;
    }
    /* .table td {
      word-wrap:break-word;
      table-layout: center;
      padding: 10px;
      margin-left: auto;
      margin-right: auto;
    } */
    .margin{
      margin-bottom: 5px;
    }
    .table-tr {
      background-color: blue;
      word-wrap:break-word;
      padding: 10px;
    }
    .heading {
      margin: 17px;
    }
    .logo {
      margin: 5px;
      text-align: left;
      padding-bottom: 10px;
    }
    .judul {
      text-align: center;
      margin: 5px;
    }
    .tengah {
        text-align: center;
    }
  </style>
  
</head>
<body>

<table>
    <tr>
        <td><img src="assets/images/sc.jpg" width="120px" height="160px"></td>
        <td><div class="judul"><h2><br>YAYASAN AL-MUHAJIRIN BATU MERAH BATAM<br>
      MADRASAH IBTIDAIYAH AL-MUHAJIRIN<br>
      KECAMATAN BATU AMPAR<br>
      NSM : 11221710010</h2>
      <i><p>Alamat : Jl. Bawal No. 35 A BatuMerah - Kota Batam (29457)<br>Telp (0778 - 411678) Hp 0812 611 9701</p></i>
     
      </div></td>
    </tr>

</table>
<hr size="3px" color="black">
     <h3><div class="tengah">FORMULIR PENERIMAAN PESERTA DIDIK BARU<br>
     TAHUN PELAJARAN 2023 / 2024</h3></div>
      </div>
      <p><b>A. KETERANGAN CALON PESERTA DIDIK</b></p>
      <div class="heading">
      Nama Lengkap    : <?= $_SESSION['nama_lengkap'] ?><br>
      Jenis Kelamin   : <?= $_SESSION['jenis_kelamin'] ?><br>
      NIK    : <?= $_SESSION['nik'] ?><br>
      Tempat, Tgl. Bln. Thn. Lahir : <?= $_SESSION['ttl'] ?><br>
      Agama           :<?= $_SESSION['agama'] ?><br>
      Alamat Tempat Tinggal : <?= $_SESSION['alamat_rumah'] ?><br>
      Tempat Tinggal   : <?= $_SESSION['tempat_tinggal'] ?><br>
      Mode Transportasi Kesekolah   : <?= $_SESSION['mode_transportasi'] ?><br>
      No. Telp: <?= $_SESSION['no_telp'] ?><br>
      No. KPS : <?= $_SESSION['no_kps'] ?><br></div>

      <h5><b>B. KETERANGAN ORANGTUA KANDUNG</b></h5>
      <div class="heading">
      1. Nama Lengkap<br>
      Ayah : <?= $_SESSION['nama_ayah'] ?><br>
      Ibu    : <?= $_SESSION['nama_ibu'] ?><br>
      2. Tahun Lahir<br>
      Ayah : <?= $_SESSION['tahun_lahir_ayah'] ?><br>
      Ibu    : <?= $_SESSION['tahun_lahir_ibu'] ?><br>
      3. Pendidikan Terakhir<br>
      Ayah : <?= $_SESSION['pendidikan_ayah'] ?><br>
      Ibu    : <?= $_SESSION['pendidikan_ibu'] ?><br>
      4. Pekerjaan<br>
      Ayah : <?= $_SESSION['pekerjaan_ayah'] ?><br>
      Ibu    : <?= $_SESSION['pekerjaan_ibu'] ?><br>
      5. Keterangan<br>
      Ayah : <?= $_SESSION['keterangan_ayah'] ?><br>
      Ibu    : <?= $_SESSION['keterangan_ibu'] ?></div>

      <h5><b>C. DATA PERIODIK CALON PESERTA DIDIK</b></h5>
      <div class="heading">Tinggi / Berat Badan   : <?= $_SESSION['tinggi_badan'] ?> CM / <?= $_SESSION['berat_badan'] ?> KG<br>
      Jarak Rumah Ke Sekolah    : <?= $_SESSION['jarak_tempuh'] ?> KM<br>
      Waktu Tempuh Ke Sekolah : <?= $_SESSION['waktu_tempuh'] ?> Jam / Menit<br>
      Anak Ke           : <?= $_SESSION['anak_ke'] ?> dari <?= $_SESSION['jumlah_total_saudara']; ?> Saudara<br>
      Jumlah Saudara Kandung : <?= $_SESSION['jumlah_total_saudara'] ?> Orang. Jumlah Adik = <?= $_SESSION['jumlah_adik']; ?>. Jumlah Kakak = <?= $_SESSION['jumlah_kakak']; ?> </div>
      <h5><b>D. LAMPIRAN YANG DISERAHKAN BERSAMA FORMULIR PENDAFTARAN</b></h5>
      <div class="heading">1. Pas photo Orang Tua 3 x 4 cm : 2 lembar (berwarna hitam / putih)<br>
      2. Akta Kelahiran / Surat Ket. Lahir : 1 lembar (photo copy)<br>
      3. Kartu Keluarga (KK) : 1 Lembar (photo copy)<br>
      4. KPS / KKS (jika menerima) : 1 Lembar (photo copy)<br>
      5. Ijazah PAUD / TK : 1 Lembar (photo copy)</div><br>
    </div>
    <br>
  <br>
  <p class="ttd">Batam, 
								<script type='text/javascript'>
						
						var months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
						
						var date = new Date();
						var day = date.getDate();
						var month = date.getMonth();
						
						var yy = date.getYear();
						var year = (yy < 1000) ? yy + 1900 : yy;
						document.write(day + ' ' + months[month] + ' ' + year);		
						//-->
						</script></b></p>
  <p class="ttd2"><img src="pendaftaran/upload/<?= $_SESSION['signature_img'] ?>"></p>
  <div class="ttd">Orangtua/wali</div>

 
  
  
</body>
</html>
<script>
    window.print();
  </script>