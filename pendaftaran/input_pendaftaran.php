<?php

include '../database/koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $folderPath = "upload/";
  $image_parts = explode(";base64,", $_POST['signature']);
  $image_type_aux = explode("image/", $image_parts[0]);
  $image_type = $image_type_aux[1];
  $image_base64 = base64_decode($image_parts[1]);
  $uniqu = "_" . uniqid() . '.' . $image_type;
  $file = $folderPath . $uniqu;
  $file_names = $uniqu;
  file_put_contents($file, $image_base64);
  echo "Signature Uploaded Successfully.";
  


  // $sql = "INSERT INTO employee_sign(name, signature_img) VALUES ('$name', '$file')";
  // $query = mysqli_query($con, $sql);

    // Sanitize input data
    $no_pendaftar = mysqli_real_escape_string($koneksi, $_POST['no_pendaftar']);
    $nik = mysqli_real_escape_string($koneksi, $_POST['nik']);
    // ... sanitize other form fields ...

    $lokasi_file = $_FILES['nama_dokumen']['tmp_name'];
    $nama_dokumen = $_FILES['nama_dokumen']['name'];
    $folder = "files/$nama_dokumen";

    if (move_uploaded_file($lokasi_file, $folder)) {
        $query = "INSERT INTO tb_pendaftar (id_user, no_pendaftar, nik, 
            nama_lengkap, jenis_kelamin, ttl, agama, alamat_rumah, tempat_tinggal, 
            mode_transportasi, nama_ayah, nama_ibu, no_telp, no_kps, tahun_lahir_ayah, 
            tahun_lahir_ibu, pendidikan_ayah, pendidikan_ibu, pekerjaan_ayah, 
            pekerjaan_ibu, penghasilan_ayah, penghasilan_ibu, keterangan_ayah, 
            keterangan_ibu, tinggi_badan, berat_badan, jarak_tempuh, waktu_tempuh, anak_ke, 
            jumlah_total_saudara, jumlah_adik, jumlah_kakak,  
            nama_dokumen, status_pendaftaran, tgl, signature_img) 
            VALUES ('{$_POST['id_user']}', '$no_pendaftar', '$nik', 
            '{$_POST['nama_lengkap']}', '{$_POST['jenis_kelamin']}', 
            '{$_POST['ttl']}', '{$_POST['agama']}', '{$_POST['alamat_rumah']}', 
            '{$_POST['tempat_tinggal']}', '{$_POST['mode_transportasi']}', 
            '{$_POST['nama_ayah']}', '{$_POST['nama_ibu']}', '{$_POST['no_telp']}', 
            '{$_POST['no_kps']}', '{$_POST['tahun_lahir_ayah']}', 
            '{$_POST['tahun_lahir_ibu']}', '{$_POST['pendidikan_ayah']}', 
            '{$_POST['pendidikan_ibu']}', '{$_POST['pekerjaan_ayah']}', 
            '{$_POST['pekerjaan_ibu']}', '{$_POST['penghasilan_ayah']}', 
            '{$_POST['penghasilan_ibu']}', '{$_POST['keterangan_ayah']}', 
            '{$_POST['keterangan_ibu']}', '{$_POST['tinggi_badan']}', '{$_POST['tinggi_badan']}', 
            '{$_POST['jarak_tempuh']}', '{$_POST['waktu_tempuh']}', 
            '{$_POST['anak_ke']}', '{$_POST['jumlah_total_saudara']}', 
            '{$_POST['jumlah_adik']}', '{$_POST['jumlah_kakak']}', 
            '$nama_dokumen', '{$_POST['status_pendaftaran']}', 
            '{$_POST['tgl']}', '$file_names')";

        // Execute the query
        if (mysqli_query($koneksi, $query)) {
            header("location:../lihat_data.php?pesan=input");
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
            
        }

    } else {
      header("location:../pendaftaran.php?pesan=gagal");
        echo "File upload failed.";
    }

}

?>