-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 02:42 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pramagangku`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_informasi`
--

CREATE TABLE `detail_informasi` (
  `id` int(50) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kode_pos` varchar(30) NOT NULL,
  `jam_buka` varchar(20) NOT NULL,
  `provinsi` varchar(20) NOT NULL,
  `telepon` varchar(30) NOT NULL,
  `divisi` varchar(20) NOT NULL,
  `need_person` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_informasi`
--

INSERT INTO `detail_informasi` (`id`, `image`, `nama_perusahaan`, `alamat`, `kode_pos`, `jam_buka`, `provinsi`, `telepon`, `divisi`, `need_person`) VALUES
(3, 'http://photos.wikimapia.org/p/00/03/28/55/64_big.jpg', 'PT. Telekomunikasi Indonesia Tbk', 'Jl.Bengawan No 81 , Cihapit Kecamatan BandungWetan , Kota Bandung', '40114', '7.30 - 16.30 wib', 'Jawa Barat', '(022) 7234272', 'Sentral Telephone', '2 Person');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `Id` int(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Npm` int(10) NOT NULL,
  `Kelas` int(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`Id`, `Nama`, `Npm`, `Kelas`, `Email`, `Username`, `Password`) VALUES
(1, 'adel', 16726318, 0, 'robi@gmail.com', 'adelia', 'fce5712b039ea5c6dbb096198eb9b9686472436a'),
(2, 'DelianaR', 18111035, 0, 'DelianaR@gmail.com', 'deliana rahma azahra', '25cb1d7839a8f2866236e9dcc3ccf2f58da41c9c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_informasi`
--
ALTER TABLE `detail_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_informasi`
--
ALTER TABLE `detail_informasi`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
