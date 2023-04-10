-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2023 at 09:37 AM
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
-- Database: `userlogin`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `Articleid` int(10) NOT NULL,
  `ArticleName` varchar(20) NOT NULL,
  `AuthorName` text NOT NULL,
  `Body` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`Articleid`, `ArticleName`, `AuthorName`, `Body`) VALUES
(0, 'Necessity of water', 'Robert Carlos', 'the main purpose of this article is to...'),
(1234, 'Necessity of water', 'Robert Carlos', 'the main purpose of this article is to...');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` varchar(10) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Location` varchar(25) NOT NULL,
  `Date of Birth` date NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `Username`, `Email`, `Location`, `Date of Birth`, `Password`) VALUES
('12345', 'Mredul', 'mredul@gmail.com', 'Mirpur, Dhaka', '1999-08-02', 'abcde');

-- --------------------------------------------------------

--
-- Table structure for table `pafavapp`
--

CREATE TABLE `pafavapp` (
  `Appointment no` int(10) NOT NULL,
  `Paname` varchar(20) NOT NULL,
  `Location` varchar(25) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pafavapp`
--

INSERT INTO `pafavapp` (`Appointment no`, `Paname`, `Location`, `Date`) VALUES
(0, '', 'Mirpur, Dhaka', '2023-11-15'),
(1122, 'Akash', 'Mirpur, Dhaka', '2023-11-15');

-- --------------------------------------------------------

--
-- Table structure for table `pareport`
--

CREATE TABLE `pareport` (
  `Paid` varchar(10) NOT NULL,
  `Paname` int(20) NOT NULL,
  `Title` int(30) NOT NULL,
  `Report` int(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pareport`
--

INSERT INTO `pareport` (`Paid`, `Paname`, `Title`, `Report`) VALUES
('0012', 0, 0, 0),
('0013', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pfavlist`
--

CREATE TABLE `pfavlist` (
  `Paid` varchar(10) NOT NULL,
  `Paname` text NOT NULL,
  `Palocation` varchar(25) NOT NULL,
  `Problems` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pfavlist`
--

INSERT INTO `pfavlist` (`Paid`, `Paname`, `Palocation`, `Problems`) VALUES
('0012', 'Akash', 'Mirpur', 'Stressed');

-- --------------------------------------------------------

--
-- Table structure for table `phfavapp`
--

CREATE TABLE `phfavapp` (
  `Appointment no` int(10) NOT NULL,
  `Phname` varchar(20) NOT NULL,
  `Location` varchar(25) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phfavapp`
--

INSERT INTO `phfavapp` (`Appointment no`, `Phname`, `Location`, `Date`) VALUES
(1122, 'Dr. Einstein', 'Kuratoli', '2023-03-05');

-- --------------------------------------------------------

--
-- Table structure for table `phfavlist`
--

CREATE TABLE `phfavlist` (
  `Phid` varchar(10) NOT NULL,
  `Phname` text NOT NULL,
  `Phlocation` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phfavlist`
--

INSERT INTO `phfavlist` (`Phid`, `Phname`, `Phlocation`) VALUES
('2233', 'Dr. Einstein', 'Kuratoli');

-- --------------------------------------------------------

--
-- Table structure for table `phreport`
--

CREATE TABLE `phreport` (
  `phid` varchar(10) NOT NULL,
  `phname` varchar(20) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Report` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `phreport`
--

INSERT INTO `phreport` (`phid`, `phname`, `Title`, `Report`) VALUES
('2238', 'Dr.Kane', 'Problem regarding Patient', 'Patient is not responding');

-- --------------------------------------------------------

--
-- Table structure for table `plogin`
--

CREATE TABLE `plogin` (
  `Id` varchar(10) NOT NULL,
  `Username` text NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Location` varchar(25) NOT NULL,
  `Date of Birth` date NOT NULL,
  `Post` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plogin`
--

INSERT INTO `plogin` (`Id`, `Username`, `Email`, `Location`, `Date of Birth`, `Post`, `Password`) VALUES
('', '', '', '', '0000-00-00', '', ''),
('2345', 'Dr. Mann', 'mann122@gmail.com', 'Uttara, Dhaka', '0000-00-00', 'Health Officer', 'abcde');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Articleid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `pafavapp`
--
ALTER TABLE `pafavapp`
  ADD PRIMARY KEY (`Appointment no`);

--
-- Indexes for table `pareport`
--
ALTER TABLE `pareport`
  ADD PRIMARY KEY (`Paid`);

--
-- Indexes for table `pfavlist`
--
ALTER TABLE `pfavlist`
  ADD PRIMARY KEY (`Paid`);

--
-- Indexes for table `phfavapp`
--
ALTER TABLE `phfavapp`
  ADD PRIMARY KEY (`Appointment no`);

--
-- Indexes for table `phfavlist`
--
ALTER TABLE `phfavlist`
  ADD PRIMARY KEY (`Phid`);

--
-- Indexes for table `phreport`
--
ALTER TABLE `phreport`
  ADD PRIMARY KEY (`phid`);

--
-- Indexes for table `plogin`
--
ALTER TABLE `plogin`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
