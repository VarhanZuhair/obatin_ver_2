-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 06:47 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `databaseobatin`
--

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_obat` int(10) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `gambar_obat` varchar(255) NOT NULL,
  `bahan_aktif_obat` varchar(100) NOT NULL,
  `harga_obat` int(20) NOT NULL,
  `stok_obat` int(10) NOT NULL,
  `info_obat` text NOT NULL,
  `manfaat_obat` varchar(100) NOT NULL,
  `bentuk_obat` varchar(255) NOT NULL,
  `kategori_obat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `gambar_obat`, `bahan_aktif_obat`, `harga_obat`, `stok_obat`, `info_obat`, `manfaat_obat`, `bentuk_obat`, `kategori_obat`) VALUES
(1, 'Panadol', 'https://cdn.discordapp.com/attachments/818131624502886411/976689142689832991/unknown.png', 'Paracetamol', 6000, 20, 'Panadol adalah obat yang mengandung paracetamol. Panadol memiliki beberapa varian yang ditujukan untuk meredakan gejala dan keluhan, seperti demam, flu, sakit kepala, hidung tersumbat, batuk tidak berdahak, dan bersin-bersin. Panadol juga sering digunakan untuk meredakan sakit gigi dan nyeri otot.', 'Meredakan demam', 'Tablet', 'Obat bebas'),
(2, 'Decolgen', 'https://cdn.discordapp.com/attachments/818131624502886411/984301901841563668/unknown.png', 'Paracetamol', 3000, 15, 'Deskripsi\r\n\r\nDECOLGEN merupakan obat flu dengan kandungan Paracetamol, Phenylpropanolamine HCl, dan Chlorpheniramine maleate. Paracetamol digunakan sebagai pereda demam dan sakit kepala. Phenylpropanolamine digunakan untuk mengobati gejala hidung tersumbat. Chlorpheniramine maleate bekerja sebagai antihistamin atau anti alergi sehingga obat ini digunakan untuk meredakan gejala flu seperti sakit kepala, demam, bersin-bersin dan hidung tersumbat.\r\n', 'Meredakan gejala flu', 'Tablet', 'Obat bebas terbatas'),
(3, 'Betadine Mouth Wash', 'https://cdn.discordapp.com/attachments/818131624502886411/984305318219612200/unknown.png', 'Povidone iodine', 35000, 20, 'BETADINE OBAT KUMUR 190 ML mengandung zat aktif Povidone iodine, obat kumur ini digunakan untuk mengatasi masalah mulut seperti sakit tenggorokan, gusi bengkak, sariawan, bau mulut dan napas tidak segar.\r\n', 'Obat kumur antiseptik untuk rongga mulut', 'Sirup', 'Obat Bebas Terbatas');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_users` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_users`, `first_name`, `last_name`, `phone_number`, `username`, `email`, `password`) VALUES
(1, 'Farhan', 'Zuhair', '08886108158', 'varhan', 'farhanzuhair040703@gmail.com', '$2y$10$h6OYWUHGXttufAk6jOjB5.vewe.dmJT6uB1X2RwVlIg5vck3M00A2'),
(2, 'Fahmi', 'Ramadhan', '08886108158', 'codename_mfr', 'aaaaa@aaa.com', '$2y$10$9P2Iq/YRGtmVl.o3gXNzv.YhRdSdsY1L6n2eU5i.6feampCBWpUE.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
