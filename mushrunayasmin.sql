-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2021 at 04:09 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mushrunayasmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintbl`
--

CREATE TABLE `admintbl` (
  `id` int(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admintbl`
--

INSERT INTO `admintbl` (`id`, `username`, `email`, `pass`) VALUES
(1, 'mushruna', 'mushruna90@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contacttbl`
--

CREATE TABLE `contacttbl` (
  `id` int(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `smessage` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacttbl`
--

INSERT INTO `contacttbl` (`id`, `fname`, `lname`, `email`, `phone`, `smessage`) VALUES
(1, 'Rahman', '', 'tr@gmail.com', '95387834', 'testing'),
(2, 'Faisal', 'Ahmed', 'faisal11@gmail.com', '+880-1710000000', 're testing re testing'),
(3, 'Ishrat', 'Jahan', 'ishrat23@gmail.com', '+880-1387377654', 'again testing!!'),
(4, 'Hasibul', 'Hasan', 'hasib102@gmail.com', '948277402', '4th testing!!'),
(5, 'Jiaul', 'Ashraf', 'ja33@gmail.com', '98784763', '5th testing'),
(6, 'Jahid', 'Hasan', 'jhasan132@gmail.com', '834059894898', '6th testing'),
(7, 'Jahid', 'Hasan', 'jhasan132@gmail.com', '834059894898', '6th testing'),
(8, 'Jahid', 'Hasan', 'jhasan132@gmail.com', '834059894898', '6th testing'),
(9, 'Jahid', 'Hasan', 'jhasan132@gmail.com', '834059894898', '6th testing');

-- --------------------------------------------------------

--
-- Table structure for table `diarytbl`
--

CREATE TABLE `diarytbl` (
  `id_diary` int(100) NOT NULL,
  `title` varchar(255) NOT NULL,
  `postDate` date NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admintbl`
--
ALTER TABLE `admintbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacttbl`
--
ALTER TABLE `contacttbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `diarytbl`
--
ALTER TABLE `diarytbl`
  ADD PRIMARY KEY (`id_diary`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admintbl`
--
ALTER TABLE `admintbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacttbl`
--
ALTER TABLE `contacttbl`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `diarytbl`
--
ALTER TABLE `diarytbl`
  MODIFY `id_diary` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
