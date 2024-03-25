<?php ob_start(); ?>
<html>
<head>

  <title>Download Excel</title>
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
  </style>
</head>
<body>
<?php 
// fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");      
// membuat nama file ekspor "data-anggota.xls"
header("Content-Disposition: attachment; filename=data-pendaftar.xls");
include './database/koneksi.php'; 
$id_pendaftar = $_GET['id_pendaftar'];
$data = mysqli_query($koneksi, "SELECT * FROM tb_pendaftar WHERE id_pendaftar='$id_pendaftar'");
$nomor = 1;
while($d = mysqli_fetch_array($data)){
?>
      <div class="judul"><h2>YAYASAN AL-MUHAJIRIN BATU MERAH BATAM<br>
      MADRASAH IBTIDAIYAH AL-MUHAJIRIN<br>
      KECAMATAN BATU AMPAR<br>
      NSM : 11221710010<br></h2>
      <i><p>Alamat : Jl. Bawal No. 35 A BatuMerah - Kota Batam (29457)<br>Telp (0778 - 411678) Hp 0812 611 9701</p></i><br>
     <hr size="3px">
     <h3>FORMULIR PENERIMAAN PESERTA DIDIK BARU<br>
     TAHUN PELAJARAN 2023 / 2024</h3>
      </div>
      <p><b>A. KETERANGAN CALON PESERTA DIDIK</b></p>
      
      Nama Lengkap    : <?php echo $d['nama_lengkap']; ?><br>
      Jenis Kelamin   : <?php echo $d['jenis_kelamin']; ?><br>
      NIK    : <?php echo $d['nik']; ?><br>
      Tempat, Tgl. Bln. Thn. Lahir : <?php echo $d['ttl']; ?><br>
      Agama           : <?php echo $d['agama']; ?><br>
      Alamat Tempat Tinggal : <?php echo $d['alamat_rumah']; ?><br>
      Tempat Tinggal   : <?php echo $d['tempat_tinggal']; ?><br>
      Mode Transportasi Kesekolah   : <?php echo $d['mode_transportasi']; ?><br>
      No. Telp: <?php echo $d['no_telp']; ?><br>
      No. KPS : <?php echo $d['no_kps']; ?><br></div>

      <h5><b>B. KETERANGAN ORANGTUA KANDUNG</b></h5>
      <div class="heading">
      1. Nama Lengkap<br>
      Ayah : <?php echo $d['nama_ayah']; ?><br>
      Ibu    : <?php echo $d['nama_ibu']; ?><br>
      2. Tahun Lahir<br>
      Ayah : <?php echo $d['tahun_lahir_ayah']; ?><br>
      Ibu    : <?php echo $d['tahun_lahir_ibu']; ?><br>
      3. Pendidikan Terakhir<br>
      Ayah : <?php echo $d['pendidikan_ayah']; ?><br>
      Ibu    : <?php echo $d['pendidikan_ibu']; ?><br>
      4. Pekerjaan<br>
      Ayah : <?php echo $d['pekerjaan_ayah']; ?><br>
      Ibu    : <?php echo $d['pekerjaan_ibu']; ?><br>
      5. Keterangan<br>
      Ayah : <?php echo $d['keterangan_ayah']; ?><br>
      Ibu    : <?php echo $d['keterangan_ibu']; ?></div><br>

      <h5><b>C. DATA PERIODIK CALON PESERTA DIDIK</b></h5>
      <div class="heading">Tinggi / Berat Badan   : <?php echo $d['tinggi_badan']; ?> CM / <?php echo $d['berat_badan']; ?> KG<br>
      Jarak Rumah Ke Sekolah    : <?php echo $d['jarak_tempuh']; ?> KM<br>
      Waktu Tempuh Ke Sekolah : <?php echo $d['waktu_tempuh']; ?> Jam / Menit<br>
      Anak Ke           : <?php echo $d['anak_ke']; ?> dari <?php echo $d['jumlah_total_saudara']; ?> Saudara<br>
      Jumlah Saudara Kandung : <?php echo $d['jumlah_total_saudara']; ?> Orang. Jumlah Adik = <?php echo $d['jumlah_adik']; ?>. Jumlah Kakak = <?php echo $d['jumlah_kakak']; ?> </div><br>
      <h5><b>D. LAMPIRAN YANG DISERAHKAN BERSAMA FORMULIR PENDAFTARAN</b></h5>
      <div class="heading">1. Pas photo Orang Tua 3 x 4 cm : 2 lembar (berwarna hitam / putih)<br>
      2. Akta Kelahiran / Surat Ket. Lahir : 1 lembar (photo copy)<br>
      3. Kartu Keluarga (KK) : 1 Lembar (photo copy)<br>
      4. KPS / KKS (jika menerima) : 1 Lembar (phpto copy)<br>
      5. Ijazah PAUD / TK : 1 Lembar (phpto copy)</div><br>
    </div>
    <?php } ?>
 
  <br>
  <br>
  <p class="ttd">Mengetahui, Orangtua Siswa</p>
  <br>
  <br>
  <br>
  <p class="ttd">(........................................)</p>
</body>
</html>
