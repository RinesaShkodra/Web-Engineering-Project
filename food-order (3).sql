-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 06:28 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-order`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(29, 'Administrator', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(8, 'Pizza', 'Food_Category_558.jpg', 'Yes', 'Yes'),
(9, 'Burger', 'Food_Category_880.jpg', 'Yes', 'Yes'),
(10, 'Dumpling', 'Food_Category_501.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_food`
--

CREATE TABLE `tbl_food` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(11) UNSIGNED NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_food`
--

INSERT INTO `tbl_food` (`id`, `title`, `description`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(6, 'Margherita', 'Pizza with Margherita', '3', 'Food-Name-2550.jpg', 8, 'Yes', 'Yes'),
(8, 'Pepperoni Pizza', 'Topped with cheesy goodness and turkey pepperoni', '3', 'Food-Name-4051.jpg', 8, 'Yes', 'Yes'),
(9, 'Napoli Pizza', 'Neapolitan Pizza with an airy, delicate crust.', '3', 'Food-Name-8072.jpg', 8, 'Yes', 'Yes'),
(10, 'Hawaiian Pizza ', 'Delicious homemade Hawaiian pizza with pineapple.', '3', 'Food-Name-6814.jpg', 8, 'Yes', 'Yes'),
(13, 'Cheese Burger', 'Double cheese burger with endori veggie burger', '6', 'Food-Name-788.jpg', 9, 'Yes', 'Yes'),
(14, 'Beef Burger', 'The classic burger is an all time BBQ favourite!', '5', 'Food-Name-6924.jpg', 9, 'Yes', 'Yes'),
(15, 'Chicken Burger', 'Crispy Chicken Burger with Honey Mustard Coleslaw!', '4', 'Food-Name-5183.jpg', 9, 'Yes', 'Yes'),
(16, 'Vegan Burger', 'The ultimate vegan green burger! ', '7', 'Food-Name-9425.jpg', 9, 'Yes', 'Yes'),
(17, 'Chinese Dumplings ', ' Traditional Chinese dumplings!', '2', 'Food-Name-8591.jpg', 10, 'Yes', 'Yes'),
(18, ' Spicy Beef Dumplings', 'Spicy beef dumplings with raw garlic sauce', '3', 'Food-Name-5813.jpg', 10, 'Yes', 'Yes'),
(19, 'Vegetable Dumplings', 'Crispy pan-fried Vegan Gyoza (Jiaozi) Japanese Vegetable Dumplings', '5', 'Food-Name-3283.jpg', 10, 'Yes', 'Yes'),
(20, 'Red Curry Tofu Dumplings', 'Red curry paste, rich with dried red chiles!', '3', 'Food-Name-7349.jpg', 10, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `costumer_name` varchar(150) NOT NULL,
  `costumer_contact` varchar(20) NOT NULL,
  `costumer_email` varchar(150) NOT NULL,
  `costumer_address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_food`
--
ALTER TABLE `tbl_food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
