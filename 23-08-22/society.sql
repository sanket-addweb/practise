-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2022 at 09:27 AM
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
-- Table structure for table `society`
--

CREATE TABLE `society` (
  `homeNo` bigint(10) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `occupation` varchar(30) DEFAULT NULL,
  `day_of_security` varchar(20) DEFAULT NULL,
  `avaibility` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`homeNo`, `name`, `occupation`, `day_of_security`, `avaibility`) VALUES
(8, 'vishal', 'Shopkeeper', 'Friday', 'yes'),
(12, 'Mohit', 'Business', 'Monday', 'yes'),
(13, 'Aayush', 'Social Worker', 'Tuesday', 'no'),
(14, 'Rohit', 'Freelance', 'Tuesday', 'yes'),
(15, 'Parixit', 'Designer', 'wednesday', 'yes'),
(16, 'Rakesh', 'Artist', 'Tursday', 'yes'),
(18, 'Govind', 'Builder', 'Friday', 'no'),
(19, 'Yogesh', 'Artist', 'Saturday', 'yes'),
(20, 'Lokesh', 'Worker', 'Sunday', 'yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`homeNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
