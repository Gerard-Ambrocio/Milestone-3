-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2017 at 10:32 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `milestone-3`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `user_id` varchar(191) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `display_name` varchar(191) DEFAULT NULL,
  `job_description` varchar(255) DEFAULT NULL,
  `location` varchar(255) NOT NULL,
  `rates` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `job_details` varchar(255) DEFAULT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `avatar` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `first_name`, `last_name`, `display_name`, `job_description`, `location`, `rates`, `description`, `job_details`, `role`, `created_at`, `updated_at`, `avatar`) VALUES
(1, '2', 'Gerard', 'asd', 'G. asd', '123', 'asd', 123, 'asd', NULL, 'hirer', '2017-04-21 03:29:30', '2017-04-20 19:29:30', ''),
(2, '6', 'Vince', 'Pleyto', 'V. Pleyto', NULL, 'Sa puso ko', 100, 'Sawi', NULL, 'hirer', '2017-04-21 08:24:04', '2017-04-21 00:24:04', 'avatar6.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'g', '12@g.com', '$2y$10$7lzv8abKnxFKWuQ5eRLX0eBl5PSnkm5W1aDJPvulLoso51.DbzI4a', 'hiree', 'bCtv2UgAz4Woo1BAeShu30YMW233HX8C9tBD6TPFnAbOemrsgrAjxT7rA7Hh', '2017-04-17 23:50:33', '2017-04-17 23:50:33'),
(2, 'gerard', 'gerardvambrocio@gmail.com', '$2y$10$4YLD2ylllD2Ebdprah3CzOoUqCEhNgNm1orrw.9zUJ/QStSyjHKum', 'admin', '2Xd0spwvv7FdNRYWrQGRBGmfGlBxOit1ofDb1vVUeFVrFHbmsNxOeeaIpgNv', '2017-04-18 20:14:18', '2017-04-18 20:14:18'),
(3, '213', 'geryx2003@yahoo.com', '$2y$10$P84xXozWdOV0eyDRKB.wMuoXTlWl5E.3H7GKtxtisPNJmbqsfNLO2', 'hiree', 'KY4Z2rh0y1CI3Sd323gPOInTY8qBuCEPi8Px3Q3ZCIsoCEU1p0758XEgZH9t', '2017-04-19 21:13:31', '2017-04-19 21:13:31'),
(4, 'jonathan', 'monggo@gmail.com', '$2y$10$KG2HxyfOoGfhk5URw0h2cuKCpN.Ny7d6HCh8rZoZkAcxGWTDbJMvS', 'hirer', 'SF6ttd252BF1KIKnTL4WgDkZVQPU9Yr1ZfDm2HUVVL0cXCNKdsbBoO8YIsfH', '2017-04-19 22:56:22', '2017-04-19 22:56:22'),
(5, '123', '123@ffa.com', '$2y$10$ItYX5jj0kO5UUo0zS9sWe.XxqosYrgUtCfn3FQ9hnb06DpjezboMS', 'hiree', '23m5DwIWZJXR5hQa2fxR0Rzb5I9dwgC2NwhdGF0sTvcY5t8i7btt74UCSJgX', '2017-04-19 23:14:41', '2017-04-19 23:14:41'),
(6, 'vince', 'vince.pleyto@yahoo.com', '$2y$10$nYEf/Sbjj.a3PX9rRAh0EuR580hIYyFwGao76xahYpWKgeiB9YH6C', 'hirer', 'LncFiumb0lkaEXQijdwrnYey5lhQ10YAeDZHFBmDgHm5WxXvrXWE2J3J1lya', '2017-04-20 19:55:06', '2017-04-20 19:55:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
