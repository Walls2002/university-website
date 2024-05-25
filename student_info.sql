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
-- Database: `student_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_info`
--

CREATE TABLE `course_info` (
  `Course_code` varchar(4) NOT NULL,
  `Course_description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_info`
--

INSERT INTO `course_info` (`Course_code`, `Course_description`) VALUES
('BSIT', 'Bachelor of Science in Information Technology'),
('BSEE', 'Bachelor of Science in Electronics Engineering'),
('BSIE', 'Bachelor of Science in Industrial Engineering'),
('BSE', 'Bachelor of Science in Entrepreneurship'),
('BSA', 'Bachelor of Science in Accountancy');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` varchar(11) NOT NULL,
  `Lastname` varchar(50) NOT NULL,
  `Firstname` varchar(50) NOT NULL,
  `Middlename` varchar(50) NOT NULL,
  `Course_code` varchar(4) NOT NULL,
  `DateAdded` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `Lastname`, `Firstname`, `Middlename`, `Course_code`, `DateAdded`) VALUES
('20-1113', 'Perez', 'Manny', 'Deprisa', 'BSE', '2021-09-30 02:22:48'),
('20-1286', 'Bergonia', 'John Lester', 'Barrameda', 'BSEE', '2021-09-30 01:46:50'),
('20-1308', 'Cabujat', 'Devin', 'Labado', 'BSE', '2021-09-30 02:22:48'),
('20-1372', 'Espelita', 'Dan Joseph', 'Toledano', 'BSA', '2021-09-30 02:20:09'),
('20-1380', 'Fallaria', 'Princess Julla', 'Canlas', 'BSE', '2021-09-30 02:22:48'),
('20-1400', 'Garcia', 'Janice', 'Peru', 'BSIT', '2021-09-30 01:53:37'),
('20-1411', 'Gozo', 'Marvin', 'Odon', 'BSA', '2021-09-30 02:20:09'),
('20-1427', 'Panis', 'Darryl', 'Crisostomo', 'BSA', '2021-09-30 02:20:09'),
('20-1524', 'Bustamante', 'Kirsten Rain', 'Saldo', 'BSA', '2021-09-30 02:20:09'),
('20-1531', 'Rana', 'Alicia', 'Igdalino', 'BSIE', '2021-09-30 01:44:23'),
('20-1554', 'Baguio', 'Jonzyl Leonard Andrei', 'Mortera', 'BSEE', '2021-09-30 01:45:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
