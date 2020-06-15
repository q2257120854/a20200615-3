<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `order`;");
E_C("CREATE TABLE `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `oid` char(10) NOT NULL COMMENT '订单编号',
  `status` tinyint(4) DEFAULT '2' COMMENT '状态，1：正常（已发货），0：失败，2：待发货，3：待确认',
  `seller` char(11) DEFAULT NULL COMMENT '卖家账号',
  `buyer` char(11) NOT NULL COMMENT '买家账号',
  `product` int(11) NOT NULL COMMENT '产品编号',
  `title` varchar(30) NOT NULL COMMENT '产品名称',
  `currency` tinyint(4) NOT NULL DEFAULT '1' COMMENT '支付的货币类型',
  `price` decimal(30,12) NOT NULL COMMENT '价格',
  `charge` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '手续费',
  `code` char(32) DEFAULT NULL COMMENT '激活码',
  `power` decimal(30,12) NOT NULL COMMENT '奖励算力',
  `address` text COMMENT '收货地址',
  `express` text COMMENT '快递信息',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `update_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  `tprice` decimal(10,2) NOT NULL COMMENT '今日市价',
  PRIMARY KEY (`id`),
  UNIQUE KEY `oid` (`oid`),
  KEY `status` (`status`),
  KEY `seller` (`seller`),
  KEY `buyer` (`buyer`),
  KEY `product` (`product`),
  KEY `create_at` (`create_at`),
  KEY `update_at` (`update_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商城订单'");

require("../../inc/footer.php");
?>