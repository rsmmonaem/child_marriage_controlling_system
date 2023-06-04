-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 31, 2023 at 09:34 AM
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
