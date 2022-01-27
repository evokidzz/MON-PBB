-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 17 Sep 2019 pada 16.51
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_tutorial`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE IF NOT EXISTS `tb_siswa` (
`id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `kelas` varchar(16) NOT NULL,
  `jurusan` varchar(16) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nama`, `kelas`, `jurusan`) VALUES
(1, 'Ahmad', '7A', 'Teknik Mesin'),
(2, 'Nila', '7A', 'Teknik Komputer'),
(3, 'Rina', '7B', 'Teknik Mesin'),
(4, 'Sakti', '8B', 'Teknik Elektro'),
(5, 'Murni', '7C', 'Teknik Mesin'),
(6, 'Dina', '7A', 'Teknik Elektro'),
(7, 'Hasan', '7B', 'Teknik Mesin'),
(8, 'Dona', '8B', 'Teknik Komputer'),
(9, 'Subhan', '7C', 'Teknik Elektro'),
(10, 'Banu', '8A', 'Teknik Mesin'),
(11, 'Santi', '7A', 'Teknik Elektro'),
(12, 'Malik', '8A', 'Teknik Mesin'),
(13, 'Atun', '7B', 'Teknik Elektro'),
(14, 'Agung', '7A', 'Akuntansi'),
(15, 'Farel', '7A', 'Teknik Komputer'),
(16, 'Winda', '8A', 'Teknik Elektro'),
(17, 'Jamal', '7B', 'Teknik Mesin'),
(18, 'Kokom', '7A', 'Akuntansi'),
(19, 'Cici', '7A', 'Teknik Mesin'),
(20, 'Salman', '8B', 'Teknik Elektro'),
(21, 'Tata', '7C', 'Teknik Mesin'),
(22, 'Umi', '8A', 'Teknik Elektro'),
(23, 'Lilis', '7C', 'Teknik Mesin'),
(24, 'Yayan', '8A', 'Teknik Mesin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
