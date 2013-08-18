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
-- Database: `web3s_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE IF NOT EXISTS `domain` (
  `domain_id` int(11) NOT NULL AUTO_INCREMENT,
  `domain_name` char(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `domain_key_switch` char(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `domain_run_app` char(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `domain_expiration_date` datetime NOT NULL,
  `domain_create_date` datetime NOT NULL,
  `packed_id` int(11) NOT NULL,
  `is_delete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`domain_id`,`domain_name`,`domain_key_switch`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `domain`
--

INSERT INTO `domain` (`domain_id`, `domain_name`, `domain_key_switch`, `domain_run_app`, `domain_expiration_date`, `domain_create_date`, `packed_id`, `is_delete`) VALUES
(1, 'test1.yii-web3s.local', '1', 'Shop', '2014-06-29 16:03:00', '2013-06-06 00:00:00', 1, 0),
(2, 'test2.zf-web3s.local', '2', 'Shop', '2013-06-19 00:00:00', '2013-06-06 00:00:00', 1, 0),
(3, 'test3.zf-web3s.local', '3', 'Shop', '2013-06-19 00:00:00', '2013-06-06 00:00:00', 1, 0),
(4, 'oliverson.zf-web3s.local', '4', 'Shop', '2013-06-19 00:00:00', '2013-06-06 00:00:00', 1, 0);

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
  `is_management` tinyint(4) NOT NULL DEFAULT '0',
  `is_active` tinyint(4) NOT NULL DEFAULT '0',
  `is_ban` tinyint(4) NOT NULL DEFAULT '0',
  `code_regain_password` char(32) COLLATE utf8_unicode_ci NOT NULL,
  `is_delete` tinyint(4) NOT NULL DEFAULT '0',
  `create_date` datetime NOT NULL,
  `update_date` datetime NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`, `email`, `full_name`, `is_management`, `is_active`, `is_ban`, `code_regain_password`, `is_delete`, `create_date`, `update_date`) VALUES
(1, 'admin', 'e00cf25ad42683b3df678c61f42c6bda', 'oliverson1989_gc@yahoo.com', 'phan thành sơn', 1, 1, 0, '', 0, '2013-05-23 00:00:00', '2013-05-23 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
