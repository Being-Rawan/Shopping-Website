-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2023 at 11:34 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `suggestion` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`username`, `email`, `feedback`, `suggestion`, `time`) VALUES
('seifkeer', 'seif145', 'eee', 'ffff', '2023-04-20 16:36:00'),
('seif sherif', 'seif27168@gmail.com', 'very nice', 'website must faster', '2023-04-20 16:37:08'),
('seif sherif', 'saif_20220221@fci.helwan.edu.eg', 'ssss', 'ss', '2023-04-20 17:01:15'),
('seif sherif', 'saif_20220221@fci.helwan.edu.eg', 'ssss', 'ss', '2023-04-20 17:01:25'),
('seif sherif', 'seif27168@gmail.com', 'sss', 'sss\r\n', '2023-04-20 17:01:36'),
('seif saleh', 'Saif_20220221@fci.helwan.edu.eg', 'very nice', 'website must faster', '2023-04-20 17:02:44'),
('seif saleh', 'Saif_20220221@fci.helwan.edu.eg', 'very nice', 'website must faster', '2023-04-20 17:14:16'),
('seif saleh', 'Saif_20220221@fci.helwan.edu.eg', 'very nice', 'website must faster', '2023-04-20 17:14:20'),
('seif saleh', 'Saif_20220221@fci.helwan.edu.eg', 'very nice', 'website must faster', '2023-04-20 17:14:31'),
('seif saleh', 'Saif_20220221@fci.helwan.edu.eg', 'very nice', 'website must faster', '2023-04-20 17:14:34'),
('mohamed sherif', 'mohamed123@gmail.com', 'good', 'faster', '2023-04-20 17:15:04'),
('mohamed sherif', 'mohamed123@gmail.com', 'good', 'faster', '2023-04-20 17:25:58'),
('yousif sherif', 'yousif123@gmail.com', 'excellent', 'website must faster', '2023-04-20 17:38:11'),
('', '', '', '', '2023-04-20 17:43:53'),
('', '', '', '', '2023-04-20 17:44:06'),
('', '', '', '', '2023-04-20 17:44:07'),
('', '', '', '', '2023-04-20 17:44:31'),
('', '', '', '', '2023-04-20 17:44:39'),
('', '', '', '', '2023-04-20 17:44:42'),
('', '', '', '', '2023-04-20 17:44:42'),
('', '', '', '', '2023-04-20 17:44:43'),
('', '', '', '', '2023-04-20 17:44:43'),
('', '', '', '', '2023-04-20 17:44:43'),
('dd', 'd@3', 'd', 'd', '2023-04-20 17:45:45'),
('dd', 'd@3', 'd', 'd', '2023-04-20 17:45:56'),
('', '', '', '', '2023-04-25 10:31:13'),
('seif ayman', 'seif23456@gmail.com', 'very nice', 'website must faster', '2023-04-25 10:31:49'),
('seif ayman', 'seif23456@gmail.com', 'very nice', 'website must faster', '2023-04-25 10:32:42'),
('dd', 'ee@gmail.com', 'ee', 'gg', '2023-04-25 10:33:03'),
('seif sherif', 'yousif123@gmail.com', 'ff', 'dd', '2023-04-25 10:33:47'),
('mohamed sherif', 'Saif_20220221@fci.helwan.edu.eg', 'f', 'h', '2023-04-25 10:35:46'),
('', '', '', '', '2023-04-25 14:29:18'),
('dd', 's@f', 'e', 'e', '2023-04-25 14:29:30'),
('dd', 's@f', 'e', 'e', '2023-04-25 14:29:36'),
('seif ayman', 'seifayman1223@gmail.com', 'product very nice', 'website must faster', '2023-04-25 14:30:34'),
('', '', '', '', '2023-04-29 14:07:51'),
('', '', '', '', '2023-04-29 14:08:22'),
('boody sayed', 'boody234@gmail.com', 'website very nice', 'website must faster', '2023-04-29 14:09:00'),
('seif saleh', 'saif_20220221@fci.helwan.edu.eg', 'dd', 'ss', '2023-04-29 14:13:06');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
