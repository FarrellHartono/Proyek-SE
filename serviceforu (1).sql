-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2023 at 12:26 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serviceforu`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `usernamecustomer` varchar(30) NOT NULL,
  `passwordcustomer` varchar(255) DEFAULT NULL,
  `nomorteleponcustomer` varchar(30) DEFAULT NULL,
  `waktulogin` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`usernamecustomer`, `passwordcustomer`, `nomorteleponcustomer`, `waktulogin`) VALUES
('farrell', '056f32ee5cf49404607e368bd8d3f2af', '08117710218', '2023-07-02 16:45:04'),
('keiko', '056f32ee5cf49404607e368bd8d3f2af', '081227552017', '2023-06-28 01:48:21'),
('tereeeteret', '503359c58a3e0b7986f2affe63553e29', '085810495386', '2023-05-27 08:37:29');

-- --------------------------------------------------------

--
-- Table structure for table `sejarahpemesanan`
--

CREATE TABLE `sejarahpemesanan` (
  `transactionid` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `deskripsi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sejarahpemesanan`
--

INSERT INTO `sejarahpemesanan` (`transactionid`, `tanggal`, `waktu`, `deskripsi`) VALUES
('461626-farrell', '0000-00-00', '00:00:00', 'ganti kipas baru'),
('530138-farrell', '2023-06-28', '01:55:00', 'Pesanan Diterima'),
('561423-farrell', '0000-00-00', '00:00:00', 'Ganti kipas baru'),
('561423-farrell', '2023-07-02', '15:18:00', 'Oke');

-- --------------------------------------------------------

--
-- Table structure for table `tesgambar`
--

CREATE TABLE `tesgambar` (
  `gambarrrr` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tesgambar`
--

INSERT INTO `tesgambar` (`gambarrrr`) VALUES
('IMG_5444-modified.png'),
('1483473.jpg'),
('');

-- --------------------------------------------------------

--
-- Table structure for table `toko`
--

CREATE TABLE `toko` (
  `usernametoko` varchar(30) NOT NULL,
  `passwordtoko` varchar(255) DEFAULT NULL,
  `nomortelepontoko` varchar(30) DEFAULT NULL,
  `namatoko` varchar(50) DEFAULT NULL,
  `alamattoko` varchar(255) DEFAULT NULL,
  `layanantoko` varchar(30) DEFAULT NULL,
  `deksripsitoko` varchar(255) DEFAULT NULL,
  `jamoperasitoko` varchar(50) DEFAULT NULL,
  `waktulogin` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `toko`
--

INSERT INTO `toko` (`usernametoko`, `passwordtoko`, `nomortelepontoko`, `namatoko`, `alamattoko`, `layanantoko`, `deksripsitoko`, `jamoperasitoko`, `waktulogin`) VALUES
('cccomputer', '458c50d89389acaf20075a39829b1a87', '080987612345', 'CC Computer', 'Supermall Karawaci Lt 3 No 13, Karawaci, Kota Tangerang', 'PC, Laptop', 'deskripsi3', 'Senin - Minggu 10:00 - 22:00', '2023-06-28 02:11:28'),
('superkomputer', '0418d71c84044a2ee1d5e4ac31cc9fea', '080987654321', 'Super Komputer', 'ITC Mangga Dua Lt 4 No 17, Mangga Dua, Jakarta Pusat', 'PC, Laptop', 'deskripsi2', 'Senin - Minggu 09:00 - 22:00', '2023-06-28 02:11:20'),
('tokoabc', '8623ea397ef90b7b1f78fab9aee428e0', '081234567890', 'Toko ABC', 'Supermall Karawaci Lt3 No 11, Karawaci, Kota Tangerang', 'PC, Laptop', 'Terima servis PC dan Laptop', 'Senin - Minggu 08:00 - 22:00', '2023-07-02 16:45:11');

-- --------------------------------------------------------

--
-- Table structure for table `transactionheader`
--

CREATE TABLE `transactionheader` (
  `transactionid` varchar(50) NOT NULL,
  `usernamecustomer` varchar(30) DEFAULT NULL,
  `usernametoko` varchar(30) DEFAULT NULL,
  `jenisperangkat` varchar(30) DEFAULT NULL,
  `merkperangkat` varchar(30) DEFAULT NULL,
  `seriperangkat` varchar(70) DEFAULT NULL,
  `deskripsimasalah` varchar(255) DEFAULT NULL,
  `tanggalbooking` date DEFAULT NULL,
  `waktubooking` time NOT NULL,
  `statuspesanan` varchar(50) DEFAULT NULL,
  `hargajasaadmin` int(11) DEFAULT NULL,
  `biaya` int(11) DEFAULT NULL,
  `gambarkondisi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactionheader`
--

INSERT INTO `transactionheader` (`transactionid`, `usernamecustomer`, `usernametoko`, `jenisperangkat`, `merkperangkat`, `seriperangkat`, `deskripsimasalah`, `tanggalbooking`, `waktubooking`, `statuspesanan`, `hargajasaadmin`, `biaya`, `gambarkondisi`) VALUES
('032129-keiko', 'keiko', 'tokoabc', 'Laptop', 'Acer', 'ACER Nitro', 'blur jika buka kamera', '2023-05-27', '22:03:00', 'Menunggu Konfirmasi', 20000, 20000, '61cdd0106b346.jpg'),
('121920-keiko', 'keiko', 'superkomputer', 'Laptop', 'Asus', 'TUF GIMANG', 'kena air', '2023-05-27', '20:15:00', 'Menunggu Konfirmasi', 0, 0, 'IMG_5444-modified.png'),
('461626-farrell', 'farrell', 'tokoabc', 'Laptop', 'Asus', 'ASUS ROG ', 'Kipas berisik', '2023-07-02', '16:47:00', 'Pesanan Selesai', 50000, 350000, '20200824120842.jpg'),
('530138-farrell', 'farrell', 'tokoabc', 'Laptop', 'Lainnya', 'Macbook Pro', 'Terkena air', '2023-06-28', '10:00:00', 'Pesanan Diterima', 50000, 300000, 'mbp-spacegray-select-202206.jpeg'),
('561423-farrell', 'farrell', 'tokoabc', 'Laptop', 'Asus', 'ASUS TUF', 'Kipas berisik', '2023-07-02', '14:56:00', 'Pesanan Selesai', 100000, 350000, 'download (2).jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `ulasanid` varchar(50) NOT NULL,
  `transactionid` varchar(50) DEFAULT NULL,
  `deskripsiulasan` varchar(255) DEFAULT NULL,
  `nilaiulasan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`ulasanid`, `transactionid`, `deskripsiulasan`, `nilaiulasan`) VALUES
('252115-121920-keiko', '121920-keiko', 'Produknya berkualitas, harga terjangkau\r\n', 4),
('301642-561423-farrell', '561423-farrell', 'pelayanan oke dan sesuai', 5),
('481616-461626-farrell', '461626-farrell', 'pelayanan ramah, cepat, dan sesua permintaan', 5),
('560129-530138-farrell', '530138-farrell', 'Pelayanannya cepat dan responsif', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`usernamecustomer`);

--
-- Indexes for table `sejarahpemesanan`
--
ALTER TABLE `sejarahpemesanan`
  ADD PRIMARY KEY (`transactionid`,`tanggal`,`waktu`);

--
-- Indexes for table `toko`
--
ALTER TABLE `toko`
  ADD PRIMARY KEY (`usernametoko`);

--
-- Indexes for table `transactionheader`
--
ALTER TABLE `transactionheader`
  ADD PRIMARY KEY (`transactionid`),
  ADD KEY `usernamecustomer` (`usernamecustomer`),
  ADD KEY `usernametoko` (`usernametoko`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`ulasanid`),
  ADD KEY `transactionid` (`transactionid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sejarahpemesanan`
--
ALTER TABLE `sejarahpemesanan`
  ADD CONSTRAINT `sejarahpemesanan_ibfk_1` FOREIGN KEY (`transactionid`) REFERENCES `transactionheader` (`transactionid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transactionheader`
--
ALTER TABLE `transactionheader`
  ADD CONSTRAINT `transactionheader_ibfk_1` FOREIGN KEY (`usernamecustomer`) REFERENCES `customer` (`usernamecustomer`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transactionheader_ibfk_2` FOREIGN KEY (`usernametoko`) REFERENCES `toko` (`usernametoko`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `ulasan_ibfk_1` FOREIGN KEY (`transactionid`) REFERENCES `transactionheader` (`transactionid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
