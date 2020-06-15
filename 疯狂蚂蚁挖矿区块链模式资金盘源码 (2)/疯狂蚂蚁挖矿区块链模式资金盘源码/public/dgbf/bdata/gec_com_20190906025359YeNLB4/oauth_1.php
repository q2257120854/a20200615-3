<?php
define('InEmpireBakData',TRUE);
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 5.1
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `oauth`;");
E_C("CREATE TABLE `oauth` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '系统编号',
  `oid` char(32) NOT NULL COMMENT '唯一编号，md5(p+a+o)',
  `platform` tinyint(4) NOT NULL DEFAULT '1' COMMENT '平台，1：微信，2：QQ',
  `appid` varchar(50) NOT NULL COMMENT 'AppID',
  `openid` varchar(50) NOT NULL COMMENT 'OpenID',
  `unionid` varchar(50) DEFAULT NULL COMMENT 'UnionID',
  `username` char(11) DEFAULT NULL COMMENT '用户账号，没有代表仅授权但并未注册成功',
  `avatar` varchar(100) DEFAULT NULL COMMENT '头像',
  `nickname` varchar(30) DEFAULT NULL COMMENT '昵称',
  `gender` tinyint(4) NOT NULL DEFAULT '1' COMMENT '性别，1：男，2：女',
  `province` varchar(20) DEFAULT NULL COMMENT '省份',
  `city` varchar(20) DEFAULT NULL COMMENT '城市',
  `county` varchar(20) DEFAULT NULL COMMENT '区县',
  `create_at` timestamp NULL DEFAULT NULL COMMENT '创建时间',
  `update_at` timestamp NULL DEFAULT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `oid` (`oid`),
  UNIQUE KEY `platform_appid_openid` (`platform`,`appid`,`openid`),
  UNIQUE KEY `platform_appid_unionid` (`platform`,`appid`,`unionid`),
  UNIQUE KEY `platform_appid_openid_username` (`platform`,`appid`,`openid`,`username`),
  UNIQUE KEY `platform_appid_unionid_username` (`platform`,`appid`,`unionid`,`username`),
  KEY `platform` (`platform`),
  KEY `appid` (`appid`),
  KEY `openid` (`openid`),
  KEY `username` (`username`),
  KEY `create_at` (`create_at`),
  KEY `update_at` (`update_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='第三方授权登录'");

require("../../inc/footer.php");
?>