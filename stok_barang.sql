-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2024 at 08:38 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stok_barang`
--

-- --------------------------------------------------------

--
-- Table structure for table `as_standar`
--

CREATE TABLE `as_standar` (
  `id` int(11) NOT NULL,
  `nama_barang_as` varchar(255) NOT NULL,
  `total_belum_dibuat_as` int(11) NOT NULL DEFAULT 0,
  `total_sudah_dibuat_as` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `as_standar`
--

INSERT INTO `as_standar` (`id`, `nama_barang_as`, `total_belum_dibuat_as`, `total_sudah_dibuat_as`) VALUES
(1, 'as vario kzr', 16, 10);

-- --------------------------------------------------------

--
-- Table structure for table `lampu_sein`
--

CREATE TABLE `lampu_sein` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `total_belum_dibuat` int(11) NOT NULL DEFAULT 0,
  `total_full_hitam` int(11) NOT NULL DEFAULT 0,
  `total_hitam_oren` int(11) NOT NULL DEFAULT 0,
  `keuntungan_per_barang` decimal(10,2) NOT NULL DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lampu_sein`
--

INSERT INTO `lampu_sein` (`id`, `nama_barang`, `total_belum_dibuat`, `total_full_hitam`, `total_hitam_oren`, `keuntungan_per_barang`) VALUES
(8, 'Vario Kzr Win', 20, 5, 2, '20.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `as_standar`
--
ALTER TABLE `as_standar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lampu_sein`
--
ALTER TABLE `lampu_sein`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `as_standar`
--
ALTER TABLE `as_standar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lampu_sein`
--
ALTER TABLE `lampu_sein`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
