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
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(10) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `works` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `age`, `gender`, `works`) VALUES
(5610, 'Sanket', '22', 'male', 'PHP Developer'),
(2130, 'Rahul', '32', 'male', 'QA'),
(2312, 'Vasu', '24', 'male', 'React Developer'),
(2912, 'Sweta', '18', 'female', 'Frontend Developer'),
(2323, 'Suhasini', '24', 'female', 'Project Cordinator'),
(4039, 'Arvind', '20', 'male', 'React Developer'),
(2190, 'Rohit', '30', 'male', 'Android Developer'),
(1212, 'Ramesh', '20', 'male', 'Flutter Developer'),
(4590, 'Sagar', '24', 'male', 'Angular Developer'),
(4534, 'Ronak', '34', 'male', 'PHP Developer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
