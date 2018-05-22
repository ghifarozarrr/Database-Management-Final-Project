-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 07:59 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fp mbd`
--

-- --------------------------------------------------------

--
-- Table structure for table `detil_perjalanan`
--

CREATE TABLE `detil_perjalanan` (
  `pj_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detil_perjalanan`
--

INSERT INTO `detil_perjalanan` (`pj_id`, `p_id`) VALUES
(1, 40),
(1, 42),
(1, 44),
(2, 43),
(2, 47),
(3, 31),
(3, 45),
(4, 28),
(4, 39),
(4, 48),
(4, 49),
(4, 51),
(5, 17),
(5, 18),
(6, 15),
(6, 16),
(6, 19),
(7, 53),
(7, 54),
(7, 55),
(8, 52),
(8, 57),
(9, 67),
(9, 72),
(10, 21),
(10, 23),
(11, 62),
(11, 74),
(12, 1),
(12, 4),
(13, 13),
(13, 14),
(15, 25),
(15, 26),
(15, 36),
(15, 37),
(15, 38),
(16, 32),
(16, 33),
(16, 34),
(16, 35),
(17, 59),
(17, 64),
(17, 65),
(17, 66),
(18, 60),
(19, 10),
(19, 11),
(19, 12),
(20, 2),
(20, 3),
(21, 41),
(22, 20),
(22, 22),
(22, 24),
(23, 69),
(23, 71),
(23, 73),
(24, 68),
(24, 70),
(26, 27),
(26, 29),
(27, 30),
(27, 46),
(27, 50),
(28, 56),
(28, 58),
(30, 61),
(30, 63),
(30, 75),
(32, 5),
(32, 6),
(33, 7),
(33, 8),
(33, 9);

-- --------------------------------------------------------

--
-- Table structure for table `kendaraan`
--

CREATE TABLE `kendaraan` (
  `k_id` int(11) NOT NULL,
  `k_merk` varchar(30) DEFAULT NULL,
  `k_pelat` varchar(12) DEFAULT NULL,
  `k_kapasitas` int(11) DEFAULT NULL,
  `k_warna` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kendaraan`
--

INSERT INTO `kendaraan` (`k_id`, `k_merk`, `k_pelat`, `k_kapasitas`, `k_warna`) VALUES
(1, 'Honda', 'L 2362 FA', 4, 'Putih'),
(2, 'Jeep', 'L 8936 GL', 4, 'Biru'),
(3, 'Honda', 'L 5611 KY', 4, 'Kuning'),
(4, 'Ford', 'L 9950 YR', 6, 'Merah'),
(5, 'Toyota', 'L 5953 PO', 8, 'Hitam'),
(6, 'Ferrari', 'L 9375 FD', 8, 'Hitam'),
(7, 'Mazda', 'L 1190 KD', 4, 'Biru'),
(8, 'Suzuki', 'L 0282 AA', 8, 'Putih'),
(9, 'Ford', 'L 3837 NE', 4, 'Biru'),
(10, 'Mercedes-Benz', 'L 2486 TA', 4, 'Putih'),
(11, 'Nissan', 'L 3745 EO', 8, 'Silver'),
(12, 'Mazda', 'L 1968 PY', 4, 'Putih'),
(13, 'Toyota', 'L 4265 BF', 8, 'Jingga'),
(14, 'Toyota', 'L 2480 JG', 4, 'Merah'),
(15, 'Toyota', 'L 3268 LE', 6, 'Jingga'),
(16, 'Nissan', 'L 3348 KD', 4, 'Silver'),
(17, 'Isuzu', 'L 7574 EV', 4, 'Hijau'),
(18, 'Honda', 'L 9684 WV', 8, 'Merah'),
(19, 'Daihatsu', 'L 2032 PA', 4, 'Biru'),
(20, 'Honda', 'L 0967 ND', 4, 'Hitam'),
(21, 'Lexus', 'L 7825 TH', 4, 'Merah'),
(22, 'Honda', 'L 8449 GV', 8, 'Putih'),
(23, 'Ferrari', 'L 5161 PK', 4, 'Kuning'),
(24, 'Daihatsu', 'L 8102 OC', 8, 'Hitam'),
(25, 'Toyota', 'L 2611 PG', 8, 'Biru'),
(26, 'Ferrari', 'L 6690 WN', 8, 'Hijau'),
(27, 'Lexus', 'L 8080 QW', 4, 'Silver'),
(28, 'Chevrolet', 'L 9780 VJ', 4, 'Merah'),
(29, 'Ford', 'L 6159 ZP', 4, 'Silver'),
(30, 'Daihatsu', 'L 9893 WW', 8, 'Kuning'),
(31, 'Daihatsu', 'L 7102 OO', 8, 'Hitam'),
(32, 'Toyota', 'L 2621 PK', 8, 'Biru'),
(33, 'Ferrari', 'L 6090 YN', 8, 'Hijau');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `b_id` int(11) NOT NULL,
  `p_id` int(11) DEFAULT NULL,
  `b_biaya` int(11) DEFAULT NULL,
  `b_status` varchar(30) DEFAULT NULL,
  `b_bulan` int(11) DEFAULT NULL,
  `b_tglbayar` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`b_id`, `p_id`, `b_biaya`, `b_status`, `b_bulan`, `b_tglbayar`) VALUES
(1, 1, 600000, 'LUNAS', 5, '2017-05-30'),
(2, 2, 600000, '-', 6, NULL),
(3, 3, 350000, '-', 6, NULL),
(4, 4, 600000, 'LUNAS', 5, '2017-05-30'),
(5, 5, 350000, '-', 6, NULL),
(6, 6, 350000, 'LUNAS', 6, '2017-06-30'),
(7, 7, 400000, 'LUNAS', 9, '2017-09-30'),
(8, 8, 500000, 'LUNAS', 9, '2017-09-30'),
(9, 9, 400000, 'LUNAS', 9, '2017-09-30'),
(10, 10, 600000, 'LUNAS', 4, '2017-04-30'),
(11, 11, 550000, '-', 4, NULL),
(12, 12, 550000, '-', 4, NULL),
(13, 13, 600000, '-', 11, NULL),
(14, 14, 300000, '-', 11, NULL),
(15, 15, 300000, 'LUNAS', 12, '2017-12-30'),
(16, 16, 300000, '-', 12, NULL),
(17, 17, 550000, '-', 5, NULL),
(18, 18, 300000, 'LUNAS', 5, '2017-05-30'),
(19, 19, 500000, '-', 12, NULL),
(20, 20, 600000, '-', 12, NULL),
(21, 21, 500000, '-', 9, NULL),
(22, 22, 500000, 'LUNAS', 12, '2017-12-30'),
(23, 23, 500000, '-', 9, NULL),
(24, 24, 600000, 'LUNAS', 12, '2017-12-30'),
(25, 25, 400000, 'LUNAS', NULL, '2017-08-30'),
(26, 26, 300000, '-', 6, NULL),
(27, 27, 600000, 'LUNAS', 11, '2017-11-30'),
(28, 28, 350000, '-', 8, NULL),
(29, 29, 600000, 'LUNAS', 11, '2017-11-30'),
(30, 30, 300000, 'LUNAS', 2, '2017-02-28'),
(31, 31, 500000, '-', 4, NULL),
(32, 32, 600000, '-', 7, NULL),
(33, 33, 300000, 'LUNAS', 7, '2017-07-30'),
(34, 34, 300000, 'LUNAS', 7, '2017-07-30'),
(35, 35, 600000, 'LUNAS', 7, '2017-07-30'),
(36, 36, 400000, 'LUNAS', 6, '2017-06-30'),
(37, 37, 300000, '-', 6, NULL),
(38, 38, 350000, '-', 6, NULL),
(39, 39, 550000, '-', 8, NULL),
(40, 40, 400000, 'LUNAS', 11, '2017-11-30'),
(41, 41, 550000, '-', 11, NULL),
(42, 42, 350000, '-', 11, NULL),
(43, 43, 600000, 'LUNAS', 9, '2017-09-30'),
(44, 44, 350000, '-', 11, NULL),
(45, 45, 500000, '-', 4, NULL),
(46, 46, 500000, '-', 2, NULL),
(47, 47, 600000, 'LUNAS', 9, '2017-09-30'),
(48, 48, 600000, '-', 8, NULL),
(49, 49, 350000, '-', 8, NULL),
(50, 50, 550000, '-', 2, NULL),
(51, 51, 600000, '-', 8, NULL),
(52, 52, 500000, '-', 8, NULL),
(53, 53, 550000, '-', 11, NULL),
(54, 54, 600000, '-', 11, NULL),
(55, 55, 300000, 'LUNAS', 11, '2017-11-30'),
(56, 56, 500000, '-', 5, NULL),
(57, 57, 400000, '-', 8, NULL),
(58, 58, 550000, '-', 5, NULL),
(59, 59, 600000, '-', 1, NULL),
(60, 60, 300000, '-', 10, NULL),
(61, 61, 550000, 'LUNAS', 6, '2017-06-30'),
(62, 62, 550000, 'LUNAS', 5, '2017-05-30'),
(63, 63, 550000, 'LUNAS', 6, '2017-06-30'),
(64, 64, 550000, 'LUNAS', 1, '2017-01-30'),
(65, 65, 600000, '-', 1, NULL),
(66, 66, 300000, 'LUNAS', NULL, '2017-01-30'),
(67, 67, 500000, 'LUNAS', 4, '2017-04-30'),
(68, 68, 550000, '-', 4, NULL),
(69, 69, 500000, 'LUNAS', 2, '2017-02-28'),
(70, 70, 400000, 'LUNAS', 4, '2017-04-30'),
(71, 71, 400000, '-', 2, NULL),
(72, 72, 600000, 'LUNAS', 4, '2017-04-30'),
(73, 73, 300000, 'LUNAS', 2, '2017-02-28'),
(74, 74, 600000, 'LUNAS', 5, '2017-05-30'),
(75, 75, 400000, 'LUNAS', 6, '2017-06-30');

-- --------------------------------------------------------

--
-- Table structure for table `penumpang`
--

CREATE TABLE `penumpang` (
  `p_id` int(11) NOT NULL,
  `tt_id` int(11) DEFAULT NULL,
  `tj_id` int(11) DEFAULT NULL,
  `p_nama` varchar(256) DEFAULT NULL,
  `p_telp` varchar(256) DEFAULT NULL,
  `p_gender` char(1) DEFAULT NULL,
  `p_username` varchar(100) NOT NULL,
  `p_email` varchar(100) NOT NULL,
  `p_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penumpang`
--

INSERT INTO `penumpang` (`p_id`, `tt_id`, `tj_id`, `p_nama`, `p_telp`, `p_gender`, `p_username`, `p_email`, `p_password`) VALUES
(1, 12, 30, 'Grant', '080878896109', 'L', '', '', ''),
(2, 20, 41, 'Brenna', '081616385125', 'L', '', '', ''),
(3, 20, 16, 'Audrey', '086413063920', 'P', '', '', ''),
(4, 12, 46, 'Gloria', '082463206185', 'P', '', '', ''),
(5, 32, 40, 'Xander', '083951251811', 'P', '', '', ''),
(6, 32, 29, 'Luke', '085375019348', 'P', '', '', ''),
(7, 33, 62, 'Katelyn', '085885952243', 'P', '', '', ''),
(8, 33, 59, 'Macy', '083894045531', 'P', '', '', ''),
(9, 33, 75, 'Vera', '087336618589', 'P', '', '', ''),
(10, 19, 52, 'Madison', '089433982945', 'L', '', '', ''),
(11, 19, 66, 'Serena', '081608939768', 'L', '', '', ''),
(12, 19, 15, 'Jack', '088384485294', 'L', '', '', ''),
(13, 13, 43, 'Harper', '086596434013', 'P', '', '', ''),
(14, 13, 22, 'Randall', '080474641168', 'L', '', '', ''),
(15, 6, 71, 'Murphy', '088469298399', 'P', '', '', ''),
(16, 6, 32, 'Graiden', '089557749896', 'P', '', '', ''),
(17, 5, 10, 'Catherine', '082760048825', 'P', '', '', ''),
(18, 5, 14, 'Peter', '082032608821', 'L', '', '', ''),
(19, 6, 6, 'Jorden', '087014768001', 'L', '', '', ''),
(20, 22, 4, 'Ferris', '089217394980', 'L', '', '', ''),
(21, 10, 50, 'Damian', '085462150176', 'L', '', '', ''),
(22, 22, 74, 'Barrett', '089990337545', 'L', '', '', ''),
(23, 10, 38, 'Rylee', '086736894401', 'L', '', '', ''),
(24, 22, 64, 'Ivory', '080609176421', 'L', '', '', ''),
(25, 15, 65, 'Dylan', '081692071675', 'L', '', '', ''),
(26, 15, 48, 'Raphael', '081124832569', 'P', '', '', ''),
(27, 26, 45, 'Anastasia', '082017331501', 'P', '', '', ''),
(28, 4, 60, 'Hu', '082163604232', 'P', '', '', ''),
(29, 26, 51, 'Hiroko', '087119538903', 'P', '', '', ''),
(30, 27, 49, 'Althea', '083223893583', 'P', '', '', ''),
(31, 3, 70, 'Leah', '089561041993', 'P', '', '', ''),
(32, 16, 54, 'Hasad', '084023312931', 'L', '', '', ''),
(33, 16, 24, 'Kay', '080681557549', 'L', '', '', ''),
(34, 16, 61, 'Paki', '084765284776', 'P', '', '', ''),
(35, 16, 39, 'Brody', '082054827054', 'P', '', '', ''),
(36, 15, 44, 'Kelsey', '083369596892', 'L', '', '', ''),
(37, 15, 25, 'Dana', '088210859953', 'P', '', '', ''),
(38, 15, 26, 'Joseph', '087610326772', 'L', '', '', ''),
(39, 4, 73, 'Ruth', '082869522120', 'L', '', '', ''),
(40, 1, 72, 'Felix', '082631963884', 'L', '', '', ''),
(41, 21, 12, 'Summer', '088681843360', 'L', '', '', ''),
(42, 1, 42, 'Tara', '081466992517', 'L', '', '', ''),
(43, 2, 63, 'Elmo', '088669966185', 'L', '', '', ''),
(44, 1, 20, 'Uma', '089087599849', 'L', '', '', ''),
(45, 3, 13, 'Naomi', '088424640950', 'L', '', '', ''),
(46, 27, 9, 'Fulton', '089160343292', 'P', '', '', ''),
(47, 2, 28, 'Jescie', '087571752277', 'P', '', '', ''),
(48, 4, 34, 'Hashim', '084111440155', 'P', '', '', ''),
(49, 4, 36, 'Tallulah', '083356311373', 'P', '', '', ''),
(50, 27, 18, 'Macaulay', '089765987516', 'L', '', '', ''),
(51, 4, 1, 'Genevieve', '085381928523', 'P', '', '', ''),
(52, 8, 47, 'Xander', '088053859127', 'P', '', '', ''),
(53, 7, 37, 'Akeem', '082563942284', 'P', '', '', ''),
(54, 7, 27, 'Stuart', '089260828442', 'L', '', '', ''),
(55, 7, 67, 'Sandra', '080163429515', 'L', '', '', ''),
(56, 28, 7, 'Cedric', '089609845771', 'L', '', '', ''),
(57, 8, 35, 'Uma', '088717567727', 'P', '', '', ''),
(58, 28, 21, 'Claudia', '080332289206', 'P', '', '', ''),
(59, 17, 17, 'Cooper', '083629555374', 'P', '', '', ''),
(60, 18, 19, 'Leah', '088825708996', 'L', '', '', ''),
(61, 30, 11, 'Lucian', '081887577390', 'P', '', '', ''),
(62, 11, 5, 'Cynthia', '085410118092', 'P', '', '', ''),
(63, 30, 55, 'David', '085446167493', 'P', '', '', ''),
(64, 17, 53, 'Dylan', '083716513065', 'P', '', '', ''),
(65, 17, 3, 'Haley', '081294599415', 'L', '', '', ''),
(66, 17, 56, 'Frances', '086420545739', 'L', '', '', ''),
(67, 9, 8, 'Paloma', '080971098701', 'L', '', '', ''),
(68, 24, 23, 'Sylvester', '083082047986', 'L', '', '', ''),
(69, 23, 57, 'Richard', '084895134929', 'P', '', '', ''),
(70, 24, 33, 'India', '087453866679', 'P', '', '', ''),
(71, 23, 69, 'Lev', '088161772320', 'P', '', '', ''),
(72, 9, 58, 'Zane', '085727295396', 'P', '', '', ''),
(73, 23, 31, 'Lester', '087551694466', 'P', '', '', ''),
(74, 11, 68, 'Hyatt', '089667394808', 'P', '', '', ''),
(75, 30, 2, 'Jelani', '080329365738', 'P', '', '', ''),
(77, 1, 1, 'a', '087878784431', 'L', 'g', 'Adisazhar123@gmail.com', '202cb962ac59075b964b07152d234b70'),
(78, 1, 1, 'nuz', '08', 'P', 'n', 'n@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `perjalanan`
--

CREATE TABLE `perjalanan` (
  `pj_id` int(11) NOT NULL,
  `s_id` int(11) DEFAULT NULL,
  `pj_tanggal` date DEFAULT NULL,
  `pj_bensin` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perjalanan`
--

INSERT INTO `perjalanan` (`pj_id`, `s_id`, `pj_tanggal`, `pj_bensin`) VALUES
(1, 1, '2017-11-10', 0),
(2, 2, '2017-09-17', 0),
(3, 3, '2017-04-11', 0),
(4, 4, '2017-08-27', 100000),
(5, 5, '2017-05-29', 0),
(6, 6, '2017-12-01', 100000),
(7, 7, '2017-11-25', 75000),
(8, 8, '2017-08-21', 0),
(9, 9, '2017-04-08', 30000),
(10, 10, '2017-09-24', 0),
(11, 11, '2017-05-13', 100000),
(12, 12, '2017-05-20', 65000),
(13, 13, '2017-11-28', 0),
(15, 15, '2017-06-07', 0),
(16, 16, '2017-07-18', 0),
(17, 17, '2017-01-12', 0),
(18, 18, '2017-10-24', 0),
(19, 19, '2017-04-04', 50000),
(20, 20, '2017-06-22', 75000),
(21, 21, '2017-11-13', 0),
(22, 22, '2017-12-02', 30000),
(23, 23, '2017-02-17', 100000),
(24, 24, '2017-04-01', 30000),
(26, 26, '2017-11-26', 0),
(27, 27, '2017-02-08', 0),
(28, 28, '2017-05-26', 50000),
(30, 30, '2017-06-09', 50000),
(32, 32, '2017-06-25', 0),
(33, 33, '2017-09-14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `supir`
--

CREATE TABLE `supir` (
  `s_id` int(11) NOT NULL,
  `k_id` int(11) DEFAULT NULL,
  `s_nama` varchar(256) DEFAULT NULL,
  `s_telp` varchar(256) DEFAULT NULL,
  `s_email` varchar(256) DEFAULT NULL,
  `s_alamat` varchar(256) DEFAULT NULL,
  `s_tgllahir` date DEFAULT NULL,
  `s_gender` char(1) DEFAULT NULL,
  `s_pendapatan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supir`
--

INSERT INTO `supir` (`s_id`, `k_id`, `s_nama`, `s_telp`, `s_email`, `s_alamat`, `s_tgllahir`, `s_gender`, `s_pendapatan`) VALUES
(1, 1, 'Gannon', '083537414248', 'nunc.sed.libero@SednequeSed.com', 'Jl. Industri 80', '1997-06-02', 'L', 2300000),
(2, 2, 'Wallace', '085898413165', 'Fusce.fermentum@enim.com', 'Jl. Ketintang Madya 92', '1975-01-27', 'P', 2300000),
(3, 3, 'Rigel', '083171778687', 'euismod.enim.Etiam@Integersem.net', 'Jl. BKR Pelajar No. 43', '1988-10-02', 'P', 1500000),
(4, 4, 'Leslie', '082239081700', 'amet.consectetuer@cubiliaCuraeDonec.edu', 'Jl. Koblen Tengah No. 22', '1966-02-07', 'L', 2500000),
(5, 5, 'Allistair', '085937826154', 'posuere.at.velit@liberonec.net', 'Jl. Tambakrejo VI/2', '1985-10-22', 'L', 1500000),
(6, 6, 'Noelle', '083464819106', 'Phasellus.ornare@duinec.edu', 'Jl. Mendut No. 7', '1967-06-10', 'L', 2100000),
(7, 7, 'Leandra', '084508862543', 'eu.tempor@Quisquenonummy.org', 'Jl. Gubeng Airlangga I/2', '1988-10-06', 'P', 2500000),
(8, 8, 'Keegan', '081372790099', 'porttitor@temporestac.net', 'Jl. Gresik No. 49', '1981-04-09', 'P', 2000000),
(9, 9, 'Ariana', '086576844197', 'risus@Maecenasmalesuadafringilla.org', 'Jl. Sultan Iskandar Muda No. 16', '1988-10-22', 'P', 2500000),
(10, 10, 'Anjolie', '089397460522', 'sit@Pellentesquehabitantmorbi.com', 'Jl. Teluk Sampit No. 2-A', '1968-06-23', 'L', 2500000),
(11, 11, 'Tate', '088687270880', 'eleifend@mattis.com', 'Jl. Cisedane No. 51', '1967-09-25', 'L', 1500000),
(12, 12, 'Scarlett', '082481468824', 'orci.Ut@lacusCrasinterdum.org', 'Jl. Raya Dukuh Kupang No. 83-A', '1980-05-26', 'P', 2000000),
(13, 13, 'Adrienne', '088306088755', 'nunc@sodales.net', 'Jl. Kebraon Praja II/1', '1971-04-08', 'L', 3000000),
(14, 14, 'Austin', '088032882432', 'tempor@ipsumdolor.co.uk', 'Jl. Jemursari II/33', '1968-06-28', 'P', 2100000),
(15, 15, 'Armand', '085003725816', 'adipiscing@elementumloremut.net', 'Jl. Rungkut Asri Utara No. 1', '1989-02-09', 'P', 2000000),
(16, 16, 'Myles', '084634209491', 'magnis.dis.parturient@erat.com', 'Jl. Nginden Semolo No. 89', '1973-09-23', 'L', 2500000),
(17, 17, 'Brynne', '084924093203', 'eu.odio@lectus.net', 'Jl. Kedung Cowek No. 350', '1982-12-31', 'L', 2000000),
(18, 18, 'Griffin', '084201894101', 'gravida.mauris@egetvenenatisa.net', 'Jl. Raya Kedung-Sememi', '1988-08-12', 'L', 2100000),
(19, 19, 'Yael', '087310294130', 'nec.imperdiet@egestasnuncsed.edu', 'Jl. Raya Lakarsantri No. 74-76', '1997-03-22', 'P', 2100000),
(20, 20, 'Trevor', '084849326037', 'euismod.urna.Nullam@lobortis.co.uk', 'Jl. Mulyorejo Utara No. 201', '1973-08-15', 'L', 3000000),
(21, 21, 'Lawrence', '081721817128', 'lectus@aliquetmolestie.net', 'Jl. Prapen Indah I', '1982-09-18', 'P', 2700000),
(22, 22, 'Yeo', '086456940457', 'in.consequat@cursusetmagna.org', 'Jl. Gunung Anyar Timur No. 62', '1980-02-29', 'L', 2700000),
(23, 23, 'George', '085531055792', 'ante@egetipsum.edu', 'Jl. Jambangan Sawah No. 2', '1989-04-11', 'P', 2500000),
(24, 24, 'Petra', '080460768153', 'sem.consequat@Maurisblandit.org', 'Jl. Masjid Agung Timur No. 2', '1985-12-27', 'L', 2100000),
(25, 25, 'Tyrone', '082140440924', 'Quisque.fringilla@magna.edu', 'Jl. Dukuh Kupang Barat XXIV/17', '1983-08-26', 'L', 3000000),
(26, 26, 'Geoffrey', '081636879652', 'Duis.dignissim.tempor@lacusNulla.edu', 'Jl. Asem Raya No. 2-A', '1971-12-12', 'P', 2000000),
(27, 27, 'Karyn', '082916667615', 'volutpat.Nulla@enimsitamet.co.uk', 'Jl. Simomulyo I No. 31', '1992-04-10', 'P', 2700000),
(28, 28, 'Mannix', '089566838897', 'Etiam@augueac.net', 'Jl. Kyai Tambak Deres No. 252', '1989-07-09', 'P', 3000000),
(29, 29, 'Sawyer', '084390372320', 'tempus@anteNunc.ca', 'Jl. Raya Babat Jerawat No. 1A', '1985-10-08', 'L', 2500000),
(30, 30, 'Jena', '081389294868', 'vehicula@Namligula.co.uk', 'Jl. Raya Sambikerep No. 2', '1971-06-09', 'L', 2100000),
(31, 31, 'Geo', '085531055792', 'ante@egetipsum.edu', 'Jl. Jambangan No. 21', '1989-04-11', 'P', 2500000),
(32, 32, 'Petty', '080460768153', 'sem.consequat@Maurisblandit.org', 'Jl. Masjid Agung Timur No. 100', '1985-12-27', 'L', 2100000),
(33, 33, 'Ty', '082140440924', 'Quisque.fringilla@magna.edu', 'Jl. Dukuh Kupang 15', '1983-08-26', 'L', 3000000);

-- --------------------------------------------------------

--
-- Table structure for table `titik_jemput`
--

CREATE TABLE `titik_jemput` (
  `tj_id` int(11) NOT NULL,
  `tj_alamat` varchar(256) DEFAULT NULL,
  `tj_daerah` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `titik_jemput`
--

INSERT INTO `titik_jemput` (`tj_id`, `tj_alamat`, `tj_daerah`) VALUES
(1, '5495 Quam Av.', 'Ketabang'),
(2, 'Ap #638-5859 Molestie Av.', 'Tandes'),
(3, 'P.O. Box 123, 4331 Tempor, Rd.', 'Sukolilo'),
(4, 'P.O. Box 138, 9129 Ultricies Rd.', 'Wonocolo'),
(5, 'P.O. Box 840, 9257 Dictum Avenue', 'Tandes'),
(6, 'Ap #686-9553 Venenatis Avenue', 'Kenjeran'),
(7, '240-3131 Cras Road', 'Rungkut'),
(8, 'P.O. Box 609, 8746 Et St.', 'Tambaksari'),
(9, 'P.O. Box 416, 4936 Nisi. Ave', 'Ketabang'),
(10, 'Ap #197-5724 Cursus St.', 'Kenjeran'),
(11, '171 Eget Road', 'Tandes'),
(12, '9746 Mollis Ave', 'Tandes'),
(13, '624-2149 Egestas St.', 'Ketabang'),
(14, 'P.O. Box 493, 221 Eu, Road', 'Kenjeran'),
(15, '7633 Pede. Ave', 'Gayungan'),
(16, 'Ap #163-1559 Ut Street', 'Benowo'),
(17, 'Ap #899-1892 Amet, Rd.', 'Sukolilo'),
(18, 'Ap #654-8298 Vel Rd.', 'Ketabang'),
(19, 'Ap #666-155 Felis Street', 'Sukolilo'),
(20, 'P.O. Box 861, 6248 Est, Road', 'Ketabang'),
(21, 'Ap #751-621 Pellentesque Ave', 'Rungkut'),
(22, '561 Etiam Rd.', 'Gayungan'),
(23, 'P.O. Box 736, 6709 Consectetuer, Rd.', 'Tambaksari'),
(24, '9437 Iaculis Avenue', 'Wiyung'),
(25, 'P.O. Box 587, 1617 Suspendisse Avenue', 'Wiyung'),
(26, '425-7023 Rhoncus. Rd.', 'Wiyung'),
(27, 'P.O. Box 228, 2349 Justo St.', 'Rungkut'),
(28, 'Ap #907-2810 Scelerisque, Avenue', 'Ketabang'),
(29, 'Ap #966-9152 Ac Ave', 'Bubutan'),
(30, 'Ap #485-6144 Volutpat. Ave', 'Benowo'),
(31, '526 Dolor. Rd.', 'Tambaksari'),
(32, 'P.O. Box 698, 6581 Lorem, Street', 'Kenjeran'),
(33, '102-9130 Rutrum, Avenue', 'Tambaksari'),
(34, '535-7419 Sollicitudin Rd.', 'Ketabang'),
(35, '715-211 Orci St.', 'Rungkut'),
(36, 'Ap #361-8415 Massa St.', 'Ketabang'),
(37, '935-1448 Ac Av.', 'Rungkut'),
(38, '5674 Sit Ave', 'Wonocolo'),
(39, '467-3107 Dolor, Road', 'Wiyung'),
(40, 'Ap #573-5720 Gravida. Ave', 'Bubutan'),
(41, '6615 Augue, Rd.', 'Benowo'),
(42, 'Ap #614-9920 Cras Street', 'Ketabang'),
(43, 'Ap #874-974 Semper Rd.', 'Gayungan'),
(44, 'P.O. Box 934, 2925 Aliquam Ave', 'Wiyung'),
(45, 'P.O. Box 228, 7090 Gravida St.', 'Ketabang'),
(46, 'P.O. Box 349, 2672 Nisi. Avenue', 'Benowo'),
(47, 'Ap #779-465 Eget St.', 'Rungkut'),
(48, 'Ap #323-9107 Morbi Avenue', 'Wiyung'),
(49, 'Ap #794-6382 Purus. Rd.', 'Ketabang'),
(50, 'Ap #712-1631 Vitae, Rd.', 'Wonocolo'),
(51, '6524 Egestas Ave', 'Ketabang'),
(52, 'Ap #224-1735 Sapien Rd.', 'Gayungan'),
(53, 'Ap #685-6234 Augue Ave', 'Sukolilo'),
(54, 'P.O. Box 152, 2540 Parturient St.', 'Wiyung'),
(55, 'Ap #506-4931 Nullam St.', 'Tandes'),
(56, 'P.O. Box 124, 3725 Ultrices Rd.', 'Sukolilo'),
(57, '6881 Nam Rd.', 'Tambaksari'),
(58, 'Ap #773-1973 At, Rd.', 'Tambaksari'),
(59, '675-4474 Nec Street', 'Bubutan'),
(60, '641-6224 Cras St.', 'Ketabang'),
(61, '473-9727 Est Rd.', 'Wiyung'),
(62, 'P.O. Box 488, 7864 Elit St.', 'Bubutan'),
(63, '8828 Donec St.', 'Ketabang'),
(64, 'P.O. Box 719, 2175 Eros Street', 'Wonocolo'),
(65, '439-8237 Eget Rd.', 'Wiyung'),
(66, '6312 Condimentum St.', 'Gayungan'),
(67, '666-2651 Ligula. St.', 'Rungkut'),
(68, '702-3797 Curabitur St.', 'Tandes'),
(69, 'Ap #316-168 Volutpat. Av.', 'Tambaksari'),
(70, '810-6525 Nonummy Av.', 'Ketabang'),
(71, 'P.O. Box 301, 216 Donec Street', 'Kenjeran'),
(72, '9986 Mauris, St.', 'Ketabang'),
(73, 'Ap #210-8538 Integer Av.', 'Ketabang'),
(74, 'Ap #231-7624 Hendrerit Av.', 'Wonocolo'),
(75, '1671 Morbi Road', 'Bubutan');

-- --------------------------------------------------------

--
-- Table structure for table `titik_tujuan`
--

CREATE TABLE `titik_tujuan` (
  `tt_id` int(11) NOT NULL,
  `tt_deskripsi` varchar(256) DEFAULT NULL,
  `tt_alamat` varchar(256) DEFAULT NULL,
  `tt_daerah` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `titik_tujuan`
--

INSERT INTO `titik_tujuan` (`tt_id`, `tt_deskripsi`, `tt_alamat`, `tt_daerah`) VALUES
(1, 'SMA Negeri 1', 'Jl. Wijaya Kusuma No.48', 'Ketabang'),
(2, 'SMA Negeri 2', 'Jl. Wijaya Kusuma No.48', 'Ketabang'),
(3, 'SMA Negeri 5', 'JL. Kusumabangsa 21', 'Ketabang'),
(4, 'SMA Negeri 9', 'Jl. Wijaya Kusuma No.48', 'Ketabang'),
(5, 'SMA Negeri 3', 'Jl. Memet S. Komp. TNI-AL Kenjeran', 'Kenjeran'),
(6, 'SMA Negeri 19', 'Jl. Kedung Cowek 390', 'Kenjeran'),
(7, 'SMA Negeri 14', 'Jl. Raya Tenggilis Mejoyo', 'Rungkut'),
(8, 'SMA Negeri 17', 'Jl. Rungkut Asri Tengah Komp YKP', 'Rungkut'),
(9, 'SMA Negeri 4', 'Jl. Prof. Dr. Moestopo 4', 'Tambaksari'),
(10, 'SMA Negeri 10', 'Jl. Jemursari I/28', 'Wonocolo'),
(11, 'SMA Negeri 11', 'Jl. Perumnas Tandes I', 'Tandes'),
(12, 'SMA Negeri 12', 'Jl. Sememi', 'Benowo'),
(13, 'SMA Negeri 15', 'Jl. Menanggal Selatan 103', 'Gayungan'),
(14, 'SMA Negeri 20', 'Jl. Medokan Semampir', 'Sukolilo'),
(15, 'SMA Negeri 22', 'Jl. Kumprik', 'Wiyung'),
(16, 'SMP Negeri 34', 'Jl. Menganti Wiyung', 'Wiyung'),
(17, 'SMP Negeri 19', 'Jl. Arief R. Hakim 103 B', 'Sukolilo'),
(18, 'SMP Negeri 30', 'Jl. Medokan Semampir', 'Sukolilo'),
(19, 'SMP Negeri 22', 'Jl. Gayungsari Barat X/38', 'Gayungan'),
(20, 'SMP Negeri 14', 'Jl. Jurang Kuping', 'Benowo'),
(21, 'SMP Negeri 26', 'Jl. Raya Banjar Sugihan No 21', 'Tandes'),
(22, 'SMP Negeri 13', 'Jl. Jemursari 11', 'Wonocolo'),
(23, 'SMP Negeri 29', 'Jl. Mayjend Prof. Dr Moestopo No 4', 'Tambaksari'),
(24, 'SMP Negeri 9', 'Jl. Taman Putroagung 1', 'Tambaksari'),
(25, 'SMP Negeri 17', 'Jl. Raya Tenggilis Mejoyo 1', 'Rungkut'),
(26, 'SMP Negeri 1', 'Jl. Pacar No 4-6 Surabaya', 'Ketabang'),
(27, 'SD Negeri Ketabang', 'Jl. Seruni 6', 'Ketabang'),
(28, 'SD Negeri Rungkut Menanggal', 'Jl. Rungkut Barata IX/3', 'Rungkut'),
(29, 'SD Al-Hikmah', 'Jl. Gayung Kebonsari Tengah No. 10', 'Gayungan'),
(30, 'SD Negeri Muhammadiyah 14', 'Jl. Manukan Kulon No.1', 'Tandes'),
(31, 'SD Hang Tuah 8', 'Jl. Nanggala No. 2', 'Karang Pilang'),
(32, 'SD Negeri Gundih I-81', 'Jl. Dupak No.22', 'Bubutan'),
(33, 'SD Negeri Bubutan VIII', 'Tembok Lor I/23', 'Bubutan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detil_perjalanan`
--
ALTER TABLE `detil_perjalanan`
  ADD PRIMARY KEY (`pj_id`,`p_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `kendaraan`
--
ALTER TABLE `kendaraan`
  ADD PRIMARY KEY (`k_id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`b_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `tt_id` (`tt_id`),
  ADD KEY `tj_id` (`tj_id`);

--
-- Indexes for table `perjalanan`
--
ALTER TABLE `perjalanan`
  ADD PRIMARY KEY (`pj_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `supir`
--
ALTER TABLE `supir`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `k_id` (`k_id`);

--
-- Indexes for table `titik_jemput`
--
ALTER TABLE `titik_jemput`
  ADD PRIMARY KEY (`tj_id`);

--
-- Indexes for table `titik_tujuan`
--
ALTER TABLE `titik_tujuan`
  ADD PRIMARY KEY (`tt_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kendaraan`
--
ALTER TABLE `kendaraan`
  MODIFY `k_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `penumpang`
--
ALTER TABLE `penumpang`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `perjalanan`
--
ALTER TABLE `perjalanan`
  MODIFY `pj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `supir`
--
ALTER TABLE `supir`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `titik_jemput`
--
ALTER TABLE `titik_jemput`
  MODIFY `tj_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `titik_tujuan`
--
ALTER TABLE `titik_tujuan`
  MODIFY `tt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detil_perjalanan`
--
ALTER TABLE `detil_perjalanan`
  ADD CONSTRAINT `detil_perjalanan_ibfk_1` FOREIGN KEY (`pj_id`) REFERENCES `perjalanan` (`pj_id`),
  ADD CONSTRAINT `detil_perjalanan_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `penumpang` (`p_id`);

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`p_id`) REFERENCES `penumpang` (`p_id`);

--
-- Constraints for table `penumpang`
--
ALTER TABLE `penumpang`
  ADD CONSTRAINT `penumpang_ibfk_1` FOREIGN KEY (`tt_id`) REFERENCES `titik_tujuan` (`tt_id`),
  ADD CONSTRAINT `penumpang_ibfk_2` FOREIGN KEY (`tj_id`) REFERENCES `titik_jemput` (`tj_id`);

--
-- Constraints for table `perjalanan`
--
ALTER TABLE `perjalanan`
  ADD CONSTRAINT `perjalanan_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `supir` (`s_id`);

--
-- Constraints for table `supir`
--
ALTER TABLE `supir`
  ADD CONSTRAINT `supir_ibfk_1` FOREIGN KEY (`k_id`) REFERENCES `kendaraan` (`k_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
