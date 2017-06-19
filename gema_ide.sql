-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2017 at 04:45 AM
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
-- Table structure for table `gema_ide`
--

CREATE TABLE `gema_ide` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text NOT NULL,
  `project` text NOT NULL,
  `description` text NOT NULL,
  `need` text NOT NULL,
  `contact` text NOT NULL,
  `created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gema_ide`
--

INSERT INTO `gema_ide` (`id`, `name`, `project`, `description`, `need`, `contact`, `created`) VALUES
(1, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(2, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(3, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(4, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(5, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(6, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(7, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(8, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(9, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(10, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(11, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(12, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(13, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(14, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(15, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(16, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(17, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(18, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(19, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(20, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19'),
(21, 'Santoso', 'Go Go ID', 'kdncjdcjdc cdjcbdjhbcd chdbchdbchd cdhcbhdbchdbc dchbdhcbdhbcdc cbdchbdbc', 'programmer', 'lliene eme', '2017-06-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gema_ide`
--
ALTER TABLE `gema_ide`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gema_ide`
--
ALTER TABLE `gema_ide`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
