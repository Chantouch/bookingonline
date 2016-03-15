-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2016 at 12:39 AM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookingonline`
--

-- --------------------------------------------------------

--
-- Table structure for table `home_slider`
--

DROP TABLE IF EXISTS `home_slider`;
CREATE TABLE IF NOT EXISTS `home_slider` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `s_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `home_slider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_slider`
--

INSERT INTO `home_slider` (`id`, `s_name`, `title`, `sub_title`, `home_slider`, `img_type`, `created_at`, `updated_at`) VALUES
(1, 'News instance slider', 'the title of slider', 'the subtitle of slider', 'C:\\wamp64\\www\\bookingonline\\public/uploads/homeslider/aa.jpg1SAuqLtALGpKkNKZNdZNo5cukVisniAV.jpg', 'jpg', '2016-03-13 01:30:26', '2016-03-13 01:30:26');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2016_03_11_124806_create_users_table', 1),
('2016_03_12_172951_create_home_slider_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reminders`
--

DROP TABLE IF EXISTS `password_reminders`;
CREATE TABLE IF NOT EXISTS `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_reminders_email_index` (`email`),
  KEY `password_reminders_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role_id` int(10) NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL,
  `updated_at` timestamp NOT NULL,
  `is_confirmed` tinyint(1) NOT NULL DEFAULT '0',
  `confirmation_token` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  `is_guest` tinyint(1) DEFAULT '0',
  `is_user_admin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_remember_token_index` (`remember_token`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `role_id`, `password`, `first_name`, `last_name`, `phone`, `avatar`, `remember_token`, `created_at`, `updated_at`, `is_confirmed`, `confirmation_token`, `is_admin`, `is_guest`, `is_user_admin`) VALUES
(4, 'Chantouch Sek', 'cs.appsaradev@gmail.com', 0, '$2y$10$W/mFRRwlJUI6r8X1wNv4eOShfwUv3nLwCEuWQXNE0UcxGhJPK1Rv6', 'Chantouch', 'Sek', '070 375 783', 'avatar-1.jpg', 'QvQRHgs2dbGjZoaZ4E476ABN2Q0h45C4hUqOHxAp1Lyp5FLKmiMdXtKLOFbx', '2016-03-14 07:28:18', '2016-03-14 09:46:57', 1, NULL, 1, 0, 0),
(6, 'Chantouch Sek', 'smith.john1@hotel.com', 0, '$2y$10$abPrtqSrq8c9/cjqqVGC/e6Dl2.rrXgnnZoAayBdu./BDYk6GQzai', 'Hong', 'Heak', '0345352020', 'avatar-2.jpg', 'EL0sMLlxImG9nXHeooERx6mfdnXEcIB6I65JTE8H1Epmo2PEkKMsZtp4AQ77', '2016-03-14 07:34:54', '2016-03-14 09:06:53', 0, 'b19a5b83a0c3aecfa6feb766044063b96b1687c3', 1, 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
