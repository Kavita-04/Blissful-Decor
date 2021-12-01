-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 08:32 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blissfuldecor`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `category` varchar(20) NOT NULL DEFAULT 'others',
  `imgpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `price`, `category`, `imgpath`) VALUES
(1, 'PolyDeer (Metal)', '2999.00', 'Wall Hangings', 'Images/Hangings_2.jpeg'),
(2, 'Round Wall Mirror', '1499.00', 'Wall Hangings', 'Images/Hangings_3.jpeg'),
(3, 'Cuckoo Clock', '1299.00', 'Wall Hangings', 'Images/Hangings_4.jpeg'),
(4, 'Gullak Hanging', '999.00', 'Wall Hangings', 'Images/Hangings_5.jpeg'),
(5, 'Stylish Wall Clock', '4999.00', 'Wall Hangings', 'Images/Hangings_6.jpeg'),
(6, 'Welcome Design', '2999.00', 'Wall Hangings', 'Images/Hangings_7.jpeg'),
(7, 'Dream Catchers (set of 3)', '499.00', 'Wall Hangings', 'Images/Hangings_8.jpeg'),
(8, 'Photo Frames(5)', '1299.00', 'Wall Hangings', 'Images/Hangings_9.jpeg'),
(9, 'Wooden Wall Shelf', '1999.00', 'Wall Hangings', 'Images/Hangings_10.jpeg'),
(10, 'Corner Wall Shelf', '1499.00', 'Wall Hangings', 'Images/Hangings_11.jpeg'),
(11, 'Wooden Jharokha', '1299.00', 'Wall Hangings', 'Images/Hangings_12.jpeg'),
(12, 'Wooden Key Holder', '499.00', 'Wall Hangings', 'Images/Hangings_13.jpeg'),
(13, 'Spider Plant', '499.00', 'Indoor Garden', 'Images/Plants_2.jpeg'),
(14, 'Baby Rubber Plant', '699.00', 'Indoor Garden', 'Images/Plants_3.jpeg'),
(15, 'Boston Ferns', '399.00', 'Indoor Garden', 'Images/Plants_4.jpeg'),
(16, 'Dumb Cane', '649.00', 'Indoor Garden', 'Images/Plants_5.jpeg'),
(17, 'Bunny Ear Cactus', '1349.00', 'Indoor Garden', 'Images/Plants_6.jpeg'),
(18, 'Pothos', '849.00', 'Indoor Garden', 'Images/Plants_7.jpeg'),
(19, 'Flamingo Lily', '1299.00', 'Indoor Garden', 'Images/Plants_8.jpeg'),
(20, 'Croton', '999.00', 'Indoor Garden', 'Images/Plants_9.jpeg'),
(21, 'Aloe Vera', '449.00', 'Indoor Garden', 'Images/Plants_10.jpeg'),
(22, 'Prayer Plant', '949.00', 'Indoor Garden', 'Images/Plants_11.jpeg'),
(23, 'Lucky Bamboo', '499.00', 'Indoor Garden', 'Images/Plants_12.jpeg'),
(24, 'Weeping Fig', '999.00', 'Indoor Garden', 'Images/Plants_13.jpeg'),
(25, 'Multicolored Fairy Lights', '499.00', 'Lightings', 'Images/Lightings_2.jpeg'),
(26, 'Rainbow Strip Lights', '999.00', 'Lightings', 'Images/Lightings_3.jpeg'),
(27, 'Moon and Star Lights', '1299.00', 'Lightings', 'Images/Lightings_4.jpeg'),
(28, 'Ceiling lights', '2999.00', 'Lightings', 'Images/Lightings_5.jpeg'),
(29, 'Vintage Ceiling Lamp', '4999.00', 'Lightings', 'Images/Lightings_6.jpeg'),
(30, 'LED Crystal Balls', '1499.00', 'Lightings', 'Images/Lightings_7.jpeg'),
(31, 'Fairy Lights (Pink Flowers)', '1499.00', 'Lightings', 'Images/Lightings_8.jpeg'),
(32, 'Moon Lamp (Multicolored)', '9999.00', 'Lightings', 'Images/Lightings_9.jpeg'),
(33, 'Snow Flake Lights(4m)', '1499.00', 'Lightings', 'Images/Lightings_10.jpeg'),
(34, 'Fancy Decorative Lights', '2999.00', 'Lightings', 'Images/Lightings_11.jpeg'),
(35, 'LED Rope Light(White)', '1499.00', 'Lightings', 'Images/Lightings_12.jpeg'),
(36, 'Hot Air Baloon Lights', '4999.00', 'Lightings', 'Images/Lightings_13.jpeg'),
(37, '3 Wise Men fountain', '17000.00', 'Others', 'Images/Others_2.jpeg'),
(38, 'Artificial Flowers', '300.00', 'Others', 'Images/Others_3.jpeg'),
(39, 'Dot Print Planter (3)', '600.00', 'Others', 'Images/Others_4.jpeg'),
(40, 'Handmade Nest', '700.00', 'Others', 'Images/Others_5.jpeg'),
(41, 'Urn Terracotta Vase', '1200.00', 'Others', 'Images/Others_6.jpeg'),
(42, 'Terracotta Pots (2)', '800.00', 'Others', 'Images/Others_7.jpeg'),
(43, 'Madhubani Vase (3)', '1300.00', 'Others', 'Images/Others_8.jpeg'),
(44, 'Small White Rabbits', '299.00', 'Others', 'Images/Others_9.jpeg'),
(45, 'Garden Figurine', '699.00', 'Others', 'Images/Others_10.jpeg'),
(46, 'White Planter', '650.00', 'Others', 'Images/Others_11.jpeg'),
(47, '2kg Natural Pebbles', '749.00', 'Others', 'Images/Others_12.jpeg'),
(48, 'Wooden Plant Stand', '5000.00', 'Others', 'Images/Others_13.jpeg'),
(49, 'Lord Buddha', '1499.00', 'Spiritual', 'Images/Spiritual_2.jpeg'),
(50, 'Lord Ganesha', '999.00', 'Spiritual', 'Images/Spiritual_3.jpeg'),
(51, 'Radha Krishna', '4999.00', 'Spiritual', 'Images/Spiritual_4.jpeg'),
(52, 'Laxmi Ganesh', '3999.00', 'Spiritual', 'Images/Spiritual_5.jpeg'),
(53, 'Goddess Durga', '1999.00', 'Spiritual', 'Images/Spiritual_6.jpeg'),
(54, 'Jesus Christ', '1299.00', 'Spiritual', 'Images/Spiritual_7.jpeg'),
(55, 'Guardian Angel', '799.00', 'Spiritual', 'Images/Spiritual_8.jpeg'),
(56, 'Nataraja', '1499.00', 'Spiritual', 'Images/Spiritual_9.jpeg'),
(57, 'Lord Shiva', '1200.00', 'Spiritual', 'Images/Spiritual_10.jpeg'),
(58, 'Shivalinga & Nagraj', '4999.00', 'Spiritual', 'Images/Spiritual_11.jpeg'),
(59, 'Ladoo Gopal', '1500.00', 'Spiritual', 'Images/Spiritual_12.jpeg'),
(60, 'Laughing Buddha', '1300.00', 'Spiritual', 'Images/Spiritual_13.jpeg'),
(61, 'Ceramic Wall Plates', '4999.00', 'Wall Art', 'Images/WallArt_2.jpeg'),
(62, 'Mandala Pair', '1499.00', 'Wall Art', 'Images/WallArt_3.jpeg'),
(63, 'Handpainted Pots', '3999.00', 'Wall Art', 'Images/WallArt_4.jpeg'),
(64, 'Kathakali Maquilage', '1999.00', 'Wall Art', 'Images/WallArt_5.jpeg'),
(65, 'Velvet Laminated Radhe Krishna', '13999.00', 'Wall Art', 'Images/WallArt_6.jpeg'),
(66, 'Meditating Buddha MDF Printed', '12999.00', 'Wall Art', 'Images/WallArt_7.jpeg'),
(67, 'Velvet Laminated Sun Rise Tree', '14999.00', 'Wall Art', 'Images/WallArt_8.jpeg'),
(68, 'Butterfly MDF Digital Print', '18999.00', 'Wall Art', 'Images/WallArt_9.jpeg'),
(69, 'Rajasthani Nomad Girl Wall Plate', '799.00', 'Wall Art', 'Images/WallArt_10.jpeg'),
(70, 'Warli & Dhokra Paintings', '1299.00', 'Wall Art', 'Images/WallArt_11.jpeg'),
(71, 'Wise Owls Handmade', '999.00', 'Wall Art', 'Images/WallArt_12.jpeg'),
(72, 'Coloured Fish Handmade', '999.00', 'Wall Art', 'Images/WallArt_13.jpeg'),
(73, 'Plant combo (set of 3)', '899.00', 'Indoor Garden', 'Images/Plants_1.jpeg'),
(74, 'Dream Catchers (set of 2)', '249.00', 'Wall Hangings', 'Images/Hangings_1.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `contact_no` varchar(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact_no`, `address`, `email`, `password`) VALUES
(4, 'Sakshi', '9876543210', 'Sant Ngr.,Burari', 'sakshi.mcs20.du@gmail.com', 'MTIzNDU2');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `user_id` int(11) DEFAULT NULL,
  `item_id` int(11) DEFAULT NULL,
  `status` enum('Add to Cart','Confirmed','Add to Wishlist') DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `purchase_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `transaction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_items`
--
ALTER TABLE `users_items`
  ADD CONSTRAINT `users_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `users_items_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `items` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
