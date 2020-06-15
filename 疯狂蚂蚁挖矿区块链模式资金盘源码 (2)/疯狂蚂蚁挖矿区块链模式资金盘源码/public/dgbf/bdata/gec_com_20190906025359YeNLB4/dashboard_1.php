<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `dashboard`;");
E_C("CREATE TABLE `dashboard` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `username` char(11) NOT NULL COMMENT '用户账户',
  `power` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '个人算力（包含个人、矿机、团队等所有）',
  `team_power` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '团队算力',
  `team_count` int(11) NOT NULL DEFAULT '0' COMMENT '团队总人数',
  `authen` int(11) NOT NULL DEFAULT '0' COMMENT '实名认证人数',
  `machine_count` int(11) NOT NULL DEFAULT '0' COMMENT '矿机数量',
  `machine_power` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '矿机算力',
  `machine_expire` int(11) NOT NULL DEFAULT '0' COMMENT '过期矿机数量',
  `one` int(11) NOT NULL DEFAULT '0' COMMENT '1代数量',
  `two` int(11) NOT NULL DEFAULT '0' COMMENT '2代数量',
  `three` int(11) NOT NULL DEFAULT '0' COMMENT '3代数量',
  `four` int(11) NOT NULL DEFAULT '0' COMMENT '4代数量',
  `five` int(11) NOT NULL DEFAULT '0' COMMENT '5代数量',
  `six` int(11) NOT NULL DEFAULT '0' COMMENT '6代数量',
  `seven` int(11) NOT NULL DEFAULT '0' COMMENT '7代数量',
  `eight` int(11) NOT NULL DEFAULT '0' COMMENT '8代数量',
  `lv0` int(11) NOT NULL DEFAULT '0' COMMENT '未认证用户数量',
  `lv1` int(11) NOT NULL DEFAULT '0' COMMENT '1级用户数量',
  `lv2` int(11) NOT NULL DEFAULT '0' COMMENT '2级用户数量',
  `lv3` int(11) NOT NULL DEFAULT '0' COMMENT '3级用户数量',
  `lv4` int(11) NOT NULL DEFAULT '0' COMMENT '4级用户数量',
  `lv5` int(11) NOT NULL DEFAULT '0' COMMENT '5级用户数量',
  `lv6` int(11) NOT NULL DEFAULT '0' COMMENT '6级用户数量',
  `lv7` int(11) NOT NULL DEFAULT '0' COMMENT '7级用户数量',
  `lv8` int(11) NOT NULL DEFAULT '0' COMMENT '8级用户数量',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `update_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='仪表盘'");
E_D("replace into `dashboard` values('1',0x3138383838383838383838,'16.000000000000','0.000000000000','3','0','5','16.000000000000','0','3','0','0','0','0','0','0','0','3','0','0','0','0','0','0','0','0','2019-04-15 23:11:44','2019-06-23 14:03:43');");
E_D("replace into `dashboard` values('2',0x3133353838393637333034,'8.000000000000','0.000000000000','0','0','6','8.000000000000','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','2019-04-17 01:51:33','2019-04-17 01:51:33');");
E_D("replace into `dashboard` values('3',0x3135383231383939313034,'8.000000000000','0.000000000000','0','0','6','8.000000000000','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','2019-04-17 03:05:51','2019-04-17 03:05:51');");
E_D("replace into `dashboard` values('4',0x3138303035313531353338,'3.000000000000','0.000000000000','0','0','3','3.000000000000','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','0','2019-06-23 14:03:43','2019-06-23 14:03:43');");

require("../../inc/footer.php");
?>