<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `global_bonus`;");
E_C("CREATE TABLE `global_bonus` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `date` date NOT NULL COMMENT '具体日期',
  `charge` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '本次手续费',
  `rate` text NOT NULL COMMENT '各级别的比例配置',
  `people` int(11) NOT NULL DEFAULT '0' COMMENT '总发放人数',
  `money` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '总发放金额',
  `lv0` text COMMENT 'lv0的情况',
  `lv1` text COMMENT 'lv1的情况',
  `lv2` text COMMENT 'lv2的情况',
  `lv3` text COMMENT 'lv3的情况',
  `lv4` text COMMENT 'lv4的情况',
  `lv5` text COMMENT 'lv5的情况',
  `lv6` text COMMENT 'lv6的情况',
  `lv7` text COMMENT 'lv7的情况',
  `lv8` text COMMENT 'lv8的情况',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `update_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `date` (`date`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='全球分红'");

require("../../inc/footer.php");
?>