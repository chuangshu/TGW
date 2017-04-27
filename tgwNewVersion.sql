-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-26 13:47:06
-- 服务器版本： 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tgw`
--

-- --------------------------------------------------------

--
-- 表的结构 `admin`
--

CREATE TABLE `admin` (
  `id` mediumint(6) UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT '',
  `password` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `lastloginip` varchar(15) COLLATE utf8_bin DEFAULT '0',
  `realname` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `lastlogintime` int(10) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- 表的结构 `comment`
--

CREATE TABLE `comment` (
  `id` mediumint(6) UNSIGNED NOT NULL,
  `news_id` mediumint(6) UNSIGNED NOT NULL,
  `content` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `add_time` int(10) DEFAULT '0',
  `ip` varchar(15) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT '0',
  `status` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `menu`
--

CREATE TABLE `menu` (
  `menu_id` smallint(6) UNSIGNED NOT NULL,
  `name` varchar(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `parentid` smallint(6) NOT NULL DEFAULT '0',
  `m` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `c` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `f` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `listorder` smallint(6) NOT NULL DEFAULT '0',
  `status` tinyint(1) DEFAULT '1',
  `type` tinyint(1) UNSIGNED DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `news_id` mediumint(8) UNSIGNED NOT NULL,
  `catid` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(80) NOT NULL,
  `small_title` varchar(30) NOT NULL DEFAULT '',
  `thumb` varchar(100) NOT NULL DEFAULT '',
  `keywords` char(40) NOT NULL DEFAULT '',
  `description` varchar(250) NOT NULL,
  `listorder` tinyint(3) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `copyfrom` varchar(250) NOT NULL,
  `author` char(20) NOT NULL,
  `create_time` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `comment_num` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `news_content`
--

CREATE TABLE `news_content` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `news_id` mediumint(8) UNSIGNED NOT NULL,
  `content` mediumtext NOT NULL,
  `create_time` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `position`
--

CREATE TABLE `position` (
  `id` smallint(8) UNSIGNED NOT NULL,
  `name` char(30) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `description` varchar(100) NOT NULL,
  `create_time` int(10) NOT NULL DEFAULT '0',
  `update_time` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 表的结构 `position_content`
--

CREATE TABLE `position_content` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `position_id` int(5) UNSIGNED NOT NULL,
  `title` varchar(30) NOT NULL DEFAULT '',
  `thumb` varchar(100) NOT NULL DEFAULT '',
  `url` varchar(100) DEFAULT NULL,
  `news_id` mediumint(8) UNSIGNED NOT NULL,
  `listorder` tinyint(3) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(10) NOT NULL DEFAULT '0',
  `update_time` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`menu_id`),
  ADD KEY `name` (`name`),
  ADD KEY `parentid` (`parentid`),
  ADD KEY `m` (`m`),
  ADD KEY `c` (`c`),
  ADD KEY `f` (`f`),
  ADD KEY `listorder` (`listorder`),
  ADD KEY `name_2` (`name`),
  ADD KEY `name_3` (`name`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `catid` (`catid`),
  ADD KEY `listorder` (`listorder`);

--
-- Indexes for table `news_content`
--
ALTER TABLE `news_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`);

--
-- Indexes for table `position_content`
--
ALTER TABLE `position_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `position_id` (`position_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `admin`
--
ALTER TABLE `admin`
  MODIFY `id` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `id` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- 使用表AUTO_INCREMENT `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
