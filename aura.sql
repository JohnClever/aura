-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 06:07 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aura`
--
CREATE DATABASE IF NOT EXISTS `aura` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `aura`;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `fid` int(11) NOT NULL,
  `askerName` varchar(40) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `answer` text DEFAULT NULL,
  `ansby` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`fid`, `askerName`, `question`, `answer`, `ansby`) VALUES
(51, 'lk', 'h', 'dfgdfd', 2),
(52, 'Foo Bar', 'is foo better than bar?', 'yes, foo is the best', 2);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `photoID` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`photoID`) VALUES
('5ef02c1c027d1.jpg'),
('5ef02ce4e0fa4.jpg'),
('5ef02d3a01908.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mid` int(11) NOT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `msgDate` datetime NOT NULL,
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`mid`, `fname`, `lname`, `email`, `subject`, `content`, `msgDate`, `status`) VALUES
(30, 'ok', 'bo', 'fsf@g.c', 'dfs', 'dsf', '2020-06-22 02:59:31', 0),
(31, 'ed', 'sdfs', 'fdsdsf@g.f', 'dfs', 'ds', '2020-06-22 03:02:35', 0);

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `tid` varchar(20) NOT NULL,
  `name` varchar(40) DEFAULT NULL,
  `content` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`tid`, `name`, `content`) VALUES
('5ef020e2a23b3.jpg', 'Albert Boateng', 'Another testimonial'),
('5ef0218e6e521.jpg', 'Cindy Morrison', 'this is cindy morrison'),
('5ef0222b7d5c8.jpg', 'Katherine Johnson', 'I am the first person to talk about the lorem ipsum');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `pwd` varchar(60) DEFAULT NULL,
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `username`, `email`, `pwd`, `fname`, `lname`) VALUES
(1, 'clever', 'clever@john.com', '$2y$10$hSfzaarjuYGSZ4tuO2vGRurClG3ErHgl8KzJY6I9Zr1X4v6Rmvzyy', 'John', 'Clever'),
(2, 'carter', 'admin@aura.com', '$2y$10$9aeJOt70coPY6Vc4ebmwg.kfWIRvKkZpM4znIyvtTM2XZ5J4fsnHC', 'Samuel', 'Carter'),
(3, 'bismark', 'bismark@ansah.com', '$2y$10$nDQP8TQZJ/ttVv0Tt9OGKOS20oukavNmRXgn7P/u/oVmLdN7JFRru', 'Bismark', 'Ansah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`fid`),
  ADD KEY `ansby` (`ansby`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`photoID`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `fid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_ibfk_1` FOREIGN KEY (`ansby`) REFERENCES `users` (`uid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
