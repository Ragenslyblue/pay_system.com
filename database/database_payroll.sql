-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2015 at 05:15 AM
-- Server version: 5.6.25
-- PHP Version: 5.5.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `allowances`
--

CREATE TABLE IF NOT EXISTS `allowances` (
  `allowance_id` int(11) NOT NULL,
  `allowance_id_num` int(11) NOT NULL,
  `allowance_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `attendance_id` int(11) NOT NULL,
  `attendance_id_num` int(11) NOT NULL,
  `overtime` datetime NOT NULL,
  `late` datetime NOT NULL,
  `time_in` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `time_out` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contribution`
--

CREATE TABLE IF NOT EXISTS `contribution` (
  `contribution_id` int(11) NOT NULL,
  `contribution_id_num` int(11) NOT NULL,
  `contribution_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(11) NOT NULL,
  `department_id_num` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_id_num`, `department_name`) VALUES
(1, 0, 'sadasd'),
(2, 0, 'dsfsdf'),
(3, 0, ''),
(4, 0, 'dsfdsggg'),
(5, 0, ''),
(6, 0, ''),
(7, 0, ''),
(8, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_allowance`
--

CREATE TABLE IF NOT EXISTS `employee_allowance` (
  `employee_allowance_id` int(11) NOT NULL,
  `employee_allowance_id_num` int(11) NOT NULL,
  `food_allowance` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_contribution`
--

CREATE TABLE IF NOT EXISTS `employee_contribution` (
  `employee_contribution_id` int(11) NOT NULL,
  `employee_contribution_id_num` int(11) NOT NULL,
  `employee_contribution` varchar(50) NOT NULL,
  `employer_contribution` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE IF NOT EXISTS `employee_info` (
  `employee_id` int(11) NOT NULL,
  `employee_id_num` int(10) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` int(5) NOT NULL,
  `gender` int(1) NOT NULL COMMENT '0=male; 1=female',
  `address` varchar(50) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `contact_num` int(50) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`employee_id`, `employee_id_num`, `first_name`, `last_name`, `age`, `gender`, `address`, `birthdate`, `email`, `image`, `contact_num`, `remarks`, `position`) VALUES
(1, 0, 'jhkh', 'kjhkjh', 9899, 1, 'jkhkjh', '98798', 'kjhkjh98u9', '12.jpg', 98797, 'jkhkjhkhkh\r\njkhkjhkjhkkjhkjh\r\nkjhkjhkj', 'pppo');

-- --------------------------------------------------------

--
-- Table structure for table `employee_loan`
--

CREATE TABLE IF NOT EXISTS `employee_loan` (
  `employee_loan_id` int(11) NOT NULL,
  `employee_loan_id_num` int(11) NOT NULL,
  `loan_amount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE IF NOT EXISTS `loan` (
  `loan_id` int(11) NOT NULL,
  `loan_id_num` int(11) NOT NULL,
  `loan_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE IF NOT EXISTS `payroll` (
  `payroll_id` int(11) NOT NULL,
  `payroll_id_num` int(11) NOT NULL,
  `date_from` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_to` datetime NOT NULL,
  `num_days` int(5) NOT NULL,
  `total_earnings` int(10) NOT NULL,
  `total_deduction` int(10) NOT NULL,
  `net_pay` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `salary_id` int(11) NOT NULL,
  `salary_id_num` int(11) NOT NULL,
  `daily_rate` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allowances`
--
ALTER TABLE `allowances`
  ADD PRIMARY KEY (`allowance_id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`attendance_id`);

--
-- Indexes for table `contribution`
--
ALTER TABLE `contribution`
  ADD PRIMARY KEY (`contribution_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `employee_allowance`
--
ALTER TABLE `employee_allowance`
  ADD PRIMARY KEY (`employee_allowance_id`);

--
-- Indexes for table `employee_contribution`
--
ALTER TABLE `employee_contribution`
  ADD PRIMARY KEY (`employee_contribution_id`);

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `employee_loan`
--
ALTER TABLE `employee_loan`
  ADD PRIMARY KEY (`employee_loan_id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`loan_id`);

--
-- Indexes for table `payroll`
--
ALTER TABLE `payroll`
  ADD PRIMARY KEY (`payroll_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allowances`
--
ALTER TABLE `allowances`
  MODIFY `allowance_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `contribution`
--
ALTER TABLE `contribution`
  MODIFY `contribution_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `employee_allowance`
--
ALTER TABLE `employee_allowance`
  MODIFY `employee_allowance_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee_contribution`
--
ALTER TABLE `employee_contribution`
  MODIFY `employee_contribution_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `employee_loan`
--
ALTER TABLE `employee_loan`
  MODIFY `employee_loan_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `loan_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `payroll_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
