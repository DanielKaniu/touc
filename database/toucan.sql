-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2022 at 05:27 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toucan`
--

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `member` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='{"cx":1050,"cy":854}';

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`member`, `name`, `email`, `school`) VALUES
(1, 'Daniel Kaniu', 'danielkaniuke@gmail.com', '0'),
(2, 'Hallelujah', 'halle@gmail.com', '0'),
(3, 'Daniel Kaniu', 'danielkaniuke@gmail.com', 'Kaniu Coding Academy'),
(4, 'Hallelujah Tech', 'hallelujahke@gmail.com', 'Hallelujah Techub'),
(5, 'Hallelujah Tech', 'hallelujahke@gmail.com', 'Hallelujah Techub'),
(6, 'Hallelujah Tech', 'hallelujahke@gmail.com', 'Hallelujah Techub'),
(7, 'Hallelujah Tech', 'hallelujahke@gmail.com', 'Hallelujah Techub'),
(8, 'Hallelujah Tech', 'hallelujahke@gmail.com', 'Hallelujah Techub'),
(9, 'Hallelujah Tech', 'hallelujahke@gmail.com', 'Hallelujah Techub'),
(10, 'Hallelujah Tech', 'hallelujahke@gmail.com', 'Hallelujah Techub'),
(11, 'Hallelujah Tech', 'hallelujahke@gmail.com', 'Hallelujah Techub'),
(12, 'Hallelujah Tech', 'hallelujahke@gmail.com', 'Hallelujah Techub'),
(13, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(14, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(15, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(16, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(17, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(18, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(19, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(20, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(21, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(22, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(23, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(24, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(25, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(26, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(27, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(28, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(29, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(30, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(31, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(32, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(33, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(34, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(35, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(36, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(37, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(38, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(39, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(40, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(41, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(42, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(43, 'Daniel Kaniu', 'danielkaniuke@gmail.com', 'Daniel Kaniu Tech Hub'),
(44, 'Daniel Kaniu', 'danielkaniuke@gmail.com', 'Daniel Kaniu Tech Hub'),
(45, 'Daniel Kaniu', 'danielkaniuke@gmail.com', 'Daniel Kaniu Tech Hub'),
(46, 'Daniel Kaniu', 'danielkaniuke@gmail.com', 'Daniel Kaniu Tech Hub'),
(47, 'Daniel Kaniu', 'danielkaniuke@gmail.com', 'Daniel Kaniu Tech Hub'),
(48, 'Daniel Kaniu', 'danielkaniuke@gmail.com', 'Daniel Kaniu Tech Hub'),
(49, 'Daniel Kaniu', 'danielkaniuke@gmail.com', 'Daniel Kaniu Tech Hub'),
(50, 'Daniel Kaniu', 'danielkaniuke@gmail.com', 'Daniel Kaniu Tech Hub'),
(51, 'Dan Kaniu', 'kaniu@gmail.com', 'Hallelujah Techub'),
(52, 'Dan Kaniu', 'kaniu@gmail.com', 'Hallelujah Techub'),
(53, 'Dan Kaniu', 'kaniu@gmail.com', 'Hallelujah Techub'),
(54, 'Dan Kaniu', 'kaniu@gmail.com', 'Daniel Kaniu Tech Hub'),
(55, 'Dan Kaniu', 'kaniu@gmail.com', 'Daniel Kaniu Tech Hub'),
(56, 'Dan Kaniu', 'kaniu@gmail.com', 'Daniel Kaniu Tech Hub'),
(57, 'Dan Kaniu', 'kaniu@gmail.com', 'Hallelujah Techub'),
(58, 'code', 'a@gmail.com', 'Hallelujah Techub'),
(59, 'Dan Kaniu', 'kaniu@gmail.com', 'Daniel Kaniu Tech Hub'),
(60, 'Dan Kaniu', 'kaniu@gmail.com', 'Daniel Kaniu Tech Hub'),
(61, 'Dan Kaniu', 'kaniu@gmail.com', 'Daniel Kaniu Tech Hub'),
(62, 'Dan Kaniu', 'kaniu@gmail.com', 'Daniel Kaniu Tech Hub'),
(63, 'Dan Kaniu', 'kaniu@gmail.com', 'Hallelujah Techub'),
(64, 'Dan Kaniu', 'kaniu@gmail.com', 'Hallelujah Techub'),
(65, '', '', ''),
(66, '', '', ''),
(67, '', '', ''),
(68, '', '', ''),
(69, 'Dan Kaniu', 'kaniu@gmail.com', 'Hallelujah Techub'),
(70, 'Dan', 'kaniu@gmail.com', 'Hallelujah Techub'),
(71, 'Dan Kaniu', 'kaniu@gmail.com', 'Hallelujah Techub'),
(72, 'Hallelujah Tech', 'hallelujahke@gmail.com', 'Hallelujah Techub'),
(73, 'Hallelujah Tech', 'hallelujahke@gmail.com', 'Daniel Kaniu Tech Hub'),
(74, 'Dan Kaniu', 'kaniu@gmail.com', 'Hallelujah Techub');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school` int NOT NULL,
  `name` varchar(50) NOT NULL,
  `member` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COMMENT='{"cx":"716","cy":"847"}';

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school`, `name`, `member`) VALUES
(3, 'Hallelujah Techub', 1),
(4, 'Daniel Kaniu Tech Hub', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school`),
  ADD UNIQUE KEY `id` (`name`),
  ADD KEY `member_school` (`member`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `member` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `school`
--
ALTER TABLE `school`
  ADD CONSTRAINT `member_school` FOREIGN KEY (`member`) REFERENCES `member` (`member`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
