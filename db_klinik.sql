-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2023 at 01:25 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_klinik`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(11) NOT NULL,
  `nama_pasien` varchar(50) DEFAULT NULL,
  `npm` varchar(50) DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `keluhan` varchar(150) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `jml_obat_diambil` int(50) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama_pasien`, `npm`, `prodi`, `keluhan`, `id_obat`, `jml_obat_diambil`, `id_petugas`) VALUES
(15, 'Kang Bahar', '12397217', 'Manajemen Informatika', 'Demam, Meriang', 1, 2, 2),
(16, 'Mas Heri', '12346253', 'Manajemen Informatika', 'Pusing', 2, 5, 3),
(18, 'Heriono', '29753062', 'Manajemen Informatika', 'Demam', 1, 4, 3),
(19, 'Jaroth Budidaya Heri', '12345962', 'Akuntansi Perpajakan', 'Pusing', 10, 6, 11),
(20, 'ina', '11753098', 'anu', 'Muntah Darah', 10, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `nama_petugas`, `username`, `password`) VALUES
(1, 'Dr.Jajang S.Kom', 'jajangaja', '123'),
(2, 'Dr.Jamal S.Kom', 'jamalaja', '123'),
(3, 'Hj. Muhammad Al Fathan S.Kom, M.Kom.', 'fathanaja', '123'),
(11, 'Heri Mapas S.Farm', 'heriwow', 'heri123'),
(12, 'Dr. Finkan S,pd Gz', 'finkanagustinaa', '20082004');

-- --------------------------------------------------------

--
-- Table structure for table `stokobat`
--

CREATE TABLE `stokobat` (
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(50) NOT NULL,
  `jml_obat` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stokobat`
--

INSERT INTO `stokobat` (`id_obat`, `nama_obat`, `jml_obat`) VALUES
(1, 'Parasetamol', 89),
(2, 'Amoxicillin', 95),
(10, 'Bodrex', 235);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `stokobat`
--
ALTER TABLE `stokobat`
  ADD PRIMARY KEY (`id_obat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stokobat`
--
ALTER TABLE `stokobat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
