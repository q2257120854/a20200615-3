<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `upgrade`;");
E_C("CREATE TABLE `upgrade` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `username` char(11) NOT NULL COMMENT '用户账户',
  `level` tinyint(4) NOT NULL DEFAULT '1' COMMENT '具体级别',
  `money` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '赠送的可用货币',
  `machine` text COMMENT '赠送的矿机',
  `power` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '赠送的算力',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username_level` (`username`,`level`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='升级'");

require("../../inc/footer.php");
?>