-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 10:51 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaaydat`
--

-- --------------------------------------------------------

--
-- Table structure for table `property`
--

CREATE TABLE `property` (
  `pid` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `apt_type` varchar(30) NOT NULL,
  `apt_name` varchar(30) NOT NULL,
  `bhk_type` int(5) NOT NULL,
  `floors` int(11) NOT NULL,
  `total_floor` int(11) NOT NULL,
  `prop_age` int(11) NOT NULL,
  `prop_size` int(11) NOT NULL,
  `prop_city` varchar(30) NOT NULL,
  `prop_locality` varchar(30) NOT NULL,
  `prop_street` varchar(30) NOT NULL,
  `prop_state` varchar(30) NOT NULL,
  `exp_amt` bigint(20) NOT NULL,
  `p_image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property`
--

INSERT INTO `property` (`pid`, `email`, `apt_type`, `apt_name`, `bhk_type`, `floors`, `total_floor`, `prop_age`, `prop_size`, `prop_city`, `prop_locality`, `prop_street`, `prop_state`, `exp_amt`, `p_image`) VALUES
(31, 'yashpayare27@gmail.com', 'block', 'raunak', 3, 14, 14, 5, 600, 'thane', 'naupada', 'B.P.D.', 'Maharashtra', 10000000, ''),
(32, 'mitharikeyur246@gmail.com', 'block', 'devyani', 3, 2, 12, 10, 400, 'thane', 'naupada', 's.p.road', 'Maharashtra', 9000000, ''),
(33, 'yashpayare27@gmail.com', 'block', 'navgeeta', 1, 2, 7, 3, 200, 'mumbai', 'nariman point', 'g.d. road', 'Maharashtra', 890000, ''),
(34, 'yashpayare27@gmail.com', 'block', 'manas', 3, 5, 7, 6, 650, 'thane', 'naupada', 'B.P.D.road', 'Maharashtra', 12000000, ''),
(35, 'mitharikeyur246@gmail.com', 'block', 'sun park', 1, 3, 5, 5, 400, 'mumbai', 'nariman ', 'e.p road', 'Maharashtra', 8000000, ''),
(36, 'mitharikeyur246@gmail.com', 'block', 'bhomi', 2, 2, 6, 1, 650, 'mumbai', 'panchpakadi', 'g.b road', 'Maharashtra', 670000000, ''),
(37, 'mitharikeyur246@gmail.com', 'block', 'navjeevan', 1, 7, 7, 5, 400, 'mumbai', 'gnadhi park', 's.p.road', 'Maharashtra', 45000000, ''),
(38, 'mitharikeyur246@gmail.com', 'block', 'swami', 1, 3, 7, 4, 650, 'thane', 'panchpakadi', 's.p.road', 'Maharashtra', 34000000, '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `uid` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`uid`, `fname`, `lname`, `email`, `phone`, `gender`, `city`, `state`, `country`, `password`) VALUES
(19, 'yash', 'payare', 'yashpayare27@gmail.com', 7738020011, 'male', 'thane', 'maharashtra', 'india', 'pass3'),
(20, 'keyur', 'mithari', 'mitharikeyur246@gmail.com', 9978563410, 'male', 'mumbai', 'maharashtra', 'india', 'pass2');

-- --------------------------------------------------------

--
-- Table structure for table `resetpassword`
--

CREATE TABLE `resetpassword` (
  `id` int(11) NOT NULL,
  `code` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resetpassword`
--

INSERT INTO `resetpassword` (`id`, `code`, `email`) VALUES
(18, '15dac3ff3b5ace', 'yashpayare27@gmail.com'),
(19, '15dac4180da94f', 'yashpayare27@gmail.com'),
(20, '15dac41ed8d685', 'yashpayare27@gmail.com'),
(21, '15dac42add1479', ''),
(30, '15e3fce2562cac', 'yashpayare27@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `property`
--
ALTER TABLE `property`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `resetpassword`
--
ALTER TABLE `resetpassword`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `property`
--
ALTER TABLE `property`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `resetpassword`
--
ALTER TABLE `resetpassword`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
