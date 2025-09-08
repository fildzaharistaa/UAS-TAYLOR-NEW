-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 18, 2024 at 03:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `UASWebprog`
--

-- --------------------------------------------------------

--
-- Table structure for table `editprofile`
--

CREATE TABLE `editprofile` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `realname` varchar(100) NOT NULL,
  `place` varchar(100) DEFAULT NULL,
  `mother` varchar(100) DEFAULT NULL,
  `father` varchar(100) DEFAULT NULL,
  `profesi` varchar(100) DEFAULT NULL,
  `siblings` varchar(100) DEFAULT NULL,
  `height` int(11) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `youtube` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `editprofile`
--

INSERT INTO `editprofile` (`id`, `name`, `realname`, `place`, `mother`, `father`, `profesi`, `siblings`, `height`, `instagram`, `twitter`, `youtube`) VALUES
(1, 'Taylor Swift', 'Taylorr Allison Swiftf', 'Pennsilvania, 13 December 1989', 'Andrea Gardner', 'Scott Kingsley', 'Singer', 'Austin Swift', 180, '@taylorswift', '@taylorswift13', 'Taylor Swift Official');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Comments` text NOT NULL,
  `Stars` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id`, `Name`, `Comments`, `Stars`, `created_at`) VALUES
(1, 'Felita Tiara', 'bgus bang taylor ak suka!', 'Bintang 5', '2024-06-13 14:28:20'),
(2, 'Ghania Syakira', 'ngefans banget sm kakak love', 'Bintang 5', '2024-06-13 14:28:34'),
(3, 'Fildzah Arista', 'Mommy taylorku, konser di cibubur please', 'Bintang 5', '2024-06-13 14:29:26'),
(5, 'Anggun Febrianti', 'saya bingung mau komen apalagi, my role model!!!!', 'Bintang 5', '2024-06-13 14:36:01'),
(9, 'Fiorenza Galuh', '\r\n             halo saya galuh                   ', 'Bintang 4', '2024-06-18 06:25:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `editprofile`
--
ALTER TABLE `editprofile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `editprofile`
--
ALTER TABLE `editprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
