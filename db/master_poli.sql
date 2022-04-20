-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Des 2017 pada 15.23
-- Versi Server: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ehospital`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `master_poli`
--

CREATE TABLE IF NOT EXISTS `master_poli` (
  `ID` int(11) NOT NULL,
  `KODE_POLI` char(6) DEFAULT NULL,
  `NAMA_POLI` varchar(25) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_poli`
--

INSERT INTO `master_poli` (`ID`, `KODE_POLI`, `NAMA_POLI`) VALUES
(1, 'POL01', 'Poli Umum'),
(2, 'POL02', 'Spesialis Penyakit Dalam'),
(3, 'POL03', 'Spesialis Anak'),
(4, 'POL04', 'Spesialis Kandungan'),
(5, 'POL05', 'Spesialis Bedah'),
(6, 'POL06', 'Spesialis Radiologi'),
(7, 'POL07', 'Poli Gigi'),
(8, 'POL08', 'Spesialis THT'),
(12, 'POL12', 'Spesialis Saraf'),
(10, 'POL10', 'Spesialis Bedah Orthopedi'),
(11, 'POL11', 'Klinik Nyeri/Rehab Medik'),
(13, 'POL13', 'Spesialis Kulit & Kelamin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_poli`
--
ALTER TABLE `master_poli`
  ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `KODE_POLI` (`KODE_POLI`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_poli`
--
ALTER TABLE `master_poli`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
