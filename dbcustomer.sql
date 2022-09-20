-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 10:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcustomer`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `sr` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`sr`, `name`, `email`, `message`) VALUES
(1, 'Suchika', 'suchika420@gmail.com', 'What is the rate of interest?'),
(2, 'Hazel', 'hazel143@gmail.com', 'How old is this bank?'),
(3, 'Sabeeha', 'sabee20@gmail.com', 'Can I get a loan?'),
(19, 'Radha', 'radhapk@gmail.com', 'this is my new contact email id.');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `sr` int(11) NOT NULL,
  `sender` varchar(10) NOT NULL,
  `receiver` varchar(10) NOT NULL,
  `amount` bigint(20) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`sr`, `sender`, `receiver`, `amount`, `status`) VALUES
(1, '123456789', '58546574', 2000, 'succeed'),
(2, '123456787', '112456789', 0, 'failed'),
(4, '123456788', '546321789', 1000, 'succeed'),
(5, '492041278', '123456777', 0, 'failed'),
(6, '123456787', '98745612', 0, 'failed'),
(7, '546321789', '123456788', 2000, 'succeed'),
(8, '123456678', '123456789', 5000, 'succeed'),
(9, '123456777', '58546574', 14000, 'failed'),
(10, '112456789', '123456777', 0, 'failed'),
(11, '112456789', '98745612', 99500, 'succeed'),
(12, '123456788', '123456678', 500, 'succeed'),
(13, '492041278', '58546574', 8000, 'succeed'),
(14, '98745612', '123456788', 2500, 'succeed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `sr` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `accno` varchar(10) NOT NULL,
  `blc` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`sr`, `name`, `email`, `accno`, `blc`) VALUES
(3, 'Ritika Mishra', 'ritika@gmail.com', '123456789', 30000),
(4, 'Neha J', 'nehalol@gmail.com', '123456788', 25000),
(5, 'Suchi', 'suchi@gmail.com', '123456777', 100000),
(6, 'Kirti Singh', 'kirti@gmail.com', '123456787', 200000),
(7, 'IshitaTripathi', 'ishita@gmail.com', '58546574', 18625),
(8, 'Ramya J', 'ramya@gmail.com', '492041278', 24157),
(9, 'Prachi', 'prachi@gmail.com', '123456678', 163000),
(10, 'Virat', 'virat@gmail.com', '112456789', 157890),
(11, 'Rohan', 'rohan@gmail.com', '98745612', 150090),
(12, 'Nikhil', 'nikhil@gmail.com', '546321789', 256000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`sr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `sr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
