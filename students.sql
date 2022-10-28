-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 28, 2022 at 07:23 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel9-crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `mobile`, `address`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Polash Mia', 'polash43@gmail.com', '01737115041', 'Dhaka', 'img/student-images/ssmsb7_1663346346.jpg', '2022-09-16 05:38:10', '2022-09-16 10:39:06'),
(5, 'Asad', 'asad@gamil.com', '01737115041', 'Dhaka', 'img/student-images/ssmsb7_1663346497.jpg', '2022-09-16 10:41:37', '2022-09-16 10:41:37'),
(6, 'Polash Mia', 'shamimpolash43@gmail.com', '01737115041', 'Dhaka', 'img/student-images/ssmsb7_1663360797.jpg', '2022-09-16 14:39:58', '2022-09-16 14:39:58'),
(7, 'Polash Mia', 'shamimpolash43@gmail.com', '01737115041', 'Dhaka', 'img/student-images/ssmsb7_1663361830.jpg', '2022-09-16 14:57:10', '2022-09-16 14:57:10'),
(8, 'Prince', 'demo@somahat.com', '01737115041', 'Dhaka', 'img/student-images/ssmsb7_1663361917.jpg', '2022-09-16 14:58:37', '2022-09-16 14:58:37'),
(9, 'Polash Mia', 'prince@gamil.com', '01737115041', 'Dhaka', 'img/student-images/ssmsb7_1663362215.jpg', '2022-09-16 15:03:35', '2022-09-16 15:03:35'),
(11, 'Polash Mia', 'shamimpolash43@gmail.com', '01737115041', 'Dhaka', 'img/student-images/ssmsb7_1663363150.jpg', '2022-09-16 15:19:10', '2022-09-16 15:19:10'),
(12, 'Polash Mia', 'demo@somahat.com', '01737115041', 'Dhaka', 'img/student-images/ssmsb7_1663363510.jpg', '2022-09-16 15:25:10', '2022-09-16 15:25:10'),
(13, 'Asad', 'shamimpolash43@gmail.com', '01737115041', 'Dhaka', 'img/student-images/ssmsb7_1663363542.jpg', '2022-09-16 15:25:42', '2022-09-16 15:25:42'),
(15, 'Polash Mia', 'shamimpolash43@gmail.com', '01737115041', 'Dhaka', 'img/student-images/ssmsb7_1666977358.jpg', '2022-09-16 15:26:58', '2022-10-28 11:15:58'),
(16, 'Rifat', 'rifat@gmail.com', '01737115041', 'Rangpur', 'img/student-images/ssmsb7_1666977471.jpg', '2022-10-28 11:17:51', '2022-10-28 11:17:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
