-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 23 Des 2017 pada 16.57
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
-- Struktur dari tabel `custom`
--

CREATE TABLE `custom` (
  `id_custom` int(11) NOT NULL,
  `id_dep` int(11) NOT NULL,
  `id_user` int(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `counter` varchar(20) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `custom`
--

INSERT INTO `custom` (`id_custom`, `id_dep`, `id_user`, `nama`, `counter`, `username`, `password`, `status`) VALUES
(1, 1, 550, 'dian maysari', 'POL01', 'sari', '0866ac3fdfb5a999c38e59d6be1026fa', 'Y'),
(2, 3, 499, 'sri hartatik', 'POL03', 'tatik', '38fbe810b4bdfde6a95166af08437bf3', 'Y'),
(3, 7, 576, 'AWALINA FERY HANDAYANI', 'POL07', 'AWALINA', '80d3ee0da26f148f5aa285f0b52f7559', 'Y'),
(4, 8, 649, 'EGITA DWI IMAS', 'POL08', 'GITA', 'd0e5f7fac8d478cb3f5f4bbe1828ad8b', 'Y'),
(5, 10, 554, 'clara bella .cm', 'POL10', 'bella', '23d1e10df85ef805b442a922b240ce25', 'Y'),
(6, 12, 479, 'ZUMROH', 'POL12', 'ZUMROH', 'd6a5201ed81857893dd845162a0cf8d6', 'Y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `custom`
--
ALTER TABLE `custom`
  ADD PRIMARY KEY (`id_custom`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `custom`
--
ALTER TABLE `custom`
  MODIFY `id_custom` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
