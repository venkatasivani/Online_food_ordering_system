-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2022 at 01:02 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `order_manager`
--

CREATE TABLE `order_manager` (
  `Order_Id` int(100) NOT NULL,
  `Full_Name` text NOT NULL,
  `Phone_No` bigint(100) NOT NULL,
  `Address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Dumping data for table `order_manager`
--

INSERT INTO `order_manager` (`Order_Id`, `Full_Name`, `Phone_No`, `Address`) VALUES
(15, 'sivani', 9632588741, 'ongole'),
(16, 'sivani', 9632587412, 'ongole'),
(17, 'P V SIVANI', 9390788039, 'ongole'),
(18, 'amma', 9390759865, 'ongole'),
(19, 'P V SIVANI', 9390788039, 'ongole'),
(20, 'P V SIVANI', 9390788039, 'ongole'),
(21, 'P V SIVANI', 9390788039, 'ongole'),
(22, 'P V SIVANI', 9390788039, 'ongole'),
(23, 'P V SIVANI', 9390788039, 'ongole'),
(24, 'P V SIVANI', 9390788039, 'ongole'),
(25, 'P V SIVANI', 9390788039, 'ongole'),
(26, 'P sivani', 963258741, 'ongole'),
(27, 'P Sivani', 963258741, 'ongole'),
(28, 'P sivani', 963258741, 'ongole'),
(29, 'sivani', 963258741, 'ongole'),
(30, 'sivani', 9632587412, 'ongole'),
(31, 'PV Sivani', 9632587410, 'ongole'),
(32, 'SIVANI', 9632587412, 'bhimavaram'),
(33, 'Punugoti Venkata Sivani', 9390788039, 'ongole'),
(34, 'sivani', 9390759865, 'ongole'),
(35, 'Punugoti Venkata Sivani', 9390788039, 'ongole'),
(36, 'sivani', 9390759865, 'ongole'),
(37, 'Punugoti Venkata Sivani', 9390788039, 'ongole'),
(38, 'amma', 9390759865, 'ongole'),
(39, 'sivani', 9390759865, 'ongole'),
(40, 'Punugoti Venkata Sivani', 9390788039, 'ongole'),
(41, 'Punugoti Venkata Sivani', 9390788039, 'ongole'),
(42, 'Punugoti Venkata Sivani', 9390788039, 'ongole'),
(43, 'Punugoti Venkata Sivani', 9390759865, 'ongole');

-- --------------------------------------------------------

--
-- Table structure for table `order_orders`
--

CREATE TABLE `order_orders` (
  `Order_Id` int(100) NOT NULL,
  `Item_Name` varchar(100) NOT NULL,
  `COST` int(100) NOT NULL,
  `Quantity` int(100) NOT NULL,
  `DATE` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Dumping data for table `order_orders`
--

INSERT INTO `order_orders` (`Order_Id`, `Item_Name`, `COST`, `Quantity`, `DATE`) VALUES
(14, 'ROTI', 50, 1, ''),
(15, 'PURI', 45, 1, ''),
(16, 'WHOLE PACK', 90, 1, ''),
(17, 'BIRYANI', 180, 1, ''),
(17, 'ROTI', 50, 1, ''),
(18, 'PURI', 45, 1, ''),
(19, 'SOUP', 60, 1, ''),
(19, 'DOSA', 30, 1, ''),
(20, 'WHOLE PACK', 90, 1, ''),
(20, 'VEG ROLL', 50, 1, ''),
(21, 'POGANALU', 35, 1, ''),
(21, 'DOSA', 30, 1, ''),
(22, 'DOSA', 30, 1, ''),
(23, 'VEG ROLL', 50, 1, ''),
(23, 'ROTI', 50, 1, ''),
(24, 'SOUP', 60, 1, ''),
(25, 'POGANALU', 35, 1, ''),
(26, 'PURI', 40, 2, ''),
(26, 'VEG ROLL', 40, 1, ''),
(27, 'PURI', 40, 1, ''),
(28, 'VEG ROLL', 40, 1, ''),
(29, 'MEAL', 90, 1, ''),
(30, 'POGANALU', 35, 2, ''),
(30, 'PURI', 40, 3, ''),
(31, 'POGANALU', 35, 2, ''),
(32, 'PURI', 40, 1, ''),
(32, 'VEG ROLL', 40, 1, ''),
(33, 'POGANALU', 35, 1, ''),
(34, 'POGANALU', 35, 1, ''),
(34, 'VEG ROLL', 40, 1, ''),
(35, 'POGANALU', 35, 1, ''),
(36, 'POGANALU', 35, 1, ''),
(37, 'POGANALU', 35, 1, ''),
(38, 'POGANALU', 35, 1, ''),
(39, 'POGANALU', 35, 1, ''),
(40, 'POGANALU', 35, 1, ''),
(41, 'POGANALU', 35, 1, ''),
(42, 'VEG ROLL', 40, 1, ''),
(43, 'POGANALU', 35, 1, ''),
(43, 'MEAL', 90, 1, ''),
(43, 'ROTI', 50, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `pname` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `pimage` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `pname`, `pimage`, `price`) VALUES
(1, 'SPECIAL', 'img22.jpg', 35),
(2, 'PURI', 'img24.jpg', 40),
(3, 'POGANALU', 'img23.jpg', 35),
(4, 'VEG ROLL', 'img30.jpg', 40),
(5, 'SOUP', 'img32.jpg', 45),
(6, 'IDLI', 'img35.jpg', 32),
(7, 'MEAL', 'img27.jpg', 90),
(8, 'ROTI', 'img21.jpg', 50),
(9, 'DOSA', 'img23.jpg', 35);

-- --------------------------------------------------------

--
-- Table structure for table `registeration`
--

CREATE TABLE `registeration` (
  `id` int(100) NOT NULL,
  `fullname` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `gender` enum('f','m','o') CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Dumping data for table `registeration`
--

INSERT INTO `registeration` (`id`, `fullname`, `gender`, `email`, `password`) VALUES
(1, 'P V SIVANI', 'f', 'venkatasivani679@gmail.com', 'sivani'),
(2, 'amma', 'f', '19b01a05d7@svecw.edu.in', 'sai'),
(3, 'kavya', 'f', '19b01a05f5@svecw.edu.in', 'kavya'),
(10, 'sireesha', 'f', '19b01a05d5@svecw.edu.in', 'sai'),
(14, 'lohitha', 'f', '19b01a05d6@svecw.edu.in', 'lohitha'),
(15, 'sri', 'f', 'sri@gmail.com', '2345'),
(16, 'sindhu', 'f', 'sindhu@sindhu', 'sindhu'),
(17, 'sri', 'f', 'sri@sri', 'sri'),
(18, 'sai', 'm', 'p.sairam679@gmail.com', 'sairam'),
(19, 'ss', 'f', 'ss', 'aa');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `Name` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Name`, `password`) VALUES
('supplier', '12345'),
('Supplier', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `supplier_login`
--

CREATE TABLE `supplier_login` (
  `Email` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Dumping data for table `supplier_login`
--

INSERT INTO `supplier_login` (`Email`, `password`) VALUES
('\0\0\0s\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?\0\0\0?', '\0\0\01\0\0\0?\0\0\0?\0\0\0?\0\0\0?'),
('supplier', '12345'),
('Supplier@Gmail.Com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order_manager`
--
ALTER TABLE `order_manager`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registeration`
--
ALTER TABLE `registeration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order_manager`
--
ALTER TABLE `order_manager`
  MODIFY `Order_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registeration`
--
ALTER TABLE `registeration`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
