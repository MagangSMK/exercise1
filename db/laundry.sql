-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2022 at 03:42 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `cucian`
--

CREATE TABLE `cucian` (
  `kodecucian` char(20) NOT NULL,
  `jumlahpotong` int(11) DEFAULT NULL,
  `jeniscucian` varchar(100) DEFAULT NULL,
  `berat_kg` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cucian`
--

INSERT INTO `cucian` (`kodecucian`, `jumlahpotong`, `jeniscucian`, `berat_kg`, `harga`) VALUES
('111', 1, 'cuci', 2, 15000);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `kodekaryawan` char(20) NOT NULL,
  `namakaryawan` varchar(64) DEFAULT NULL,
  `jeniskelamin` varchar(11) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `jabatan` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`kodekaryawan`, `namakaryawan`, `jeniskelamin`, `alamat`, `kota`, `jabatan`) VALUES
('111', 'ali', 'lelaki', 'baloi', 'batam', 'penggosok');

-- --------------------------------------------------------

--
-- Table structure for table `log_in`
--

CREATE TABLE `log_in` (
  `username` char(10) NOT NULL,
  `sandi` char(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `log_in`
--

INSERT INTO `log_in` (`username`, `sandi`) VALUES
('abc', '2'),
('admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `kodepelanggan` char(12) NOT NULL,
  `namapelanggan` varchar(20) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `telepon` int(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`kodepelanggan`, `namapelanggan`, `alamat`, `telepon`) VALUES
('111', 'leha', 'baloi', 9221);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `kodetransaksi` char(20) NOT NULL,
  `kodekaryawan` char(20) DEFAULT NULL,
  `kodepelanggan` char(20) DEFAULT NULL,
  `kodecucian` char(20) DEFAULT NULL,
  `tanggalmasuk` date DEFAULT NULL,
  `tanggalkeluar` date DEFAULT NULL,
  `jumlah` double(12,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`kodetransaksi`, `kodekaryawan`, `kodepelanggan`, `kodecucian`, `tanggalmasuk`, `tanggalkeluar`, `jumlah`) VALUES
('111', '111', '111', '111', '2022-06-01', '2022-06-03', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cucian`
--
ALTER TABLE `cucian`
  ADD PRIMARY KEY (`kodecucian`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`kodekaryawan`);

--
-- Indexes for table `log_in`
--
ALTER TABLE `log_in`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`kodepelanggan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`kodetransaksi`),
  ADD KEY `kodekaryawan` (`kodekaryawan`,`kodecucian`),
  ADD KEY `kodepelanggan` (`kodepelanggan`),
  ADD KEY `kodecucian` (`kodecucian`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`kodecucian`) REFERENCES `cucian` (`kodecucian`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`kodepelanggan`) REFERENCES `pelanggan` (`kodepelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`kodekaryawan`) REFERENCES `karyawan` (`kodekaryawan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
