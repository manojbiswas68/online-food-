-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2018 at 05:48 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zomato`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `zip` varchar(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `add_` varchar(100) NOT NULL,
  `email_id` varchar(40) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `add_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`zip`, `name`, `add_`, `email_id`, `mobile`, `add_id`) VALUES
('831014', 'manish', 'A block, Room - 1002, Hostel I,', 'manishkartiks@gmail.com', '8092236477', 3),
('673601', 'shamanth', 'A block, Room - 1002, Hostel I,', 'susi@gmail.com', '9430191979', 4),
('831014', 'manoj', 'A block, Room - 1002, Hostel I,', 'manishkartiks@gmail.com', '8092236477', 5),
('831014', 'gannu', 'A block, Room - 1002, Hostel I,', 'gandu@gmail.com', '8092236477', 6),
('831014', 'manoj', 'A block, Room - 1002, Hostel I,', 'manishkartiks@gmail.com', '8092236477', 7);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `uid` varchar(40) NOT NULL,
  `fid` int(40) NOT NULL,
  `quantity` int(40) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`uid`, `fid`, `quantity`, `id`) VALUES
('manishkartiks@gmail.com', 37, 0, 25),
('manishkartiks@gmail.com', 38, 1, 26),
('susi@gmail.com', 39, 1, 27),
('susi@gmail.com', 37, 1, 28),
('manishkartiks@gmail.com', 40, 0, 29),
('manishkartiks@gmail.com', 41, 2, 30),
('gandu@gmail.com', 40, 1, 31),
('gandu@gmail.com', 41, 1, 32);

-- --------------------------------------------------------

--
-- Table structure for table `confirmed_order`
--

CREATE TABLE `confirmed_order` (
  `con_id` int(11) NOT NULL,
  `fid` varchar(40) NOT NULL,
  `quantity` varchar(40) NOT NULL,
  `uid` varchar(40) NOT NULL,
  `amount` varchar(40) NOT NULL,
  `add_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmed_order`
--

INSERT INTO `confirmed_order` (`con_id`, `fid`, `quantity`, `uid`, `amount`, `add_id`) VALUES
(70, '37', '1', 'manishkartiks@gmail.com', '200', 3),
(71, '38', '1', 'manishkartiks@gmail.com', '100', 3),
(72, '39', '1', 'susi@gmail.com', '300', 4),
(73, '37', '1', 'susi@gmail.com', '200', 4),
(74, '38', '1', 'manishkartiks@gmail.com', '100', 5),
(75, '40', '1', 'manishkartiks@gmail.com', '300', 5),
(76, '41', '1', 'manishkartiks@gmail.com', '200', 5),
(77, '40', '1', 'gandu@gmail.com', '300', 6),
(78, '41', '1', 'gandu@gmail.com', '200', 6),
(79, '38', '1', 'manishkartiks@gmail.com', '100', 7),
(80, '41', '2', 'manishkartiks@gmail.com', '400', 7);

-- --------------------------------------------------------

--
-- Table structure for table `cust_reg`
--

CREATE TABLE `cust_reg` (
  `cust_id` int(11) NOT NULL,
  `fname` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `mobile` varchar(40) DEFAULT NULL,
  `city` varchar(40) DEFAULT NULL,
  `cust_file` varchar(40) DEFAULT NULL,
  `address` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cust_reg`
--

INSERT INTO `cust_reg` (`cust_id`, `fname`, `email`, `pass`, `mobile`, `city`, `cust_file`, `address`) VALUES
(7, 'manish', 'manishkartiks@gmail.com', '123456789', '8092236477', 'Gujarat', 'ABSTRACT3.jpg', 'bishnugarh'),
(8, 'SAMANTH', 'susi@gmail.com', '123456789', '8092236477', 'Kolkata', 'ABSTRACT2.jpg', 'Ranchi'),
(9, 'gandu', 'gandu@gmail.com', '123456789', '8092236477', 'Jaipur', 'ABSTRACT3.jpg', 'rameshnager');

-- --------------------------------------------------------

--
-- Table structure for table `dboy`
--

CREATE TABLE `dboy` (
  `did` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `postalcode` varchar(40) NOT NULL,
  `phoneno` varchar(40) NOT NULL,
  `free` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dboy`
--

INSERT INTO `dboy` (`did`, `name`, `address`, `postalcode`, `phoneno`, `free`) VALUES
(1, 'dscdc', 'sdcdc', 'cscs', '8092236477', 0),
(2, 'dcdc', 'dcdc', 'scs', '8092236477', 0),
(3, 'manish', '22baker street', '564', '9430191979', 0),
(4, 'ajay', 'AT+PO:-BISHNUGARH', '831014', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

CREATE TABLE `delivery` (
  `did` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `orderid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`did`, `id`, `orderid`) VALUES
(1, 3, 6),
(2, 3, 6);

-- --------------------------------------------------------

--
-- Table structure for table `meals`
--

CREATE TABLE `meals` (
  `mname` varchar(40) NOT NULL,
  `category1` varchar(40) NOT NULL,
  `category2` varchar(40) NOT NULL,
  `cost` int(11) NOT NULL,
  `file` varchar(300) NOT NULL,
  `message` varchar(300) NOT NULL,
  `ID` int(11) NOT NULL,
  `rest_reg` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meals`
--

INSERT INTO `meals` (`mname`, `category1`, `category2`, `cost`, `file`, `message`, `ID`, `rest_reg`) VALUES
('Full Fist', 'Main', 'veg', 200, 'meal1.jpg', 'full nasta', 37, 'lalu@gmail.com'),
('fuckhka', 'snacks', 'veg', 100, 'meal2.jpg', 'full tasty', 38, 'lalu@gmail.com'),
('gudi parwa', 'Main', 'non-veg', 300, 'meal5.jpg', 'full chicken', 39, 'lalu@gmail.com'),
('chicken', 'Main', 'non-veg', 300, 'meal4.jpg', 'tasty', 40, 'gannu@gmail.com'),
('pizza', 'snacks', 'non-veg', 200, 'meal3.jpg', 'pizza', 41, 'gannu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `fid` int(40) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rest_id` int(11) NOT NULL,
  `uid` varchar(40) NOT NULL,
  `payment_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `porder`
--

CREATE TABLE `porder` (
  `orderid` int(11) NOT NULL,
  `userid` varchar(40) NOT NULL,
  `restid` varchar(40) NOT NULL,
  `foodid` int(11) NOT NULL,
  `quant` int(11) NOT NULL,
  `address` varchar(40) NOT NULL,
  `postalcode` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  `process` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `porder`
--

INSERT INTO `porder` (`orderid`, `userid`, `restid`, `foodid`, `quant`, `address`, `postalcode`, `payment`, `process`) VALUES
(1, '3', '3', 23, 4, 'AT+PO:-BISHNUGARH', 825312, 0, 0),
(2, '3', '3', 23, 4, 'AT+PO:-BISHNUGARH', 825312, 0, 0),
(3, '3', '3', 23, 4, 'AT+PO:-BISHNUGARH', 825312, 1, 0),
(4, '3', '3', 23, 4, 'AT+PO:-BISHNUGARH', 825312, 1, 0),
(5, '7', '4', 78, 12, '22baker street', 567, 0, 0),
(6, '3', '4', 34, 2, 'AT+PO:-BISHNUGARH', 564, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `rest_reg`
--

CREATE TABLE `rest_reg` (
  `Rest_id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `city` varchar(40) NOT NULL,
  `rest_file` varchar(40) NOT NULL,
  `about` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rest_reg`
--

INSERT INTO `rest_reg` (`Rest_id`, `fname`, `email`, `pass`, `mobile`, `city`, `rest_file`, `about`) VALUES
(9, 'lalu khatal', 'lalu@gmail.com', '123456789', '8078401922', 'Gujarat', 'res1.jpeg', 'At+po :dariya mkdjllkfmdlkfmd'),
(10, 'Ganpati', 'gannu@gmail.com', '123456789', '8092236477', 'Delhi', 'res4.jpg', 'gujrat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `confirmed_order`
--
ALTER TABLE `confirmed_order`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `cust_reg`
--
ALTER TABLE `cust_reg`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `dboy`
--
ALTER TABLE `dboy`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `meals`
--
ALTER TABLE `meals`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `porder`
--
ALTER TABLE `porder`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `rest_reg`
--
ALTER TABLE `rest_reg`
  ADD PRIMARY KEY (`Rest_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `confirmed_order`
--
ALTER TABLE `confirmed_order`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `cust_reg`
--
ALTER TABLE `cust_reg`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `dboy`
--
ALTER TABLE `dboy`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `delivery`
--
ALTER TABLE `delivery`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `meals`
--
ALTER TABLE `meals`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `porder`
--
ALTER TABLE `porder`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `rest_reg`
--
ALTER TABLE `rest_reg`
  MODIFY `Rest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
