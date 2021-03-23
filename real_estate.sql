-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2021 at 06:24 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
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
(1, '', '', '', '', '', 0, ''),
(2, 'afams', '', '', '', '', 0, ''),
(3, 'afams', 'none@gmail.com', '+2348037514463', 'Kindly drop your message', 'kjhfjasdfkjlfklasdf', 0, '1613637393'),
(4, 'eazy2con', 'none@gmail.com', '+2348037514463', 'Kindly drop your message', 'Hklaso ssd sd', 0, '1613637469'),
(5, 'Oko Anthony', 'none@gmail.com', '08085655780', 'Comment from property ID: 1-1613346266', 'This is a new message in view of the net profit of the organisation', 0, '1616324376');

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
  `available` int(20) NOT NULL,
  `photo` text NOT NULL,
  `identity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `uid`, `property_name`, `property_price`, `location`, `description`, `category`, `type`, `timer`, `status`, `available`, `photo`, `identity`) VALUES
(1, 1, 'Brand New House in Owerri', '1200', 'Lagos Nigeria', 'Enjoy health benefits like blood platelet, immunity, digestion and sleep support. Our products are of the highest quality with every single batch of ingredient tested to the highest standard by 3rd party certifiers. We believe in the environment and  10% of profits support', 'House', 'Brand New', '1613284373', '1', 1, 'uploads/1365584129veg-2.jpg', '2-1613284373'),
(2, 1, 'OFFICE COMPLEX', '1222', 'Abia', 'Enjoy health benefits like blood platelet, immunity, digestion and sleep support. Our products are of the highest quality with every single batch of ingredient tested to the highest standard by 3rd party certifiers. We believe in the environment and  10% of profits suppo', 'Office', 'Used', '1613285177', '1', 1, 'uploads/1398132463cfwmk.jpg', '2-1613285177'),
(3, 1, 'Rented Apartment in Owerri', '2250000', 'Lagos Nigeria', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. and web page editors now use Lorem Ipsum as their default model text, and a ... of model sentence structures, to generate Lorem Ipsum which looks reasonable.', 'House', 'Brand New', '1613344579', '1', 0, 'uploads/1075197648aweso.jpg', '2-1613344579'),
(4, 1, 'New Toyota Camry for Sale', '2400000', 'Awka', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Cars', 'Brand New', '1613346266', '1', 1, 'uploads/1499318032veg-2.jpg', '1-1613346266'),
(5, 4, 'Laptop', '120', 'Lagos Nigeria', 'Find the best quality Laptops online on Konga.com, Nigeria&#039;s #1 online shopping mall. Buy affordable Laptops online on Konga at the best prices in Nigeria today. 24/7 Customer Service. Best Quality Always. Super Fast Delivery. 7-Day Free Returns.', 'Office', 'Brand New', '1616308950', '1', 1, 'uploads/1193243783MacBo.jpeg', '4-1616308950'),
(6, 4, 'Laptop', '1', 'Awka', 'Find the best quality Laptops online on Konga.com, Nigeria&#039;s #1 online shopping mall. Buy affordable Laptops online on Konga at the best prices in Nigeria today. 24/7 Customer Service. Best Quality Always. Super Fast Delivery. 7-Day Free Returns.', 'Land', 'Brand New', '1616317454', '1', 1, 'uploads/1396215618960x0.jpg', '4-1616317454'),
(7, 4, '0', '1330303', '0', '0', '0', '0', '1616327785', '1', 1, 'uploads/145018116398151.jpg', '4-1616327785'),
(8, 4, '0', '1330303', '0', '0', '0', '0', '1616327852', '1', 1, 'uploads/144867529298151.jpg', '4-1616327852'),
(9, 4, 'New Ocean Complex for sale', '1,330,303.00', 'Lagos Nigeria', 'Search the string &#039;&quot;Hello World!&quot;, find the value &quot;world&quot; and replace it with &quot;Peter&quot;', 'Land', 'Brand New', '1616327987', '1', 1, 'uploads/150834561198151.jpg', '4-1616327987'),
(10, 4, 'New Ocean Complex for sale', '1330303', 'Lagos Nigeria', 'Search the string &quot;Hello World!&quot;, find the value &quot;world&quot; and replace it with &quot;Peter&quot;', 'Land', 'Brand New', '1616328441', '1', 1, 'uploads/127185635398151.jpg', '4-1616328441');

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
(1, 'Val', 'Afams', 'progfams@gmail.com', '+2348037514469', '', 'No 91B, Gate 5, Suite 301 Adeniyi Jones, Ikeja, Lagos State, Nigeria', 'Abia', '', '$2y$10$wi.Pp5zz5TNCpFh3Hz5ABePm6sW9LN5jKCr4SiD0GodRvhweSH7WO', '11340231422633639427', '10', '1613147296', 1616330852, 0, 'H7442', '', '', '', '', '', '', '', ''),
(2, 'Darlinton', '', 'darlington@gmail.com', '08037514461', '', '', 'Abuja FCT', '', '$2y$10$OsRSdS6kRZrZb90Qsqvit.GSpIU2QKAxWmjrGZ1uvYNeX0dhfyuVq', '', '0', '1614592188', 1614592321, 1, 'N6588', '', '', '', '', '', '', '', ''),
(3, 'Benedith', '', 'benedith@gmail.com', '08037514462', '', '', 'Abia', '', '$2y$10$Xm3U8bGcFqyRSsIr0UNy6erEOt22lPs72xxHOW9ntNpagK/sGi/BW', '', '0', '1614592650', 1614592650, 0, 'T1862', '', '', '', '', '', '', '', ''),
(4, 'Amadi', '', 'amadi@gmail.com', '0903884430', '', '', 'Akwa Ibom', '', '$2y$10$UKsZufsQ6Y21/rByUKA9ReooJFTG/eIuzm9Or3shOwlM1m.2.orGu', '414900690721452072970', '0', '1616308852', 1616448432, 0, 'N8323', '', 'buz name', 'P.M.B. 7267 Umuahia, Abia State  Nigeria', '+2348035050452', 'ddddd', '1616448452', '1', '6 - 10');

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
(1, 0, 'Dashboard', 123, '::1', '0', 1616405156, 1),
(2, 1, 'Dashboard', 47, '::1', '0', 1614591936, 1),
(3, 1, 'MktPlace', 20, '::1', '0', 1613640589, 1),
(4, 1, 'About', 33, '::1', '0', 1616330852, 1),
(5, 1, 'Properties', 177, '::1', '0', 1616330843, 1),
(6, 0, 'Login', 41, '::1', '0', 1616448409, 1),
(7, 0, 'About', 35, '::1', '0', 1616330876, 1),
(8, 0, 'Properties', 47, '::1', '0', 1616446982, 1),
(9, 0, 'MktPlace', 13, '::1', '0', 1613640026, 1),
(10, 1, 'myAccount', 34, '::1', '0', 1613353082, 1),
(11, 0, 'Register', 14, '::1', '0', 1616410671, 1),
(12, 1, '404', 9, '::1', '0', 1613640542, 1),
(13, 0, '404', 1563, '::1', '0', 1616305049, 1),
(14, 0, 'ContactUs', 42, '::1', '0', 1616250860, 1),
(15, 0, 'Terms&Condition', 3, '::1', '0', 1613639275, 1),
(16, 1, 'ContactUs', 1, '::1', '0', 1613640061, 1),
(17, 2, 'Dashboard', 3, '::1', '0', 1614592321, 1),
(18, 3, 'Dashboard', 1, '::1', '0', 1614592650, 1),
(19, 0, 'Blog', 132, '::1', '0', 1616305048, 1),
(20, 4, 'Dashboard', 7, '::1', '0', 1616448427, 1),
(21, 4, 'Properties', 24, '::1', '0', 1616448432, 1),
(22, 4, 'Blog', 24, '::1', '0', 1616329593, 1),
(23, 4, '404', 24, '::1', '0', 1616324201, 1),
(24, 4, 'ContactUs', 2, '::1', '0', 1616319230, 1),
(25, 4, 'myAccount', 1, '::1', '0', 1616410751, 1);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `visited_pages`
--
ALTER TABLE `visited_pages`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
