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
-- Struktur dari tabel `calls`
--

CREATE TABLE `calls` (
  `id_calls` int(11) NOT NULL,
  `id_reg` int(11) NOT NULL,
  `id_departemen` varchar(20) NOT NULL,
  `code_role` varchar(20) NOT NULL,
  `counter` varchar(20) NOT NULL,
  `timers` datetime NOT NULL,
  `status_call` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `calls`
--

INSERT INTO `calls` (`id_calls`, `id_reg`, `id_departemen`, `code_role`, `counter`, `timers`, `status_call`) VALUES
(1, 5555, '1', 'POL01-1', 'POL01', '2017-12-23 05:32:40', 'yes'),
(2, 15555, '1', 'POL01-2', 'POL01', '2017-12-23 05:50:44', 'yes'),
(3, 18205, '12', 'POL12-1', 'POL12', '2017-12-23 05:52:12', 'no'),
(4, 791, '3', 'POL03-1', 'POL03', '2017-12-23 07:24:52', 'yes'),
(5, 24870, '12', 'POL12-2', 'POL12', '2017-12-23 07:25:25', 'no'),
(6, 24150, '1', 'POL01-3', 'POL01', '2017-12-23 08:44:14', 'yes'),
(7, 150, '1', 'POL01-4', 'POL01', '2017-12-23 21:02:41', 'yes'),
(8, 19, '1', 'POL01-5', 'POL01', '2017-12-23 21:12:41', 'yes'),
(9, 5661, '1', 'POL01-6', 'POL01', '2017-12-23 21:14:42', 'yes'),
(10, 16633, '7', 'POL07-1', 'POL07', '2017-12-23 21:26:22', 'no'),
(11, 2073, '1', 'POL01-7', 'POL01', '2017-12-23 21:43:41', 'no'),
(12, 3040, '1', 'POL01-8', 'POL01', '2017-12-23 21:45:00', 'no'),
(13, 1718, '1', 'POL01-9', 'POL01', '2017-12-23 21:51:56', 'no'),
(14, 3755, '1', 'POL01-10', 'POL01', '2017-12-23 21:54:14', 'no'),
(15, 10204, '1', 'POL01-11', 'POL01', '2017-12-23 21:58:13', 'no'),
(16, 23465, '1', 'POL01-12', 'POL01', '2017-12-23 22:01:30', 'no'),
(17, 794, '1', 'POL01-13', 'POL01', '2017-12-23 22:13:14', 'no');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `calls`
--
ALTER TABLE `calls`
  ADD PRIMARY KEY (`id_calls`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `calls`
--
ALTER TABLE `calls`
  MODIFY `id_calls` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
