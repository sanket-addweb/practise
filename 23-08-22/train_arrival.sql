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
-- Table structure for table `train_arrival`
--

CREATE TABLE `train_arrival` (
  `sn` bigint(10) NOT NULL,
  `trainName` varchar(40) DEFAULT NULL,
  `fromPlace` varchar(40) DEFAULT NULL,
  `toPlace` varchar(40) DEFAULT NULL,
  `platform` int(10) DEFAULT NULL,
  `arrival_minutes` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train_arrival`
--

INSERT INTO `train_arrival` (`sn`, `trainName`, `fromPlace`, `toPlace`, `platform`, `arrival_minutes`) VALUES
(1, 'Satabdi Express', 'Mumbai', 'Delhi', 2, 24),
(2, 'Garibrath', 'Porbandar', 'Mumbai', 1, 20),
(3, 'Virar shatal', 'Bharuch', 'virar', 4, 30),
(4, 'Vadodara memu', 'Surat', 'vadodara', 3, 39),
(5, 'Surat memu', 'Vadodara', 'Surat', 2, 45),
(6, 'Bharuch memu', 'Bharuch', 'Surat', 5, 50),
(7, 'Gujarat Express', 'Ahmedabad', 'Mumbai', 3, 20),
(8, 'Inercity Superfast Express', 'valsad', 'Vadodara', 2, 12),
(9, 'Double Decker superfast Express', 'Bandra', 'Delhi', 1, 18),
(10, 'Havada Express', 'Maisur', 'Ajamer', 4, 29);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `train_arrival`
--
ALTER TABLE `train_arrival`
  ADD PRIMARY KEY (`sn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
