<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `trade`;");
E_C("CREATE TABLE `trade` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `tid` char(10) NOT NULL COMMENT '订单编号',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '类型，1：买入，2：出售',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态，0：失败，1：匹配中，2：待付款，3：待确认，8：成功，4：投诉中',
  `number` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '数量',
  `price` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '价格',
  `charge` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '手续费',
  `owner` char(11) NOT NULL COMMENT '自己的账号',
  `target` char(11) DEFAULT NULL COMMENT '对方的账号',
  `secret` char(10) DEFAULT NULL COMMENT '当前暗号，三十六进制的当前时间戳，每次别人退出交易后更新暗号',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `update_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  `pzimg` varchar(255) DEFAULT NULL,
  `pztime` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tid` (`tid`),
  KEY `owner` (`owner`),
  KEY `target` (`target`),
  KEY `type` (`type`),
  KEY `status` (`status`),
  KEY `create_at` (`create_at`),
  KEY `update_at` (`update_at`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='交易'");
E_D("replace into `trade` values('1',0x49373236323532383139,'1','1','3.000000000000','1.000000000000','0.900000000000',0x3138383838383838383838,NULL,0x505132323151,'2019-04-16 21:13:02','2019-04-16 21:13:02',NULL,NULL);");
E_D("replace into `trade` values('2',0x43333533373832393030,'1','1','3.000000000000','1.000000000000','0.900000000000',0x3138383838383838383838,NULL,0x505132323254,'2019-04-16 21:13:41','2019-04-16 21:13:41',NULL,NULL);");

require("../../inc/footer.php");
?>