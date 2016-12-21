-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 21, 2016 at 08:12 PM
-- Server version: 5.5.53-0ubuntu0.14.04.1
-- PHP Version: 5.6.23-1+deprecated+dontuse+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `floors`
--

CREATE TABLE IF NOT EXISTS `floors` (
  `floor_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`floor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `floors`
--

INSERT INTO `floors` (`floor_id`, `created_at`, `updated_at`, `description`) VALUES
(1, NULL, NULL, 'Первый этаж общежития <№ 4>.'),
(2, NULL, NULL, 'Второй этаж общежития <№ 4>.'),
(3, '2016-12-21 14:20:14', '2016-12-21 14:20:14', 'Третий этаж');

-- --------------------------------------------------------

--
-- Table structure for table `floor_ads`
--

CREATE TABLE IF NOT EXISTS `floor_ads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `floor_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `floor_ads_user_id_foreign` (`user_id`),
  KEY `floor_id` (`floor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `global_ads`
--

CREATE TABLE IF NOT EXISTS `global_ads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `global_ads_user_id_foreign` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(14, '2014_10_12_100000_create_password_resets_table', 1),
(15, '2016_12_16_214404_create_users_table', 1),
(16, '2016_12_18_192736_create_floors_table', 1),
(17, '2016_12_18_192747_create_rooms_table', 1),
(18, '2016_12_18_193159_create_comments_table', 1),
(19, '2016_12_18_201756_create_floor_ads_table', 1),
(20, '2016_12_18_201813_create_global_ads_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE IF NOT EXISTS `rooms` (
  `id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `floor_id` int(10) unsigned NOT NULL,
  `places` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `floor_id` (`floor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`id`, `created_at`, `updated_at`, `floor_id`, `places`, `description`) VALUES
(1, NULL, NULL, 2, 3, 'Угловая комната на втором этаже. Рядом - туалет, комната №2. Кухня близко, умывальник - напротив.'),
(2, NULL, NULL, 2, 3, 'Комната на втором этаже. Рядом - туалет, комнаты №1 и 3. Кухня близко, умывальник - напротив.'),
(3, NULL, NULL, 2, 3, 'Описание надо отредактировать'),
(4, NULL, NULL, 3, 3, 'Описание надо отредактировать'),
(9, NULL, NULL, 2, 3, 'Угловая комната на втором этаже. Рядом - умывальник, комната №10. Кухня близко, туалет- напротив. Также поблизости кастелянша, вахтер и камера хранения.'),
(323, '2016-12-21 16:10:38', '2016-12-21 16:10:38', 3, 4, 'Новая комната');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `faculty` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `room_id` int(10) unsigned NOT NULL DEFAULT '0',
  `is_admin` tinyint(1) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `username`, `email`, `faculty`, `password`, `room_id`, `is_admin`, `remember_token`) VALUES
(1, NULL, '2016-12-21 08:41:01', 'Админ Админович', 'hostel.moderator@gmail.com', NULL, '$2y$10$fLj17YnvqlkW2sBZbsECLOi0vIHE45b0E19.fv.GQ97Xd6U8Cl9M2', 0, 1, '20jbyV0nZqXzIG34c5wakRdsd04k5zTfotydhAmHKFiPGBvMyIYUhe1SkMln'),
(3, '2016-12-21 09:08:36', '2016-12-21 09:08:36', 'Чурсина Татьяна Сергеевна', 'tetiana.chursina@nure.ua', 'КН', '$2y$10$gB777vyBBC3YicvkUjfcN.BPmV2PfjQD8ElWBD.hgBDAf.ndi6ioK', 1, 0, NULL),
(4, '2016-12-21 09:14:03', '2016-12-21 11:24:23', 'Билецкий Владислав', 'vladyslav.biletskyi@nure.ua', 'КН', '$2y$10$Au4MFv2N7ZRrFX9paKtNseuYNxEtrQWqSd1HDTv.KE77t59JNDm/e', 0, 1, 'fPBPLRFIW5TXVEz6yfKz1RhKB66OhWsDS568yXtPwpBSAp1JCyKGT0FoIjSm');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `floor_ads`
--
ALTER TABLE `floor_ads`
  ADD CONSTRAINT `floor_ads_ibfk_1` FOREIGN KEY (`floor_id`) REFERENCES `floors` (`floor_id`),
  ADD CONSTRAINT `floor_ads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `global_ads`
--
ALTER TABLE `global_ads`
  ADD CONSTRAINT `global_ads_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`floor_id`) REFERENCES `floors` (`floor_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
