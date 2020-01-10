-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2019 at 05:10 AM
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
-- Database: `db_arsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_awal_kepesertaan`
--

CREATE TABLE `tb_awal_kepesertaan` (
  `bulan` date NOT NULL,
  `tahun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_bkn_penerima_upah`
--

CREATE TABLE `tb_bkn_penerima_upah` (
  `tgl_bulan` date NOT NULL,
  `tahun` date NOT NULL,
  `npw_no_mitra_nik` int(11) NOT NULL,
  `nma_wadah_mitra_individu` varchar(50) NOT NULL,
  `jlh_berkas` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `no_boks_laci_filling` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_jasa_kontruksi`
--

CREATE TABLE `tb_jasa_kontruksi` (
  `no_pendaftarn_proyek` int(11) NOT NULL,
  `nama_proyek` varchar(50) NOT NULL,
  `nama_kontraktor` varchar(50) NOT NULL,
  `dari_tgl_bln_thn` date NOT NULL,
  `sampai_tgl_bln_thn` date NOT NULL,
  `jumlah_berkas` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `no_boks_laci` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kepesertaan`
--

CREATE TABLE `tb_kepesertaan` (
  `tgl_bulan` date NOT NULL,
  `tahun` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_masa_kontrak`
--

CREATE TABLE `tb_masa_kontrak` (
  `dari_tgl_bln_thn` date NOT NULL,
  `sampai_tgl_bln_thn` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penerima_upah`
--

CREATE TABLE `tb_penerima_upah` (
  `npp_perusahaan` int(11) NOT NULL,
  `bulan` date NOT NULL,
  `tahun` date NOT NULL,
  `jlh_berkas` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `no_boks_laci` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_produk_hukum`
--

CREATE TABLE `tb_produk_hukum` (
  `kode_klasifikasi` int(11) NOT NULL,
  `tgl_surat` date NOT NULL,
  `no_surat` int(11) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `asal_surat` varchar(30) NOT NULL,
  `unit_tujuan_penerima` varchar(50) NOT NULL,
  `jlh_lembar_berkas` int(11) NOT NULL,
  `tingkat_pengembangan` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `no_boks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_uraian`
--

CREATE TABLE `tb_uraian` (
  `tgl_surat` date NOT NULL,
  `no_surat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_voucher_jaminan`
--

CREATE TABLE `tb_voucher_jaminan` (
  `kode_klasifikasi` int(11) NOT NULL,
  `no_penetapan` int(11) NOT NULL,
  `kode_transaksi_voucher` int(11) NOT NULL,
  `no_kpj_dan_nama_tenaga_kerja` varchar(50) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `pph_21` int(12) NOT NULL,
  `jlh_bayar` int(11) NOT NULL,
  `no_rek_penerima` int(12) NOT NULL,
  `bank` varchar(20) NOT NULL,
  `atas_nama` varchar(50) NOT NULL,
  `jlh_lembar_berkas` int(11) NOT NULL,
  `tingkat_perkembangan` int(11) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `no_boks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_voucher_umum`
--

CREATE TABLE `tb_voucher_umum` (
  `kode_klasifikasi` int(11) NOT NULL,
  `kode_transaksi_voucher` int(11) NOT NULL,
  `program` int(11) NOT NULL,
  `jumlah_rupiah` int(11) NOT NULL,
  `ket_transaksi` int(11) NOT NULL,
  `jlh_lembar_berkas` int(11) NOT NULL,
  `tingkat_perkembangan` int(11) NOT NULL,
  `keterengan` int(11) NOT NULL,
  `no_boks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_bkn_penerima_upah`
--
ALTER TABLE `tb_bkn_penerima_upah`
  ADD PRIMARY KEY (`npw_no_mitra_nik`);

--
-- Indexes for table `tb_produk_hukum`
--
ALTER TABLE `tb_produk_hukum`
  ADD PRIMARY KEY (`kode_klasifikasi`);

--
-- Indexes for table `tb_voucher_jaminan`
--
ALTER TABLE `tb_voucher_jaminan`
  ADD PRIMARY KEY (`kode_klasifikasi`);

--
-- Indexes for table `tb_voucher_umum`
--
ALTER TABLE `tb_voucher_umum`
  ADD PRIMARY KEY (`kode_klasifikasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_bkn_penerima_upah`
--
ALTER TABLE `tb_bkn_penerima_upah`
  MODIFY `npw_no_mitra_nik` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_produk_hukum`
--
ALTER TABLE `tb_produk_hukum`
  MODIFY `kode_klasifikasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_voucher_jaminan`
--
ALTER TABLE `tb_voucher_jaminan`
  MODIFY `kode_klasifikasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_voucher_umum`
--
ALTER TABLE `tb_voucher_umum`
  MODIFY `kode_klasifikasi` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
