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
  </style>
</head>
<body>
  <?php
  // Load file koneksi.php
  include "database/koneksi.php";
  $tgl_awal = @$_GET['tgl_awal']; // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
  $tgl_akhir = @$_GET['tgl_akhir']; // Ambil data tgl_awal sesuai input (kalau tidak ada set kosong)
  if(empty($tgl_awal) or empty($tgl_akhir)){ // Cek jika tgl_awal atau tgl_akhir kosong, maka :
    // Buat query untuk menampilkan semua data transaksi
    $query = "SELECT * FROM tb_pendaftar ORDER BY tgl ASC";
    $query2 = "SELECT min(tgl) AS tgl_kecil, max(tgl) AS tgl_besar FROM tb_pendaftar";
    $result = mysqli_query($koneksi,$query2);
    $numrows = mysqli_num_rows($result);
    if ($numrows > 0) {
      for ($i=0; $i <$numrows ; $i++) { 
        $data = mysqli_fetch_object($result);
        $tgl_kecil = $data->tgl_kecil;
        $tgl_besar = $data->tgl_besar;
        $label = 'Periode Tanggal '.$tgl_kecil.' s/d '.$tgl_besar;
          
       
      }
    }
   
  }else{ // Jika terisi
    // Buat query untuk menampilkan data transaksi sesuai periode tanggal
    $query = "SELECT * FROM tb_pendaftar WHERE (tgl BETWEEN '".$tgl_awal."' AND '".$tgl_akhir."')";
    $tgl_awal = date('d-m-Y', strtotime($tgl_awal)); // Ubah format tanggal jadi dd-mm-yyyy
    $tgl_akhir = date('d-m-Y', strtotime($tgl_akhir)); // Ubah format tanggal jadi dd-mm-yyyy
    $label = 'Periode Tanggal '.$tgl_awal.' s/d '.$tgl_akhir;
  }
  ?>
    

  <!-- <img src="./sekolah/files/logo_sekolah.png" class="image" style="float: left;"> -->
  <h2 style="text-align: center;">Data Pendaftaran PPDB Online </h2>

  
  <hr>
  <table class="table" border="1" width="100%">
    <tr>
    <th class="txtc">No</th>
    <th class="txtc">Tanggal Pendaftaran</th>
    <th class="txtc">No. Pendaftaran</th>
    <th class="txtc">Nama Peserta</th>
    <th class="txtc">Jenis Kelamin</th>
    <th class="txtc">No. Telp</th>
    </tr>
    <?php
    $sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
    $row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
    if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
      $nomor=0;
      while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
        $nomor++;
        $tgl = date('d-m-Y', strtotime($data['tgl'])); // Ubah format tanggal jadi dd-mm-yyyy
        
        echo "<tr>";
        echo "<td class='txtc'>".$nomor."</td>";
        echo "<td class='txtc'>".$tgl."</td>";
        echo "<td class='txtc'>".$data['no_pendaftar']."</td>";
        echo "<td>".$data['nama_lengkap']."</td>";
        echo "<td class='txtc'>".$data['jenis_kelamin']."</td>";
        echo "<td class='txtc'>".$data['no_telp']."</td>";
        echo "</tr>";
      }
    }else{ // Jika data tidak ada
      echo "<tr><td colspan='5'>Data tidak ada</td></tr>";
    }
    ?>
  </table><br>
  <b>Keterangan :</b> <?php echo $label ?>
  <br>
  <br>
  <p class="ttd">Mengetahui, kepala sekolah</p>
  <br>
  <br>
  <br>
  <p class="ttd">(........................................)</p>
</body>
</html>
