<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `imtoken`;");
E_C("CREATE TABLE `imtoken` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `tid` char(10) NOT NULL COMMENT '订单编号',
  `type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1充值，2提现',
  `status` tinyint(4) NOT NULL DEFAULT '2' COMMENT '1成功，2待审核，0失败',
  `username` char(11) NOT NULL COMMENT '自己的账号',
  `number` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '数量',
  `charge` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '手续费',
  `address` varchar(100) DEFAULT NULL COMMENT '我的钱包地址',
  `qrcode` varchar(100) DEFAULT NULL COMMENT '我的钱包二维码',
  `certificate` text COMMENT '凭证，图片列表',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `update_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `tid` (`tid`),
  KEY `type` (`type`),
  KEY `status` (`status`),
  KEY `username` (`username`),
  KEY `create_at` (`create_at`),
  KEY `update_at` (`update_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='imtoken'");

require("../../inc/footer.php");
?>