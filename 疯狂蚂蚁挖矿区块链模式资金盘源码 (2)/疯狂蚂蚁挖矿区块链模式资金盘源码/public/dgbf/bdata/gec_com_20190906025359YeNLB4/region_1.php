<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `region`;");
E_C("CREATE TABLE `region` (
  `code` int(11) NOT NULL COMMENT '地区编码',
  `type` tinyint(4) NOT NULL DEFAULT '3' COMMENT '类型，1省，2市，3区',
  `province` int(11) DEFAULT NULL COMMENT '省编码',
  `province_name` varchar(30) DEFAULT NULL COMMENT '省名字',
  `city` int(11) DEFAULT NULL COMMENT '市编码',
  `city_name` varchar(30) DEFAULT NULL COMMENT '市名字',
  `name` varchar(30) DEFAULT NULL COMMENT '地区名字',
  `address` varchar(90) DEFAULT NULL COMMENT '完整地区',
  PRIMARY KEY (`code`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='地区'");

require("../../inc/footer.php");
?>