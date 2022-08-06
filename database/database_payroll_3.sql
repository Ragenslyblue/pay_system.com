-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2016 at 04:30 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allowances`
--

INSERT INTO `allowances` (`allowance_id`, `allowance_id_num`, `allowance_name`) VALUES
(1, 0, 'cash'),
(2, 0, 'cheque'),
(3, 0, 'goods'),
(4, 0, 'kilo'),
(5, 0, 'yyyy');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `attendance_id` int(11) NOT NULL,
  `attendance_id_num` int(11) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `overtime` varchar(100) DEFAULT NULL,
  `overtime_hour` varchar(100) NOT NULL,
  `late` varchar(100) NOT NULL,
  `late_hour` varchar(100) NOT NULL,
  `time_in` varchar(100) NOT NULL,
  `time_in_hour` varchar(100) NOT NULL,
  `time_out` varchar(100) NOT NULL,
  `time_out_hour` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `attendance_id_num`, `employee_id`, `overtime`, `overtime_hour`, `late`, `late_hour`, `time_in`, `time_in_hour`, `time_out`, `time_out_hour`) VALUES
(25, 0, 'kkkkk gggg', '01/12/2016', '12:00', '01/12/2016', '', '01/12/2016', '', '01/12/2016', ''),
(26, 0, 'kkkkk gggg', '01/04/2016', '7:58 pm', '01/04/2016', '7:30am', '01/04/2016', '7:30am', '01/04/2016', '7:30am');

-- --------------------------------------------------------

--
-- Table structure for table `contribution`
--

CREATE TABLE IF NOT EXISTS `contribution` (
  `contribution_id` int(11) NOT NULL,
  `contribution_id_num` int(11) NOT NULL,
  `contribution_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contribution`
--

INSERT INTO `contribution` (`contribution_id`, `contribution_id_num`, `contribution_name`) VALUES
(1, 0, 'SSS'),
(2, 0, 'Pag-ibig');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(11) NOT NULL,
  `department_id_num` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_id_num`, `department_name`) VALUES
(2, 0, 'accounting'),
(3, 0, 'engineering'),
(4, 0, 'tacurong'),
(5, 0, 'biology'),
(6, 0, 'chemistry'),
(7, 0, 'physics'),
(8, 0, 'astronomy'),
(9, 0, 'shoujo manga');

-- --------------------------------------------------------

--
-- Table structure for table `employee_allowance`
--

CREATE TABLE IF NOT EXISTS `employee_allowance` (
  `employee_allowance_id` int(11) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `allowance_id` varchar(100) NOT NULL,
  `food_allowance` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_allowance`
--

INSERT INTO `employee_allowance` (`employee_allowance_id`, `employee_id`, `allowance_id`, `food_allowance`) VALUES
(7, 'kkkkk gggg', 'cash', 'pancit'),
(8, 'Wesley Jay Colimod', 'cash', 'veges');

-- --------------------------------------------------------

--
-- Table structure for table `employee_contribution`
--

CREATE TABLE IF NOT EXISTS `employee_contribution` (
  `employee_contribution_id` int(11) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `contribution_id` varchar(100) NOT NULL,
  `employee_contribution` varchar(50) NOT NULL,
  `employer_contribution` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_contribution`
--

INSERT INTO `employee_contribution` (`employee_contribution_id`, `employee_id`, `contribution_id`, `employee_contribution`, `employer_contribution`) VALUES
(4, 'ragen slyblue', 'Pag-ibig', 'sdfs', 'fsda');

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
  `gender` varchar(5) NOT NULL,
  `address` varchar(50) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `contact_num` int(50) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`employee_id`, `employee_id_num`, `first_name`, `last_name`, `age`, `gender`, `address`, `birthdate`, `email`, `image`, `contact_num`, `remarks`, `position`) VALUES
(41, 0, 'ragen', 'slyblue', 12, 'male', '', '', '', '11703330_1675641859324276_8332933821844488603_n.jpg', 9999, 'ok lang sya...', 'this is awesome'),
(42, 0, 'ralph david', 'gallega', 14, 'femal', '', '', '', '1466026_503971533056522_443195968_n.png', 0, 'this is great...', ''),
(43, 0, 'raffa', 'gallegz', 1999, 'male', '', '', '', '1010465_509609395826069_1822567934_n.jpg', 0, 'thia ia awesome though...', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee_loan`
--

CREATE TABLE IF NOT EXISTS `employee_loan` (
  `employee_loan_id` int(11) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `loan_id` varchar(100) NOT NULL,
  `loan_amount` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_loan`
--

INSERT INTO `employee_loan` (`employee_loan_id`, `employee_id`, `loan_id`, `loan_amount`) VALUES
(1, 'raffa gallegz', 'installement', 500000),
(2, 'kkkkk ', 'installement', 89787),
(3, 'Wesley Jay Colimod', 'cash', 7777);

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE IF NOT EXISTS `loan` (
  `loan_id` int(11) NOT NULL,
  `loan_id_num` int(11) NOT NULL,
  `loan_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan_id`, `loan_id_num`, `loan_name`) VALUES
(1, 0, 'cash'),
(2, 0, 'installement'),
(3, 0, 'cheque'),
(4, 0, 'cash advanced');

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
  `employee_id` varchar(100) NOT NULL,
  `daily_rate` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salary_id`, `employee_id`, `daily_rate`) VALUES
(2, 'hjgh hgfhgf', 9999),
(3, 'ralph david gallega', 4);

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
  MODIFY `allowance_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `contribution`
--
ALTER TABLE `contribution`
  MODIFY `contribution_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `employee_allowance`
--
ALTER TABLE `employee_allowance`
  MODIFY `employee_allowance_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `employee_contribution`
--
ALTER TABLE `employee_contribution`
  MODIFY `employee_contribution_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=44;
--
-- AUTO_INCREMENT for table `employee_loan`
--
ALTER TABLE `employee_loan`
  MODIFY `employee_loan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `loan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `payroll_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
