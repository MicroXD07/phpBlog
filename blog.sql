-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 10, 2022 at 10:27 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Posts`
--

CREATE TABLE `Posts` (
  `PostId` int(11) NOT NULL,
  `User_id` int(11) DEFAULT NULL,
  `Title` varchar(255) DEFAULT NULL,
  `Article` varchar(255) DEFAULT NULL,
  `Time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Posts`
--

INSERT INTO `Posts` (`PostId`, `User_id`, `Title`, `Article`, `Time`) VALUES
(10000, 10001, 'My First Post', '         first time posting !', '1644483864'),
(10001, 10001, 'Second post', '    checking the sweet alert again', '1644251522'),
(10002, 10001, 'jskdfjkds', 'dnsdnf', '1643874969'),
(10003, 10001, 'something something something ', 'something something something something ', '1643874786'),
(10004, 10001, 'new site new post', ' somthing good', '1644158816'),
(10005, 10001, 'sdnkjd', 'sdlsdnf', '1644158896'),
(10006, 10002, 'new user post', '    jkskdbfskdnfkf', '1644327155');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_id` int(11) NOT NULL,
  `LastName` varchar(255) NOT NULL,
  `FirstName` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `User_password` varchar(255) NOT NULL,
  `Avatar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `LastName`, `FirstName`, `Email`, `User_password`, `Avatar`) VALUES
(10001, 'bbb', 'aaa', 'aabbb@gmail.com', '$2y$10$uSVD21Te7zcCt.Ui/jNpdeCHVC515ooYneu2q9aPAz6kdBa/5TS8S', '2022.02.03.07.50.05-6CC085A6-EDBA-4096-96BC-26C06D01293B.jpeg'),
(10002, 'xd', 'micro', 'microxd07@gmail.com', '$2y$10$HC5nc/.d.QKQ8h1Le3Lp0.qgI6i3Ea93l1A8xmEHu.nwrR6B6scH2', '2022.02.08.13.32.14-20210409_104551_50.jpeg'),
(10003, 'Epshtein', 'Emanuel', 'emanuel@gmail.com', '$2y$10$lMwvZQEcyWJaGhzLMMY6VeiQTvAjq9oqO/e7cwVm0TWSvuVVjdvZW', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Posts`
--
ALTER TABLE `Posts`
  ADD PRIMARY KEY (`PostId`),
  ADD KEY `User_id` (`User_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Posts`
--
ALTER TABLE `Posts`
  MODIFY `PostId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10007;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10004;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Posts`
--
ALTER TABLE `Posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `users` (`User_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
