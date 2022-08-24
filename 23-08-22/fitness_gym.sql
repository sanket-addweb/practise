-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2022 at 09:26 AM
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
-- Table structure for table `fitness_gym`
--

CREATE TABLE `fitness_gym` (
  `sn` bigint(10) NOT NULL,
  `customerName` varchar(40) DEFAULT NULL,
  `age` int(10) DEFAULT NULL,
  `servicesUse` varchar(25) DEFAULT NULL,
  `areaFromComming` varchar(40) DEFAULT 'Satlasana',
  `paymentStatus` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fitness_gym`
--

INSERT INTO `fitness_gym` (`sn`, `customerName`, `age`, `servicesUse`, `areaFromComming`, `paymentStatus`) VALUES
(1, 'Rohan', 22, 'cycling', 'kothasana', 'pending'),
(2, 'Sanket', 22, 'cycling', 'Satlasana', 'Done'),
(3, 'Anil', 22, 'steppers', 'vav', 'pending'),
(4, 'Kishan', 32, 'Rowers', 'Sartanpur', 'pending'),
(5, 'Mohamadd', 24, 'Treadmills', 'Sartanpur', 'Done'),
(6, 'Dhaval', 25, 'Watt Bikes', 'Satlasana', 'Done'),
(7, 'Chintu', 29, 'Rowers', 'Vav', 'pending'),
(8, 'Lokesh', 24, 'steppers', 'Bhalusana', 'pending'),
(9, 'Mukesh', 26, 'Cycling', 'Satlasana', 'pending'),
(10, 'Ravindra', 28, 'Steppper', 'Satlasana', 'Done');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fitness_gym`
--
ALTER TABLE `fitness_gym`
  ADD PRIMARY KEY (`sn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
