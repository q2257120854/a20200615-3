-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 2019-06-23 08:44:19
-- 服务器版本： 5.6.44-log
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dog`
--

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_admin`
--

CREATE TABLE `blockcat_admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL DEFAULT '',
  `pwd` varchar(255) NOT NULL DEFAULT '',
  `salt` varchar(50) NOT NULL DEFAULT '',
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1正常-1禁止登陆',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0',
  `last_login_time` int(11) NOT NULL DEFAULT '0',
  `login_num` int(11) NOT NULL DEFAULT '0',
  `last_login_ip` varchar(100) NOT NULL DEFAULT '',
  `phone` bigint(11) DEFAULT '0',
  `nickname` varchar(255) DEFAULT '',
  `desc` text COMMENT '备注',
  `thumb` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='管理员';

--
-- 转存表中的数据 `blockcat_admin`
--

INSERT INTO `blockcat_admin` (`id`, `username`, `pwd`, `salt`, `status`, `create_time`, `update_time`, `last_login_time`, `login_num`, `last_login_ip`, `phone`, `nickname`, `desc`, `thumb`) VALUES
(1, 'admin', '5b53016b770fdc9d9da482ec2bcf7db6', 'OwrYZ8DUQmT1Hnj4zK0k', 1, 1554364825, 1554364825, 1561207049, 316, '14.157.28.156', 0, 'Admin', '', '/themes/admin_themes/lib/vaeyo/img/thumb.png');

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_admin_group`
--

CREATE TABLE `blockcat_admin_group` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL DEFAULT '',
  `status` int(1) NOT NULL DEFAULT '1',
  `rules` varchar(10000) DEFAULT '' COMMENT '用户组拥有的规则id， 多个规则","隔开',
  `menus` varchar(10000) DEFAULT '',
  `desc` text COMMENT '备注',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='权限分组';

--
-- 转存表中的数据 `blockcat_admin_group`
--

INSERT INTO `blockcat_admin_group` (`id`, `title`, `status`, `rules`, `menus`, `desc`, `create_time`, `update_time`) VALUES
(1, '系统所有者', 1, '1,2,57,58,59,60,3,19,20,21,22,23,24,25,26,27,28,29,30,31,32,7,8,9,10,11,12,13,14,15,16,17,18,50,51,52,53,54,55,56,4,5,39,40,41,42,43,44,45,46,47,48,49,33,34,35,36,37,38,69,70,71,72,73,74,75,76,77,78,79,80,81,82,6,61,62,63,64,65,66,67,68,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,101,102,103,104,105,106,107,108,109,110,111,112,113,114,115,116,117,118,119,120,121,122,123,124,125,126,127,128,129,130,131,132,133,134,135,136,137,138,139,140,141,142,143,144,145,146,147,148,149,150,151,152,153,154,155,156,157,158,159,160,161,162,163,164,165,166,167,168,169,170,171,172,173,174,175,176,177,178,179,180,181,182,183,184,185,186,187,188,189,190,191,192,193,194,195,196,197,198,199,200,201,202,203,204,205,206,207,208,209,210,211,212,213,214,215,216,217,218', '1,2,3,4,5,6,14,15,16,17,7,10,11,12,13,24,22,23,18,19,20,21,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54', '系统所有者，系统自动分配所有可操作权限及菜单。', 0, 1555896844);

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_admin_group_access`
--

CREATE TABLE `blockcat_admin_group_access` (
  `uid` mediumint(11) UNSIGNED DEFAULT NULL,
  `group_id` mediumint(11) DEFAULT NULL,
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='权限分组和管理员的关联表';

--
-- 转存表中的数据 `blockcat_admin_group_access`
--

INSERT INTO `blockcat_admin_group_access` (`uid`, `group_id`, `create_time`, `update_time`) VALUES
(2, 1, 0, 0),
(3, 2, 0, 0),
(4, 1, 0, 0),
(4, 2, 0, 0),
(5, 1, 0, 0),
(5, 2, 0, 0),
(6, 1, 0, 0),
(6, 2, 0, 0),
(7, 1, 0, 0),
(7, 2, 0, 0),
(8, 1, 0, 0),
(8, 2, 0, 0),
(1, 1, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_admin_menu`
--

CREATE TABLE `blockcat_admin_menu` (
  `id` int(11) UNSIGNED NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL DEFAULT '',
  `src` varchar(225) DEFAULT '',
  `param` varchar(255) DEFAULT '',
  `order` int(11) NOT NULL DEFAULT '1' COMMENT '越大越靠前',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(3) DEFAULT '1' COMMENT '1为显示，0-为隐藏'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='后台菜单';

--
-- 转存表中的数据 `blockcat_admin_menu`
--

INSERT INTO `blockcat_admin_menu` (`id`, `pid`, `title`, `src`, `param`, `order`, `create_time`, `update_time`, `status`) VALUES
(1, 0, '系统', NULL, NULL, 1, 0, 0, 1),
(2, 1, '菜单', 'admin/menu/index', NULL, 1, 0, 0, 1),
(3, 1, '管理', NULL, NULL, 2, 0, 0, 1),
(4, 3, '管理员', 'admin/admin/index', NULL, 1, 0, 0, 1),
(5, 3, '管理组', 'admin/group/index', NULL, 1, 0, 0, 1),
(6, 1, '节点', 'admin/rule/index', '', 1, 0, 0, 1),
(7, 0, '门户', '', '', 1, 0, 0, 0),
(10, 7, '分类', 'admin/cate/index', '', 1, 0, 0, 1),
(11, 7, '内容', '', '', 1, 0, 0, 1),
(12, 11, '文章', 'admin/article/index', '', 1, 0, 0, 1),
(13, 11, '回收站', 'admin/recycle/index', '', 2, 0, 0, 1),
(14, 1, '路由', 'admin/route/index', '', 1, 0, 0, 0),
(15, 1, '配置', '', '', 1, 0, 0, 1),
(16, 15, '网站信息', 'admin/conf/webConf', '', 1, 0, 0, 1),
(17, 15, '邮箱配置', 'admin/conf/emailConf', '', 1, 0, 0, 1),
(18, 0, '插件', '', '', 1, 0, 0, 0),
(19, 18, '内置钩子', 'admin/hook/index', '', 1, 0, 0, 1),
(20, 18, '插件管理', 'admin/plugin/index', '', 1, 0, 0, 1),
(22, 7, '轮播', 'admin/slide/index', '', 1, 0, 0, 1),
(23, 7, '导航', 'admin/nav/index', '', 1, 0, 0, 1),
(24, 15, '短信配置', 'admin/conf/dayuConf', '', 1, 0, 0, 1),
(25, 0, '会员', '', '', 1, 0, 0, 1),
(26, 25, '会员管理', 'admin/member/index', '', 1, 0, 0, 1),
(27, 0, '区块鱼', '', '', 1, 0, 0, 1),
(28, 27, '区块鱼管理', 'admin/product/index', '', 1, 0, 0, 1),
(29, 27, '区块鱼品种', 'admin/product/cate', '', 1, 0, 0, 1),
(30, 27, '区块鱼等级', 'admin/product/level', '', 1, 0, 0, 1),
(31, 0, '工单', '', '', 1, 0, 0, 1),
(32, 31, '工单管理', 'admin/workorder/index', '', 1, 0, 0, 1),
(33, 31, '工单类型', 'admin/workorder/type', '', 1, 0, 0, 1),
(34, 1, '通知', 'admin/notice/index', '', 1, 0, 0, 1),
(35, 25, '会员等级', 'admin/member/level', '', 1, 0, 0, 1),
(36, 1, '交易', '', '', 1, 0, 0, 1),
(37, 36, '交易设置', 'admin/pay/trade', '', 1, 0, 0, 1),
(38, 36, '支付方式', 'admin/pay/payment', '', 1, 0, 0, 1),
(39, 0, '订单', '', '', 1, 0, 0, 1),
(40, 39, '订单管理', 'admin/order/index', '', 1, 0, 0, 1),
(41, 39, '订单申诉', 'admin/order/complaint', '', 2, 0, 0, 1),
(42, 36, '收款账户', 'admin/pay/collectionAccount', '', 1, 0, 0, 1),
(43, 15, '用户配置', 'admin/conf/userConf', '', 1, 0, 0, 1),
(44, 25, '会员实名', 'admin/member/verifly', '', 1, 0, 0, 1),
(45, 36, '充值二维码', 'admin/pay/rechargeCode', '', 1, 0, 0, 1),
(46, 0, '数据统计', '', '', 1, 0, 0, 1),
(47, 46, '充值记录', 'admin/statistics/rechargelog', '', 1, 0, 0, 1),
(48, 39, '订单审核', 'admin/order/index', 'status=1', 1, 0, 0, 1),
(49, 1, '数据', '', '', 2, 0, 0, 1),
(50, 49, '数据清理', 'admin/data/index', '', 1, 0, 0, 0),
(51, 46, '捕捞记录', 'admin/statistics/adoptlog', '', 1, 0, 0, 1),
(52, 46, '预约记录', 'admin/statistics/appointmentlog', '', 1, 0, 0, 1),
(53, 46, '收益记录', 'admin/statistics/incomelog', '', 1, 0, 0, 1),
(54, 39, '订单解封', 'admin/order/index', 'status=-2', 1, 0, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_admin_rule`
--

CREATE TABLE `blockcat_admin_rule` (
  `id` int(11) UNSIGNED NOT NULL,
  `pid` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '规则',
  `title` varchar(255) NOT NULL DEFAULT '',
  `type` int(1) NOT NULL DEFAULT '1',
  `condition` char(100) DEFAULT NULL COMMENT '附加规则',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL COMMENT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='权限节点';

--
-- 转存表中的数据 `blockcat_admin_rule`
--

INSERT INTO `blockcat_admin_rule` (`id`, `pid`, `name`, `title`, `type`, `condition`, `create_time`, `update_time`) VALUES
(1, 0, '', '系统', 1, '', 0, 0),
(2, 1, '', '配置', 1, '', 0, 0),
(3, 1, '', '管理', 1, '', 0, 0),
(4, 0, '', '门户', 1, '', 0, 0),
(5, 4, '', '内容', 1, '', 0, 0),
(6, 0, '', '插件', 1, '', 0, 0),
(7, 1, 'menu/index', '菜单', 1, '', 0, 0),
(8, 7, 'menu/getMenuList', '菜单列表', 1, '', 0, 0),
(9, 7, 'menu/add', '添加菜单', 1, '', 0, 0),
(10, 9, 'menu/addSubmit', '保存添加的菜单', 1, '', 0, 0),
(11, 7, 'menu/editSubmit', '保存菜单修改', 1, '', 0, 0),
(12, 7, 'menu/delete', '删除菜单', 1, '', 0, 0),
(13, 1, 'rule/index', '节点', 1, '', 0, 0),
(14, 13, 'rule/getRuleList', '节点列表', 1, '', 0, 0),
(15, 13, 'rule/add', '添加节点', 1, '', 0, 0),
(16, 15, 'rule/addSubmit', '保存添加的节点', 1, '', 0, 0),
(17, 13, 'rule/editSubmit', '保存节点修改', 1, '', 0, 0),
(18, 13, 'rule/delete', '节点删除', 1, '', 0, 0),
(19, 3, 'admin/index', '管理员', 1, '', 0, 0),
(20, 19, 'admin/getAdminList', '管理员列表', 1, '', 0, 0),
(21, 19, 'admin/add', '添加管理员', 1, '', 0, 0),
(22, 21, 'admin/addSubmit', '保存添加的管理员', 1, '', 0, 0),
(23, 19, 'admin/edit', '修改管理员', 1, '', 0, 0),
(24, 23, 'admin/editSubmit', '保存管理员的修改', 1, '', 0, 0),
(25, 19, 'admin/delete', '管理员删除', 1, '', 0, 0),
(26, 3, 'group/index', '管理组', 1, '', 0, 0),
(27, 26, 'group/getGroupList', '管理组列表', 1, '', 0, 0),
(28, 26, 'group/add', '添加管理组', 1, '', 0, 0),
(29, 28, 'group/addSubmit', '保存添加的管理组', 1, '', 0, 0),
(30, 26, 'group/edit', '管理组修改', 1, '', 0, 0),
(31, 30, 'group/editSubmit', '保存管理组的修改', 1, '', 0, 0),
(32, 26, 'group/delete', '管理组删除', 1, '', 0, 0),
(33, 4, 'cate/index', '分类', 1, '', 0, 0),
(34, 33, 'cate/getCateList', '分类列表', 1, '', 0, 0),
(35, 33, 'cate/add', '添加分类', 1, '', 0, 0),
(36, 35, 'cate/addSubmit', '保存添加的分类', 1, '', 0, 0),
(37, 33, 'cate/editSubmit', '保存修改的分类', 1, '', 0, 0),
(38, 33, 'cate/delete', '删除分类', 1, '', 0, 0),
(39, 5, 'article/index', '文章', 1, '', 0, 0),
(40, 39, 'article/getContentList', '文章列表', 1, '', 0, 0),
(41, 39, 'article/add', '添加文章', 1, '', 0, 0),
(42, 41, 'article/addSubmit', '保存添加的文章', 1, '', 0, 0),
(43, 39, 'article/edit', '编辑文章', 1, '', 0, 0),
(44, 43, 'article/editSubmit', '保存编辑的文章', 1, '', 0, 0),
(45, 39, 'article/delete', '删除文章', 1, '', 0, 0),
(46, 5, 'recycle/index', '回收站', 1, '', 0, 0),
(47, 46, 'recycle/getRecycleList', '回收列表', 1, '', 0, 0),
(48, 46, 'recycle/reduction', '还原', 1, '', 0, 0),
(49, 46, 'recycle/delete', '彻底删除', 1, '', 0, 0),
(50, 1, 'route/index', '路由', 1, '', 0, 0),
(51, 50, 'route/getRouteList', '路由列表', 1, '', 0, 0),
(52, 50, 'route/add', '添加路由', 1, '', 0, 0),
(53, 52, 'route/addSubmit', '保存添加的路由', 1, '', 0, 0),
(54, 50, 'route/edit', '修改路由', 1, '', 0, 0),
(55, 54, 'route/editSubmit', '保存修改的路由', 1, '', 0, 0),
(56, 50, 'route/delete', '删除路由', 1, '', 0, 0),
(57, 2, 'conf/webConf', '网站信息', 1, '', 0, 0),
(58, 57, 'conf/webConfSubmit', '保存网站信息', 1, '', 0, 0),
(59, 2, 'conf/emailConf', '邮箱配置', 1, '', 0, 0),
(60, 59, 'conf/emailConfSubmit', '保存邮箱配置', 1, '', 0, 0),
(61, 6, 'hook/index', '钩子管理', 1, '', 0, 0),
(62, 61, 'hook/getHookList', '钩子列表', 1, '', 0, 0),
(63, 6, 'plugin/index', '插件管理', 1, '', 0, 0),
(64, 63, 'plugin/getPluginList', '插件列表', 1, '', 0, 0),
(65, 63, 'plugin/start', '启用插件', 1, '', 0, 0),
(66, 63, 'plugin/disabled', '禁用插件', 1, '', 0, 0),
(67, 63, 'plugin/uninstall', '卸载插件', 1, '', 0, 0),
(68, 63, 'plugin/install', '安装插件', 1, '', 0, 0),
(69, 4, 'slide/index', '轮播组', 1, '', 0, 0),
(70, 69, 'slide/add', '添加轮播组', 1, '', 0, 0),
(71, 70, 'slide/addSubmit', '保存添加的轮播组', 1, '', 0, 0),
(72, 69, 'slide/edit', '修改轮播组', 1, '', 0, 0),
(73, 72, 'slide/editSubmit', '保存修改的轮播组', 1, '', 0, 0),
(74, 69, 'slide/delete', '删除轮播组', 1, '', 0, 0),
(75, 69, 'slide/getSlideList', '轮播组列表', 1, '', 0, 0),
(76, 4, 'slide/slideInfo', '轮播', 1, '', 0, 0),
(77, 76, 'slide/getSlideInfoList', '轮播列表', 1, '', 0, 0),
(78, 76, 'slide/addSlideInfo', '添加轮播', 1, '', 0, 0),
(79, 78, 'slide/addSlideInfoSubmit', '保存添加的轮播', 1, '', 0, 0),
(80, 76, 'slide/editSlideInfo', '编辑轮播', 1, '', 0, 0),
(81, 80, 'slide/editSlideInfoSubmit', '保存编辑的轮播', 1, '', 0, 0),
(82, 76, 'slide/deleteSlideInfo', '删除轮播', 1, '', 0, 0),
(83, 4, '', '导航', 1, '', 0, 0),
(84, 83, 'nav/index', '导航组', 1, '', 0, 0),
(85, 84, 'nav/getNavList', '导航组列表', 1, '', 0, 0),
(86, 84, 'nav/add', '添加导航组', 1, '', 0, 0),
(87, 86, 'nav/addSubmit', '保存添加的导航组', 1, '', 0, 0),
(88, 84, 'nav/edit', '修改导航组', 1, '', 0, 0),
(89, 88, 'nav/editSubmit', '保存修改的导航组', 1, '', 0, 0),
(90, 84, 'nav/delete', '删除导航组', 1, '', 0, 0),
(91, 83, 'nav/navInfo', '管理导航', 1, '', 0, 0),
(92, 91, 'nav/getNavInfoList', '导航列表', 1, '', 0, 0),
(93, 91, 'nav/addNavInfo', '添加导航', 1, '', 0, 0),
(94, 93, 'nav/addNavInfoSubmit', '保存添加的导航', 1, '', 0, 0),
(95, 91, 'nav/editNavInfoSubmit', '保存修改的导航', 1, '', 0, 0),
(96, 91, 'nav/deleteNavInfo', '删除导航', 1, '', 0, 0),
(97, 63, 'plugin/setConfig', '配置插件', 1, '', 0, 0),
(98, 2, 'conf/dayuConf', '短信配置', 1, '', 0, 0),
(99, 98, 'conf/dayuConfSubmit', '保存短信配置', 1, '', 0, 0),
(100, 0, '', '会员', 1, '', 0, 0),
(101, 100, 'member/index', '会员管理', 1, '', 0, 0),
(102, 101, 'member/getContentList', '会员数据', 1, '', 0, 0),
(103, 100, 'member/edit', '编辑会员', 1, '', 0, 0),
(104, 103, 'member/editSubmit', '保存修改的会员', 1, '', 0, 0),
(105, 100, 'member/add', '添加会员', 1, '', 0, 0),
(106, 105, 'member/addSubmit', '保存添加的会员', 1, '', 0, 0),
(107, 100, 'member/delete', '删除会员', 1, '', 0, 0),
(108, 0, '', '区块鱼', 1, '', 0, 0),
(109, 108, 'product/index', '区块鱼管理', 1, '', 0, 0),
(110, 109, 'product/getContentList', '区块鱼数据', 1, '', 0, 0),
(111, 108, 'product/add', '添加区块鱼', 1, '', 0, 0),
(112, 111, 'product/addSubmit', '保存添加的区块鱼', 1, '', 0, 0),
(113, 108, 'product/edit', '编辑区块鱼', 1, '', 0, 0),
(114, 113, 'product/editSubmit', '保存编辑的区块鱼', 1, '', 0, 0),
(115, 108, 'product/cate', '区块鱼品种', 1, '', 0, 0),
(116, 115, 'product/getCateList', '区块鱼品种数据', 1, '', 0, 0),
(117, 108, 'product/addcate', '添加区块鱼品种', 1, '', 0, 0),
(118, 117, 'product/addcateSubmit', '保存添加的区块鱼品种', 1, '', 0, 0),
(119, 108, 'product/editcate', '编辑区块鱼品种', 1, '', 0, 0),
(120, 119, 'product/editcateSubmit', '保存编辑的区块鱼品种', 1, '', 0, 0),
(121, 108, 'product/level', '区块鱼等级', 1, '', 0, 0),
(122, 121, 'product/getLevelList', '区块鱼等级数据', 1, '', 0, 0),
(123, 108, 'product/addlevel', '添加区块鱼等级', 1, '', 0, 0),
(124, 123, 'product/addlevelSubmit', '保存添加的区块鱼等级', 1, '', 0, 0),
(125, 108, 'product/editlevel', '编辑区块鱼等级', 1, '', 0, 0),
(126, 125, 'product/editlevelSubmit', '保存编辑的区块鱼等级', 1, '', 0, 0),
(127, 108, 'product/delete', '删除区块鱼', 1, '', 0, 0),
(128, 108, 'product/deleteCate', '删除区块鱼品种', 1, '', 0, 0),
(129, 108, 'product/deleteLevel', '删除区块鱼等级', 1, '', 0, 0),
(130, 0, '', '工单', 1, '', 0, 0),
(131, 130, 'workorder/index', '工单管理', 1, '', 0, 0),
(132, 131, 'workorder/getContentList', '工单数据', 1, '', 0, 0),
(133, 130, 'workorder/edit', '编辑工单', 1, '', 0, 0),
(134, 133, 'workorder/editSubmit', '保存修改的工单', 1, '', 0, 0),
(135, 130, 'workorder/delete', '删除工单', 1, '', 0, 0),
(136, 130, 'workorder/type', '工单类型', 1, '', 0, 0),
(137, 136, 'workorder/gettypeList', '工单类型数据', 1, '', 0, 0),
(138, 130, 'workorder/addtype', '工单类型添加', 1, '', 0, 0),
(139, 138, 'workorder/addtypeSubmit', '保存提交工单类型', 1, '', 0, 0),
(140, 130, 'workorder/edittype', '工单类型编辑', 1, '', 0, 0),
(141, 140, 'workorder/edittypeSubmit', '保存编辑工单类型', 1, '', 0, 0),
(142, 130, 'workorder/deletetype', '工单类型删除', 1, '', 0, 0),
(143, 1, '', '通知', 1, '', 0, 0),
(144, 143, 'notice/index', '通知列表', 1, '', 0, 0),
(145, 144, 'notice/getContentList', '通知数据', 1, '', 0, 0),
(146, 143, 'notice/edit', '修改通知', 1, '', 0, 0),
(147, 143, 'notice/add', '添加通知', 1, '', 0, 0),
(148, 143, 'notice/delete', '删除通知', 1, '', 0, 0),
(149, 146, 'notice/editSubmit', '保存修改通知', 1, '', 0, 0),
(150, 147, 'notice/addSubmit', '保存添加通知', 1, '', 0, 0),
(151, 8, 'menu/AjaxMenustatus', '修改菜单状态', 1, '', 0, 0),
(152, 100, 'member/level', '会员等级管理', 1, '', 0, 0),
(153, 152, 'member/getLevelList', '会员等级数据', 1, '', 0, 0),
(154, 100, 'member/editlevel', '编辑会员等级', 1, '', 0, 0),
(155, 154, 'member/editlevelSubmit', '    保存修改的会员等级数据', 1, '', 0, 0),
(156, 100, 'member/addlevel', '添加会员等级', 1, '', 0, 0),
(157, 1, '', '交易', 1, '', 0, 0),
(158, 157, 'pay/trade', '交易设置', 1, '', 0, 0),
(159, 157, 'pay/payment', '支付方式', 1, '', 0, 0),
(160, 157, 'pay/addpayment', '添加支付方式', 1, '', 0, 0),
(161, 160, 'pay/addpaymentSubmit', '保存添加的支付方式', 1, '', 0, 0),
(162, 157, 'pay/editpayment', '编辑支付方式', 1, '', 0, 0),
(163, 162, 'pay/editpaymentSubmit', '保存编辑的支付方式', 1, '', 0, 0),
(164, 157, 'pay/deletePayment', '删除支付方式', 1, '', 0, 0),
(165, 159, 'pay/getPaymentList', '获取支付方式的数据', 1, '', 0, 0),
(166, 156, 'member/addlevelSubmit', '保存添加的会员等级数据', 1, '', 0, 0),
(167, 100, 'member/deleteLevel', '删除会员等级', 1, '', 0, 0),
(168, 0, '', '订单', 1, '', 0, 0),
(169, 168, 'order/index', '订单管理', 1, '', 0, 0),
(170, 169, 'order/getContentList', '订单数据', 1, '', 0, 0),
(171, 168, 'order/detail', '订单详情', 1, '', 0, 0),
(172, 168, 'order/ajaxStatus', '修改订单状态', 1, '', 0, 0),
(173, 168, 'order/complaint', '订单申诉', 1, '', 0, 0),
(174, 173, 'order/getComplaintList', '订单申诉数据', 1, '', 0, 0),
(175, 168, 'order/editcomplaint', '编辑订单申诉', 1, '', 0, 0),
(176, 175, 'order/editcomplaintSubmit', '保存修改的订单申诉', 1, '', 0, 0),
(177, 157, 'pay/collectionAccount', '收款账户', 1, '', 0, 0),
(178, 177, 'pay/getAccountList', '获取收款账户数据', 1, '', 0, 0),
(179, 177, 'pay/addaccount', '添加收款账户', 1, '', 0, 0),
(180, 179, 'pay/addaccountSubmit', '保存添加的收款账户', 1, '', 0, 0),
(181, 177, 'pay/editaccount', '编辑收款账户', 1, '', 0, 0),
(182, 181, 'pay/editaccountSubmit', '保存编辑的收款账户', 1, '', 0, 0),
(183, 177, 'pay/deleteaccount', '删除收款账户', 1, '', 0, 0),
(184, 158, 'pay/tradeConfSubmit', '保存交易设置', 1, '', 0, 0),
(185, 2, 'conf/userConf', '用户配置', 1, '', 0, 0),
(186, 185, 'conf/userConfSubmit', '保存用户配置', 1, '', 0, 0),
(187, 100, 'member/verifly', '会员实名', 1, '', 0, 0),
(188, 187, 'member/getVeriflyList', '获取会员实名的数据', 1, '', 0, 0),
(189, 187, 'member/AjaxVerifly', '审核会员实名', 1, '', 0, 0),
(190, 103, 'member/recharge', '会员充值', 1, '', 0, 0),
(191, 103, 'member/rechargeSubmit', '提交会员充值数据', 1, '', 0, 0),
(192, 157, 'pay/rechargeCode', '充值二维码', 1, '', 0, 0),
(193, 192, 'pay/getCodeList', '获取充值二维码数据', 1, '', 0, 0),
(194, 157, 'pay/addrechargecode', '添加二维码', 1, '', 0, 0),
(195, 194, 'pay/addCodeSubmit', '保存添加的二维码', 1, '', 0, 0),
(196, 157, 'pay/deteleCode', '删除二维码', 1, '', 0, 0),
(197, 0, '', '数据统计', 1, '', 0, 0),
(198, 197, 'statistics/rechargelog', '充值记录', 1, '', 0, 0),
(199, 198, 'statistics/getRechargelogList', '获取充值记录的数据', 1, '', 0, 0),
(200, 168, 'order/pay', '订单支付', 1, '', 0, 0),
(201, 168, 'order/fetchcancel', '订单取消', 1, '', 0, 0),
(202, 168, 'order/auditpass', '审核通过', 1, '', 0, 0),
(203, 1, '', '数据', 1, '', 0, 0),
(205, 197, 'statistics/adoptlog', '捕捞记录', 1, '', 0, 0),
(206, 205, 'statistics/getAdoptlogList', '获取捕捞记录的数据', 1, '', 0, 0),
(207, 197, 'statistics/appointmentlog', '预约记录', 1, '', 0, 0),
(208, 207, 'statistics/getAppointmentlogList', '获取预约记录的数据', 1, '', 0, 0),
(209, 205, 'statistics/adopt', '指定捕捞', 1, '', 0, 0),
(210, 198, 'statistics/passrecharge', '确认充值', 1, '', 0, 0),
(211, 197, 'statistics/incomelog', '收益记录', 1, '', 0, 0),
(212, 211, 'statistics/getIncomelogList', '获取收益记录的数据', 1, '', 0, 0),
(213, 205, 'statistics/ajaxAdoptTime', '请求捕捞倒计时间', 1, '', 0, 0),
(214, 175, 'order/passComplaint', '处理申诉', 1, '', 0, 0),
(215, 175, 'order/rejectComplaint', '驳回申诉', 1, '', 0, 0),
(216, 168, 'order/unsealing', '订单解封', 1, '', 0, 0),
(217, 198, 'statistics/rejectcharge', '驳回充值', 1, '', 0, 0),
(218, 198, 'statistics/ajaxLatelyLogs', '获取最近10秒的充值数', 1, '', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_article`
--

CREATE TABLE `blockcat_article` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL DEFAULT '',
  `keywords` varchar(1000) DEFAULT '',
  `desc` varchar(1000) DEFAULT '',
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1正常-1下架',
  `thumb` varchar(1000) NOT NULL DEFAULT '',
  `content` text NOT NULL,
  `read` int(11) NOT NULL DEFAULT '0' COMMENT '阅读量',
  `article_cate_id` int(11) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0',
  `delete_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='内容';

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_article_cate`
--

CREATE TABLE `blockcat_article_cate` (
  `id` int(11) UNSIGNED NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL DEFAULT '',
  `keywords` varchar(1000) DEFAULT '',
  `desc` varchar(1000) DEFAULT '',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='内容分类';

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_hook`
--

CREATE TABLE `blockcat_hook` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` tinyint(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '钩子类型1:系统钩子,2:应用钩子,3:模板钩子',
  `only` tinyint(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '是否只允许一个插件运行0:多个,1:一个',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '钩子名称',
  `hook` varchar(50) NOT NULL DEFAULT '' COMMENT '钩子',
  `module` varchar(15) NOT NULL DEFAULT '' COMMENT '模块名，模块专属钩子',
  `desc` varchar(255) NOT NULL DEFAULT '' COMMENT '描述'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='钩子表';

--
-- 转存表中的数据 `blockcat_hook`
--

INSERT INTO `blockcat_hook` (`id`, `type`, `only`, `name`, `hook`, `module`, `desc`) VALUES
(1, 1, 0, '应用初始化', 'app_init', 'vae', '应用初始化'),
(2, 1, 0, '应用开始', 'app_begin', 'vae', '应用开始'),
(3, 1, 0, '模块初始化', 'module_init', 'vae', '模块初始化'),
(4, 1, 0, '控制器开始', 'action_begin', 'vae', '控制器开始'),
(5, 1, 0, '视图输出过滤', 'view_filter', 'vae', '视图输出过滤'),
(6, 1, 0, '应用结束', 'app_end', 'vae', '应用结束'),
(7, 1, 0, '日志write方法', 'log_write', 'vae', '日志write方法'),
(8, 1, 0, '输出结束', 'response_end', 'vae', '输出结束'),
(9, 1, 0, '后台控制器初始化', 'admin_init', 'vae', '后台控制器初始化'),
(10, 1, 0, 'API控制器初始化', 'api_init', 'vae', 'API控制器初始化'),
(11, 2, 1, '后台首页', 'admin_main', 'admin', '后台首页'),
(12, 2, 1, '后台登录页面', 'admin_login', 'admin', '后台登录页面初始化'),
(13, 1, 0, '文件上传前', 'upload_begin', 'vae', '文件上传完成前'),
(14, 1, 0, '文件上传后', 'upload_end', 'vae', '文件上传完成后'),
(15, 2, 0, 'port模块数据输出前', 'port_return', 'port', 'port模块数据输出前'),
(16, 2, 0, 'port模块接收参数前', 'port_param', 'vae', 'port模块接收参数前'),
(17, 2, 0, 'port模块开始前', 'port_begin', 'port', 'port模块开始前');

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_hook_plugin`
--

CREATE TABLE `blockcat_hook_plugin` (
  `id` int(10) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL DEFAULT '0' COMMENT '排序',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态-1禁用,1启用',
  `hook` varchar(50) NOT NULL DEFAULT '' COMMENT '钩子名',
  `plugin` varchar(50) NOT NULL DEFAULT '' COMMENT '插件名'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='钩子关联插件表';

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_member`
--

CREATE TABLE `blockcat_member` (
  `mid` int(10) UNSIGNED NOT NULL COMMENT '用户id',
  `account` varchar(32) NOT NULL COMMENT '用户账号',
  `pwd` varchar(255) NOT NULL COMMENT '用户密码',
  `pwd2` varchar(255) NOT NULL COMMENT '二级密码',
  `nickname` varchar(16) NOT NULL COMMENT '用户昵称',
  `now_money` decimal(8,2) UNSIGNED NOT NULL DEFAULT '0.00' COMMENT '资产',
  `team_income` decimal(8,2) UNSIGNED NOT NULL DEFAULT '0.00' COMMENT '团队收益',
  `recommend_income` decimal(8,2) UNSIGNED NOT NULL DEFAULT '0.00' COMMENT '推荐收益',
  `income_transferred` decimal(8,2) UNSIGNED NOT NULL DEFAULT '0.00' COMMENT '收益转存',
  `integral` int(10) UNSIGNED DEFAULT '0' COMMENT '微分',
  `bst_currency` decimal(8,2) UNSIGNED DEFAULT '0.00' COMMENT 'BST虚拟币',
  `ocn_currency` decimal(8,2) UNSIGNED DEFAULT '0.00' COMMENT 'OCN幣',
  `level` int(5) DEFAULT '0' COMMENT '等级',
  `realname` varchar(50) DEFAULT NULL COMMENT '真实姓名',
  `idnum` varchar(20) DEFAULT NULL COMMENT '身份证号码',
  `parent_mid` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '推广员id',
  `user_type` varchar(32) NOT NULL COMMENT '用户类型',
  `is_idverifly` tinyint(3) DEFAULT '0' COMMENT '0-未实名，1已实名，2审核中',
  `is_promoter` tinyint(3) DEFAULT '0' COMMENT '是否为推广员0-不是，1-是',
  `is_activation` tinyint(3) DEFAULT '0' COMMENT '是否激活',
  `salt` varchar(255) DEFAULT NULL COMMENT '加密串',
  `pids` longtext,
  `tier` int(11) UNSIGNED DEFAULT '1' COMMENT '层级',
  `add_time` int(11) UNSIGNED NOT NULL COMMENT '添加时间',
  `add_ip` varchar(16) NOT NULL COMMENT '添加ip',
  `last_time` int(11) UNSIGNED NOT NULL COMMENT '最后一次登录时间',
  `last_ip` varchar(16) NOT NULL COMMENT '最后一次登录ip',
  `status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '-1为删除，1为正常，0为禁止'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `blockcat_member`
--

INSERT INTO `blockcat_member` (`mid`, `account`, `pwd`, `pwd2`, `nickname`, `now_money`, `team_income`, `recommend_income`, `income_transferred`, `integral`, `bst_currency`, `ocn_currency`, `level`, `realname`, `idnum`, `parent_mid`, `user_type`, `is_idverifly`, `is_promoter`, `is_activation`, `salt`, `pids`, `tier`, `add_time`, `add_ip`, `last_time`, `last_ip`, `status`) VALUES
(1, '18218457604', '$2y$10$y5hbvkpIIXaNlIqEC4C8xOzwjp5qlImox/kQoVwVi8W0pvRnBPw/W', '$2y$10$Va3VEBgLDC7f1xpCvz2Txubbl2ReJUq/xd2Bh8J7i4SuV0aeFA6mq', '龙城', '0.00', '0.00', '0.00', '0.00', 5, '0.00', '0.00', 0, NULL, NULL, 0, '', 0, 0, 0, 'iDX5lnKawBECFoSfWuQG', '', 1, 1560843303, '14.146.126.164', 1560853647, '113.66.255.230', 1),
(2, '13800138001', '$2y$10$eO.un3vmYYB12xCYolXkZenTyBATp9aobivTrGE.8X0MhjIT6e9le', '$2y$10$sClOtgW6USuj40pQDRhU7OJNZ5S2SrH7yEiRJj.bOXQaE1nfHtN.K', '测试账号', '0.00', '0.00', '0.00', '0.00', 5, '0.00', '0.00', 0, NULL, NULL, 0, '', 0, 0, 0, 'iCB4ETS36Rdcz9PYlApG', '', 1, 1560843966, '113.66.255.230', 1561098889, '182.100.146.127', 1),
(3, '13800138000', '$2y$10$eO.un3vmYYB12xCYolXkZenTyBATp9aobivTrGE.8X0MhjIT6e9le', '$2y$10$CwpwR6dMDFD0dpuBdhKgO.7vuIY.H64EMxYyex4wZxZochzb2Fqji', 'wxhllx', '0.00', '0.00', '0.00', '0.00', 1, '0.00', '0.00', 0, '', '', 0, '', 1, 1, 1, 'iCB4ETS36Rdcz9PYlApG', '', 1, 1560954837, '182.100.146.127', 1561223562, '106.42.223.172', 1),
(4, '13454337360', '$2y$10$/fYhfIA/5DtBl0oP4ix09OzSZAMd7eJBbrCxNbTqkNFdoXqMHm.Lu', '$2y$10$c3KenVwVtV7361iDRIrx4Oc8EaITmoGjqbOVgyQtRYqalUijCFFja', 'cnzjyh', '0.00', '0.00', '0.00', '0.00', 5, '0.00', '0.00', 0, NULL, NULL, 0, '', 0, 0, 0, 'NxKsXV9meEfCj7nD2Q8T', '', 1, 1561169039, '115.205.28.136', 1561169426, '115.205.28.136', 1),
(5, '13528585563', '$2y$10$YtbULKsSWYk0q6..PPAqneOgu00buK6teaQlorqQlCZJkxGI95JEG', '$2y$10$.Ye1l2KaT6BdAz4pReclruocuSTjkfUTQ/Adg54hByq354lW1ms3O', 'eww', '0.00', '0.00', '0.00', '0.00', 5, '0.00', '0.00', 0, NULL, NULL, 3, '', 0, 0, 0, 'CDGY7eJ0Oof9pB3IrZcL', '3', 2, 1561208010, '182.84.156.238', 0, '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_member_assetsalelog`
--

CREATE TABLE `blockcat_member_assetsalelog` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `mid` int(10) UNSIGNED DEFAULT '0' COMMENT '用户ID',
  `type` tinyint(3) NOT NULL DEFAULT '1' COMMENT '1-推荐收益，2-团队收益，3-收益转存	',
  `asset` decimal(8,2) UNSIGNED NOT NULL DEFAULT '0.00' COMMENT '资产',
  `createtime` int(11) UNSIGNED NOT NULL COMMENT '提交时间',
  `status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '0为未审核，1为审核通过'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户资产记录' ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_member_currencylog`
--

CREATE TABLE `blockcat_member_currencylog` (
  `id` int(10) UNSIGNED NOT NULL,
  `mid` int(10) UNSIGNED DEFAULT '0' COMMENT '用户ID',
  `type` tinyint(3) UNSIGNED DEFAULT NULL COMMENT '类型：0-BST虚拟币，1-OCN幣',
  `currency` decimal(8,2) DEFAULT '0.00' COMMENT '虚拟币',
  `createtime` int(11) UNSIGNED DEFAULT '0',
  `status` int(11) UNSIGNED DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='虚拟币记录表';

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_member_incomelog`
--

CREATE TABLE `blockcat_member_incomelog` (
  `id` int(10) UNSIGNED NOT NULL,
  `mid` int(10) UNSIGNED DEFAULT '0' COMMENT '用户ID',
  `type` tinyint(3) UNSIGNED DEFAULT '0' COMMENT '0-合约收益，1-推荐收益，2-团队收益，3-收益转存',
  `income` decimal(8,2) UNSIGNED NOT NULL DEFAULT '0.00' COMMENT '收益',
  `createtime` int(11) UNSIGNED DEFAULT '0',
  `status` int(11) UNSIGNED DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='收益记录表' ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_member_integrallog`
--

CREATE TABLE `blockcat_member_integrallog` (
  `id` int(10) UNSIGNED NOT NULL,
  `mid` int(10) UNSIGNED DEFAULT '0' COMMENT '用户ID',
  `other_mid` int(10) UNSIGNED DEFAULT '0' COMMENT '对方ID',
  `type` tinyint(3) UNSIGNED DEFAULT NULL COMMENT '类型：0-注册赠送，1-预约(购买)，2-预约失败，3-转出，4-转入，5-付款超时',
  `integral` int(10) DEFAULT '0' COMMENT '微分',
  `createtime` int(11) UNSIGNED DEFAULT '0',
  `status` int(11) UNSIGNED DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='微分记录表' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `blockcat_member_integrallog`
--

INSERT INTO `blockcat_member_integrallog` (`id`, `mid`, `other_mid`, `type`, `integral`, `createtime`, `status`) VALUES
(1, 1, 0, 0, 5, 1560843303, 1),
(2, 2, 0, 0, 5, 1560843966, 1),
(3, 3, 0, 0, 5, 1560954837, 1),
(4, 3, 0, 1, -4, 1561099075, 1),
(5, 4, 0, 0, 5, 1561169039, 1),
(6, 5, 0, 0, 5, 1561208010, 1);

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_member_level`
--

CREATE TABLE `blockcat_member_level` (
  `id` int(11) UNSIGNED NOT NULL,
  `level` int(11) UNSIGNED NOT NULL COMMENT '等级',
  `levelname` varchar(200) NOT NULL COMMENT '等级名称',
  `down` int(11) UNSIGNED DEFAULT '0' COMMENT '直推有效客户',
  `threedown` int(11) UNSIGNED DEFAULT '0' COMMENT '三代有效客户',
  `commission` decimal(8,2) UNSIGNED DEFAULT '0.00' COMMENT '个人推广奖励',
  `team_size` int(11) UNSIGNED DEFAULT '0' COMMENT '团队人数',
  `discount` int(5) UNSIGNED DEFAULT '0' COMMENT '充值微分折扣',
  `service_award` int(5) UNSIGNED DEFAULT '0' COMMENT '服务奖励'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户等级表';

--
-- 转存表中的数据 `blockcat_member_level`
--

INSERT INTO `blockcat_member_level` (`id`, `level`, `levelname`, `down`, `threedown`, `commission`, `team_size`, `discount`, `service_award`) VALUES
(1, 2, '服务商', 32, 64, '20000.00', 2000, 8, 3),
(2, 1, '推广大使', 10, 24, '2000.00', 0, 9, 1),
(3, 3, '合伙人', 64, 256, '50000.00', 5000, 7, 5),
(6, 4, '钻石合伙人', 128, 768, '70000.00', 10000, 6, 7),
(7, 5, '皇冠合伙人', 256, 1024, '100000.00', 20000, 6, 10),
(9, 0, '会员', 0, 0, '0.00', 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_member_notice`
--

CREATE TABLE `blockcat_member_notice` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `mid` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '用户id',
  `notice_id` int(10) UNSIGNED DEFAULT '0' COMMENT '消息ID',
  `status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '1为已阅读，0为未阅读'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户消息表' ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_member_rechargelog`
--

CREATE TABLE `blockcat_member_rechargelog` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `mid` int(10) UNSIGNED DEFAULT '0' COMMENT '用户ID',
  `integral` int(10) UNSIGNED DEFAULT '0' COMMENT '充值',
  `realintegral` int(10) UNSIGNED DEFAULT '0' COMMENT '实际充值',
  `discount` int(10) UNSIGNED DEFAULT '0' COMMENT '折扣',
  `payment_voucher` varchar(255) DEFAULT NULL COMMENT '付款凭证',
  `createtime` int(11) UNSIGNED NOT NULL COMMENT '提交时间',
  `status` tinyint(3) NOT NULL DEFAULT '0' COMMENT '0为未审核，1为通过充值，-1为驳回充值'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户充值记录' ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_nav`
--

CREATE TABLE `blockcat_nav` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '标识',
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1可用-1禁用',
  `desc` varchar(255) DEFAULT NULL,
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='导航';

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_nav_info`
--

CREATE TABLE `blockcat_nav_info` (
  `id` int(11) UNSIGNED NOT NULL,
  `pid` int(11) NOT NULL DEFAULT '0',
  `nav_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(225) DEFAULT '',
  `src` varchar(100) DEFAULT NULL,
  `param` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1可用-1禁用',
  `order` int(11) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='导航详情';

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_notice`
--

CREATE TABLE `blockcat_notice` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `type` int(4) UNSIGNED NOT NULL DEFAULT '1' COMMENT '1-系统通知，2-活动通知',
  `title` varchar(255) DEFAULT NULL COMMENT '消息标题',
  `thumb` varchar(255) DEFAULT NULL COMMENT '通知缩略图',
  `link` varchar(255) DEFAULT NULL COMMENT '链接',
  `detail` text COMMENT '消息详情',
  `createtime` int(11) UNSIGNED NOT NULL COMMENT '创建时间',
  `sendtime` int(11) UNSIGNED NOT NULL COMMENT '定时发送时间',
  `ispopped` tinyint(3) UNSIGNED DEFAULT '0' COMMENT '是否弹出',
  `status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '1为已发送，0为未发送'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='消息表' ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `blockcat_notice`
--

INSERT INTO `blockcat_notice` (`id`, `type`, `title`, `thumb`, `link`, `detail`, `createtime`, `sendtime`, `ispopped`, `status`) VALUES
(6, 1, '重要提示', '', '', '<p>如遇到购买卷充值問題，或者交易問題請及時聯繫線上客服解決，以免出現不必要的損失！！！如有问题请加客服：123456</p>', 1557893665, 0, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_order`
--

CREATE TABLE `blockcat_order` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `mid` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '用户ID',
  `seller_mid` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '卖家ID',
  `ordersn` varchar(30) DEFAULT NULL COMMENT '订单编号',
  `product_id` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '商品ID',
  `product_price` decimal(8,2) UNSIGNED NOT NULL DEFAULT '0.00' COMMENT '购买价值',
  `integral` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '消耗微分',
  `price` decimal(8,2) UNSIGNED NOT NULL DEFAULT '0.00' COMMENT '当前价值',
  `cycle` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '购买周期',
  `figure` decimal(8,2) UNSIGNED NOT NULL DEFAULT '0.00' COMMENT '收益比例',
  `bst_currency` decimal(8,2) UNSIGNED NOT NULL DEFAULT '0.00' COMMENT 'BST虚拟币',
  `ocn_figure` decimal(8,2) UNSIGNED NOT NULL DEFAULT '0.00' COMMENT '可挖OCN幣收益比例',
  `income_days` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '收益天数',
  `payment_voucher` varchar(255) DEFAULT NULL COMMENT '付款凭证',
  `createtime` int(11) UNSIGNED NOT NULL COMMENT '转让时间/购买时间',
  `paytime` int(11) UNSIGNED NOT NULL COMMENT '用户付款时间',
  `audittime` int(11) UNSIGNED NOT NULL COMMENT '卖家审核时间',
  `incometime` int(11) UNSIGNED NOT NULL COMMENT '收益时间',
  `canceltime` int(11) UNSIGNED NOT NULL COMMENT '取消时间',
  `is_complaint` tinyint(3) DEFAULT '0' COMMENT '是否系统申诉过',
  `income_status` tinyint(3) DEFAULT '0' COMMENT '0为等待收益，1为收益中，2为收益完结（闲置）',
  `status` tinyint(3) DEFAULT '0' COMMENT '-2为申诉订单，-1为取消订单，0为待付款（待购买），1为待审核，2为已付款（已购买），3已转让'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单表' ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_order_complaint`
--

CREATE TABLE `blockcat_order_complaint` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `mid` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '用户ID',
  `orderid` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '订单ID',
  `reason` text COMMENT '申诉理由',
  `createtime` int(11) DEFAULT '0' COMMENT '申诉时间',
  `status` tinyint(3) DEFAULT '0' COMMENT '-1为驳回，0为未处理，1为处理成功，2为撤诉'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='订单申诉表' ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_payment_method`
--

CREATE TABLE `blockcat_payment_method` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `mid` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '用户id',
  `type` int(10) UNSIGNED DEFAULT NULL COMMENT '类型',
  `titleofaccount` varchar(255) DEFAULT NULL COMMENT '账户名称',
  `account` varchar(255) DEFAULT NULL COMMENT '账户',
  `paymentcode` varchar(255) DEFAULT NULL COMMENT '收款二维码',
  `add_time` int(11) UNSIGNED NOT NULL COMMENT '提交时间',
  `status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '1为正常，0为禁止'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户支付方式' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `blockcat_payment_method`
--

INSERT INTO `blockcat_payment_method` (`id`, `mid`, `type`, `titleofaccount`, `account`, `paymentcode`, `add_time`, `status`) VALUES
(1, 3, 1, '1221', '1212', '/upload/port/payment_method/f1/69901f7361eb9893cc0a82580bbf39968c3fd4.png', 1560955295, 1),
(2, 3, 1, '6666', '66666', '/upload/port/payment_method/08/935ee71b73efd9577236667db1dbc30ac6a523.png', 1561099058, 1),
(3, 0, 1, '测试', 'test', '/upload/admin/thumb/6e/789a86a3484da025144448b17997276a244bfc.jpeg', 1561099235, 1);

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_payment_type`
--

CREATE TABLE `blockcat_payment_type` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `name` varchar(255) DEFAULT NULL COMMENT '支付类型',
  `logo` varchar(255) DEFAULT NULL COMMENT 'logo',
  `ispaymentcode` tinyint(3) DEFAULT '0' COMMENT '1为上传收款码，0为不用上传',
  `status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '1为正常，0为禁止'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='支付类型' ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `blockcat_payment_type`
--

INSERT INTO `blockcat_payment_type` (`id`, `name`, `logo`, `ispaymentcode`, `status`) VALUES
(1, '微信支付', '/upload/admin/thumb/37/2f2f71ba24ffb148ba7e2e8978fee380ecbf46.jpg', 1, 1),
(2, '工商银行', '/upload/admin/thumb/c7/2cdc7646f03cfed6789250364a98b7ccdea421.jpg', 0, 1),
(3, '支付宝', '/upload/admin/thumb/1d/a045af37a574063efad50725b2cbe9c60f7633.jpg', 1, 1),
(7, '建设银行', '/upload/admin/thumb/fa/e3e3d2a8da6f4c6edb7b82b44d4d8d7c164ab1.jpg', 0, 1),
(8, '中国银行', '/upload/admin/thumb/0b/d5518a76dbe3363ba90c90f4ff69bff796041d.jpg', 0, 1),
(9, '农业银行', '/upload/admin/thumb/44/59dc64a12c5467eb52cb058c328533f3e3baa1.jpg', 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_plugin`
--

CREATE TABLE `blockcat_plugin` (
  `id` int(11) UNSIGNED NOT NULL COMMENT '自增id',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '插件标识',
  `title` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '插件名称',
  `hook` varchar(255) NOT NULL DEFAULT '' COMMENT '实现的钩子;以“,”分隔',
  `author` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '' COMMENT '插件作者',
  `desc` varchar(255) NOT NULL COMMENT '插件描述',
  `interface` tinyint(3) UNSIGNED NOT NULL DEFAULT '0' COMMENT '是否有后台管理,0:没有;1:有',
  `config` text COMMENT '插件配置',
  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0' COMMENT '插件安装时间',
  `update_time` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='插件表';

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_product`
--

CREATE TABLE `blockcat_product` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `cate_id` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '品牌ID',
  `price` decimal(8,2) UNSIGNED NOT NULL DEFAULT '0.00' COMMENT '当前价值',
  `owner_mid` int(10) UNSIGNED DEFAULT '0' COMMENT '购买者',
  `transferor_mid` int(10) UNSIGNED DEFAULT '0' COMMENT '转让者',
  `status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '0为转让中，1为待购买，2为已购买（升值中），3已报废'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品表' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `blockcat_product`
--

INSERT INTO `blockcat_product` (`id`, `cate_id`, `price`, `owner_mid`, `transferor_mid`, `status`) VALUES
(1, 2, '101.00', 0, 0, 1),
(2, 2, '101.00', 0, 0, 1),
(3, 3, '301.00', 0, 0, 1),
(4, 3, '301.00', 0, 0, 1),
(5, 6, '301.00', 0, 0, 1),
(6, 6, '301.00', 0, 0, 1),
(7, 5, '901.00', 0, 0, 1),
(8, 5, '901.00', 0, 0, 1),
(9, 7, '901.00', 0, 0, 1),
(10, 7, '901.00', 0, 0, 1),
(13, 1, '901.00', 0, 0, 1),
(14, 1, '901.00', 0, 0, 1),
(17, 8, '2501.00', 0, 0, 1),
(18, 8, '2501.00', 0, 0, 1),
(19, 9, '2501.00', 0, 0, 1),
(20, 9, '2501.00', 0, 0, 1),
(21, 4, '6001.00', 0, 0, 1),
(22, 4, '6001.00', 0, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_product_adopt`
--

CREATE TABLE `blockcat_product_adopt` (
  `id` int(10) UNSIGNED NOT NULL,
  `mid` int(10) UNSIGNED DEFAULT '0' COMMENT '用户ID',
  `product_cateid` int(10) UNSIGNED DEFAULT '0' COMMENT '商品品牌ID',
  `product_id` int(10) UNSIGNED DEFAULT '0' COMMENT '商品ID',
  `integral` int(10) UNSIGNED DEFAULT '0' COMMENT '微分',
  `createtime` int(11) UNSIGNED DEFAULT '0',
  `isappo` tinyint(3) UNSIGNED DEFAULT '0' COMMENT '是否有预约0-没有，1-预约',
  `status` tinyint(3) UNSIGNED DEFAULT '1' COMMENT '0为购买失败，1为购买中，2为购买成功'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='购买排队表' ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_product_appointment`
--

CREATE TABLE `blockcat_product_appointment` (
  `id` int(10) UNSIGNED NOT NULL,
  `mid` int(10) UNSIGNED DEFAULT '0' COMMENT '用户ID',
  `product_cateid` int(10) UNSIGNED DEFAULT '0' COMMENT '商品品牌ID',
  `integral` int(10) UNSIGNED DEFAULT '0' COMMENT '微分',
  `createtime` int(11) UNSIGNED DEFAULT '0',
  `status` int(11) UNSIGNED DEFAULT '1' COMMENT '0为预约失败，1为预约中，2为预约成功'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品预约表' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `blockcat_product_appointment`
--

INSERT INTO `blockcat_product_appointment` (`id`, `mid`, `product_cateid`, `integral`, `createtime`, `status`) VALUES
(1, 3, 3, 4, 1561099075, 1);

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_product_cate`
--

CREATE TABLE `blockcat_product_cate` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `catename` varchar(255) DEFAULT NULL COMMENT '品牌名称',
  `thumb` varchar(255) DEFAULT '' COMMENT '图片',
  `minprice` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '最小价值',
  `maxprice` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '最大价值',
  `level_id` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '级别ID',
  `adopt_time` varchar(255) DEFAULT NULL COMMENT '购买时间',
  `appointment_integral` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '预约微分',
  `adopt_integral` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '购买微分',
  `cycle` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '购买周期',
  `figure` decimal(8,2) UNSIGNED NOT NULL DEFAULT '0.00' COMMENT '收益比例',
  `bst_currency` decimal(8,2) UNSIGNED NOT NULL DEFAULT '0.00' COMMENT 'BST虚拟币',
  `ocn_figure` decimal(8,2) UNSIGNED NOT NULL DEFAULT '0.00' COMMENT '可挖OCN幣收益比例',
  `isincome_transferred` tinyint(3) DEFAULT '0' COMMENT '开启收益转存',
  `isauto` tinyint(3) DEFAULT '1' COMMENT '开启自动分配领取',
  `sort` int(10) UNSIGNED DEFAULT '0' COMMENT '排序',
  `status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '0为禁用，1为正常，2-冻结'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='品牌表' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `blockcat_product_cate`
--

INSERT INTO `blockcat_product_cate` (`id`, `catename`, `thumb`, `minprice`, `maxprice`, `level_id`, `adopt_time`, `appointment_integral`, `adopt_integral`, `cycle`, `figure`, `bst_currency`, `ocn_figure`, `isincome_transferred`, `isauto`, `sort`, `status`) VALUES
(1, '章鱼', '/upload/admin/thumb/6c/9cf7a60dfb903c827deffbcc15c18604399864.png', 901, 2500, 3, '13:30 - 14:30', 12, 24, 5, '13.00', '0.00', '0.00', 0, 0, 1, 1),
(2, '海星', '/upload/admin/thumb/b2/20f926688765146181f68d9b7e4c3161e70c75.png', 101, 300, 1, '14:30 - 15:30', 2, 4, 7, '21.00', '0.00', '0.00', 0, 0, 2, 1),
(3, '招财鱼', '/upload/admin/thumb/08/935ee71b73efd9577236667db1dbc30ac6a523.png', 301, 900, 2, '16:00 - 17:00', 4, 8, 3, '9.00', '0.00', '0.00', 0, 0, 3, 1),
(4, '鲸鱼', '/upload/admin/thumb/dc/13f87db84323afb41d248c5b4b8e45bc96c74f.png', 6001, 15000, 5, '16:30 - 17:30', 25, 50, 20, '40.00', '0.00', '0.00', 0, 0, 4, 1),
(5, '电鳗', '/upload/admin/thumb/21/096de6f08fa14bfadef19a8dfc355c75b3901d.png', 901, 2500, 3, '17:00 - 18:00', 12, 24, 12, '21.00', '0.00', '0.00', 0, 0, 5, 1),
(6, '寄居蟹', '/upload/admin/thumb/36/ce55c4e127b39b4047e0f761ec941656470738.png', 301, 2500, 2, '19:00 - 20:00', 9, 18, 7, '18.00', '0.00', '0.00', 0, 0, 6, 1),
(7, '海龟', '/upload/admin/thumb/18/1989cf990cff5ee08d918be6e04084cb82cce5.png', 901, 2500, 3, '19:30 - 20:30', 7, 14, 1, '5.00', '0.00', '0.00', 0, 0, 7, 1),
(8, '鲨鱼', '/upload/admin/thumb/cd/819a9ca7b3c30aba1d5ff4cc04afd9058ab9b5.png', 2501, 6000, 4, '20:00 - 21:00', 20, 40, 12, '18.00', '0.00', '0.00', 0, 0, 8, 1),
(9, '海豚', '/upload/admin/thumb/c8/496fea62b3f45537aa4bdcea8e605dff80dcca.png', 2501, 6000, 4, '20:30 - 21:30', 15, 30, 7, '14.00', '0.00', '0.00', 0, 0, 9, 1);

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_product_level`
--

CREATE TABLE `blockcat_product_level` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'ID',
  `levelname` varchar(255) DEFAULT NULL COMMENT '等级名称',
  `level` int(5) DEFAULT NULL COMMENT '等级',
  `status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '0为禁用，1为正常'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='品牌等级表' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `blockcat_product_level`
--

INSERT INTO `blockcat_product_level` (`id`, `levelname`, `level`, `status`) VALUES
(1, '普通', 1, 1),
(2, '勇者', 2, 1),
(3, '史诗', 3, 1),
(4, '传说', 4, 1),
(5, '神话', 5, 1);

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_recharge_code`
--

CREATE TABLE `blockcat_recharge_code` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `rechargecode` varchar(255) DEFAULT NULL COMMENT '充值二维码',
  `createtime` int(11) UNSIGNED NOT NULL COMMENT '创建时间',
  `status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '1为正常，0为禁止'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='收款二维码' ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `blockcat_recharge_code`
--

INSERT INTO `blockcat_recharge_code` (`id`, `rechargecode`, `createtime`, `status`) VALUES
(24, '/upload/admin/thumb/6e/789a86a3484da025144448b17997276a244bfc.jpeg', 1561099297, 1);

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_route`
--

CREATE TABLE `blockcat_route` (
  `id` int(11) UNSIGNED NOT NULL,
  `full_url` varchar(255) NOT NULL DEFAULT '',
  `url` varchar(255) NOT NULL DEFAULT '',
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1启用-1禁用',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='路由设置';

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_slide`
--

CREATE TABLE `blockcat_slide` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '标识',
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1可用-1禁用',
  `desc` varchar(255) DEFAULT NULL,
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='幻灯片';

--
-- 转存表中的数据 `blockcat_slide`
--

INSERT INTO `blockcat_slide` (`id`, `title`, `name`, `status`, `desc`, `create_time`, `update_time`) VALUES
(1, '首页轮播', 'VAE_INDEX_SLIDE', 1, '首页轮播组。', 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_slide_info`
--

CREATE TABLE `blockcat_slide_info` (
  `id` int(11) UNSIGNED NOT NULL,
  `slide_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `title` varchar(225) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL DEFAULT '',
  `src` varchar(100) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1可用-1禁用',
  `order` int(11) NOT NULL DEFAULT '0',
  `create_time` int(11) NOT NULL DEFAULT '0',
  `update_time` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='幻灯片详情';

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_workorder`
--

CREATE TABLE `blockcat_workorder` (
  `id` int(10) UNSIGNED NOT NULL COMMENT '工单id',
  `mid` int(10) UNSIGNED DEFAULT '0' COMMENT '用户MID',
  `type` int(10) UNSIGNED DEFAULT NULL COMMENT '工单类型',
  `contact` varchar(32) DEFAULT NULL COMMENT '联系手机',
  `title` varchar(255) DEFAULT NULL COMMENT '工单标题',
  `screenshot` varchar(255) DEFAULT NULL COMMENT '截图',
  `content` text COMMENT '简要描述',
  `add_time` int(11) UNSIGNED NOT NULL COMMENT '提交时间',
  `status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '1为未审核，2已审核'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='工单反馈表' ROW_FORMAT=COMPACT;

--
-- 转存表中的数据 `blockcat_workorder`
--

INSERT INTO `blockcat_workorder` (`id`, `mid`, `type`, `contact`, `title`, `screenshot`, `content`, `add_time`, `status`) VALUES
(1, 3, 4, '1212', '1212', NULL, '121212', 1560955494, 2);

-- --------------------------------------------------------

--
-- 表的结构 `blockcat_workorder_type`
--

CREATE TABLE `blockcat_workorder_type` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `title` varchar(255) DEFAULT NULL COMMENT '工单类型',
  `is_uploadpictures` tinyint(3) DEFAULT '0' COMMENT '1为必须上传，0为不用上传',
  `status` tinyint(3) NOT NULL DEFAULT '1' COMMENT '1为正常，0为禁止'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='工单类型表' ROW_FORMAT=DYNAMIC;

--
-- 转存表中的数据 `blockcat_workorder_type`
--

INSERT INTO `blockcat_workorder_type` (`id`, `title`, `is_uploadpictures`, `status`) VALUES
(1, '購買問題', 1, 1),
(2, '充值問題', 1, 1),
(3, '賬戶問題', 0, 1),
(4, '其它問題', 0, 1),
(5, '實名問題', 1, 1),
(6, '社區活動', 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blockcat_admin`
--
ALTER TABLE `blockcat_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`id`,`username`) USING BTREE;

--
-- Indexes for table `blockcat_admin_group`
--
ALTER TABLE `blockcat_admin_group`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`) USING BTREE;

--
-- Indexes for table `blockcat_admin_group_access`
--
ALTER TABLE `blockcat_admin_group_access`
  ADD UNIQUE KEY `uid_group_id` (`uid`,`group_id`) USING BTREE;

--
-- Indexes for table `blockcat_admin_menu`
--
ALTER TABLE `blockcat_admin_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blockcat_admin_rule`
--
ALTER TABLE `blockcat_admin_rule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`) USING BTREE;

--
-- Indexes for table `blockcat_article`
--
ALTER TABLE `blockcat_article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blockcat_article_cate`
--
ALTER TABLE `blockcat_article_cate`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`,`pid`) USING BTREE;

--
-- Indexes for table `blockcat_hook`
--
ALTER TABLE `blockcat_hook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blockcat_hook_plugin`
--
ALTER TABLE `blockcat_hook_plugin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blockcat_member`
--
ALTER TABLE `blockcat_member`
  ADD PRIMARY KEY (`mid`),
  ADD KEY `account` (`account`) USING BTREE,
  ADD KEY `spreadmid` (`parent_mid`) USING BTREE,
  ADD KEY `status` (`status`) USING BTREE,
  ADD KEY `is_idverifly` (`is_idverifly`) USING BTREE,
  ADD KEY `parent_mid` (`parent_mid`) USING BTREE,
  ADD KEY `is_promoter` (`is_promoter`) USING BTREE,
  ADD KEY `is_activation` (`is_activation`) USING BTREE,
  ADD KEY `add_time` (`add_time`) USING BTREE,
  ADD KEY `last_time` (`last_time`) USING BTREE;

--
-- Indexes for table `blockcat_member_assetsalelog`
--
ALTER TABLE `blockcat_member_assetsalelog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mid` (`mid`) USING BTREE,
  ADD KEY `status` (`status`) USING BTREE,
  ADD KEY `type` (`type`) USING BTREE,
  ADD KEY `createtime` (`createtime`) USING BTREE;

--
-- Indexes for table `blockcat_member_currencylog`
--
ALTER TABLE `blockcat_member_currencylog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mid` (`mid`),
  ADD KEY `type` (`type`),
  ADD KEY `createtime` (`createtime`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `blockcat_member_incomelog`
--
ALTER TABLE `blockcat_member_incomelog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mid` (`mid`),
  ADD KEY `createtime` (`createtime`),
  ADD KEY `status` (`status`),
  ADD KEY `type` (`type`) USING BTREE;

--
-- Indexes for table `blockcat_member_integrallog`
--
ALTER TABLE `blockcat_member_integrallog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mid` (`mid`),
  ADD KEY `other_mid` (`other_mid`),
  ADD KEY `type` (`type`),
  ADD KEY `createtime` (`createtime`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `blockcat_member_level`
--
ALTER TABLE `blockcat_member_level`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blockcat_member_notice`
--
ALTER TABLE `blockcat_member_notice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`) USING BTREE;

--
-- Indexes for table `blockcat_member_rechargelog`
--
ALTER TABLE `blockcat_member_rechargelog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mid` (`mid`) USING BTREE,
  ADD KEY `status` (`status`) USING BTREE,
  ADD KEY `createtime` (`createtime`) USING BTREE;

--
-- Indexes for table `blockcat_nav`
--
ALTER TABLE `blockcat_nav`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blockcat_nav_info`
--
ALTER TABLE `blockcat_nav_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blockcat_notice`
--
ALTER TABLE `blockcat_notice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`) USING BTREE;

--
-- Indexes for table `blockcat_order`
--
ALTER TABLE `blockcat_order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mid` (`mid`) USING BTREE,
  ADD KEY `seller_mid` (`seller_mid`) USING BTREE,
  ADD KEY `ordersn` (`ordersn`) USING BTREE,
  ADD KEY `income_status` (`income_status`) USING BTREE,
  ADD KEY `status` (`status`) USING BTREE,
  ADD KEY `product_id` (`product_id`) USING BTREE,
  ADD KEY `createtime` (`createtime`) USING BTREE,
  ADD KEY `paytime` (`paytime`) USING BTREE,
  ADD KEY `audittime` (`audittime`) USING BTREE,
  ADD KEY `incometime` (`incometime`) USING BTREE,
  ADD KEY `canceltime` (`canceltime`) USING BTREE,
  ADD KEY `is_complaint` (`is_complaint`) USING BTREE;

--
-- Indexes for table `blockcat_order_complaint`
--
ALTER TABLE `blockcat_order_complaint`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mid` (`mid`) USING BTREE,
  ADD KEY `orderid` (`orderid`) USING BTREE,
  ADD KEY `status` (`status`) USING BTREE,
  ADD KEY `createtime` (`createtime`) USING BTREE;

--
-- Indexes for table `blockcat_payment_method`
--
ALTER TABLE `blockcat_payment_method`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mid` (`mid`) USING BTREE,
  ADD KEY `type` (`type`) USING BTREE,
  ADD KEY `status` (`status`) USING BTREE,
  ADD KEY `add_time` (`add_time`) USING BTREE;

--
-- Indexes for table `blockcat_payment_type`
--
ALTER TABLE `blockcat_payment_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`) USING BTREE;

--
-- Indexes for table `blockcat_plugin`
--
ALTER TABLE `blockcat_plugin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blockcat_product`
--
ALTER TABLE `blockcat_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cate_id` (`cate_id`) USING BTREE,
  ADD KEY `status` (`status`) USING BTREE,
  ADD KEY `owner_mid` (`owner_mid`) USING BTREE,
  ADD KEY `transferor_mid` (`transferor_mid`) USING BTREE;

--
-- Indexes for table `blockcat_product_adopt`
--
ALTER TABLE `blockcat_product_adopt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mid` (`mid`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `createtime` (`createtime`),
  ADD KEY `status` (`status`),
  ADD KEY `product_cateid` (`product_cateid`) USING BTREE,
  ADD KEY `isappo` (`isappo`) USING BTREE;

--
-- Indexes for table `blockcat_product_appointment`
--
ALTER TABLE `blockcat_product_appointment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mid` (`mid`),
  ADD KEY `createtime` (`createtime`),
  ADD KEY `status` (`status`),
  ADD KEY `product_cateid` (`product_cateid`) USING BTREE;

--
-- Indexes for table `blockcat_product_cate`
--
ALTER TABLE `blockcat_product_cate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`) USING BTREE;

--
-- Indexes for table `blockcat_product_level`
--
ALTER TABLE `blockcat_product_level`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`) USING BTREE;

--
-- Indexes for table `blockcat_recharge_code`
--
ALTER TABLE `blockcat_recharge_code`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`) USING BTREE;

--
-- Indexes for table `blockcat_route`
--
ALTER TABLE `blockcat_route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blockcat_slide`
--
ALTER TABLE `blockcat_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blockcat_slide_info`
--
ALTER TABLE `blockcat_slide_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blockcat_workorder`
--
ALTER TABLE `blockcat_workorder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`) USING BTREE,
  ADD KEY `status` (`status`) USING BTREE;

--
-- Indexes for table `blockcat_workorder_type`
--
ALTER TABLE `blockcat_workorder_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `status` (`status`) USING BTREE;

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `blockcat_admin`
--
ALTER TABLE `blockcat_admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- 使用表AUTO_INCREMENT `blockcat_admin_group`
--
ALTER TABLE `blockcat_admin_group`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用表AUTO_INCREMENT `blockcat_admin_menu`
--
ALTER TABLE `blockcat_admin_menu`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- 使用表AUTO_INCREMENT `blockcat_admin_rule`
--
ALTER TABLE `blockcat_admin_rule`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=219;

--
-- 使用表AUTO_INCREMENT `blockcat_article`
--
ALTER TABLE `blockcat_article`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `blockcat_article_cate`
--
ALTER TABLE `blockcat_article_cate`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `blockcat_hook`
--
ALTER TABLE `blockcat_hook`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用表AUTO_INCREMENT `blockcat_hook_plugin`
--
ALTER TABLE `blockcat_hook_plugin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `blockcat_member`
--
ALTER TABLE `blockcat_member`
  MODIFY `mid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '用户id', AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `blockcat_member_assetsalelog`
--
ALTER TABLE `blockcat_member_assetsalelog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id';

--
-- 使用表AUTO_INCREMENT `blockcat_member_currencylog`
--
ALTER TABLE `blockcat_member_currencylog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `blockcat_member_incomelog`
--
ALTER TABLE `blockcat_member_incomelog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `blockcat_member_integrallog`
--
ALTER TABLE `blockcat_member_integrallog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用表AUTO_INCREMENT `blockcat_member_level`
--
ALTER TABLE `blockcat_member_level`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `blockcat_member_notice`
--
ALTER TABLE `blockcat_member_notice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id';

--
-- 使用表AUTO_INCREMENT `blockcat_member_rechargelog`
--
ALTER TABLE `blockcat_member_rechargelog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id';

--
-- 使用表AUTO_INCREMENT `blockcat_nav`
--
ALTER TABLE `blockcat_nav`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `blockcat_nav_info`
--
ALTER TABLE `blockcat_nav_info`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `blockcat_notice`
--
ALTER TABLE `blockcat_notice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=8;

--
-- 使用表AUTO_INCREMENT `blockcat_order`
--
ALTER TABLE `blockcat_order`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID';

--
-- 使用表AUTO_INCREMENT `blockcat_order_complaint`
--
ALTER TABLE `blockcat_order_complaint`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID';

--
-- 使用表AUTO_INCREMENT `blockcat_payment_method`
--
ALTER TABLE `blockcat_payment_method`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `blockcat_payment_type`
--
ALTER TABLE `blockcat_payment_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `blockcat_plugin`
--
ALTER TABLE `blockcat_plugin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '自增id';

--
-- 使用表AUTO_INCREMENT `blockcat_product`
--
ALTER TABLE `blockcat_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=23;

--
-- 使用表AUTO_INCREMENT `blockcat_product_adopt`
--
ALTER TABLE `blockcat_product_adopt`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `blockcat_product_appointment`
--
ALTER TABLE `blockcat_product_appointment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `blockcat_product_cate`
--
ALTER TABLE `blockcat_product_cate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=10;

--
-- 使用表AUTO_INCREMENT `blockcat_product_level`
--
ALTER TABLE `blockcat_product_level`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `blockcat_recharge_code`
--
ALTER TABLE `blockcat_recharge_code`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=25;

--
-- 使用表AUTO_INCREMENT `blockcat_route`
--
ALTER TABLE `blockcat_route`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `blockcat_slide`
--
ALTER TABLE `blockcat_slide`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `blockcat_slide_info`
--
ALTER TABLE `blockcat_slide_info`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- 使用表AUTO_INCREMENT `blockcat_workorder`
--
ALTER TABLE `blockcat_workorder`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '工单id', AUTO_INCREMENT=2;

--
-- 使用表AUTO_INCREMENT `blockcat_workorder_type`
--
ALTER TABLE `blockcat_workorder_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
