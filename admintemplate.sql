-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 02:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admintemplate`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `pty` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `customer_id`, `product_id`, `pty`, `price`, `created_at`, `updated_at`) VALUES
(1, 1, 35, 1, 33, NULL, NULL),
(2, 2, 35, 1, 33, NULL, NULL),
(3, 3, 35, 1, 33, NULL, NULL),
(4, 4, 36, 1, 23, NULL, NULL),
(5, 5, 21, 1, 199, NULL, NULL),
(6, 6, 32, 4, 111, NULL, NULL),
(7, 7, 31, 1, 12, NULL, NULL),
(8, 8, 37, 1, 12332, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `phone`, `address`, `email`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Võ Đăng Khoa', '0397911213', 'hcm', 'khoavo.19112002@gmail.com', 'sfds', '2023-03-30 22:10:00', '2023-03-30 22:10:00'),
(2, 'Võ Đăng Khoa', '0397911213', 'hcm', 'khoavo.19112002@gmail.com', 'sfds', '2023-03-30 22:10:20', '2023-03-30 22:10:20'),
(3, 'Võ Đăng Khoaaa', '0397911213', 'hcm', 'khoanguyen.1911020@gmail.com', 'test', '2023-04-07 20:38:19', '2023-04-07 20:38:19'),
(4, 'Võ Đăng Khoau', '0397911213', 'hcm', 'khoanguyen.1911020@gmail.com', 'kjk', '2023-04-09 04:03:27', '2023-04-09 04:03:27'),
(5, 'hoa', '0397911213', 'hcm', 'khoanguyen.1911020@gmail.com', 'test thu thoi', '2023-04-09 04:12:22', '2023-04-09 04:12:22'),
(6, 'Võ Đăng Khoa', '0397911213', 'hcm', 'khoanguyen.1911020@gmail.com', 'khoas', '2023-04-14 22:43:21', '2023-04-14 22:43:21'),
(7, 'Võ Đăng Khoasdddsd', '0397911213', 'hcm', 'khoanguyen.1911020@gmail.com', 'nono', '2023-04-14 22:53:55', '2023-04-14 22:53:55'),
(8, 'Võ Đăng Khoa', '0397911213', 'hcm', 'khoavo.19112002@gmail.com', 'sfsdf', '2023-04-17 01:54:50', '2023-04-17 01:54:50');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `queue`, `payload`, `attempts`, `reserved_at`, `available_at`, `created_at`) VALUES
(6, 'default', '{\"uuid\":\"517bceed-d3f5-4c4e-8b16-4215ab55a835\",\"displayName\":\"App\\\\Jobs\\\\SendMail\",\"job\":\"Illuminate\\\\Queue\\\\CallQueuedHandler@call\",\"maxTries\":null,\"maxExceptions\":null,\"failOnTimeout\":false,\"backoff\":null,\"timeout\":null,\"retryUntil\":null,\"data\":{\"commandName\":\"App\\\\Jobs\\\\SendMail\",\"command\":\"O:17:\\\"App\\\\Jobs\\\\SendMail\\\":2:{s:8:\\\"\\u0000*\\u0000email\\\";s:25:\\\"khoavo.19112002@gmail.com\\\";s:5:\\\"delay\\\";O:25:\\\"Illuminate\\\\Support\\\\Carbon\\\":3:{s:4:\\\"date\\\";s:26:\\\"2023-04-17 08:54:52.283196\\\";s:13:\\\"timezone_type\\\";i:3;s:8:\\\"timezone\\\";s:3:\\\"UTC\\\";}}\"}}', 0, NULL, 1681721692, 1681721690);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `parent_id`, `description`, `content`, `slug`, `active`, `created_at`, `updated_at`) VALUES
(9, 'Smart Phone', 0, 'Smart Phone', '<p>Smart Phone</p>', 'smart-phone', 1, '2023-03-23 03:46:40', '2023-03-23 03:46:40'),
(10, 'headphone', 0, 'h', '<p>h</p>', 'headphone', 1, '2023-03-23 03:48:21', '2023-03-23 03:48:21'),
(11, 'LapTop', 0, 'sdf', '<p>sf</p>', 'laptop', 1, '2023-03-23 04:46:50', '2023-03-23 04:46:50'),
(13, 'acer', 11, 'asdfas', '<p>asdf</p>', 'acer', 1, '2023-03-23 11:03:47', '2023-03-23 11:03:47'),
(17, 'concu', 0, 'safsf', '<p>asfsdf</p>', 'concu', 1, '2023-04-14 22:46:33', '2023-04-14 22:46:33');

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
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2023_03_16_092735_create_menus_table', 1),
(16, '2023_03_19_134326_create_productts_table', 2),
(17, '2023_03_19_134535_update_table_productt', 3),
(18, '2023_03_22_022324_create_sliders_table', 4),
(19, '2023_03_30_041256_create_customers_table', 5),
(20, '2023_03_30_041348_create_carts_table', 5),
(21, '2023_03_31_052619_create_jobs_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `productts`
--

CREATE TABLE `productts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_id` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `price_sale` int(11) DEFAULT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productts`
--

INSERT INTO `productts` (`id`, `name`, `description`, `content`, `menu_id`, `price`, `price_sale`, `active`, `created_at`, `updated_at`, `thumb`) VALUES
(1, 'vertugold', 'ddd', '<p>ddd</p>', 9, 123123, 123, 0, '2023-03-20 02:25:51', '2023-03-23 03:49:08', '/storage/uploads2023/03/20/Screenshot_1669869168.png'),
(4, 'ipad_gold', 'to', '<p>to</p>', 9, 44445, 4443, 1, '2023-03-20 22:22:25', '2023-03-23 03:48:59', '/storage/uploads2023/03/21/Hinh-nen-Luffy-Sun-God-Nika-6.jpg'),
(5, 'redmi', 'old', '<p>old</p>', 9, 1234, 999, 1, '2023-03-20 23:24:52', '2023-03-23 03:48:50', '/storage/uploads2023/03/21/Hinh-nen-Luffy-Sun-God-Nika-6.jpg'),
(6, 'tai nghe', 'asff', '<p>asfsdf</p>', 10, 11100, 4444, 1, '2023-03-20 23:42:43', '2023-03-23 03:48:37', '/storage/uploads2023/03/21/3.png'),
(7, 'beer', '123', '<p>123</p>', 9, 2000, 123, 1, '2023-03-23 03:51:49', '2023-03-23 03:51:49', '/storage/uploads2023/03/23/bia-333-330ml-202003251330215217.jpg'),
(8, 'Võ Đăng Khoa', '123', '<p>123</p>', 9, 1230, 123, 1, '2023-03-23 03:52:14', '2023-03-23 03:52:14', '/storage/uploads2023/03/23/bgkStart.jpg'),
(9, 'kaka', '123', '<p>123</p>', 10, 11100, 123, 1, '2023-03-23 03:52:40', '2023-03-23 03:52:40', '/storage/uploads2023/03/23/beer.png'),
(10, 'kaka123', '123', '<p>123</p>', 10, 12333, 12, 1, '2023-03-23 03:53:21', '2023-03-23 03:53:21', '/storage/uploads2023/03/23/bia-tiger-crystal-330ml-202003281743435742.jpg'),
(11, 'phone4545', '444', '<p>444</p>', 9, 234234, 1233, 1, '2023-03-23 03:59:02', '2023-03-23 03:59:02', '/storage/uploads2023/03/23/bia-heineken-silver-330ml-201903281046586878.jpg'),
(12, 'muoi thuoi', '123', '<p>123</p>', 9, 1234, 123, 1, '2023-03-23 04:36:56', '2023-03-23 04:36:56', '/storage/uploads2023/03/23/beer.png'),
(13, 'laptop111', '12', '<p>12</p>', 11, 123, 12, 1, '2023-03-23 04:47:12', '2023-03-23 04:47:12', '/storage/uploads2023/03/23/bia-333-330ml-202003251330215217.jpg'),
(14, 'vertu44', '123', '<p>123</p>', 11, 345, 123, 1, '2023-03-23 07:05:08', '2023-03-23 07:05:08', '/storage/uploads2023/03/23/wallpaperflare.com_wallpaper.jpg'),
(15, 'loa to', 'sfsaf', '<p>12313</p>', 12, 1233, 123, 1, '2023-03-23 07:31:08', '2023-03-23 07:31:08', '/storage/uploads2023/03/23/3.png'),
(16, 'kaka2', '123', '<p>123</p>', 9, 11100, NULL, 1, '2023-03-23 09:59:58', '2023-03-23 09:59:58', '/storage/uploads2023/03/23/z4170770803124_b6baceb5d7f4effaa64c97a276086326.jpg'),
(17, 'kaka3', '123', '<p>123</p>', 9, 11100, 11, 1, '2023-03-23 10:00:21', '2023-03-23 10:00:21', '/storage/uploads2023/03/23/z4170770803124_b6baceb5d7f4effaa64c97a276086326.jpg'),
(18, 'kaka4', '13123', '<p>123123</p>', 9, 2111, 213, 1, '2023-03-23 10:00:43', '2023-03-23 10:00:43', '/storage/uploads2023/03/23/z4170770803124_b6baceb5d7f4effaa64c97a276086326.jpg'),
(19, 'kaka6', '123', '<p>123</p>', 9, 2111, 12, 1, '2023-03-23 10:01:08', '2023-03-23 10:01:08', '/storage/uploads2023/03/23/z4170770803124_b6baceb5d7f4effaa64c97a276086326.jpg'),
(20, 'vertu99', '333', '<p>333</p>', 11, 234234, 3333, 1, '2023-03-23 10:03:20', '2023-03-23 10:03:20', '/storage/uploads2023/03/23/Hinh-nen-Luffy-Sun-God-Nika-6.jpg'),
(21, 'vertu98', '123', '<p>123</p>', 12, 2000, 199, 1, '2023-03-23 10:04:00', '2023-03-23 10:04:00', '/storage/uploads2023/03/23/Hinh-nen-Luffy-Sun-God-Nika-6.jpg'),
(22, 'vertu96', '123', '<p>123</p>', 9, 123123, 222, 1, '2023-03-23 10:04:45', '2023-03-23 10:04:45', '/storage/uploads2023/03/23/Hinh-nen-Luffy-Sun-God-Nika-6.jpg'),
(23, 'vertu55', '345', '<p>345</p>', 9, 354, 345, 1, '2023-03-23 10:09:22', '2023-03-23 10:09:22', '/storage/uploads2023/03/23/Hinh-nen-Luffy-Sun-God-Nika-6.jpg'),
(24, 'a', '345', '<p>345</p>', 10, 5435, 444, 1, '2023-03-23 10:10:32', '2023-03-23 10:10:32', '/storage/uploads2023/03/23/z4170770803124_b6baceb5d7f4effaa64c97a276086326.jpg'),
(25, 'a1', '5645', '<p>456</p>', 11, 4444, 444, 1, '2023-03-23 10:11:22', '2023-03-23 10:11:22', '/storage/uploads2023/03/23/bia-heineken-silver-330ml-201903281046586878.jpg'),
(27, 'a3', '123123', '<p>123</p>', 10, 2111, 123, 1, '2023-03-23 10:15:34', '2023-03-23 10:15:34', '/storage/uploads2023/03/23/bia-heineken-zero-sleek-lon-330ml-202003281747088892.jpg'),
(28, 'kaka77', '12', '<p>12</p>', 9, 222, 123, 1, '2023-03-23 10:15:53', '2023-03-23 10:15:53', '/storage/uploads2023/03/23/bgkStart.jpg'),
(29, 'saasd', '12', '<p>12</p>', 9, 2000, 1121, 1, '2023-03-23 10:16:12', '2023-03-23 10:16:12', '/storage/uploads2023/03/23/anhSieuTHi.jpg'),
(30, '123ee', '123', '<p>123</p>', 10, 123, 122, 1, '2023-03-23 10:16:47', '2023-03-23 10:16:47', '/storage/uploads2023/03/23/gia-vi-san-xuat-nuoc-giai-khat-co-gas-02.jpg'),
(31, 'biasg', '12', '<p>12</p>', 10, 123, 12, 1, '2023-03-23 10:17:18', '2023-03-23 10:17:18', '/storage/uploads2023/03/23/thung-24-lon-bia-sai-gon-lager-330ml-202110111038144356.jpg'),
(32, '78saf', '123', '<p>123</p>', 10, 11100, 111, 1, '2023-03-23 10:18:47', '2023-03-23 10:18:47', '/storage/uploads2023/03/23/Trang.jpg'),
(33, 'LapTop444', '123', '<p>123</p>', 11, 123, 12, 1, '2023-03-23 10:19:17', '2023-03-23 10:19:17', '/storage/uploads2023/03/23/Dat.jpg'),
(34, 'kaka55', '35', '<p>sdf</p>', 9, 345, 4, 1, '2023-03-23 10:51:13', '2023-03-23 10:51:13', '/storage/uploads2023/03/23/bgkStart.jpg'),
(35, 'wrer3', 'qwewe', '<p>qwe</p>', 9, 333, 33, 1, '2023-03-25 02:41:40', '2023-03-25 02:41:40', '/storage/uploads2023/03/25/img19_1920x1200.jpg'),
(36, 'phonewer', 'ewq', '<p>qwe</p>', 9, 3223, NULL, 1, '2023-03-25 02:42:14', '2023-04-14 23:15:54', '/storage/uploads2023/03/25/nuoc-ngot-coca-cola-330ml-202001131632421470.jpg'),
(37, 'acer300', 're', '<p>hhahaha</p>', 13, 12333, 12332, 1, '2023-04-14 22:48:47', '2023-04-14 22:48:47', '/storage/uploads2023/04/15/bia-heineken-zero-sleek-lon-330ml-202003281747088892.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `thumb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort_by` int(11) NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `name`, `url`, `thumb`, `sort_by`, `active`, `created_at`, `updated_at`) VALUES
(4, 'Bieu Do', 'https://www.facebook.com/', '/storage/uploads2023/03/23/2.png', 1, 1, '2023-03-22 19:59:36', '2023-04-11 03:55:46'),
(5, 'bia', 'https://www.facebook.com/', '/storage/uploads2023/03/23/bia-heineken-zero-sleek-lon-330ml-202003281747088892.jpg', 1, 1, '2023-03-23 03:07:22', '2023-03-23 03:07:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@localhost.com', NULL, '$2y$10$GrJp0spQVcHdta/JT.kPHO5bLHfGJ.gWyHnMYOasc4JPpeCsWtDB2', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_customer_id_foreign` (`customer_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_slug_unique` (`slug`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `productts`
--
ALTER TABLE `productts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
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
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `productts`
--
ALTER TABLE `productts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
