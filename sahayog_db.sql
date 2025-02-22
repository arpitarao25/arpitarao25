-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2024 at 03:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sahayog_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `feed` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`f_name`, `l_name`, `city`, `feed`) VALUES
('arpita', 'rao', 'mum', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `donation`
--

CREATE TABLE `donation` (
  `f_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `addr` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `pin_code` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donation`
--

INSERT INTO `donation` (`f_name`, `email`, `addr`, `city`, `state`, `pin_code`) VALUES
('arpita', 'arpitarao@gmail.com', 'vrindavan', 'thane', 'maharashtra', 400601),
('nirmiti parkhe', 'nirmitiparkhe@gmail.com', 'kalwa', 'thane', 'maharashtra', 400601);

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `name` varchar(30) NOT NULL,
  `age` int(30) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `help` varchar(30) NOT NULL,
  `addr` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`name`, `age`, `gender`, `help`, `addr`, `state`) VALUES
('arpita', 20, 'on', '1', 'vrindavan', 'maharashtra'),
('manas', 20, 'on', '2', 'lodha ', 'maharashtra');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `usr_nm` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL COMMENT 'state'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`usr_nm`, `pwd`) VALUES
('arpita', 'arp');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `age` int(30) NOT NULL,
  `p_no` int(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `psd` varchar(30) NOT NULL,
  `re_psd` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `f_name`, `age`, `p_no`, `email`, `psd`, `re_psd`) VALUES
(1, 'Manas', 20, 0, 'manasyelkar16@gmail.com', 'mansi123', 'mansi1232'),
(2, 'arpita', 22, 1231231231, 'arpita.rao@gmail.com', 'appu123', 'appu123'),
(4, 'arpita', 22, 1231231231, 'arpita.rao@gmail.com', 'appu123', 'appu123'),
(5, 'Manas', 20, 1231231231, 'manas.yelkar@gmail.com', 'mansi123', 'mansi1232');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
