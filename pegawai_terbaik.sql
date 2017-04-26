-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2017 at 06:20 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pegawai_terbaik`
--

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` char(4) NOT NULL,
  `nama_kriteria` varchar(20) NOT NULL,
  `bobot` float NOT NULL,
  `periode` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai_pegawai`
--

CREATE TABLE `nilai_pegawai` (
  `id_nilaipegawai` char(4) NOT NULL,
  `id_kriteria` char(4) NOT NULL,
  `nilai` float NOT NULL,
  `periode` varchar(11) NOT NULL,
  `nik` char(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `nik` char(18) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jk` enum('P','W') NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `pendidikan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`nik`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jk`, `alamat`, `jabatan`, `tanggal_masuk`, `pendidikan`) VALUES
('101234567890', '111', '1111', '2000-01-11', '', '111', '1111', '2000-02-23', '2332'),
('10123456789011', 'sss', 'yyy', '0000-00-00', 'W', 'gg', 'gg', '0000-00-00', 'ff'),
('11122222224444444', 'Dede kalimata', 'Bantul', '0000-00-00', 'P', 'Bantul', 'sekretaris', '0000-00-00', 'SMA'),
('111333', 'aaa', 'jogja', '0000-00-00', 'P', 'fff', 'fff', '0000-00-00', 'ss'),
('12131331', 'said', 'palembang', '0000-00-00', 'P', 'janti', 'manager', '0000-00-00', 'sma'),
('12312', 'dede kalimata', '1212121', '0000-00-00', 'P', 'jogja', 'manajer', '0000-00-00', 'SMA'),
('1231232', 'dede kalimata', '1212121', '0000-00-00', 'P', 'jogja', 'manajer', '0000-00-00', 'SMA'),
('1234', 'dede kalimata', '1212121', '0000-00-00', 'P', 'jogja', 'manajer', '0000-00-00', 'SMA'),
('22', '111', '232', '0000-00-00', '', '323', '1111', '2000-02-23', '2332');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` char(4) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
('1234', 'bagpeg', 'bagpeg');

-- --------------------------------------------------------

--
-- Table structure for table `usulan`
--

CREATE TABLE `usulan` (
  `id_usulan` char(4) NOT NULL,
  `nik` char(4) NOT NULL,
  `periode` varchar(11) NOT NULL,
  `nilai_akhir` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `nilai_pegawai`
--
ALTER TABLE `nilai_pegawai`
  ADD PRIMARY KEY (`id_nilaipegawai`),
  ADD KEY `id_kriteria` (`id_kriteria`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `usulan`
--
ALTER TABLE `usulan`
  ADD PRIMARY KEY (`id_usulan`),
  ADD KEY `nik` (`nik`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai_pegawai`
--
ALTER TABLE `nilai_pegawai`
  ADD CONSTRAINT `nilai_pegawai_ibfk_1` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`),
  ADD CONSTRAINT `nilai_pegawai_ibfk_2` FOREIGN KEY (`nik`) REFERENCES `pegawai` (`nik`);

--
-- Constraints for table `usulan`
--
ALTER TABLE `usulan`
  ADD CONSTRAINT `usulan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `pegawai` (`nik`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
