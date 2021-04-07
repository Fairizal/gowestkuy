-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 03:33 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsepeda`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id` int(11) NOT NULL,
  `id_transaksi` int(11) DEFAULT NULL,
  `id_sepeda` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `detail_total_bayar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id`, `id_transaksi`, `id_sepeda`, `qty`, `harga`, `detail_total_bayar`) VALUES
(1, 1, 1, 2, 100000, 200000),
(19, 39, 8, 1, 100000, 100000),
(20, 40, 4, 1, 100000, 100000),
(21, 41, 4, 1, 100000, 100000),
(22, 42, 5, 1, 100000, 100000),
(23, 43, 5, 1, 100000, 100000),
(24, 44, 5, 1, 100000, 100000),
(25, 45, 5, 1, 100000, 100000),
(47, 46, NULL, 1, 100000, 100000),
(48, 46, NULL, 1, 150000, 150000),
(49, 48, NULL, 1, 100000, 100000),
(50, 48, NULL, 1, 100000, 100000),
(51, 49, 7, 1, 100000, 100000),
(52, 49, 8, 1, 100000, 100000),
(53, 50, 5, 1, 100000, 100000),
(54, 50, 6, 1, 100000, 100000),
(55, 51, 2, 1, 150000, 150000),
(56, 51, 5, 1, 100000, 100000),
(57, 52, 3, 1, 100000, 100000),
(58, 52, 5, 1, 100000, 100000),
(59, 53, 2, 1, 150000, 150000),
(60, 53, 3, 1, 100000, 100000),
(61, 54, 4, 1, 100000, 100000),
(62, 54, 5, 1, 100000, 100000),
(63, 55, 1, 1, 100000, 100000),
(64, 56, 7, 1, 100000, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `alamat` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama`, `email`, `password`, `no_hp`, `alamat`) VALUES
(1, 'Wahyu', 'wahyu@gmail.com', 'e0490aca8fe0cbf35265', '087878787878', 'Sidoarjo'),
(2, 'Paijo', 'paijo@gmail.com', '1adbb3178591fd5bb0c2', '08567676788', 'Jl. Mangkubumi'),
(3, 'Susilo', 'susilo@gmail.com', '1adbb3178591fd5bb0c2', '08567676789', 'Wonocolo'),
(4, 'Kevin', 'kevin@gmail.com', '1adbb3178591fd5bb0c2', '08567676790', 'Waru');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `alamat` varchar(70) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id`, `nama`, `email`, `password`, `no_hp`, `alamat`) VALUES
(1, 'Aaron', 'aaron@gmail.com', '1adbb3178591fd5bb0c248518f39bf6d', '083832061160', 'Warugunun'),
(6, 'Paijo', 'paijo@gmail.com', '1adbb3178591fd5bb0c248518f39bf6d', '089898989898', 'Jalan Ahmad Yanu');

-- --------------------------------------------------------

--
-- Table structure for table `sepeda`
--

CREATE TABLE `sepeda` (
  `id` int(11) NOT NULL,
  `type` varchar(10) DEFAULT NULL,
  `merk` varchar(15) DEFAULT NULL,
  `warna` varchar(10) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sepeda`
--

INSERT INTO `sepeda` (`id`, `type`, `merk`, `warna`, `qty`, `harga`) VALUES
(1, 'gunung', 'Polygon', 'Merah', 18, 100000),
(2, 'Fixie', 'Fixie', 'Biru', 18, 150000),
(3, 'gunung', 'Polygon', 'Biru', 18, 100000),
(4, 'gunung', 'Polygon', 'Kuning', 15, 100000),
(5, 'gunung', 'Polygon', 'Hijau', 9, 100000),
(6, 'Fixie', 'Fixie', 'Merah', 19, 100000),
(7, 'Fixie', 'Fixie', 'Hijau', 18, 100000),
(8, 'Fixie', 'Fixie', 'Kuning', 18, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id` int(11) NOT NULL,
  `tgl_sewa` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tgl_kembali` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `total_bayar` int(11) DEFAULT NULL,
  `id_pelanggan` int(11) DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL,
  `tgl_pengembalian` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id`, `tgl_sewa`, `tgl_kembali`, `total_bayar`, `id_pelanggan`, `id_petugas`, `tgl_pengembalian`) VALUES
(1, '2020-11-10 01:48:01', '2020-11-11 09:22:40', 200000, 1, 1, '0000-00-00 00:00:00'),
(39, '2020-11-30 17:00:00', '2020-12-02 17:00:00', 100000, 3, 1, '0000-00-00 00:00:00'),
(40, '2020-11-30 17:00:00', '2020-12-02 17:00:00', 100000, 4, 1, '0000-00-00 00:00:00'),
(41, '2020-11-30 17:00:00', '2020-12-02 17:00:00', 100000, 1, 1, '0000-00-00 00:00:00'),
(42, '2020-11-30 17:00:00', '2020-12-02 17:00:00', 100000, 3, 1, '0000-00-00 00:00:00'),
(43, '2020-11-30 17:00:00', '2020-12-02 17:00:00', 100000, 1, 1, '0000-00-00 00:00:00'),
(44, '2020-11-30 17:00:00', '2020-12-02 17:00:00', 100000, 2, 1, '0000-00-00 00:00:00'),
(45, '2020-11-30 17:00:00', '2020-12-02 17:00:00', 100000, 4, 1, '0000-00-00 00:00:00'),
(46, '2020-12-04 17:00:00', '2020-12-06 17:00:00', 660000, 4, 1, '0000-00-00 00:00:00'),
(47, '2020-12-04 17:00:00', '2020-12-06 17:00:00', 760000, 4, 1, '0000-00-00 00:00:00'),
(48, '2020-12-05 17:00:00', '2020-12-06 17:00:00', 200000, 1, 1, '0000-00-00 00:00:00'),
(49, '2020-12-05 17:00:00', '2020-12-06 17:00:00', 200000, 3, 1, '0000-00-00 00:00:00'),
(50, '2020-12-04 17:00:00', '2020-12-06 17:00:00', 200000, 4, 1, '0000-00-00 00:00:00'),
(51, '2020-12-24 17:00:00', '2020-12-25 17:00:00', 250000, 2, 1, '0000-00-00 00:00:00'),
(52, '2020-12-03 17:00:00', '2020-12-14 17:00:00', 200000, 2, 1, '0000-00-00 00:00:00'),
(53, '2020-12-02 17:00:00', '2020-12-05 17:00:00', 250000, 4, 1, '0000-00-00 00:00:00'),
(54, '2020-12-16 17:00:00', '2020-12-18 17:00:00', 200000, 1, 1, '0000-00-00 00:00:00'),
(55, '2020-12-03 17:00:00', '2020-12-09 17:00:00', 100000, 2, 1, '0000-00-00 00:00:00'),
(56, '2020-12-04 17:00:00', '2020-12-08 17:00:00', 100000, 2, 1, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detail_transaksi_transaksi` (`id_transaksi`),
  ADD KEY `fk_detail_transaksi_sepeda` (`id_sepeda`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sepeda`
--
ALTER TABLE `sepeda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_transaksi_pelanggan` (`id_pelanggan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `sepeda`
--
ALTER TABLE `sepeda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `fk_detail_transaksi_sepeda` FOREIGN KEY (`id_sepeda`) REFERENCES `sepeda` (`id`),
  ADD CONSTRAINT `fk_detail_transaksi_transaksi` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id`);

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `fk_transaksi_pelanggan` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id`),
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
