-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 12:38 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `price` decimal(10,2) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `name`, `description`, `price`, `stock`, `image`, `created_at`, `updated_at`) VALUES
(5, '101', 'iPhone 14', 'Latest model with advanced features', 999.00, 50, '1731145241.png', '2024-11-09 09:40:41', '2024-11-09 09:40:41'),
(6, '102', 'Samsung Galaxy', 'Powerful phone with AMOLED display', 850.00, 75, '1731145295.jpg', '2024-11-09 09:41:35', '2024-11-09 09:41:35'),
(7, '103', 'MacBook Pro', 'High-performance laptop for professionals', 1299.00, 30, '1731145344.jpg', '2024-11-09 09:42:24', '2024-11-09 09:42:24'),
(8, '104', 'Sony Headphones', 'Noise-canceling wireless headphones', 299.00, 120, '1731145389.jpg', '2024-11-09 09:43:09', '2024-11-09 09:43:09'),
(9, '105', 'Nikon DSLR', 'High-resolution DSLR camera for photographers', 899.00, 20, '1731145433.webp', '2024-11-09 09:43:53', '2024-11-09 09:43:53'),
(10, '106', 'Dell Monitor', '27-inch 4K Ultra HD monitor', 450.00, 40, '1731145476.jpg', '2024-11-09 09:44:36', '2024-11-09 09:44:36'),
(11, '107', 'HP Printer', 'Wireless all-in-one color printer', 120.00, 65, '1731145521.webp', '2024-11-09 09:45:21', '2024-11-09 09:45:21'),
(12, '108', 'GoPro Hero 9', 'Action camera with 5K video resolution', 399.00, 15, '1731145576.webp', '2024-11-09 09:46:16', '2024-11-09 09:46:16'),
(13, '109', 'Fitbit Versa', 'Smartwatch with fitness tracking features', 199.00, 100, '1731145621.jpg', '2024-11-09 09:47:01', '2024-11-09 09:47:01'),
(14, '110', 'Amazon Echo', 'Smart speaker with Alexa voice assistant', 99.00, 200, '1731145657.jpg', '2024-11-09 09:47:37', '2024-11-09 09:47:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_id_unique` (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
