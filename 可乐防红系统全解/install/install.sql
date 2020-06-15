DROP TABLE IF EXISTS `shua_config`;</explode>
create table `shua_config` (
`k` varchar(32) NOT NULL,
`v` text NULL,
PRIMARY KEY  (`k`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;</explode>

INSERT INTO `shua_config` VALUES ('cache', '');</explode>
INSERT INTO `shua_config` VALUES ('version', '1053');</explode>
INSERT INTO `shua_config` VALUES ('admin_user', 'admin');</explode>
INSERT INTO `shua_config` VALUES ('admin_pwd', '123456');</explode>
INSERT INTO `shua_config` VALUES ('alipay_api', '2');</explode>
INSERT INTO `shua_config` VALUES ('tenpay_api', '2');</explode>
INSERT INTO `shua_config` VALUES ('qqpay_api', '2');</explode>
INSERT INTO `shua_config` VALUES ('wxpay_api', '2');</explode>
INSERT INTO `shua_config` VALUES ('style', '1');</explode>
INSERT INTO `shua_config` VALUES ('sitename', '5G云可乐防红系统');</explode>
INSERT INTO `shua_config` VALUES ('keywords', '5G云可乐防红跳转生成系统,全网首发,域名防红,防红跳转,qq小工具');</explode>
INSERT INTO `shua_config` VALUES ('description', '5G云可乐防红跳转生成系统,全网首发永久免费提供使用');</explode>
INSERT INTO `shua_config` VALUES ('kfqq', '2382232787');</explode>
INSERT INTO `shua_config` VALUES ('anounce', '<p><li class="list-group-item"><span class="btn btn-danger btn-xs">1</span> 咨询无广告付费版、链接举报、购买源码、订制防红等，请联系站长QQ：2382232787!</li><li class="list-group-item"><span class="btn btn-info btn-xs">2</span> 防红短网址免责声明：防护短网址由用户生成，所跳转的内容和本站无关，如违法，本站概不承担任何法律责任。本站严禁钓鱼，诈骗等违法站。</li><li class="list-group-item"><span class="btn btn-warning btn-xs">3</span> 如果系统自动检测恶意生成＆一次性生成超过10次的系统将自动拉入黑名单『可以带上你的原因<理由充分>，联系站长解黑！』</li><div class="btn-group btn-group-justified"><a target="_blank" class="btn btn-info" href="http://wpa.qq.com/msgrd?v=3&uin=2382232787&site=qq&menu=yes"><i class="fa fa-qq"></i> 联系站长</a><a target="_blank" class="btn btn-warning" href="https://cccer.cn"><i class="fa fa-users"></i> 5G云可乐网络</a><a target="_blank" class="btn btn-danger" href="https://jq.qq.com/?_wv=1027&k=gYfck6H1"><i class="fa fa-cloud-download"></i> 官方Q群</a></div></p>');</explode>
INSERT INTO `shua_config` VALUES ('kaurl', '');</explode>
INSERT INTO `shua_config` VALUES ('modal', '');</explode>
INSERT INTO `shua_config` VALUES ('bottom', '<table class="table table-bordered">
<tbody>
<tr height="50">
<td><button type="button" class="btn btn-block btn-warning"><a href="http://wpa.qq.com/msgrd?v=3&uin=2382232787&site=qq&menu=yes" target="_blank"><span style="color:#ffffff">♚正版查询♚</span></a></button></td>
<td><button type="button" class="btn btn-block btn-warning"><a href="http://wpa.qq.com/msgrd?v=3&uin=2382232787&site=qq&menu=yes" target="_blank"><span style="color:#ffffff">♚正版查询♚</span></a></button></td>
</tr>
<tr height="50">
<td><button type="button" class="btn btn-block btn-success"><a href="http://cccer.cn" target="_blank"><span style="color:#ffffff">♚5G云可乐网络♚</span></a></button></td>
<td><button type="button" class="btn btn-block btn-success"><a href="https://jq.qq.com/?_wv=1027&k=gYfck6H1" target="_blank"><span style="color:#ffffff">♚官方Q群♚</span></a></button></td>
</tr></tbody>
</table>');</explode>
INSERT INTO `shua_config` VALUES ('gg_search', '');</explode>
INSERT INTO `shua_config` VALUES ('gg_reguser', '');</explode>
INSERT INTO `shua_config` VALUES ('chatframe', '');</explode>
INSERT INTO `shua_config` VALUES ('fenzhan_tixian', '0');</explode>
INSERT INTO `shua_config` VALUES ('fenzhan_buy', '1');</explode>
INSERT INTO `shua_config` VALUES ('fenzhan_price', '10');</explode>
INSERT INTO `shua_config` VALUES ('fenzhan_price2', '20');</explode>
INSERT INTO `shua_config` VALUES ('fenzhan_free', '0');</explode>
INSERT INTO `shua_config` VALUES ('tixian_rate', '90');</explode>
INSERT INTO `shua_config` VALUES ('tixian_min', '10');</explode>
INSERT INTO `shua_config` VALUES ('mail_smtp', 'smtp.qq.com');</explode>
INSERT INTO `shua_config` VALUES ('mail_port', '465');</explode>
INSERT INTO `shua_config` VALUES ('template', 'default');</explode>
INSERT INTO `shua_config` VALUES ('verify_open', '1');</explode>
INSERT INTO `shua_config` VALUES ('gift_open', '0');</explode>
INSERT INTO `shua_config` VALUES ('cishu', '3');</explode>

DROP TABLE IF EXISTS `shua_class`;</explode>
CREATE TABLE `shua_class` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `zid` int(11) NOT NULL DEFAULT '1',
  `sort` int(11) NOT NULL DEFAULT '10',
  `name` varchar(255) NOT NULL,
  `active` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `shua_tools`;</explode>
CREATE TABLE `shua_tools` (
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  `zid` int(11) NOT NULL DEFAULT '1',
  `cid` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '10',
  `name` varchar(255) NOT NULL,
  `value` int(11) NOT NULL DEFAULT '0',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `cost` decimal(10,2) NOT NULL DEFAULT '0.00',
  `cost2` decimal(10,2) NOT NULL DEFAULT '0.00',
  `input` varchar(120) NOT NULL,
  `inputs` varchar(250) DEFAULT NULL,
  `alert` text DEFAULT NULL,
  `validate` tinyint(2) NOT NULL DEFAULT '0',
  `is_curl` tinyint(2) NOT NULL DEFAULT '0',
  `curl` varchar(255) DEFAULT NULL,
  `repeat` tinyint(2) NOT NULL DEFAULT '0',
  `multi` tinyint(1) NOT NULL DEFAULT '0',
  `shequ` tinyint(3) NOT NULL DEFAULT '0',
  `goods_id` int(11) NOT NULL DEFAULT '0',
  `goods_type` int(11) NOT NULL DEFAULT '0',
  `goods_param` varchar(180) DEFAULT NULL,
  `active` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `shua_orders`;</explode>
CREATE TABLE `shua_orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `zid` int(11) NOT NULL DEFAULT '1',
  `input` varchar(64) NOT NULL,
  `input2` varchar(64) DEFAULT NULL,
  `input3` varchar(64) DEFAULT NULL,
  `input4` varchar(64) DEFAULT NULL,
  `input5` varchar(64) DEFAULT NULL,
  `value` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(2) NOT NULL DEFAULT '0',
  `djzt` tinyint(2) NOT NULL DEFAULT '0',
  `djorder` varchar(32) DEFAULT NULL,
  `url` varchar(32) DEFAULT NULL,
  `result` text DEFAULT NULL,
  `userid` varchar(32) DEFAULT NULL,
  `tradeno` varchar(32) DEFAULT NULL,
  `money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `addtime` datetime DEFAULT NULL,
  `endtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `shua_kms`;</explode>
CREATE TABLE `shua_kms` (
  `kid` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `zid` int(11) NOT NULL DEFAULT '1',
  `km` varchar(255) NOT NULL,
  `value` int(11) NOT NULL DEFAULT '0',
  `addtime` timestamp NULL DEFAULT NULL,
  `user` varchar(20) NOT NULL DEFAULT '0',
  `usetime` timestamp NULL DEFAULT NULL,
  `money` varchar(32) DEFAULT NULL,
  `orderid` int(11) NULL DEFAULT '0',
  PRIMARY KEY (`kid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `shua_faka`;</explode>
CREATE TABLE `shua_faka` (
  `kid` int(11) NOT NULL AUTO_INCREMENT,
  `tid` int(11) NOT NULL,
  `km` varchar(255) DEFAULT NULL,
  `pw` varchar(255) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `usetime` datetime DEFAULT NULL,
  `orderid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`kid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `shua_pay`;</explode>
CREATE TABLE `shua_pay` (
  `trade_no` varchar(64) NOT NULL,
  `type` varchar(20) NULL,
  `zid` int(11) NOT NULL DEFAULT '1',
  `tid` int(11) NOT NULL,
  `input` text NOT NULL,
  `num` int(11) NOT NULL DEFAULT '1',
  `addtime` datetime NULL,
  `endtime` datetime NULL,
  `name` varchar(64) NULL,
  `money` varchar(32) NULL,
  `ip` varchar(20) NULL,
  `userid` varchar(32) DEFAULT NULL,
  `inviteid` int(11) DEFAULT NULL,
  `domain` varchar(64) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`trade_no`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `shua_site`;</explode>
CREATE TABLE `shua_site` (
  `zid` int(11) NOT NULL AUTO_INCREMENT,
  `upzid` int(11) NOT NULL DEFAULT '0',
  `power` int(11) NOT NULL DEFAULT '0',
  `domain` varchar(50) NOT NULL,
  `domain2` varchar(50) DEFAULT NULL,
  `user` varchar(20) NOT NULL,
  `pwd` varchar(32) NOT NULL,
  `rmb` decimal(10,2) NOT NULL DEFAULT '0.00',
  `point` int(11) NOT NULL DEFAULT '0',
  `pay_type` int(1) NOT NULL DEFAULT '0',
  `pay_account` varchar(50) DEFAULT NULL,
  `pay_name` varchar(50) DEFAULT NULL,
  `qq` varchar(12) DEFAULT NULL,
  `sitename` varchar(80) DEFAULT NULL,
  `title` varchar(80) DEFAULT NULL,
  `keywords` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `kaurl` varchar(50) DEFAULT NULL,
  `anounce` text DEFAULT NULL,
  `bottom` text DEFAULT NULL,
  `modal` text DEFAULT NULL,
  `alert` text DEFAULT NULL,
  `price` text DEFAULT NULL,
  `ktfz_price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `ktfz_price2` decimal(10,2) NOT NULL DEFAULT '0.00',
  `ktfz_domain` text DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `endtime` datetime DEFAULT NULL,
  `template` varchar(10) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`zid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=2;</explode>

DROP TABLE IF EXISTS `shua_tixian`;</explode>
CREATE TABLE `shua_tixian` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zid` int(11) NOT NULL,
  `money` decimal(10,2) NOT NULL DEFAULT '0.00',
  `realmoney` decimal(10,2) NOT NULL DEFAULT '0.00',
  `pay_type` int(1) NOT NULL DEFAULT '0',
  `pay_account` varchar(50) NOT NULL,
  `pay_name` varchar(50) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0',
  `addtime` datetime DEFAULT NULL,
  `endtime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `shua_points`;</explode>
CREATE TABLE `shua_points` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zid` int(11) NOT NULL DEFAULT '0',
  `action` varchar(255) NOT NULL,
  `point` decimal(10,2) NOT NULL DEFAULT '0.00',
  `bz` varchar(1024) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `shua_shequ`;</explode>
CREATE TABLE `shua_shequ` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `paypwd` varchar(255) DEFAULT NULL,
  `type` tinyint(3) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `shua_logs`;</explode>
CREATE TABLE `shua_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `action` varchar(32) NOT NULL,
  `param` varchar(255) NOT NULL,
  `result` text DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `shua_gift`;</explode>
CREATE TABLE `shua_gift` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `tid` int(11) NOT NULL,
  `rate` int(3) NOT NULL,
  `ok` int(1) NOT NULL DEFAULT 0,
  `not` int(1) NOT NULL DEFAULT 0,
PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `shua_giftlog`;</explode>
CREATE TABLE `shua_giftlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zid` int(11) NOT NULL DEFAULT 0,
  `tid` int(11) NOT NULL,
  `gid` int(11) NOT NULL,
  `userid` varchar(32) NOT NULL,
  `ip` varchar(20) NOT NULL,
  `addtime` datetime DEFAULT NULL,
  `tradeno` varchar(32) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `shua_invite`;</explode>
CREATE TABLE `shua_invite`(
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `qq` VARCHAR(20) NOT NULL UNIQUE,
  `key` VARCHAR(30) NOT NULL UNIQUE,
  `ip` VARCHAR(25) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `shua_invitelog`;</explode>
CREATE TABLE `shua_invitelog`(
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nid` int(11) NOT NULL,
  `zid` int(11) NOT NULL DEFAULT '1',
  `date` datetime DEFAULT NULL,
  `ip` varchar(50) DEFAULT NULL,
  `orderid` int(11) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;</explode>



DROP TABLE IF EXISTS `quan_config`;</explode>
CREATE TABLE `quan_config` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `switch` int(1) NOT NULL DEFAULT '1',
  `free` int(1) NOT NULL DEFAULT'1',
  `user` varchar(250) NOT NULL,
  `pwd` varchar(250) NOT NULL,
  `sitename` varchar(50) NOT NULL,
  `keywords` text NOT NULL,
  `description` text NOT NULL,
  `template` int(1) NOT NULL DEFAULT '1',
  `kfqq` varchar(20) NOT NULL,
  `buy` text NULL,
  `url` varchar(255) NULL,
  `date` date NULL,
  `active` INT(1) NOT NULL default '1',
  `api` INT(1) NOT NULL default '0',
  `note` text NULL,
  `block` text DEFAULT NULL,
  `modal` varchar(2550) NULL,
    `muban` text DEFAULT NULL,
    `bt` text NOT NULL,
   `apii` text DEFAULT NULL,
    `mub` text DEFAULT NULL,
   `uurr` text DEFAULT NULL,
   `duan` text DEFAULT NULL,
   `wmb` text DEFAULT NULL,
   `cishu` text DEFAULT NULL,
    `ding` text DEFAULT NULL,
   `dibug` text DEFAULT NULL,
   `ti` text DEFAULT NULL,
   `tz` text DEFAULT NULL,
   `tj` text DEFAULT NULL,
   `key` text DEFAULT NULL,
   `jk` text DEFAULT NULL,
   `cdn` text DEFAULT NULL,
   `zzje` text DEFAULT NULL,
   `zzly` text DEFAULT NULL,
   `fjb` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>
INSERT INTO `quan_config`(`id`, `switch`, `user`, `pwd`, `sitename`, `keywords`, `description`, `kfqq`, `buy`, `active`, `modal`, `free`, `muban`, `bt`, `apii`, `mub`, `uurr`, `duan`, `wmb`, `cishu`, `ti`, `tz`, `tj`, `key`, `jk`, `cdn`, `zzje`, `zzly`, `fjb`) VALUES
('1', '1', 'admin', '123456', '5G云可乐防红系统', '5G云可乐防红跳转生成系统,全网首发,域名防红,防红跳转,qq小工具', '5G云可乐防红跳转生成系统,全网首发永久免费提供使用', '2382232787', '此公告在后台的防洪公告里该', '1', '此公告在后台的防洪公告里该','2', '2', '欢迎使用', '', '01', '', 'type=urlcn', '1', '123', '1', '2', '1', '域名防红工具|防红短链接|腾讯防红在线生成小工具', './', './', '1.00', '呐~赞助给你的◕ฺ‿◕ฺ！', '5G云可乐防红系统');</explode>


DROP TABLE IF EXISTS `quan_list`;</explode>
CREATE TABLE `quan_list` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domain` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `type` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `quan_report`;</explode>
CREATE TABLE `quan_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(64) DEFAULT NULL,
  `reason` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `quan_host`;</explode>
CREATE TABLE `quan_host` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domain` varchar(255) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `type` int(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `quan_log`;</explode>
CREATE TABLE `quan_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `domain` varchar(255) DEFAULT NULL,
  `click_time` date DEFAULT '0000-00-00',
  `user_agent` varchar(255) NOT NULL,
  `ip_address` varchar(41) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;</explode>

DROP TABLE IF EXISTS `quan_long`;</explode>
CREATE TABLE `quan_long` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` varchar(10) DEFAULT NULL,
  `longurl` varchar(9999) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;</explode>