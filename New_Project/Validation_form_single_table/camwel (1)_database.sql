-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 09:17 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `camwel`
--

-- --------------------------------------------------------

--
-- Table structure for table `emp`
--

CREATE TABLE `emp` (
  `id` int(11) NOT NULL,
  `salary` int(11) NOT NULL,
  `job` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `emp`
--

INSERT INTO `emp` (`id`, `salary`, `job`) VALUES
(97, 15000, 'Coder'),
(99, 5000000, 'ffffffff'),
(100, 50000000, 'Star');

-- --------------------------------------------------------

--
-- Table structure for table `p1_form`
--

CREATE TABLE `p1_form` (
  `id` int(11) NOT NULL,
  `name` varchar(111) NOT NULL,
  `fname` varchar(111) NOT NULL,
  `email` varchar(111) NOT NULL,
  `mobno` varchar(111) NOT NULL,
  `gender` varchar(111) NOT NULL,
  `date` date NOT NULL,
  `course` varchar(111) NOT NULL,
  `yf` date NOT NULL,
  `yt` date NOT NULL,
  `address` varchar(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `p1_form`
--

INSERT INTO `p1_form` (`id`, `name`, `fname`, `email`, `mobno`, `gender`, `date`, `course`, `yf`, `yt`, `address`) VALUES
(97, 'Munna Prasad', 'Babu', 'munnaprasad@gmail.com', ' 9876543234', 'male', '2023-03-30', 'M.Com', '2023-04-08', '2023-04-27', 'Rajgir Nalanda '),
(100, 'Ram ', 'Chran', 'ram@gmail.com', ' 8765456789', 'male', '2023-04-20', 'M.Com', '2023-04-13', '2023-04-14', 'Nalanda');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `emp`
--
ALTER TABLE `emp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p1_form`
--
ALTER TABLE `p1_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `emp`
--
ALTER TABLE `emp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `p1_form`
--
ALTER TABLE `p1_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
