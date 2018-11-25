-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 04:42 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `retailregister`
--

CREATE TABLE `retailregister` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retailregister`
--

INSERT INTO `retailregister` (`firstname`, `lastname`, `address`, `email`, `pan`, `phone`, `password`) VALUES
('Gopi', 'Krishna', 'VIJAYAWADA', 'gopi.krishna630@gmail.com', 'FADPM3968W', 9705828818, 'Gopi@123');

-- --------------------------------------------------------

--
-- Table structure for table `shopperregister`
--

CREATE TABLE `shopperregister` (
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pan` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopperregister`
--

INSERT INTO `shopperregister` (`firstname`, `lastname`, `address`, `email`, `pan`, `phone`, `password`) VALUES
('Gopi', 'Krishna', 'VIJAYAWADA', 'gopi@gmail.com', 'FADPM3968W', 2147483647, 'Gopi@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `retailregister`
--
ALTER TABLE `retailregister`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `shopperregister`
--
ALTER TABLE `shopperregister`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
