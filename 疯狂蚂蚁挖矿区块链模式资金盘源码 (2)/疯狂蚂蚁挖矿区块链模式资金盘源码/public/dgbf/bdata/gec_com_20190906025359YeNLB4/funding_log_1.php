<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `funding_log`;");
E_C("CREATE TABLE `funding_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `fid` int(11) NOT NULL COMMENT '项目编号',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '类型，1：普通项目，8：官方项目',
  `currency` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1：可用资金，8：RMB',
  `action` tinyint(4) NOT NULL DEFAULT '1' COMMENT '操作类型，1：投资，8：结束',
  `username` char(11) DEFAULT NULL COMMENT '用户账号',
  `money` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '投资金额',
  `charge` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '手续费',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `update_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `type` (`type`),
  KEY `action` (`action`),
  KEY `username` (`username`),
  KEY `money` (`money`),
  KEY `create_at` (`create_at`),
  KEY `update_at` (`update_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='众筹记录'");

require("../../inc/footer.php");
?>