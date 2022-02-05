-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2022 at 10:54 AM
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
-- Database: `mon_pbb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_baru`
--

CREATE TABLE `tb_baru` (
  `no_pel` varchar(20) NOT NULL,
  `tgl_pel` date NOT NULL,
  `nop` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `letak_op` varchar(150) NOT NULL,
  `kel` varchar(150) NOT NULL,
  `kec` varchar(150) NOT NULL,
  `ket` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_baru`
--

INSERT INTO `tb_baru` (`no_pel`, `tgl_pel`, `nop`, `nik`, `nama`, `alamat`, `letak_op`, `kel`, `kec`, `ket`) VALUES
('2021.0013.039', '2021-12-05', '63.03.030.012.000.0000.0', '63021515151', 'PT.DZALVY', 'JL.MANARAP BARU', 'KO.DZALVY BARU', 'KERTAK HANYAR I', 'KERTAK HANYAR', '12 BERKAS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_baru`
--
ALTER TABLE `tb_baru`
  ADD PRIMARY KEY (`no_pel`),
  ADD KEY `nik` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
