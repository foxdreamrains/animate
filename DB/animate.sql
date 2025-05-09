-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2025 at 04:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `animate`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `slug_kategori` varchar(50) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL,
  `ket_kategori` varchar(250) NOT NULL,
  `card_kategori` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `slug_kategori`, `nama_kategori`, `ket_kategori`, `card_kategori`) VALUES
(1, 'deus-italia', 'deus italia', 'Baju Deus italia sedang ada diskon nih..', 'card3'),
(2, 'deus-jumple', 'deus jumple', 'Ayo lengkapi gayamu dengan baju deus jumple', NULL),
(3, 'deus-motorcycle', 'deus motorcycle', 'Design baru dari deus', NULL),
(4, 'the-house', 'the house', 'Baju The House design simple ', NULL),
(5, 'baju-willia-dickies', 'willia dickies', 'Design terinspirasi oleh style Jems', 'card6'),
(6, 'must-be-nice', 'must be nice', 'Design anak muda tertren Hitz', 'card2'),
(7, 'rip-n-dip-cat', 'rip n dip', 'Design Rockstar penggemar Hitz', 'card3'),
(8, 'miki-nike', 'miki nike', 'Pertama Baju Nike', 'card4'),
(9, 'pembersih-kaca', 'pembersih kaca', 'tester', 'card1'),
(10, 'tester', 'Tester', 'Beli ini Free', 'card5');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('al_fasa@yahoo.com', '$2y$10$Ae9PX/M8e61QPW7tzZk/0O2kjMCCV62gteq6zxzinGV0MfVZqLe5.', '2020-07-15 03:08:13'),
('imajinanda@gmail.com', '$2y$10$BAPQNxjnF2/.1QrirO4crO2cICRrOdofYZciMQSp2zcE0PcLQ3PWO', '2020-07-15 03:15:07');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `harga` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL,
  `img` text NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `judul`, `slug`, `harga`, `deskripsi`, `img`, `created_at`, `updated_at`) VALUES
(1, 'Baju Deus Italia', 'baju-deus-italia', '120000', 'Baju Deus Original asli produk indonesia', 'Deus_italiaBlack.jpg', '2020-08-18 07:27:54', '2020-08-18 00:27:54'),
(2, 'Baju Deus Jumple', 'baju-deus-jumple', '220000', 'Baju dengan design terbaru berwarna putih memperbarui style dan gaya anda', 'Deus_jempleWhite.jpg', '2020-07-13 02:00:00', '2020-07-13 02:13:00'),
(3, 'Baju Deus Jemple', 'baju-deus-jumple-black', '190000', 'ada yang baru dari baju jumple, kini tersedia 2 waran black and white', 'Deus_jempleBlack.jpg', '2020-07-13 01:08:15', '2020-07-13 01:29:00'),
(4, 'Baju Deus Motorcycle', 'Baju-deus-motorcycle-black', '315000', 'Design baju terpopuler cocok untuk anda yang senang sanmoririant 2 warna black and white', 'Deus_motorcycleBlack.jpg', '2020-07-12 22:08:00', '2020-07-12 22:30:00'),
(5, 'Baju Deus Motorcycle', 'baju-deus-motorcycle-white', '325000', 'Design baju terpopuler cocok untuk anda yang senang sanmoririant 2 warna black and white', 'Deus_motorcycleWhite.jpg', '2020-07-13 00:08:00', '2020-07-13 00:13:00'),
(6, 'Baju The House', 'baju-the-house-black', '245000', 'Baju terbaru dari deus distro production', 'Deus_thehouseBlack.jpg', '2020-07-13 17:00:00', '2020-07-13 17:10:00'),
(7, 'Baju Deus The House', 'baju-deus-the-house-gold', '250000', 'Baju deus edisi gold pemesanan terbatas lmited edition', 'Deus_thehouseBlackGold.jpg', '2020-07-12 19:00:00', '2020-07-12 20:00:00'),
(8, 'Baju Willia Dickies', 'baju-willia-dickies', '240000', 'Design dickies adalah design terbaru dan rilis, upgrade fashionmu', 'DickiesBlack.jpeg', '2020-07-14 04:00:00', '2020-07-14 04:12:00'),
(9, 'Baju Must Be Nice', 'baju-must-be-nice', '277000', 'Baju terpopuler bulan ini dengan penjualan baju 50 pre order', 'MustBeNiceBlack.jpg', '2020-07-14 05:07:00', '2020-07-14 05:21:00'),
(10, 'Baju Rip N dip Cat', 'baju-rip-n-dip-cat', '145000', 'kami mengadakan diskon spesial aniversery toko kita', 'RipndipBlack.jpg', '2020-07-14 06:13:00', '2020-07-14 06:35:00'),
(11, 'Baju Miki Nike', 'baju-miki-nike', '163000', 'Baju olahraga dari Nike yang sangat populer', '1597825605_MustBeNiceBlack.jpg', '2020-08-19 01:26:45', '2020-08-19 01:26:45'),
(12, 'Baju Test Alfasa', 'baju-test-alfasa', '200000', 'ester', '1598610204_Deus_motorcycleBlack.jpg', '2020-08-28 03:23:25', '2020-08-28 03:23:25'),
(13, 'Test Terakhir', 'test-terakhir', '20000', 'test terakhir', '1598610006_Deus_thehouseBlackGold.jpg', '2020-08-28 03:20:06', '2020-08-28 03:20:06'),
(14, 'test slug', 'test-slug', '200000', 'test slug', '1598610773_RipndipBlack.jpg', '2020-08-28 03:32:53', '2020-08-28 03:32:53'),
(15, 'Test id', 'test-id', '99999', 'alfasa id', '1598614395_DickiesBlack.jpeg', '2020-08-28 04:33:15', '2020-08-28 04:33:15'),
(17, 'test tambah', 'test-tambah', '9999', 'test', '1598615026_MustBeNiceBlack.jpg', '2020-08-28 04:43:46', '2020-08-28 04:43:46'),
(19, 'Baju new tabs', 'baju-new-tabs', '20000', 'sasasa', '1599212793_Deus_jempleWhite.jpg', '2020-09-04 02:46:33', '2020-09-04 02:46:33');

-- --------------------------------------------------------

--
-- Table structure for table `produk_kategori`
--

CREATE TABLE `produk_kategori` (
  `produk_id` int(11) DEFAULT NULL,
  `kategori_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `produk_kategori`
--

INSERT INTO `produk_kategori` (`produk_id`, `kategori_id`) VALUES
(1, 1),
(2, 2),
(3, 2),
(4, 3),
(5, 3),
(6, 4),
(7, 4),
(8, 5),
(9, 6),
(10, 7),
(11, 8),
(12, 4),
(15, NULL),
(16, 4),
(16, 4),
(18, 3),
(19, 4),
(20, 2),
(21, 7),
(22, 7),
(23, 3),
(24, 1),
(25, 3),
(26, 6),
(27, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `telepon` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `telepon`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Alif Fahmi Sanjaya', 'al_fasa@yahoo.com', NULL, '881450029', '$2y$10$JtIs75zNB8GCW3S7IEMQLe3m6crz88Z02R6GOKNgBzBGea6rAU6m.', '8r4PK9sYX7BnYHutKBoBPP89RJ4SAsaLrwdvVUgt3lVUjc0joUdMlfGJNVjj', '2020-07-08 21:50:21', '2020-08-31 03:13:25'),
(7, 'khairunisa', 'nisa12@love.friend', NULL, '0219922992', '$2y$10$1JB/7vOVaEHSG5IpUiRiieKEo.Qte1lskOQW0tgqQSPcXJ8QX/ZEK', 'Rzg0oVcdV4UZnaxohCMWpeTnpyjaYcGoDW8khKIUKhlEeqIen27uiyLsI7H8', '2020-08-20 02:29:20', '2020-08-20 02:29:20'),
(8, 'Hilda Ainu Syifa', 'hildakaramel@mylove.al', NULL, '888221177', '$2y$10$uusod90OKDra9QI.AtpyxOIMuSykGqHsZCCo0bYllEL6wTBKsFALu', 'dLFcWD7AMnBkx6lFZEd1EnFYovJWj1fQe99p0QWxjXoRpx1dSL629ueg7boa', '2020-08-25 22:48:23', '2020-08-25 22:48:23'),
(9, 'admin', 'admin@admin.com', NULL, '000221111', '$2y$10$TmcRSZ2RnSQvdaSojastxu..UWmWVMEu3jDKZfKSOff1YiAxCHkCa', 'aMVE9BsRixOzNQEtw8ldpKeiiYEa31AeThY2IfqUkENJE3VtLAnOccBJLQPT', '2020-08-25 22:53:45', '2020-08-25 22:53:45'),
(10, 'Helen Setiawan', 'helen@mail.com', NULL, '2211', '$2y$10$GuGyuBv8NmLBfEWCku8zWuvhv2re0rZbPVUypDwG8Ybn1VYbvnA1S', NULL, '2020-08-25 23:03:11', '2020-08-25 23:03:11'),
(11, 'Imaji Nanda', 'imajinanda@gmail.com', NULL, '8877229999', '$2y$10$2jOzVQBd9EzSJS8DZmQ1nel.aN9wizVw.DoPV0u5HCkgdbPa099hG', '9C9zyPruNnWFeMcvDwq5bw2iqIISkdscb41NOdHE3TpRhHWJs6reNgDwELoS', '2020-08-25 23:06:50', '2020-08-25 23:06:50'),
(12, 'Cika jessika', 'cika@yahoo.com', NULL, '44555333', '$2y$10$7HwQ.EwB/.o3jWbpq3hBZOChxjqGVsJUzWWzAxyDD74PUGTG4wQG.', NULL, '2020-08-25 23:13:46', '2020-08-25 23:13:46'),
(13, 'Dika', 'dika@yahoo.com', NULL, '09999333', '$2y$10$aA4U8sN9JfDxhVTsfcSBSeb53yVes8gI4c0eSbFfF/yvv4sHnCIXW', NULL, '2020-08-25 23:30:34', '2020-08-25 23:30:34'),
(15, 'Alia Kirana', 'alia2@gmail.com', NULL, '0999221', '$2y$10$7iOmO/wpejwBuUZh/0xZuutk7c9W.NfgevHhArgu.1MaKPNEznjZa', NULL, '2020-08-26 00:26:45', '2020-08-26 00:26:45'),
(16, 'test', 'test@test.com', NULL, '009922', '$2y$10$LNGm7bzENiaQIig7Z.m60.0I2bbhmfbDvcLNY2GNaWdz7bPMqpn7K', 'hC8meLlRRAHUZLkjux4QHtYbn3sa8zERP2ndAURX9aip4Uz2P6YTxs90s3nb', '2020-08-31 01:43:40', '2020-08-31 03:14:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
