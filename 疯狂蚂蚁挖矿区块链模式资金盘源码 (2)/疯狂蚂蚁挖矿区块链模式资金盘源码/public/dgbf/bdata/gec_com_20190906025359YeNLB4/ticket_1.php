<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ticket`;");
E_C("CREATE TABLE `ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `type` char(10) NOT NULL DEFAULT '1' COMMENT '券的类型，1：注册，Mxx开头为矿机购买',
  `username` char(11) DEFAULT NULL COMMENT '使用者账号',
  `token` char(32) NOT NULL COMMENT '具体票券',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `update_at` timestamp NULL DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `token` (`token`),
  KEY `type` (`type`),
  KEY `username` (`username`),
  KEY `create_at` (`create_at`),
  KEY `update_at` (`update_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='票券'");

require("../../inc/footer.php");
?>