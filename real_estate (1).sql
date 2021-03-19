-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2021 at 08:05 PM
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
(4, 'eazy2con', 'none@gmail.com', '+2348037514463', 'Kindly drop your message', 'Hklaso ssd sd', 0, '1613637469');

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(225) NOT NULL,
  `uid` int(255) NOT NULL,
  `property_name` varchar(225) NOT NULL,
  `property_price` int(255) NOT NULL,
  `location` text NOT NULL,
  `description` text NOT NULL,
  `category` varchar(225) NOT NULL,
  `type` varchar(255) NOT NULL,
  `timer` varchar(255) NOT NULL,
  `status` varchar(225) NOT NULL,
  `photo` text NOT NULL,
  `identity` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `uid`, `property_name`, `property_price`, `location`, `description`, `category`, `type`, `timer`, `status`, `photo`, `identity`) VALUES
(1, 1, 'Brand New House in Owerri', 1200, 'Lagos Nigeria', 'Enjoy health benefits like blood platelet, immunity, digestion and sleep support. Our products are of the highest quality with every single batch of ingredient tested to the highest standard by 3rd party certifiers. We believe in the environment and  10% of profits support', 'House', 'Brand New', '1613284373', '1', 'uploads/1365584129veg-2.jpg', '2-1613284373'),
(2, 1, 'OFFICE COMPLEX', 1222, 'Abia', 'Enjoy health benefits like blood platelet, immunity, digestion and sleep support. Our products are of the highest quality with every single batch of ingredient tested to the highest standard by 3rd party certifiers. We believe in the environment and  10% of profits suppo', 'Office', 'Used', '1613285177', '1', 'uploads/1398132463cfwmk.jpg', '2-1613285177'),
(3, 1, 'Rented Apartment in Owerri', 2250, 'Lagos Nigeria', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. and web page editors now use Lorem Ipsum as their default model text, and a ... of model sentence structures, to generate Lorem Ipsum which looks reasonable.', 'House', 'Brand New', '1613344579', '1', 'uploads/1075197648aweso.jpg', '2-1613344579'),
(4, 1, 'New Toyota Camry for Sale', 2, 'Awka', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.', 'Cars', 'Brand New', '1613346266', '1', 'uploads/1499318032veg-2.jpg', '1-1613346266');

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
  `email_code` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone`, `photo`, `address`, `state`, `country`, `password`, `cookie_id`, `status`, `reg_date`, `last_seen`, `is_blocked`, `email_code`) VALUES
(1, 'Val', 'Afams', 'progfams@gmail.com', '+2348037514469', '', 'No 91B, Gate 5, Suite 301 Adeniyi Jones, Ikeja, Lagos State, Nigeria', 'Abia', '', '$2y$10$wi.Pp5zz5TNCpFh3Hz5ABePm6sW9LN5jKCr4SiD0GodRvhweSH7WO', '116128423521118273816', '10', '1613147296', 1614612035, 0, 'H7442'),
(2, 'Darlinton', '', 'darlington@gmail.com', '08037514461', '', '', 'Abuja FCT', '', '$2y$10$OsRSdS6kRZrZb90Qsqvit.GSpIU2QKAxWmjrGZ1uvYNeX0dhfyuVq', '', '0', '1614592188', 1614592321, 1, 'N6588'),
(3, 'Benedith', '', 'benedith@gmail.com', '08037514462', '', '', 'Abia', '', '$2y$10$Xm3U8bGcFqyRSsIr0UNy6erEOt22lPs72xxHOW9ntNpagK/sGi/BW', '', '0', '1614592650', 1614592650, 0, 'T1862');

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
(1, 0, 'Dashboard', 79, '::1', '0', 1614876832, 1),
(2, 1, 'Dashboard', 47, '::1', '0', 1614591936, 1),
(3, 1, 'MktPlace', 20, '::1', '0', 1613640589, 1),
(4, 1, 'About', 31, '::1', '0', 1614612035, 1),
(5, 1, 'Properties', 176, '::1', '0', 1613646230, 1),
(6, 0, 'Login', 28, '::1', '0', 1614851026, 1),
(7, 0, 'About', 30, '::1', '0', 1614876773, 1),
(8, 0, 'Properties', 27, '::1', '0', 1614849507, 1),
(9, 0, 'MktPlace', 13, '::1', '0', 1613640026, 1),
(10, 1, 'myAccount', 34, '::1', '0', 1613353082, 1),
(11, 0, 'Register', 11, '::1', '0', 1614592393, 1),
(12, 1, '404', 9, '::1', '0', 1613640542, 1),
(13, 0, '404', 8, '::1', '0', 1614589738, 1),
(14, 0, 'ContactUs', 40, '::1', '0', 1614849463, 1),
(15, 0, 'Terms&Condition', 3, '::1', '0', 1613639275, 1),
(16, 1, 'ContactUs', 1, '::1', '0', 1613640061, 1),
(17, 2, 'Dashboard', 3, '::1', '0', 1614592321, 1),
(18, 3, 'Dashboard', 1, '::1', '0', 1614592650, 1);

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
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `visited_pages`
--
ALTER TABLE `visited_pages`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
