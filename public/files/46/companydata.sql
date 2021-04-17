-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2021 at 02:53 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `companydata`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcompany`
--

CREATE TABLE `addcompany` (
  `id` int(100) NOT NULL,
  `uid` int(20) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `customFile` varchar(255) NOT NULL,
  `company_email` varchar(100) NOT NULL,
  `company_number` varchar(10) NOT NULL,
  `country` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `company_address` varchar(200) NOT NULL,
  `company_postcode` varchar(30) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcompany`
--

INSERT INTO `addcompany` (`id`, `uid`, `company_name`, `customFile`, `company_email`, `company_number`, `country`, `state`, `city`, `company_address`, `company_postcode`, `created_at`, `updated_at`) VALUES
(1, 0, 'Toxcore', '1617870593.png', 'abc@gmail.com', '9429998655', 'spain', 'usa', 'usa', 'Kalawad Road', '360005', '2021-04-08 12:25:43', '2021-04-08 02:59:53'),
(2, 0, 'Toxcore', '1617870614.png', 'abc@gmail.com', '9429998655', 'spain', 'usa', 'usa', 'Kalawad Road', '360005', '2021-04-08 12:25:43', '2021-04-08 03:00:14'),
(3, 0, 'Toxcore', '1617870698.png', 'abc@gmail.com', '9429998655', 'spain', 'usa', 'usa', 'Kalawad Road', '360005', '2021-04-08 12:25:43', '2021-04-08 03:01:38'),
(4, 0, 'Toxcore', '1617870706.png', 'abc@gmail.com', '9429998655', 'spain', 'usa', 'usa', 'Kalawad Road', '360005', '2021-04-08 12:25:43', '2021-04-08 03:01:46'),
(5, 0, 'Toxcore', '1617870887.png', 'abc@gmail.com', '9429998655', 'spain', 'usa', 'usa', 'Kalawad Road', '360005', '2021-04-08 12:25:43', '2021-04-08 03:04:47'),
(6, 0, 'Toxcore', '1617874607.jpg', 'jayna@gmail.com', '9429906598', 'spain', 'usa', 'usa', 'Kalwad Road Rajkot', '360005', '2021-04-08 12:25:43', '2021-04-08 04:06:47'),
(7, 0, 'Toxcore', '1617874692.jpg', 'jayna@gmail.com', '9429906598', 'spain', 'usa', 'usa', 'Kalwad Road Rajkot', '360005', '2021-04-08 12:25:43', '2021-04-08 04:08:12'),
(8, 0, 'laravel', '1617874815.jpg', 'jaynamanjariya@gmail.com', '9429906598', 'spain', 'usa', 'usa', 'Rani tower', '360004', '2021-04-08 12:25:43', '2021-04-08 04:10:15'),
(9, 0, 'Toxcore', '1617875519.jpg', 'Snehaparmar7255@gmail.com', '8140399251', 'India', 'Gujrat', 'Rajkot', 'Ambaji krupa , maheswari so 2 A kothariya road rajkot', '360002', '2021-04-08 12:25:43', '2021-04-08 04:21:59'),
(10, 4, 'Toxcore', '1617884760.jpg', 'manali2gmail.com', '8140399251', 'India', 'Gujrat', 'Rajkot', 'Ambaji krupa , maheswari so 2 A kothariya road rajkot', '360002', '2021-04-08 06:56:00', '2021-04-08 06:56:00'),
(11, 4, 'laravel', '1617884935.jpg', 'jaynamanjariya@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Rani tower', '360004', '2021-04-08 06:58:55', '2021-04-08 06:58:55'),
(12, 4, 'Php', '1617885053.jpg', 'abc@gmail.com', '9429998655', 'India', 'Gujrat', 'Rajkot', 'Kalawad Road', '360005', '2021-04-08 07:00:53', '2021-04-08 07:00:53'),
(13, 6, 'Toxcore', '1617886080.jpg', 'abc@gmail.com', '9429998655', 'India', 'Gujrat', 'Rajkot', 'Kalawad Road', '360005', '2021-04-08 07:18:00', '2021-04-08 07:18:00');

-- --------------------------------------------------------

--
-- Table structure for table `addcustomer`
--

CREATE TABLE `addcustomer` (
  `id` int(11) NOT NULL,
  `cid` int(100) NOT NULL,
  `uid` int(11) NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `customer_email` varchar(50) NOT NULL,
  `customer_number` varchar(10) NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `customer_address` varchar(80) NOT NULL,
  `customer_postcode` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `addcustomer`
--

INSERT INTO `addcustomer` (`id`, `cid`, `uid`, `customer_name`, `customer_email`, `customer_number`, `country`, `state`, `city`, `customer_address`, `customer_postcode`, `created_at`, `updated_at`) VALUES
(1, 1, 0, 'jayna manjariya', 'jaynamanjariya@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Rani tower', '360004', '2021-04-08 05:11:45', '2021-04-08 05:11:45'),
(2, 1, 2, 'jayna manjariya', 'jaynamanjariya@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Rani tower', '360004', '2021-04-08 05:51:56', '2021-04-08 05:51:56'),
(3, 1, 2, 'jayna manjariya', 'abc@gmail.com', '9429998655', 'India', 'Gujrat', 'Rajkot', 'Kalawad Road', '360005', '2021-04-08 05:54:38', '2021-04-08 05:54:38'),
(4, 1, 2, 'jayna manjariya', 'abc@gmail.com', '9429998655', 'India', 'Gujrat', 'Rajkot', 'Kalawad Road', '360005', '2021-04-08 05:55:33', '2021-04-08 05:55:33'),
(5, 3, 2, 'Hom', 'hom@gmail.ocm', '8140399251', 'India', 'Gujrat', 'Rajkot', 'Ambaji krupa , maheswari so 2 A kothariya road rajkot', '360002', '2021-04-08 06:12:48', '2021-04-08 06:12:48'),
(6, 1, 1, 'Manali', 'jayna@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Kalwad Road Rajkot', '360005', '2021-04-08 06:20:23', '2021-04-08 06:20:23'),
(7, 1, 1, 'Manali', 'jayna@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Kalwad Road Rajkot', '360005', '2021-04-08 06:23:03', '2021-04-08 06:23:03'),
(8, 1, 1, 'Manali', 'jayna@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Kalwad Road Rajkot', '360005', '2021-04-08 06:23:12', '2021-04-08 06:23:12'),
(9, 1, 1, 'Manali', 'jayna@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Kalwad Road Rajkot', '360005', '2021-04-08 06:24:27', '2021-04-08 06:24:27'),
(10, 1, 1, 'Manali', 'jayna@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Kalwad Road Rajkot', '360005', '2021-04-08 06:25:06', '2021-04-08 06:25:06'),
(11, 1, 1, 'Manali', 'jayna@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Kalwad Road Rajkot', '360005', '2021-04-08 06:26:35', '2021-04-08 06:26:35'),
(12, 1, 1, 'Manali', 'jayna@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Kalwad Road Rajkot', '360005', '2021-04-08 06:26:47', '2021-04-08 06:26:47'),
(13, 1, 1, 'Manali', 'jayna@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Kalwad Road Rajkot', '360005', '2021-04-08 06:27:39', '2021-04-08 06:27:39'),
(14, 1, 1, 'Manali', 'jayna@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Kalwad Road Rajkot', '360005', '2021-04-08 06:28:00', '2021-04-08 06:28:00'),
(15, 1, 1, 'Manali', 'jayna@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Kalwad Road Rajkot', '360005', '2021-04-08 06:28:49', '2021-04-08 06:28:49'),
(16, 1, 1, 'Manali', 'jayna@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Kalwad Road Rajkot', '360005', '2021-04-08 06:29:56', '2021-04-08 06:29:56'),
(17, 1, 1, 'Manali', 'jayna@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Kalwad Road Rajkot', '360005', '2021-04-08 06:30:21', '2021-04-08 06:30:21'),
(18, 1, 1, 'Manali', 'jayna@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Kalwad Road Rajkot', '360005', '2021-04-08 06:30:29', '2021-04-08 06:30:29'),
(19, 1, 1, 'Manali', 'jayna@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Kalwad Road Rajkot', '360005', '2021-04-08 06:30:40', '2021-04-08 06:30:40'),
(20, 1, 1, 'Manali', 'jayna@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Kalwad Road Rajkot', '360005', '2021-04-08 06:30:51', '2021-04-08 06:30:51'),
(21, 1, 1, 'Manali', 'jayna@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Kalwad Road Rajkot', '360005', '2021-04-08 06:32:30', '2021-04-08 06:32:30'),
(22, 1, 1, 'Manali', 'jayna@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Kalwad Road Rajkot', '360005', '2021-04-08 06:32:59', '2021-04-08 06:32:59'),
(23, 1, 1, 'Manali', 'jayna@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Kalwad Road Rajkot', '360005', '2021-04-08 06:33:56', '2021-04-08 06:33:56'),
(24, 8, 3, 'Darshan', 'darshan@gmail.com', '9429906598', 'India', 'Gujrat', 'Rajkot', 'Kalawad Road ,Rajkot', '360001', '2021-04-08 06:43:19', '2021-04-08 06:43:19'),
(25, 1, 5, 'Hardeep', 'abc@gmail.com', '9429998655', 'India', 'Gujrat', 'Rajkot', 'Kalawad Road', '360005', '2021-04-08 07:04:49', '2021-04-08 07:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `role` tinyint(1) NOT NULL COMMENT '0 = admin\r\n1 = company\r\n2 = customer',
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `role`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 0, 'Jayna', '$2y$10$bnksCwEUQdD.wUSaWWklUOLzqTp.QD2ZCVE7s0qhLscmXAiq./tO2', '2021-04-08 05:55:33', '2021-04-08 05:55:33'),
(2, 2, 'Hom', '$2y$10$agPTedW4/0k2getaudh9SOpwmKpG3XbC54.zGRezirR3a6rsSIBCW', '2021-04-08 06:12:49', '2021-04-08 06:12:49'),
(3, 2, 'Darshan', '$2y$10$fMD0tICRaA/okAq.0ISEi.wSypg/pHHOTLwnkbb2a9B2jGPHE2CEa', '2021-04-08 06:43:19', '2021-04-08 06:43:19'),
(4, 2, 'Jayna', '$2y$10$8MubP9VsoY/zVOD9ToYDaOYlbzE4ZpD3Y60u83ip1xEXol/6lz1RO', '2021-04-08 07:00:54', '2021-04-08 07:00:54'),
(5, 2, 'Hardeep', '$2y$10$AKyWeIJkEZc5.n0B/1BuyOEhlrrkZDBOL7QJ/SiEGqdro0XIbfiCS', '2021-04-08 07:04:49', '2021-04-08 07:04:49'),
(6, 1, 'Jayna', '$2y$10$VmSZUys4.GEFRKDDUSO8t.ZNl178WYyn9WrWL6NrveQF0T4b9nSHW', '2021-04-08 07:18:00', '2021-04-08 07:18:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcompany`
--
ALTER TABLE `addcompany`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addcustomer`
--
ALTER TABLE `addcustomer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcompany`
--
ALTER TABLE `addcompany`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `addcustomer`
--
ALTER TABLE `addcustomer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
