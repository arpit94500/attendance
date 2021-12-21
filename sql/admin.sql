-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 11:22 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abc`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `STATUS` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `image`, `location`, `timestamp`, `STATUS`) VALUES
(19, 'Chetan', 'pcs1081999@gmail.com', 'upload/61b1a041ddf05.png', '28.5851573 77.3121236', '2021-12-09 06:20:49', NULL),
(20, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a3b780134.png', '28.5851562 77.3121176', '2021-12-09 06:35:35', NULL),
(21, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a3d69dd6a.png', '28.5851562 77.3121176', '2021-12-09 06:36:06', NULL),
(22, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a3e4abba6.png', '28.5851562 77.3121176', '2021-12-09 06:36:20', NULL),
(23, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a3f834e31.png', '28.5851562 77.3121176', '2021-12-09 06:36:40', NULL),
(24, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a4035d0e3.png', '28.5851562 77.3121176', '2021-12-09 06:36:51', NULL),
(25, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a40f6848e.png', '28.5851562 77.3121176', '2021-12-09 06:37:03', NULL),
(26, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a46d1f277.png', '28.5851562 77.3121176', '2021-12-09 06:38:37', NULL),
(27, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a48610ee4.png', '28.5851562 77.3121176', '2021-12-09 06:39:02', NULL),
(28, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a48f5d88d.png', '28.5851562 77.3121176', '2021-12-08 06:39:11', NULL),
(29, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a4b479ca4.png', '28.5851562 77.3121176', '2021-12-09 06:39:48', NULL),
(30, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a4df47e28.png', '28.5851562 77.3121176', '2021-12-09 06:40:31', NULL),
(31, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a4edf173f.png', '28.5851562 77.3121176', '2021-12-09 06:40:45', NULL),
(32, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a50593f15.png', '28.5851562 77.3121176', '2021-12-09 06:41:09', NULL),
(33, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a50b455f0.png', '28.5851562 77.3121176', '2021-12-08 06:41:15', NULL),
(34, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a52901c05.png', '28.5851562 77.3121176', '2021-12-09 06:41:45', NULL),
(35, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a539c2a7b.png', '28.5851562 77.3121176', '2021-12-09 06:42:01', NULL),
(36, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a542d3e75.png', '28.5851562 77.3121176', '2021-12-09 06:42:10', NULL),
(37, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a54b3b553.png', '28.5851562 77.3121176', '2021-12-09 06:42:19', NULL),
(38, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a54f9e968.png', '28.5851562 77.3121176', '2021-12-09 06:42:23', NULL),
(39, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a56e9b7d4.png', '28.5851562 77.3121176', '2021-12-07 06:42:54', NULL),
(40, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a5747641e.png', '28.5851562 77.3121176', '2021-12-09 06:43:00', NULL),
(41, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b1a59e65a66.png', '28.5851562 77.3121176', '2021-12-09 06:43:42', NULL),
(42, 'as', 'sahil@gmail.com', 'upload/61b1a5af8de26.png', '28.5851562 77.3121176', '2021-12-09 04:43:59', NULL),
(43, 'aman test', 'aman@gmail.com', 'upload/61b1a60381130.png', '28.5851562 77.3001176', '2021-12-09 04:02:22', NULL),
(44, 'Ankur', 'ankur@gamil.com', 'upload/61b1af8fcac09.png', '28.5851572 77.3121125', '2021-12-09 07:26:07', NULL),
(45, 'Ankur', 'ankur@gamil.com', 'upload/61b1b10b9e9c6.png', '28.5851572 77.3121125', '2021-12-09 07:32:27', NULL),
(46, 'amit', 'amint@gmail.com', 'upload/61b1b170bfb8d.png', '28.5851545 77.3121224', '2021-12-09 07:34:08', NULL),
(47, 'testing', 'a@gmail.com', 'upload/61b1b18a16f60.png', '28.5851545 77.3121224', '2021-12-08 07:34:34', NULL),
(48, 'Pallavi', 'pallavi@gmail.com', 'upload/61b1b5976ec38.png', '28.5851545 77.3121224', '2021-12-09 07:51:51', NULL),
(49, 'Arpit Test 1', 'pcs1081999@gmail1.com', 'upload/61b1c82578d3f.png', '28.5851623 77.3121142', '2021-12-08 09:11:01', NULL),
(50, 'Arpit Test 1', 'pcs1081999@gmail1.com', 'upload/61b1c8525bfa1.png', '28.5851623 77.3121142', '2021-12-09 09:11:46', NULL),
(51, 'Arpit Test 2', 'arpitsharma79854q@gmail.com', 'upload/61b1c8718fd62.png', '28.5851581 77.3121156', '2021-12-09 09:12:17', NULL),
(54, 'Arpit', 'arpitsharma79854@gmail.com', 'upload/61b2f0dda9f7c.png', '28.585158 77.3121138', '2021-12-10 06:17:01', NULL),
(63, 'Chetan', 'pcs1081999@gmail.com', 'upload/61b2fa4412e05.png', '28.585158 77.3121138', '2021-12-10 04:30:08', NULL),
(64, 'Aman', 'aman@gmail.com', 'upload/61b316d5dc6a7.png', '28.5851583 77.3121191', '2021-12-10 08:59:01', NULL),
(65, 'Chetan', 'pcs1081999@gmail.com', 'upload/61b43f3bd0b9e.png', '28.5851596 77.3121095', '2021-12-11 06:03:39', NULL),
(66, 'Chetan', 'arpitsharma79854@gmail.com', 'upload/61b445f8c0428.png', '28.5851596 77.3121095', '2021-12-11 06:32:24', NULL),
(67, 'Ankur', 'ankur@gamil.com', 'upload/61b45f7181f2c.png', '28.5851595 77.3121078', '2021-12-11 08:21:05', NULL),
(68, 'Arpit', 'arpitsharma79854@gmail.com', 'upload/61b5d663eb19f.png', '28.585148 77.3120994', '2021-12-12 11:00:51', NULL),
(69, 'Chetan', 'pcs1081999@gmail.com', 'upload/61b70371c9eb5.png', '28.5851488 77.3121043', '2021-12-13 08:25:21', NULL),
(70, 'Chetan', 'pcs1081999@gmail.com', 'upload/61b9ad2b1f731.png', '28.5851466 77.3121012', '2021-12-15 08:54:03', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
