-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 20, 2021 at 08:29 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luncheon`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `date` date NOT NULL,
  `option1` varchar(128) NOT NULL,
  `option2` varchar(128) NOT NULL,
  `option3` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderId` int(11) NOT NULL,
  `orderDate` varchar(128) NOT NULL,
  `orderItem` varchar(128) NOT NULL,
  `userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderId`, `orderDate`, `orderItem`, `userId`) VALUES
(52, '1/20/2022', 'Butter Chicken and Naan', 9),
(53, '12/31/2021', 'Samosa', 9),
(54, '1/5/2022', 'Pizza', 9),
(55, '12/30/2021', 'Grilled Cheese Sandwich', 9),
(56, '1/14/2022', 'Caesar', 9),
(57, '1/14/2022', 'Burrito', 9),
(58, '4/7/2022', 'Pasta', 9),
(59, '12/20/2021', 'Grilled Cheese Sandwich', 10),
(60, '12/24/2021', 'Pasta', 10),
(61, '1/29/2022', 'Caesar', 10),
(62, '1/6/2022', 'Hamburger', 10),
(63, '12/30/2021', 'Lasagna', 10),
(64, '12/23/2021', 'Samosa', 10),
(65, '3/19/2022', 'Caesar', 10),
(66, '12/8/2021', 'Caesar', 10),
(67, '1/7/2022', 'Pizza', 11),
(68, '4/8/2022', 'Grilled Cheese Sandwich', 11),
(69, '1/21/2022', 'Caesar', 11),
(70, '2/2/2023', 'Hamburger', 11),
(71, '12/8/2021', 'Pasta', 11),
(72, '12/19/2021', 'Grilled Cheese Sandwich', 11),
(73, '12/16/2021', 'Caesar', 12),
(74, '1/14/2022', 'Burrito', 12),
(75, '12/25/2021', 'Burrito', 12),
(76, '4/2/2022', 'Samosa', 12),
(77, '8/12/2022', 'Lasagna', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `usersId` int(11) NOT NULL,
  `usersFirstName` varchar(128) NOT NULL,
  `usersLastName` varchar(128) NOT NULL,
  `usersIdNum` int(11) NOT NULL,
  `usersUid` varchar(128) NOT NULL,
  `usersPwd` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`usersId`, `usersFirstName`, `usersLastName`, `usersIdNum`, `usersUid`, `usersPwd`) VALUES
(9, 'Adrish ', 'Kar', 100100, 'akar', '$2y$10$DrvA.m8Er1da33J5ljMdn.MYPcbUlsgeiozsi8lEFtyI8Yp7jQKo2'),
(10, 'Chakshan', 'Kothakota', 162534, 'theGOAT', '$2y$10$GB9.hpLLBEqj.H2GpPb/oOw9TwyPl3fez/9B4P.gP7naK4VtFzpOy'),
(11, 'Atharv', 'Gupta', 12341234, 'atharv', '$2y$10$X5aeUy28pNY6nL7kE/2jLOAjTNqVjNOexBtxTl5u0TNekBawqaKVC'),
(12, 'Test', 'Test', 1234245, 'test', '$2y$10$QP4DXCiteq0c234g68tckeHQV4ZJDiFkdgn9bGqRSo3SlzizJM4US');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`usersId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `usersId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
