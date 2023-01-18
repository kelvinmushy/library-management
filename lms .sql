-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 18, 2023 at 10:14 AM
-- Server version: 8.0.31-0ubuntu0.20.04.2
-- PHP Version: 8.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int NOT NULL,
  `book_name` varchar(100) NOT NULL,
  `book_cover` varchar(100) NOT NULL,
  `book` varchar(100) NOT NULL,
  `book_description` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `book_cover`, `book`, `book_description`, `created_at`, `updated_at`) VALUES
(1, 'Negosition Skills', 'img/09011823584663c7c012d9d6d_images (1).jpeg', '/tmp/phpsocSya', 'Yes Kelvin', '2023-01-17 20:28:13', '2023-01-17 20:28:13'),
(2, 'Rirch Dad Poor Dad', 'img/09011823474463c7bf8f12e6f_images (1).jpeg', '/tmp/phpJUKP29', 'Yes Kelvin', '2023-01-17 20:30:58', '2023-01-17 20:30:58'),
(3, 'Public Speek', 'img/09011823544763c7c04a76a70_images (1).jpeg', '/tmp/phpJfGIv8', 'malesuada feugiat. Proin eget tortor risus. Cras ultricies ligula sed magna dictum', '2023-01-17 20:31:18', '2023-01-17 20:31:18'),
(4, 'Song Of lawino', 'img/09011823284763c7c030a163b_images (1).jpeg', '/tmp/phpTqMbVa', 'Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus.', '2023-01-18 09:22:17', '2023-01-18 09:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(4, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(5, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(6, '2016_06_01_000004_create_oauth_clients_table', 1),
(7, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(8, '2019_08_19_000000_create_failed_jobs_table', 1),
(9, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(10, '2023_01_17_165232_create_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('2f30bd6e2b5c9ed9d41be5fad7f05cf6e092c91d65cfbd2c860e774184b753bf5d7c5efd6c3d08a3', 6, 3, 'user', '[]', 0, '2023-01-18 05:20:46', '2023-01-18 05:20:48', '2024-01-18 08:20:46'),
('39a2be56b8a2df825d01ba004bb54c1fcb4284f1628a94c3976c0c59c5f78186e9d69f40e7d27378', 6, 3, 'MyApp', '[]', 0, '2023-01-18 02:54:48', '2023-01-18 02:54:49', '2024-01-18 05:54:48'),
('3a14f0f8715d6bdaa432e67c5841a9ed5a7cdddfea99b9c6eb9b9c383a12ad65037d4515d99a032f', 5, 3, 'user', '[]', 0, '2023-01-17 19:48:37', '2023-01-17 19:48:37', '2024-01-17 22:48:37'),
('8c943da30debba3481b55a21d3cd5435d709fdb5e6fa21687592a787ac1fe6349b434e2dfcbd26b8', 5, 3, 'user', '[]', 0, '2023-01-17 19:44:17', '2023-01-17 19:44:17', '2024-01-17 22:44:17'),
('90fd8289780ed4f2efbd434cb1b87b14cf30a6caaf91d520c5abb3677471c3de30e075caccc64a2f', 4, 1, 'user', '[]', 0, '2023-01-17 17:05:49', '2023-01-17 17:05:49', '2024-01-17 20:05:49'),
('949101725cd9d69a34cec31d5ab3b2d78fb25e63aa2fe0896af135f2790eb6c1521d8ec6ea3e3d2f', 1, 1, 'user', '[]', 0, '2023-01-17 16:29:21', '2023-01-17 16:29:21', '2024-01-17 19:29:21'),
('95d2bd06f890f74cc140b33ac84efe926a3355fadf4db4f873835a507c6bbf251950aa04e44047fd', 6, 3, 'user', '[]', 0, '2023-01-18 02:58:05', '2023-01-18 02:58:05', '2024-01-18 05:58:05'),
('cd54169d87a0c5527842a6492fdaddaf4cb979da4c9de7db6eaabc9cfca6cf4ccb9b417ed8122e0f', 6, 3, 'user', '[]', 0, '2023-01-18 02:56:01', '2023-01-18 02:56:01', '2024-01-18 05:56:01'),
('dff9de2bb97792f0951dfba8e5553005e645f77c7d8d8ffb928542c098ea064a2e591022876b4088', 6, 3, 'user', '[]', 0, '2023-01-18 02:55:50', '2023-01-18 02:55:50', '2024-01-18 05:55:50'),
('f43b25c9b8e73acbd33e5626dbebf37b70d1ed58b19142027994ac59b970c0b2baeeb78e3ddb6ccb', 1, 1, 'user', '[]', 0, '2023-01-17 16:19:20', '2023-01-17 16:19:20', '2024-01-17 19:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `scopes` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'nLTfGTkqTFBxOVIMHcBc4pEfIObAFJID2plpIjXd', NULL, 'http://localhost', 1, 0, 0, '2023-01-17 13:50:07', '2023-01-17 13:50:07'),
(2, NULL, 'Laravel Password Grant Client', 'JksZCxJc862CMcT4saLRVodWD2XhBZeN5pAXvuFd', 'users', 'http://localhost', 0, 1, 0, '2023-01-17 13:50:07', '2023-01-17 13:50:07'),
(3, NULL, 'LMS Personal Access Client', 'GxxfZKBu3crY1ztc8p28Jd9jtPCip9ygvgXslcx6', NULL, 'http://localhost', 1, 0, 0, '2023-01-17 19:30:50', '2023-01-17 19:30:50'),
(4, NULL, 'LMS Password Grant Client', 'OsxnwFd6W6xAg0WEfr6WhAqwlsPxveLNCNz5rJeX', 'users', 'http://localhost', 0, 1, 0, '2023-01-17 19:30:50', '2023-01-17 19:30:50');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint UNSIGNED NOT NULL,
  `client_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-01-17 13:50:07', '2023-01-17 13:50:07'),
(2, 3, '2023-01-17 19:30:50', '2023-01-17 19:30:50');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'MyApp', 'bf4ee2a0b34b141eaae4e0b05bd127cf7f6fe392a94f01cc9e4f3e43839f0862', '[\"*\"]', NULL, NULL, '2023-01-17 14:08:18', '2023-01-17 14:08:18'),
(2, 'App\\Models\\User', 1, 'MyApp', '694bf8126eff5d4c84f7eed614804ba626fadc5c29bb3c63253b9aecdfc801af', '[\"*\"]', NULL, NULL, '2023-01-17 14:10:44', '2023-01-17 14:10:44'),
(3, 'App\\Models\\User', 1, 'MyApp', '7766921f8a25732860dc1dea194bf490d7d28bc6848499e8879c23c2c3263b06', '[\"*\"]', NULL, NULL, '2023-01-17 14:15:33', '2023-01-17 14:15:33'),
(4, 'App\\Models\\User', 1, 'MyApp', '736da4aac3f16c37ab89889a3250ee6569cb0f3cc49018245e00e6a95e287497', '[\"*\"]', NULL, NULL, '2023-01-17 14:16:28', '2023-01-17 14:16:28'),
(5, 'App\\Models\\User', 1, 'MyApp', 'fae50f6b9210937681ddcca6d106e26f03daba50a56358006f3a419882420e8d', '[\"*\"]', NULL, NULL, '2023-01-17 14:19:10', '2023-01-17 14:19:10'),
(6, 'App\\Models\\User', 2, 'MyApp', '2f0e7a0c6f1a863a27defd1c25a2bb04e2775a7b34ccd9ce6c7e2ad126cdaeea', '[\"*\"]', NULL, NULL, '2023-01-17 14:22:05', '2023-01-17 14:22:05'),
(7, 'App\\Models\\User', 1, 'MyApp', 'd3b2f2fac9d096720a047c7182b80152757d3b202920d1f91ce2c7f17f9718d1', '[\"*\"]', NULL, NULL, '2023-01-17 14:34:52', '2023-01-17 14:34:52'),
(8, 'App\\Models\\User', 1, 'MyApp', 'baf135e892ec019f1c6bd9debf1d3df135d3bb9b4d46bbdb6bf75be8bb61f2f6', '[\"*\"]', NULL, NULL, '2023-01-17 14:36:56', '2023-01-17 14:36:56'),
(9, 'App\\Models\\User', 1, 'MyApp', 'f8003b3d3255b6dba6848c5764103221d9e77bba34e895a3c6028547ee693984', '[\"*\"]', NULL, NULL, '2023-01-17 14:39:37', '2023-01-17 14:39:37'),
(10, 'App\\Models\\User', 1, 'user', 'ce121e2e60a97eeef44960e80b8d3d38bf1d2a29b6ec725121c83f2b714052f2', '[\"*\"]', NULL, NULL, '2023-01-17 16:12:08', '2023-01-17 16:12:08'),
(11, 'App\\Models\\User', 1, 'user', '780178b4555435ba30e417307b0b4daa00a61080c8a696eed526f4aff3576dfb', '[\"*\"]', NULL, NULL, '2023-01-17 16:15:03', '2023-01-17 16:15:03'),
(12, 'App\\Models\\User', 1, 'user', '657a3edc0e781526d98dc1e26f7e7f221036f11675af4d5cbf2712b082940f94', '[\"*\"]', NULL, NULL, '2023-01-17 16:18:33', '2023-01-17 16:18:33'),
(13, 'App\\Models\\User', 1, 'user', '6d045f452ac58e85b99ec2664850a688c11a365d2f71219a1d7b37df98601134', '[\"*\"]', NULL, NULL, '2023-01-17 16:18:42', '2023-01-17 16:18:42'),
(14, 'App\\Models\\User', 5, 'user', 'c5af91599f6225987aa69bb24a797b1153349f93cc46dc9d1cad607948e14ae1', '[\"*\"]', NULL, NULL, '2023-01-17 19:42:56', '2023-01-17 19:42:56');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `detail`, `created_at`, `updated_at`) VALUES
(1, 'kevo93mushy@gmail.com', '1234', '2023-01-17 16:30:52', '2023-01-17 16:30:52');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `display_name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hide` tinyint(1) NOT NULL DEFAULT '0',
  `role` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `hide`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Kelvin Cosmas', 'kevo933mushy@gmail.com', NULL, '$2y$10$/t9L9FTwVtc4K36aVzUxueu2An2VfCodQLu4zK3NuEJCCcAeDDIv6', 0, 'admin', NULL, '2023-01-17 14:22:05', '2023-01-17 14:22:05'),
(3, 'matahyo', 'mathayo@gmail.com', NULL, '$2y$10$MAhTDJ4J.cwaUEY9dmXNZufvxCyEQbxdpP9XTpn5hFJyA2x67RxGO', 0, 'normal', NULL, '2023-01-17 17:03:08', '2023-01-17 17:03:08'),
(4, 'matahyo', 'user@gmail.com', NULL, '$2y$10$.JLG4tXb7mp8My42pnW34u3TXwzHemvU.Yd6Hmh80Aa5GbOe28yCq', 0, 'normal', NULL, '2023-01-17 17:03:37', '2023-01-17 17:03:37'),
(5, 'Erick Cosmas', 'admin@gmail.com', NULL, '$2y$10$R8tXGa7Ni4UFi8iufE8qreTX2.v0qm8UmZnm4saWfyB6Fz6aC8IYy', 0, 'admin', NULL, '2023-01-17 19:17:28', '2023-01-17 19:17:28'),
(6, 'kelvin cosmas', 'kevo93mushy@gmail.com', NULL, '$2y$10$.vd2ygI5ugYe7pyqSTOiyeMh3OVXa1SU0UkL1qWgq4Q6ClYypnrnK', 0, 'admin', NULL, '2023-01-18 02:54:46', '2023-01-18 02:54:46'),
(7, 'ertyuj', 'fg@gmail.com', NULL, '2345ty@#WE', 0, 'admin', NULL, '2023-01-18 07:03:33', '2023-01-18 07:03:33'),
(9, 'ertyuj', 'fgyyyy@gmail.com', NULL, '2345ty@#WE', 0, 'admin', NULL, '2023-01-18 07:03:59', '2023-01-18 07:03:59'),
(11, 'ertyuj', 'fgyertgyhyyy@gmail.com', NULL, '2345ty@#WE', 0, 'admin', NULL, '2023-01-18 07:04:49', '2023-01-18 07:04:49');

-- --------------------------------------------------------

--
-- Table structure for table `user_comment_books`
--

CREATE TABLE `user_comment_books` (
  `id` int NOT NULL,
  `user_comment` text NOT NULL,
  `user_id` int NOT NULL,
  `book_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_comment_books`
--

INSERT INTO `user_comment_books` (`id`, `user_comment`, `user_id`, `book_id`, `created_at`, `updated_at`) VALUES
(1, 'gwergsertgwe4', 4, 1, '2023-01-18 02:44:33', '2023-01-18 02:44:33'),
(2, 'yes keldhdjsfhnsk', 1, 1, '2023-01-18 06:52:19', '2023-01-18 06:52:19');

-- --------------------------------------------------------

--
-- Table structure for table `user_like_books`
--

CREATE TABLE `user_like_books` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `book_id` int NOT NULL,
  `user_like` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_like_books`
--

INSERT INTO `user_like_books` (`id`, `user_id`, `book_id`, `user_like`, `created_at`, `update_at`) VALUES
(1, 4, 1, 0, '2023-01-17 20:30:05', '2023-01-17 20:30:05'),
(2, 5, 1, 1, '2023-01-17 22:22:44', '2023-01-17 22:22:44'),
(3, 5, 2, 1, '2023-01-17 22:57:57', '2023-01-17 22:57:57'),
(4, 5, 3, 1, '2023-01-17 22:58:01', '2023-01-17 22:58:01');

-- --------------------------------------------------------

--
-- Table structure for table `user_mark_books`
--

CREATE TABLE `user_mark_books` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `user_like` tinyint(1) NOT NULL DEFAULT '0',
  `book_id` int NOT NULL,
  `favourite` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user_mark_books`
--

INSERT INTO `user_mark_books` (`id`, `user_id`, `user_like`, `book_id`, `favourite`, `created_at`, `update_at`) VALUES
(1, 5, 0, 2, 0, '2023-01-17 23:07:56', '2023-01-17 23:07:56'),
(2, 5, 0, 3, 1, '2023-01-18 01:38:49', '2023-01-18 01:38:49'),
(3, 4, 0, 1, 0, '2023-01-18 02:58:41', '2023-01-18 02:58:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
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
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_comment_books`
--
ALTER TABLE `user_comment_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_like_books`
--
ALTER TABLE `user_like_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_mark_books`
--
ALTER TABLE `user_mark_books`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_comment_books`
--
ALTER TABLE `user_comment_books`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_like_books`
--
ALTER TABLE `user_like_books`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_mark_books`
--
ALTER TABLE `user_mark_books`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
