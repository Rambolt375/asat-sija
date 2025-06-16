-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2025 at 11:21 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asat_10sija`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(20) NOT NULL,
  `nama_belakang` varchar(30) NOT NULL,
  `tentang` varchar(100) NOT NULL,
  `profesi` varchar(100) NOT NULL,
  `deskripsi_profesi` varchar(150) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `website` text NOT NULL,
  `gelar` varchar(30) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `freelance` text NOT NULL,
  `keterangan_about` varchar(255) NOT NULL,
  `keterangan_skill` varchar(100) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `url_hero` varchar(255) NOT NULL,
  `url_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `nama_depan`, `nama_belakang`, `tentang`, `profesi`, `deskripsi_profesi`, `tgl_lahir`, `website`, `gelar`, `hp`, `email`, `kota`, `freelance`, `keterangan_about`, `keterangan_skill`, `skill`, `url_hero`, `url_foto`) VALUES
(21, 'Clint', 'Maxwell', 'F1 driver for Rambolt Racing', 'F1 Driver', 'Drive fast in a track-focused car', '2009-04-23', 'clint.com', 'Bachelor', '8756214965', 'studioseries78@gmail.com', 'Manhattan', 'No', 'Currently got promoted to Red Bull Racing replacing Liam Lawson. Alongside 4 time World Champion, Max Verstappen racing for Red Bull Racing.', 'I got some programming skill prior to my education. Mostly my skill revolve around web building. For', 'HTML,100%, PHP,90%, CSS,90%, JS,90%, SQL,98%, VB.Net,70%', 'upload/reb-bull.jpg', 'upload/face8.jpg'),
(22, 'Yuki ', 'Tsunoda', 'F1 driver for Red Bull Racing', 'F1 Driver', 'Drive fast in a track-focused car', '2000-05-11', 'tsunoda-sushi.com', 'Bachelor', '84548848888', 'tsunoda0511@gmail.com', 'Sagimahara', 'Avalaible', 'Currently got promoted to Red Bull Racing replacing Liam Lawson. Alongside 4 time World Champion, Max Verstappen racing for Red Bull Racing.', 'I got some programming skill prior to my education. Mostly my skill revolve around web building.', 'HTML,100%, PHP,90%, CSS,90%, JS,90%, SQL,98%, VB.Net,70%', 'upload/reb-bull.jpg', 'upload/yuki.jpg'),
(23, 'Clint', 'Maxwell', 'F1 driver for Red Bull Racing', 'Racer', 'Drive fast in a track-focused car', '2025-06-04', 'clint.com', 'bachelor', '8756214965', 'studioseries78@gmail.com', 'Manhattan', 'Avalaible', 'Currently got promoted to Red Bull Racing replacing Liam Lawson. Alongside 4 time World Champion, Max Verstappen racing for Red Bull Racing.', 'I got some programming skill prior to my education. Mostly my skill revolve around web building. For', 'HTML,100%, PHP,90%, CSS,90%, JS,90%, SQL,98%, VB.Net,70%', 'upload/reb-bull.jpg', 'upload/yuki.jpg'),
(24, 'Clint', 'Maxwell', 'F1 driver for Red Bull Racing', 'Racer', 'Drive fast in a track-focused car', '2025-06-04', 'clint.com', 'bachelor', '8756214965', 'studioseries78@gmail.com', 'Manhattan', 'Avalaible', 'Currently got promoted to Red Bull Racing replacing Liam Lawson. Alongside 4 time World Champion, Max Verstappen racing for Red Bull Racing.', 'I got some programming skill prior to my education. Mostly my skill revolve around web building. For', 'HTML,100%, PHP,90%, CSS,90%, JS,90%, SQL,98%, VB.Net,70%', 'upload/reb-bull.jpg', 'upload/yuki.jpg'),
(25, 'Clint', 'Maxwell', 'F1 driver for Red Bull Racing', 'Racer', 'Drive fast in a track-focused car', '2025-06-04', 'clint.com', 'bachelor', '8756214965', 'studioseries78@gmail.com', 'Manhattan', 'Avalaible', 'Currently got promoted to Red Bull Racing replacing Liam Lawson. Alongside 4 time World Champion, Max Verstappen racing for Red Bull Racing.', 'I got some programming skill prior to my education. Mostly my skill revolve around web building. For', 'HTML,100%, PHP,90%, CSS,90%, JS,90%, SQL,98%, VB.Net,70%', 'upload/reb-bull.jpg', 'upload/yuki.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(11) NOT NULL,
  `deskripsi_kontak` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `peta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `deskripsi_kontak`, `alamat`, `peta`) VALUES
(8, 'sddbdbb', 'sbsbbs', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8491.064796610717!2d106.80593942930398!3d-6.5120808101440515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c315bb3499d3%3A0x2e68b53efce493ee!2sRUMAH%20SAKIT%20ISLAM%20AYSHA!5e0!3m2!1sid!2sid!4v1749892829726!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(9, 'MI', 'MI', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d8491.064796610717!2d106.80593942930398!3d-6.5120808101440515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c315bb3499d3%3A0x2e68b53efce493ee!2sRUMAH%20SAKIT%20ISLAM%20AYSHA!5e0!3m2!1sid!2sid!4v1749892829726!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(10, 'Oscar Piastri\'s Contact', 'Melbourne, Victoria, Australia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d402590.5159806983!2d144.72350481426722!3d-37.971565228009894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20Victoria%2C%20Australia!5e0!3m2!1sid!2sid!4v1749962957919!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(11, 'Yuki Tsunoda Personal Contact', 'Sagamihara, Kanagawa, Japan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d402590.5159806983!2d144.72350481426722!3d-37.971565228009894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20Victoria%2C%20Australia!5e0!3m2!1sid!2sid!4v1749962957919!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(12, 'Yuki Tsunoda Personal Contact', 'Sagamihara, Kanagawa, Japan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d402590.5159806983!2d144.72350481426722!3d-37.971565228009894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20Victoria%2C%20Australia!5e0!3m2!1sid!2sid!4v1749962957919!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(13, 'Clint Maxwell Personal Contact', 'Jakarta, Indonesia', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d402590.5159806983!2d144.72350481426722!3d-37.971565228009894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20Victoria%2C%20Australia!5e0!3m2!1sid!2sid!4v1749962957919!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(14, 'Yuki Tsunoda Personal Contact', 'Sagamihara, Kanagawa, Japan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d402590.5159806983!2d144.72350481426722!3d-37.971565228009894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20Victoria%2C%20Australia!5e0!3m2!1sid!2sid!4v1749962957919!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(15, 'Yuki Tsunoda Personal Contact', 'Sagamihara, Kanagawa, Japan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d402590.5159806983!2d144.72350481426722!3d-37.971565228009894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20Victoria%2C%20Australia!5e0!3m2!1sid!2sid!4v1749962957919!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>'),
(16, 'Yuki Tsunoda Personal Contact', 'Sagamihara, Kanagawa, Japan', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d402590.5159806983!2d144.72350481426722!3d-37.971565228009894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20Victoria%2C%20Australia!5e0!3m2!1sid!2sid!4v1749962957919!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `nama_pengirim` varchar(30) NOT NULL,
  `email_pengirim` varchar(100) NOT NULL,
  `judul_pesan` varchar(100) NOT NULL,
  `pesan` text NOT NULL,
  `tgl_pesan` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id`, `nama_pengirim`, `email_pengirim`, `judul_pesan`, `pesan`, `tgl_pesan`) VALUES
(4, 'kira', 'studioseries78@gmail.com', 'GP', 'idk mate just win', '2025-06-15 14:08:07'),
(5, 'Aiden Jackson', 'jackson@konnersport.com', 'Debrief Info', 'Such an embarrassing performance today. Bad luck, huh? Anyway Debrief was cancelled until tomorrow because there is some sort of problem in the paddock right now. Enjoy your free time. Ciao.', '2025-06-15 16:14:27'),
(6, 'Yuki Tsunoda', 'tsunoda0511@gmail.com', 'Debrief Info', 'Idk what happened the car feels wrong', '2025-06-16 10:45:54'),
(7, 'Oscar Piastri-Leclerc', 'studioseries78@gmail.com', 'GP', ',fu,yu,uy,,uyu,', '2025-06-16 11:00:15'),
(8, 'kira', 'studioseries78@gmail.com', 'Debrief Info', 'h', '2025-06-16 11:09:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`,`nama_depan`),
  ADD KEY `website` (`website`(100),`freelance`(50));

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
