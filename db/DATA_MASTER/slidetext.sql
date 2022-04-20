-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Des 2017 pada 16.58
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `slidetext`
--

CREATE TABLE `slidetext` (
  `id_text` int(11) NOT NULL,
  `message` text NOT NULL,
  `height` int(8) NOT NULL,
  `direction` varchar(20) NOT NULL,
  `align` varchar(20) NOT NULL,
  `behavior` varchar(20) NOT NULL,
  `width` int(10) NOT NULL,
  `scrollamount` int(5) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `slidetext`
--

INSERT INTO `slidetext` (`id_text`, `message`, `height`, `direction`, `align`, `behavior`, `width`, `scrollamount`, `status`) VALUES
(1, 'SELAMAT DATANG DI RUMAH SAKIT NURUSSYIFA', 150, 'left', 'center', 'alternate', 100, 4, 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `slidetext`
--
ALTER TABLE `slidetext`
  ADD PRIMARY KEY (`id_text`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `slidetext`
--
ALTER TABLE `slidetext`
  MODIFY `id_text` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
