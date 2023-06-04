-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 31, 2023 at 08:39 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `child_marriage_controlling_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

DROP TABLE IF EXISTS `admin_user`;
CREATE TABLE IF NOT EXISTS `admin_user` (
  `u_id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(33) COLLATE utf8mb4_general_ci NOT NULL,
  `user_name` varchar(33) COLLATE utf8mb4_general_ci NOT NULL,
  `full_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `pass_word` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `user_type` varchar(33) COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(33) COLLATE utf8mb4_general_ci NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(90, '531300', '168361', 'Kabir Zahid', 'CF1234', 'field_worker', 'DISABLE', '2023-02-11 14:34:41'),
(91, '316189', '802137', 'Minhazul Islam', 'CF1234', 'field_worker', 'DISABLE', '2023-03-01 15:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `bank_deposit`
--

DROP TABLE IF EXISTS `bank_deposit`;
CREATE TABLE IF NOT EXISTS `bank_deposit` (
  `bd_id` int NOT NULL AUTO_INCREMENT,
  `b_id` int NOT NULL,
  `bank_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `branch_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `account_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `account_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_balance` decimal(10,2) NOT NULL,
  `deposit_amount` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `deposit_slip` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `dis_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `fw_id_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deposit_type` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`bd_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `bank_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `branch_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `account_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `account_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `starting_balance` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bank_details`
--

INSERT INTO `bank_details` (`b_id`, `bank_name`, `branch_name`, `account_no`, `account_name`, `starting_balance`, `balance`, `created_date`, `update_date`) VALUES
(9, 'DBBL Bank', 'Bogura Sadar', '15683627476222', 'InleadsAccount', '20000.00', '25500.50', '2023-02-06 14:19:31', '2023-02-07 16:58:52'),
(8, 'Sonali Bank', 'Bogura Sadar', '1566666666222', 'Admin Investment', '35000.00', '35000.00', '2023-02-06 14:18:16', '2023-02-06 14:18:16'),
(10, 'Cheryl Eaton', 'Athena Evans', 'Merritt Hahn', 'Carla Dixon', '97.00', '97.00', '2023-05-25 10:14:33', '2023-05-25 10:14:40');

-- --------------------------------------------------------

--
-- Table structure for table `branch_manager`
--

DROP TABLE IF EXISTS `branch_manager`;
CREATE TABLE IF NOT EXISTS `branch_manager` (
  `bm_id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `zonal_office` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `zonal_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `branch_office` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `branch_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `branch_manager` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bm_id_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `designation` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cont_num` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bm_image` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bm_cv` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass_word` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`bm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `zonal_office` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `zonal_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `branch_office` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `branch_code` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `division` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `district` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_no` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_address` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `branch_head_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `founded_date` date NOT NULL,
  PRIMARY KEY (`br_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `branch_office`
--

INSERT INTO `branch_office` (`br_id`, `zonal_office`, `zonal_code`, `branch_office`, `branch_code`, `division`, `district`, `address`, `contact_no`, `email_address`, `branch_head_id`, `founded_date`) VALUES
(17, 'Dinajpur Zone', 'ZON-847', 'NilfamariMarket', 'BR-442', 'Rangpur', 'Dinajpur', 'Main Road', '01711123488', 'newmarket@gmail.com', 'null', '2023-02-18'),
(16, 'Bogura Zone', 'ZON-372', 'ComputerSource', 'BR-836', 'Rajshahi', 'Bogura', 'Seujgari', '01789123499', 'cm.help@gmail.com', 'null', '2023-02-11'),
(15, 'Pabna Zone ', 'ZON-153', 'Dulai Shop', 'BR-392', 'Rajshahi', 'Pabna', 'Uposhohor Pabna', '01789123456', 'dulai.shop@gmail.com', 'null', '2023-02-09'),
(13, 'Bogura Zone', 'ZON-372', 'Inleads IT', 'BR-192', 'Rajshahi', 'Bogura', 'Bogura Sadar', '01789123456', 'inleads@gmail.com', 'null', '2023-02-07'),
(14, 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'Rajshahi', 'Rajshahi', 'RU Campus', '01789123456', 'tukitaki@gmail.com', 'null', '2023-02-07'),
(18, '', '', 'Shajahanpur Office', 'BR-159', 'Rajshahi', 'Bogura', 'Shajahanpur Sadar', '01711123488', 'shajahanpur@gmail.com', '', '2023-02-28'),
(19, '', '', 'Shaeleigh Cortez', 'BR-167', 'A aliquip labore com', 'Non adipisci odio as', 'Fuga Quas non corpo', 'Sapiente quis exerci', 'vocin@mailinator.com', '', '2007-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `common_user`
--

DROP TABLE IF EXISTS `common_user`;
CREATE TABLE IF NOT EXISTS `common_user` (
  `cu_id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `unit_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `department` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cu_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cu_id_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `designation` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cont_num` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cu_image` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass_word` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`cu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_list`
--

DROP TABLE IF EXISTS `company_list`;
CREATE TABLE IF NOT EXISTS `company_list` (
  `com_id` int NOT NULL AUTO_INCREMENT,
  `com_name` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `company_code` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `com_logo` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `founded_date` date NOT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `com_name` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `com_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `com_phone` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `com_email` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `com_web` varchar(200) COLLATE utf8mb4_general_ci NOT NULL,
  `opening` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `facebook` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `twitter` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `google` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `skype` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `pinterest` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cp_history`
--

DROP TABLE IF EXISTS `cp_history`;
CREATE TABLE IF NOT EXISTS `cp_history` (
  `cph_id` int NOT NULL AUTO_INCREMENT,
  `cp_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `instl_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `instl_pay` decimal(10,2) NOT NULL,
  `pro_id` int NOT NULL,
  `pro_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `purchase_qty` int NOT NULL,
  `purchase_total` decimal(10,2) NOT NULL,
  `down_payment` decimal(10,2) NOT NULL,
  `pay_due` decimal(10,2) NOT NULL,
  `installment_plan` int NOT NULL,
  `instl_given` int NOT NULL,
  `cm_id_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fw_id_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `payment_date` datetime NOT NULL,
  PRIMARY KEY (`cph_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cp_history`
--

INSERT INTO `cp_history` (`cph_id`, `cp_no`, `instl_no`, `instl_pay`, `pro_id`, `pro_name`, `sell_price`, `purchase_qty`, `purchase_total`, `down_payment`, `pay_due`, `installment_plan`, `instl_given`, `cm_id_no`, `fw_id_no`, `payment_date`) VALUES
(1, '454809', 'INSTL-1', '20000.00', 85, 'Football', '2200.00', 20, '44000.00', '20000.00', '24000.00', 4, 1, '667850', '710505', '2023-02-27 15:41:02'),
(2, '721300', 'INSTL-1', '6000.00', 94, 'PataPata Flip-Flop', '250.00', 40, '10000.00', '6000.00', '4000.00', 4, 1, '667850', '710505', '2023-02-27 15:53:32'),
(3, '813590', 'INSTL-1', '20000.00', 87, 'Volly Ball', '2500.00', 20, '50000.00', '20000.00', '30000.00', 0, 0, '667850', '710505', '2023-02-28 11:15:13'),
(4, '813590', 'INSTL-2', '15000.00', 87, 'Volly Ball', '2500.00', 20, '50000.00', '35000.00', '15000.00', 16, 2, '667850', '710505', '2023-02-28 14:51:19'),
(5, '813590', 'INSTL-3', '10000.00', 87, 'Volly Ball', '2500.00', 20, '50000.00', '45000.00', '5000.00', 16, 3, '667850', '710505', '2023-02-28 14:51:55'),
(6, '813590', 'INSTL-4', '5000.00', 87, 'Volly Ball', '2500.00', 20, '50000.00', '50000.00', '0.00', 16, 4, '667850', '710505', '2023-02-28 14:58:41'),
(7, '721300', 'INSTL-2', '4000.00', 94, 'PataPata Flip-Flop', '250.00', 40, '10000.00', '10000.00', '0.00', 4, 2, '667850', '710505', '2023-02-28 15:11:24'),
(8, '454809', 'INSTL-2', '10000.00', 85, 'Football', '2200.00', 20, '44000.00', '30000.00', '14000.00', 4, 2, '667850', '710505', '2023-02-28 15:16:32'),
(9, '132979', 'INSTL-1', '20000.00', 87, 'Volly Ball', '2500.00', 20, '50000.00', '20000.00', '30000.00', 16, 1, '667850', '710505', '2023-02-28 15:25:44'),
(10, '720726', 'INSTL-1', '80000.00', 91, 'Server PC', '150000.00', 1, '150000.00', '80000.00', '70000.00', 16, 1, '667850', '710505', '2023-03-01 10:32:34'),
(11, '720726', 'INSTL-2', '30000.00', 91, 'Server PC', '150000.00', 1, '150000.00', '110000.00', '40000.00', 16, 2, '667850', '710505', '2023-03-01 10:33:05'),
(12, '132979', 'INSTL-2', '1875.00', 87, 'Volly Ball', '2500.00', 20, '50000.00', '21875.00', '28125.00', 16, 2, '667850', '710505', '2023-03-01 12:53:08'),
(13, '947813', 'INSTL-1', '500.00', 94, 'PataPata Flip-Flop', '250.00', 10, '2500.00', '500.00', '2000.00', 4, 1, '498042', '710505', '2023-03-01 15:11:25'),
(14, '785322', 'INSTL-1', '500.00', 95, 'Switch', '50.00', 50, '2500.00', '500.00', '2000.00', 4, 1, '667850', '710505', '2023-03-01 15:53:25'),
(15, '138705', 'INSTL-1', '200.00', 95, 'Switch', '50.00', 10, '500.00', '200.00', '300.00', 4, 1, '667850', '710505', '2023-03-01 16:52:13'),
(16, '989544', 'INSTL-1', '5500.00', 85, 'Football', '2200.00', 5, '11000.00', '5500.00', '5500.00', 16, 1, '667850', '710505', '2023-03-02 09:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `cm_id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fw_id_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `zonal_office` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `zonal_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `branch_office` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `branch_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pickpoint_office` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pickpoint_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `customer` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `father_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mother_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cm_dob` date NOT NULL,
  `cm_nid_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cm_present_add` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cm_permanent_add` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `granter_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `granter_cont` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `granter_add` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cm_id_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `designation` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cont_num` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cm_image` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cm_nid_front` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cm_nid_back` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pass_word` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`cm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cm_id`, `user_id`, `status`, `fw_id_no`, `zonal_office`, `zonal_code`, `branch_office`, `branch_code`, `pickpoint_office`, `pickpoint_code`, `customer`, `father_name`, `mother_name`, `cm_dob`, `cm_nid_no`, `cm_present_add`, `cm_permanent_add`, `granter_name`, `granter_cont`, `granter_add`, `cm_id_no`, `designation`, `cont_num`, `email`, `cm_image`, `cm_nid_front`, `cm_nid_back`, `user_name`, `pass_word`, `created_date`, `update_date`) VALUES
(13, '573617', 'ENABLE', '642681', 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'SathmathaPoint', 'PP-467', 'Sadik Hasan', 'Sadiks Father', 'Sadiks Mother', '2023-02-10', '142222445576', 'Kalitola, Bogura', 'Kalitola, Bogura', 'Washiqul Islam', '01712456789', 'Rangpur', '573617', 'customer', '01712456789', 'sadik@gmail.com', 'EhxckRe0N8.jpg', 'LatjGNDVTl.jpg', 'ShyrATxJOV.jpg', NULL, NULL, '2023-02-06 15:58:21', '2023-02-11 10:22:27'),
(14, '498042', 'ENABLE', '710505', 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'SathmathaPoint', 'PP-467', 'Mijan Islam', 'Mijans Father', 'Mijans Mother', '1997-01-08', '5689252562', 'Shajahanpur, Bogura', 'Shajahanpur, Bogura', 'Tanvir', '01789596936', 'Latifpur, Bogura', '498042', 'customer', '01789562312', 'mijan@gmail.com', 'uepv2x8iJM.jpg', 'HfnPXBANMJ.jpg', 'default.png', NULL, NULL, '2023-02-07 16:42:30', '2023-02-11 10:22:22'),
(15, '858556', 'ENABLE', '839740', 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'RyansPickPoint', 'PP-172', 'Kajol Islam', 'Kajol Father', 'Kajols Mother', '2000-02-15', '56892525626', 'Latifpur. Bogura', 'Latifpur. Bogura', 'Arifur Rahman', '01789596938', 'Latifpur, Bogura', '858556', 'customer', '01789562315', 'kajol@gmail.com', 'btXQxclNS9.jpg', 'NKw7H5dAXU.jpg', 'vQK7NaXEJH.jpg', NULL, NULL, '2023-02-08 08:34:19', '2023-02-11 10:42:20'),
(16, '495916', 'ENABLE', '847940', 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'SathmathaPoint', 'PP-467', 'Nahid Hasan', 'Nahid\'s Father', 'Nahid\'s Mother', '2023-02-23', '142222445588', 'Kalitola, Bogura', 'Kalitola, Bogura', 'Washiqul Islam', '01712456789', 'Rangpur', '495916', 'customer', '01738556644', 'nahid@yahoo.com', 'l4d6srgGEz.jpg', 'HsYO9tVe3r.jpg', 'JPXTAVMGwW.jpg', NULL, NULL, '2023-02-11 09:40:59', '2023-02-11 10:42:00'),
(17, '667850', 'ENABLE', '710505', 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'SathmathaPoint', 'PP-467', 'Sumon Islam', 'Sumon\'s Father', 'Sumon\'s Mother', '2023-02-12', '568925256244', 'Shajahanpur, Bogura', 'Shajahanpur, Bogura', 'Tanvir', '01789598899', 'Bogura', '667850', 'customer', '01789562312', 'sumon@gmail.com', 'dlyTtLvp9O.jpg', 'NPqQ2mAwIJ.jpg', 'hzkv42GEqo.jpg', NULL, NULL, '2023-02-11 10:27:38', '2023-05-27 15:54:40');

-- --------------------------------------------------------

--
-- Table structure for table `customer_purchase`
--

DROP TABLE IF EXISTS `customer_purchase`;
CREATE TABLE IF NOT EXISTS `customer_purchase` (
  `cp_id` int NOT NULL AUTO_INCREMENT,
  `cp_no` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_id` int NOT NULL,
  `pro_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `latest_price` decimal(10,2) NOT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `purchase_qty` int NOT NULL,
  `purchase_total` decimal(10,2) NOT NULL,
  `down_payment` decimal(10,2) NOT NULL,
  `pay_due` decimal(10,2) NOT NULL,
  `installment_plan` int NOT NULL,
  `per_installment` decimal(10,2) NOT NULL,
  `instl_given` int NOT NULL,
  `next_pay_date` date NOT NULL,
  `cm_id_no` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fw_id_no` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `branch_code` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pay_status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `next_level` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`cp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_purchase`
--

INSERT INTO `customer_purchase` (`cp_id`, `cp_no`, `pro_id`, `pro_name`, `latest_price`, `sell_price`, `purchase_qty`, `purchase_total`, `down_payment`, `pay_due`, `installment_plan`, `per_installment`, `instl_given`, `next_pay_date`, `cm_id_no`, `fw_id_no`, `branch_code`, `pay_status`, `next_level`, `status`, `created_date`, `updated_date`) VALUES
(1, '454809', 85, 'Football', '1800.00', '2200.00', 20, '44000.00', '30000.00', '14000.00', 4, '6000.00', 2, '2023-02-28', '667850', '710505', 'BR-887', 'RUNNING', 'N/A', 'APPROVED', '2023-02-27 00:00:00', '2023-02-28 15:16:32'),
(2, '721300', 94, 'PataPata Flip-Flop', '200.00', '250.00', 40, '10000.00', '10000.00', '0.00', 4, '1000.00', 2, '0000-00-00', '667850', '710505', 'BR-887', 'COMPLETED', 'N/A', 'APPROVED', '2023-02-27 15:53:32', '2023-02-28 15:11:24'),
(5, '720726', 91, 'Server PC', '120000.00', '150000.00', 1, '150000.00', '110000.00', '40000.00', 16, '4375.00', 2, '2023-03-07', '667850', '710505', 'BR-887', 'RUNNING', 'N/A', 'APPROVED', '2023-03-01 10:32:34', '2023-03-01 10:33:05'),
(3, '813590', 87, 'Volly Ball', '1800.00', '2500.00', 20, '50000.00', '50000.00', '0.00', 16, '1875.00', 4, '0000-00-00', '667850', '710505', 'BR-887', 'COMPLETED', 'N/A', 'APPROVED', '2023-02-28 11:15:13', '2023-02-28 14:58:41'),
(4, '132979', 87, 'Volly Ball', '1800.00', '2500.00', 20, '50000.00', '21875.00', '28125.00', 16, '1875.00', 2, '2023-03-07', '667850', '710505', 'BR-887', 'RUNNING', 'N/A', 'APPROVED', '2023-02-28 15:25:44', '2023-03-01 12:53:08'),
(6, '947813', 94, 'PataPata Flip-Flop', '200.00', '250.00', 10, '2500.00', '500.00', '2000.00', 4, '500.00', 1, '2023-03-31', '498042', '710505', 'BR-887', 'RUNNING', 'ADMIN', 'PENDING', '2023-03-01 15:11:25', '2023-03-01 15:11:25'),
(7, '785322', 95, 'Switch', '35.00', '50.00', 50, '2500.00', '500.00', '2000.00', 4, '500.00', 1, '2023-03-08', '667850', '710505', 'BR-887', 'RUNNING', 'ADMIN', 'PENDING', '2023-03-01 15:53:25', '2023-03-01 15:53:25'),
(8, '138705', 95, 'Switch', '35.00', '50.00', 10, '500.00', '200.00', '300.00', 4, '75.00', 1, '2023-03-08', '667850', '710505', 'BR-887', 'RUNNING', 'N/A', 'APPROVED', '2023-03-01 16:52:13', '2023-03-01 16:52:13'),
(9, '989544', 85, 'Football', '1800.00', '2200.00', 5, '11000.00', '5500.00', '5500.00', 16, '344.00', 1, '2023-03-09', '667850', '710505', 'BR-887', 'RUNNING', 'N/A', 'APPROVED', '2023-03-02 09:20:31', '2023-03-02 09:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `dep_id` int NOT NULL AUTO_INCREMENT,
  `dep_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dep_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `location` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`dep_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `distribution_details`
--

DROP TABLE IF EXISTS `distribution_details`;
CREATE TABLE IF NOT EXISTS `distribution_details` (
  `db_id` int NOT NULL AUTO_INCREMENT,
  `db_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `req_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_id` int NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `measure` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `qnty_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `instock` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `after_db_stock` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`db_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `distribution_list`
--

DROP TABLE IF EXISTS `distribution_list`;
CREATE TABLE IF NOT EXISTS `distribution_list` (
  `dbl_id` int NOT NULL AUTO_INCREMENT,
  `db_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `req_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `intotal_price` decimal(10,2) NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`dbl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `distributor`
--

DROP TABLE IF EXISTS `distributor`;
CREATE TABLE IF NOT EXISTS `distributor` (
  `dis_id` int NOT NULL AUTO_INCREMENT,
  `dis_code` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `company_code` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `branch_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `distributor` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_person` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cont_num` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dis_email` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dis_address` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `credit` decimal(10,2) NOT NULL,
  `debit` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass_word` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`dis_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `distributor_stock`
--

DROP TABLE IF EXISTS `distributor_stock`;
CREATE TABLE IF NOT EXISTS `distributor_stock` (
  `ds_id` int NOT NULL AUTO_INCREMENT,
  `company_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dis_code` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_id` int NOT NULL,
  `pro_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `total_stock` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `instock` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `measure` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `buy_price` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`ds_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `dis_ledger`
--

DROP TABLE IF EXISTS `dis_ledger`;
CREATE TABLE IF NOT EXISTS `dis_ledger` (
  `dl_id` int NOT NULL AUTO_INCREMENT,
  `dis_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `description` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `debit` decimal(10,2) NOT NULL,
  `credit` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`dl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `fao`
--

DROP TABLE IF EXISTS `fao`;
CREATE TABLE IF NOT EXISTS `fao` (
  `fao_id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `unit_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `department` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fao_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fao_id_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `designation` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cont_num` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fao_image` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass_word` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`fao_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `field_worker`
--

DROP TABLE IF EXISTS `field_worker`;
CREATE TABLE IF NOT EXISTS `field_worker` (
  `fw_id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `zonal_office` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `zonal_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `branch_office` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `branch_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pickpoint_code` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pickpoint_office` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `field_worker` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fw_id_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `designation` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cont_num` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fw_image` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fw_cv` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `target` decimal(10,2) NOT NULL,
  `achieve` decimal(10,2) NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass_word` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`fw_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `field_worker`
--

INSERT INTO `field_worker` (`fw_id`, `user_id`, `status`, `zonal_office`, `zonal_code`, `branch_office`, `branch_code`, `pickpoint_code`, `pickpoint_office`, `field_worker`, `fw_id_no`, `designation`, `cont_num`, `email`, `fw_image`, `fw_cv`, `target`, `achieve`, `user_name`, `pass_word`, `created_date`, `update_date`) VALUES
(23, '642681', 'ENABLE', 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'PP-467', 'SathmathaPoint', 'Abdul Hasan', '642681', 'field_worker', '01712456789', 'abdul@gmail.com', 'JFZoxVGd7g.jpg', 'x3zRnbM1iC.pdf', '10.00', '0.00', '422186', 'CF1234', '2023-02-06 15:25:49', '2023-02-09 17:09:02'),
(24, '847940', 'ENABLE', 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'PP-467', 'SathmathaPoint', 'Obidul Kader', '847940', 'field_worker', '01738556644', 'onidul.netmow@gmail.com', 'Op1BUHEl90.jpg', 'nc1qbNO6jT.pdf', '5.00', '0.00', '885297', 'CF1234', '2023-02-06 15:42:17', '2023-02-09 17:08:41'),
(25, '710505', 'ENABLE', 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'PP-467', 'SathmathaPoint', 'Zahid Hasan', '710505', 'field_worker', '01789562312', 'zahid@gmail.com', 'utUbxkJLiN.jpg', '0ZD5JSVCPn.pdf', '0.00', '0.00', '122114', 'CF1234', '2023-02-07 09:17:37', '2023-02-09 17:08:31'),
(26, '839740', 'ENABLE', 'Rajshahi Zone ', 'ZON-253', 'Ryans Computer', 'BR-887', 'PP-172', 'RyansPickPoint', 'Selim Khan', '839740', 'field_worker', '01350060022', 'selimkhan@gmail.com', 'JWHNwK3BsF.jpg', 'cwteKo21HG.pdf', '5.00', '0.00', '416488', 'CF1234', '2023-02-09 16:22:05', '2023-02-09 17:10:11'),
(27, '513503', 'ENABLE', 'Dinajpur Zone', 'ZON-847', 'NilfamariNewMarket', 'BR-442', 'PP-796', 'Elephant Road', 'Tonmoy Islam', '513503', 'field_worker', '01712456789', 'tonmoy@gmail.com', 'lVcRnTeCXJ.jpg', '4HeSK6sy8c.pdf', '5.00', '0.00', '234517', 'CF1234', '2023-02-11 11:44:33', '2023-02-11 11:44:42'),
(28, '531300', 'DISABLE', 'Dinajpur Zone', 'ZON-847', 'NilfamariNewMarket', 'BR-442', 'PP-796', 'Elephant Road', 'Kabir Zahid', '531300', 'field_worker', '0178956231222', 'zahid@gmail.com', 'eCNbJ3Q6gl.jpg', 'yf6jKGINc8.pdf', '0.00', '0.00', '168361', 'CF1234', '2023-02-11 14:34:41', '2023-05-25 10:05:09'),
(29, '316189', 'DISABLE', '', '', 'ComputerSource', 'BR-836', '', '', 'Minhazul Islam', '316189', 'field_worker', '01789562312', 'minhaz@gmail.com', 'TRekQtUXvx.jpg', '45IMCFE6Zz.pdf', '0.00', '0.00', '802137', 'CF1234', '2023-03-01 15:17:03', '2023-03-01 15:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `guardian_info`
--

DROP TABLE IF EXISTS `guardian_info`;
CREATE TABLE IF NOT EXISTS `guardian_info` (
  `guardian_id` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `guardian_info_type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `guardian_info_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `guardian_info_phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `guardian_info_rltn` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `guardian_info_nid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `guardian_info_profession` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `guardian_info_date_of_birth` date NOT NULL,
  `guardian_info_religion` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `guardian_info_other` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `guardian_info_present_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `guardian_info_permanent_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`guardian_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guardian_info`
--

INSERT INTO `guardian_info` (`guardian_id`, `uid`, `guardian_info_type`, `guardian_info_name`, `guardian_info_phone`, `guardian_info_rltn`, `guardian_info_nid`, `guardian_info_profession`, `guardian_info_date_of_birth`, `guardian_info_religion`, `guardian_info_other`, `guardian_info_present_address`, `guardian_info_permanent_address`) VALUES
(1, 6, 'other', 'Ross Rush', '+1 (468) 461-9467', 'Ad vel magnam eum pe', 'Placeat quia odit o', 'Adipisicing nobis hi', '1979-01-02', 'Islam', 'Tempora in a odio id', 'A numquam vitae culp', 'Vel sed optio conse'),
(2, 7, 'exist_guardian', 'Philip Coffey', '+1 (906) 677-2068', 'Error doloribus odio', 'Placeat mollit iure', 'Consequat A occaeca', '2012-11-13', 'Buddha', 'Consectetur eligendi', 'Culpa esse sunt vol', 'A sunt quas dolorem');

-- --------------------------------------------------------

--
-- Table structure for table `home_contents`
--

DROP TABLE IF EXISTS `home_contents`;
CREATE TABLE IF NOT EXISTS `home_contents` (
  `hc_id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `title_desc` mediumtext COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(33) COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`hc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

DROP TABLE IF EXISTS `institute`;
CREATE TABLE IF NOT EXISTS `institute` (
  `inst_id` int NOT NULL AUTO_INCREMENT,
  `inst_eiin` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `inst_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `inst_founded` date NOT NULL,
  `inst_board` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `inst_logo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `inst_contact` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`inst_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`inst_id`, `inst_eiin`, `inst_name`, `inst_founded`, `inst_board`, `inst_logo`, `inst_contact`) VALUES
(5, 'Quasi in ut in error', 'Medge Estesss', '1986-09-14', '+1 (537) 359-3157', 'Ip5O04BGkc.jpg', 'Quaerat ut voluptatu'),
(6, 'Quasi in ut in error', 'Medge fff', '1986-09-14', '+1 (537) 359-3157', '6cM40whDXb.jpg', 'Quaerat ut voluptatu'),
(8, 'Ullam eveniet eos ', 'Kaitlin Bryan', '1994-04-02', '+1 (952) 156-8344', '2l0y4ROGfK.jpg', 'Velit quidem iure il');

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
  `invoice_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `invoice_date` date NOT NULL,
  `pro_id` int NOT NULL,
  `pro_qnty` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `qnty_instock` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `qnty_messure` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `qnty_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `pay_due` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`iv_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_cart`
--

DROP TABLE IF EXISTS `inventory_cart`;
CREATE TABLE IF NOT EXISTS `inventory_cart` (
  `ivc_id` int NOT NULL AUTO_INCREMENT,
  `pro_id` int NOT NULL,
  `procat_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_brand` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sup_id` int NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `measure` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `qnty_price` decimal(10,2) NOT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`ivc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `inventory_details`
--

DROP TABLE IF EXISTS `inventory_details`;
CREATE TABLE IF NOT EXISTS `inventory_details` (
  `ivd_id` int NOT NULL AUTO_INCREMENT,
  `inventory_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_id` int NOT NULL,
  `procat_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_brand` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sup_id` int NOT NULL,
  `invoice_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `invoice_date` date NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `measure` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `qnty_price` decimal(10,2) NOT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`ivd_id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory_details`
--

INSERT INTO `inventory_details` (`ivd_id`, `inventory_no`, `pro_id`, `procat_id`, `pro_brand`, `sup_id`, `invoice_no`, `invoice_date`, `pro_qnty`, `measure`, `qnty_price`, `sell_price`, `total_price`, `created_date`, `update_date`) VALUES
(39, 'IV89691426', 87, 'Sports', 'Puma', 13, '67994651', '2023-02-23', '100', 'Piece', '1800.00', '2500.00', '180000.00', '2023-02-23 11:58:28', '2023-02-23 11:59:10'),
(40, 'IV89691426', 85, 'Sports', 'Puma', 13, '67994651', '2023-02-23', '25', 'Piece', '800.00', '1200.00', '20000.00', '2023-02-23 11:59:01', '2023-02-23 11:59:10'),
(41, 'IV59819922', 94, 'Shoe', 'Bata', 18, '79050930', '2023-02-23', '200', 'Piece', '200.00', '250.00', '40000.00', '2023-02-23 14:41:07', '2023-02-23 14:41:20'),
(42, 'IV77484382', 85, 'Sports', 'Puma', 13, '25169676', '2023-02-24', '30', 'Piece', '1800.00', '2200.00', '54000.00', '2023-02-24 11:18:52', '2023-02-24 11:22:06'),
(43, 'IV76796432', 92, 'Electronic Device', 'Nitol', 15, '87523750', '2023-02-24', '300', 'Piece', '35.00', '50.00', '10500.00', '2023-02-24 11:25:58', '2023-02-24 11:26:07'),
(44, 'IV90224755', 91, 'Computer Accessories', 'ASUS', 14, '16629377', '2023-03-01', '15', 'Piece', '120000.00', '150000.00', '1800000.00', '2023-03-01 10:13:17', '2023-03-01 10:13:30'),
(45, 'IV44848642', 89, 'Electronic Device', 'Superstar', 17, '26312541', '2023-03-02', '30', 'Piece', '1500.00', '2000.00', '45000.00', '2023-03-02 09:36:32', '2023-03-02 09:36:41'),
(46, 'IV25218628', 94, 'Shoe', 'Bata', 18, '37473800', '2023-03-02', '15', 'Piece', '1500.00', '1750.00', '22500.00', '2023-02-23 17:15:56', '2023-03-02 09:36:49'),
(47, 'IV74003930', 94, 'Shoe', 'Bata', 18, '44464830', '2023-03-02', '300', 'Piece', '200.00', '350.00', '60000.00', '2023-03-02 09:38:44', '2023-03-02 09:38:57'),
(48, 'IV45039715', 88, 'Electronic Device', 'Superstar', 12, '94132895', '2023-03-02', '500', 'Piece', '450.00', '600.00', '225000.00', '2023-03-02 09:41:13', '2023-03-02 09:41:19'),
(49, 'IV63355663', 90, 'Computer Accessories', 'HP', 14, '46228579', '2023-03-02', '15', 'Piece', '85000.00', '120000.00', '1275000.00', '2023-03-02 09:43:09', '2023-03-02 09:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `inventory_list`
--

DROP TABLE IF EXISTS `inventory_list`;
CREATE TABLE IF NOT EXISTS `inventory_list` (
  `ivl_id` int NOT NULL AUTO_INCREMENT,
  `inventory_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `invoice_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sup_id` int NOT NULL,
  `invoice_date` date NOT NULL,
  `intotal` decimal(10,2) NOT NULL,
  `commission` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `pay_sys` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `due` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`ivl_id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory_list`
--

INSERT INTO `inventory_list` (`ivl_id`, `inventory_no`, `invoice_no`, `sup_id`, `invoice_date`, `intotal`, `commission`, `payment`, `pay_sys`, `sub_total`, `due`, `created_date`, `update_date`) VALUES
(28, 'IV89691426', '67994651', 13, '2023-02-23', '200000.00', '0.00', '200000.00', 'cash', '200000.00', '0.00', '2023-02-23 11:59:10', '2023-02-23 11:59:10'),
(29, 'IV59819922', '79050930', 18, '2023-02-23', '40000.00', '0.00', '40000.00', 'cash', '40000.00', '0.00', '2023-02-23 14:41:20', '2023-02-23 14:41:20'),
(30, 'IV77484382', '25169676', 13, '2023-02-24', '54000.00', '0.00', '54000.00', 'cash', '54000.00', '0.00', '2023-02-24 11:22:06', '2023-02-24 11:22:06'),
(31, 'IV76796432', '87523750', 15, '2023-02-24', '10500.00', '0.00', '10500.00', 'cash', '10500.00', '0.00', '2023-02-24 11:26:07', '2023-02-24 11:26:07'),
(32, 'IV90224755', '16629377', 14, '2023-03-01', '1800000.00', '0.00', '1800000.00', 'cash', '1800000.00', '0.00', '2023-03-01 10:13:30', '2023-03-01 10:13:30'),
(33, 'IV44848642', '26312541', 17, '2023-03-02', '45000.00', '0.00', '45000.00', 'cash', '45000.00', '0.00', '2023-03-02 09:36:41', '2023-03-02 09:36:41'),
(34, 'IV25218628', '37473800', 18, '2023-03-02', '22500.00', '0.00', '22500.00', 'cash', '22500.00', '0.00', '2023-03-02 09:36:49', '2023-03-02 09:36:49'),
(35, 'IV74003930', '44464830', 18, '2023-03-02', '60000.00', '0.00', '60000.00', 'cash', '60000.00', '0.00', '2023-03-02 09:38:57', '2023-03-02 09:38:57'),
(36, 'IV45039715', '94132895', 12, '2023-03-02', '225000.00', '0.00', '225000.00', 'cash', '225000.00', '0.00', '2023-03-02 09:41:19', '2023-03-02 09:41:19'),
(37, 'IV63355663', '46228579', 14, '2023-03-02', '1275000.00', '0.00', '1275000.00', 'cash', '1275000.00', '0.00', '2023-03-02 09:43:14', '2023-03-02 09:43:14');

-- --------------------------------------------------------

--
-- Table structure for table `kazi`
--

DROP TABLE IF EXISTS `kazi`;
CREATE TABLE IF NOT EXISTS `kazi` (
  `kazi_id` int NOT NULL AUTO_INCREMENT,
  `kazi_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kazi_division` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kazi_district` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kazi_thana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kazi_union` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kazi_village` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kazi_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kazi_mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kazi_nid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kazi_date_of_birth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kazi_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kazi_father_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kazi_username` varchar(33) COLLATE utf8mb4_general_ci NOT NULL,
  `kazi_password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`kazi_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kazi`
--

INSERT INTO `kazi` (`kazi_id`, `kazi_name`, `kazi_division`, `kazi_district`, `kazi_thana`, `kazi_union`, `kazi_village`, `kazi_address`, `kazi_mobile`, `kazi_nid`, `kazi_date_of_birth`, `kazi_image`, `kazi_father_name`, `kazi_username`, `kazi_password`) VALUES
(9, 'Logan Wagner', 'Optio in earum ad d', 'Adipisci vel officii', 'Vel repellendus Arc', 'Et quisquam labore c', 'Repudiandae dicta om', 'Facilis nesciunt qu', '+1 (389) 935-4499', '197', '2019-11-04', 'EW7HTf1amS.jpg', 'Roanna Diaz', 'dddd2', 'dddd'),
(12, '490511', '22222', '444554', '4555252', '2524', '', '11', '22222', '6565', '2023-05-31', 'IixF2QZDRW.jpg', '44', '5645454', '5514444');

-- --------------------------------------------------------

--
-- Table structure for table `measure`
--

DROP TABLE IF EXISTS `measure`;
CREATE TABLE IF NOT EXISTS `measure` (
  `msr_id` int NOT NULL AUTO_INCREMENT,
  `measure_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `measure_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `procat_id` int DEFAULT NULL,
  `pro_cat_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`msr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `news_category` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `news_sub_category` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `news_description` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `news_image` text COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_category`, `news_sub_category`, `news_description`, `news_image`) VALUES
(9, 'Corporis autem quos ', '3', '2', 'Cumque aliquid omnis', 'IMsiUd607J.jpg'),
(10, 'Eum culpa ab alias c', '2', '2', 'Aliquip porro illum', 'OYQiNu5gqG.jpg'),
(5, 'Officia ipsum perfer', '3', '2', 'Voluptas eaque conse', 'C5NRHxrQGA.jpg'),
(6, 'seoexpate.com ddf', '2', '3', 'hello dev news dd', '9zavW5BKoH.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `non_student`
--

DROP TABLE IF EXISTS `non_student`;
CREATE TABLE IF NOT EXISTS `non_student` (
  `non_st_id` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_date_of_birth` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_gender` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_bg_group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_religion` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_nid_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_birth_certificate_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_health_condition` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_photo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_present_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_permanent_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_fathers_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_fathers_phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_fathers_nid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_fathers_profession` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_mothers_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_mothers_phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_mothers_nid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_mothers_profession` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_guardian_info_type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_guardian_info_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_guardian_info_phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_guardian_info_rltn` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_guardian_info_nid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_guardian_info_profession` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_guardian_info_date_of_birth` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_guardian_info_religion` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_guardian_info_other` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_guardian_info_present_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `non_st_guardian_info_permanent_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `non_student`
--

INSERT INTO `non_student` (`non_st_id`, `non_st_name`, `non_st_date_of_birth`, `non_st_gender`, `non_st_bg_group`, `non_st_religion`, `non_st_phone`, `non_st_nid_no`, `non_st_birth_certificate_id`, `non_st_health_condition`, `non_st_photo`, `non_st_present_address`, `non_st_permanent_address`, `non_st_fathers_name`, `non_st_fathers_phone`, `non_st_fathers_nid`, `non_st_fathers_profession`, `non_st_mothers_name`, `non_st_mothers_phone`, `non_st_mothers_nid`, `non_st_mothers_profession`, `non_st_guardian_info_type`, `non_st_guardian_info_name`, `non_st_guardian_info_phone`, `non_st_guardian_info_rltn`, `non_st_guardian_info_nid`, `non_st_guardian_info_profession`, `non_st_guardian_info_date_of_birth`, `non_st_guardian_info_religion`, `non_st_guardian_info_other`, `non_st_guardian_info_present_address`, `non_st_guardian_info_permanent_address`) VALUES
('', 'Halla Nash', '2006-06-20', 'Male', 'B+', 'Islam', '+1 (743) 209-5411', 'Laborum ullamco opti', 'Deserunt facere elig', 'Animi consequatur q', 'hOK8noVv50.jpg', 'Veritatis dicta dolo', 'Explicabo Sed perfe', 'Nash Fitzpatrick', '+1 (396) 466-2808', 'Omnis totam ut moles', 'Esse ipsum commodo ', 'Jermaine Clarke', '+1 (725) 419-5559', 'Voluptates soluta ea', 'Ducimus alias bland', 'father', 'Gareth Hines', '+1 (351) 993-3014', 'Dolore dolore et err', 'Dolorem assumenda mo', 'Dolorum recusandae ', '2017-02-04', 'Islam', 'Qui nulla eu in aper', 'Omnis rerum dolorem ', 'Non doloremque moles');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
CREATE TABLE IF NOT EXISTS `notice` (
  `not_id` int NOT NULL AUTO_INCREMENT,
  `not_title` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `not_category` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `not_description` longtext COLLATE utf8mb4_general_ci NOT NULL,
  `not_thumbnail` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`not_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`not_id`, `not_title`, `not_category`, `not_description`, `not_thumbnail`) VALUES
(4, 'Sunt dolor recusand', 'Voluptatum doloremqu', '                                                                        Ut sed fugiat deseru                                                                ', 'O6xW7wlpJH.jpg'),
(3, 'Sed esse corrupti fdsdsddd', 'Reprehenderit porro', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              dfsdfsd  \r\n                                                                dfsdfsdf                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', 'asnPCr4KcM.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_cart`
--

DROP TABLE IF EXISTS `order_cart`;
CREATE TABLE IF NOT EXISTS `order_cart` (
  `or_id` int NOT NULL AUTO_INCREMENT,
  `order_no` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `order_date` date NOT NULL,
  `fw_id_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `company_code` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dis_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_id` int NOT NULL,
  `pro_name` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `instock` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `measure` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `distribute_price` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`or_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_cart`
--

INSERT INTO `order_cart` (`or_id`, `order_no`, `order_date`, `fw_id_no`, `company_code`, `dis_code`, `pro_id`, `pro_name`, `pro_qnty`, `instock`, `measure`, `sell_price`, `total_price`, `distribute_price`, `created_date`, `update_date`) VALUES
(16, 'ORN-5194', '2023-02-28', '531300', '', '', 94, 'PataPata Flip-Flop', '50', '25', 'Piece', '250.00', '12500.00', '12500.00', '2023-02-23 16:18:38', '2023-02-23 16:18:38'),
(17, 'ORN-5194', '2023-02-28', '531300', '', '', 87, 'Volly Ball', '5', '25', 'Piece', '2500.00', '12500.00', '12500.00', '2023-02-23 16:19:01', '2023-02-23 16:19:01'),
(18, 'ORN-5347', '2023-02-28', '531300', '', '', 87, 'Volly Ball', '10', '25', 'Piece', '2500.00', '25000.00', '25000.00', '2023-02-24 08:12:42', '2023-02-24 08:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `od_id` int NOT NULL AUTO_INCREMENT,
  `order_no` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `order_date` date NOT NULL,
  `fw_id_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `company_code` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dis_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_id` int NOT NULL,
  `pro_name` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `instock` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `distribute` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `measure` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `distribute_price` decimal(10,2) NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`od_id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

DROP TABLE IF EXISTS `order_list`;
CREATE TABLE IF NOT EXISTS `order_list` (
  `ol_id` int NOT NULL AUTO_INCREMENT,
  `order_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `order_date` date NOT NULL,
  `fw_id_no` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `company_code` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dis_code` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `intotal` decimal(10,2) NOT NULL,
  `commission_per` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `commission` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `pay_sys` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `due` decimal(10,2) NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`ol_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parents_info`
--

DROP TABLE IF EXISTS `parents_info`;
CREATE TABLE IF NOT EXISTS `parents_info` (
  `parents_info_id` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `fathers_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `fathers_phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `fathers_nid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `fathers_profession` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mothers_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mothers_phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mothers_nid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mothers_profession` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`parents_info_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parents_info`
--

INSERT INTO `parents_info` (`parents_info_id`, `uid`, `fathers_name`, `fathers_phone`, `fathers_nid`, `fathers_profession`, `mothers_name`, `mothers_phone`, `mothers_nid`, `mothers_profession`) VALUES
(6, 8, 'mdx', '01711242358', '02121200', 'Retired Govt Officer', 'MSTX', '01931360006', '8564568', 'House wife'),
(5, 7, '01968402925,Shribordi, Sherpur District', '+1 (213) 891-3483', 'Dolore aut unde haru', 'Consectetur ratione ', 'Clementine Nichols', '+1 (712) 401-5648', 'Sequi velit est minu', 'Non adipisci ex odit'),
(4, 6, 'fghfghfgh', '+1 (473) 413-5058', 'Autem ut perferendis', 'Voluptatum quia eius', 'Hector Davenport', '+1 (422) 421-2157', 'Irure illum sit ir', 'Odit ducimus quis n');

-- --------------------------------------------------------

--
-- Table structure for table `payment_methods`
--

DROP TABLE IF EXISTS `payment_methods`;
CREATE TABLE IF NOT EXISTS `payment_methods` (
  `pm_id` int NOT NULL AUTO_INCREMENT,
  `payment_method` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`pm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pickpoint_office`
--

DROP TABLE IF EXISTS `pickpoint_office`;
CREATE TABLE IF NOT EXISTS `pickpoint_office` (
  `pickpoint_id` int NOT NULL AUTO_INCREMENT,
  `zonal_office` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `zonal_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `branch_office` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `branch_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `division` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `district` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pickpoint_office` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pickpoint_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_address` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pickpoint_head_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `founded_date` date NOT NULL,
  PRIMARY KEY (`pickpoint_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `procat_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pro_brand` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pro_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pro_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `sup_id` int DEFAULT NULL,
  `total_stock` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `instock` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `measure` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `last_price` decimal(10,2) DEFAULT NULL,
  `latest_price` decimal(10,2) DEFAULT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `all_time_sell` int NOT NULL,
  `update_date` datetime DEFAULT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB AUTO_INCREMENT=99 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_name`
--

INSERT INTO `product_name` (`pro_id`, `procat_id`, `pro_brand`, `pro_name`, `pro_code`, `sup_id`, `total_stock`, `instock`, `measure`, `last_price`, `latest_price`, `sell_price`, `all_time_sell`, `update_date`) VALUES
(85, 'Sports', 'Puma', 'Football', 'PRO-184', 13, '55', '50', 'Piece', '800.00', '1800.00', '2200.00', 5, '2023-03-02 09:20:31'),
(86, NULL, NULL, 'Cricket Bat', 'PRO-216', 13, NULL, '0', NULL, NULL, NULL, '0.00', 0, NULL),
(87, 'Sports', 'Puma', 'Volly Ball', 'PRO-928', 13, '100', '80', 'Piece', '1800.00', '1800.00', '2500.00', 20, '2023-02-28 15:36:56'),
(88, NULL, NULL, 'Electronic Bulb', 'PRO-706', 15, NULL, '0', NULL, NULL, NULL, '0.00', 0, NULL),
(89, NULL, NULL, 'Electronic Fan', 'PRO-329', 15, NULL, '0', NULL, NULL, NULL, '0.00', 0, NULL),
(90, 'Computer Accessories', 'HP', 'Laptop', 'PRO-738', 14, '15', '15', 'Piece', '85000.00', '85000.00', '120000.00', 0, '2023-03-02 09:43:14'),
(91, 'Computer Accessories', 'ASUS', 'Server PC', 'PRO-238', 14, '15', '14', 'Piece', '120000.00', '120000.00', '150000.00', 1, '2023-03-01 10:32:34'),
(92, NULL, NULL, 'Switch', 'PRO-926', 12, NULL, '0', NULL, NULL, NULL, '0.00', 0, NULL),
(93, NULL, NULL, 'Juice', 'PRO-444', 16, NULL, '0', NULL, NULL, NULL, '0.00', 0, NULL),
(94, 'Shoe', 'Bata', 'PataPata Flip-Flop', 'PRO-130', 18, '515', '505', 'Piece', '200.00', '200.00', '350.00', 10, '2023-03-02 09:38:57'),
(95, 'Electronic Device', 'Nitol', 'Switch', 'PRO-468', 15, '300', '240', 'Piece', '35.00', '35.00', '50.00', 60, '2023-03-01 16:52:13'),
(96, 'Electronic Device', 'Superstar', 'Electronic Fan', 'PRO-691', 17, '30', '30', 'Piece', '1500.00', '1500.00', '2000.00', 0, '2023-03-02 09:36:41'),
(97, 'Electronic Device', 'Superstar', 'Electronic Bulb', 'PRO-777', 12, '500', '500', 'Piece', '450.00', '450.00', '600.00', 0, '2023-03-02 09:41:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_requisition`
--

DROP TABLE IF EXISTS `product_requisition`;
CREATE TABLE IF NOT EXISTS `product_requisition` (
  `req_id` int NOT NULL AUTO_INCREMENT,
  `pro_id` int NOT NULL,
  `pro_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sup_id` int NOT NULL,
  `supplier_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `latest_price` decimal(10,2) NOT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `instock` int NOT NULL,
  `req_stock` int NOT NULL,
  `field_worker` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fw_id_no` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_requisition`
--

INSERT INTO `product_requisition` (`req_id`, `pro_id`, `pro_name`, `sup_id`, `supplier_name`, `latest_price`, `sell_price`, `instock`, `req_stock`, `field_worker`, `fw_id_no`, `created_date`) VALUES
(4, 86, 'Cricket Bat', 13, 'Khela Ghar', '0.00', '0.00', 0, 50, 'Zahid Hasan', '710505', '2023-03-03 10:00:36'),
(6, 88, 'Electronic Bulb', 15, 'Nitol BD', '0.00', '0.00', 0, 50, 'Kabir Zahid', '531300', '2023-03-03 10:01:53');

-- --------------------------------------------------------

--
-- Table structure for table `pro_brand`
--

DROP TABLE IF EXISTS `pro_brand`;
CREATE TABLE IF NOT EXISTS `pro_brand` (
  `brand_id` int NOT NULL AUTO_INCREMENT,
  `pro_brand` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_brand_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`brand_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pro_brand`
--

INSERT INTO `pro_brand` (`brand_id`, `pro_brand`, `pro_brand_code`) VALUES
(11, 'Puma', 'BRAND-966'),
(12, 'Nitol', 'BRAND-584'),
(13, 'Superstar', 'BRAND-166'),
(14, 'ASUS', 'BRAND-977'),
(15, 'HP', 'BRAND-498'),
(16, 'Apple', 'BRAND-907'),
(17, 'Bata', 'BRAND-201');

-- --------------------------------------------------------

--
-- Table structure for table `pro_category`
--

DROP TABLE IF EXISTS `pro_category`;
CREATE TABLE IF NOT EXISTS `pro_category` (
  `procat_id` int NOT NULL AUTO_INCREMENT,
  `pro_cat_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_cat_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`procat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pro_category`
--

INSERT INTO `pro_category` (`procat_id`, `pro_cat_name`, `pro_cat_code`) VALUES
(17, 'Sports', 'PROCAT-600'),
(18, 'Computer Accessories', 'PROCAT-700'),
(19, 'Electronic Device', 'PROCAT-899'),
(20, 'Furniture', 'PROCAT-550'),
(21, 'Shoe', 'PROCAT-465'),
(23, 'Dress', 'PROCAT-912');

-- --------------------------------------------------------

--
-- Table structure for table `pro_sub_cat`
--

DROP TABLE IF EXISTS `pro_sub_cat`;
CREATE TABLE IF NOT EXISTS `pro_sub_cat` (
  `prosubcat_id` int NOT NULL AUTO_INCREMENT,
  `pro_sub_cat_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_sub_cat_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `procat_id` int NOT NULL,
  `pro_cat_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`prosubcat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_details`
--

DROP TABLE IF EXISTS `purchase_order_details`;
CREATE TABLE IF NOT EXISTS `purchase_order_details` (
  `po_id` int NOT NULL AUTO_INCREMENT,
  `po_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ip_add` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `procat_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_brand` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `qnty_messure` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `next_level` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`po_id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order_list`
--

DROP TABLE IF EXISTS `purchase_order_list`;
CREATE TABLE IF NOT EXISTS `purchase_order_list` (
  `pol_id` int NOT NULL AUTO_INCREMENT,
  `po_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `next_level` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`pol_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `purohit`
--

DROP TABLE IF EXISTS `purohit`;
CREATE TABLE IF NOT EXISTS `purohit` (
  `purohit_id` int NOT NULL AUTO_INCREMENT,
  `purohit_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_division` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_district` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_thana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_union` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_village` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_nid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_date_of_birth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_father_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`purohit_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purohit`
--

INSERT INTO `purohit` (`purohit_id`, `purohit_name`, `purohit_division`, `purohit_district`, `purohit_thana`, `purohit_union`, `purohit_village`, `purohit_address`, `purohit_mobile`, `purohit_nid`, `purohit_date_of_birth`, `purohit_image`, `purohit_father_name`) VALUES
(8, 'ranaX', 'Rajhshahi', 'Bogura', 'Bogura Sadar', 'Bogura Sadar', 'Anandapara naruli bogura', 'anandapara naruli bogura', '01797872701', '2525852525', '1983-07-30', 'y7QrVRYJ4W.jpg', 'md x'),
(7, 'Lionel Robertson', 'Voluptatem rerum min', 'Quam vero quisquam c', 'Atque mollitia non a', 'A qui Nam ipsam aut ', 'Voluptates doloremqu', 'Praesentium consecte', '+1 (898) 519-2973', '687', '2020-08-03', '2teHJK4WoG.jpg', 'Ross Holcomb');

-- --------------------------------------------------------

--
-- Table structure for table `qnty_messure`
--

DROP TABLE IF EXISTS `qnty_messure`;
CREATE TABLE IF NOT EXISTS `qnty_messure` (
  `qm_id` int NOT NULL AUTO_INCREMENT,
  `qnty_messure` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`qm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `rp_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ip_add` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `procat_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_brand` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `qnty_messure` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `next_level` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`rp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_purchase_list`
--

DROP TABLE IF EXISTS `request_purchase_list`;
CREATE TABLE IF NOT EXISTS `request_purchase_list` (
  `rpl_id` int NOT NULL AUTO_INCREMENT,
  `rp_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `next_level` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`rpl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request_requisition`
--

DROP TABLE IF EXISTS `request_requisition`;
CREATE TABLE IF NOT EXISTS `request_requisition` (
  `rr_id` int NOT NULL AUTO_INCREMENT,
  `req_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ip_add` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_id` int NOT NULL,
  `procat_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_brand` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `qnty_messure` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `qnty_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `next_level` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`rr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales_cart`
--

DROP TABLE IF EXISTS `sales_cart`;
CREATE TABLE IF NOT EXISTS `sales_cart` (
  `so_id` int NOT NULL AUTO_INCREMENT,
  `order_no` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `order_date` date NOT NULL,
  `delevery_date` date NOT NULL,
  `fw_id_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `company_code` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dis_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_id` int NOT NULL,
  `pro_name` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `instock` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `measure` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `distribute_price` decimal(10,2) DEFAULT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`so_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

DROP TABLE IF EXISTS `sales_details`;
CREATE TABLE IF NOT EXISTS `sales_details` (
  `sd_id` int NOT NULL AUTO_INCREMENT,
  `order_no` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `order_date` date NOT NULL,
  `delevery_date` date NOT NULL,
  `fw_id_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `company_code` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dis_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_id` int NOT NULL,
  `pro_name` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pro_qnty` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `instock` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `distribute` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `measure` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sell_price` decimal(10,2) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `distribute_price` decimal(10,2) DEFAULT NULL,
  `status` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`sd_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sales_list`
--

DROP TABLE IF EXISTS `sales_list`;
CREATE TABLE IF NOT EXISTS `sales_list` (
  `sl_id` int NOT NULL AUTO_INCREMENT,
  `order_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `order_date` date NOT NULL,
  `delevery_date` date NOT NULL,
  `fw_id_no` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `company_code` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `dis_code` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `intotal` decimal(10,2) NOT NULL,
  `commission_per` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `commission` decimal(10,2) NOT NULL,
  `payment` decimal(10,2) NOT NULL,
  `pay_sys` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sub_total` decimal(10,2) NOT NULL,
  `due` decimal(10,2) NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`sl_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `st_id` int NOT NULL AUTO_INCREMENT,
  `st_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `st_date_of_birth` date NOT NULL,
  `st_gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `st_bg_group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `st_religion` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `st_phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `st_nid_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `st_birth_certificate_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `st_health_condition` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `st_photo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `st_inst_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `st_present_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `st_permanent_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `st_name`, `st_date_of_birth`, `st_gender`, `st_bg_group`, `st_religion`, `st_phone`, `st_nid_no`, `st_birth_certificate_id`, `st_health_condition`, `st_photo`, `st_inst_name`, `st_present_address`, `st_permanent_address`) VALUES
(8, 'Md Rashaduzzaman', '2023-05-31', 'Male', 'B-', 'Islam', '+8802589912174', '52513333', '122247554545', '', 'NCSysEgrkQ.jpg', 'Kaitlin Bryan', 'Majhira Kagjipara', 'Majhira Kagjipara'),
(7, 'es', '1980-05-11', '', '', '', '+1 (683) 129-1729', 'Nulla enim proident', 'Ut iste ut ut culpa ', 'Adipisicing vero omn', 'default.png', 'rsmd', '01968402925,Shribordi, Sherpur District', '01968402925,Shribordi, Sherpur District'),
(6, 'gfhfhfg', '2018-08-18', '', '', '', '+1 (434) 179-7068', 'Alias minim magni te', 'Et at eligendi volup', 'Danielle Pace', 'default.png', 'Medge fff', 'fghgfhfg', 'Numquam deserunt in ');

-- --------------------------------------------------------

--
-- Table structure for table `submit_requisition`
--

DROP TABLE IF EXISTS `submit_requisition`;
CREATE TABLE IF NOT EXISTS `submit_requisition` (
  `sr_id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `req_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `next_level` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `intotal_price` decimal(10,2) NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`sr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

DROP TABLE IF EXISTS `supplier`;
CREATE TABLE IF NOT EXISTS `supplier` (
  `sup_id` int NOT NULL AUTO_INCREMENT,
  `sup_category` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sup_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `last_bal` decimal(10,2) NOT NULL,
  `balance` decimal(10,2) NOT NULL,
  `due` decimal(10,2) NOT NULL,
  `commission` decimal(10,2) NOT NULL,
  `cont_num` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sup_email` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `sup_address` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`sup_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`sup_id`, `sup_category`, `sup_name`, `last_bal`, `balance`, `due`, `commission`, `cont_num`, `sup_email`, `sup_address`, `created_date`, `update_date`) VALUES
(12, 'Electronic Items', 'M/S Superstar', '0.00', '225000.00', '0.00', '0.00', '01712456789', 'superstar@gmail.com', '7 Matha, Bogura', '2023-02-15 11:39:22', '2023-03-02 09:41:19'),
(13, 'Sports Item', 'Khela Ghar', '378500.00', '432500.00', '0.00', '0.00', '01366556688', 'khela@gmail.com', '7 Matha, Bogura', '2023-02-15 12:17:04', '2023-02-24 11:22:06'),
(14, 'Electronic Items', 'Ryans Computers', '1800000.00', '3075000.00', '0.00', '0.00', '01712456789', 'ryans@gmail.com', '7 Matha, Bogura', '2023-02-21 11:55:21', '2023-03-02 09:43:14'),
(15, 'Electronic Items', 'Nitol BD', '306000.00', '316500.00', '0.00', '0.00', '01715556644', 'nitol@gmail.com', 'Natore, Bogura', '2023-02-21 11:56:16', '2023-02-24 11:26:07'),
(16, 'Grocery', 'Pran Grop', '0.00', '0.00', '0.00', '0.00', '01712456789', 'pran@gmail.com', 'Gazipur, Bogura', '2023-02-21 11:56:49', '2023-02-21 11:56:49'),
(17, 'Grocery', 'Boshundhara Group', '0.00', '45000.00', '0.00', '0.00', '01715556639', 'boshundhara@gmail.com', 'Boshundhara, Dhaka', '2023-02-21 11:58:02', '2023-03-02 09:36:41'),
(18, '', 'Bata Industrials', '77500.00', '137500.00', '0.00', '0.00', '01366556688', 'bata@gmail.com', '7 Matha, Bogura', '2023-02-23 14:22:45', '2023-03-02 09:38:57');

-- --------------------------------------------------------

--
-- Table structure for table `sup_category`
--

DROP TABLE IF EXISTS `sup_category`;
CREATE TABLE IF NOT EXISTS `sup_category` (
  `supc_id` int NOT NULL AUTO_INCREMENT,
  `supc_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `supc_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`supc_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sup_category`
--

INSERT INTO `sup_category` (`supc_id`, `supc_name`, `supc_code`) VALUES
(16, 'Electronic Items', 'SUPC-537'),
(17, 'Sports Item', 'SUPC-312'),
(19, 'Grocery', 'SUPC-782'),
(20, 'Gadgets', 'SUPC-182');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
CREATE TABLE IF NOT EXISTS `units` (
  `unit_id` int NOT NULL AUTO_INCREMENT,
  `unit_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `unit_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `location` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`unit_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `unit_head`
--

DROP TABLE IF EXISTS `unit_head`;
CREATE TABLE IF NOT EXISTS `unit_head` (
  `uh_id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `unit_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `department` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `uh_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `uh_id_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `designation` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cont_num` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `uh_image` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass_word` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`uh_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `zonal_manager`
--

DROP TABLE IF EXISTS `zonal_manager`;
CREATE TABLE IF NOT EXISTS `zonal_manager` (
  `zm_id` int NOT NULL AUTO_INCREMENT,
  `user_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `zonal_office` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `zonal_code` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `zonal_manager` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `zm_id_no` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `designation` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `cont_num` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `zm_image` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `zm_cv` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass_word` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`zm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `zonal_office` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `zonal_code` varchar(11) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `division` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `district` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `address` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `contact_no` varchar(22) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `email_address` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `zonal_head_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `founded_date` date NOT NULL,
  PRIMARY KEY (`zo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
