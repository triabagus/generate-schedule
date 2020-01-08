-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2019 at 02:57 PM
-- Server version: 5.7.27-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadwal`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'IPA', NULL, NULL),
(2, 'Aqidah', NULL, NULL),
(3, 'Bahasa Arab', NULL, NULL),
(4, 'Bahasa Indonesia', NULL, NULL),
(5, 'Bahasa Inggris', NULL, NULL),
(6, 'Balaghoh', NULL, NULL),
(7, 'Biologi', NULL, NULL),
(8, 'Fiqih', NULL, NULL),
(9, 'Fisika', NULL, NULL),
(10, 'Hadits', NULL, NULL),
(11, 'Kimia', NULL, NULL),
(12, 'Kitabah', NULL, NULL),
(13, 'Computer', NULL, NULL),
(14, 'Maharot', NULL, NULL),
(15, 'Matematika', NULL, NULL),
(16, 'Shorof', NULL, NULL),
(17, 'Nahwu', NULL, NULL),
(18, 'Qiroah', NULL, NULL),
(19, 'Siroh', NULL, NULL),
(20, 'Tafsir', NULL, NULL),
(21, 'Tajwid', NULL, NULL),
(22, 'Tarikh', NULL, NULL),
(23, 'Ushul fiqih', NULL, NULL),
(24, 'Tahfidz', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `id` int(10) UNSIGNED NOT NULL,
  `name_day` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `days`
--

INSERT INTO `days` (`id`, `name_day`, `created_at`, `updated_at`) VALUES
(1, 'Senin', NULL, NULL),
(2, 'Selasa', NULL, NULL),
(3, 'Rabu', NULL, NULL),
(4, 'Kamis', NULL, NULL),
(5, 'Jumat', NULL, NULL),
(6, 'Sabtu', '2019-12-09 06:56:04', '2019-12-09 06:56:04');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nidn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `nidn`, `name`, `created_at`, `updated_at`) VALUES
(1, '', 'Abdullah', NULL, NULL),
(2, '', 'Abdullah Lutfi', NULL, NULL),
(3, '', 'Abdullah Nani', NULL, NULL),
(4, '', 'Abu Ahmad', NULL, NULL),
(5, '', 'Adi Winarto', NULL, NULL),
(6, '', 'Agus R.', NULL, NULL),
(7, '', 'Ahmad', NULL, NULL),
(8, '', 'Aminullah Yasin', NULL, NULL),
(9, '', 'Amir', NULL, NULL),
(10, '', 'Anas', NULL, NULL),
(11, '', 'Andreas', NULL, NULL),
(12, '', 'Anugrah', NULL, NULL),
(13, '', 'Arif Saifullah', NULL, NULL),
(14, '', 'Dani', NULL, NULL),
(15, '', 'Diyah', NULL, NULL),
(16, '', 'Dwi Wahyu', NULL, NULL),
(17, '', 'Eli', NULL, NULL),
(18, '', 'Fahmi Hasan', NULL, NULL),
(19, '', 'Fatik Jundullah', NULL, NULL),
(20, '', 'Fitriyah', NULL, NULL),
(21, '', 'Hadi', NULL, NULL),
(22, '', 'Hisyam', NULL, NULL),
(23, '', 'Irfan', NULL, NULL),
(24, '', 'Irfan Fauzi', NULL, NULL),
(25, '', 'Jamal Munawwar', NULL, NULL),
(26, '', 'Jarir Furqoni', NULL, NULL),
(27, '', 'Husni', NULL, NULL),
(28, '', 'M.falah', NULL, NULL),
(29, '', 'Muh.rayhan', NULL, NULL),
(30, '', 'Muh.ridwan', NULL, NULL),
(31, '', 'Muh.salman', NULL, NULL),
(32, '', 'Muh.yahya', NULL, NULL),
(33, '', 'Nia', NULL, NULL),
(34, '', 'Nimita', NULL, NULL),
(35, '', 'Nur Sidiq', NULL, NULL),
(36, '', 'Nurdin', NULL, NULL),
(37, '', 'Nuzli', NULL, NULL),
(38, '', 'Pitolu', NULL, NULL),
(39, '', 'Randi', NULL, NULL),
(40, '', 'Rayhan Zarfani', NULL, NULL),
(41, '', 'Rijalul Huda', NULL, NULL),
(42, '', 'Said Saifurrahman', NULL, NULL),
(43, '', 'Satra', NULL, NULL),
(44, '', 'Suandi', NULL, NULL),
(45, '', 'Sugiyono', NULL, NULL),
(46, '', 'Tri Sunyoto', NULL, NULL),
(47, '', 'Usep', NULL, NULL),
(48, '', 'Utari', NULL, NULL),
(49, '', 'Yuto', NULL, NULL),
(50, '', 'Faisal', NULL, NULL),
(51, '', 'Kel.tahfidz 1', NULL, NULL),
(52, '', 'Kel.tahfidz 2', NULL, NULL),
(53, '', 'Kel.tahfidz 3', NULL, NULL),
(54, '', 'Kel.tahfidz 4', NULL, NULL),
(55, '', 'Kel.tahfidz 5', NULL, NULL),
(56, '', 'Kel.tahfidz 6', NULL, NULL),
(57, '', 'Kel.tahfidz 7', NULL, NULL),
(58, '', 'Kel.tahfidz 8', NULL, NULL),
(59, '', 'Kel.tahfidz 9', NULL, NULL),
(60, '', 'Kel.tahfidz 10', NULL, NULL),
(61, '', 'Kel.tahfidz 11', NULL, NULL),
(62, '', 'Kel.tahfidz 12', NULL, NULL),
(63, '', 'Kel.tahfidz 13', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_10_16_035803_create_table_days', 1),
(3, '2019_10_16_035947_create_table_times', 1),
(4, '2019_10_16_040158_create_table_courses', 1),
(5, '2019_10_16_040428_create_table_rooms', 1),
(6, '2019_10_16_040546_create_table_lecturers', 1),
(7, '2019_10_16_040751_create_table_teachs', 1),
(8, '2019_10_16_041413_create_table_time_not_available', 1),
(9, '2019_10_20_064457_create_table_schedule', 1),
(10, '2019_11_02_045834_create_table_timedays', 1),
(11, '2019_11_07_232938_add_type_in_schedule', 1),
(12, '2019_11_09_131133_add_value_in_table_schedule', 1),
(13, '2019_11_15_202728_add_proses_value_in_table_schedule', 1),
(14, '2019_12_02_171130_create_table_setting', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `name`, `type`, `created_at`, `updated_at`) VALUES
(1, '7a', 'Putra', NULL, NULL),
(2, '7b', 'Putra', NULL, NULL),
(3, '7c', 'Putri', NULL, NULL),
(4, '7d', 'Putri', NULL, NULL),
(5, '8a', 'Putra', NULL, NULL),
(6, '8b', 'Putra', NULL, NULL),
(7, '8c', 'Putra', NULL, NULL),
(8, '8d', 'Putri', NULL, NULL),
(9, '8e', 'Putri', NULL, NULL),
(10, '9a', 'Putra', NULL, NULL),
(11, '9b', 'Putra', NULL, NULL),
(12, '9c', 'Putra', NULL, NULL),
(13, '9d', 'Putri', NULL, NULL),
(14, '9e', 'Putri', NULL, NULL),
(15, '10a', 'Putra', NULL, NULL),
(16, '10b', 'Putra', NULL, NULL),
(17, '10c', 'Putra', NULL, NULL),
(18, '10d', 'Putra', NULL, NULL),
(19, '10e', 'Putri', NULL, NULL),
(20, '10f', 'Putri', NULL, NULL),
(21, '11a', 'Putra', NULL, NULL),
(22, '11b', 'Putra', NULL, NULL),
(23, '11c', 'Putri', NULL, NULL),
(24, '12a', 'Putra', NULL, NULL),
(25, '12b', 'Putri', NULL, NULL),
(26, 'Ila', 'Putra', NULL, NULL),
(27, 'Ilb', 'Putri', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `teachs_id` int(10) UNSIGNED NOT NULL,
  `days_id` int(10) UNSIGNED NOT NULL,
  `times_id` int(10) UNSIGNED NOT NULL,
  `rooms_id` int(10) UNSIGNED NOT NULL,
  `type` int(11) DEFAULT NULL,
  `value` double(8,2) DEFAULT NULL,
  `value_process` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teachs`
--

CREATE TABLE `teachs` (
  `id` int(10) UNSIGNED NOT NULL,
  `courses_id` int(10) UNSIGNED DEFAULT NULL,
  `lecturers_id` int(10) UNSIGNED DEFAULT NULL,
  `class_room` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timedays`
--

CREATE TABLE `timedays` (
  `id` int(10) UNSIGNED NOT NULL,
  `days_id` int(10) UNSIGNED DEFAULT NULL,
  `times_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `timedays`
--

INSERT INTO `timedays` (`id`, `days_id`, `times_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2019-12-09 07:33:05', '2019-12-09 07:33:05'),
(2, 1, 2, '2019-12-09 07:33:15', '2019-12-09 07:33:15'),
(3, 1, 3, '2019-12-09 07:33:25', '2019-12-09 07:33:25'),
(4, 1, 4, '2019-12-09 07:33:37', '2019-12-09 07:33:37'),
(5, 1, 5, '2019-12-09 07:33:59', '2019-12-09 07:34:09'),
(6, 1, 6, '2019-12-09 07:34:18', '2019-12-09 07:34:18'),
(7, 2, 1, '2019-12-09 07:34:30', '2019-12-09 07:34:30'),
(8, 2, 2, '2019-12-09 07:34:41', '2019-12-09 07:34:41'),
(9, 2, 3, '2019-12-09 07:34:58', '2019-12-09 07:34:58'),
(10, 2, 4, '2019-12-09 07:35:08', '2019-12-09 07:35:08'),
(11, 2, 5, '2019-12-09 07:35:19', '2019-12-09 07:35:19'),
(12, 2, 6, '2019-12-09 07:35:30', '2019-12-09 07:35:39'),
(13, 3, 1, '2019-12-09 07:36:16', '2019-12-09 07:36:16'),
(14, 3, 2, '2019-12-09 07:36:36', '2019-12-09 07:36:36'),
(15, 3, 3, '2019-12-09 07:36:50', '2019-12-09 07:36:50'),
(16, 3, 4, '2019-12-09 07:37:00', '2019-12-09 07:37:00'),
(17, 3, 5, '2019-12-09 07:37:12', '2019-12-09 07:37:12'),
(18, 3, 6, '2019-12-09 07:37:12', '2019-12-09 07:37:20'),
(19, 4, 1, '2019-12-09 07:37:36', '2019-12-09 07:37:36'),
(20, 4, 2, '2019-12-09 07:37:45', '2019-12-09 07:37:45'),
(21, 4, 3, '2019-12-09 07:37:55', '2019-12-09 07:37:55'),
(22, 4, 4, '2019-12-09 07:38:04', '2019-12-09 07:38:11'),
(23, 4, 5, '2019-12-09 07:38:21', '2019-12-09 07:38:21'),
(24, 4, 6, '2019-12-09 07:38:33', '2019-12-09 07:38:33'),
(25, 5, 1, '2019-12-09 07:39:48', '2019-12-09 07:39:48'),
(26, 5, 2, '2019-12-09 07:39:59', '2019-12-09 07:39:59'),
(27, 5, 3, '2019-12-09 07:40:12', '2019-12-09 07:40:12'),
(28, 5, 4, '2019-12-09 07:40:22', '2019-12-09 07:40:29'),
(29, 5, 5, '2019-12-09 07:40:38', '2019-12-09 07:40:45'),
(30, 5, 6, '2019-12-09 07:40:54', '2019-12-09 07:40:54'),
(31, 6, 1, '2019-12-09 07:41:06', '2019-12-09 07:41:06'),
(32, 6, 2, '2019-12-09 07:41:15', '2019-12-09 07:41:15'),
(33, 6, 3, '2019-12-09 07:41:27', '2019-12-09 07:41:35'),
(34, 6, 4, '2019-12-09 07:43:21', '2019-12-09 07:43:21'),
(35, 6, 5, '2019-12-09 07:43:30', '2019-12-09 07:43:30'),
(36, 6, 6, '2019-12-09 07:43:40', '2019-12-09 07:43:40');

-- --------------------------------------------------------

--
-- Table structure for table `times`
--

CREATE TABLE `times` (
  `id` int(10) UNSIGNED NOT NULL,
  `time_begin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time_finish` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `range` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `times`
--

INSERT INTO `times` (`id`, `time_begin`, `time_finish`, `range`, `created_at`, `updated_at`) VALUES
(1, '08:00', '08:40', '08:00 - 08:40', '2019-12-09 07:30:41', '2019-12-09 07:30:41'),
(2, '08:40', '09:20', '08:40 - 09:20', '2019-12-09 07:31:05', '2019-12-09 07:31:05'),
(3, '09:20', '10:00', '09:20 - 10:00', '2019-12-09 07:31:39', '2019-12-09 07:31:39'),
(4, '10:00', '10:40', '10:00 - 10:40', '2019-12-09 07:31:59', '2019-12-09 07:31:59'),
(5, '10:40', '11:10', '10:40 - 11:10', '2019-12-09 07:32:23', '2019-12-09 07:32:23'),
(6, '11:10', '11:50', '11:10 - 11:50', '2019-12-09 07:32:40', '2019-12-09 07:32:40');

-- --------------------------------------------------------

--
-- Table structure for table `time_not_available`
--

CREATE TABLE `time_not_available` (
  `id` int(10) UNSIGNED NOT NULL,
  `lecturers_id` int(10) UNSIGNED DEFAULT NULL,
  `days_id` int(10) UNSIGNED DEFAULT NULL,
  `times_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$3trNzPm9RAWdeG87oDvpnOHYf35dHhDMc0JB7Zjs9PKq0fXcXq2Hy', NULL, '2019-12-09 06:49:46', '2019-12-09 06:49:46');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `schedules_teachs_id_foreign` (`teachs_id`),
  ADD KEY `schedules_days_id_foreign` (`days_id`),
  ADD KEY `schedules_times_id_foreign` (`times_id`),
  ADD KEY `schedules_rooms_id_foreign` (`rooms_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachs`
--
ALTER TABLE `teachs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `teachs_courses_id_foreign` (`courses_id`),
  ADD KEY `teachs_lecturers_id_foreign` (`lecturers_id`),
  ADD KEY `teachs_class_room_foreign` (`class_room`);

--
-- Indexes for table `timedays`
--
ALTER TABLE `timedays`
  ADD PRIMARY KEY (`id`),
  ADD KEY `timedays_days_id_foreign` (`days_id`),
  ADD KEY `timedays_times_id_foreign` (`times_id`);

--
-- Indexes for table `times`
--
ALTER TABLE `times`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `time_not_available`
--
ALTER TABLE `time_not_available`
  ADD PRIMARY KEY (`id`),
  ADD KEY `time_not_available_lecturers_id_foreign` (`lecturers_id`),
  ADD KEY `time_not_available_days_id_foreign` (`days_id`),
  ADD KEY `time_not_available_times_id_foreign` (`times_id`);

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
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teachs`
--
ALTER TABLE `teachs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timedays`
--
ALTER TABLE `timedays`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `times`
--
ALTER TABLE `times`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `time_not_available`
--
ALTER TABLE `time_not_available`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `schedules`
--
ALTER TABLE `schedules`
  ADD CONSTRAINT `schedules_days_id_foreign` FOREIGN KEY (`days_id`) REFERENCES `days` (`id`),
  ADD CONSTRAINT `schedules_rooms_id_foreign` FOREIGN KEY (`rooms_id`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `schedules_teachs_id_foreign` FOREIGN KEY (`teachs_id`) REFERENCES `teachs` (`id`),
  ADD CONSTRAINT `schedules_times_id_foreign` FOREIGN KEY (`times_id`) REFERENCES `times` (`id`);

--
-- Constraints for table `teachs`
--
ALTER TABLE `teachs`
  ADD CONSTRAINT `teachs_class_room_foreign` FOREIGN KEY (`class_room`) REFERENCES `rooms` (`id`),
  ADD CONSTRAINT `teachs_courses_id_foreign` FOREIGN KEY (`courses_id`) REFERENCES `courses` (`id`),
  ADD CONSTRAINT `teachs_lecturers_id_foreign` FOREIGN KEY (`lecturers_id`) REFERENCES `lecturers` (`id`);

--
-- Constraints for table `timedays`
--
ALTER TABLE `timedays`
  ADD CONSTRAINT `timedays_days_id_foreign` FOREIGN KEY (`days_id`) REFERENCES `days` (`id`),
  ADD CONSTRAINT `timedays_times_id_foreign` FOREIGN KEY (`times_id`) REFERENCES `times` (`id`);

--
-- Constraints for table `time_not_available`
--
ALTER TABLE `time_not_available`
  ADD CONSTRAINT `time_not_available_days_id_foreign` FOREIGN KEY (`days_id`) REFERENCES `days` (`id`),
  ADD CONSTRAINT `time_not_available_lecturers_id_foreign` FOREIGN KEY (`lecturers_id`) REFERENCES `lecturers` (`id`),
  ADD CONSTRAINT `time_not_available_times_id_foreign` FOREIGN KEY (`times_id`) REFERENCES `times` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
