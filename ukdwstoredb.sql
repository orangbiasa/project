-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2018 at 10:10 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.1.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukdwstoredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `username` varchar(50) NOT NULL,
  `kunci` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `aturan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`username`, `kunci`, `nama`, `email`, `telp`, `aturan`) VALUES
('edward_otniel', 'c645d043789083305893b19700df6cf0', 'Otniel Edward M G', 'edwardotniel27@gmail.com', '081372367584', 'member'),
('eyen14', '71e469f7e67d9e5e7cdf668a46968145', 'eyengeltisa', 'verren@gmail.com', '1111111', 'pelanggan'),
('veren', 'f3d2848006757e7e735e66512add85cf', 'Verren Geltisa', 'verren@gmail.com', '123456789', 'pelanggan'),
('veren14', '71af2136d7e46224e0d31e05e6e76f79', 'Verren Geltisa', 'verren@gmail.com', '081269859845', 'pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `produkID` int(11) NOT NULL,
  `namaProduk` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `hargaBeli` bigint(11) NOT NULL DEFAULT '0',
  `hargaJual` bigint(20) NOT NULL DEFAULT '0',
  `jumlah` int(20) NOT NULL DEFAULT '0',
  `gambar` varchar(100) NOT NULL,
  `tanggal` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`produkID`, `namaProduk`, `deskripsi`, `hargaBeli`, `hargaJual`, `jumlah`, `gambar`, `tanggal`) VALUES
(1, 'iMac ', 'Laptop Apple dengan spesifikasi yang sangat bagus', 10000000, 17000000, 500, '5ae6c92a925c6foto1.jpg', '2018-04-30 14:43:38'),
(2, 'Laptop ROG (Republic Of Gamers)', 'Laptop dengan spesifikasi tinggi cocok untuk bermain game', 18000000, 25000000, 500, '5ae6c9981f1c6foto4.jpg', '2018-04-30 14:45:28'),
(3, 'Komputer ROG', 'Komputer yang memiliki spesifikasi tinggi yang cocok untuk game berat', 20000000, 25000000, 500, '5ae6c9d615421foto3.jpg', '2018-04-30 14:46:30'),
(4, 'Laptop MSI ', 'Laptop yang tidak kalah saing dengan laptop gamers lain', 18000000, 23000000, 500, '5ae6ca04e43c4foto5.jpg', '2018-04-30 14:47:16'),
(5, 'Iphone X', 'Iphone tipe terbaru yang memiliki banyak fitur', 15000000, 21000000, 1000, '5ae6ca3faa696foto2.jpg', '2018-04-30 14:48:15'),
(6, 'Cheese Cream Thai Tea', 'ada', 18000, 28000, 100, '5ae6ce383734dfoto6.JPG', '2018-04-30 15:05:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produkID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `produkID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
