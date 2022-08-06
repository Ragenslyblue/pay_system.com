-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2016 at 11:52 PM
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
  `allowance_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `allowances`
--

INSERT INTO `allowances` (`allowance_id`, `allowance_name`) VALUES
(18, 'Salary allowance'),
(19, 'food allowance');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE IF NOT EXISTS `attendance` (
  `attendance_id` int(11) NOT NULL,
  `employee_id` varchar(100) NOT NULL,
  `date_value` varchar(100) NOT NULL,
  `time_value` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(5) NOT NULL COMMENT 'in; out'
) ENGINE=InnoDB AUTO_INCREMENT=304 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `employee_id`, `date_value`, `time_value`, `status`) VALUES
(41, '101', '02/01/2016', '2016-02-01 08:32:18', 'in'),
(44, '101', '02/01/2016', '2016-02-01 17:32:18', 'out'),
(46, '102', '02/18/2016', '2016-02-19 10:32:18', 'in'),
(47, '102', '02/18/2016', '2016-02-19 10:32:18', 'out'),
(49, '101', '02/10/2016', '2016-02-10 07:32:18', 'in'),
(50, '101', '02/10/2016', '2016-02-10 17:32:18', 'out'),
(51, '102', '02/19/2016', '2016-02-19 10:32:18', 'in'),
(52, '101', '02/19/2016', '2016-02-19 10:32:58', 'in'),
(53, '102', '02/19/2016', '2016-02-19 23:21:49', 'out'),
(54, '102', '02/19/2016', '2016-02-19 23:23:23', 'in'),
(55, '102', '02/20/2016', '2016-02-20 09:44:32', 'out'),
(56, '103', '02/20/2016', '2016-02-20 10:02:53', 'in'),
(57, '101', '02/20/2016', '2016-02-20 10:13:43', 'out'),
(58, '102', '02/20/2016', '2016-02-20 10:15:20', 'in'),
(59, '101', '02/20/2016', '2016-02-20 11:49:35', 'in'),
(60, '101', '02/20/2016', '2016-02-20 11:50:15', 'out'),
(61, '102', '02/20/2016', '2016-02-20 11:52:12', 'out'),
(62, '102', '02/20/2016', '2016-02-20 22:51:53', 'in'),
(63, '101', '02/20/2016', '2016-02-20 22:53:18', 'in'),
(64, '101', '02/20/2016', '2016-02-20 22:54:08', 'out'),
(65, '104', '02/20/2016', '2016-02-20 22:55:09', 'in'),
(66, '102', '02/20/2016', '2016-02-20 22:55:32', 'out'),
(67, '101', '02/21/2016', '2016-02-21 15:03:08', 'in'),
(68, '101', '02/21/2016', '2016-02-21 15:04:18', 'out'),
(69, '101', '02/22/2016', '2016-02-22 11:03:48', 'in'),
(70, '101', '02/22/2016', '2016-02-22 11:24:30', 'out'),
(71, '104', '02/23/2016', '2016-02-23 03:05:51', 'in'),
(72, '101', '02/23/2016', '2016-02-23 03:10:23', 'in'),
(73, '104', '02/23/2016', '2016-02-23 03:10:41', 'out'),
(74, '104', '02/23/2016', '2016-02-23 03:10:50', 'in'),
(75, '104', '02/23/2016', '2016-02-23 03:12:19', 'out'),
(76, '101', '02/23/2016', '2016-02-23 03:12:31', 'out'),
(77, '101', '02/23/2016', '2016-02-23 03:12:43', 'in'),
(78, '101', '02/23/2016', '2016-02-23 03:15:41', 'out'),
(79, '104', '02/23/2016', '2016-02-23 03:15:49', 'in'),
(80, '104', '02/23/2016', '2016-02-23 22:00:20', 'out'),
(81, '104', '02/23/2016', '2016-02-23 22:04:33', 'in'),
(84, '105', '02/23/2016', '2016-02-23 22:07:47', 'out'),
(85, '105', '02/23/2016', '2016-02-23 12:08:55', 'in'),
(86, '105', '02/23/2016', '2016-02-23 22:11:15', 'out'),
(87, '104', '02/23/2016', '2016-02-23 23:14:38', 'out'),
(88, '105', '02/24/2016', '2016-02-24 07:26:35', 'in'),
(89, '105', '02/24/2016', '2016-02-24 07:27:19', 'out'),
(90, '101', '02/24/2016', '2016-02-24 08:02:09', 'in'),
(91, '101', '02/24/2016', '2016-02-24 09:11:00', 'out'),
(92, '105', '02/25/2016', '2016-02-25 03:56:18', 'in'),
(93, '105', '02/25/2016', '2016-02-25 08:56:42', 'out'),
(94, '105', '02/25/2016', '2016-02-25 21:45:29', 'in'),
(95, '105', '02/25/2016', '2016-02-25 11:48:46', 'out'),
(96, '105', '02/26/2016', '2016-02-26 09:39:17', 'in'),
(97, '105', '02/26/2016', '2016-02-26 12:39:32', 'out'),
(98, '101', '02/26/2016', '2016-02-26 10:30:21', 'in'),
(99, '105', '02/26/2016', '2016-02-26 10:48:13', 'in'),
(100, '105', '02/26/2016', '2016-02-26 15:48:25', 'out'),
(101, '105', '02/26/2016', '2016-02-26 10:50:28', 'in'),
(102, '105', '02/26/2016', '2016-02-26 22:50:39', 'out'),
(104, '106', '02/26/2016', '2016-02-26 11:01:56', 'in'),
(105, '106', '02/26/2016', '2016-02-26 11:03:38', 'in'),
(106, '106', '02/26/2016', '2016-02-26 23:05:04', 'out'),
(107, '106', '02/26/2016', '2016-02-26 11:11:41', 'in'),
(108, '106', '02/26/2016', '2016-02-26 21:11:59', 'out'),
(109, '106', '02/27/2016', '2016-02-27 05:56:19', 'in'),
(110, '106', '02/27/2016', '2016-02-27 05:56:31', 'out'),
(112, '105', '02/28/2016', '2016-02-28 07:47:45', 'in'),
(113, '105', '02/28/2016', '2016-02-28 07:47:55', 'out'),
(114, '107', '02/28/2016', '2016-02-28 20:56:53', 'in'),
(115, '107', '02/28/2016', '2016-02-28 23:57:07', 'out'),
(116, '105', '02/28/2016', '2016-02-28 20:59:43', 'in'),
(117, '105', '02/28/2016', '2016-02-28 21:00:10', 'out'),
(118, '107', '02/28/2016', '2016-02-28 21:54:06', 'in'),
(119, '107', '02/28/2016', '2016-02-28 23:54:50', 'out'),
(120, '101', '02/28/2016', '2016-02-28 21:55:59', 'out'),
(121, '101', '02/28/2016', '2016-02-28 21:57:07', 'in'),
(122, '101', '02/28/2016', '2016-02-28 23:57:44', 'out'),
(123, '107', '02/28/2016', '2016-02-28 22:01:19', 'in'),
(124, '107', '02/28/2016', '2016-02-28 12:02:17', 'out'),
(125, '108', '02/28/2016', '2016-02-28 22:04:26', 'in'),
(126, '106', '02/29/2016', '2016-02-29 05:30:07', 'in'),
(127, '106', '02/29/2016', '2016-02-29 12:30:53', 'out'),
(128, '107', '02/29/2016', '2016-02-29 05:34:27', 'in'),
(129, '107', '02/29/2016', '2016-02-29 05:35:47', 'out'),
(130, '106', '02/29/2016', '2016-02-29 05:42:40', 'in'),
(131, '106', '02/29/2016', '2016-02-29 05:44:12', 'out'),
(132, '107', '02/29/2016', '2016-02-29 05:46:37', 'in'),
(133, '107', '02/29/2016', '2016-02-29 15:48:40', 'out'),
(134, '108', '02/29/2016', '2016-02-29 10:21:51', 'in'),
(135, '108', '02/29/2016', '2016-02-29 22:24:03', 'out'),
(136, '101', '02/29/2016', '2016-02-29 10:25:01', 'in'),
(137, '101', '02/29/2016', '2016-02-29 22:25:12', 'out'),
(139, '109', '03/01/2016', '2016-03-01 23:35:04', 'in'),
(140, '109', '03/01/2016', '2016-03-01 12:36:00', 'out'),
(141, '110', '03/01/2016', '2016-03-01 23:40:56', 'in'),
(142, '110', '03/01/2016', '2016-03-01 23:44:15', 'out'),
(143, '110', '03/01/2016', '2016-03-01 23:44:54', 'in'),
(144, '110', '03/01/2016', '2016-03-01 14:45:03', 'out'),
(145, '109', '03/01/2016', '2016-03-01 23:48:28', 'in'),
(146, '109', '03/01/2016', '2016-03-01 12:48:37', 'out'),
(147, '101', '03/02/2016', '2016-03-02 02:22:58', 'in'),
(148, '101', '03/02/2016', '2016-03-02 22:23:06', 'out'),
(149, '101', '03/02/2016', '2016-03-02 02:26:42', 'in'),
(150, '101', '03/02/2016', '2016-03-02 23:26:50', 'out'),
(151, '109', '03/02/2016', '2016-03-02 10:59:46', 'in'),
(152, '109', '03/02/2016', '2016-03-02 22:59:54', 'out'),
(153, '110', '03/03/2016', '2016-03-03 13:02:03', 'in'),
(154, '110', '03/03/2016', '2016-03-03 22:02:14', 'out'),
(168, '101', '03/04/2016', '2016-03-04 11:07:05', 'You a'),
(169, '101', '03/04/2016', '2016-03-04 11:08:49', 'You a'),
(170, '101', '03/04/2016', '2016-03-04 11:09:57', 'You a'),
(171, '101', '03/04/2016', '2016-03-04 11:11:18', 'in'),
(172, '101', '03/04/2016', '2016-03-04 11:11:25', 'out'),
(173, '101', '03/05/2016', '2016-03-05 11:21:01', 'in'),
(174, '112', '03/05/2016', '2016-03-05 11:28:01', 'in'),
(175, '112', '03/05/2016', '2016-03-05 22:28:08', 'out'),
(176, '101', '03/06/2016', '2016-03-06 23:02:32', 'out'),
(177, '113', '03/07/2016', '2016-03-07 16:47:13', 'in'),
(178, '113', '03/07/2016', '2016-03-07 22:47:59', 'out'),
(179, '113', '03/07/2016', '2016-03-07 16:50:25', 'in'),
(180, '113', '03/07/2016', '2016-04-07 22:50:34', 'out'),
(181, '113', '03/07/2016', '2016-05-07 16:52:19', 'in'),
(182, '113', '03/07/2016', '2016-05-07 22:52:30', 'out'),
(183, '113', '03/08/2016', '2016-03-08 14:35:37', 'in'),
(184, '113', '03/08/2016', '2016-03-08 22:35:46', 'out'),
(198, '105', '03/09/2016', '2016-03-09 22:04:05', 'in'),
(199, '105', '03/09/2016', '2016-03-09 15:04:49', 'out'),
(200, '113', '03/09/2016', '2016-03-09 22:08:52', 'in'),
(201, '113', '03/09/2016', '2016-03-09 10:09:01', 'out'),
(202, '109', '03/09/2016', '2016-03-09 22:12:03', 'in'),
(203, '109', '03/09/2016', '2016-03-09 10:12:11', 'out'),
(204, '105', '03/10/2016', '2016-03-10 06:46:12', 'in'),
(205, '109', '03/10/2016', '2016-03-10 22:47:24', 'in'),
(206, '109', '03/10/2016', '2016-03-10 06:48:12', 'out'),
(208, '114', '03/10/2016', '2016-03-10 14:40:52', 'in'),
(209, '114', '03/10/2016', '2016-03-10 22:41:15', 'out'),
(210, '114', '03/10/2016', '2016-03-10 14:49:17', 'in'),
(211, '114', '03/10/2016', '2016-03-10 22:49:42', 'out'),
(212, '115', '03/10/2016', '2016-03-10 17:03:07', 'in'),
(213, '115', '03/10/2016', '2016-03-10 22:03:15', 'out'),
(214, '115', '03/11/2016', '2016-03-11 05:21:10', 'in'),
(215, '115', '03/11/2016', '2016-03-11 22:21:20', 'out'),
(216, '115', '03/11/2016', '2016-03-11 06:14:10', 'in'),
(217, '115', '03/11/2016', '2016-03-11 22:14:51', 'out'),
(218, '116', '03/11/2016', '2016-03-11 06:57:43', 'in'),
(219, '116', '03/11/2016', '2016-03-11 22:57:56', 'out'),
(221, '116', '03/11/2016', '2016-03-11 20:41:07', 'in'),
(222, '116', '03/11/2016', '2016-03-11 20:42:26', 'out'),
(223, '116', '03/11/2016', '2016-03-11 23:01:03', 'in'),
(224, '116', '03/11/2016', '2016-03-11 14:01:17', 'out'),
(225, '116', '03/11/2016', '2016-03-11 23:44:34', 'in'),
(226, '116', '03/11/2016', '2016-03-11 23:44:43', 'out'),
(227, '115', '03/12/2016', '2016-03-12 00:56:17', 'in'),
(228, '115', '03/12/2016', '2016-03-12 22:56:26', 'out'),
(229, '116', '03/12/2016', '2016-03-12 01:08:12', 'in'),
(230, '116', '03/12/2016', '2016-03-12 22:08:21', 'out'),
(231, '115', '03/12/2016', '2016-03-12 01:22:38', 'in'),
(232, '115', '03/12/2016', '2016-03-12 22:22:47', 'out'),
(233, '115', '03/12/2016', '2016-03-12 07:24:49', 'in'),
(234, '115', '03/12/2016', '2016-03-12 22:24:56', 'out'),
(235, '118', '03/14/2016', '2016-03-14 12:59:28', 'in'),
(236, '118', '03/14/2016', '2016-03-14 22:59:36', 'out'),
(237, '118', '03/14/2016', '2016-03-14 13:04:06', 'in'),
(238, '118', '03/14/2016', '2016-03-14 22:04:15', 'out'),
(239, '117', '03/15/2016', '2016-03-15 21:10:34', 'in'),
(240, '117', '03/15/2016', '2016-03-15 23:10:42', 'out'),
(241, '117', '03/15/2016', '2016-03-15 21:16:56', 'in'),
(242, '117', '03/15/2016', '2016-03-15 12:17:03', 'out'),
(243, '119', '03/16/2016', '2016-03-16 08:50:53', 'in'),
(244, '119', '03/16/2016', '2016-03-16 22:51:00', 'out'),
(245, '117', '03/16/2016', '2016-03-16 09:10:10', 'in'),
(246, '117', '03/16/2016', '2016-03-16 22:10:18', 'out'),
(247, '120', '03/16/2016', '2016-03-16 18:18:12', 'in'),
(248, '120', '03/16/2016', '2016-03-16 22:19:43', 'out'),
(250, '120', '03/16/2016', '2016-03-16 18:22:01', 'in'),
(251, '120', '03/16/2016', '2016-03-16 03:22:55', 'out'),
(252, '120', '03/16/2016', '2016-03-16 18:28:19', 'in'),
(253, '120', '03/16/2016', '2016-03-16 03:28:29', 'out'),
(254, '121', '03/17/2016', '2016-03-17 14:27:58', 'in'),
(255, '121', '03/17/2016', '2016-03-17 22:29:24', 'out'),
(256, '120', '03/18/2016', '2016-03-18 11:22:42', 'in'),
(257, '120', '03/18/2016', '2016-03-18 22:22:52', 'out'),
(258, '120', '03/18/2016', '2016-03-18 11:33:28', 'in'),
(259, '120', '03/18/2016', '2016-03-18 11:36:05', 'out'),
(260, '120', '03/18/2016', '2016-03-18 13:05:31', 'in'),
(261, '120', '03/18/2016', '2016-03-18 22:06:36', 'out'),
(263, '120', '03/19/2016', '2016-03-19 08:40:02', 'out'),
(264, '120', '03/20/2016', '2016-03-20 15:14:54', 'in'),
(265, '120', '03/20/2016', '2016-03-20 22:15:04', 'out'),
(266, '122', '03/21/2016', '2016-03-21 08:26:00', 'in'),
(267, '122', '03/21/2016', '2016-03-21 22:26:08', 'out'),
(268, '123', '03/21/2016', '2016-03-21 09:12:59', 'in'),
(269, '123', '03/21/2016', '2016-03-21 22:15:57', 'out'),
(270, '123', '03/21/2016', '2016-03-21 20:03:33', 'in'),
(271, '123', '03/21/2016', '2016-03-21 22:03:40', 'out'),
(272, '122', '03/22/2016', '2016-03-22 06:29:18', 'in'),
(273, '122', '03/22/2016', '2016-03-22 22:29:27', 'out'),
(274, '123', '03/22/2016', '2016-03-22 06:30:49', 'in'),
(275, '123', '03/22/2016', '2016-03-22 22:30:55', 'out'),
(276, '124', '03/22/2016', '2016-03-22 06:31:46', 'in'),
(277, '124', '03/22/2016', '2016-03-22 22:31:56', 'out'),
(278, '124', '03/22/2016', '2016-03-22 06:32:29', 'in'),
(279, '124', '03/22/2016', '2016-03-22 14:32:37', 'out'),
(280, '125', '03/22/2016', '2016-03-22 06:33:24', 'in'),
(281, '125', '03/22/2016', '2016-03-22 22:33:33', 'out'),
(282, '125', '03/22/2016', '2016-03-22 06:34:04', 'in'),
(283, '125', '03/22/2016', '2016-03-22 22:34:11', 'out'),
(284, '125', '03/22/2016', '2016-03-22 06:34:48', 'in'),
(285, '125', '03/22/2016', '2016-03-22 15:34:56', 'out'),
(286, '123', '03/22/2016', '2016-03-22 08:21:35', 'in'),
(287, '123', '03/22/2016', '2016-03-22 22:21:47', 'out'),
(288, '122', '03/22/2016', '2016-03-22 12:45:04', 'in'),
(289, '122', '03/22/2016', '2016-03-22 22:45:18', 'out'),
(290, '122', '03/22/2016', '2016-03-22 15:15:01', 'in'),
(291, '122', '03/22/2016', '2016-03-22 20:15:10', 'out'),
(292, '127', '03/23/2016', '2016-03-23 01:41:11', 'in'),
(293, '127', '03/23/2016', '2016-03-23 22:41:21', 'out'),
(294, '128', '03/23/2016', '2016-03-23 06:54:14', 'in'),
(295, '128', '03/23/2016', '2016-03-23 22:55:42', 'out'),
(296, '128', '03/23/2016', '2016-03-23 08:17:28', 'in'),
(297, '128', '03/23/2016', '2016-03-23 08:22:24', 'out'),
(298, '129', '03/23/2016', '2016-03-23 08:27:35', 'in'),
(299, '129', '03/23/2016', '2016-03-23 22:27:43', 'out'),
(300, '131', '03/23/2016', '2016-03-23 08:39:14', 'in'),
(301, '131', '03/23/2016', '2016-03-23 22:39:25', 'out'),
(302, '131', '03/24/2016', '2016-03-24 15:30:15', 'in'),
(303, '131', '03/24/2016', '2016-03-24 22:30:22', 'out');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `contact_id` int(11) NOT NULL,
  `from_contact` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `from_contact`, `subject`, `message`) VALUES
(6, 'kkk', 'kkk', 'kkk'),
(7, 'gg', '', ''),
(8, 'fgf', 'dfgf', 'fgf'),
(9, 'jj', 'jj', 'jj'),
(10, 'hh', 'hh', 'hh'),
(11, 'oo', 'oo', 'oo'),
(12, 'mmm', 'mmm', 'mmm');

-- --------------------------------------------------------

--
-- Table structure for table `contribution`
--

CREATE TABLE IF NOT EXISTS `contribution` (
  `contribution_id` int(11) NOT NULL,
  `contribution_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contribution`
--

INSERT INTO `contribution` (`contribution_id`, `contribution_name`) VALUES
(12, 'PAG-IBIG contribution'),
(13, 'SSS contribution');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(11, 'manufacturing'),
(18, 'accounting'),
(19, 'it'),
(20, 'Business Department');

-- --------------------------------------------------------

--
-- Table structure for table `employee_allowance`
--

CREATE TABLE IF NOT EXISTS `employee_allowance` (
  `employee_allowance_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `allowance_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_allowance`
--

INSERT INTO `employee_allowance` (`employee_allowance_id`, `employee_id`, `allowance_id`, `amount`) VALUES
(2, 131, 18, 200);

-- --------------------------------------------------------

--
-- Table structure for table `employee_contribution`
--

CREATE TABLE IF NOT EXISTS `employee_contribution` (
  `employee_contribution_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `contribution_id` int(11) NOT NULL,
  `employee_contribution` int(11) NOT NULL,
  `month` varchar(100) NOT NULL,
  `deducted` int(11) NOT NULL COMMENT '0; 1',
  `employer_contribution` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_contribution`
--

INSERT INTO `employee_contribution` (`employee_contribution_id`, `employee_id`, `contribution_id`, `employee_contribution`, `month`, `deducted`, `employer_contribution`) VALUES
(4, 131, 13, 100, 'October', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE IF NOT EXISTS `employee_info` (
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `gender` varchar(5) NOT NULL,
  `address` varchar(50) NOT NULL,
  `birthdate` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `image` varchar(100) NOT NULL,
  `contact_num` int(50) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`employee_id`, `first_name`, `last_name`, `age`, `gender`, `address`, `birthdate`, `email`, `image`, `contact_num`, `remarks`) VALUES
(127, 'jeff', 'siga', 19, 'male', 'tacurong', '02/08/1997', 'mac@yahoo.com', '1545789_146597009044497_8921755591996853004_n.jpg', 909, 'go....'),
(128, 'mark', 'heiro', 21, 'male', 'koronadal', '02/10/1995', 'ragen@yahoo.com', '1602015_501688416618167_230933_o.jpg', 90909, 'go....'),
(129, 'jeffrey', 'alcala', 25, 'male', 'cagayan', '01/01/1991', 'castro@yahoo.com', 'Orochimaru_Infobox.png', 9098, 'go....'),
(130, 'john carl', 'llanos', 22, 'male', 'cagayan', '02/02/1994', 'john@yahoo.com', 'Fruits_basket.png', 9876, 'muah....'),
(131, 'john carl', 'cordero', 21, 'male', 'gensan', '07/11/1995', 'john@gmail.com', 'gh.jpg', 98899, 'go...');

-- --------------------------------------------------------

--
-- Table structure for table `employee_loan`
--

CREATE TABLE IF NOT EXISTS `employee_loan` (
  `employee_loan_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `loan_id` int(11) NOT NULL,
  `loan_amount` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_loan`
--

INSERT INTO `employee_loan` (`employee_loan_id`, `employee_id`, `loan_id`, `loan_amount`) VALUES
(1, 121, 23, 300),
(4, 131, 24, 100);

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE IF NOT EXISTS `loan` (
  `loan_id` int(11) NOT NULL,
  `loan_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`loan_id`, `loan_name`) VALUES
(23, 'SSS loan'),
(24, 'Salary loan'),
(25, 'GSIS loan'),
(26, 'st.peter');

-- --------------------------------------------------------

--
-- Table structure for table `payroll`
--

CREATE TABLE IF NOT EXISTS `payroll` (
  `payroll_id` int(10) NOT NULL,
  `employee_id` int(10) NOT NULL,
  `date_received` varchar(100) NOT NULL,
  `date_from` varchar(100) NOT NULL,
  `date_to` varchar(100) NOT NULL,
  `time_in` datetime NOT NULL,
  `time_out` datetime NOT NULL,
  `num_hours` int(2) NOT NULL,
  `regular_hours` int(11) NOT NULL,
  `overtime_pay` int(11) NOT NULL,
  `rate_hours` int(11) NOT NULL,
  `basic_pay` int(11) NOT NULL,
  `contribution_id` int(11) NOT NULL,
  `loan_id` int(11) NOT NULL,
  `total_deductions` int(11) NOT NULL,
  `date_value` varchar(100) NOT NULL,
  `net_pay` int(11) NOT NULL,
  `tardiness` int(2) NOT NULL,
  `overtime` int(11) NOT NULL,
  `verified` int(2) NOT NULL COMMENT 'no=0, yes=1'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payroll`
--

INSERT INTO `payroll` (`payroll_id`, `employee_id`, `date_received`, `date_from`, `date_to`, `time_in`, `time_out`, `num_hours`, `regular_hours`, `overtime_pay`, `rate_hours`, `basic_pay`, `contribution_id`, `loan_id`, `total_deductions`, `date_value`, `net_pay`, `tardiness`, `overtime`, `verified`) VALUES
(7, 131, '03/28/2016', '03/01/2016', '03/31/2016', '2016-03-23 08:39:14', '2016-03-23 22:39:25', 14, 6, 1750, 63, 2075, 0, 0, 200, '03/23/2016', 3625, 0, 0, 0),
(8, 131, '03/15/2016', '03/01/2016', '03/31/2016', '2016-03-24 15:30:15', '2016-03-24 22:30:22', 7, 11, 3281, 63, 3513, 0, 0, 200, '03/24/2016', 6594, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `payroll_received`
--

CREATE TABLE IF NOT EXISTS `payroll_received` (
  `payroll_received_id` int(11) NOT NULL,
  `payroll_id` int(11) NOT NULL,
  `overtime` int(11) NOT NULL,
  `date_received` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payroll_received`
--

INSERT INTO `payroll_received` (`payroll_received_id`, `payroll_id`, `overtime`, `date_received`) VALUES
(5, 0, 45, '0'),
(6, 0, 45, '0'),
(7, 0, 8, '0'),
(8, 0, 40, '0'),
(9, 0, 10, '0'),
(10, 0, 5, '0'),
(11, 0, 9, '0'),
(12, 0, 10, '0'),
(13, 0, 10, '0'),
(14, 0, 10, '0'),
(15, 0, 45, '0'),
(16, 0, 5, '0'),
(17, 0, 20, '0'),
(18, 0, 40, '0'),
(19, 0, 10, '0'),
(20, 0, 5, '0'),
(21, 0, 10, '0'),
(22, 0, 45, '0'),
(23, 0, 20, '0'),
(24, 0, 5, '0'),
(25, 0, 0, '3'),
(26, 0, 15, ''),
(27, 0, 15, ''),
(28, 0, 15, ''),
(29, 0, 10, ''),
(30, 0, 5, ''),
(31, 0, 8, ''),
(32, 0, 8, ''),
(33, 0, 10, ''),
(34, 0, 5, ''),
(35, 0, 5, ''),
(36, 0, 5, ''),
(37, 0, 8, ''),
(38, 0, 10, '');

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE IF NOT EXISTS `salary` (
  `salary_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL,
  `daily_rate` int(10) NOT NULL,
  `position` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`salary_id`, `employee_id`, `department_id`, `daily_rate`, `position`) VALUES
(3, 131, 11, 500, 'manufacturer');

-- --------------------------------------------------------

--
-- Table structure for table `sign_up`
--

CREATE TABLE IF NOT EXISTS `sign_up` (
  `sign_up_id` int(5) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sign_up`
--

INSERT INTO `sign_up` (`sign_up_id`, `full_name`, `username`, `email`, `password`) VALUES
(1, '', '', '', ''),
(2, '', 'raffa', '', 'raffa'),
(3, '', 'admin', '', 'admin'),
(4, '', 'raffa gallegs', '', 'raffa'),
(5, '', 'ragen slyblue', '', 'raffa'),
(6, '', 'akatsuki', '', 'member'),
(7, '', 'black', '', 'jack'),
(8, '', 'raffa2', '', 'raffa2'),
(9, '', 'raf', '', 'raf'),
(10, '', 'member', '', 'member'),
(11, '', 'login', '', 'login'),
(12, '', 'ralph', '', 'ralph'),
(13, '', 'orochi', '', 'orochi'),
(14, '', 'jay', '', 'jay'),
(15, '', 'rage', '', 'rage'),
(16, '', 'ppp', '', 'ppp'),
(17, '', 'ok yo', '', 'ok yo'),
(18, '', 'sasuke', '', 'sasuke'),
(19, '', 'kkk', '', 'kkk'),
(20, '', 'okane', '', 'okane'),
(21, '', 'gege', '', 'gege'),
(22, '', 'ok', '', 'ok'),
(23, '', 'uchiha', '', 'uchiha'),
(24, '', 'view', '', 'view'),
(25, '', 'im', '', 'im'),
(26, '', 'akatsu', '', 'akatsu'),
(27, '', 'balbuena', '', '12345'),
(28, '', 'ragep', '', 'ragep'),
(29, '', 'ralp', '', 'ralp'),
(30, '', 'raff', '', 'raff'),
(31, '', 'yyy', '', 'yyy'),
(32, '', 'kk', '', 'kk'),
(33, '', 'junjou', '', 'junjou'),
(34, '', 'mai mai', '', '09'),
(35, '', 'gallega', '', 'gallega'),
(36, '', 'chose', '', 'chose'),
(37, '', 'gen', '', 'gen'),
(38, '', 'localhost', '', 'localhost'),
(39, '', 'ragen', '', 'ragen'),
(40, '', 'r', '', 'r'),
(41, '', 'mai mai solon', '', '12345678'),
(42, '', 'ta', '', 'ta'),
(43, '', 'yahoo', '', 'yahoo'),
(44, '', 'jevie', '', '070707'),
(45, '', 'ya', '', 'ya'),
(46, '', 'tata', '', 'tata'),
(47, '', 'glory mae solon', '', 'maeson'),
(48, '', 'solon', '', 'glory');

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
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

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
-- Indexes for table `payroll_received`
--
ALTER TABLE `payroll_received`
  ADD PRIMARY KEY (`payroll_received_id`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`salary_id`);

--
-- Indexes for table `sign_up`
--
ALTER TABLE `sign_up`
  ADD PRIMARY KEY (`sign_up_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allowances`
--
ALTER TABLE `allowances`
  MODIFY `allowance_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `attendance_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=304;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `contribution`
--
ALTER TABLE `contribution`
  MODIFY `contribution_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `employee_allowance`
--
ALTER TABLE `employee_allowance`
  MODIFY `employee_allowance_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employee_contribution`
--
ALTER TABLE `employee_contribution`
  MODIFY `employee_contribution_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employee_info`
--
ALTER TABLE `employee_info`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=132;
--
-- AUTO_INCREMENT for table `employee_loan`
--
ALTER TABLE `employee_loan`
  MODIFY `employee_loan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `loan_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `payroll`
--
ALTER TABLE `payroll`
  MODIFY `payroll_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `payroll_received`
--
ALTER TABLE `payroll_received`
  MODIFY `payroll_received_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `salary`
--
ALTER TABLE `salary`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sign_up`
--
ALTER TABLE `sign_up`
  MODIFY `sign_up_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
