-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2020 at 09:39 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_parking_ui`
--

-- --------------------------------------------------------

--
-- Table structure for table `parking_lot`
--

CREATE TABLE `parking_lot` (
  `id` int(10) NOT NULL,
  `name` varchar(10) NOT NULL,
  `parking_id` varchar(10) NOT NULL,
  `vehicle_no` varchar(20) NOT NULL,
  `mobile_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parking_lot`
--

INSERT INTO `parking_lot` (`id`, `name`, `parking_id`, `vehicle_no`, `mobile_no`) VALUES
(1, 'A1', '0', '', ''),
(2, 'A2', '0', '', ''),
(3, 'A3', '0', '', ''),
(4, 'A4', '0', '', ''),
(7, 'B1', '0', '', ''),
(8, 'B2', '0', '', ''),
(9, 'B3', '0', '', ''),
(10, 'B4', '0', '', ''),
(13, 'C1', '0', '', ''),
(14, 'C2', '0', '', ''),
(15, 'C3', '0', '', ''),
(16, 'C4', '0', '', ''),
(19, 'D1', '0', '', ''),
(20, 'D2', '0', '', ''),
(21, 'D3', '0', '', ''),
(22, 'D4', '0', '', ''),
(25, 'E1', '0', '', ''),
(26, 'E2', '0', '', ''),
(27, 'E3', '0', '', ''),
(28, 'E4', '0', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `parking_id` int(11) NOT NULL,
  `parking_status` varchar(20) NOT NULL,
  `parking_color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`parking_id`, `parking_status`, `parking_color`) VALUES
(0, 'Vacant', 'btn-light'),
(1, 'Occupied', 'btn-danger');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parking_lot`
--
ALTER TABLE `parking_lot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`parking_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parking_lot`
--
ALTER TABLE `parking_lot`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
