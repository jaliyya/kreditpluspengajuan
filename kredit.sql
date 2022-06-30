-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2022 at 09:07 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kredit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(2, 'akun', '3d342d6e0c524dd57f1728a053eedff3');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(25) NOT NULL,
  `nama_produk` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `stok` int(10) NOT NULL,
  `kode_barang` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_produk`, `harga`, `kategori`, `stok`, `kode_barang`) VALUES
(3, 'Iphone 13 Pro', '14000000', 'HP', 98, 'IP130002');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama`) VALUES
(17, 'HP'),
(18, 'Laptop'),
(19, 'Kamera'),
(20, 'Sepatu'),
(21, 'Jam'),
(22, 'Elektronik Lainya');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

CREATE TABLE `upload` (
  `id_upload` int(3) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `tgl_upload` date NOT NULL,
  `hits` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `phone`) VALUES
(4, 'user', 'user@user.com', 'ee11cbb19052e40b07aac0ca060c23ee', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi`
--

CREATE TABLE `verifikasi` (
  `id` int(25) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nama_produk` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `metode` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `jenis` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `kode_barang` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verifikasi`
--

INSERT INTO `verifikasi` (`id`, `nama`, `nama_produk`, `status`, `metode`, `waktu`, `jenis`, `qty`, `kode_barang`) VALUES
(4, 'user', 'Iphone 13 Pro', 'Menunggu Persetujuan', 'Credit', '1 Tahun', 'CC', 1, 'IP130002');

--
-- Triggers `verifikasi`
--
DELIMITER $$
CREATE TRIGGER `tg_verif` AFTER INSERT ON `verifikasi` FOR EACH ROW BEGIN
UPDATE barang SET stok=stok-NEW.qty WHERE kode_barang=NEW.kode_barang;
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_produk` (`nama_produk`),
  ADD KEY `kategori` (`kategori`),
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `harga` (`harga`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `upload`
--
ALTER TABLE `upload`
  ADD PRIMARY KEY (`id_upload`),
  ADD KEY `hits` (`hits`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_produk` (`nama_produk`),
  ADD KEY `kode_barang` (`kode_barang`),
  ADD KEY `nama` (`nama`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `upload`
--
ALTER TABLE `upload`
  MODIFY `id_upload` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `verifikasi`
--
ALTER TABLE `verifikasi`
  MODIFY `id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD CONSTRAINT `verifikasi_ibfk_1` FOREIGN KEY (`nama`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `verifikasi_ibfk_2` FOREIGN KEY (`nama_produk`) REFERENCES `barang` (`nama_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `verifikasi_ibfk_3` FOREIGN KEY (`kode_barang`) REFERENCES `barang` (`kode_barang`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
