-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2024 at 04:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drugcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `adduser`
--

CREATE TABLE `adduser` (
  `id` int(11) NOT NULL,
  `newuser` varchar(50) NOT NULL,
  `newemail` varchar(50) NOT NULL,
  `newpassword` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `adduser`
--

INSERT INTO `adduser` (`id`, `newuser`, `newemail`, `newpassword`, `user_type`) VALUES
(1, 'abdullah khan', 'abdullah@gmail.com', '12345', ''),
(2, 'abrahim khan', 'abrahim@yahoo.com', '1234567', ''),
(3, 'masood khan', 'masood@yahoo.com', '123456', ''),
(4, 'Asim ali', 'asim@hotmail.com', '09876', ''),
(5, 'junaid', 'junaid@gmail.com', '123456789', '');

-- --------------------------------------------------------

--
-- Table structure for table `druglogin`
--

CREATE TABLE `druglogin` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `druglogin`
--

INSERT INTO `druglogin` (`id`, `email`, `password`, `user_type`) VALUES
(1, 'abc@gmail.com', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `form5`
--

CREATE TABLE `form5` (
  `id` int(11) NOT NULL,
  `store_name` varchar(100) NOT NULL,
  `store_owner` varchar(50) NOT NULL,
  `store_address` varchar(100) NOT NULL,
  `drugs_name` varchar(100) NOT NULL,
  `manufacturer` varchar(50) NOT NULL,
  `registeration` int(20) NOT NULL,
  `batch` varchar(30) NOT NULL,
  `quantity` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `form5`
--

INSERT INTO `form5` (`id`, `store_name`, `store_owner`, `store_address`, `drugs_name`, `manufacturer`, `registeration`, `batch`, `quantity`) VALUES
(1, 'dha main store', 'shah khalid', 'inside dhq hospital bajaur', 'inj oxytocycin', 'amman pharma', 74981, '0x-492', 150),
(2, 'naveed medicose', 'naveed', 'pabbi', 'carsel 50', 'abbott', 989, '0x-492', 120),
(3, 'naveed medicose', 'naveed', 'pabbi', 'carsel 50', 'abbott', 989, '0x-492', 120);

-- --------------------------------------------------------

--
-- Table structure for table `store`
--

CREATE TABLE `store` (
  `id` int(11) NOT NULL,
  `storename` varchar(50) NOT NULL,
  `ownername` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `drugs` text NOT NULL,
  `reg` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `store`
--

INSERT INTO `store` (`id`, `storename`, `ownername`, `address`, `drugs`, `reg`) VALUES
(19, 'karachi', 'naveed', 'karachi', 'sustac', '123cv'),
(20, 'wahid medicose', 'wahad', 'peshawer', 'qarshi', '123cv'),
(21, 'sarhad pharmacy', 'Aslam', 'pindi', 'espanol', '3456hyu'),
(22, 'pappu medicose', 'pappu', 'Islamabad', 'tablets', '3456hyu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adduser`
--
ALTER TABLE `adduser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `druglogin`
--
ALTER TABLE `druglogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form5`
--
ALTER TABLE `form5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `store`
--
ALTER TABLE `store`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adduser`
--
ALTER TABLE `adduser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `druglogin`
--
ALTER TABLE `druglogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `form5`
--
ALTER TABLE `form5`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `store`
--
ALTER TABLE `store`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
