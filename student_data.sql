-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2022 at 06:10 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Id` int(20) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `gender` text NOT NULL,
  `course` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`Id`, `firstname`, `lastname`, `birthday`, `gender`, `course`, `email`, `password`) VALUES
(45, 'wallie', 'gaynor', '2021-02-15', 'Male', 'BS Information Technology', 'gaynor.wally29@gmail.com', '733b5e6a2e24f2764086325a28b6013d'),
(46, 'wallie', 'gaynor', '2021-02-10', 'Male', 'BS Information Technology', 'walli_gaynor@yahoo.com', '733b5e6a2e24f2764086325a28b6013d'),
(47, 'wallie', 'gaynor', '2021-02-18', 'Male', 'BS Computer Science', 'gaynor@yahoo.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(48, 'WALLY BOY', 'GAYNOR', '2022-10-06', 'Male', 'BS Accountancy', 'gaynor.wally299@gmail.com', 'b2c761745e2d9ac8c4d0110be84a309f');

-- --------------------------------------------------------

--
-- Table structure for table `message_db`
--

CREATE TABLE `message_db` (
  `msg#` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message_db`
--

INSERT INTO `message_db` (`msg#`, `name`, `email`, `message`) VALUES
(7, 'wallie', 'awdwad', 'adwadadaw'),
(8, 'wallie', 'walli_gaynor@yahoo.com', 'MAAM ITO NAPO YUNG DATABASE PHP FOR CONTACT US');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `StudentNumber` int(11) NOT NULL,
  `FullName` text DEFAULT NULL,
  `Subject` text DEFAULT NULL,
  `Grade` int(11) DEFAULT NULL,
  `Remarks` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`StudentNumber`, `FullName`, `Subject`, `Grade`, `Remarks`) VALUES
(2001, 'Adalgard Isaiah  ', 'SocSci', 78, 'Passed'),
(2002, 'Ferdinánd Mina   ', 'SocSci', 77, 'Passed'),
(2003, 'Gregor Fatma     ', 'SocSci', 95, 'Passed'),
(2004, 'Bitrus Aigul     ', 'Math', 75, 'Passed'),
(2005, 'Blanka Ranj      ', 'Math', 71, 'Failed'),
(2006, 'Arlo Ofra        ', 'Math', 68, 'Failed'),
(2007, 'Pavel Sorcha     ', 'Science', 63, 'Failed'),
(2008, 'Linda Ethelbert  ', 'Science', 96, 'Passed'),
(2009, 'Sakurako Ville   ', 'Filipino', 66, 'Failed'),
(2010, 'Carolien Ratna   ', 'Filipino', 77, 'Passed'),
(2011, 'Deena Florentino ', 'Filipino', 73, 'Failed'),
(2012, 'Águeda Menahem   ', 'English', 82, 'Passed'),
(2013, 'Tanesha Meera    ', 'English', 97, 'Passed'),
(2014, 'Tuule Laurena    ', 'P.E', 95, 'Passed'),
(2015, 'Serafim Desiderio', 'P.E', 90, 'Passed'),
(2016, 'Zejneb Jacob     ', 'SocSci', 86, 'Passed'),
(2017, 'Diletta Hubert   ', 'SocSci', 97, 'Passed'),
(2018, 'Krištof Mato     ', 'SocSci', 85, 'Passed'),
(2019, 'Tage Shanna      ', 'SocSci', 97, 'Passed'),
(2020, 'Ihar Edgardo     ', 'SocSci', 86, 'Passed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `message_db`
--
ALTER TABLE `message_db`
  ADD PRIMARY KEY (`msg#`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`StudentNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `message_db`
--
ALTER TABLE `message_db`
  MODIFY `msg#` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
