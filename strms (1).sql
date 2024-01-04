-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 09:54 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `strms`
--

-- --------------------------------------------------------

--
-- Table structure for table `aidmn`
--

CREATE TABLE `aidmn` (
  `id` int(11) NOT NULL,
  `stname` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aidmn`
--

INSERT INTO `aidmn` (`id`, `stname`, `email`, `password`) VALUES
(1, 'aidmn', 'aidmn@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `rno` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `p1` varchar(20) NOT NULL,
  `p2` varchar(20) NOT NULL,
  `p3` varchar(20) NOT NULL,
  `p4` varchar(20) NOT NULL,
  `p5` varchar(20) NOT NULL,
  `marks` int(20) NOT NULL,
  `percentage` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `name`, `rno`, `class`, `p1`, `p2`, `p3`, `p4`, `p5`, `marks`, `percentage`) VALUES
(1, 'dani', '1', 'BSCS', '50', '60', '75', '63', '45', 293, ' 58.6 '),
(2, 'ali', '2', 'BSCS', '50', '77', '55', '30', '40', 252, ' 50.4 '),
(3, 'saim', '4', 'BSIT', '80', '77', '40', '30', '40', 267, ' 53.4 ');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `subjectname` varchar(30) NOT NULL,
  `subject1` varchar(20) NOT NULL,
  `subject2` varchar(20) NOT NULL,
  `subject3` varchar(20) NOT NULL,
  `subject4` varchar(20) NOT NULL,
  `subject5` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subjectname`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`) VALUES
(1, 'Math', '', 'islamiyat', 'programming', 'automaita', 'DLD');

-- --------------------------------------------------------

--
-- Table structure for table `tblclass`
--

CREATE TABLE `tblclass` (
  `id` int(11) NOT NULL,
  `classname` varchar(20) NOT NULL,
  `session` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblclass`
--

INSERT INTO `tblclass` (`id`, `classname`, `session`) VALUES
(4, 'BSCS', '19-24'),
(5, 'BSCS', '19-24'),
(7, 'BS MLT', '18-23');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudent`
--

CREATE TABLE `tblstudent` (
  `id` int(11) NOT NULL,
  `stname` varchar(20) NOT NULL,
  `ftname` varchar(20) NOT NULL,
  `rollnumber` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `class` varchar(20) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblstudent`
--

INSERT INTO `tblstudent` (`id`, `stname`, `ftname`, `rollnumber`, `email`, `password`, `gender`, `class`, `dob`) VALUES
(1, 'm faizan', 'abxx', '1', 'fazzii4523@gmail.com', '12345', 'Male', 'BSCS', '2023-11-14'),
(2, 'fahim', 'abcd', '2', 'fahim@gmail.com', '2345', 'Male', 'BSMLT', '2023-10-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aidmn`
--
ALTER TABLE `aidmn`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblclass`
--
ALTER TABLE `tblclass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblstudent`
--
ALTER TABLE `tblstudent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aidmn`
--
ALTER TABLE `aidmn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblclass`
--
ALTER TABLE `tblclass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tblstudent`
--
ALTER TABLE `tblstudent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
