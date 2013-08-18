-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2013 at 05:18 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web3s_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `sys_config_template`
--

CREATE TABLE IF NOT EXISTS `sys_config_template` (
  `sys_config_template_id` int(11) NOT NULL AUTO_INCREMENT,
  `domain_key_switch` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `sys_config_template_header` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `sys_config_template_content` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `sys_config_template_footer` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`sys_config_template_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sys_template`
--

CREATE TABLE IF NOT EXISTS `sys_template` (
  `sys_template_id` int(11) NOT NULL AUTO_INCREMENT,
  `sys_template_name` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `sys_template_title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sys_template_explain` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`sys_template_id`,`sys_template_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sys_template_color`
--

CREATE TABLE IF NOT EXISTS `sys_template_color` (
  `sys_template_color_id` int(11) NOT NULL AUTO_INCREMENT,
  `sys_template_color_name` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `sys_template_color_title` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `sys_template_color_value` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `is_delete` tinyint(1) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`sys_template_color_id`,`sys_template_color_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `password` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `is_management` tinyint(1) NOT NULL DEFAULT '0',
  `is_active` tinyint(1) NOT NULL DEFAULT '0',
  `is_ban` tinyint(1) NOT NULL DEFAULT '0',
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `email`, `full_name`, `is_management`, `is_active`, `is_ban`, `is_delete`, `create_date`, `update_date`) VALUES
(1, 'admin', 'e00cf25ad42683b3df678c61f42c6bda', 'oliverson1989_gc@yahoo.com', 'phan thành sơn', 1, 1, 0, 0, '2013-05-23 00:00:00', '2013-05-23 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
