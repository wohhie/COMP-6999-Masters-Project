-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 03:51 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proctorapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `activeusers`
--

CREATE TABLE `activeusers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activeusers`
--

INSERT INTO `activeusers` (`id`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 0, 1, '2020-07-14 01:43:56', '2020-07-14 03:44:25'),
(4, 1, 37, '2020-08-02 03:39:50', '2020-08-02 03:39:50'),
(7, 1, 34, '2020-08-17 17:40:16', '2020-08-17 17:40:16');

-- --------------------------------------------------------

--
-- Table structure for table `blocksites`
--

CREATE TABLE `blocksites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blocksites`
--

INSERT INTO `blocksites` (`id`, `name`, `url`, `user_id`, `course_id`, `exam_id`, `created_at`, `updated_at`) VALUES
(1, 'FACEBOOK', 'www.facebook.com', 1, 2, 1, '2020-07-04 17:46:06', '2020-07-05 12:45:04'),
(3, 'YOUTUBE', 'youtube.com', 1, 2, 1, '2020-07-05 12:21:08', '2020-07-05 12:37:40'),
(5, 'Gitub', 'www.github.com', 1, 2, 1, '2020-07-05 13:15:14', '2020-07-05 13:15:14'),
(7, 'Slashdot', 'slashdot.com', 37, 3, 3, '2020-07-13 18:07:16', '2020-07-13 18:07:16'),
(8, 'facebook.com', 'facebook.com', 37, 3, 3, '2020-07-13 18:07:41', '2020-07-13 18:07:41'),
(9, 'tutorialpoints', 'https://www.tutorialspoint.com/', 37, 3, 3, '2020-07-13 18:07:53', '2020-07-13 18:07:53');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `regno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `regno`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Machine Learning', '9084', 1, '2020-07-02 05:25:03', '2020-07-02 05:25:03'),
(2, 'Computer Visualization', '9086', 1, '2020-07-02 05:25:03', '2020-07-02 05:25:03'),
(3, 'Image Processing & Application', '4838', 37, '2020-07-12 22:55:21', '2020-07-12 22:55:21'),
(4, 'Jewel Mahmud Nimul Shamim', '7715', 37, '2020-07-24 10:21:27', '2020-07-24 10:21:27');

-- --------------------------------------------------------

--
-- Table structure for table `course_user`
--

CREATE TABLE `course_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `course_user`
--

INSERT INTO `course_user` (`id`, `course_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 3, 34, '2020-07-13 16:56:21', '2020-07-13 16:56:21'),
(2, 3, 28, '2020-07-13 16:56:21', '2020-07-13 16:56:21'),
(3, 3, 29, '2020-07-13 16:56:21', '2020-07-13 16:56:21'),
(4, 3, 30, '2020-07-13 16:56:21', '2020-07-13 16:56:21'),
(5, 3, 31, '2020-07-13 16:56:21', '2020-07-13 16:56:21');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `questions` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` date NOT NULL,
  `start` time NOT NULL,
  `end` time NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `questions`, `date`, `start`, `end`, `user_id`, `course_id`, `created_at`, `updated_at`) VALUES
(1, 'Mid Term', NULL, '2020-07-04', '10:00:00', '11:00:00', 1, 2, '2020-07-04 14:12:52', '2020-07-04 14:12:52'),
(2, 'Final Term', NULL, '2020-07-04', '11:00:00', '12:00:00', 1, 2, '2020-07-04 14:12:52', '2020-07-04 14:12:52'),
(3, 'Quiz 1 - Design Pattern', NULL, '2020-06-22', '11:00:00', '12:00:00', 37, 3, '2020-07-13 18:00:32', '2020-07-13 18:00:32');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `keywords`
--

CREATE TABLE `keywords` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `word` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `keywords`
--

INSERT INTO `keywords` (`id`, `word`, `user_id`, `course_id`, `exam_id`, `created_at`, `updated_at`) VALUES
(1, 'Observer Design Pattern, Ask Now, Observer design', 1, 2, 1, '2020-07-05 14:58:58', '2020-07-05 14:58:58'),
(3, 'Design pattern', 37, 3, 3, '2020-07-13 20:13:36', '2020-07-13 20:13:36');

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
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(29, '2020_07_02_004413_create_courses_table', 2),
(34, '2020_07_04_111134_create_exams_table', 5),
(35, '2020_07_02_095352_create_blocksites_table', 6),
(36, '2020_07_04_103920_create_keywords_table', 7),
(37, '2020_07_12_153734_create_roles_table', 8),
(38, '2020_07_12_153840_create_role_user_table', 8),
(40, '2020_07_13_020913_create_activeusers_table', 9),
(42, '2020_07_13_133040_create_course_user_table', 10),
(44, '2020_06_29_020206_create_networkinterface_table', 11),
(47, '2020_07_20_181533_create_questions_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `networkinterface`
--

CREATE TABLE `networkinterface` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pc_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `os_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `public_ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `private_ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vpn_ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gateway_ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active_interface` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mac_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `networkinterface`
--

INSERT INTO `networkinterface` (`id`, `pc_name`, `os_type`, `public_ip`, `private_ip`, `vpn_ip`, `gateway_ip`, `active_interface`, `mac_address`, `user_id`, `created_at`, `updated_at`) VALUES
(7, 'Wohhie-PC', 'Windows_NT x64', '74.208.28.87', '192.168.2.224', '10.8.0.2', '192.168.2.1', 'Wired Ethernet', 'A8:5E:45:E6:43:FD', 34, '2020-07-14 22:18:43', '2020-07-14 22:18:43');

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
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `urls` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `percent` int(11) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `course_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `urls`, `keywords`, `percent`, `user_id`, `course_id`, `exam_id`, `created_at`, `updated_at`) VALUES
(3, 'What is observer design pattern?', 'http:www.com', 'behavioral design pattern, \r\nObserver Pattern,\r\nthe object that is being watched is called Subject,', 30, 37, 3, 3, '2020-07-26 18:03:27', '2020-07-26 18:03:27');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'teacher', '2020-07-12 18:36:54', '2020-07-12 18:36:54'),
(2, 'student', '2020-07-12 18:36:54', '2020-07-12 18:36:54'),
(3, 'admin', '2020-07-12 18:36:54', '2020-07-12 18:36:54');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 2, 25, NULL, NULL),
(5, 2, 26, NULL, NULL),
(6, 2, 27, NULL, NULL),
(7, 2, 28, NULL, NULL),
(8, 2, 29, NULL, NULL),
(9, 2, 30, NULL, NULL),
(10, 2, 31, NULL, NULL),
(11, 2, 32, NULL, NULL),
(12, 2, 33, NULL, NULL),
(13, 2, 34, NULL, NULL),
(14, 1, 35, NULL, NULL),
(15, 1, 36, NULL, NULL),
(16, 1, 37, NULL, NULL),
(17, 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mun_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `mun_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Jewel Shamim', '201890846', 'admin@mun.ca', NULL, '$2y$10$KVmdmVSFYZuW2zrtBpCdKOr.0Edqrc8XLw2tZoQvtoPQCh0Vu4Y4y', NULL, '2020-06-29 04:44:19', '2020-06-29 04:44:19'),
(25, 'Yolanda McKenzie', '74600616', 'eleazar.runte@eichmann.com', NULL, '$2y$10$ohHILxgjAQdXIl8oq5zq9uTJ/01fqQTgMA5LPqfSqsvgarf.IW9Wm', NULL, '2020-07-12 21:44:31', '2020-07-12 21:44:31'),
(26, 'Geovanni Mraz V', '41972194', 'kaylin.schiller@beatty.com', NULL, '$2y$10$7DYS6JGAVQME7cktfeN69O6aLUOqpdzreNltqhLEkGtxnmAJ67uka', NULL, '2020-07-12 21:44:31', '2020-07-12 21:44:31'),
(27, 'Justice Kemmer', '99944150', 'karley87@hotmail.com', NULL, '$2y$10$ZyAcU26xAZ2o0HfqLy.R1OtbFoHcijbU6RYdW7S74oycIJ7dSwW2C', NULL, '2020-07-12 21:44:31', '2020-07-12 21:44:31'),
(28, 'Jolie Schmitt', '14299450', 'elsa44@gmail.com', NULL, '$2y$10$jgqZF90zeqQShvr1Rmzc/elqPR2XtusCwRjhM2MaKqnXkexErbukC', NULL, '2020-07-12 21:44:31', '2020-07-12 21:44:31'),
(29, 'Lauriane Yundt', '98897958', 'ogreen@yahoo.com', NULL, '$2y$10$Ti5fh4XbqXcMS3sTOGjF4e6.Zj6IKta/Cqq6TS1XcBXAMZB3jIkTa', NULL, '2020-07-12 21:44:31', '2020-07-12 21:44:31'),
(30, 'Phyllis Parisian PhD', '72273786', 'vhowell@morissette.com', NULL, '$2y$10$17134Lptt9ynlhHlCFWiPO69dpaTKEgKVyZsMsSV7HNe0ZnYzYbem', NULL, '2020-07-12 21:44:31', '2020-07-12 21:44:31'),
(31, 'Justen Smitham', '40815856', 'leffler.verdie@gmail.com', NULL, '$2y$10$jxhuAE3X7oyQBLCVUZWioeAwm0DZGp1ns0zdPaSYQX7S9P2LKoEcK', NULL, '2020-07-12 21:44:31', '2020-07-12 21:44:31'),
(32, 'Madisyn Schaefer', '71292031', 'olson.jamison@botsford.com', NULL, '$2y$10$m06GJbFSq3U5SvbYUM4z7OhQFtO4vW49o0xNk4HV5Xl5V7iPmt4li', NULL, '2020-07-12 21:44:31', '2020-07-12 21:44:31'),
(33, 'Ms. Jessika Macejkovic', '94860918', 'ngaylord@turner.com', NULL, '$2y$10$pDoDvDtdzCirijwOw3vd5urLTpdBitIjzPcSfTIHr35ObAHQGmk/S', NULL, '2020-07-12 21:44:31', '2020-07-12 21:44:31'),
(34, 'Oracle Orbit', '23556842', 'oracle@mun.ca', NULL, '$2y$10$Y57510R1H1riR5.c3I2jW.V4jH0N33ZoIR47STUP6Fc33OBGK8eiC', NULL, '2020-07-12 21:44:31', '2020-07-12 21:44:31'),
(35, 'Marc Rath', '17066921', 'derick12@schroeder.org', NULL, '$2y$10$we05W1wpXQ2HEOYBPG90ueBLxu78WORweOGOBruBKRrSVDosr4LEq', NULL, '2020-07-12 22:12:09', '2020-07-12 22:12:09'),
(36, 'Marge Borer', '43300740', 'zkutch@yahoo.com', NULL, '$2y$10$gNSiIrucOJP9rWbOQhAM9.V2QH.0CMI5F0DcUzse5Nd1cVD4isqoi', NULL, '2020-07-12 22:12:09', '2020-07-12 22:12:09'),
(37, 'Alex Murphy', '90192001', 'alex@mun.ca', NULL, '$2y$10$hj2oU8XJ.OPYd7bGISN.aOQM.6khZiz3RFoVll8o9VXtFi8y2AFe6', NULL, '2020-07-12 22:12:09', '2020-07-12 22:12:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activeusers`
--
ALTER TABLE `activeusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activeusers_user_id_foreign` (`user_id`);

--
-- Indexes for table `blocksites`
--
ALTER TABLE `blocksites`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blocksites_user_id_foreign` (`user_id`),
  ADD KEY `blocksites_course_id_foreign` (`course_id`),
  ADD KEY `blocksites_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `courses_user_id_foreign` (`user_id`);

--
-- Indexes for table `course_user`
--
ALTER TABLE `course_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_user_course_id_foreign` (`course_id`),
  ADD KEY `course_user_user_id_foreign` (`user_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exams_course_id_foreign` (`course_id`),
  ADD KEY `exams_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keywords`
--
ALTER TABLE `keywords`
  ADD PRIMARY KEY (`id`),
  ADD KEY `keywords_user_id_foreign` (`user_id`),
  ADD KEY `keywords_course_id_foreign` (`course_id`),
  ADD KEY `keywords_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `networkinterface`
--
ALTER TABLE `networkinterface`
  ADD PRIMARY KEY (`id`),
  ADD KEY `networkinterface_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_user_id_foreign` (`user_id`),
  ADD KEY `questions_course_id_foreign` (`course_id`),
  ADD KEY `questions_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
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
-- AUTO_INCREMENT for table `activeusers`
--
ALTER TABLE `activeusers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blocksites`
--
ALTER TABLE `blocksites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_user`
--
ALTER TABLE `course_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `keywords`
--
ALTER TABLE `keywords`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `networkinterface`
--
ALTER TABLE `networkinterface`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activeusers`
--
ALTER TABLE `activeusers`
  ADD CONSTRAINT `activeusers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `blocksites`
--
ALTER TABLE `blocksites`
  ADD CONSTRAINT `blocksites_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `blocksites_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`),
  ADD CONSTRAINT `blocksites_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `courses_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `course_user`
--
ALTER TABLE `course_user`
  ADD CONSTRAINT `course_user_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `course_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `exams`
--
ALTER TABLE `exams`
  ADD CONSTRAINT `exams_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `exams_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `keywords`
--
ALTER TABLE `keywords`
  ADD CONSTRAINT `keywords_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `keywords_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`),
  ADD CONSTRAINT `keywords_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `networkinterface`
--
ALTER TABLE `networkinterface`
  ADD CONSTRAINT `networkinterface_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `questions_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`),
  ADD CONSTRAINT `questions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
