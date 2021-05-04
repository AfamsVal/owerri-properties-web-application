-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 05, 2021 at 12:33 AM
-- Server version: 5.7.34
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `owerripr_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(255) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(222) NOT NULL,
  `phone` varchar(60) NOT NULL,
  `subject` text NOT NULL,
  `message` longtext NOT NULL,
  `status` int(100) NOT NULL,
  `timer` varchar(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `subject`, `message`, `status`, `timer`) VALUES
(1, 'Maria Campbell', 'none@gmail.com', '610-874-3473', 'Error on your website', 'It looks like this link is broken on your site: https://owerriproperty.com/store.php\n\nI thought you would like to know :).  Silly mistakes can ruin your site&#039;s credibility.  I&#039;ve used a tool called linkSniff.com in the past to keep mistakes off of my website.\n\n-Maria', 0, '1618223936');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(225) NOT NULL,
  `uid` int(255) NOT NULL,
  `property_name` varchar(225) NOT NULL,
  `property_price` varchar(255) NOT NULL,
  `location` text NOT NULL,
  `description` text NOT NULL,
  `category` varchar(225) NOT NULL,
  `type` varchar(255) NOT NULL,
  `timer` varchar(255) NOT NULL,
  `status` varchar(225) NOT NULL,
  `verified` int(222) NOT NULL,
  `available` int(20) NOT NULL,
  `photo` text NOT NULL,
  `identity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `uid`, `property_name`, `property_price`, `location`, `description`, `category`, `type`, `timer`, `status`, `verified`, `available`, `photo`, `identity`) VALUES
(1, 1, '2 bedroom apartment to let', '450000', 'Egbeada', 'Newly built block of 4 flats\r\nSpacious parking \r\nSerene environment', 'House', 'Brand New', '1616484168', '1', 1, 1, 'uploads/12078412239FF75.jpeg', '1-1616484168'),
(2, 1, '1 Plot of land for sale', '1800000', 'Obinze', 'Close to Futo Junction', 'Land', 'Brand New', '1616484522', '1', 1, 1, 'uploads/1434466583EB56A.jpeg', '1-1616484522'),
(3, 1, 'Plots of land for sale', '2000000', 'Mgbirichi', 'Several plots of land for sale at Max Gardens estate, Mgbirichi.', 'Land', 'Brand New', '1616488634', '1', 1, 1, 'uploads/15001690007CAA4.jpeg', '1-1616488634'),
(4, 1, '2 Plots of fenced land on MCC', '25000000', 'MCC Road, Owerri', '2 plots of fenced land\r\n\r\nTitle: Power of attorney with survey plan', 'Land', 'Brand New', '1616747914', '1', 1, 1, 'uploads/1536885732D2694.jpeg', '1-1616747914'),
(5, 1, 'PLOTS OF LAND FOR SALE', '2500000', 'Umuguma', 'Several plots of land for sale at Umuahia. Buy and Build.', 'Land', 'Brand New', '1616748111', '1', 1, 1, 'uploads/13266788271CBCD.jpeg', '1-1616748111'),
(6, 1, '1 PLOT OF LAND FOR SALE', '1500000', 'Nekede', 'A plot of land for sale behind Nekede Poly, Owerri', 'Land', 'Used', '1616750402', '1', 1, 1, 'uploads/108617130917D51.jpeg', '1-1616750402'),
(7, 1, '20 PLOTS OF LAND FOR SALE', '8000000', 'Ohaji', '20 plots of land suitable for building an estate for sale at Ohaji.', 'Land', 'Brand New', '1616750581', '1', 1, 1, 'uploads/1393726049E2A9A.jpeg', '1-1616750581');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(225) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `photo` text NOT NULL,
  `address` text NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cookie_id` varchar(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `reg_date` varchar(200) NOT NULL,
  `last_seen` int(225) NOT NULL,
  `is_blocked` int(222) NOT NULL,
  `email_code` varchar(225) NOT NULL,
  `business_logo` text NOT NULL,
  `business_name` text NOT NULL,
  `business_address` text NOT NULL,
  `business_phone_no` varchar(34) NOT NULL,
  `business_description` text NOT NULL,
  `business_reg_date` varchar(225) NOT NULL,
  `business_status` varchar(100) NOT NULL,
  `no_of_employee` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `photo`, `address`, `state`, `country`, `password`, `cookie_id`, `status`, `reg_date`, `last_seen`, `is_blocked`, `email_code`, `business_logo`, `business_name`, `business_address`, `business_phone_no`, `business_description`, `business_reg_date`, `business_status`, `no_of_employee`) VALUES
(1, 'Chukwuemeka', '', 'cdzventures@gmail.com', '08038961400', '', '', 'Imo', '', '$2y$10$QyMUANYTEA/J2z.vS3QHcO8Yn2jhcnQcZbY8q1xjZSLgEt2ccA/Ia', '11459936587940907163', '10', '1616483757', 1617612154, 0, 'U9857', '', '', '', '', '', '', '', ''),
(2, 'K', '', 'akingsley655@gmail.com', '08029361486', '', '', 'Imo', '', '$2y$10$QyMUANYTEA/J2z.vS3QHcO8Yn2jhcnQcZbY8q1xjZSLgEt2ccA/Ia', '', '0', '1617611486', 1617611844, 1, 'R1963', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `visited_pages`
--

CREATE TABLE `visited_pages` (
  `id` int(225) NOT NULL,
  `uid` int(255) NOT NULL,
  `page` text NOT NULL,
  `no_of_time` int(255) NOT NULL,
  `ip` text NOT NULL,
  `ip_change_counter` text NOT NULL,
  `timer` int(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visited_pages`
--

INSERT INTO `visited_pages` (`id`, `uid`, `page`, `no_of_time`, `ip`, `ip_change_counter`, `timer`, `status`) VALUES
(1, 0, 'Dashboard', 788, '197.210.84.197', '595', 1620169613, 1),
(2, 0, 'About', 73, '54.208.154.255', '65', 1620025794, 1),
(3, 0, 'Properties', 244, '66.249.64.153', '95', 1620101908, 1),
(4, 0, 'ContactUs', 94, '40.77.167.72', '86', 1620141809, 1),
(5, 0, 'Register', 61, '54.208.154.255', '60', 1620026011, 1),
(6, 1, 'Dashboard', 7, '197.210.29.31', '1', 1616748122, 1),
(7, 1, 'Properties', 18, '197.210.29.31', '1', 1616750583, 1),
(8, 0, 'Blog', 17, '69.160.160.55', '8', 1619692750, 1),
(9, 0, 'Login', 83, '207.46.13.23', '70', 1620114094, 1),
(10, 1, 'Blog', 3, '105.112.98.99', '0', 1616488024, 1),
(11, 1, 'ContactUs', 1, '105.112.98.99', '0', 1616487718, 1),
(12, 1, 'About', 5, '105.112.32.66', '1', 1617612154, 1),
(13, 1, 'Login', 1, '105.112.98.99', '0', 1616488356, 1),
(14, 1, 'myAccount', 1, '105.112.98.99', '0', 1616488681, 1),
(15, 0, 'Terms&Condition', 28, '198.204.238.211', '16', 1619907808, 1),
(16, 0, 'ForgotPwd', 6, '198.204.238.211', '4', 1619907809, 1),
(17, 2, 'Dashboard', 1, '105.112.32.66', '0', 1617611486, 1),
(18, 2, 'Properties', 1, '105.112.32.66', '0', 1617611844, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visited_pages`
--
ALTER TABLE `visited_pages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visited_pages`
--
ALTER TABLE `visited_pages`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
