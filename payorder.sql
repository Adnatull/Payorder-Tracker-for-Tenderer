-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 07:25 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `payorder`
--

CREATE TABLE `payorder` (
  `id` int(11) NOT NULL,
  `particular` text NOT NULL,
  `tenderid` varchar(255) NOT NULL,
  `createdby` int(11) NOT NULL,
  `payorderno` int(11) NOT NULL,
  `payorderamount` int(11) NOT NULL,
  `createddate` date DEFAULT NULL,
  `withdrawndate` date DEFAULT NULL,
  `withdrawnby` int(11) DEFAULT NULL,
  `Status` varchar(50) NOT NULL DEFAULT 'incomplete'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payorder`
--

INSERT INTO `payorder` (`id`, `particular`, `tenderid`, `createdby`, `payorderno`, `payorderamount`, `createddate`, `withdrawndate`, `withdrawnby`, `Status`) VALUES
(2, 'EGF', '122233', 5, 12345, 12345, '2018-06-05', '2018-06-05', 5, 'incomplete');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `fullname`, `created_at`) VALUES
(1, 'Admin', 'a12345', 'admin', NULL, '2018-05-26 05:45:11'),
(5, 'Admin1', 'a12345', 'user', 'Admin as user', '2018-06-05 17:19:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payorder`
--
ALTER TABLE `payorder`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `payorderno` (`payorderno`) USING BTREE;

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
-- AUTO_INCREMENT for table `payorder`
--
ALTER TABLE `payorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
