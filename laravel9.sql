-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 09:59 AM
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
-- Database: `laravel9`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `id` int(120) NOT NULL,
  `userid` int(120) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`id`, `userid`, `address`) VALUES
(1, 2, 'm.gr nagar'),
(2, 2, 'wedfwefdwedf'),
(3, 2, 'lm lk@gmail.com'),
(4, 4, ''),
(5, 2, 'erode'),
(6, 4, 'erode'),
(7, 3, 'bhjffv'),
(8, 4, 'erode'),
(9, 4, 'pallipalayam');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(120) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `md_date` text NOT NULL DEFAULT '',
  `booktoken` int(120) NOT NULL,
  `id` int(120) NOT NULL,
  `address_id` int(120) NOT NULL,
  `mobliebrand` text NOT NULL,
  `moblieproblem` text DEFAULT NULL,
  `otherproble` text NOT NULL DEFAULT '',
  `status` text NOT NULL,
  `worker` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `date`, `md_date`, `booktoken`, `id`, `address_id`, `mobliebrand`, `moblieproblem`, `otherproble`, `status`, `worker`) VALUES
(5, '0000-00-00', '2021-08-13', 839903, 2, 3, 'dsa', 'small', ' ', 'waiting for service', 'saravanan'),
(6, '0000-00-00', '2021-08-14', 78579, 2, 3, 'ragr', 'small', ' ', 'waiting for service', 'saravanan'),
(7, '0000-00-00', '2021-08-14', 11322, 2, 3, 'ewfa', 'small', ' ', 'waiting for service', 'saravanan'),
(8, '0000-00-00', '2021-08-14', 568292, 2, 3, 'ewf', 'small', ' ', 'waiting for service', 'saravanan'),
(9, '0000-00-00', '2021-08-14', 595663, 2, 3, 'ewaf', 'small', ' ', 'waiting for service', 'saravanan'),
(10, '0000-00-00', '2021-08-14', 299908, 2, 3, 'Wd', 'medium', ' wd', 'waiting for service', 'saravanan'),
(11, '0000-00-00', '2021-08-14', 349970, 4, 6, 'redmi', 'medium', ' ', '', ''),
(12, '0000-00-00', '2021-08-14', 513491, 4, 6, 'redmi', 'display', ' ', '', ''),
(13, '2021-08-12', '2021-08-14', 989721, 4, 6, 'asAS', 'display', ' QSS', '', ''),
(14, '2021-08-12', '2021-08-14', 74418, 3, 7, 'mi', 'display', ' no', 'in process', 'test'),
(15, '2021-08-13', '2021-08-14', 4361811, 4, 6, 'redmi', 'charge', 'it not working', '', ''),
(16, '2021-08-13', '2021-08-14', 6297468, 4, 6, 'efewqf', NULL, 'fewf', '', ''),
(17, '2021-08-13', '2021-08-14', 6377435, 4, 6, 'rffg', NULL, 'erwww', '', ''),
(18, '2021-08-13', '2021-08-14', 6926187, 4, 6, 'ewqf', 'display', 'efqwef', '', ''),
(19, '2021-08-13', '2021-08-14', 9875085, 4, 6, 'r34r', NULL, '423', 'delivered', 'saravanan'),
(20, '2021-08-13', '2021-08-14', 3530251, 4, 6, '3e12e', 'charge', '3111111', 'delivered', 'saravanan'),
(21, '2021-08-13', '2021-08-14', 7973884, 4, 6, '31e43', NULL, 'i[0[0', 'delivered', 'saravanan'),
(22, '2021-08-14', '2021-08-14', 519646, 4, 9, 'red', 'charge', 'ewewq', 'delivered', 'saravanan'),
(23, '2021-08-14', '2021-08-17', 2207507, 4, 9, 'redmi', NULL, 'red', 'completed', 'saravanan');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(120) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `name` text NOT NULL,
  `email` text NOT NULL,
  `moblie` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `date`, `name`, `email`, `moblie`, `message`) VALUES
(1, '2021-08-10', 'saravananan sa asad', 'saravanan@hashref.in', '09876543210', 'frefefaW'),
(2, '2021-08-10', 'saravananan sa asad', 'saravanan@hashref.in', '09876543210', 'frefefaW'),
(3, '2021-08-10', 'saravananan sa asad', 'saravanan@hashref.in', '09876543210', 'add'),
(4, '2021-08-10', 'saravananan sa asad', 'saravanan@hashref.in', '09876543210', 'qde'),
(6, '2021-08-12', 'hfg', 'h@gmail.com', 'hg', 'hn'),
(7, '2021-08-12', 'saravananan s asad', 'saravanansri1999@gmail.com', '09876543210', 'o');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `moblieproble`
--

CREATE TABLE `moblieproble` (
  `id` int(11) NOT NULL,
  `problemtype` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `moblieproble`
--

INSERT INTO `moblieproble` (`id`, `problemtype`) VALUES
(1, 'charge'),
(2, 'display'),
(4, '3r3r'),
(5, 'not working');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('saravanansri1999@gmail.com', '$2y$10$ykphPQilRPNCGtKtsGrzsujLeYfDa961X6uNH8CPjmieuB82ZcqA2', '2021-08-09 11:56:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` bigint(1) DEFAULT 0,
  `moblie` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cr_date` date NOT NULL DEFAULT current_timestamp(),
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `moblie`, `password`, `cr_date`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@itsolutionstuff.com', NULL, 0, '', '$2y$10$n70JCVKgjQo.VGfh5Cb2guvmEEMCl.ETc36B/ybI/J/bIWcQzbVm.', '2021-08-13', NULL, '2021-08-09 11:44:03', '2021-08-09 11:44:03'),
(2, 'User', 'user@itsolutionstuff.com', NULL, 0, '', '$2y$10$r5D1RCsn2vY..m1nRwZv0.G/cvXknfyZ2w5j517N15NOt7sVFRstK', '2021-08-13', NULL, '2021-08-09 11:44:03', '2021-08-09 11:44:03'),
(3, 'admin', 'saravanansri1999@gmail.com', NULL, 1, '', '$2y$10$O0XxrNm//uPe3L.OiTcUY.R0P4w0Ixu84iNsI7myvJPRc0QHKrgwC', '2021-08-13', NULL, '2021-08-09 11:45:59', '2021-08-09 11:45:59'),
(4, 'saravananan s asad', 'krishna@hashref.in', NULL, 0, '1234567890', '$2y$10$GXwYmmopdyb9UGD3fXKUOOBWbNYPm1Kx0aa2W8Rx3p9yTYkDsZhai', '2021-08-13', NULL, '2021-08-10 01:16:11', '2021-08-10 01:16:11'),
(5, 'saravananan sa asad', 'test@gmail.com', NULL, 0, '1234567890', '$2y$10$FYcDEw172o128sg4pRhahef71TEndPxWuDif8mMEVJbJwFN00oNd2', '2021-08-13', NULL, '2021-08-13 04:05:55', '2021-08-13 04:05:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `moblieproble`
--
ALTER TABLE `moblieproble`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(120) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `moblieproble`
--
ALTER TABLE `moblieproble`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
