-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2017 at 04:44 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tk_link`
--

-- --------------------------------------------------------

--
-- Table structure for table `gema_category`
--

CREATE TABLE `gema_category` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `category` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gema_category`
--

INSERT INTO `gema_category` (`id`, `category`) VALUES
(0, 'Pemrograman'),
(1, 'Pengembangan Aplikasi Permainan'),
(2, 'Pengembangan Perangkat Lunak'),
(3, 'Data Mining'),
(4, 'Keamanan Jaringan'),
(5, 'Animasi'),
(6, 'Piranti Cerdas'),
(7, 'Desain UI/UX'),
(8, 'Pengembangan Bisnis TIK'),
(9, 'E-Government');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gema_category`
--
ALTER TABLE `gema_category`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
