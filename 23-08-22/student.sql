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
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `rollNO` bigint(10) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `std` int(10) DEFAULT NULL,
  `marks` bigint(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rollNO`, `name`, `gender`, `std`, `marks`) VALUES
(22, 'Sanket', 'male', 11, 78),
(23, 'Rakesh', 'male', 10, 78),
(24, 'Ramesh', 'male', 9, 88),
(26, 'Rohini', 'female', 9, 68),
(28, 'Roshani', 'female', 10, 78),
(29, 'Hiten', 'male', 10, 75),
(31, 'Suhasini', 'female', 11, 75),
(34, 'Kinjal', 'female', 9, 80),
(35, 'Savan', 'male', 9, 70),
(36, 'Jinal', 'female', 10, 79);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`rollNO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
