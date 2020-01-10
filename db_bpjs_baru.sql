-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2019 at 03:00 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

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
-- Table structure for table `tb_aset_kendaraan`
--

CREATE TABLE `tb_aset_kendaraan` (
  `kd_aset_kendaraan` int(11) NOT NULL,
  `no_regis` varchar(20) NOT NULL,
  `nama_aset` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `merek` varchar(20) NOT NULL,
  `no_rangka` varchar(20) NOT NULL,
  `no_mesin` varchar(20) NOT NULL,
  `no_polisi` varchar(20) NOT NULL,
  `tahun_pembuatan` varchar(20) NOT NULL,
  `masa_pajak` varchar(20) NOT NULL,
  `nilai_pajak` varchar(20) NOT NULL,
  `nama_asuransi` varchar(20) NOT NULL,
  `jenis_asuransi` varchar(20) NOT NULL,
  `nilai_premi` varchar(20) NOT NULL,
  `masa_asuransi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_aset_kendaraan`
--

INSERT INTO `tb_aset_kendaraan` (`kd_aset_kendaraan`, `no_regis`, `nama_aset`, `type`, `merek`, `no_rangka`, `no_mesin`, `no_polisi`, `tahun_pembuatan`, `masa_pajak`, `nilai_pajak`, `nama_asuransi`, `jenis_asuransi`, `nilai_premi`, `masa_asuransi`) VALUES
(1, '432525', 'avanza', 'minibus', 'toyota', 'ddr3', 'ttd3', 'bm 6637 tm', '2014', '2018-10-27', '15000', 'kjhfskhj', 'ghsdfjhvgsd', '17000', ''),
(2, '67547', 'jhghjg', 'jhjgjgj', 'jhhgjhgj', 'jhghjg', 'jhgjhg', 'jhghjgjh', '2016', '2018-10-27', '15000', 'kjhfskhj', 'ghsdfjhvgsd', '17000', '2018-10-27sd.2018-10'),
(3, '4546546', 'Hilux', 'Roda 2', 'Datsun', 'rk3232325yu', 'UNM343K3H4K3J', 'BM 2323 CC', '2016', '2018-10-27', '200000', 'Axia', 'keseluruhan', '12000', '2018-10-27sd.2018-10');

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
-- Table structure for table `tb_bkn_penerima_upah`
--

CREATE TABLE `tb_bkn_penerima_upah` (
  `tgl_bulan` date NOT NULL,
  `tahun` date NOT NULL,
  `npw_no_mitra_nik` int(12) NOT NULL,
  `nama_wadah_mitra_individu` varchar(50) NOT NULL,
  `jlh_berkas` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `no_boks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  `nama_pengaju` varchar(25) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `menyetujui` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(2, 'suci sasmita ramadhani', 1233322, 1, 'keuangan', 0, '2019-11-12', 'suci@gmail.com', 'panam', 'suci', '81dc9bdb52d04dc20036dbd8313ed055', 3, 'XI', '2019-11-04', '2A', '0000-00-00', '0000-00-00', '0000-00-00', 'S1', 'S3', 'gambar1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_masuk`
--

CREATE TABLE `tb_masuk` (
  `id_masuk` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerima_upah`
--

CREATE TABLE `tb_penerima_upah` (
  `npp_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `bulan` date NOT NULL,
  `tahun` date NOT NULL,
  `jlh_berkas` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `no_boks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk_hukum`
--

CREATE TABLE `tb_produk_hukum` (
  `kd_klasifikasi` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `no_surat` int(11) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `asal_surat` varchar(50) NOT NULL,
  `unit_tujuan_surat` varchar(50) NOT NULL,
  `jlh_lbr_berkas` int(11) NOT NULL,
  `tingkat_perkembangan` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `no_boks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_satuan`
--

CREATE TABLE `tb_satuan` (
  `id_satuan` int(11) NOT NULL,
  `satuan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `kd_user` int(11) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`kd_user`, `nama_user`, `password`, `jabatan`) VALUES
(1, 'fajar', 'f3fb60b8cc1d95caaf56310eeb0985fc', 'arsip'),
(2, 'suci', '81dc9bdb52d04dc20036dbd8313ed055', 'stok_opname'),
(3, 'tina', '81dc9bdb52d04dc20036dbd8313ed055', 'aset'),
(4, 'dones', '81dc9bdb52d04dc20036dbd8313ed055', 'kepegawaian');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `tb_masuk`
--
ALTER TABLE `tb_masuk`
  ADD PRIMARY KEY (`id_masuk`);

--
-- Indexes for table `tb_produk_hukum`
--
ALTER TABLE `tb_produk_hukum`
  ADD PRIMARY KEY (`kd_klasifikasi`);

--
-- Indexes for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  ADD PRIMARY KEY (`id_satuan`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_aset_kendaraan`
--
ALTER TABLE `tb_aset_kendaraan`
  MODIFY `kd_aset_kendaraan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_bidang`
--
ALTER TABLE `tb_bidang`
  MODIFY `id_bidang` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_jabatan`
--
ALTER TABLE `tb_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_keluar`
--
ALTER TABLE `tb_keluar`
  MODIFY `id_keluar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_kepegawaian`
--
ALTER TABLE `tb_kepegawaian`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_masuk`
--
ALTER TABLE `tb_masuk`
  MODIFY `id_masuk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_produk_hukum`
--
ALTER TABLE `tb_produk_hukum`
  MODIFY `kd_klasifikasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_satuan`
--
ALTER TABLE `tb_satuan`
  MODIFY `id_satuan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
