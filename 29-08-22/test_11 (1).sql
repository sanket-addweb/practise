-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 30, 2022 at 09:01 AM
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

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_CountEmp` (INOUT `totalEmp` INT(10), IN `works1` VARCHAR(49))   begin select works,count(id) into totalEmp from empDetail where works=works1; end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_CountEmpByWorks_Inout` (INOUT `totalEmp` INT(10), IN `works1` VARCHAR(49))   begin select count(id) into totalEmp from empDetail where works=works1; end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_CountEmpWorks_Inout` (INOUT `totalEmp` INT(10), IN `works1` VARCHAR(49))   begin select works,count(id) into totalEmp from empDetail where works=works1; end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_CountEmp_inout` (INOUT `totalEmp` INT, IN `underManager1` VARCHAR(49))   begin
select count(id) into totalEmp from empDetail where underManager=underManager1; 
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_CountNumEmp` (OUT `totalEmp` INT(9))   begin
select count(id), departNo from empDetail where departNo=12;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_GetEmp` ()   begin
select id, name, works, departNo from empDetail;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_GetEmpByDepartNo` (IN `departNo1` BIGINT(9))   begin 
select id,name, departNo from empDetail where departNo=departNo1;
end$$

DELIMITER ;

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

-- --------------------------------------------------------

--
-- Table structure for table `empDetail`
--

CREATE TABLE `empDetail` (
  `id` int(11) NOT NULL,
  `name` varchar(49) DEFAULT NULL,
  `city` varchar(59) DEFAULT NULL,
  `works` varchar(49) DEFAULT NULL,
  `salary` bigint(10) DEFAULT NULL,
  `departNo` bigint(10) DEFAULT NULL,
  `underManager` varchar(49) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `empDetail`
--

INSERT INTO `empDetail` (`id`, `name`, `city`, `works`, `salary`, `departNo`, `underManager`) VALUES
(1201, 'Jigar', 'Ahmedabad', 'Manager', 14000, 12, NULL),
(1203, 'Rahul', 'Ahmedabad', 'designer', 20000, 12, 'Jigar'),
(1212, 'Mukesh', 'Ahmedabad', 'salesman', 10000, 12, 'Jigar'),
(1213, 'Ramesh', 'Ahmedabad', 'clerk', 12000, 12, 'Jigar'),
(1311, 'Mohit', 'Surat', 'designer', 16000, 14, 'Jigar'),
(1312, 'Lokesh', 'Surat', 'clerk', 13000, 14, 'Jigar'),
(1313, 'Yogesh', 'Surat', 'salesman', 11000, 14, 'Jigar'),
(1401, 'Rohit', 'Ahmedabad', 'Manager', 16000, 16, NULL),
(1403, 'Bhavesh', 'Ahmedabad', 'salesman', 12000, 16, 'Rohit'),
(1405, 'Janak', 'Ahmedabad', 'Designer', 15000, 16, 'Rohit'),
(1407, 'Manoj', 'Ahmedabad', 'clerk', 14000, 16, 'Rohit'),
(1503, 'Ragu', 'Vadodara', 'clerk', 18000, 18, 'Rohit'),
(1504, 'Ramesh', 'Vadodara', 'designer', 20000, 18, 'Rohit'),
(1505, 'Rakesh', 'vadodara', 'salesman', 14000, 18, 'Rohit'),
(1601, 'Sanket', 'Mahesana', 'Manager', 20000, 20, NULL),
(1603, 'Rahul', 'Mahesana', 'salesman', 11000, 20, 'Sanket'),
(1605, 'Mehul', 'Mahesana', 'Designer', 16000, 20, 'Sanket'),
(1610, 'Roshan', 'Mahesana', 'clerk', 14000, 20, 'Sanket'),
(1721, 'Mahesh', 'Mahesana', 'Designer', 1229, 20, 'Sanket'),
(1722, 'Ankit', 'Mahesana', 'Designer', 1244, 20, 'Sanket');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(10) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `age` varchar(10) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `works` varchar(50) DEFAULT NULL,
  `salaryPerMonth` bigint(10) DEFAULT NULL,
  `timeDuration` bigint(10) DEFAULT NULL,
  `commision` bigint(10) DEFAULT NULL,
  `departmentNo` bigint(10) DEFAULT NULL,
  `join_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `age`, `gender`, `works`, `salaryPerMonth`, `timeDuration`, `commision`, `departmentNo`, `join_date`) VALUES
(1212, 'Ramesh', '20', 'male', 'Flutter Developer', 12000, 6, NULL, 14, '2016-08-09'),
(1290, 'Raxit', '26', 'male', 'Drawing', 14000, 2, 1000, 18, '2020-02-22'),
(2124, 'Abhi', '25', 'male', 'manager', 11000, 5, 2300, 17, '2017-03-01'),
(2130, 'Rahul', '32', 'male', 'QA', 12000, 2, 2200, 18, '2020-08-06'),
(2190, 'Rohit', '30', 'male', 'Android Developer', 10000, 4, 2100, 15, '2018-08-03'),
(2312, 'Vasu', '24', 'male', 'clerk', 13000, 5, 1400, 12, '2017-08-01'),
(2323, 'Suhasini', '24', 'female', 'salesman', 14000, 1, NULL, 12, '2021-08-11'),
(2345, 'Ravi', '43', 'male', 'Drawing', 28000, 8, 2000, 12, '2014-06-02'),
(2389, 'Mohit', '28', 'male', 'clerk', 18000, 3, 2100, 18, '2020-04-01'),
(2394, 'Ramesh', '25', 'male', 'clerk', 18000, 3, 2100, 18, '2020-03-01'),
(2489, 'Yogesh', '27', 'male', 'Drawing', 12000, 4, 2300, 16, '2018-02-01'),
(2912, 'Sweta', '18', 'female', 'Analyst', 11000, 3, NULL, 18, '2020-08-13'),
(4039, 'Arvind', '20', 'male', 'clerk', 11000, 6, 1100, 14, '2016-08-04'),
(4333, 'Uvesh', '29', 'male', 'Analyst', 13000, 4, 1000, 12, '2018-08-22'),
(4534, 'Ronak', '34', 'male', 'Manager', 18000, 2, NULL, 14, '2020-08-05'),
(4590, 'Sagar', '24', 'male', 'Manager', 28000, 5, NULL, 15, '2017-08-02'),
(5610, 'Sanket', '22', 'male', 'Drawing', 14000, 3, NULL, 14, '2020-08-13'),
(5673, 'Anirudhdha', '28', 'male', 'manager', 21000, 4, 2300, 16, '2018-03-01'),
(6190, 'Rohit', '25', 'male', 'Analyst', 18000, 6, 1000, 12, '2016-08-22'),
(6223, 'Sanket', '25', 'male', 'Analyst', 14000, 5, 2000, 12, '2017-08-22'),
(6290, 'Mukesh', '25', 'male', 'Drawing', 18000, 6, 1000, 12, '2016-02-22'),
(8230, 'Rakesh', '22', 'male', 'clerk', 14000, 5, 1400, 17, '2017-04-01'),
(8537, 'Roshan', '35', 'male', 'Salesman', 18000, 3, 2000, 15, '2020-05-09'),
(8547, 'Mohan', '35', 'male', 'Salesman', 18000, 4, 2000, 14, '2016-06-09'),
(8557, 'Mahi', '30', 'male', 'Salesman', 12000, 2, 1000, 18, '2021-05-09'),
(8580, 'Himanshu', '29', 'male', 'Salesman', 13000, 4, 1200, 20, '2018-01-01'),
(8589, 'Rushikesh', '32', 'male', 'Salesman', 11000, 1, 1000, 19, '2021-01-09'),
(8690, 'Setu', '29', 'female', 'Salesman', 14000, 4, 1000, 19, '2018-04-01'),
(8790, 'Shruti', '22', 'female', 'clerk', 14000, 4, 1000, 19, '2018-04-01'),
(9021, 'Mahendra', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-30'),
(9111, 'Rajendra ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-01-31'),
(9212, 'Manoj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-12'),
(9213, 'Rahul', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-12'),
(9214, 'Rahul', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-08-29'),
(9215, 'Raman', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2021-08-30');

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

-- --------------------------------------------------------

--
-- Table structure for table `hospitalBirth`
--

CREATE TABLE `hospitalBirth` (
  `id` int(10) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `dotime` time DEFAULT NULL,
  `dat` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitalBirth`
--

INSERT INTO `hospitalBirth` (`id`, `name`, `dob`, `dotime`, `dat`) VALUES
(1, 'sanket', '1999-09-02', '01:34:12', '1999-09-02 01:34:12'),
(2, 'Mahesh', '2022-08-25', '11:08:34', '2022-08-25 11:08:34');

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
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `empDetail`
--
ALTER TABLE `empDetail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fitness_gym`
--
ALTER TABLE `fitness_gym`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `gtu_exam_fee`
--
ALTER TABLE `gtu_exam_fee`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `hospitalBirth`
--
ALTER TABLE `hospitalBirth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nutrition`
--
ALTER TABLE `nutrition`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`orderNo`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`orderNo`);

--
-- Indexes for table `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`homeNo`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`rollNO`);

--
-- Indexes for table `train_arrival`
--
ALTER TABLE `train_arrival`
  ADD PRIMARY KEY (`sn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hospitalBirth`
--
ALTER TABLE `hospitalBirth`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
