-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 02:09 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acara`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `pelaksana` varchar(100) NOT NULL,
  `tanggal_mulai` varchar(50) NOT NULL,
  `tanggal_mulai_obj` date DEFAULT NULL,
  `tanggal_selesai` varchar(50) NOT NULL,
  `waktu_mulai` varchar(50) NOT NULL,
  `waktu_selesai` varchar(50) NOT NULL,
  `perihal` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`pelaksana`, `tanggal_mulai`, `tanggal_mulai_obj`, `tanggal_selesai`, `waktu_mulai`, `waktu_selesai`, `perihal`, `status`, `id`) VALUES
('TES 34', '12-01-2022', '2022-01-12', '13-01-2022', '12:00', '13:00', 'TES 3', 'Menunggu', 3),
('atuna', '02-01-2022', '2022-01-02', '30-01-2022', '08:00', '11:00', 'acaraku', 'Selesai', 5),
('Uswatun Hasanah', '01-03-2022', '2022-03-01', '31-03-2022', '07:59', '11:30', 'Free Law Enforcement Seminar', 'Proses', 6),
('pelaksana', '02-01-2022', NULL, '04-01-2022', '07:00', '10:00', 'perihal', 'Selesai', 34),
('input', '03-01-2022', NULL, '04-01-2022', '07:00', '11:00', 'input', 'Selesai', 35),
('oda', '23-01-2022', '2022-01-23', '24-01-2022', '07:00', '12:00', 'acaranya oda', 'Menunggu', 40),
('pelaksana', '03-01-2022', '2022-01-03', '03-01-2022', '09:01', '12:00', 'perihal', 'Menunggu', 41),
('a', '11-01-2022', '2022-01-11', '12-01-2022', '12:00', '02:00', 'a', 'Menunggu', 42),
('coba', '04-01-2022', '2022-01-04', '05-01-2022', '07:00', '11:00', 'coba', 'Menunggu', 43);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
