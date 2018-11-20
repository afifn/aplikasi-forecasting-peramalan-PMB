-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 10:58 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db201751067`
--

-- --------------------------------------------------------

--
-- Table structure for table `pmb_201751067`
--

CREATE TABLE `pmb_201751067` (
  `kode_pmb` int(11) NOT NULL,
  `periode_pmb` varchar(10) NOT NULL,
  `jumlah_pmb` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pmb_201751067`
--

INSERT INTO `pmb_201751067` (`kode_pmb`, `periode_pmb`, `jumlah_pmb`) VALUES
(15, '2009/2010', 1200),
(16, '2010/2011', 219),
(17, '2011/2012', 220),
(18, '2012/2013', 459),
(19, '2013/2014', 793),
(20, '2014/2015', 1300),
(21, '2015/2016', 1286),
(22, '2016/2017', 1522),
(23, '2017/2018', 1450),
(24, '2018/2019', 1730),
(25, '2018/2019', 2222);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pmb_201751067`
--
ALTER TABLE `pmb_201751067`
  ADD PRIMARY KEY (`kode_pmb`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pmb_201751067`
--
ALTER TABLE `pmb_201751067`
  MODIFY `kode_pmb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
