-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2024 at 06:17 PM
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
-- Database: `recommend`
--

-- --------------------------------------------------------

--
-- Table structure for table `clothes`
--

CREATE TABLE `clothes` (
  `Id` int(200) NOT NULL,
  `Weather` text NOT NULL,
  `Occasion` text NOT NULL,
  `Gender` text NOT NULL,
  `Name` text NOT NULL,
  `Photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `clothes`
--

INSERT INTO `clothes` (`Id`, `Weather`, `Occasion`, `Gender`, `Name`, `Photo`) VALUES
(1, 'Sunny', 'Casual', 'Female', 'Sandal', 'SCF1.jpg'),
(2, 'Sunny', 'Casual', 'Female', 'Skirt', 'SCF2.jpg'),
(3, 'Sunny', 'Casual', 'Female', 'Croptops', 'SCF3.jpg'),
(4, 'Sunny', 'Casual', 'Male', 'T-Shirt', 'SCM1.jpg'),
(5, 'Sunny', 'Casual', 'Male', 'Halfpant', 'SCM2.jpg'),
(6, 'Sunny', 'Casual', 'Male', 'Goggles', 'SCM3.jpg'),
(7, 'Sunny', 'Sports', 'Female', 'Slacked Shorts', 'SSF1.jpg'),
(8, 'Sunny', 'Sports', 'Female', 'Sports Female innerwear\r\n', 'SSF2.jpg'),
(9, 'Sunny', 'Sports', 'Female', 'Spandex Suit', 'SSF3.jpg'),
(10, 'Sunny', 'Sports', 'Male', 'Jersey Shorts', 'SSM1.jpg'),
(11, 'Sunny', 'Sports', 'Male', 'Jersey T-Shirts', 'SSM2.jpg'),
(12, 'Sunny', 'Sports', 'Male', 'Track Jacket', 'SSM3.jpg'),
(13, 'Sunny', 'Formal', 'Female', 'Long Red Dress', 'SFF1.jpg'),
(14, 'Sunny', 'Formal', 'Female', 'Knee Length Sparkly Dress', 'SFF2.jpg'),
(15, 'Sunny', 'Formal', 'Female', 'Cream Color Saree', 'SFF3.jpg'),
(16, 'Sunny', 'Formal', 'Male', 'Formal Shirt', 'SFM1.jpg'),
(17, 'Sunny', 'Formal', 'Male', 'Formal Coats', 'SFM2.jpg'),
(18, 'Sunny', 'Formal', 'Male', 'Dhaka Topi', 'SFM3.jpg'),
(19, 'Cold', 'Casual', 'Female', 'Casual Women\'s Clothes', 'CCF1.jpg'),
(20, 'Cold', 'Casual', 'Female', 'Casual Women\'s Sweater', 'CCF2.jpg'),
(21, 'Cold', 'Casual', 'Female', 'Women\'s Winter Cap', 'CCF3.jpg'),
(22, 'Cold', 'Casual', 'Male', 'Hoodie', 'CCM1.jpg'),
(23, 'Cold', 'Casual', 'Male', 'Cap and Neck Warmer', 'CCM2.jpg'),
(24, 'Cold', 'Casual', 'Male', 'Jacket', 'CCM3.jpg'),
(25, 'Cold', 'Sports', 'Female', 'Women\'s Jacket', 'CSF1.jpg'),
(26, 'Cold', 'Sports', 'Female', 'Snow Boots', 'CSF2.jpg'),
(27, 'Cold', 'Sports', 'Female', 'Women\'s Gloves', 'CSF3.jpg'),
(28, 'Cold', 'Sports', 'Male', 'Men\'s Inner Trouser', 'CSM1.jpg'),
(29, 'Cold', 'Sports', 'Male', 'Beanie', 'CSM2.jpg'),
(30, 'Cold', 'Sports', 'Male', 'Men\'s Winter Jacket', 'CSM3.jpg'),
(31, 'Cold', 'Formal', 'Female', 'Woolen Dress', 'CFF1.jpg'),
(32, 'Cold', 'Formal', 'Female', 'Women\'s Blazer for Winter', 'CFF2.jpg'),
(33, 'Cold', 'Formal', 'Female', 'Formal Sweater for Women', 'CFF3.jpg'),
(34, 'Cold', 'Formal', 'Male', 'Formal Sweater', 'CFM1.jpg'),
(35, 'Cold', 'Formal', 'Male', 'Long Coat', 'CFM2.jpg'),
(36, 'Cold', 'Formal', 'Male', 'Leather Gloves', 'CFM3.jpg'),
(37, 'Rainy', 'Casual', 'Female', 'Waterproof Coat', 'RCF1.jpg'),
(38, 'Rainy', 'Casual', 'Female', 'Waterproof Jacket', 'RCF2.jpg'),
(39, 'Rainy', 'Casual', 'Female', 'Rain Boots', 'RCF3.jpg'),
(40, 'Rainy', 'Casual', 'Male', 'WindSheater', 'RCM1.jpg'),
(41, 'Rainy', 'Casual', 'Male', 'Waterproof 3-piece Suit\r\n', 'RCM2.jpg'),
(42, 'Rainy', 'Casual', 'Male', 'Umbrella', 'RCM3.jpg'),
(43, 'Rainy', 'Sports', 'Female', 'Women Ski-Jacket', 'RSF1.jpg'),
(44, 'Rainy', 'Sports', 'Female', 'Wind-proof Pants', 'RSF2.jpg'),
(45, 'Rainy', 'Sports', 'Female', 'Snow-Boots', 'RSF3.jpg'),
(46, 'Rainy', 'Sports', 'Male', 'Windproof Jacket', 'RSM1.jpg'),
(47, 'Rainy', 'Sports', 'Male', 'Male Ski Jacket', 'RSM2.jpg'),
(48, 'Rainy', 'Sports', 'Male', 'Waterproof Cap\r\n', 'RSM3.jpg'),
(49, 'Rainy', 'Formal', 'Female', 'Women\'s Log Coat', 'RFF1.jpg'),
(50, 'Rainy', 'Formal', 'Female', 'Waterproof Jacket', 'RFF2.jpg'),
(51, 'Rainy', 'Formal', 'Female', 'Gumboots', 'RFF3.jpg'),
(52, 'Rainy', 'Formal', 'Male', 'Pure Leather Shoes', 'RFM1.jpg'),
(53, 'Rainy', 'Formal', 'Male', 'Single Rain-Coat', 'RFM2.jpg'),
(54, 'Rainy', 'Formal', 'Male', 'Waterproof Coat\r\n', 'RFM3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clothes`
--
ALTER TABLE `clothes`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
