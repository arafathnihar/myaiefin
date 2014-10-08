-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2014 at 02:47 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


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
`id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `value` varchar(150) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `uf_configuration`
--

INSERT INTO `uf_configuration` (`id`, `name`, `value`) VALUES
(1, 'website_name', 'UserFrosting'),
(2, 'website_url', 'localhost/aiefin/'),
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
`id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `is_default` tinyint(1) NOT NULL,
  `can_delete` tinyint(1) NOT NULL,
  `home_page_id` int(11) NOT NULL
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
`id` int(10) unsigned NOT NULL,
  `group_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `permits` varchar(400) NOT NULL
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
`id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL
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
`id` int(11) NOT NULL,
  `menu` varchar(75) NOT NULL,
  `page` varchar(175) NOT NULL,
  `name` varchar(150) NOT NULL,
  `position` int(11) NOT NULL,
  `class_name` varchar(150) NOT NULL,
  `icon` varchar(150) NOT NULL,
  `parent_id` int(11) NOT NULL
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
`id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
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
`id` int(11) NOT NULL,
  `page` varchar(150) NOT NULL,
  `private` tinyint(1) NOT NULL DEFAULT '0'
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
`id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `value` varchar(150) NOT NULL,
  `binary` int(1) NOT NULL,
  `variable` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `uf_users`
--

CREATE TABLE IF NOT EXISTS `uf_users` (
`id` int(11) NOT NULL,
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
  `primary_group_id` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'Specifies the primary group for the user.'
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `uf_users`
--

INSERT INTO `uf_users` (`id`, `user_name`, `display_name`, `password`, `email`, `activation_token`, `last_activation_request`, `lost_password_request`, `lost_password_timestamp`, `active`, `title`, `sign_up_stamp`, `last_sign_in_stamp`, `enabled`, `primary_group_id`) VALUES
(1, 'darshana', 'MCVP', '$2y$10$NC9fqAz0oSJY7yhufeQza.XlvRKTFVlMJqkrr9sLDSVhU55R8EKry', 'arafathnihar@gmail.com', '85f4fe7e204cf6c6e7495b3b1431b726', 1412768345, 0, 1412768345, 1, 'Master Account', 1412768345, 1412772435, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `uf_user_action_permits`
--

CREATE TABLE IF NOT EXISTS `uf_user_action_permits` (
`id` int(10) unsigned NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `permits` varchar(400) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `uf_user_group_matches`
--

CREATE TABLE IF NOT EXISTS `uf_user_group_matches` (
`id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `uf_user_group_matches`
--

INSERT INTO `uf_user_group_matches` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `uf_configuration`
--
ALTER TABLE `uf_configuration`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uf_groups`
--
ALTER TABLE `uf_groups`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uf_group_action_permits`
--
ALTER TABLE `uf_group_action_permits`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uf_group_page_matches`
--
ALTER TABLE `uf_group_page_matches`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uf_nav`
--
ALTER TABLE `uf_nav`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uf_nav_group_matches`
--
ALTER TABLE `uf_nav_group_matches`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uf_pages`
--
ALTER TABLE `uf_pages`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uf_plugin_configuration`
--
ALTER TABLE `uf_plugin_configuration`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uf_users`
--
ALTER TABLE `uf_users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uf_user_action_permits`
--
ALTER TABLE `uf_user_action_permits`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uf_user_group_matches`
--
ALTER TABLE `uf_user_group_matches`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `uf_configuration`
--
ALTER TABLE `uf_configuration`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `uf_groups`
--
ALTER TABLE `uf_groups`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `uf_group_action_permits`
--
ALTER TABLE `uf_group_action_permits`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `uf_group_page_matches`
--
ALTER TABLE `uf_group_page_matches`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `uf_nav`
--
ALTER TABLE `uf_nav`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `uf_nav_group_matches`
--
ALTER TABLE `uf_nav_group_matches`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `uf_pages`
--
ALTER TABLE `uf_pages`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `uf_plugin_configuration`
--
ALTER TABLE `uf_plugin_configuration`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uf_users`
--
ALTER TABLE `uf_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `uf_user_action_permits`
--
ALTER TABLE `uf_user_action_permits`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `uf_user_group_matches`
--
ALTER TABLE `uf_user_group_matches`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
