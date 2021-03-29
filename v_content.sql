-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2021 at 10:02 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `viverb`
--

-- --------------------------------------------------------

--
-- Table structure for table `v_content`
--

CREATE TABLE `v_content` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_by` bigint(20) UNSIGNED DEFAULT NULL,
  `updated_by` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konten` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_judul` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `permalink` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `igdb_id` int(11) DEFAULT NULL,
  `published` tinyint(1) NOT NULL DEFAULT 0,
  `publish_at` datetime DEFAULT NULL,
  `views` bigint(20) NOT NULL DEFAULT 0,
  `highlight` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `v_content`
--

INSERT INTO `v_content` (`id`, `created_by`, `updated_by`, `created_at`, `updated_at`, `judul`, `konten`, `sub_judul`, `permalink`, `image_path`, `image_name`, `category_id`, `igdb_id`, `published`, `publish_at`, `views`, `highlight`) VALUES
(1, NULL, NULL, '2020-12-25 23:21:48', '2020-12-25 23:21:48', 'sadasd', '<p>sadasdas</p>', 'sadasd', 'https://google.com/judul-yang-dibuat', 'public/files/P8J7hs8DRH6r8jIq3a4msXwssFigmSKbR4kADuWY.png', 'Capture.PNG', 1, NULL, 0, NULL, 0, 0),
(2, NULL, NULL, '2020-12-25 23:25:34', '2020-12-28 04:26:46', 'Rhyuziiiii', '<p>saddasasd</p>', '214521asd', 'https://google.com/judul-yang-dibuat', 'public/files/dMg09vCKGpDgjbcy7ffP96E51EHpDGcKoM06Yri1.jpg', 'arca 3.jpg', 2, NULL, 0, NULL, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `v_content`
--
ALTER TABLE `v_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `v_content_category_id_foreign` (`category_id`),
  ADD KEY `v_content_created_by_foreign` (`created_by`),
  ADD KEY `v_content_updated_by_foreign` (`updated_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `v_content`
--
ALTER TABLE `v_content`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `v_content`
--
ALTER TABLE `v_content`
  ADD CONSTRAINT `v_content_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `v_format_content` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `v_content_created_by_foreign` FOREIGN KEY (`created_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `v_content_updated_by_foreign` FOREIGN KEY (`updated_by`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
