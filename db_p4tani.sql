-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2022 at 11:34 PM
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
(1, 'E-P4TANI', 'Tempatnya Belanja Tanaman hias kesukaan langsung Dari petani asli Bondowoso', 'p4tani@gmail.com', 'fb.com', '+6282334739813', 'ig.com', 'https://youtu.be/agK6CSvLuSs', 'hero-img.png', NULL, '2022-04-11 12:44:34');

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
(3, 'Post Title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!\r\n\r\n', 'okta', 'sukulen', 'portfolio-4.jpg', '2022-04-11 12:20:38', '2022-04-11 12:21:31'),
(5, 'Post Title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!\r\n\r\n', 'sss', 'news', 'portfolio-9.jpg', '2022-04-11 16:43:27', '2022-04-11 16:43:27'),
(6, 'Post Title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!\r\n\r\n', 'okta', 'kaktus', 'portfolio-7.jpg', '2022-04-11 16:44:05', '2022-04-11 16:44:05'),
(7, 'Post Title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!\r\n\r\n', 'okta', 'sukulen', 'portfolio-8.jpg', '2022-04-11 12:20:38', '2022-04-11 12:21:31'),
(8, 'Post Title 8', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!\n\n', 'sss', 'aca', 'portfolio-9.jpg', '2022-04-11 16:43:27', '2022-04-11 16:43:27'),
(9, 'Post Title', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis aliquid atque, nulla? Quos cum ex quis soluta, a laboriosam. Dicta expedita corporis animi vero voluptate voluptatibus possimus, veniam magni quis!\r\n\r\n', 'okta', 'kaktus', 'portfolio-2.jpg', '2022-04-11 16:44:05', '2022-04-11 16:44:05');

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

--
-- Dumping data for table `article_comments`
--

INSERT INTO `article_comments` (`idArticle`, `idUser`, `comments`, `created_at`, `updated_at`, `name`, `image`) VALUES
('3', '9', 'ini test koment', '2022-05-26 04:39:24', '2022-05-26 04:39:24', 'Oktafian Dwi Cahyono', 'team-1.jpg'),
('3', '11', 'oke', '2022-05-26 05:08:48', '2022-05-26 05:08:48', 'KangTelor', 'default.jpg');

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

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `code`, `id_users`, `nameProduct`, `size`, `quantity`, `price`, `status`, `image`, `created_at`, `updated_at`) VALUES
(19, '80841', 9, 'Special Item', 'standart', 10, 300000.00, 'ready', 'image.jpg', '2022-05-27 07:57:08', '2022-05-27 07:57:08');

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
(10, 'Lainnya', 'Product Test', '2022-05-27 13:46:11', '2022-05-27 13:46:11');

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
(4, 'siapa programernya', 'okta', '2022-04-11 10:27:15', '2022-04-11 10:27:15'),
(6, 'ini pertanyaan kedua', 'hihihihi', '2022-04-11 11:17:03', '2022-04-11 11:17:03'),
(7, 'ketiga ?\r\n', 'okta', '2022-04-11 10:27:15', '2022-04-11 10:27:15'),
(8, 'ke empat ?', 'hihihihi', '2022-04-11 11:17:03', '2022-04-11 11:17:03'),
(9, 'siapa programernya 5', 'okta', '2022-04-11 10:27:15', '2022-04-11 10:27:15'),
(10, 'ini pertanyaan kedua 6', 'hihihihi', '2022-04-11 11:17:03', '2022-04-11 11:17:03'),
(11, 'ketiga  7?\r\n', 'okta', '2022-04-11 10:27:15', '2022-04-11 10:27:15'),
(12, 'ke empat 8?', 'hihihihi', '2022-04-11 11:17:03', '2022-04-11 11:17:03');

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
(1, 'Oktafian Dwi Cahyono', 'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut', 'IT support enginering', 'team-1.jpg', NULL, '2022-04-12 19:37:51'),
(6, 'Oktafian Dwi Cahyono', 'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut', 'IT support enginering', 'team-1.jpg', NULL, '2022-04-12 19:37:51'),
(7, 'Oktafian Dwi Cahyono', 'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut', 'IT support enginering', 'team-1.jpg', NULL, '2022-04-12 19:37:51'),
(8, 'Oktafian Dwi Cahyono', 'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut', 'IT support enginering', 'team-1.jpg', NULL, '2022-04-12 19:37:51'),
(9, 'Oktafian Dwi Cahyono', 'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut', 'IT support enginering', 'team-1.jpg', NULL, '2022-04-12 19:37:51'),
(10, 'Oktafian Dwi Cahyono', 'Magni qui quod omnis unde et eos fuga et exercitationem. Odio veritatis perspiciatis quaerat qui aut aut aut', 'IT support enginering', 'team-1.jpg', NULL, '2022-04-12 19:37:51');

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
(3, 'First slide label', 'Some representative placeholder content for the third slide.', 'portfolio-2.jpg.jpg', '2022-04-11 12:16:01', '2022-04-11 12:16:01'),
(4, 'Second slide label', 'Some representative placeholder content for the third slide.', 'portfolio-7.jpg', '2022-04-11 12:18:47', '2022-04-11 12:18:47'),
(5, 'Thrid slide label', 'Some representative placeholder content for the third slide.', 'portfolio-2.jpg.jpg', '2022-04-11 12:16:01', '2022-04-11 12:16:01'),
(6, 'Second slide label', 'Some representative placeholder content for the third slide.', 'portfolio-7.jpg', '2022-04-11 12:18:47', '2022-04-11 12:18:47');

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
(13, 'K001', 'kaktus', 'Kaktus', 'Kata jamak untuk kaktus adalah kakti. Kaktus memiliki akar yang panjang untuk mencari air dan memperlebar penyerapan air dalam tanah.', 'post-images/JYhttNHBgAQfcfPIbBU1fx2E2t5U7boV8X3dwYDK.jpg', '2022-05-27 12:42:26', '2022-05-27 12:42:26', 'Rp10000 - Rp100000'),
(14, 'S001', 'sukulen', 'Sukulen', 'Tumbuhan sukulen, juga dikenal sebagai sukulen, adalah tumbuhan dengan organ yang menebal, berdaging, dan membengkak, biasanya untuk menyimpan air di iklim atau kondisi tanah kering.', 'post-images/fDQwTrAgd2UO4OgoGd1VSnChOqmeEbchHvaV82ib.jpg', '2022-05-27 12:43:52', '2022-05-27 12:45:20', 'Rp.20000 - Rp.30000'),
(15, 'A001', 'Aglaonema', 'Aglaonema', 'Macam-macam tanaman hias daun yang sedang hits saat ini adalah aglaonema. Aglaonema termasuk tanaman hias jenis talas-talasan. Ada banyak jenis aglaonema dengan beragam corak, warna, dan ukuran. Harga aglaonema pun beragam sesuai dengan jenisnya, mulai dari RP 30 ribu sampai jutaan rupiah', 'post-images/SdcIssFilcyfi2IR63kjiU1I5Sff5EhtQBDmekix.jpg', '2022-05-27 12:45:05', '2022-05-27 12:45:05', 'Rp20000 - Rp40000'),
(16, 'Ke001', 'Keladi hias', 'Keladi', 'Keladi merupakan sekelompok tumbuhan dari genus Caladium. Dalam bahasa sehari-hari keladi kerap juga dipakai untuk menyebut beberapa tumbuhan lain yang masih sekerabat namun tidak termasuk Caladium, seperti talas. Keladi sejati jarang membentuk umbi yang membesar.', 'post-images/gHu9bHwEml1Yb033PAGKXW2KLYLnYZgu3MgZuFO7.jpg', '2022-05-27 12:47:21', '2022-05-27 12:47:21', 'Rp20000 - Rp50000'),
(17, 'AN001', 'anggrek', 'Anggrek', 'Suku anggrek-anggrekan merupakan satu suku tumbuhan berbunga dengan anggota jenis terbanyak. Jenis-jenisnya tersebar luas dari daerah tropika basah hingga wilayah sirkumpolar, meskipun sebagian besar anggotanya ditemukan di daerah', 'post-images/BYy9ifH0ipWFtW6KhrRl2ZidnJ5AlUsGbcX0I1Po.jpg', '2022-05-27 12:48:35', '2022-05-27 12:48:35', 'Rp20000 - Rp50000'),
(18, 'L001', 'Lainnya', 'Sepatu', 'Sepatu Safety', 'post-images/X5t1P7VntR75noUD5CELUubzHucydeJs8LLbFonU.jpg', '2022-05-27 13:47:17', '2022-05-27 13:47:17', 'Rp100000-Rp1000000');

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
(1, 'K001', 'post-images/rjAlsKvYWJ1nUBvqWeCmdoHx22Q18aEL5S9foJTs.jpg', '2022-05-27 13:30:06', '2022-05-27 13:30:06'),
(4, 'K001', 'post-images/mqpIQabw3bzz0nISpWMwgHaCsiXGIjPMOh18ee6A.jpg', '2022-05-27 13:42:37', '2022-05-27 13:42:37'),
(5, 'K001', 'post-images/BsVNgegc7pxO1XL1LgxAqmBIcDPwwOiYu0SBHMxo.jpg', '2022-05-27 13:44:10', '2022-05-27 13:44:10'),
(6, 'K001', 'post-images/pDmO2rKwudpLlTZOV4hQL7pz176vnCOMiAjzcVoB.jpg', '2022-05-27 13:44:41', '2022-05-27 13:44:41'),
(7, 'L001', 'post-images/tDjW0GQ0iKaEz86MuJeZ0wPsLT1dRpX0s6JHQ3hF.jpg', '2022-05-27 13:47:28', '2022-05-27 13:47:28'),
(8, 'L001', 'post-images/k4eixgb1vw5sRojBiMZem44dn2FUSJi9NHQF3GYm.jpg', '2022-05-27 13:47:36', '2022-05-27 13:47:36'),
(9, 'L001', 'post-images/sSQVCGNvodxKXah9ZerzYfoCqhlkwMLPtaLwlvNk.jpg', '2022-05-27 13:47:45', '2022-05-27 13:47:45'),
(10, 'L001', 'post-images/ZCG9k0mpWFlH3Rej3uCDt36JgVGNfgVBNFPN24BH.jpg', '2022-05-27 13:47:58', '2022-05-27 13:47:58'),
(11, 'S001', 'post-images/EMuP4s2IUQsIHuVAdaD8R6tBzBbXOI350HVsc95Y.jpg', '2022-05-27 13:49:51', '2022-05-27 13:49:51'),
(12, 'S001', 'post-images/nLwIEp2rrYTMFN5UbZVPEbT1ou6kutM7ih69Tcw4.jpg', '2022-05-27 13:50:09', '2022-05-27 13:50:09'),
(13, 'S001', 'post-images/dDmJ1BCyLH1DfRzQdtcmZ5eBIa5OaE4xrY4wImC8.jpg', '2022-05-27 13:50:16', '2022-05-27 13:50:16'),
(14, 'S001', 'post-images/3uC8hiotThlsBmZqVYloi1nAY9wj11nMjGS679Ut.jpg', '2022-05-27 13:50:21', '2022-05-27 13:50:21'),
(15, 'A001', 'post-images/5nKSRAnLkhbN2MjhAWjCJAFbX8bKuFUC6VsfUl83.png', '2022-05-27 13:52:40', '2022-05-27 13:52:40'),
(16, 'A001', 'post-images/fJDTS0Jj5gkE8gmldHmE5wNqLHCCxYmSq7BQuMT1.webp', '2022-05-27 13:52:48', '2022-05-27 13:52:48'),
(17, 'A001', 'post-images/9DDivP9wtI5eniR2b5ULsKiO5R9InBJT06xyllLp.jpg', '2022-05-27 13:53:10', '2022-05-27 13:53:10'),
(18, 'A001', 'post-images/1I7w2tXpDfyxYE2C5yHsHBkELjxNATdB0QwhddJ3.jpg', '2022-05-27 13:53:22', '2022-05-27 13:53:22'),
(19, 'Ke001', 'post-images/AOnEA87mSFVUBNWoHjT4dPbMymWWmlWMdGluaD76.jpg', '2022-05-27 13:55:21', '2022-05-27 13:55:21'),
(20, 'Ke001', 'post-images/LvNEU14pOKKE8h0l8qaE7nAkCBEvEQlMWML9RJrB.png', '2022-05-27 13:55:28', '2022-05-27 13:55:28'),
(21, 'Ke001', 'post-images/jlnxFyqJrj7HSW22L2dP0JXB52zfaOAe7qSYu3o7.jpg', '2022-05-27 13:55:39', '2022-05-27 13:55:39'),
(22, 'Ke001', 'post-images/eOWXP27eGfZbVGG9a0FN1AxLrEigLKrVgUtbEyrl.jpg', '2022-05-27 13:55:50', '2022-05-27 13:55:50'),
(23, 'AN001', 'post-images/IWpP2sTWiJbIDwBOqAAjPnihvuFEEuecb0f0INOf.jpg', '2022-05-27 13:57:10', '2022-05-27 13:57:10'),
(24, 'AN001', 'post-images/xWR0JZdqm0i1x8CJgvulFBUBMrOrr23UfUkXyAAa.jpg', '2022-05-27 13:57:18', '2022-05-27 13:57:18'),
(25, 'AN001', 'post-images/wg42DWHRLfw3YWxYzTGbiJQMajyDP6PaQmuqtwB7.jpg', '2022-05-27 13:57:29', '2022-05-27 13:57:29'),
(26, 'AN001', 'post-images/9XR8uFZuFpP3ZKsAhNkrwAjn61Sk73UOfEXiJxbs.jpg', '2022-05-27 13:57:39', '2022-05-27 13:57:39');

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
(7, 'K001', 'small', 10, 100000.00, '2022-04-18 07:26:27', '2022-04-18 07:26:27'),
(8, 'K001', 'standart', 10, 200000.00, '2022-04-18 07:26:38', '2022-04-18 07:26:38'),
(9, 'K001', 'big', 10, 300000.00, '2022-04-18 07:26:52', '2022-04-18 07:26:52'),
(10, 'S001', 'small', 10, 200000.00, '2022-04-18 07:27:04', '2022-04-18 07:27:04'),
(11, 'S001', 'standart', 10, 300000.00, '2022-04-18 07:27:21', '2022-04-18 07:27:21'),
(12, 'S001', 'big', 10, 400000.00, '2022-04-18 07:27:40', '2022-04-18 07:27:40'),
(13, 'A001', 'small', 10, 100000.00, '2022-04-18 07:26:27', '2022-04-18 07:28:54'),
(14, 'A001', 'standart', 10, 200000.00, '2022-04-18 07:26:38', '2022-04-18 07:29:03'),
(15, 'A001', 'big', 10, 300000.00, '2022-04-18 07:26:52', '2022-04-18 07:29:09'),
(16, 'Ke001', 'small', 10, 200000.00, '2022-04-18 07:27:04', '2022-04-18 07:29:41'),
(17, 'Ke001', 'standart', 10, 300000.00, '2022-04-18 07:27:21', '2022-04-18 07:29:50'),
(18, 'Ke001', 'big', 10, 400000.00, '2022-04-18 07:27:40', '2022-04-18 07:29:57'),
(19, 'AN001', 'small', 10, 100000.00, '2022-04-18 07:26:27', '2022-04-18 07:30:33'),
(20, 'AN001', 'standart', 10, 200000.00, '2022-04-18 07:26:38', '2022-04-18 07:30:38'),
(21, 'AN001', 'big', 10, 300000.00, '2022-04-18 07:26:52', '2022-04-18 07:30:42'),
(22, 'L001', 'small', 10, 100000.00, '2022-04-18 07:26:27', '2022-04-18 07:30:33'),
(23, 'L001', 'standart', 10, 200000.00, '2022-04-18 07:26:38', '2022-04-18 07:30:38'),
(24, 'L001', 'big', 10, 300000.00, '2022-04-18 07:26:52', '2022-04-18 07:30:42');

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
(9, 'Oktafian Dwi Cahyono', 'E41191369', 'oktafian510@gmail.com', NULL, '$2y$10$5XAJkKwsXY3l0e9tUFkNvO.PYWpKLgdnL1VhWqqTn0TxRV.pCs9u6', '-', '-', '-', '-', '-', '-', 'team-1.jpg', '-', NULL, '2022-05-17 19:23:06', '2022-05-17 19:23:06');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
