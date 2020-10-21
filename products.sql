-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 06:41 PM
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
(1, 'IDEALLEAN WORKOUT BUNDLE', 'These three products are the triple threat you need for amazing workouts, fast recovery, and spectacular results.', '180.00', 16, '3.jpg'),
(3, 'Clear Whey Isolates', 'A refreshing and juicy post-workout protein boost', '150.00', 16, '3.jpg'),
(4, 'IDEALLEAN BCAAS - RASPBERRY LEMONADE', 'In addition to providing high-quality BCAAs in a proven 2:1:1 ratio, IdealLean BCAAs amplifies weight loss with its IdealLean Fat Loss Blend with ingredients', '155.00', 12, '4.jpg'),
(5, 'JUICE PLUS+®\r\nVINEYARD BLEND CHEWABLES', 'The chewables contains no artificial flavors or artificial colors and are 100% vegetarian; the chewy texture comes from fruit pectins, not gelatin.', '214.00', 11, '5.jpg'),
(6, 'IDEALLEAN PROTEIN', 'We want to make sure our protein is high quality and helps women to reach their goals and get the best nutrition. That why all of our IdealLean Whey Protein is Labdoor quality approved, passing Labdoor tests for both accuracy and purity!', '101.00', 6, '6.png'),
(7, 'THE Plant Protein', 'Harness the power of plants to achieve your fitness goals', '127.00', 18, '7.jpg'),
(8, 'IDEALLEAN WORKOUT BUNDLE', 'These three products are the triple threat you need for amazing workouts, fast recovery, and spectacular results.', '150.00', 16, 'new.jpg');

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
  MODIFY `Product_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
