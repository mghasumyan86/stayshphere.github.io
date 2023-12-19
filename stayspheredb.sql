-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 11:36 PM
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
-- Database: `stayspheredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(11) NOT NULL,
  `roomType` varchar(20) NOT NULL,
  `roomPrice` decimal(10,2) NOT NULL,
  `availabilityStatus` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `roomType`, `roomPrice`, `availabilityStatus`) VALUES
(1, 'Single', 100.00, 'Booked'),
(2, 'Double', 150.00, 'Booked'),
(3, 'Suite', 200.00, 'Booked'),
(4, 'Deluxe', 180.00, 'Booked'),
(5, 'Single', 120.00, 'Booked'),
(6, '2', 0.00, 'Avaiable'),
(7, 'Master', 300.00, 'Booked'),
(8, 'Single', 400.00, 'Booked'),
(201, 'Single', 110.00, 'Available'),
(203, 'Suite', 220.00, 'Available'),
(204, 'Single', 130.00, 'Available'),
(206, 'Suite', 240.00, 'Available'),
(208, 'Double', 170.00, 'Available'),
(209, 'Suite', 200.00, 'Available'),
(211, 'Single ', 100.00, 'Available'),
(212, 'Double ', 150.00, 'Available'),
(213, ' Suite', 250.00, 'Available'),
(214, 'Master', 200.00, 'Available');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=215;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
