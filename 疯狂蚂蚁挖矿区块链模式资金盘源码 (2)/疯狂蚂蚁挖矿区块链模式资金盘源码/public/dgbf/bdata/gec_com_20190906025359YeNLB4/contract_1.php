<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `contract`;");
E_C("CREATE TABLE `contract` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `sort` int(11) NOT NULL DEFAULT '0' COMMENT '排列顺序',
  `visible` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否可见，1：可见，0：隐藏',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '状态，1：空闲，2：有主，3：瓜分',
  `agent` char(11) DEFAULT NULL COMMENT '代理商',
  `owner` char(11) DEFAULT NULL COMMENT '归属人',
  `catalog` tinyint(4) NOT NULL DEFAULT '1' COMMENT '项目分类',
  `title` varchar(50) NOT NULL COMMENT '合约名称',
  `image` varchar(100) NOT NULL COMMENT '合约图片',
  `content` text COMMENT '合约介绍',
  `base_price` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '基础价格',
  `now_price` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '当前价格',
  `inc` decimal(30,12) NOT NULL DEFAULT '1.000000000000' COMMENT '增幅比例',
  `charge` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '手续费比例',
  `loop` int(11) NOT NULL DEFAULT '1' COMMENT '当前第几轮',
  `profit` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '每秒收益',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `update_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `agent` (`agent`),
  KEY `owner` (`owner`),
  KEY `create_at` (`create_at`),
  KEY `update_at` (`update_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='合约'");

require("../../inc/footer.php");
?>