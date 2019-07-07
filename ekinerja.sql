-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 07, 2019 at 03:10 PM
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
  `jenis` int(11) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'pending',
  `waktu` int(25) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kinerja`
--

INSERT INTO `kinerja` (`kinerjaId`, `user`, `tanggal`, `jenis`, `detail`, `keterangan`, `status`, `waktu`, `nilai`) VALUES
(1, 4, '2019-06-10', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing', 'Lorem ipsum dolor', 'Disetujui', 3417, 4),
(2, 4, '2019-06-02', 1, 'Lorem ipsum dolor sit', 'Lorem ipsum', 'Disetujui', 2197, 6),
(3, 4, '2019-06-18', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 'Lorem ipsum', 'Disetujui', 1264, 2),
(4, 4, '2019-07-03', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur', 'Lorem ipsum', 'Disetujui', 1366, 8),
(5, 4, '2019-06-15', 1, 'Lorem ipsum dolor', 'Lorem ipsum', 'Disetujui', 2076, 3),
(6, 4, '2019-06-02', 2, 'Lorem ipsum', 'Lorem ipsum', 'Disetujui', 3976, 2),
(7, 4, '2019-06-29', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing', 'Lorem ipsum dolor', 'pending', 1964, 0),
(8, 4, '2019-05-28', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing', 'Lorem ipsum dolor', 'pending', 3951, 0),
(9, 4, '2019-05-31', 2, 'Lorem ipsum', 'Lorem ipsum', 'pending', 3227, 0),
(10, 4, '2019-06-25', 1, 'Lorem ipsum dolor sit amet, consectetuer', 'Lorem ipsum', 'Disetujui', 3152, 6),
(11, 4, '2019-05-21', 2, 'Lorem ipsum', 'Lorem ipsum dolor', 'pending', 3574, 0),
(12, 4, '2019-06-29', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adip', 'Lorem', 'Disetujui', 1135, 8),
(13, 4, '2019-06-04', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum', 'pending', 3393, 0),
(14, 4, '2019-07-01', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 'Lorem ipsum dolor', 'Disetujui', 3185, 3),
(15, 4, '2019-05-31', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adip', 'Lorem ipsum dolor', 'Disetujui', 1259, 2),
(16, 4, '2019-06-25', 2, 'Lorem ipsum dolor sit', 'Lorem ipsum', 'Disetujui', 993, 2),
(17, 4, '2019-06-02', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 'Lorem ipsum dolor', 'Disetujui', 3501, 2),
(18, 4, '2019-06-06', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adip', 'Lorem ipsum', 'pending', 3079, 0),
(19, 4, '2019-07-01', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adip', 'Lorem ipsum', 'Disetujui', 2132, 1),
(20, 4, '2019-05-28', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 'Lorem', 'pending', 1362, 0),
(21, 4, '2019-06-16', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing', 'Lorem ipsum', 'Disetujui', 3118, 1),
(22, 4, '2019-06-17', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adip', 'Lorem', 'pending', 169, 0),
(23, 4, '2019-05-30', 2, 'Lorem ipsum dolor sit', 'Lorem', 'Disetujui', 3101, 10),
(24, 4, '2019-06-06', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 'Lorem ipsum dolor', 'pending', 2809, 0),
(25, 4, '2019-05-18', 2, 'Lorem ipsum', 'Lorem ipsum dolor', 'pending', 1548, 0),
(26, 4, '2019-06-17', 1, 'Lorem ipsum dolor', 'Lorem', 'Disetujui', 2898, 2),
(27, 4, '2019-06-26', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur', 'Lorem ipsum', 'pending', 995, 0),
(28, 4, '2019-06-18', 2, 'Lorem ipsum', 'Lorem', 'Disetujui', 2173, 3),
(29, 4, '2019-07-04', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur', 'Lorem ipsum dolor', 'pending', 3772, 0),
(30, 4, '2019-06-29', 3, 'Lorem ipsum dolor sit amet, consectetuer', 'Lorem ipsum', 'pending', 582, 0),
(31, 4, '2019-06-29', 1, 'Lorem ipsum dolor sit', 'Lorem ipsum', 'pending', 186, 0),
(32, 4, '2019-06-04', 3, 'Lorem ipsum dolor sit amet, consectetuer', 'Lorem ipsum', 'Disetujui', 4425, 9),
(33, 4, '2019-05-28', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur', 'Lorem', 'pending', 164, 0),
(34, 4, '2019-06-30', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 'Lorem ipsum', 'Disetujui', 2468, 2),
(35, 4, '2019-05-28', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 'Lorem ipsum', 'pending', 1782, 0),
(36, 4, '2019-05-29', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adip', 'Lorem ipsum', 'pending', 2256, 0),
(37, 4, '2019-06-13', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 'Lorem ipsum dolor', 'pending', 1763, 0),
(38, 4, '2019-06-26', 1, 'Lorem ipsum dolor sit amet,', 'Lorem ipsum dolor', 'Disetujui', 1524, 4),
(39, 4, '2019-05-31', 3, 'Lorem ipsum dolor sit amet,', 'Lorem ipsum', 'Disetujui', 4485, 7),
(40, 4, '2019-05-24', 2, 'Lorem ipsum', 'Lorem ipsum dolor', 'Disetujui', 1486, 10),
(41, 4, '2019-05-22', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum', 'Disetujui', 698, 7),
(42, 4, '2019-06-12', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', 'Lorem ipsum', 'Disetujui', 3375, 10),
(43, 4, '2019-05-17', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adip', 'Lorem ipsum', 'Disetujui', 3597, 6),
(44, 4, '2019-06-04', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur', 'Lorem ipsum dolor', 'Disetujui', 1776, 1),
(45, 4, '2019-06-08', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 'Lorem', 'Disetujui', 2323, 4),
(46, 4, '2019-05-31', 3, 'Lorem ipsum dolor sit amet, consectetuer', 'Lorem', 'Disetujui', 4028, 8),
(47, 4, '2019-06-20', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adip', 'Lorem ipsum dolor', 'pending', 1026, 0),
(48, 4, '2019-06-25', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem', 'pending', 1222, 0),
(49, 4, '2019-06-05', 3, 'Lorem ipsum dolor sit', 'Lorem ipsum dolor', 'Disetujui', 4323, 5),
(50, 4, '2019-07-02', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', 'Lorem ipsum', 'pending', 763, 0),
(51, 4, '2019-06-12', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor', 'Disetujui', 155, 8),
(52, 4, '2019-05-30', 1, 'Lorem ipsum dolor sit amet, consectetuer', 'Lorem ipsum dolor', 'pending', 4535, 0),
(53, 4, '2019-06-13', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 'Lorem ipsum dolor', 'Disetujui', 4258, 1),
(54, 4, '2019-06-01', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor', 'pending', 826, 0),
(55, 4, '2019-06-14', 2, 'Lorem ipsum', 'Lorem', 'Disetujui', 4540, 4),
(56, 4, '2019-06-12', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum', 'Disetujui', 3716, 2),
(57, 4, '2019-06-27', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 'Lorem ipsum', 'pending', 2432, 0),
(58, 4, '2019-05-24', 1, 'Lorem ipsum dolor sit', 'Lorem ipsum dolor', 'Disetujui', 605, 1),
(59, 4, '2019-05-17', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adip', 'Lorem ipsum dolor', 'Disetujui', 295, 7),
(60, 4, '2019-06-15', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur', 'Lorem', 'pending', 1030, 0),
(61, 4, '2019-06-23', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adip', 'Lorem', 'pending', 1024, 0),
(62, 4, '2019-07-03', 2, 'Lorem ipsum dolor sit', 'Lorem ipsum', 'Disetujui', 2528, 2),
(63, 4, '2019-06-04', 2, 'Lorem ipsum dolor', 'Lorem', 'pending', 3547, 0),
(64, 4, '2019-06-01', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem ipsum dolor', 'Disetujui', 1383, 7),
(65, 4, '2019-07-02', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 'Lorem ipsum dolor', 'pending', 3937, 0),
(66, 4, '2019-05-29', 3, 'Lorem ipsum dolor sit amet,', 'Lorem ipsum', 'Disetujui', 2809, 1),
(67, 4, '2019-06-03', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 'Lorem ipsum dolor', 'Disetujui', 810, 1),
(68, 4, '2019-06-01', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam adip', 'Lorem ipsum', 'Disetujui', 1361, 8),
(69, 4, '2019-05-23', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing', 'Lorem', 'pending', 3378, 0),
(70, 4, '2019-06-30', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 'Lorem ipsum', 'pending', 2143, 0),
(71, 4, '2019-06-20', 2, 'Lorem', 'Lorem', 'pending', 1383, 0),
(72, 4, '2019-07-02', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur', 'Lorem ipsum', 'pending', 2765, 0),
(73, 4, '2019-06-14', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 'Lorem ipsum dolor', 'Disetujui', 3974, 7),
(74, 4, '2019-05-21', 1, 'Lorem ipsum dolor sit amet,', 'Lorem ipsum dolor', 'pending', 3943, 0),
(75, 4, '2019-05-24', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing', 'Lorem ipsum dolor', 'pending', 628, 0),
(76, 4, '2019-05-25', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 'Lorem ipsum dolor', 'Disetujui', 2667, 8),
(77, 4, '2019-06-23', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing', 'Lorem ipsum', 'Disetujui', 4127, 5),
(78, 4, '2019-06-21', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', 'Lorem ipsum', 'pending', 1995, 0),
(79, 4, '2019-06-17', 3, 'Lorem ipsum', 'Lorem ipsum dolor', 'Disetujui', 3326, 10),
(80, 4, '2019-06-07', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 'Lorem', 'pending', 425, 0),
(81, 4, '2019-06-11', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur', 'Lorem ipsum', 'Disetujui', 1714, 8),
(82, 4, '2019-07-01', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 'Lorem', 'Disetujui', 4391, 7),
(83, 4, '2019-05-18', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor.', 'Lorem ipsum', 'Disetujui', 1507, 6),
(84, 4, '2019-06-10', 3, 'Lorem', 'Lorem ipsum dolor', 'pending', 863, 0),
(85, 4, '2019-05-18', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing', 'Lorem', 'Disetujui', 383, 1),
(86, 4, '2019-05-17', 1, 'Lorem ipsum dolor sit amet, consectetuer', 'Lorem', 'Disetujui', 399, 10),
(87, 4, '2019-07-04', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing', 'Lorem', 'pending', 389, 0),
(88, 4, '2019-06-10', 1, 'Lorem ipsum dolor sit amet,', 'Lorem ipsum dolor', 'pending', 1130, 0),
(89, 4, '2019-07-04', 1, 'Lorem ipsum dolor sit amet, consectetuer', 'Lorem ipsum', 'Disetujui', 1274, 7),
(90, 4, '2019-06-23', 1, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer aliquam', 'Lorem', 'Disetujui', 3043, 3),
(91, 4, '2019-06-30', 3, 'Lorem ipsum dolor sit amet,', 'Lorem ipsum', 'pending', 2970, 0),
(92, 4, '2019-05-26', 2, 'Lorem ipsum dolor', 'Lorem', 'Disetujui', 2278, 9),
(93, 4, '2019-06-04', 2, 'Lorem ipsum', 'Lorem', 'Disetujui', 3560, 3),
(94, 4, '2019-05-16', 2, 'Lorem ipsum dolor sit amet, consectetuer', 'Lorem', 'Disetujui', 1875, 8),
(95, 4, '2019-06-08', 1, 'Lorem', 'Lorem', 'pending', 2372, 0),
(96, 4, '2019-06-16', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed', 'Lorem ipsum', 'Disetujui', 3290, 10),
(97, 4, '2019-05-22', 2, 'Lorem ipsum dolor sit amet, consectetuer adipiscing', 'Lorem ipsum dolor', 'pending', 760, 0),
(98, 4, '2019-06-07', 3, 'Lorem', 'Lorem ipsum dolor', 'pending', 4407, 0),
(99, 4, '2019-05-28', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Curabitur sed tortor. Integer', 'Lorem', 'Disetujui', 2208, 6),
(100, 4, '2019-05-20', 3, 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Lorem', 'Disetujui', 736, 6);

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
  MODIFY `kinerjaId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
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
