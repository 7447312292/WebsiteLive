-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2024 at 03:35 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `Id` int(20) NOT NULL,
  `comp_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mob_num` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` varchar(20) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`Id`, `comp_name`, `email`, `mob_num`, `password`, `city`, `pincode`, `message`) VALUES
(1, 'llllllllllll', 'rajat@gmail.com', '1234567891', '123', 'ppuppup', '123456', 'ppppppppppppppppp'),
(2, 'raahh', 'rajat@gmail.com', '1234567891', '123', 'ffffffffffffffff', '123456', 'lllllllllllllllllllllllll'),
(3, 'rrrrrrrrrr', 'rajat@gmail.com', '1234567891', '123', 'fffffff', '441122', 'fffffffffffffffffff'),
(4, 'animesh', 'animesh@gmail.com', '1234567891', '1234', 'kalmeshwar', '441122', 'absent'),
(5, 'qrcompany', 'QR@gmail.com', '8623014953', '123', 'nagpur', '777777', 'llllllllllllll'),
(6, 'rajat111', 'rajat@gmail.com', '7447312292', '123', 'lllllllllllllllllll', '441144', 'popopopp');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('rajat', 'ganorkar'),
('rajat', 'ganorkar');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
