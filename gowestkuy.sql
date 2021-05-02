-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 03:25 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gowestkuy`
--

-- --------------------------------------------------------

--
-- Table structure for table `back`
--

CREATE TABLE `back` (
  `id` int(11) NOT NULL,
  `sewa_id` int(11) NOT NULL,
  `trxno` varchar(20) NOT NULL,
  `tgl_kembali` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `backdays` int(11) NOT NULL,
  `total_denda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `back`
--

INSERT INTO `back` (`id`, `sewa_id`, `trxno`, `tgl_kembali`, `backdays`, `total_denda`) VALUES
(1, 1, 'BACK/2100415/001', '2021-04-11 16:35:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `backd`
--

CREATE TABLE `backd` (
  `idx` int(11) NOT NULL,
  `back_id` int(11) NOT NULL,
  `sepeda_id` int(11) NOT NULL,
  `subdenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `backd`
--

INSERT INTO `backd` (`idx`, `back_id`, `sepeda_id`, `subdenda`) VALUES
(1, 1, 38, 0),
(2, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `merk`
--

CREATE TABLE `merk` (
  `id` int(11) NOT NULL,
  `nama` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `merk`
--

INSERT INTO `merk` (`id`, `nama`) VALUES
(1, 'Fixie'),
(2, 'Polygon');

-- --------------------------------------------------------

--
-- Table structure for table `sepeda`
--

CREATE TABLE `sepeda` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `type_id` int(11) NOT NULL,
  `merk_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sepeda`
--

INSERT INTO `sepeda` (`id`, `nama`, `type_id`, `merk_id`, `qty`, `harga`) VALUES
(1, 'Fixie', 1, 1, 4, 100000),
(2, 'Monarc', 2, 2, 5, 100000),
(3, 'Monarc 2', 2, 2, 5, 100000),
(4, 'Monarc 3', 2, 2, 5, 100000),
(5, 'Monarc 3', 1, 1, 5, 100000),
(6, 'Monarc 4', 1, 1, 5, 100000),
(7, 'Monarc 4', 2, 2, 5, 100000),
(8, 'Monarc 5', 2, 1, 5, 100000),
(9, 'Morach 6', 1, 1, 5, 100000),
(10, 'Morach 7', 1, 1, 5, 100000),
(11, 'Morach 9', 1, 1, 5, 100000),
(12, 'Morach 9', 1, 1, 5, 100000),
(13, 'Morach 11', 1, 1, 5, 100000),
(14, 'Morach 12', 1, 1, 5, 100000),
(16, 'Monarc 16', 1, 2, 5, 100000),
(17, 'sembarang', 1, 2, 5, 100000),
(18, 'sembarang 1', 1, 2, 5, 100000),
(22, 'sembarang 5', 2, 2, 5, 100000),
(23, 'sembarang 5', 2, 2, 5, 100000),
(25, 'sembarang 5', 2, 2, 5, 100000),
(26, 'test 1', 1, 2, 5, 100000),
(27, 'test 1', 1, 2, 5, 100000),
(29, 'test 2', 1, 2, 5, 100000),
(30, 'test 10', 1, 2, 5, 100000),
(31, 'test 10', 1, 2, 5, 100000),
(32, 'test 11', 1, 2, 5, 100000),
(33, 'test 12', 2, 2, 5, 100000),
(34, 'test 13', 2, 2, 5, 100000),
(35, 'test 14', 2, 2, 5, 100000),
(38, 'Espada', 1, 2, 4, 152000);

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id` int(11) NOT NULL,
  `trxno` varchar(20) NOT NULL,
  `tgl_sewa` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `duedays` int(11) NOT NULL,
  `pelanggan` varchar(20) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `isback` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id`, `trxno`, `tgl_sewa`, `duedays`, `pelanggan`, `nohp`, `alamat`, `total`, `isback`) VALUES
(1, 'SEWA/2100407/001', '2021-04-11 18:16:30', 3, 'Aldi Taher', '083832061160', 'Jalan Sableng', 200000, 1),
(7, 'SEWA/2100407/002', '2021-04-11 18:51:40', 3, 'Budi', '0889798789', 'Jl. Sana Sini', 200000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sewad`
--

CREATE TABLE `sewad` (
  `idx` int(11) NOT NULL,
  `sewa_id` int(11) NOT NULL,
  `sepeda_id` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sewad`
--

INSERT INTO `sewad` (`idx`, `sewa_id`, `sepeda_id`, `subtotal`) VALUES
(1, 1, 38, 100000),
(2, 1, 1, 100000),
(1, 7, 5, 100000),
(1, 7, 6, 100000);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(11) NOT NULL,
  `nama` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `nama`) VALUES
(1, 'Fixie'),
(2, 'Gunung');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `alamat` varchar(150) NOT NULL,
  `nohp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `alamat`, `nohp`) VALUES
(1, 'petugas', 'petugas', '81dc9bdb52d04dc20036dbd8313ed055', 'Mburi Omah', '082266425562'),
(2, 'Fairizal Aaron', 'aaron', '39bb37cf36d3b29a9280d8a70a0eed42', 'Warugunung', '083832061160');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `back`
--
ALTER TABLE `back`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sewa_id` (`sewa_id`);

--
-- Indexes for table `backd`
--
ALTER TABLE `backd`
  ADD KEY `back_id` (`back_id`),
  ADD KEY `sepeda_id` (`sepeda_id`);

--
-- Indexes for table `merk`
--
ALTER TABLE `merk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sepeda`
--
ALTER TABLE `sepeda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `merk_id` (`merk_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sewad`
--
ALTER TABLE `sewad`
  ADD KEY `sepeda_id` (`sepeda_id`),
  ADD KEY `sewa_id` (`sewa_id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `back`
--
ALTER TABLE `back`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `merk`
--
ALTER TABLE `merk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sepeda`
--
ALTER TABLE `sepeda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `back`
--
ALTER TABLE `back`
  ADD CONSTRAINT `back_ibfk_1` FOREIGN KEY (`sewa_id`) REFERENCES `sewa` (`id`);

--
-- Constraints for table `backd`
--
ALTER TABLE `backd`
  ADD CONSTRAINT `backd_ibfk_1` FOREIGN KEY (`back_id`) REFERENCES `back` (`id`),
  ADD CONSTRAINT `backd_ibfk_2` FOREIGN KEY (`sepeda_id`) REFERENCES `sepeda` (`id`);

--
-- Constraints for table `sepeda`
--
ALTER TABLE `sepeda`
  ADD CONSTRAINT `sepeda_ibfk_1` FOREIGN KEY (`merk_id`) REFERENCES `merk` (`id`),
  ADD CONSTRAINT `sepeda_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `type` (`id`);

--
-- Constraints for table `sewad`
--
ALTER TABLE `sewad`
  ADD CONSTRAINT `sewad_ibfk_1` FOREIGN KEY (`sepeda_id`) REFERENCES `sepeda` (`id`),
  ADD CONSTRAINT `sewad_ibfk_2` FOREIGN KEY (`sewa_id`) REFERENCES `sewa` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
