-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2023 at 07:12 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactdetails`
--

CREATE TABLE `contactdetails` (
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `contact_no` varchar(10) DEFAULT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `massage` varchar(255) DEFAULT NULL,
  `date_time` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactdetails`
--

INSERT INTO `contactdetails` (`fullname`, `email`, `contact_no`, `subject`, `massage`, `date_time`) VALUES
('Kundan kumar', 'kr868606@gmail.com', '7991138707', 'Demo', 'Hello\r\nGood Evening', ''),
('Kundan kumar', 'kr868606@gmail.com', '7991138707', 'Demo', 'Hello\r\nGood Evening', ''),
('Kundan kumar', 'kr868606@gmail.com', '7991138707', 'Demo2', 'hii..\r\ngood evening', ''),
('Kundan kumar', 'kr868606@gmail.com', '7991138707', 'Demo2', 'hii..\r\ngood evening', ''),
('Kd', 'kd@gmail.com', '8565659856', 'demo3', 'ygghjkhjkl', '2022-01-05 13:28:41'),
('Kd', 'kd@gmail.com', '8565659856', 'demo3', 'ygghjkhjkl', 'Wed-01-22 13:29:43'),
('Kd', 'kd@gmail.com', '8565659856', 'demo3', 'ygghjkhjkl', '0505-0101-22222222 13:30:'),
('Kd', 'kd@gmail.com', '8565659856', 'demo3', 'ygghjkhjkl', '05-01-22 13:31:05'),
('Kd', 'kd@gmail.com', '8565659856', 'demo3', 'ygghjkhjkl', '05-01-22 13:34:31');

-- --------------------------------------------------------

--
-- Table structure for table `logedmember`
--

CREATE TABLE `logedmember` (
  `sr_no` int(100) NOT NULL,
  `member_name` varchar(50) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `memb` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logedmember`
--

INSERT INTO `logedmember` (`sr_no`, `member_name`, `password`, `memb`) VALUES
(1, 'Admin', 'admin@123', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `date_time` varchar(30) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `contact_no` varchar(12) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `items` varchar(100) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL,
  `total_price` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`date_time`, `name`, `contact_no`, `address`, `items`, `price`, `qty`, `total_price`) VALUES
('06-01-22 08:16:26', 'Kundan Kumar', '7991138707', 'Biharsharif', 'Rasgulla', '15', '10', '150'),
('06-01-22 08:37:35', 'Rahul Kumar', '9866558966', 'Delhi', 'Haldirams Mixture', '20', '5', '100'),
('06-01-22 08:39:23', 'Sonu Verma', '9656555656', 'Ranchi', 'Ghevar', '1000', '2', '2000'),
('06-01-22 08:43:34', 'Raju Kumar', '9865626523', 'Patna', 'Motichur Laddu', '230', '2', '460'),
('06-01-22 08:44:57', 'Mohit Sharma', '7568956552', 'Biharsharif', 'Rasmalai', '25', '20', '500'),
('06-01-22 08:46:02', 'Santosh Kumar', '9568956552', 'Biharsharif', 'Rabdi', '30', '12', '360'),
('06-01-22 08:47:50', 'Vivek G', '9285652152', 'Biharsharif', 'Samosa', '8', '20', '160'),
('06-01-22 12:31:15', 'Jitendra Kumar', '6225565235', 'Nawada', 'Jalebi', '100', '2', '200'),
('07-01-22 03:45:46', 'Ashutosh', '7565959559', 'Biharsharif', 'Momos', '10', '5', '50'),
('18-01-22 17:03:57', 'Neeraj Kumar', '9856235696', 'Biharsharif', 'Gulab Jamun', '10', '5', '50'),
('21-12-22 05:22:35', 'aditya kumar', '9656586265', 'Biharsharif', 'kurkure', '10', '5', '50'),
('01-02-23 17:51:43', 'demo', '9326565666', 'bsf', 'Rasgulla', '15', '10', '150');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logedmember`
--
ALTER TABLE `logedmember`
  ADD PRIMARY KEY (`sr_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
