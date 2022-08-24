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
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `orderNo` bigint(10) NOT NULL,
  `customerName` varchar(40) DEFAULT NULL,
  `contactNo` bigint(10) DEFAULT NULL,
  `item` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`orderNo`, `customerName`, `contactNo`, `item`, `date`) VALUES
(1232, 'Jayesh', 903423290, 'chinese', '10-03-22'),
(2122, 'Rahul', 812239449, 'Gujarati Dish', '29-03-22'),
(2322, 'Ganesh', 9053882449, 'Chinese', '08-04-22'),
(2362, 'Yogendra', 905385549, 'Gujarati Dish', '08-05-22'),
(2622, 'Sanket', 812822934, 'Panjabi Dish', '25-03-22'),
(2652, 'Ronak', 908822934, 'Gujarati Dish', '25-03-22'),
(3452, 'Dixit', 903422934, 'chinese', '15-03-22'),
(7242, 'Sagar', 9053422339, 'Punjabi Dish', '12-04-22'),
(7342, 'Lokesh', 903834639, 'Punjabi Dish', '20-04-22'),
(9872, 'Jigar', 903489239, 'Gujarati Dish', '10-04-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`orderNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
