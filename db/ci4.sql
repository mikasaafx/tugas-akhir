-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Bulan Mei 2025 pada 19.32
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci4`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'admin website'),
(2, 'user', 'Reguler user');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `auth_groups_permissions`
--

INSERT INTO `auth_groups_permissions` (`group_id`, `permission_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 4),
(1, 9),
(2, 2),
(2, 6),
(2, 7),
(2, 10),
(2, 11),
(2, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'petanixbq@gmail.com', 1, '2024-11-07 17:45:44', 1),
(2, '::1', 'mikasaafx', NULL, '2024-11-08 01:26:49', 0),
(3, '::1', 'hayamku@gmail.co.id', 4, '2024-11-08 01:27:40', 1),
(4, '::1', 'hayamku@gmail.co.id', 4, '2024-11-08 02:56:13', 1),
(5, '::1', 'hayamkoneng', NULL, '2024-11-08 03:07:38', 0),
(6, '::1', 'hayamku@gmail.co.id', 4, '2024-11-08 03:07:52', 1),
(7, '::1', 'hayamku@gmail.co.id', 4, '2024-11-08 03:13:02', 1),
(8, '::1', 'hayamku@gmail.co.id', 4, '2024-11-08 03:14:20', 1),
(9, '::1', 'hayamku@gmail.co.id', 4, '2024-11-08 03:17:06', 1),
(10, '::1', 'hayamku@gmail.co.id', 4, '2024-11-08 03:17:55', 1),
(11, '::1', 'hayamku@gmail.co.id', 4, '2024-11-08 03:24:44', 1),
(12, '::1', 'ewrerheereggwe@dfd.id', 5, '2024-11-08 03:27:46', 1),
(13, '::1', 'hayamku@gmail.co.id', 4, '2024-11-08 03:29:08', 1),
(14, '::1', 'hayamku@gmail.co.id', 4, '2024-11-08 03:29:55', 1),
(15, '::1', 'silmi@mikasaa.com', 6, '2024-11-08 03:42:12', 1),
(16, '::1', 'hayam123', NULL, '2024-11-08 03:49:25', 0),
(17, '::1', 'hayhuntu@gm.id', 7, '2024-11-08 03:49:36', 1),
(18, '::1', 'hayhuntu@gm.id', 7, '2024-11-08 03:53:04', 1),
(19, '::1', 'hayhuntu@gm.id', 7, '2024-11-08 03:53:45', 1),
(20, '::1', 'hayhuntu@gm.id', 7, '2024-11-08 03:54:19', 1),
(21, '::1', 'hayhuntu@gm.id', 7, '2024-11-08 03:55:02', 1),
(22, '::1', 'hayhuntu@gm.id', 7, '2024-11-08 03:55:42', 1),
(23, '::1', 'hayhuntu@gm.id', 7, '2024-11-08 03:56:33', 1),
(24, '::1', 'hayhuntu@gm.id', 7, '2024-11-08 03:57:17', 1),
(25, '::1', 'hayhuntu@gm.id', 7, '2024-11-08 04:16:02', 1),
(26, '::1', 'hayhuntu@gm.id', 7, '2024-11-08 05:26:02', 1),
(27, '::1', 'usersatu@user.com', 10, '2024-11-08 05:27:17', 1),
(28, '::1', 'hayhuntu@gm.id', 7, '2024-11-08 05:41:35', 1),
(29, '::1', 'userdua@user.com', 11, '2024-11-08 05:42:39', 1),
(30, '::1', 'hayhuntu@gm.id', 7, '2024-11-08 06:29:22', 1),
(31, '::1', 'hayhuntu@gm.id', 7, '2024-11-08 06:42:03', 1),
(32, '::1', 'ererere', NULL, '2024-11-08 06:45:50', 0),
(33, '::1', 'hayhuntu@gm.id', 7, '2024-11-08 06:46:01', 1),
(34, '::1', 'hayhuntu@gm.id', 7, '2024-11-11 07:33:42', 1),
(35, '::1', 'admin@admin.com', 9, '2024-11-11 08:05:03', 1),
(36, '::1', 'mikasaafx', NULL, '2024-11-11 08:05:46', 0),
(37, '::1', 'hayhuntu@gm.id', 7, '2024-11-11 08:05:54', 1),
(38, '::1', 'admin@admin.com', 9, '2024-11-11 08:12:53', 1),
(39, '::1', 'hayhuntu@gm.id', 7, '2024-11-11 08:23:26', 1),
(40, '::1', 'admin@admin.com', 9, '2024-11-11 08:26:06', 1),
(41, '::1', 'hayhuntu@gm.id', 7, '2024-11-11 08:30:59', 1),
(42, '::1', 'admin@admin.com', 9, '2024-11-11 08:31:52', 1),
(43, '::1', 'hayhuntu@gm.id', 7, '2024-11-11 08:40:15', 1),
(44, '::1', 'mikasaafx', NULL, '2024-11-11 08:41:14', 0),
(45, '::1', 'azmi@gmai.co', 12, '2024-11-11 08:41:47', 1),
(46, '::1', 'admin@admin.com', 9, '2024-11-11 08:44:33', 1),
(47, '::1', 'hayhuntu@gm.id', 7, '2024-11-11 08:48:30', 1),
(48, '::1', 'hayhuntu@gm.id', 7, '2024-11-11 08:48:57', 1),
(49, '::1', 'hayam123', NULL, '2024-11-11 08:50:05', 0),
(50, '::1', 'hayhuntu@gm.id', 7, '2024-11-11 08:50:12', 1),
(51, '::1', 'hayhuntu@gm.id', 7, '2024-11-11 09:00:48', 1),
(52, '::1', 'hayhuntu@gm.id', 7, '2024-11-11 09:05:21', 1),
(53, '::1', 'admin@admin.com', 9, '2024-11-11 09:05:58', 1),
(54, '::1', 'admin@admin.com', 9, '2024-11-11 15:49:44', 1),
(55, '::1', 'hayhuntu@gm.id', 7, '2024-11-11 16:06:46', 1),
(56, '::1', 'admin@admin.com', 9, '2024-11-11 16:11:06', 1),
(57, '::1', 'hayhuntu@gm.id', 7, '2024-11-11 18:31:49', 1),
(58, '::1', 'admin@admin.com', 9, '2024-11-11 18:35:33', 1),
(59, '::1', 'hayhuntu@gm.id', 7, '2024-11-12 05:08:34', 1),
(60, '::1', 'hayhuntu@gm.id', 7, '2024-11-12 05:10:49', 1),
(61, '::1', 'admin@admin.com', 9, '2024-11-12 05:11:11', 1),
(62, '::1', 'admin@admin.com', 9, '2024-11-12 07:33:17', 1),
(63, '::1', 'hayhuntu@gm.id', 7, '2024-11-13 04:19:40', 1),
(64, '::1', 'admin@admin.com', 9, '2024-11-13 04:38:18', 1),
(65, '::1', 'admin@admin.com', 9, '2024-11-13 07:47:24', 1),
(66, '::1', 'hayhuntu@gm.id', 7, '2024-11-13 08:28:18', 1),
(67, '::1', 'hayhuntu@gm.id', 7, '2024-11-14 06:00:12', 1),
(68, '::1', 'hayhuntu@gm.id', 7, '2024-11-14 06:15:50', 1),
(69, '::1', 'hayhuntu@gm.id', 7, '2024-11-14 06:18:38', 1),
(70, '::1', 'hayhuntu@gm.id', 7, '2024-11-14 06:19:30', 1),
(71, '::1', 'hayhuntu@gm.id', 7, '2024-11-14 06:20:42', 1),
(72, '::1', 'hayhuntu@gm.id', 7, '2024-11-14 06:22:01', 1),
(73, '::1', 'admin@admin.com', 9, '2024-11-14 06:24:34', 1),
(74, '::1', 'admin@admin.com', 9, '2024-11-14 06:25:56', 1),
(75, '::1', 'hayhuntu@gm.id', 7, '2024-11-14 06:26:17', 1),
(76, '::1', 'admin', NULL, '2024-11-14 10:33:07', 0),
(77, '::1', 'admin@admin.com', 9, '2024-11-14 10:33:15', 1),
(78, '::1', 'hayhuntu@gm.id', 7, '2024-11-14 10:42:21', 1),
(79, '::1', 'hayhuntu@gm.id', 7, '2024-11-18 03:32:16', 1),
(80, '::1', 'admin@admin.com', 9, '2024-11-18 04:45:57', 1),
(81, '::1', 'hayam123', NULL, '2024-11-18 05:22:20', 0),
(82, '::1', 'hayhuntu@gm.id', 7, '2024-11-18 05:22:26', 1),
(83, '::1', 'hayhuntu@gm.id', 7, '2024-11-18 08:22:36', 1),
(84, '::1', 'hayhuntu@gm.id', 7, '2024-11-19 07:50:12', 1),
(85, '::1', 'hayhuntu@gm.id', 7, '2024-12-08 15:59:39', 1),
(86, '::1', 'admin@admin.com', 9, '2024-12-09 16:37:19', 1),
(87, '::1', 'hayhuntu@gm.id', 7, '2024-12-10 15:34:38', 1),
(88, '::1', 'admin@admin.com', 9, '2024-12-10 16:00:14', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `auth_permissions`
--

INSERT INTO `auth_permissions` (`id`, `name`, `description`) VALUES
(1, 'manage-users', 'Manage All Users'),
(2, 'manage-profile', 'Manage User Profile');

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id` int(11) NOT NULL,
  `judul` varchar(250) NOT NULL,
  `slug` varchar(250) NOT NULL,
  `sutradara` varchar(250) NOT NULL,
  `ph` varchar(250) NOT NULL,
  `sampul` varchar(250) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id`, `judul`, `slug`, `sutradara`, `ph`, `sampul`, `created_at`, `updated_at`) VALUES
(1, 'Home Sweet Loan', 'home-sweet-loan', 'Sabrina Rochelle Kalangie', 'Visinema Pictures', 'home.jpg', NULL, NULL),
(2, 'Agak Laen', 'agak-laen', 'Muhadkly Acho', 'Imajinari', 'laen.jpg', NULL, NULL),
(3, 'fdfdf', '', 'dfddfdf', 'dfdf', 'dfdfd', '2024-10-24 05:51:21', '2024-10-24 05:51:21'),
(4, 'rerer', '', 'erere', 'erere', 'eer', '2024-10-24 05:51:45', '2024-10-24 05:51:45'),
(18, 'erer', '', 'erererere', 'erererrre', 'erereree', '2024-10-24 06:45:15', '2024-10-24 06:45:15'),
(19, '', '', '', '', '', '2024-10-24 07:52:56', '2024-10-24 07:52:56'),
(20, 'sdsdsd', '', 'sdsdsd', 'dsd', '', '2024-10-24 07:57:26', '2024-10-24 07:57:26'),
(21, 'sds', '', 'sds', '', 'sdsds', '2024-10-24 07:57:47', '2024-10-24 07:57:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cv_user`
--

CREATE TABLE `cv_user` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `domisili` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1730967949, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `fullname` varchar(300) DEFAULT NULL,
  `user_image` varchar(300) NOT NULL DEFAULT 'default.svg',
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `gender` varchar(25) DEFAULT NULL,
  `id_cv` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `fullname`, `user_image`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`, `gender`, `id_cv`) VALUES
(1, 'petanixbq@gmail.com', 'mikasaafx', NULL, 'default.svg', '$2y$10$mM0WtVDhS4CMEb9SYaeaHulS76PNQHFJ5qrp6ck/1Bgty90eztqNK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-11-07 17:44:30', '2024-11-07 17:44:30', NULL, 'Pria', NULL),
(2, 'dfheergfh@gmail.com', 'ahmad', 'ahmad widodo', 'default.svg', '$2y$10$EgZdNqTY/wZDmmFSDxBobOy4BEt6RraW.QzpFuSCTZdfqegu5UJH6', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-11-07 18:05:16', '2024-11-07 18:05:16', NULL, 'Wanita', NULL),
(3, 'abjad@gmail.com', 'abjadefgh', NULL, 'default.svg', '$2y$10$ovLCdFOeRD3HwNthTQbHpOPgQSnJEPgcJzGbN2hX3Jad3mgcMyQ4C', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-11-08 01:14:56', '2024-11-08 01:14:56', NULL, 'Wanita', NULL),
(4, 'hayamku@gmail.co.id', 'hayamkoneng', 'hayamku ada lima', 'default.svg', '$2y$10$x/3nD3HlRZAmeg4Z.FAzsehBY6fp1aGYHb9KqWNjp6FMeoNDCQyry', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-11-08 01:26:26', '2024-11-08 01:26:26', NULL, 'Wanita', NULL),
(5, 'ewrerheereggwe@dfd.id', 'hayambiru', NULL, 'default.svg', '$2y$10$9t9KdpXGZB4PmCtxtE02ce/KdnqXuUEOATCagy22TglU9YQ4LuTlC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-11-08 03:27:27', '2024-11-08 03:27:27', NULL, 'Pria', NULL),
(6, 'silmi@mikasaa.com', 'silmi123', 'Silmi Mikasa Anjay Mabar', 'default.svg', '$2y$10$6ZfIoBg9JaxdmRVUTGSHEeCPpBIZb6Ga5zg1d1y4TWuy.t9DnvNBK', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-11-08 03:41:55', '2024-11-08 03:41:55', NULL, 'Wanita', NULL),
(7, 'hayhuntu@gm.id', 'hayam123', 'Hayamku Ada 10', 'default.svg', '$2y$10$HIBA.Bitxfifhr4Zcn/XvOU35sZMFOoS7GwOihzuFHOJ2zr7HCqt.', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-11-08 03:47:47', '2024-11-08 03:47:47', NULL, NULL, NULL),
(9, 'admin@admin.com', 'admin', NULL, 'default.svg', '$2y$10$Sfs3f4QMVfGTnFGhcrsFAe.LGxx3vC2fQEkmhBj5/HAlebRhK8hsm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-11-08 04:08:29', '2024-11-08 04:08:29', NULL, NULL, NULL),
(10, 'usersatu@user.com', 'usersatu', 'saya user satu', 'default.svg', '$2y$10$ybAP29wkNQS6fTDIIvvIqu9iaYy9TAO2bkg.zFeOdd278ErDU0c3W', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-11-08 05:27:02', '2024-11-08 05:27:02', NULL, NULL, NULL),
(11, 'userdua@user.com', 'userdua', 'saya user dua', 'default.svg', '$2y$10$Wcvm2/WnQDMhmsOB5I0S0Oe8zHfr6pZWVEsC7pstlloLgNYP.pXAS', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-11-08 05:42:25', '2024-11-08 05:42:25', NULL, NULL, NULL),
(12, 'azmi@gmai.co', 'azmi', 'azmi rakabuming raka', 'default.svg', '$2y$10$Fu34glrbvPzdQ3nDzznSzOtvC/.51av6Q6gZdzJX0M96a0fbeVksq', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2024-11-11 08:41:36', '2024-11-11 08:41:36', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indeks untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indeks untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indeks untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cv_user`
--
ALTER TABLE `cv_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `fk_cv` (`id_cv`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT untuk tabel `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `cv_user`
--
ALTER TABLE `cv_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Ketidakleluasaan untuk tabel `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_cv` FOREIGN KEY (`id_cv`) REFERENCES `cv_user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
