-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2022 at 05:42 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsihph`
--

-- --------------------------------------------------------

--
-- Table structure for table `rawdatas`
--

CREATE TABLE `rawdatas` (
  `Tgl OBC` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nopo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `OBC` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SERI` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `warna` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hje` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RPB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BPB` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kodepb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `JHT` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qtypesan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RENCET` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tgl Jatuh Tempo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Personalisasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Perekat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `GR` int(11) NOT NULL,
  `No Pelat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_laporan` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rawdatas`
--

INSERT INTO `rawdatas` (`Tgl OBC`, `Material`, `nopo`, `OBC`, `SERI`, `warna`, `hje`, `RPB`, `BPB`, `kodepb`, `JHT`, `qtypesan`, `RENCET`, `Tgl Jatuh Tempo`, `Personalisasi`, `Perekat`, `GR`, `No Pelat`, `type`, `tanggal_laporan`) VALUES
('01-07-20', '931110001-20', '3000053074', 'BLT215210', '1', 'JI', '110', '5,400', '12', 'DIALESAB00', 'SKT', '60', '68', '21-07-20', 'P', 'TP', 60, '10187', 'ZP03', '0000-00-00 00:00:00'),
('01-07-20', '931110001-20', '3000053124', 'BJO215266', '1', 'HI', '30', '1,750', '6', 'PRBUPAJA00', 'KLB', '400', '418', '21-07-20', 'P', 'TP', 400, '10034', 'ZP03', '0000-00-00 00:00:00'),
('01-07-20', '931110001-20', '3000053131', 'BJO215245', '1', 'JI', '110', '5,600', '12', 'PRBUPAJA00', 'SKT', '2000', '2,068', '21-07-20', 'P', 'TP', 2000, '10495', 'ZP03', '0000-00-00 00:00:00'),
('01-07-20', '931110001-20', '3000053137', 'BJO215198', '1', 'JI', '110', '4,500', '10', 'SIDMULKM00', 'SKT', '400', '418', '21-07-20', 'P', 'TP', 400, '10057', 'ZP03', '0000-00-00 00:00:00'),
('01-07-20', '931110001-20', '3000053153', 'BJO215223', '1', 'JI', '110', '5,400', '12', 'SUMBAIR>00', 'SKT', '30', '36', '21-07-20', 'P', 'TP', 30, '10341', 'ZP03', '0000-00-00 00:00:00'),
('01-07-20', '931110001-20', '3000053177', 'BJO215196', '1', 'HI', '30', '1,750', '6', 'PRBUPAJA00', 'KLB', '800', '832', '21-07-20', 'P', 'TP', 800, '10034', 'ZP03', '0000-00-00 00:00:00'),
('01-07-20', '931110001-20', '3000053186', 'BJO215254', '1', 'JI', '110', '6,450', '12', 'SIDMULKM00', 'SKT', '500', '520', '21-07-20', 'P', 'TP', 500, '10652', 'ZP03', '0000-00-00 00:00:00'),
('01-07-20', '931110001-20', '3000053202', 'BJO215281', '1', 'JI', '110', '5,600', '12', 'PRBUPAJA00', 'SKT', '1000', '1,040', '21-07-20', 'P', 'TP', 800, '10495', 'ZP03', '0000-00-00 00:00:00'),
('01-07-20', '931110001-20', '3000053213', 'BLT215201', '1', 'JI', '110', '4,650', '10', 'CEMPAKA>00', 'SKT', '50', '56', '21-07-20', 'P', 'TP', 50, '10065', 'ZP03', '0000-00-00 00:00:00'),
('01-07-20', '931110001-20', '3000053217', 'BLT215232', '1', 'JI', '110', '5,600', '12', 'ROWOBENI00', 'SKT', '1000', '1,040', '21-07-20', 'P', 'TP', 1000, '10524', 'ZP03', '0000-00-00 00:00:00'),
('01-07-20', '931110003-20', '3000053291', 'BJO232710', '3', 'UG', '455', '12,250', '12', 'PRBUPAJA00', 'SKM', '70', '78', '21-07-20', 'P', 'TP', 70, '30147', 'ZP03', '0000-00-00 00:00:00'),
('01-07-20', '931110003-20', '3000053309', 'BJO232686', '3', 'UG', '455', '12,250', '12', 'PRBUPAJA00', 'SKM', '150', '162', '21-07-20', 'P', 'TP', 150, '30147', 'ZP03', '0000-00-00 00:00:00'),
('01-07-20', '931110003-20', '3000053321', 'BJO232697', '3', 'UG', '455', '16,325', '16', 'PRBUPAJA00', 'SKM', '200', '210', '21-07-20', 'P', 'TP', 200, '30296', 'ZP03', '0000-00-00 00:00:00'),
('02-07-20', '931110008-20', '3000053782', 'TNG232783', '3', 'HI', '57%', '70,000', '100', '-', 'HTL', '840', '874', '22-07-20', 'NP', 'DP', 840, '40011', 'ZP03', '0000-00-00 00:00:00'),
('02-07-20', '931110008-20', '3000053787', 'TNG232786', '3', 'HI', '57%', '70,000', '100', '-', 'HTL', '100', '110', '22-07-20', 'NP', 'DP', 100, '40011', 'ZP03', '0000-00-00 00:00:00'),
('01-07-20', '931110001-20', '3000053947', 'BJO215281', '1', 'JI', '110', '5,600', '12', 'PRBUPAJA00', 'SKT', '1000', '210', '21-07-20', 'P', 'TP', 200, '10495', 'ZP13', '0000-00-00 00:00:00'),
('03-07-20', '931110008-20', '3000054199', 'ACE232837', '3', 'HI', '57%', '40,000', '60', '-', 'HTL', '20', '24', '23-07-20', 'NP', 'DP', 20, '40008', 'ZP03', '0000-00-00 00:00:00'),
('03-07-20', '931110008-20', '3000054202', 'BND232836', '3', 'HI', '57%', '40,000', '60', '-', 'HTL', '150', '162', '23-07-20', 'NP', 'DP', 150, '40008', 'ZP03', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rawdatas`
--
ALTER TABLE `rawdatas`
  ADD UNIQUE KEY `nopo_UNIQUE` (`nopo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
