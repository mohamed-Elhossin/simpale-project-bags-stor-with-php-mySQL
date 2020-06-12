-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2020 at 03:51 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `pass`) VALUES
(1, 'toma', 123),
(3, 'reem', 5050);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(13) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  `quantity` int(5) DEFAULT NULL,
  `proid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `name`, `email`, `phone`, `adress`, `quantity`, `proid`) VALUES
(1, 'ahmed', 'sdfkl', 464864, 'dfnvkjd', 3, 0),
(2, 'ahmed', 'sdfkl', 464864, 'dfnvkjd', 3, 0),
(3, 'mohamed', 'hamadalord69@yahoo.com', 117433885, 'dmakmfkm', 50, 50),
(4, 'mohamed el hossin', 'hamadalord69@yahoo.com', 117433885, 'dmakmfkm', 90, 15),
(5, 'reem ashraf', 'ramroma_hotmail@yahoo.com', 117433885, 'dmakmfkm', 2, 24),
(6, 'mohamed', 'hamadalord69@yahoo.com', 117433885, 'dmakmfkm', 9, 80),
(7, 'Ø´Ø¨Ø³ÙŠ', 'hamadalord69@yahoo.com', 117433885, 'dmakmfkm', 555555, 55555);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(20000) NOT NULL,
  `desc` varchar(20000) NOT NULL,
  `price` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `img`, `desc`, `price`, `category`) VALUES
(31, 'Ø´Ø¨Ø³ÙŠ', 'b6.jpg', ' kdmfk d', 2147483647, 'female'),
(32, 'bags b9', 'b2.jpg', ' amkvlmdffmdv', 90000, 'male'),
(33, 'mohamed el hossin', 'b7.jpg', ' kfvlmkdsmfl', 80000, 'female'),
(34, 'mohamed', 'b9.jpg', ' kdfmvlfds', 8000, 'male'),
(35, 'mfkvlmfdksl', 'b10.jpg', ' fkdmls', 9900, 'female'),
(36, 'mohamed', 'bag.jpg', ' mdklfmbk', 80002, 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
