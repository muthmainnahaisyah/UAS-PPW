-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2024 at 04:09 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citra_niaga`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `gambar`, `deskripsi`) VALUES
(1, 'Pusat Souvenir', 'images/kategori_1.jpg', 'Citra Niaga Samarinda menjadi salah satu tempat yang tepat untuk mencari souvenir khas kalimantan timur.'),
(2, 'Wadah Kuliner', 'images/kategori_2.jpg', 'Terdapat berbagai macam warung makan dan cafe yang menjual makanan, sehingga cocok untuk anda yang sedang kebingungan mencari makan.'),
(3, 'Tempat Bersantai', 'images/kategori_3.jpg', 'Citra Niaga Samarinda cocok menjadi pilihan tempat untuk berjalan santai di sore hari sambil menikmati langit sore samarinda.'),
(4, 'Spot Foto', 'images/kategori_5.jpeg', 'Terdapat banyak spot foto menarik di Citra Niaga Samarinda yang memiliki suasana serta arsitektur bangunan yang khas dan estetika yang memikat.'),
(5, 'Monumen', 'images/kategori_6.jpeg', 'Terdapat beberapa monumen yang menjadi icon di Citra Niaga Samarinda, yaitu Monumen Aga Khan dan Menara Enggang.'),
(6, 'Event & Workshop', 'images/kategori_7.jpeg', 'Citra Niaga dapat menjadi tempat untuk mengadakan event, seperti event musik dan event makanan, serta dapat menjadi wadah melakukan workshop.');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id`, `image_path`) VALUES
(1, 'images/galeri_1.jpeg'),
(2, 'images/galeri_2.jpeg'),
(3, 'images/galeri_3.jpeg'),
(4, 'images/galeri_4.jpeg'),
(5, 'images/galeri_5.jpeg'),
(6, 'images/galeri_6.jpeg'),
(7, 'images/galeri_7.jpeg'),
(8, 'images/galeri_8.jpeg'),
(9, 'images/galeri_9.jpeg'),
(10, 'images/galeri_10.jpeg'),
(11, 'images/galeri_11.jpeg'),
(12, 'images/galeri_12.jpeg'),
(13, 'images/galeri_13.jpeg'),
(14, 'images/galeri_14.jpeg'),
(15, 'images/galeri_15.jpeg'),
(16, 'images/galeri_16.jpeg'),
(17, 'images/galeri_17.jpeg'),
(18, 'images/galeri_18.jpeg'),
(19, 'images/galeri_19.jpeg'),
(20, 'images/galeri_20.jpeg'),
(21, 'images/galeri_21.jpeg'),
(22, 'images/galeri_22.jpeg'),
(23, 'images/galeri_23.jpeg'),
(24, 'images/galeri_24.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `informasi_kontak`
--

CREATE TABLE `informasi_kontak` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `informasi_kontak`
--

INSERT INTO `informasi_kontak` (`id`, `title`, `description`) VALUES
(1, 'Alamat', 'Jl. Niaga Utara, Pelabuhan, Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur.'),
(2, 'Operasional', 'Hari : Senin - Minggu <br>Jam: 09.00 - 21.30 WITA'),
(3, 'Wadah', 'Terdapat 40+ kios untuk berbelanja dan fasilitas seperti kursi untuk duduk bersantai.');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `image_path` varchar(255) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `image_path`, `title`) VALUES
(1, 'images/kategori_1.jpg', 'Wadah Souvenir'),
(2, 'images/kategori_2.jpg', 'Wadah Kuliner'),
(3, 'images/kategori_3.jpg', 'Wadah Berantai'),
(4, 'images/kategori_4.jpg', 'Wadah Berfoto');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `icon_class` varchar(100) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `icon_class`, `title`, `description`, `link`) VALUES
(1, 'bx bx-mail-send', 'Email', 'uptcitraniaga@gmail.com', 'mailto:uptcitraniaga@gmail.com'),
(2, 'bx bxl-facebook', 'Facebook', 'citra niaga samarinda', 'https://www.facebook.com/CitraNiagaSamarinda/?locale=id_ID'),
(3, 'bx bxl-instagram', 'Instagram', '@citraniagasamarinda', 'https://www.instagram.com/citraniagasamarinda?igsh=NW1nc3VtNngzamoz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi_kontak`
--
ALTER TABLE `informasi_kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `informasi_kontak`
--
ALTER TABLE `informasi_kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
