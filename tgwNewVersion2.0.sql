-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-04-27 16:46:20
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
  `admin_id` mediumint(6) UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT '',
  `password` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `lastloginip` varchar(15) COLLATE utf8_bin DEFAULT '0',
  `realname` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `lastlogintime` int(10) DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`, `lastloginip`, `realname`, `lastlogintime`, `status`) VALUES
(3, 'rehellinen', '1efa78d7e525c026e2344c89f7d2bd57', '0', 'rehellinen', 1493309150, 1),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', '0', 'rehellinen', 1493309249, 1);

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
  `status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `comment`
--

INSERT INTO `comment` (`id`, `news_id`, `content`, `add_time`, `ip`, `status`) VALUES
(1, 1, '233333333', 0, '0', 0),
(2, 1, 'haobang', 0, '0', 0),
(3, 2, '2333333333', 0, '0', 0),
(4, 2, 'wsgsxhdjnfnfxsavdcnbgn', 0, '0', 0);

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

--
-- 转存表中的数据 `menu`
--

INSERT INTO `menu` (`menu_id`, `name`, `parentid`, `m`, `c`, `f`, `listorder`, `status`, `type`) VALUES
(1, '菜单管理', 0, 'admin', 'menu', 'index', 7, 1, 1),
(2, '文章管理', 0, 'admin', 'content', 'index', 5, 1, 1),
(3, '推荐位管理', 0, 'admin', 'position', 'index', 4, 1, 1),
(4, '基本管理', 0, 'admin', 'basic', 'index', 8, 1, 1),
(5, '用户管理', 0, 'admin', 'admin', 'index', 6, 1, 1),
(6, '推荐位内容管理', 0, 'admin', 'PositionContent', 'index', 3, 1, 1),
(7, '公告信息', 0, 'Tgw', 'Announcement', 'index', 0, 1, 0),
(8, '新闻中心', 0, 'Tgw', 'News', 'index', 0, 1, 0),
(9, '组织建设', 0, 'Tgw', 'Organization', 'index', 0, 1, 0),
(10, '学术科技', 0, 'Tgw', 'Academic', 'index', 0, 1, 0),
(11, '品牌活动', 0, 'Tgw', 'Activity', 'index', 0, 1, 0),
(12, '人物专访', 0, 'Tgw', 'Interview', 'index', 0, 1, 0),
(13, '图片专区', 0, 'Tgw', 'Photo', 'index', 0, 1, 0),
(14, '招新专题', 0, 'Tgw', 'Recruit', 'index', 0, 1, 0),
(15, '院系连线', 0, 'Tgw', 'Faculty', 'index', 0, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `news`
--

CREATE TABLE `news` (
  `news_id` mediumint(8) UNSIGNED NOT NULL,
  `catid` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(80) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `small_title` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `thumb` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `keywords` char(40) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `description` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `listorder` tinyint(3) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `copyfrom` varchar(250) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `author` char(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `create_time` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `count` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `comment_num` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `news`
--

INSERT INTO `news` (`news_id`, `catid`, `title`, `small_title`, `thumb`, `keywords`, `description`, `listorder`, `status`, `copyfrom`, `author`, `create_time`, `update_time`, `count`, `comment_num`) VALUES
(1, 12, '测试0', '测试0', 'upload/2017/04/28/59021d402f9da.jpg', '测试测试', '测试测试', 0, 0, '0', '', 1493310624, 0, 0, 0),
(2, 15, '测试1', '测试1', 'upload/2017/04/28/59021d292c587.jpg', '测试测试', '测试测试', 0, 0, '0', '', 1493310691, 0, 0, 0),
(3, 9, '测试2', '测试2', 'upload/2017/04/28/59021d1980627.jpg', '测试2测试2', '测试2测试2', 0, 0, '0', '', 1493310710, 0, 0, 0),
(4, 15, '测试3', '测试3', 'upload/2017/04/28/59021d745b697.jpg', '测试3测试3', '测试3测试3', 0, 0, '0', '', 1493310842, 0, 0, 0),
(5, 7, '测试4', '测试4', '', '测试4测试4测试4', '测试4测试4测试4', 0, 0, '0', '', 1493311279, 0, 0, 0),
(6, 13, '测试5', '测试5', '', '测试5测试5', '测试5测试5', 0, 0, '0', '', 1493311303, 0, 0, 0),
(7, 15, '测试6', '测试6', '', '测试6测试6', '测试6测试6', 0, 0, '0', '', 1493311321, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `news_content`
--

CREATE TABLE `news_content` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `news_id` mediumint(8) UNSIGNED NOT NULL,
  `content` mediumtext CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `create_time` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `update_time` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `news_content`
--

INSERT INTO `news_content` (`id`, `news_id`, `content`, `create_time`, `update_time`) VALUES
(1, 2, '测试&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;测试&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;&lt;span&gt;测试&lt;/span&gt;测试&lt;span&gt;测试&lt;/span&gt;测试', 1493310691, 0),
(2, 3, '测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2测试2', 1493310710, 0),
(3, 4, '测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3测试3', 1493310842, 0),
(4, 5, '测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4测试4', 1493311279, 0),
(5, 6, '测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5测试5', 1493311303, 0),
(6, 7, '测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6测试6', 1493311321, 0);

-- --------------------------------------------------------

--
-- 表的结构 `position`
--

CREATE TABLE `position` (
  `id` smallint(8) UNSIGNED NOT NULL,
  `name` char(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `description` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `create_time` int(10) NOT NULL DEFAULT '0',
  `update_time` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `position`
--

INSERT INTO `position` (`id`, `name`, `status`, `description`, `create_time`, `update_time`) VALUES
(1, '推荐位1', 1, '2333', 1493310905, 1493310905),
(2, '推荐位2', 1, '', 1493311137, 0),
(3, '推荐位3', 1, '', 1493311144, 0),
(4, '推荐位4', 1, '', 1493311188, 0),
(5, '推荐位5', 1, '', 1493311194, 0),
(6, '推荐位6', 1, '', 1493311200, 0),
(7, '推荐位7', 1, '', 1493311205, 0),
(8, '推荐位8', 1, '', 1493311215, 0);

-- --------------------------------------------------------

--
-- 表的结构 `position_content`
--

CREATE TABLE `position_content` (
  `id` smallint(5) UNSIGNED NOT NULL,
  `position_id` int(5) UNSIGNED NOT NULL,
  `title` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `thumb` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `url` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `news_id` mediumint(8) UNSIGNED NOT NULL,
  `listorder` tinyint(3) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `create_time` int(10) NOT NULL DEFAULT '0',
  `update_time` int(10) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `position_content`
--

INSERT INTO `position_content` (`id`, `position_id`, `title`, `thumb`, `url`, `news_id`, `listorder`, `status`, `create_time`, `update_time`) VALUES
(1, 1, '1', '1', '1', 1, 0, 0, 0, 0),
(2, 1, '测试6', '', NULL, 7, 0, 1, 1493311484, 0),
(3, 2, '测试4', '', NULL, 5, 0, 1, 1493311490, 0),
(4, 2, '测试5', '', NULL, 6, 0, 1, 1493311490, 0),
(5, 3, '测试3', 'upload/2017/04/28/59021d745b697.jpg', NULL, 4, 0, 1, 1493311495, 0),
(6, 3, '测试4', '', NULL, 5, 0, 1, 1493311495, 0),
(7, 4, '测试2', 'upload/2017/04/28/59021d1980627.jpg', NULL, 3, 0, 1, 1493311501, 0),
(8, 4, '测试3', 'upload/2017/04/28/59021d745b697.jpg', NULL, 4, 0, 1, 1493311501, 0),
(9, 5, '测试2', 'upload/2017/04/28/59021d1980627.jpg', NULL, 3, 0, 1, 1493311534, 0),
(10, 5, '测试3', 'upload/2017/04/28/59021d745b697.jpg', NULL, 4, 0, 1, 1493311534, 0),
(11, 6, '测试3', 'upload/2017/04/28/59021d745b697.jpg', NULL, 4, 0, 1, 1493311539, 0),
(12, 6, '测试5', '', NULL, 6, 0, 1, 1493311539, 0),
(13, 7, '测试4', '', NULL, 5, 0, 1, 1493311544, 0),
(14, 7, '测试5', '', NULL, 6, 0, 1, 1493311544, 0),
(15, 8, '测试3', 'upload/2017/04/28/59021d745b697.jpg', NULL, 4, 0, 1, 1493311551, 0),
(16, 8, '测试6', '', NULL, 7, 0, 1, 1493311551, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
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
  ADD KEY `name_3` (`name`),
  ADD KEY `name_4` (`name`);

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
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `admin_id` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- 使用表AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `id` mediumint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- 使用表AUTO_INCREMENT `menu`
--
ALTER TABLE `menu`
  MODIFY `menu_id` smallint(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- 使用表AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `news_id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- 使用表AUTO_INCREMENT `news_content`
--
ALTER TABLE `news_content`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- 使用表AUTO_INCREMENT `position`
--
ALTER TABLE `position`
  MODIFY `id` smallint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- 使用表AUTO_INCREMENT `position_content`
--
ALTER TABLE `position_content`
  MODIFY `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
