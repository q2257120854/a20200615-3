<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `contract_percent`;");
E_C("CREATE TABLE `contract_percent` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `cid` int(11) NOT NULL COMMENT '具体合约的编号',
  `username` char(11) NOT NULL COMMENT '用户账号',
  `loop` int(11) NOT NULL DEFAULT '1' COMMENT '哪一轮买入的',
  `ratio` float NOT NULL DEFAULT '0' COMMENT '所占比例',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `update_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `cid_username_loop` (`cid`,`username`,`loop`),
  KEY `cid` (`cid`),
  KEY `username` (`username`),
  KEY `loop` (`loop`),
  KEY `ratio` (`ratio`),
  KEY `create_at` (`create_at`),
  KEY `update_at` (`update_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='合约比例'");

require("../../inc/footer.php");
?>