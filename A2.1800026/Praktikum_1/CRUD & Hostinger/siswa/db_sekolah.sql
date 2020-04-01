-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 17, 2020 at 11:46 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` varchar(10) NOT NULL COMMENT 'Nomor Induk Siswa',
  `nama` varchar(30) NOT NULL COMMENT 'Nama Siswa',
  `tempat_lahir` varchar(30) NOT NULL COMMENT 'Tempat Lahir Siswa',
  `tanggal_lahir` date NOT NULL COMMENT 'Tanggal Lahir Siswa',
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL COMMENT 'Jenis Kelamin Siswa',
  `agama` varchar(20) NOT NULL COMMENT 'Agama Siswa',
  `alamat` varchar(100) NOT NULL COMMENT 'Alamat Siswa',
  `no_hp` varchar(13) NOT NULL COMMENT 'No. Handphone Siswa',
  `foto` varchar(50) NOT NULL COMMENT 'Foto Siwsa'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_hp`, `foto`) VALUES
('11223344', 'Danni Ramdhani Samsudin', 'Sumedang', '1998-12-24', 'Laki-laki', 'Islam', 'Manchester', '0885228832833', 'yXuwdrUY_400x400.jpg'),
('22334455', 'M. Abi Fahzsa', 'Majalengka', '2000-06-18', 'Laki-laki', 'Islam', 'German', '0892378238638', 'images.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
