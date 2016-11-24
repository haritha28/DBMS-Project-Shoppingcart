-- phpMyAdmin SQL Dump
-- version 4.4.13.1
-- http://www.phpmyadmin.net
--
-- Host: localhost:3300
-- Generation Time: Jan 10, 2016 at 10:23 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `item_id` int(11) NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`item_id`, `product_id`, `user_id`, `quantity`) VALUES
(18, 9, 13, 15),
(19, 4, 13, 1),
(20, 4, 13, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(10) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `category_description` varchar(500) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `category_description`) VALUES
(5, 'Men', 'Winter clothes'),
(6, 'Women', 'Winter clothes'),
(7, 'Kid', 'Winter clothes');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE IF NOT EXISTS `order_details` (
  `order_id` int(11) NOT NULL,
  `product_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_price` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `product_id`, `user_id`, `quantity`, `order_price`) VALUES
(10, 4, 13, 1, 200),
(11, 5, 13, 1, 300),
(12, 4, 13, 1, 200),
(13, 4, 13, 2, 400),
(14, 7, 13, 2, 200),
(15, 7, 13, 5, 500);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(10) NOT NULL,
  `category_id` int(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `mfd` varchar(4) NOT NULL,
  `price` int(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `source` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `mfd`, `price`, `description`, `source`) VALUES
(4, 5, 'Fur Jacket ', '2014', 200, 'Warm jacket for cold winter at best price.', 'img/furjacket1.jpg'),
(5, 6, 'Winter Jacket', '2015', 300, 'Warm jacket for cold winter at best price', 'img/womenjacket1.jpg'),
(6, 7, 'Winter Jacket', '2015', 100, 'Warm jacket for cold winter at best price', 'img/kidjacket1.jpg'),
(7, 5, 'Boots', '2014', 100, 'Warm boots for cold winter at best price', 'img/menboot1.jpg'),
(8, 6, 'Winter Boot', '2014', 100, 'Warm boots for cold winter at best price', 'img/womenboot1.jpg'),
(9, 7, 'Winter Boot', '2014', 100, 'Warm boots for cold winter at best price', 'img/kidboot1.jpg'),
(12, 5, 'Coat', '2014', 700, 'Warm coat for cold winter at best price', 'img/mencoat1.jpg'),
(13, 6, 'coat', '2014', 400, 'Warm coat for cold winter at best price', 'img/coatwomen1.jpg'),
(14, 7, 'Coat', '2014', 200, 'Warm coat for cold winter at best price', 'img/kidscoat1.jpg'),
(15, 5, 'Gloves', '2013', 50, 'Warm gloves for cold winter at best price', 'img/glovesmen1.jpg'),
(16, 6, 'Gloves', '2013', 50, 'Warm gloves for cold winter at best price', 'img/womengloves1.jpg'),
(17, 7, 'Gloves', '2014', 25, 'Warm gloves for cold winter at best price', 'img/kidsgloves1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(35) NOT NULL,
  `password` varchar(200) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `access` int(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `firstname`, `lastname`, `address`, `phone`, `access`) VALUES
(6, 'admin', 'admin@admin.ad', '25e4ee4e9229397b6b17776bfceaf8e7', 'admin', 'admin', 'Admin''s house', '0', 1),
(13, 'sushil', 's_b@gmail.com', 'd8578edf8458ce06fbc5bb76a58c5ca4', 'sushil', 'Bastola', 'Lintukorventie', '1234578', 0),
(14, 'lama', 'lama@lama.lama', '25873e159d36d8c7218c74bbfd3d7e02', 'lama', 'lama', 'lama', '9898989', 0),
(16, 'sushil', 's_ss@g.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Sushil', 'Bastola', '', '', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
