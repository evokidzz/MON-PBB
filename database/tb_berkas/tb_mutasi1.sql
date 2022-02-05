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
-- Table structure for table `tb_mutasi`
--

CREATE TABLE `tb_mutasi` (
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
-- Indexes for table `tb_mutasi`
--
ALTER TABLE `tb_mutasi`
  ADD PRIMARY KEY (`no_pel`),
  ADD KEY `nik` (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
