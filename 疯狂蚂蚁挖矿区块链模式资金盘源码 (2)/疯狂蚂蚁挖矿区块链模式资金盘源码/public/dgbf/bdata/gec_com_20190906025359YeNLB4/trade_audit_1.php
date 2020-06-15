<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `trade_audit`;");
E_C("CREATE TABLE `trade_audit` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `tid` char(10) NOT NULL COMMENT '订单编号',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态，1：通过，0：待审核',
  `remark` text COMMENT '备注',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `update_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `tid` (`tid`),
  KEY `status` (`status`),
  KEY `create_at` (`create_at`),
  KEY `update_at` (`update_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='交易审核'");

require("../../inc/footer.php");
?>