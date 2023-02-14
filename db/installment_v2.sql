-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 13, 2023 at 08:53 AM
-- Server version: 8.0.31
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `installment_v2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE IF NOT EXISTS `admin_user` (
  `u_id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(33) NOT NULL,
  `user_name` varchar(33) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `pass_word` varchar(100) NOT NULL,
  `user_type` varchar(33) NOT NULL,
  `status` varchar(33) NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`u_id`, `user_id`, `user_name`, `full_name`, `pass_word`, `user_type`, `status`, `update_date`) VALUES
(1, 'admin', 'admin', 'Administrator', 'admin', 'super_admin', 'ENABLE', '2024-10-15 00:00:00'),
(79, '728552', '719872', 'Md Rasheduzzaman', 'CF1234', 'zonal_manager', 'ENABLE', '2023-02-06 14:35:20'),
(80, '640865', '706820', 'Md Rana', 'CF1234', 'zonal_manager', 'ENABLE', '2023-02-06 14:38:19'),
(81, '893037', '789537', 'Tuhin Alom', 'CF1234', 'branch_manager', 'ENABLE', '2023-02-06 14:39:47'),
(82, '623391', '123995', 'Md Pranto', 'CF1234', 'branch_manager', 'ENABLE', '2023-02-06 14:43:40'),
(83, 'DIS-174', '773920', 'M/S. Faruk Enterprise ', 'CF1234', 'distributor', 'ENABLE', '2023-02-06 15:07:31'),
(84, '642681', '422186', 'Abdul Hasan', 'CF1234', 'field_worker', 'ENABLE', '2023-02-06 15:25:49'),
(85, 'DIS-227', '917481', 'M/S. Boshundara', 'CF1234', 'distributor', 'ENABLE', '2023-02-06 15:35:34'),
(86, '847940', '885297', 'Obidul Kader', 'CF1234', 'field_worker', 'ENABLE', '2023-02-06 15:42:17'),
(87, '710505', '122114', 'Zahid Hasan', 'CF1234', 'field_worker', 'ENABLE', '2023-02-07 09:17:37'),
(88, '839740', '416488', 'Selim Islam', 'CF1234', 'field_worker', 'ENABLE', '2023-02-09 16:22:05'),
(89, '513503', '234517', 'Tonmoy Islam', 'CF1234', 'field_worker', 'ENABLE', '2023-02-11 11:44:33'),
(90, '531300', '168361', 'Kabir Zahid', 'CF1234', 'field_worker', 'ENABLE', '2023-02-11 14:34:41');

-- --------------------------------------------------------

--
-- Table structure for table `bank_deposit`
--

DROP TABLE IF EXISTS `bank_deposit`;
CREATE TABLE IF NOT EXISTS `bank_deposit` (
  `bd_id` int NOT NULL AUTO_INCREMENT,
  `b_id` int NOT NULL,
  `bank_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `branch_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `account_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `account_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `last_balance` decimal(10,2) NOT NULL,
  `deposit_amount` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `deposit_slip` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `dis_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `fw_id_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `deposit_type` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`bd_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `bank_deposit`
--

INSERT INTO `bank_deposit` (`bd_id`, `b_id`, `bank_name`, `branch_name`, `account_no`, `account_name`, `last_balance`, `deposit_amount`, `balance`, `deposit_slip`, `dis_code`, `fw_id_no`, `deposit_type`, `created_date`, `update_date`) VALUES
(11, 9, 'DBBL Bank', 'Bogura Sadar', '15683627476222', 'InleadsAccount', '20000.00', '5500.50', '25500.50', '56892333', 'DIS-174', NULL, 'due_pay', '2023-02-07 16:58:52', '2023-02-07 16:58:52');

-- --------------------------------------------------------

--
-- Table structure for table `bank_details`
--

DROP TABLE IF EXISTS `bank_details`;
CREATE TABLE IF NOT EXISTS `bank_details` (
  `b_id` int NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `branch_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `account_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `account_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `starting_balance` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`b_id`, `bank_name`, `branch_name`, `account_no`, `account_name`, `starting_balance`, `balance`, `created_date`, `update_date`) VALUES
(9, 'DBBL Bank', 'Bogura Sadar', '15683627476222', 'InleadsAccount', '20000.00', '25500.50', '2023-02-06 14:19:31', '2023-02-07 16:58:52'),
(8, 'Sonali Bank', 'Bogura Sadar', '1566666666222', 'Admin Investment', '35000.00', '35000.00', '2023-02-06 14:18:16', '2023-02-06 14:18:16');

-- --------------------------------------------------------

--
-- Table structure for table `branch_manager`
--

DROP TABLE IF EXISTS `branch_manager`;
CREATE TABLE IF NOT EXISTS `branch_manager` (
  `bm_id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `zonal_office` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `zonal_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `branch_office` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `branch_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `branch_manager` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `bm_id_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `designation` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cont_num` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `bm_image` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `bm_cv` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pass_word` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`bm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `branch_manager`
--

INSERT INTO `branch_manager` (`bm_id`, `user_id`, `status`, `zonal_office`, `zonal_code`, `branch_office`, `branch_code`, `branch_manager`, `bm_id_no`, `designation`, `cont_num`, `email`, `bm_image`, `bm_cv`, `user_name`, `pass_word`, `created_date`, `update_date`) VALUES
(6, '893037', 'ENABLE', 'Bogura Zone', 'ZON-372', 'Inleads IT', 'BR-192', 'Tuhin Alom', '893037', 'branch_manager', '01738556644', 'tuhin.netmow@gmail.com', 'eWsorx3Mcp.jpg', 'sakE8OXuPj.pdf', '789537', 'CF1234', '2023-02-06 14:39:47', '2023-02-06 14:39:47'),
(7, '623391', 'ENABLE', 'Rajshahi Zone ', 'ZON-253', 'TukiTaki Chottor', 'BR-887', 'Md Pranto', '623391', 'branch_manager', '01738556644', 'pranto.netmow@gmail.com', 'JtiIA5LRwv.jpg', 'DWAxKR6sjy.pdf', '123995', 'CF1234', '2023-02-06 14:43:40', '2023-02-06 14:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `branch_office`
--

DROP TABLE IF EXISTS `branch_office`;
CREATE TABLE IF NOT EXISTS `branch_office` (
  `br_id` int NOT NULL AUTO_INCREMENT,
  `zonal_office` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `zonal_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `branch_office` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `branch_code` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `division` varchar(22) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `district` varchar(22) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `contact_no` varchar(22) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email_address` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `branch_head_id` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `founded_date` date NOT NULL,
  PRIMARY KEY (`br_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `branch_office`
--

INSERT INTO `branch_office` (`br_id`, `zonal_office`, `zonal_code`, `branch_office`, `branch_code`, `division`, `district`, `address`, `contact_no`, `email_address`, `branch_head_id`, `founded_date`) VALUES
(17, 'Dinajpur Zone', 'ZON-847', 'NilfamariNewMarket', 'BR-442', 'Rangpur', 'Dinajpur', 'Main Road', '01711123488', 'newmarket@gmail.com', 'null', '2023-02-18'),
(16, 'Bogura Zone', 'ZON-372', 'ComputerSource', 'BR-836', 'Rajshahi', 'Bogura', 'Seujgari', '01789123499', 'cm.help@gmail.com', 'null', '2023-02-11'),
(15, 'Pabna Zone ', 'ZON-153', 'Dulai Shop', 'BR-392', 'Rajshahi', 'Pabna', 'Uposhohor Pabna', '01789123456', 'dulai.shop@gmail.com', 'null', '2023-02-09'),
(13, 'Bogura Zone', 'ZON-372', 'Inleads IT', 'BR-192', 'Rajshahi', 'Bogura', 'Bogura Sadar', '01789123456', 'inleads@gmail.com', 'null', '2023-02-07'),
(14, 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'Rajshahi', 'Rajshahi', 'Rajshahi University Campus', '01789123456', 'tukitaki@gmail.com', 'null', '2023-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `common_user`
--

DROP TABLE IF EXISTS `common_user`;
CREATE TABLE IF NOT EXISTS `common_user` (
  `cu_id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `unit_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `department` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cu_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cu_id_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `designation` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cont_num` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cu_image` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pass_word` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`cu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_list`
--

DROP TABLE IF EXISTS `company_list`;
CREATE TABLE IF NOT EXISTS `company_list` (
  `com_id` int NOT NULL AUTO_INCREMENT,
  `com_name` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `company_code` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `contact_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `com_logo` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `founded_date` date NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `company_list`
--

INSERT INTO `company_list` (`com_id`, `com_name`, `company_code`, `address`, `contact_no`, `com_logo`, `founded_date`) VALUES
(6, 'Khan Computers', 'CM-297', 'Bogura Sadar', '01789123456', 'QMIS8hoi5u.jpg', '2023-02-08'),
(5, 'Priyo', 'CM-778', 'Sathmatha, Bogura', '01701282930', '5D8i6vZWzH.jpg', '2023-02-09'),
(4, 'Touch and Take', 'CM-882', 'Bogura Upashahar', '01931360006', 'sZgRvFb9OV.jpg', '2023-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `c_id` int NOT NULL AUTO_INCREMENT,
  `com_name` varchar(100) NOT NULL,
  `com_address` varchar(255) NOT NULL,
  `com_phone` varchar(100) NOT NULL,
  `com_email` varchar(200) NOT NULL,
  `com_web` varchar(200) NOT NULL,
  `opening` varchar(100) NOT NULL,
  `facebook` text NOT NULL,
  `twitter` text NOT NULL,
  `google` text NOT NULL,
  `skype` text NOT NULL,
  `pinterest` text NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cp_history`
--

DROP TABLE IF EXISTS `cp_history`;
CREATE TABLE IF NOT EXISTS `cp_history` (
  `cph_id` int NOT NULL AUTO_INCREMENT,
  `pro_id` int NOT NULL,
  `cp_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `due_payment` decimal(10,2) NOT NULL,
  `cm_id_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fw_id_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `payment_date` datetime NOT NULL,
  PRIMARY KEY (`cph_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `cp_history`
--

INSERT INTO `cp_history` (`cph_id`, `pro_id`, `cp_no`, `pro_name`, `sell_price`, `payment`, `due_payment`, `cm_id_no`, `fw_id_no`, `payment_date`) VALUES
(19, 48, '217749', 'Honda', '85000.00', '30000.00', '55000.00', '858556', '847940', '2023-02-08 08:50:05'),
(18, 53, '992850', 'Computer', '55000.00', '55000.00', '0.00', '498042', '710505', '2023-02-07 16:47:14'),
(17, 53, '459924', 'Computer', '55000.00', '55000.00', '0.00', '498042', '710505', '2023-02-07 16:47:01'),
(16, 53, '992850', 'Computer', '55000.00', '68000.00', '-13000.00', '498042', '710505', '2023-02-07 16:46:16'),
(15, 53, '459924', 'Computer', '55000.00', '42000.00', '13000.00', '498042', '710505', '2023-02-07 16:45:47'),
(14, 53, '992850', 'Computer', '55000.00', '55000.00', '0.00', '498042', '710505', '2023-02-07 16:44:34'),
(13, 53, '992850', 'Computer', '55000.00', '52000.00', '3000.00', '498042', '710505', '2023-02-07 16:44:02'),
(12, 53, '992850', 'Computer', '55000.00', '50000.00', '5000.00', '498042', '710505', '2023-02-07 11:52:49'),
(11, 53, '459924', 'Computer', '55000.00', '30000.00', '25000.00', '498042', '710505', '2023-02-07 11:47:37'),
(20, 48, '217749', 'Honda', '85000.00', '60000.00', '25000.00', '858556', '847940', '2023-02-08 12:43:24'),
(21, 48, '217749', 'Honda', '85000.00', '85000.00', '0.00', '858556', '847940', '2023-02-08 12:44:30');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cm_id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fw_id_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `zonal_office` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `zonal_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `branch_office` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `branch_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pickpoint_office` varchar(33) COLLATE utf8mb3_unicode_ci NOT NULL,
  `pickpoint_code` varchar(33) COLLATE utf8mb3_unicode_ci NOT NULL,
  `customer` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `father_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `mother_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cm_dob` date NOT NULL,
  `cm_nid_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cm_present_add` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cm_permanent_add` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `granter_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `granter_cont` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `granter_add` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cm_id_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `designation` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cont_num` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cm_image` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cm_nid_front` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cm_nid_back` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `pass_word` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`cm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cm_id`, `user_id`, `status`, `fw_id_no`, `zonal_office`, `zonal_code`, `branch_office`, `branch_code`, `pickpoint_office`, `pickpoint_code`, `customer`, `father_name`, `mother_name`, `cm_dob`, `cm_nid_no`, `cm_present_add`, `cm_permanent_add`, `granter_name`, `granter_cont`, `granter_add`, `cm_id_no`, `designation`, `cont_num`, `email`, `cm_image`, `cm_nid_front`, `cm_nid_back`, `user_name`, `pass_word`, `created_date`, `update_date`) VALUES
(13, '573617', 'ENABLE', '642681', 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'SathmathaPoint', 'PP-467', 'Sadik Hasan', 'Sadiks Father', 'Sadiks Mother', '2023-02-10', '142222445576', 'Kalitola, Bogura', 'Kalitola, Bogura', 'Washiqul Islam', '01712456789', 'Rangpur', '573617', 'customer', '01712456789', 'sadik@gmail.com', 'EhxckRe0N8.jpg', 'LatjGNDVTl.jpg', 'ShyrATxJOV.jpg', NULL, NULL, '2023-02-06 15:58:21', '2023-02-11 10:22:27'),
(14, '498042', 'ENABLE', '710505', 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'SathmathaPoint', 'PP-467', 'Mijan Islam', 'Mijans Father', 'Mijans Mother', '1997-01-08', '5689252562', 'Shajahanpur, Bogura', 'Shajahanpur, Bogura', 'Tanvir', '01789596936', 'Latifpur, Bogura', '498042', 'customer', '01789562312', 'mijan@gmail.com', 'uepv2x8iJM.jpg', 'HfnPXBANMJ.jpg', 'default.png', NULL, NULL, '2023-02-07 16:42:30', '2023-02-11 10:22:22'),
(15, '858556', 'ENABLE', '839740', 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'RyansPickPoint', 'PP-172', 'Kajol Islam', 'Kajol Father', 'Kajols Mother', '2000-02-15', '56892525626', 'Latifpur. Bogura', 'Latifpur. Bogura', 'Arifur Rahman', '01789596938', 'Latifpur, Bogura', '858556', 'customer', '01789562315', 'kajol@gmail.com', 'btXQxclNS9.jpg', 'NKw7H5dAXU.jpg', 'vQK7NaXEJH.jpg', NULL, NULL, '2023-02-08 08:34:19', '2023-02-11 10:42:20'),
(16, '495916', 'ENABLE', '847940', 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'SathmathaPoint', 'PP-467', 'Nahid Hasan', 'Nahid\'s Father', 'Nahid\'s Mother', '2023-02-23', '142222445588', 'Kalitola, Bogura', 'Kalitola, Bogura', 'Washiqul Islam', '01712456789', 'Rangpur', '495916', 'customer', '01738556644', 'nahid@yahoo.com', 'l4d6srgGEz.jpg', 'HsYO9tVe3r.jpg', 'JPXTAVMGwW.jpg', NULL, NULL, '2023-02-11 09:40:59', '2023-02-11 10:42:00'),
(17, '667850', 'ENABLE', '839740', 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'RyansPickPoint', 'PP-172', 'Sumon Islam', 'Sumon\'s Father', 'Sumon\'s Mother', '2023-02-12', '568925256244', 'Shajahanpur, Bogura', 'Shajahanpur, Bogura', 'Tanvir', '01789598899', 'Bogura', '667850', 'customer', '01789562312', 'sumon@gmail.com', 'Bm4gTRpzWY.jpg', 'JqguPxKFnD.jpg', 'Y3AalkzpU5.jpg', NULL, NULL, '2023-02-11 10:27:38', '2023-02-11 10:55:58');

-- --------------------------------------------------------

--
-- Table structure for table `customer_purchase`
--

DROP TABLE IF EXISTS `customer_purchase`;
CREATE TABLE IF NOT EXISTS `customer_purchase` (
  `cp_id` int NOT NULL AUTO_INCREMENT,
  `cp_no` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_id` int NOT NULL,
  `pro_name` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `latest_price` decimal(10,2) NOT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `down_payment` decimal(10,2) NOT NULL,
  `due_payment` decimal(10,2) NOT NULL,
  `next_pay` date NOT NULL,
  `cm_id_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fw_id_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `branch_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `zonal_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `next_level` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`cp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `customer_purchase`
--

INSERT INTO `customer_purchase` (`cp_id`, `cp_no`, `pro_id`, `pro_name`, `latest_price`, `sell_price`, `down_payment`, `due_payment`, `next_pay`, `cm_id_no`, `fw_id_no`, `branch_code`, `zonal_code`, `status`, `next_level`, `created_date`, `update_date`) VALUES
(10, '217749', 48, 'Honda', '70000.00', '85000.00', '85000.00', '0.00', '2023-02-22', '858556', '847940', 'BR-887', 'ZON-253', 'APPROVED', 'N/A', '2023-02-08 08:50:05', '2023-02-08 12:44:30'),
(9, '992850', 53, 'Computer', '50000.00', '55000.00', '55000.00', '0.00', '2023-02-28', '498042', '710505', 'BR-192', 'ZON-372', 'APPROVED', 'N/A', '2023-02-07 11:52:49', '2023-02-07 16:47:14'),
(8, '459924', 53, 'Computer', '50000.00', '55000.00', '55000.00', '0.00', '2023-02-15', '498042', '710505', 'BR-192', 'ZON-372', 'APPROVED', 'N/A', '2023-02-07 11:47:37', '2023-02-07 16:47:01');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `dep_id` int NOT NULL AUTO_INCREMENT,
  `dep_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dep_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `location` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `distribution_details`
--

DROP TABLE IF EXISTS `distribution_details`;
CREATE TABLE IF NOT EXISTS `distribution_details` (
  `db_id` int NOT NULL AUTO_INCREMENT,
  `db_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `req_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_id` int NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `measure` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `qnty_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `instock` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `after_db_stock` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`db_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `distribution_list`
--

DROP TABLE IF EXISTS `distribution_list`;
CREATE TABLE IF NOT EXISTS `distribution_list` (
  `dbl_id` int NOT NULL AUTO_INCREMENT,
  `db_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `req_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `intotal_price` decimal(10,2) NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`dbl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

DROP TABLE IF EXISTS `distributor`;
CREATE TABLE IF NOT EXISTS `distributor` (
  `dis_id` int NOT NULL AUTO_INCREMENT,
  `dis_code` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `company_code` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `branch_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `distributor` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `contact_person` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cont_num` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dis_email` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dis_address` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `credit` decimal(10,2) NOT NULL,
  `debit` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pass_word` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`dis_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `distributor`
--

INSERT INTO `distributor` (`dis_id`, `dis_code`, `company_code`, `branch_code`, `distributor`, `contact_person`, `cont_num`, `dis_email`, `dis_address`, `credit`, `debit`, `balance`, `user_name`, `pass_word`, `status`, `created_date`, `update_date`) VALUES
(12, 'DIS-227', 'CM-882', 'BR-192', 'M/S. Boshundara', 'Md Rahim', '01712456789', 'mdrahim@gmail.com', 'Bogura', '327875.00', '29000.00', '298875.00', '917481', 'CF1234', 'ENABLE', '2023-02-06 15:35:34', '2023-02-08 12:50:30'),
(11, 'DIS-174', 'CM-778', 'BR-192', 'M/S. Faruk Enterprise ', 'Babla Ahmed', '01712456789', 'babla@gmail.com', 'Bogura', '-5500.50', '5500.50', '-11001.00', '773920', 'CF1234', 'ENABLE', '2023-02-06 15:07:31', '2023-02-07 16:58:52');

-- --------------------------------------------------------

--
-- Table structure for table `distributor_stock`
--

DROP TABLE IF EXISTS `distributor_stock`;
CREATE TABLE IF NOT EXISTS `distributor_stock` (
  `ds_id` int NOT NULL AUTO_INCREMENT,
  `company_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dis_code` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_id` int NOT NULL,
  `pro_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `total_stock` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `instock` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `measure` varchar(22) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `buy_price` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`ds_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `distributor_stock`
--

INSERT INTO `distributor_stock` (`ds_id`, `company_code`, `dis_code`, `pro_id`, `pro_name`, `total_stock`, `instock`, `measure`, `buy_price`, `created_date`, `update_date`) VALUES
(4, 'CM-882', 'DIS-227', 45, 'Electronic Fan', '15', '15', 'Piece', '1500.00', '2023-02-08 12:48:41', '2023-02-08 12:51:02'),
(3, 'CM-882', 'DIS-227', 49, 'Cycle', '25', '25', 'Piece', '2500.00', '2023-02-07 12:53:26', '2023-02-07 14:19:19'),
(5, 'CM-882', 'DIS-227', 53, 'Computer', '5', '5', 'Piece', '55000.00', '2023-02-08 12:49:01', '2023-02-08 12:51:02');

-- --------------------------------------------------------

--
-- Table structure for table `dis_ledger`
--

DROP TABLE IF EXISTS `dis_ledger`;
CREATE TABLE IF NOT EXISTS `dis_ledger` (
  `dl_id` int NOT NULL AUTO_INCREMENT,
  `dis_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `debit` decimal(10,2) NOT NULL,
  `credit` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`dl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `dis_ledger`
--

INSERT INTO `dis_ledger` (`dl_id`, `dis_code`, `description`, `amount`, `debit`, `credit`, `balance`, `created_date`) VALUES
(46, 'DIS-227', 'Purchase Order/ORN-4951', '29000.00', '29000.00', '327875.00', '298875.00', '2023-02-08 12:50:30'),
(45, 'DIS-174', 'due_pay', '5500.50', '5500.50', '-5500.50', '-11001.00', '2023-02-07 16:58:52'),
(44, 'DIS-227', 'Purchase Order/ORN-4391', '0.00', '0.00', '59375.00', '59375.00', '2023-02-07 14:14:29');

-- --------------------------------------------------------

--
-- Table structure for table `fao`
--

DROP TABLE IF EXISTS `fao`;
CREATE TABLE IF NOT EXISTS `fao` (
  `fao_id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `unit_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `department` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fao_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fao_id_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `designation` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cont_num` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fao_image` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pass_word` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`fao_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `field_worker`
--

DROP TABLE IF EXISTS `field_worker`;
CREATE TABLE IF NOT EXISTS `field_worker` (
  `fw_id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `zonal_office` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `zonal_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `branch_office` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `branch_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pickpoint_code` varchar(11) COLLATE utf8mb3_unicode_ci NOT NULL,
  `pickpoint_office` varchar(33) COLLATE utf8mb3_unicode_ci NOT NULL,
  `field_worker` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fw_id_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `designation` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cont_num` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fw_image` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `fw_cv` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `target` decimal(10,2) NOT NULL,
  `achieve` decimal(10,2) NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pass_word` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`fw_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `field_worker`
--

INSERT INTO `field_worker` (`fw_id`, `user_id`, `status`, `zonal_office`, `zonal_code`, `branch_office`, `branch_code`, `pickpoint_code`, `pickpoint_office`, `field_worker`, `fw_id_no`, `designation`, `cont_num`, `email`, `fw_image`, `fw_cv`, `target`, `achieve`, `user_name`, `pass_word`, `created_date`, `update_date`) VALUES
(23, '642681', 'ENABLE', 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'PP-467', 'SathmathaPoint', 'Abdul Hasan', '642681', 'field_worker', '01712456789', 'abdul@gmail.com', 'JFZoxVGd7g.jpg', 'x3zRnbM1iC.pdf', '10.00', '0.00', '422186', 'CF1234', '2023-02-06 15:25:49', '2023-02-09 17:09:02'),
(24, '847940', 'ENABLE', 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'PP-467', 'SathmathaPoint', 'Obidul Kader', '847940', 'field_worker', '01738556644', 'onidul.netmow@gmail.com', 'Op1BUHEl90.jpg', 'nc1qbNO6jT.pdf', '5.00', '0.00', '885297', 'CF1234', '2023-02-06 15:42:17', '2023-02-09 17:08:41'),
(25, '710505', 'ENABLE', 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'PP-467', 'SathmathaPoint', 'Zahid Hasan', '710505', 'field_worker', '01789562312', 'zahid@gmail.com', 'utUbxkJLiN.jpg', '0ZD5JSVCPn.pdf', '0.00', '0.00', '122114', 'CF1234', '2023-02-07 09:17:37', '2023-02-09 17:08:31'),
(26, '839740', 'ENABLE', 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'PP-172', 'RyansPickPoint', 'Selim Khan', '839740', 'field_worker', '01350060022', 'selimkhan@gmail.com', 'JWHNwK3BsF.jpg', 'cwteKo21HG.pdf', '5.00', '0.00', '416488', 'CF1234', '2023-02-09 16:22:05', '2023-02-09 17:10:11'),
(27, '513503', 'ENABLE', 'Dinajpur Zone', 'ZON-847', 'NilfamariNewMarket', 'BR-442', 'PP-796', 'Elephant Road', 'Tonmoy Islam', '513503', 'field_worker', '01712456789', 'tonmoy@gmail.com', 'lVcRnTeCXJ.jpg', '4HeSK6sy8c.pdf', '5.00', '0.00', '234517', 'CF1234', '2023-02-11 11:44:33', '2023-02-11 11:44:42'),
(28, '531300', 'ENABLE', 'Dinajpur Zone', 'ZON-847', 'NilfamariNewMarket', 'BR-442', 'PP-796', 'Elephant Road', 'Kabir Zahid', '531300', 'field_worker', '01789562312', 'zahid@gmail.com', 'eCNbJ3Q6gl.jpg', 'yf6jKGINc8.pdf', '0.00', '0.00', '168361', 'CF1234', '2023-02-11 14:34:41', '2023-02-13 08:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `home_contents`
--

DROP TABLE IF EXISTS `home_contents`;
CREATE TABLE IF NOT EXISTS `home_contents` (
  `hc_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `title_desc` text NOT NULL,
  `status` varchar(33) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`hc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

DROP TABLE IF EXISTS `inventory`;
CREATE TABLE IF NOT EXISTS `inventory` (
  `iv_id` int NOT NULL AUTO_INCREMENT,
  `procat_id` int NOT NULL,
  `prosubcat_id` int NOT NULL,
  `sup_id` int NOT NULL,
  `invoice_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `invoice_date` date NOT NULL,
  `pro_id` int NOT NULL,
  `pro_qnty` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `qnty_instock` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `qnty_messure` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `qnty_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `pay_due` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`iv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_cart`
--

DROP TABLE IF EXISTS `inventory_cart`;
CREATE TABLE IF NOT EXISTS `inventory_cart` (
  `ivc_id` int NOT NULL AUTO_INCREMENT,
  `pro_id` int NOT NULL,
  `procat_id` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_brand` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sup_id` int NOT NULL,
  `invoice_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `invoice_date` date NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `measure` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `qnty_price` decimal(10,2) NOT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`ivc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `inventory_cart`
--

INSERT INTO `inventory_cart` (`ivc_id`, `pro_id`, `procat_id`, `pro_brand`, `sup_id`, `invoice_no`, `invoice_date`, `pro_qnty`, `measure`, `qnty_price`, `sell_price`, `total_price`, `created_date`, `update_date`) VALUES
(13, 54, 'Computer Accessories', 'Apple', 11, '369581364', '2023-02-14', '25', 'Piece', '90000.00', '110000.00', '2250000.00', '2023-02-13 14:51:45', '2023-02-13 14:51:45');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_details`
--

DROP TABLE IF EXISTS `inventory_details`;
CREATE TABLE IF NOT EXISTS `inventory_details` (
  `ivd_id` int NOT NULL AUTO_INCREMENT,
  `inventory_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_id` int NOT NULL,
  `procat_id` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_brand` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sup_id` int NOT NULL,
  `invoice_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `invoice_date` date NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `measure` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `qnty_price` decimal(10,2) NOT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`ivd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `inventory_details`
--

INSERT INTO `inventory_details` (`ivd_id`, `inventory_no`, `pro_id`, `procat_id`, `pro_brand`, `sup_id`, `invoice_no`, `invoice_date`, `pro_qnty`, `measure`, `qnty_price`, `sell_price`, `total_price`, `created_date`, `update_date`) VALUES
(23, 'IV9942', 46, 'Sports', 'Puma', 8, '12321245', '2023-02-07', '3', 'Piece', '70000.00', '85000.00', '210000.00', '2023-02-07 11:21:40', '2023-02-07 11:21:46'),
(24, 'IV9942', 47, 'Sports', 'Nitol', 8, '12321245', '2023-02-07', '12', 'Piece', '1800.00', '2500.00', '21600.00', '2023-02-07 11:20:47', '2023-02-07 11:21:46'),
(25, 'IV1099', 51, 'Computer Accessories', 'ASUS', 10, '1122445569', '2023-02-15', '5', 'Piece', '26000.00', '32000.00', '130000.00', '2023-02-07 11:42:52', '2023-02-07 11:44:04'),
(26, 'IV1099', 51, 'Computer Accessories', 'HP', 10, '1122445569', '2023-02-15', '10', 'Piece', '50000.00', '55000.00', '500000.00', '2023-02-07 11:33:04', '2023-02-07 11:44:04');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_list`
--

DROP TABLE IF EXISTS `inventory_list`;
CREATE TABLE IF NOT EXISTS `inventory_list` (
  `ivl_id` int NOT NULL AUTO_INCREMENT,
  `inventory_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `invoice_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sup_id` int NOT NULL,
  `invoice_date` date NOT NULL,
  `intotal` decimal(10,2) NOT NULL,
  `commission` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `pay_sys` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `due` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`ivl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `inventory_list`
--

INSERT INTO `inventory_list` (`ivl_id`, `inventory_no`, `invoice_no`, `sup_id`, `invoice_date`, `intotal`, `commission`, `payment`, `pay_sys`, `sub_total`, `due`, `created_date`, `update_date`) VALUES
(17, 'IV2281', '6985698569', 9, '2023-02-07', '14400.00', '0.00', '14400.00', 'cash', '14400.00', '0.00', '2023-02-07 10:30:46', '2023-02-07 10:30:46'),
(18, 'IV9942', '12321245', 8, '2023-02-07', '231600.00', '0.00', '231600.00', 'cash', '231600.00', '0.00', '2023-02-07 11:21:46', '2023-02-07 11:21:46'),
(19, 'IV1099', '1122445569', 10, '2023-02-15', '630000.00', '0.00', '630000.00', 'cash', '630000.00', '0.00', '2023-02-07 11:44:04', '2023-02-07 11:44:04');

-- --------------------------------------------------------

--
-- Table structure for table `measure`
--

DROP TABLE IF EXISTS `measure`;
CREATE TABLE IF NOT EXISTS `measure` (
  `msr_id` int NOT NULL AUTO_INCREMENT,
  `measure_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `measure_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `procat_id` int DEFAULT NULL,
  `pro_cat_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`msr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `measure`
--

INSERT INTO `measure` (`msr_id`, `measure_name`, `measure_code`, `procat_id`, `pro_cat_name`) VALUES
(7, 'Packet', 'MSR-475', NULL, NULL),
(8, 'Gram', 'MSR-993', NULL, NULL),
(9, 'KG', 'MSR-376', NULL, NULL),
(10, 'Piece', 'MSR-109', NULL, NULL),
(11, 'ML', 'MSR-815', NULL, NULL),
(13, 'Litter', 'MSR-489', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_cart`
--

DROP TABLE IF EXISTS `order_cart`;
CREATE TABLE IF NOT EXISTS `order_cart` (
  `or_id` int NOT NULL AUTO_INCREMENT,
  `order_no` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `order_date` date NOT NULL,
  `fw_id_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `company_code` varchar(22) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dis_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_id` int NOT NULL,
  `pro_name` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `instock` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `measure` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `distribute_price` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`or_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `od_id` int NOT NULL AUTO_INCREMENT,
  `order_no` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `order_date` date NOT NULL,
  `fw_id_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `company_code` varchar(22) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dis_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_id` int NOT NULL,
  `pro_name` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `instock` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `distribute` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `measure` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `distribute_price` decimal(10,2) NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`od_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`od_id`, `order_no`, `order_date`, `fw_id_no`, `company_code`, `dis_code`, `pro_id`, `pro_name`, `pro_qnty`, `instock`, `distribute`, `measure`, `sell_price`, `total_price`, `distribute_price`, `status`, `created_date`, `update_date`) VALUES
(14, 'ORN-4951', '2023-02-08', '847940', 'CM-882', 'DIS-227', 45, 'Electronic Fan', '15', '12', '15', 'Piece', '1500.00', '22500.00', '22500.00', 'approved', '2023-02-08 12:48:41', '2023-02-08 12:51:02'),
(13, 'ORN-4951', '2023-02-08', '847940', 'CM-882', 'DIS-227', 53, 'Computer', '5', '12', '5', 'Piece', '55000.00', '275000.00', '275000.00', 'approved', '2023-02-08 12:49:01', '2023-02-08 12:51:02'),
(12, 'ORN-4391', '2023-02-08', '710505', 'CM-882', 'DIS-227', 49, 'Cycle', '20', '12', '20', 'Piece', '2500.00', '50000.00', '50000.00', 'approved', '2023-02-07 12:53:26', '2023-02-07 14:19:19'),
(11, 'ORN-4391', '2023-02-08', '710505', 'CM-882', 'DIS-227', 49, 'Cycle', '5', '12', '5', 'Piece', '2500.00', '12500.00', '12500.00', 'approved', '2023-02-07 14:13:55', '2023-02-07 14:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

DROP TABLE IF EXISTS `order_list`;
CREATE TABLE IF NOT EXISTS `order_list` (
  `ol_id` int NOT NULL AUTO_INCREMENT,
  `order_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `order_date` date NOT NULL,
  `fw_id_no` varchar(22) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `company_code` varchar(22) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dis_code` varchar(22) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `intotal` decimal(10,2) NOT NULL,
  `commission_per` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `commission` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `pay_sys` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `due` decimal(10,2) NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`ol_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`ol_id`, `order_no`, `order_date`, `fw_id_no`, `company_code`, `dis_code`, `intotal`, `commission_per`, `commission`, `payment`, `pay_sys`, `sub_total`, `due`, `status`, `created_date`, `update_date`) VALUES
(9, 'ORN-4951', '2023-02-08', '847940', 'CM-882', 'DIS-227', '297500.00', '0', '0.00', '29000.00', 'cash', '297500.00', '268500.00', 'approved', '2023-02-08 12:50:30', '2023-02-08 12:51:02'),
(8, 'ORN-4391', '2023-02-08', '710505', 'CM-882', 'DIS-227', '62500.00', '5', '3125.00', '0.00', 'bank_deposit', '59375.00', '59375.00', 'approved', '2023-02-07 14:14:29', '2023-02-07 14:19:19');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

DROP TABLE IF EXISTS `payment_methods`;
CREATE TABLE IF NOT EXISTS `payment_methods` (
  `pm_id` int NOT NULL AUTO_INCREMENT,
  `payment_method` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`pm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pickpoint_office`
--

DROP TABLE IF EXISTS `pickpoint_office`;
CREATE TABLE IF NOT EXISTS `pickpoint_office` (
  `pickpoint_id` int NOT NULL AUTO_INCREMENT,
  `zonal_office` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zonal_code` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_office` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_code` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickpoint_office` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickpoint_code` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_address` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pickpoint_head_id` varchar(33) COLLATE utf8mb4_unicode_ci NOT NULL,
  `founded_date` date NOT NULL,
  PRIMARY KEY (`pickpoint_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pickpoint_office`
--

INSERT INTO `pickpoint_office` (`pickpoint_id`, `zonal_office`, `zonal_code`, `branch_office`, `branch_code`, `division`, `district`, `pickpoint_office`, `pickpoint_code`, `address`, `contact_no`, `email_address`, `pickpoint_head_id`, `founded_date`) VALUES
(5, 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'Rajshahi', 'Rajshahi', 'SathmathaPoint', 'PP-467', '7 Matha Bogura', '01789123456', 'ryans@gmail.com', 'null', '2023-02-10'),
(4, 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'Rajshahi', 'Rajshahi', 'RyansPickPoint', 'PP-172', 'Kalitmondir, Bogura', '01711123488', 'ryans@gmail.com', 'null', '2023-02-18'),
(6, 'Dinajpur Zone', 'ZON-847', 'NilfamariNewMarket', 'BR-442', 'Rangpur', 'Dinajpur', 'Elephant Road', 'PP-796', '33 East Road-3', '01789123499', 'elephant@gmail.com', 'null', '2023-02-18');

-- --------------------------------------------------------

--
-- Table structure for table `product_name`
--

DROP TABLE IF EXISTS `product_name`;
CREATE TABLE IF NOT EXISTS `product_name` (
  `pro_id` int NOT NULL AUTO_INCREMENT,
  `procat_id` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `pro_brand` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `pro_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `pro_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `sup_id` int DEFAULT NULL,
  `total_stock` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `instock` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `measure` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `last_price` decimal(10,2) DEFAULT NULL,
  `latest_price` decimal(10,2) DEFAULT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `product_name`
--

INSERT INTO `product_name` (`pro_id`, `procat_id`, `pro_brand`, `pro_name`, `pro_code`, `sup_id`, `total_stock`, `instock`, `measure`, `last_price`, `latest_price`, `sell_price`, `update_date`) VALUES
(45, 'Electronic Device', 'Nitol', 'Electronic Fan', NULL, 9, '12', '-3', 'Piece', '1200.00', '1200.00', '1500.00', '2023-02-08 12:51:02'),
(48, 'Sports', 'Puma', 'Honda', NULL, 8, '3', '3', 'Piece', '70000.00', '70000.00', '85000.00', '2023-02-07 11:21:46'),
(49, 'Sports', 'Nitol', 'Cycle', NULL, 8, '12', '-13', 'Piece', '1800.00', '1800.00', '2500.00', '2023-02-07 14:19:19'),
(52, 'Computer Accessories', 'ASUS', 'Computer', NULL, 10, '5', '5', 'Piece', '26000.00', '26000.00', '32000.00', '2023-02-07 11:44:04'),
(53, 'Computer Accessories', 'HP', 'Computer', NULL, 10, '10', '5', 'Piece', '50000.00', '50000.00', '55000.00', '2023-02-08 12:51:02'),
(54, NULL, NULL, 'Mac Mini', 'PRO-914', NULL, NULL, '0', NULL, NULL, NULL, '0.00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pro_brand`
--

DROP TABLE IF EXISTS `pro_brand`;
CREATE TABLE IF NOT EXISTS `pro_brand` (
  `brand_id` int NOT NULL AUTO_INCREMENT,
  `pro_brand` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_brand_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `pro_brand`
--

INSERT INTO `pro_brand` (`brand_id`, `pro_brand`, `pro_brand_code`) VALUES
(11, 'Puma', 'BRAND-966'),
(12, 'Nitol', 'BRAND-584'),
(13, 'Superstar', 'BRAND-166'),
(14, 'ASUS', 'BRAND-977'),
(15, 'HP', 'BRAND-498'),
(16, 'Apple', 'BRAND-907');

-- --------------------------------------------------------

--
-- Table structure for table `pro_category`
--

DROP TABLE IF EXISTS `pro_category`;
CREATE TABLE IF NOT EXISTS `pro_category` (
  `procat_id` int NOT NULL AUTO_INCREMENT,
  `pro_cat_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_cat_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`procat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `pro_category`
--

INSERT INTO `pro_category` (`procat_id`, `pro_cat_name`, `pro_cat_code`) VALUES
(14, 'Sports', 'PROCAT-945'),
(15, 'Electronic Device', 'PROCAT-331'),
(16, 'Computer Accessories', 'PROCAT-775');

-- --------------------------------------------------------

--
-- Table structure for table `pro_sub_cat`
--

DROP TABLE IF EXISTS `pro_sub_cat`;
CREATE TABLE IF NOT EXISTS `pro_sub_cat` (
  `prosubcat_id` int NOT NULL AUTO_INCREMENT,
  `pro_sub_cat_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_sub_cat_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `procat_id` int NOT NULL,
  `pro_cat_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`prosubcat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_details`
--

DROP TABLE IF EXISTS `purchase_order_details`;
CREATE TABLE IF NOT EXISTS `purchase_order_details` (
  `po_id` int NOT NULL AUTO_INCREMENT,
  `po_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `user_id` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ip_add` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `procat_id` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_brand` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `qnty_messure` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `next_level` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`po_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_list`
--

DROP TABLE IF EXISTS `purchase_order_list`;
CREATE TABLE IF NOT EXISTS `purchase_order_list` (
  `pol_id` int NOT NULL AUTO_INCREMENT,
  `po_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_id` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `next_level` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`pol_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qnty_messure`
--

DROP TABLE IF EXISTS `qnty_messure`;
CREATE TABLE IF NOT EXISTS `qnty_messure` (
  `qm_id` int NOT NULL AUTO_INCREMENT,
  `qnty_messure` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`qm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `qnty_messure`
--

INSERT INTO `qnty_messure` (`qm_id`, `qnty_messure`) VALUES
(1, 'Pcs'),
(2, 'GM'),
(3, 'GSM'),
(4, 'KG'),
(5, 'LITTER');

-- --------------------------------------------------------

--
-- Table structure for table `request_purchase_entry`
--

DROP TABLE IF EXISTS `request_purchase_entry`;
CREATE TABLE IF NOT EXISTS `request_purchase_entry` (
  `rp_id` int NOT NULL AUTO_INCREMENT,
  `rp_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `user_id` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ip_add` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `procat_id` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_brand` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `qnty_messure` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `next_level` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`rp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_purchase_list`
--

DROP TABLE IF EXISTS `request_purchase_list`;
CREATE TABLE IF NOT EXISTS `request_purchase_list` (
  `rpl_id` int NOT NULL AUTO_INCREMENT,
  `rp_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_id` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `next_level` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`rpl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_requisition`
--

DROP TABLE IF EXISTS `request_requisition`;
CREATE TABLE IF NOT EXISTS `request_requisition` (
  `rr_id` int NOT NULL AUTO_INCREMENT,
  `req_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `ip_add` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_id` int NOT NULL,
  `procat_id` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_brand` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `qnty_messure` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `qnty_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `next_level` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`rr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales_cart`
--

DROP TABLE IF EXISTS `sales_cart`;
CREATE TABLE IF NOT EXISTS `sales_cart` (
  `so_id` int NOT NULL AUTO_INCREMENT,
  `order_no` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `order_date` date NOT NULL,
  `delevery_date` date NOT NULL,
  `fw_id_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `company_code` varchar(22) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dis_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_id` int NOT NULL,
  `pro_name` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `instock` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `measure` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `distribute_price` decimal(10,2) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`so_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `sales_cart`
--

INSERT INTO `sales_cart` (`so_id`, `order_no`, `order_date`, `delevery_date`, `fw_id_no`, `company_code`, `dis_code`, `pro_id`, `pro_name`, `pro_qnty`, `instock`, `measure`, `sell_price`, `total_price`, `distribute_price`, `created_date`, `update_date`) VALUES
(9, 'SON-2754', '2023-02-09', '2023-02-11', '847940', 'CM-882', 'DIS-227', 53, 'Computer', '25', '15', 'Piece', '55000.00', '1375000.00', NULL, '2023-02-08 14:17:06', '2023-02-08 14:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

DROP TABLE IF EXISTS `sales_details`;
CREATE TABLE IF NOT EXISTS `sales_details` (
  `sd_id` int NOT NULL AUTO_INCREMENT,
  `order_no` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `order_date` date NOT NULL,
  `delevery_date` date NOT NULL,
  `fw_id_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `company_code` varchar(22) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dis_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_id` int NOT NULL,
  `pro_name` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `instock` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `distribute` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `measure` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `distribute_price` decimal(10,2) DEFAULT NULL,
  `status` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`sd_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales_list`
--

DROP TABLE IF EXISTS `sales_list`;
CREATE TABLE IF NOT EXISTS `sales_list` (
  `sl_id` int NOT NULL AUTO_INCREMENT,
  `order_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `order_date` date NOT NULL,
  `delevery_date` date NOT NULL,
  `fw_id_no` varchar(22) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `company_code` varchar(22) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `dis_code` varchar(22) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `intotal` decimal(10,2) NOT NULL,
  `commission_per` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `commission` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `pay_sys` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `due` decimal(10,2) NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`sl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `submit_requisition`
--

DROP TABLE IF EXISTS `submit_requisition`;
CREATE TABLE IF NOT EXISTS `submit_requisition` (
  `sr_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `req_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `next_level` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `intotal_price` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`sr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `sup_id` int NOT NULL AUTO_INCREMENT,
  `sup_category` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sup_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `last_bal` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `due` decimal(10,2) NOT NULL,
  `commission` decimal(10,2) NOT NULL,
  `cont_num` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sup_email` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `sup_address` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`sup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sup_id`, `sup_category`, `sup_name`, `last_bal`, `balance`, `due`, `commission`, `cont_num`, `sup_email`, `sup_address`, `created_date`, `update_date`) VALUES
(8, 'Electronic Items', 'M/S Azzizul Haque', '231600.00', '463200.00', '0.00', '0.00', '01712456789', 'azzizul@gmail.com', 'Pabna, Bangladesh', '2023-02-06 16:05:13', '2023-02-07 11:21:46'),
(9, 'Sports Item', 'Sports Gear', '0.00', '14400.00', '0.00', '0.00', '01712456789', 'sports@gmail.com', 'Khandar, Bogura', '2023-02-06 16:07:04', '2023-02-07 10:30:46'),
(10, 'Gadgets', 'M/S Khan Computers', '630000.00', '1260000.00', '0.00', '0.00', '01712456789', 'mskhan@gmail.com', '7 Matha, Bogura', '2023-02-07 11:25:08', '2023-02-07 11:44:04'),
(11, 'Grocery', 'Shopno', '0.00', '0.00', '0.00', '0.00', '01712456699', 'shopno@gmail.com', '7 Matha, Bogura', '2023-02-13 14:49:23', '2023-02-13 14:49:23');

-- --------------------------------------------------------

--
-- Table structure for table `sup_category`
--

DROP TABLE IF EXISTS `sup_category`;
CREATE TABLE IF NOT EXISTS `sup_category` (
  `supc_id` int NOT NULL AUTO_INCREMENT,
  `supc_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `supc_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`supc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `sup_category`
--

INSERT INTO `sup_category` (`supc_id`, `supc_name`, `supc_code`) VALUES
(12, 'Sports Item', 'SUPC-506'),
(13, 'Electronic Items', 'SUPC-155'),
(14, 'Gadgets', 'SUPC-434'),
(15, 'Grocery', 'SUPC-261');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
CREATE TABLE IF NOT EXISTS `units` (
  `unit_id` int NOT NULL AUTO_INCREMENT,
  `unit_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `unit_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `location` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  PRIMARY KEY (`unit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unit_head`
--

DROP TABLE IF EXISTS `unit_head`;
CREATE TABLE IF NOT EXISTS `unit_head` (
  `uh_id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `unit_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `department` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `uh_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `uh_id_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `designation` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cont_num` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `uh_image` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pass_word` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`uh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zonal_manager`
--

DROP TABLE IF EXISTS `zonal_manager`;
CREATE TABLE IF NOT EXISTS `zonal_manager` (
  `zm_id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `zonal_office` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci DEFAULT NULL,
  `zonal_code` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `zonal_manager` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `zm_id_no` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `designation` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `cont_num` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `zm_image` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `zm_cv` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `pass_word` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`zm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `zonal_manager`
--

INSERT INTO `zonal_manager` (`zm_id`, `user_id`, `status`, `zonal_office`, `zonal_code`, `zonal_manager`, `zm_id_no`, `designation`, `cont_num`, `email`, `zm_image`, `zm_cv`, `user_name`, `pass_word`, `created_date`, `update_date`) VALUES
(9, '728552', 'ENABLE', 'Bogura Zone', 'ZON-372', 'Md Rasheduzzaman', '728552', 'zonal_manager', '01712456789', 'rashed@gmail.com', 'NCMpzoKAL0.jpg', 'FRyX2UbY4a.pdf', '719872', 'CF1234', '2023-02-06 14:35:20', '2023-02-06 14:35:20'),
(10, '640865', 'ENABLE', 'Bogura Zone', 'ZON-372', 'Md Rana', '640865', 'zonal_manager', '01738556644', 'rana.netmow@gmail.com', 'sE4kBihfHR.jpg', 'v3hyZipxBN.pdf', '706820', 'CF1234', '2023-02-06 14:38:19', '2023-02-06 14:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `zonal_office`
--

DROP TABLE IF EXISTS `zonal_office`;
CREATE TABLE IF NOT EXISTS `zonal_office` (
  `zo_id` int NOT NULL AUTO_INCREMENT,
  `zonal_office` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `zonal_code` varchar(11) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `division` varchar(22) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `district` varchar(22) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `contact_no` varchar(22) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `email_address` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `zonal_head_id` varchar(33) CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL,
  `founded_date` date NOT NULL,
  PRIMARY KEY (`zo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_unicode_ci;

--
-- Dumping data for table `zonal_office`
--

INSERT INTO `zonal_office` (`zo_id`, `zonal_office`, `zonal_code`, `division`, `district`, `address`, `contact_no`, `email_address`, `zonal_head_id`, `founded_date`) VALUES
(12, 'Dinajpur Zone', 'ZON-847', 'Rangpur', 'Dinajpur', 'Dinajpur Address', '01789123456', 'dinajpur@gmail.com', 'null', '2023-02-10'),
(11, 'Rajshahi Zone', 'ZON-253', 'Rajshahi', 'Rajshahi', 'Uposhohor Rajshahi', '01755123456', 'zone.rajshahi@gmail.com', 'null', '2023-02-08'),
(10, 'Pabna Zone ', 'ZON-153', 'Rajshahi', 'Pabna', 'Pabna Sadar', '01719123466', 'zone.pabna@gmail.com', 'null', '2023-02-07'),
(9, 'Bogura Zone', 'ZON-372', 'Rajshahi', 'Bogura', 'Bogura Sadar', '01789123456', 'zone.bogura@gmail.com', 'null', '2023-02-14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
