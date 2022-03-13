-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2022 at 12:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lsp`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesan`
--

CREATE TABLE `pemesan` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `tlp` int(11) NOT NULL,
  `jadwal` date NOT NULL,
  `seluruhpenumpang` int(11) NOT NULL,
  `penumpanglansia` int(11) NOT NULL,
  `bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesan`
--

INSERT INTO `pemesan` (`id`, `nama`, `harga`, `nik`, `tlp`, `jadwal`, `seluruhpenumpang`, `penumpanglansia`, `bayar`) VALUES
(1, 'muhammad hafidz', 1500000, 2147483647, 2147483647, '2022-03-09', 2, 1, 2700000),
(2, 'm arifin ilham', 1200000, 2147483647, 2147483647, '2022-06-15', 2, 2, 1920000),
(3, '', 1200000, 0, 852345452, '0000-00-00', 0, 0, 0),
(4, 'm arifin ilham', 2300000, 2147483647, 823199231, '2022-03-29', 4, 1, 8740000),
(5, 'muhammad jamal', 2300000, 97266282, 2147483647, '2022-03-30', 2, 1, 4140000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_lsp`
--

CREATE TABLE `tb_lsp` (
  `id` int(11) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_lsp`
--

INSERT INTO `tb_lsp` (`id`, `kelas`, `harga`) VALUES
(1, 'Ekonomi', 1200000),
(2, 'Bisnis', 1500000),
(3, 'Eksekutif', 2300000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `nama`, `nik`) VALUES
(1, 'hafidz', '$2y$10$XGkDF3O/QLXJoxyYFSW/hO6LlGoZ7AMpFMtGr6BS9mSqJpj9oSm2C', 'muhammad hafidz', 2147483647),
(2, 'papet', '$2y$10$ZvwnJT0BQhv.l9cukPXPMumMMHmZ7yfnn9RwNPoo5y9iSUHxt1HN.', 'muhammad jamal', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesan`
--
ALTER TABLE `pemesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_lsp`
--
ALTER TABLE `tb_lsp`
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
-- AUTO_INCREMENT for table `pemesan`
--
ALTER TABLE `pemesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_lsp`
--
ALTER TABLE `tb_lsp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
