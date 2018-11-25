-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 08:02 AM
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
-- Database: `fruitadda`
--

-- --------------------------------------------------------

--
-- Table structure for table `retailerregistration`
--

CREATE TABLE `retailerregistration` (
  `email` varchar(50) NOT NULL,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `pannumber` varchar(15) DEFAULT NULL,
  `phonenumber` bigint(10) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `securityanswer` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `retailerregistration`
--

INSERT INTO `retailerregistration` (`email`, `firstname`, `lastname`, `pannumber`, `phonenumber`, `address`, `password`, `securityanswer`) VALUES
('alluaravind1313@gmail.com', 'ALLU', 'ARAVIND', 'BWCPA5752P', 7032390280, '74-6/7-1/7, Netaji road, Ayyappa nagar', 'aravind@123', '2'),
('divya@gmail.com', 'divya', 'latha', 'abcde1234a', 7032390280, 'jissh', 'divya@123', '3'),
('neerajagutti97@gmaill.com', 'neeru', 'gutti', 'BWCPA5752w', 8297332058, 'HIGH SKL ROAD', 'neeraja@123', 'dog'),
('pa1kumarmaddula@gmail.com', 'maddul', 'pavan', 'BWCPA5752E', 9052250672, 'vijayawada', 'pavan@123', 'kankipadu'),
('ram@gmail.com', 'ram', 'kumar', 'abcde1234a', 7032390280, '74-6/7-1/7, Netaji road, Ayyappa nagar', 'Ram@123', '2');

-- --------------------------------------------------------

--
-- Table structure for table `shopperregistration`
--

CREATE TABLE `shopperregistration` (
  `useremail` varchar(50) NOT NULL,
  `userfirstname` varchar(30) DEFAULT NULL,
  `userlastname` varchar(30) DEFAULT NULL,
  `userpannumber` varchar(15) DEFAULT NULL,
  `userphonenumber` bigint(10) DEFAULT NULL,
  `useraddress` varchar(50) DEFAULT NULL,
  `userpassword` varchar(20) DEFAULT NULL,
  `usersecurityanswer` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shopperregistration`
--

INSERT INTO `shopperregistration` (`useremail`, `userfirstname`, `userlastname`, `userpannumber`, `userphonenumber`, `useraddress`, `userpassword`, `usersecurityanswer`) VALUES
('alluarav@gmail.com', 'ALLU', 'ARAVIND', 'ABHCS4343W', 7032390280, '74-6/7-1/7, Netaji road, Ayyappa nagar', 'aravind@123', '3'),
('alluaravind1313@gmail.com', 'ALLU', 'ARAVIND', 'ABHCS4343W', 7032390280, '74-6/7-1/7, Netaji road, Ayyappa nagar', 'aravind@123', '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `retailerregistration`
--
ALTER TABLE `retailerregistration`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `shopperregistration`
--
ALTER TABLE `shopperregistration`
  ADD PRIMARY KEY (`useremail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
