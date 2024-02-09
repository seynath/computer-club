-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2023 at 02:20 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myfirstdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `department` varchar(30) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`name`, `email`, `department`, `id`) VALUES
('bdgn b', 'ugcseynaththenura@gmail.com', 'CS', 1),
('bdgn b', 'ugcseynaththenura@gmail.com', 'CS', 2),
('bdgn bgggg', 'ugcseynaththenura@gmail.com', 'CS', 3),
('fb x', 'thenura-im20102@stu.kln.ac.lk', 'CS', 4),
('fv', 'fbb@hh.com', 'IT', 5),
('jbmb', 'thenura-im20102@stu.kln.ac.lk', 'IM', 6),
('aaaaaaaaaa', 'AAAAAAAAAAAAA@HHH.US', 'IT', 7),
('', '', 'SE', 8),
('', '', 'SE', 9),
('', '', 'SE', 10);

-- --------------------------------------------------------

--
-- Table structure for table `uokmember`
--

CREATE TABLE `uokmember` (
  `usersId` int(12) NOT NULL,
  `usersName` varchar(200) NOT NULL,
  `usersEmail` varchar(50) NOT NULL,
  `usersUid` varchar(16) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `uokmember`
--

INSERT INTO `uokmember` (`usersId`, `usersName`, `usersEmail`, `usersUid`, `usersPwd`) VALUES
(1, 'sena2', 'thenura-im20102@stu.kln.ac.lk', 'senaa', '$2y$10$1PV6W8l./'),
(2, 'sena1', 'ugcseynaththenura@gmail.com', 'senath', '$2y$10$2XvCf/rbf'),
(3, 'sena12', 'ugcseynaththesnura@gmail.com', 'senathe', '$2y$10$fjhuQ4lAY'),
(4, 'seynath', 'seynath@gmail.com', 'seynath', '$2y$10$Ovl8F2Epd'),
(5, 'lonath11', 'lonath@gmal.com', 'lonath', '$2y$10$FEKtg7C.ZPL7S3iCJwtDgOBQqmvAUR5MyZZxVX5jcrzwGWqowAjpe'),
(6, 'sena23', 'wwwthenura-im20102@stu.kln.ac.lk', 'look222', '$2y$10$PxrW.JPV5kUqR8C9vp/cU.QplHHZg2Rib8hPO3i3AVCS1ermrhKa.'),
(7, 'sriyani', 'sriyani@gmail.com', 'sriyani', '$2y$10$lQeCzP57BTRkHmm8j0opNurwKkIk/daxxvafOzT5cGF9ZYMR5LKry');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uokmember`
--
ALTER TABLE `uokmember`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `uokmember`
--
ALTER TABLE `uokmember`
  MODIFY `usersId` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
