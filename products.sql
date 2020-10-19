-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2020 at 05:34 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projectphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Product_ID` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `quantity` int(255) NOT NULL,
  `image` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Product_ID`, `name`, `description`, `price`, `quantity`, `image`) VALUES
(1, 'THE MAGIC FOUNDATION KIT', 'MAGIC COMPLEXION BRUSH ROSE GOLD & NIGHT CRIMSON', '79.00', 20, 'foundation.jpg'),
(2, 'Mini MAC Lipstick', 'COLOR: Ruby Woo - very matte vivid blue-red', '80.00', 12, 'lip.jpg'),
(3, 'Line Smoothing Concealer', 'Smooths and minimizes the appearance of fine lines for an instantly firmer look', '150.00', 16, 'concelor.jpg'),
(4, 'MakeUp Kit', 'Top cosmeticks Products', '155.00', 12, 'kit.jpeg'),
(5, 'SOFIA’S CONFIDENCE-BOOSTING MAKEUP KIT', 'A magical makeup kit featuring Sofia Tilbury’s favourite, beautifying makeup icons for your face, eyes & lips!', '214.80', 11, 'kit2.jpg'),
(6, 'FACE THE BEAT BRUSH COLLECTION', 'Filters? Don’t need ‘em. This 5-piece collection has everything you need for complexion perfection, from buffed-out foundation to killer contour and everything in between. It really is a best face scenario.', '101.00', 6, 'brush.png'),
(7, 'Moisture Surge™ 72-Hour Auto-Replenishing Hydrator', 'Gift With Purchase\r\nReceive as your free gift a full-size Moisture Surge™ Eye 96-Hour Hydro-Filler Concentrate 15ml with any $48+ Clinique moisturizer purchase. One per customer, while quantities last.', '127.00', 58, 'white.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`Product_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `Product_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
