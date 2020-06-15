<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `funding`;");
E_C("CREATE TABLE `funding` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排列顺序',
  `visible` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否可见，1：可见，0：隐藏',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '类型，1：普通项目，8：官方项目',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态，1：进行中，2：审核中，3：已结束',
  `currency` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1：可用资金，8：RMB',
  `owner` char(11) DEFAULT NULL COMMENT '项目归属人',
  `catalog` tinyint(4) NOT NULL DEFAULT '1' COMMENT '项目分类',
  `title` varchar(50) NOT NULL COMMENT '项目名称',
  `image` varchar(100) NOT NULL COMMENT '项目图片',
  `content` text COMMENT '项目介绍',
  `target` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '目标金额',
  `current` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '当前金额',
  `people` int(11) NOT NULL DEFAULT '0' COMMENT '参与人数',
  `count` int(11) NOT NULL DEFAULT '0' COMMENT '参与次数',
  `expire_at` timestamp NULL DEFAULT NULL COMMENT '到期时间',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `update_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `sort` (`sort`),
  KEY `visible` (`visible`),
  KEY `type` (`type`),
  KEY `status` (`status`),
  KEY `owner` (`owner`),
  KEY `catalog` (`catalog`),
  KEY `title` (`title`),
  KEY `people` (`people`),
  KEY `count` (`count`),
  KEY `create_at` (`create_at`),
  KEY `update_at` (`update_at`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='众筹'");

require("../../inc/footer.php");
?>