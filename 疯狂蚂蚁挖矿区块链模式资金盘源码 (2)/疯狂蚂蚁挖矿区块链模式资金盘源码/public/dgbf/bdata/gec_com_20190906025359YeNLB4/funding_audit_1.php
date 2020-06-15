<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `funding_audit`;");
E_C("CREATE TABLE `funding_audit` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `fid` int(11) NOT NULL COMMENT '项目编号',
  `username` char(11) DEFAULT NULL COMMENT '用户账号',
  `money` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '投资金额',
  `price` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '手续费',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `update_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  `status` tinyint(1) DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fid` (`fid`),
  KEY `username` (`username`),
  KEY `money` (`money`),
  KEY `create_at` (`create_at`),
  KEY `update_at` (`update_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='内排审核'");

require("../../inc/footer.php");
?>