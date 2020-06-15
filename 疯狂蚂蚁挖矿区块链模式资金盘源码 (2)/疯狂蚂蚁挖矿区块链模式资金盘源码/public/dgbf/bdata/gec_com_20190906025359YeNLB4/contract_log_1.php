<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `contract_log`;");
E_C("CREATE TABLE `contract_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `cid` int(11) NOT NULL COMMENT '具体合约的编号',
  `username` char(11) NOT NULL COMMENT '用户账号',
  `action` tinyint(4) NOT NULL DEFAULT '1' COMMENT '动作类型，很重要',
  `loop` int(11) NOT NULL DEFAULT '0' COMMENT '当前操作是在第几轮执行的',
  `money` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '本次操作花的钱，或是赚的钱',
  `charge` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '本次操作的手续费',
  `target` char(11) DEFAULT NULL COMMENT '转让对象的账号',
  `ratio` float NOT NULL DEFAULT '0' COMMENT '涨跌比例',
  `remark` text COMMENT '备注信息',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `cid` (`cid`),
  KEY `username` (`username`),
  KEY `loop` (`loop`),
  KEY `action` (`action`),
  KEY `target` (`target`),
  KEY `ratio` (`ratio`),
  KEY `create_at` (`create_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='合约记录'");

require("../../inc/footer.php");
?>