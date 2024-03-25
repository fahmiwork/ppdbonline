-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2023 at 10:01 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppdb_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` int(11) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `deskripsi`, `tanggal`) VALUES
(2, 'Pengumuman Pendaftaran', 'Jadwal pendaftaran akan dilaksanakan tanggal 12 Januari 2024 - 17 Juli 2024', '08-10-2023');

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'adm', 'adm', '123456'),
(2, 'admin', 'admin', 'd9b1d7db4cd6e70935368a1efb10e377'),
(3, 'manager', 'manager', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pendaftar`
--

CREATE TABLE `tb_pendaftar` (
  `id_pendaftar` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `no_pendaftar` varchar(25) NOT NULL,
  `nik` int(25) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL,
  `ttl` text NOT NULL,
  `agama` varchar(25) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `tempat_tinggal` varchar(250) NOT NULL,
  `mode_transportasi` varchar(255) NOT NULL,
  `nama_ayah` varchar(100) NOT NULL,
  `nama_ibu` varchar(100) NOT NULL,
  `no_telp` int(25) NOT NULL,
  `no_kps` int(11) NOT NULL,
  `tahun_lahir_ayah` text NOT NULL,
  `tahun_lahir_ibu` text NOT NULL,
  `pendidikan_ayah` text NOT NULL,
  `pendidikan_ibu` text NOT NULL,
  `pekerjaan_ayah` text NOT NULL,
  `pekerjaan_ibu` text NOT NULL,
  `penghasilan_ayah` text NOT NULL,
  `penghasilan_ibu` text NOT NULL,
  `keterangan_ayah` text NOT NULL,
  `keterangan_ibu` text NOT NULL,
  `tinggi_badan` text NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `jarak_tempuh` text NOT NULL,
  `waktu_tempuh` text NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `jumlah_total_saudara` int(11) NOT NULL,
  `jumlah_adik` int(11) NOT NULL,
  `jumlah_kakak` int(11) NOT NULL,
  `nama_dokumen` text NOT NULL,
  `status_pendaftaran` varchar(50) NOT NULL,
  `tgl` text NOT NULL,
  `signature_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pendaftar`
--

INSERT INTO `tb_pendaftar` (`id_pendaftar`, `id_user`, `no_pendaftar`, `nik`, `nama_lengkap`, `jenis_kelamin`, `ttl`, `agama`, `alamat_rumah`, `tempat_tinggal`, `mode_transportasi`, `nama_ayah`, `nama_ibu`, `no_telp`, `no_kps`, `tahun_lahir_ayah`, `tahun_lahir_ibu`, `pendidikan_ayah`, `pendidikan_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_ayah`, `penghasilan_ibu`, `keterangan_ayah`, `keterangan_ibu`, `tinggi_badan`, `berat_badan`, `jarak_tempuh`, `waktu_tempuh`, `anak_ke`, `jumlah_total_saudara`, `jumlah_adik`, `jumlah_kakak`, `nama_dokumen`, `status_pendaftaran`, `tgl`, `signature_img`) VALUES
(24, 0, 'NP00024', 1212, 'fahmi', 'Laki-laki', '2023-09-12', 'Kristen', 'hashas', 'Kost', 'Jalan Kaki', 'sdfs', 'sds', 31231, 2324, '2023-09-08', '2023-09-07', 'sadhsa', 'adjha', 'dscsa', 'sef', '1 Juta - 1.999.999', '2 Juta - 4.999.999', 'edwes', 'ecfwe', '2 ', 0, 'dchsdj', '5 km', 5, 8, 6, 6, 'bab 1-3.pdf', 'Diterima', '2023-09-19', ''),
(25, 0, 'NP00025', 121232, 'Roman', 'Laki-laki', '2023-09-12', 'Kristen', 'sjasg', 'Kost', 'Sepeda Motor', 'sdfs', 'sds', 0, 0, '2023-09-30', '2023-09-22', 'sadhsa', 'adjha', 'dscsa', 'sef', '2 Juta - 4.999.999', '1 Juta - 1.999.999', 'edwes', 'ecfwe', '3', 3, '32', '23', 5, 8, 6, 6, 'Skripsi1.pdf', 'Diterima', '2023-09-19', ''),
(26, 0, 'NP00026', 21312, 'Coba', 'Perempuan', '2023-09-15', 'Budha', 'sdjhs', 'Kost', 'Jalan Kaki', 'sdfs', 'sds', 31231, 2324, '2023-09-20', '2023-09-13', 'sadhsa', 'adjha', 'sds', 'sef', '1 Juta - 1.999.999', '1 Juta - 1.999.999', 'edwes', 'ecfwe', '23', 23, '32', '23', 5, 8, 6, 22, 'bab 1-3.pdf', 'Menunggu pengecekan dokumen', '2023-09-19', ''),
(27, 0, 'NP00027', 2147483647, 'Jaka Samudra', 'Laki-laki', '233', 'Islam', 'cv c', 'Besama Orang Tua', 'Sepeda Motor', 'da', 'gs', 2147483647, 59695, '2023-09-14', '2023-09-14', 'fsafg', 'dbdf', 'ghsdchgs', 'sdjdh', '1 Juta - 1.999.999', '0 - 999.999', 'sggsd', 'dsgd', '2', 2, '3', '3', 3, 3, 4, 3, 'activity d.drawio 3.png', 'Menunggu pengecekan dokumen', '2023-09-20', 'upload/_650b1bcbd2ec5.png'),
(28, 0, 'NP00028', 2147483647, 'cek', 'Laki-laki', '233', 'Katolik', 'asas', 'Besama Orang Tua', 'Jalan Kaki', 'da', 'gs', 2147483647, 59695, '2023-09-21', '2023-09-22', 'fsafg', 'dbdf', 'ghsdchgs', 'sdjdh', '0 - 999.999', '1 Juta - 1.999.999', 'sggsd', 'dsgd', '1', 1, '2', '3', 3, 2, 2, 3, 'activity d.drawio (2).png', 'Menunggu pengecekan dokumen', '2023-09-20', 'upload/_650b1e7a18a58.png'),
(29, 0, 'NP00029', 2147483647, 'Fahmi Fathurrohman ', 'Laki-laki', '233', 'Hindu', 'djhdh', 'Lainnya', 'Jalan Kaki', 'da', 'gs', 2147483647, 59695, '2023-09-28', '2023-09-21', 'fsafg', 'dbdf', 'ghsdchgs', 'sdjdh', '1 Juta - 1.999.999', '1 Juta - 1.999.999', 'sggsd', 'dsgd', '22', 22, '3', '4', 5, 5, 3, 6, 'activity d.drawio 3.png', 'Menunggu pengecekan dokumen', '2023-09-20', 'upload/signature_650b20571873c.png'),
(30, 0, 'NP00030', 2147483647, 'fahrom', 'Perempuan', '233', 'Kristen', 'sgdcsh', 'Kost', 'Jalan Kaki', 'da', 'gs', 2147483647, 59695, '2023-09-21', '2023-09-14', 'fsafg', 'dbdf', 'ghsdchgs', 'sdjdh', '1 Juta - 1.999.999', '2 Juta - 4.999.999', 'sggsd', 'dsgd', '2', 2, '2', '2', 3, 3, 3, 2, 'activity d.drawio (2).png', 'Menunggu pengecekan dokumen', '2023-09-20', 'upload/signature_650b215bc69f9.png'),
(31, 0, 'NP00031', 7373838, 'hdfhd', 'Perempuan', '233', 'Kristen', 'scfs', 'Besama Orang Tua', 'Jalan Kaki', 'da', 'gs', 3434, 59695, '2023-09-20', '2023-09-20', 'fsafg', 'dbdf', 'ghsdchgs', 'sdjdh', '1 Juta - 1.999.999', '0 - 999.999', 'sggsd', 'dsgd', '2', 2, '2', '2', 2, 2, 2, 2, 'activity d.drawio (2).png', 'Menunggu pengecekan dokumen', '2023-09-20', 'upload/signature_650b69014ee57.png'),
(32, 0, 'NP00032', 1111212121, 'Fahmi Fathurrohman ', 'Laki-laki', '233', 'Kristen', 'asda', 'Besama Orang Tua', 'Sepeda Motor', 'da', 'gs', 3434, 59695, '2023-09-05', '2023-09-21', 'fsafg', 'dbdf', 'ghsdchgs', 'sdjdh', '1 Juta - 1.999.999', '2 Juta - 4.999.999', 'sggsd', 'dsgd', '212', 212, '2', '2', 2, 2, 2, 2, 'activity d.drawio 3.png', 'Menunggu pengecekan dokumen', '2023-09-20', '650b6a3b0c1e2.png'),
(33, 0, 'NP00033', 2147483647, 'tes', 'Laki-laki', '233', 'Islam', 'jl kedongdong', 'Besama Orang Tua', 'Sepeda Motor', 'suwardi', 'sasajo', 2147483647, 59695, '', '', 'faga', 'dasa', 'sdsd', 'sds', '0 - 999.999', '1 Juta - 1.999.999', 'saaa', 'weee', '23', 23, '22', '34', 2, 1, 4, 4, 'bab 1-3.pdf', 'Menunggu pengecekan dokumen', '2023-09-21', 'upload/_650ba0c46430d.png'),
(34, 0, 'NP00034', 2147483647, 'Joko Adrian', 'Laki-laki', '233', 'Kristen', 'sa', 'Besama Orang Tua', 'Jalan Kaki', 'da', 'gs', 2147483647, 59695, '2023-09-07', '2023-09-05', 'fsafg', 'dbdf', 'ghsdchgs', 'sdjdh', '0 - 999.999', '1 Juta - 1.999.999', 'sggsd', 'dsgd', '2', 2, '2', '2', 4, 6, 4, 3, 'Skripsi1.pdf', 'Menunggu pengecekan dokumen', '2023-09-21', '_650ba1935458b.png'),
(35, 0, 'NP00035', 2147483647, 'Fahmi Fathurrohman ', 'Laki-laki', '233', 'Kristen', 'saa', 'Besama Orang Tua', 'Sepeda Motor', 'da', 'sasajo', 2147483647, 59695, '2023-09-06', '2023-09-08', 'faga', 'dbdf', '', 'sdjdh', '1 Juta - 1.999.999', '1 Juta - 1.999.999', 'sggsd', '', '2', 2, '3', '2', 3, 2, 4, 3, 'Skripsi1.pdf', 'Menunggu pengecekan dokumen', '2023-09-21', '_650ba3c2d3d17.png'),
(36, 0, 'NP00036', 2147483647, 'Fahmi Fathurrohman ', 'Laki-laki', '233', 'Kristen', 'saa', 'Besama Orang Tua', 'Sepeda Motor', 'da', 'sasajo', 2147483647, 59695, '2023-09-06', '2023-09-08', 'faga', 'dbdf', '', 'sdjdh', '1 Juta - 1.999.999', '1 Juta - 1.999.999', 'sggsd', '', '2', 2, '3', '2', 3, 2, 4, 3, 'Skripsi1.pdf', 'Menunggu pengecekan dokumen', '2023-09-21', 'upload/_650ba4200a050.png'),
(37, 0, 'NP00037', 2147483647, 'Fahmi Fathurrohman ', 'Laki-laki', '233', 'Kristen', 'saa', 'Besama Orang Tua', 'Sepeda Motor', 'da', 'sasajo', 2147483647, 59695, '2023-09-06', '2023-09-08', 'faga', 'dbdf', '', 'sdjdh', '1 Juta - 1.999.999', '1 Juta - 1.999.999', 'sggsd', '', '2', 2, '3', '2', 3, 2, 4, 3, 'Skripsi1.pdf', 'Menunggu pengecekan dokumen', '2023-09-21', '_650ba4b6111ce.png'),
(38, 0, 'NP00038', 2147483647, 'Fahmi Fathurrohman ', 'Laki-laki', '233', 'Kristen', 'saa', 'Besama Orang Tua', 'Sepeda Motor', 'da', 'sasajo', 2147483647, 59695, '2023-09-06', '2023-09-08', 'faga', 'dbdf', '', 'sdjdh', '1 Juta - 1.999.999', '1 Juta - 1.999.999', 'sggsd', '', '2', 2, '3', '2', 3, 2, 4, 3, 'Skripsi1.pdf', 'Menunggu pengecekan dokumen', '2023-09-21', '_650ba5618ed8d.png'),
(39, 0, 'NP00039', 34343, 'jangkrik', 'Perempuan', 'Bart, 4 july 2008', 'Islam', 'Jl kedongdong', 'Besama Orang Tua', 'Jalan Kaki', 'Sutarmin', '', 0, 0, '2023-09-22', '2023-09-22', 'sda', 'sd', 'sdf', 'sda', '1 Juta - 1.999.999', '1 Juta - 1.999.999', 'sdd', 'sds', '2', 2, '7', '9', 6, 8, 6, 8, 'bab 1-3.pdf', 'Menunggu pengecekan dokumen', '2023-09-21', '_650bfe0e76c58.'),
(40, 0, 'NP00039', 34343, 'jangkrik', 'Perempuan', 'Bart, 4 july 2008', 'Islam', 'Jl kedongdong', 'Besama Orang Tua', 'Jalan Kaki', 'Sutarmin', '', 0, 0, '2023-09-22', '2023-09-22', 'sda', 'sd', 'sdf', 'sda', '1 Juta - 1.999.999', '1 Juta - 1.999.999', 'sdd', 'sds', '2', 2, '7', '9', 6, 8, 6, 8, 'bab 1-3.pdf', 'Menunggu pengecekan dokumen', '2023-09-21', '_650bfe363e95b.png'),
(42, 25, 'NP00042', 2147483647, 'Fahmi Fathurrohman ', 'Perempuan', '233', 'Kristen', 'ckdck', 'Kost', 'Jalan Kaki', 'da', 'gs', 2147483647, 59695, '2023-10-05', '2023-10-21', 'fsafg', 'dbdf', 'sdsd', 'sdjdh', '2 Juta - 4.999.999', '2 Juta - 4.999.999', 'sggsd', 'dsgd', '2', 2, '3', '2', 2, 2, 2, 2, 'WhatsApp Image 2023-09-22 at 16.22.20.jpeg', 'Menunggu pengecekan dokumen', '2023-10-03', '_651c1f38b49ae.png'),
(43, 26, 'NP00043', 2147483647, 'Fahmi Fathurrohman ', 'Laki-laki', '233', 'Islam', 'sdsa', 'Lainnya', 'Sepeda Motor', 'da', 'dafa', 4393, 239409, '2023-10-27', '2023-10-20', 'cek', 'cek2', 'dosen', 'gasa', '1 Juta - 1.999.999', '2 Juta - 4.999.999', 'Meninggal', 'Hidup', '2', 2, '2', '2', 2, 2, 2, 1, 'bab 1-3.pdf', 'Menunggu pengecekan dokumen', '2023-10-08', '_65220d0c66d7e.png'),
(44, 28, 'NP00044', 111, 'df', 'Laki-laki', '233', 'Islam', 'sxs', 'Kost', 'Jalan Kaki', 'suwardi', 'dafa', 3434, 59695, '2023-10-14', '2023-10-13', 'fsafg', 'dbdf', 'ghsdchgs', 'sdjdh', '1 Juta - 1.999.999', '0 - 999.999', 'Hidup', 'Hidup', '3', 3, '3', '3', 2, 2, 2, 2, 'Skripsi1.pdf', 'Menunggu pengecekan dokumen', '2023-10-08', '_65220e30af6f2.png');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sekolah`
--

CREATE TABLE `tb_sekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(200) NOT NULL,
  `alamat` text NOT NULL,
  `no_telp` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sekolah`
--

INSERT INTO `tb_sekolah` (`id_sekolah`, `nama_sekolah`, `alamat`, `no_telp`) VALUES
(1, 'MADRASAH IBTIDAIYAH AL-MUHAJIRIN', 'Jl. Bawal No. 35 A BatuMerah - Kota Batam (29457)', '085878375707');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`) VALUES
(24, 'sasak', ''),
(25, 'user', '123456'),
(26, 'Cek1', '123456'),
(27, 'cek', '123'),
(28, 'ddd', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  ADD PRIMARY KEY (`id_pendaftar`);

--
-- Indexes for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pendaftar`
--
ALTER TABLE `tb_pendaftar`
  MODIFY `id_pendaftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tb_sekolah`
--
ALTER TABLE `tb_sekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
