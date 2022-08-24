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
-- Table structure for table `gtu_exam_fee`
--

CREATE TABLE `gtu_exam_fee` (
  `sn` bigint(10) NOT NULL,
  `student_name` varchar(40) DEFAULT NULL,
  `stream` varchar(30) DEFAULT NULL,
  `enrollment_no` bigint(20) DEFAULT NULL,
  `fee_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gtu_exam_fee`
--

INSERT INTO `gtu_exam_fee` (`sn`, `student_name`, `stream`, `enrollment_no`, `fee_status`) VALUES
(1, 'Kalp', 'Mechanical', 170140119090, 'done'),
(2, 'Sanket', 'Mechanical', 170140119091, 'done'),
(3, 'Divyesh', 'Electrical', 170140120063, 'pending'),
(4, 'Talha', 'Electrical', 170140120003, 'pending'),
(5, 'Tanay', 'Mechanical', 170140119023, 'done'),
(6, 'Abhinay', 'Mechanical', 170140119043, 'done'),
(7, 'Dixit', 'Mechanical', 170140119068, 'pending'),
(8, 'Ronak', 'Civil', 170140019068, 'pending'),
(9, 'Rushikesh', 'Civil', 170140019078, 'done'),
(10, 'Anirudhdha', 'Computer', 170140019066, 'done');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gtu_exam_fee`
--
ALTER TABLE `gtu_exam_fee`
  ADD PRIMARY KEY (`sn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
