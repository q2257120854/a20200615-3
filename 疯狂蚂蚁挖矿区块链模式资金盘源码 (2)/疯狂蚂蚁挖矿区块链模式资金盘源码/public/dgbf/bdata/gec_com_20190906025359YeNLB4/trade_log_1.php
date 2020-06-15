<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `trade_log`;");
E_C("CREATE TABLE `trade_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `tid` char(10) NOT NULL COMMENT '订单编号',
  `secret` char(10) NOT NULL COMMENT '暗号',
  `command` tinyint(4) NOT NULL DEFAULT '1' COMMENT '命令，此次执行的具体操作',
  `username` char(11) NOT NULL COMMENT '用户账号',
  `content` text COMMENT '内容，如文字或图片',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `tid` (`tid`),
  KEY `secret` (`secret`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='交易记录'");

require("../../inc/footer.php");
?>