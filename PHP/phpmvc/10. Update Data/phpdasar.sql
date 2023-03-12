-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2023 at 05:05 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `nim` char(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nim`, `nama`, `jurusan`, `email`, `gambar`) VALUES
(1, '20211010014', 'Alvin Gunawan', 'Teknik Informatika', 'iniemailalvin@gmail.com', 'vin.jpg'),
(2, '20211010015', 'Luna Evenfield', 'Teknik Industri', 'iniemailluna@gmail.com', 'luna.jpg'),
(3, '20211010016', 'Sora Evenfield', 'Teknik Otomasi', 'iniemailsora@gmail.com', 'sora.jpg'),
(4, '20221010021', 'Kuntara Evenfield', 'Pelayaran', 'iniemailkuntara@gmail.com', '64003af3c8a21.jpg'),
(5, '20221010022', 'Yuyuri evenfield', 'Teknik Pangan', 'iniemailyuyuri@gmail.com', 'yuyuri.jpg'),
(12, '20201052043', 'Yunagis Evenfield', 'Administrasi Perkantorans', 'iniemailyunagis@gmail.com', '6401f3eb6fb52.jpg'),
(14, '20211010077', 'Reinsya Syaru', 'Teknik Medis', 'iniemailrensya@gmail.com', '64003838b380f.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'alvin', '$2y$10$7HNd.2WG/bUL9z6tqSBlW.cMHbZyka7DhqB9pHtqXUedFJj1ghD1a'),
(2, 'alvin2', '$2y$10$co2UkZumRiejTccxB7FV..sFb0sbBdvlBdJ6ujTw.R3JlamjmeIQS'),
(3, 'admin', '$2y$10$BpiOh0anxScDPWhUx6S0YuXpieg1.X60yczaHyJmkSlP5aJ9VD1K.'),
(4, 'alvin123', '$2y$10$syEQyGBMnhGqICFip3RmB.H3AR/a/ya02n1yflm36kOeWyGbCsq5e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
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
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
