<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `store`;");
E_C("CREATE TABLE `store` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `sort` int(11) DEFAULT '0' COMMENT '排列顺序，数字越大越靠前',
  `status` tinyint(4) DEFAULT '1' COMMENT '状态，1：在售，0：停售',
  `audit` tinyint(4) DEFAULT '1' COMMENT '审核，1：通过，0：待审核',
  `catalog` tinyint(4) NOT NULL DEFAULT '1' COMMENT '类目，1：矿机',
  `username` char(11) DEFAULT NULL COMMENT '用户账号，为空表示管理员发布',
  `divide` tinyint(4) DEFAULT '0' COMMENT '级别，0：仅自己收益，1：1级也能获益，2：2级也能获益，以此类推',
  `title` varchar(30) NOT NULL COMMENT '产品名称',
  `image` varchar(100) DEFAULT NULL COMMENT '产品图片',
  `cycle` int(11) NOT NULL COMMENT '周期，单位小时',
  `income` decimal(30,12) NOT NULL COMMENT '预计收益',
  `power` decimal(30,12) NOT NULL COMMENT '奖励的算力',
  `price` decimal(30,12) NOT NULL COMMENT '价格',
  `price_score` decimal(30,12) NOT NULL DEFAULT '0.000000000000' COMMENT '积分价格',
  `limit` int(11) DEFAULT '0' COMMENT '每人限购，0为不限制',
  `day` int(11) DEFAULT '0' COMMENT '每天限购，0为不限制',
  `sales` int(11) DEFAULT '0' COMMENT '销量',
  `stock` int(11) DEFAULT '0' COMMENT '库存',
  `content` text COMMENT '产品介绍',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `update_at` timestamp NULL DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `username` (`username`),
  KEY `divide` (`divide`),
  KEY `title` (`title`),
  KEY `create_at` (`create_at`),
  KEY `update_at` (`update_at`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='商城表'");
E_D("replace into `store` values('1','6','1','1','1',NULL,'5',0x4c7631e89a81e5908e,0x32303139303431362f31663735356466623537313537373837626438623566303330303431623034662e706e67,'1440','15.000000000000','1.000000000000','10.000000000000','0.000000000000','20','0','109','99891',NULL,'2018-11-07 09:48:43','2019-04-16 21:06:43');");
E_D("replace into `store` values('2','5','1','1','1',NULL,'5',0x4c7632e89a81e5908e,0x32303139303431362f36363134333863376631356431643133333235373637636331333238363930642e706e67,'1440','48.000000000000','3.000000000000','30.000000000000','0.000000000000','15','0','2','99998',NULL,'2018-11-07 09:52:15','2019-04-16 21:07:35');");
E_D("replace into `store` values('3','4','1','1','1',NULL,'5',0x4c7633e89a81e5908e,0x32303139303431362f63396336323332613333623637336635373035633039313766663832383131362e706e67,'1440','170.000000000000','10.000000000000','100.000000000000','0.000000000000','10','0','5','99995',NULL,'2018-11-07 09:48:43','2019-04-16 21:07:55');");
E_D("replace into `store` values('4','3','1','1','1',NULL,'5',0x4c7634e89a81e5908e,0x32303139303431362f38653235373661646462616332303239653436303130646539373236656132382e706e67,'1440','900.000000000000','50.000000000000','500.000000000000','0.000000000000','5','0','0','100000',NULL,'2018-11-07 09:53:49','2019-04-16 21:08:10');");
E_D("replace into `store` values('5','2','1','1','1',NULL,'5',0x4c7635e89a81e5908e,0x32303139303431362f39376464343965316135383136663366393439396262663933613462663965642e706e67,'1440','1900.000000000000','100.000000000000','1000.000000000000','0.000000000000','3','0','2','99998',NULL,'2018-11-07 10:01:55','2019-04-16 21:08:28');");

require("../../inc/footer.php");
?>