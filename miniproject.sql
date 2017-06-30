-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2017 at 05:30 PM
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
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `email_id` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`email_id`, `password`) VALUES
('admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bill_tbl`
--

CREATE TABLE `bill_tbl` (
  `pk_bill_no` int(11) NOT NULL,
  `fk_email_id` varchar(50) NOT NULL,
  `fk_product_id` int(10) NOT NULL,
  `bill_amount` varchar(50) NOT NULL,
  `bill_date` varchar(20) NOT NULL,
  `bill_shipping_address` varchar(100) NOT NULL,
  `bill_payment_type` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cart_tbl`
--

CREATE TABLE `cart_tbl` (
  `pk_cart_id` int(11) NOT NULL,
  `fk_email_id` varchar(50) NOT NULL,
  `fk_product_id` int(10) NOT NULL,
  `cart_qty` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cat_tbl`
--

CREATE TABLE `cat_tbl` (
  `pk_cat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `pk_product_id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_prize` int(7) NOT NULL,
  `product_mfg` varchar(50) NOT NULL,
  `product_color` varchar(50) NOT NULL,
  `product_image1` varchar(100) DEFAULT NULL,
  `product_image2` varchar(100) DEFAULT NULL,
  `product_image3` varchar(100) DEFAULT NULL,
  `product_warrenty` varchar(8) NOT NULL,
  `product_SOH` varchar(5) NOT NULL,
  `product_detail` varchar(200) NOT NULL,
  `fk_cat_id` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`pk_product_id`, `product_name`, `product_prize`, `product_mfg`, `product_color`, `product_image1`, `product_image2`, `product_image3`, `product_warrenty`, `product_SOH`, `product_detail`, `fk_cat_id`) VALUES
(1, 'ring', 5000, 'hk', 'red', 'a.jpg', 'a.jpg', 'a.jpg', '5', '50', 'aaa', 1),
(2, 'aaa', 5555, 'aaa', 'aaa', 'a.jpg', 'a.jpg', 'a.jpg', '5555', '555', 'jjj', 2);

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
-- Indexes for table `bill_tbl`
--
ALTER TABLE `bill_tbl`
  ADD PRIMARY KEY (`pk_bill_no`);

--
-- Indexes for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  ADD PRIMARY KEY (`pk_cart_id`);

--
-- Indexes for table `cat_tbl`
--
ALTER TABLE `cat_tbl`
  ADD PRIMARY KEY (`pk_cat_id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`pk_product_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`pk_email_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill_tbl`
--
ALTER TABLE `bill_tbl`
  MODIFY `pk_bill_no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cart_tbl`
--
ALTER TABLE `cart_tbl`
  MODIFY `pk_cart_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cat_tbl`
--
ALTER TABLE `cat_tbl`
  MODIFY `pk_cat_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `pk_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
