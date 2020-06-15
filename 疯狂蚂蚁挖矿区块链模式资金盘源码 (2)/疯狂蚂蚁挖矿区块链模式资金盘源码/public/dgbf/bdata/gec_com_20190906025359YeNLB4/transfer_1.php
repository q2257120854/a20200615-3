<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `transfer`;");
E_C("CREATE TABLE `transfer` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `tid` char(10) NOT NULL COMMENT '订单编号',
  `owner` char(11) NOT NULL COMMENT '自己的账号',
  `target` char(11) DEFAULT NULL COMMENT '对方的账号',
  `number` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '数量',
  `charge` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '手续费',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `update_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `tid` (`tid`),
  KEY `owner` (`owner`),
  KEY `target` (`target`),
  KEY `create_at` (`create_at`),
  KEY `update_at` (`update_at`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='转账'");

require("../../inc/footer.php");
?>