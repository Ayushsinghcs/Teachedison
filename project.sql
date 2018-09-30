-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2018 at 09:36 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `article_create`
--

CREATE TABLE `article_create` (
  `id` int(11) NOT NULL,
  `article_description` varchar(5000) NOT NULL,
  `article_category` varchar(5000) NOT NULL,
  `textarea` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article_create`
--

INSERT INTO `article_create` (`id`, `article_description`, `article_category`, `textarea`) VALUES
(1, 'Help ', 'International', 'Hi Ayush, Hope you are doing well. I am an alumni of BIET Jhansi - batch of 2007. Have a request for getting mark sheet transcripts. Could you enquire about how can an alumni place a request mark sheet transcripts at the Academic section? Alternatively, you can all me at 9986112132 so I can explain my request clearly. Thanks in advance'),
(4, 'enhance your communication and leadership skills', 'entertainment', 'Hi Ayush,\r\n\r\nIf you are one of those students who want to make a mark and stand out from the college crowd then, we have got some exciting opportunities for you.\r\n\r\nBecome a campus ambassador and learn the art of leadership and communication. The best part? You will not only become a master of these in-demand skills but will also get an opportunity to earn exciting rewards.\r\n\r\nExcited? Just apply to the below campus ambassador programs and get ready to STAND OUT from the crowd!');

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirm_password` varchar(50) NOT NULL,
  `article_preferences` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `firstname`, `lastname`, `phone`, `email`, `DOB`, `password`, `confirm_password`, `article_preferences`) VALUES
(5, 'vish', 'singh', 2147483647, 'tpc.biet@gmail.com', '31/07/1998', '11', '11', 'Business'),
(6, 'ash', 'uhdsif', 2147483647, 'ayubiet2e@gmail.com', '31/07/1998', '11111', '11111', 'Cricket'),
(7, 'vishal', 'singh', 2147483647, 'ayush.singh.3107@gmail.com', '31/07/1998', '123', '123', 'entertainment'),
(8, 'shubhankar', 'Dubey', 2147483647, 'dubeyshubhankar007@gmail.com', '02/08/1998', '22', '22', 'International');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article_create`
--
ALTER TABLE `article_create`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article_create`
--
ALTER TABLE `article_create`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
