-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 19, 2024 at 07:57 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_Health`
--

-- --------------------------------------------------------

--
-- Table structure for table `historyBMI`
--

CREATE TABLE `historyBMI` (
  `accountbmi_id` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `age` int(2) NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `height` decimal(5,2) NOT NULL,
  `BMI` decimal(5,2) NOT NULL,
  `Standard` varchar(45) NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `historyBMI`
--

INSERT INTO `historyBMI` (`accountbmi_id`, `firstname`, `lastname`, `age`, `weight`, `height`, `BMI`, `Standard`, `DATE`) VALUES
(1, 'นายดำ', 'คำแก้ว', 20, 54.00, 175.00, 17.63, 'ผอมมาก', '2022-03-09 12:41:26'),
(46, 'Red', 'Blue', 25, 67.00, 171.00, 22.91, 'น้ำหนักปกติ', '2022-03-09 12:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `historyBMR`
--

CREATE TABLE `historyBMR` (
  `accountBMR_id` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `age` int(2) NOT NULL,
  `weight` decimal(5,2) NOT NULL,
  `height` decimal(5,2) NOT NULL,
  `activity` varchar(45) NOT NULL,
  `BMR` int(11) NOT NULL,
  `TDEE` int(11) NOT NULL,
  `Standard` varchar(45) NOT NULL,
  `DATE` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `historyBMR`
--

INSERT INTO `historyBMR` (`accountBMR_id`, `firstname`, `lastname`, `gender`, `age`, `weight`, `height`, `activity`, `BMR`, `TDEE`, `Standard`, `DATE`) VALUES
(1, 'may', 'mint', 'female', 20, 54.00, 168.00, '1-3 day/week', 1392, 1914, 'ปกติ', '2022-03-07 12:47:37'),
(57, 'Peter', 'Parker', 'male', 27, 62.00, 181.00, '3-5 day/week', 1637, 2251, 'เผาผลาญได้ดี', '2022-03-09 12:47:57');

-- --------------------------------------------------------

--
-- Table structure for table `historyCAL`
--

CREATE TABLE `historyCAL` (
  `accountcal_id` int(11) NOT NULL,
  `firstname` varchar(45) NOT NULL,
  `lastname` varchar(45) NOT NULL,
  `age` int(2) NOT NULL,
  `ldl` decimal(5,2) NOT NULL,
  `hdl` decimal(5,2) NOT NULL,
  `triglycerides` decimal(5,2) NOT NULL,
  `cholesterol` decimal(5,2) NOT NULL,
  `Standard` varchar(45) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `historyCAL`
--

INSERT INTO `historyCAL` (`accountcal_id`, `firstname`, `lastname`, `age`, `ldl`, `hdl`, `triglycerides`, `cholesterol`, `Standard`, `Date`) VALUES
(1, 'may', 'mint', 20, 100.00, 60.00, 150.00, 190.00, 'ดีมาก', '2022-03-07 13:06:38'),
(5, 'KKK', 'NNN', 55, 120.00, 80.00, 100.00, 220.00, 'ค่อนข้างสูง', '2022-03-09 12:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `systemuser`
--

CREATE TABLE `systemuser` (
  `user_id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(64) NOT NULL,
  `level` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `systemuser`
--

INSERT INTO `systemuser` (`user_id`, `username`, `password`, `level`) VALUES
(1, 'user1', '1111', 1),
(4, 'user4', '4444', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `historyBMI`
--
ALTER TABLE `historyBMI`
  ADD PRIMARY KEY (`accountbmi_id`);

--
-- Indexes for table `historyBMR`
--
ALTER TABLE `historyBMR`
  ADD PRIMARY KEY (`accountBMR_id`);

--
-- Indexes for table `historyCAL`
--
ALTER TABLE `historyCAL`
  ADD PRIMARY KEY (`accountcal_id`);

--
-- Indexes for table `systemuser`
--
ALTER TABLE `systemuser`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `historyBMI`
--
ALTER TABLE `historyBMI`
  MODIFY `accountbmi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `historyBMR`
--
ALTER TABLE `historyBMR`
  MODIFY `accountBMR_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `historyCAL`
--
ALTER TABLE `historyCAL`
  MODIFY `accountcal_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `systemuser`
--
ALTER TABLE `systemuser`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
