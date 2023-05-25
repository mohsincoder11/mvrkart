-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2023 at 03:26 PM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kart23`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_image` varchar(191) NOT NULL,
  `description` text DEFAULT NULL,
  `link` varchar(155) DEFAULT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_image`, `description`, `link`, `status`, `created_at`, `updated_at`) VALUES
(5, '1684431819.jpg', '<h2>Kart1 Design Challenge 2023</h2><p>Time to Prove Your Machines</p>', 'https://kart1.mvrmotorsports.com/public/event_detail/60', 'active', '2023-05-18 12:13:39', '2023-05-20 02:53:07'),
(3, '1684134755.jpg', '<h2>Kart1 Design Challenge 2023</h2><p>Time to Prove Your Machines</p>', 'https://kart1.mvrmotorsports.com/public/event_detail/60', 'active', '2023-05-13 01:05:47', '2023-05-20 02:53:24'),
(4, '1684134609.jpg', '<h2>Kart1 Design Challenge 2023</h2><p>Time to Prove Your Machines</p>', 'https://kart1.mvrmotorsports.com/public/event_detail/60', 'active', '2023-05-13 01:06:00', '2023-05-20 02:53:16');

-- --------------------------------------------------------

--
-- Table structure for table `contact_models`
--

CREATE TABLE `contact_models` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `city` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phone_number` varchar(13) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `contact_models`
--

INSERT INTO `contact_models` (`id`, `name`, `email`, `city`, `phone_number`, `message`, `created_at`, `updated_at`) VALUES
(1, 'MAYURI', 'mayurivadatkar23@gmail.com', 'Amravati', '9898989898', 'TFFF', '2023-05-12 06:18:06', '2023-05-12 06:18:06'),
(2, 'vineet', 'vineet@gmail.com', 'amravati', '9860378640611', 'hi', '2023-05-13 12:35:44', '2023-05-13 12:35:44'),
(3, 'Vineet', 'vineet@gmail.com', 'Pune', '9211099201392', 'hi', '2023-05-16 01:29:01', '2023-05-16 01:29:01'),
(4, 'Priyal Bang', 'priyalbang89@gmail.com', 'Amravati', '9975362976', 'fdvfdbfdb', '2023-05-18 11:15:58', '2023-05-18 11:15:58'),
(5, 'Priyal Bang', 'priyalbang89@gmail.com', 'Amravati', '9975362976', 'fdvfdbfdb', '2023-05-18 11:15:59', '2023-05-18 11:15:59'),
(6, 'Priyal Bang', 'priyalbang89@gmail.com', 'Amravati', '9975362976', 'fdvfdbfdb', '2023-05-18 11:16:02', '2023-05-18 11:16:02'),
(7, 'Stuart Orr', 'demo@gmail.com', 'Hic natus optio vol', '8585858585', 'Provident sit ut s', '2023-05-24 07:23:05', '2023-05-24 07:23:05');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(191) NOT NULL,
  `location_id` varchar(191) NOT NULL,
  `add_price` int(11) NOT NULL,
  `type_of_event` varchar(191) NOT NULL,
  `event_date` date NOT NULL,
  `closing_date` date DEFAULT NULL,
  `event_banner_image` varchar(225) DEFAULT NULL,
  `event_front_image` varchar(225) NOT NULL,
  `event_rule_book` varchar(225) DEFAULT NULL,
  `description` text NOT NULL,
  `schedule_date` text DEFAULT NULL,
  `schedule_activity` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `location_id`, `add_price`, `type_of_event`, `event_date`, `closing_date`, `event_banner_image`, `event_front_image`, `event_rule_book`, `description`, `schedule_date`, `schedule_activity`, `created_at`, `updated_at`) VALUES
(60, 'Kart1 Design Challenge 2023', '5', 27550, '1', '2023-09-14', '2023-06-20', 'b91641684570816.jpg', 'f61311684570816.jpg', 'kart1_DC_2023.pdf', '<p>The major aspects of Kart1 Design Challenge are preparing the race engineers and racers for the future of karting in India. Our prime initiative in this direction is to start with the concept of Kart Design Challenge. Providing an opportunity to the top 10 teams to compete as a category in the Kart1 Championship. The idea here is to support the top teams every year from the Design Challenge commercially and technically to become self-reliant karting teams. Kart1 design challenge is mainly dedicated to the budding talent from various Engineering Colleges &amp; Universities. It is one of a kind event to harness the talent, provide them the necessary support and a platform to showcase their innovation.</p><p>The Kart1 Design Challenge will test the working models designed and developed by the young engineers. It is imperative to say that the karts developed by the engineers will be judged mainly on the performance and not on the theory. The team behind its product will also be judged on the quick thinking, improvisation, coordination of the members and their properly defined roles within the team.</p><p><br>There are two categories to compete in Kart1 Design Challenge.<br>A) Internal Combustion Engine (ICE) &nbsp;<br>B) Electric Motor Drive (EMD)</p><p><br><strong>PRIZES &amp; AWARDS</strong><br><strong>Grand Prizes</strong><br>A) The top 10 finishing teams of the Kart1 Design Challenge in each category will be eligible to compete as a professional team in the College category of Kart 1 Championship 2024.</p><p>B) A team as judged by the stewards will be eligible for a contract to manufacture karts for Kart 1 Championship 2024.</p><p><strong>Cash Prizes</strong><br>1st place finish 50,000 (each category)<br>2nd place finish 25,000 (each category)<br>3rd place finish 12,500 (each category)</p><p><strong>Special Awards</strong><br>a) Best Performing All Women Team<br>b) Most Organised Team<br>c) Best Innovation<br>d) Best Faculty Advisor<br>e) Best Team Presentation</p>', '[\"2023-05-20\",\"2023-06-20\",\"2023-07-02\",\"2023-07-10\",\"2023-07-29\",\"2023-08-01\",\"2023-08-17\",\"2023-08-31\",\"2023-09-14\"]', '[\"Entry Open\",\"Entry Close\",\"Doubt clearing session (online)\",\"Team Member list submission\",\"College Support Dossier submission\",\"Visitor Pass Registration\",\"Primary Participation Report\",\"Perp Video Submission\",\"Final Event (3-Day Event)\"]', '2023-05-20 02:50:19', '2023-05-24 07:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`id`, `location`, `created_at`, `updated_at`) VALUES
(9, 'Thrissur', '2023-05-19 23:18:45', '2023-05-19 23:18:45'),
(8, 'Bengaluru', '2023-05-19 23:18:06', '2023-05-19 23:18:06'),
(5, 'Vadodara', '2023-05-08 07:08:41', '2023-05-08 07:08:41'),
(6, 'Hyderabad', '2023-05-08 07:08:51', '2023-05-08 07:08:51'),
(7, 'Guwahati', '2023-05-08 07:09:14', '2023-05-08 07:09:14');

-- --------------------------------------------------------

--
-- Table structure for table `manage_image`
--

CREATE TABLE `manage_image` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Gallery_Image` varchar(191) NOT NULL,
  `Status` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `manage_image`
--

INSERT INTO `manage_image` (`id`, `Gallery_Image`, `Status`, `created_at`, `updated_at`) VALUES
(4, '1684031540.jpg', 'active', '2023-05-13 21:02:20', '2023-05-13 21:02:20');

-- --------------------------------------------------------

--
-- Table structure for table `manage_video`
--

CREATE TABLE `manage_video` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `videoURL` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `name_of_college_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_of_category` varchar(191) NOT NULL,
  `number_of_inputs` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `name_of_college_categories`
--

INSERT INTO `name_of_college_categories` (`id`, `name_of_category`, `number_of_inputs`, `created_at`, `updated_at`) VALUES
(4, 'Internal Combustion Engine (ICE)', 10, '2023-05-08 07:27:08', '2023-05-08 07:27:08'),
(5, 'Electric Motor Drive (EMD)', 10, '2023-05-08 07:27:34', '2023-05-08 07:27:34');

-- --------------------------------------------------------

--
-- Table structure for table `name_of_general_categories`
--

CREATE TABLE `name_of_general_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name_of_category` varchar(191) NOT NULL,
  `number_of_inputs` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) NOT NULL,
  `token` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registraion1s`
--

CREATE TABLE `registraion1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `team_name` varchar(191) NOT NULL,
  `college_name` varchar(191) NOT NULL,
  `city` varchar(225) NOT NULL,
  `state` varchar(191) NOT NULL,
  `logo` varchar(225) NOT NULL,
  `guide_name` varchar(191) NOT NULL,
  `team_memeber` varchar(191) NOT NULL,
  `contact_number` text NOT NULL,
  `email` varchar(191) NOT NULL,
  `category` varchar(191) NOT NULL,
  `college_id` varchar(191) NOT NULL,
  `event_id` int(11) DEFAULT NULL COMMENT 'event id ',
  `order_id` varchar(100) NOT NULL COMMENT 'auto generate order id for the payment match',
  `payment_status` enum('Pending','Success','Failed','Aborted') DEFAULT 'Pending',
  `payment_info` text DEFAULT NULL COMMENT 'payment_response',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registraion1s`
--

INSERT INTO `registraion1s` (`id`, `team_name`, `college_name`, `city`, `state`, `logo`, `guide_name`, `team_memeber`, `contact_number`, `email`, `category`, `college_id`, `event_id`, `order_id`, `payment_status`, `payment_info`, `created_at`, `updated_at`) VALUES
(24, 'Xerxes Barry', 'Ayanna Barnes', 'amravati', 'LD', '1684930530.png', 'sdad', '1', '123213', 'saruzuno@mailinator.com', '2', '1684930530.jpg', 60, '118091684930492', 'Pending', NULL, '2023-05-24 06:45:30', '2023-05-24 06:45:30'),
(25, 'Lester Holmes', 'Audra Wheeler', 'In aliqua Perferend', 'GA', '1684930636.png', 'Wilma Langley', '2', '366', 'ziwubuvod@mailinator.com', '2', '1684930636.png', 60, '871421684930588', '', '[{\"order_id\":\"871421684930588\"},{\"tracking_id\":\"112890243404\"},{\"bank_ref_no\":\"null\"},{\"order_status\":\"Invalid\"},{\"failure_message\":\"\"},{\"payment_mode\":\"null\"},{\"card_name\":\"null\"},{\"status_code\":\"\"},{\"status_message\":\"31010:billing_tel: Invalid Parameter.\"},{\"currency\":\"INR\"},{\"amount\":\"1.00\"},{\"billing_name\":\"Audra Wheeler\"},{\"billing_address\":\"In aliqua Perferend, GA 425001,India\"},{\"billing_city\":\"In aliqua Perferend\"},{\"billing_state\":\"GA\"},{\"billing_zip\":\"425001\"},{\"billing_country\":\"India\"},{\"billing_tel\":\"366\"},{\"billing_email\":\"ziwubuvod@mailinator.com\"},{\"delivery_name\":\"\"},{\"delivery_address\":\"\"},{\"delivery_city\":\"\"},{\"delivery_state\":\"\"},{\"delivery_zip\":\"\"},{\"delivery_country\":\"\"},{\"delivery_tel\":\"\"},{\"merchant_param1\":\"\"},{\"merchant_param2\":\"\"},{\"merchant_param3\":\"\"},{\"merchant_param4\":\"\"},{\"merchant_param5\":\"\"},{\"vault\":\"N\"},{\"offer_type\":\"null\"},{\"offer_code\":\"null\"},{\"discount_value\":\"0.0\"},{\"mer_amount\":\"1.00\"},{\"eci_value\":\"\"},{\"retry\":\"null\"},{\"response_code\":\"\"},{\"billing_notes\":\"\"},{\"trans_date\":\"null\"},{\"bin_country\":\"\"}]', '2023-05-24 06:47:16', '2023-05-24 06:47:18'),
(22, 'Lester Evans', 'Charles Mcfarland', 'Sequi culpa aliquip', 'CT', '1684930312.png', 'Roanna Velazquez', '3', '608', 'fagypog@mailinator.com', '1', '1684930312.png', 60, '331931684930281', '', '[{\"order_id\":\"331931684930281\"},{\"tracking_id\":\"112890237917\"},{\"bank_ref_no\":\"null\"},{\"order_status\":\"Invalid\"},{\"failure_message\":\"\"},{\"payment_mode\":\"null\"},{\"card_name\":\"null\"},{\"status_code\":\"\"},{\"status_message\":\"31010:billing_tel: Invalid Parameter.\"},{\"currency\":\"INR\"},{\"amount\":\"27550.00\"},{\"billing_name\":\"Charles Mcfarland\"},{\"billing_address\":\"Sequi culpa aliquip, CT 425001,India\"},{\"billing_city\":\"Sequi culpa aliquip\"},{\"billing_state\":\"CT\"},{\"billing_zip\":\"425001\"},{\"billing_country\":\"India\"},{\"billing_tel\":\"608\"},{\"billing_email\":\"fagypog@mailinator.com\"},{\"delivery_name\":\"\"},{\"delivery_address\":\"\"},{\"delivery_city\":\"\"},{\"delivery_state\":\"\"},{\"delivery_zip\":\"\"},{\"delivery_country\":\"\"},{\"delivery_tel\":\"\"},{\"merchant_param1\":\"\"},{\"merchant_param2\":\"\"},{\"merchant_param3\":\"\"},{\"merchant_param4\":\"\"},{\"merchant_param5\":\"\"},{\"vault\":\"N\"},{\"offer_type\":\"null\"},{\"offer_code\":\"null\"},{\"discount_value\":\"0.0\"},{\"mer_amount\":\"27550.00\"},{\"eci_value\":\"\"},{\"retry\":\"null\"},{\"response_code\":\"\"},{\"billing_notes\":\"\"},{\"trans_date\":\"null\"},{\"bin_country\":\"\"}]', '2023-05-24 06:41:52', '2023-05-24 06:41:54'),
(23, 'Stella Jackson', 'Mariam Sutton', 'Voluptates voluptati', 'WB', '1684930380.png', 'Curran Travis', '3', '439', 'pumivuny@mailinator.com', '1', '1684930380.png', 60, '736381684930331', '', '[{\"order_id\":\"736381684930331\"},{\"tracking_id\":\"112890239050\"},{\"bank_ref_no\":\"null\"},{\"order_status\":\"Invalid\"},{\"failure_message\":\"\"},{\"payment_mode\":\"null\"},{\"card_name\":\"null\"},{\"status_code\":\"\"},{\"status_message\":\"31010:billing_tel: Invalid Parameter.\"},{\"currency\":\"INR\"},{\"amount\":\"27550.00\"},{\"billing_name\":\"Mariam Sutton\"},{\"billing_address\":\"Voluptates voluptati, WB 425001,India\"},{\"billing_city\":\"Voluptates voluptati\"},{\"billing_state\":\"WB\"},{\"billing_zip\":\"425001\"},{\"billing_country\":\"India\"},{\"billing_tel\":\"439\"},{\"billing_email\":\"pumivuny@mailinator.com\"},{\"delivery_name\":\"\"},{\"delivery_address\":\"\"},{\"delivery_city\":\"\"},{\"delivery_state\":\"\"},{\"delivery_zip\":\"\"},{\"delivery_country\":\"\"},{\"delivery_tel\":\"\"},{\"merchant_param1\":\"\"},{\"merchant_param2\":\"\"},{\"merchant_param3\":\"\"},{\"merchant_param4\":\"\"},{\"merchant_param5\":\"\"},{\"vault\":\"N\"},{\"offer_type\":\"null\"},{\"offer_code\":\"null\"},{\"discount_value\":\"0.0\"},{\"mer_amount\":\"27550.00\"},{\"eci_value\":\"\"},{\"retry\":\"null\"},{\"response_code\":\"\"},{\"billing_notes\":\"\"},{\"trans_date\":\"null\"},{\"bin_country\":\"\"}]', '2023-05-24 06:43:00', '2023-05-24 06:43:01'),
(21, 'Mariam Wells', 'Lavinia Clements', 'Cillum dignissimos a', 'MP', '1684930272.png', 'Nicole Potter', '3', '132', 'gidavy@mailinator.com', '2', '1684930272.png', 60, '442101684930238', 'Pending', NULL, '2023-05-24 06:41:12', '2023-05-24 06:41:12'),
(20, 'Mariam Wells', 'Lavinia Clements', 'Cillum dignissimos a', 'MP', '1684930253.png', 'Nicole Potter', '3', '132', 'gidavy@mailinator.com', '2', '1684930253.png', 60, '442101684930238', 'Pending', NULL, '2023-05-24 06:40:53', '2023-05-24 06:40:53'),
(8, 'Carly Shields', 'Nelle Vinson', 'Amravati', 'Rajasthan', '1682767298.jpg', 'Shaine Hatfield', '3', '7620183685', 'roddetaniya@gmail.com', '2', '1682767298.jpg', NULL, '388811682767258', 'Pending', NULL, '2023-04-29 05:51:38', '2023-04-29 05:51:38'),
(10, 'test', 'test', 'test', 'Maharastra', '1683181879.jpg', 'test', '1', '9579915551', 'sharique@webmediaindia.com', '1', '1683181879.jpg', NULL, '928461683181777', 'Aborted', '[{\"order_id\":\"928461683181777\"},{\"tracking_id\":\"112871089595\"},{\"bank_ref_no\":\"null\"},{\"order_status\":\"Aborted\"},{\"failure_message\":\"\"},{\"payment_mode\":\"null\"},{\"card_name\":\"null\"},{\"status_code\":\"\"},{\"status_message\":\"I wish to pay through another payment option.\"},{\"currency\":\"INR\"},{\"amount\":\"299.00\"},{\"billing_name\":\"\"},{\"billing_address\":\"\"},{\"billing_city\":\"\"},{\"billing_state\":\"\"},{\"billing_zip\":\"425001\"},{\"billing_country\":\"India\"},{\"billing_tel\":\"\"},{\"billing_email\":\"\"},{\"delivery_name\":\"\"},{\"delivery_address\":\"\"},{\"delivery_city\":\"\"},{\"delivery_state\":\"\"},{\"delivery_zip\":\"\"},{\"delivery_country\":\"\"},{\"delivery_tel\":\"\"},{\"merchant_param1\":\"\"},{\"merchant_param2\":\"\"},{\"merchant_param3\":\"\"},{\"merchant_param4\":\"\"},{\"merchant_param5\":\"\"},{\"vault\":\"N\"},{\"offer_type\":\"null\"},{\"offer_code\":\"null\"},{\"discount_value\":\"0.0\"},{\"mer_amount\":\"299.00\"},{\"eci_value\":\"\"},{\"retry\":\"null\"},{\"response_code\":\"\"},{\"billing_notes\":\"\"},{\"trans_date\":\"null\"},{\"bin_country\":\"\"}]', '2023-05-04 01:01:19', '2023-05-04 01:02:09'),
(11, 'test', 'test', 'test', 'Maharastra', '1683199423.png', 'test', '1', '9579915551', 'sharique@webmediaindia.com', '1', '1683199423.png', NULL, '112061683199334', 'Aborted', '[{\"order_id\":\"112061683199334\"},{\"tracking_id\":\"112871414484\"},{\"bank_ref_no\":\"null\"},{\"order_status\":\"Aborted\"},{\"failure_message\":\"\"},{\"payment_mode\":\"null\"},{\"card_name\":\"null\"},{\"status_code\":\"\"},{\"status_message\":\"I wish to pay through another payment option.\"},{\"currency\":\"INR\"},{\"amount\":\"299.00\"},{\"billing_name\":\"\"},{\"billing_address\":\"\"},{\"billing_city\":\"\"},{\"billing_state\":\"\"},{\"billing_zip\":\"425001\"},{\"billing_country\":\"India\"},{\"billing_tel\":\"\"},{\"billing_email\":\"\"},{\"delivery_name\":\"\"},{\"delivery_address\":\"\"},{\"delivery_city\":\"\"},{\"delivery_state\":\"\"},{\"delivery_zip\":\"\"},{\"delivery_country\":\"\"},{\"delivery_tel\":\"\"},{\"merchant_param1\":\"\"},{\"merchant_param2\":\"\"},{\"merchant_param3\":\"\"},{\"merchant_param4\":\"\"},{\"merchant_param5\":\"\"},{\"vault\":\"N\"},{\"offer_type\":\"null\"},{\"offer_code\":\"null\"},{\"discount_value\":\"0.0\"},{\"mer_amount\":\"299.00\"},{\"eci_value\":\"\"},{\"retry\":\"null\"},{\"response_code\":\"\"},{\"billing_notes\":\"\"},{\"trans_date\":\"null\"},{\"bin_country\":\"\"}]', '2023-05-04 05:53:43', '2023-05-04 05:54:00'),
(12, 'Dillon Gibbs', 'Whitney Vargas', 'Perspiciatis sunt i', 'Uttarpradesh', '1683214809.png', 'Naida Bird', '1', '832', 'qolokot@mailinator.com', '2', '1683214809.png', NULL, '585681683214788', 'Pending', NULL, '2023-05-04 10:10:09', '2023-05-04 10:10:09'),
(13, 'Rowan Kane', 'Maxwell Vaughn', 'Sed dolore nostrum i', 'Maharastra', '1683217927.png', 'Beatrice Booth', '1', '558', 'hywoqabipu@mailinator.com', '2', '1683217927.png', NULL, '820121683217840', 'Pending', NULL, '2023-05-04 11:02:07', '2023-05-04 11:02:07'),
(14, 'Rowan Kane', 'Maxwell Vaughn', 'Sed dolore nostrum i', 'Maharastra', '1683218017.png', 'Beatrice Booth', '1', '558', 'hywoqabipu@mailinator.com', '2', '1683218017.png', 48, '820121683217840', 'Pending', NULL, '2023-05-04 11:03:37', '2023-05-04 11:03:37'),
(15, 'Jarrod Hull', 'Meghan Barnett', 'Excepturi magna veli', 'Rajasthan', '1683218103.png', 'Colleen Cantu', '1', '451', 'mohsinshaikh1104@gmail.com', 'Select Category', '1683218103.png', 48, '647951683218055', 'Success', '[{\"order_id\":\"647951683218055\"},{\"tracking_id\":\"112871711185\"},{\"bank_ref_no\":\"312483428343\"},{\"order_status\":\"Success\"},{\"failure_message\":\"\"},{\"payment_mode\":\"Unified Payments\"},{\"card_name\":\"UPI\"},{\"status_code\":\"\"},{\"status_message\":\"Transaction Successful-NA-0\"},{\"currency\":\"INR\"},{\"amount\":\"1.00\"},{\"billing_name\":\"ml\"},{\"billing_address\":\"asdasd\"},{\"billing_city\":\"Cillum dolor enim is\"},{\"billing_state\":\"Nagaland\"},{\"billing_zip\":\"444604\"},{\"billing_country\":\"India\"},{\"billing_tel\":\"7385078839\"},{\"billing_email\":\"saruzuno@mailinator.com\"},{\"delivery_name\":\"ml\"},{\"delivery_address\":\"asdasd\"},{\"delivery_city\":\"Cillum dolor enim is\"},{\"delivery_state\":\"Nagaland\"},{\"delivery_zip\":\"444604\"},{\"delivery_country\":\"India\"},{\"delivery_tel\":\"7385078839\"},{\"merchant_param1\":\"\"},{\"merchant_param2\":\"\"},{\"merchant_param3\":\"\"},{\"merchant_param4\":\"\"},{\"merchant_param5\":\"\"},{\"vault\":\"N\"},{\"offer_type\":\"null\"},{\"offer_code\":\"null\"},{\"discount_value\":\"0.0\"},{\"mer_amount\":\"1.00\"},{\"eci_value\":\"\"},{\"retry\":\"N\"},{\"response_code\":\"\"},{\"billing_notes\":\"\"},{\"trans_date\":\"04\\/05\\/2023 22:05:58\"},{\"bin_country\":\"\"}]', '2023-05-04 11:05:03', '2023-05-04 11:06:06'),
(16, 'Kirby Hester', 'Macey Mcconnell', 'Id reiciendis amet', 'Rajasthan', '1684166893.png', 'Karyn Sanchez', '3', '8585858585', 'gosegecal@mailinator.com', '1', '1684166893.png', 55, '741201684166853', 'Aborted', '[{\"order_id\":\"741201684166853\"},{\"tracking_id\":\"112881976818\"},{\"bank_ref_no\":\"null\"},{\"order_status\":\"Aborted\"},{\"failure_message\":\"\"},{\"payment_mode\":\"null\"},{\"card_name\":\"null\"},{\"status_code\":\"\"},{\"status_message\":\"I wish to review my order again before completing the transaction.\"},{\"currency\":\"INR\"},{\"amount\":\"10.00\"},{\"billing_name\":\"Macey Mcconnell\"},{\"billing_address\":\"Id reiciendis amet , Maharastra 425001,India\"},{\"billing_city\":\"Id reiciendis amet\"},{\"billing_state\":\"\"},{\"billing_zip\":\"425001\"},{\"billing_country\":\"India\"},{\"billing_tel\":\"8585858585\"},{\"billing_email\":\"gosegecal@mailinator.com\"},{\"delivery_name\":\"\"},{\"delivery_address\":\"\"},{\"delivery_city\":\"\"},{\"delivery_state\":\"\"},{\"delivery_zip\":\"\"},{\"delivery_country\":\"\"},{\"delivery_tel\":\"\"},{\"merchant_param1\":\"\"},{\"merchant_param2\":\"\"},{\"merchant_param3\":\"\"},{\"merchant_param4\":\"\"},{\"merchant_param5\":\"\"},{\"vault\":\"N\"},{\"offer_type\":\"null\"},{\"offer_code\":\"null\"},{\"discount_value\":\"0.0\"},{\"mer_amount\":\"10.00\"},{\"eci_value\":\"\"},{\"retry\":\"null\"},{\"response_code\":\"\"},{\"billing_notes\":\"\"},{\"trans_date\":\"null\"},{\"bin_country\":\"\"}]', '2023-05-15 10:38:13', '2023-05-15 10:39:46'),
(17, 'Kirby Hester', 'Macey Mcconnell', 'Id reiciendis amet', 'Maharastra', '1684166930.png', 'Karyn Sanchez', '3', '8585858585', 'gosegecal@mailinator.com', '1', '1684166930.png', 55, '741201684166853', 'Aborted', '[{\"order_id\":\"741201684166853\"},{\"tracking_id\":\"112881976818\"},{\"bank_ref_no\":\"null\"},{\"order_status\":\"Aborted\"},{\"failure_message\":\"\"},{\"payment_mode\":\"null\"},{\"card_name\":\"null\"},{\"status_code\":\"\"},{\"status_message\":\"I wish to review my order again before completing the transaction.\"},{\"currency\":\"INR\"},{\"amount\":\"10.00\"},{\"billing_name\":\"Macey Mcconnell\"},{\"billing_address\":\"Id reiciendis amet , Maharastra 425001,India\"},{\"billing_city\":\"Id reiciendis amet\"},{\"billing_state\":\"\"},{\"billing_zip\":\"425001\"},{\"billing_country\":\"India\"},{\"billing_tel\":\"8585858585\"},{\"billing_email\":\"gosegecal@mailinator.com\"},{\"delivery_name\":\"\"},{\"delivery_address\":\"\"},{\"delivery_city\":\"\"},{\"delivery_state\":\"\"},{\"delivery_zip\":\"\"},{\"delivery_country\":\"\"},{\"delivery_tel\":\"\"},{\"merchant_param1\":\"\"},{\"merchant_param2\":\"\"},{\"merchant_param3\":\"\"},{\"merchant_param4\":\"\"},{\"merchant_param5\":\"\"},{\"vault\":\"N\"},{\"offer_type\":\"null\"},{\"offer_code\":\"null\"},{\"discount_value\":\"0.0\"},{\"mer_amount\":\"10.00\"},{\"eci_value\":\"\"},{\"retry\":\"null\"},{\"response_code\":\"\"},{\"billing_notes\":\"\"},{\"trans_date\":\"null\"},{\"bin_country\":\"\"}]', '2023-05-15 10:38:51', '2023-05-15 10:39:46'),
(18, 'Kirby Hester', 'Macey Mcconnell', 'Id reiciendis amet', 'Maharastra', '1684166972.png', 'Karyn Sanchez', '3', '8585858585', 'gosegecal@mailinator.com', '1', '1684166972.png', 55, '741201684166853', 'Aborted', '[{\"order_id\":\"741201684166853\"},{\"tracking_id\":\"112881976818\"},{\"bank_ref_no\":\"null\"},{\"order_status\":\"Aborted\"},{\"failure_message\":\"\"},{\"payment_mode\":\"null\"},{\"card_name\":\"null\"},{\"status_code\":\"\"},{\"status_message\":\"I wish to review my order again before completing the transaction.\"},{\"currency\":\"INR\"},{\"amount\":\"10.00\"},{\"billing_name\":\"Macey Mcconnell\"},{\"billing_address\":\"Id reiciendis amet , Maharastra 425001,India\"},{\"billing_city\":\"Id reiciendis amet\"},{\"billing_state\":\"\"},{\"billing_zip\":\"425001\"},{\"billing_country\":\"India\"},{\"billing_tel\":\"8585858585\"},{\"billing_email\":\"gosegecal@mailinator.com\"},{\"delivery_name\":\"\"},{\"delivery_address\":\"\"},{\"delivery_city\":\"\"},{\"delivery_state\":\"\"},{\"delivery_zip\":\"\"},{\"delivery_country\":\"\"},{\"delivery_tel\":\"\"},{\"merchant_param1\":\"\"},{\"merchant_param2\":\"\"},{\"merchant_param3\":\"\"},{\"merchant_param4\":\"\"},{\"merchant_param5\":\"\"},{\"vault\":\"N\"},{\"offer_type\":\"null\"},{\"offer_code\":\"null\"},{\"discount_value\":\"0.0\"},{\"mer_amount\":\"10.00\"},{\"eci_value\":\"\"},{\"retry\":\"null\"},{\"response_code\":\"\"},{\"billing_notes\":\"\"},{\"trans_date\":\"null\"},{\"bin_country\":\"\"}]', '2023-05-15 10:39:32', '2023-05-15 10:39:46'),
(19, 'Serina Figueroa', 'Galena Gamble', 'Enim sit dolore qui', 'Rajasthan', '1684169797.png', 'Barclay Fowler', 'No. of Team Members', '8585858585', 'macih@mailinator.com', '1', '1684169797.png', 55, '595571684169751', 'Success', '[{\"order_id\":\"595571684169751\"},{\"tracking_id\":\"112882012345\"},{\"bank_ref_no\":\"313574840164\"},{\"order_status\":\"Success\"},{\"failure_message\":\"\"},{\"payment_mode\":\"Unified Payments\"},{\"card_name\":\"UPI\"},{\"status_code\":\"\"},{\"status_message\":\"Transaction Successful-NA-0\"},{\"currency\":\"INR\"},{\"amount\":\"1.00\"},{\"billing_name\":\"Galena Gamble\"},{\"billing_address\":\"Enim sit dolore qui  Rajasthan ,India\"},{\"billing_city\":\"Enim sit dolore qui\"},{\"billing_state\":\"Rajasthan\"},{\"billing_zip\":\"425001\"},{\"billing_country\":\"India\"},{\"billing_tel\":\"8585858585\"},{\"billing_email\":\"macih@mailinator.com\"},{\"delivery_name\":\"Galena Gamble\"},{\"delivery_address\":\"Enim sit dolore qui  Rajasthan ,India\"},{\"delivery_city\":\"Enim sit dolore qui\"},{\"delivery_state\":\"Rajasthan\"},{\"delivery_zip\":\"425001\"},{\"delivery_country\":\"India\"},{\"delivery_tel\":\"8585858585\"},{\"merchant_param1\":\"\"},{\"merchant_param2\":\"\"},{\"merchant_param3\":\"\"},{\"merchant_param4\":\"\"},{\"merchant_param5\":\"\"},{\"vault\":\"N\"},{\"offer_type\":\"null\"},{\"offer_code\":\"null\"},{\"discount_value\":\"0.0\"},{\"mer_amount\":\"1.00\"},{\"eci_value\":\"\"},{\"retry\":\"N\"},{\"response_code\":\"\"},{\"billing_notes\":\"\"},{\"trans_date\":\"15\\/05\\/2023 22:27:11\"},{\"bin_country\":\"\"}]', '2023-05-15 11:26:37', '2023-05-15 11:27:30'),
(26, 'Xerxes Barry', 'Ayanna Barnes', 'Cillum dolor enim is', 'NL', '1684930758.png', 'Macon Kelly', '2', '7385078839', 'saruzuno@mailinator.com', '1', '1684930758.png', 60, '116851684930704', 'Success', '[{\"order_id\":\"116851684930704\"},{\"tracking_id\":\"112890245548\"},{\"bank_ref_no\":\"314496403977\"},{\"order_status\":\"Success\"},{\"failure_message\":\"\"},{\"payment_mode\":\"Unified Payments\"},{\"card_name\":\"UPI\"},{\"status_code\":\"\"},{\"status_message\":\"Transaction Successful-NA-0\"},{\"currency\":\"INR\"},{\"amount\":\"1.00\"},{\"billing_name\":\"Ayanna Barnes\"},{\"billing_address\":\"Cillum dolor enim is, NL 425001,India\"},{\"billing_city\":\"Cillum dolor enim is\"},{\"billing_state\":\"NL\"},{\"billing_zip\":\"425001\"},{\"billing_country\":\"India\"},{\"billing_tel\":\"7385078839\"},{\"billing_email\":\"saruzuno@mailinator.com\"},{\"delivery_name\":\"Ayanna Barnes\"},{\"delivery_address\":\"Cillum dolor enim is, NL 425001,India\"},{\"delivery_city\":\"Cillum dolor enim is\"},{\"delivery_state\":\"NL\"},{\"delivery_zip\":\"425001\"},{\"delivery_country\":\"India\"},{\"delivery_tel\":\"7385078839\"},{\"merchant_param1\":\"\"},{\"merchant_param2\":\"\"},{\"merchant_param3\":\"\"},{\"merchant_param4\":\"\"},{\"merchant_param5\":\"\"},{\"vault\":\"N\"},{\"offer_type\":\"null\"},{\"offer_code\":\"null\"},{\"discount_value\":\"0.0\"},{\"mer_amount\":\"1.00\"},{\"eci_value\":\"\"},{\"retry\":\"N\"},{\"response_code\":\"\"},{\"billing_notes\":\"\"},{\"trans_date\":\"24\\/05\\/2023 17:52:03\"},{\"bin_country\":\"\"}]', '2023-05-24 06:49:18', '2023-05-24 07:00:11');

-- --------------------------------------------------------

--
-- Table structure for table `registraion2s`
--

CREATE TABLE `registraion2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `competitor` varchar(191) NOT NULL,
  `state` varchar(191) NOT NULL,
  `city` varchar(191) NOT NULL,
  `contact_no` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `category` varchar(191) NOT NULL,
  `event_id` int(11) NOT NULL COMMENT 'event_id',
  `order_id` varchar(225) NOT NULL,
  `payment_status` varchar(225) DEFAULT NULL,
  `payment_info` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registraion2s`
--

INSERT INTO `registraion2s` (`id`, `competitor`, `state`, `city`, `contact_no`, `email`, `category`, `event_id`, `order_id`, `payment_status`, `payment_info`, `created_at`, `updated_at`) VALUES
(15, 'Sopoline Dyer', 'TR', 'Consequat Incididun', 'Doloremque ut aperia', 'kodexo@mailinator.com', '1', 60, '975431684930205', 'Pending', NULL, '2023-05-24 06:40:14', '2023-05-24 06:40:14'),
(3, 'Vitae provident ips', 'Select State', 'Aliqua Ut ipsum co', 'Irure veritatis aut', 'hiwah@mailinator.com', 'Select Category', 0, '', NULL, '', '2023-04-24 01:10:47', '2023-04-24 01:10:47'),
(4, 'Dominique Buckley', 'AP', 'Nisi blanditiis omni', 'Excepturi aut magna', 'rajiradimo@mailinator.com', '2', 0, '860691682511685', 'Pending', NULL, '2023-04-26 06:51:39', '2023-04-26 06:51:39'),
(5, 'Taniya', 'MH', 'Amravati', '7620183685', 'roddetaniya@gmail.com', '2', 0, '978091682767079', 'Pending', NULL, '2023-04-29 05:48:19', '2023-04-29 05:48:19'),
(6, 'Quintessa Mcdaniel', 'CT', 'Pariatur Amet mole', 'Voluptas consequatur', 'nunuzoxi@mailinator.com', '2', 43, '954891683310478', 'Pending', NULL, '2023-05-05 12:44:48', '2023-05-05 12:44:48'),
(7, 'simba test', 'CT', 'Pariatur Amet mole', 'Voluptas consequatur', 'nunuzoxi@mailinator.com', '2', 43, '954891683310478', 'Pending', NULL, '2023-05-05 12:47:13', '2023-05-05 12:47:13'),
(8, 'simba22', 'JH', 'Doloremque aliquid c', 'Animi labore quas v', 'mohsinshaikh1104@gmail.com', '1', 43, '173701683311968', 'Success', '[{\"order_id\":\"173701683311968\"},{\"tracking_id\":\"112872709239\"},{\"bank_ref_no\":\"312611180145\"},{\"order_status\":\"Success\"},{\"failure_message\":\"\"},{\"payment_mode\":\"Unified Payments\"},{\"card_name\":\"UPI\"},{\"status_code\":\"\"},{\"status_message\":\"Transaction Successful-NA-0\"},{\"currency\":\"INR\"},{\"amount\":\"1.00\"},{\"billing_name\":\"Basia Mejia\"},{\"billing_address\":\"Quae eveniet quis s\"},{\"billing_city\":\"Cillum dolor enim is\"},{\"billing_state\":\"Nagaland\"},{\"billing_zip\":\"444604\"},{\"billing_country\":\"India\"},{\"billing_tel\":\"7385078839\"},{\"billing_email\":\"saruzuno@mailinator.com\"},{\"delivery_name\":\"Basia Mejia\"},{\"delivery_address\":\"Quae eveniet quis s\"},{\"delivery_city\":\"Cillum dolor enim is\"},{\"delivery_state\":\"Nagaland\"},{\"delivery_zip\":\"444604\"},{\"delivery_country\":\"India\"},{\"delivery_tel\":\"7385078839\"},{\"merchant_param1\":\"\"},{\"merchant_param2\":\"\"},{\"merchant_param3\":\"\"},{\"merchant_param4\":\"\"},{\"merchant_param5\":\"\"},{\"vault\":\"N\"},{\"offer_type\":\"null\"},{\"offer_code\":\"null\"},{\"discount_value\":\"0.0\"},{\"mer_amount\":\"1.00\"},{\"eci_value\":\"\"},{\"retry\":\"N\"},{\"response_code\":\"\"},{\"billing_notes\":\"\"},{\"trans_date\":\"06\\/05\\/2023 00:10:36\"},{\"bin_country\":\"\"}]', '2023-05-05 13:10:10', '2023-05-05 13:13:41'),
(9, 'Vineet', 'MH', 'amravati', '8767596580', 'fastvineet@gmail.com', '1', 58, '620401684133872', 'Success', '[{\"order_id\":\"620401684133872\"},{\"tracking_id\":\"112881395063\"},{\"bank_ref_no\":\"360983\"},{\"order_status\":\"Success\"},{\"failure_message\":\"\"},{\"payment_mode\":\"Debit Card\"},{\"card_name\":\"State Bank of India\"},{\"status_code\":\"null\"},{\"status_message\":\"SUCCESS\"},{\"currency\":\"INR\"},{\"amount\":\"10.00\"},{\"billing_name\":\"vineet rathi\"},{\"billing_address\":\"amravati\"},{\"billing_city\":\"Amravati\"},{\"billing_state\":\"Maharashtra\"},{\"billing_zip\":\"444606\"},{\"billing_country\":\"India\"},{\"billing_tel\":\"8767596580\"},{\"billing_email\":\"fastvineet@gmail.com\"},{\"delivery_name\":\"vineet rathi\"},{\"delivery_address\":\"amravati\"},{\"delivery_city\":\"Amravati\"},{\"delivery_state\":\"Maharashtra\"},{\"delivery_zip\":\"444606\"},{\"delivery_country\":\"India\"},{\"delivery_tel\":\"8767596580\"},{\"merchant_param1\":\"\"},{\"merchant_param2\":\"\"},{\"merchant_param3\":\"\"},{\"merchant_param4\":\"\"},{\"merchant_param5\":\"\"},{\"vault\":\"N\"},{\"offer_type\":\"null\"},{\"offer_code\":\"null\"},{\"discount_value\":\"0.0\"},{\"mer_amount\":\"10.00\"},{\"eci_value\":\"null\"},{\"retry\":\"N\"},{\"response_code\":\"0\"},{\"billing_notes\":\"\"},{\"trans_date\":\"15\\/05\\/2023 12:31:21\"},{\"bin_country\":\"INDIA\"}]', '2023-05-15 01:29:00', '2023-05-15 01:31:48'),
(10, 'Cameron Mays', 'MH', 'Non velit cupiditat', 'In corrupti facere', 'mohsinshaikh1104@gmail.com', '2', 58, '900741684169942', 'Success', '[{\"order_id\":\"900741684169942\"},{\"tracking_id\":\"112882015751\"},{\"bank_ref_no\":\"313574919644\"},{\"order_status\":\"Success\"},{\"failure_message\":\"\"},{\"payment_mode\":\"Unified Payments\"},{\"card_name\":\"UPI\"},{\"status_code\":\"\"},{\"status_message\":\"Transaction Successful-NA-0\"},{\"currency\":\"INR\"},{\"amount\":\"1.00\"},{\"billing_name\":\"Cameron Mays\"},{\"billing_address\":\"Non velit cupiditat CT ,India\"},{\"billing_city\":\"Non velit cupiditat\"},{\"billing_state\":\"CT\"},{\"billing_zip\":\"425001\"},{\"billing_country\":\"India\"},{\"billing_tel\":\"8585858585\"},{\"billing_email\":\"mohsinshaikh1104@gmail.com\"},{\"delivery_name\":\"Cameron Mays\"},{\"delivery_address\":\"Non velit cupiditat CT ,India\"},{\"delivery_city\":\"Non velit cupiditat\"},{\"delivery_state\":\"CT\"},{\"delivery_zip\":\"425001\"},{\"delivery_country\":\"India\"},{\"delivery_tel\":\"8585858585\"},{\"merchant_param1\":\"\"},{\"merchant_param2\":\"\"},{\"merchant_param3\":\"\"},{\"merchant_param4\":\"\"},{\"merchant_param5\":\"\"},{\"vault\":\"N\"},{\"offer_type\":\"null\"},{\"offer_code\":\"null\"},{\"discount_value\":\"0.0\"},{\"mer_amount\":\"1.00\"},{\"eci_value\":\"\"},{\"retry\":\"N\"},{\"response_code\":\"\"},{\"billing_notes\":\"\"},{\"trans_date\":\"15\\/05\\/2023 22:32:15\"},{\"bin_country\":\"\"}]', '2023-05-15 11:30:36', '2023-05-15 11:32:33'),
(11, 'Cameron Mays', 'MH', 'Non velit cupiditat', 'In corrupti facere', 'mohsinshaikh1104@gmail.com', '2', 58, '900741684169942', 'Pending', NULL, '2023-05-15 11:31:03', '2023-05-15 11:31:03'),
(12, 'Cameron Mays', 'MH', 'Non velit cupiditat', 'In corrupti facere', 'mohsinshaikh1104@gmail.com', '2', 58, '900741684169942', 'Pending', NULL, '2023-05-15 11:31:23', '2023-05-15 11:31:23'),
(13, 'Cameron Mays', 'CT', 'Non velit cupiditat', 'In corrupti facere', 'mohsinshaikh1104@gmail.com', '2', 58, '900741684169942', 'Pending', NULL, '2023-05-15 11:31:47', '2023-05-15 11:31:47'),
(14, 'vineet', 'MH', 'Amravati', '8767596580', 'fastvineet@gmail.com', '4', 59, '651221684298575', 'Success', '[{\"order_id\":\"651221684298575\"},{\"tracking_id\":\"112883156528\"},{\"bank_ref_no\":\"853962\"},{\"order_status\":\"Success\"},{\"failure_message\":\"\"},{\"payment_mode\":\"Debit Card\"},{\"card_name\":\"State Bank of India\"},{\"status_code\":\"null\"},{\"status_message\":\"SUCCESS\"},{\"currency\":\"INR\"},{\"amount\":\"10.00\"},{\"billing_name\":\"vineet\"},{\"billing_address\":\"Amravati 4 ,India\"},{\"billing_city\":\"Amravati\"},{\"billing_state\":\"Maharashtra\"},{\"billing_zip\":\"444606\"},{\"billing_country\":\"India\"},{\"billing_tel\":\"8767596580\"},{\"billing_email\":\"fastvineet@gmail.com\"},{\"delivery_name\":\"vineet\"},{\"delivery_address\":\"Amravati 4 ,India\"},{\"delivery_city\":\"Amravati\"},{\"delivery_state\":\"Maharashtra\"},{\"delivery_zip\":\"444606\"},{\"delivery_country\":\"India\"},{\"delivery_tel\":\"8767596580\"},{\"merchant_param1\":\"\"},{\"merchant_param2\":\"\"},{\"merchant_param3\":\"\"},{\"merchant_param4\":\"\"},{\"merchant_param5\":\"\"},{\"vault\":\"N\"},{\"offer_type\":\"null\"},{\"offer_code\":\"null\"},{\"discount_value\":\"0.0\"},{\"mer_amount\":\"10.00\"},{\"eci_value\":\"null\"},{\"retry\":\"N\"},{\"response_code\":\"0\"},{\"billing_notes\":\"\"},{\"trans_date\":\"17\\/05\\/2023 10:15:02\"},{\"bin_country\":\"INDIA\"}]', '2023-05-16 23:13:38', '2023-05-16 23:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$/bEVITa4/QLMiK4fKOtIVeVKve6Zy1iVNSS7Ce4H6WGOfWKIiHKrK', NULL, NULL, '2023-05-08 08:02:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_models`
--
ALTER TABLE `contact_models`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_image`
--
ALTER TABLE `manage_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manage_video`
--
ALTER TABLE `manage_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `name_of_college_categories`
--
ALTER TABLE `name_of_college_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `name_of_general_categories`
--
ALTER TABLE `name_of_general_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `registraion1s`
--
ALTER TABLE `registraion1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registraion2s`
--
ALTER TABLE `registraion2s`
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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_models`
--
ALTER TABLE `contact_models`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `manage_image`
--
ALTER TABLE `manage_image`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `manage_video`
--
ALTER TABLE `manage_video`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `name_of_college_categories`
--
ALTER TABLE `name_of_college_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `name_of_general_categories`
--
ALTER TABLE `name_of_general_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registraion1s`
--
ALTER TABLE `registraion1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `registraion2s`
--
ALTER TABLE `registraion2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
