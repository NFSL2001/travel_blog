-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 12:47 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Insert username
--

GRANT SELECT, INSERT, UPDATE, DELETE ON *.* TO `webdev`@`%` IDENTIFIED BY PASSWORD '*DE66836140FF83939E37FBC9687568DBAF890A04';

--
-- Database: `traveldb`
--
CREATE DATABASE IF NOT EXISTS `traveldb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `traveldb`;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `userid` int(32) NOT NULL,
  `postid` int(128) NOT NULL,
  `commenttime` datetime NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `postid` int(128) NOT NULL,
  `userid` int(32) NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` mediumtext NOT NULL,
  `content` longtext NOT NULL,
  `location` text NOT NULL,
  `image` text NOT NULL,
  `tag` text NOT NULL,
  `createdtime` datetime NOT NULL,
  `avg_rating` int(5) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='"Post database"';

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `userid` int(32) NOT NULL,
  `postid` int(128) NOT NULL,
  `rating` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(32) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profileintro` longtext NOT NULL,
  `realname` varchar(255) NOT NULL,
  `displayname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telno` int(12) NOT NULL,
  `token` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='User information';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `username`, `password`, `profileintro`, `realname`, `displayname`, `email`, `telno`, `token`) VALUES
(1, 'test', '$2y$10$6z7GKa9kpDN7KC31CWIHi.fdO/t07Y/x36WUKNP01ndHdkdR9Ae3K', '', '', '', 'test@gmail.com', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`userid`,`postid`),
  ADD KEY `postid_comments` (`postid`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`postid`),
  ADD KEY `username` (`userid`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`userid`,`postid`),
  ADD KEY `postid_rating` (`postid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `postid_comments` FOREIGN KEY (`postid`) REFERENCES `posts` (`postid`),
  ADD CONSTRAINT `userid_comments` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `username` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `postid_rating` FOREIGN KEY (`postid`) REFERENCES `posts` (`postid`),
  ADD CONSTRAINT `userid_rating` FOREIGN KEY (`userid`) REFERENCES `users` (`userid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
