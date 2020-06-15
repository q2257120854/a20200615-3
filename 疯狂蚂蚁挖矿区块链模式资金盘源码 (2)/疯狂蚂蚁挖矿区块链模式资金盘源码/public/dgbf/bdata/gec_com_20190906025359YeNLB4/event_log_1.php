<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `event_log`;");
E_C("CREATE TABLE `event_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `username` char(11) NOT NULL COMMENT '用户账号',
  `type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '类型，1：刮刮卡',
  `status` tinyint(4) NOT NULL DEFAULT '0' COMMENT '状态，0：待提货，1：已发货，2：待发货',
  `hit` tinyint(4) NOT NULL DEFAULT '0' COMMENT '是否中奖，0：没有，1：中奖',
  `reward` int(11) NOT NULL DEFAULT '0' COMMENT '中的具体奖品的编号',
  `reward_type` tinyint(4) NOT NULL DEFAULT '0' COMMENT '奖品类型，1：矿机，2：实物，3：话费',
  `receive` text COMMENT '收货地址信息',
  `send` text COMMENT '发货信息',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `update_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `username` (`username`),
  KEY `type` (`type`),
  KEY `status` (`status`),
  KEY `hit` (`hit`),
  KEY `reward` (`reward`),
  KEY `reward_type` (`reward_type`),
  KEY `create_at` (`create_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='活动记录'");

require("../../inc/footer.php");
?>