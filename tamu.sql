-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 12:18 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `jam_kedatangan` time(6) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Perempuan','Laki-Laki') NOT NULL,
  `agama` enum('islam','kristen','budha','hindu') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `nama`, `email`, `jam_kedatangan`, `alamat`, `jenis_kelamin`, `agama`) VALUES
(1133, 'Della Stephen Wong', 'dellastephenW@gmail.', '17:43:00.000000', 'Anywhere city', 'Perempuan', 'budha'),
(1155, 'Ivander', 'Ivande@gmail.co', '17:46:00.000000', 'Disitu', 'Laki-Laki', 'hindu'),
(12345, 'CINTA PANDIA', 'cintapandia@gmail.co', '00:00:20.000000', 'Sawit Seberang', 'Perempuan', 'islam'),
(34212, 'CICI SALFIA AZIZ', 'cicisalfia@gmail.com', '00:00:10.000000', 'tanjung pura', 'Perempuan', 'islam'),
(56743, 'DELYA PUTRI MAHARANI', 'delyaputri@gmail.com', '00:00:13.000000', 'tandem', 'Perempuan', 'islam'),
(89765, 'NOVITA SIMANJUNTAK', 'novita123@gmail.com', '00:00:14.300000', 'Stabat', 'Perempuan', 'kristen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
