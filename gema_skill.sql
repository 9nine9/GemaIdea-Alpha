-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2017 at 04:47 AM
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
-- Table structure for table `gema_skill`
--

CREATE TABLE `gema_skill` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `category` text NOT NULL,
  `skill` text NOT NULL,
  `departement` text NOT NULL,
  `batch` smallint(5) UNSIGNED NOT NULL,
  `contact` text NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gema_skill`
--

INSERT INTO `gema_skill` (`id`, `name`, `category`, `skill`, `departement`, `batch`, `contact`, `created`) VALUES
(1, 'Santoso', '1,2,3,4,5,6', 'memikat wanita memikat wanita memikat wanita memikat wanitamemikat wanita memikat wanita', 'Teknik Komputer', 2015, 'Call me in LINE sembilan9', '2017-06-19'),
(2, 'Santoso', '1,2,3,4,5,6', 'memikat wanita', 'Teknik Komputer', 2015, 'Call me in LINE sembilan9', '2017-06-18'),
(3, 'Santoso', '1,2,3,4,5,6', 'memikat wanita', 'Teknik Komputer', 2015, 'Call me in LINE sembilan9', '2017-06-19'),
(4, 'Santoso', '1,2,3,4,5,6', 'memikat wanita', 'Teknik Komputer', 2015, 'Call me in LINE sembilan9', '2017-06-19'),
(5, 'Santoso', '1,2,3,4,5,6', 'memikat wanita', 'Teknik Komputer', 2015, 'Call me in LINE sembilan9', '2017-06-18'),
(6, 'Santoso', '1,2,3,4,5,6', 'memikat wanita', 'Teknik Komputer', 2015, 'Call me in LINE sembilan9', '2017-06-19'),
(7, 'Santoso', '1,2,3,4,5,6', 'memikat wanita', 'Teknik Komputer', 2015, 'Call me in LINE sembilan9', '2017-06-19'),
(8, 'Santoso', '1,2,3,4,5,6', 'memikat wanita', 'Teknik Komputer', 2015, 'Call me in LINE sembilan9', '2017-06-18'),
(9, 'Santoso', '1,2,3,4,5,6', 'memikat wanita', 'Teknik Komputer', 2015, 'Call me in LINE sembilan9', '2017-06-19'),
(10, 'Santoso', '1,2,3,4,5,6', 'memikat wanita', 'Teknik Komputer', 2015, 'Call me in LINE sembilan9', '2017-06-19'),
(11, 'Santoso', '1,2,3,4,5,6', 'memikat wanita', 'Teknik Komputer', 2015, 'Call me in LINE sembilan9', '2017-06-18'),
(12, 'Santoso', '1,2,3,4,5,6', 'memikat wanita', 'Teknik Komputer', 2015, 'Call me in LINE sembilan9', '2017-06-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gema_skill`
--
ALTER TABLE `gema_skill`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gema_skill`
--
ALTER TABLE `gema_skill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
