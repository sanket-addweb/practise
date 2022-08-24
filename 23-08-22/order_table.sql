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
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `orderNo` bigint(10) NOT NULL,
  `customerName` varchar(40) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `lotSize` bigint(10) DEFAULT NULL,
  `deliveryStatus` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`orderNo`, `customerName`, `city`, `lotSize`, `deliveryStatus`) VALUES
(1212, 'Sagar', 'Ahmedabad', 23, 'done'),
(1297, 'Jignesh', 'Navasari', 23, 'done'),
(1343, 'Rahul', 'Surat', 24, 'pending'),
(2129, 'Setu', 'Ahmedabad', 20, 'pending'),
(2984, 'Mukesh', 'Bharuch', 30, 'pending'),
(3454, 'Manish', 'Surat', 22, 'done'),
(3984, 'Dhaval', 'Bharuch', 30, 'done'),
(7464, 'Yogesh', 'Mahesana', 20, 'pending'),
(7834, 'Abhinay', 'valsad', 24, 'done'),
(8843, 'Talha', 'valsad', 29, 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`orderNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
