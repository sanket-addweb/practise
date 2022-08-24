-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 24, 2022 at 09:24 AM
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
-- Database: `test-10`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `sr_no` int(11) NOT NULL,
  `name` text NOT NULL,
  `age` varchar(10) NOT NULL,
  `contact no` varchar(10) NOT NULL,
  `order no` varchar(11) NOT NULL,
  `quantity` varchar(20) NOT NULL,
  `state` varchar(25) NOT NULL,
  `Delivery date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`sr_no`, `name`, `age`, `contact no`, `order no`, `quantity`, `state`, `Delivery date`) VALUES
(1, 'Rajesh Prajapti', '34', '982328933', '2322', '2', 'Gujarat', '2022-08-24'),
(2, 'Mohita Khatri', '39', '98732366', '2121', '22', 'Maharastra', '2022-08-31'),
(3, 'Mitesh Patel', '21', '9823231113', '8976', '14', 'Gujarat', '2022-08-25'),
(4, 'Jyoti paramar', '23', '9323221113', '8756', '30', 'Delhi', '2022-08-26'),
(5, 'Manoj Prajapati', '43', '998434223', '2345', '89', 'Gujarat', '2022-08-26'),
(6, 'Sanjay Patel', '45', '98237323', '8947', '23', 'Goa', '2022-08-28'),
(7, 'Dolika Kanjariya', '34', '99743943', '3455', '34', 'Himachal pradesh', '2022-08-25'),
(8, 'Dananjay Prajapati', '42', '989273236', '2345', '74', 'Delhi', '2022-08-26'),
(9, 'Rushikesh Chauthari', '34', '98346346', '3422', '76', 'Maharastra', '2022-08-30'),
(10, 'Govind Patel', '34', '993743648', '8434', '32', 'Himachal pradesh', '2022-08-24');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `sr_no` int(11) NOT NULL,
  `name` text NOT NULL,
  `id` varchar(11) NOT NULL,
  `age` varchar(14) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `works` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`sr_no`, `name`, `id`, `age`, `gender`, `works`) VALUES
(1, 'Sanket prjapati', '5610', '22', 'male', 'PHP developer'),
(2, 'Rahul Parmar', '2122', '23', 'male', 'QA'),
(3, 'Vasu Prajapti', '2312', '24', 'male', 'React Developer'),
(4, 'Sweta Prajapti', '2324', '20', 'female', 'Fronted Developer'),
(5, 'Suhasini Suthar', '2323', '23', 'female', 'Project Cordinate'),
(6, 'Arvind Prjapati', '4039', '22', 'male', 'React developer'),
(7, 'Rohit Prajapati', '2190', '27', 'male', 'Android developer'),
(8, 'Ramesh Thokor', '1212', '35', 'male', 'Flutter developer'),
(9, 'Sagar Kanjariya', '4590', '23', 'male', 'Angular developer'),
(10, 'Ronak bharvad', '4334', '34', 'male', 'PHP developer');

-- --------------------------------------------------------

--
-- Table structure for table `fitness-gym`
--

CREATE TABLE `fitness-gym` (
  `sr_no` int(11) NOT NULL,
  `customer name` varchar(40) NOT NULL,
  `age` varchar(11) NOT NULL,
  `services use` varchar(50) NOT NULL,
  `area from comming` varchar(30) NOT NULL,
  `payment status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fitness-gym`
--

INSERT INTO `fitness-gym` (`sr_no`, `customer name`, `age`, `services use`, `area from comming`, `payment status`) VALUES
(1, 'Rohan', '23', 'Steppers', 'Vav', 'Done'),
(2, 'Anil', '20', 'Watt Bikes', 'Kothasana', 'Done'),
(3, 'Kishan', '18', 'Rowers', 'Sartanpur', 'Pending'),
(4, 'Mohamadd', '23', 'Steppers', 'Satlasana', 'Done'),
(5, 'Dhaval', '20', 'Treadmills', 'Kothasana', 'Done'),
(6, 'Chintu', '19', 'Rowers', 'Vav', 'Pending'),
(7, 'Rohan', '18', 'Cycling', 'Satlasana', 'Pending'),
(8, 'Lokesh', '22', 'Steppers', 'Bhalushana', 'Done'),
(9, 'Ravindra', '21', 'Treadmills', 'Satlasana', 'Pending'),
(10, 'Mukesh', '34', 'Cycling', 'Sartanpur', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `gtu-exam-fee`
--

CREATE TABLE `gtu-exam-fee` (
  `sr_no` int(11) NOT NULL,
  `student name` varchar(40) NOT NULL,
  `stream` varchar(25) NOT NULL,
  `semester` varchar(10) NOT NULL,
  `enrollment no` varchar(20) NOT NULL,
  `fee status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gtu-exam-fee`
--

INSERT INTO `gtu-exam-fee` (`sr_no`, `student name`, `stream`, `semester`, `enrollment no`, `fee status`) VALUES
(1, 'Kalp Rajkotiya', 'Mechanical', '6', '170140119091', 'done'),
(2, 'Sanket Prjapati', 'Mechanical', '6', '170140119091', 'done'),
(3, 'Divyesh Parmar', 'Electrical', '4', '17014012092', 'done'),
(4, 'Talha Ansari', 'Electrical Communication', '7', '17014012001', 'done'),
(5, 'Tanay Kapadiya', 'Mechanical', '6', '1701140119028', 'pending'),
(6, 'Abhinay Marya', 'Mechanical', '4', '17014012045', 'done'),
(7, 'Dixit Patel', 'Civil', '8', '17014012072', 'pending'),
(8, 'Aniruddha Patel', 'Computer science', '3', '17014012068', 'done'),
(9, 'Rushikesh Parmar', 'Electrical', '5', '17014012004', 'pending'),
(10, 'Ronak Bharvad', 'Civil', '4', '17014012006', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `nutrition`
--

CREATE TABLE `nutrition` (
  `sr_no` int(11) NOT NULL,
  `product name` varchar(40) NOT NULL,
  `carbohydrates` varchar(10) NOT NULL,
  `sodium` varchar(10) NOT NULL,
  `protein` varchar(10) NOT NULL,
  `fats` varchar(10) NOT NULL,
  `price in rupees` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nutrition`
--

INSERT INTO `nutrition` (`sr_no`, `product name`, `carbohydrates`, `sodium`, `protein`, `fats`, `price in rupees`) VALUES
(1, 'mug dal', '10g', '6g', '14g', '20g', '5'),
(2, 'tameto wafer', '20g', '10g', '18g', '25g', '10'),
(3, 'masala wafer', '20g', '10g', '13g', '30g', '10'),
(5, 'sev mamara', '10g', '13g', '13g', '24g', '5'),
(6, 'gathiya', '22g', '7g', '14g', '25g', '5'),
(7, 'ratalami sev', '14g', '10g', '18g', '30g', '10'),
(8, 'chana dal', '24g', '6g', '18g', '30g', '10'),
(9, 'farali chevado', '20g', '12g', '15g', '25g', '10'),
(10, 'Alu sev', '24g', '10g', '14g', '30g', '10'),
(11, 'sing mujiya', '20g', '7g', '8g', '19g', '5');

-- --------------------------------------------------------

--
-- Table structure for table `order-table`
--

CREATE TABLE `order-table` (
  `sr_no` int(11) NOT NULL,
  `customer name` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `order no` varchar(20) NOT NULL,
  `lot size` varchar(12) NOT NULL,
  `delivery status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order-table`
--

INSERT INTO `order-table` (`sr_no`, `customer name`, `city`, `order no`, `lot size`, `delivery status`) VALUES
(1, 'Sagar Patel', 'Ahmedabad', '9878', '23', 'Done'),
(2, 'Setu Patel', 'Ambaji', '6745', '78', 'pending'),
(3, 'Manish Thakor', 'Bharuch', '3455', '45', 'pending'),
(4, 'Dhaval Patel', 'Bharuch', '2324', '99', 'Done'),
(5, 'Talha Ansari', 'Valsad', '7886', '109', 'pending'),
(6, 'Abhinay Moriya', 'kanpur', '6732', '87', 'Done'),
(7, 'Jigish Patel', 'Ahmedabad', '9827', '86', 'pending'),
(8, 'Jignesh parmar', 'Valsad', '8923', '23', 'Done'),
(9, 'Rahul Prajapati', 'Mahesana', '1212', '21', 'Done'),
(10, 'Yogesh Patel', 'Mahesana', '4578', '78', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `restaurant`
--

CREATE TABLE `restaurant` (
  `sr_no` int(11) NOT NULL,
  `customer name` text NOT NULL,
  `age` varchar(10) NOT NULL,
  `contact no` varchar(10) NOT NULL,
  `item` text NOT NULL,
  `quantity` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurant`
--

INSERT INTO `restaurant` (`sr_no`, `customer name`, `age`, `contact no`, `item`, `quantity`) VALUES
(1, 'Rahul Parmar', '35', '987433422', 'Gujarati Dish', '2'),
(2, 'Sanket Prajapati', '25', '98732366', 'Panjabi dish', '2'),
(3, 'Ronak bharvad', '24', '998226428', 'Chinese', '3'),
(4, 'Dixit Patel', '34', '98834272', 'Gujarati Dish', '1'),
(5, 'Jayesh Raval', '40', '989738264', 'Panjabi Dish', '10'),
(6, 'Jigar Prajapti', '32', '892322444', 'chinese', '4'),
(7, 'Lokesh Parmar', '32', '987675673', 'Gujarati Dish', '4'),
(8, 'Sagar Kanjariya', '24', '9892737248', 'Panjabi Dish', '1'),
(9, 'Ganesh Mundikar', '12', '989827836', 'chinese', '4'),
(10, 'Yogendra Patel', '31', '9978329324', 'Gujarati Dish', '2');

-- --------------------------------------------------------

--
-- Table structure for table `society`
--

CREATE TABLE `society` (
  `sr_no` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `Home No` varchar(10) NOT NULL,
  `Occupation` varchar(20) NOT NULL,
  `day of security` varchar(20) NOT NULL,
  `avaibility` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `society`
--

INSERT INTO `society` (`sr_no`, `name`, `Home No`, `Occupation`, `day of security`, `avaibility`) VALUES
(1, 'Mohit Prajapati', '3', 'business', 'Monday', 'yes'),
(2, 'Aayush Prajapati', '1', 'social worker', 'Tuesday', 'yes'),
(3, 'Rohit parmar', '5', 'Freelance', 'wednesday', 'no'),
(4, 'Parixit Vanakar', '7', 'Designer', 'Thursday', 'yes'),
(5, 'Rakesh Barot', '23', 'Artist', 'Friday', 'no'),
(6, 'Rajendra Chauhan', '45', 'Builder', 'Saturday', 'yes'),
(7, 'Govind Chauhan', '18', 'Freelance', 'Sunday', 'yes'),
(8, 'Vishal Parmar', '14', 'Shopkeeper', 'Monday', 'yes'),
(9, 'Yogesh Bhatt', '40', 'Artist', 'Tuesday', 'yes'),
(10, 'Lokesh Prajapati', '34', 'Engineer', 'wednesday', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sr_no` int(11) NOT NULL,
  `roll_no` varchar(10) NOT NULL,
  `name` text NOT NULL,
  `age` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `std` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sr_no`, `roll_no`, `name`, `age`, `gender`, `std`) VALUES
(1, '23', 'Sanket', '16', 'male', '11'),
(2, '44', 'Rakesh', '18', 'male', '12'),
(3, '12', 'Ramesh', '16', 'male', '11'),
(4, '33', 'Rohini', '14', 'female', '9'),
(5, '44', 'Hiten', '10', 'male', '5'),
(6, '19', 'Suhasini', '15', 'female', '10'),
(7, '56', 'Roshani', '16', 'female', '11'),
(8, '78', 'Kinjal', '14', 'female', '9'),
(9, '89', 'Jinal', '7', 'female', '3'),
(10, '2', 'Savan', '12', 'male', '7');

-- --------------------------------------------------------

--
-- Table structure for table `train-arrival`
--

CREATE TABLE `train-arrival` (
  `sr_no` int(11) NOT NULL,
  `train-name` varchar(40) NOT NULL,
  `from(place)` varchar(25) NOT NULL,
  `to(place)` varchar(24) NOT NULL,
  `platform` int(10) NOT NULL,
  `arrival in(hours)` varchar(10) NOT NULL,
  `arrival in(minutes)` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `train-arrival`
--

INSERT INTO `train-arrival` (`sr_no`, `train-name`, `from(place)`, `to(place)`, `platform`, `arrival in(hours)`, `arrival in(minutes)`) VALUES
(1, 'Satabdi Express', 'Mumbai', 'Delhi', 2, '0', '36'),
(2, 'Garibrath ', 'Porabandar ', 'Mumbai', 5, '0', '48'),
(3, 'virar shatal', 'Bharuch', 'Virar', 4, '1', '20'),
(4, 'Vadodara Memu', 'surat', 'vadodara', 1, '0', '20'),
(5, 'Suarat Memu', 'Vadodara', 'Surat', 3, '1', '10'),
(6, 'Bharuch Memu', 'Bharuch ', 'Valsad', 1, '1', '23'),
(7, 'Gujarat Express', 'Ahmedabad', 'Mumbai', 3, '1', '5'),
(8, 'Intersity superfast Express', 'Valsad', 'Vadodara', 4, '0', '14'),
(9, 'Double Decker Superfast Express', 'Bandra', 'Jaipur', 3, '0', '12'),
(10, 'Havada Express', 'Maisur', 'Ajamer', 2, '0', '45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `fitness-gym`
--
ALTER TABLE `fitness-gym`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `gtu-exam-fee`
--
ALTER TABLE `gtu-exam-fee`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `nutrition`
--
ALTER TABLE `nutrition`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `order-table`
--
ALTER TABLE `order-table`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `restaurant`
--
ALTER TABLE `restaurant`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `society`
--
ALTER TABLE `society`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sr_no`);

--
-- Indexes for table `train-arrival`
--
ALTER TABLE `train-arrival`
  ADD PRIMARY KEY (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `fitness-gym`
--
ALTER TABLE `fitness-gym`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `gtu-exam-fee`
--
ALTER TABLE `gtu-exam-fee`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `nutrition`
--
ALTER TABLE `nutrition`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `order-table`
--
ALTER TABLE `order-table`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `restaurant`
--
ALTER TABLE `restaurant`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `society`
--
ALTER TABLE `society`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `train-arrival`
--
ALTER TABLE `train-arrival`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
