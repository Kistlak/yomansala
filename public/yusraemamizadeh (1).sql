-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2021 at 11:42 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yusraemamizadeh`
--

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description1` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description2` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `url_mapped` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`id`, `title`, `img`, `description1`, `description2`, `created_at`, `updated_at`, `url_mapped`) VALUES
(15, 'Introspection III', '20210520190212.jpg', '9\" x 12\"', 'Colored Pencil and Gold Acrylic', '2021-05-20 16:02:12', '2021-05-20 18:38:44', 'Introspection-III1'),
(16, 'Introspection III', '20210520203236.jpg', '9\" x 13\"', 'Colored Pencil', '2021-05-20 16:08:26', '2021-05-20 17:32:36', 'Introspection-III'),
(19, 'khalil ahmad', '20210520213740.jpg', 'dasds', 'asdsda', '2021-05-20 18:37:40', '2021-05-20 18:37:40', 'khalil-ahmad'),
(20, 'khalil ahmad', '20210520213813.jpg', 'adad', 'adad', '2021-05-20 18:38:13', '2021-05-20 18:38:13', 'khalil-ahmad1');

-- --------------------------------------------------------

--
-- Table structure for table `episode`
--

CREATE TABLE `episode` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `season_id` int(11) NOT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `episode`
--

INSERT INTO `episode` (`id`, `title`, `season_id`, `img`, `description`, `created_at`, `updated_at`, `link`) VALUES
(7, 'Lena Kassicieh', 7, '20210520192117.jpg', 'Lena Kassicieh is a Palestinian-American multi disciplinary artist and maker. She talks\r\nabout growing up in a family of doctors and medical professionals, beauty school dreams,\r\nand letting her innate curiosity and attraction to whimsical and ironic everyday life\r\nobservations pour into her creative process . We follow Lena’s journey from New Mexico\r\nto Amman and then to Dubai and learn about her experiences in the art world which\r\nempowered her to realize, accept, and validate herself as an artist.It was such a pleasure\r\nto speak with Lena about her art process, thought process, and creative living.', '2021-05-20 16:12:54', '2021-05-20 16:21:17', 'https://podcasts.apple.com/us/podcast/sophiya-khwaja/id1482800645?i=1000452795557'),
(8, 'Chafa Ghaddar', 8, '20210520191415.jpg', 'Wrapping up season 1 of Tavan Studio in Conversation with an in-depth chat about frescos, surfaces, decay, and time with artist and muralist Chafa Ghaddar. Chafa walks us through her journey of observing the natural and also distressed landscapes of Lebanon and the transition to the heat and crystal blue pool surfaces of Dubai and how that has impacted her fresco thought process and work. Chafa also opens up about her experience as a new mother and gives us a very honest and raw depiction of her time spent during the lockdown.', '2021-05-20 16:14:15', '2021-05-20 16:14:15', 'https://podcasts.apple.com/us/podcast/chafa-ghaddar/id1482800645?i=1000479772087'),
(9, 'Afshan Daneshvar', 8, '20210520191944.jpg', 'Afshan Daneshvar is a visual artist who\'s work is deeply rooted and inspired by her Persian\r\nculture and upbringing. Afshan talks about her journey on becoming an artist, how she fell\r\nin love with paper, and how a vintage notebook from her grandfather spoke to her like a\r\nlanguage of secrets and inspired the repetitious theme and process in her work. In this\r\nheartfelt conversation we talk about the relationship of the artist and their studio,\r\ngeographical moves, and the unexpected challenges caused by the pandemic.', '2021-05-20 16:19:44', '2021-05-20 16:19:44', 'https://podcasts.apple.com/us/podcast/afshan-daneshvar/id1482800645?i=1000508667267'),
(10, 'Maitha Hamdan', 9, '20210520192055.jpg', 'With childhood anecdotes and stories about how art brought her closer to her children,\r\nEmirati Artist Maitha Hamdan, immerses us in her creative and artistic life. Maitha talks\r\nabout being a multi disciplinary artist and business woman, how she came back to art\r\nafter leaving it during a rough patch in her life, and offers some insight on mom guilt and\r\nself care.', '2021-05-20 16:20:32', '2021-05-20 18:32:03', 'https://podcasts.apple.com/us/podcast/maitha-hamdan/id1482800645?i=1000502357397'),
(11, 'test', 9, '20210520213222.jpg', 'sdsdssd', '2021-05-20 18:32:22', '2021-05-20 18:32:22', 'sdsdsdsd');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_09_185955_create_art_table', 1),
(5, '2021_05_09_193904_add_url_mapped_to_art', 2),
(6, '2021_05_16_103326_create_podcast_table', 3),
(7, '2021_05_16_104801_create_episode_table', 4),
(8, '2021_05_16_105705_create_season_table', 5),
(9, '2021_05_16_155729_create_episode_dbtable', 6),
(10, '2021_05_16_155850_create_podcast_dbtable', 7),
(11, '2021_05_16_160105_create_art_dbtable', 8),
(12, '2021_05_16_164358_create_season_dbtable', 9),
(13, '2021_05_16_172046_add_link_to_podcast', 10),
(14, '2021_05_16_172226_add_link_to_episode', 11),
(15, '2014_10_12_200000_add_two_factor_columns_to_users_table', 12),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 12),
(17, '2021_05_18_195238_create_sessions_table', 12),
(18, '2021_05_19_220047_add_url_mapped_table', 13);

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
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `podcast`
--

CREATE TABLE `podcast` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `applePodcastLink` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spotifyLink` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `podcast`
--

INSERT INTO `podcast` (`id`, `title`, `img`, `logo`, `description`, `applePodcastLink`, `spotifyLink`, `created_at`, `updated_at`) VALUES
(1, 'Title', '20210520191122.jpg', '20210520213109.png', 'Tavān Studio in Conversation is an ongoing project started by Yosra\r\nin 2019 where she interviews female artists and makers in the\r\nMENASA region and the diaspora about their creative living.\r\nThe podcast is now in its second season.', 'https://podcasts.apple.com/us/podcast/tavan-studio-in-conversation/id1482800645', 'https://open.spotify.com/show/6tllwCZ63PNDgoXVeVloTU', NULL, '2021-05-20 18:31:09');

-- --------------------------------------------------------

--
-- Table structure for table `season`
--

CREATE TABLE `season` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `season`
--

INSERT INTO `season` (`id`, `title`, `created_at`, `updated_at`) VALUES
(7, 'Season I', '2021-05-20 16:11:36', '2021-05-20 16:11:36'),
(8, 'Season II', '2021-05-20 16:11:49', '2021-05-20 16:11:49'),
(9, 'Season III', '2021-05-20 18:31:49', '2021-05-20 18:31:49');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('evtgYHKXAvXiG35XfBgoc7uQLnTxXEQFzx4B5kQ4', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiajJlY1JxbzdGSzRaWTJmZGFITXFOTVRjQkQ0emt5eEFUZDRvV3FORSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9hcnRzIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJC93TGc5ZzdCQzNjVnpaYk5BRVBkWC5mM2xFbFRqYUEuaUk0TS93MURXblUyVHZ6VWxrQ1dtIjt9', 1621540111),
('LuFGjeFCFyguk6zV15dC1Q2OYZYrueDCfx4vlhXf', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiRTNFTEFJYW1xVHdqaEt6bnY0UE91bUdvNm5IWjIyeDYyWHdpdlFJNCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hcnQva2hhbGlsLWFobWFkIjt9czozOiJ1cmwiO2E6MDp7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCQvd0xnOWc3QkMzY1Z6WmJOQUVQZFguZjNsRWxUamFBLmlJNE0vdzFEV25VMlR2elVsa0NXbSI7fQ==', 1621546767),
('tdL5GNLJnr4ov8ZBxMc42SPxKKBkLQJFzFLxvX2H', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSkVlYXBNN0NRVThNU0F1WExjZjVWQnQ3dkgyMDltcU5WU0VLVjJjdyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1621546837);

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', NULL, '$2y$10$/wLg9g7BC3cVzZbNAEPdX.f3lElTjaA.iI4M/w1DWnU2TvzUlkCWm', NULL, NULL, 'f2anZRShYQy3fMz1YwgZ3IA3rQNtYEUGeEcuf181UoEZjjGqEEKH7RhvENnM', '2021-05-18 17:03:11', '2021-05-18 17:34:51');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `episode`
--
ALTER TABLE `episode`
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
-- Indexes for table `podcast`
--
ALTER TABLE `podcast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `season`
--
ALTER TABLE `season`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `art`
--
ALTER TABLE `art`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `episode`
--
ALTER TABLE `episode`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `podcast`
--
ALTER TABLE `podcast`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `season`
--
ALTER TABLE `season`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
