-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 08:05 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `agriculture`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_reg`
--

CREATE TABLE `admin_reg` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `gender` text NOT NULL,
  `religion` text NOT NULL,
  `dob` date NOT NULL,
  `phone` int(12) NOT NULL,
  `nid` int(15) NOT NULL,
  `uname` text NOT NULL,
  `email` text NOT NULL,
  `pass` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_reg`
--

INSERT INTO `admin_reg` (`id`, `name`, `fname`, `mname`, `gender`, `religion`, `dob`, `phone`, `nid`, `uname`, `email`, `pass`, `image`) VALUES
(1, 'Rashedul Haque', 'Mozammel', 'Rasheda Begum', 'male', 'muslim', '1999-04-07', 1629254280, 2147483647, 'rashed3075', 'rashed.rabby001@gmail.com', 'HelloHello', 'profile.jpg'),
(2, 'rijons', 'jack', 'jenny', 'male', 'muslim', '2008-06-10', 1572157443, 2147483647, 'rijon101', 'rijon@gmail.com', 'abcdefghij', 'Villains.jpg'),
(3, 'Mr.X', 'axbx', 'dfsdf', 'female', 'cristian', '2022-03-29', 1940205607, 2147483647, 'mrx', 'mrx@gmail.com', 'qwertyuiop', 'ProfileImage.jpg'),
(4, 'Hasnat', 'mr.x', 'msy', 'male', 'muslim', '2022-03-29', 1839183922, 2147483647, 'himel101', 'himel@gmail.com', '12345678', 'Villains.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_reg`
--
ALTER TABLE `admin_reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_reg`
--
ALTER TABLE `admin_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
