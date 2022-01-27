-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2022 at 03:15 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adm_desa`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_domisili`
--

CREATE TABLE `tb_domisili` (
  `no_surat` varchar(50) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `nik` varchar(18) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `almt_sementara` varchar(150) NOT NULL,
  `keperluan` varchar(250) NOT NULL,
  `masa_berlaku` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_kehilangan`
--

CREATE TABLE `tb_kehilangan` (
  `no_surat` varchar(50) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `nik` varchar(18) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `tgl_kehilangan` date NOT NULL,
  `tmpt_kehilangan` varchar(150) NOT NULL,
  `ket` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kehilangan`
--

INSERT INTO `tb_kehilangan` (`no_surat`, `tgl_pengajuan`, `nik`, `nama`, `alamat`, `pekerjaan`, `tgl_kehilangan`, `tmpt_kehilangan`, `ket`) VALUES
('41.400/NI/IV/2019', '2019-04-30', '63154848484', 'DARIAH', 'Desa Nusa Indah Rt 05 Rw 03', 'IBU RUMAH TANGGA', '2019-04-29', 'Arah Ke Pelaihari', 'Kartu BPJS');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kematian`
--

CREATE TABLE `tb_kematian` (
  `no_surat` varchar(50) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `nik` varchar(18) DEFAULT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `tgl_meninggal` date NOT NULL,
  `jam` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kematian`
--

INSERT INTO `tb_kematian` (`no_surat`, `tgl_pengajuan`, `nik`, `nama`, `alamat`, `tgl_meninggal`, `jam`) VALUES
('28.500/NI/II/2019', '2022-01-22', '65684465456', 'DITA', 'BATI-BATI', '2022-01-22', '00:02:00'),
('34.474.3/NI/X/2018', '2022-01-01', '58585858', 'MASLI', 'Desa Nusa Indah Rt 05 Rw 03', '2021-06-30', '15:55:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pejabat`
--

CREATE TABLE `tb_pejabat` (
  `id_pejabat` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pejabat`
--

INSERT INTO `tb_pejabat` (`id_pejabat`, `nama`, `jabatan`) VALUES
(0, 'SUPARMAN', 'PEMBAKAL'),
(1, 'LUTFI WARDANI', 'SEKDES');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penduduk`
--

CREATE TABLE `tb_penduduk` (
  `nik` varchar(18) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tmpt_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `agama` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_penduduk`
--

INSERT INTO `tb_penduduk` (`nik`, `nama`, `tmpt_lahir`, `tgl_lahir`, `jenis_kelamin`, `alamat`, `agama`, `status`, `pekerjaan`) VALUES
('6303050225415', 'ANGGA RUSADI', 'PELAIHARI', '1991-07-13', 'L', 'Desa Nusa Indah Rt 05 Rw 03', 'Islam', 'Belum Menikah', 'Karyawan Swasta'),
('6315484848484', 'DARIAH', 'PELAIHARI', '2001-05-05', 'P', 'JL.A.YANI', 'Islam', 'Belum Menikah', 'Honerer');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pengguna`
--

CREATE TABLE `tb_pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('Administrator','Sekretaris') NOT NULL,
  `jabatan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pengguna`
--

INSERT INTO `tb_pengguna` (`id_pengguna`, `nama_pengguna`, `username`, `password`, `level`, `jabatan`) VALUES
(3, 'Walia Rahmah', 'Walia', '1234', 'Administrator', 'Admin'),
(5, 'UDIN', 'UDIN', '1', 'Sekretaris', 'PEGAWAI');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(11) NOT NULL,
  `nama_desa` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `nama_desa`, `alamat`, `kecamatan`, `kabupaten`) VALUES
(1, 'DESA NUSA INDAH', 'JL.A.YANI', 'BATI-BATI', 'TANAH LAUT');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tdkmampu`
--

CREATE TABLE `tb_tdkmampu` (
  `no_surat` varchar(50) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `nik` varchar(18) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `keperluan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_tdkmampu`
--

INSERT INTO `tb_tdkmampu` (`no_surat`, `tgl_pengajuan`, `nik`, `nama`, `alamat`, `pekerjaan`, `keperluan`) VALUES
(' 24.402/NI/V/2019', '2022-01-01', '6315484848484', 'DARIAH', 'JL.A.YANI', 'Honerer', 'MELAHIRKAN'),
('2', '2022-01-01', '6303050225415', 'ANGGA RUSADI', '	Desa Nusa Indah Rt 05 Rw 03	', 'Karyawan Swasta', 'BEASISWA');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usaha`
--

CREATE TABLE `tb_usaha` (
  `no_surat` varchar(50) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `nik` varchar(18) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `jns_usaha` varchar(100) NOT NULL,
  `almt_usaha` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_usaha`
--

INSERT INTO `tb_usaha` (`no_surat`, `tgl_pengajuan`, `nik`, `nama`, `pekerjaan`, `jns_usaha`, `almt_usaha`) VALUES
('1', '2022-01-01', '8548455', 'Walia', 'IBU RUMAH TANGGA', 'CATERING', 'BATI-BATI'),
('28.500/NI/II/2019', '2022-01-03', '999995', 'Walia', 'Honerer', 'JUAL GORENGAN', 'NUSA INDAH'),
('29', '2022-01-01', '1', 'DITA', 'Honerer', 'JUAL GORENGAN', 'JL.A.YANI'),
('73.500/NI/V/2019', '2022-01-31', '633333333', 'KENI SUBAWEH', 'Karyawan Swasta', 'Jual Aneka Gorengan', 'Desa Nusa Indah RT 3 RW 2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_domisili`
--
ALTER TABLE `tb_domisili`
  ADD PRIMARY KEY (`no_surat`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_kehilangan`
--
ALTER TABLE `tb_kehilangan`
  ADD PRIMARY KEY (`no_surat`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_kematian`
--
ALTER TABLE `tb_kematian`
  ADD PRIMARY KEY (`no_surat`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_pejabat`
--
ALTER TABLE `tb_pejabat`
  ADD PRIMARY KEY (`id_pejabat`);
ALTER TABLE `tb_pejabat` ADD FULLTEXT KEY `nama` (`nama`);

--
-- Indexes for table `tb_penduduk`
--
ALTER TABLE `tb_penduduk`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indexes for table `tb_tdkmampu`
--
ALTER TABLE `tb_tdkmampu`
  ADD PRIMARY KEY (`no_surat`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tb_usaha`
--
ALTER TABLE `tb_usaha`
  ADD PRIMARY KEY (`no_surat`),
  ADD KEY `nik` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_domisili`
--
ALTER TABLE `tb_domisili`
  ADD CONSTRAINT `tb_domisili_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_penduduk` (`nik`);

--
-- Constraints for table `tb_kehilangan`
--
ALTER TABLE `tb_kehilangan`
  ADD CONSTRAINT `tb_kehilangan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_penduduk` (`nik`);

--
-- Constraints for table `tb_kematian`
--
ALTER TABLE `tb_kematian`
  ADD CONSTRAINT `tb_kematian_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_penduduk` (`nik`);

--
-- Constraints for table `tb_tdkmampu`
--
ALTER TABLE `tb_tdkmampu`
  ADD CONSTRAINT `tb_tdkmampu_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_penduduk` (`nik`);

--
-- Constraints for table `tb_usaha`
--
ALTER TABLE `tb_usaha`
  ADD CONSTRAINT `tb_usaha_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tb_penduduk` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
