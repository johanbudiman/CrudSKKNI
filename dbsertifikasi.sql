-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2018 at 07:56 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbsertifikasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tru_skema`
--

CREATE TABLE `tru_skema` (
  `kd` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `skema` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tru_skema`
--

INSERT INTO `tru_skema` (`kd`, `skema`) VALUES
('01', 'programming'),
('02', 'networking'),
('03', 'multimedia');

-- --------------------------------------------------------

--
-- Table structure for table `tru_tmptujikom`
--

CREATE TABLE `tru_tmptujikom` (
  `kd` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `tmptujikom` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tru_tmptujikom`
--

INSERT INTO `tru_tmptujikom` (`kd`, `tmptujikom`) VALUES
('01', 'jambi'),
('02', 'banda aceh'),
('03', 'padang'),
('04', 'bandar lampung');

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `usrname` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `passw` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id`, `usrname`, `passw`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `t_data_pribadi`
--

CREATE TABLE `t_data_pribadi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nik` char(16) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nohp` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `tmptlahir` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `tgllahir` date NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `t_data_pribadi`
--

INSERT INTO `t_data_pribadi` (`id`, `nik`, `nama`, `nohp`, `tmptlahir`, `tgllahir`, `email`) VALUES
(5, '1234567890123456', 'Johan Budiman', '089602891889', 'Jambi', '1996-04-20', 'johanbudiman11@gmail.com'),
(6, '1234567890098765', 'akbar', '085266123456', 'singkut', '1996-04-08', 'akbar@gmail.com'),
(7, '1234567890999999', 'test 1', '085276611111', 'Jambi', '1994-04-04', 'test1@gmail.com'),
(8, '1234567890999998', 'test 2', '085276611112', 'Jambi', '1994-04-05', 'test2@gmail.com'),
(9, '1234567890999997', 'test 3', '085276611113', 'Jambi', '1994-04-05', 'test3@gmail.com'),
(10, '1234567890999999', 'test 1', '085276611111', 'Jambi', '1994-04-04', 'test1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `t_sertifikasi`
--

CREATE TABLE `t_sertifikasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `skema` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `tmptujikom` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `rekomendasi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ttsertifikasi` date NOT NULL,
  `organisasi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id_data_pribadi` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `t_sertifikasi`
--

INSERT INTO `t_sertifikasi` (`id`, `skema`, `tmptujikom`, `rekomendasi`, `ttsertifikasi`, `organisasi`, `id_data_pribadi`) VALUES
(5, '01', '01', 'jambi', '2018-08-09', 'STIKOM DB JAMBI', 5),
(6, '02', '01', 'stikom', '2018-08-09', 'stikom db', 6),
(7, '03', '03', 'dia', '2018-08-08', 'unbari', 7),
(8, '02', '01', 'dia', '2018-08-08', 'unbari', 8),
(9, '01', '04', 'dia', '2018-08-08', 'unbari', 9),
(10, '03', '03', 'dia', '2018-08-08', 'unbari', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tru_skema`
--
ALTER TABLE `tru_skema`
  ADD PRIMARY KEY (`kd`);

--
-- Indexes for table `tru_tmptujikom`
--
ALTER TABLE `tru_tmptujikom`
  ADD PRIMARY KEY (`kd`);

--
-- Indexes for table `t_admin`
--
ALTER TABLE `t_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_data_pribadi`
--
ALTER TABLE `t_data_pribadi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_sertifikasi`
--
ALTER TABLE `t_sertifikasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_the_sertifikasi_far_data_pribadi` (`id_data_pribadi`),
  ADD KEY `fk_the_sertifikasi_far_skema` (`skema`),
  ADD KEY `fk_sertifikasi_far_tmptujikom` (`tmptujikom`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_admin`
--
ALTER TABLE `t_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `t_data_pribadi`
--
ALTER TABLE `t_data_pribadi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `t_sertifikasi`
--
ALTER TABLE `t_sertifikasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `t_sertifikasi`
--
ALTER TABLE `t_sertifikasi`
  ADD CONSTRAINT `fk_sertifikasi_far_tmptujikom` FOREIGN KEY (`tmptujikom`) REFERENCES `tru_tmptujikom` (`kd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_the_sertifikasi_far_data_pribadi` FOREIGN KEY (`id_data_pribadi`) REFERENCES `t_data_pribadi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_the_sertifikasi_far_skema` FOREIGN KEY (`skema`) REFERENCES `tru_skema` (`kd`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
