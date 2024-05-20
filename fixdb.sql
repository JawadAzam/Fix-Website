-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 08:57 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fixdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `experience` varchar(10) NOT NULL,
  `comment` text NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `fixdb`
--

CREATE TABLE `fixdb` (
  `ID` int(11) NOT NULL,
  `firstname` varchar(32) NOT NULL,
  `lastname` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fixdb`
--

INSERT INTO `fixdb` (`ID`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'sara', 'halwani', 'alhalwanisara@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, '123', '123', '123', '202cb962ac59075b964b07152d234b70'),
(3, 'Tarik', 'El Amsy', 'tarik.elamsy@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(5, 'ads', 'ad', 'ad@asd.com', '202cb962ac59075b964b07152d234b70'),
(6, 'Sara', 'Al Halwani', 'alhalwanisara@gmail.com', '6d250c79032befda869f40926eef553b');

-- --------------------------------------------------------

--
-- Table structure for table `req`
--

CREATE TABLE `req` (
  `ID` int(11) NOT NULL,
  `PhoneType` varchar(64) NOT NULL,
  `PhoneService` varchar(64) NOT NULL,
  `Description` text NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `KeyPhone` varchar(20) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `StreetName` varchar(50) NOT NULL,
  `Num` varchar(255) NOT NULL,
  `City` varchar(64) NOT NULL,
  `AddressType` varchar(64) NOT NULL,
  `CardNumber` int(30) NOT NULL,
  `CardName` varchar(30) NOT NULL,
  `ExpirationMonth` int(2) NOT NULL,
  `ExpirationYear` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req`
--

INSERT INTO `req` (`ID`, `PhoneType`, `PhoneService`, `Description`, `FullName`, `KeyPhone`, `PhoneNumber`, `StreetName`, `Num`, `City`, `AddressType`, `CardNumber`, `CardName`, `ExpirationMonth`, `ExpirationYear`) VALUES
(10, 'Apple', 'Repairs & Physical Damage', 'Problem', 'Sara', '971', '501234567', 'Dannah', 'S Towers', 'Abu Dhabi', 'Home', 123321123, 'Sara', 1, 2020),
(11, 'Apple', 'Repairs & Physical Damage', 'asd', 'asd', '971', '123', 'asd', 'asd', 'asd', 'Office', 123, '123', 1, 2020);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fixdb`
--
ALTER TABLE `fixdb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `req`
--
ALTER TABLE `req`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fixdb`
--
ALTER TABLE `fixdb`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `req`
--
ALTER TABLE `req`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
