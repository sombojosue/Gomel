-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2019 at 08:26 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gomel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `man`
--

CREATE TABLE `man` (
  `item_id` int(11) NOT NULL,
  `item_img` varchar(255) NOT NULL,
  `item_desc` varchar(255) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_size` int(11) NOT NULL,
  `item_color` varchar(255) NOT NULL,
  `item_type` varchar(50) NOT NULL,
  `item_fac` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `man`
--

INSERT INTO `man` (`item_id`, `item_img`, `item_desc`, `item_price`, `item_size`, `item_color`, `item_type`, `item_fac`) VALUES
(1, 'img/jeans1.jpg', 'Kurta, Full sleve, Man wear', 30, 30, 'blue', 'jeans', 'Glion'),
(2, 'img/jeans2.jpg', 'Kurta, Full sleve, Man wear', 25, 30, 'black', 'jeans', 'Glion'),
(3, 'img/jeans3.jpg', 'Kurta, Full sleve, Man wear', 30, 0, 'blue', 'jeans', 'Glion'),
(4, 'img/jeans4.jpg', 'Kurta, Full sleve, Man wear', 25, 30, 'black', 'jeans', 'Glion'),
(5, 'img/shoes1.jpg', 'Kurta, Full sleve, Man wear', 30, 30, 'blue', 'shoes', 'Glion'),
(6, 'img/shoes2.jpg', 'Kurta, Full sleve, Man wear', 25, 30, 'black', 'shoes', 'Glion'),
(7, 'img/shoes3.jpg', 'Kurta, Full sleve, Man wear', 30, 30, 'blue', 'shoes', 'Glion'),
(8, 'img/shoes4.jpg', 'Kurta, Full sleve, Man wear', 25, 30, 'black', 'shoes', 'Glion'),
(9, 'img/suit1.jpg', 'Kurta, Full sleve, Man wear', 30, 30, 'blue', 'suit', 'Glion'),
(10, 'img/suit2.jpg', 'Kurta, Full sleve, Man wear', 25, 30, 'black', 'suit', 'Glion'),
(11, 'img/suit3.jpg', 'Kurta, Full sleve, Man wear', 30, 30, 'blue', 'suit', 'Glion'),
(12, 'img/suit4.jpg', 'Kurta, Full sleve, Man wear', 25, 30, 'black', 'suit', 'Glion');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `link` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `link`) VALUES
(1, 'Home', 'index.php'),
(2, 'Man', 'man.php#shop'),
(3, 'Women', 'women.php#shop'),
(4, 'Watches', 'watch.php#watch'),
(5, 'Login', 'login.php'),
(6, 'Register', 'register.php');

-- --------------------------------------------------------

--
-- Table structure for table `watch`
--

CREATE TABLE `watch` (
  `item_id` int(11) NOT NULL,
  `item_img` varchar(255) NOT NULL,
  `item_desc` varchar(255) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_size` int(11) NOT NULL,
  `item_color` varchar(255) NOT NULL,
  `item_type` varchar(50) NOT NULL,
  `item_fac` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `watch`
--

INSERT INTO `watch` (`item_id`, `item_img`, `item_desc`, `item_price`, `item_size`, `item_color`, `item_type`, `item_fac`) VALUES
(1, 'img/watch1.jpg', 'Kurta, Full sleve, Man watch', 30, 30, 'blue', 'watch', 'Glion'),
(2, 'img/watch2.jpg', 'Kurta, Full sleve, Man watch', 25, 30, 'black', 'watch', 'Glion'),
(3, 'img/watch3.jpg', 'Kurta, Full sleve, Man watch', 30, 30, 'blue', 'watch', 'Glion'),
(4, 'img/watch4.jpg', 'Kurta, Full sleve, Man watch', 25, 30, 'black', 'watch', 'Glion');

-- --------------------------------------------------------

--
-- Table structure for table `women`
--

CREATE TABLE `women` (
  `item_id` int(11) NOT NULL,
  `item_img` varchar(255) NOT NULL,
  `item_desc` varchar(255) NOT NULL,
  `item_price` int(11) NOT NULL,
  `item_size` int(11) NOT NULL,
  `item_color` varchar(255) NOT NULL,
  `item_type` varchar(50) NOT NULL,
  `item_fac` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `man`
--
ALTER TABLE `man`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `watch`
--
ALTER TABLE `watch`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`item_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `man`
--
ALTER TABLE `man`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `watch`
--
ALTER TABLE `watch`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `women`
--
ALTER TABLE `women`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
