-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 05:46 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `housetesterteam`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(7) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `bulan` varchar(20) NOT NULL,
  `tahun` int(5) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `alamat_dua` varchar(255) NOT NULL,
  `password` varchar(20) NOT NULL,
  `regis_time` varchar(25) NOT NULL,
  `kel` varchar(50) NOT NULL,
  `kec` varchar(50) NOT NULL,
  `kab` varchar(50) NOT NULL,
  `prov` varchar(50) NOT NULL,
  `kodepos` varchar(8) NOT NULL,
  `jum_orang` varchar(50) NOT NULL,
  `anak` varchar(50) NOT NULL,
  `gaji` varchar(50) NOT NULL,
  `belanja` varchar(25) NOT NULL,
  `tahun_anak` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `firstname`, `lastname`, `jk`, `email`, `bulan`, `tahun`, `hp`, `alamat`, `alamat_dua`, `password`, `regis_time`, `kel`, `kec`, `kab`, `prov`, `kodepos`, `jum_orang`, `anak`, `gaji`, `belanja`, `tahun_anak`) VALUES
(1, 'bela', '', '', 'bela@web.com', '0', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0),
(7, 'bela', 'daa', 'm', 'belaa210401@gmail.com', '5', 1952, '', '', '', 'gais', '2019-04-23', '', '', '', '', '', '', '', '', '', 0),
(8, 'Beladina', 'Elfitri', 'Laki - laki', 'elvizakim21@gmail.com', 'Agustus', 1946, '82282794738', 'Wisma Kartika 1 Kamar 15 Gang PGA Rt04/02 No 111 Desa Lengkong', 'aka', 'wer', '2019-04-23', 'kel', 'kec', 'kab', 'JB', '32890', 'D', 'l', 'D', 'D', 2016);

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(5) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `banyak_review` int(5) NOT NULL,
  `jum_star` float NOT NULL,
  `id_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id_review` int(5) NOT NULL,
  `star` int(3) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `bulan_beli` varchar(20) NOT NULL,
  `tahun_beli` int(5) NOT NULL,
  `judul` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id_review`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id_review` int(5) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
