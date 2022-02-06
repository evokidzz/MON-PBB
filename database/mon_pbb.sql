-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 12:56 PM
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
  `id_baru` int(20) NOT NULL,
  `no_pel` varchar(20) NOT NULL,
  `tgl_pel` date NOT NULL,
  `nop` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `letak_op` varchar(150) NOT NULL,
  `kel` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_baru`
--

INSERT INTO `tb_baru` (`id_baru`, `no_pel`, `tgl_pel`, `nop`, `nik`, `nama`, `alamat`, `letak_op`, `kel`, `kec`, `ket`) VALUES
(1, '2021.0001.001', '2021-01-01', '63.03.020.025.000.0000.0', '0015484554', 'PT.MUSTIKA RAYA ', 'JL.MANARAP BARU', 'KO.DZALVY BARU', 'KERTAK HANYAR II', 'KERTAK HANYAR', 'KOLEKTIF'),
(2, '2021.0013.039', '2021-12-25', '63.03.050.017.000.0000.0', '62584848484', 'ANGGA RUSADI', 'MARTAPURA', 'MARTAPURA', 'KERATON', 'MARTAPURA', 'PERORANGAN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_betul`
--

CREATE TABLE `tb_betul` (
  `id_betul` int(20) NOT NULL,
  `no_pel` varchar(20) NOT NULL,
  `tgl_pel` date NOT NULL,
  `nop` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `letak_op` varchar(150) NOT NULL,
  `kel` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_betul`
--

INSERT INTO `tb_betul` (`id_betul`, `no_pel`, `tgl_pel`, `nop`, `nik`, `nama`, `alamat`, `letak_op`, `kel`, `kec`, `ket`) VALUES
(1, '2021.0020.79', '0021-10-21', '63.03.030.014.001.0044.0', '630303001200100440', 'HUTOMO WIJAYA', 'JL.A.YANI KM.13,5', 'JL.A.YANI KM.13,5', 'GAMBUT BARAT', 'GAMBUT', 'PERORANGAN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_hapus`
--

CREATE TABLE `tb_hapus` (
  `id_hapus` int(20) NOT NULL,
  `no_pel` varchar(20) NOT NULL,
  `tgl_pel` date NOT NULL,
  `nop` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `letak_op` varchar(150) NOT NULL,
  `kel` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_hapus`
--

INSERT INTO `tb_hapus` (`id_hapus`, `no_pel`, `tgl_pel`, `nop`, `nik`, `nama`, `alamat`, `letak_op`, `kel`, `kec`, `ket`) VALUES
(1, '2021.0008.183', '2021-05-11', '63.03.020.025.001.0137.0', '63030501705154', 'H.KAMSIAH', 'GG.RAHMATULLAH 105', 'GG.RAHMATULLAH 105', 'KERTAK HANYAR II', 'KERTAK HANYAR', 'PERORANGAN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_mutasi`
--

CREATE TABLE `tb_mutasi` (
  `id_mutasi` int(20) NOT NULL,
  `no_pel` varchar(20) NOT NULL,
  `tgl_pel` date NOT NULL,
  `nop` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `letak_op` varchar(150) NOT NULL,
  `kel` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_mutasi`
--

INSERT INTO `tb_mutasi` (`id_mutasi`, `no_pel`, `tgl_pel`, `nop`, `nik`, `nama`, `alamat`, `letak_op`, `kel`, `kec`, `ket`) VALUES
(1, '2021.0002.025', '2021-04-08', '63.03.020.025.005.0257.0', '754125484840', 'PT.YAMIN BANGUN MANDIRI', 'KO.BUNYAMIN II RT.008 RW.001', 'KO.BUNYAMIN III THP.V', 'KERTAK HANYAR II', 'KERTAK HANYAR', 'PERORANGAN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pejabat`
--

CREATE TABLE `tb_pejabat` (
  `id_pejabat` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pejabat`
--

INSERT INTO `tb_pejabat` (`id_pejabat`, `nama`, `jabatan`) VALUES
(1, 'Drs. Achmad Zulyadaini, M.Si', 'Kepala Badan'),
(2, ' Rulliadi, S.Sos, M.M', 'Sekretaris'),
(3, ' Ida Zulfikariah, S,Sos', 'Kasubbag Umpeg'),
(4, 'Nurul Inayati, S. Kom', 'Kasubbag Perencanaan'),
(5, 'Gt. Maya Hairani Noor, SE', 'Kasubbag Keuangan'),
(6, 'Heryanto, SSTP, MA', 'Kabid Pendapatan I'),
(7, 'Hj. Siti Ropikoh, S.Sos', 'Subbid Pendataan dan Pendaftaran'),
(8, 'Zuraida, SH, MH.', 'Subbid Penetapan dan Keberatan '),
(9, 'Ridlo Munawir, SST', 'Subbid Penagihan'),
(10, 'Meutia Irawahdini A, SE, M.Si', 'Kabid Pendapatan II'),
(11, 'Hj. Yulistina Erlindawati, SH', 'Subbid Penilaian dan Penetapan'),
(12, 'Hj. Herne Misnawati, BA', 'Subbid Penagihan dan Pengaduan'),
(13, 'Junaidi, S.Sos', 'Kabid Pendapatan III'),
(14, 'Sukamto, ST', 'Subbid DBH Pajak dan Bukan Pajak'),
(15, 'Hj. Zainab, SE', 'Subbid Pembukuan dan Pelaporan'),
(16, 'Bahruddin, S.Sos, MA', 'Kabid Pengendalian Pendapatan'),
(17, 'Syafiansyah, SKM', 'Subbid Pengawasan'),
(18, 'Muhammad Dimyati, S.Sos', 'Subbid Monitoring dan Evaluasi');

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
(3, 'Mas Adi', 'adi', '1234', 'Administrator', 'Admin'),
(6, 'ASWAN', 'aswan', '1234', 'Sekretaris', 'Petugas Loket');

-- --------------------------------------------------------

--
-- Table structure for table `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(11) NOT NULL,
  `nama_kantor` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `kabupaten` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `nama_kantor`, `alamat`, `kecamatan`, `kabupaten`) VALUES
(1, 'BADAN PENDAPATAN DAERAH', 'JL.PENGERAN HIDAYATULLAH NO.1', 'MARTAPURA', 'BANJAR');

-- --------------------------------------------------------

--
-- Table structure for table `tb_salinan`
--

CREATE TABLE `tb_salinan` (
  `id_salinan` int(20) NOT NULL,
  `no_pel` varchar(20) NOT NULL,
  `tgl_pel` date NOT NULL,
  `nop` varchar(50) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `letak_op` varchar(150) NOT NULL,
  `kel` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_salinan`
--

INSERT INTO `tb_salinan` (`id_salinan`, `no_pel`, `tgl_pel`, `nop`, `nik`, `nama`, `alamat`, `letak_op`, `kel`, `kec`, `ket`) VALUES
(1, '2021.0018.113', '2021-09-29', '63.03.030.012.009.0855.0', '6371054404670004', 'SHIRLEY', 'JL.A.YANI KM.2', 'JL.A.YANI KM.17', 'GAMBUT', 'GAMBUT', 'PERORANGAN');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wp`
--

CREATE TABLE `tb_wp` (
  `nik` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `desa` varchar(150) NOT NULL,
  `kec` varchar(150) NOT NULL,
  `kab` varchar(150) NOT NULL,
  `prov` varchar(150) NOT NULL,
  `pekerjaan` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_wp`
--

INSERT INTO `tb_wp` (`nik`, `nama`, `alamat`, `desa`, `kec`, `kab`, `prov`, `pekerjaan`) VALUES
('030259451731000', 'PT.CEMPAGA ALAM SUTRA', 'JL.BINA KARYA', 'PELAMBUAN', 'BANJARMASIN', 'BANJARMASIN', 'KAL-SEL', 'BADAN'),
('030942346732000', 'PT.KOTA CITRA GRAHA', 'KO.CITRA GRAHA', 'LANDASAN ULIN', 'BJB UTARA', 'BANJARBARU', 'KAL-SEL', 'BADAN'),
('032659773731000', 'PT.JOFADINI LESTARI', 'JL.MESJID JAMI GG.ADIL', 'SURGI MUFTI', 'BANJARMASIN', 'BANJARMASIN', 'KAL-SEL', 'BADAN'),
('63029131800001', 'PT.YAMIN BANGUN MANDIRI', 'KO.PALAPAN PERMAI', 'KERTAK HANYAR I', 'KERTAK HANYAR', 'BANJAR', 'KAL-SEL', 'BADAN'),
('710762493732000', 'PT.REZKI ALAMIRA SEJAHTERA', 'JL.MANARAP', 'MANARAP LAMA', 'KERTAK HANYAR', 'BANJAR', 'KAL-SEL', 'BADAN'),
('751099888731000', 'PT.GLOBAL ASRI BORNEO', 'JL.H.HASAN BASRI', 'PANGERAN', 'BANJARMASIN', 'BANJARMASIN', 'KAL-SEL', 'BADAN'),
('768812786732000', 'PT.ANNISA RIQZI PRATAMA', 'JL.PELITA IV A', 'LANDASAN ULIN ', 'BJB UTARA', 'BANJARBARU', 'KAL-SEL', 'BADAN'),
('80342828373100', 'PT.FAEZA BANGUN JAYA', 'JL.PRAMUKA', 'SUNGAI LULUT', 'BANJARMASIN', 'BANJARMASIN', 'KAL-SEL', 'BADAN'),
('811452374732000', 'PT.TIARA PUTRI MANUNGGAL', 'KO.WENGGA INDAH VIII', 'GAMBUT', 'GAMBUT', 'BANJAR', 'KAL-SEL', 'BADAN'),
('849747407731000', 'PT.ENAM SEMBILAN REALTY', 'JL.PEKAPURAN B LAUT', 'PEKAPURAN LAUT', 'BANJARMASIN', 'BANJARMASIN', 'KAL-SEL', 'BADAN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_baru`
--
ALTER TABLE `tb_baru`
  ADD PRIMARY KEY (`id_baru`);

--
-- Indexes for table `tb_betul`
--
ALTER TABLE `tb_betul`
  ADD PRIMARY KEY (`id_betul`);

--
-- Indexes for table `tb_hapus`
--
ALTER TABLE `tb_hapus`
  ADD PRIMARY KEY (`id_hapus`);

--
-- Indexes for table `tb_mutasi`
--
ALTER TABLE `tb_mutasi`
  ADD PRIMARY KEY (`id_mutasi`);

--
-- Indexes for table `tb_pejabat`
--
ALTER TABLE `tb_pejabat`
  ADD PRIMARY KEY (`id_pejabat`);

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
-- Indexes for table `tb_salinan`
--
ALTER TABLE `tb_salinan`
  ADD PRIMARY KEY (`id_salinan`);

--
-- Indexes for table `tb_wp`
--
ALTER TABLE `tb_wp`
  ADD PRIMARY KEY (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_baru`
--
ALTER TABLE `tb_baru`
  MODIFY `id_baru` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_betul`
--
ALTER TABLE `tb_betul`
  MODIFY `id_betul` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_hapus`
--
ALTER TABLE `tb_hapus`
  MODIFY `id_hapus` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_mutasi`
--
ALTER TABLE `tb_mutasi`
  MODIFY `id_mutasi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pejabat`
--
ALTER TABLE `tb_pejabat`
  MODIFY `id_pejabat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tb_pengguna`
--
ALTER TABLE `tb_pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_salinan`
--
ALTER TABLE `tb_salinan`
  MODIFY `id_salinan` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
