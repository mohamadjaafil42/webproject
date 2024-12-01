-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 10:28 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0
CREATE DATABASE IF NOT EXISTS shop_db;
USE shop_db;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Tops/Blouse'),
(2, 'Trousers'),
(3, 'Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(12) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `size` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `catid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `image`, `size`, `description`, `catid`) VALUES
(1, '3pairs Pearl Hoop Earrings', '5', 'earrings.jpeg', 'one-size', 'Material: Zinc Alloy\r\n\r\nColor: Yellow Gold', 3),
(2, '2pcs Pearl Decor Hair', '10', 'clips.jpeg', 'one-size', 'Color: Gold and White\r\nMaterial: Iron', 3),
(3, '2pairs Square Frame Glasses', '4', 'sunglasses.jpeg', 'one-size', 'Lens Color: Multicolor\r\nStyle: Boho\r\nShape: Square\r\nFrame Material: Plastic', 3),
(4, 'Minimalist Chevron Chain Bag', '12', 'bag.jpeg', 'Medium', 'Color: Beige\r\nStrap Type: Chain\r\nPattern Type: Plaid\r\nType: Square Bag', 3),
(5, 'High Waist Cargo Jeans', '15', 'cargo.jpeg', 'Medium', 'Color: Medium Wash\r\nPattern Type: Plain\r\nType: Straight Leg\r\nJeans Style: Cargo Pants\r\nMaterial: Denim', 2),
(6, 'High Waist Black Cargo Jeans', '18', 'blackcargo.jpeg', 'Small', 'Color: Black\r\nPattern Type: Plain\r\nType: Straight Leg\r\nJeans Style: Cargo Pants\r\nMaterial: Denim', 2),
(7, 'White Sweatpants', '10', 'whitesweats.jpeg', 'Large', 'Color: White\r\nType: Wide Leg\r\nPattern Type: Plain\r\nMaterial: Fabric', 2),
(8, 'Solid Slant Pocket Corduroy Pants', '8', 'whitepants.jpeg', 'Small', 'Color: Beige\r\nStyle: Casual\r\nPattern Type: Plain\r\nType: Straight Leg\r\nMaterial: Corduroy', 2),
(9, 'Yellow Crop Top', '5', 'yellowtop.jpeg', 'Small', 'Color: Yellow\r\nStyle: Casual\r\nLength: Crop\r\nMaterial: Fabric', 1),
(10, 'Blue Shirt Dress', '3', 'bluedress.jpeg', 'Large', 'Color: Blue and white\r\nStyle: Casual\r\nType: Shirt\r\nMaterial: Fabric', 1),
(11, 'Floral Chiffon Blouse', '7', 'blouse.jpeg', 'Medium', 'Color: White\r\nStyle: Casual\r\nPattern Type: Floral\r\nMaterial: Fabric', 1),
(12, 'V-Neck Top', '11', 'basicshirt.jpeg', 'Large', 'Color: White and Brick-Red\r\nStyle: Casual\r\nType: Top\r\nNeckline: V neck', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_type` varchar(20) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
