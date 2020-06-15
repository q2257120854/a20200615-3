<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `article`;");
E_C("CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排列顺序',
  `top` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否置顶',
  `type` tinyint(4) DEFAULT NULL COMMENT '文章类型，1：新闻，8：帮助',
  `title` varchar(100) NOT NULL COMMENT '标题',
  `image` varchar(100) DEFAULT NULL COMMENT '缩略图',
  `content` text NOT NULL COMMENT '内容',
  `date` timestamp NULL DEFAULT NULL COMMENT '显示的时间',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `update_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='文章'");

require("../../inc/footer.php");
?>