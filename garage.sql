-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 12:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `garage`
--

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(30) NOT NULL,
  `plate` varchar(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(30) NOT NULL,
  `model` varchar(30) NOT NULL,
  `service` varchar(30) NOT NULL,
  `engine` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `Status` varchar(30) NOT NULL DEFAULT 'arriving'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `plate`, `name`, `phone`, `model`, `service`, `engine`, `date`, `Status`) VALUES
(1, 'DD12345678', 'Adrian Rico', 1234567890, 'Volkswagen', 'Major Service', 'Petrol', '2023-01-08', 'arriving'),
(2, 'DD12345679', 'Pacheco Leal', 1234567891, 'Ford ', 'Anual', 'Electric', '2023-01-19', 'working'),
(3, 'DD12345677', 'Carlos magana', 1234567892, 'Volkswagen', 'Major Service', 'Hybrid', '2023-01-25', 'arriving'),
(4, 'DD12345673', 'Omar Rico', 1234567896, 'Nissan', 'Repair-Fault', 'Diesel', '2023-01-22', 'ready'),
(5, 'DD12345672', 'Karina Melendez', 2147483647, 'Nissan', 'Major Repair', 'Petrol', '2023-01-26', 'working'),
(6, 'DD12345678', 'Omar Rico', 1234567890, 'Skoda', 'Anual', 'Petrol', '1998-05-01', 'arriving'),
(7, 'DD12345678', 'Omar Rico', 1234567890, 'Volkswagen', 'Major Service', 'Petrol', '2023-01-14', 'working'),
(8, 'DD12345678', 'Omar Rico', 1234567890, 'Volkswagen', 'Major Service', 'Petrol', '2023-01-14', 'ready'),
(9, 'DD12345678', 'Omar Rico', 1234567890, 'Volkswagen', 'Major Service', 'Petrol', '2023-01-14', 'arriving'),
(10, 'DD12345679', 'Omar Rico', 1234567890, 'Volkswagen', 'Repair-Fault', 'Diesel', '2023-01-26', 'working'),
(11, 'DD12345672', 'Kareina', 1234567890, 'Skoda', 'Major Repair', 'Electric', '2023-01-27', 'arriving'),
(12, 'DD12345677', 'Karina Melendez', 1234567890, 'Ford ', 'Major Repair', 'Petrol', '2023-01-26', 'arriving'),
(13, 'DD12345679', 'Omar Rico', 830518728, 'Volkswagen', 'Repair-Fault', 'Petrol', '2023-01-26', 'working'),
(14, 'DD12345677', 'Omar ', 1234567890, 'Ford ', 'Major Service', 'Diesel', '2023-01-20', 'ready'),
(15, 'DD12345673', 'Juan escutia', 1234567893, 'Skoda', 'Anual', 'Diesel', '2023-01-23', 'arriving'),
(16, 'DD12345677', 'Omar Rico', 1234567890, 'Skoda', 'Major Service', 'Hybrid', '2023-01-26', 'ready'),
(17, 'DD12345678', 'Omar Rico', 1234567890, 'Volkswagen', 'Major Service', 'Petrol', '2023-01-08', 'working');

-- --------------------------------------------------------

--
-- Table structure for table `services2`
--
-- Error reading structure for table garage.services2: #1932 - Table 'garage.services2' doesn't exist in engine
-- Error reading data for table garage.services2: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `garage`.`services2`' at line 1

-- --------------------------------------------------------

--
-- Table structure for table `statustable`
--

CREATE TABLE `statustable` (
  `id` int(30) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'arriving'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `statustable`
--

INSERT INTO `statustable` (`id`, `status`) VALUES
(0, 'arriving'),
(0, 'arriving'),
(0, 'arriving'),
(0, 'arriving'),
(0, 'arriving'),
(3, 'arriving'),
(0, 'arriving'),
(0, 'arriving'),
(0, 'arriving'),
(0, 'arriving');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
