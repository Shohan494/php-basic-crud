-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 21, 2017 at 02:32 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.21-1~ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `umsphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `std_course`
--

CREATE TABLE `std_course` (
  `id` int(255) NOT NULL,
  `stdname` varchar(255) NOT NULL,
  `coursecode` varchar(255) NOT NULL,
  `coursename` varchar(255) NOT NULL,
  `credithours` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_course`
--

INSERT INTO `std_course` (`id`, `stdname`, `coursecode`, `coursename`, `credithours`) VALUES
(1, 'shohan494asas', '1212', 'eng', 40),
(2, 'ssasa', '1212', 'assass', 122121);

-- --------------------------------------------------------

--
-- Table structure for table `std_info`
--

CREATE TABLE `std_info` (
  `id` int(255) NOT NULL,
  `roll` int(15) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `std_info`
--

INSERT INTO `std_info` (`id`, `roll`, `gender`, `city`, `name`) VALUES
(3, 11, 'male', 'assa', 'xfzd'),
(4, 11, 'male', 'assa', 'xfzd'),
(7, 121, 'female', 'asdas', 'xZX'),
(8, 112, 'male', 'sadad', 'as'),
(9, 1111111, 'female', 'saaaaaaaas', 'asasasadad'),
(10, 1111, 'male', 'asasas', 'assas'),
(11, 121, 'female', 'asas', 'asasas'),
(12, 111221212, 'female', 'assssssssasassssssssss', 'aaaaaaaaaaaaaaa'),
(13, 1, 'female', 'dhakasssssssss', 'shohan494asas'),
(14, 212, 'female', 'asass', 'sasa'),
(15, 1221, 'female', 'assaasa', 'akkas'),
(16, 12122, 'female', 'asass', 'sssss'),
(17, 1121212, 'female', 'sssaa', 'ssasa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std_course`
--
ALTER TABLE `std_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_info`
--
ALTER TABLE `std_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `std_course`
--
ALTER TABLE `std_course`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `std_info`
--
ALTER TABLE `std_info`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;