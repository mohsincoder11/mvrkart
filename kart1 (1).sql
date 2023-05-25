-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Apr 24, 2023 at 04:57 AM
-- Server version: 10.6.5-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kart1`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `banner_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_image`, `status`, `created_at`, `updated_at`) VALUES
(1, '1681808265.png', 'active', '2023-04-18 03:27:45', '2023-04-18 03:27:45');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `event_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `add_price` int(11) NOT NULL,
  `type_of_event` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `event_banner_image` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_front_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_rule_book` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `schedule_date` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule_activity` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `location_id`, `add_price`, `type_of_event`, `event_date`, `event_banner_image`, `event_front_image`, `event_rule_book`, `description`, `schedule_date`, `schedule_activity`, `created_at`, `updated_at`) VALUES
(12, 'test event', '2', 10000, '1', '2023-05-05', 'image2.jpg', '1681971494.png', '1681971494.pdf', 'this is testing...', '[\"2023-04-22\",\"2023-04-19\",\"2023-04-22\"]', '[\"testing 3\",\"testing 1\",\"testing 3\"]', '2023-04-20 00:48:14', '2023-04-20 00:48:14'),
(11, 'test event', '2', 10000, '1', '2023-05-01', 'image2.jpg', '1681906492.png', '1681906492.pdf', 'this is description', '[\"2023-05-04\",\"2023-05-02\",\"2023-05-03\"]', '[\"teamup\",\"entries\",\"selection\"]', '2023-04-19 06:44:52', '2023-04-19 06:44:52'),
(10, 'demo event 1', '2', 365, '1', '2023-04-19', 'image2.jpg', '1681901010.jpg', '1681901010.pdf', 'qwerty', '[\"2023-04-21\",\"2023-04-20\",\"2023-04-21\"]', '[\"entry2\",\"entry1\",\"entry2\"]', '2023-04-19 05:13:30', '2023-04-19 05:13:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
CREATE TABLE IF NOT EXISTS `locations` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location`, `created_at`, `updated_at`) VALUES
(2, 'Nagpur', '2023-04-19 01:08:18', '2023-04-19 01:08:18');

-- --------------------------------------------------------

--
-- Table structure for table `manage_image`
--

DROP TABLE IF EXISTS `manage_image`;
CREATE TABLE IF NOT EXISTS `manage_image` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Gallery_Image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage_image`
--

INSERT INTO `manage_image` (`id`, `Gallery_Image`, `Status`, `created_at`, `updated_at`) VALUES
(2, '1681886376.png', 'active', '2023-04-19 01:09:36', '2023-04-19 01:09:36');

-- --------------------------------------------------------

--
-- Table structure for table `manage_video`
--

DROP TABLE IF EXISTS `manage_video`;
CREATE TABLE IF NOT EXISTS `manage_video` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `videoURL` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage_video`
--

INSERT INTO `manage_video` (`id`, `videoURL`, `created_at`, `updated_at`) VALUES
(3, 'https://www.youtube.com/watch?v=GjfxDRRLXAQ', '2023-04-19 01:10:13', '2023-04-19 01:10:13');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_15_083119_create_locations_table', 1),
(6, '2023_04_16_135032_create_banners_table', 1),
(7, '2023_04_17_043652_create_name_of_general_categories_table', 1),
(8, '2023_04_17_052948_create_name_of_college_categories_table', 1),
(9, '2023_04_17_082415_create_manage_image_table', 1),
(10, '2023_04_17_110822_create_manage_video_table', 1),
(11, '2023_04_18_081204_create_events_table', 1),
(12, '2023_04_20_082338_create-table-registration1s', 2),
(13, '2023_04_20_105710_create-registration2-table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `name_of_college_categories`
--

DROP TABLE IF EXISTS `name_of_college_categories`;
CREATE TABLE IF NOT EXISTS `name_of_college_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_of_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_inputs` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `name_of_college_categories`
--

INSERT INTO `name_of_college_categories` (`id`, `name_of_category`, `number_of_inputs`, `created_at`, `updated_at`) VALUES
(2, 'Women', 5, '2023-04-19 01:09:16', '2023-04-19 01:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `name_of_general_categories`
--

DROP TABLE IF EXISTS `name_of_general_categories`;
CREATE TABLE IF NOT EXISTS `name_of_general_categories` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_of_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_of_inputs` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `name_of_general_categories`
--

INSERT INTO `name_of_general_categories` (`id`, `name_of_category`, `number_of_inputs`, `created_at`, `updated_at`) VALUES
(3, 'demo', 5, '2023-04-19 05:47:07', '2023-04-19 05:47:07'),
(2, 'Kids', 5, '2023-04-19 01:08:55', '2023-04-19 01:08:55');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registraion1s`
--

DROP TABLE IF EXISTS `registraion1s`;
CREATE TABLE IF NOT EXISTS `registraion1s` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `team_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guide_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_memeber` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `college_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'auto generate order id for the payment match',
  `payment_status` enum('Pending','Success','Failed','Aborted') COLLATE utf8mb4_unicode_ci DEFAULT 'Pending',
  `payment_info` text COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'payment_response',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registraion1s`
--

INSERT INTO `registraion1s` (`id`, `team_name`, `college_name`, `city`, `state`, `logo`, `guide_name`, `team_memeber`, `contact_number`, `email`, `category`, `college_id`, `order_id`, `payment_status`, `payment_info`, `created_at`, `updated_at`) VALUES
(1, 'Joys', 'pote', 'Amravati', '1', '1681987457.jpeg', 'Jack', '1', '07620183685', 'roddetaniya@gmail.com', '1', '1681987457.jpeg', '', 'Pending', NULL, '2023-04-20 05:14:17', '2023-04-20 05:14:17');

-- --------------------------------------------------------

--
-- Table structure for table `registraion2s`
--

DROP TABLE IF EXISTS `registraion2s`;
CREATE TABLE IF NOT EXISTS `registraion2s` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `competitor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registraion2s`
--

INSERT INTO `registraion2s` (`id`, `competitor`, `state`, `city`, `contact_no`, `email`, `category`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 'Taniya', 'AN', 'Amravati', '7620183685', 'roddetaniya@gmail.com', '1', '', '2023-04-20 05:40:48', '2023-04-20 05:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
