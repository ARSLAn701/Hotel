-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2024 at 11:18 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'arslan', '7861');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `opinion` text NOT NULL,
  `submission_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mealbook`
--

CREATE TABLE `mealbook` (
  `ID` int(11) NOT NULL,
  `FName` varchar(255) NOT NULL,
  `LName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `Meal` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `Bulk` varchar(255) NOT NULL,
  `stat` varchar(50) NOT NULL DEFAULT 'Not Confirmed',
  `Addres` varchar(255) NOT NULL,
  `OrderTime` time NOT NULL,
  `OrderDate` date NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mealbook`
--

INSERT INTO `mealbook` (`ID`, `FName`, `LName`, `Email`, `mobile`, `Meal`, `Bulk`, `stat`, `Addres`, `OrderTime`, `OrderDate`, `total`, `created_at`) VALUES
(1, 'arslan', 'deshmukh', 'deshmukhni@786gmail.com', '8149425531', 'biryani', '3kg of golden tikka biryani', 'Confirmed', 'trimbakeshwar', '12:30:00', '2024-12-12', 140.00, '2024-06-11 08:58:04'),
(2, 'arslan', 'deshmukh', 'deshmukhni@786gmail.com', '8149425531', 'lolipop', '3kg of golden tikka biryani', 'Confirmed', 'trimbakeshwar', '12:30:00', '2024-12-12', 200.00, '2024-06-11 08:58:04'),
(3, 'arslan', 'deshmukh', 'deshmukhni@786gmail.com', '8149425531', 'samosa', '3kg of golden tikka biryani', 'Confirmed', 'trimbakeshwar', '12:30:00', '2024-12-12', 120.00, '2024-06-11 08:58:04'),
(4, 'arslan', 'deshmukh', 'deshmukhni@786gmail.com', '8149425531', 'Total Amount is:\r\n                      ', '3kg of golden tikka biryani', 'Confirmed', 'trimbakeshwar', '12:30:00', '2024-12-12', 460.00, '2024-06-11 08:58:04'),
(5, 'kk', 'rahi', 'rahi@123gmail.com', '7865425310', 'Total Amount is:\r\n                      ', '4kg tikka biryani', 'Not Confirmed', 'nagji chowk', '00:30:00', '2024-02-22', 0.00, '2024-06-13 06:31:26'),
(6, 'babu ', 'mosai', 'as@1223', '8149425531', 'samosa', '2kg golden rice biryani', 'Confirmed', 'shramiknagar', '12:23:00', '2025-05-12', 120.00, '2024-06-13 06:38:07'),
(7, 'babu ', 'mosai', 'as@1223', '8149425531', 'Total / Only Bulk Order:\r\n                      ', '2kg golden rice biryani', 'Confirmed', 'shramiknagar', '12:23:00', '2025-05-12', 120.00, '2024-06-13 06:38:07'),
(8, 'jehan', 'mosai', 'deshmukhjehan@gmail.com', '8830096476', 'biryani', '3kg tikka biryani', 'Not Confirmed', 'pawan nagar', '12:23:00', '2024-12-12', 840.00, '2024-06-14 04:41:02'),
(9, 'jehan', 'mosai', 'deshmukhjehan@gmail.com', '8830096476', 'lolipop', '3kg tikka biryani', 'Not Confirmed', 'pawan nagar', '12:23:00', '2024-12-12', 400.00, '2024-06-14 04:41:02'),
(10, 'jehan', 'mosai', 'deshmukhjehan@gmail.com', '8830096476', 'samosa', '3kg tikka biryani', 'Confirmed', 'pawan nagar', '12:23:00', '2024-12-12', 100.00, '2024-06-14 04:41:02'),
(11, 'jehan', 'mosai', 'deshmukhjehan@gmail.com', '8830096476', 'Total / Only Bulk Order:\r\n                      ', '3kg tikka biryani', 'Confirmed', 'pawan nagar', '12:23:00', '2024-12-12', 1340.00, '2024-06-14 04:41:02');

-- --------------------------------------------------------

--
-- Table structure for table `opinions`
--

CREATE TABLE `opinions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `opinion` text NOT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `opinions`
--

INSERT INTO `opinions` (`id`, `name`, `phone`, `email`, `opinion`, `submitted_at`) VALUES
(1, 'jayash', '9112425531', 'deshmukhA@123gmail.com', 'very nice webiste ', '2024-06-12 06:47:26'),
(2, 'jayash', 'deshmukh', 'deshmukhni@786gmail.com', 'very nice webiste ', '2024-06-12 06:47:52'),
(3, 'jayash', 'deshmukh', 'deshmukhni@786gmail.com', 'very nice webiste ', '2024-06-12 06:48:14'),
(4, 'jayash', 'deshmukh', 'deshmukhni@786gmail.com', 'very nice webiste ', '2024-06-12 06:48:31'),
(5, 'bella ', 'wayne', 'wanyn@123gmail.com', 'execellent design keep it up', '2024-06-12 06:50:11'),
(6, 'bella ', 'wayne', 'wanyn@123gmail.com', 'execellent design keep it up', '2024-06-12 06:50:58'),
(7, 'arslan', '8149425581', 'deshmukhjehan@gmail.com', 'execellent design keep it up', '2024-06-12 06:51:11'),
(8, 'jehan', '914255653', 'sdkfsfdj@1312gmail.com', 'nice keep shine man', '2024-06-12 06:54:16'),
(9, 'jehan', '914255653', 'sdkfsfdj@1312gmail.com', 'nice keep shine man', '2024-06-12 06:54:34');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `title` varchar(10) DEFAULT NULL,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `meal` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `Address` text DEFAULT NULL,
  `cin` date DEFAULT NULL,
  `OrderTime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mealbook`
--
ALTER TABLE `mealbook`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `opinions`
--
ALTER TABLE `opinions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mealbook`
--
ALTER TABLE `mealbook`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `opinions`
--
ALTER TABLE `opinions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
