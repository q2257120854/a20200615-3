<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `pool`;");
E_C("CREATE TABLE `pool` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `username` char(11) NOT NULL COMMENT '用户账号',
  `action` tinyint(4) NOT NULL DEFAULT '0' COMMENT '类型，1：领取收益，2：使用道具，3：加入矿池',
  `power` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '当前的算力是多少，使用道具之前的',
  `prop` varchar(30) DEFAULT NULL COMMENT '当前使用的道具名称',
  `spend` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '花费了多少',
  `reward` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '奖励了多少',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `action` (`action`),
  KEY `prop` (`prop`),
  KEY `create_at` (`create_at`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='共享矿池'");

require("../../inc/footer.php");
?>