-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 18, 2017 at 07:58 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BloodBank`
--

-- --------------------------------------------------------

--
-- Table structure for table `BloodSampleInfo`
--

CREATE TABLE `BloodSampleInfo` (
  `UserName` varchar(20) NOT NULL,
  `HospitalName` text NOT NULL,
  `BloodGroup` varchar(2) NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `HospitalRegistration`
--

CREATE TABLE `HospitalRegistration` (
  `HospitalName` text NOT NULL,
  `HospitalAddress` varchar(35) NOT NULL,
  `HospitalContact` int(10) NOT NULL,
  `Hospitalemail` varchar(20) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ReceiverRegistration`
--

CREATE TABLE `ReceiverRegistration` (
  `ReceiverName` text NOT NULL,
  `ReceiverAddress` varchar(35) NOT NULL,
  `ReceiverContact` int(10) NOT NULL,
  `ReceiverEmail` varchar(20) NOT NULL,
  `BloodType` varchar(2) NOT NULL,
  `UserName` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ReceiverRegistration`
--

INSERT INTO `ReceiverRegistration` (`ReceiverName`, `ReceiverAddress`, `ReceiverContact`, `ReceiverEmail`, `BloodType`, `UserName`, `password`) VALUES
('Neel', 'Volcation', 1234567890, 'ne@gmail.com', 'b+', 'neelspd', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `SampleRequests`
--

CREATE TABLE `SampleRequests` (
  `UserName` varchar(20) NOT NULL,
  `ReceiverName` text NOT NULL,
  `BloodGroup` text NOT NULL,
  `Quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `BloodSampleInfo`
--
ALTER TABLE `BloodSampleInfo`
  ADD PRIMARY KEY (`UserName`);

--
-- Indexes for table `HospitalRegistration`
--
ALTER TABLE `HospitalRegistration`
  ADD PRIMARY KEY (`UserName`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `ReceiverRegistration`
--
ALTER TABLE `ReceiverRegistration`
  ADD PRIMARY KEY (`UserName`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- Indexes for table `SampleRequests`
--
ALTER TABLE `SampleRequests`
  ADD PRIMARY KEY (`UserName`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
