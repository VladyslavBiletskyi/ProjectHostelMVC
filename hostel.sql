-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 23, 2016 at 06:34 PM
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
  `room_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_user_id_foreign` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `created_at`, `updated_at`, `user_id`, `text`, `room_id`) VALUES
(1, '2016-12-22 04:25:22', '2016-12-22 04:25:22', 3, 'Новый тестовый комментарий', 2),
(2, '2016-12-22 05:13:06', '2016-12-22 05:13:06', 1, 'а вот и админский коммент))', 2),
(3, '2016-12-22 08:22:40', '2016-12-22 08:22:40', 4, 'cvbfxcbvgnvb', 323),
(4, '2016-12-23 10:38:31', '2016-12-23 10:38:31', 3, 'sreynbwtrbeg', 666);

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
(1, NULL, NULL, 2, 3, 'Прекрасная комната для жизни и смерти! Только самые свежие и хрустящие тараканы специально для вас! Есть даже горячая вода с 3:30 до 4:00 каждый день! У вас есть уникальная возможность засыпать под умиротворяющее пение ветра в оконных щелях и созерцать прекрасный вид на свалку под окном. Каждому жильцу предоставляется персональный санузел класса Ведро-М1, а также безлимитный абонемент на национализацию чужой еды из общественного холодильника. Удобные комфортные кровати с панцирной сеткой всегда готовы подарить вам прекрасный отдых на целую ночь и для многих являются ложем мечты(парни с подкатанными джинсами спят в углу возле санузлов). Отделка стен выполнена в новейшем стиле "газет-престиж" теперь жильцам не понадобится придумывать новые теориии квантовой механики перед сном. Статьи на стенах закончатся нескоро. Комната находится в уютном панельном крупнощелевом здании и подарит жильцам массу положительных эмоций в зимнее время года. Новогодняя атмосфера будет заметна сразу же после выхода из-под одеяла. Возле окна предусмотрено специальное средство для озонирования воздуха, на которое жильцы смогут ставить свои носки. Поселяйтесь в общежитие "Одуванчик"! Общежитие "Одуванчик" - "Не дай Бог, приснится". '),
(2, NULL, NULL, 2, 3, 'Комната на втором этаже. Рядом - туалет, комнаты №1 и 3. Кухня близко, умывальник - напротив.'),
(3, NULL, NULL, 2, 3, 'Описание надо отредактировать'),
(4, NULL, NULL, 3, 3, 'Описание надо отредактировать'),
(9, NULL, NULL, 2, 3, 'Угловая комната на втором этаже. Рядом - умывальник, комната №10. Кухня близко, туалет- напротив. Также поблизости кастелянша, вахтер и камера хранения.'),
(41, '2016-12-22 05:17:56', '2016-12-22 05:17:56', 3, 2, 'тест'),
(323, '2016-12-21 16:10:38', '2016-12-21 16:10:38', 3, 4, 'Новая комната'),
(666, '2016-12-23 09:17:02', '2016-12-23 09:17:02', 1, 1, 'Изолятор! азазазаза');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `created_at`, `updated_at`, `username`, `email`, `faculty`, `password`, `room_id`, `is_admin`, `remember_token`) VALUES
(1, NULL, '2016-12-23 10:36:58', 'Админ Админович', 'hostel.moderator@gmail.com', NULL, '$2y$10$fLj17YnvqlkW2sBZbsECLOi0vIHE45b0E19.fv.GQ97Xd6U8Cl9M2', 0, 1, 'hI8WUnIHVd1e5hQiLo6xWO1Hp9iBKhznw8m1HmfI8JTNDXNsJjyxEAnaSSQr'),
(3, '2016-12-21 09:08:36', '2016-12-23 10:38:05', 'Чурсина Татьяна Сергеевна', 'tetiana.chursina@nure.ua', 'КН', '$2y$10$gB777vyBBC3YicvkUjfcN.BPmV2PfjQD8ElWBD.hgBDAf.ndi6ioK', 3, 0, 'Q7Z7IhYSXujTTONxPzE92PVUR6nvuw6yJGWklxPaTc8d6rxsI3LXilWlKQ5H'),
(4, '2016-12-21 09:14:03', '2016-12-22 08:31:00', 'Билецкий Владислав', 'vladyslav.biletskyi@nure.ua', 'КН', '$2y$10$Au4MFv2N7ZRrFX9paKtNseuYNxEtrQWqSd1HDTv.KE77t59JNDm/e', 2, 1, 'gqQ8HS6sZXL2rpdCVAtu5D8JmaHse5a17OjYtVjbK6F8W25GK90fZcPtHIb9'),
(5, '2016-12-22 09:20:05', '2016-12-22 09:44:33', 'Кравец Михаил Владиславович', 'mykhailo.kravets@nure.ua', 'КН', '$2y$10$ZOHTM0FspxSjm7JtkV68uuVTstNWZpU6LWngpSMQAxtzzsm6YuRBK', 323, 0, 'eytk9ovbDHkFdNX6Dbw9Z6LCEidCy5sq71jDIS9jxd8xot9KTrYdjV1NMfI8'),
(6, '2016-12-23 09:19:22', '2016-12-23 09:27:51', 'Строна Олег Александрович', 'alexstrona1@gmail.com', 'КН', '$2y$10$fEU5/vB.8vcuiYjhAIZyK.Zw9OWJfsNRFkFqPGZn1GpvDnjZNDOAi', 666, 0, '7hJkLWakwHkDH53nHQXOZW02RbTJye0qG3YxSAZGFz0GuExj4uZWRXuGoZ7Q');

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
