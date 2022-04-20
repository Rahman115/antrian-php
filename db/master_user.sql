-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 21 Des 2017 pada 15.26
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
-- Struktur dari tabel `master_user`
--

CREATE TABLE IF NOT EXISTS `master_user` (
  `ID` int(5) NOT NULL,
  `USERNAME` varchar(32) NOT NULL,
  `PASSWORD` varchar(32) NOT NULL,
  `NAMA_LENGKAP` varchar(35) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=689 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `master_user`
--

INSERT INTO `master_user` (`ID`, `USERNAME`, `PASSWORD`, `NAMA_LENGKAP`) VALUES
(648, 'admin', '!@#$%', 'admin'),
(636, 'RULI', 'RULI', 'RULI RAHMAD'),
(499, 'tatik', 'hartatik', 'sri hartatik'),
(623, 'bu nik', 'rokhani', 'rokhani'),
(523, 'wiji', 'wiji123', 'wiji larasati'),
(550, 'sari', 'timb', 'dian maysari'),
(604, 'fitriprwt', '369871', 'fitriyani mutyastuti'),
(415, 'susan', 'susan123', 'susana'),
(639, 'NINGRUM', '2908', 'AYUNINGRUM'),
(626, 'mely', 'ESTY', 'dewi meliana'),
(649, 'GITA', 'GENDHIS', 'EGITA DWI IMAS'),
(605, 'Ristya', '2023', 'ristya putri kristyaningrum'),
(618, 'agp. indarti', 'bismillah', 'agus pur indarti'),
(554, 'bella', 'clara', 'clara bella .cm'),
(586, 'hana', 'sitasari', 'hana sitasari'),
(576, 'AWALINA', 'ESENALIF', 'AWALINA FERY HANDAYANI'),
(455, 'RAGIL', 'DEWASA', 'RAGIL SAPUTRO'),
(544, 'fenita', '12345', 'fenita'),
(637, 'FIKRI', 'FIKRI', 'FIKRI ALIM MAFAZI'),
(631, 'uswatun', 'uswatun', 'uswatun khasanah'),
(445, 'hening', 'janitra', 'Gumilang Hening Prayogi'),
(411, 'dhani', 'aliqa', 'estetika hardani'),
(640, 'NANIK', '221', 'NANIK OETARI'),
(460, 'NIA', 'ICU', 'SURYATI DWI KURNIASIH'),
(414, 'IGA', 'DINI', 'IGA MURDINI'),
(619, 'RORO', 'RAFA', 'RORO WIDI ASTUTI'),
(417, 'MEIDA', '300589', 'Nurul Meida'),
(435, 'ADIT', 'IGDC', 'ADITYA PRAMUSTIKA'),
(465, 'LISNA', 'VIPSATU', 'LISNAWATI'),
(420, 'fatah', 'fatah12345', 'abdul fatah'),
(622, 'Renie', 'nuriyah', 'Renie Nuriyah'),
(538, 'erin', '11maret2005', 'Erin Anggraeni'),
(552, 'toni', '231212', 'Ahmad Fatoni'),
(570, 'DINA F', 'DINAF', 'DINA FATMAWATI'),
(667, 'Muna', 'muna', 'Muna Perawat'),
(547, 'awal', 'sasuke', 'M. Awaludin'),
(520, 'IKHSAN', 'WELERI', 'IKHSAN'),
(392, 'informasi', 'info2015', 'informasi'),
(393, 'DIAN', 'LESTARI', 'DIANTI ISMI LESTARI'),
(394, 'fia', 'afiani', 'nur fitri afiani'),
(534, 'ryan', 'igd', 'ryan widianto'),
(628, 'yani', 'klantung', 'tri nuryani'),
(629, 'khusnul', '210194', 'rini khusnul khotimah'),
(666, 'DEWI', 'ICU', 'DEWI R'),
(655, 'INDAHOK', 'NASETIYO', 'INDAH OKVIYANI'),
(472, 'NURA', 'VIPSATU', 'NUR AENI'),
(474, 'INTAN', 'ICU', 'INTAN CAHYOWATI'),
(475, 'INDAH', 'HND', 'INDAH DJUBAEDAH'),
(476, 'ERVIN', 'DEWASA', 'ERVIN LEDIANA'),
(479, 'ZUMROH', 'ZUM123', 'ZUMROH'),
(665, 'ANITHA', 'ANITHA', 'ANITHA SETYA WARDHANI'),
(537, 'Henny', '1993', 'Henny Rukmanah'),
(482, 'ayu', 'rosid', 'ayu ratnasari'),
(643, 'Samsudin,SE', 'rsbhjaya123', 'Samsudin'),
(657, 'ZUL', 'DIAH', 'SITI DIAH ZULAIKHA'),
(633, 'SONY', 'SONY', 'SONY .PH'),
(488, 'AENA', 'TIMB', 'AENA WAHYUNI'),
(489, 'ASIH', 'TIMB', 'TUNARSIH'),
(490, 'MILA', 'TIMC', 'MILATINA ULFA'),
(522, 'susi w', 'embun', 'susi widyawati'),
(492, 'ROZANAH', 'TIMD', 'ROZANAH'),
(529, 'heni', 'ali', 'heni dwi lestari'),
(494, 'ana', 'farida', 'Ana Farida'),
(664, 'rifka', '123', 'ida rifkawati'),
(498, 'rohani', 'bedah', 'rohani'),
(635, 'WAFIQ', '1234', 'WAFIQ ATHIF PAHLEVI'),
(543, 'suwardi', '12345', 'suwardi'),
(518, 'DEWI LAB', 'INDAH', 'DEWI INDAH'),
(555, 'ristanti', 'igda', 'ristanti'),
(524, 'dita', 'peri', 'nindita sekar arumsari'),
(542, 'dr. azhar', '12345', 'azhar arief sulistyo'),
(625, 'DIKA', 'ATMOKO', 'NUGRAHAINI S. MAHARDIKA'),
(511, 'MUSDA', 'MIRZASAFA', 'SITI MUSDALIFAH'),
(512, 'edi', 'benca', 'panca edi suprapto'),
(553, 'nonik', 'najwa', 'taroni'),
(551, 'astri', 'tima', 'sri sulastrianingrum'),
(549, 'lya', '1423', 'LYA NUR ROCHMAH'),
(532, 'Zainul', '240693', 'Zainul Hakim'),
(627, 'dini', '12345', 'dini'),
(525, 'ningsih', '1234', 'wahyuningsih'),
(638, 'NOVI', '1616', 'TRI NOVIYANA'),
(557, 'INA', 'UMIINA', 'DWI AGUSTINA'),
(558, 'arini', 'anaku', 'arini sutami s'),
(559, 'aini', 'yunia', 'aini yuniawati'),
(560, 'mifta', '240194', 'mifta auliya'),
(656, 'AFI', 'FATIH', 'AFIATUR ROSIDA'),
(566, 'RIZKI FEBRIAN', 'KEUANGAN01', 'RIZKI FEBRIAN'),
(564, 'SISTA', '1013', 'SISTA WATI'),
(567, 'SUKRON', 'MARKETING', 'SUKRON'),
(568, 'GALIH', 'GALIHADITYA96', 'ADITYA GALIH SETYAJI'),
(569, 'lastri', 'spiritku', 'Siti Sulastri'),
(620, 'Nardi', 'sunardi', 'Sunardi'),
(621, 'sugeng', 'purnomo', 'sugeng purnomo'),
(573, 'sukma', '2882', 'sukma dwi utami'),
(574, 'HIDA', 'DINNA', 'DINA HIDAYATUL AFIFAH'),
(575, 'ANGGA', 'ANGGA', 'ANGGA TSALATSA PRASETYA'),
(624, 'yeni', 'ZUFAR', 'yeni zufar'),
(578, 'sukmawati', '12345', 'sukmawati'),
(580, 'warsito', '1234', 'warsito'),
(632, 'rini', '101190', 'anissyah rini'),
(582, 'FITRI AP', '12345', 'FITRI'),
(583, 'waid', '112233', 'ribut waidi'),
(662, 'IMAM', 'ELIELO', 'IMAM BAIHAKI'),
(641, 'NORMA', '154', 'AHADIYAH NORMA FELAYATI'),
(589, 'teguh', 'irdinapuspita', 'teguh muliawan'),
(668, 'lulu', '130828', 'lulu'),
(591, 'ayu setya', 'ayu', 'ayu setya'),
(592, 'AMAR', '12345', 'MIFTACHUL AMAR'),
(594, 'aldila', 'dila24', 'aldila artiningtyas'),
(669, 'gika', 'manggisan', 'Rahma Gika Azjkania'),
(597, 'ROZI', 'ROZI123', 'FACHRURROZI'),
(598, 'PURI', 'PURI123', 'PURWATI LISTYORINI'),
(599, 'WIDI', 'WAHYU', 'WAHYU WIDIANTI'),
(634, 'bara', '1234', 'angga baharudin rahman'),
(601, 'ULFA', '12345', 'ANIS ULFA'),
(602, 'MAYANG', 'MYG29', 'MAYANG DEWI ARIYANTARI'),
(606, 'kurwia', 'almer', 'dewi kurwianingsih'),
(607, 'DEWIP', 'PERAWAT', 'DEWI PURWANTI'),
(609, 'wahyuk', 'vipsatu', 'wahyu kurnia'),
(610, 'WIDODO', 'SIMANYUN12', 'EDY SAPUTRO'),
(611, 'SEPTI', 'SEPTI', 'SEPTI TRI ASTUTI'),
(645, 'ENI', '123', 'AINUL LATIFAH'),
(661, 'lala', 'kaliayu', 'marlaysia sari'),
(652, 'LUTFI', '01', 'MUHAMMAD LUTFI RO'),
(615, 'thohir', 'thohir15', 'muhammad thohir'),
(616, 'syafa', 'syafa2', 'musyafaatun'),
(617, 'NURUL ISTIQ', '1803', 'nurul istiq fitriyah'),
(646, 'BOWO', 'INFORMASI', 'TEGUH WIBOWO'),
(647, 'MARATUS', '123456', 'SITI MARATUS SOLEKHAH'),
(650, 'ERNY', 'ERNY', 'ERNY CHOERINI'),
(653, 'SARY', '270192', 'SARI KURNIAWATI'),
(654, 'jancky', '12345', 'machnuril jancky dausat'),
(658, 'Ella', 'ella', 'Lailatul'),
(659, 'Rina', 'Rina', 'Rina'),
(670, 'hima', 'hima', 'himatul aliyah'),
(671, 'DINA', 'VIP', 'DINA KURNIAWATI'),
(672, 'ema', '3m4', 'ema ratnasari'),
(673, 'zimpi', 'zimpi', 'zimpi nikiyati parastiwi'),
(674, 'ageng', 'yari', 'ageng mayasari'),
(675, 'asti', 'asti', 'asti ardita pratiwi'),
(676, 'lia', 'rizki123', 'lia'),
(687, 'TYAS', 'TYAS', 'TYAS'),
(678, 'wahyuningrum', 'wahyuningrum', 'wahyuningrum'),
(680, 'MUFIDAH', 'MUFIDAH', 'SITI NUR MUFIDAH'),
(681, 'ekalis', 'ekalis', 'eka listiana'),
(682, 'yuli', 'yuli', 'dwi setyorini'),
(683, 'syada', '987654321', 'alfah syada'),
(685, 'EVY', '2012', 'EVY SETIAWATI'),
(686, 'IBNA', '282828', 'SITI IBNASARI'),
(688, 'nuris', 'nurul', 'nuris perawat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `master_user`
--
ALTER TABLE `master_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `master_user`
--
ALTER TABLE `master_user`
  MODIFY `ID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=689;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
