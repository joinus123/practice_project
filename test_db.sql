-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2022 at 11:23 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus_contents`
--

CREATE TABLE `aboutus_contents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `aboutus_h1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus_h2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus_p1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus_p2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus_content_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `aboutus_slider_img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutus_contents`
--

INSERT INTO `aboutus_contents` (`id`, `aboutus_h1`, `aboutus_h2`, `aboutus_p1`, `aboutus_p2`, `aboutus_content_img`, `aboutus_slider_img`, `created_at`, `updated_at`) VALUES
(10, 'Blanditiis sed et ex', 'Dolorum consequatur', '<p>dffdadsdfs</p>', NULL, '1643662461.jpg', '1643662461.png', NULL, '2022-01-31 15:54:21');

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
-- Table structure for table `home_site_pages`
--

CREATE TABLE `home_site_pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `header_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_p` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_h` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_h` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donation_h1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `donation_h2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `footer_logo_h` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_site_pages`
--

INSERT INTO `home_site_pages` (`id`, `header_logo`, `slider_image`, `slider_p`, `slider_h`, `service_h`, `donation_h1`, `donation_h2`, `footer_logo`, `footer_logo_h`, `copyright_text`, `created_at`, `updated_at`) VALUES
(1, '1643333013.png', '1643246021.png', '<p>xyz</p>\r\n\r\n<p>&quot;</p>\r\n\r\n<p>&quot;</p>\r\n\r\n<p>&quot;</p>', 'Earum excepturi odit', 'Earum eiusmod rerum', 'Nihil dicta nulla mi', 'Rerum dolore volupta', '1643245879.png', 'Necessitatibus ratio', 'Pariatur Quod conse', NULL, '2022-01-31 16:28:19');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_01_25_213109_create_ourservices_table', 2),
(6, '2022_01_26_211211_create_home_site_pages_table', 3),
(7, '2022_01_27_220448_create_aboutus_contents_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `ourservices`
--

CREATE TABLE `ourservices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ourservices`
--

INSERT INTO `ourservices` (`id`, `service_heading`, `icon_heading`, `description`, `icon_image`, `created_at`, `updated_at`) VALUES
(23, 'Sint dolorem aut imp', 'Sit natus expedita m', NULL, '1643664777.png', NULL, NULL),
(24, 'Accusantium deleniti', 'Odio asperiores earu', NULL, '1643666374.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_role` enum('Admin','User') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `lastname`, `email`, `email_verified_at`, `password`, `is_role`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'john', 'smith', 'john@gmail.com', NULL, '$2y$10$KBAEQnWtZ6wIBThX79JgiuFDkyX8wPr/abL25WA.7XJ16dMh4qU8i', 'Admin', NULL, '2022-01-24 15:46:59', '2022-01-24 15:46:59'),
(8, 'Hillary', 'Soto', 'sogy@mailinator.com', NULL, '$2y$10$JUC25zxZmQS9KBOHa48WFeTxKungKUcNlHjdNR9I98l3K5qfuAAOG', NULL, NULL, '2022-01-24 16:36:24', '2022-01-24 16:36:24'),
(9, 'Zephr', 'Cunningham', 'hohok@mailinator.com', NULL, '$2y$10$bclG5HG2wGC39/3MZiPhne6oS58CkIZ.J7lAJOOBxDPZ9szkmmPSK', NULL, NULL, '2022-01-24 16:39:05', '2022-01-24 16:39:05'),
(10, 'Arthur', 'Ferrell', 'tamusynu@mailinator.com', NULL, '$2y$10$Bh1fiG7JUq28nqQ8GCfbq.wOMwTpggioYESvmUcJaz5aKwJEIwBoK', NULL, NULL, '2022-01-24 16:39:39', '2022-01-24 16:39:39'),
(11, 'Ocean', 'Delaney', 'vidow@mailinator.com', NULL, '$2y$10$BmeaTEvYWQYO06GHhPfFtu9.0kjYNZ5fqhgCjREIQ4h7BROXjQ1lK', NULL, NULL, '2022-01-24 16:42:17', '2022-01-24 16:42:17'),
(12, 'Gary', 'Nicholson', 'fydibe@mailinator.com', NULL, '$2y$10$Uw4ZrEC6y5aXxK5BwyY1ku1lDFxTcF46KBXBXKCRrHvUxyNeXLYeq', NULL, NULL, '2022-01-24 16:43:19', '2022-01-24 16:43:19'),
(13, 'Raymond', 'Nieves', 'weriryc@mailinator.com', NULL, '$2y$10$xR4Na/dPFCIk9u446qflkOXaTSG0SUgK4X.v4SoehcC/IgbxcGCQa', NULL, NULL, '2022-01-24 17:15:15', '2022-01-24 17:15:15'),
(14, 'Uriel', 'Sanders', 'lalis@mailinator.com', NULL, '$2y$10$Sj3faPBjzFfK2HeExLpDQODzDuGPtzQB/6DJzDJKQZgx3.01kO.pa', NULL, NULL, '2022-01-24 17:16:22', '2022-01-24 17:16:22'),
(15, 'Gay', 'Nichols', 'bucivabaf@mailinator.com', NULL, '$2y$10$Sns7jlnNTd2JcWOAX6eOdOL/Gs9.3ZHYMKp/DZUgIs1Jv4JEPUVS.', NULL, NULL, '2022-01-24 17:19:21', '2022-01-24 17:19:21'),
(16, 'Abigail', 'Maddox', 'norokopo@mailinator.com', NULL, '$2y$10$jjsPOtqdOy1EjKRdUTqD5.dSHXqumXafivXk7w1wW2n6gjHKp7y7C', NULL, NULL, '2022-01-24 17:21:31', '2022-01-24 17:21:31'),
(18, 'Benedict', 'Trevino', 'risifyc@mailinator.com', NULL, '$2y$10$qpXXfTBoMP05C6aST5npluvSOaDj3dtUundbW77w16jKqoLaN70P6', NULL, NULL, '2022-01-24 17:24:51', '2022-01-24 17:24:51'),
(20, 'Alexa', 'Conway', 'xirimad@mailinator.com', NULL, '$2y$10$auEDdX0s.ykovA6IRzCuLeGfK9b8htyvys7vvSujsastkW4teVoom', NULL, NULL, '2022-01-24 17:27:00', '2022-01-24 17:27:00'),
(21, 'September', 'Booker', 'deduruzol@mailinator.com', NULL, '$2y$10$GDvI0qcRkoQ0ZZopWYAmruKz9ZEd9.rQu2zISckwPw1y6cXIMSuam', NULL, NULL, '2022-01-24 18:11:38', '2022-01-24 18:11:38'),
(22, 'Igor', 'Dominguez', 'vori@mailinator.com', NULL, '$2y$10$RQJ/tU6YnEkkEjUrUeiP0eOLWYDwoKVd2QI7eBMf7AFdcaiAKJh0e', NULL, NULL, '2022-01-24 18:11:51', '2022-01-24 18:11:51'),
(23, 'Bert', 'Barber', 'lakaruf@mailinator.com', NULL, '$2y$10$dLOwV03BfSezm/HL2jMZmOpj2uXJTBbTN1IIfu4zDQktSIrHCXiuC', NULL, NULL, '2022-01-24 18:12:49', '2022-01-24 18:12:49'),
(24, 'India', 'Reyes', 'gywyz@mailinator.com', NULL, '$2y$10$mGLT5VrllnCP1P8sBaex6.Exr9fJLuSpYVf2zPt72WPv5QYTZAboi', NULL, NULL, '2022-01-24 18:13:18', '2022-01-24 18:13:18'),
(25, 'Germane', 'Bartlett', 'wynyno@mailinator.com', NULL, '$2y$10$if2M7pBEcpS4sbD6UGmODO8xxz46AAOvRjJdQLiVxdhQtxoLJ9RqS', NULL, NULL, '2022-01-24 18:15:26', '2022-01-24 18:15:26'),
(26, 'Imogene', 'Gentry', 'cuhyducyba@mailinator.com', NULL, '$2y$10$0MGKR/6TFQ2eCjJlyO2TeOzp1dilzHgYo5.leWMUejw/WyHugIDNi', NULL, NULL, '2022-01-24 18:18:21', '2022-01-24 18:18:21'),
(27, 'Brady', 'Foley', 'wafocos@mailinator.com', NULL, '$2y$10$etU/FsvW5n/ya4gkxZxiWeJyEytkQzKxInXQTh555rb5/ohtvF3Ta', NULL, NULL, '2022-01-24 18:19:21', '2022-01-24 18:19:21'),
(28, 'Tashya', 'Booth', 'sary@mailinator.com', NULL, '$2y$10$CFs/KmbruhQwaWwfxWvjXujJEdVpZElxy3psa59k.fbTu23snZJKG', NULL, NULL, '2022-01-24 18:19:57', '2022-01-24 18:19:57'),
(29, 'Kyla', 'Figueroa', 'mupuziriv@mailinator.com', NULL, '$2y$10$1lZroGez.XX.AX3rBqX8i.UmKh2jniD2TKzBbe2pnpvDsEcg0b/22', NULL, NULL, '2022-01-24 18:21:16', '2022-01-24 18:21:16'),
(30, 'Dustin', 'Reeves', 'zybi@mailinator.com', NULL, '$2y$10$7MACh4qChPys61Ct7bQ.G.X7LDe18il7QqpDJj5HlBUmzZk2jNhPK', NULL, NULL, '2022-01-24 18:22:53', '2022-01-24 18:22:53'),
(31, 'Zeus', 'Weaver', 'lefati@mailinator.com', NULL, '$2y$10$Wv0TcaUW7y8OrnWE68WErOuXsLj3WDqvNUUBYL6BkCPpC5g3UE7Ia', NULL, NULL, '2022-01-24 18:24:58', '2022-01-24 18:24:58'),
(32, 'Ross', 'Woodward', 'boniwodoba@mailinator.com', NULL, '$2y$10$kA0Zn2nidsV1fT2.oQ.2t.bw7r4NzYPjI/q5L9GdO1QkgjQrg9DWK', NULL, NULL, '2022-01-24 18:25:23', '2022-01-24 18:25:23'),
(34, 'Eric', 'Cunningham', 'nyverugaxo@mailinator.com', NULL, '$2y$10$rRdfQ4WKko8xEDmFgxPshecQQXP74GJeqmqhi9UVY9luNuSZy4p8u', NULL, NULL, '2022-01-24 18:25:42', '2022-01-24 18:25:42'),
(35, 'Maxine', 'Bullock', 'wefuku@mailinator.com', NULL, '$2y$10$BDEYLlaiD8W4uljDfUm4suj4ny75vD/kl5XXU2WvyAi9TFywRo/Va', NULL, NULL, '2022-01-24 18:29:04', '2022-01-24 18:29:04'),
(37, 'Noelle', 'Compton', 'dejuzapel@mailinator.com', NULL, '$2y$10$UmUJOrczJYnQhHPo9tFIEeHMADSx4kfHJuVAzsRIPjptEMtuVBNTi', NULL, NULL, '2022-01-24 18:35:07', '2022-01-24 18:35:07'),
(39, 'Lavinia', 'Wise', 'lequ@mailinator.com', NULL, '$2y$10$UQK7qgsJX3v3lJgHdxIKeOerRaVdYzUyJv8OMG20f73GVmQkSwcK2', NULL, NULL, '2022-01-25 12:43:23', '2022-01-25 12:43:23'),
(40, 'Axel', 'Graves', 'rybyroz@mailinator.com', NULL, '$2y$10$5DYaxQZ0uj4dG6BYii0w0OnDgo0vhKuV713Asks.kKCll465p2L6y', NULL, NULL, '2022-01-25 12:47:26', '2022-01-25 12:47:26'),
(41, 'Gregory', 'Lawson', 'bycipyfi@mailinator.com', NULL, '$2y$10$v/p05YIn57B9iv0eqBHza.Wz8bgcvgQFxx9j1zBV4qY9he1Je3Ywq', NULL, NULL, '2022-01-25 13:11:53', '2022-01-25 13:11:53'),
(42, 'Athena', 'Anthony', 'mufa@mailinator.com', NULL, '$2y$10$0JtbHmrCw0uiSGrKE80RzOdonm4AkmH5CrlQlPnhBJn9LMcPUd90G', NULL, NULL, '2022-01-25 13:29:45', '2022-01-25 13:29:45'),
(44, 'Eve', 'Mullins', 'cykelaki@mailinator.com', NULL, '$2y$10$xAhJYRkLqeWBs2e1M0Hj.Ohq0dgj5ZyFDl5BmVWAJjGOZTKk8AvwW', NULL, NULL, '2022-01-25 13:34:32', '2022-01-25 13:34:32'),
(45, 'Ori', 'Bright', 'zyqahameke@mailinator.com', NULL, '$2y$10$0ZdW6uCuzvA12k8UPnePEuW.QQabTdiNj2vD6DmYyhZhvDR4YH6la', NULL, NULL, '2022-01-25 14:17:24', '2022-01-25 14:17:24'),
(46, 'Joseph', 'Drake', 'cuco@mailinator.com', NULL, '$2y$10$MJ3dFw0uLUoOo3/sBL6nuurhFGwzzw200WNILL30EP7sE5S6h.RNK', NULL, NULL, '2022-01-25 20:00:00', '2022-01-25 20:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus_contents`
--
ALTER TABLE `aboutus_contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `home_site_pages`
--
ALTER TABLE `home_site_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourservices`
--
ALTER TABLE `ourservices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `aboutus_contents`
--
ALTER TABLE `aboutus_contents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `home_site_pages`
--
ALTER TABLE `home_site_pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ourservices`
--
ALTER TABLE `ourservices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
