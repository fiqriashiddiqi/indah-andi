-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2021 at 01:25 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_jenny`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_wishes`
--

CREATE TABLE `tb_wishes` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kehadiran` varchar(20) NOT NULL,
  `jumlah` int(5) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_wishes`
--

INSERT INTO `tb_wishes` (`id`, `nama`, `kehadiran`, `jumlah`, `pesan`) VALUES
(2, 'lagi', 'Hadir', 1, 'oke 1'),
(3, 'test lagi', 'Hadir', 2, 'wuhuuuuu'),
(4, 'Gaga', 'Tidak Hadir', 0, 'asdaklsdjlashdlkasjdlaslkdjlaksdbjkasdklahjsdbasndiausdabdkasjdiasdjanskldjaishdandklsamdklhajskdnakd'),
(5, 'huhuhu', 'Hadir', 2, 'hahahahhahahahahaha');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_wishes`
--
ALTER TABLE `tb_wishes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_wishes`
--
ALTER TABLE `tb_wishes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
