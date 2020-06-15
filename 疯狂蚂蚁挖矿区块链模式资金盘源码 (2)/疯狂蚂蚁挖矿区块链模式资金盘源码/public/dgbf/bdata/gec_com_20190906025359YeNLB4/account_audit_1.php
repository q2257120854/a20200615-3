<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `account_audit`;");
E_C("CREATE TABLE `account_audit` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '0：未通过，1：已通过',
  `username` char(11) NOT NULL COMMENT '登录账号',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `update_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `status` (`status`),
  KEY `create_at` (`create_at`),
  KEY `update_at` (`update_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='账户审核'");

require("../../inc/footer.php");
?>