-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2019 年 08 月 19 日 08:52
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `suibianlu5`
--

-- --------------------------------------------------------

--
-- 表的结构 `authorize`
--

CREATE TABLE IF NOT EXISTS `authorize` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `qq` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `domain` (`domain`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=98 ;

--
-- 转存表中的数据 `authorize`
--

INSERT INTO `authorize` (`id`, `username`, `domain`, `ip`, `qq`, `tel`, `time`) VALUES
(89, 'CPA', '0.1', '这里是广告代码', '1', '2016-02-12', '1608393600'),
(95, 'cpc', '0.5', '这里是广告代码', '2', '2016-02-12', '1481472000'),
(96, 'cpm', '0.03', '这里是广告代码', '1', '2016-02-12', '1481472000');

-- --------------------------------------------------------

--
-- 表的结构 `fx`
--

CREATE TABLE IF NOT EXISTS `fx` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `qq` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `yw` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `imei` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `time` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

-- --------------------------------------------------------

--
-- 表的结构 `gj`
--

CREATE TABLE IF NOT EXISTS `gj` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `qq` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `yw` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `imei` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `time` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `gj`
--

INSERT INTO `gj` (`id`, `qq`, `yw`, `imei`, `time`) VALUES
(4, '普通挂机', '正常挂机', '100010', '2016/2/29'),
(5, '普通挂机', '正常挂机', '100011', '2016/2/29'),
(6, '普通挂机', '正常挂机', '100011', '2016/2/29'),
(7, '普通挂机', '正常挂机', '100012', '2016/2/29');

-- --------------------------------------------------------

--
-- 表的结构 `log`
--

CREATE TABLE IF NOT EXISTS `log` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `domain` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `version` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `qd`
--

CREATE TABLE IF NOT EXISTS `qd` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `qq` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '0',
  `yw` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `imei` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `time` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `qd`
--

INSERT INTO `qd` (`id`, `qq`, `yw`, `imei`, `time`) VALUES
(13, '普通签到', '正常签到', '100012', '2016/2/29'),
(12, '普通签到', '正常签到', '100011', '2016/2/29'),
(11, '普通签到', '正常签到', '100010', '2016/2/29');

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(50) NOT NULL,
  `money` float NOT NULL DEFAULT '0',
  `lotime` int(10) unsigned NOT NULL,
  `login` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `money`, `lotime`, `login`) VALUES
(1, 'admin', '3e53e7c3bfbd52ef0b3c053ae18706ff', 'www@ixuecai.com', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `version`
--

CREATE TABLE IF NOT EXISTS `version` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `file` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- 转存表中的数据 `version`
--

INSERT INTO `version` (`id`, `name`, `content`, `file`) VALUES
(16, 'APP积分墙系统', '5pCc6JmO57K+5ZOB56S+5Yy6d3d3LnNvdWhvLm5ldOaPkOS+m0FQUOenr+WIhuWimeezu+e7nw==', 'http://www.souho.net');

-- --------------------------------------------------------

--
-- 表的结构 `vip`
--

CREATE TABLE IF NOT EXISTS `vip` (
  `uid` int(255) unsigned NOT NULL AUTO_INCREMENT,
  `account` varchar(225) CHARACTER SET gb2312 NOT NULL,
  `jf` varchar(225) NOT NULL,
  `sj` varchar(255) NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100013 ;

--
-- 转存表中的数据 `vip`
--

INSERT INTO `vip` (`uid`, `account`, `jf`, `sj`) VALUES
(100000, '123456', '888888', '2016/2/14'),
(100010, '10193156343862', '1887953', '2016/2/29'),
(100012, '43329151069420', '7953', '2016/2/29');

-- --------------------------------------------------------

--
-- 表的结构 `yw`
--

CREATE TABLE IF NOT EXISTS `yw` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `qq` varchar(255) NOT NULL DEFAULT '0',
  `yw` varchar(255) DEFAULT NULL,
  `imei` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=62 ;

--
-- 转存表中的数据 `yw`
--

INSERT INTO `yw` (`id`, `qq`, `yw`, `imei`, `time`) VALUES
(26, '1395550247', '支付宝100元', '100011', '2016/2/29'),
(25, '1395550247', '支付宝100元', '100011', '2016/2/29'),
(20, '1395550247', 'Q币1个', '100010', '2016/2/29'),
(21, '1395550247', '支付宝100元', '100011', '2016/2/29'),
(22, '1395550247', '支付宝100元', '100011', '2016/2/29'),
(23, '1395550247', '支付宝100元', '100011', '2016/2/29'),
(24, '1395550247', '支付宝100元', '100011', '2016/2/29'),
(27, '1395550247', '支付宝100元', '100011', '2016/2/29'),
(28, '1395550247', '支付宝100元', '100011', '2016/2/29'),
(29, '1395550247', '支付宝100元', '100011', '2016/2/29'),
(30, '1395550247', '支付宝100元', '100011', '2016/2/29'),
(31, '1395550247', '支付宝100元', '100011', '2016/2/29'),
(32, '1395550247', '支付宝100元', '100011', '2016/2/29'),
(33, '1395550247', '支付宝100元', '100011', '2016/2/29'),
(34, '1395550247', '支付宝100元', '100011', '2016/2/29'),
(35, '1395550247', '支付宝100元', '100011', '2016/2/29'),
(36, '1395550247', '支付宝100元', '100011', '2016/2/29'),
(37, '1395550247', '支付宝100元', '100011', '2016/2/29'),
(38, '1395550247', '支付宝100元', '100011', '2016/2/29'),
(39, '1395550247', '支付宝100元', '100012', '2016/2/29'),
(40, '1395550247', '支付宝100元', '100012', '2016/2/29'),
(41, '1395550247', '支付宝100元', '100012', '2016/2/29'),
(42, '1395550247', '支付宝100元', '100012', '2016/2/29'),
(43, '1395550247', '支付宝100元', '100012', '2016/2/29'),
(44, '1395550247', '支付宝100元', '100012', '2016/2/29'),
(45, '1395550247', '支付宝100元', '100012', '2016/2/29'),
(46, '1395550247', '支付宝100元', '100012', '2016/2/29'),
(47, '1395550247', '支付宝100元', '100012', '2016/2/29'),
(48, '1395550247', '支付宝100元', '100012', '2016/2/29'),
(49, '1395550247', '支付宝100元', '100012', '2016/2/29'),
(50, '1395550247', '支付宝100元', '100012', '2016/2/29'),
(51, '1395550247', '支付宝100元', '100012', '2016/2/29'),
(52, '1395550247', '支付宝100元', '100012', '2016/2/29'),
(53, '1395550247', '支付宝100元', '100012', '2016/2/29'),
(54, '1395550247', '支付宝100元', '100012', '2016/2/29'),
(55, '1395550247', '支付宝100元', '100012', '2016/2/29'),
(56, '1395550247', '支付宝100元', '100012', '2016/2/29'),
(57, '1395550247', '支付宝50元', '100012', '2016/2/29'),
(58, '1395550247', '支付宝10元', '100012', '2016/2/29'),
(59, '1395550247', '支付宝10元', '100012', '2016/2/29'),
(60, '1395550247', '支付宝10元', '100012', '2016/2/29'),
(61, '1355555', 'Q币1个', '100012', '2016/2/29');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
