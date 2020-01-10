-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 02:08 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bpjs_baru`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_jenis_stok`
--

CREATE TABLE `detail_jenis_stok` (
  `kd_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_jenis_stok`
--

INSERT INTO `detail_jenis_stok` (`kd_jenis`, `nama_jenis`) VALUES
(5, 'Alat Tulis Kantor'),
(6, 'Formulir'),
(7, 'Consumables'),
(8, 'Materai');

-- --------------------------------------------------------

--
-- Table structure for table `detail_toko`
--

CREATE TABLE `detail_toko` (
  `kd_toko` int(11) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `alamat_toko` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_toko`
--

INSERT INTO `detail_toko` (`kd_toko`, `nama_toko`, `alamat_toko`) VALUES
(1, 'Toko Buku', '\'JL. Sudirman'),
(2, 'Gramedia', 'JL. Sudirman'),
(3, 'Indo Grosir', 'Lupa'),
(4, 'Sejahtera', 'jl. teratai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_arsip_kepesertaan_jasa_kons`
--

CREATE TABLE `tb_arsip_kepesertaan_jasa_kons` (
  `no_pendaftaran_proyek` int(11) NOT NULL,
  `nama_proyek` varchar(50) NOT NULL,
  `nama_kontraktor` varchar(50) NOT NULL,
  `dari` date NOT NULL,
  `sampai` date NOT NULL,
  `jlh_berkas` int(11) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `no_boks_laci_filling` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_arsip_kepesertaan_jasa_kons`
--

INSERT INTO `tb_arsip_kepesertaan_jasa_kons` (`no_pendaftaran_proyek`, `nama_proyek`, `nama_kontraktor`, `dari`, `sampai`, `jlh_berkas`, `ket`, `no_boks_laci_filling`, `foto`) VALUES
(66666, 'Jembatan', 'Suci Sasmita', '2019-12-03', '2019-12-06', 22, 'aman terkendali', 5, 'propolis.jpeg'),
(555555, 'qqqqqqq', 'ggggggg', '2019-12-01', '2019-12-21', 18, 'Asli banget', 5, ''),
(787878, 'iiiii', 'aaaaa', '2019-12-02', '2019-12-26', 4, 'ASLI', 4, 'jenggot dan cadar.jpg'),
(999999, 'hhhhhh', 'pppppp', '2019-12-03', '2019-12-26', 6, 'cxxxxx', 6, 'AYAMM.jpg'),
(33333333, 'ssss', 'jjjj', '2019-12-16', '2019-12-20', 9, 'mmmm', 5, 'acnegel3.jpeg'),
(2147483647, 'Pertamina', 'uuuuuuu', '2019-12-17', '2019-12-19', 8, '666', 8, 'bodrex3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_arsip_voucher_jaminan`
--

CREATE TABLE `tb_arsip_voucher_jaminan` (
  `id` int(11) NOT NULL,
  `kd_klasifikasi` int(11) NOT NULL,
  `no_penetapan` int(11) NOT NULL,
  `kd_transaksi_voucher` int(11) NOT NULL,
  `no_kpj_nama_tenaga_kerja` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `pph_21` int(11) NOT NULL,
  `jlh_bayar` int(11) NOT NULL,
  `no_rek_penerima` int(11) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `atas_nama` varchar(30) NOT NULL,
  `jlh_lbr_berkas` int(11) NOT NULL,
  `tingkat_perkembangan` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `no_boks` int(11) NOT NULL,
  `foto` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_arsip_voucher_jaminan`
--

INSERT INTO `tb_arsip_voucher_jaminan` (`id`, `kd_klasifikasi`, `no_penetapan`, `kd_transaksi_voucher`, `no_kpj_nama_tenaga_kerja`, `nama_perusahaan`, `pph_21`, `jlh_bayar`, `no_rek_penerima`, `bank`, `atas_nama`, `jlh_lbr_berkas`, `tingkat_perkembangan`, `keterangan`, `no_boks`, `foto`) VALUES
(0, 99999, 242455555, 555444, '8484848suci', 'Sejahtera', 78787, 10, 7844, 'BRIII', 'dhjfhiu', 7, 'aman sangat', 'hriue', 9, 'mylanta.jpg'),
(0, 358038, 1234321, 34343, '9874237', 'Pertamina', 3, 44444, 87357375, 'BRI', 'suci', 78, 'ASLI', 'ttttt', 4, 'twitter.jpg'),
(0, 99887766, 2147483647, 2147483647, '76suci', 'Abadi', 981234, 900001, 887438728, 'BNI', 'Mawar', 8, 'amaaann', 'ookkee', 8, 'otem1.jpeg'),
(0, 2147483647, 7358737, 24207473, '7537', 'etei', 0, 7437539, 93757, 'iriuri', 'ewtiie', 7, 'her', 'hjdhfjdhj', 38483, 'samurago4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_arsip_voucher_umum`
--

CREATE TABLE `tb_arsip_voucher_umum` (
  `kd_klasifikasi` int(11) NOT NULL,
  `kd_transaksi_voucher` int(11) NOT NULL,
  `program` varchar(20) NOT NULL,
  `jlh_rupiah` int(11) NOT NULL,
  `ket_transaksi` varchar(50) NOT NULL,
  `jlh_lembar_berkas` int(11) NOT NULL,
  `tingkat_perkembangan` varchar(20) NOT NULL,
  `ket` varchar(50) NOT NULL,
  `no_boks` int(11) NOT NULL,
  `foto` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_arsip_voucher_umum`
--

INSERT INTO `tb_arsip_voucher_umum` (`kd_klasifikasi`, `kd_transaksi_voucher`, `program`, `jlh_rupiah`, `ket_transaksi`, `jlh_lembar_berkas`, `tingkat_perkembangan`, `ket`, `no_boks`, `foto`) VALUES
(34577, 49494949, '98982', 4, 'eruie', 20, 'okkayy', 'wureiu', 8, ''),
(898989, 887878, 'hshdsidhu', 7667, 'hsdhjsah', 7, 'SUHUAH', 'amannnnn', 9, 'bodrex1.jpg'),
(2147483647, 574385, 'iurttuer', 88888, 'reituitu', 777, 'yerureyu', 'oookkkk', 8, 'samurago2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_aset_barang`
--

CREATE TABLE `tb_aset_barang` (
  `kd_aset_barang` int(11) NOT NULL,
  `no_registrasi` varchar(20) NOT NULL,
  `nama_aset` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `merek` varchar(20) NOT NULL,
  `status` enum('Tersedia','Proses','Sedang dipinjam') NOT NULL DEFAULT 'Tersedia',
  `pengaju` varchar(50) NOT NULL,
  `persetujuan` enum('Pengajuan','Disetujui','Tolak') NOT NULL DEFAULT 'Pengajuan',
  `penyetuju` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aset_barang`
--

INSERT INTO `tb_aset_barang` (`kd_aset_barang`, `no_registrasi`, `nama_aset`, `type`, `merek`, `status`, `pengaju`, `persetujuan`, `penyetuju`) VALUES
(2, '12345', 'Laptop', 'Aspire E 15', 'acer', 'Sedang dipinjam', 'suci sasmita ramadha', 'Disetujui', 'zaenoer fadjar koerniawan'),
(3, '747474747', 'Mouse', 'Gaming', 'Razor', 'Tersedia', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_aset_kendaraan`
--

CREATE TABLE `tb_aset_kendaraan` (
  `kd_aset_kendaraan` int(11) NOT NULL,
  `no_regis` varchar(20) NOT NULL,
  `nama_aset` varchar(20) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `merek` varchar(20) NOT NULL,
  `no_rangka` varchar(20) NOT NULL,
  `no_mesin` varchar(20) NOT NULL,
  `no_polisi` varchar(20) NOT NULL,
  `tahun_pembuatan` varchar(20) NOT NULL,
  `masa_pajak` date NOT NULL,
  `nilai_pajak` varchar(20) NOT NULL,
  `nama_asuransi` varchar(20) NOT NULL,
  `jenis_asuransi` varchar(20) NOT NULL,
  `nilai_premi` varchar(20) NOT NULL,
  `masa_asuransi1` date NOT NULL,
  `masa_asuransi2` date NOT NULL,
  `statuss` enum('Tersedia','Proses','Sedang digunakan') NOT NULL DEFAULT 'Tersedia',
  `pengaju` varchar(50) NOT NULL,
  `persetujuan` enum('Proses','Disetujui','Tolak') NOT NULL DEFAULT 'Proses',
  `penyetuju` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aset_kendaraan`
--

INSERT INTO `tb_aset_kendaraan` (`kd_aset_kendaraan`, `no_regis`, `nama_aset`, `jenis`, `type`, `merek`, `no_rangka`, `no_mesin`, `no_polisi`, `tahun_pembuatan`, `masa_pajak`, `nilai_pajak`, `nama_asuransi`, `jenis_asuransi`, `nilai_premi`, `masa_asuransi1`, `masa_asuransi2`, `statuss`, `pengaju`, `persetujuan`, `penyetuju`) VALUES
(7, '7585758', 'avanza', 'Roda 4', 'minibus', 'toyota', 'rk3232325yu', 'UNM343K3H4K3J', 'bm 6637 tm', '2016', '2018-10-27', '15.000', 'Axia', 'keseluruhan', '17.000', '2019-01-01', '2019-11-29', 'Sedang digunakan', 'suci sasmita ramadhani', 'Disetujui', 'zaenoer fadjar koerniawan'),
(8, '262656', 'Supra', 'Roda 2', 'Bebek', 'Honda', '123445HUJKKL', '1JKKK2LKJ3', 'BM 2222 DD', '2014', '2020-01-30', '135.000', 'ADIRA', 'Klaim Kerusakan', '10.000', '2019-10-01', '2020-01-29', 'Tersedia', 'suci sasmita ramadhani', 'Proses', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bidang`
--

CREATE TABLE `tb_bidang` (
  `id_bidang` int(11) NOT NULL,
  `nama_bidang` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_barang`
--

CREATE TABLE `tb_detail_barang` (
  `kd_detail_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `nama_toko` varchar(50) NOT NULL,
  `harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_detail_barang`
--

INSERT INTO `tb_detail_barang` (`kd_detail_barang`, `nama_barang`, `nama_toko`, `harga`) VALUES
(1, 'Pena Standar', '', '2'),
(2, 'Pena Standar', '', '2'),
(3, 'kertas A4', '', '30'),
(4, 'kertas A4', '', '20'),
(5, 'Lakban', 'Sejahtera', '20.000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(30) NOT NULL,
  `id_bidang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_keluar`
--

CREATE TABLE `tb_keluar` (
  `id_keluar` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_barang` varchar(25) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `pengaju` varchar(25) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `menyetujui` varchar(20) NOT NULL,
  `status` enum('belum_proses','proses','disetujui') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_keluar`
--

INSERT INTO `tb_keluar` (`id_keluar`, `tanggal`, `nama_barang`, `satuan`, `jumlah`, `pengaju`, `bidang`, `keterangan`, `menyetujui`, `status`) VALUES
(2, '2019-12-04', 'kertas A4', 'Rim', 10, 'suci sasmita ramadhani', '', 'kebuthan', '', 'disetujui'),
(7, '2005-12-19', 'Toner tinta printer', 'Pcs', 2, 'suci sasmita ramadhani', 'keuangan', 'banyak dibutuhkan', 'zaenoer fadjar koern', 'disetujui'),
(8, '2005-12-19', 'Matrai 6000', 'Buah', 10, 'suci sasmita ramadhani', 'keuangan', 'di ambil sore ini', 'zaenoer fadjar koern', 'disetujui'),
(9, '2005-12-19', 'kertas A4', 'Rim', 20, 'suci sasmita ramadhani', 'keuangan', 'permintaan rutin', 'zaenoer fadjar koern', 'disetujui'),
(10, '2005-12-19', 'kertas A4', 'Rim', 10, 'suci sasmita ramadhani', 'keuangan', 'lagi', '', 'proses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kepegawaian`
--

CREATE TABLE `tb_kepegawaian` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `npk_pegawai` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `nama_bidang` varchar(50) NOT NULL,
  `no_hp` int(11) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_unit` int(11) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `tahun_grade` date NOT NULL,
  `golongan` varchar(30) NOT NULL,
  `tahun_golongan` date NOT NULL,
  `tahun_kerja` date NOT NULL,
  `tahun_jabatan` date NOT NULL,
  `pendidikan_diakui` varchar(30) NOT NULL,
  `pendidikan_tidak_diakui` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kepegawaian`
--

INSERT INTO `tb_kepegawaian` (`id_pegawai`, `nama_pegawai`, `npk_pegawai`, `id_jabatan`, `nama_bidang`, `no_hp`, `tgl_lahir`, `email`, `alamat`, `username`, `password`, `id_unit`, `grade`, `tahun_grade`, `golongan`, `tahun_golongan`, `tahun_kerja`, `tahun_jabatan`, `pendidikan_diakui`, `pendidikan_tidak_diakui`, `foto`) VALUES
(1, 'zaenoer fadjar koerniawan', 0, 0, 'umum & sda', 0, '0000-00-00', '', '', 'fajar', '81dc9bdb52d04dc20036dbd8313ed055', 0, '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', ''),
(2, 'suci sasmita ramadhani', 1233322, 1, 'keuangan', 0, '2019-11-12', 'suci@gmail.com', 'panam', 'suci', '81dc9bdb52d04dc20036dbd8313ed055', 3, 'XI', '2019-11-04', '2A', '0000-00-00', '0000-00-00', '0000-00-00', 'S1', 'S3', 'gambar1.jpg'),
(5, 'tina', 1234, 0, 'umum&sdm', 0, '0000-00-00', '', '', 'tina', '81dc9bdb52d04dc20036dbd8313ed055', 0, '', '0000-00-00', '', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '001.jpg'),
(6, 'Mawar nur', 11113333, 0, 'ti', 823851322, '2019-12-18', '', '', 'qweqwe', '157eb9ce33644ada6d0499c1097c4f5d', 0, 'weqw', '2019-12-19', '2', '2019-12-13', '2019-12-23', '2019-12-28', 'fioerffndf', 'ffffffff', 'MIE AYAM.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stok_input`
--

CREATE TABLE `tb_stok_input` (
  `kd_stok_input` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jenis_barang` varchar(20) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `jumlah_stok` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `petugas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_stok_input`
--

INSERT INTO `tb_stok_input` (`kd_stok_input`, `tgl_masuk`, `nama_barang`, `jenis_barang`, `satuan`, `jumlah`, `jumlah_stok`, `keterangan`, `petugas`) VALUES
(4, '2019-12-03', 'kertas A4', 'Alat Tulis Kantor', 'Rim', 90, 160, 'tambahan lagi', 'zaenoer fadjar koerniawan'),
(5, '2019-12-03', 'Formulir Pendaftaran', 'Formulir', 'Buku', 125, 80, 'butuh sangat banyak\r\n', 'zaenoer fadjar koerniawan'),
(6, '2019-12-03', 'Toner tinta printer', 'Consumables', 'Pcs', 50, 66, 'stok jangka lama', 'zaenoer fadjar koerniawan'),
(7, '2019-12-03', 'Matrai 6000', 'Materai', 'Buah', 50, 41, 'Banyak Dibutuhkan Hari ini', 'zaenoer fadjar koerniawan'),
(8, '2019-12-03', 'Pena Standar', 'Alat Tulis Kantor', 'Lusin', 10, 20, 'dicari lagi\r\n', 'zaenoer fadjar koerniawan'),
(9, '0000-00-00', 'Lakban', 'Consumables', 'lusin', 10, 10, 'kebutuhan acara', 'zaenoer fadjar koerniawan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_jenis_stok`
--
ALTER TABLE `detail_jenis_stok`
  ADD PRIMARY KEY (`kd_jenis`);

--
-- Indexes for table `detail_toko`
--
ALTER TABLE `detail_toko`
  ADD PRIMARY KEY (`kd_toko`);

--
-- Indexes for table `tb_arsip_kepesertaan_jasa_kons`
--
ALTER TABLE `tb_arsip_kepesertaan_jasa_kons`
  ADD PRIMARY KEY (`no_pendaftaran_proyek`);

--
-- Indexes for table `tb_arsip_voucher_jaminan`
--
ALTER TABLE `tb_arsip_voucher_jaminan`
  ADD PRIMARY KEY (`kd_klasifikasi`);

--
-- Indexes for table `tb_arsip_voucher_umum`
--
ALTER TABLE `tb_arsip_voucher_umum`
  ADD PRIMARY KEY (`kd_klasifikasi`);

--
-- Indexes for table `tb_aset_barang`
--
ALTER TABLE `tb_aset_barang`
  ADD PRIMARY KEY (`kd_aset_barang`);

--
-- Indexes for table `tb_aset_kendaraan`
--
ALTER TABLE `tb_aset_kendaraan`
  ADD PRIMARY KEY (`kd_aset_kendaraan`);

--
-- Indexes for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  ADD PRIMARY KEY (`id_bidang`);

--
-- Indexes for table `tb_detail_barang`
--
ALTER TABLE `tb_detail_barang`
  ADD PRIMARY KEY (`kd_detail_barang`);

--
-- Indexes for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tb_keluar`
--
ALTER TABLE `tb_keluar`
  ADD PRIMARY KEY (`id_keluar`);

--
-- Indexes for table `tb_kepegawaian`
--
ALTER TABLE `tb_kepegawaian`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `tb_stok_input`
--
ALTER TABLE `tb_stok_input`
  ADD PRIMARY KEY (`kd_stok_input`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_jenis_stok`
--
ALTER TABLE `detail_jenis_stok`
  MODIFY `kd_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `detail_toko`
--
ALTER TABLE `detail_toko`
  MODIFY `kd_toko` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_aset_barang`
--
ALTER TABLE `tb_aset_barang`
  MODIFY `kd_aset_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_aset_kendaraan`
--
ALTER TABLE `tb_aset_kendaraan`
  MODIFY `kd_aset_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_detail_barang`
--
ALTER TABLE `tb_detail_barang`
  MODIFY `kd_detail_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_keluar`
--
ALTER TABLE `tb_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_kepegawaian`
--
ALTER TABLE `tb_kepegawaian`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_stok_input`
--
ALTER TABLE `tb_stok_input`
  MODIFY `kd_stok_input` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
