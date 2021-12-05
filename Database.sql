-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2021 at 02:33 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_satuan`
--

CREATE TABLE `pesanan_satuan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_msk` varchar(255) NOT NULL,
  `tgl_kel` varchar(255) NOT NULL,
  `bvr_1` int(11) NOT NULL,
  `bvr_2` int(11) NOT NULL,
  `pb` int(11) NOT NULL,
  `pj` int(11) NOT NULL,
  `Status` varchar(255) NOT NULL DEFAULT 'Belum Dikirim'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan_satuan`
--

INSERT INTO `pesanan_satuan` (`id`, `nama`, `tgl_msk`, `tgl_kel`, `bvr_1`, `bvr_2`, `pb`, `pj`, `Status`) VALUES
(1, 'andika', '04.12.2021', '06.12.2021', 0, 1, 0, 0, 'Belum Dikirim'),
(2, 'hasan', '04.12.2021', '06.12.2021', 4, 3, 2, 1, 'Belum Dikirim'),
(6, 'hasan', '04.12.2021', '06.12.2021', 4, 2, 1, 3, 'Belum Dikirim');

-- --------------------------------------------------------

--
-- Table structure for table `pes_kilo`
--

CREATE TABLE `pes_kilo` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kilo` varchar(255) NOT NULL,
  `tgl_masuk` varchar(255) NOT NULL,
  `tgl_mbil` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Belum Dikirim'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pes_kilo`
--

INSERT INTO `pes_kilo` (`id`, `nama`, `kilo`, `tgl_masuk`, `tgl_mbil`, `status`) VALUES
(1, 'andika', '3', '03.12.2021', '05.12.2021', 'Belum Dikirim'),
(3, 'hasan', '4', '04.12.2021', '06.12.2021', 'Belum Dikirim'),
(7, 'andika', '10', '04.12.2021', '06.12.2021', 'Belum Dikirim'),
(8, 'asep', '6', '04.12.2021', '06.12.2021', 'Dikirim');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `pass`) VALUES
('', ''),
('andika', 'andika'),
('hasan', 'hasan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pesanan_satuan`
--
ALTER TABLE `pesanan_satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pes_kilo`
--
ALTER TABLE `pes_kilo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesanan_satuan`
--
ALTER TABLE `pesanan_satuan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pes_kilo`
--
ALTER TABLE `pes_kilo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
