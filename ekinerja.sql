-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 10, 2017 at 07:12 AM
-- Server version: 5.7.17-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ekinerja`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenkin`
--

CREATE TABLE `jenkin` (
  `id` int(11) NOT NULL,
  `kegiatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenkin`
--

INSERT INTO `jenkin` (`id`, `kegiatan`) VALUES
(1, 'Monitoring dan Evaluasi'),
(2, 'Pelatihan TIK'),
(5, 'Pelatihan Puspindes');

-- --------------------------------------------------------

--
-- Table structure for table `kinerja`
--

CREATE TABLE `kinerja` (
  `kinerjaId` int(4) NOT NULL,
  `user` int(4) NOT NULL,
  `tanggal` date NOT NULL,
  `jenis` int(5) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `waktu` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kinerja`
--

INSERT INTO `kinerja` (`kinerjaId`, `user`, `tanggal`, `jenis`, `detail`, `keterangan`, `status`, `waktu`) VALUES
(1, 1, '2017-08-28', 0, '0', '0', 'Disetujui', 120),
(7, 1, '2017-08-28', 2, 'asd', 'ads', 'Ditolak', 30),
(10, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(11, 1, '2017-08-27', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(12, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(13, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(14, 1, '2017-08-26', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(15, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(16, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(17, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(18, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(19, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(20, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(21, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(22, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(23, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(24, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(25, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(26, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(27, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(28, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(29, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(30, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(31, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(32, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(33, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(34, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(35, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(36, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(37, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(38, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(39, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(40, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(41, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(42, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(43, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(44, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(45, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(46, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(47, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(48, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(49, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(50, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(51, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(52, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(53, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(54, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(55, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(56, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(57, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(58, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(59, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(60, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(61, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(62, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(63, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(64, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(65, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(66, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(67, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(68, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(69, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(70, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(71, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(72, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(73, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(74, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(75, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(76, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(77, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(78, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(79, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(80, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(81, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(82, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(83, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(84, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(85, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(86, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(87, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(88, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(89, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(90, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(91, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(92, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(93, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(94, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(95, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(96, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(97, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(98, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(99, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(100, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(101, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(102, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(103, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(104, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(105, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(106, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(107, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(108, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(109, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(110, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(111, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(112, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(113, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(114, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(115, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(116, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(117, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(118, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(119, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(120, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(121, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(122, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(123, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(124, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(125, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(126, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(127, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(128, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(129, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(130, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(131, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(132, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(133, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(134, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(135, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(136, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(137, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(138, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(139, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(140, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(141, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(142, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(143, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(144, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(145, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(146, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(147, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(148, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(149, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(150, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(151, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(152, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(153, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(154, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(155, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(156, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(157, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(158, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(159, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(160, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(161, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(162, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(163, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(164, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(165, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(166, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(167, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(168, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(169, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(170, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(171, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(172, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(173, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(174, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(175, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(176, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(177, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(178, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(179, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(180, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(181, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(182, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(183, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(184, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(185, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(186, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(187, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(188, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(189, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(190, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(191, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(192, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(193, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(194, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(195, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(196, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(197, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(198, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(199, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(200, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(201, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(202, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(203, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(204, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(205, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(206, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(207, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(208, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(209, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(210, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(211, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(212, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(213, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(214, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(215, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(216, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(217, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(218, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(219, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(220, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(221, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Ditolak', 20),
(222, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(223, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(224, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(225, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(226, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(227, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(228, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'Disetujui', 20),
(229, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(230, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(231, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(232, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(233, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(234, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(235, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(236, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(237, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(238, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(239, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(240, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(241, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(242, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(243, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(244, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(245, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(246, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(247, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(248, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(249, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(250, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(251, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(252, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(253, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(254, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(255, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(256, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(257, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(258, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(259, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(260, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(261, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(262, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(263, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(264, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(265, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(266, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(267, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(268, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(269, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(270, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(271, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(272, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(273, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(274, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(275, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(276, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(277, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(278, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(279, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(280, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(281, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(282, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(283, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(284, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(285, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(286, 1, '2017-08-25', 1, 'aa', 'aa', 'pending', 20),
(287, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(288, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(289, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(290, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(291, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(292, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(293, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(294, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(295, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(296, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(297, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(298, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(299, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(300, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(301, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(302, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(303, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(304, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(305, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(306, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(307, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(308, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(309, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(310, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(311, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(312, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(313, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(314, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(315, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(316, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(317, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(318, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(319, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(320, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(321, 1, '2017-08-25', 1, 'asdad', 'asdasdasda', 'pending', 20),
(322, 4, '2017-09-04', 1, 'Desa Pemalang', '', 'Disetujui', 120);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(4) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `level`) VALUES
(1, 'admin', '4297f44b13955235245b2497399d7a93', 'admin@puspindes.id', 'Admin Puspindes', 'Administrator'),
(3, 'kepala', '4297f44b13955235245b2497399d7a93', 'kepala@puspindes.id', 'Kepala Puspindes', 'Kepala'),
(4, 'staff', '4297f44b13955235245b2497399d7a93', 'staff@puspindes.id', 'Staff Puspindes', 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenkin`
--
ALTER TABLE `jenkin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kinerja`
--
ALTER TABLE `kinerja`
  ADD PRIMARY KEY (`kinerjaId`),
  ADD KEY `user` (`user`),
  ADD KEY `user_2` (`user`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenkin`
--
ALTER TABLE `jenkin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `kinerja`
--
ALTER TABLE `kinerja`
  MODIFY `kinerjaId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=323;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `kinerja`
--
ALTER TABLE `kinerja`
  ADD CONSTRAINT `kinerja_ibfk_1` FOREIGN KEY (`user`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
