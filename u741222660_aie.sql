-- phpMyAdmin SQL Dump
-- version 3.3.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 11, 2014 at 12:11 PM
-- Server version: 5.1.61
-- PHP Version: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `u741222660_aie`
--

-- --------------------------------------------------------

--
-- Table structure for table `uf_configuration`
--

CREATE TABLE IF NOT EXISTS `uf_configuration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `value` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `uf_configuration`
--

INSERT INTO `uf_configuration` (`id`, `name`, `value`) VALUES
(1, 'website_name', 'AIEFIN'),
(2, 'website_url', 'aiefin.3eeweb.com/aiefin/'),
(3, 'email', 'arafathnihar@gmail.com'),
(4, 'activation', '0'),
(5, 'resend_activation_threshold', '0'),
(6, 'language', 'models/languages/en.php'),
(8, 'can_register', '0'),
(9, 'new_user_title', 'New Member'),
(11, 'email_login', '1'),
(12, 'token_timeout', '10800');

-- --------------------------------------------------------

--
-- Table structure for table `uf_groups`
--

CREATE TABLE IF NOT EXISTS `uf_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `is_default` tinyint(1) NOT NULL,
  `can_delete` tinyint(1) NOT NULL,
  `home_page_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `uf_groups`
--

INSERT INTO `uf_groups` (`id`, `name`, `is_default`, `can_delete`, `home_page_id`) VALUES
(1, 'User', 2, 0, 4),
(2, 'Administrator', 0, 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `uf_group_action_permits`
--

CREATE TABLE IF NOT EXISTS `uf_group_action_permits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `permits` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `uf_group_action_permits`
--

INSERT INTO `uf_group_action_permits` (`id`, `group_id`, `action`, `permits`) VALUES
(1, 1, 'updateUserEmail', 'isLoggedInUser(user_id)'),
(2, 1, 'updateUserPassword', 'isLoggedInUser(user_id)'),
(3, 1, 'loadUser', 'isLoggedInUser(user_id)'),
(4, 1, 'loadUserGroups', 'isLoggedInUser(user_id)'),
(5, 2, 'updateUserEmail', 'always()'),
(6, 2, 'updateUserPassword', 'always()'),
(7, 2, 'updateUser', 'always()'),
(8, 2, 'updateUserDisplayName', 'always()'),
(9, 2, 'updateUserTitle', 'always()'),
(10, 2, 'updateUserEnabled', 'always()'),
(11, 2, 'loadUser', 'always()'),
(12, 2, 'loadUserGroups', 'always()'),
(13, 2, 'loadUsers', 'always()'),
(14, 2, 'deleteUser', 'always()'),
(15, 2, 'activateUser', 'always()'),
(16, 2, 'loadGroups', 'always()');

-- --------------------------------------------------------

--
-- Table structure for table `uf_group_page_matches`
--

CREATE TABLE IF NOT EXISTS `uf_group_page_matches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `uf_group_page_matches`
--

INSERT INTO `uf_group_page_matches` (`id`, `group_id`, `page_id`) VALUES
(1, 1, 1),
(3, 2, 3),
(4, 2, 4),
(5, 2, 5),
(6, 2, 6),
(7, 2, 7),
(8, 2, 8),
(9, 2, 9),
(10, 2, 10),
(11, 2, 11),
(12, 2, 12),
(13, 2, 13),
(14, 2, 14),
(15, 2, 15),
(16, 2, 16),
(19, 1, 3),
(20, 1, 4),
(21, 1, 6),
(22, 1, 13),
(23, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `uf_nav`
--

CREATE TABLE IF NOT EXISTS `uf_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(75) NOT NULL,
  `page` varchar(175) NOT NULL,
  `name` varchar(150) NOT NULL,
  `position` int(11) NOT NULL,
  `class_name` varchar(150) NOT NULL,
  `icon` varchar(150) NOT NULL,
  `parent_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `uf_nav`
--

INSERT INTO `uf_nav` (`id`, `menu`, `page`, `name`, `position`, `class_name`, `icon`, `parent_id`) VALUES
(1, 'left', 'account/dashboard_admin.php', 'Admin Dashboard', 1, 'dashboard-admin', 'fa fa-dashboard', 0),
(2, 'left', 'account/users.php', 'Users', 2, 'users', 'fa fa-users', 0),
(3, 'left', 'account/dashboard.php', 'Dashboard', 3, 'dashboard', 'fa fa-dashboard', 0),
(4, 'left', 'account/account_settings.php', 'Account Settings', 4, 'settings', 'fa fa-gear', 0),
(5, 'left-sub', '#', 'Site Settings', 5, '', 'fa fa-wrench', 0),
(6, 'left-sub', 'account/site_settings.php', 'Site Configuration', 6, 'site-settings', 'fa fa-globe', 5),
(7, 'left-sub', 'account/groups.php', 'Groups', 7, 'groups', 'fa fa-users', 5),
(8, 'left-sub', 'account/site_authorization.php', 'Authorization', 8, 'site-pages', 'fa fa-key', 5),
(9, 'top-main-sub', '#', '#USERNAME#', 1, 'site-settings', 'fa fa-user', 0),
(10, 'top-main-sub', 'account/account_settings.php', 'Account Settings', 1, '', 'fa fa-gear', 9),
(11, 'top-main-sub', 'account/logout.php', 'Log Out', 2, '', 'fa fa-power-off', 9);

-- --------------------------------------------------------

--
-- Table structure for table `uf_nav_group_matches`
--

CREATE TABLE IF NOT EXISTS `uf_nav_group_matches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `uf_nav_group_matches`
--

INSERT INTO `uf_nav_group_matches` (`id`, `menu_id`, `group_id`) VALUES
(1, 3, 1),
(2, 4, 1),
(3, 9, 1),
(4, 10, 1),
(5, 11, 1),
(6, 1, 2),
(7, 2, 2),
(8, 5, 2),
(9, 6, 2),
(10, 7, 2),
(11, 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `uf_pages`
--

CREATE TABLE IF NOT EXISTS `uf_pages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page` varchar(150) NOT NULL,
  `private` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `uf_pages`
--

INSERT INTO `uf_pages` (`id`, `page`, `private`) VALUES
(1, 'forms/table_users.php', 1),
(3, 'account/logout.php', 1),
(4, 'account/dashboard.php', 1),
(5, 'account/dashboard_admin.php', 1),
(6, 'account/account_settings.php', 1),
(7, 'account/site_authorization.php', 1),
(8, 'account/site_settings.php', 1),
(9, 'account/users.php', 1),
(10, 'account/user_details.php', 1),
(11, 'account/index.php', 0),
(12, 'account/groups.php', 1),
(13, 'forms/form_user.php', 1),
(14, 'forms/form_group.php', 1),
(15, 'forms/form_confirm_delete.php', 1),
(16, 'forms/form_action_permits.php', 1);

-- --------------------------------------------------------

--
-- Table structure for table `uf_plugin_configuration`
--

CREATE TABLE IF NOT EXISTS `uf_plugin_configuration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `value` varchar(150) NOT NULL,
  `binary` int(1) NOT NULL,
  `variable` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `uf_plugin_configuration`
--


-- --------------------------------------------------------

--
-- Table structure for table `uf_users`
--

CREATE TABLE IF NOT EXISTS `uf_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(50) NOT NULL,
  `display_name` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(150) NOT NULL,
  `activation_token` varchar(225) NOT NULL,
  `last_activation_request` int(11) NOT NULL,
  `lost_password_request` tinyint(1) NOT NULL,
  `lost_password_timestamp` int(11) DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `title` varchar(150) NOT NULL,
  `sign_up_stamp` int(11) NOT NULL,
  `last_sign_in_stamp` int(11) NOT NULL,
  `enabled` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Specifies if the account is enabled.  Disabled accounts cannot be logged in to, but they retain all of their data and settings.',
  `primary_group_id` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Specifies the primary group for the user.',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `uf_users`
--

INSERT INTO `uf_users` (`id`, `user_name`, `display_name`, `password`, `email`, `activation_token`, `last_activation_request`, `lost_password_request`, `lost_password_timestamp`, `active`, `title`, `sign_up_stamp`, `last_sign_in_stamp`, `enabled`, `primary_group_id`) VALUES
(1, 'darshana', 'MCVP', '$2y$10$0jUu2.rUZp4KsXYkoJKBAOTaPZmWXQY5acUIXYd/7T8GAYdIg.ThK', 'arafathnihar@gmail.com', 'feae8868cc83baa32f5ed608be983a97', 1413043769, 0, 1413043769, 1, 'Master Account', 1413043769, 1413043829, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `uf_user_action_permits`
--

CREATE TABLE IF NOT EXISTS `uf_user_action_permits` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `permits` varchar(400) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `uf_user_action_permits`
--


-- --------------------------------------------------------

--
-- Table structure for table `uf_user_group_matches`
--

CREATE TABLE IF NOT EXISTS `uf_user_group_matches` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `uf_user_group_matches`
--

INSERT INTO `uf_user_group_matches` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

-- arafth's codes
DELETE FROM `u741222660_aie`.`uf_nav_group_matches` WHERE `uf_nav_group_matches`.`id` = 2;
INSERT INTO `u741222660_aie`.`uf_nav_group_matches` (`id`, `menu_id`, `group_id`) VALUES ('12', '9', '2'), ('13', '10', '2'), ('14', '11', '2');