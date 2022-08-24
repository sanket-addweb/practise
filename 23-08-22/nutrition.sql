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
-- Table structure for table `nutrition`
--

CREATE TABLE `nutrition` (
  `sn` bigint(10) NOT NULL,
  `product_name` varchar(40) DEFAULT NULL,
  `carbohydrates` varchar(10) DEFAULT NULL,
  `protein` varchar(10) DEFAULT NULL,
  `fats` varchar(10) DEFAULT NULL,
  `price_rupees` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nutrition`
--

INSERT INTO `nutrition` (`sn`, `product_name`, `carbohydrates`, `protein`, `fats`, `price_rupees`) VALUES
(1, 'mug dal', '10g', '14g', '30g', 5),
(2, 'tameto wafer', '20g', '10g', '34g', 10),
(3, 'masala wafer', '20g', '10g', '34g', 10),
(4, 'sev mamara', '10g', '6g', '25g', 5),
(5, 'gathiya', '22g', '10g', '30g', 10),
(6, 'ratalami sev', '14g', '10g', '24g', 5),
(7, 'chana dal', '18g', '8g', '30g', 10),
(8, 'farali chevado', '20g', '15g', '24g', 10),
(9, 'alu sev', '24g', '13g', '30g', 10),
(10, 'sing bhujiya', '20g', '10g', '25g', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nutrition`
--
ALTER TABLE `nutrition`
  ADD PRIMARY KEY (`sn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
