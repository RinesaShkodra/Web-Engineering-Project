-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2022 at 02:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

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
(16, 'Desserts', 'Food_Category_987.jpg', 'Yes', 'Yes'),
(17, 'Pasta', 'Food_Category_452.jpg', 'Yes', 'Yes');

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
(14, 'Beef Burger', 'The classic burger is an all time BBQ favourite!', '5', 'Food-Name-6924.jpg', 9, 'Yes', 'Yes'),
(15, 'Chicken Burger', 'Crispy Chicken Burger with Honey Mustard Coleslaw!', '4', 'Food-Name-5183.jpg', 9, 'Yes', 'Yes'),
(16, 'Vegan Burger', 'The ultimate vegan green burger! ', '7', 'Food-Name-9425.jpg', 9, 'Yes', 'Yes'),
(21, 'chocolate molten cake', 'minimum fuss – these chocolate puddings, also known as chocolate fondant or lava cake, have a lovely gooey centre', '2', 'Food-Name-5676.webp', 16, 'Yes', 'Yes'),
(22, 'Blackberry & lemon fool', 'Light and delicious! ', '3', 'Food-Name-1537.webp', 16, 'Yes', 'Yes'),
(23, 'Chocolate hazelnut ice cream cheesecake', '', '4', 'Food-Name-4070.webp', 16, 'Yes', 'Yes'),
(24, 'Shrimp Alfredo pasta', 'feels extra special and luxurious.', '2', 'Food-Name-3315.webp', 17, 'Yes', 'Yes'),
(28, 'Veggie Pasta', 'Light and Easy!', '4', 'Food-Name-1812.jpg', 17, 'Yes', 'Yes');

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
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `food`, `price`, `qty`, `total`, `order_date`, `status`, `costumer_name`, `costumer_contact`, `costumer_email`, `costumer_address`) VALUES
(2, 'Cheese Burger', '6.00', 1, '6.00', '2022-02-12 12:49:51', 'Delivered', 'rinesa', '12345668965', 'shkodrarinesa@gmail.com', 'rinesa'),
(3, 'chocolate molten cake', '2.00', 2, '4.00', '2022-02-12 02:42:39', 'Ordered', 'rinesa', '12345668965', 'ne_sa@hotmail.com', 'Gjilan');

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_food`
--
ALTER TABLE `tbl_food`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
