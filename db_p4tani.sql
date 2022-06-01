-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 01, 2022 at 08:49 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_p4tani`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fb` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ig` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yt` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `company`, `description`, `email`, `fb`, `hp`, `ig`, `yt`, `image`, `created_at`, `updated_at`) VALUES
(1, 'E-P4TANI', 'Tempatnya Belanja Tanaman hias kesukaan langsung Dari petani asli Bondowoso', 'p4tani@gmail.com', 'fb.com', '+6282334739813', 'ig.com', 'https://youtu.be/agK6CSvLuSs', 'post-images/poster/k8FeWoWUm6n0xXbBMQRnT1KY7Jlpdug6ur3v7EJP.png', NULL, '2022-06-01 09:04:23');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `writer` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `description`, `writer`, `category`, `image`, `created_at`, `updated_at`) VALUES
(17, 'percobaan saja', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque ipsum facilis obcaecati amet exercitationem porro vel quam quaerat, sint tenetur repudiandae nam. Placeat sunt voluptates, quidem perspiciatis dolor itaque cupiditate?', 'okta', 'kaktus', 'post-images/article/FhANM6rkiJTA9t1ZzPFt24eZCcfFnNbxykv2jXcR.jpg', '2022-06-01 11:47:21', '2022-06-01 11:47:21');

-- --------------------------------------------------------

--
-- Table structure for table `article_comments`
--

CREATE TABLE `article_comments` (
  `idArticle` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUser` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comments` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_users` int(11) NOT NULL,
  `nameProduct` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'kaktus', 'Apa yang dimaksud dengan tanaman kaktus? Kata kaktus berasal dari bahasa latin \"kaktos\" yang berarti tumbuhan berduri yang identitasnya tidak pasti. Kaktus diakui akan daya tahan dan kemampuannya untuk berkembang di lingkungan yang sulit, mereka diklasifikasikan sebagai sukulen batang karena mereka memiliki batang berdaging khusus', '2022-04-11 13:29:44', '2022-05-27 12:35:30'),
(3, 'sukulen', 'Tumbuhan sukulen, juga dikenal sebagai sukulen, adalah tumbuhan dengan organ yang menebal, berdaging, dan membengkak, biasanya untuk menyimpan air di iklim atau kondisi tanah kering.', '2022-04-11 13:30:45', '2022-05-27 12:35:52'),
(4, 'Aglaonema', 'Aglaonema adalah tanaman hias populer dari suku talas-talasan atau Araceae. Genus Aglaonema memiliki sekitar 30 spesies. Mereka berasal dari daerah tropis dan subtropis di Asia dan Nugini. Mereka umumnya dikenal sebagai Chinese', '2022-04-11 16:47:02', '2022-05-27 12:36:39'),
(5, 'Keladi hias', 'Keladi merupakan sekelompok tumbuhan dari genus Caladium. Dalam bahasa sehari-hari keladi kerap juga dipakai untuk menyebut beberapa tumbuhan lain yang masih sekerabat namun tidak termasuk Caladium, seperti talas. Keladi sejati jarang membentuk umbi yang membesar.', '2022-04-11 18:47:33', '2022-05-27 12:37:17'),
(9, 'anggrek', 'Suku anggrek-anggrekan merupakan satu suku tumbuhan berbunga dengan anggota jenis terbanyak. Jenis-jenisnya tersebar luas dari daerah tropika basah hingga wilayah sirkumpolar, meskipun sebagian besar anggotanya ditemukan di daerah tropika.', '2022-05-27 12:38:07', '2022-05-27 12:38:07'),
(10, 'Lainnya', 'Product Test', '2022-05-27 13:46:11', '2022-06-01 01:37:22');

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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(14, 'how to create akun', 'Klik tombol sign-in pojok kanan', '2022-06-01 11:48:08', '2022-06-01 11:48:08');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `description`, `category`, `image`, `created_at`, `updated_at`) VALUES
(12, 'Oktafian Dwi Cahyono', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat, nemo at? Eveniet, consectetur. Vero qui, omnis, corrupti corporis necessitatibus facere asperiores nemo eos alias nam amet nostrum explicabo rem! Repudiandae.', 'IT support enginering', 'post-images/member/9k0i9J9bb69kVCOrKYk4yTaNc4oGl6ln0fQg6cPO.jpg', '2022-06-01 08:37:11', '2022-06-01 11:48:24'),
(13, 'Oktafian Dwi Cahyono', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat, nemo at? Eveniet, consectetur. Vero qui, omnis, corrupti corporis necessitatibus facere asperiores nemo eos alias nam amet nostrum explicabo rem! Repudiandae.', 'IT support enginering', 'post-images/member/iDzBMALK8HNWWsCSJH4AihZ5r85LKKzfQsDZg7z4.jpg', '2022-06-01 08:37:40', '2022-06-01 11:48:30');

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
(5, '2022_04_11_150530_create_faqs_table', 1),
(6, '2022_04_11_151316_create_abouts_table', 1),
(7, '2022_04_11_151415_create_articles_table', 1),
(8, '2022_04_11_151508_create_members_table', 1),
(9, '2022_04_11_151547_create_carts_table', 1),
(10, '2022_04_11_151604_create_categories_table', 1),
(11, '2022_04_11_151717_create_stocks_table', 1),
(12, '2022_04_11_183613_create_posters_table', 1),
(13, '2022_04_12_001614_create_products_table', 1),
(14, '2022_04_19_061257_update_products_table', 1),
(15, '2022_05_11_013856_create_transaksi_table', 1),
(16, '2022_05_22_045812_create_article_comments_table', 1),
(17, '2022_05_22_055252_update_article_comments_table', 1),
(18, '2022_05_27_125605_create_product_images_table', 2);

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
-- Table structure for table `posters`
--

CREATE TABLE `posters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posters`
--

INSERT INTO `posters` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(8, 'Poster Pertama', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam accusamus dolorum, quisquam voluptatem aut nulla in temporibus. Voluptate, expedita aperiam aspernatur quidem, dolorem adipisci porro unde suscipit ea placeat maxime.', 'post-images/poster/4juT62SiJ4FZQqETOwyueSspdRo4SPjyiN5r6r6N.jpg', '2022-06-01 08:20:17', '2022-06-01 11:46:28'),
(9, 'Poster Kedua', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam accusamus dolorum, quisquam voluptatem aut nulla in temporibus. Voluptate, expedita aperiam aspernatur quidem, dolorem adipisci porro unde suscipit ea placeat maxime.', 'post-images/poster/wqtDJGlHQvS7sx8i2S9wxYYrPZGDKfU6kspGXlsQ.jpg', '2022-06-01 08:20:35', '2022-06-01 11:46:35'),
(12, 'Poster Ketiga', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam accusamus dolorum, quisquam voluptatem aut nulla in temporibus. Voluptate, expedita aperiam aspernatur quidem, dolorem adipisci porro unde suscipit ea placeat maxime.', 'post-images/poster/S5avmhitaLRbi3VZL3ThVyP7639rSxh0YSOSDD96.jpg', '2022-06-01 08:23:05', '2022-06-01 11:46:41');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nameProduct` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `priceRange` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `code`, `category`, `nameProduct`, `description`, `image`, `created_at`, `updated_at`, `priceRange`) VALUES
(20, 'KD001', 'kaktus', 'kaktus', 'Kaktus dapat tumbuh pada waktu yang lama tanpa air. Kaktus biasa ditemukan di daerah-daerah yang kering. Kata jamak untuk kaktus adalah kakti. Kaktus memiliki akar yang panjang untuk mencari air dan memperlebar penyerapan air dalam tanah. Air yang diserap kaktus disimpan dalam ruang di batangnya.', 'post-images/product/YxdHGJzS2e9owp9zFsThs2QbdywErweqQwyM6TJt.jpg', '2022-06-01 11:44:42', '2022-06-01 11:44:42', 'Rp.10000 - Rp.100000');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `code`, `image`, `created_at`, `updated_at`) VALUES
(38, 'KD001', 'post-images/product/bWB5GqXz1ceDJDtMevD7cHfra7L0q0SST9CWU7wE.jpg', '2022-06-01 11:45:30', '2022-06-01 11:45:30'),
(39, 'KD001', 'post-images/product/d0iZGNBcZBIq853J14BB74IyKGoOZk6ITysjTEXj.jpg', '2022-06-01 11:45:35', '2022-06-01 11:45:35'),
(40, 'KD001', 'post-images/product/2qJbD5QuTmkBQucc5tu1oWsuBC0TIW9JRl2H6ahr.jpg', '2022-06-01 11:45:40', '2022-06-01 11:45:40');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `price` double(30,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `code`, `size`, `stock`, `price`, `created_at`, `updated_at`) VALUES
(51, 'KD001', 'small', 100, 15000.00, '2022-06-01 11:45:18', '2022-06-01 11:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `codeTransaksi` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUser` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(30,2) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` double(30,2) NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hp` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `access`, `address`, `city`, `province`, `gender`, `hp`, `image`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(9, 'Oktafian Dwi Cahyono', 'E41191369', 'oktafian510@gmail.com', NULL, '$2y$10$5XAJkKwsXY3l0e9tUFkNvO.PYWpKLgdnL1VhWqqTn0TxRV.pCs9u6', '-', 'as', '-as', '-sa', '-sa', '-sa', 'post-images/profil/85hL1AYjdRPHY5EJtoKS4hkGuYVnu6ioiKZ75RFh.jpg', '-', NULL, '2022-05-17 19:23:06', '2022-06-01 11:37:35'),
(12, 'Administrator', 'admin', 'admin@gmail.com', NULL, '$2y$10$V9UhEYg6NX0.AKCn/SvoSeGoxmAJBjYtIMV/TO6j.hnM8Fudtduzm', '-', '-', '-', '-', '-', '-', 'default.jpg', 'admin', NULL, '2022-05-27 16:03:16', '2022-05-27 16:03:16');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `posters`
--
ALTER TABLE `posters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_code_unique` (`code`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD UNIQUE KEY `transaksi_codetransaksi_unique` (`codeTransaksi`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
-- AUTO_INCREMENT for table `posters`
--
ALTER TABLE `posters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
