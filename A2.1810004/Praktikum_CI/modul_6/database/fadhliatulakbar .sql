-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Mei 2020 pada 07.42
-- Versi Server: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fadhliatulakbar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
`id_mahasiswa` int(3) NOT NULL,
  `nim` int(10) NOT NULL,
  `nama_mhs` varchar(30) NOT NULL,
  `id_prodi` int(3) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mahasiswa`, `nim`, `nama_mhs`, `id_prodi`) VALUES
(1, 18119123, 'Fadhliatul Akbar', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `prodi`
--

CREATE TABLE IF NOT EXISTS `prodi` (
`id_prodi` int(3) NOT NULL,
  `nama_prodi` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `prodi`
--

INSERT INTO `prodi` (`id_prodi`, `nama_prodi`) VALUES
(1, ' Teknik Informatika '),
(2, ' Manajemen Informatika ');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id_users` int(3) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nama_lengkap` varchar(35) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_users`, `email`, `nama_lengkap`, `password`) VALUES
(1, 'admin@gmail.com', 'admininstrator', '21232f297a57a5a743894a0e4a801fc3'),
(2, 'fadhli@gmail.com', 'Fadhli', '40982132d33fc2f7e9ce479eaf838117');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
 ADD PRIMARY KEY (`id_mahasiswa`), ADD KEY `id_prodi` (`id_prodi`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
 ADD PRIMARY KEY (`id_prodi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
MODIFY `id_mahasiswa` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `prodi`
--
ALTER TABLE `prodi`
MODIFY `id_prodi` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id_users` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
