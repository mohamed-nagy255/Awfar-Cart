-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2022 at 12:55 PM
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
-- Database: `qr_sale`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `qr` longblob NOT NULL,
  `id_qr` varchar(255) NOT NULL,
  `qr_gn` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `sale` varchar(255) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `username`, `qr`, `id_qr`, `qr_gn`, `code`, `sale`, `count`) VALUES
(61, 'كارت العشرين', 0x71722f363331333163333431656232352e706e67, 'https://awfarcart.com/data.php?id=61&qr_gn=61', 61, '41798', '20%', 0),
(62, 'كرت الثلاثين', 0x71722f363331343737643734393531312e706e67, 'https://awfarcart.com/data.php?id=62&qr_gn=62', 62, '87660', '30%', 6);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `shop_name` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `shops` varchar(255) NOT NULL,
  `code` int(11) NOT NULL,
  `sale_id` int(11) NOT NULL,
  `starting_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `employee_id` int(11) NOT NULL,
  `pricing_id` int(11) NOT NULL,
  `statue` tinyint(4) NOT NULL,
  `count` int(11) NOT NULL,
  `commoiswion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `username`, `shop_name`, `phone`, `address`, `shops`, `code`, `sale_id`, `starting_date`, `expiry_date`, `employee_id`, `pricing_id`, `statue`, `count`, `commoiswion`) VALUES
(31, 'moh', 'روما', '43254235', 'المنصورة', 'ملابس', 99792, 61, '2022-09-07', '2022-09-30', 19, 5, 0, 0, 200),
(32, 'محمود', 'روما', '43254235', 'المنصورة', 'ملابس', 75513, 61, '2022-09-07', '2022-09-30', 20, 6, 0, 0, 100),
(33, 'محمود', 'hfghfg', '43254235', 'المنصورة', 'ملابس', 13825, 61, '2022-09-07', '2022-09-30', 21, 5, 0, 0, 200);

-- --------------------------------------------------------

--
-- Table structure for table `client_used`
--

CREATE TABLE `client_used` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `client_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `Total` int(11) NOT NULL,
  `priv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `username`, `password`, `phone`, `Total`, `priv`) VALUES
(21, 'محمود', 'e10adc3949ba59abbe56e057f20f883e', '010121214511', 200, 200);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE `owner` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `priv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`id`, `username`, `password`, `priv`) VALUES
(5, 'Ahmed', 'e10adc3949ba59abbe56e057f20f883e', 100),
(7, 'Eslam', '25f9e794323b453885f5181f1b624d0b', 100);

-- --------------------------------------------------------

--
-- Table structure for table `pricing`
--

CREATE TABLE `pricing` (
  `id` int(11) NOT NULL,
  `prname` varchar(255) NOT NULL,
  `descr` text NOT NULL,
  `price` int(11) NOT NULL,
  `ratio` int(11) NOT NULL,
  `commoiswion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pricing`
--

INSERT INTO `pricing` (`id`, `prname`, `descr`, `price`, `ratio`, `commoiswion`) VALUES
(5, 'ddd', 'asdsasdasdasd', 1000, 20, 200),
(6, 'www', 'asdsasdasdasd', 1000, 10, 100),
(7, 'klg', 'asdsasdasdasd', 2000, 10, 200),
(8, 'cc', 'asdsasdasdasd', 1000, 10, 100),
(9, 'ddd', 'asdsasdasdasd', 1000, 12, 120);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`),
  ADD KEY `employee_id` (`employee_id`),
  ADD KEY `pricing_id` (`pricing_id`),
  ADD KEY `sale_id` (`sale_id`);

--
-- Indexes for table `client_used`
--
ALTER TABLE `client_used`
  ADD PRIMARY KEY (`id`),
  ADD KEY `client_id` (`client_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owner`
--
ALTER TABLE `owner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pricing`
--
ALTER TABLE `pricing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `client_used`
--
ALTER TABLE `client_used`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `owner`
--
ALTER TABLE `owner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pricing`
--
ALTER TABLE `pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `client_ibfk_1` FOREIGN KEY (`sale_id`) REFERENCES `cart` (`id`);

--
-- Constraints for table `client_used`
--
ALTER TABLE `client_used`
  ADD CONSTRAINT `client_used_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
