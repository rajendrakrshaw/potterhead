-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2024 at 06:42 PM
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
-- Database: `potterhead`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '0001_01_01_000000_create_users_table', 1),
(6, '0001_01_01_000001_create_cache_table', 1),
(7, '0001_01_01_000002_create_jobs_table', 1),
(8, '2024_06_04_121430_create_products_table', 1),
(9, '2024_06_04_123231_products', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Product 1', 'Description for Product 1', 19.99, 'https://via.placeholder.com/300', '2024-06-04 07:12:41', '2024-06-04 07:12:41'),
(2, 'Product 2', 'Description for Product 2', 29.99, 'https://via.placeholder.com/300', '2024-06-04 07:12:41', '2024-06-04 07:12:41'),
(3, 'Product 2', 'Description for Product 2', 29.99, 'https://via.placeholder.com/300', '2024-06-04 07:12:41', '2024-06-04 07:12:41'),
(4, 'Product 2', 'Description for Product 2', 29.99, 'https://via.placeholder.com/300', '2024-06-04 07:12:41', '2024-06-04 07:12:41'),
(5, 'Product 2', 'Description for Product 2', 29.99, 'https://via.placeholder.com/300', '2024-06-04 07:12:41', '2024-06-04 07:12:41'),
(6, 'Product 2', 'Description for Product 2', 29.99, 'https://via.placeholder.com/300', '2024-06-04 07:12:41', '2024-06-04 07:12:41'),
(7, 'Product 2', 'Description for Product 2', 29.99, 'https://via.placeholder.com/300', '2024-06-04 07:12:41', '2024-06-04 07:12:41'),
(8, 'Product 2', 'Description for Product 2', 29.99, 'https://via.placeholder.com/300', '2024-06-04 07:12:41', '2024-06-04 07:12:41'),
(9, 'Product 2', 'Description for Product 2', 29.99, 'https://via.placeholder.com/300', '2024-06-04 07:12:41', '2024-06-04 07:12:41'),
(10, 'Product 2', 'Description for Product 2', 29.99, 'https://via.placeholder.com/300', '2024-06-04 07:12:41', '2024-06-04 07:12:41');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('kYR2yTJMs1HAfWSmBUu3Oc6xnEszh02nMEAf5zW4', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:126.0) Gecko/20100101 Firefox/126.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiNFRodThobGVIUUFMdnNFcHhScXh2NDcwUW1DeElEbWJ5V3ZmNWEzayI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NDoiY2FydCI7YTo3OntpOjU7YTo0OntzOjQ6Im5hbWUiO3M6OToiUHJvZHVjdCAyIjtzOjg6InF1YW50aXR5IjtpOjI7czo1OiJwcmljZSI7czo1OiIyOS45OSI7czo1OiJpbWFnZSI7czozMToiaHR0cHM6Ly92aWEucGxhY2Vob2xkZXIuY29tLzMwMCI7fWk6MTthOjQ6e3M6NDoibmFtZSI7czo5OiJQcm9kdWN0IDEiO3M6ODoicXVhbnRpdHkiO2k6ODtzOjU6InByaWNlIjtzOjU6IjE5Ljk5IjtzOjU6ImltYWdlIjtzOjMxOiJodHRwczovL3ZpYS5wbGFjZWhvbGRlci5jb20vMzAwIjt9aTo0O2E6NDp7czo0OiJuYW1lIjtzOjk6IlByb2R1Y3QgMiI7czo4OiJxdWFudGl0eSI7aToxO3M6NToicHJpY2UiO3M6NToiMjkuOTkiO3M6NToiaW1hZ2UiO3M6MzE6Imh0dHBzOi8vdmlhLnBsYWNlaG9sZGVyLmNvbS8zMDAiO31pOjI7YTo0OntzOjQ6Im5hbWUiO3M6OToiUHJvZHVjdCAyIjtzOjg6InF1YW50aXR5IjtpOjQ7czo1OiJwcmljZSI7czo1OiIyOS45OSI7czo1OiJpbWFnZSI7czozMToiaHR0cHM6Ly92aWEucGxhY2Vob2xkZXIuY29tLzMwMCI7fWk6OTthOjQ6e3M6NDoibmFtZSI7czo5OiJQcm9kdWN0IDIiO3M6ODoicXVhbnRpdHkiO2k6MTtzOjU6InByaWNlIjtzOjU6IjI5Ljk5IjtzOjU6ImltYWdlIjtzOjMxOiJodHRwczovL3ZpYS5wbGFjZWhvbGRlci5jb20vMzAwIjt9aToxMDthOjQ6e3M6NDoibmFtZSI7czo5OiJQcm9kdWN0IDIiO3M6ODoicXVhbnRpdHkiO2k6MjtzOjU6InByaWNlIjtzOjU6IjI5Ljk5IjtzOjU6ImltYWdlIjtzOjMxOiJodHRwczovL3ZpYS5wbGFjZWhvbGRlci5jb20vMzAwIjt9aTozO2E6NDp7czo0OiJuYW1lIjtzOjk6IlByb2R1Y3QgMiI7czo4OiJxdWFudGl0eSI7aToxO3M6NToicHJpY2UiO3M6NToiMjkuOTkiO3M6NToiaW1hZ2UiO3M6MzE6Imh0dHBzOi8vdmlhLnBsYWNlaG9sZGVyLmNvbS8zMDAiO319fQ==', 1717509012);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
