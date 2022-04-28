-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 09:12 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `bhistory`
--

CREATE TABLE `bhistory` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `mbank` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bhistory`
--

INSERT INTO `bhistory` (`id`, `name`, `amount`, `mbank`, `phone`) VALUES
(12, 'Lilaboti', '5$', 'Bkash', '01703310977');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `ID` int(10) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `author_name` varchar(30) NOT NULL,
  `book_price` int(10) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`ID`, `book_name`, `author_name`, `book_price`, `image`) VALUES
(1, 'Harry potter', 'J.K Rollin', 300, ''),
(3, 'Lord Of The Ring', 'J. R. R. Tolkien.', 2000, ''),
(4, 'Himu ki mahapurush?', 'Humayun Ahmed', 1500, ''),
(8, 'Song of ice&fire', 'RR.Martin', 3000, ''),
(9, 'Himu Rimande', 'Humayun Ahmed', 1000, ''),
(11, 'Song Offerings', 'Rabindranath Tagore', 750, ''),
(12, 'Rabindranath Tagore', ' Kazi Nazrul Islam', 500, ''),
(26, 'Tukunjil', 'Muhammed Zafar Iqbal', 300, ''),
(27, 'Misir Ali Omnibus ', 'Humayun Ahmed', 450, ''),
(28, 'Bangla Book', 'jashim uddin', 250, '');

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `ID` int(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`ID`, `fname`, `lname`, `gender`, `dob`, `religion`, `phone`, `email`, `username`, `password`) VALUES
(24, 'Sormila', 'Hossain', 'Female', '2000-12-07', 'Islam', '01703310977', 'sormilah@gmail.com', 'Sormila', '1234'),
(29, 'Sormila 2', 'Hossain', 'Female', '2000-12-07', 'Islam', '01703310977', 'sormilah@gmail.com', 'Sormila2', '1234'),
(30, 'Sormila  3', 'Hossain', 'Female', '2021-12-09', 'Islam', '01703310977', 'sormilah@gmil.com', 'Sormila3', '1234'),
(32, 'Sormila  3', 'Hossain', 'Female', '2021-12-09', 'Islam', 'asdasd', 'sormilah@gmil.com', 'Sormila4', '1234'),
(33, 'Sormila', 'Hossain', 'Female', '2021-12-07', 'Islam', '01703310977', 'sormilah@gmil.com', 'Sumi', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `name`, `email`, `user_name`, `password`, `gender`, `dob`, `image`) VALUES
(1, 'Dip', 'pain5632@gmail.com', 'dip roy', '12345678!', 'male', '1999-07-22', 'WhatsApp Image 2021-09-10 at 15.31.42.jpeg'),
(2, 'al amin', 'alamin5632@gmail.com', 'al amin', 'asdfghjkl@', 'female', '15-03-1953', 'Chris-Evans-title-character-Joe-Johnston-Captain.jpg'),
(5, 'Dipta Roy', 'dipta19985@gmail.com', 'dipta roy', 'Dipta1995!', 'male', '1995-07-18', '8ZZNSej9H2oqYzpa5K422b-1200-80.jpg'),
(6, 'Fhamida lianaa', 'lianaajaira@gmail.com', 'fhamida liana', '87654321!', 'female', '2007-02-06', '1462461414-captain-america-civil-war-elizabeth-olsen1.jpg'),
(7, 'rahi ahmed', 'rahi20212@gmail.com', 'rahi bhai', '!!!!!!!!1', 'male', '2012-10-17', '610upMT-MlL._AC_SL1002_.jpg'),
(9, 'Sunny Ahmed', 'sunny1998@gmail.com', 'sunny ahmed', '22222222@', 'male', '1998-06-17', 'benedict-cummberbatch-1615554940.jpg'),
(10, 'fahim khan', 'fhaimkhan4321@gmail.com', 'khan fahim', '111111111!', 'male', '2003-02-04', 'Brie-Larson-Captain-Marvel-feature-900x506.jpg'),
(13, 'Rezaul Karim', 'rezaul@mail.com', 'arbho ahmed', 'asdfghjk@', 'male', '2021-12-22', ''),
(15, 'Zafor Iqbal', 'dfdggf@gmail.com', 'zafor icbal', '12345678@', 'male', '2006-01-09', ''),
(16, 'jonny ahmed', 'jonny1996@gmai.com', 'jhon khan', '123456789@', 'male', '2021-12-05', ''),
(24, 'k m wasim', 'abcd13@gmail.com', 'km wali ', '12345678!', 'male', '2022-04-07', '3313eef16ee9a7bd71aba623ae870a7f.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bhistory`
--
ALTER TABLE `bhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
