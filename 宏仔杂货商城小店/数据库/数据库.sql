-- phpMyAdmin SQL Dump
-- version 4.0.10.19
-- https://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020-05-18 02:38:18
-- 服务器版本: 5.5.62-log
-- PHP 版本: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `789`
--

-- --------------------------------------------------------

--
-- 表的结构 `mao_data`
--

CREATE TABLE IF NOT EXISTS `mao_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Z_id` varchar(255) DEFAULT '1',
  `user` varchar(20) NOT NULL DEFAULT '',
  `pass` varchar(20) NOT NULL DEFAULT '',
  `title` varchar(255) NOT NULL DEFAULT '',
  `keywords` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT '0.00',
  `gd_gg` text,
  `qq` varchar(15) DEFAULT NULL COMMENT '客服QQ',
  `wx` varchar(20) DEFAULT NULL COMMENT '客服微信',
  `sj` varchar(15) DEFAULT NULL,
  `url` varchar(30) NOT NULL DEFAULT '' COMMENT '系统分发域名',
  `url_1` varchar(30) DEFAULT NULL COMMENT '备用域名',
  `time` varchar(30) NOT NULL DEFAULT '' COMMENT '网站到期时间',
  `dx_1` varchar(1) DEFAULT '1',
  `dx_2` varchar(255) DEFAULT '1',
  `dx_3` varchar(1) DEFAULT '1',
  `dx_4` varchar(1) DEFAULT '1',
  `yzf_type` varchar(1) DEFAULT '1' COMMENT '/0自定义/1系统支付/2码支付',
  `yzf_id` varchar(50) DEFAULT NULL,
  `yzf_key` varchar(100) DEFAULT NULL,
  `yzf_url` varchar(100) DEFAULT NULL,
  `zfb_zf` varchar(1) DEFAULT '0',
  `qq_zf` varchar(1) DEFAULT '0',
  `wx_zf` varchar(1) DEFAULT '0',
  `tx_zh` varchar(20) DEFAULT '' COMMENT '提现帐号',
  `tx_sm` varchar(10) DEFAULT NULL COMMENT '提现实名',
  `ym_id` varchar(999) DEFAULT NULL COMMENT '友盟',
  `mzf_id` varchar(20) DEFAULT NULL COMMENT '码支付id',
  `mzf_key` varchar(100) DEFAULT NULL COMMENT '码支付key',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `mao_data`
--

INSERT INTO `mao_data` (`id`, `Z_id`, `user`, `pass`, `title`, `keywords`, `description`, `price`, `gd_gg`, `qq`, `wx`, `sj`, `url`, `url_1`, `time`, `dx_1`, `dx_2`, `dx_3`, `dx_4`, `yzf_type`, `yzf_id`, `yzf_key`, `yzf_url`, `zfb_zf`, `qq_zf`, `wx_zf`, `tx_zh`, `tx_sm`, `ym_id`, `mzf_id`, `mzf_key`) VALUES
(1, '1', 'admin', 'admin', '宏仔杂货商城小店', '宏仔杂货商城小店', '宏仔杂货商城小店', '10000.80', '长期更新:品牌手表/鞋子/衣服/包包/彩妆/饰品/电子产品/童装童鞋/衣帽皮具/香水护肤/日常用品/网红明星同款/微商爆款应有尽有。', '810331109', '13888888888', '13888888888', 'www.123.com', '', '2099-07-25', '0', '0', '0', '0', '0', '123', '123', '123', '0', '1', '0', '810331109@qq.com', '宏仔', '/upload/1571065392993013.png', '123', '123');

-- --------------------------------------------------------

--
-- 表的结构 `mao_dindan`
--

CREATE TABLE IF NOT EXISTS `mao_dindan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `M_id` varchar(10) NOT NULL DEFAULT '',
  `M_sp` varchar(10) NOT NULL DEFAULT '',
  `ddh` varchar(50) NOT NULL DEFAULT '',
  `sjh` varchar(20) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `sl` varchar(10) NOT NULL DEFAULT '1',
  `dj_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `yf_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `time` varchar(50) NOT NULL DEFAULT '',
  `zt` varchar(1) NOT NULL DEFAULT '1' COMMENT '/1未处理/0已付款(待)/2已处理/',
  `xm` varchar(10) DEFAULT '' COMMENT '收件人',
  `dz` varchar(100) DEFAULT '' COMMENT '收件地址',
  `xxdz` varchar(100) DEFAULT '' COMMENT '详细地址',
  `ly` varchar(30) DEFAULT '',
  `jzxm` varchar(10) DEFAULT '' COMMENT '机主姓名',
  `sfzh` varchar(30) DEFAULT '' COMMENT '机主身份证号',
  `mgz` varchar(255) DEFAULT NULL COMMENT '免冠照',
  `sfz1` varchar(255) DEFAULT NULL COMMENT '身份证正面',
  `sfz2` varchar(255) DEFAULT NULL COMMENT '身份证反面',
  `kdgs` varchar(20) DEFAULT '' COMMENT '快递公司',
  `ydh` varchar(50) DEFAULT NULL COMMENT '运单号',
  `msg` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=71 ;

-- --------------------------------------------------------

--
-- 表的结构 `mao_gd`
--

CREATE TABLE IF NOT EXISTS `mao_gd` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `M_id` varchar(10) NOT NULL DEFAULT '',
  `users` varchar(50) NOT NULL DEFAULT '',
  `type` varchar(1) NOT NULL DEFAULT '',
  `ddh` varchar(50) DEFAULT NULL,
  `kh` varchar(50) DEFAULT NULL,
  `wt` text,
  `img` varchar(255) DEFAULT NULL,
  `time` varchar(255) DEFAULT NULL,
  `zt` varchar(1) DEFAULT NULL,
  `msg` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1002 ;

-- --------------------------------------------------------

--
-- 表的结构 `mao_shop`
--

CREATE TABLE IF NOT EXISTS `mao_shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `M_id` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '',
  `img` varchar(255) DEFAULT NULL,
  `type` varchar(1) NOT NULL DEFAULT '' COMMENT '1电/2移/3联',
  `tj` varchar(1) NOT NULL DEFAULT '1' COMMENT '0推荐/1默认',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `yf_price` decimal(10,2) DEFAULT '0.00',
  `youhui_zhang` varchar(10) NOT NULL DEFAULT '0',
  `youhui_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `kucun` varchar(10) NOT NULL DEFAULT '0',
  `xiaoliang` varchar(10) NOT NULL DEFAULT '0',
  `beizhu` text,
  `xq` text,
  `slxd_zt` varchar(1) NOT NULL DEFAULT '1' COMMENT '数量下单/0开启/1关闭',
  `rwzl_zt` varchar(1) NOT NULL DEFAULT '1' COMMENT '0开启/1关闭',
  `dqpb` text COMMENT '地区屏蔽',
  `zt` varchar(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `mao_shop`
--

INSERT INTO `mao_shop` (`id`, `M_id`, `name`, `img`, `type`, `tj`, `price`, `yf_price`, `youhui_zhang`, `youhui_price`, `kucun`, `xiaoliang`, `beizhu`, `xq`, `slxd_zt`, `rwzl_zt`, `dqpb`, `zt`) VALUES
(1, '1', '我是一个演示商品', '/upload/20200414215910962.jpg', '2', '1', '0.01', '6.00', '50', '0.01', '1000', '999', NULL, '<p>我是一个演示商品说明</p><p></p>', '0', '1', '', '1'),
(8, '1', '我是一个演示商品', '/upload/20200417053121438.jpg', '2', '1', '0.01', '0.00', '0', '0.00', '999', '999', NULL, '<p><b></b></p><div class="fui-page-group"><div class="fui-page fui-page-current page-goods-detail"><div class="fui-content basic-block pulldown "><div class="fui-cell-group"><div class="content-block content-images"><p>我是一个演示商品说明</p></div></div></div></div></div>', '0', '1', '', '0'),
(2, '1', 'oppor17手机壳r17pro玻璃镜面r15标准版网红oppor15梦境版男女款r11splus防', '/upload/20200417054630217.jpg_430x430q90', '2', '1', '0.01', '6.00', '0', '0.50', '1000', '999', NULL, '<p>我是一个演示商品说明</p><h1 style="text-align: center;"></h1>', '0', '1', '', '1'),
(11, '1', '男士名牌劳力士手表', '/upload/20200417060059326.jpg', '1', '1', '0.01', '0.00', '0', '0.00', '988', '1010', NULL, '商品说明', '0', '1', '', '0'),
(3, '1', '2020夏季透气新款防臭休闲运动鞋男鞋子男士网面跑步潮鞋百搭网鞋', '/upload/20200417054426417.jpg_230x230', '2', '1', '0.01', '6.00', '0', '0.01', '1000', '999', NULL, '<p>我是一个演示商品说明</p><h1></h1>', '0', '1', '', '1'),
(5, '1', '夏季ins潮牌短袖T恤宽松加肥加大码胖子半袖体恤嘻哈潮流男士印花', '/upload/20200417055057181.jpg', '2', '1', '0.01', '0.00', '0', '0.00', '999', '1000', NULL, '我是一个演示商品说明', '0', '1', '', '0'),
(9, '1', 'Apple/苹果 iPhone X无锁xr美版8x256G国行正品分期全新苹果xsmax', '/upload/20200417055022895.jpg', '2', '1', '0.01', '0.00', '0', '0.00', '993', '1005', NULL, '<p>我是一个演示商品说明</p>', '0', '1', '', '0');

-- --------------------------------------------------------

--
-- 表的结构 `mao_tx`
--

CREATE TABLE IF NOT EXISTS `mao_tx` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `M_id` varchar(10) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT '0.00',
  `time` varchar(50) DEFAULT NULL,
  `zt` varchar(255) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `mao_user`
--

CREATE TABLE IF NOT EXISTS `mao_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `M_id` varchar(10) NOT NULL DEFAULT '',
  `users` varchar(50) NOT NULL DEFAULT '',
  `pass` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- 表的结构 `mao_wuliu`
--

CREATE TABLE IF NOT EXISTS `mao_wuliu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `M_id` varchar(10) NOT NULL DEFAULT '',
  `users` varchar(50) DEFAULT NULL,
  `ddh` varchar(50) DEFAULT NULL,
  `msg` text,
  `time` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
