-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Mar 2020 pada 07.51
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

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
-- Struktur dari tabel `tbl_siswa1`
--

CREATE TABLE `tbl_siswa1` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_siswa1`
--

INSERT INTO `tbl_siswa1` (`nis`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat`, `no_hp`, `foto`) VALUES
('16001', 'Ihsan Septian', 'Bandung', '1222-02-02', 'Perempuan', 'Islam', 'Cimalaka', '0873383638383', 'default.png'),
('18001', 'Alif Yudis Rusdiana', 'Sumedang', '1111-01-01', 'Perempuan', 'Islam', 'Situraja', '0878292722818', 'default.png'),
('18002', 'Aziz Nur Fallah', 'Sumedang', '1444-04-04', 'Perempuan', 'Islam', 'Cisitu', '0856373645382', '4373.png'),
('18005', 'Bima Maulana Saputra', 'Sumedang', '1945-05-05', 'Perempuan', 'Islam', 'Talun', '0839827284637', 'STMIK Logo-1.png'),
('18011', 'Dani Ramdhani', 'Sumedang', '1999-09-09', 'Laki-laki', 'Islam', 'Darmaraja', '0861715367252', 'default.png'),
('18012', 'Deyan Saefulloh', 'Sumedang', '1899-06-09', 'Perempuan', 'Islam', 'Sukatali', '0872527282627', '61266569.png'),
('18013', 'Fadjar Widhyana Nugraha', 'Sumedang', '1888-08-08', 'Perempuan', 'Islam', 'Ganeas', '0876252627262', 'default.png'),
('18015', 'Fauzi Mulyana', 'Sumedang', '1111-01-01', 'Perempuan', 'Islam', 'Licin', '086272527716', 'uzi.png'),
('18071', 'Jajang Jamaludin', 'Sumedang', '2020-02-11', 'Laki-laki', 'Islam', 'Cisitu', '081214948649', 'jajang.jpg'),
('18076', 'Krisman Nurslamet', 'Sumedang', '1991-08-09', 'Laki-laki', 'Islam', 'Tanjungsari', '085642346789', 'ajag.png'),
('18080', 'Muhammad Abi Fahza', 'Majalengka', '1876-03-09', 'Perempuan', 'Islam', 'Lemahsugih', '0876272527711', '6444.png'),
('18090', 'Rizal Fathan Fadilllah', 'Sumedang', '1333-03-03', 'Perempuan', 'Islam', 'Paseh', '0858393849302', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_siswa1`
--
ALTER TABLE `tbl_siswa1`
  ADD PRIMARY KEY (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
