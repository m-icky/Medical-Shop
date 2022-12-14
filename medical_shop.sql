-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2022 at 01:42 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medical_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_feedback`
--

CREATE TABLE `add_feedback` (
  `id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_feedback`
--

INSERT INTO `add_feedback` (`id`, `first_name`, `last_name`, `feedback`, `email`) VALUES
(2, 'mick', 'mack', 'it is good to work', 'mack@123'),
(3, 'hello', 'world', 'hello world', 'helloworld@123');

-- --------------------------------------------------------

--
-- Table structure for table `add_med`
--

CREATE TABLE `add_med` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_med`
--

INSERT INTO `add_med` (`id`, `name`, `price`, `description`, `img`) VALUES
(2, 'poo-pourrt', '200', 'Medicine is the science and practice of caring for a patient, managing the diagnosis', 'product_06.png'),
(4, 'Bio Derma', '100', ' Advances in medicines have enabled doctors to cure many diseases and save lives', 'product_01.png'),
(5, 'Cetyl Pure', '300', 'Medicines are chemicals or compounds used to cure, halt, or prevent disease.', 'product_04.png');

-- --------------------------------------------------------

--
-- Table structure for table `add_pharmacy`
--

CREATE TABLE `add_pharmacy` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` int(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `loginid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_pharmacy`
--

INSERT INTO `add_pharmacy` (`id`, `name`, `email`, `phonenumber`, `address`, `loginid`) VALUES
(1, 'medi', 'medi123', 1234567, 'qwerty uasdfg gfgd frd', 10);

-- --------------------------------------------------------

--
-- Table structure for table `booking_view`
--

CREATE TABLE `booking_view` (
  `cart_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `cart_status` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking_view`
--

INSERT INTO `booking_view` (`cart_id`, `user_id`, `product_id`, `cart_status`, `payment`) VALUES
(3, 8, 4, 'Added To Cart', 'Payed'),
(5, 8, 2, 'Added To Cart', 'Payed');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `product_id` int(50) NOT NULL,
  `cart_status` varchar(50) NOT NULL,
  `payment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `loginid` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `usertype` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`loginid`, `username`, `password`, `usertype`, `status`) VALUES
(1, 'admin', 'admin', 'admin', '1'),
(8, 'aaa', 'aaa', 'user', '1'),
(10, 'ppp', 'ppp', 'Pharmacy', '1'),
(12, 'nnn', 'nnn', 'user', '1');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `number` int(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `cvv` int(50) NOT NULL,
  `loginid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `number`, `date`, `cvv`, `loginid`) VALUES
(6, 'mick', 2147483647, '12yr', 123, 8),
(7, 'mick', 2147483647, '123', 123, 8),
(8, 'mick', 2147483647, 'ed3', 123, 8),
(9, 'mick', 2147483647, '1234', 123, 8);

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` int(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `loginid` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`id`, `first_name`, `last_name`, `email`, `phonenumber`, `address`, `loginid`) VALUES
(7, 'Mick', 'mack', 'mick@gmail.com', 2147483647, 'qweasdzxc', 8),
(9, 'Nick', 'nik', 'nik@123', 123345, 'hgfdsjhgfdhgf ytfdhgf ygfd ytfdyuyt', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_feedback`
--
ALTER TABLE `add_feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_med`
--
ALTER TABLE `add_med`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_pharmacy`
--
ALTER TABLE `add_pharmacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_view`
--
ALTER TABLE `booking_view`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`loginid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_feedback`
--
ALTER TABLE `add_feedback`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_med`
--
ALTER TABLE `add_med`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `add_pharmacy`
--
ALTER TABLE `add_pharmacy`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking_view`
--
ALTER TABLE `booking_view`
  MODIFY `cart_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `loginid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
