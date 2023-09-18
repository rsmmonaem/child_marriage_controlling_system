-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 18, 2023 at 11:15 AM
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
  `user_id` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_name` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `full_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pass_word` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `user_type` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `status` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `update_date` datetime NOT NULL,
  `marriage_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_user`
--

INSERT INTO `admin_user` (`u_id`, `user_id`, `user_name`, `full_name`, `pass_word`, `user_type`, `status`, `update_date`, `marriage_type`) VALUES
(1, 'admin', 'admin', 'Administrator', 'admin', 'super_admin', 'ENABLE', '2024-10-15 00:00:00', ''),
(2, '', 'deo_admin', 'Harrison Zamora', 'deo_admin', 'deo_admin', 'ENABLE', '2023-07-09 09:43:08', ''),
(116, '', '643398', '২০১ গম্বুজ মসজিদ', '851514', 'mosque_admin', 'ENABLE', '0000-00-00 00:00:00', NULL),
(117, '', '791187', 'বাংলাদেশের জাতীয় মসজিদ', '860441', 'mosque_admin', 'ENABLE', '0000-00-00 00:00:00', NULL),
(118, '', '449433', 'Donovan Bray', '407326', 'mosque_admin', 'ENABLE', '0000-00-00 00:00:00', NULL),
(119, '', '808351', 'Vielka Cervantes', '707113', 'temple_admin', 'ENABLE', '0000-00-00 00:00:00', NULL),
(120, '', 'int_admin', 'উল্লাপাড়া ট্রেনিং ইনস্টিটিউড', '123', 'institute_admin', 'ENABLE', '0000-00-00 00:00:00', NULL),
(121, '', '675130', 'Samuel Kelly', '287968', 'mosque_admin', 'ENABLE', '0000-00-00 00:00:00', NULL),
(122, '', '243105', 'ইমাম মো: হাসান', '801635', 'marriage_admin', 'ENABLE', '0000-00-00 00:00:00', 'Imam'),
(123, '', '780114', 'কালিতলা মন্দির', '873588', 'temple_admin', 'ENABLE', '0000-00-00 00:00:00', NULL),
(124, '', '265810', 'রাম চক্রবর্তী ', '212374', 'marriage_admin', 'ENABLE', '0000-00-00 00:00:00', 'Purohit'),
(125, '', '915506', 'Bert Sanders', '144962', 'marriage_admin', 'ENABLE', '0000-00-00 00:00:00', 'Purohit'),
(126, '', '859557', 'Kennan Daugherty', '604467', 'marriage_admin', 'ENABLE', '0000-00-00 00:00:00', 'Purohit'),
(127, '', '560730', 'Barclay Osborn', '295041', 'marriage_admin', 'ENABLE', '0000-00-00 00:00:00', 'Purohit'),
(128, '', '798304', 'কাজি মো: হারুন মিয়া', '891806', 'marriage_admin', 'ENABLE', '0000-00-00 00:00:00', 'Kazi'),
(129, '', '692155', 'শিব মন্দির দক্ষিণ বেজোড়া', '670687', 'temple_admin', 'ENABLE', '0000-00-00 00:00:00', NULL),
(130, '', '944252', 'সারিয়াকান্দি পাড়া দেব সনাতন মন্দির', '327383', 'temple_admin', 'ENABLE', '0000-00-00 00:00:00', NULL),
(131, '', '231036', 'লক্ষণ চক্রবর্তী ', '645397', 'marriage_admin', 'ENABLE', '0000-00-00 00:00:00', 'Purohit'),
(132, '', '364615', 'Kuame Huber', '548841', 'marriage_admin', 'ENABLE', '0000-00-00 00:00:00', 'Muazzin'),
(133, '', '610178', 'Hamilton Ward', '588540', 'marriage_admin', 'ENABLE', '0000-00-00 00:00:00', 'khatib'),
(134, '', '163140', 'Leila Medina', '515826', 'marriage_admin', 'ENABLE', '0000-00-00 00:00:00', 'khatib'),
(135, '', '972865', 'Harrison Fletcher', '675590', 'marriage_admin', 'ENABLE', '0000-00-00 00:00:00', 'Muazzin');

-- --------------------------------------------------------

--
-- Table structure for table `birth_chack`
--

DROP TABLE IF EXISTS `birth_chack`;
CREATE TABLE IF NOT EXISTS `birth_chack` (
  `birth_chack_id` int NOT NULL AUTO_INCREMENT,
  `birth_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`birth_chack_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `birth_chack`
--

INSERT INTO `birth_chack` (`birth_chack_id`, `birth_id`) VALUES
(1, '12345678'),
(2, '5555');

-- --------------------------------------------------------

--
-- Table structure for table `contact_message`
--

DROP TABLE IF EXISTS `contact_message`;
CREATE TABLE IF NOT EXISTS `contact_message` (
  `ctm_id` int NOT NULL AUTO_INCREMENT,
  `ctm_name` varchar(400) NOT NULL,
  `ctm_email` varchar(255) NOT NULL,
  `ctm_subject` varchar(400) NOT NULL,
  `ctm_description` text NOT NULL,
  `ctm_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ctm_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_message`
--

INSERT INTO `contact_message` (`ctm_id`, `ctm_name`, `ctm_email`, `ctm_subject`, `ctm_description`, `ctm_date`) VALUES
(38, 'Rajah Spears', 'gezopevoz@mailinator.com', 'Placeat consequat ', 'Commodi et dolor adi', '2023-07-22 08:57:36'),
(40, 'Whitney Payne', 'xedudoxi@mailinator.com', 'Repellendus Elit e', 'Excepteur elit ea d', '2023-07-25 11:37:04'),
(39, 'September Graham', 'qofagyvugy@mailinator.com', 'Sint neque eiusmod c', 'In omnis ut quia min', '2023-07-22 08:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `contact_page`
--

DROP TABLE IF EXISTS `contact_page`;
CREATE TABLE IF NOT EXISTS `contact_page` (
  `con_id` int NOT NULL AUTO_INCREMENT,
  `con_title` text NOT NULL,
  `con_facebook` text NOT NULL,
  `con_instagram` text NOT NULL,
  `con_twitter` text NOT NULL,
  `con_youtube` text NOT NULL,
  `con_google` text NOT NULL,
  `con_email` text NOT NULL,
  `con_phone` text NOT NULL,
  `con_address` text NOT NULL,
  PRIMARY KEY (`con_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_page`
--

INSERT INTO `contact_page` (`con_id`, `con_title`, `con_facebook`, `con_instagram`, `con_twitter`, `con_youtube`, `con_google`, `con_email`, `con_phone`, `con_address`) VALUES
(1, 'যোগাযোগ করুন', 'https://facebook.com', 'https://instagram.com', 'https://twitter.com', 'https://youtube.com', 'https://google.com/gg', 'defenedap@mailinator.com', '123456789', 'Rerum ipsum autem ne');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

DROP TABLE IF EXISTS `contact_us`;
CREATE TABLE IF NOT EXISTS `contact_us` (
  `c_id` int NOT NULL AUTO_INCREMENT,
  `com_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `com_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `com_phone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `com_email` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `com_web` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `opening` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `facebook` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `twitter` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `google` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `skype` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `pinterest` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
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
  `uid` int DEFAULT NULL,
  `guardian_info_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `guardian_info_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `guardian_info_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `guardian_info_rltn` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `guardian_info_nid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `guardian_info_profession` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `guardian_info_date_of_birth` date DEFAULT NULL,
  `guardian_info_religion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `guardian_info_other` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `guardian_info_present_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `guardian_info_permanent_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `who_add_guardian` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  PRIMARY KEY (`guardian_id`)
) ENGINE=MyISAM AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guardian_info`
--

INSERT INTO `guardian_info` (`guardian_id`, `uid`, `guardian_info_type`, `guardian_info_name`, `guardian_info_phone`, `guardian_info_rltn`, `guardian_info_nid`, `guardian_info_profession`, `guardian_info_date_of_birth`, `guardian_info_religion`, `guardian_info_other`, `guardian_info_present_address`, `guardian_info_permanent_address`, `who_add_guardian`) VALUES
(43, 47, 'father', 'মো: রহিতা বেগম', '01968402925   ', 'মা   ', '', 'গৃহিনী   ', NULL, NULL, NULL, NULL, NULL, '345614'),
(52, 60, 'father', 'Jacob Woodward', '+1 (494) 639-4116   ', 'Praesentium earum et   ', '', 'Cillum atque laborum   ', NULL, NULL, NULL, NULL, NULL, NULL),
(40, 45, 'father', 'রিয়াদ আকন্দ', '0193837393373', 'ভাই', '97', 'রাখাল', '1987-02-19', 'Hindu', 'ক', 'ঢাকা ,গাজীপুর', 'ঢাকা ,গাজীপুর', '345614'),
(42, 44, 'father', 'মো: রহিতা বেগম', '01968402925 ', 'মা ', '', 'গৃহিনী ', NULL, NULL, NULL, NULL, NULL, '345614'),
(45, 50, 'other', 'hgfhfgh', '01710550252        ', 'Uncle        ', '', ' rfdsf       ', NULL, NULL, NULL, NULL, NULL, 'int_admin'),
(41, 46, 'father', 'মো: রহিতা বেগম', '01968402925', 'মা', '16', 'গৃহিনী', '0188-08-07', 'Hindu', 'ক', 'বগুরা,শেরপুর', 'বগুরা,শেরপুর\"\"', '345614'),
(39, 48, 'mother', 'মো: রহিতা বেগম', '01968402925    ', 'মা    ', '', 'গৃহিনী    ', NULL, NULL, NULL, NULL, NULL, '345614'),
(53, 61, 'father', 'Jasper Fitzpatrick', '+1 (673) 195-6841 ', ' ', '', 'Repellendus Duis il ', NULL, NULL, NULL, NULL, NULL, NULL),
(44, 49, 'father', 'মো: রহিতা বেগম', '01968402925       ', 'মা       ', '16666       ', 'গৃহিনী       ', NULL, NULL, NULL, NULL, NULL, '345614'),
(50, 58, 'mother', 'Yvette Vinson', '+1 (712) 923-7506 ', ' ', '', 'Tempore sint nesciu ', NULL, NULL, NULL, NULL, NULL, NULL),
(48, 56, 'mother', 'Ezra Gaines', '+1 (769) 976-5423 ', ' ', '', 'Non ipsum quia est  ', NULL, NULL, NULL, NULL, NULL, NULL),
(49, 57, 'mother', 'Geoffrey Espinoza', '+1 (108) 603-8824', '', '33', 'Et aliquip possimus', NULL, NULL, NULL, 'Deserunt aut do do e', 'Quis velit totam ame', NULL),
(51, 59, 'father', 'Denton Mcleod', '+1 (503) 517-8753  ', '  ', '', 'Illum adipisci lore  ', NULL, NULL, NULL, NULL, NULL, NULL),
(54, 62, 'other', 'Colby Mercer', '+1 (507) 192-3787', 'Assumenda fugit con', '99', 'Voluptate cupidatat ', '2005-07-11', 'Islam', 'Iste cupiditate exce', 'Cupidatat aut quis o', 'Velit asperiores arc', NULL),
(55, 63, 'father', 'Summer Mayo', '+1 (895) 313-6492', 'Sint dolore consect', '20', 'Do dolor ea debitis ', NULL, NULL, NULL, 'Consectetur sit pos', 'In velit minus eius', NULL),
(56, 64, 'mother', 'Brennan Rollins', '+1 (587) 718-8245', '', '33', 'Pariatur Sed ea nec', NULL, NULL, NULL, 'Lorem dolore dolor s', 'Asperiores eum et la', NULL),
(57, 65, 'father', 'Lawrence Clark', '+1 (497) 539-9044', '', '95', 'Ut at autem quis qua', NULL, NULL, NULL, 'Atque dolor est fuga', 'Culpa voluptatum rer', NULL),
(58, 66, 'mother', 'Eliana Middleton', '+1 (663) 522-6545', '', '79', 'Ipsam ut libero perf', NULL, NULL, NULL, 'Dolorem do pariatur', 'Dolorem dolore fugit', NULL),
(59, 67, 'father', 'Julie Hinton', '+1 (714) 221-3001', '', '76', 'Irure iste ut volupt', NULL, NULL, NULL, 'Nihil soluta consequ', 'Libero minim a ipsum', NULL),
(60, 68, 'father', 'Uriah Waters', '+1 (431) 738-1107', '', '58', 'Molestiae nesciunt ', NULL, NULL, NULL, NULL, NULL, NULL),
(61, 69, 'mother', 'Basia Drake', '+1 (811) 269-3135', '', '19', 'Qui iusto tempore q', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `imam`
--

DROP TABLE IF EXISTS `imam`;
CREATE TABLE IF NOT EXISTS `imam` (
  `imam_id` int NOT NULL AUTO_INCREMENT,
  `imam_mosque_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
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
  `details_type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'imam',
  PRIMARY KEY (`imam_id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `imam`
--

INSERT INTO `imam` (`imam_id`, `imam_mosque_id`, `imam_name`, `imam_division`, `imam_district`, `imam_thana`, `imam_union`, `imam_village`, `imam_address`, `imam_mobile`, `imam_nid`, `imam_date_of_birth`, `imam_image`, `imam_father_name`, `imam_username`, `imam_password`, `details_type`) VALUES
(23, '9', 'ইমাম মো: হাসান', 'Mymansgingh', 'Sherpur', 'Sribordi', 'Tatihati ', 'Noyapara', 'Tatihati,Noyapara,Sribordi,Sherpur', '01968402925', '42342423', '1989-01-15', 'RT0pH6WkLE.jpg', 'মো: ইউনুস', '243105', '801635', 'imam');

-- --------------------------------------------------------

--
-- Table structure for table `institute`
--

DROP TABLE IF EXISTS `institute`;
CREATE TABLE IF NOT EXISTS `institute` (
  `inst_id` int NOT NULL AUTO_INCREMENT,
  `inst_eiin` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `inst_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `inst_username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `inst_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `inst_founded` date NOT NULL,
  `inst_board` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `inst_logo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `inst_contact` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`inst_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `institute`
--

INSERT INTO `institute` (`inst_id`, `inst_eiin`, `inst_name`, `inst_username`, `inst_password`, `inst_founded`, `inst_board`, `inst_logo`, `inst_contact`) VALUES
(22, '324422', 'উল্লাপাড়া ট্রেনিং ইনস্টিটিউড', '345614', '427457', '1971-12-18', 'BTEB', 'sTe1tZfyg4.jpg', '0196840292');

-- --------------------------------------------------------

--
-- Table structure for table `kazi`
--

DROP TABLE IF EXISTS `kazi`;
CREATE TABLE IF NOT EXISTS `kazi` (
  `kazi_id` int NOT NULL AUTO_INCREMENT,
  `kazi_mosque_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
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
  `kazi_username` varchar(33) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `kazi_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `details_type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'kazi',
  PRIMARY KEY (`kazi_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kazi`
--

INSERT INTO `kazi` (`kazi_id`, `kazi_mosque_id`, `kazi_name`, `kazi_division`, `kazi_district`, `kazi_thana`, `kazi_union`, `kazi_village`, `kazi_address`, `kazi_mobile`, `kazi_nid`, `kazi_date_of_birth`, `kazi_image`, `kazi_father_name`, `kazi_username`, `kazi_password`, `details_type`) VALUES
(22, '8', 'কাজি মো: হারুন মিয়া', 'ঢাকা', 'গাজীপুর', 'গাজীপুর সদর', 'দুবলাপাড়া', 'নয়াপাড়া', 'দুবলাপাড়া,নয়াপাড়া', '01968493836', '231333', '1989-01-31', 'WiKtyM2ZFE.jpg', 'মো: রসিদ মিয়া', '798304', '891806', 'kazi');

-- --------------------------------------------------------

--
-- Table structure for table `khatib`
--

DROP TABLE IF EXISTS `khatib`;
CREATE TABLE IF NOT EXISTS `khatib` (
  `khatib_id` int NOT NULL AUTO_INCREMENT,
  `khatib_mosque_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `khatib_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `khatib_division` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `khatib_district` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `khatib_thana` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `khatib_union` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `khatib_village` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `khatib_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `khatib_mobile` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `khatib_nid` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `khatib_date_of_birth` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `khatib_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `khatib_father_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `khatib_username` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `khatib_password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `khatib_details_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `khatib_created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`khatib_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `khatib`
--

INSERT INTO `khatib` (`khatib_id`, `khatib_mosque_id`, `khatib_name`, `khatib_division`, `khatib_district`, `khatib_thana`, `khatib_union`, `khatib_village`, `khatib_address`, `khatib_mobile`, `khatib_nid`, `khatib_date_of_birth`, `khatib_image`, `khatib_father_name`, `khatib_username`, `khatib_password`, `khatib_details_type`, `khatib_created_at`) VALUES
(3, NULL, 'Leila Medina dsss', 'Voluptatibus aut exp', 'Voluptatibus aut exp', 'ziwoceryz', 'qyvogy', 'biheb', 'Soluta veniam commo', '+1 (505) 452-9604', '916', '2015-03-03', 'XsA9tZyW1M.jpg', 'Ina Kelley', '163140', '515826', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `law_regulation`
--

DROP TABLE IF EXISTS `law_regulation`;
CREATE TABLE IF NOT EXISTS `law_regulation` (
  `law_regulation_id` int NOT NULL AUTO_INCREMENT,
  `law_regulation_no` varchar(255) NOT NULL,
  `law_regulation_title` varchar(255) NOT NULL,
  `law_regulation_description` longtext NOT NULL,
  PRIMARY KEY (`law_regulation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `law_regulation`
--

INSERT INTO `law_regulation` (`law_regulation_id`, `law_regulation_no`, `law_regulation_title`, `law_regulation_description`) VALUES
(8, '01', 'বাল্যবিবাহ, যৌতুক, নারী ও শিশু নিরাপত্তা', '<h3 style=\"margin-bottom: 8px; font-family: kalpurushregular; font-weight: normal; line-height: 34px; color: rgb(24, 24, 24); font-size: 28px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\">বাল্যবিবাহ, যৌতুক, নারী ও শিশু নিরাপত্তা</h3><h3 style=\"margin-bottom: 8px; font-family: kalpurushregular; font-weight: normal; line-height: 34px; color: rgb(24, 24, 24); font-size: 28px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline;\"> </h3><h3 style=\"padding: 0px; margin-bottom: 8px; font-family: kalpurushregular; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-weight: normal; font-stretch: inherit; font-size: 28px; line-height: 34px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(24, 24, 24);\"><div style=\"font-size: 14px; padding: 0px; margin: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-variant-alternates: inherit; font-stretch: inherit; line-height: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; overflow: hidden; color: rgb(0, 0, 0);\"><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; border: 0px; vertical-align: baseline; list-style: inside circle;\"><li style=\"padding: 0px; margin: 0px 0px 8px; font-family: inherit; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 18px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-align: justify;\"><span style=\"font-weight: 700;\">সরকারের বাল্যবিয়ে বিরোধী প্রচারণায় অসামান্য অবদান রাখার জন্য ‘The Accolade Global Film Competition-2017 Humanitarian Award’ এবং ‘The Accolade Winner Award  End Child Marriage’  প্রদান;</span></li><li style=\"padding: 0px; margin: 0px 0px 8px; font-family: inherit; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 18px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-align: justify;\"><span style=\"font-weight: 700;\">যৌতুক ও বাল্যবিবাহ প্রতিরোধে সচেতনতামূলক ১১,৬৩৬টি উঠান বৈঠক আয়োজন এবং ৬৪টি জেলায় বাল্যবিবাহ প্রতিরোধে মনিটরিং কার্যক্রম গ্রহণ;</span></li><li style=\"padding: 0px; margin: 0px 0px 8px; font-family: inherit; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 18px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-align: justify;\"><span style=\"font-weight: 700;\">নির্যাতনের শিকার নারী ও শিশুদের তাৎক্ষণিক সহায়তায় জয় মোবাইল অ্যাপস চালুকরণ<span style=\"padding: 0px; margin: 0px; font-family: inherit; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(51, 51, 51);\">;</span></span></li><li style=\"padding: 0px; margin: 0px 0px 8px; font-family: inherit; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 18px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-align: justify;\"><span style=\"font-weight: 700;\">৬৭টি ওয়ান স্টপ ক্রাইসিস সেল এবং ৯ টি ক্রাইসিস সেন্টার হতে <span style=\"padding: 0px; margin: 0px; font-family: inherit; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(51, 51, 51);\"><u style=\"padding: 0px; margin: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; border: 0px; vertical-align: baseline;\">৩৫</u></span><span style=\"padding: 0px; margin: 0px; font-family: inherit; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; color: rgb(51, 51, 51);\"><u style=\"padding: 0px; margin: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; border: 0px; vertical-align: baseline;\">,৫২১</u></span> জন নির্যাতিত নারী ও শিশুকে প্রয়োজনীয় সেবা প্রদান;</span></li><li style=\"padding: 0px; margin: 0px 0px 8px; font-family: inherit; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 18px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-align: justify;\"><span style=\"font-weight: 700;\">৪৭টি সদর হাসপাতাল এবং ২০টি উপজেলা স্বাস্থ্য কমপ্লেক্সের ওয়ান স্টপ ক্রাইসিস সেল হতে <u style=\"padding: 0px; margin: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; border: 0px; vertical-align: baseline;\">৪৭,৫৫৮</u> জন নির্যাতনের শিকার নারী ও শিশুকে বিভিন্ন সহায়তা প্রদান;</span></li><li style=\"padding: 0px; margin: 0px 0px 8px; font-family: inherit; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 18px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-align: justify;\"><span style=\"font-weight: 700;\">ডিএনএ ল্যাবরেটরীতে <u style=\"padding: 0px; margin: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; border: 0px; vertical-align: baseline;\">৪৯৩৩</u> টি মামলায় শিশুর পিতৃপরিচয় নির্ধারণে ডিএনএ পরীক্ষা সম্পন্নকরণ;</span></li><li style=\"padding: 0px; margin: 0px 0px 8px; font-family: inherit; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 18px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-align: justify;\"><span style=\"font-weight: 700;\"> ন্যাশনাল ট্রমা কাউন্সিলিং সেন্টার হতে <u style=\"padding: 0px; margin: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; border: 0px; vertical-align: baseline;\">১৫০৮</u> জন নারী ও শিশুকে মনোসামাজিক কাউন্সিলিং প্রদান;</span></li><li style=\"padding: 0px; margin: 0px 0px 8px; font-family: inherit; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 18px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-align: justify;\"><span style=\"font-weight: 700;\">নারী ও শিশু নির্যাতন প্রতিরোধে ন্যাশনাল হেল্পলাইন ১০৯ এর মাধ্যমে যৌন হয়রানী প্রতিরোধ ও বাল্যবিবাহ বন্ধে   <u style=\"padding: 0px; margin: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; border: 0px; vertical-align: baseline;\">১২৯৫৬৩৯</u> টি ফোনকল গ্রহণ;</span></li><li style=\"padding: 0px; margin: 0px 0px 8px; font-family: inherit; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 18px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-align: justify;\"><span style=\"font-weight: 700;\">রোহিংগা নারী ও শিশুদের জন্য মনোসামাজিক কাউন্সিলিং সেবা প্রদানের লক্ষ্যে কক্সবাজারের উখিয়ায় রিজিওনাল ট্রমা কাউন্সিলিং সেন্টার স্থাপন এবং</span></li><li style=\"padding: 0px; margin: 0px 0px 8px; font-family: inherit; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 18px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-align: justify;\"><span style=\"font-weight: 700;\">উখিয়ায় <u style=\"font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline;\">৩৩৮৩৭</u> জনকে এবং সারাদেশে ৩৪,৬৭৮ জন নারী ও শিশুকে মনোসামাজিক কাউন্সিলিং সেবা প্রদান করা হয়েছে।</span></li></ul><p style=\"padding: 0px; margin: 0px 0px 8px; font-family: inherit; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 18px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-align: justify;\"><span style=\"font-weight: 700;\"><br></span></p><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; font-size: inherit; line-height: inherit; font-family: inherit; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; border: 0px; vertical-align: baseline; list-style: inside circle;\"><li style=\"padding: 0px; margin: 0px 0px 8px; font-family: inherit; border: 0px; font-style: inherit; font-variant: inherit; font-stretch: inherit; line-height: 18px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-align: justify;\"><u style=\"font: inherit; padding: 0px; margin: 0px; border: 0px; vertical-align: baseline;\">আইনগত সহায়তা প্রদান:</u><br></li></ul><ul style=\"margin-right: 0px; margin-bottom: 20px; margin-left: 0px; padding: 0px; font: inherit; border: 0px; vertical-align: baseline; list-style: inside circle;\"><li style=\"padding: 0px; margin: 0px 0px 8px; font-family: inherit; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 18px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-align: justify;\">নারী নির্যাতন প্রতিরোধ সেলের মাধ্যমে নির্যাতিতা<span dir=\"RTL\" style=\"padding: 0px; margin: 0px; font: inherit; border: 0px; vertical-align: baseline;\">,</span> দুঃস্থ ও অসহায় ১,৪৩০ জন মহিলাকে আইনগত পরামর্শ প্রদান;</li><li style=\"padding: 0px; margin: 0px 0px 8px; font-family: inherit; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 18px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-align: justify;\">জেলা লিগ্যাল এইড কমিটিতে ১২৩টি অভিযোগ প্রেরণ করাসহ মোহরানা ও খোরপোষ বাবদ ৩৭.৮৮ লক্ষ টাকা আদায় করা;</li><li style=\"padding: 0px; margin: 0px 0px 8px; font-family: inherit; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 18px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-align: justify;\">২০১১ সালে গাজীপুরে ১০০ আসন বিশিষ্ট মহিলা, শিশু ও কিশোরীর হেফাজতীদের নিরাপদ আবাসন কেন্দ্র প্রতিষ্ঠা এবং</li><li style=\"padding: 0px; margin: 0px 0px 8px; font-family: inherit; border: 0px; font-style: inherit; font-variant: inherit; font-weight: inherit; font-stretch: inherit; line-height: 18px; font-optical-sizing: inherit; font-kerning: inherit; font-feature-settings: inherit; font-variation-settings: inherit; vertical-align: baseline; text-align: justify;\">ঢাকা, চট্টগ্রাম, রাজশাহী, খুলনা, বরিশাল ও সিলেট বিভাগের প্রতিটিতে  ১০০ আসন বিশিষ্ট নারী সহায়তা কেন্দ্র প্রতিষ্ঠা।</li></ul><p style=\"margin-right: 5px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font: inherit; border: 0px; vertical-align: baseline; width: 720px; float: left; text-align: justify;\"> </p><p style=\"margin-right: 5px; margin-bottom: 0px; margin-left: 0px; padding: 0px; font: inherit; border: 0px; vertical-align: baseline; width: 720px; float: left; text-align: justify;\"><br></p></div></h3>');

-- --------------------------------------------------------

--
-- Table structure for table `marriage_couple`
--

DROP TABLE IF EXISTS `marriage_couple`;
CREATE TABLE IF NOT EXISTS `marriage_couple` (
  `marriage_couple_id` int NOT NULL AUTO_INCREMENT,
  `groom_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `groom_date_of_birth` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `groom_gender` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `groom_bg_group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `groom_religion` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `groom_nid_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `groom_birth_certificate_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `groom_health_condition` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `groom_photo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `groom_inst_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `bride_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `bride_date_of_birth` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `bride_gender` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `bride_bg_group` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `bride_religion` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `bride_nid_no` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `bride_birth_certificate_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `bride_health_condition` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `bride_photo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `bride_inst_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `marriage_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `marriage_certificate_status` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `medium_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `medium_full_name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `marriage_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`marriage_couple_id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `marriage_couple`
--

INSERT INTO `marriage_couple` (`marriage_couple_id`, `groom_name`, `groom_date_of_birth`, `groom_gender`, `groom_bg_group`, `groom_religion`, `groom_nid_no`, `groom_birth_certificate_id`, `groom_health_condition`, `groom_photo`, `groom_inst_name`, `bride_name`, `bride_date_of_birth`, `bride_gender`, `bride_bg_group`, `bride_religion`, `bride_nid_no`, `bride_birth_certificate_id`, `bride_health_condition`, `bride_photo`, `bride_inst_name`, `marriage_status`, `marriage_certificate_status`, `medium_user`, `medium_full_name`, `marriage_date`) VALUES
(29, 'সাইদ ইব্রাহীম নবি', '2000-11-17', 'Male', 'B+', 'Islam', '100', '423343234', 'স্বাভাবিক', 'O03WeQAKSU.jpg', 'উল্লাপাড়া ট্রেনিং ইনস্টিটিউড', 'মোছা: মারিয়া মিম', '2001-02-27', 'Female', 'O+', 'Islam', '200', '2424422424', 'স্বাভাবিক', 'kNOGlQYjV6.jpg', 'উল্লাপাড়া ট্রেনিং ইনস্টিটিউড', 'Married', 'pending', '798304', 'কাজি মো: হারুন মিয়া', '2023-07-15 05:42:13'),
(31, 'মোঃ জোভান', '2000-11-17', 'Male', 'O+', 'Islam', '1000', '45245245', 'স্বাভাবিক', 'jovn.jpg', 'উল্লাপাড়া ট্রেনিং ইনস্টিটিউড', 'মোছা: ঝর্ণা', '2001-02-27', 'Female', 'O+', 'Islam', '2000', '41441', 'স্বাভাবিক', 'pri.jfif', 'উল্লাপাড়া ট্রেনিং ইনস্টিটিউড', 'Married', 'pending', '560730', 'Barclay Osborn', '2023-07-18 07:49:13'),
(27, 'মোঃ তুর্জ মিয়া', '2000-11-17', 'Male', 'B+', 'Islam', '10000', '75245', 'স্বাভাবিক', 'aymn.jfif', 'উল্লাপাড়া ট্রেনিং ইনস্টিটিউড', 'মোছা: রোকেয়া খাতুন', '2001-02-27', 'Female', 'O+', 'Islam', '20000', '14714', 'স্বাভাবিক', 'munj.jpg', 'উল্লাপাড়া ট্রেনিং ইনস্টিটিউড', 'rejected', 'pending', '798304', 'কাজি মো: হারুন মিয়া', '2023-07-15 05:42:13');

-- --------------------------------------------------------

--
-- Table structure for table `mosque`
--

DROP TABLE IF EXISTS `mosque`;
CREATE TABLE IF NOT EXISTS `mosque` (
  `mosque_id` int NOT NULL AUTO_INCREMENT,
  `mosque_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_found_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_contact_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_division` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_district` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_thana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_union` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_village` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_division` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_district` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_thana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_union` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_village` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_reg_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_nid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_date_of_birth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_fathers_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_com_mothers_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mosque_username` int NOT NULL,
  `mosque_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`mosque_id`),
  UNIQUE KEY `mosque_username` (`mosque_username`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mosque`
--

INSERT INTO `mosque` (`mosque_id`, `mosque_name`, `mosque_found_date`, `mosque_contact_number`, `mosque_division`, `mosque_district`, `mosque_thana`, `mosque_union`, `mosque_village`, `mosque_address`, `mosque_com_name`, `mosque_com_division`, `mosque_com_district`, `mosque_com_thana`, `mosque_com_union`, `mosque_com_village`, `mosque_com_address`, `mosque_com_mobile`, `mosque_com_reg_no`, `mosque_com_nid`, `mosque_com_date_of_birth`, `mosque_com_image`, `mosque_com_fathers_name`, `mosque_com_mothers_name`, `mosque_username`, `mosque_password`) VALUES
(8, '২০১ গম্বুজ মসজিদ', '2013-01-13', '+8801968402925', 'ঢাকা', 'টাঙ্গাইল', 'টাঙ্গাইল', 'দক্ষিণ পাথালিয়া', 'দক্ষিণ পাথালিয়া', 'দক্ষিণ পাথালিয়া, গোপালপুর, টাঙ্গাইল', 'হাজি মো: রিয়াদ ইসলাম', 'ঢাকা', 'টাঙ্গাইল', 'গোপালপুর', 'দক্ষিণ পাথালিয়া', 'দক্ষিণ পাথালিয়া', 'দক্ষিণ পাথালিয়া, গোপালপুর, টাঙ্গাইল', '+8801968402925', '1234567891', '1234567891', '1990-10-31', 'VeNZqYUjL8.jpg', 'মো: জহির উদ্দিন', 'মোছ: হেলেনা বেগম', 643398, '851514'),
(9, 'বাংলাদেশের জাতীয় মসজিদ', '1951-12-30', '+8801968402925', 'টাকা', 'ঢাকা', 'ঢাকা', 'ঢাকা', 'বুড়িগঙ্গা নদীর তীরে', 'বুড়িগঙ্গা নদীর তীরে', 'হাজি মো: মুন্না আলী', 'রাজশাহি', 'বগুরা', 'শাহাহানপুর', 'দুবলাগাড়ি', 'দুবলাগাড়ি', 'দুবলাগাড়ি', '+8801968402925', '1234567891', '1234567891', '2023-07-13', 'uo8K3PJbf1.jpg', 'মো: রাব্বি মিয়া ', 'মোছ: আমেলা বেগম', 791187, '860441');

-- --------------------------------------------------------

--
-- Table structure for table `muazzin`
--

DROP TABLE IF EXISTS `muazzin`;
CREATE TABLE IF NOT EXISTS `muazzin` (
  `muazzin_id` int NOT NULL AUTO_INCREMENT,
  `muazzin_mosque_id` text COLLATE utf8mb4_general_ci,
  `muazzin_name` text COLLATE utf8mb4_general_ci,
  `muazzin_division` text COLLATE utf8mb4_general_ci,
  `muazzin_district` text COLLATE utf8mb4_general_ci,
  `muazzin_thana` text COLLATE utf8mb4_general_ci,
  `muazzin_union` text COLLATE utf8mb4_general_ci,
  `muazzin_village` text COLLATE utf8mb4_general_ci,
  `muazzin_address` text COLLATE utf8mb4_general_ci,
  `muazzin_mobile` text COLLATE utf8mb4_general_ci,
  `muazzin_nid` text COLLATE utf8mb4_general_ci,
  `muazzin_date_of_birth` text COLLATE utf8mb4_general_ci,
  `muazzin_image` text COLLATE utf8mb4_general_ci,
  `muazzin_father_name` text COLLATE utf8mb4_general_ci,
  `muazzin_username` text COLLATE utf8mb4_general_ci,
  `muazzin_password` text COLLATE utf8mb4_general_ci,
  `muazzin_details_type` text COLLATE utf8mb4_general_ci,
  `muazzin_created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`muazzin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `muazzin`
--

INSERT INTO `muazzin` (`muazzin_id`, `muazzin_mosque_id`, `muazzin_name`, `muazzin_division`, `muazzin_district`, `muazzin_thana`, `muazzin_union`, `muazzin_village`, `muazzin_address`, `muazzin_mobile`, `muazzin_nid`, `muazzin_date_of_birth`, `muazzin_image`, `muazzin_father_name`, `muazzin_username`, `muazzin_password`, `muazzin_details_type`, `muazzin_created_at`) VALUES
(2, NULL, 'Kuame Huber ddd', 'Est laborum Maxime', 'Est laborum Maxime', 'qabirecoqy', 'wojysugib', 'faxeqe', 'Laborum Tempora sed', '1212222441', '195', '2007-11-05', 'jdXBmn5sfS.jpg', 'Oren Kramer', '364615', '548841', NULL, NULL),
(5, '8', 'Harrison Fletcher', 'Ducimus iure et dol', 'Voluptas velit ut qu', 'gobigec', 'cakafukaj', 'ninedujyj', 'Suscipit ea perspici', '+1 (986) 572-9293', '189', '2019-01-04', 'DxkcoHuPbA.jpg', 'Xenos Coffey', '972865', '675590', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` int NOT NULL AUTO_INCREMENT,
  `news_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `news_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `news_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `news_title`, `news_description`, `news_image`) VALUES
(17, 'Consequatur Necessi test', 'Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.Magnam beatae dolore.', '5M216etglU.jpg'),
(16, 'বাল্যবিবাহ প্রতিরোধে করণীয় কী?', '<div>বাংলাদেশের অন্যতম সামাজিক সমস্যা হচ্ছে বাল্যবিবাহ। বাল্যবিবাহ প্রতিরোধে দেশে আইন হয়েছে। সরকারি ও বেসরকারি পর্যায়ে নেওয়া হয়েছে নানা পদক্ষেপ। বাল্যবিবাহের কুফল সম্পর্কে জানাতে প্রতিনিয়ত সভা-সমাবেশ আর মানববন্ধন কর্মসূচি পরিচালিত হচ্ছে। কিন্তু তাতে বাল্যবিবাহ থেমে থাকছে না। প্রত্যন্ত গ্রাম আর শহরের বস্তিগুলোতে তো বটেই, তথাকথিত শিক্ষিত আর সচেতন সমাজেও ঘটছে বাল্যবিবাহের ঘটনা। সম্প্রতি কমনওয়েলথ নারী ফোরামে প্রধানমন্ত্রী জানিয়েছেন, বাংলাদেশে ১৮ বছর বয়সের কম মেয়েদের বিয়ের হার ২০১৫ সালের ৬২ শতাংশ থেকে কমে ২০১৭ সালে এসে দাঁড়িয়েছে ৪৭ শতাংশে। এটা নিঃসন্দেহে একটি ভালো খবর। কিন্তু এই ৪৭ শতাংশও তো কম নয়। আগের চেয়ে অনেক বেশি জানেন। তাই এখন বাল্যবিবাহ প্রতিরোধে জনসচেতনতা সৃষ্টির জন্য প্রচার-প্রচারণা চালানোর চেয়ে বেশি প্রয়োজন সমস্যার মূলে হাত দেওয়া। আমাদের সমাজে। বাল্যবিবাহ প্রতিরোধে সচেতনতা সৃষ্টিতে সরকারি ও বেসরকারিভাবে যে প্রচার-প্রচারণাগুলো চালানো হয়, সেখানে মূলত তিনটি বিষয়কে প্রাধান্য দেওয়া হয়: ১. মেয়েটির অনিরাপদ মাতৃত্ব ও স্বাস্থ্যগত ঝুঁকি ২. মেয়েটির অনিশ্চিত শিক্ষাজীবন এবং ৩. নারীর বিঘ্নিত অর্থনৈতিক ও সামাজিক ক্ষমতায়ন। বিগত দুই দশকে উন্নয়নের বেশ কিছু সূচকে বাংলাদেশের অগ্রগতি চোখে পড়ার মতো। বাংলাদেশে বেড়েছে শিক্ষার হার আর সেই সঙ্গে বেড়েছে সচেতন জনগোষ্ঠীর সংখ্যা। তাই নিশ্চিতভাবেই এ কথা বলা যায় যে বাল্যবিবাহের ক্ষতিকর দিকগুলো সম্পর্কে এখনকার মানুষ মাতৃত্বের অনুভূতি থেকে এ কথা আত্মবিশ্বাসের সঙ্গে বলতে পারি, সামান্য বিবেচনাবোধ আছে এমন বাবা-মা জেনে-বুঝে সন্তানকে বিপদের মুখে ঠেলে দিতে পারেন না। তাই কেন বাবা-মায়েরা সন্তানকে বাল্যবিবাহের মতো একটি অভিশাপের দিকে ঠেলে দিচ্ছেন, তা তলিয়ে দেখা প্রয়োজন। যে দেশে প্রায় ৮০ শতাংশ নারীই বিবাহিত জীবনে পারিবারিক নির্যাতনের শিকার হন, সেই দেশের পিতা-মাতার কাছে তাঁর কন্যাশিশুর নিশ্চিত ভবিষ্যৎ হিসেবে বাল্যবিবাহ কোনো আকর্ষণীয় সমাধান হিসেবে মেনে নেওয়ার কথা নয়। নিরুপায় হয়েই তাঁরা এই পথ বেছে নিচ্ছেন। বিভিন্ন গবেষণায় দেখা গেছে, সামাজিক নিরাপত্তার অভাব ও দারিদ্র্য বাংলাদেশে বাল্যবিবাহের অন্যতম বড় কারণ। এর সঙ্গে জড়িয়ে রয়েছে আরও বেশ কিছু বাস্তবতা। তাই বাল্যবিবাহকে রুখতে হলে এই সমস্যার মূলের দিকে নজর দেওয়া জরুরি। যৌতুক প্রথা আজও ব্যাপকভাবে বিরাজমান ২০১৭ সালের শেষ দিকে পপুলেশন কাউন্সিলের ‘অ্যাকসেলারেটিং অ্যাকশন টু এন্ড চাইল্ড ম্যারেজ ইন বাংলাদেশ’ শীর্ষক প্রকল্পের আওতায় করা জরিপের ফলাফলে দেখা গেছে, কম বয়সে মেয়ের বিয়ে দিলে যৌতুকও দিতে হয় কম। তাই অভিভাবকেরা মেয়েদের বাল্যবিবাহ দিতে উৎসাহিত হন। বগুড়া ও জামালপুর অঞ্চলে পরিচালিত এই জরিপে দেখা যায়, যেখানে ১৬ বছরের আগে মেয়ের বিয়ে দিলে গড়ে ৫০ হাজার টাকা যৌতুক দিতে হচ্ছে, সেখানে মেয়ের বয়স ১৬ থেকে ১৮ বছর হলে যৌতুকের টাকার পরিমাণ বেড়ে দাঁড়াচ্ছে ৮০ হাজার এবং মেয়ের বয়স ১৮ থেকে ১৯ বছর হলে বাবা-মাকে দিতে হচ্ছে গড়ে এক লাখ টাকা। মেয়ের নিশ্চিত ভবিষ্যৎ হিসেবে বাল্যবিবাহ যে খুব একটা সুখকর সমাধান নয়, সেটি বাবা-মায়েরা ভালোভাবেই জানেন। তবে এর বিকল্প পথটির ঠিকানাও খুঁজে পাচ্ছেন না তাঁরা। তাই এই সামাজিক ব্যাধিকে রুখতে হলে বাল্যবিবাহ সম্পর্কে সচেতনতা সৃষ্টির সঙ্গে সঙ্গে বাল্যবিবাহের বিকল্প পথগুলো সম্পর্কে সবাইকে স্বচ্ছ ধারণা দিতে হবে। বাল্যবিবাহ রোধে সচেতনতা সৃষ্টির পৃথিবীর সর্ববৃহৎ নেটওয়ার্ক ‘গার্লস নট ব্রাইড’ নারীর জীবনের ইতিবাচক পরিবর্তনের ক্ষেত্রে চারটি বিষয়কে গুরুত্বের সঙ্গে নিয়েছে: ১. নারীর ক্ষমতায়ন ২. নারীর প্রতি পরিবার ও সমাজের সচেতনতা ও ইতিবাচক দৃষ্টিভঙ্গি ৩. নারীর কর্মসংস্থান ৪. বাল্যবিবাহ প্রতিরোধে কঠোর আইন ও তার প্রয়োগ। বাল্যবিবাহ প্রতিরোধে আমাদের প্রথম যে কাজটি করতে হবে তা হলো মেয়েদের নিরাপদ পথচলা নিশ্চিত করতে হবে। শিক্ষাপ্রতিষ্ঠান, কর্মস্থল, রাস্তাঘাট ও গণপরিবহনকে নারীবান্ধব ও যৌন হয়রানিমুক্ত করতে হবে। যৌতুক নিরোধ আইনে সাজার পরিমাণ বাড়িয়ে আইনকে যুগোপযোগী করার যে উদ্যোগ সরকার নিয়েছে, তা দ্রুত বাস্তবায়ন করতে হবে। বিভিন্ন স্তরে যোগ্যতা অনুযায়ী নারীর কর্মসংস্থানের সুযোগ সৃষ্টি করাটা খুব জরুরি। ক্ষুদ্র উদ্যোক্তা হতে আগ্রহী নারীদের জন্য বিনিয়োগবান্ধব পরিবেশ নিশ্চিত করতে হবে। স্বল্প শিক্ষিত ও শিক্ষা ঝরে পড়া মেয়েরা যেন বেশি করে কারিগরি ও বৃত্তিমূলক প্রশিক্ষণের আওতায় আসতে পারে, সেদিকে দৃষ্টি দিতে হবে। এক কথায় তাদের অর্থনৈতিক স্বনির্ভরতা অর্জনের পথটি হতে হবে একেবারে দৃশ্যমান, যা দেখে বিয়েকেই মেয়ের জন্য একমাত্র সুরক্ষাকবচ হিসেবে বিবেচনার ধ্যানধারণা থেকে বাবা-মায়েরা বেরিয়ে আসবেন।</div><div><br></div>', 'fom6R8edDl.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

DROP TABLE IF EXISTS `notice`;
CREATE TABLE IF NOT EXISTS `notice` (
  `not_id` int NOT NULL AUTO_INCREMENT,
  `not_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `not_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `not_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `not_thumbnail` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`not_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `objections`
--

DROP TABLE IF EXISTS `objections`;
CREATE TABLE IF NOT EXISTS `objections` (
  `obj_id` int NOT NULL AUTO_INCREMENT,
  `obj_title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `obj_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `obj_category` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `obj_phone` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `obj_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `obj_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`obj_id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `objections`
--

INSERT INTO `objections` (`obj_id`, `obj_title`, `obj_email`, `obj_category`, `obj_phone`, `obj_description`, `obj_image`) VALUES
(13, 'রহমিা পারভীন', 'rohima@gmail.com', 'আমাকে আমার বাবা মা জোর করে বিয়ে দিতে চায়', '019857455825', 'আমাকে আমার বাবা মা জোর করে বিয়ে দিতে চায়। কিন্তু আমি বিয়ে করতে চাই না। এখন আমাকে সাহায্য করুন ।', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
CREATE TABLE IF NOT EXISTS `pages` (
  `pages_id` int NOT NULL AUTO_INCREMENT,
  `pages_title` varchar(3000) NOT NULL,
  `pages_image` text NOT NULL,
  `pages_description` longtext NOT NULL,
  `create_at` date NOT NULL,
  PRIMARY KEY (`pages_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`pages_id`, `pages_title`, `pages_image`, `pages_description`, `create_at`) VALUES
(1, 'আমাদের সম্পর্কে', 'logo.png', '<p>অ্যাডপিসিং প্রক্রিয়ার দিকে মনোযোগ দেওয়া গ্রাহকের জন্য খুবই গুরুত্বপূর্ণ। আমি দরজা খুলব, আমি চাটুকারে তার যন্ত্রণা ব্যাখ্যা করব, এবং কেউ জিজ্ঞাসা করবে না যেন সে দোষী! যাইহোক, অপরাধবোধের যন্ত্রণা এই ফাইন্ডিং ফ্লাইট মহান, ছোট প্রয়োজন, পরিত্রাণ পেতে, আমরা কি গ্রহণ করতে অস্বীকার করতে পারি? কিন্তু সত্যের সত্যতা কী? আমরা তাকে আনন্দের দ্বারা আবদ্ধ হওয়ার অভিযোগ করি। অ্যাডপিসিং প্রক্রিয়ার দিকে মনোযোগ দেওয়া গ্রাহকের জন্য খুবই গুরুত্বপূর্ণ। যাইহোক, নির্বাচিত ত্রুটিটি প্রত্যাখ্যান করার জন্য একটি দুর্দান্ত বিনামূল্যে উপহার হিসাবে পরিণত হবে।</p><p><br></p><p> অভিযুক্তদের পরিণতি, তার প্রশিক্ষণের বেদনা দ্বারা নির্বাচিত, এই এক আমাদের অধিকাংশ পলায়ন যাক, আমরা যে কেউ কর্তব্য করতে পারেন না, কারণ কেউ প্রায়ই কোন নেই! বেদনা নিতে এবং তোষামোদ করার জন্য, যে কোনো কারণে যারা তার প্রশংসা করে তাদের প্রয়োজনে সে দ্রুত পালিয়ে যায়। খুব</p>', '2023-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `parents_info`
--

DROP TABLE IF EXISTS `parents_info`;
CREATE TABLE IF NOT EXISTS `parents_info` (
  `parents_info_id` int NOT NULL AUTO_INCREMENT,
  `uid` int NOT NULL,
  `fathers_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fathers_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fathers_nid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `fathers_profession` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mothers_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mothers_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mothers_nid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `mothers_profession` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`parents_info_id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `parents_info`
--

INSERT INTO `parents_info` (`parents_info_id`, `uid`, `fathers_name`, `fathers_phone`, `fathers_nid`, `fathers_profession`, `mothers_name`, `mothers_phone`, `mothers_nid`, `mothers_profession`) VALUES
(42, 44, 'মো: রহিত মিয়া', '01968402925', '43', 'পুলিশ', 'মো: রহিতা বেগম', '01968402925', '16', 'গৃহিনী'),
(40, 45, 'মো: রনি', '01993973893', '2445353', 'চাকুরী', 'মোছা: আমেলা ', '019838372972', '86898989', 'গৃহিনী'),
(43, 47, 'মো: রহিত মিয়া', '01968402925', '43', 'পুলিশ', 'মো: রহিতা বেগম', '01968402925', '16', 'গৃহিনী'),
(41, 46, 'মো: রনি', '01993973893', '2445353', 'চাকুরী', 'মোছা: আমেলা ', '019838372972', '86898989', 'গৃহিনী'),
(39, 48, 'মো: রহিত মিয়া', '01968402925', '43', 'পুলিশ', 'মো: রহিতা বেগম', '01968402925', '16', 'গৃহিনী'),
(44, 49, 'মো: রনি', '01993973893', '2445353', 'চাকুরী', 'মোছা: আমেলা ', '019838372972', '86898989', 'গৃহিনী'),
(48, 50, 'gfedghtrhtyh', '01993973893', '12353465476776', 'egtrgtrg', 'dgfdhghg', 'dgfdhghg', '12434546577888', ''),
(55, 59, 'Denton Mcleod', '+1 (503) 517-8753', '19', 'Illum adipisci lore', 'Grant Mayo', '+1 (356) 838-7538', '19', 'Ut et quasi quis qua'),
(54, 58, 'Francesca Peterson', '+1 (277) 674-9098', '100', 'Suscipit dolor fugia', 'Yvette Vinson', '+1 (712) 923-7506', '88', 'Tempore sint nesciu'),
(52, 56, 'Chelsea Duncan', '+1 (527) 942-8143', '35', 'Cillum ipsum et eiu', 'Ezra Gaines', 'Ezra Gaines', '83', 'Non ipsum quia est '),
(53, 57, 'Ronan Oneill', '+1 (687) 127-6732', '90', 'Id ut ad itaque ad m', 'Geoffrey Espinoza', '+1 (108) 603-8824', '33', 'Et aliquip possimus'),
(56, 60, 'Mannix Watson', '+1 (168) 305-1168', '42', 'Modi fuga Possimus', 'Jacob Woodward', '+1 (494) 639-4116', '24', 'Cillum atque laborum'),
(57, 61, 'Jasper Fitzpatrick', '+1 (673) 195-6841', '5', 'Repellendus Duis il', 'Carl Jones', '+1 (103) 517-7367', '94', 'Odio nemo nesciunt '),
(58, 62, 'Nasim Hester', '+1 (642) 484-1306', '93', 'Nihil cillum sequi f', 'Kiayada Yang', '+1 (355) 969-2368', '6', 'Non sunt cum velit '),
(59, 63, 'Summer Mayo', '+1 (895) 313-6492', '20', 'Do dolor ea debitis ', 'Jerry Graham', '+1 (711) 621-6393', '96', 'Consequuntur eos aut'),
(60, 64, 'Zachary Mann', '+1 (453) 864-2761', '58', 'Nemo qui nostrud par', 'Brennan Rollins', '+1 (587) 718-8245', '33', 'Pariatur Sed ea nec'),
(61, 65, 'Lawrence Clark', '+1 (497) 539-9044', '95', 'Ut at autem quis qua', 'Clementine Sharp', '+1 (219) 301-7408', '29', 'Dolores laboriosam '),
(62, 66, 'Rosalyn Solomon', '+1 (913) 843-7443', '56', 'Aut eos blanditiis ', 'Eliana Middleton', '+1 (663) 522-6545', '79', 'Ipsam ut libero perf'),
(63, 67, 'Julie Hinton', '+1 (714) 221-3001', '76', 'Irure iste ut volupt', 'Courtney Davis', '+1 (877) 196-7337', '13', 'Eos ad quae dolorum '),
(64, 68, 'Uriah Waters', '+1 (431) 738-1107', '58', 'Molestiae nesciunt ', 'Nolan Norton', '+1 (406) 401-6991', '61', 'Ea ipsa eum deserun'),
(65, 69, 'Barrett Whitehead', '+1 (529) 394-4145', '55', 'In molestiae maxime ', 'Basia Drake', '+1 (811) 269-3135', '19', 'Qui iusto tempore q');

-- --------------------------------------------------------

--
-- Table structure for table `purohit`
--

DROP TABLE IF EXISTS `purohit`;
CREATE TABLE IF NOT EXISTS `purohit` (
  `purohit_id` int NOT NULL AUTO_INCREMENT,
  `purohit_temple_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_division` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_district` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_thana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_union` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_village` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_nid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_date_of_birth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_father_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `purohit_address` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `details_type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'purohit',
  PRIMARY KEY (`purohit_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purohit`
--

INSERT INTO `purohit` (`purohit_id`, `purohit_temple_id`, `purohit_name`, `purohit_division`, `purohit_username`, `purohit_password`, `purohit_district`, `purohit_thana`, `purohit_union`, `purohit_village`, `purohit_mobile`, `purohit_nid`, `purohit_date_of_birth`, `purohit_image`, `purohit_father_name`, `purohit_address`, `details_type`) VALUES
(14, '1', 'রাম চক্রবর্তী ', 'নওগাঁ ', '265810', '212374', 'রাজশাহী ', 'নওগাঁ ', 'নওগাঁ ', 'নওগাঁ সদর', '+1 (522) 392-3709', '1111111', '1986-08-15', '8DmqVusiQ4.jpg', 'দশরথ চক্রবর্তী ', 'Nam eligendi quis at', 'purohit'),
(18, '16', 'লক্ষণ চক্রবর্তী ', 'Eum reprehenderit f', '231036', '645397', 'Velit aliquam quos a', 'giwojuxare', 'sipuwupimo', 'fecirak', '+1 (558) 897-7141', '212', '2011-05-02', 'MV1ZtXvdU8.jpg', 'Veda Hines', 'Et qui et est ducimu', 'purohit');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int NOT NULL AUTO_INCREMENT,
  `slider_title` varchar(255) NOT NULL,
  `slider_image` text NOT NULL,
  `slider_description` longtext NOT NULL,
  `slider_category` varchar(255) NOT NULL,
  PRIMARY KEY (`slider_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `slider_title`, `slider_image`, `slider_description`, `slider_category`) VALUES
(2, 'Nostrud tempor at to update', 'VctFM7W8bq.jpg', 'Perspiciatis verita', 'In excepteur tempore'),
(19, 'slider-03', 'GvzPnlkojK.jpg', 'Saepe rerum quia ess', 'Voluptatem id aperia'),
(18, 'child marriage controlling system', 'VBH1efIcZz.jpg', 'child marriage controlling system', 'child marriage controlling system');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `st_id` int NOT NULL AUTO_INCREMENT,
  `st_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `st_date_of_birth` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `st_gender` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `st_bg_group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `st_religion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `st_phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `st_nid_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `st_birth_certificate_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `st_health_condition` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `st_photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `st_class_roll` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `st_class_section` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `st_class` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `st_inst_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `st_present_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `st_permanent_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `st_union_pourosova` text COLLATE utf8mb4_general_ci,
  `st_ward` text COLLATE utf8mb4_general_ci,
  `who_add` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `marital_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `student_type` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`st_id`)
) ENGINE=MyISAM AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `st_name`, `st_date_of_birth`, `st_gender`, `st_bg_group`, `st_religion`, `st_phone`, `st_nid_no`, `st_birth_certificate_id`, `st_health_condition`, `st_photo`, `st_class_roll`, `st_class_section`, `st_class`, `st_inst_name`, `st_present_address`, `st_permanent_address`, `st_union_pourosova`, `st_ward`, `who_add`, `marital_status`, `student_type`) VALUES
(61, 'Tanisha Burgess', '1999-04-07', 'Female', 'A+', 'Islam', '', '15', '99', 'Beverly Conner', 'default.png', '84', 'Consequatur Sit id', '7', '', 'Numquam sit officia ', 'Do molestiae qui lab', 'Ullapara Pourasova', '1', '560730', 'Single', 'student'),
(50, 'gfdfh', '2005-10-29', 'Female', 'A+', 'Islam', '', '', '12456878799912345', '', 'JIZh3W5rvk.jpg', '1111', '1111', '5', NULL, 'Flat no.: 12, House no.: 526/1/1, Uposhohor Jhikira', 'Flat no.: 12, House no.: 526/1/1, Uposhohor Jhikira', 'Ullapara Pourasova', '1', 'admin', 'Single', 'student'),
(48, 'মোছা: ঝর্ণা', '2001-02-27', 'Female', 'O+', 'Islam', '', '2000', '41441', 'স্বাভাবিক', 'pri.jfif', '452452', 'A', '5', NULL, 'ঢাকা ,গাজীপুর', 'ঢাকা ,গাজীপুর', 'Borohor', '1', 'admin', 'Single', 'student'),
(47, 'মোঃ তুর্জ মিয়া', '2000-11-17', 'Male', 'O+', 'Islam', '0196842577', '10000', '75245', 'স্বাভাবিক', 'aymn.jfif', '', 'A', '1', '', 'ঢাকা ,গাজীপুর', 'ঢাকা ,গাজীপুর', 'Ullapara Pourasova', '1', 'admin', 'Single', 'student'),
(60, 'Ian Walls', '2010-01-29', 'Male', 'B-', 'Islam', '', '47', '33', 'Lacey Donaldson', '1ZRLjopEvU.jpg', '', '', '1', '', 'Exercitation suscipi', 'Rerum ea distinctio', 'Ullapara Pourasova', '1', 'admin', 'Single', 'student'),
(44, 'সাইদ ইব্রাহীম নবি', '2000-11-17', 'Male', 'B+', 'Islam', '', '100', '423343234', 'স্বাভাবিক', 'O03WeQAKSU.jpg', '', '', '', '', 'বগুরা,শেরপুর', 'বগুরা,শেরপুর', 'Ullapara Pourasova', '1', 'admin', 'Single', 'who_add'),
(45, 'মোছা: মারিয়া মিম', '2001-02-27', 'Female', 'O+', 'Islam', '', '200', '2424422424', 'স্বাভাবিক', 'kNOGlQYjV6.jpg', NULL, NULL, NULL, 'উল্লাপাড়া ট্রেনিং ইনস্টিটিউড', 'ঢাকা ,গাজীপুর', 'ঢাকা ,গাজীপুর', 'Ullapara Pourasova', NULL, '798304', 'Single', 'non_student'),
(46, 'মোঃ জোভান', '2000-11-17', 'Male', 'O+', 'Islam', '0196842577', '1000', '45245245', 'স্বাভাবিক', 'jovn.jpg', NULL, NULL, NULL, 'উল্লাপাড়া ট্রেনিং ইনস্টিটিউড', 'ঢাকা ,গাজীপুর', 'ঢাকা ,গাজীপুর', 'Ullapara Pourasova', NULL, '798304', 'Single', 'non_student'),
(57, 'Dalton Riley', '1983-01-20', 'Male', 'AB-', 'Buddha', '', '31', '34', 'Elmo Robinson', 'GJbsYqRLP5.jpg', '99', 'Dolorem quia hic eli', '4', 'উল্লাপাড়া ট্রেনিং ইনস্টিটিউড', 'Deserunt aut do do e', 'Quis velit totam ame', 'Ullapara Pourasova', '3', 'admin', 'Single', 'student'),
(56, 'Xyla Macias', '1999-12-17', 'Male', 'O-', 'Islam', '', '9', '31', 'Jeanette Patrick', '9Ke8qYEs0T.jpg', '49', 'Tempora ea corporis ', '7', '', 'Ullam sed in vero su', 'Cumque unde quasi mo', 'Ullapara Pourasova', '1', 'admin', 'Single', 'student'),
(62, 'Susan Casey', '1986-10-25', 'Male', 'AB-', 'Christian', '', 'Consectetur aliqua', 'Et accusantium repre', 'Xanthus Brown', 'QzEC5f46o3.jpg', NULL, NULL, NULL, 'উল্লাপাড়া ট্রেনিং ইনস্টিটিউড', 'Cupidatat aut quis o', 'Velit asperiores arc', 'Ullapara Pourasova', NULL, '560730', 'Single', 'student'),
(59, 'rxxxxx', '1994-01-01', 'Female', 'AB-', 'Islam', '', '79', '80', 'Cara Rivera', 'mcevRYwMlK.jpg', '', '', '', '', 'Similique ipsa dign', 'Reiciendis molestiae', 'Ullapara Pourasova', '1', 'admin', 'Single', 'student'),
(58, 'Keaton Evans', '2022-03-08', 'Male', 'AB+', 'Islam', '', '74', '68', 'Ulysses Boyd', 'OuLwRi6Bfh.jpg', '54', 'Est reiciendis facil', '4', '', 'Non consequat Vel n', 'Sequi id omnis iste ', 'Borohor', '3', 'admin', 'Single', 'student'),
(63, 'Blair Moon', '1980-07-06', 'Female', 'AB+', 'Hindu', '', '75', '90', 'Ut optio saepe est ', 'Oc1nRV2kiM.jpg', NULL, NULL, NULL, NULL, 'Consectetur sit pos', 'In velit minus eius', 'Borohor', '3', '560730', 'Single', 'student'),
(64, 'Chester Stevenson', '2003-01-26', 'Female', 'O-', 'Christian', '', '91', '82', 'Consequatur eveniet', '3V1WoLTO8N.jpg', NULL, NULL, NULL, NULL, 'Lorem dolore dolor s', 'Asperiores eum et la', 'Borohor', '1', '560730', 'Single', 'student'),
(65, 'Thomas Merrill', '1980-03-15', 'Male', 'O+', 'Christian', '', '9', '88', 'Voluptate officiis i', 'VHEsQkiBeY.jpg', NULL, NULL, NULL, NULL, 'Atque dolor est fuga', 'Culpa voluptatum rer', 'Borohor', '3', '560730', 'Single', 'student'),
(66, 'Jordan Decker', '2012-05-08', 'Male', 'A+', 'Hindu', '', '7', '7', 'Nostrum cupiditate a', 'default.png', NULL, NULL, NULL, NULL, 'Dolorem do pariatur', 'Dolorem dolore fugit', 'Borohor', '3', '560730', 'Single', 'student'),
(67, 'Darrel Tanner', '1976-03-28', 'Male', 'A+', 'Christian', '', '54', '19', 'Et neque adipisicing', 'CKpkhZydNA.jpg', NULL, NULL, NULL, NULL, 'Nihil soluta consequ', 'Libero minim a ipsum', 'Borohor', '3', 'admin', 'Single', 'student'),
(68, 'Noelani Cantrell', '2016-06-26', 'Male', 'A-', 'Buddha', '', '83', '6', 'Illum et incididunt', 'TtyXb6kIOv.jpg', NULL, NULL, NULL, NULL, 'Voluptate consectetu', 'Ut sint perspiciatis', 'Borohor', '1', 'admin', 'Single', 'non_student'),
(69, 'Gary Floyd', '1971-04-03', 'Female', 'AB+', 'Islam', '', '76', '47', 'Dolore voluptate nob', 'AKCxSIMVu7.jpg', NULL, NULL, NULL, NULL, 'Ipsam voluptas eos ', 'Voluptas deserunt si', 'Borohor', '2', '560730', 'Single', 'non_student');

-- --------------------------------------------------------

--
-- Table structure for table `temple`
--

DROP TABLE IF EXISTS `temple`;
CREATE TABLE IF NOT EXISTS `temple` (
  `temple_id` int NOT NULL AUTO_INCREMENT,
  `temple_purohit_id` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `temple_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_found_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_contact_number` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_division` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_district` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_thana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_union` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_village` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_com_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_com_division` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_com_district` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_com_thana` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_com_union` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_com_village` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_com_address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_com_mobile` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_com_reg_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_com_nid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_com_date_of_birth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_com_image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_com_fathers_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_com_mothers_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `temple_username` int NOT NULL,
  `temple_password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`temple_id`),
  UNIQUE KEY `temple_username` (`temple_username`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `temple`
--

INSERT INTO `temple` (`temple_id`, `temple_purohit_id`, `temple_name`, `temple_found_date`, `temple_contact_number`, `temple_division`, `temple_district`, `temple_thana`, `temple_union`, `temple_village`, `temple_address`, `temple_com_name`, `temple_com_division`, `temple_com_district`, `temple_com_thana`, `temple_com_union`, `temple_com_village`, `temple_com_address`, `temple_com_mobile`, `temple_com_reg_no`, `temple_com_nid`, `temple_com_date_of_birth`, `temple_com_image`, `temple_com_fathers_name`, `temple_com_mothers_name`, `temple_username`, `temple_password`) VALUES
(1, '14', 'কালিতলা মন্দির', '1960-08-10', '০১২৩৪৫৬৭৮৯', 'রাজশাহী', 'নওগাঁ', 'নওগাঁ সদর', 'নওগাঁ সদর ', 'নওগাঁ সদর ', 'কালিতলা নওগাঁ সদর ', 'কালিতলা পুজা কমিটি ', 'রাজশাহী', 'নওগাঁ', 'নওগাঁ সদর ', 'নওগাঁ সদর ', 'নওগাঁ সদর ', 'কালিতলা নওগাঁ সদর ', '১১১২৩৪৫৬৭৮৯', '১০২৫', '১২৩৪৫৬৭৮৯৫৪', '2012-05-07', 'SHGJ7k6hcw.jpg', 'লোকনাথ ঘোষ ', 'সূচনা ঘোষ', 549070, '337212'),
(15, '', 'শিব মন্দির দক্ষিণ বেজোড়া', '1974-09-11', '1234556789', 'বগুড়া', 'বগুড়া', 'বগুড়া', 'বগুড়া', 'বগুড়া দ্বিতীয় বাইপাস,', 'বগুড়া দ্বিতীয় বাইপাস', 'শিব ঘোষ ', 'বগুড়া ', 'বগুড়া ', 'বগুড়া ', 'বগুড়া ', 'বগুড়া ', 'বগুড়া ', '123456789', '123456678', '123456789', '2008-09-17', 'Rmy562ZJoL.jpg', 'আদিশঙ্কর ', 'ইতু ', 692155, '670687'),
(16, '', 'সারিয়াকান্দি পাড়া দেব সনাতন মন্দির', '2007-09-17', '12345678965412', 'বগুড়া', 'বগুড়া', 'সারিয়াকান্দি ', 'সারিয়াকান্দি ', 'সারিয়াকান্দি ', 'সারিয়াকান্দি ', 'সারিয়াকান্দি পাড়া কমিটি ', 'বগুড়া', 'বগুড়া', 'সারিয়াকান্দি ', 'সারিয়াকান্দি ', 'সারিয়াকান্দি ', 'সারিয়াকান্দি ', '২৩৪৫৬৭৮৯৯', '৭৮৫৪৬', '৪৫২১৫৮৮৭৫৫৬', '1996-05-22', 'f6tuwhMzsW.jpg', 'ইন্দ্রধনু ', 'জ্যোতি ', 944252, '327383');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
