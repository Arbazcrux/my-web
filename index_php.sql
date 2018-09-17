-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 17, 2018 at 10:52 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `index_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`user_id`, `user_name`, `user_email`, `subject`, `message`) VALUES
(1, 'd', 'aaa@gmail.com', 'general', 'as'),
(2, 'd', 'aaa@gmail.com', 'general', 'as'),
(3, 'd', 'aaa@gmail.com', 'general', 'as'),
(4, 'Arbaz', 'Arbazcrux@gmail.com', 'collaborate', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `order_form`
--

CREATE TABLE `order_form` (
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_num` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `adress` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_form`
--

INSERT INTO `order_form` (`user_id`, `user_name`, `user_email`, `user_num`, `category`, `adress`) VALUES
(9, 'bv', 'aaa@gmail.com', '443', 'Electrician', 'sa'),
(10, 'aa', 'aaa@gmail.com', '32', 'Motor Repairing', 'sa'),
(12, 'aa', 'aaa@gmail.com', '34', 'Electronic Repairing', 's'),
(13, 'Arbaz', 'Arbazcrux@gmail.com', '03008915919', 'Electrician', 'Karachi, Pakistan');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `user_id` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `time` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`user_id`, `username`, `email`, `password`, `time`) VALUES
(8, 'index', 'index@gmail.com', '111', '2018-09-17 08:19:57'),
(18, 'carpenter', 'asd@.com', 'aaaa', '2018-09-17 08:19:57'),
(19, 'mason', 'asd@.com', 'aaa', '2018-09-17 08:19:57'),
(23, 'aa', 'aa@yahoo.com', 'aaa', '2018-09-17 08:19:57'),
(24, 'camel', 'camel@gmail.com', '1234', '2018-09-17 08:19:57'),
(25, 'Apple', 'Apple@gmail.com', 'apple', '2018-09-17 08:19:57'),
(26, 'kamil', 'kamil@gmail.com', 'kamil123', '2018-09-17 08:27:27'),
(28, 'saeed', 'saeed1@gmail.com', '1234', '2018-09-17 08:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(100) NOT NULL,
  `userid` varchar(100) NOT NULL,
  `passwordinput` varchar(100) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `userid`, `passwordinput`, `time`) VALUES
(1, 'camel@gmail.com', '123', '2018-09-17 08:16:37'),
(2, 'camel@gmail.com', '1234', '2018-09-17 08:16:37'),
(3, 'apple@gmail.com', 'apple', '2018-09-17 08:16:37'),
(4, 'kamil@gmail.com', 'kamil123', '2018-09-17 08:28:01'),
(6, 'saeed1@gmail.com', '1234', '2018-09-17 08:32:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `order_form`
--
ALTER TABLE `order_form`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_form`
--
ALTER TABLE `order_form`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
