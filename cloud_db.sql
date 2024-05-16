-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2024 at 12:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloud_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(15) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_desc` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `units` int(5) NOT NULL,
  `total` int(15) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_code`, `product_name`, `product_desc`, `price`, `units`, `total`, `date`, `email`) VALUES
(14, 'TAR3', 'Yarn and Bear Plushie Bundle', 'Bouquet made from yarn, along with plushie bears', 100, 1, 100, '2024-05-14 15:45:21', 'joelwsy-pm22@student.tarc.edu.my'),
(15, 'TAR5', 'Personalised Necklace', 'Customise your own necklace', 39, 3, 117, '2024-05-15 08:06:47', 'joelwsy-pm22@student.tarc.edu.my'),
(16, 'TAR2', 'Mika Graduation Bear Bouquet', 'Graduation Bear plushies', 139, 2, 278, '2024-05-15 08:13:05', 'ganzl-pm22@student.tarc.edu.my'),
(17, 'TAR2', 'Mika Graduation Bear Bouquet', 'Graduation Bear plushies', 139, 1, 139, '2024-05-15 08:24:45', 'ganzl-pm22@student.tarc.edu.my'),
(18, 'TAR9', 'Fairywell Sunflower', 'Sunflower bouquet', 120, 1, 120, '2024-05-15 08:24:53', 'ganzl-pm22@student.tarc.edu.my'),
(19, 'TAR2', 'Mika Graduation Bear Bouquet', 'Graduation Bear plushies', 139, 1, 139, '2024-05-15 08:29:19', 'ganzl-pm22@student.tarc.edu.my'),
(20, 'TAR5', 'Personalised Necklace', 'Customise your own necklace', 39, 1, 39, '2024-05-15 08:33:14', 'ganzl-pm22@student.tarc.edu.my'),
(21, 'TAR6', 'Personalised Keychains', 'Customise your own keychains', 19, 1, 19, '2024-05-15 08:35:25', 'ganzl-pm22@student.tarc.edu.my'),
(22, 'TAR2', 'Mika Graduation Bear Bouquet', 'Graduation Bear plushies', 139, 1, 139, '2024-05-15 09:56:52', 'ganzl-pm22@student.tarc.edu.my'),
(23, 'TAR6', 'Personalised Keychains', 'Customise your own keychains', 19, 1, 19, '2024-05-15 10:05:32', 'ganzl-pm22@student.tarc.edu.my'),
(24, 'TAR3', 'Yarn and Bear Plushie Bundle', 'Bouquet made from yarn, along with plushie bears', 100, 2, 200, '2024-05-15 10:28:50', 'ganzl-pm22@student.tarc.edu.my'),
(25, 'TAR5', 'Personalised Necklace', 'Customise your own necklace', 39, 3, 117, '2024-05-15 10:29:13', 'ganzl-pm22@student.tarc.edu.my');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(60) NOT NULL,
  `product_name` varchar(60) NOT NULL,
  `product_desc` tinytext NOT NULL,
  `product_img_name` varchar(60) NOT NULL,
  `qty` int(5) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_code`, `product_name`, `product_desc`, `product_img_name`, `qty`, `price`) VALUES
(1, 'TAR1', 'Calypso Sunflower & Rose Bouquet', 'Bouquet', '1.png', 26, '179.00'),
(2, 'TAR2', 'Mika Graduation Bear Bouquet', 'Graduation Bear plushies', '2.png', 4, '139.00'),
(3, 'TAR3', 'Yarn and Bear Plushie Bundle', 'Bouquet made from yarn, along with plushie bears', '3.png', 58, '100.00'),
(4, 'TAR4', 'Mika Graduation Bear Plush', 'Mika bear plush', '4.png', 120, '50.00'),
(5, 'TAR5', 'Personalised Necklace', 'Customise your own necklace', '5.png', 32, '39.00'),
(6, 'TAR6', 'Personalised Keychains', 'Customise your own keychains', '6.png', 1251, '19.00'),
(7, 'TAR7', 'Plaque', 'Customise your own plaque', '7.png', 123, '29.00'),
(8, 'TAR8', 'TinkerBell Sunflower', 'Mini bouquet', '8.png', 12, '122.00'),
(9, 'TAR9', 'Fairywell Sunflower', 'Sunflower bouquet', '9.png', 19, '120.00'),
(10, 'TAR10', 'Bouquets Cheyenne', 'Cheyennes bouquet set', '10.png', 11, '119.00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pin` int(6) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(15) NOT NULL,
  `type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `address`, `city`, `pin`, `email`, `password`, `type`) VALUES
(1, 'Steve', 'Jobs', 'Infinite Loop', 'California', 95014, 'sjobs@apple.com', 'steve', 'admin'),
(2, 'Gan', 'ZL', '18, Tingkat', 'Georgetown', 10300, 'ganzl-pm22@student.tarc.edu.my', '456456', 'user'),
(3, 'Joel', 'W', '16, Tingkat ', 'Georgetown', 123123, 'joelwsy-pm22@student.tarc.edu.my', '123123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`product_code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
