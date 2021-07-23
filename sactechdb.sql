-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2021 at 07:19 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sactechdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(10) NOT NULL,
  `userid` int(10) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` int(20) NOT NULL,
  `pdescription` varchar(255) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date_add` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `userid`, `product_name`, `price`, `pdescription`, `quantity`, `date_add`) VALUES
(1, 1, 'Infinix HOT 10', 50000, 'A mobile phone with quality, strong and lost lasting battery.', 5, '2021-07-18'),
(2, 1, 'HP Desktop Computer', 125000, 'Desktop, 4GB RAM, HDD-700GB, 2GB Hz', 4, '2021-07-18'),
(5, 2, 'Calculator', 3000, 'Mathematical tool for making any type of calculations.', 20, '2021-07-18'),
(6, 0, 'HP SD Card', 2500, 'A durable storage device', 10, '2021-07-18'),
(7, 0, 'Keyboard', 1500, 'Wireless Keyboard', 5, '2021-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(10) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `registerAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `fullName`, `username`, `email`, `phone`, `password`, `registerAt`) VALUES
(1, 'Saka Sheriff Alade', 'sheriff', 'adetunji_alade2005@yahoo.com', '08033618259', 'Adetunji', '2021-07-16 11:41:16'),
(2, 'Musa Adamu Isa', 'musaadamu', 'musaadamu@yahoo.com', '08099778866', '12345678', '2021-07-17 09:35:42'),
(5, 'Ismail Ismail', 'ismailmic', 'ismail@yahoo.com', '08077665566', '123456', '2021-07-17 09:42:55'),
(6, 'Abdullahi Sheriff', 'abdullahi', 'abdullahi123@gmail.com', '08056176735', '1234567', '2021-07-17 09:47:46'),
(8, 'Abdullahi Ibrahim', 'abdulibro', 'abdullahi@gmail.com', '08056176735', '123456', '2021-07-17 09:54:57'),
(9, 'Mubarak Sheriff', 'mubarak', 'mubarak1@gmail.com', '', '1234567', '2021-07-17 16:50:36'),
(10, 'sulaima sheriff', 'sulaiman1', 'sulaiman@gmail.com', '', '3460d81e02faa3559f9e02c9a766fcbd', '2021-07-17 16:57:37'),
(11, 'Sani Sani', 'sani', 'sani@yahoo.com', '08055555555', 'e807f1fcf82d132f9bb018ca6738a19f', '2021-07-17 17:27:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`),
  ADD UNIQUE KEY `product_name` (`product_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
