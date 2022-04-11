-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2022 at 04:16 AM
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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `company` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `created_at` varchar(12) NOT NULL,
  `updated_at` varchar(12) NOT NULL,
  `email` varchar(60) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `hp` varchar(30) NOT NULL,
  `ig` varchar(100) NOT NULL,
  `yt` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `company`, `description`, `created_at`, `updated_at`, `email`, `fb`, `hp`, `ig`, `yt`, `image`) VALUES
(1, 'P4TANI', '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci maiores, dolor nesciunt recusandae incidunt tempore repellat perferendis cupiditate temporibus iure ex optio officiis non quaerat nihil, nobis labore sequi culpa?\r\n    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci maiores, dolor nesciunt recusandae incidunt tempore repellat perferendis cupiditate temporibus iure ex optio officiis non quaerat nihil, nobis labore sequi culpa?\r\n    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci maiores, dolor nesciunt recusandae incidunt tempore repellat perferendis cupiditate temporibus iure ex optio officiis non quaerat nihil, nobis labore sequi culpa?\r\n', '01-01-2000', '01-01-2000', 'p4tani@gmail.com', 'p4tani@FB', 'p4tani@HP', 'p4tani@IG', 'p4tani@YT', 'p4tani.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `created_at` varchar(12) NOT NULL,
  `updated_at` varchar(12) NOT NULL,
  `writer` varchar(60) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `title`, `description`, `created_at`, `updated_at`, `writer`, `category`, `image`) VALUES
(1, 'judul 1', 'lorem ipsum dolor si amet amet', '01-01-2000', '01-01-2000', 'okta', 'id', 'image.jpg'),
(2, 'judul 2', 'lorem ipsum dolor si amet amet', '01-01-2000', '01-01-2000', 'okta', 'id', 'image.jpg'),
(3, 'judul 3', 'lorem ipsum dolor si amet amet', '01-01-2000', '01-01-2000', 'okta', 'id', 'image.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL,
  `created_at` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `question`, `answer`, `created_at`) VALUES
(1, 'bagaimana mendaftar', 'klik sign up', '01-01-2000'),
(2, 'kedua mendaftar', 'klik sign up', '01-01-2000'),
(3, 'ketiga mendaftar', 'klik sign up', '01-01-2000'),
(4, 'keempat', 'klik sign up', '01-01-2000');

-- --------------------------------------------------------

--
-- Table structure for table `landing_page`
--

CREATE TABLE `landing_page` (
  `id` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `landing_page`
--

INSERT INTO `landing_page` (`id`, `title`, `description`, `image`) VALUES
(1, 'IKLAN BARU NIH', '     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci maiores, dolor nesciunt recusandae incidunt tempore repellat perferendis cupiditate temporibus iure ex optio officiis non quaerat nihil, nobis labore sequi culpa?\r\n', 'p4tani.jpg'),
(2, '2 BARU NIH', '     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci maiores, dolor nesciunt recusandae incidunt tempore repellat perferendis cupiditate temporibus iure ex optio officiis non quaerat nihil, nobis labore sequi culpa?\r\n', 'p4tani.jpg'),
(3, '3 BARU NIH', '     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci maiores, dolor nesciunt recusandae incidunt tempore repellat perferendis cupiditate temporibus iure ex optio officiis non quaerat nihil, nobis labore sequi culpa?\r\n', 'p4tani.jpg'),
(4, '4 BARU NIH', '     Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci maiores, dolor nesciunt recusandae incidunt tempore repellat perferendis cupiditate temporibus iure ex optio officiis non quaerat nihil, nobis labore sequi culpa?\r\n', 'p4tani.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `description`, `category`, `image`) VALUES
(1, 'Oktafian Dwi Cahyono', '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci maiores, dolor nesciunt recusandae incidunt tempore repellat perferendis cupiditate temporibus iure ex optio officiis non quaerat nihil, nobis labore sequi culpa?\r\n    Lorem, ipsum dol', 'kaktus', 'okta.jpg'),
(2, 'rex Dwi Cahyono', '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci maiores, dolor nesciunt recusandae incidunt tempore repellat perferendis cupiditate temporibus iure ex optio officiis non quaerat nihil, nobis labore sequi culpa?', 'kaktus', 'okta.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_cart`
--

CREATE TABLE `tb_cart` (
  `id` int(11) NOT NULL,
  `id_users` int(11) NOT NULL,
  `code` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `size` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `price` float NOT NULL DEFAULT 0,
  `created_at` varchar(12) NOT NULL,
  `expired_at` varchar(12) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_cart`
--

INSERT INTO `tb_cart` (`id`, `id_users`, `code`, `name`, `size`, `quantity`, `price`, `created_at`, `expired_at`, `status`) VALUES
(1, 2, 'BL01', 'isi otomatis', 'isi otomatis', 1, 12000, '01-01-2000', '01-01-2000', 'belum dibayar');

-- --------------------------------------------------------

--
-- Table structure for table `tb_categories`
--

CREATE TABLE `tb_categories` (
  `id_categories` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_categories`
--

INSERT INTO `tb_categories` (`id_categories`, `name`, `description`) VALUES
(1, 'kaktus', '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci maiores, dolor nesciunt recusandae incidunt tempore repellat perferendis cupiditate temporibus iure ex optio officiis non quaerat nihil, nobis labore sequi culpa?\r\n'),
(2, 'mawar', '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci maiores, dolor nesciunt recusandae incidunt tempore repellat perferendis cupiditate temporibus iure ex optio officiis non quaerat nihil, nobis labore sequi culpa?\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tb_products`
--

CREATE TABLE `tb_products` (
  `code` varchar(30) NOT NULL,
  `id_categories` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `descriptions` varchar(255) NOT NULL,
  `created_at` varchar(12) NOT NULL,
  `updated_at` varchar(12) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_products`
--

INSERT INTO `tb_products` (`code`, `id_categories`, `name`, `descriptions`, `created_at`, `updated_at`, `image`) VALUES
('BL01', 1, 'kaktus x kaktus', '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci maiores, dolor nesciunt recusandae incidunt tempore repellat perferendis cupiditate temporibus iure ex optio officiis non quaerat nihil, nobis labore sequi culpa?\r\n', '01-01-2000', '01-01-2000', 'kaktus.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stock`
--

CREATE TABLE `tb_stock` (
  `id` int(11) NOT NULL,
  `code` varchar(30) NOT NULL,
  `size` varchar(30) NOT NULL,
  `stok` int(11) NOT NULL,
  `price` float NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_stock`
--

INSERT INTO `tb_stock` (`id`, `code`, `size`, `stok`, `price`) VALUES
(1, 'BL01', 'small', 12, 12000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `access` int(1) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(30) NOT NULL,
  `province` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_users`, `name`, `username`, `password`, `access`, `address`, `city`, `province`, `gender`, `hp`, `email`, `image`, `status`) VALUES
(1, 'Oktafian Dwi Cahyono', 'okta', '123', 1, 'Desa Taman', 'Bondowoso', 'Jawa Timur', '', '', '0', '', ''),
(2, 'user', 'user', 'user', 2, 'TAMAN', 'Bondowoso', 'Jawa Timur', 'LAKI', '083', '@mail', 'user.jpg', 'aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `landing_page`
--
ALTER TABLE `landing_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_categories`
--
ALTER TABLE `tb_categories`
  ADD PRIMARY KEY (`id_categories`);

--
-- Indexes for table `tb_products`
--
ALTER TABLE `tb_products`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `tb_stock`
--
ALTER TABLE `tb_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `landing_page`
--
ALTER TABLE `landing_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_cart`
--
ALTER TABLE `tb_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_categories`
--
ALTER TABLE `tb_categories`
  MODIFY `id_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_stock`
--
ALTER TABLE `tb_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
