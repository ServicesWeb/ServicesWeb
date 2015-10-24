-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Oct 24, 2015 at 08:37 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `group3`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `ID` int(16) NOT NULL,
  `name` varchar(250) NOT NULL,
  `hour` varchar(250) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`ID`, `name`, `hour`, `price`) VALUES
(101, 'Merry House Cleaning', '08:00-10:00', 240),
(102, 'Merry House Cleaning', '11:00-13:00', 250),
(103, 'Merry House Cleaning', '15:00-18:00', 300);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `category` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(1024) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`category`, `name`, `description`, `img`) VALUES
('HC', 'Danny Clean', 'Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! Our customers have saved more than 30% of their spare time! ', 'img/seller/DannyClean.jpg'),
('HC', 'Fenny Cleaning', 'We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! We have a lot of customers, and we have had over 2,000 good feedbacks! ', 'img/seller/FennyCleaning.jpg'),
('HC', 'Jack Cleaning\r\n', 'We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! We are strong! We are happy! We are professional! ', 'img/seller/JackHouseCleaning.jpg'),
('HC', 'Merry Cleaning\r\n', 'Welcome to Merry House Cleaning, hour work is efficient, and professional, clean, cheap, and happy!Welcome to Merry House Cleaning, hour work is efficient, and professional, clean, cheap, and happy!Welcome to Merry House Cleaning, hour work is efficient, and professional, clean, cheap, and happy!Welcome to Merry House Cleaning, hour work is efficient, and professional, clean, cheap, and happy!', 'img/seller/MerryHouseCleaning.jpg'),
('HC', 'Vincent Clean', 'I love cleaning! I love house! I love helping people!I love cleaning! I love house! I love helping people!I love cleaning! I love house! I love helping people!I love cleaning! I love house! I love helping people!I love cleaning! I love house! I love helping people!', 'img/seller/Vincentclean.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD UNIQUE KEY `name` (`name`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
