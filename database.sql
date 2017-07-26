-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2017 at 04:52 PM
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
-- Database: `questionery`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_tbl`
--

CREATE TABLE `answer_tbl` (
  `answer_id` int(6) NOT NULL,
  `answer_desc` varchar(200) NOT NULL,
  `ans_image` varchar(150) NOT NULL,
  `fk_question_id` int(6) NOT NULL,
  `fk_email_id` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `answer_like` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer_tbl`
--

INSERT INTO `answer_tbl` (`answer_id`, `answer_desc`, `ans_image`, `fk_question_id`, `fk_email_id`, `date`, `answer_like`) VALUES
(1, '  helow', '', 22, 'jilayshah123@gmail.com', '21/07/17', '21'),
(24, '  using of data type ', '', 23, 'jilayshah123@gmail.com', '21/07/17', '12'),
(25, '4  types', '', 22, 'rajpatel@gmail..com', '21/07/17', '4'),
(26, '  basic 4 types', '', 22, 'krisha123@gmail.com', '21/07/17', '12'),
(27, 'jilay jack   ', '', 26, 'rajpatel@gmail..com', '25/07/17', '4');

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
(22, 'data types', 'how many datatypes in c++  ', '', 'jilayshah123@gmail.com', 1, '21/07/17'),
(23, 'declare veriable', 'how to declare veriable in c++  ', '', 'jilayshah123@gmail.com', 1, '21/07/17'),
(24, 'data types', 'how many datatypes in java  ', '', 'jilayshah123@gmail.com', 2, '21/07/17'),
(26, 'php', 'if it is good language  ', '', 'rajpatel@gmail..com', 4, '21/07/17');

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
(1, 'C++'),
(2, 'JAVA'),
(3, 'C'),
(4, 'PHP'),
(5, '.net');

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
('jilayshah123@gmail.com', 'jack', 'JILAY JACK', '1212', 'male', 'IMG_420100.jpg', '404f39a2dc', 'no'),
('fenalishahpura@gmail.com', 'fenali', 'fenali', '8989898989', 'female', 'avatar-5.jpg', 'a8a8c437ef', 'no'),
('rajpatel@gmail..com', 'raj', 'Raj Patel', '89898989', 'male', 'IMG_4327.jpg', '3462193619', 'no'),
('krisha123@gmail.com', 'krisha', 'krisha', '56525315', 'female', 'avatar-3.jpg', 'e336356897', 'no');

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
  MODIFY `answer_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `question_tbl`
--
ALTER TABLE `question_tbl`
  MODIFY `question_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `subject_tbl`
--
ALTER TABLE `subject_tbl`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
