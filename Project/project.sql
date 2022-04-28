-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2022 at 04:57 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `deliveryman`
--

CREATE TABLE `deliveryman` (
  `name` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `username` varchar(30) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliveryman`
--

INSERT INTO `deliveryman` (`name`, `email`, `username`, `phone`, `password`, `address`, `gender`, `date`) VALUES
('Monowara Parvin', 'tamim@gmail.com', 'parvin', 1879265890, 'parvin@123', 'Khulshi, Chittagong', 'Female', '1999-01-11'),
('Tasnuba raisa', 'raisa@gmail.com', 'raisa', 1883441918, 'raisa@123', 'Khulshi, Chittagong', 'Female', '1999-09-07'),
('taifa', 'taifa@gmail.com', 'Tabrin', 1879265890, 'tameem12@', 'Khulshi, Chittagong', 'Female', '2020-03-06');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_reg`
--

CREATE TABLE `delivery_reg` (
  `username` varchar(15) NOT NULL,
  `pass_word` varchar(15) NOT NULL,
  `present_add` varchar(20) NOT NULL,
  `permanent_add` varchar(20) NOT NULL,
  `phone_no` int(11) NOT NULL,
  `nid` varchar(8) NOT NULL,
  `religion` varchar(8) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `delivery_reg`
--

INSERT INTO `delivery_reg` (`username`, `pass_word`, `present_add`, `permanent_add`, `phone_no`, `nid`, `religion`, `email`) VALUES
('Ash', '123456', 'malotinagor', 'Dhaka college', 1790321232, '109930', 'Islam', 'ash@gmail.com'),
('Rahat', '123453', 'malotinagor', 'dhaka', 2147483647, '111122', 'Islam', 'faisal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `code` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `order_date` date NOT NULL,
  `customer_name` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`code`, `name`, `price`, `quantity`, `total`, `order_date`, `customer_name`, `address`, `phone`) VALUES
(1001, 'Rice', 100, 20, 2000, '2022-03-28', 'Samir', 'Bogura', '01619252319'),
(1002, 'Suger Can', 100, 10, 1000, '2022-04-03', 'Samir Faisal', 'dhaka ', '01619252320');

-- --------------------------------------------------------

--
-- Table structure for table `product_order`
--

CREATE TABLE `product_order` (
  `product_id` varchar(15) NOT NULL,
  `product_name` varchar(25) NOT NULL,
  `product_price` int(5) NOT NULL,
  `product_quantity` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deliveryman`
--
ALTER TABLE `deliveryman`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `delivery_reg`
--
ALTER TABLE `delivery_reg`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `nid` (`nid`);

--
-- Indexes for table `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
