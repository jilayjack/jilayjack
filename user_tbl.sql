-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2017 at 08:36 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `pk_email_id` varchar(50) NOT NULL,
  `uname` varchar(15) NOT NULL,
  `user_password` varchar(10) NOT NULL,
  `user_cpassword` varchar(10) NOT NULL,
  `user_address` varchar(100) DEFAULT NULL,
  `user_mobile_no` varchar(10) NOT NULL,
  `user_gender` varchar(6) DEFAULT NULL,
  `user_profile_pic` varchar(200) NOT NULL,
  `verify` varchar(5) NOT NULL,
  `token` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`pk_email_id`, `uname`, `user_password`, `user_cpassword`, `user_address`, `user_mobile_no`, `user_gender`, `user_profile_pic`, `verify`, `token`) VALUES
('jilayshah123@gmail.com', 'jilayjack', 'jilay', 'jilay', 'ahmedabad', '8980120524', 'male', 'jj.jpeg', 'no', '2803e83821'),
('krisha123@gmail.com', 'krisha', 'krisha', 'krisha', 'a', '12345678', 'female', 'a.jpg', 'no', '61a76ba3d3'),
('fenalishahpura@gmail.com', 'fenali', 'fenali', 'fenali', 'abad', '5263253', 'female', 't2.jpg', 'no', 'a2dd44983c'),
('kk@gmail.com', 'kk', 'jj', 'jj', 'kk', '565', 'male', 'a.jpg', 'no', 'cf1d7be012'),
('j@gmail.com', 'j', 'kk', 'kk', 'k', '89', 'female', 'log_pic.jpg', 'no', '507aeaa43c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`pk_email_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
