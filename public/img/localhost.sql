-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 29, 2014 at 02:27 AM
-- Server version: 5.5.35
-- PHP Version: 5.3.10-1ubuntu3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `my_blog`
--
CREATE DATABASE `my_blog` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `my_blog`;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Harusi', '2014-03-28 14:52:18', '2014-03-28 14:52:18'),
(2, 'Sendoff', '2014-03-28 14:52:27', '2014-03-28 14:52:27'),
(3, 'Party', '2014-03-28 14:52:44', '2014-03-28 14:52:44');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discr` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=19 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `postid`, `name`, `discr`, `created_at`, `updated_at`) VALUES
(11, 3, '_7416053726.png', 'The boot worn by mr albert on his wedding', '2014-03-28 19:01:39', '2014-03-28 19:01:39'),
(12, 3, '_5171160395.png', '', '2014-03-28 19:01:39', '2014-03-28 19:01:39'),
(13, 3, '_3262185221.png', '', '2014-03-28 19:01:39', '2014-03-28 19:01:39'),
(14, 3, '_1795511399.png', '', '2014-03-28 19:01:39', '2014-03-28 19:01:39'),
(15, 4, '_6719390414.png', '', '2014-03-28 19:32:48', '2014-03-28 19:32:48'),
(16, 4, '_4217817499.png', '', '2014-03-28 19:32:48', '2014-03-28 19:32:48'),
(17, 4, '_5385968037.png', '', '2014-03-28 19:32:49', '2014-03-28 19:32:49'),
(18, 4, '_197606631.png', '', '2014-03-28 19:32:49', '2014-03-28 19:32:49');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_01_21_084737_create_users_table', 1),
('2014_01_21_084810_create_posts_table', 1),
('2014_01_21_084853_create_category_table', 1),
('2014_01_22_061841_create_subcategory_table', 1),
('2014_01_22_220915_create_image_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `event_date` date NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `discr` text COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category`, `event_date`, `name`, `discr`, `user_id`, `created_at`, `updated_at`) VALUES
(3, '1', '0000-00-00', 'Harusi Ya Bwana Na Bibi Mwajumbe', 'all kids are invited at shekinah garden on 24/25 this months we will be ahvig abranch for them,you are all welcome.', 1, '2014-03-28 19:01:39', '2014-03-28 19:01:39'),
(4, '2', '2014-03-19', 'Sendoff Ya Miss Yuan', 'Miss yuan aliagwa na ndugu na jamaa siku ya tarehe jana  kwenda kwa mmewe maalumu mr kelvin mbwilo', 1, '2014-03-28 19:32:48', '2014-03-28 19:32:48');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE IF NOT EXISTS `subcategory` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `firstname`, `lastname`, `password`, `created_at`, `updated_at`) VALUES
(1, 'kelvinmbwilo@gmail.com', 'kelvin', 'mbwilo', 'kevdom', '2014-03-28 14:54:00', '2014-03-28 14:54:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
