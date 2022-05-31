-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2022 at 08:57 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project5_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing_history`
--

CREATE TABLE `billing_history` (
  `billing_number` int(14) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing_history`
--

INSERT INTO `billing_history` (`billing_number`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '11', '2022-05-23 17:28:25', '2022-05-23 15:06:14'),
(2, '12', '2022-05-23 15:06:29', '2022-05-23 15:06:29'),
(3, '12', '2022-05-23 16:10:01', '2022-05-23 16:10:01'),
(4, '12', '2022-05-23 16:10:44', '2022-05-23 16:10:44'),
(5, '12', '2022-05-23 16:12:00', '2022-05-23 16:12:00'),
(6, '12', '2022-05-23 16:12:49', '2022-05-23 16:12:49'),
(7, '12', '2022-05-23 16:13:32', '2022-05-23 16:13:32'),
(8, '13', '2022-05-23 16:15:15', '2022-05-23 16:15:15'),
(9, '12', '2022-05-23 16:16:11', '2022-05-23 16:16:11'),
(10, '12', '2022-05-23 16:17:14', '2022-05-23 16:17:14'),
(11, '12', '2022-05-23 16:22:10', '2022-05-23 16:22:10'),
(12, '6', '2022-05-23 18:52:12', '2022-05-23 18:52:12'),
(13, '6', '2022-05-23 19:06:02', '2022-05-23 19:06:02'),
(14, '14', '2022-05-23 20:09:01', '2022-05-23 20:09:01'),
(15, '14', '2022-05-23 20:21:24', '2022-05-23 20:21:24'),
(16, '14', '2022-05-23 20:25:45', '2022-05-23 20:25:45'),
(17, '14', '2022-05-23 20:26:22', '2022-05-23 20:26:22'),
(18, '14', '2022-05-23 20:26:55', '2022-05-23 20:26:55'),
(19, '14', '2022-05-23 20:30:02', '2022-05-23 20:30:02'),
(20, '14', '2022-05-23 20:34:55', '2022-05-23 20:34:55'),
(21, '14', '2022-05-23 20:35:24', '2022-05-23 20:35:24'),
(22, '14', '2022-05-23 20:36:02', '2022-05-23 20:36:02'),
(23, '15', '2022-05-23 21:16:05', '2022-05-23 21:16:05'),
(24, '16', '2022-05-27 16:42:18', '2022-05-27 16:42:18'),
(25, '16', '2022-05-27 17:30:32', '2022-05-27 17:30:32'),
(26, '11', '2022-05-28 04:43:03', '2022-05-28 04:43:03'),
(27, '11', '2022-05-28 05:30:45', '2022-05-28 05:30:45'),
(28, '11', '2022-05-28 05:35:06', '2022-05-28 05:35:06'),
(29, '11', '2022-05-28 05:36:49', '2022-05-28 05:36:49'),
(30, '11', '2022-05-28 05:41:00', '2022-05-28 05:41:00'),
(31, '11', '2022-05-28 05:41:35', '2022-05-28 05:41:35'),
(32, '11', '2022-05-28 05:52:14', '2022-05-28 05:52:14'),
(33, '11', '2022-05-28 05:57:53', '2022-05-28 05:57:53'),
(34, '11', '2022-05-28 05:58:38', '2022-05-28 05:58:38'),
(35, '11', '2022-05-28 06:03:33', '2022-05-28 06:03:33'),
(36, '11', '2022-05-28 06:04:07', '2022-05-28 06:04:07'),
(37, '11', '2022-05-28 06:04:52', '2022-05-28 06:04:52'),
(38, '17', '2022-05-28 11:12:13', '2022-05-28 11:12:13'),
(39, '17', '2022-05-28 11:13:48', '2022-05-28 11:13:48'),
(40, '17', '2022-05-28 11:14:30', '2022-05-28 11:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `order_number` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_size` enum('S','M','L','XL','39','40','41','42','43','') NOT NULL,
  `order_price` float(14,2) NOT NULL,
  `order_quantity` int(100) NOT NULL,
  `order_subtotal` float(14,10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `product_id` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`order_number`, `user_id`, `product_image`, `product_name`, `product_color`, `product_size`, `order_price`, `order_quantity`, `order_subtotal`, `created_at`, `updated_at`, `product_id`) VALUES
(1, 17, 'img/DRESS/dress 6-1.PNG', 'STRAPLESS EMBROIDERED AND SILK LONG DRESS', 'Black', 'S', 6350.00, 1, 0.0000000000, '2022-05-28 17:20:02', '2022-05-28 17:20:02', 6),
(2, 17, 'img/DRESS/dress 6-1.PNG', 'STRAPLESS EMBROIDERED AND SILK LONG DRESS', 'Black', 'S', 6350.00, 1, 0.0000000000, '2022-05-28 17:20:29', '2022-05-28 17:20:29', 6),
(3, 17, 'img/DRESS/dress 6-1.PNG', 'STRAPLESS EMBROIDERED AND SILK LONG DRESS', 'Black', 'S', 6350.00, 1, 0.0000000000, '2022-05-28 17:21:08', '2022-05-28 17:21:08', 6),
(4, 17, 'img/DRESS/dress 6-1.PNG', 'STRAPLESS EMBROIDERED AND SILK LONG DRESS', 'Black', 'S', 6350.00, 1, 0.0000000000, '2022-05-28 17:22:52', '2022-05-28 17:22:52', 6),
(5, 17, 'img/DRESS/dress 6-1.PNG', 'STRAPLESS EMBROIDERED AND SILK LONG DRESS', 'Black', 'S', 6350.00, 1, 0.0000000000, '2022-05-28 17:25:04', '2022-05-28 17:25:04', 6),
(6, 17, 'img/DRESS/dress 6-1.PNG', 'STRAPLESS EMBROIDERED AND SILK LONG DRESS', 'Black', 'S', 6350.00, 1, 0.0000000000, '2022-05-28 17:25:59', '2022-05-28 17:25:59', 6),
(7, 17, 'img/DRESS/dress 6-1.PNG', 'STRAPLESS EMBROIDERED AND SILK LONG DRESS', 'Black', 'S', 6350.00, 1, 0.0000000000, '2022-05-28 17:26:26', '2022-05-28 17:26:26', 6),
(8, 17, 'img/DRESS/dress 6-1.PNG', 'STRAPLESS EMBROIDERED AND SILK LONG DRESS', 'Black', 'L', 6350.00, 1, 0.0000000000, '2022-05-28 17:26:34', '2022-05-28 17:26:34', 6);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(14) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `is_deleted`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 0, 'Suit', '2022-05-23 10:42:24', '2022-05-23 07:42:24'),
(2, 0, 'Dress', '2022-05-23 10:40:06', '2022-05-23 07:40:06'),
(3, 0, 'Men\'s Shoes', '2022-05-23 10:43:12', '2022-05-23 07:43:12'),
(4, 0, 'Women\'s shoes', '2022-05-23 10:44:50', '2022-05-23 07:44:50'),
(5, 0, 'Accessories', '2022-05-23 10:47:31', '2022-05-23 07:47:31');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(14) NOT NULL,
  `bill_id` int(14) NOT NULL,
  `order_number` int(11) NOT NULL,
  `user_id` int(100) NOT NULL,
  `product_id` int(100) NOT NULL,
  `order_quantity` int(14) NOT NULL,
  `order_subtotal` float(10,5) NOT NULL,
  `total` float(10,5) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street_address` varchar(255) NOT NULL,
  `zipcode` int(100) NOT NULL,
  `phone` int(100) NOT NULL,
  `order_email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `bill_id`, `order_number`, `user_id`, `product_id`, `order_quantity`, `order_subtotal`, `total`, `first_name`, `last_name`, `country`, `state`, `city`, `street_address`, `zipcode`, `phone`, `order_email`, `created_at`, `updated_at`) VALUES
(215, 11, 0, 7, 3, 0, 0.00000, 0.00000, 'Bahaa', 'ali', 'Jordan', 'aqaba', 'aqaba', 'farabi', 77710, 0, 'ali@yahoo.com', '2022-05-23 13:47:20', '2022-05-23 13:47:20'),
(219, 0, 0, 12, 53, 0, 0.00000, 0.00000, 'Raghad', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-23 14:56:43', '2022-05-23 14:56:43'),
(220, 0, 0, 12, 53, 0, 0.00000, 0.00000, 'Raghad', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-23 15:06:14', '2022-05-23 15:06:14'),
(221, 0, 0, 12, 53, 0, 0.00000, 0.00000, 'Raghad', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-23 15:06:29', '2022-05-23 15:06:29'),
(243, 0, 144821, 12, 19, 4, 0.00000, 0.00000, 'Raghad', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-23 16:22:10', '2022-05-23 16:22:10'),
(244, 0, 144818, 6, 20, 1, 649.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-23 18:52:06', '2022-05-23 18:52:06'),
(245, 0, 144820, 6, 53, 1, 500.00000, 649.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-23 18:52:06', '2022-05-23 18:52:06'),
(246, 0, 144821, 6, 19, 4, 2396.00000, 1149.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-23 18:52:06', '2022-05-23 18:52:06'),
(247, 0, 144821, 6, 19, 4, 0.00000, 0.00000, 'Raghad', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-23 18:52:12', '2022-05-23 18:52:12'),
(258, 0, 144822, 14, 54, 4, 920.00000, 3000.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-23 20:26:13', '2022-05-23 20:26:13'),
(259, 0, 144822, 14, 54, 4, 0.00000, 0.00000, 'samar', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-23 20:26:22', '2022-05-23 20:26:22'),
(260, 17, 0, 14, 0, 0, 0.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-23 20:26:22', '2022-05-23 20:26:22'),
(261, 0, 0, 14, 0, 0, 0.00000, 0.00000, 'ali', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-23 20:26:55', '2022-05-23 20:26:55'),
(262, 18, 0, 14, 0, 0, 0.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-23 20:26:55', '2022-05-23 20:26:55'),
(263, 0, 144820, 14, 53, 6, 3000.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-23 20:29:54', '2022-05-23 20:29:54'),
(264, 0, 144822, 14, 54, 4, 920.00000, 3000.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-23 20:29:54', '2022-05-23 20:29:54'),
(265, 0, 144822, 14, 54, 4, 0.00000, 0.00000, 'rawan', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-23 20:30:02', '2022-05-23 20:30:02'),
(266, 0, 144822, 14, 54, 4, 0.00000, 0.00000, 'Raghad', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-23 20:34:55', '2022-05-23 20:34:55'),
(267, 21, 144822, 14, 54, 4, 0.00000, 0.00000, 'Raghad', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-23 20:35:24', '2022-05-23 20:35:24'),
(268, 0, 144823, 14, 54, 2, 460.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-23 20:35:54', '2022-05-23 20:35:54'),
(269, 22, 144823, 14, 54, 2, 0.00000, 0.00000, 'ibrahim', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-23 20:36:02', '2022-05-23 20:36:02'),
(270, 0, 144823, 15, 54, 2, 460.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-23 21:15:53', '2022-05-23 21:15:53'),
(271, 0, 144824, 15, 55, 2, 920.00000, 460.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-23 21:15:53', '2022-05-23 21:15:53'),
(272, 23, 144824, 15, 55, 2, 0.00000, 0.00000, 'Obada', 'Ali', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-23 21:16:05', '2022-05-23 21:16:05'),
(273, 0, 144823, 16, 54, 2, 460.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-27 16:42:09', '2022-05-27 16:42:09'),
(274, 0, 144824, 16, 55, 2, 920.00000, 460.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-27 16:42:09', '2022-05-27 16:42:09'),
(275, 0, 144825, 16, 30, 1, 950.00000, 1380.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-27 16:42:09', '2022-05-27 16:42:09'),
(276, 24, 144825, 16, 30, 1, 0.00000, 0.00000, 'Raghad', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-27 16:42:18', '2022-05-27 16:42:18'),
(277, 0, 144823, 16, 54, 2, 460.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-27 16:42:58', '2022-05-27 16:42:58'),
(278, 0, 144824, 16, 55, 2, 920.00000, 460.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-27 16:42:58', '2022-05-27 16:42:58'),
(279, 0, 144825, 16, 30, 1, 950.00000, 1380.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-27 16:42:58', '2022-05-27 16:42:58'),
(280, 0, 144823, 16, 54, 2, 460.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-27 17:30:20', '2022-05-27 17:30:20'),
(281, 0, 144824, 16, 55, 2, 920.00000, 460.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-27 17:30:20', '2022-05-27 17:30:20'),
(282, 0, 144825, 16, 30, 1, 950.00000, 1380.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-27 17:30:20', '2022-05-27 17:30:20'),
(283, 25, 144825, 16, 30, 1, 0.00000, 0.00000, 'Raghad', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-27 17:30:32', '2022-05-27 17:30:32'),
(284, 0, 144823, 16, 54, 2, 460.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-27 17:39:15', '2022-05-27 17:39:15'),
(285, 0, 144824, 16, 55, 2, 920.00000, 460.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-27 17:39:15', '2022-05-27 17:39:15'),
(286, 0, 144825, 16, 30, 4, 3800.00000, 1380.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-27 17:39:15', '2022-05-27 17:39:15'),
(287, 0, 144823, 16, 54, 2, 460.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-27 17:39:58', '2022-05-27 17:39:58'),
(288, 0, 144824, 16, 55, 2, 920.00000, 460.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-27 17:39:58', '2022-05-27 17:39:58'),
(289, 0, 144825, 16, 30, 4, 3800.00000, 1380.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-27 17:39:58', '2022-05-27 17:39:58'),
(290, 0, 144823, 11, 54, 2, 460.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 04:43:00', '2022-05-28 04:43:00'),
(291, 0, 144824, 11, 55, 2, 920.00000, 460.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 04:43:00', '2022-05-28 04:43:00'),
(292, 0, 144825, 11, 30, 4, 3800.00000, 1380.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 04:43:00', '2022-05-28 04:43:00'),
(293, 0, 144827, 11, 5, 1, 8770.00000, 5180.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 04:43:00', '2022-05-28 04:43:00'),
(294, 26, 144827, 11, 5, 1, 0.00000, 0.00000, 'Raghad', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-28 04:43:03', '2022-05-28 04:43:03'),
(295, 0, 144824, 11, 55, 1, 460.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 05:30:42', '2022-05-28 05:30:42'),
(296, 0, 144825, 11, 30, 4, 3800.00000, 460.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 05:30:42', '2022-05-28 05:30:42'),
(297, 0, 144827, 11, 5, 1, 8770.00000, 4260.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 05:30:42', '2022-05-28 05:30:42'),
(298, 27, 144827, 11, 5, 1, 0.00000, 0.00000, 'Raghad', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-28 05:30:45', '2022-05-28 05:30:45'),
(299, 0, 1, 11, 20, 1, 649.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 05:35:02', '2022-05-28 05:35:02'),
(300, 28, 1, 11, 20, 1, 0.00000, 0.00000, 'Raghad', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-28 05:35:06', '2022-05-28 05:35:06'),
(301, 0, 1, 11, 51, 1, 240.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 05:36:45', '2022-05-28 05:36:45'),
(302, 29, 1, 11, 51, 1, 0.00000, 0.00000, 'Raghad', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-28 05:36:49', '2022-05-28 05:36:49'),
(303, 0, 1, 11, 51, 1, 240.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 05:40:53', '2022-05-28 05:40:53'),
(304, 0, 2, 11, 30, 2, 1900.00000, 240.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 05:40:53', '2022-05-28 05:40:53'),
(305, 30, 2, 11, 30, 2, 0.00000, 0.00000, 'Raghad', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-28 05:41:00', '2022-05-28 05:41:00'),
(306, 0, 3, 11, 5, 1, 8770.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 05:41:30', '2022-05-28 05:41:30'),
(307, 0, 4, 11, 1, 2, 11000.00000, 8770.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 05:41:30', '2022-05-28 05:41:30'),
(308, 31, 4, 11, 1, 2, 0.00000, 0.00000, 'Raghad', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-28 05:41:35', '2022-05-28 05:41:35'),
(309, 0, 3, 11, 5, 1, 8770.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 05:52:00', '2022-05-28 05:52:00'),
(310, 0, 4, 11, 1, 2, 11000.00000, 8770.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 05:52:00', '2022-05-28 05:52:00'),
(311, 0, 5, 11, 33, 1, 1490.00000, 19770.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 05:52:00', '2022-05-28 05:52:00'),
(312, 32, 5, 11, 33, 1, 0.00000, 0.00000, 'Raghad', 'omar', 'Jordan', 'aqaba', 'Amman', '77710', 77710, 0, 'al@gmail.com', '2022-05-28 05:52:14', '2022-05-28 05:52:14'),
(313, 0, 1, 11, 20, 1, 649.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 05:57:38', '2022-05-28 05:57:38'),
(314, 33, 1, 11, 20, 1, 0.00000, 0.00000, 'Raghad', 'omar', 'Jordan', 'aqaba', 'Aqaba', '77710', 77710, 22222222, 'al@gmail.com', '2022-05-28 05:57:53', '2022-05-28 05:57:53'),
(315, 0, 1, 11, 5, 1, 8770.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 05:58:26', '2022-05-28 05:58:26'),
(316, 34, 1, 11, 5, 1, 0.00000, 0.00000, 'Raghad', 'omar', 'Jordan', 'aqaba', 'Aqaba', '77710', 77710, 0, 'al@gmail.com', '2022-05-28 05:58:38', '2022-05-28 05:58:38'),
(317, 0, 1, 11, 30, 1, 950.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 06:03:20', '2022-05-28 06:03:20'),
(318, 35, 1, 11, 30, 1, 0.00000, 0.00000, 'Raghad', 'omar', 'Jordan', 'aqaba', 'Aqaba', '77710', 77710, 0, 'al@gmail.com', '2022-05-28 06:03:33', '2022-05-28 06:03:33'),
(319, 0, 1, 11, 20, 1, 649.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 06:03:54', '2022-05-28 06:03:54'),
(320, 36, 1, 11, 20, 1, 0.00000, 0.00000, 'Raghad', 'omar', 'Jordan', 'aqaba', 'Aqaba', '77710', 77710, 22222222, 'al@gmail.com', '2022-05-28 06:04:07', '2022-05-28 06:04:07'),
(321, 0, 1, 11, 20, 1, 649.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 06:04:22', '2022-05-28 06:04:22'),
(322, 37, 1, 11, 20, 1, 0.00000, 0.00000, 'Raghad', 'omar', 'Jordan', 'aqaba', 'Aqaba', '77710', 77710, 0, 'al@gmail.com', '2022-05-28 06:04:52', '2022-05-28 06:04:52'),
(323, 0, 1, 11, 20, 1, 649.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 06:29:16', '2022-05-28 06:29:16'),
(324, 0, 1, 17, 20, 1, 649.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 11:11:27', '2022-05-28 11:11:27'),
(325, 0, 2, 17, 30, 1, 950.00000, 649.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 11:11:27', '2022-05-28 11:11:27'),
(326, 0, 3, 17, 20, 1, 649.00000, 1599.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 11:11:27', '2022-05-28 11:11:27'),
(327, 38, 3, 17, 20, 1, 0.00000, 0.00000, 'Ibrahim', 'Tamimi', 'Jordan', 'Aqaba', 'Aqaba', '123M', 77110, 2147483647, 'ibrahim98@gmail.com', '2022-05-28 11:12:13', '2022-05-28 11:12:13'),
(328, 0, 1, 17, 20, 1, 649.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 11:13:39', '2022-05-28 11:13:39'),
(329, 0, 2, 17, 30, 1, 950.00000, 649.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 11:13:39', '2022-05-28 11:13:39'),
(330, 0, 3, 17, 20, 1, 649.00000, 1599.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 11:13:39', '2022-05-28 11:13:39'),
(331, 0, 1, 17, 20, 1, 649.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 11:13:45', '2022-05-28 11:13:45'),
(332, 0, 2, 17, 30, 1, 950.00000, 649.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 11:13:45', '2022-05-28 11:13:45'),
(333, 0, 3, 17, 20, 1, 649.00000, 1599.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 11:13:45', '2022-05-28 11:13:45'),
(334, 39, 3, 17, 20, 1, 0.00000, 0.00000, 'Raghad', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-28 11:13:48', '2022-05-28 11:13:48'),
(335, 0, 1, 17, 20, 1, 649.00000, 0.00000, '', '', '', '', '', '', 0, 0, '', '2022-05-28 11:14:23', '2022-05-28 11:14:23'),
(336, 40, 1, 17, 20, 1, 0.00000, 0.00000, 'Raghad', 'ALKarasneh', 'Jordan', 'aqaba', 'Aqaba', 'Farabi', 77110, 2147483647, 'raghad.karasneh@gmail.com', '2022-05-28 11:14:30', '2022-05-28 11:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `product_id` int(14) NOT NULL,
  `user_id` int(14) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `user_last_name` varchar(255) NOT NULL,
  `product_comment` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `product_id`, `user_id`, `user_first_name`, `user_last_name`, `product_comment`, `created_at`, `updated_at`) VALUES
(194, 6, 6, 'Raghad', 'ALKarasneh', '                    hh', '2022-05-21 21:25:08', '2022-05-21 21:25:08'),
(195, 29, 11, 'Aya', 'sawa', '     very comfortable               ', '2022-05-22 11:40:51', '2022-05-22 11:40:51'),
(196, 4, 13, 'Raghad', 'ALKarasneh', '                        hello', '2022-05-23 09:04:57', '2022-05-23 09:04:57'),
(197, 4, 13, 'Raghad', 'ALKarasneh', ' new                        ', '2022-05-23 09:20:50', '2022-05-23 09:20:50'),
(198, 24, 13, 'Raghad', 'ALKarasneh', 'bravo', '2022-05-23 18:17:00', '2022-05-23 18:17:00'),
(199, 17, 13, 'Raghad', 'ALKarasneh', 'Wonderful', '2022-05-23 19:05:29', '2022-05-23 19:05:29'),
(200, 30, 16, 'Raghad', 'ALKarasneh', 'A new comment', '2022-05-27 16:47:08', '2022-05-27 16:47:08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_image` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_price` float(110,2) NOT NULL,
  `product_quantity` int(100) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `product_size` enum('S','M','L','XL','39','40','41','42','43','') NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_image`, `product_name`, `product_category`, `product_price`, `product_quantity`, `product_color`, `product_size`, `product_description`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'img/DRESS/dress 1-1.PNG', 'STRAPLESS STREAKED DRESS', 'Dress', 5500.00, 1, 'Black', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 1, '2022-05-21 16:42:48', '2022-05-21 16:42:48'),
(4, 'img/DRESS/dress 4-1.PNG', 'LONG BEAD EMBROIDERED RUFFLED DRESS', 'Dress', 17100.00, 1, 'Gold', 'L', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 1, '2022-05-21 17:18:51', '2022-05-21 17:18:51'),
(5, 'img/DRESS/dress 5-1.PNG', 'MULTICOLOR EMBROIDERED LONG DRESS', 'Dress', 8770.00, 1, 'Orange', 'XL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 1, '2022-05-21 17:18:51', '2022-05-21 17:18:51'),
(6, 'img/DRESS/dress 6-1.PNG', 'STRAPLESS EMBROIDERED AND SILK LONG DRESS', 'Dress', 6350.00, 1, 'Black', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 1, '2022-05-21 17:18:51', '2022-05-21 17:18:51'),
(7, 'img/DRESS/dress 7-1.PNG', 'ASYMMETRIC WHITE LONG DRESS', 'Dress', 2350.00, 1, 'White', 'S', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 1, '2022-05-21 17:18:51', '2022-05-21 17:18:51'),
(8, 'img/DRESS/dress 8-1.PNG', 'OCEAN BLUE BLOUSE', 'Dress', 1600.00, 1, 'Blue', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 1, '2022-05-21 17:18:51', '2022-05-21 17:18:51'),
(10, 'img/DRESS/N dress 2-1.png', 'HALTER', 'Dress', 9995.00, 1, 'Red', 'M', 'Lorem', 0, '2022-05-21 17:18:51', '2022-05-21 17:18:51'),
(11, 'img/DRESS/N dress 3-1.PNG', 'FIT AND FLARE GOWN', 'Dress', 6995.00, 1, 'Black and Gold', 'L', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 17:18:51', '2022-05-21 17:18:51'),
(12, 'img/DRESS/R dress 1-1.PNG', 'HANDCRAFTED FEATHERED & BEADED TUBINO PARTY DRESS', 'Dress', 6366.00, 1, 'Yellow', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 17:18:51', '2022-05-21 17:18:51'),
(13, 'img/DRESS/R dress 2-1.PNG', 'UNIQUE DESIGNER PARTY DRESS EMBELLISHED WITH FEATHERS AND BROOCHES', 'Dress', 8538.00, 1, 'Pink', 'S', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 17:18:51', '2022-05-21 17:18:51'),
(14, 'img/DRESS/R dress 3-1.PNG', 'DESIGNER ORANGE TULLE VOLUME DRESS', 'Dress', 7668.00, 1, 'Orange', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 17:18:51', '2022-05-21 17:18:51'),
(15, 'img/DRESS/R dress 4-1.PNG', 'GUIPURE T- LENGTH WHITE DRESS DECORATED WITH FEATHERS', 'Dress', 12000.00, 1, 'White', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 17:18:51', '2022-05-21 17:18:51'),
(16, 'img/DRESS/R dress 5-1.PNG', 'UNIQUE ELECTRIC BLUE ASYMMETRICAL COCKTAIL DRESS', 'Dress', 5256.00, 1, 'Blue', 'S', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 17:18:51', '2022-05-21 17:18:51'),
(17, 'img/DRESS/R dress 6-1.PNG', 'HANDCRAFTED LAYERED SAGE BLUE TULLE COCKTAIL DRESS', 'Dress', 7428.00, 1, 'Blue', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 17:18:51', '2022-05-21 17:18:51'),
(18, 'img/SUIT/suit 1-1.PNG', 'Navy Havana Tuxedo Suit', 'Suit', 699.00, 1, 'Navy', 'L', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 17:18:51', '2022-05-21 17:18:51'),
(19, 'img/SUIT/suit 2-1.PNG', 'Black Havana Tuxedo Suit', 'Suit', 599.00, 1, 'Black', 'XL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 17:18:51', '2022-05-21 17:18:51'),
(20, 'img/SUIT/suit 3-1.PNG', 'Navy Havana Suit', 'Suit', 649.00, 1, 'Navy', 'XL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 17:18:51', '2022-05-21 17:18:51'),
(21, 'img/SUIT/suit 4-1.PNG', 'Navy Lazio Suit', 'Suit', 999.00, 1, 'Navy', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 17:18:51', '2022-05-21 17:18:51'),
(22, 'img/SUIT/suit 5-1.PNG', 'Mid Grey Napoli Suit', 'Suit', 499.00, 1, 'Grey', 'L', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:11:00', '2022-05-21 18:11:00'),
(23, 'img/SUIT/suit 6-1.PNG', 'EXTRA-SLIM-FIT VIRGIN-WOOL SUIT WITH MICRO PATTERN', 'Suit', 1195.00, 1, 'Nevy', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:11:00', '2022-05-21 18:11:00'),
(24, 'img/SUIT/suit 7-1.PNG', 'THREE-PIECE EXTRA-SLIM-FIT SUIT WITH MICRO PATTERN', 'Suit', 995.00, 1, 'Grey', 'S', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:11:00', '2022-05-21 18:11:00'),
(25, 'img/SUIT/suit 8-1.png', 'EXTRA-SLIM-FIT SUIT IN PATTERNED STRETCH WOOL', 'Suit', 1295.00, 1, 'Nevy', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:11:00', '2022-05-21 18:11:00'),
(26, 'img/SUIT/suit 9-1.png', 'THREE-PIECE SLIM-FIT SUIT IN VIRGIN WOOL', 'Suit', 1295.00, 1, 'Beige', 'XL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:11:00', '2022-05-21 18:11:00'),
(27, 'img/SUIT/suit 10-1.png', 'THREE-PIECE SLIM-FIT SUIT IN CHECKED VIRGIN WOOL', 'SUIT', 1295.00, 1, 'Nevy', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:11:00', '2022-05-21 18:11:00'),
(28, 'img/MEN SHOES/shoes 1-2.PNG', 'CHILTERN ROLLER BAR LOAFER', 'Men\'s Shoes', 795.00, 1, 'Black', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:11:00', '2022-05-21 18:11:00'),
(29, 'img/MEN SHOES/shoes 2-2.PNG', 'KENSINGTON DERBY', 'Men\'s Shoes', 795.00, 1, 'Black', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:11:00', '2022-05-21 18:11:00'),
(30, 'img/MEN SHOES/shoes 3-2.webp', 'KENSINGTON CHELSEA BOOT', 'Men\'s Shoes', 950.00, 1, 'Black', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:11:00', '2022-05-21 18:11:00'),
(31, 'img/MEN SHOES/shoes 4-2.webp', 'DUNHILL LINK SOFT LOAFER', 'Men\'s Shoes', 950.00, 1, 'Black', 'L', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:11:00', '2022-05-21 18:11:00'),
(32, 'img/MEN SHOES/shoes 5-2.webp', 'KENSINGTON CHELSEA BOOT SUEDE', 'Men\'s Shoes', 895.00, 1, 'Brown', 'L', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:11:00', '2022-05-21 18:11:00'),
(33, 'img/MEN SHOES/shoes 6-2.png', 'LEATHER CLAYDON LACE UP', 'Men\'s Shoes', 1490.00, 1, 'Black', 'XL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:11:00', '2022-05-21 18:11:00'),
(34, 'img/MEN SHOES/shoes 7-1.png', 'BUFFALO GRAIN NICOLAS SLIPPER', 'Men\'s Shoes', 1490.00, 1, 'Black', 'S', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:11:00', '2022-05-21 18:11:00'),
(35, 'img/MEN SHOES/shoes 8-1.png', 'SUEDE BERWICK LOAFER', 'Men\'s Shoes', 990.00, 1, 'Black', 'XL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:11:00', '2022-05-21 18:11:00'),
(36, 'img/MEN SHOES/shoes 9-1.png', 'SUEDE DOVER LOAFER', 'Men\'s Shoes', 1590.00, 1, 'Brown', 'S', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:11:00', '2022-05-21 18:11:00'),
(37, 'img/MEN SHOES/shoes 10-2.png', 'WILLIAM TASSEL LOAFERS', 'Men\'s Shoes', 1680.00, 1, 'Black', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:11:00', '2022-05-21 18:11:00'),
(38, 'img/MEN SHOES/shoes 11-1.png', 'SUEDE SEAN TASSEL LOAFER', 'Men\'s Shoes', 1290.00, 1, 'Brown', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:11:00', '2022-05-21 18:11:00'),
(39, 'img/MEN SHOES/shoes 12-2.png', 'BUTTERY LARGE GRAIN DOVER LOAFER', 'Men\'s Shoes', 1690.00, 1, 'Black', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:11:00', '2022-05-21 18:11:00'),
(40, 'img/WOMEN SHOES/shoes 1-1.webp', 'Oriana 110 satin sandals', 'Women\'s Shoes', 755.00, 1, 'Blue', 'S', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:11:00', '2022-05-21 18:11:00'),
(41, 'img/WOMEN SHOES/shoes 2-1.webp', 'Azia 95 glitter-embellished sandals', 'Women\'s shoes', 529.00, 1, 'Gold', 'L', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 18:15:50', '2022-05-21 18:15:50'),
(42, 'img/WOMEN SHOES/shoes 5-1.webp', 'Averly 100 bow-trimmed pumps', 'Women\'s shoes', 715.00, 1, 'Red', 'L', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 19:10:18', '2022-05-21 19:10:18'),
(43, 'img/WOMEN SHOES/shoes 6-1.webp', 'Navy Blue Nappa Leather Pointed Toe Pumps', 'Women\'s shoes', 925.00, 1, 'Nevy', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 19:10:18', '2022-05-21 19:10:18'),
(44, 'img/WOMEN SHOES/shoes 3-1.webp', 'Love 100 glitter-tulle pumps', 'Women\'s shoes', 529.00, 1, 'White', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 19:10:18', '2022-05-21 19:10:18'),
(45, 'img/WOMEN SHOES/shoes 4-1.webp', 'x Mugler leather pumps', 'Women\'s shoes', 755.00, 1, 'Black', 'S', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 19:10:18', '2022-05-21 19:10:18'),
(47, 'img/WOMEN SHOES/shoes 8-1.webp', 'HANGISI VELVET', 'Women\'s shoes', 1145.00, 1, 'Black', 'XL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 19:26:45', '2022-05-21 19:26:45'),
(48, 'img/WOMEN SHOES/shoes 9-2.webp', 'CHAOS', 'Women\'s shoes', 775.00, 1, 'Beige', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 19:26:45', '2022-05-21 19:26:45'),
(49, 'img/WOMEN SHOES/shoes 10-1.webp', 'Black Crepe De Chine Bow Strappy Sandals', 'Wonen\'s shoes', 975.00, 1, 'Black', 'L', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 19:26:45', '2022-05-21 19:26:45'),
(50, 'img/WOMEN SHOES/shoes 11-1.webp', 'Black Patent and Satin Strappy Sandals', 'Women\'s shoes', 895.00, 1, 'Black', 'XL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 19:26:45', '2022-05-21 19:26:45'),
(51, 'img/Accessories/access 1-2.webp', 'Classic Cut Check Silk Tie', 'Accessories', 240.00, 1, 'Beige', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 19:26:45', '2022-05-21 19:26:45'),
(52, 'img/WOMEN SHOES/shoes 7-1.webp', 'Dark Green Satin Crystal Embellished Sandals', 'Women\'s shoes', 1395.00, 1, 'Green', 'L', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 19:10:18', '2022-05-21 19:10:18'),
(53, 'img/Accessories/access 2-2.webp', 'Reversible Monogram Motif Leather Belt', 'Accessories', 500.00, 1, 'Black', 'XL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 19:26:45', '2022-05-21 19:26:45'),
(54, 'img/Accessories/access 3-2.webp', 'Icon Stripe Detail Square Frame Sunglasses', 'Accessories', 230.00, 1, 'Pink', 'L', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 19:26:45', '2022-05-21 19:26:45'),
(55, 'img/Accessories/access 4-2.webp', 'Medium Vintage Check Cotton Olympia Pouch – Online ExclusivePrice', 'Accessories', 460.00, 1, 'Beige', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 19:26:45', '2022-05-21 19:26:45'),
(56, 'img/Accessories/access 5-1.webp', 'London Check and Leather International Bifold Wallet', 'Accessories', 400.00, 1, 'Black', 'XL', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 19:26:45', '2022-05-21 19:26:45'),
(57, 'img/Accessories/access 7-1.PNG', 'Tulle gloves with polka-dots', 'Accessories', 560.00, 1, 'Black', 'M', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 19:26:45', '2022-05-21 19:26:45'),
(58, 'img/Accessories/access 6-2.webp', 'Monogram Motif Palladium-plated CufflinksPrice', 'Accessories', 400.00, 1, 'Silver', 'S', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 19:32:11', '2022-05-21 19:32:11'),
(59, 'img/Accessories/access 8-1.PNG', 'Specialized fit navigator sunglasses', 'Accessories', 1190.00, 1, 'Brown', 'L', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 19:32:11', '2022-05-21 19:32:11'),
(60, 'img/Accessories/access 9-1.PNG', 'G-Timeless watch, 42mm', 'Accessories', 1290.00, 1, 'Silver', 'S', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor i', 0, '2022-05-21 19:33:57', '2022-05-21 19:33:57'),
(78, '', 'Dress', '', 750.00, 0, 'Black', 'L', 'Loraem', 0, '2022-05-22 06:51:53', '2022-05-22 06:51:53'),
(79, '', 'Dress', '', 750.00, 0, 'Black', 'L', 'Loraem', 0, '2022-05-22 07:44:04', '2022-05-22 07:44:04'),
(80, '', 'Dress', '', 750.00, 0, 'Black', 'L', 'Loraem', 0, '2022-05-22 12:04:32', '2022-05-22 12:04:32');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `ord_num` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`ord_num`, `user_id`, `total`, `created_at`) VALUES
(1, 1, 1500, '0000-00-00 00:00:00'),
(6, 6, 30, '2022-05-23 17:05:16'),
(11, 12, 3545, '2022-05-23 17:05:24'),
(26, 11, 13950, '2022-05-28 04:47:46'),
(27, 11, 13030, '2022-05-28 05:30:45'),
(28, 11, 649, '2022-05-28 05:35:06'),
(29, 11, 240, '2022-05-28 05:36:49'),
(30, 11, 2140, '2022-05-28 05:41:00'),
(31, 11, 19770, '2022-05-28 05:41:35'),
(32, 11, 21260, '2022-05-28 05:52:14'),
(33, 11, 649, '2022-05-28 05:57:53'),
(34, 11, 8770, '2022-05-28 05:58:38'),
(35, 11, 950, '2022-05-28 06:03:33'),
(36, 11, 649, '2022-05-28 06:04:07'),
(37, 11, 649, '2022-05-28 06:04:52'),
(38, 17, 2248, '2022-05-28 11:12:13'),
(39, 17, 2248, '2022-05-28 11:13:48'),
(40, 17, 649, '2022-05-28 11:14:30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `user_first_name` varchar(255) NOT NULL,
  `user_last_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `phone_num` int(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `age` int(100) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `is_admin` tinyint(1) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_first_name`, `user_last_name`, `user_email`, `phone_num`, `user_password`, `age`, `gender`, `is_admin`, `is_deleted`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'admin', 'admin@gmail.com', 1896541235, 'Admin*1234', 25, 'female', 1, 0, '2022-05-21 22:39:12', '2022-05-21 22:39:12'),
(6, 'Hadi', 'ALKarasneh', 'raghad@gmail.com', 2147483647, 'Abcd*1234', 25, 'female', 0, 1, '2022-05-21 20:10:53', '2022-05-21 20:10:53'),
(8, 'aya2', 'ahmad', 'aya@gmail.com', 2147483647, 'Abcd*1234', 25, 'female', 0, 1, '2022-05-22 07:42:42', '2022-05-22 07:42:42'),
(11, 'Aya', 'sawa', 'hadi@gmail.com', 2147483647, 'Abcd*1234', 24, 'female', 0, 1, '2022-05-22 08:12:36', '2022-05-22 08:12:36'),
(12, 'Mousa', 'Alaa', 'mousa@yahoo.com', 2147483647, 'Abcd*1234', 25, 'male', 0, 1, '2022-05-22 11:59:16', '2022-05-22 11:59:16'),
(13, 'Raghad', 'ALKarasneh', 'raghad@hotmail.com', 2147483647, 'Abcd*1234', 25, 'female', 0, 0, '2022-05-23 06:40:54', '2022-05-23 06:40:54'),
(14, 'Raghad', 'ALKarasneh', 'sami@gmail.com', 2147483647, 'Abcd*1234', 25, 'female', 0, 0, '2022-05-23 20:07:58', '2022-05-23 20:07:58'),
(15, 'Obada', 'ALKarasneh', 'obada@yahoo.com', 2147483647, 'Abcd*1234', 24, 'male', 0, 0, '2022-05-23 21:14:42', '2022-05-23 21:14:42'),
(16, 'Raghad', 'ALKarasneh', 'hadi@hotmail.com', 2147483647, 'Abcd*1234', 25, 'female', 0, 0, '2022-05-27 16:41:24', '2022-05-27 16:41:24'),
(17, 'Ibrahim', 'Tamimi', 'ibrahim98@gmail.com', 2147483647, 'Abcd*1234', 24, 'male', 0, 0, '2022-05-28 11:07:24', '2022-05-28 11:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `user_admin`
--

CREATE TABLE `user_admin` (
  `id` int(14) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_deleted` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_admin`
--

INSERT INTO `user_admin` (`id`, `email`, `password`, `is_deleted`, `created_at`, `updated_at`) VALUES
(0, 'raghad@gmail.com', '', 0, '2022-05-28 17:56:08', '2022-05-28 17:56:37'),
(1, 'admin', 'admin', 0, '2022-05-28 17:56:08', '2022-05-28 17:56:37'),
(2, 'ddha@gmail.com', '', 1, '2022-05-28 17:56:08', '2022-05-28 17:56:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing_history`
--
ALTER TABLE `billing_history`
  ADD PRIMARY KEY (`billing_number`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`order_number`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `Product_id` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `product_category` (`product_category`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`ord_num`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `user_admin`
--
ALTER TABLE `user_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `order_number` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
