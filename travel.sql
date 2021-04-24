-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2021 at 12:24 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `activityID` mediumint(8) UNSIGNED NOT NULL,
  `activity_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(7,2) NOT NULL,
  `location` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`activityID`, `activity_name`, `description`, `price`, `location`) VALUES
(1, '3 Days Trip', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', '200.00', 'Madrid'),
(2, 'Weekly Trip', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the ', '500.00', 'Paris'),
(3, 'Weekly Trip', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '1000.00', 'Europe'),
(4, '1 day trip', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.', '50.00', 'Paris');

-- --------------------------------------------------------

--
-- Table structure for table `booked_activities`
--

CREATE TABLE `booked_activities` (
  `activityID` mediumint(8) UNSIGNED NOT NULL,
  `customerID` mediumint(8) UNSIGNED NOT NULL,
  `date_of_activity` datetime NOT NULL,
  `number_of_tickets` mediumint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booked_activities`
--

INSERT INTO `booked_activities` (`activityID`, `customerID`, `date_of_activity`, `number_of_tickets`) VALUES
(1, 32, '2021-01-18 00:00:00', 1),
(2, 32, '2021-01-18 00:00:00', 5),
(4, 32, '2021-01-19 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` mediumint(8) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password_hash` char(255) NOT NULL,
  `customer_forename` varchar(255) NOT NULL,
  `customer_surname` varchar(255) NOT NULL,
  `customer_postcode` varchar(255) NOT NULL,
  `customer_address1` varchar(255) NOT NULL,
  `customer_address2` varchar(255) DEFAULT NULL,
  `date_of_birth` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `username`, `password_hash`, `customer_forename`, `customer_surname`, `customer_postcode`, `customer_address1`, `customer_address2`, `date_of_birth`) VALUES
(32, 'test123', '$2y$10$dKWjKERInoaH8N6gvYiAIO4l4WU3KgDmuMv/VIt96I1ArZrWAfKiq', 'test', 'test', '124', 'dsadsad', 'sdsfs', '2021-01-21 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`activityID`);

--
-- Indexes for table `booked_activities`
--
ALTER TABLE `booked_activities`
  ADD PRIMARY KEY (`activityID`,`customerID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `activityID` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
