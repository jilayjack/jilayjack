-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2017 at 05:51 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `questionery`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_tbl`
--

CREATE TABLE `answer_tbl` (
  `answer_id` int(6) NOT NULL,
  `answer_desc` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `fk_question_id` int(6) NOT NULL,
  `fk_email_id` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `answer_like` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer_tbl`
--

INSERT INTO `answer_tbl` (`answer_id`, `answer_desc`, `image`, `fk_question_id`, `fk_email_id`, `date`, `answer_like`) VALUES
(1, '6 datatype', '', 1, 'user@gmail.com', '20-07-2017', '2'),
(2, '8 datatype', '', 1, 'user1@gmail.com', '11-01-2017', '3'),
(3, '  c++ is object oriented laguage', '', 2, 'user@gmail.com', '20-07-17', '0'),
(6, '  fecility of class', '', 2, 'user1@gmail.com', '01-03-17', '1');

-- --------------------------------------------------------

--
-- Table structure for table `question_tbl`
--

CREATE TABLE `question_tbl` (
  `question_id` int(6) NOT NULL,
  `question_title` varchar(100) NOT NULL,
  `question_desc` varchar(250) NOT NULL,
  `image` varchar(50) NOT NULL,
  `fk_email_id` varchar(50) NOT NULL,
  `fk_sub_id` int(6) NOT NULL,
  `date` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_tbl`
--

INSERT INTO `question_tbl` (`question_id`, `question_title`, `question_desc`, `image`, `fk_email_id`, `fk_sub_id`, `date`) VALUES
(1, 'how many datatype in c?', 'dsdsfdfdsfdf', '', 'user@gmail.com', 2, '20-07-2017'),
(2, 'difference between c and c++', 'how can c and c++ differe', '', 'user@gmail.com', 1, '21-07-2017'),
(3, 'first que', 'fdcdfvvvsv', '', 'user1@gmail.com', 1, '02-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `subject_tbl`
--

CREATE TABLE `subject_tbl` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject_tbl`
--

INSERT INTO `subject_tbl` (`subject_id`, `subject_name`) VALUES
(1, 'c++'),
(2, 'java'),
(3, 'php'),
(4, 'c'),
(5, 'other subjects');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `email_id` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `user_image` varchar(50) NOT NULL,
  `token` varchar(10) NOT NULL,
  `flag` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`email_id`, `password`, `name`, `mobile_no`, `gender`, `user_image`, `token`, `flag`) VALUES
('user@gmail.com', 'user ', 'user name', '1234567890', 'male', 'image/doll.jpeg', '', ''),
('user1@gmail.com', 'user1', 'user1', '0987654321', 'female', 'image/doll2.jpeg', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_tbl`
--
ALTER TABLE `answer_tbl`
  ADD PRIMARY KEY (`answer_id`);

--
-- Indexes for table `question_tbl`
--
ALTER TABLE `question_tbl`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`email_id`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answer_tbl`
--
ALTER TABLE `answer_tbl`
  MODIFY `answer_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
