-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2025 at 08:41 AM
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
-- Database: `tedc`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `id` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`nim`, `nama`, `id`) VALUES
('D212111001', 'Aliftia Radianti Taniasari', 11011),
('D212111002', 'Cahya Julianti', 11011),
('D212111003', 'Dasimah Seftiani', 11011),
('D212111004', 'Desi Syifa Fitria', 11011),
('D212111005', 'Dewi Yulianti', 11011),
('D212111006', 'Gita Septiani', 11011),
('D212111007', 'Ikhlas Wandana', 11011),
('D212111008', 'Intan Khoirunnisa', 11011),
('D212111009', 'Islah Nurhasanah', 11011),
('D212111010', 'Kenia Nurazizah', 11011),
('D212111011', 'M Rivaldi Hafizd Fathurohman', 11011),
('D212111012', 'Puspa Dewi Kusumawati', 11011),
('D212111013', 'Renaldi Irawan', 11011),
('D212111014', 'Rizaldy Muhamad Sopyan', 11011),
('D212111015', 'Rudi Loilatu', 11011),
('D212111016', 'Seli Pebriani', 11011),
('D212111017', 'Sephia Sumi Jaya Tiningrum', 11011),
('D212111018', 'Siti Aminah', 11011),
('D212111019', 'Siti Rismawati', 11011),
('D212111020', 'Sophia Nurhafshoh Koenady', 11011),
('D212111021', 'Triana Siti Aryani', 11011),
('D212111022', 'Yunita Riani', 11011),
('D212111023', 'Ajeng Aprilyani', 11011),
('D212111025', 'Aspiya Huwaida', 11011),
('D212111026', 'Aura Maliya', 11011),
('D212111028', 'Fanisa Tri Agna Fata', 11011),
('D212111029', 'Ineu Rahmawati', 11011),
('D212111030', 'Muhammad Reza Andriansyah', 11011),
('D212111031', 'Siti Nur Rohimah', 11011),
('D212111032', 'Wawan Jefriansyah', 11011),
('D212111033', 'Novita Qadariah', 11011),
('D212111034', 'Rahmatia', 11011),
('D212111035', 'Zaltin', 11011);

-- --------------------------------------------------------

--
-- Table structure for table `study_programs`
--

CREATE TABLE `study_programs` (
  `nomor` int(6) NOT NULL,
  `prodi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `study_programs`
--

INSERT INTO `study_programs` (`nomor`, `prodi`) VALUES
(11111, 'Kontruksi Bangunan'),
(22222, 'Rekam Medik dan Informasi Kese'),
(33333, 'Teknik Komputer'),
(44444, 'Teknik Informatika'),
(55555, 'Mesin Otomotif'),
(66666, 'Mekanik Industri Dan Desain'),
(77777, 'Akuntansi'),
(88888, 'Teknik Mesin'),
(99999, 'Teknik Elektronika'),
(10101, 'Teknik Kimia'),
(11011, 'Komputerisasi Akuntansi'),
(12121, 'Teknik Otomasi');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
