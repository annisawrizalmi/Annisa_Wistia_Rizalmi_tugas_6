-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2019 at 07:08 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugaskeenam`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu_makanan`
--

CREATE TABLE IF NOT EXISTS `menu_makanan` (
`id_makanan` int(100) NOT NULL,
  `nama_makanan` varchar(100) NOT NULL,
  `harga_makanan` int(50) NOT NULL,
  `foto_makanan` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu_makanan`
--

INSERT INTO `menu_makanan` (`id_makanan`, `nama_makanan`, `harga_makanan`, `foto_makanan`) VALUES
(1, 'aku', 33333, '186962733002201.jpg'),
(2, 'jjjj', 2000, 'baby+pink+Tumblr+background.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
 ADD PRIMARY KEY (`id_makanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu_makanan`
--
ALTER TABLE `menu_makanan`
MODIFY `id_makanan` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
