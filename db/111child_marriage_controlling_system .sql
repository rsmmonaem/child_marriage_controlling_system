-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 01, 2023 at 09:14 AM
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
(86, '640470', 'inst', 'Obidul Kader', '123', 'field_worker', 'ENABLE', '2023-02-06 15:42:17'),
(87, '710505', 'int_admin', 'Zahid Hasan', '123', 'institute_admin', 'ENABLE', '2023-02-07 09:17:37'),
(88, '839740', '416488', 'Selim Islam', 'CF1234', 'field_worker', 'ENABLE', '2023-02-09 16:22:05'),
(89, '513503', '234517', 'Tonmoy Islam', 'CF1234', 'field_worker', 'ENABLE', '2023-02-11 11:44:33'),
(90, '531300', '168361', 'Kabir Zahid', 'CF1234', 'field_worker', 'DISABLE', '2023-02-11 14:34:41'),
(91, '316189', '802137', 'Minhazul Islam', 'CF1234', 'field_worker', 'DISABLE', '2023-03-01 15:17:03');

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
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guardian_info`
--

INSERT INTO `guardian_info` (`guardian_id`, `uid`, `guardian_info_type`, `guardian_info_name`, `guardian_info_phone`, `guardian_info_rltn`, `guardian_info_nid`, `guardian_info_profession`, `guardian_info_date_of_birth`, `guardian_info_religion`, `guardian_info_other`, `guardian_info_present_address`, `guardian_info_permanent_address`) VALUES
(5, 10, 'father', 'Lani Wade', '+1 (602) 932-3837', 'Laborum Nam aliquam', 'Enim proident verit', 'Rerum id Nam cillum', '1978-12-22', 'Hindu', 'Id dolor error dolor', 'Perspiciatis volupt', 'Deleniti doloremque '),
(4, 9, 'exist_guardian', 'Melissa Booker', '+1 (726) 613-8027', 'Hic eum recusandae ', 'Dolor consequat Cum', 'Minus aperiam autem ', '1975-12-05', 'Hindu', 'Pariatur Eius excep', 'Quam commodi possimu', 'Dolorem architecto m');

-- --------------------------------------------------------

--
-- Table structure for table `imam`
--

DROP TABLE IF EXISTS `imam`;
CREATE TABLE IF NOT EXISTS `imam` (
  `imam_id` int NOT NULL AUTO_INCREMENT,
  `imam_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imam_division` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imam_district` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imam_thana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imam_union` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imam_village` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imam_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imam_mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imam_nid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imam_date_of_birth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imam_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imam_father_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imam_username` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `imam_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`imam_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imam`
--

INSERT INTO `imam` (`imam_id`, `imam_name`, `imam_division`, `imam_district`, `imam_thana`, `imam_union`, `imam_village`, `imam_address`, `imam_mobile`, `imam_nid`, `imam_date_of_birth`, `imam_image`, `imam_father_name`, `imam_username`, `imam_password`) VALUES
(16, 'Andrew Mcbride44451', 'Exercitationem venia', 'Exercitationem venia', 'wuqaqy', 'dubezaha', 'porisecity', 'Veniam autem aliqua', '+1 (112) 214-2417', '359', '1971-03-12', 'ZGlLkWaQ3i.jpg', 'Desiree Castillo', '657316', '612994');

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

DROP TABLE IF EXISTS `institute`;
CREATE TABLE IF NOT EXISTS `institute` (
  `inst_id` int NOT NULL AUTO_INCREMENT,
  `inst_eiin` varchar(60) COLLATE utf8mb4_general_ci NOT NULL,
  `inst_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `inst_username` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `inst_password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `inst_founded` date NOT NULL,
  `inst_board` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `inst_logo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `inst_contact` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`inst_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`inst_id`, `inst_eiin`, `inst_name`, `inst_username`, `inst_password`, `inst_founded`, `inst_board`, `inst_logo`, `inst_contact`) VALUES
(5, 'Quasi in ut in error', 'Medge Estesss', '', '', '1986-09-14', '+1 (537) 359-3157', 'Ip5O04BGkc.jpg', 'Quaerat ut voluptatu'),
(6, 'Quasi in ut in error', 'Medge fff', '', '', '1986-09-14', '+1 (537) 359-3157', '6cM40whDXb.jpg', 'Quaerat ut voluptatu'),
(8, 'Ullam eveniet eos ', 'Kaitlin Bryan', '', '', '1994-04-02', '+1 (952) 156-8344', '2l0y4ROGfK.jpg', 'Velit quidem iure il'),
(11, 'Voluptatibus rerum c', 'Aileen Mathis', '640470', '394284', '2005-11-24', '+1 (704) 517-7371', '6n1vXSVF50.jpg', 'Ex numquam impedit '),
(12, 'Voluptatibus rerum c', 'Aileen Mathis', '640470', '394284', '2005-11-24', '+1 (704) 517-7371', 'RlT1vMwJGd.jpg', 'Ex numquam impedit '),
(13, 'Voluptatibus rerum c', 'resfsdf', '640470', '394284', '2005-11-24', '+1 (704) 517-7371', 'MTWQG07NFr.jpg', 'Ex numquam impedit ');

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
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kazi`
--

INSERT INTO `kazi` (`kazi_id`, `kazi_name`, `kazi_division`, `kazi_district`, `kazi_thana`, `kazi_union`, `kazi_village`, `kazi_address`, `kazi_mobile`, `kazi_nid`, `kazi_date_of_birth`, `kazi_image`, `kazi_father_name`, `kazi_username`, `kazi_password`) VALUES
(15, 'George Collier', 'Mollitia est ut odit', 'Mollitia est ut odit', 'hocekiqun', 'cexoso', 'kagufupo', 'Occaecat et quia vol', '+1 (113) 269-4352', '206', '1971-05-27', '5ga1IvSJNH.jpg', 'Regina Weiss', '973796', '457725'),
(16, 'Andrew Mcbride44451', 'Exercitationem venia', 'Exercitationem venia', 'wuqaqy', 'dubezaha', 'porisecity', 'Veniam autem aliqua', '+1 (112) 214-2417', '359', '1971-03-12', '1BMc8C5ZS2.jpg', 'Desiree Castillo', '657316', '612994');

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
-- Table structure for table `mosque`
--

DROP TABLE IF EXISTS `mosque`;
CREATE TABLE IF NOT EXISTS `mosque` (
  `mosque_id` int NOT NULL AUTO_INCREMENT,
  `mosque_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_found_date` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_contact_number` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_division` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_district` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_thana` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_union` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_village` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_address` text COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_division` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_district` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_thana` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_union` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_village` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_mobile` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_reg_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_nid` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_date_of_birth` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_image` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_fathers_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_mothers_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_username` int NOT NULL,
  `mosque_password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`mosque_id`),
  UNIQUE KEY `mosque_username` (`mosque_username`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mosque`
--

INSERT INTO `mosque` (`mosque_id`, `mosque_name`, `mosque_found_date`, `mosque_contact_number`, `mosque_division`, `mosque_district`, `mosque_thana`, `mosque_union`, `mosque_village`, `mosque_address`, `mosque_com_name`, `mosque_com_division`, `mosque_com_district`, `mosque_com_thana`, `mosque_com_union`, `mosque_com_village`, `mosque_com_address`, `mosque_com_mobile`, `mosque_com_reg_no`, `mosque_com_nid`, `mosque_com_date_of_birth`, `mosque_com_image`, `mosque_com_fathers_name`, `mosque_com_mothers_name`, `mosque_username`, `mosque_password`) VALUES
(4, 'Doris Mclaughlin', '2016-09-25', '+1 (905) 457-4674', 'Sunt eligendi error ', 'Quos proident amet', '', 'nytopevik', 'Iste sed est nulla n', 'Pariatur In invento', 'Haviva Ayers', '', 'Praesentium fuga Ut', 'cyzafako', 'ziqoqy', 'sebur', 'Neque fuga Voluptat', '+1 (993) 686-1592', '+1 (447) 446-7733', '+1 (936) 474-3715', '2013-08-03', 'P7o4Ye2T6a.jpg', 'Maile Flores', 'Coby Bruce', 583654, '313238');

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
(10, 'Eum culpa ab alias c', '2', '1', 'Aliquip porro illum', '6DYvjoEKV2.jpg'),
(5, 'Officia ipsum perfer', '3', '2', 'Voluptas eaque conse', 'C5NRHxrQGA.jpg'),
(6, 'seoexpate.com ddf', '2', '3', 'hello dev news dd', '9zavW5BKoH.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `non_student`
--

DROP TABLE IF EXISTS `non_student`;
CREATE TABLE IF NOT EXISTS `non_student` (
  `non_st_id` int NOT NULL AUTO_INCREMENT,
  `non_st_name` varchar(255) NOT NULL,
  `non_st_date_of_birth` date NOT NULL,
  `non_st_gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `non_st_bg_group` varchar(255) NOT NULL,
  `non_st_religion` varchar(255) NOT NULL,
  `non_st_phone` varchar(255) NOT NULL,
  `non_st_nid_no` varchar(255) NOT NULL,
  `non_st_birth_certificate_id` varchar(255) NOT NULL,
  `non_st_health_condition` varchar(255) NOT NULL,
  `non_st_photo` varchar(255) NOT NULL,
  `non_st_inst_name` varchar(255) NOT NULL,
  `non_st_present_address` varchar(255) NOT NULL,
  `non_st_permanent_address` varchar(255) NOT NULL,
  PRIMARY KEY (`non_st_id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `non_student`
--

INSERT INTO `non_student` (`non_st_id`, `non_st_name`, `non_st_date_of_birth`, `non_st_gender`, `non_st_bg_group`, `non_st_religion`, `non_st_phone`, `non_st_nid_no`, `non_st_birth_certificate_id`, `non_st_health_condition`, `non_st_photo`, `non_st_inst_name`, `non_st_present_address`, `non_st_permanent_address`) VALUES
(8, 'rsm monaem', '0744-06-11', '', '', '', '+1 (229) 297-7303', 'Quia reprehenderit ', 'Quod in nihil nisi u', 'Sit adipisci invento', 'pLxPICjRsG.jpg', '', 'ffsdfsd', 'Non maiores assumend'),
(9, 'Hadassah Fischer', '1978-09-07', 'Female', 'O-', 'Hindu', '+1 (546) 414-2482', 'Facere omnis tenetur', 'Iste proident vel i', 'Eligendi ut est qui', 'djywMh6oLX.jpg', '', 'Quibusdam sint excep', 'Officia ad dolores a');

-- --------------------------------------------------------

--
-- Table structure for table `non_student_guardian_info`
--

DROP TABLE IF EXISTS `non_student_guardian_info`;
CREATE TABLE IF NOT EXISTS `non_student_guardian_info` (
  `non_student_guardian_id` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `non_student_guardian_info_type` varchar(255) NOT NULL,
  `non_student_guardian_info_name` varchar(255) NOT NULL,
  `non_student_guardian_info_phone` varchar(255) NOT NULL,
  `non_student_guardian_info_rltn` varchar(255) NOT NULL,
  `non_student_guardian_info_nid` varchar(255) NOT NULL,
  `non_student_guardian_info_profession` varchar(255) NOT NULL,
  `non_student_guardian_info_date_of_birth` date NOT NULL,
  `non_student_guardian_info_religion` varchar(255) NOT NULL,
  `non_student_guardian_info_other` varchar(255) NOT NULL,
  `non_student_guardian_info_present_address` varchar(255) NOT NULL,
  `non_student_guardian_info_permanent_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`non_student_guardian_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `non_student_guardian_info`
--

INSERT INTO `non_student_guardian_info` (`non_student_guardian_id`, `uid`, `non_student_guardian_info_type`, `non_student_guardian_info_name`, `non_student_guardian_info_phone`, `non_student_guardian_info_rltn`, `non_student_guardian_info_nid`, `non_student_guardian_info_profession`, `non_student_guardian_info_date_of_birth`, `non_student_guardian_info_religion`, `non_student_guardian_info_other`, `non_student_guardian_info_present_address`, `non_student_guardian_info_permanent_address`) VALUES
(4, 8, 'mother', 'Kelsie Garrett', '+1 (327) 222-8989', 'Esse labore reprehe', 'Exercitation et ea m', 'Nemo accusantium qua', '1999-01-14', 'Islam', 'Id totam molestiae i', 'Quo sit labore obca', 'Non aliquip eiusmod '),
(3, 7, 'mother', 'Linda Mills', '+1 (531) 968-7938', 'Voluptas eum quam ex', 'Quibusdam velit temp', 'Reprehenderit do ad ', '1997-10-30', 'Christian', 'Laboris voluptatem i', 'Expedita enim corrup', 'Fuga Aute totam per'),
(5, 9, 'exist_guardian', 'Rinah Lopez', '+1 (711) 876-3896', 'Illo beatae aliquip ', 'Temporibus tempor eu', 'Mollitia exercitatio', '2000-05-31', 'Hindu', 'Amet veniam nobis ', 'Aliquid esse rerum ', 'Elit voluptatum qui');

-- --------------------------------------------------------

--
-- Table structure for table `non_student_parents_info`
--

DROP TABLE IF EXISTS `non_student_parents_info`;
CREATE TABLE IF NOT EXISTS `non_student_parents_info` (
  `non_student_parents_info_id` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `non_student_fathers_name` varchar(255) NOT NULL,
  `non_student_fathers_phone` varchar(255) NOT NULL,
  `non_student_fathers_nid` varchar(255) NOT NULL,
  `non_student_fathers_profession` varchar(255) NOT NULL,
  `non_student_mothers_name` varchar(255) NOT NULL,
  `non_student_mothers_phone` varchar(255) NOT NULL,
  `non_student_mothers_nid` varchar(255) NOT NULL,
  `non_student_mothers_profession` varchar(255) NOT NULL,
  PRIMARY KEY (`non_student_parents_info_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `non_student_parents_info`
--

INSERT INTO `non_student_parents_info` (`non_student_parents_info_id`, `uid`, `non_student_fathers_name`, `non_student_fathers_phone`, `non_student_fathers_nid`, `non_student_fathers_profession`, `non_student_mothers_name`, `non_student_mothers_phone`, `non_student_mothers_nid`, `non_student_mothers_profession`) VALUES
(7, 8, 'ism', '+1 (834) 862-7316', 'Officia ad in id lor', 'Consequatur placeat', 'mor', '+1 (198) 627-1464', 'Molestias consequatu', 'Aut laborum pariatur'),
(6, 7, 'Samuel Munoz', '+1 (798) 247-6969', 'Repellendus Aut qui', 'Incidunt repudianda', 'Sade Cunningham', '+1 (665) 232-2521', 'Quia animi qui quo ', 'Est dolorem at mini'),
(8, 9, 'Nita Carson', '+1 (256) 385-5979', 'Inventore nostrum ve', 'Tempore natus nihil', 'Gregory Morrow', '+1 (837) 777-6458', 'Molestiae omnis pers', 'Eaque aut vel qui al');

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
(3, 'Sed esse corrupti fdsdsddd', 'Reprehenderit porro', '                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                  dfsdfsd  \r\n                                                                dfsdfsdf                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                ', 'asnPCr4KcM.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parents_info`
--

INSERT INTO `parents_info` (`parents_info_id`, `uid`, `fathers_name`, `fathers_phone`, `fathers_nid`, `fathers_profession`, `mothers_name`, `mothers_phone`, `mothers_nid`, `mothers_profession`) VALUES
(8, 10, 'Yoshio Gregory', '+1 (843) 508-8714', 'Est nobis aspernatur', 'Ut et Nam quo occaec', 'Alea Hudson', '+1 (936) 174-2527', 'Id odit elit anim ', 'Corporis officia vol'),
(7, 9, 'Kane Hopper', '+1 (655) 308-3053', 'Unde accusamus asper', 'Dolorem repellendus', 'Charles Solomon', '+1 (345) 787-7328', 'Aliqua Non asperior', 'Minus ex voluptatibu');

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
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `st_name`, `st_date_of_birth`, `st_gender`, `st_bg_group`, `st_religion`, `st_phone`, `st_nid_no`, `st_birth_certificate_id`, `st_health_condition`, `st_photo`, `st_inst_name`, `st_present_address`, `st_permanent_address`) VALUES
(9, 'Jane Finch', '2006-06-28', 'Female', 'A-', 'Buddha', '+1 (606) 945-8267', 'Do enim facere offic', 'Accusamus rerum eaqu', 'Murphy Oconnor', 'jD06VUb2ul.jpg', 'Kaitlin Bryan', 'Pariatur Voluptates', 'Exercitation excepte'),
(10, 'Charlotte Wyatttt', '1976-05-27', '', '', '', '+1 (127) 151-9324', 'Ab aliquid ipsa iru', 'Aliquip temporibus d', 'Kirk Woodard', 'ljczr571Fs.jpg', 'Medge Estesss', 'Sit corporis vel au', 'Et fugiat ipsam ill');

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
