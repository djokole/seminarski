-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2020 at 04:36 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sem`
--

-- --------------------------------------------------------

--
-- Table structure for table `igrice`
--

CREATE TABLE `igrice` (
  `id` int(20) NOT NULL,
  `igrica` varchar(20) NOT NULL,
  `tvorac` varchar(25) NOT NULL,
  `platforma` varchar(30) NOT NULL,
  `brigraca` int(20) NOT NULL,
  `ocena` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `igrice`
--

INSERT INTO `igrice` (`id`, `igrica`, `tvorac`, `platforma`, `brigraca`, `ocena`) VALUES
(1, 'League of Legends', 'Riot Games', 'PC', 80000000, '8'),
(3, 'FIFA', 'EA Sports', 'PlayStation/Xbox/PC', 50000000, '8'),
(4, 'Dota 2', 'Valve Corporation', 'PC', 1290000, '7'),
(9, 'World of Warcraft', 'Blizzard', 'PC', 2147483647, '9'),
(10, 'CS GO', 'VALVE', 'PC', 2147483647, '6'),
(11, 'dsad', 'fas', 'asda', 0, 'dasda');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(6) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created_at`) VALUES
(1, 'mali', '$2y$10$.9JgTL.gCLH3EcnXKjS/1e9Ua41tsJQ.zYr45k04K3GVhqOGDGFeG', 'user', '2020-02-08 18:12:49'),
(2, 'admin1', '$2y$10$cws2vIL77nQtO02sOvDvGuHb5u7Q6Ll.edIqhtvu44/fhoI7ETAQi', 'admin', '2020-02-08 22:25:19'),
(3, 'neko', '$2y$10$yFWjsaJ.bdYHXS7qQPcD3.OQ8F5qPUtbO1auL9tJ67xUiY9BaacVy', 'user', '2020-02-08 22:27:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `igrice`
--
ALTER TABLE `igrice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `igrice`
--
ALTER TABLE `igrice`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
