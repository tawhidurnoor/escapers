-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2020 at 06:51 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment_table`
--

CREATE TABLE `comment_table` (
  `c_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `created_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `post_table`
--

CREATE TABLE `post_table` (
  `post_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `u_id` varchar(100) NOT NULL,
  `created_at` date NOT NULL,
  `held_at` date NOT NULL,
  `num_guest` int(11) NOT NULL,
  `places` varchar(200) NOT NULL,
  `cost` int(11) NOT NULL,
  `tour_type` varchar(20) NOT NULL,
  `post` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_table`
--

INSERT INTO `post_table` (`post_id`, `title`, `u_id`, `created_at`, `held_at`, `num_guest`, `places`, `cost`, `tour_type`, `post`) VALUES
(9, 'Peer-graded Assignment for the course', '1', '2020-08-18', '2020-08-29', 5, 'Rangamati', 8555, 'Personal', 'Helo I am noor'),
(10, 'Peer-graded Assignment for the course', '1', '2020-08-18', '2020-08-27', 52, 'gfdg', 52, 'Personal', '252');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(11) NOT NULL,
  `f_name` varchar(30) NOT NULL,
  `l_name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass_1` varchar(20) NOT NULL,
  `pass_2` varchar(20) NOT NULL,
  `u_type` varchar(20) NOT NULL,
  `pro_pic` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `f_name`, `l_name`, `email`, `pass_1`, `pass_2`, `u_type`, `pro_pic`) VALUES
(1, 'Tawhidur', 'Noor', 'tawhidbadhan@gmail.com', '1234', '1234', 'individual', 'avatar.png'),
(2, 'Shitul', 'Bhuiyan', 'amina35-2378@diu.edu.bd', '1234', '1234', 'organization', 'avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_table`
--
ALTER TABLE `post_table`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_table`
--
ALTER TABLE `post_table`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
