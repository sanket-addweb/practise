-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2022 at 09:25 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_11`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `sn` bigint(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `contact` varchar(14) DEFAULT NULL,
  `orderNo` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`sn`, `name`, `age`, `contact`, `orderNo`) VALUES
(1, 'Rajesh', '35', '98232424', '2343'),
(2, 'Mohita', '19', '923432424', '2122'),
(3, 'Mitesh', '25', '923424524', '9878'),
(4, 'Jyoti', '23', '99234435', '2378'),
(5, 'Manoj', '45', '99223245', '2848'),
(6, 'Sanjay', '34', '993563245', '8947'),
(7, 'Dolika', '21', '934345545', '3427'),
(8, 'Dhananjay', '26', '932384535', '2370'),
(9, 'Rushikesh', '30', '932235535', '8923'),
(10, 'Govind', '23', '932243232', '8431');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`sn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
