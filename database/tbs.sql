-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2019 at 01:59 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id_daftar` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(20) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id_daftar`, `nama`, `username`, `email`, `password`, `status`) VALUES
(1, 'Rivaldo Ludovicus Sembiring', 'CucuFiraun', 'ravenclawgrifindor@yahoo.com', 'd93591bdf7860e1e4ee2', 1),
(2, 'Telkom Dormitory', 'CucuFiraun', 'ravenclawgrifindor@yahoo.com', 'd93591bdf7860e1e4ee2', 1),
(3, 'GoniGoni', '1301174445', 'rivaldoludovicussembiring@yahoo.co.id', 'e10adc3949ba59abbe56', 1),
(4, 'Rivaldo Ludovicus Sembiring', '1301174445', 'rivaldoludovicus20@gmail.com', '827ccb0eea8a706c4c34', 1),
(5, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(6, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(7, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(8, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(9, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(10, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(11, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(12, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(13, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(14, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(15, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(16, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(17, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(18, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(19, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(20, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(21, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(22, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(23, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(24, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(25, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(26, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1),
(27, 'GoniGoni', 'ray1234', 'ravenclawgrifindor@yahoo.com', 'fcea920f7412b5da7be0', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id_daftar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
