-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 11:17 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopp`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang_stk`
--

CREATE TABLE `barang_stk` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `jenis_barang` varchar(255) NOT NULL,
  `foto_barang` varchar(255) NOT NULL,
  `uk_barang` varchar(255) NOT NULL,
  `desk_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_stk`
--

INSERT INTO `barang_stk` (`id`, `nama_barang`, `jenis_barang`, `foto_barang`, `uk_barang`, `desk_barang`) VALUES
(1, 'test', 'test', 'test.jpg', 'XL', 'test'),
(2, 'asjas', 'asiais', 'aisjias', 'ijasiaj', 'ijasij'),
(3, 'asas', 'asas', 'WIN_20181009_15_37_25_Pro.jpg', 'asas', 'asas'),
(4, '', '', 'WIN_20181009_15_37_26_Pro.jpg', '', ''),
(5, '', '', 'WIN_20181009_15_37_34_Pro.jpg', '', ''),
(7, 'asasas', '121212', ' ', 'qwqw', 'qwqwqw'),
(8, 'iwjeiwje', 'iqwejiqwjeiwqe', ' ', 'qwqw', 'qwqwqw'),
(9, 'asasas', 'asasa', ' ', 'asasa', 'asasas'),
(14, 'jojojojojojoojj', 'ojojojoj', ' ', 'kmmml', 'mlm'),
(16, '', '', ' ', '', ''),
(17, '', '', ' ', '', ''),
(18, 'joqjwoqjwowq', 'qiwjoqjwoqjwo', '', 'asas', 'e2w1`'),
(19, 'qadwws', 'qzwsq', '', 'lmlm', 'mlm'),
(20, '', '', '', '', ''),
(21, 'salsla,dlamd', 'ad,;a,d', '', 'sapspas', 'adkpadp'),
(22, '', '', ' ', '', ''),
(23, '', '', ' ', '', ''),
(24, 'kpkpkwd', 'dwodowd', ' ', 'msa', '221');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `id` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`id`, `nama`) VALUES
(1, 'STO Muntilan'),
(2, 'STO Mertoyudan');

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `id` int(10) NOT NULL,
  `id_provinsi` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`id`, `id_provinsi`, `nama`) VALUES
(1, 0, 'Sawitan'),
(2, 0, 'Muntilan'),
(3, 0, 'Mertoyudan'),
(4, 0, 'Magelang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang_stk`
--
ALTER TABLE `barang_stk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang_stk`
--
ALTER TABLE `barang_stk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `wilayah`
--
ALTER TABLE `wilayah`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
