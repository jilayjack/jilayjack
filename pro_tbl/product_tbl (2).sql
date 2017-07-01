-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2017 at 08:34 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
(1, 'ring', 15000, 'kaliyan', 'gold', 'img1/1.jpg', 'img1/10.jpg', 'img1/7.jpg', '10 years', '5', 'gold rings', 1),
(2, 'earing', 10000, 'p c jewllers', 'gold', 'img1/6.jpg', 'img1/7 (2).jpg', 'img1/3 (3).jpg', '5 year', '3', 'purl earings', 3),
(3, 'ring', 250000, 'kaliyan', 'gold', 'img1/4.jpg', 'img1/8.jpg', 'img1/4.jpg', '15 years', '2', 'diamond ring', 1),
(4, 'earing', 5000, 'TBZ jeweller', 'gold', 'img1/5 (1).jpg', 'img1/8 (1).jpg', 'img1/', '3 years', '6', 'imitation earing', 3),
(5, 'bracelate', 5000, 'TBZ jeweller', 'shilver,gold', 'img1/3,jpg.jpg', 'img1/1 (1).jpg', 'img1/5.jpg', '2 years', '5', 'imitation braslate', 2),
(6, 'payal', 50000, 'kaliyan', 'gold', 'img1/9.jpg', 'img1/3 (1).jpg', 'img1/4 (1).jpg', '20 years', '5', 'pure gold payal', 4),
(7, 'braslate', 50000, 'p c jewllers', 'gold', 'img1/10 (1).jpg', 'img1/7 (1).jpg', 'img1/', '20 years', '2', 'pure gold braslate', 2),
(8, 'nacklaces', 20000, 'p c jewllers', 'gold', 'img1/3 (2).jpg', 'img1/4 (2).jpg', 'img1/10 (2).jpg', '5 year', '4', 'imitation nacklace', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`pk_product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `pk_product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
