<?php
//升级数据表
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_app_hb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `type` varchar(250) DEFAULT '0',
  `title` varchar(250) DEFAULT '0',
  `pic` varchar(250) DEFAULT '0',
  `url` varchar(1000) DEFAULT '0',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_app_hb','id')) {pdo_query("ALTER TABLE ".tablename('tiger_app_hb')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_app_hb','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_app_hb')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_app_hb','type')) {pdo_query("ALTER TABLE ".tablename('tiger_app_hb')." ADD   `type` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_app_hb','title')) {pdo_query("ALTER TABLE ".tablename('tiger_app_hb')." ADD   `title` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_app_hb','pic')) {pdo_query("ALTER TABLE ".tablename('tiger_app_hb')." ADD   `pic` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_app_hb','url')) {pdo_query("ALTER TABLE ".tablename('tiger_app_hb')." ADD   `url` varchar(1000) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_app_hb','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_app_hb')." ADD   `createtime` int(10) NOT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_app_mobsend` (
  `tel` bigint(11) unsigned NOT NULL COMMENT '手机号',
  `weid` int(11) DEFAULT '0',
  `value` char(6) NOT NULL DEFAULT '' COMMENT '验证码',
  `total` smallint(5) unsigned NOT NULL DEFAULT '1' COMMENT '发送次数',
  `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`tel`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_app_mobsend','tel')) {pdo_query("ALTER TABLE ".tablename('tiger_app_mobsend')." ADD 
  `tel` bigint(11) unsigned NOT NULL COMMENT '手机号'");}
if(!pdo_fieldexists('tiger_app_mobsend','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_app_mobsend')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_app_mobsend','value')) {pdo_query("ALTER TABLE ".tablename('tiger_app_mobsend')." ADD   `value` char(6) NOT NULL DEFAULT '' COMMENT '验证码'");}
if(!pdo_fieldexists('tiger_app_mobsend','total')) {pdo_query("ALTER TABLE ".tablename('tiger_app_mobsend')." ADD   `total` smallint(5) unsigned NOT NULL DEFAULT '1' COMMENT '发送次数'");}
if(!pdo_fieldexists('tiger_app_mobsend','add_time')) {pdo_query("ALTER TABLE ".tablename('tiger_app_mobsend')." ADD   `add_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '添加时间'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_app_tuanzhangset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `title` varchar(100) DEFAULT '0',
  `px` int(10) DEFAULT '0',
  `sjtype` int(10) DEFAULT '0',
  `jl` varchar(50) DEFAULT '0',
  `rmb` varchar(50) DEFAULT '0',
  `fsm` varchar(50) DEFAULT '0',
  `ordermsum` varchar(50) DEFAULT '0',
  `text` varchar(1000) DEFAULT '0',
  `createtime` int(10) NOT NULL,
  `tzbl1` varchar(10) DEFAULT NULL COMMENT '团长比例',
  `jlpt` varchar(50) DEFAULT NULL COMMENT '普通用户抽下面所有普通用户的佣金',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_app_tuanzhangset','id')) {pdo_query("ALTER TABLE ".tablename('tiger_app_tuanzhangset')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_app_tuanzhangset','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_app_tuanzhangset')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_app_tuanzhangset','title')) {pdo_query("ALTER TABLE ".tablename('tiger_app_tuanzhangset')." ADD   `title` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_app_tuanzhangset','px')) {pdo_query("ALTER TABLE ".tablename('tiger_app_tuanzhangset')." ADD   `px` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_app_tuanzhangset','sjtype')) {pdo_query("ALTER TABLE ".tablename('tiger_app_tuanzhangset')." ADD   `sjtype` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_app_tuanzhangset','jl')) {pdo_query("ALTER TABLE ".tablename('tiger_app_tuanzhangset')." ADD   `jl` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_app_tuanzhangset','rmb')) {pdo_query("ALTER TABLE ".tablename('tiger_app_tuanzhangset')." ADD   `rmb` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_app_tuanzhangset','fsm')) {pdo_query("ALTER TABLE ".tablename('tiger_app_tuanzhangset')." ADD   `fsm` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_app_tuanzhangset','ordermsum')) {pdo_query("ALTER TABLE ".tablename('tiger_app_tuanzhangset')." ADD   `ordermsum` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_app_tuanzhangset','text')) {pdo_query("ALTER TABLE ".tablename('tiger_app_tuanzhangset')." ADD   `text` varchar(1000) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_app_tuanzhangset','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_app_tuanzhangset')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_app_tuanzhangset','tzbl1')) {pdo_query("ALTER TABLE ".tablename('tiger_app_tuanzhangset')." ADD   `tzbl1` varchar(10) DEFAULT NULL COMMENT '团长比例'");}
if(!pdo_fieldexists('tiger_app_tuanzhangset','jlpt')) {pdo_query("ALTER TABLE ".tablename('tiger_app_tuanzhangset')." ADD   `jlpt` varchar(50) DEFAULT NULL COMMENT '普通用户抽下面所有普通用户的佣金'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `type` varchar(250) DEFAULT '0',
  `title` varchar(250) DEFAULT '0',
  `pic` varchar(250) DEFAULT '0',
  `pidtype` varchar(10) DEFAULT '0' COMMENT '链接是否带PID',
  `url` varchar(1000) DEFAULT '0',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_ad','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_ad')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_ad','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_ad')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_ad','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_ad')." ADD   `type` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_ad','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_ad')." ADD   `title` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_ad','pic')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_ad')." ADD   `pic` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_ad','pidtype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_ad')." ADD   `pidtype` varchar(10) DEFAULT '0' COMMENT '链接是否带PID'");}
if(!pdo_fieldexists('tiger_newhu_ad','url')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_ad')." ADD   `url` varchar(1000) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_ad','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_ad')." ADD   `createtime` int(10) NOT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_appbottomdh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `px` int(10) DEFAULT '0',
  `fztype` int(10) DEFAULT '0' COMMENT '4底部菜单',
  `type` int(10) DEFAULT '0' COMMENT '1.H5链接  2.商品分类  3活动',
  `showtype` int(10) DEFAULT '0' COMMENT '菜单是否显示 1.显示 ',
  `xz` int(10) DEFAULT '0' COMMENT '是否要登录显示 1.需要登录 ',
  `title` varchar(100) DEFAULT '0' COMMENT '名称',
  `ftitle` varchar(100) DEFAULT '0' COMMENT '副名称',
  `hd` varchar(20) DEFAULT '0' COMMENT '1聚划算 2淘抢购  3秒杀  4 叮咚抢  5 视频单  6品牌团 7官方推荐 8好券直播 9小编力荐',
  `fqcat` int(11) DEFAULT '0' COMMENT '商品分类ID',
  `flname` varchar(100) DEFAULT '0' COMMENT '分类名称',
  `itemid` varchar(100) DEFAULT '0' COMMENT '商品ID',
  `headcolorleft` varchar(100) DEFAULT '0' COMMENT '头背景颜色1',
  `headcolorright` varchar(100) DEFAULT '0' COMMENT '头背景颜色2',
  `pic` varchar(250) DEFAULT '0',
  `pic1` varchar(250) DEFAULT '0' COMMENT '底部菜单按下去图片',
  `apppage1` varchar(1000) DEFAULT NULL,
  `apppage2` varchar(1000) DEFAULT '0',
  `url` varchar(1000) DEFAULT '0',
  `h5title` varchar(100) DEFAULT '0' COMMENT '网页标题',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `px` (`px`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_appbottomdh','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','px')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `px` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','fztype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `fztype` int(10) DEFAULT '0' COMMENT '4底部菜单'");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `type` int(10) DEFAULT '0' COMMENT '1.H5链接  2.商品分类  3活动'");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','showtype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `showtype` int(10) DEFAULT '0' COMMENT '菜单是否显示 1.显示 '");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','xz')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `xz` int(10) DEFAULT '0' COMMENT '是否要登录显示 1.需要登录 '");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `title` varchar(100) DEFAULT '0' COMMENT '名称'");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','ftitle')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `ftitle` varchar(100) DEFAULT '0' COMMENT '副名称'");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','hd')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `hd` varchar(20) DEFAULT '0' COMMENT '1聚划算 2淘抢购  3秒杀  4 叮咚抢  5 视频单  6品牌团 7官方推荐 8好券直播 9小编力荐'");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','fqcat')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `fqcat` int(11) DEFAULT '0' COMMENT '商品分类ID'");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','flname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `flname` varchar(100) DEFAULT '0' COMMENT '分类名称'");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','itemid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `itemid` varchar(100) DEFAULT '0' COMMENT '商品ID'");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','headcolorleft')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `headcolorleft` varchar(100) DEFAULT '0' COMMENT '头背景颜色1'");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','headcolorright')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `headcolorright` varchar(100) DEFAULT '0' COMMENT '头背景颜色2'");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','pic')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `pic` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','pic1')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `pic1` varchar(250) DEFAULT '0' COMMENT '底部菜单按下去图片'");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','apppage1')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `apppage1` varchar(1000) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','apppage2')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `apppage2` varchar(1000) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','url')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `url` varchar(1000) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','h5title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `h5title` varchar(100) DEFAULT '0' COMMENT '网页标题'");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_appbottomdh','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appbottomdh')." ADD   KEY `weid` (`weid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_appdh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `fztype` int(10) DEFAULT '0' COMMENT '1首页广告   2广告下面菜单  3图标下面图片 4底部菜单  5会员中心下方图标',
  `type` int(10) DEFAULT '0' COMMENT '1.H5链接  2.商品分类  3活动',
  `title` varchar(100) DEFAULT '0' COMMENT '名称',
  `ftitle` varchar(100) DEFAULT '0' COMMENT '副名称',
  `hd` varchar(20) DEFAULT '0' COMMENT '1聚划算 2淘抢购  3秒杀  4 叮咚抢  5 视频单  6品牌团 7官方推荐 8好券直播 9小编力荐',
  `fqcat` int(11) DEFAULT '0' COMMENT '商品分类ID',
  `flname` varchar(100) DEFAULT '0' COMMENT '分类名称',
  `pic` varchar(250) DEFAULT '0',
  `apppage1` varchar(1000) DEFAULT NULL,
  `apppage2` varchar(1000) DEFAULT '0',
  `url` varchar(1000) DEFAULT '0',
  `h5title` varchar(100) DEFAULT '0' COMMENT '网页标题',
  `createtime` int(10) NOT NULL,
  `itemid` varchar(100) DEFAULT '0' COMMENT '商品ID',
  `showtype` int(10) DEFAULT '0' COMMENT '菜单是否显示 1.显示 ',
  `xz` int(10) DEFAULT '0' COMMENT '是否要登录显示 1.需要登录 ',
  `headcolorleft` varchar(50) DEFAULT '0',
  `headcolorright` varchar(50) DEFAULT '0',
  `pic1` varchar(250) DEFAULT '0' COMMENT '底部菜单按下图',
  `px` int(10) DEFAULT '0',
  `key` varchar(100) DEFAULT NULL COMMENT '关键词',
  `hdid` varchar(100) DEFAULT NULL COMMENT '官方活动 id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_appdh','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_appdh','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appdh','fztype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `fztype` int(10) DEFAULT '0' COMMENT '1首页广告   2广告下面菜单  3图标下面图片 4底部菜单  5会员中心下方图标'");}
if(!pdo_fieldexists('tiger_newhu_appdh','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `type` int(10) DEFAULT '0' COMMENT '1.H5链接  2.商品分类  3活动'");}
if(!pdo_fieldexists('tiger_newhu_appdh','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `title` varchar(100) DEFAULT '0' COMMENT '名称'");}
if(!pdo_fieldexists('tiger_newhu_appdh','ftitle')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `ftitle` varchar(100) DEFAULT '0' COMMENT '副名称'");}
if(!pdo_fieldexists('tiger_newhu_appdh','hd')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `hd` varchar(20) DEFAULT '0' COMMENT '1聚划算 2淘抢购  3秒杀  4 叮咚抢  5 视频单  6品牌团 7官方推荐 8好券直播 9小编力荐'");}
if(!pdo_fieldexists('tiger_newhu_appdh','fqcat')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `fqcat` int(11) DEFAULT '0' COMMENT '商品分类ID'");}
if(!pdo_fieldexists('tiger_newhu_appdh','flname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `flname` varchar(100) DEFAULT '0' COMMENT '分类名称'");}
if(!pdo_fieldexists('tiger_newhu_appdh','pic')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `pic` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appdh','apppage1')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `apppage1` varchar(1000) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_appdh','apppage2')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `apppage2` varchar(1000) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appdh','url')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `url` varchar(1000) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appdh','h5title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `h5title` varchar(100) DEFAULT '0' COMMENT '网页标题'");}
if(!pdo_fieldexists('tiger_newhu_appdh','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_appdh','itemid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `itemid` varchar(100) DEFAULT '0' COMMENT '商品ID'");}
if(!pdo_fieldexists('tiger_newhu_appdh','showtype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `showtype` int(10) DEFAULT '0' COMMENT '菜单是否显示 1.显示 '");}
if(!pdo_fieldexists('tiger_newhu_appdh','xz')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `xz` int(10) DEFAULT '0' COMMENT '是否要登录显示 1.需要登录 '");}
if(!pdo_fieldexists('tiger_newhu_appdh','headcolorleft')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `headcolorleft` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appdh','headcolorright')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `headcolorright` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appdh','pic1')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `pic1` varchar(250) DEFAULT '0' COMMENT '底部菜单按下图'");}
if(!pdo_fieldexists('tiger_newhu_appdh','px')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `px` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appdh','key')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `key` varchar(100) DEFAULT NULL COMMENT '关键词'");}
if(!pdo_fieldexists('tiger_newhu_appdh','hdid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appdh')." ADD   `hdid` varchar(100) DEFAULT NULL COMMENT '官方活动 id'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_appset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `appid` varchar(200) DEFAULT NULL COMMENT 'APP的APPID',
  `mchid` varchar(200) DEFAULT NULL COMMENT '商户号',
  `jiamistr` varchar(200) DEFAULT NULL COMMENT '加密字符',
  `appzfip` varchar(100) DEFAULT '' COMMENT 'IP',
  `appfximg` varchar(200) DEFAULT '',
  `appfxtitle` varchar(100) DEFAULT '',
  `appfxcontent` varchar(200) DEFAULT '',
  `smskeyid` varchar(100) DEFAULT '0',
  `smssecret` varchar(100) DEFAULT '0',
  `smsname` varchar(100) DEFAULT '0',
  `smscode` varchar(100) DEFAULT '0',
  `appkey` varchar(100) DEFAULT '0' COMMENT '秘钥',
  `tuanzhangtype` int(11) DEFAULT '0' COMMENT '1开启团长功能',
  `iossh` varchar(10) DEFAULT '0' COMMENT 'IOS审核状态 1审核中',
  `sjztype` int(5) DEFAULT '0' COMMENT '升级赚 1显示',
  `headclorleft` varchar(50) DEFAULT '0',
  `headclorright` varchar(50) DEFAULT '0',
  `tanchuangurl` varchar(400) DEFAULT '0',
  `tanchuangpic` varchar(200) DEFAULT '0',
  `tanchuangtitle` varchar(200) DEFAULT '0',
  `tanchuangjgtime` varchar(200) DEFAULT '0' COMMENT '弹窗间隔时间',
  `tanchuangtype` int(5) DEFAULT '0' COMMENT ' 1开启弹窗',
  `appxiaoxiurl` varchar(400) DEFAULT '0',
  `hyjftype` int(5) DEFAULT '0' COMMENT ' 会员中心积分是否显示 1 显示',
  `lbygz` varchar(100) DEFAULT NULL COMMENT '自定义预估赚名称',
  `lbsjz` varchar(100) DEFAULT NULL COMMENT '自定义升级赚名称',
  `tptype` int(5) DEFAULT '0' COMMENT '列表模版',
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_appset','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_appset','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appset','appid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `appid` varchar(200) DEFAULT NULL COMMENT 'APP的APPID'");}
if(!pdo_fieldexists('tiger_newhu_appset','mchid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `mchid` varchar(200) DEFAULT NULL COMMENT '商户号'");}
if(!pdo_fieldexists('tiger_newhu_appset','jiamistr')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `jiamistr` varchar(200) DEFAULT NULL COMMENT '加密字符'");}
if(!pdo_fieldexists('tiger_newhu_appset','appzfip')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `appzfip` varchar(100) DEFAULT '' COMMENT 'IP'");}
if(!pdo_fieldexists('tiger_newhu_appset','appfximg')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `appfximg` varchar(200) DEFAULT ''");}
if(!pdo_fieldexists('tiger_newhu_appset','appfxtitle')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `appfxtitle` varchar(100) DEFAULT ''");}
if(!pdo_fieldexists('tiger_newhu_appset','appfxcontent')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `appfxcontent` varchar(200) DEFAULT ''");}
if(!pdo_fieldexists('tiger_newhu_appset','smskeyid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `smskeyid` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appset','smssecret')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `smssecret` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appset','smsname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `smsname` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appset','smscode')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `smscode` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appset','appkey')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `appkey` varchar(100) DEFAULT '0' COMMENT '秘钥'");}
if(!pdo_fieldexists('tiger_newhu_appset','tuanzhangtype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `tuanzhangtype` int(11) DEFAULT '0' COMMENT '1开启团长功能'");}
if(!pdo_fieldexists('tiger_newhu_appset','iossh')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `iossh` varchar(10) DEFAULT '0' COMMENT 'IOS审核状态 1审核中'");}
if(!pdo_fieldexists('tiger_newhu_appset','sjztype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `sjztype` int(5) DEFAULT '0' COMMENT '升级赚 1显示'");}
if(!pdo_fieldexists('tiger_newhu_appset','headclorleft')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `headclorleft` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appset','headclorright')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `headclorright` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appset','tanchuangurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `tanchuangurl` varchar(400) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appset','tanchuangpic')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `tanchuangpic` varchar(200) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appset','tanchuangtitle')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `tanchuangtitle` varchar(200) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appset','tanchuangjgtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `tanchuangjgtime` varchar(200) DEFAULT '0' COMMENT '弹窗间隔时间'");}
if(!pdo_fieldexists('tiger_newhu_appset','tanchuangtype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `tanchuangtype` int(5) DEFAULT '0' COMMENT ' 1开启弹窗'");}
if(!pdo_fieldexists('tiger_newhu_appset','appxiaoxiurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `appxiaoxiurl` varchar(400) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_appset','hyjftype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `hyjftype` int(5) DEFAULT '0' COMMENT ' 会员中心积分是否显示 1 显示'");}
if(!pdo_fieldexists('tiger_newhu_appset','lbygz')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `lbygz` varchar(100) DEFAULT NULL COMMENT '自定义预估赚名称'");}
if(!pdo_fieldexists('tiger_newhu_appset','lbsjz')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `lbsjz` varchar(100) DEFAULT NULL COMMENT '自定义升级赚名称'");}
if(!pdo_fieldexists('tiger_newhu_appset','tptype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   `tptype` int(5) DEFAULT '0' COMMENT '列表模版'");}
if(!pdo_fieldexists('tiger_newhu_appset','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_appset')." ADD   PRIMARY KEY (`id`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `px` int(10) NOT NULL DEFAULT '0',
  `type` int(11) NOT NULL DEFAULT '0' COMMENT '分类',
  `tj` int(11) NOT NULL DEFAULT '0' COMMENT '首页显示',
  `title` varchar(50) NOT NULL,
  `videourl` varchar(500) NOT NULL COMMENT '视频地址',
  `picurl` varchar(500) NOT NULL COMMENT '封面',
  `content` text NOT NULL,
  `click` int(11) NOT NULL,
  `wlurl` varchar(255) NOT NULL,
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_article','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_article')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_article','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_article')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_article','px')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_article')." ADD   `px` int(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_article','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_article')." ADD   `type` int(11) NOT NULL DEFAULT '0' COMMENT '分类'");}
if(!pdo_fieldexists('tiger_newhu_article','tj')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_article')." ADD   `tj` int(11) NOT NULL DEFAULT '0' COMMENT '首页显示'");}
if(!pdo_fieldexists('tiger_newhu_article','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_article')." ADD   `title` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_article','videourl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_article')." ADD   `videourl` varchar(500) NOT NULL COMMENT '视频地址'");}
if(!pdo_fieldexists('tiger_newhu_article','picurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_article')." ADD   `picurl` varchar(500) NOT NULL COMMENT '封面'");}
if(!pdo_fieldexists('tiger_newhu_article','content')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_article')." ADD   `content` text NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_article','click')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_article')." ADD   `click` int(11) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_article','wlurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_article')." ADD   `wlurl` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_article','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_article')." ADD   `createtime` int(10) NOT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_articletype` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `px` int(10) NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL,
  `type` int(3) NOT NULL DEFAULT '0' COMMENT '分类',
  `picurl` varchar(500) NOT NULL COMMENT '封面',
  `wlurl` varchar(500) NOT NULL COMMENT '外链',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_articletype','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_articletype')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_articletype','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_articletype')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_articletype','px')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_articletype')." ADD   `px` int(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_articletype','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_articletype')." ADD   `title` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_articletype','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_articletype')." ADD   `type` int(3) NOT NULL DEFAULT '0' COMMENT '分类'");}
if(!pdo_fieldexists('tiger_newhu_articletype','picurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_articletype')." ADD   `picurl` varchar(500) NOT NULL COMMENT '封面'");}
if(!pdo_fieldexists('tiger_newhu_articletype','wlurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_articletype')." ADD   `wlurl` varchar(500) NOT NULL COMMENT '外链'");}
if(!pdo_fieldexists('tiger_newhu_articletype','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_articletype')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_articletype','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_articletype')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_articletype','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_articletype')." ADD   KEY `weid` (`weid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_cdtype` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `px` int(10) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL,
  `fftype` int(3) NOT NULL DEFAULT '0' COMMENT '分类',
  `picurl` varchar(255) NOT NULL COMMENT '封面',
  `wlurl` varchar(255) NOT NULL COMMENT '外链',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `fftype` (`fftype`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_cdtype','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_cdtype')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_cdtype','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_cdtype')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_cdtype','px')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_cdtype')." ADD   `px` int(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_cdtype','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_cdtype')." ADD   `title` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_cdtype','fftype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_cdtype')." ADD   `fftype` int(3) NOT NULL DEFAULT '0' COMMENT '分类'");}
if(!pdo_fieldexists('tiger_newhu_cdtype','picurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_cdtype')." ADD   `picurl` varchar(255) NOT NULL COMMENT '封面'");}
if(!pdo_fieldexists('tiger_newhu_cdtype','wlurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_cdtype')." ADD   `wlurl` varchar(255) NOT NULL COMMENT '外链'");}
if(!pdo_fieldexists('tiger_newhu_cdtype','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_cdtype')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_cdtype','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_cdtype')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_cdtype','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_cdtype')." ADD   KEY `weid` (`weid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_ck` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `data` text,
  `taodata` text,
  `createtime` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_weid` (`weid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_ck','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_ck')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_ck','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_ck')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_ck','data')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_ck')." ADD   `data` text");}
if(!pdo_fieldexists('tiger_newhu_ck','taodata')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_ck')." ADD   `taodata` text");}
if(!pdo_fieldexists('tiger_newhu_ck','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_ck')." ADD   `createtime` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_ck','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_ck')." ADD   PRIMARY KEY (`id`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_dborder` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT '0',
  `uid` int(10) NOT NULL COMMENT '用户ID',
  `bizId` varchar(30) NOT NULL COMMENT '订单号',
  `orderNum` varchar(255) NOT NULL COMMENT '兑吧订单号',
  `credits` int(20) NOT NULL COMMENT '积分',
  `params` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `ip` varchar(15) NOT NULL COMMENT '客户端ip',
  `starttimestamp` int(10) DEFAULT NULL COMMENT '下单时间',
  `endtimestamp` int(10) DEFAULT NULL COMMENT '成功时间',
  `waitAudit` int(8) DEFAULT '0' COMMENT '是否审核',
  `Audit` int(1) DEFAULT '0' COMMENT '审核状态',
  `actualPrice` int(11) DEFAULT '0' COMMENT '扣除费用',
  `description` varchar(255) NOT NULL COMMENT '描述',
  `facePrice` int(11) DEFAULT '0' COMMENT '市场价值',
  `itemCode` varchar(255) NOT NULL COMMENT '商品编码',
  `Audituser` varchar(255) NOT NULL COMMENT '审核员',
  `status` int(1) DEFAULT '0' COMMENT '订单状态',
  `createtime` int(10) DEFAULT '0' COMMENT '时间',
  PRIMARY KEY (`id`),
  KEY `indx_uniacid` (`uniacid`),
  KEY `indx_bizId` (`bizId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_dborder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_dborder','uniacid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   `uniacid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_dborder','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   `uid` int(10) NOT NULL COMMENT '用户ID'");}
if(!pdo_fieldexists('tiger_newhu_dborder','bizId')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   `bizId` varchar(30) NOT NULL COMMENT '订单号'");}
if(!pdo_fieldexists('tiger_newhu_dborder','orderNum')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   `orderNum` varchar(255) NOT NULL COMMENT '兑吧订单号'");}
if(!pdo_fieldexists('tiger_newhu_dborder','credits')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   `credits` int(20) NOT NULL COMMENT '积分'");}
if(!pdo_fieldexists('tiger_newhu_dborder','params')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   `params` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_dborder','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   `type` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_dborder','ip')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   `ip` varchar(15) NOT NULL COMMENT '客户端ip'");}
if(!pdo_fieldexists('tiger_newhu_dborder','starttimestamp')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   `starttimestamp` int(10) DEFAULT NULL COMMENT '下单时间'");}
if(!pdo_fieldexists('tiger_newhu_dborder','endtimestamp')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   `endtimestamp` int(10) DEFAULT NULL COMMENT '成功时间'");}
if(!pdo_fieldexists('tiger_newhu_dborder','waitAudit')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   `waitAudit` int(8) DEFAULT '0' COMMENT '是否审核'");}
if(!pdo_fieldexists('tiger_newhu_dborder','Audit')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   `Audit` int(1) DEFAULT '0' COMMENT '审核状态'");}
if(!pdo_fieldexists('tiger_newhu_dborder','actualPrice')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   `actualPrice` int(11) DEFAULT '0' COMMENT '扣除费用'");}
if(!pdo_fieldexists('tiger_newhu_dborder','description')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   `description` varchar(255) NOT NULL COMMENT '描述'");}
if(!pdo_fieldexists('tiger_newhu_dborder','facePrice')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   `facePrice` int(11) DEFAULT '0' COMMENT '市场价值'");}
if(!pdo_fieldexists('tiger_newhu_dborder','itemCode')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   `itemCode` varchar(255) NOT NULL COMMENT '商品编码'");}
if(!pdo_fieldexists('tiger_newhu_dborder','Audituser')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   `Audituser` varchar(255) NOT NULL COMMENT '审核员'");}
if(!pdo_fieldexists('tiger_newhu_dborder','status')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   `status` int(1) DEFAULT '0' COMMENT '订单状态'");}
if(!pdo_fieldexists('tiger_newhu_dborder','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   `createtime` int(10) DEFAULT '0' COMMENT '时间'");}
if(!pdo_fieldexists('tiger_newhu_dborder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_dborder','indx_uniacid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dborder')." ADD   KEY `indx_uniacid` (`uniacid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_dbrecord` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `uid` int(11) DEFAULT '0',
  `nickname` varchar(200) NOT NULL,
  `openid` varchar(50) NOT NULL,
  `orderNum` varchar(200) NOT NULL,
  `credits` varchar(200) NOT NULL,
  `params` varchar(255) NOT NULL,
  `type` varchar(200) NOT NULL,
  `ip` varchar(200) NOT NULL,
  `sign` varchar(255) NOT NULL,
  `timestamp` int(11) DEFAULT '0',
  `waitAudit` varchar(255) NOT NULL,
  `actualPrice` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `paramsTest4` varchar(255) NOT NULL,
  `facePrice` varchar(255) NOT NULL,
  `appKey` varchar(255) NOT NULL,
  `status` int(11) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_dbrecord','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dbrecord')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_dbrecord','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dbrecord')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_dbrecord','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dbrecord')." ADD   `uid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_dbrecord','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dbrecord')." ADD   `nickname` varchar(200) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_dbrecord','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dbrecord')." ADD   `openid` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_dbrecord','orderNum')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dbrecord')." ADD   `orderNum` varchar(200) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_dbrecord','credits')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dbrecord')." ADD   `credits` varchar(200) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_dbrecord','params')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dbrecord')." ADD   `params` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_dbrecord','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dbrecord')." ADD   `type` varchar(200) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_dbrecord','ip')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dbrecord')." ADD   `ip` varchar(200) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_dbrecord','sign')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dbrecord')." ADD   `sign` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_dbrecord','timestamp')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dbrecord')." ADD   `timestamp` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_dbrecord','waitAudit')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dbrecord')." ADD   `waitAudit` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_dbrecord','actualPrice')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dbrecord')." ADD   `actualPrice` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_dbrecord','description')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dbrecord')." ADD   `description` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_dbrecord','paramsTest4')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dbrecord')." ADD   `paramsTest4` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_dbrecord','facePrice')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dbrecord')." ADD   `facePrice` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_dbrecord','appKey')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dbrecord')." ADD   `appKey` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_dbrecord','status')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dbrecord')." ADD   `status` int(11) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_dianyuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `openid` varchar(50) DEFAULT '0',
  `nickname` varchar(50) DEFAULT '0',
  `ename` varchar(50) DEFAULT '0',
  `tel` varchar(50) DEFAULT '0',
  `password` varchar(50) DEFAULT '0',
  `companyname` varchar(200) DEFAULT '0',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_dianyuan','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dianyuan')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_dianyuan','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dianyuan')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_dianyuan','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dianyuan')." ADD   `openid` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_dianyuan','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dianyuan')." ADD   `nickname` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_dianyuan','ename')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dianyuan')." ADD   `ename` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_dianyuan','tel')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dianyuan')." ADD   `tel` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_dianyuan','password')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dianyuan')." ADD   `password` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_dianyuan','companyname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dianyuan')." ADD   `companyname` varchar(200) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_dianyuan','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dianyuan')." ADD   `createtime` int(10) NOT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_dwz` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `url` varchar(1000) NOT NULL COMMENT '网址',
  `durl` varchar(1000) NOT NULL COMMENT '缩短网址',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_dwz','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dwz')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_dwz','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dwz')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_dwz','url')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dwz')." ADD   `url` varchar(1000) NOT NULL COMMENT '网址'");}
if(!pdo_fieldexists('tiger_newhu_dwz','durl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dwz')." ADD   `durl` varchar(1000) NOT NULL COMMENT '缩短网址'");}
if(!pdo_fieldexists('tiger_newhu_dwz','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dwz')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_dwz','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_dwz')." ADD   PRIMARY KEY (`id`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_fztype` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `px` int(10) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL,
  `fftype` int(3) NOT NULL DEFAULT '0' COMMENT '分类',
  `dtkcid` varchar(10) NOT NULL COMMENT '大淘客分类',
  `hlcid` varchar(10) NOT NULL COMMENT '互力分类',
  `picurl` varchar(255) NOT NULL COMMENT '封面',
  `cid` varchar(10) DEFAULT '0' COMMENT '上级ID',
  `sokey` varchar(100) DEFAULT NULL COMMENT '搜索词',
  `picurl2` varchar(255) NOT NULL COMMENT '搜索界面图标',
  `wlurl` varchar(255) NOT NULL COMMENT '外链',
  `tag` varchar(250) NOT NULL COMMENT '男装 衬衫|男装 裤',
  `createtime` int(10) NOT NULL,
  `shztype` varchar(10) DEFAULT '' COMMENT '实惠猪分类',
  `ysdtype` varchar(10) DEFAULT '' COMMENT '一手单分类',
  `tkzstype` varchar(10) DEFAULT '' COMMENT '淘客助手分类',
  `qtktype` varchar(10) DEFAULT '' COMMENT '轻淘客分类',
  `hpttype` varchar(10) DEFAULT '' COMMENT '好品推分类',
  `tkjdtype` varchar(10) DEFAULT '' COMMENT '淘客基地分类',
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `cid` (`cid`),
  KEY `fftype` (`fftype`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_fztype','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_fztype','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_fztype','px')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   `px` int(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_fztype','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   `title` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_fztype','fftype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   `fftype` int(3) NOT NULL DEFAULT '0' COMMENT '分类'");}
if(!pdo_fieldexists('tiger_newhu_fztype','dtkcid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   `dtkcid` varchar(10) NOT NULL COMMENT '大淘客分类'");}
if(!pdo_fieldexists('tiger_newhu_fztype','hlcid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   `hlcid` varchar(10) NOT NULL COMMENT '互力分类'");}
if(!pdo_fieldexists('tiger_newhu_fztype','picurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   `picurl` varchar(255) NOT NULL COMMENT '封面'");}
if(!pdo_fieldexists('tiger_newhu_fztype','cid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   `cid` varchar(10) DEFAULT '0' COMMENT '上级ID'");}
if(!pdo_fieldexists('tiger_newhu_fztype','sokey')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   `sokey` varchar(100) DEFAULT NULL COMMENT '搜索词'");}
if(!pdo_fieldexists('tiger_newhu_fztype','picurl2')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   `picurl2` varchar(255) NOT NULL COMMENT '搜索界面图标'");}
if(!pdo_fieldexists('tiger_newhu_fztype','wlurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   `wlurl` varchar(255) NOT NULL COMMENT '外链'");}
if(!pdo_fieldexists('tiger_newhu_fztype','tag')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   `tag` varchar(250) NOT NULL COMMENT '男装 衬衫|男装 裤'");}
if(!pdo_fieldexists('tiger_newhu_fztype','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_fztype','shztype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   `shztype` varchar(10) DEFAULT '' COMMENT '实惠猪分类'");}
if(!pdo_fieldexists('tiger_newhu_fztype','ysdtype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   `ysdtype` varchar(10) DEFAULT '' COMMENT '一手单分类'");}
if(!pdo_fieldexists('tiger_newhu_fztype','tkzstype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   `tkzstype` varchar(10) DEFAULT '' COMMENT '淘客助手分类'");}
if(!pdo_fieldexists('tiger_newhu_fztype','qtktype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   `qtktype` varchar(10) DEFAULT '' COMMENT '轻淘客分类'");}
if(!pdo_fieldexists('tiger_newhu_fztype','hpttype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   `hpttype` varchar(10) DEFAULT '' COMMENT '好品推分类'");}
if(!pdo_fieldexists('tiger_newhu_fztype','tkjdtype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   `tkjdtype` varchar(10) DEFAULT '' COMMENT '淘客基地分类'");}
if(!pdo_fieldexists('tiger_newhu_fztype','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_fztype','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   KEY `weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_fztype','cid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype')." ADD   KEY `cid` (`cid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_fztype2` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `px` int(10) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL COMMENT '二级分类名称',
  `cid` int(5) NOT NULL DEFAULT '0' COMMENT '上级分类ID',
  `picurl` varchar(255) NOT NULL COMMENT '封面',
  `wlurl` varchar(255) NOT NULL COMMENT '外链',
  `sokey` varchar(250) NOT NULL COMMENT '搜索关键词',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `cid` (`cid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_fztype2','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype2')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_fztype2','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype2')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_fztype2','px')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype2')." ADD   `px` int(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_fztype2','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype2')." ADD   `title` varchar(50) NOT NULL COMMENT '二级分类名称'");}
if(!pdo_fieldexists('tiger_newhu_fztype2','cid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype2')." ADD   `cid` int(5) NOT NULL DEFAULT '0' COMMENT '上级分类ID'");}
if(!pdo_fieldexists('tiger_newhu_fztype2','picurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype2')." ADD   `picurl` varchar(255) NOT NULL COMMENT '封面'");}
if(!pdo_fieldexists('tiger_newhu_fztype2','wlurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype2')." ADD   `wlurl` varchar(255) NOT NULL COMMENT '外链'");}
if(!pdo_fieldexists('tiger_newhu_fztype2','sokey')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype2')." ADD   `sokey` varchar(250) NOT NULL COMMENT '搜索关键词'");}
if(!pdo_fieldexists('tiger_newhu_fztype2','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype2')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_fztype2','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype2')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_fztype2','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_fztype2')." ADD   KEY `weid` (`weid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_gfhuodong` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `px` int(10) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL,
  `type` int(3) NOT NULL DEFAULT '0' COMMENT '分类',
  `picurl` varchar(255) NOT NULL COMMENT '图片',
  `turl` varchar(255) NOT NULL COMMENT '外链',
  `kouling` varchar(255) NOT NULL COMMENT '口令',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `type` (`type`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_gfhuodong','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_gfhuodong')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_gfhuodong','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_gfhuodong')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_gfhuodong','px')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_gfhuodong')." ADD   `px` int(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_gfhuodong','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_gfhuodong')." ADD   `title` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_gfhuodong','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_gfhuodong')." ADD   `type` int(3) NOT NULL DEFAULT '0' COMMENT '分类'");}
if(!pdo_fieldexists('tiger_newhu_gfhuodong','picurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_gfhuodong')." ADD   `picurl` varchar(255) NOT NULL COMMENT '图片'");}
if(!pdo_fieldexists('tiger_newhu_gfhuodong','turl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_gfhuodong')." ADD   `turl` varchar(255) NOT NULL COMMENT '外链'");}
if(!pdo_fieldexists('tiger_newhu_gfhuodong','kouling')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_gfhuodong')." ADD   `kouling` varchar(255) NOT NULL COMMENT '口令'");}
if(!pdo_fieldexists('tiger_newhu_gfhuodong','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_gfhuodong')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_gfhuodong','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_gfhuodong')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_gfhuodong','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_gfhuodong')." ADD   KEY `weid` (`weid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_goods` (
  `goods_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `px` int(10) NOT NULL DEFAULT '0',
  `shtype` int(2) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL,
  `hot` varchar(50) NOT NULL,
  `hotcolor` varchar(50) NOT NULL,
  `leibei` varchar(10) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `appurl` varchar(300) DEFAULT '0',
  `amount` int(11) NOT NULL DEFAULT '0',
  `day_sum` int(11) NOT NULL DEFAULT '0',
  `cardid` varchar(200) NOT NULL,
  `taokouling` varchar(200) NOT NULL,
  `deadline` datetime NOT NULL,
  `per_user_limit` int(11) NOT NULL DEFAULT '0',
  `starttime` varchar(12) DEFAULT NULL,
  `endtime` varchar(12) DEFAULT NULL,
  `cost` int(11) NOT NULL DEFAULT '0',
  `cost_type` int(11) NOT NULL DEFAULT '1' COMMENT '1系统积分 2会员积分 4,8等留作扩展',
  `price` decimal(10,2) NOT NULL DEFAULT '0.10' COMMENT '商品价格',
  `fxprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '返现',
  `vip_require` int(10) NOT NULL DEFAULT '0' COMMENT '兑换最低VIP级别',
  `content` text NOT NULL,
  `type` int(11) NOT NULL DEFAULT '0' COMMENT '是否需要填写收货地址,1,实物需要填写地址,0虚拟物品不需要填写地址',
  `dj_link` varchar(255) NOT NULL,
  `wl_link` varchar(255) NOT NULL,
  `createtime` int(10) NOT NULL,
  `ordrsum` int(11) DEFAULT '0',
  `ordermsg` varchar(200) DEFAULT '',
  PRIMARY KEY (`goods_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_goods','goods_id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD 
  `goods_id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_goods','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_goods','px')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `px` int(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_goods','shtype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `shtype` int(2) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_goods','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `title` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_goods','hot')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `hot` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_goods','hotcolor')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `hotcolor` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_goods','leibei')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `leibei` varchar(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_goods','logo')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `logo` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_goods','appurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `appurl` varchar(300) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_goods','amount')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `amount` int(11) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_goods','day_sum')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `day_sum` int(11) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_goods','cardid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `cardid` varchar(200) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_goods','taokouling')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `taokouling` varchar(200) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_goods','deadline')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `deadline` datetime NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_goods','per_user_limit')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `per_user_limit` int(11) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_goods','starttime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `starttime` varchar(12) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_goods','endtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `endtime` varchar(12) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_goods','cost')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `cost` int(11) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_goods','cost_type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `cost_type` int(11) NOT NULL DEFAULT '1' COMMENT '1系统积分 2会员积分 4,8等留作扩展'");}
if(!pdo_fieldexists('tiger_newhu_goods','price')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `price` decimal(10,2) NOT NULL DEFAULT '0.10' COMMENT '商品价格'");}
if(!pdo_fieldexists('tiger_newhu_goods','fxprice')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `fxprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '返现'");}
if(!pdo_fieldexists('tiger_newhu_goods','vip_require')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `vip_require` int(10) NOT NULL DEFAULT '0' COMMENT '兑换最低VIP级别'");}
if(!pdo_fieldexists('tiger_newhu_goods','content')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `content` text NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_goods','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `type` int(11) NOT NULL DEFAULT '0' COMMENT '是否需要填写收货地址,1,实物需要填写地址,0虚拟物品不需要填写地址'");}
if(!pdo_fieldexists('tiger_newhu_goods','dj_link')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `dj_link` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_goods','wl_link')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `wl_link` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_goods','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_goods','ordrsum')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `ordrsum` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_goods','ordermsg')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_goods')." ADD   `ordermsg` varchar(200) DEFAULT ''");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_hexiao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `dianyanid` int(11) DEFAULT '0',
  `openid` varchar(50) DEFAULT '0',
  `nickname` varchar(50) DEFAULT '0',
  `ename` varchar(50) DEFAULT '0',
  `companyname` varchar(200) DEFAULT '0',
  `goodname` varchar(200) DEFAULT '0',
  `goodid` int(11) DEFAULT '0',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_hexiao','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_hexiao')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_hexiao','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_hexiao')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_hexiao','dianyanid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_hexiao')." ADD   `dianyanid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_hexiao','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_hexiao')." ADD   `openid` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_hexiao','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_hexiao')." ADD   `nickname` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_hexiao','ename')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_hexiao')." ADD   `ename` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_hexiao','companyname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_hexiao')." ADD   `companyname` varchar(200) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_hexiao','goodname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_hexiao')." ADD   `goodname` varchar(200) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_hexiao','goodid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_hexiao')." ADD   `goodid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_hexiao','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_hexiao')." ADD   `createtime` int(10) NOT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_jdorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `finishTime` varchar(100) DEFAULT '0' COMMENT '订单完成时间',
  `orderEmt` varchar(100) DEFAULT '0' COMMENT '下单设备(1:PC,2:无线)',
  `orderId` varchar(100) DEFAULT '0' COMMENT '订单ID',
  `orderTime` varchar(100) DEFAULT '0' COMMENT '下单时间',
  `parentId` varchar(255) DEFAULT '0' COMMENT '父单ID（订单拆分后,父单的订单号）',
  `payMonth` varchar(255) DEFAULT '0' COMMENT '结算日期（yyyyMMdd）',
  `plus` varchar(255) DEFAULT '0' COMMENT 'plus会员（0：不是，1：是）',
  `popId` varchar(255) DEFAULT '0' COMMENT '商家ID',
  `actualCommission` varchar(255) DEFAULT '0' COMMENT '实际佣金',
  `actualCosPrice` varchar(255) DEFAULT '0' COMMENT '实际计佣金额',
  `actualFee` varchar(255) DEFAULT '0' COMMENT '站长的实际佣金',
  `commissionRate` varchar(255) DEFAULT '0' COMMENT '佣金比例',
  `estimateCommission` varchar(255) DEFAULT '0' COMMENT '预估佣金',
  `estimateCosPrice` varchar(20) DEFAULT '0' COMMENT '预估计佣金额',
  `estimateFee` varchar(150) DEFAULT '0' COMMENT '站长的预估佣金',
  `finalRate` varchar(150) DEFAULT '0' COMMENT '最终比例 (一级分佣比例*二级分佣比例)',
  `firstLevel` varchar(150) DEFAULT '0' COMMENT '一级类目',
  `frozenSkuNum` varchar(150) DEFAULT '0' COMMENT '商品售后中数量',
  `payPrice` varchar(10) DEFAULT '0' COMMENT '实际支付金额',
  `pid` varchar(50) DEFAULT '0' COMMENT '子站长ID_子站长网站ID_子站长推广位ID',
  `price` varchar(20) DEFAULT '0' COMMENT '商品单价',
  `secondLevel` varchar(10) DEFAULT '0' COMMENT '二级类目',
  `siteId` varchar(20) DEFAULT '0' COMMENT '网站ID',
  `skuId` varchar(20) DEFAULT '0' COMMENT '商品ID',
  `skuName` varchar(300) DEFAULT '0' COMMENT '商品名称',
  `skuNum` varchar(100) DEFAULT '0' COMMENT '商品数量',
  `skuReturnNum` varchar(10) DEFAULT '0' COMMENT '商品已退货数量',
  `spId` varchar(50) DEFAULT '0' COMMENT '推广位ID',
  `subSideRate` varchar(50) DEFAULT '0' COMMENT '分成比例',
  `subUnionId` varchar(50) DEFAULT '0' COMMENT '子联盟ID',
  `subsidyRate` varchar(50) DEFAULT '0' COMMENT '补贴比例',
  `thirdLevel` varchar(50) DEFAULT '0' COMMENT '三级类目',
  `traceType` varchar(50) DEFAULT '0' COMMENT '2同店 3跨店',
  `unionAlias` varchar(50) DEFAULT '0' COMMENT '第三方服务来源',
  `unionTrafficGroup` varchar(50) DEFAULT '0' COMMENT '渠道组（1：1号店，其他：京东）',
  `unionTag` varchar(50) DEFAULT '0' COMMENT '联盟标签数据',
  `validCode` varchar(50) DEFAULT '0' COMMENT '有效码（-1：未知,2.无效-拆单,3.无效-取消,4.无效-京东帮帮主订单,5.无效-账号异常,6.无效-赠品类目不返佣,7.无效-校园订单,8.无效-企业订单,9.无效-团购订单,10.无效-开增值税专用发票订单,11.无效-乡村推广员下单,12.无效-自己推广自己下单,13.无效-违规订单,14.无效-来源与备案网址不符,15.待付款,16.已付款,17.已完成,18.已结算）',
  `unionId` varchar(50) DEFAULT '0' COMMENT '站长ID',
  `unionUserName` varchar(50) DEFAULT '0' COMMENT '扩展信息',
  `createtime` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ord_w_id` (`weid`,`orderId`,`skuId`),
  KEY `weid` (`weid`),
  KEY `orderTime` (`orderTime`),
  KEY `finishTime` (`finishTime`),
  KEY `spId` (`spId`),
  KEY `orderId` (`orderId`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_jdorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_jdorder','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','finishTime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `finishTime` varchar(100) DEFAULT '0' COMMENT '订单完成时间'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','orderEmt')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `orderEmt` varchar(100) DEFAULT '0' COMMENT '下单设备(1:PC,2:无线)'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','orderId')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `orderId` varchar(100) DEFAULT '0' COMMENT '订单ID'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','orderTime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `orderTime` varchar(100) DEFAULT '0' COMMENT '下单时间'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','parentId')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `parentId` varchar(255) DEFAULT '0' COMMENT '父单ID（订单拆分后,父单的订单号）'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','payMonth')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `payMonth` varchar(255) DEFAULT '0' COMMENT '结算日期（yyyyMMdd）'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','plus')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `plus` varchar(255) DEFAULT '0' COMMENT 'plus会员（0：不是，1：是）'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','popId')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `popId` varchar(255) DEFAULT '0' COMMENT '商家ID'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','actualCommission')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `actualCommission` varchar(255) DEFAULT '0' COMMENT '实际佣金'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','actualCosPrice')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `actualCosPrice` varchar(255) DEFAULT '0' COMMENT '实际计佣金额'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','actualFee')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `actualFee` varchar(255) DEFAULT '0' COMMENT '站长的实际佣金'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','commissionRate')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `commissionRate` varchar(255) DEFAULT '0' COMMENT '佣金比例'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','estimateCommission')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `estimateCommission` varchar(255) DEFAULT '0' COMMENT '预估佣金'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','estimateCosPrice')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `estimateCosPrice` varchar(20) DEFAULT '0' COMMENT '预估计佣金额'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','estimateFee')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `estimateFee` varchar(150) DEFAULT '0' COMMENT '站长的预估佣金'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','finalRate')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `finalRate` varchar(150) DEFAULT '0' COMMENT '最终比例 (一级分佣比例*二级分佣比例)'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','firstLevel')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `firstLevel` varchar(150) DEFAULT '0' COMMENT '一级类目'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','frozenSkuNum')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `frozenSkuNum` varchar(150) DEFAULT '0' COMMENT '商品售后中数量'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','payPrice')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `payPrice` varchar(10) DEFAULT '0' COMMENT '实际支付金额'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','pid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `pid` varchar(50) DEFAULT '0' COMMENT '子站长ID_子站长网站ID_子站长推广位ID'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','price')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `price` varchar(20) DEFAULT '0' COMMENT '商品单价'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','secondLevel')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `secondLevel` varchar(10) DEFAULT '0' COMMENT '二级类目'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','siteId')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `siteId` varchar(20) DEFAULT '0' COMMENT '网站ID'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','skuId')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `skuId` varchar(20) DEFAULT '0' COMMENT '商品ID'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','skuName')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `skuName` varchar(300) DEFAULT '0' COMMENT '商品名称'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','skuNum')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `skuNum` varchar(100) DEFAULT '0' COMMENT '商品数量'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','skuReturnNum')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `skuReturnNum` varchar(10) DEFAULT '0' COMMENT '商品已退货数量'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','spId')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `spId` varchar(50) DEFAULT '0' COMMENT '推广位ID'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','subSideRate')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `subSideRate` varchar(50) DEFAULT '0' COMMENT '分成比例'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','subUnionId')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `subUnionId` varchar(50) DEFAULT '0' COMMENT '子联盟ID'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','subsidyRate')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `subsidyRate` varchar(50) DEFAULT '0' COMMENT '补贴比例'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','thirdLevel')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `thirdLevel` varchar(50) DEFAULT '0' COMMENT '三级类目'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','traceType')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `traceType` varchar(50) DEFAULT '0' COMMENT '2同店 3跨店'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','unionAlias')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `unionAlias` varchar(50) DEFAULT '0' COMMENT '第三方服务来源'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','unionTrafficGroup')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `unionTrafficGroup` varchar(50) DEFAULT '0' COMMENT '渠道组（1：1号店，其他：京东）'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','unionTag')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `unionTag` varchar(50) DEFAULT '0' COMMENT '联盟标签数据'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','validCode')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `validCode` varchar(50) DEFAULT '0' COMMENT '有效码（-1：未知,2.无效-拆单,3.无效-取消,4.无效-京东帮帮主订单,5.无效-账号异常,6.无效-赠品类目不返佣,7.无效-校园订单,8.无效-企业订单,9.无效-团购订单,10.无效-开增值税专用发票订单,11.无效-乡村推广员下单,12.无效-自己推广自己下单,13.无效-违规订单,14.无效-来源与备案网址不符,15.待付款,16.已付款,17.已完成,18.已结算）'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','unionId')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `unionId` varchar(50) DEFAULT '0' COMMENT '站长ID'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','unionUserName')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `unionUserName` varchar(50) DEFAULT '0' COMMENT '扩展信息'");}
if(!pdo_fieldexists('tiger_newhu_jdorder','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   `createtime` varchar(20) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_jdorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_jdorder','ord_w_id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   UNIQUE KEY `ord_w_id` (`weid`,`orderId`,`skuId`)");}
if(!pdo_fieldexists('tiger_newhu_jdorder','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   KEY `weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_jdorder','orderTime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   KEY `orderTime` (`orderTime`)");}
if(!pdo_fieldexists('tiger_newhu_jdorder','finishTime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   KEY `finishTime` (`finishTime`)");}
if(!pdo_fieldexists('tiger_newhu_jdorder','spId')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdorder')." ADD   KEY `spId` (`spId`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_jdtjorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `openid` varchar(255) DEFAULT '0',
  `nickname` varchar(255) DEFAULT '0',
  `avatar` varchar(255) DEFAULT '0',
  `jlnickname` varchar(255) DEFAULT '0' COMMENT '订单所有人',
  `jlavatar` varchar(255) DEFAULT '0' COMMENT '订单所有人',
  `memberid` varchar(255) DEFAULT '0' COMMENT '微擎会员编号',
  `uid` varchar(20) DEFAULT NULL COMMENT '用户UID share表',
  `orderid` varchar(255) DEFAULT '0' COMMENT '订单编号',
  `price` varchar(255) DEFAULT '0' COMMENT '奖励金额',
  `yongjin` varchar(255) DEFAULT '0' COMMENT '佣金',
  `type` varchar(255) DEFAULT '0' COMMENT '类型 0 自有  1级奖励 2级奖励',
  `sh` varchar(255) DEFAULT '0' COMMENT '是否审核 0  1待返 2已返 3审核 4失效',
  `msg` varchar(255) DEFAULT '0' COMMENT '留言',
  `itemid` varchar(100) DEFAULT '0' COMMENT '商品ID',
  `jl` varchar(20) DEFAULT '0' COMMENT '奖励金额或是积分',
  `jltype` int(10) DEFAULT '0' COMMENT '0积分 1余额',
  `createtime` varchar(255) NOT NULL,
  `cjdd` int(10) DEFAULT '0',
  `jluid` varchar(20) DEFAULT '',
  `tztype` int(5) DEFAULT '0' COMMENT '1 为普通用户 团长分佣',
  PRIMARY KEY (`id`),
  KEY `indx_weid` (`weid`),
  KEY `itemid` (`itemid`),
  KEY `indx_orderid` (`orderid`),
  KEY `indx_openid` (`openid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_jdtjorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `openid` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `nickname` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','avatar')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `avatar` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','jlnickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `jlnickname` varchar(255) DEFAULT '0' COMMENT '订单所有人'");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','jlavatar')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `jlavatar` varchar(255) DEFAULT '0' COMMENT '订单所有人'");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','memberid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `memberid` varchar(255) DEFAULT '0' COMMENT '微擎会员编号'");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `uid` varchar(20) DEFAULT NULL COMMENT '用户UID share表'");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','orderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `orderid` varchar(255) DEFAULT '0' COMMENT '订单编号'");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','price')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `price` varchar(255) DEFAULT '0' COMMENT '奖励金额'");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','yongjin')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `yongjin` varchar(255) DEFAULT '0' COMMENT '佣金'");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `type` varchar(255) DEFAULT '0' COMMENT '类型 0 自有  1级奖励 2级奖励'");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','sh')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `sh` varchar(255) DEFAULT '0' COMMENT '是否审核 0  1待返 2已返 3审核 4失效'");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','msg')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `msg` varchar(255) DEFAULT '0' COMMENT '留言'");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','itemid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `itemid` varchar(100) DEFAULT '0' COMMENT '商品ID'");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','jl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `jl` varchar(20) DEFAULT '0' COMMENT '奖励金额或是积分'");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','jltype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `jltype` int(10) DEFAULT '0' COMMENT '0积分 1余额'");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `createtime` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','cjdd')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `cjdd` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','jluid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `jluid` varchar(20) DEFAULT ''");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','tztype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   `tztype` int(5) DEFAULT '0' COMMENT '1 为普通用户 团长分佣'");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','indx_weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   KEY `indx_weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','itemid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   KEY `itemid` (`itemid`)");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','indx_orderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   KEY `indx_orderid` (`orderid`)");}
if(!pdo_fieldexists('tiger_newhu_jdtjorder','indx_openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdtjorder')." ADD   KEY `indx_openid` (`openid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_jdyfgorder` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `uid` varchar(100) NOT NULL,
  `orderid` varchar(100) NOT NULL,
  `ordertime` varchar(50) NOT NULL,
  `finishtime` varchar(50) NOT NULL,
  `pid` varchar(50) NOT NULL,
  `goods_id` varchar(100) DEFAULT '0',
  `goods_name` varchar(200) NOT NULL,
  `goods_num` varchar(10) NOT NULL DEFAULT '0',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `goods_frozennum` varchar(50) NOT NULL,
  `goods_returnnum` varchar(50) NOT NULL,
  `cosprice` varchar(20) NOT NULL,
  `subunionid` varchar(100) NOT NULL,
  `yn` varchar(10) NOT NULL,
  `sh` varchar(2) DEFAULT '0',
  `ynstatus` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `indx_weid` (`weid`),
  KEY `orderid` (`orderid`),
  KEY `ordertime` (`ordertime`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_jdyfgorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   `uid` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','orderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   `orderid` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','ordertime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   `ordertime` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','finishtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   `finishtime` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','pid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   `pid` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','goods_id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   `goods_id` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','goods_name')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   `goods_name` varchar(200) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','goods_num')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   `goods_num` varchar(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   `createtime` int(10) unsigned NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','goods_frozennum')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   `goods_frozennum` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','goods_returnnum')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   `goods_returnnum` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','cosprice')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   `cosprice` varchar(20) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','subunionid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   `subunionid` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','yn')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   `yn` varchar(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','sh')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   `sh` varchar(2) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','ynstatus')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   `ynstatus` varchar(20) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','indx_weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   KEY `indx_weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_jdyfgorder','orderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jdyfgorder')." ADD   KEY `orderid` (`orderid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_jl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL,
  `weid` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '0 积分  1 余额',
  `typelx` tinyint(3) unsigned NOT NULL COMMENT '1签到    2关注邀请    3取消关注   4订单奖励',
  `num` decimal(30,2) NOT NULL DEFAULT '0.00' COMMENT '金额和积分 有正负',
  `createtime` int(10) unsigned NOT NULL COMMENT '创建时间',
  `remark` varchar(200) NOT NULL COMMENT '如：签到奖励',
  `orderid` varchar(200) NOT NULL COMMENT '订单号',
  PRIMARY KEY (`id`),
  UNIQUE KEY `wuncid` (`weid`,`uid`,`num`,`createtime`),
  KEY `weid` (`weid`),
  KEY `type` (`type`),
  KEY `typelx` (`typelx`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_jl','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jl')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_jl','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jl')." ADD   `uid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_jl','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jl')." ADD   `weid` int(11) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_jl','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jl')." ADD   `type` int(11) NOT NULL COMMENT '0 积分  1 余额'");}
if(!pdo_fieldexists('tiger_newhu_jl','typelx')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jl')." ADD   `typelx` tinyint(3) unsigned NOT NULL COMMENT '1签到    2关注邀请    3取消关注   4订单奖励'");}
if(!pdo_fieldexists('tiger_newhu_jl','num')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jl')." ADD   `num` decimal(30,2) NOT NULL DEFAULT '0.00' COMMENT '金额和积分 有正负'");}
if(!pdo_fieldexists('tiger_newhu_jl','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jl')." ADD   `createtime` int(10) unsigned NOT NULL COMMENT '创建时间'");}
if(!pdo_fieldexists('tiger_newhu_jl','remark')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jl')." ADD   `remark` varchar(200) NOT NULL COMMENT '如：签到奖励'");}
if(!pdo_fieldexists('tiger_newhu_jl','orderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jl')." ADD   `orderid` varchar(200) NOT NULL COMMENT '订单号'");}
if(!pdo_fieldexists('tiger_newhu_jl','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jl')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_jl','wuncid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jl')." ADD   UNIQUE KEY `wuncid` (`weid`,`uid`,`num`,`createtime`)");}
if(!pdo_fieldexists('tiger_newhu_jl','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jl')." ADD   KEY `weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_jl','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jl')." ADD   KEY `type` (`type`)");}
if(!pdo_fieldexists('tiger_newhu_jl','typelx')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_jl')." ADD   KEY `typelx` (`typelx`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_lxorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `addtime` varchar(50) DEFAULT NULL,
  `jhtime` varchar(50) DEFAULT NULL,
  `sgtime` varchar(50) DEFAULT NULL,
  `newtel` varchar(50) DEFAULT NULL,
  `xrzt` varchar(100) DEFAULT NULL,
  `ddlx` varchar(100) DEFAULT NULL,
  `fxyh` varchar(100) DEFAULT NULL,
  `mtid` varchar(100) DEFAULT NULL,
  `mtname` varchar(100) DEFAULT NULL,
  `tgwid` varchar(100) DEFAULT NULL,
  `tgwname` varchar(100) DEFAULT NULL,
  `orderid` varchar(100) DEFAULT NULL,
  `createtime` int(10) NOT NULL,
  `qrshtime` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `tgwid` (`tgwid`),
  KEY `addtime` (`addtime`),
  KEY `sgtime` (`sgtime`),
  KEY `xrzt` (`xrzt`),
  KEY `ddlx` (`ddlx`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_lxorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_lxorder','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_lxorder','addtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   `addtime` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_lxorder','jhtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   `jhtime` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_lxorder','sgtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   `sgtime` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_lxorder','newtel')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   `newtel` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_lxorder','xrzt')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   `xrzt` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_lxorder','ddlx')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   `ddlx` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_lxorder','fxyh')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   `fxyh` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_lxorder','mtid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   `mtid` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_lxorder','mtname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   `mtname` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_lxorder','tgwid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   `tgwid` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_lxorder','tgwname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   `tgwname` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_lxorder','orderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   `orderid` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_lxorder','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_lxorder','qrshtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   `qrshtime` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_lxorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_lxorder','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   KEY `weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_lxorder','tgwid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   KEY `tgwid` (`tgwid`)");}
if(!pdo_fieldexists('tiger_newhu_lxorder','addtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   KEY `addtime` (`addtime`)");}
if(!pdo_fieldexists('tiger_newhu_lxorder','sgtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   KEY `sgtime` (`sgtime`)");}
if(!pdo_fieldexists('tiger_newhu_lxorder','xrzt')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_lxorder')." ADD   KEY `xrzt` (`xrzt`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_mdorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `openid` varchar(255) DEFAULT '0',
  `nickname` varchar(255) DEFAULT '0',
  `avatar` varchar(255) DEFAULT '0',
  `uid` varchar(20) DEFAULT NULL COMMENT '用户UID share表',
  `orderid` varchar(255) DEFAULT '0' COMMENT '订单编号',
  `price` varchar(255) DEFAULT '0' COMMENT '购买实付金额',
  `yongjin` varchar(255) DEFAULT '0' COMMENT '直实得到佣金',
  `type` varchar(255) DEFAULT '0' COMMENT '类型0新人免单  1邀请好友免单  2自购免单',
  `sh` varchar(255) DEFAULT '0' COMMENT '是否审核 0  1待返 2已返 3审核 4失效',
  `msg` varchar(255) DEFAULT '0' COMMENT '留言',
  `itemid` varchar(100) DEFAULT '0' COMMENT '商品ID',
  `jl` varchar(20) DEFAULT '0' COMMENT '奖励金额或是积分',
  `jltype` int(10) DEFAULT '0' COMMENT '0积分 1余额',
  `createtime` varchar(12) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `itemid` (`itemid`),
  KEY `orderid` (`orderid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_mdorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_mdorder','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_mdorder','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD   `openid` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_mdorder','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD   `nickname` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_mdorder','avatar')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD   `avatar` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_mdorder','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD   `uid` varchar(20) DEFAULT NULL COMMENT '用户UID share表'");}
if(!pdo_fieldexists('tiger_newhu_mdorder','orderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD   `orderid` varchar(255) DEFAULT '0' COMMENT '订单编号'");}
if(!pdo_fieldexists('tiger_newhu_mdorder','price')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD   `price` varchar(255) DEFAULT '0' COMMENT '购买实付金额'");}
if(!pdo_fieldexists('tiger_newhu_mdorder','yongjin')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD   `yongjin` varchar(255) DEFAULT '0' COMMENT '直实得到佣金'");}
if(!pdo_fieldexists('tiger_newhu_mdorder','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD   `type` varchar(255) DEFAULT '0' COMMENT '类型0新人免单  1邀请好友免单  2自购免单'");}
if(!pdo_fieldexists('tiger_newhu_mdorder','sh')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD   `sh` varchar(255) DEFAULT '0' COMMENT '是否审核 0  1待返 2已返 3审核 4失效'");}
if(!pdo_fieldexists('tiger_newhu_mdorder','msg')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD   `msg` varchar(255) DEFAULT '0' COMMENT '留言'");}
if(!pdo_fieldexists('tiger_newhu_mdorder','itemid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD   `itemid` varchar(100) DEFAULT '0' COMMENT '商品ID'");}
if(!pdo_fieldexists('tiger_newhu_mdorder','jl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD   `jl` varchar(20) DEFAULT '0' COMMENT '奖励金额或是积分'");}
if(!pdo_fieldexists('tiger_newhu_mdorder','jltype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD   `jltype` int(10) DEFAULT '0' COMMENT '0积分 1余额'");}
if(!pdo_fieldexists('tiger_newhu_mdorder','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD   `createtime` varchar(12) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_mdorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_mdorder','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD   KEY `weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_mdorder','itemid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD   KEY `itemid` (`itemid`)");}
if(!pdo_fieldexists('tiger_newhu_mdorder','orderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mdorder')." ADD   KEY `orderid` (`orderid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) NOT NULL,
  `from_user` varchar(100) NOT NULL,
  `openid` varchar(100) NOT NULL,
  `helpid` int(11) NOT NULL,
  `unionid` varchar(100) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `sex` tinyint(1) NOT NULL DEFAULT '0',
  `follow` tinyint(1) NOT NULL DEFAULT '0',
  `headimgurl` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `time` int(13) DEFAULT NULL,
  `enable` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_member','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_member')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_member','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_member')." ADD   `weid` int(11) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_member','from_user')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_member')." ADD   `from_user` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_member','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_member')." ADD   `openid` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_member','helpid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_member')." ADD   `helpid` int(11) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_member','unionid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_member')." ADD   `unionid` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_member','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_member')." ADD   `nickname` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_member','sex')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_member')." ADD   `sex` tinyint(1) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_member','follow')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_member')." ADD   `follow` tinyint(1) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_member','headimgurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_member')." ADD   `headimgurl` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_member','city')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_member')." ADD   `city` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_member','province')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_member')." ADD   `province` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_member','country')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_member')." ADD   `country` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_member','time')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_member')." ADD   `time` int(13) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_member','enable')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_member')." ADD   `enable` tinyint(1) NOT NULL DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_miandangoods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `itemtitle` varchar(300) DEFAULT NULL,
  `shoptype` int(10) DEFAULT '0',
  `itemid` varchar(200) DEFAULT NULL,
  `itemprice` varchar(200) DEFAULT NULL,
  `itemendprice` varchar(200) DEFAULT NULL,
  `couponmoney` varchar(200) DEFAULT NULL,
  `itemsale` varchar(200) DEFAULT NULL,
  `rate` varchar(50) DEFAULT NULL COMMENT '佣金比例',
  `url` varchar(500) DEFAULT NULL,
  `shopTitle` varchar(300) DEFAULT '0',
  `itempic` varchar(300) DEFAULT '0',
  `pid` varchar(200) DEFAULT '0',
  `lm` int(10) DEFAULT '0',
  `rhyurl` varchar(500) DEFAULT '0',
  `tkl` varchar(200) DEFAULT '0',
  `couponnum` varchar(200) DEFAULT '0',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_weid` (`weid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_miandangoods','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_miandangoods','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_miandangoods','itemtitle')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD   `itemtitle` varchar(300) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_miandangoods','shoptype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD   `shoptype` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_miandangoods','itemid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD   `itemid` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_miandangoods','itemprice')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD   `itemprice` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_miandangoods','itemendprice')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD   `itemendprice` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_miandangoods','couponmoney')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD   `couponmoney` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_miandangoods','itemsale')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD   `itemsale` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_miandangoods','rate')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD   `rate` varchar(50) DEFAULT NULL COMMENT '佣金比例'");}
if(!pdo_fieldexists('tiger_newhu_miandangoods','url')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD   `url` varchar(500) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_miandangoods','shopTitle')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD   `shopTitle` varchar(300) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_miandangoods','itempic')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD   `itempic` varchar(300) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_miandangoods','pid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD   `pid` varchar(200) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_miandangoods','lm')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD   `lm` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_miandangoods','rhyurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD   `rhyurl` varchar(500) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_miandangoods','tkl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD   `tkl` varchar(200) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_miandangoods','couponnum')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD   `couponnum` varchar(200) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_miandangoods','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_miandangoods','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandangoods')." ADD   PRIMARY KEY (`id`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_miandanset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `mdtype` int(3) DEFAULT '0' COMMENT '免单开关1 开',
  `mdrensum` int(3) DEFAULT '0' COMMENT '免单几天内,算新用户',
  `starttime` varchar(200) DEFAULT NULL COMMENT '开始时间',
  `endtime` varchar(200) DEFAULT NULL COMMENT '结束时间',
  `miandanpid` varchar(200) DEFAULT NULL COMMENT '名单指定PID',
  `mdyaoqingcount` int(10) DEFAULT '0' COMMENT '邀请几个好友',
  `content` text,
  `mdyaoqingsum` int(10) DEFAULT '0' COMMENT '邀请几个好友免单几次',
  `mdzgcount` int(10) DEFAULT '0' COMMENT '自购几单',
  `mdzgsum` int(10) DEFAULT '0' COMMENT '自购几单免单几次',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_weid` (`weid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_miandanset','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandanset')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_miandanset','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandanset')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_miandanset','mdtype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandanset')." ADD   `mdtype` int(3) DEFAULT '0' COMMENT '免单开关1 开'");}
if(!pdo_fieldexists('tiger_newhu_miandanset','mdrensum')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandanset')." ADD   `mdrensum` int(3) DEFAULT '0' COMMENT '免单几天内,算新用户'");}
if(!pdo_fieldexists('tiger_newhu_miandanset','starttime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandanset')." ADD   `starttime` varchar(200) DEFAULT NULL COMMENT '开始时间'");}
if(!pdo_fieldexists('tiger_newhu_miandanset','endtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandanset')." ADD   `endtime` varchar(200) DEFAULT NULL COMMENT '结束时间'");}
if(!pdo_fieldexists('tiger_newhu_miandanset','miandanpid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandanset')." ADD   `miandanpid` varchar(200) DEFAULT NULL COMMENT '名单指定PID'");}
if(!pdo_fieldexists('tiger_newhu_miandanset','mdyaoqingcount')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandanset')." ADD   `mdyaoqingcount` int(10) DEFAULT '0' COMMENT '邀请几个好友'");}
if(!pdo_fieldexists('tiger_newhu_miandanset','content')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandanset')." ADD   `content` text");}
if(!pdo_fieldexists('tiger_newhu_miandanset','mdyaoqingsum')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandanset')." ADD   `mdyaoqingsum` int(10) DEFAULT '0' COMMENT '邀请几个好友免单几次'");}
if(!pdo_fieldexists('tiger_newhu_miandanset','mdzgcount')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandanset')." ADD   `mdzgcount` int(10) DEFAULT '0' COMMENT '自购几单'");}
if(!pdo_fieldexists('tiger_newhu_miandanset','mdzgsum')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandanset')." ADD   `mdzgsum` int(10) DEFAULT '0' COMMENT '自购几单免单几次'");}
if(!pdo_fieldexists('tiger_newhu_miandanset','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandanset')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_miandanset','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_miandanset')." ADD   PRIMARY KEY (`id`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_mobanmsg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `title` varchar(250) DEFAULT NULL COMMENT '模版标题',
  `mbid` varchar(250) DEFAULT NULL COMMENT '模版ID',
  `first` varchar(250) DEFAULT NULL COMMENT '头部内容',
  `firstcolor` varchar(100) DEFAULT NULL COMMENT '头部颜色',
  `zjvalue` text COMMENT '中间内容',
  `zjcolor` text COMMENT '中间颜色',
  `remark` varchar(250) DEFAULT NULL COMMENT '尾部内容',
  `remarkcolor` varchar(100) DEFAULT NULL COMMENT '尾部颜色',
  `turl` varchar(250) DEFAULT NULL COMMENT '模版链接',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_mobanmsg','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mobanmsg')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_mobanmsg','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mobanmsg')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_mobanmsg','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mobanmsg')." ADD   `title` varchar(250) DEFAULT NULL COMMENT '模版标题'");}
if(!pdo_fieldexists('tiger_newhu_mobanmsg','mbid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mobanmsg')." ADD   `mbid` varchar(250) DEFAULT NULL COMMENT '模版ID'");}
if(!pdo_fieldexists('tiger_newhu_mobanmsg','first')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mobanmsg')." ADD   `first` varchar(250) DEFAULT NULL COMMENT '头部内容'");}
if(!pdo_fieldexists('tiger_newhu_mobanmsg','firstcolor')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mobanmsg')." ADD   `firstcolor` varchar(100) DEFAULT NULL COMMENT '头部颜色'");}
if(!pdo_fieldexists('tiger_newhu_mobanmsg','zjvalue')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mobanmsg')." ADD   `zjvalue` text COMMENT '中间内容'");}
if(!pdo_fieldexists('tiger_newhu_mobanmsg','zjcolor')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mobanmsg')." ADD   `zjcolor` text COMMENT '中间颜色'");}
if(!pdo_fieldexists('tiger_newhu_mobanmsg','remark')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mobanmsg')." ADD   `remark` varchar(250) DEFAULT NULL COMMENT '尾部内容'");}
if(!pdo_fieldexists('tiger_newhu_mobanmsg','remarkcolor')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mobanmsg')." ADD   `remarkcolor` varchar(100) DEFAULT NULL COMMENT '尾部颜色'");}
if(!pdo_fieldexists('tiger_newhu_mobanmsg','turl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mobanmsg')." ADD   `turl` varchar(250) DEFAULT NULL COMMENT '模版链接'");}
if(!pdo_fieldexists('tiger_newhu_mobanmsg','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mobanmsg')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_mobanmsg','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_mobanmsg')." ADD   PRIMARY KEY (`id`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_msg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `title` varchar(50) NOT NULL,
  `content` varchar(200) NOT NULL,
  `picurl` varchar(255) NOT NULL COMMENT '封面',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_msg','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_msg')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_msg','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_msg')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_msg','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_msg')." ADD   `title` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_msg','content')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_msg')." ADD   `content` varchar(200) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_msg','picurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_msg')." ADD   `picurl` varchar(255) NOT NULL COMMENT '封面'");}
if(!pdo_fieldexists('tiger_newhu_msg','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_msg')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_msg','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_msg')." ADD   PRIMARY KEY (`id`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `px` int(11) DEFAULT '0',
  `type` varchar(250) DEFAULT '0' COMMENT '1 公告  2帮助中心',
  `title` varchar(250) DEFAULT '0',
  `content` text NOT NULL,
  `url` varchar(1000) DEFAULT '0',
  `createtime` int(10) NOT NULL,
  `pttype` int(4) DEFAULT '0',
  `picurl` varchar(500) DEFAULT NULL COMMENT '图片链接',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_news','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_news')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_news','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_news')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_news','px')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_news')." ADD   `px` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_news','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_news')." ADD   `type` varchar(250) DEFAULT '0' COMMENT '1 公告  2帮助中心'");}
if(!pdo_fieldexists('tiger_newhu_news','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_news')." ADD   `title` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_news','content')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_news')." ADD   `content` text NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_news','url')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_news')." ADD   `url` varchar(1000) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_news','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_news')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_news','pttype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_news')." ADD   `pttype` int(4) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_news','picurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_news')." ADD   `picurl` varchar(500) DEFAULT NULL COMMENT '图片链接'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_newtbgoods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) NOT NULL DEFAULT '0' COMMENT 'weid',
  `zy` int(10) NOT NULL DEFAULT '0' COMMENT '1 大淘客  2互力 3鹊桥库',
  `itemid` varchar(50) NOT NULL COMMENT '宝贝ID ',
  `itemtitle` varchar(250) NOT NULL COMMENT '宝贝标题',
  `itemshorttitle` varchar(250) NOT NULL COMMENT '宝贝短标题',
  `itemdesc` varchar(250) NOT NULL COMMENT '宝贝推荐语',
  `itemprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '在售价 原价',
  `itemsale` int(20) NOT NULL DEFAULT '0' COMMENT '宝贝销量',
  `itemsale2` int(20) NOT NULL DEFAULT '0' COMMENT '宝贝最近2小时销量',
  `conversion_ratio` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '优惠券转化率',
  `itempic` varchar(250) NOT NULL COMMENT '宝贝主图原始图像',
  `fqcat` int(3) NOT NULL DEFAULT '0' COMMENT '商品类目',
  `itemendprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '宝贝最后价格 减去优惠券 券后价',
  `shoptype` varchar(10) NOT NULL COMMENT '店铺类型 天猫(B) C店(C) 企业店铺',
  `userid` varchar(50) NOT NULL COMMENT '店主的userid',
  `sellernick` varchar(100) NOT NULL COMMENT '店铺掌柜名',
  `tktype` varchar(100) NOT NULL COMMENT '佣金方式(鹊桥活动 定向计划 通用计划 隐藏计划 营销计划）',
  `tkrates` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '佣金比例',
  `ctrates` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '村淘佣金比例',
  `cuntao` int(10) NOT NULL DEFAULT '0' COMMENT '是否村淘（1是）',
  `tkmoney` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '预计可得(宝贝价格*佣金比率/100) ',
  `tkurl` varchar(250) NOT NULL COMMENT '定向计划链接',
  `couponurl` varchar(250) NOT NULL COMMENT '优惠券链接',
  `planlink` varchar(250) NOT NULL COMMENT '营销计划链接',
  `couponmoney` varchar(50) NOT NULL COMMENT '优惠券面额',
  `couponsurplus` int(20) NOT NULL DEFAULT '0' COMMENT '优惠券剩余数量',
  `couponreceive` int(20) NOT NULL DEFAULT '0' COMMENT '优惠券领取数量',
  `couponreceive2` int(20) NOT NULL DEFAULT '0' COMMENT '2小时内优惠券领取量',
  `couponnum` int(20) NOT NULL DEFAULT '0' COMMENT '优惠券总数量',
  `couponexplain` varchar(100) NOT NULL COMMENT '优惠券说明 使用条件',
  `couponstarttime` varchar(100) NOT NULL COMMENT '优惠券开始时间',
  `couponendtime` varchar(100) NOT NULL COMMENT '优惠券结束时间',
  `starttime` varchar(100) NOT NULL COMMENT '发布时间',
  `isquality` int(10) NOT NULL DEFAULT '0' COMMENT '是否优选 1为是',
  `item_status` int(10) NOT NULL DEFAULT '0' COMMENT '产品状态：0为正常',
  `report_status` int(10) NOT NULL DEFAULT '0' COMMENT '举报处理情况(1为待处理；2为忽略；3为下架)',
  `is_brand` int(10) NOT NULL DEFAULT '0' COMMENT '是否为品牌产品：1为是',
  `is_live` int(10) NOT NULL DEFAULT '0' COMMENT '是否为直播产品：1为是',
  `videoid` varchar(100) NOT NULL COMMENT '商品视频id',
  `activity_type` varchar(50) NOT NULL COMMENT '活动类型（普通活动、聚划算、淘抢购）',
  `createtime` int(10) NOT NULL,
  `quan_id` varchar(100) DEFAULT NULL COMMENT '优惠券ID',
  `tj` int(11) DEFAULT NULL COMMENT '1 秒杀 2 叮咚抢 ',
  `zt` int(10) NOT NULL DEFAULT '0' COMMENT '专题',
  `zd` int(10) NOT NULL DEFAULT '0' COMMENT '0不置顶  1置顶',
  `qf` int(10) NOT NULL DEFAULT '0' COMMENT '0不群发  1群发库',
  PRIMARY KEY (`id`),
  UNIQUE KEY `weid_num_iid` (`weid`,`itemid`),
  KEY `indx_weid` (`weid`),
  KEY `itemtitle` (`itemtitle`),
  KEY `itemid` (`itemid`),
  KEY `itemendprice` (`itemendprice`),
  KEY `is_brand` (`is_brand`),
  KEY `is_live` (`is_live`),
  KEY `fqcat` (`fqcat`),
  KEY `tj` (`tj`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_newtbgoods','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `weid` int(10) NOT NULL DEFAULT '0' COMMENT 'weid'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','zy')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `zy` int(10) NOT NULL DEFAULT '0' COMMENT '1 大淘客  2互力 3鹊桥库'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','itemid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `itemid` varchar(50) NOT NULL COMMENT '宝贝ID '");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','itemtitle')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `itemtitle` varchar(250) NOT NULL COMMENT '宝贝标题'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','itemshorttitle')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `itemshorttitle` varchar(250) NOT NULL COMMENT '宝贝短标题'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','itemdesc')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `itemdesc` varchar(250) NOT NULL COMMENT '宝贝推荐语'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','itemprice')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `itemprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '在售价 原价'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','itemsale')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `itemsale` int(20) NOT NULL DEFAULT '0' COMMENT '宝贝销量'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','itemsale2')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `itemsale2` int(20) NOT NULL DEFAULT '0' COMMENT '宝贝最近2小时销量'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','conversion_ratio')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `conversion_ratio` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '优惠券转化率'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','itempic')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `itempic` varchar(250) NOT NULL COMMENT '宝贝主图原始图像'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','fqcat')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `fqcat` int(3) NOT NULL DEFAULT '0' COMMENT '商品类目'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','itemendprice')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `itemendprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '宝贝最后价格 减去优惠券 券后价'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','shoptype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `shoptype` varchar(10) NOT NULL COMMENT '店铺类型 天猫(B) C店(C) 企业店铺'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','userid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `userid` varchar(50) NOT NULL COMMENT '店主的userid'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','sellernick')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `sellernick` varchar(100) NOT NULL COMMENT '店铺掌柜名'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','tktype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `tktype` varchar(100) NOT NULL COMMENT '佣金方式(鹊桥活动 定向计划 通用计划 隐藏计划 营销计划）'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','tkrates')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `tkrates` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '佣金比例'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','ctrates')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `ctrates` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '村淘佣金比例'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','cuntao')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `cuntao` int(10) NOT NULL DEFAULT '0' COMMENT '是否村淘（1是）'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','tkmoney')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `tkmoney` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '预计可得(宝贝价格*佣金比率/100) '");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','tkurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `tkurl` varchar(250) NOT NULL COMMENT '定向计划链接'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','couponurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `couponurl` varchar(250) NOT NULL COMMENT '优惠券链接'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','planlink')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `planlink` varchar(250) NOT NULL COMMENT '营销计划链接'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','couponmoney')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `couponmoney` varchar(50) NOT NULL COMMENT '优惠券面额'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','couponsurplus')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `couponsurplus` int(20) NOT NULL DEFAULT '0' COMMENT '优惠券剩余数量'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','couponreceive')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `couponreceive` int(20) NOT NULL DEFAULT '0' COMMENT '优惠券领取数量'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','couponreceive2')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `couponreceive2` int(20) NOT NULL DEFAULT '0' COMMENT '2小时内优惠券领取量'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','couponnum')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `couponnum` int(20) NOT NULL DEFAULT '0' COMMENT '优惠券总数量'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','couponexplain')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `couponexplain` varchar(100) NOT NULL COMMENT '优惠券说明 使用条件'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','couponstarttime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `couponstarttime` varchar(100) NOT NULL COMMENT '优惠券开始时间'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','couponendtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `couponendtime` varchar(100) NOT NULL COMMENT '优惠券结束时间'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','starttime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `starttime` varchar(100) NOT NULL COMMENT '发布时间'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','isquality')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `isquality` int(10) NOT NULL DEFAULT '0' COMMENT '是否优选 1为是'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','item_status')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `item_status` int(10) NOT NULL DEFAULT '0' COMMENT '产品状态：0为正常'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','report_status')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `report_status` int(10) NOT NULL DEFAULT '0' COMMENT '举报处理情况(1为待处理；2为忽略；3为下架)'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','is_brand')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `is_brand` int(10) NOT NULL DEFAULT '0' COMMENT '是否为品牌产品：1为是'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','is_live')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `is_live` int(10) NOT NULL DEFAULT '0' COMMENT '是否为直播产品：1为是'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','videoid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `videoid` varchar(100) NOT NULL COMMENT '商品视频id'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','activity_type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `activity_type` varchar(50) NOT NULL COMMENT '活动类型（普通活动、聚划算、淘抢购）'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','quan_id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `quan_id` varchar(100) DEFAULT NULL COMMENT '优惠券ID'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','tj')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `tj` int(11) DEFAULT NULL COMMENT '1 秒杀 2 叮咚抢 '");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','zt')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `zt` int(10) NOT NULL DEFAULT '0' COMMENT '专题'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','zd')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `zd` int(10) NOT NULL DEFAULT '0' COMMENT '0不置顶  1置顶'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','qf')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   `qf` int(10) NOT NULL DEFAULT '0' COMMENT '0不群发  1群发库'");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','weid_num_iid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   UNIQUE KEY `weid_num_iid` (`weid`,`itemid`)");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','indx_weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   KEY `indx_weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','itemtitle')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   KEY `itemtitle` (`itemtitle`)");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','itemid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   KEY `itemid` (`itemid`)");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','itemendprice')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   KEY `itemendprice` (`itemendprice`)");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','is_brand')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   KEY `is_brand` (`is_brand`)");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','is_live')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   KEY `is_live` (`is_live`)");}
if(!pdo_fieldexists('tiger_newhu_newtbgoods','fqcat')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_newtbgoods')." ADD   KEY `fqcat` (`fqcat`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `openid` varchar(255) DEFAULT '0',
  `nickname` varchar(255) DEFAULT '0',
  `avatar` varchar(255) DEFAULT '0',
  `jlnickname` varchar(255) DEFAULT '0' COMMENT '订单所有人',
  `jlavatar` varchar(255) DEFAULT '0' COMMENT '订单所有人',
  `memberid` varchar(255) DEFAULT '0' COMMENT '微擎会员编号',
  `uid` varchar(20) DEFAULT NULL COMMENT '用户UID share表',
  `orderid` varchar(255) DEFAULT '0' COMMENT '订单编号',
  `price` varchar(255) DEFAULT '0' COMMENT '奖励金额',
  `yongjin` varchar(255) DEFAULT '0' COMMENT '佣金',
  `type` varchar(255) DEFAULT '0' COMMENT '类型 0 自有  1级奖励 2级奖励',
  `sh` varchar(255) DEFAULT '0' COMMENT '是否审核 0  1待返 2已返 3审核 4失效',
  `msg` varchar(255) DEFAULT '0' COMMENT '留言',
  `itemid` varchar(100) DEFAULT '0' COMMENT '商品ID',
  `jl` varchar(20) DEFAULT '0' COMMENT '奖励金额或是积分',
  `jltype` int(10) DEFAULT '0' COMMENT '0积分 1余额',
  `createtime` varchar(255) NOT NULL,
  `cjdd` int(10) DEFAULT '0',
  `jluid` varchar(20) DEFAULT '',
  `tztype` int(5) DEFAULT '0' COMMENT '1 为普通用户 团长分佣',
  PRIMARY KEY (`id`),
  KEY `indx_weid` (`weid`),
  KEY `itemid` (`itemid`),
  KEY `indx_orderid` (`orderid`),
  KEY `indx_openid` (`openid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_order','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_order','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_order','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `openid` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_order','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `nickname` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_order','avatar')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `avatar` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_order','jlnickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `jlnickname` varchar(255) DEFAULT '0' COMMENT '订单所有人'");}
if(!pdo_fieldexists('tiger_newhu_order','jlavatar')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `jlavatar` varchar(255) DEFAULT '0' COMMENT '订单所有人'");}
if(!pdo_fieldexists('tiger_newhu_order','memberid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `memberid` varchar(255) DEFAULT '0' COMMENT '微擎会员编号'");}
if(!pdo_fieldexists('tiger_newhu_order','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `uid` varchar(20) DEFAULT NULL COMMENT '用户UID share表'");}
if(!pdo_fieldexists('tiger_newhu_order','orderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `orderid` varchar(255) DEFAULT '0' COMMENT '订单编号'");}
if(!pdo_fieldexists('tiger_newhu_order','price')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `price` varchar(255) DEFAULT '0' COMMENT '奖励金额'");}
if(!pdo_fieldexists('tiger_newhu_order','yongjin')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `yongjin` varchar(255) DEFAULT '0' COMMENT '佣金'");}
if(!pdo_fieldexists('tiger_newhu_order','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `type` varchar(255) DEFAULT '0' COMMENT '类型 0 自有  1级奖励 2级奖励'");}
if(!pdo_fieldexists('tiger_newhu_order','sh')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `sh` varchar(255) DEFAULT '0' COMMENT '是否审核 0  1待返 2已返 3审核 4失效'");}
if(!pdo_fieldexists('tiger_newhu_order','msg')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `msg` varchar(255) DEFAULT '0' COMMENT '留言'");}
if(!pdo_fieldexists('tiger_newhu_order','itemid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `itemid` varchar(100) DEFAULT '0' COMMENT '商品ID'");}
if(!pdo_fieldexists('tiger_newhu_order','jl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `jl` varchar(20) DEFAULT '0' COMMENT '奖励金额或是积分'");}
if(!pdo_fieldexists('tiger_newhu_order','jltype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `jltype` int(10) DEFAULT '0' COMMENT '0积分 1余额'");}
if(!pdo_fieldexists('tiger_newhu_order','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `createtime` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_order','cjdd')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `cjdd` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_order','jluid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `jluid` varchar(20) DEFAULT ''");}
if(!pdo_fieldexists('tiger_newhu_order','tztype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   `tztype` int(5) DEFAULT '0' COMMENT '1 为普通用户 团长分佣'");}
if(!pdo_fieldexists('tiger_newhu_order','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_order','indx_weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   KEY `indx_weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_order','itemid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   KEY `itemid` (`itemid`)");}
if(!pdo_fieldexists('tiger_newhu_order','indx_orderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_order')." ADD   KEY `indx_orderid` (`orderid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_paylog` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL,
  `dwnick` varchar(255) DEFAULT NULL COMMENT '微信用户昵称',
  `dopenid` varchar(255) DEFAULT NULL COMMENT '微信用户openid',
  `dtime` int(11) DEFAULT NULL COMMENT '打款时间',
  `dcredit` int(11) DEFAULT NULL COMMENT '消耗积分',
  `dtotal_amount` int(11) DEFAULT NULL COMMENT '金额，分为单位',
  `dmch_billno` varchar(50) DEFAULT NULL COMMENT '生成的商户订单号',
  `dissuccess` tinyint(1) DEFAULT NULL COMMENT '是否打款成功',
  `dresult` varchar(255) DEFAULT NULL COMMENT '失败提示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_paylog','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_paylog')." ADD 
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_paylog','uniacid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_paylog')." ADD   `uniacid` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_paylog','dwnick')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_paylog')." ADD   `dwnick` varchar(255) DEFAULT NULL COMMENT '微信用户昵称'");}
if(!pdo_fieldexists('tiger_newhu_paylog','dopenid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_paylog')." ADD   `dopenid` varchar(255) DEFAULT NULL COMMENT '微信用户openid'");}
if(!pdo_fieldexists('tiger_newhu_paylog','dtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_paylog')." ADD   `dtime` int(11) DEFAULT NULL COMMENT '打款时间'");}
if(!pdo_fieldexists('tiger_newhu_paylog','dcredit')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_paylog')." ADD   `dcredit` int(11) DEFAULT NULL COMMENT '消耗积分'");}
if(!pdo_fieldexists('tiger_newhu_paylog','dtotal_amount')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_paylog')." ADD   `dtotal_amount` int(11) DEFAULT NULL COMMENT '金额，分为单位'");}
if(!pdo_fieldexists('tiger_newhu_paylog','dmch_billno')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_paylog')." ADD   `dmch_billno` varchar(50) DEFAULT NULL COMMENT '生成的商户订单号'");}
if(!pdo_fieldexists('tiger_newhu_paylog','dissuccess')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_paylog')." ADD   `dissuccess` tinyint(1) DEFAULT NULL COMMENT '是否打款成功'");}
if(!pdo_fieldexists('tiger_newhu_paylog','dresult')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_paylog')." ADD   `dresult` varchar(255) DEFAULT NULL COMMENT '失败提示'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_pddorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `order_sn` varchar(100) DEFAULT '0',
  `goods_id` varchar(100) DEFAULT '0',
  `goods_name` varchar(100) DEFAULT '0',
  `goods_thumbnail_url` varchar(255) DEFAULT '0',
  `goods_quantity` varchar(255) DEFAULT '0',
  `goods_price` varchar(255) DEFAULT '0',
  `order_amount` varchar(255) DEFAULT '0',
  `order_create_time` varchar(255) DEFAULT '0',
  `order_settle_time` varchar(255) DEFAULT '0',
  `order_verify_time` varchar(255) DEFAULT '0',
  `order_receive_time` varchar(255) DEFAULT '0',
  `order_pay_time` varchar(255) DEFAULT '0',
  `promotion_rate` varchar(100) DEFAULT '0',
  `promotion_amount` varchar(150) DEFAULT '0',
  `batch_no` varchar(150) DEFAULT '0',
  `order_status` varchar(150) DEFAULT '',
  `order_status_desc` varchar(150) DEFAULT '0',
  `verify_time` varchar(100) DEFAULT '0',
  `order_group_success_time` varchar(100) DEFAULT '0',
  `order_modify_at` varchar(100) DEFAULT '0',
  `status` varchar(100) DEFAULT '0',
  `type` varchar(100) DEFAULT '0',
  `group_id` varchar(100) DEFAULT '0',
  `auth_duo_id` varchar(100) DEFAULT '0',
  `custom_parameters` varchar(100) DEFAULT '0',
  `p_id` varchar(100) DEFAULT '0',
  `createtime` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `order_sn` (`order_sn`),
  KEY `p_id` (`p_id`),
  KEY `order_modify_at` (`order_modify_at`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_pddorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_pddorder','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','order_sn')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `order_sn` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','goods_id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `goods_id` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','goods_name')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `goods_name` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','goods_thumbnail_url')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `goods_thumbnail_url` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','goods_quantity')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `goods_quantity` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','goods_price')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `goods_price` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','order_amount')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `order_amount` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','order_create_time')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `order_create_time` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','order_settle_time')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `order_settle_time` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','order_verify_time')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `order_verify_time` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','order_receive_time')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `order_receive_time` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','order_pay_time')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `order_pay_time` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','promotion_rate')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `promotion_rate` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','promotion_amount')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `promotion_amount` varchar(150) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','batch_no')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `batch_no` varchar(150) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','order_status')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `order_status` varchar(150) DEFAULT ''");}
if(!pdo_fieldexists('tiger_newhu_pddorder','order_status_desc')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `order_status_desc` varchar(150) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','verify_time')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `verify_time` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','order_group_success_time')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `order_group_success_time` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','order_modify_at')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `order_modify_at` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','status')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `status` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `type` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','group_id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `group_id` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','auth_duo_id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `auth_duo_id` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','custom_parameters')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `custom_parameters` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','p_id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `p_id` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddorder','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   `createtime` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_pddorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_pddorder','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   KEY `weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_pddorder','order_sn')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   KEY `order_sn` (`order_sn`)");}
if(!pdo_fieldexists('tiger_newhu_pddorder','p_id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddorder')." ADD   KEY `p_id` (`p_id`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_pddtjorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `openid` varchar(255) DEFAULT '0',
  `nickname` varchar(255) DEFAULT '0',
  `avatar` varchar(255) DEFAULT '0',
  `jlnickname` varchar(255) DEFAULT '0' COMMENT '订单所有人',
  `jlavatar` varchar(255) DEFAULT '0' COMMENT '订单所有人',
  `memberid` varchar(255) DEFAULT '0' COMMENT '微擎会员编号',
  `uid` varchar(20) DEFAULT NULL COMMENT '用户UID share表',
  `orderid` varchar(255) DEFAULT '0' COMMENT '订单编号',
  `price` varchar(255) DEFAULT '0' COMMENT '奖励金额',
  `yongjin` varchar(255) DEFAULT '0' COMMENT '佣金',
  `type` varchar(255) DEFAULT '0' COMMENT '类型 0 自有  1级奖励 2级奖励',
  `sh` varchar(255) DEFAULT '0' COMMENT '是否审核 0  1待返 2已返 3审核 4失效',
  `msg` varchar(255) DEFAULT '0' COMMENT '留言',
  `itemid` varchar(100) DEFAULT '0' COMMENT '商品ID',
  `jl` varchar(20) DEFAULT '0' COMMENT '奖励金额或是积分',
  `jltype` int(10) DEFAULT '0' COMMENT '0积分 1余额',
  `createtime` varchar(255) NOT NULL,
  `cjdd` int(10) DEFAULT '0',
  `jluid` varchar(20) DEFAULT '',
  `tztype` int(5) DEFAULT '0' COMMENT '1 为普通用户 团长分佣',
  PRIMARY KEY (`id`),
  KEY `indx_weid` (`weid`),
  KEY `itemid` (`itemid`),
  KEY `indx_orderid` (`orderid`),
  KEY `indx_openid` (`openid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_pddtjorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `openid` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `nickname` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','avatar')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `avatar` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','jlnickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `jlnickname` varchar(255) DEFAULT '0' COMMENT '订单所有人'");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','jlavatar')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `jlavatar` varchar(255) DEFAULT '0' COMMENT '订单所有人'");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','memberid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `memberid` varchar(255) DEFAULT '0' COMMENT '微擎会员编号'");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `uid` varchar(20) DEFAULT NULL COMMENT '用户UID share表'");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','orderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `orderid` varchar(255) DEFAULT '0' COMMENT '订单编号'");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','price')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `price` varchar(255) DEFAULT '0' COMMENT '奖励金额'");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','yongjin')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `yongjin` varchar(255) DEFAULT '0' COMMENT '佣金'");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `type` varchar(255) DEFAULT '0' COMMENT '类型 0 自有  1级奖励 2级奖励'");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','sh')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `sh` varchar(255) DEFAULT '0' COMMENT '是否审核 0  1待返 2已返 3审核 4失效'");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','msg')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `msg` varchar(255) DEFAULT '0' COMMENT '留言'");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','itemid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `itemid` varchar(100) DEFAULT '0' COMMENT '商品ID'");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','jl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `jl` varchar(20) DEFAULT '0' COMMENT '奖励金额或是积分'");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','jltype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `jltype` int(10) DEFAULT '0' COMMENT '0积分 1余额'");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `createtime` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','cjdd')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `cjdd` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','jluid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `jluid` varchar(20) DEFAULT ''");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','tztype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   `tztype` int(5) DEFAULT '0' COMMENT '1 为普通用户 团长分佣'");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','indx_weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   KEY `indx_weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','itemid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   KEY `itemid` (`itemid`)");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','indx_orderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   KEY `indx_orderid` (`orderid`)");}
if(!pdo_fieldexists('tiger_newhu_pddtjorder','indx_openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_pddtjorder')." ADD   KEY `indx_openid` (`openid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_poster` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT NULL,
  `title` varchar(100) DEFAULT NULL,
  `type` int(1) DEFAULT NULL,
  `data` text,
  `createtime` varchar(12) DEFAULT NULL,
  `bg` varchar(200) DEFAULT NULL,
  `tzurl` varchar(250) DEFAULT NULL,
  `city` varchar(200) DEFAULT NULL,
  `doneurl` varchar(200) DEFAULT NULL,
  `tipsurl` varchar(200) DEFAULT NULL,
  `score` int(11) DEFAULT '0',
  `score2` int(11) DEFAULT '0',
  `cscore` int(11) DEFAULT '0',
  `cscore2` int(11) DEFAULT '0',
  `pscore` int(11) DEFAULT '0',
  `pscore2` int(11) DEFAULT '0',
  `scorehb` float DEFAULT '0',
  `cscorehb` float DEFAULT '0',
  `pscorehb` float DEFAULT '0',
  `mbfont` varchar(50) DEFAULT NULL,
  `gid` int(11) DEFAULT '0',
  `kdtype` tinyint(1) NOT NULL DEFAULT '0',
  `kword` varchar(20) DEFAULT NULL,
  `mtips` varchar(200) DEFAULT NULL,
  `sliders` text,
  `slideH` int(11) DEFAULT '0',
  `credit` int(1) DEFAULT '0',
  `winfo1` varchar(200) DEFAULT NULL,
  `winfo2` varchar(200) DEFAULT NULL,
  `winfo3` varchar(200) DEFAULT NULL,
  `sharekg` int(11) DEFAULT '0',
  `sharetitle` varchar(200) DEFAULT NULL,
  `sharegzurl` varchar(200) DEFAULT NULL,
  `sharedesc` varchar(200) DEFAULT NULL,
  `sharethumb` varchar(200) DEFAULT NULL,
  `stitle` text,
  `sthumb` text,
  `sdesc` text,
  `surl` text,
  `questions` text,
  `rid` int(11) DEFAULT '0',
  `rtype` int(1) DEFAULT '0',
  `ftips` text,
  `utips` text,
  `utips2` text,
  `wtips` text,
  `starttime` varchar(12) DEFAULT NULL,
  `endtime` varchar(12) DEFAULT NULL,
  `mbstyle` varchar(50) DEFAULT NULL,
  `mbcolor` varchar(50) DEFAULT NULL,
  `nostarttips` text,
  `endtips` text,
  `grouptips` text,
  `tztype` tinyint(1) NOT NULL DEFAULT '0',
  `groups` text,
  `rscore` int(11) DEFAULT '0',
  `rtips` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_poster','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_poster','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `weid` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `title` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `type` int(1) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','data')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `data` text");}
if(!pdo_fieldexists('tiger_newhu_poster','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `createtime` varchar(12) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','bg')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `bg` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','tzurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `tzurl` varchar(250) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','city')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `city` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','doneurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `doneurl` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','tipsurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `tipsurl` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','score')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `score` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_poster','score2')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `score2` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_poster','cscore')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `cscore` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_poster','cscore2')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `cscore2` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_poster','pscore')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `pscore` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_poster','pscore2')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `pscore2` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_poster','scorehb')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `scorehb` float DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_poster','cscorehb')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `cscorehb` float DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_poster','pscorehb')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `pscorehb` float DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_poster','mbfont')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `mbfont` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','gid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `gid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_poster','kdtype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `kdtype` tinyint(1) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_poster','kword')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `kword` varchar(20) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','mtips')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `mtips` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','sliders')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `sliders` text");}
if(!pdo_fieldexists('tiger_newhu_poster','slideH')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `slideH` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_poster','credit')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `credit` int(1) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_poster','winfo1')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `winfo1` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','winfo2')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `winfo2` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','winfo3')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `winfo3` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','sharekg')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `sharekg` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_poster','sharetitle')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `sharetitle` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','sharegzurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `sharegzurl` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','sharedesc')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `sharedesc` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','sharethumb')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `sharethumb` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','stitle')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `stitle` text");}
if(!pdo_fieldexists('tiger_newhu_poster','sthumb')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `sthumb` text");}
if(!pdo_fieldexists('tiger_newhu_poster','sdesc')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `sdesc` text");}
if(!pdo_fieldexists('tiger_newhu_poster','surl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `surl` text");}
if(!pdo_fieldexists('tiger_newhu_poster','questions')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `questions` text");}
if(!pdo_fieldexists('tiger_newhu_poster','rid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `rid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_poster','rtype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `rtype` int(1) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_poster','ftips')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `ftips` text");}
if(!pdo_fieldexists('tiger_newhu_poster','utips')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `utips` text");}
if(!pdo_fieldexists('tiger_newhu_poster','utips2')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `utips2` text");}
if(!pdo_fieldexists('tiger_newhu_poster','wtips')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `wtips` text");}
if(!pdo_fieldexists('tiger_newhu_poster','starttime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `starttime` varchar(12) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','endtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `endtime` varchar(12) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','mbstyle')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `mbstyle` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','mbcolor')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `mbcolor` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_poster','nostarttips')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `nostarttips` text");}
if(!pdo_fieldexists('tiger_newhu_poster','endtips')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `endtips` text");}
if(!pdo_fieldexists('tiger_newhu_poster','grouptips')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `grouptips` text");}
if(!pdo_fieldexists('tiger_newhu_poster','tztype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `tztype` tinyint(1) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_poster','groups')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `groups` text");}
if(!pdo_fieldexists('tiger_newhu_poster','rscore')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `rscore` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_poster','rtips')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_poster')." ADD   `rtips` text");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_qiandao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `uid` int(11) NOT NULL COMMENT '用户id',
  `num` int(11) NOT NULL COMMENT '签到次数',
  `formid` varchar(250) DEFAULT '0',
  `xcxopenid` varchar(250) DEFAULT '0',
  `nickname` varchar(250) DEFAULT '0',
  `type` int(11) DEFAULT '0' COMMENT '1小程序',
  `addtime` int(11) NOT NULL COMMENT '签到时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_qiandao','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qiandao')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_qiandao','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qiandao')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_qiandao','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qiandao')." ADD   `uid` int(11) NOT NULL COMMENT '用户id'");}
if(!pdo_fieldexists('tiger_newhu_qiandao','num')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qiandao')." ADD   `num` int(11) NOT NULL COMMENT '签到次数'");}
if(!pdo_fieldexists('tiger_newhu_qiandao','formid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qiandao')." ADD   `formid` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_qiandao','xcxopenid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qiandao')." ADD   `xcxopenid` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_qiandao','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qiandao')." ADD   `nickname` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_qiandao','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qiandao')." ADD   `type` int(11) DEFAULT '0' COMMENT '1小程序'");}
if(!pdo_fieldexists('tiger_newhu_qiandao','addtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qiandao')." ADD   `addtime` int(11) NOT NULL COMMENT '签到时间'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_qtzlist` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `px` int(10) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL,
  `type` int(3) NOT NULL DEFAULT '0' COMMENT '分类',
  `cate` varchar(400) NOT NULL COMMENT '124|154| 子栏目',
  `picurl` varchar(255) NOT NULL COMMENT '图片',
  `cateid` varchar(100) NOT NULL COMMENT '擎天 活动ID',
  `createtime` int(10) NOT NULL,
  `bjcolor` varchar(100) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_qtzlist','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qtzlist')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_qtzlist','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qtzlist')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_qtzlist','px')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qtzlist')." ADD   `px` int(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_qtzlist','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qtzlist')." ADD   `title` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_qtzlist','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qtzlist')." ADD   `type` int(3) NOT NULL DEFAULT '0' COMMENT '分类'");}
if(!pdo_fieldexists('tiger_newhu_qtzlist','cate')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qtzlist')." ADD   `cate` varchar(400) NOT NULL COMMENT '124|154| 子栏目'");}
if(!pdo_fieldexists('tiger_newhu_qtzlist','picurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qtzlist')." ADD   `picurl` varchar(255) NOT NULL COMMENT '图片'");}
if(!pdo_fieldexists('tiger_newhu_qtzlist','cateid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qtzlist')." ADD   `cateid` varchar(100) NOT NULL COMMENT '擎天 活动ID'");}
if(!pdo_fieldexists('tiger_newhu_qtzlist','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qtzlist')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_qtzlist','bjcolor')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qtzlist')." ADD   `bjcolor` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_qtzlist','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qtzlist')." ADD   PRIMARY KEY (`id`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_qudaolist` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `uid` int(11) NOT NULL COMMENT '用户ID',
  `relation_app` varchar(100) DEFAULT '0' COMMENT '渠道备案 - 渠道推广的物料类型',
  `create_date` varchar(100) DEFAULT '0' COMMENT '渠道备案 - 备案日期',
  `account_name` varchar(100) DEFAULT '0' COMMENT '渠道备案 - 渠道昵称',
  `real_name` varchar(100) DEFAULT '0' COMMENT '渠道备案 - 渠道姓名',
  `relation_id` varchar(100) DEFAULT '0' COMMENT '	渠道备案 - 渠道关系ID',
  `offline_scene` varchar(100) DEFAULT '0' COMMENT '渠道备案 - 线下场景信息，1 - 门店，2- 学校，3 - 工厂，4 - 其他',
  `online_scene` varchar(100) DEFAULT '0' COMMENT '渠道备案 - 线上场景信息，1 - 微信群，2- QQ群，3 - 其他',
  `note` varchar(100) DEFAULT '0' COMMENT '	媒体侧渠道备注信息',
  `root_pid` varchar(100) DEFAULT '0' COMMENT '渠道专属pid',
  `rtag` varchar(50) DEFAULT '0' COMMENT '标识渠道原始身份信息',
  `createtime` int(10) NOT NULL COMMENT '入库时间',
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `rtag` (`rtag`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_qudaolist','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaolist')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_qudaolist','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaolist')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_qudaolist','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaolist')." ADD   `uid` int(11) NOT NULL COMMENT '用户ID'");}
if(!pdo_fieldexists('tiger_newhu_qudaolist','relation_app')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaolist')." ADD   `relation_app` varchar(100) DEFAULT '0' COMMENT '渠道备案 - 渠道推广的物料类型'");}
if(!pdo_fieldexists('tiger_newhu_qudaolist','create_date')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaolist')." ADD   `create_date` varchar(100) DEFAULT '0' COMMENT '渠道备案 - 备案日期'");}
if(!pdo_fieldexists('tiger_newhu_qudaolist','account_name')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaolist')." ADD   `account_name` varchar(100) DEFAULT '0' COMMENT '渠道备案 - 渠道昵称'");}
if(!pdo_fieldexists('tiger_newhu_qudaolist','real_name')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaolist')." ADD   `real_name` varchar(100) DEFAULT '0' COMMENT '渠道备案 - 渠道姓名'");}
if(!pdo_fieldexists('tiger_newhu_qudaolist','relation_id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaolist')." ADD   `relation_id` varchar(100) DEFAULT '0' COMMENT '	渠道备案 - 渠道关系ID'");}
if(!pdo_fieldexists('tiger_newhu_qudaolist','offline_scene')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaolist')." ADD   `offline_scene` varchar(100) DEFAULT '0' COMMENT '渠道备案 - 线下场景信息，1 - 门店，2- 学校，3 - 工厂，4 - 其他'");}
if(!pdo_fieldexists('tiger_newhu_qudaolist','online_scene')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaolist')." ADD   `online_scene` varchar(100) DEFAULT '0' COMMENT '渠道备案 - 线上场景信息，1 - 微信群，2- QQ群，3 - 其他'");}
if(!pdo_fieldexists('tiger_newhu_qudaolist','note')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaolist')." ADD   `note` varchar(100) DEFAULT '0' COMMENT '	媒体侧渠道备注信息'");}
if(!pdo_fieldexists('tiger_newhu_qudaolist','root_pid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaolist')." ADD   `root_pid` varchar(100) DEFAULT '0' COMMENT '渠道专属pid'");}
if(!pdo_fieldexists('tiger_newhu_qudaolist','rtag')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaolist')." ADD   `rtag` varchar(50) DEFAULT '0' COMMENT '标识渠道原始身份信息'");}
if(!pdo_fieldexists('tiger_newhu_qudaolist','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaolist')." ADD   `createtime` int(10) NOT NULL COMMENT '入库时间'");}
if(!pdo_fieldexists('tiger_newhu_qudaolist','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaolist')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_qudaolist','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaolist')." ADD   KEY `weid` (`weid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_qudaosign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `uid` int(11) DEFAULT '0' COMMENT '授权代理用户ID',
  `openid` varchar(50) DEFAULT NULL COMMENT 'openid',
  `sate` varchar(1000) DEFAULT NULL,
  `tbuid` varchar(50) DEFAULT NULL,
  `tbnickname` varchar(200) DEFAULT NULL,
  `sign` varchar(100) DEFAULT NULL,
  `endtime` varchar(30) DEFAULT NULL COMMENT '结束时间',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `uid` (`uid`),
  KEY `openid` (`openid`),
  KEY `tbuid` (`tbuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_qudaosign','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaosign')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_qudaosign','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaosign')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_qudaosign','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaosign')." ADD   `uid` int(11) DEFAULT '0' COMMENT '授权代理用户ID'");}
if(!pdo_fieldexists('tiger_newhu_qudaosign','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaosign')." ADD   `openid` varchar(50) DEFAULT NULL COMMENT 'openid'");}
if(!pdo_fieldexists('tiger_newhu_qudaosign','sate')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaosign')." ADD   `sate` varchar(1000) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_qudaosign','tbuid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaosign')." ADD   `tbuid` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_qudaosign','tbnickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaosign')." ADD   `tbnickname` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_qudaosign','sign')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaosign')." ADD   `sign` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_qudaosign','endtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaosign')." ADD   `endtime` varchar(30) DEFAULT NULL COMMENT '结束时间'");}
if(!pdo_fieldexists('tiger_newhu_qudaosign','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaosign')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_qudaosign','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaosign')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_qudaosign','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaosign')." ADD   KEY `weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_qudaosign','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaosign')." ADD   KEY `uid` (`uid`)");}
if(!pdo_fieldexists('tiger_newhu_qudaosign','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_qudaosign')." ADD   KEY `openid` (`openid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_record` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT NULL,
  `pid` int(11) DEFAULT NULL,
  `openid` varchar(200) DEFAULT NULL,
  `score` int(11) DEFAULT '0',
  `surplus` int(11) DEFAULT '0',
  `createtime` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_record','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_record')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_record','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_record')." ADD   `weid` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_record','pid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_record')." ADD   `pid` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_record','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_record')." ADD   `openid` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_record','score')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_record')." ADD   `score` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_record','surplus')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_record')." ADD   `surplus` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_record','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_record')." ADD   `createtime` varchar(20) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_request` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `from_user_realname` varchar(50) NOT NULL,
  `from_user` varchar(50) NOT NULL,
  `openid` varchar(50) NOT NULL,
  `image` varchar(300) DEFAULT '0',
  `realname` varchar(200) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `residedist` varchar(200) NOT NULL,
  `alipay` varchar(200) NOT NULL,
  `note` varchar(200) NOT NULL,
  `tborder` varchar(200) NOT NULL,
  `goods_id` int(10) unsigned NOT NULL,
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `cost` decimal(10,2) NOT NULL DEFAULT '0.00',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `fxprice` decimal(10,2) NOT NULL DEFAULT '0.00',
  `status` varchar(20) NOT NULL,
  `type` int(5) DEFAULT '0',
  `kuaidi` varchar(200) NOT NULL,
  `uid` varchar(100) NOT NULL COMMENT '用户UID',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_request','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_request','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_request','from_user_realname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `from_user_realname` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_request','from_user')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `from_user` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_request','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `openid` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_request','image')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `image` varchar(300) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_request','realname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `realname` varchar(200) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_request','mobile')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `mobile` varchar(200) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_request','residedist')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `residedist` varchar(200) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_request','alipay')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `alipay` varchar(200) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_request','note')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `note` varchar(200) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_request','tborder')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `tborder` varchar(200) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_request','goods_id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `goods_id` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_request','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `createtime` int(10) unsigned NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_request','cost')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `cost` decimal(10,2) NOT NULL DEFAULT '0.00'");}
if(!pdo_fieldexists('tiger_newhu_request','price')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `price` decimal(10,2) NOT NULL DEFAULT '0.00'");}
if(!pdo_fieldexists('tiger_newhu_request','fxprice')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `fxprice` decimal(10,2) NOT NULL DEFAULT '0.00'");}
if(!pdo_fieldexists('tiger_newhu_request','status')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `status` varchar(20) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_request','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `type` int(5) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_request','kuaidi')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `kuaidi` varchar(200) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_request','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_request')." ADD   `uid` varchar(100) NOT NULL COMMENT '用户UID'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_sdorder` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `from_user` varchar(50) NOT NULL,
  `avatar` varchar(200) NOT NULL,
  `openid` varchar(50) NOT NULL,
  `image` varchar(300) DEFAULT '0',
  `order` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT '0.00',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `evaluation` varchar(250) NOT NULL,
  `pf` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `jljf` varchar(200) NOT NULL,
  `sjjl` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_sdorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sdorder')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_sdorder','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sdorder')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_sdorder','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sdorder')." ADD   `nickname` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_sdorder','from_user')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sdorder')." ADD   `from_user` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_sdorder','avatar')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sdorder')." ADD   `avatar` varchar(200) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_sdorder','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sdorder')." ADD   `openid` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_sdorder','image')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sdorder')." ADD   `image` varchar(300) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_sdorder','order')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sdorder')." ADD   `order` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_sdorder','price')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sdorder')." ADD   `price` decimal(10,2) NOT NULL DEFAULT '0.00'");}
if(!pdo_fieldexists('tiger_newhu_sdorder','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sdorder')." ADD   `createtime` int(10) unsigned NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_sdorder','evaluation')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sdorder')." ADD   `evaluation` varchar(250) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_sdorder','pf')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sdorder')." ADD   `pf` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_sdorder','status')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sdorder')." ADD   `status` varchar(20) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_sdorder','jljf')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sdorder')." ADD   `jljf` varchar(200) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_sdorder','sjjl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sdorder')." ADD   `sjjl` varchar(200) NOT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `hbsum` int(1) DEFAULT NULL COMMENT '红包总金额',
  `hbtext` varchar(200) DEFAULT NULL COMMENT '红包兑换结束提示',
  PRIMARY KEY (`id`),
  KEY `idx_weid` (`weid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_set','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_set')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_set','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_set')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_set','hbsum')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_set')." ADD   `hbsum` int(1) DEFAULT NULL COMMENT '红包总金额'");}
if(!pdo_fieldexists('tiger_newhu_set','hbtext')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_set')." ADD   `hbtext` varchar(200) DEFAULT NULL COMMENT '红包兑换结束提示'");}
if(!pdo_fieldexists('tiger_newhu_set','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_set')." ADD   PRIMARY KEY (`id`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_share` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `openid` varchar(50) DEFAULT '0',
  `tel` varchar(15) DEFAULT NULL,
  `type` varchar(15) DEFAULT '0',
  `credit1` decimal(10,2) unsigned NOT NULL COMMENT '积分',
  `credit2` decimal(10,2) unsigned NOT NULL COMMENT '余额',
  `cqtype` varchar(10) NOT NULL COMMENT '0 不能查询  1 能查询',
  `dltype` varchar(10) NOT NULL COMMENT '0 不是代理  1 是代理',
  `dlsh` varchar(10) NOT NULL COMMENT '0 审核中 1通过',
  `dlbl` varchar(110) NOT NULL COMMENT '代理佣金比例-一级自购',
  `dlbl2` varchar(110) NOT NULL COMMENT '代理佣金比例-二级自购',
  `dlbl3` varchar(110) NOT NULL COMMENT '代理佣金比例-三级自购',
  `tgwid` varchar(250) NOT NULL COMMENT '渠道推广位ID',
  `dlqqpid` varchar(110) NOT NULL COMMENT '代理鹊桥PID',
  `dlptpid` varchar(110) NOT NULL COMMENT '代理普通',
  `apppid` varchar(110) NOT NULL COMMENT 'APP PID',
  `apptgw` varchar(110) NOT NULL COMMENT 'APP 推广位',
  `dlmsg` varchar(250) NOT NULL COMMENT '代理申请理由',
  `zfbuid` varchar(250) NOT NULL COMMENT '支付宝帐号',
  `tname` varchar(50) NOT NULL COMMENT '姓名',
  `qunname` varchar(100) NOT NULL COMMENT '群名称',
  `pclogo` varchar(250) NOT NULL COMMENT 'PCLOGO',
  `pctitle` varchar(250) NOT NULL COMMENT 'PC网站标题',
  `pckeywords` varchar(250) NOT NULL COMMENT 'PC网站关键词',
  `pcdescription` varchar(250) NOT NULL COMMENT 'PC网站描述',
  `pcsearchkey` varchar(250) NOT NULL COMMENT 'PC网站搜索框下面关键词',
  `pcewm1` varchar(250) NOT NULL COMMENT 'PC二维码1',
  `pcewm2` varchar(250) NOT NULL COMMENT 'PC二维码2',
  `pcbottom1` varchar(250) NOT NULL COMMENT 'PC网站底部1',
  `pcbottom2` varchar(250) NOT NULL COMMENT 'PC网站底部2',
  `pcuser` varchar(250) NOT NULL COMMENT '登录帐号',
  `pcpasswords` varchar(250) NOT NULL COMMENT '登录密码',
  `pcurl` varchar(250) NOT NULL COMMENT '代理独立域名',
  `lytype` int(3) DEFAULT '0' COMMENT '0 公众号 1APP',
  `dytype` int(3) DEFAULT '0' COMMENT '0已经订阅  1取消订阅',
  `weixin` varchar(100) DEFAULT NULL,
  `from_user` varchar(100) NOT NULL,
  `xcxopenid` varchar(100) NOT NULL,
  `pcopenid` varchar(100) NOT NULL,
  `appopenid` varchar(100) NOT NULL,
  `unionid` varchar(100) NOT NULL,
  `jqfrom_user` varchar(100) NOT NULL,
  `nickname` varchar(50) DEFAULT '0',
  `avatar` varchar(200) DEFAULT NULL,
  `tbnickname` varchar(50) DEFAULT '0',
  `tbavatar` varchar(500) DEFAULT NULL,
  `tbopenid` varchar(100) NOT NULL,
  `tbunionid` varchar(100) NOT NULL,
  `score` int(11) DEFAULT '0',
  `cscore` int(11) DEFAULT '0',
  `pscore` int(11) DEFAULT '0',
  `pid` int(11) DEFAULT '0',
  `sceneid` int(11) DEFAULT '0',
  `ticketid` varchar(200) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `parentid` int(11) DEFAULT '0',
  `helpid` int(11) DEFAULT '0',
  `follow` tinyint(1) NOT NULL DEFAULT '0',
  `status` int(1) DEFAULT '0',
  `hasdel` int(1) DEFAULT '0',
  `createtime` varchar(50) DEFAULT NULL,
  `updatetime` varchar(50) DEFAULT '0',
  `province` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `tbsbuid6` varchar(10) DEFAULT NULL,
  `yaoqingma` varchar(10) DEFAULT NULL,
  `pddpid` varchar(100) NOT NULL COMMENT '多多PID',
  `jdpid` varchar(100) NOT NULL COMMENT '京东PID',
  `tbkpidtype` int(11) DEFAULT '0' COMMENT '1已经绑定tbuid 0未绑定',
  `tbuid` varchar(20) DEFAULT '0',
  `tztype` int(11) DEFAULT '0' COMMENT '1为团长',
  `tzpaytime` varchar(50) DEFAULT '0' COMMENT '团长支付时间',
  `tztime` varchar(50) DEFAULT '0' COMMENT '团长申请时间',
  `tzendtime` varchar(50) DEFAULT '0' COMMENT '团长到期时间',
  `qdid` varchar(50) DEFAULT '0',
  `hyid` int(10) DEFAULT '0',
  `qdname` varchar(50) DEFAULT '0',
  `dldjtype` int(5) DEFAULT '0' COMMENT '代理对应等级',
  `wphpid` varchar(100) NOT NULL COMMENT '多多PID',
  `snpid` varchar(100) NOT NULL COMMENT '苏宁PID',
  PRIMARY KEY (`id`),
  UNIQUE KEY `weid_fromuser` (`weid`,`from_user`),
  KEY `helpid` (`helpid`),
  KEY `weid` (`weid`),
  KEY `dltype` (`dltype`),
  KEY `tgwid` (`tgwid`),
  KEY `pcuser` (`pcuser`),
  KEY `from_user` (`from_user`),
  KEY `unionid` (`unionid`),
  KEY `tbunionid` (`tbunionid`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=101 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_share','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_share','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `openid` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','tel')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `tel` varchar(15) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_share','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `type` varchar(15) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','credit1')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `credit1` decimal(10,2) unsigned NOT NULL COMMENT '积分'");}
if(!pdo_fieldexists('tiger_newhu_share','credit2')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `credit2` decimal(10,2) unsigned NOT NULL COMMENT '余额'");}
if(!pdo_fieldexists('tiger_newhu_share','cqtype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `cqtype` varchar(10) NOT NULL COMMENT '0 不能查询  1 能查询'");}
if(!pdo_fieldexists('tiger_newhu_share','dltype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `dltype` varchar(10) NOT NULL COMMENT '0 不是代理  1 是代理'");}
if(!pdo_fieldexists('tiger_newhu_share','dlsh')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `dlsh` varchar(10) NOT NULL COMMENT '0 审核中 1通过'");}
if(!pdo_fieldexists('tiger_newhu_share','dlbl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `dlbl` varchar(110) NOT NULL COMMENT '代理佣金比例-一级自购'");}
if(!pdo_fieldexists('tiger_newhu_share','dlbl2')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `dlbl2` varchar(110) NOT NULL COMMENT '代理佣金比例-二级自购'");}
if(!pdo_fieldexists('tiger_newhu_share','dlbl3')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `dlbl3` varchar(110) NOT NULL COMMENT '代理佣金比例-三级自购'");}
if(!pdo_fieldexists('tiger_newhu_share','tgwid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `tgwid` varchar(250) NOT NULL COMMENT '渠道推广位ID'");}
if(!pdo_fieldexists('tiger_newhu_share','dlqqpid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `dlqqpid` varchar(110) NOT NULL COMMENT '代理鹊桥PID'");}
if(!pdo_fieldexists('tiger_newhu_share','dlptpid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `dlptpid` varchar(110) NOT NULL COMMENT '代理普通'");}
if(!pdo_fieldexists('tiger_newhu_share','apppid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `apppid` varchar(110) NOT NULL COMMENT 'APP PID'");}
if(!pdo_fieldexists('tiger_newhu_share','apptgw')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `apptgw` varchar(110) NOT NULL COMMENT 'APP 推广位'");}
if(!pdo_fieldexists('tiger_newhu_share','dlmsg')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `dlmsg` varchar(250) NOT NULL COMMENT '代理申请理由'");}
if(!pdo_fieldexists('tiger_newhu_share','zfbuid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `zfbuid` varchar(250) NOT NULL COMMENT '支付宝帐号'");}
if(!pdo_fieldexists('tiger_newhu_share','tname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `tname` varchar(50) NOT NULL COMMENT '姓名'");}
if(!pdo_fieldexists('tiger_newhu_share','qunname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `qunname` varchar(100) NOT NULL COMMENT '群名称'");}
if(!pdo_fieldexists('tiger_newhu_share','pclogo')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `pclogo` varchar(250) NOT NULL COMMENT 'PCLOGO'");}
if(!pdo_fieldexists('tiger_newhu_share','pctitle')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `pctitle` varchar(250) NOT NULL COMMENT 'PC网站标题'");}
if(!pdo_fieldexists('tiger_newhu_share','pckeywords')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `pckeywords` varchar(250) NOT NULL COMMENT 'PC网站关键词'");}
if(!pdo_fieldexists('tiger_newhu_share','pcdescription')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `pcdescription` varchar(250) NOT NULL COMMENT 'PC网站描述'");}
if(!pdo_fieldexists('tiger_newhu_share','pcsearchkey')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `pcsearchkey` varchar(250) NOT NULL COMMENT 'PC网站搜索框下面关键词'");}
if(!pdo_fieldexists('tiger_newhu_share','pcewm1')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `pcewm1` varchar(250) NOT NULL COMMENT 'PC二维码1'");}
if(!pdo_fieldexists('tiger_newhu_share','pcewm2')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `pcewm2` varchar(250) NOT NULL COMMENT 'PC二维码2'");}
if(!pdo_fieldexists('tiger_newhu_share','pcbottom1')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `pcbottom1` varchar(250) NOT NULL COMMENT 'PC网站底部1'");}
if(!pdo_fieldexists('tiger_newhu_share','pcbottom2')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `pcbottom2` varchar(250) NOT NULL COMMENT 'PC网站底部2'");}
if(!pdo_fieldexists('tiger_newhu_share','pcuser')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `pcuser` varchar(250) NOT NULL COMMENT '登录帐号'");}
if(!pdo_fieldexists('tiger_newhu_share','pcpasswords')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `pcpasswords` varchar(250) NOT NULL COMMENT '登录密码'");}
if(!pdo_fieldexists('tiger_newhu_share','pcurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `pcurl` varchar(250) NOT NULL COMMENT '代理独立域名'");}
if(!pdo_fieldexists('tiger_newhu_share','lytype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `lytype` int(3) DEFAULT '0' COMMENT '0 公众号 1APP'");}
if(!pdo_fieldexists('tiger_newhu_share','dytype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `dytype` int(3) DEFAULT '0' COMMENT '0已经订阅  1取消订阅'");}
if(!pdo_fieldexists('tiger_newhu_share','weixin')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `weixin` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_share','from_user')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `from_user` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_share','xcxopenid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `xcxopenid` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_share','pcopenid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `pcopenid` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_share','appopenid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `appopenid` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_share','unionid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `unionid` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_share','jqfrom_user')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `jqfrom_user` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_share','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `nickname` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','avatar')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `avatar` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_share','tbnickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `tbnickname` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','tbavatar')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `tbavatar` varchar(500) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_share','tbopenid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `tbopenid` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_share','tbunionid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `tbunionid` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_share','score')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `score` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','cscore')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `cscore` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','pscore')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `pscore` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','pid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `pid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','sceneid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `sceneid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','ticketid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `ticketid` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_share','url')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `url` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_share','parentid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `parentid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','helpid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `helpid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','follow')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `follow` tinyint(1) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','status')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `status` int(1) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','hasdel')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `hasdel` int(1) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `createtime` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_share','updatetime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `updatetime` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','province')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `province` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_share','city')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `city` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_share','tbsbuid6')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `tbsbuid6` varchar(10) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_share','yaoqingma')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `yaoqingma` varchar(10) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_share','pddpid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `pddpid` varchar(100) NOT NULL COMMENT '多多PID'");}
if(!pdo_fieldexists('tiger_newhu_share','jdpid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `jdpid` varchar(100) NOT NULL COMMENT '京东PID'");}
if(!pdo_fieldexists('tiger_newhu_share','tbkpidtype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `tbkpidtype` int(11) DEFAULT '0' COMMENT '1已经绑定tbuid 0未绑定'");}
if(!pdo_fieldexists('tiger_newhu_share','tbuid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `tbuid` varchar(20) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','tztype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `tztype` int(11) DEFAULT '0' COMMENT '1为团长'");}
if(!pdo_fieldexists('tiger_newhu_share','tzpaytime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `tzpaytime` varchar(50) DEFAULT '0' COMMENT '团长支付时间'");}
if(!pdo_fieldexists('tiger_newhu_share','tztime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `tztime` varchar(50) DEFAULT '0' COMMENT '团长申请时间'");}
if(!pdo_fieldexists('tiger_newhu_share','tzendtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `tzendtime` varchar(50) DEFAULT '0' COMMENT '团长到期时间'");}
if(!pdo_fieldexists('tiger_newhu_share','qdid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `qdid` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','hyid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `hyid` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','qdname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `qdname` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_share','dldjtype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `dldjtype` int(5) DEFAULT '0' COMMENT '代理对应等级'");}
if(!pdo_fieldexists('tiger_newhu_share','wphpid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `wphpid` varchar(100) NOT NULL COMMENT '多多PID'");}
if(!pdo_fieldexists('tiger_newhu_share','snpid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   `snpid` varchar(100) NOT NULL COMMENT '苏宁PID'");}
if(!pdo_fieldexists('tiger_newhu_share','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_share','weid_fromuser')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   UNIQUE KEY `weid_fromuser` (`weid`,`from_user`)");}
if(!pdo_fieldexists('tiger_newhu_share','helpid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   KEY `helpid` (`helpid`)");}
if(!pdo_fieldexists('tiger_newhu_share','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   KEY `weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_share','dltype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   KEY `dltype` (`dltype`)");}
if(!pdo_fieldexists('tiger_newhu_share','tgwid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   KEY `tgwid` (`tgwid`)");}
if(!pdo_fieldexists('tiger_newhu_share','pcuser')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   KEY `pcuser` (`pcuser`)");}
if(!pdo_fieldexists('tiger_newhu_share','from_user')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   KEY `from_user` (`from_user`)");}
if(!pdo_fieldexists('tiger_newhu_share','unionid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   KEY `unionid` (`unionid`)");}
if(!pdo_fieldexists('tiger_newhu_share','tbunionid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_share')." ADD   KEY `tbunionid` (`tbunionid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_shoucang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `title` varchar(150) DEFAULT '0',
  `goodsid` varchar(50) DEFAULT '0',
  `picurl` varchar(250) DEFAULT '0',
  `openid` varchar(50) DEFAULT '0',
  `uid` varchar(50) DEFAULT '0',
  `createtime` int(10) NOT NULL,
  `itemendprice` varchar(50) DEFAULT '0',
  `itemprice` varchar(50) DEFAULT '0',
  `itemsale` varchar(50) DEFAULT '0',
  `couponmoney` varchar(50) DEFAULT '0',
  `rate` varchar(50) DEFAULT '0',
  `tkl` varchar(200) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_shoucang','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_shoucang')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_shoucang','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_shoucang')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_shoucang','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_shoucang')." ADD   `title` varchar(150) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_shoucang','goodsid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_shoucang')." ADD   `goodsid` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_shoucang','picurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_shoucang')." ADD   `picurl` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_shoucang','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_shoucang')." ADD   `openid` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_shoucang','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_shoucang')." ADD   `uid` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_shoucang','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_shoucang')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_shoucang','itemendprice')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_shoucang')." ADD   `itemendprice` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_shoucang','itemprice')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_shoucang')." ADD   `itemprice` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_shoucang','itemsale')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_shoucang')." ADD   `itemsale` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_shoucang','couponmoney')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_shoucang')." ADD   `couponmoney` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_shoucang','rate')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_shoucang')." ADD   `rate` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_shoucang','tkl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_shoucang')." ADD   `tkl` varchar(200) DEFAULT '0'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_snorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `orderCode` varchar(100) DEFAULT '0' COMMENT '订单号',
  `payTime` varchar(50) DEFAULT '0' COMMENT '支付时间',
  `orderSubmitTime` varchar(100) DEFAULT '0' COMMENT '下单时间',
  `orderLineNumber` varchar(100) DEFAULT '0' COMMENT '订单行项目号',
  `orderLineStatusDesc` varchar(50) DEFAULT '0' COMMENT '订单行项目状态',
  `orderLineStatusChangeTime` varchar(50) DEFAULT '0' COMMENT '行项目状态更新时间 订单结算时间取这个',
  `orderLineOrigin` varchar(100) DEFAULT '0' COMMENT '订单行来源',
  `productName` varchar(500) DEFAULT '0' COMMENT '商品名称',
  `saleNum` varchar(100) DEFAULT '0' COMMENT '商品数量',
  `payAmount` varchar(100) DEFAULT '0' COMMENT '实付金额',
  `orderLineFlag` varchar(100) DEFAULT '0' COMMENT '订单行标记',
  `childAccountId` varchar(100) DEFAULT '0' COMMENT '子推广账号ID(对应sub_user)',
  `sellName` varchar(100) DEFAULT '0' COMMENT '商户名称',
  `sellerCode` varchar(100) DEFAULT '0' COMMENT '商户编码',
  `goodsNum` varchar(100) DEFAULT '0' COMMENT '商品编码',
  `commissionRatio` varchar(100) DEFAULT '0' COMMENT '佣金比例',
  `prePayCommission` varchar(100) DEFAULT '0' COMMENT '预估佣金',
  `productFirstCatalog` varchar(100) DEFAULT '0' COMMENT '一级目录',
  `productSecondCatalog` varchar(100) DEFAULT '0' COMMENT '二级目录',
  `productThirdCatalog` varchar(100) DEFAULT '0' COMMENT '三级目录',
  `orderType` varchar(100) DEFAULT '0' COMMENT '商品归属',
  `positionId` varchar(100) DEFAULT '0' COMMENT '推广位ID',
  `goodsGroupCatalog` varchar(100) DEFAULT '0' COMMENT '商品组目录编码',
  `saleType` varchar(100) DEFAULT '0' COMMENT '推广类型',
  `pictureUrl` varchar(500) DEFAULT '0' COMMENT '商品主图',
  `createtime` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ord_w_id` (`weid`,`orderCode`),
  KEY `weid` (`weid`),
  KEY `payTime` (`payTime`),
  KEY `orderLineStatusChangeTime` (`orderLineStatusChangeTime`),
  KEY `positionId` (`positionId`),
  KEY `childAccountId` (`childAccountId`),
  KEY `orderCode` (`orderCode`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_snorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_snorder','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_snorder','orderCode')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `orderCode` varchar(100) DEFAULT '0' COMMENT '订单号'");}
if(!pdo_fieldexists('tiger_newhu_snorder','payTime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `payTime` varchar(50) DEFAULT '0' COMMENT '支付时间'");}
if(!pdo_fieldexists('tiger_newhu_snorder','orderSubmitTime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `orderSubmitTime` varchar(100) DEFAULT '0' COMMENT '下单时间'");}
if(!pdo_fieldexists('tiger_newhu_snorder','orderLineNumber')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `orderLineNumber` varchar(100) DEFAULT '0' COMMENT '订单行项目号'");}
if(!pdo_fieldexists('tiger_newhu_snorder','orderLineStatusDesc')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `orderLineStatusDesc` varchar(50) DEFAULT '0' COMMENT '订单行项目状态'");}
if(!pdo_fieldexists('tiger_newhu_snorder','orderLineStatusChangeTime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `orderLineStatusChangeTime` varchar(50) DEFAULT '0' COMMENT '行项目状态更新时间 订单结算时间取这个'");}
if(!pdo_fieldexists('tiger_newhu_snorder','orderLineOrigin')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `orderLineOrigin` varchar(100) DEFAULT '0' COMMENT '订单行来源'");}
if(!pdo_fieldexists('tiger_newhu_snorder','productName')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `productName` varchar(500) DEFAULT '0' COMMENT '商品名称'");}
if(!pdo_fieldexists('tiger_newhu_snorder','saleNum')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `saleNum` varchar(100) DEFAULT '0' COMMENT '商品数量'");}
if(!pdo_fieldexists('tiger_newhu_snorder','payAmount')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `payAmount` varchar(100) DEFAULT '0' COMMENT '实付金额'");}
if(!pdo_fieldexists('tiger_newhu_snorder','orderLineFlag')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `orderLineFlag` varchar(100) DEFAULT '0' COMMENT '订单行标记'");}
if(!pdo_fieldexists('tiger_newhu_snorder','childAccountId')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `childAccountId` varchar(100) DEFAULT '0' COMMENT '子推广账号ID(对应sub_user)'");}
if(!pdo_fieldexists('tiger_newhu_snorder','sellName')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `sellName` varchar(100) DEFAULT '0' COMMENT '商户名称'");}
if(!pdo_fieldexists('tiger_newhu_snorder','sellerCode')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `sellerCode` varchar(100) DEFAULT '0' COMMENT '商户编码'");}
if(!pdo_fieldexists('tiger_newhu_snorder','goodsNum')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `goodsNum` varchar(100) DEFAULT '0' COMMENT '商品编码'");}
if(!pdo_fieldexists('tiger_newhu_snorder','commissionRatio')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `commissionRatio` varchar(100) DEFAULT '0' COMMENT '佣金比例'");}
if(!pdo_fieldexists('tiger_newhu_snorder','prePayCommission')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `prePayCommission` varchar(100) DEFAULT '0' COMMENT '预估佣金'");}
if(!pdo_fieldexists('tiger_newhu_snorder','productFirstCatalog')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `productFirstCatalog` varchar(100) DEFAULT '0' COMMENT '一级目录'");}
if(!pdo_fieldexists('tiger_newhu_snorder','productSecondCatalog')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `productSecondCatalog` varchar(100) DEFAULT '0' COMMENT '二级目录'");}
if(!pdo_fieldexists('tiger_newhu_snorder','productThirdCatalog')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `productThirdCatalog` varchar(100) DEFAULT '0' COMMENT '三级目录'");}
if(!pdo_fieldexists('tiger_newhu_snorder','orderType')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `orderType` varchar(100) DEFAULT '0' COMMENT '商品归属'");}
if(!pdo_fieldexists('tiger_newhu_snorder','positionId')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `positionId` varchar(100) DEFAULT '0' COMMENT '推广位ID'");}
if(!pdo_fieldexists('tiger_newhu_snorder','goodsGroupCatalog')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `goodsGroupCatalog` varchar(100) DEFAULT '0' COMMENT '商品组目录编码'");}
if(!pdo_fieldexists('tiger_newhu_snorder','saleType')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `saleType` varchar(100) DEFAULT '0' COMMENT '推广类型'");}
if(!pdo_fieldexists('tiger_newhu_snorder','pictureUrl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `pictureUrl` varchar(500) DEFAULT '0' COMMENT '商品主图'");}
if(!pdo_fieldexists('tiger_newhu_snorder','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   `createtime` varchar(20) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_snorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_snorder','ord_w_id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   UNIQUE KEY `ord_w_id` (`weid`,`orderCode`)");}
if(!pdo_fieldexists('tiger_newhu_snorder','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   KEY `weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_snorder','payTime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   KEY `payTime` (`payTime`)");}
if(!pdo_fieldexists('tiger_newhu_snorder','orderLineStatusChangeTime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   KEY `orderLineStatusChangeTime` (`orderLineStatusChangeTime`)");}
if(!pdo_fieldexists('tiger_newhu_snorder','positionId')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   KEY `positionId` (`positionId`)");}
if(!pdo_fieldexists('tiger_newhu_snorder','childAccountId')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snorder')." ADD   KEY `childAccountId` (`childAccountId`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_snset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `appkey` varchar(200) DEFAULT NULL,
  `appsecret` varchar(200) DEFAULT NULL,
  `snpid` varchar(50) DEFAULT NULL,
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `snpid` (`snpid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_snset','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snset')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_snset','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snset')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_snset','appkey')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snset')." ADD   `appkey` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_snset','appsecret')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snset')." ADD   `appsecret` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_snset','snpid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snset')." ADD   `snpid` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_snset','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snset')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_snset','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snset')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_snset','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_snset')." ADD   KEY `weid` (`weid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_sntjorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `openid` varchar(255) DEFAULT '0',
  `nickname` varchar(255) DEFAULT '0',
  `avatar` varchar(255) DEFAULT '0',
  `jluid` varchar(255) DEFAULT '0' COMMENT '订单所有人ID',
  `jlnickname` varchar(255) DEFAULT '0' COMMENT '订单所有人',
  `jlavatar` varchar(255) DEFAULT '0' COMMENT '订单所有人',
  `memberid` varchar(255) DEFAULT '0' COMMENT '微擎会员编号',
  `uid` varchar(20) DEFAULT NULL COMMENT '用户UID share表',
  `orderid` varchar(255) DEFAULT '0' COMMENT '订单编号',
  `price` varchar(255) DEFAULT '0' COMMENT '奖励金额',
  `yongjin` varchar(255) DEFAULT '0' COMMENT '佣金',
  `type` varchar(255) DEFAULT '0' COMMENT '类型 0 自有  1级奖励 2级奖励',
  `sh` varchar(255) DEFAULT '0' COMMENT '是否审核 0  1待返 2已返 3审核 4失效',
  `msg` varchar(255) DEFAULT '0' COMMENT '留言',
  `itemid` varchar(100) DEFAULT '0' COMMENT '商品ID',
  `jl` varchar(20) DEFAULT '0' COMMENT '奖励金额或是积分',
  `jltype` int(10) DEFAULT '0' COMMENT '0积分 1余额',
  `tztype` int(10) DEFAULT '0' COMMENT '1 为普通用户 团长分佣',
  `createtime` varchar(255) NOT NULL,
  `cjdd` int(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `indx_weid` (`weid`),
  KEY `itemid` (`itemid`),
  KEY `indx_orderid` (`orderid`),
  KEY `indx_openid` (`openid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_sntjorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `openid` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `nickname` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','avatar')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `avatar` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','jluid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `jluid` varchar(255) DEFAULT '0' COMMENT '订单所有人ID'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','jlnickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `jlnickname` varchar(255) DEFAULT '0' COMMENT '订单所有人'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','jlavatar')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `jlavatar` varchar(255) DEFAULT '0' COMMENT '订单所有人'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','memberid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `memberid` varchar(255) DEFAULT '0' COMMENT '微擎会员编号'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `uid` varchar(20) DEFAULT NULL COMMENT '用户UID share表'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','orderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `orderid` varchar(255) DEFAULT '0' COMMENT '订单编号'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','price')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `price` varchar(255) DEFAULT '0' COMMENT '奖励金额'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','yongjin')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `yongjin` varchar(255) DEFAULT '0' COMMENT '佣金'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `type` varchar(255) DEFAULT '0' COMMENT '类型 0 自有  1级奖励 2级奖励'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','sh')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `sh` varchar(255) DEFAULT '0' COMMENT '是否审核 0  1待返 2已返 3审核 4失效'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','msg')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `msg` varchar(255) DEFAULT '0' COMMENT '留言'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','itemid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `itemid` varchar(100) DEFAULT '0' COMMENT '商品ID'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','jl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `jl` varchar(20) DEFAULT '0' COMMENT '奖励金额或是积分'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','jltype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `jltype` int(10) DEFAULT '0' COMMENT '0积分 1余额'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','tztype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `tztype` int(10) DEFAULT '0' COMMENT '1 为普通用户 团长分佣'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `createtime` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','cjdd')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   `cjdd` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','indx_weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   KEY `indx_weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','itemid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   KEY `itemid` (`itemid`)");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','indx_orderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   KEY `indx_orderid` (`orderid`)");}
if(!pdo_fieldexists('tiger_newhu_sntjorder','indx_openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_sntjorder')." ADD   KEY `indx_openid` (`openid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_tbgoods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `px` int(10) NOT NULL DEFAULT '0',
  `zy` int(10) NOT NULL DEFAULT '0' COMMENT '1 大淘客  2互力 3鹊桥库',
  `tj` int(10) NOT NULL DEFAULT '0' COMMENT '秒杀 1  人气2',
  `zt` int(10) NOT NULL DEFAULT '0' COMMENT '专题',
  `zd` int(10) NOT NULL DEFAULT '0' COMMENT '0不置顶  1置顶',
  `qf` int(10) NOT NULL DEFAULT '0' COMMENT '0不群发  1群发库',
  `type` int(2) NOT NULL DEFAULT '0' COMMENT '分类',
  `lxtype` int(2) NOT NULL DEFAULT '0' COMMENT '佣金类别0普通  1定向  2鹊桥 用这个',
  `dxtime` int(13) NOT NULL COMMENT '定向申请时间',
  `yjtype` int(2) NOT NULL DEFAULT '0' COMMENT '佣金类别0普通  1定向  2鹊桥',
  `show_type` int(2) NOT NULL DEFAULT '0' COMMENT '前台是否展示 0 展示  1不展示',
  `title` varchar(250) NOT NULL COMMENT '商品名称',
  `videoid` varchar(50) NOT NULL COMMENT '视频ID',
  `istmall` varchar(5) NOT NULL COMMENT '0不是  1是天猫',
  `dsr` varchar(20) NOT NULL COMMENT 'dsr评分',
  `quan_id` varchar(100) NOT NULL COMMENT '优惠券ID',
  `quan_condition` varchar(200) NOT NULL COMMENT '优惠券使用条件',
  `org_price` varchar(50) NOT NULL COMMENT '商品原价',
  `dingxianurl` varchar(300) NOT NULL COMMENT '定向计划链接',
  `num_iid` varchar(50) NOT NULL COMMENT '商品ID',
  `pic_url` varchar(250) NOT NULL COMMENT '商品主图',
  `small_images` varchar(1000) NOT NULL COMMENT '商品多个小图',
  `item_url` varchar(250) NOT NULL COMMENT '商品详情页链接地址',
  `shop_title` varchar(250) NOT NULL COMMENT '店铺名称',
  `yprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '商品原价格',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '商品价格',
  `tk_rate` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '收入比率%',
  `yongjin` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '佣金',
  `goods_sale` varchar(100) NOT NULL COMMENT '商品月销售',
  `nick` varchar(50) NOT NULL COMMENT '卖家旺旺',
  `tk_durl` varchar(250) NOT NULL COMMENT '淘宝客短链接300天',
  `click_url` varchar(250) NOT NULL COMMENT '淘宝客长链接',
  `taokouling` varchar(100) NOT NULL COMMENT '淘口令 300天有效',
  `coupons_total` varchar(50) NOT NULL COMMENT '优惠券总量',
  `coupons_take` varchar(50) NOT NULL COMMENT '优惠券乘余',
  `coupons_price` varchar(100) NOT NULL COMMENT '优惠券面额',
  `coupons_start` varchar(50) NOT NULL COMMENT '优惠券开始时间',
  `coupons_end` varchar(50) NOT NULL COMMENT '优惠券结束时间',
  `coupons_url` varchar(500) NOT NULL COMMENT '优惠券链接',
  `coupons_tkl` varchar(150) NOT NULL COMMENT '优惠券淘口令',
  `provcity` varchar(100) NOT NULL COMMENT '广东 广州',
  `tjcontent` varchar(250) NOT NULL COMMENT '推荐内容',
  `event_end_time` varchar(100) NOT NULL COMMENT '活动结束时间',
  `event_start_time` varchar(100) NOT NULL COMMENT '活动开始时间',
  `event_zt` varchar(50) NOT NULL COMMENT '活动状态 推广中',
  `event_yjbl` varchar(50) NOT NULL COMMENT '活动佣金比例',
  `event_yj` varchar(50) NOT NULL COMMENT '活动佣金',
  `uptime` varchar(100) NOT NULL COMMENT '更新时间',
  `hot` varchar(50) NOT NULL,
  `hit` varchar(50) NOT NULL,
  `hotcolor` varchar(50) NOT NULL,
  `starttime` varchar(12) DEFAULT NULL,
  `endtime` varchar(12) DEFAULT NULL,
  `status` varchar(20) NOT NULL,
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `indx_num_iid` (`weid`,`num_iid`),
  KEY `indx_weid` (`weid`),
  KEY `title` (`title`),
  KEY `num_iid` (`num_iid`),
  KEY `indx_tj` (`tj`),
  KEY `indx_status` (`status`),
  KEY `indx_type` (`type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_tbgoods','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','px')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `px` int(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','zy')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `zy` int(10) NOT NULL DEFAULT '0' COMMENT '1 大淘客  2互力 3鹊桥库'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','tj')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `tj` int(10) NOT NULL DEFAULT '0' COMMENT '秒杀 1  人气2'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','zt')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `zt` int(10) NOT NULL DEFAULT '0' COMMENT '专题'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','zd')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `zd` int(10) NOT NULL DEFAULT '0' COMMENT '0不置顶  1置顶'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','qf')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `qf` int(10) NOT NULL DEFAULT '0' COMMENT '0不群发  1群发库'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `type` int(2) NOT NULL DEFAULT '0' COMMENT '分类'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','lxtype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `lxtype` int(2) NOT NULL DEFAULT '0' COMMENT '佣金类别0普通  1定向  2鹊桥 用这个'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','dxtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `dxtime` int(13) NOT NULL COMMENT '定向申请时间'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','yjtype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `yjtype` int(2) NOT NULL DEFAULT '0' COMMENT '佣金类别0普通  1定向  2鹊桥'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','show_type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `show_type` int(2) NOT NULL DEFAULT '0' COMMENT '前台是否展示 0 展示  1不展示'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `title` varchar(250) NOT NULL COMMENT '商品名称'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','videoid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `videoid` varchar(50) NOT NULL COMMENT '视频ID'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','istmall')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `istmall` varchar(5) NOT NULL COMMENT '0不是  1是天猫'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','dsr')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `dsr` varchar(20) NOT NULL COMMENT 'dsr评分'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','quan_id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `quan_id` varchar(100) NOT NULL COMMENT '优惠券ID'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','quan_condition')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `quan_condition` varchar(200) NOT NULL COMMENT '优惠券使用条件'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','org_price')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `org_price` varchar(50) NOT NULL COMMENT '商品原价'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','dingxianurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `dingxianurl` varchar(300) NOT NULL COMMENT '定向计划链接'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','num_iid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `num_iid` varchar(50) NOT NULL COMMENT '商品ID'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','pic_url')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `pic_url` varchar(250) NOT NULL COMMENT '商品主图'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','small_images')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `small_images` varchar(1000) NOT NULL COMMENT '商品多个小图'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','item_url')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `item_url` varchar(250) NOT NULL COMMENT '商品详情页链接地址'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','shop_title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `shop_title` varchar(250) NOT NULL COMMENT '店铺名称'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','yprice')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `yprice` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '商品原价格'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','price')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '商品价格'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','tk_rate')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `tk_rate` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '收入比率%'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','yongjin')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `yongjin` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '佣金'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','goods_sale')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `goods_sale` varchar(100) NOT NULL COMMENT '商品月销售'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','nick')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `nick` varchar(50) NOT NULL COMMENT '卖家旺旺'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','tk_durl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `tk_durl` varchar(250) NOT NULL COMMENT '淘宝客短链接300天'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','click_url')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `click_url` varchar(250) NOT NULL COMMENT '淘宝客长链接'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','taokouling')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `taokouling` varchar(100) NOT NULL COMMENT '淘口令 300天有效'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','coupons_total')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `coupons_total` varchar(50) NOT NULL COMMENT '优惠券总量'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','coupons_take')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `coupons_take` varchar(50) NOT NULL COMMENT '优惠券乘余'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','coupons_price')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `coupons_price` varchar(100) NOT NULL COMMENT '优惠券面额'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','coupons_start')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `coupons_start` varchar(50) NOT NULL COMMENT '优惠券开始时间'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','coupons_end')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `coupons_end` varchar(50) NOT NULL COMMENT '优惠券结束时间'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','coupons_url')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `coupons_url` varchar(500) NOT NULL COMMENT '优惠券链接'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','coupons_tkl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `coupons_tkl` varchar(150) NOT NULL COMMENT '优惠券淘口令'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','provcity')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `provcity` varchar(100) NOT NULL COMMENT '广东 广州'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','tjcontent')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `tjcontent` varchar(250) NOT NULL COMMENT '推荐内容'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','event_end_time')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `event_end_time` varchar(100) NOT NULL COMMENT '活动结束时间'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','event_start_time')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `event_start_time` varchar(100) NOT NULL COMMENT '活动开始时间'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','event_zt')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `event_zt` varchar(50) NOT NULL COMMENT '活动状态 推广中'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','event_yjbl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `event_yjbl` varchar(50) NOT NULL COMMENT '活动佣金比例'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','event_yj')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `event_yj` varchar(50) NOT NULL COMMENT '活动佣金'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','uptime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `uptime` varchar(100) NOT NULL COMMENT '更新时间'");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','hot')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `hot` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','hit')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `hit` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','hotcolor')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `hotcolor` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','starttime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `starttime` varchar(12) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','endtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `endtime` varchar(12) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','status')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `status` varchar(20) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','indx_num_iid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   UNIQUE KEY `indx_num_iid` (`weid`,`num_iid`)");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','indx_weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   KEY `indx_weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   KEY `title` (`title`)");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','num_iid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   KEY `num_iid` (`num_iid`)");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','indx_tj')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   KEY `indx_tj` (`tj`)");}
if(!pdo_fieldexists('tiger_newhu_tbgoods','indx_status')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoods')." ADD   KEY `indx_status` (`status`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_tbgoodsqf` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `qf` int(10) NOT NULL DEFAULT '0' COMMENT '0不群发  1群发库',
  `lxtype` int(2) NOT NULL DEFAULT '0' COMMENT '佣金类别0普通  1定向  2鹊桥 用这个',
  `title` varchar(250) NOT NULL COMMENT '商品名称',
  `videoid` varchar(50) NOT NULL COMMENT '视频ID',
  `quan_id` varchar(100) NOT NULL COMMENT '优惠券ID',
  `quan_condition` varchar(200) NOT NULL COMMENT '优惠券使用条件',
  `org_price` varchar(50) NOT NULL COMMENT '商品原价',
  `dingxianurl` varchar(300) NOT NULL COMMENT '定向计划链接',
  `num_iid` varchar(50) NOT NULL COMMENT '商品ID',
  `pic_url` varchar(250) NOT NULL COMMENT '商品主图',
  `item_url` varchar(250) NOT NULL COMMENT '商品详情页链接地址',
  `price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '商品价格',
  `tk_rate` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '收入比率%',
  `yongjin` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '佣金',
  `goods_sale` varchar(100) NOT NULL COMMENT '商品月销售',
  `coupons_take` varchar(50) NOT NULL COMMENT '优惠券乘余',
  `coupons_price` varchar(100) NOT NULL COMMENT '优惠券面额',
  `coupons_start` varchar(50) NOT NULL COMMENT '优惠券开始时间',
  `coupons_end` varchar(50) NOT NULL COMMENT '优惠券结束时间',
  `coupons_url` varchar(500) NOT NULL COMMENT '优惠券链接',
  `tjcontent` varchar(250) NOT NULL COMMENT '推荐内容',
  `uptime` varchar(100) NOT NULL COMMENT '更新时间',
  `weiqun` varchar(50) NOT NULL COMMENT '微信群名称',
  `qqqun` varchar(50) NOT NULL COMMENT 'QQ群名称',
  `qfzt` int(2) NOT NULL DEFAULT '0' COMMENT '0未群发  1已群发',
  `userid` varchar(50) NOT NULL COMMENT 'share表ID',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `userid_numid` (`userid`,`num_iid`),
  KEY `weid` (`weid`),
  KEY `title` (`title`),
  KEY `weiqun` (`weiqun`),
  KEY `qqqun` (`qqqun`),
  KEY `num_iid` (`num_iid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','qf')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `qf` int(10) NOT NULL DEFAULT '0' COMMENT '0不群发  1群发库'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','lxtype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `lxtype` int(2) NOT NULL DEFAULT '0' COMMENT '佣金类别0普通  1定向  2鹊桥 用这个'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `title` varchar(250) NOT NULL COMMENT '商品名称'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','videoid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `videoid` varchar(50) NOT NULL COMMENT '视频ID'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','quan_id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `quan_id` varchar(100) NOT NULL COMMENT '优惠券ID'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','quan_condition')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `quan_condition` varchar(200) NOT NULL COMMENT '优惠券使用条件'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','org_price')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `org_price` varchar(50) NOT NULL COMMENT '商品原价'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','dingxianurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `dingxianurl` varchar(300) NOT NULL COMMENT '定向计划链接'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','num_iid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `num_iid` varchar(50) NOT NULL COMMENT '商品ID'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','pic_url')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `pic_url` varchar(250) NOT NULL COMMENT '商品主图'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','item_url')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `item_url` varchar(250) NOT NULL COMMENT '商品详情页链接地址'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','price')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `price` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '商品价格'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','tk_rate')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `tk_rate` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '收入比率%'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','yongjin')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `yongjin` decimal(10,2) NOT NULL DEFAULT '0.00' COMMENT '佣金'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','goods_sale')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `goods_sale` varchar(100) NOT NULL COMMENT '商品月销售'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','coupons_take')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `coupons_take` varchar(50) NOT NULL COMMENT '优惠券乘余'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','coupons_price')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `coupons_price` varchar(100) NOT NULL COMMENT '优惠券面额'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','coupons_start')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `coupons_start` varchar(50) NOT NULL COMMENT '优惠券开始时间'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','coupons_end')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `coupons_end` varchar(50) NOT NULL COMMENT '优惠券结束时间'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','coupons_url')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `coupons_url` varchar(500) NOT NULL COMMENT '优惠券链接'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','tjcontent')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `tjcontent` varchar(250) NOT NULL COMMENT '推荐内容'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','uptime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `uptime` varchar(100) NOT NULL COMMENT '更新时间'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','weiqun')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `weiqun` varchar(50) NOT NULL COMMENT '微信群名称'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','qqqun')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `qqqun` varchar(50) NOT NULL COMMENT 'QQ群名称'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','qfzt')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `qfzt` int(2) NOT NULL DEFAULT '0' COMMENT '0未群发  1已群发'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','userid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `userid` varchar(50) NOT NULL COMMENT 'share表ID'");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','userid_numid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   UNIQUE KEY `userid_numid` (`userid`,`num_iid`)");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   KEY `weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   KEY `title` (`title`)");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','weiqun')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   KEY `weiqun` (`weiqun`)");}
if(!pdo_fieldexists('tiger_newhu_tbgoodsqf','qqqun')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tbgoodsqf')." ADD   KEY `qqqun` (`qqqun`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_ticket` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `ticket` varchar(255) DEFAULT '0',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_ticket','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_ticket')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_ticket','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_ticket')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_ticket','ticket')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_ticket')." ADD   `ticket` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_ticket','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_ticket')." ADD   `createtime` int(10) NOT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_tixianlog` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uniacid` int(11) DEFAULT NULL,
  `dwnick` varchar(255) DEFAULT NULL COMMENT '微信用户昵称',
  `dopenid` varchar(255) DEFAULT NULL COMMENT '微信用户openid',
  `dtime` int(11) DEFAULT NULL COMMENT '打款时间',
  `dcredit` int(11) DEFAULT NULL COMMENT '消耗积分',
  `dtotal_amount` int(11) DEFAULT NULL COMMENT '金额，分为单位',
  `dmch_billno` varchar(50) DEFAULT NULL COMMENT '生成的商户订单号',
  `zfbuid` varchar(100) DEFAULT NULL COMMENT '支付宝帐号',
  `dissuccess` tinyint(1) DEFAULT NULL COMMENT '是否打款成功',
  `dresult` varchar(255) DEFAULT NULL COMMENT '失败提示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_tixianlog','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tixianlog')." ADD 
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_tixianlog','uniacid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tixianlog')." ADD   `uniacid` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_tixianlog','dwnick')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tixianlog')." ADD   `dwnick` varchar(255) DEFAULT NULL COMMENT '微信用户昵称'");}
if(!pdo_fieldexists('tiger_newhu_tixianlog','dopenid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tixianlog')." ADD   `dopenid` varchar(255) DEFAULT NULL COMMENT '微信用户openid'");}
if(!pdo_fieldexists('tiger_newhu_tixianlog','dtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tixianlog')." ADD   `dtime` int(11) DEFAULT NULL COMMENT '打款时间'");}
if(!pdo_fieldexists('tiger_newhu_tixianlog','dcredit')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tixianlog')." ADD   `dcredit` int(11) DEFAULT NULL COMMENT '消耗积分'");}
if(!pdo_fieldexists('tiger_newhu_tixianlog','dtotal_amount')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tixianlog')." ADD   `dtotal_amount` int(11) DEFAULT NULL COMMENT '金额，分为单位'");}
if(!pdo_fieldexists('tiger_newhu_tixianlog','dmch_billno')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tixianlog')." ADD   `dmch_billno` varchar(50) DEFAULT NULL COMMENT '生成的商户订单号'");}
if(!pdo_fieldexists('tiger_newhu_tixianlog','zfbuid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tixianlog')." ADD   `zfbuid` varchar(100) DEFAULT NULL COMMENT '支付宝帐号'");}
if(!pdo_fieldexists('tiger_newhu_tixianlog','dissuccess')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tixianlog')." ADD   `dissuccess` tinyint(1) DEFAULT NULL COMMENT '是否打款成功'");}
if(!pdo_fieldexists('tiger_newhu_tixianlog','dresult')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tixianlog')." ADD   `dresult` varchar(255) DEFAULT NULL COMMENT '失败提示'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_tkorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `addtime` varchar(100) DEFAULT '0' COMMENT '创建时间',
  `orderid` varchar(100) DEFAULT '0' COMMENT '订单编号',
  `numid` varchar(100) DEFAULT '0' COMMENT '商品ID',
  `shopname` varchar(255) DEFAULT '0' COMMENT '店铺名称',
  `title` varchar(255) DEFAULT '0' COMMENT '商品标题',
  `orderzt` varchar(255) DEFAULT '0' COMMENT '订单状态',
  `srbl` varchar(255) DEFAULT '0' COMMENT '收入比例',
  `fcbl` varchar(255) DEFAULT '0' COMMENT '分成比例',
  `fkprice` varchar(255) DEFAULT '0' COMMENT '付款金额',
  `xgyg` varchar(255) DEFAULT '0' COMMENT '效果预估',
  `jstime` varchar(255) DEFAULT '0' COMMENT '结算时间',
  `pt` varchar(255) DEFAULT '0' COMMENT '平台',
  `type` varchar(20) DEFAULT '0' COMMENT '状态 0未奖励 1已奖励',
  `mtid` varchar(150) DEFAULT '0' COMMENT '媒体ID',
  `mttitle` varchar(150) DEFAULT '0' COMMENT '媒体名称',
  `tgwid` varchar(150) DEFAULT '0' COMMENT '推广ID',
  `tgwtitle` varchar(150) DEFAULT '0' COMMENT '推广位名称',
  `wq` varchar(10) DEFAULT '0' COMMENT '维权订单 1 维权订单',
  `createtime` varchar(255) NOT NULL,
  `tbsbuid6` varchar(10) DEFAULT NULL,
  `zdgd` int(10) DEFAULT '0',
  `forderid` varchar(100) DEFAULT '0' COMMENT '父订单编号',
  `ly` varchar(10) DEFAULT '0' COMMENT '来源0联盟表格 1 联盟API',
  `zorderid` varchar(100) DEFAULT '0' COMMENT '子订单编号',
  `relation_id` varchar(50) DEFAULT '0',
  `special_id` int(10) DEFAULT '0',
  `click_time` varchar(50) DEFAULT '0',
  `itempic` varchar(200) NOT NULL COMMENT '图片',
  `dsf` varchar(10) NOT NULL COMMENT ' 2:二方  3:三方',
  PRIMARY KEY (`id`),
  UNIQUE KEY `orderid` (`weid`,`orderid`,`numid`),
  KEY `indx_weid` (`weid`),
  KEY `addtime` (`addtime`),
  KEY `jstime` (`jstime`),
  KEY `tgwid` (`tgwid`),
  KEY `indx_orderid` (`orderid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_tkorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_tkorder','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','addtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `addtime` varchar(100) DEFAULT '0' COMMENT '创建时间'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','orderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `orderid` varchar(100) DEFAULT '0' COMMENT '订单编号'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','numid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `numid` varchar(100) DEFAULT '0' COMMENT '商品ID'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','shopname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `shopname` varchar(255) DEFAULT '0' COMMENT '店铺名称'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `title` varchar(255) DEFAULT '0' COMMENT '商品标题'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','orderzt')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `orderzt` varchar(255) DEFAULT '0' COMMENT '订单状态'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','srbl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `srbl` varchar(255) DEFAULT '0' COMMENT '收入比例'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','fcbl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `fcbl` varchar(255) DEFAULT '0' COMMENT '分成比例'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','fkprice')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `fkprice` varchar(255) DEFAULT '0' COMMENT '付款金额'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','xgyg')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `xgyg` varchar(255) DEFAULT '0' COMMENT '效果预估'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','jstime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `jstime` varchar(255) DEFAULT '0' COMMENT '结算时间'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','pt')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `pt` varchar(255) DEFAULT '0' COMMENT '平台'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `type` varchar(20) DEFAULT '0' COMMENT '状态 0未奖励 1已奖励'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','mtid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `mtid` varchar(150) DEFAULT '0' COMMENT '媒体ID'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','mttitle')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `mttitle` varchar(150) DEFAULT '0' COMMENT '媒体名称'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','tgwid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `tgwid` varchar(150) DEFAULT '0' COMMENT '推广ID'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','tgwtitle')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `tgwtitle` varchar(150) DEFAULT '0' COMMENT '推广位名称'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','wq')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `wq` varchar(10) DEFAULT '0' COMMENT '维权订单 1 维权订单'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `createtime` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_tkorder','tbsbuid6')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `tbsbuid6` varchar(10) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_tkorder','zdgd')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `zdgd` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','forderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `forderid` varchar(100) DEFAULT '0' COMMENT '父订单编号'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','ly')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `ly` varchar(10) DEFAULT '0' COMMENT '来源0联盟表格 1 联盟API'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','zorderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `zorderid` varchar(100) DEFAULT '0' COMMENT '子订单编号'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','relation_id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `relation_id` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','special_id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `special_id` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','click_time')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `click_time` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','itempic')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `itempic` varchar(200) NOT NULL COMMENT '图片'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','dsf')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   `dsf` varchar(10) NOT NULL COMMENT ' 2:二方  3:三方'");}
if(!pdo_fieldexists('tiger_newhu_tkorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_tkorder','orderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   UNIQUE KEY `orderid` (`weid`,`orderid`,`numid`)");}
if(!pdo_fieldexists('tiger_newhu_tkorder','indx_weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   KEY `indx_weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_tkorder','addtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   KEY `addtime` (`addtime`)");}
if(!pdo_fieldexists('tiger_newhu_tkorder','jstime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   KEY `jstime` (`jstime`)");}
if(!pdo_fieldexists('tiger_newhu_tkorder','tgwid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tkorder')." ADD   KEY `tgwid` (`tgwid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_tksign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `tbuid` varchar(50) DEFAULT NULL,
  `sign` varchar(100) DEFAULT NULL,
  `endtime` varchar(30) DEFAULT NULL COMMENT '结束时间',
  `createtime` int(10) NOT NULL,
  `tbnickname` varchar(200) DEFAULT NULL,
  `siteid` varchar(100) DEFAULT '0',
  `memberid` varchar(100) DEFAULT '0',
  `qdtgurl` varchar(500) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `tbuid` (`tbuid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_tksign','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tksign')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_tksign','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tksign')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_tksign','tbuid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tksign')." ADD   `tbuid` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_tksign','sign')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tksign')." ADD   `sign` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_tksign','endtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tksign')." ADD   `endtime` varchar(30) DEFAULT NULL COMMENT '结束时间'");}
if(!pdo_fieldexists('tiger_newhu_tksign','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tksign')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_tksign','tbnickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tksign')." ADD   `tbnickname` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_tksign','siteid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tksign')." ADD   `siteid` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_tksign','memberid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tksign')." ADD   `memberid` varchar(100) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_tksign','qdtgurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tksign')." ADD   `qdtgurl` varchar(500) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_tksign','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tksign')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_tksign','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_tksign')." ADD   KEY `weid` (`weid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_txlog` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT NULL,
  `uid` varchar(255) DEFAULT NULL COMMENT '用户UID share表',
  `nickname` varchar(255) DEFAULT NULL COMMENT '微信用户昵称',
  `openid` varchar(255) DEFAULT NULL COMMENT '微信用户openid',
  `avatar` varchar(255) DEFAULT '0',
  `addtime` int(11) DEFAULT NULL COMMENT '打款时间',
  `credit1` int(11) DEFAULT NULL COMMENT '消耗积分',
  `credit2` varchar(100) DEFAULT NULL COMMENT '金额，分为单位',
  `zfbuid` varchar(100) DEFAULT NULL COMMENT '支付宝帐号',
  `dmch_billno` varchar(50) DEFAULT NULL COMMENT '生成的商户订单号',
  `sh` tinyint(1) DEFAULT NULL COMMENT '是否打款成功',
  `dresult` varchar(255) DEFAULT NULL COMMENT '失败提示',
  `createtime` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_txlog','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_txlog')." ADD 
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_txlog','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_txlog')." ADD   `weid` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_txlog','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_txlog')." ADD   `uid` varchar(255) DEFAULT NULL COMMENT '用户UID share表'");}
if(!pdo_fieldexists('tiger_newhu_txlog','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_txlog')." ADD   `nickname` varchar(255) DEFAULT NULL COMMENT '微信用户昵称'");}
if(!pdo_fieldexists('tiger_newhu_txlog','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_txlog')." ADD   `openid` varchar(255) DEFAULT NULL COMMENT '微信用户openid'");}
if(!pdo_fieldexists('tiger_newhu_txlog','avatar')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_txlog')." ADD   `avatar` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_txlog','addtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_txlog')." ADD   `addtime` int(11) DEFAULT NULL COMMENT '打款时间'");}
if(!pdo_fieldexists('tiger_newhu_txlog','credit1')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_txlog')." ADD   `credit1` int(11) DEFAULT NULL COMMENT '消耗积分'");}
if(!pdo_fieldexists('tiger_newhu_txlog','credit2')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_txlog')." ADD   `credit2` varchar(100) DEFAULT NULL COMMENT '金额，分为单位'");}
if(!pdo_fieldexists('tiger_newhu_txlog','zfbuid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_txlog')." ADD   `zfbuid` varchar(100) DEFAULT NULL COMMENT '支付宝帐号'");}
if(!pdo_fieldexists('tiger_newhu_txlog','dmch_billno')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_txlog')." ADD   `dmch_billno` varchar(50) DEFAULT NULL COMMENT '生成的商户订单号'");}
if(!pdo_fieldexists('tiger_newhu_txlog','sh')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_txlog')." ADD   `sh` tinyint(1) DEFAULT NULL COMMENT '是否打款成功'");}
if(!pdo_fieldexists('tiger_newhu_txlog','dresult')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_txlog')." ADD   `dresult` varchar(255) DEFAULT NULL COMMENT '失败提示'");}
if(!pdo_fieldexists('tiger_newhu_txlog','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_txlog')." ADD   `createtime` varchar(255) NOT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_wphorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `orderSn` varchar(100) DEFAULT '0' COMMENT '订单号',
  `status` varchar(100) DEFAULT '0' COMMENT '订单状态:0-不合格，1-待定，2-已完结',
  `newCustomer` varchar(100) DEFAULT '0' COMMENT '新老客：0-待定，1-新客，2-老客',
  `channelTag` varchar(100) DEFAULT '0' COMMENT '渠道标识',
  `orderTime` varchar(100) DEFAULT '0' COMMENT '下单时间 时间戳 单位毫秒',
  `signTime` varchar(100) DEFAULT '0' COMMENT '签收时间 时间戳 单位毫秒',
  `settledTime` varchar(100) DEFAULT '0' COMMENT '结算时间 时间戳 单位毫秒',
  `lastUpdateTime` varchar(100) DEFAULT '0' COMMENT '订单上次更新时间 时间戳 单位毫秒',
  `settled` varchar(100) DEFAULT '0' COMMENT '是否自推自买 0-否，1-是',
  `selfBuy` varchar(100) DEFAULT '0' COMMENT '是否自推自买 0-否，1-是',
  `orderSubStatusName` varchar(100) DEFAULT '0' COMMENT '订单子状态：流转状态-支持状态：（已下单、已付款、已签收、待结算、已结算、已失效）',
  `commission` varchar(100) DEFAULT '0' COMMENT '商品总佣金:单位元',
  `afterSaleChangeCommission` varchar(100) DEFAULT '0' COMMENT '售后订单佣金变动：仅在订单完结之后发生售后行为时返回',
  `afterSaleChangeGoodsCount` varchar(100) DEFAULT '0' COMMENT '售后订单总商品数量变动：仅在订单完结之后发生售后行为时返回',
  `commissionEnterTime` varchar(100) DEFAULT '0' COMMENT '入账时间，时间戳，单位毫秒',
  `orderSource` varchar(100) DEFAULT '0' COMMENT '订单来源',
  `pid` varchar(100) DEFAULT '0' COMMENT '推广PID:目前等同于channelTag',
  `isPrepay` varchar(100) DEFAULT '0' COMMENT '是否预付订单:0-否，1-是',
  `goodsId` varchar(100) DEFAULT '0' COMMENT '商品id',
  `goodsName` varchar(500) DEFAULT '0' COMMENT '商品名称',
  `goodsThumb` varchar(500) DEFAULT '0' COMMENT '图片',
  `goodsCount` varchar(100) DEFAULT '0' COMMENT '商品数量',
  `commissionTotalCost` varchar(100) DEFAULT '0' COMMENT '商品计佣金额',
  `commissionRate` varchar(100) DEFAULT '0' COMMENT '商品佣金比例',
  `commCode` varchar(100) DEFAULT '0' COMMENT '佣金编码：对应商品二级分类',
  `commName` varchar(100) DEFAULT '0' COMMENT '佣金方案名称',
  `afterSaleInfo` varchar(100) DEFAULT '0' COMMENT '商品售后信息',
  `sizeId` varchar(100) DEFAULT '0' COMMENT '商品尺码：2019.01.01之后可用',
  `createtime` varchar(20) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ord_w_id` (`weid`,`orderSn`),
  KEY `weid` (`weid`),
  KEY `orderTime` (`orderTime`),
  KEY `settledTime` (`settledTime`),
  KEY `pid` (`pid`),
  KEY `orderSn` (`orderSn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_wphorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_wphorder','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','orderSn')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `orderSn` varchar(100) DEFAULT '0' COMMENT '订单号'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','status')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `status` varchar(100) DEFAULT '0' COMMENT '订单状态:0-不合格，1-待定，2-已完结'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','newCustomer')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `newCustomer` varchar(100) DEFAULT '0' COMMENT '新老客：0-待定，1-新客，2-老客'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','channelTag')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `channelTag` varchar(100) DEFAULT '0' COMMENT '渠道标识'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','orderTime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `orderTime` varchar(100) DEFAULT '0' COMMENT '下单时间 时间戳 单位毫秒'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','signTime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `signTime` varchar(100) DEFAULT '0' COMMENT '签收时间 时间戳 单位毫秒'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','settledTime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `settledTime` varchar(100) DEFAULT '0' COMMENT '结算时间 时间戳 单位毫秒'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','lastUpdateTime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `lastUpdateTime` varchar(100) DEFAULT '0' COMMENT '订单上次更新时间 时间戳 单位毫秒'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','settled')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `settled` varchar(100) DEFAULT '0' COMMENT '是否自推自买 0-否，1-是'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','selfBuy')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `selfBuy` varchar(100) DEFAULT '0' COMMENT '是否自推自买 0-否，1-是'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','orderSubStatusName')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `orderSubStatusName` varchar(100) DEFAULT '0' COMMENT '订单子状态：流转状态-支持状态：（已下单、已付款、已签收、待结算、已结算、已失效）'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','commission')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `commission` varchar(100) DEFAULT '0' COMMENT '商品总佣金:单位元'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','afterSaleChangeCommission')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `afterSaleChangeCommission` varchar(100) DEFAULT '0' COMMENT '售后订单佣金变动：仅在订单完结之后发生售后行为时返回'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','afterSaleChangeGoodsCount')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `afterSaleChangeGoodsCount` varchar(100) DEFAULT '0' COMMENT '售后订单总商品数量变动：仅在订单完结之后发生售后行为时返回'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','commissionEnterTime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `commissionEnterTime` varchar(100) DEFAULT '0' COMMENT '入账时间，时间戳，单位毫秒'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','orderSource')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `orderSource` varchar(100) DEFAULT '0' COMMENT '订单来源'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','pid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `pid` varchar(100) DEFAULT '0' COMMENT '推广PID:目前等同于channelTag'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','isPrepay')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `isPrepay` varchar(100) DEFAULT '0' COMMENT '是否预付订单:0-否，1-是'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','goodsId')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `goodsId` varchar(100) DEFAULT '0' COMMENT '商品id'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','goodsName')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `goodsName` varchar(500) DEFAULT '0' COMMENT '商品名称'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','goodsThumb')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `goodsThumb` varchar(500) DEFAULT '0' COMMENT '图片'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','goodsCount')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `goodsCount` varchar(100) DEFAULT '0' COMMENT '商品数量'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','commissionTotalCost')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `commissionTotalCost` varchar(100) DEFAULT '0' COMMENT '商品计佣金额'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','commissionRate')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `commissionRate` varchar(100) DEFAULT '0' COMMENT '商品佣金比例'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','commCode')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `commCode` varchar(100) DEFAULT '0' COMMENT '佣金编码：对应商品二级分类'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','commName')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `commName` varchar(100) DEFAULT '0' COMMENT '佣金方案名称'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','afterSaleInfo')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `afterSaleInfo` varchar(100) DEFAULT '0' COMMENT '商品售后信息'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','sizeId')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `sizeId` varchar(100) DEFAULT '0' COMMENT '商品尺码：2019.01.01之后可用'");}
if(!pdo_fieldexists('tiger_newhu_wphorder','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   `createtime` varchar(20) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_wphorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_wphorder','ord_w_id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   UNIQUE KEY `ord_w_id` (`weid`,`orderSn`)");}
if(!pdo_fieldexists('tiger_newhu_wphorder','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   KEY `weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_wphorder','orderTime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   KEY `orderTime` (`orderTime`)");}
if(!pdo_fieldexists('tiger_newhu_wphorder','settledTime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   KEY `settledTime` (`settledTime`)");}
if(!pdo_fieldexists('tiger_newhu_wphorder','pid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphorder')." ADD   KEY `pid` (`pid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_wphsign` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `access_token` varchar(100) DEFAULT NULL,
  `expires_in` varchar(100) DEFAULT NULL COMMENT '过期时间 单位是秒',
  `refresh_token` varchar(50) DEFAULT NULL COMMENT '可用来刷新access_token',
  `open_id` varchar(50) DEFAULT NULL COMMENT '当前授权用户的UID',
  `endtime` varchar(30) DEFAULT NULL COMMENT '结束时间',
  `createtime` int(10) NOT NULL,
  `squrl` text,
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_wphsign','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphsign')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_wphsign','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphsign')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_wphsign','access_token')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphsign')." ADD   `access_token` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_newhu_wphsign','expires_in')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphsign')." ADD   `expires_in` varchar(100) DEFAULT NULL COMMENT '过期时间 单位是秒'");}
if(!pdo_fieldexists('tiger_newhu_wphsign','refresh_token')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphsign')." ADD   `refresh_token` varchar(50) DEFAULT NULL COMMENT '可用来刷新access_token'");}
if(!pdo_fieldexists('tiger_newhu_wphsign','open_id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphsign')." ADD   `open_id` varchar(50) DEFAULT NULL COMMENT '当前授权用户的UID'");}
if(!pdo_fieldexists('tiger_newhu_wphsign','endtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphsign')." ADD   `endtime` varchar(30) DEFAULT NULL COMMENT '结束时间'");}
if(!pdo_fieldexists('tiger_newhu_wphsign','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphsign')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_wphsign','squrl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphsign')." ADD   `squrl` text");}
if(!pdo_fieldexists('tiger_newhu_wphsign','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphsign')." ADD   PRIMARY KEY (`id`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_wphtjorder` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `openid` varchar(255) DEFAULT '0',
  `nickname` varchar(255) DEFAULT '0',
  `avatar` varchar(255) DEFAULT '0',
  `jluid` varchar(255) DEFAULT '0' COMMENT '订单所有人ID',
  `jlnickname` varchar(255) DEFAULT '0' COMMENT '订单所有人',
  `jlavatar` varchar(255) DEFAULT '0' COMMENT '订单所有人',
  `memberid` varchar(255) DEFAULT '0' COMMENT '微擎会员编号',
  `uid` varchar(20) DEFAULT NULL COMMENT '用户UID share表',
  `orderid` varchar(255) DEFAULT '0' COMMENT '订单编号',
  `price` varchar(255) DEFAULT '0' COMMENT '奖励金额',
  `yongjin` varchar(255) DEFAULT '0' COMMENT '佣金',
  `type` varchar(255) DEFAULT '0' COMMENT '类型 0 自有  1级奖励 2级奖励',
  `sh` varchar(255) DEFAULT '0' COMMENT '是否审核 0  1待返 2已返 3审核 4失效',
  `msg` varchar(255) DEFAULT '0' COMMENT '留言',
  `itemid` varchar(100) DEFAULT '0' COMMENT '商品ID',
  `jl` varchar(20) DEFAULT '0' COMMENT '奖励金额或是积分',
  `jltype` int(10) DEFAULT '0' COMMENT '0积分 1余额',
  `tztype` int(10) DEFAULT '0' COMMENT '1 为普通用户 团长分佣',
  `createtime` varchar(255) NOT NULL,
  `cjdd` int(10) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `indx_weid` (`weid`),
  KEY `itemid` (`itemid`),
  KEY `indx_orderid` (`orderid`),
  KEY `indx_openid` (`openid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_wphtjorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `openid` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `nickname` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','avatar')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `avatar` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','jluid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `jluid` varchar(255) DEFAULT '0' COMMENT '订单所有人ID'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','jlnickname')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `jlnickname` varchar(255) DEFAULT '0' COMMENT '订单所有人'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','jlavatar')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `jlavatar` varchar(255) DEFAULT '0' COMMENT '订单所有人'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','memberid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `memberid` varchar(255) DEFAULT '0' COMMENT '微擎会员编号'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `uid` varchar(20) DEFAULT NULL COMMENT '用户UID share表'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','orderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `orderid` varchar(255) DEFAULT '0' COMMENT '订单编号'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','price')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `price` varchar(255) DEFAULT '0' COMMENT '奖励金额'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','yongjin')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `yongjin` varchar(255) DEFAULT '0' COMMENT '佣金'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `type` varchar(255) DEFAULT '0' COMMENT '类型 0 自有  1级奖励 2级奖励'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','sh')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `sh` varchar(255) DEFAULT '0' COMMENT '是否审核 0  1待返 2已返 3审核 4失效'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','msg')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `msg` varchar(255) DEFAULT '0' COMMENT '留言'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','itemid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `itemid` varchar(100) DEFAULT '0' COMMENT '商品ID'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','jl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `jl` varchar(20) DEFAULT '0' COMMENT '奖励金额或是积分'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','jltype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `jltype` int(10) DEFAULT '0' COMMENT '0积分 1余额'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','tztype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `tztype` int(10) DEFAULT '0' COMMENT '1 为普通用户 团长分佣'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `createtime` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','cjdd')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   `cjdd` int(10) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','indx_weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   KEY `indx_weid` (`weid`)");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','itemid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   KEY `itemid` (`itemid`)");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','indx_orderid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   KEY `indx_orderid` (`orderid`)");}
if(!pdo_fieldexists('tiger_newhu_wphtjorder','indx_openid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_wphtjorder')." ADD   KEY `indx_openid` (`openid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_xcxdh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `fztype` int(10) DEFAULT '0' COMMENT '1首页广告   2广告下面菜单  3图标下面4个图片',
  `type` int(10) DEFAULT '0' COMMENT '1.H5链接  2.商品分类  3活动',
  `kfkey` varchar(100) DEFAULT NULL COMMENT '客服关键词',
  `title` varchar(100) DEFAULT '0' COMMENT '名称',
  `ftitle` varchar(100) DEFAULT '0' COMMENT '副名称',
  `hd` varchar(20) DEFAULT '0' COMMENT '1聚划算 2淘抢购  3秒杀  4 叮咚抢  5 视频单  6品牌团 7官方推荐 8好券直播 9小编力荐',
  `fqcat` int(11) DEFAULT '0' COMMENT '商品分类ID',
  `pic` varchar(250) DEFAULT '0',
  `xcxpage` varchar(1000) DEFAULT '0',
  `url` varchar(1000) DEFAULT '0',
  `appid` varchar(255) NOT NULL,
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_xcxdh','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxdh')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_xcxdh','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxdh')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_xcxdh','fztype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxdh')." ADD   `fztype` int(10) DEFAULT '0' COMMENT '1首页广告   2广告下面菜单  3图标下面4个图片'");}
if(!pdo_fieldexists('tiger_newhu_xcxdh','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxdh')." ADD   `type` int(10) DEFAULT '0' COMMENT '1.H5链接  2.商品分类  3活动'");}
if(!pdo_fieldexists('tiger_newhu_xcxdh','kfkey')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxdh')." ADD   `kfkey` varchar(100) DEFAULT NULL COMMENT '客服关键词'");}
if(!pdo_fieldexists('tiger_newhu_xcxdh','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxdh')." ADD   `title` varchar(100) DEFAULT '0' COMMENT '名称'");}
if(!pdo_fieldexists('tiger_newhu_xcxdh','ftitle')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxdh')." ADD   `ftitle` varchar(100) DEFAULT '0' COMMENT '副名称'");}
if(!pdo_fieldexists('tiger_newhu_xcxdh','hd')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxdh')." ADD   `hd` varchar(20) DEFAULT '0' COMMENT '1聚划算 2淘抢购  3秒杀  4 叮咚抢  5 视频单  6品牌团 7官方推荐 8好券直播 9小编力荐'");}
if(!pdo_fieldexists('tiger_newhu_xcxdh','fqcat')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxdh')." ADD   `fqcat` int(11) DEFAULT '0' COMMENT '商品分类ID'");}
if(!pdo_fieldexists('tiger_newhu_xcxdh','pic')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxdh')." ADD   `pic` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_xcxdh','xcxpage')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxdh')." ADD   `xcxpage` varchar(1000) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_xcxdh','url')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxdh')." ADD   `url` varchar(1000) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_xcxdh','appid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxdh')." ADD   `appid` varchar(255) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_xcxdh','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxdh')." ADD   `createtime` int(10) NOT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_xcxmobanmsg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `title` varchar(250) DEFAULT NULL COMMENT '模版标题',
  `mbid` varchar(250) DEFAULT NULL COMMENT '模版ID',
  `first` varchar(250) DEFAULT NULL COMMENT '头部内容',
  `firstcolor` varchar(100) DEFAULT NULL COMMENT '头部颜色',
  `zjvalue` text COMMENT '中间内容',
  `zjcolor` text COMMENT '中间颜色',
  `remark` varchar(250) DEFAULT NULL COMMENT '尾部内容',
  `remarkcolor` varchar(100) DEFAULT NULL COMMENT '尾部颜色',
  `turl` varchar(250) DEFAULT NULL COMMENT '模版链接',
  `emphasis_keyword` varchar(100) DEFAULT NULL COMMENT '哪个放大',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_xcxmobanmsg','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxmobanmsg')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_xcxmobanmsg','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxmobanmsg')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_xcxmobanmsg','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxmobanmsg')." ADD   `title` varchar(250) DEFAULT NULL COMMENT '模版标题'");}
if(!pdo_fieldexists('tiger_newhu_xcxmobanmsg','mbid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxmobanmsg')." ADD   `mbid` varchar(250) DEFAULT NULL COMMENT '模版ID'");}
if(!pdo_fieldexists('tiger_newhu_xcxmobanmsg','first')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxmobanmsg')." ADD   `first` varchar(250) DEFAULT NULL COMMENT '头部内容'");}
if(!pdo_fieldexists('tiger_newhu_xcxmobanmsg','firstcolor')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxmobanmsg')." ADD   `firstcolor` varchar(100) DEFAULT NULL COMMENT '头部颜色'");}
if(!pdo_fieldexists('tiger_newhu_xcxmobanmsg','zjvalue')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxmobanmsg')." ADD   `zjvalue` text COMMENT '中间内容'");}
if(!pdo_fieldexists('tiger_newhu_xcxmobanmsg','zjcolor')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxmobanmsg')." ADD   `zjcolor` text COMMENT '中间颜色'");}
if(!pdo_fieldexists('tiger_newhu_xcxmobanmsg','remark')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxmobanmsg')." ADD   `remark` varchar(250) DEFAULT NULL COMMENT '尾部内容'");}
if(!pdo_fieldexists('tiger_newhu_xcxmobanmsg','remarkcolor')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxmobanmsg')." ADD   `remarkcolor` varchar(100) DEFAULT NULL COMMENT '尾部颜色'");}
if(!pdo_fieldexists('tiger_newhu_xcxmobanmsg','turl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxmobanmsg')." ADD   `turl` varchar(250) DEFAULT NULL COMMENT '模版链接'");}
if(!pdo_fieldexists('tiger_newhu_xcxmobanmsg','emphasis_keyword')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxmobanmsg')." ADD   `emphasis_keyword` varchar(100) DEFAULT NULL COMMENT '哪个放大'");}
if(!pdo_fieldexists('tiger_newhu_xcxmobanmsg','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxmobanmsg')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_xcxmobanmsg','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxmobanmsg')." ADD   PRIMARY KEY (`id`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_xcxsend` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `kfkey` varchar(100) DEFAULT NULL COMMENT '关键词',
  `type` int(10) DEFAULT '0' COMMENT '类型 1 H5链接',
  `title` varchar(100) DEFAULT NULL COMMENT '标题',
  `content` varchar(1000) DEFAULT '0' COMMENT '介绍',
  `url` varchar(1000) DEFAULT '0' COMMENT 'H5链接',
  `picurl` varchar(1000) DEFAULT '0',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kfkey` (`kfkey`),
  KEY `weid` (`weid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_xcxsend','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxsend')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_xcxsend','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxsend')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_xcxsend','kfkey')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxsend')." ADD   `kfkey` varchar(100) DEFAULT NULL COMMENT '关键词'");}
if(!pdo_fieldexists('tiger_newhu_xcxsend','type')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxsend')." ADD   `type` int(10) DEFAULT '0' COMMENT '类型 1 H5链接'");}
if(!pdo_fieldexists('tiger_newhu_xcxsend','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxsend')." ADD   `title` varchar(100) DEFAULT NULL COMMENT '标题'");}
if(!pdo_fieldexists('tiger_newhu_xcxsend','content')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxsend')." ADD   `content` varchar(1000) DEFAULT '0' COMMENT '介绍'");}
if(!pdo_fieldexists('tiger_newhu_xcxsend','url')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxsend')." ADD   `url` varchar(1000) DEFAULT '0' COMMENT 'H5链接'");}
if(!pdo_fieldexists('tiger_newhu_xcxsend','picurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxsend')." ADD   `picurl` varchar(1000) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_xcxsend','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxsend')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_xcxsend','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxsend')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_xcxsend','kfkey')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_xcxsend')." ADD   KEY `kfkey` (`kfkey`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_newhu_zttype` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `px` int(10) NOT NULL DEFAULT '0',
  `title` varchar(50) NOT NULL,
  `fftype` int(3) NOT NULL DEFAULT '0' COMMENT '分类',
  `picurl` varchar(255) NOT NULL COMMENT '封面',
  `wlurl` varchar(255) NOT NULL COMMENT '外链',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `fftype` (`fftype`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_newhu_zttype','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_zttype')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_newhu_zttype','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_zttype')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_zttype','px')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_zttype')." ADD   `px` int(10) NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_newhu_zttype','title')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_zttype')." ADD   `title` varchar(50) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_zttype','fftype')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_zttype')." ADD   `fftype` int(3) NOT NULL DEFAULT '0' COMMENT '分类'");}
if(!pdo_fieldexists('tiger_newhu_zttype','picurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_zttype')." ADD   `picurl` varchar(255) NOT NULL COMMENT '封面'");}
if(!pdo_fieldexists('tiger_newhu_zttype','wlurl')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_zttype')." ADD   `wlurl` varchar(255) NOT NULL COMMENT '外链'");}
if(!pdo_fieldexists('tiger_newhu_zttype','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_zttype')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_newhu_zttype','id')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_zttype')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_newhu_zttype','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_newhu_zttype')." ADD   KEY `weid` (`weid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_tkxcx_hb` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `type` varchar(250) DEFAULT '0',
  `title` varchar(250) DEFAULT '0',
  `pic` varchar(250) DEFAULT '0',
  `url` varchar(1000) DEFAULT '0',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_tkxcx_hb','id')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_hb')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_tkxcx_hb','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_hb')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_tkxcx_hb','type')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_hb')." ADD   `type` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_tkxcx_hb','title')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_hb')." ADD   `title` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_tkxcx_hb','pic')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_hb')." ADD   `pic` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_tkxcx_hb','url')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_hb')." ADD   `url` varchar(1000) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_tkxcx_hb','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_hb')." ADD   `createtime` int(10) NOT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_tkxcx_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `gzwid` int(11) DEFAULT '0' COMMENT '对接公众号ID',
  `shtype` int(11) DEFAULT '0' COMMENT '审核模式  1审核模式',
  `dlxsyj` int(5) NOT NULL COMMENT '代理显示佣金  1显示',
  `tzurl` varchar(1000) NOT NULL COMMENT '跳转域名',
  `xsversion` varchar(50) NOT NULL COMMENT '线上运行版本',
  `shversion` varchar(50) NOT NULL COMMENT '提交审核版本',
  `sharetitle` varchar(500) NOT NULL COMMENT '小程序标题',
  `shareimg` varchar(500) NOT NULL COMMENT '列表分享图标',
  `tbuid` varchar(100) NOT NULL COMMENT '淘宝ID',
  `titlecolor` varchar(100) NOT NULL,
  `bjcolor` varchar(100) NOT NULL,
  `cjsimg` varchar(500) NOT NULL,
  `cjsbjcolor` varchar(100) NOT NULL,
  `cjsfontcolor` varchar(100) NOT NULL,
  `cjsjcimg` varchar(500) NOT NULL,
  `weburl` varchar(500) NOT NULL,
  `fxtype` varchar(10) NOT NULL,
  `dlkgtype` varchar(10) NOT NULL,
  `hybjimg` varchar(500) NOT NULL,
  `viewhelpid` varchar(500) NOT NULL,
  `ggtype` varchar(10) NOT NULL,
  `mstype` varchar(10) NOT NULL,
  `tlad` varchar(500) NOT NULL,
  `tladurl` varchar(500) NOT NULL,
  `flmsg` varchar(500) NOT NULL,
  `stimg` varchar(500) NOT NULL,
  `bottomtype` int(11) DEFAULT '0',
  `qiandaomsg` varchar(500) DEFAULT '',
  `tztype` varchar(10) DEFAULT '',
  `tzimg` varchar(500) DEFAULT '',
  `tzcurl` varchar(500) DEFAULT '',
  `tztitle` varchar(500) DEFAULT '',
  `hometkltype` varchar(10) DEFAULT '',
  `kltype` varchar(10) DEFAULT '0',
  `zctype` varchar(10) DEFAULT '0' COMMENT '0正常 1 计算器 2相册',
  `zdyurl` varchar(500) DEFAULT '' COMMENT '小程序自定义域名',
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_tkxcx_set','id')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_tkxcx_set','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_tkxcx_set','gzwid')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `gzwid` int(11) DEFAULT '0' COMMENT '对接公众号ID'");}
if(!pdo_fieldexists('tiger_tkxcx_set','shtype')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `shtype` int(11) DEFAULT '0' COMMENT '审核模式  1审核模式'");}
if(!pdo_fieldexists('tiger_tkxcx_set','dlxsyj')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `dlxsyj` int(5) NOT NULL COMMENT '代理显示佣金  1显示'");}
if(!pdo_fieldexists('tiger_tkxcx_set','tzurl')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `tzurl` varchar(1000) NOT NULL COMMENT '跳转域名'");}
if(!pdo_fieldexists('tiger_tkxcx_set','xsversion')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `xsversion` varchar(50) NOT NULL COMMENT '线上运行版本'");}
if(!pdo_fieldexists('tiger_tkxcx_set','shversion')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `shversion` varchar(50) NOT NULL COMMENT '提交审核版本'");}
if(!pdo_fieldexists('tiger_tkxcx_set','sharetitle')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `sharetitle` varchar(500) NOT NULL COMMENT '小程序标题'");}
if(!pdo_fieldexists('tiger_tkxcx_set','shareimg')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `shareimg` varchar(500) NOT NULL COMMENT '列表分享图标'");}
if(!pdo_fieldexists('tiger_tkxcx_set','tbuid')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `tbuid` varchar(100) NOT NULL COMMENT '淘宝ID'");}
if(!pdo_fieldexists('tiger_tkxcx_set','titlecolor')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `titlecolor` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_tkxcx_set','bjcolor')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `bjcolor` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_tkxcx_set','cjsimg')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `cjsimg` varchar(500) NOT NULL");}
if(!pdo_fieldexists('tiger_tkxcx_set','cjsbjcolor')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `cjsbjcolor` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_tkxcx_set','cjsfontcolor')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `cjsfontcolor` varchar(100) NOT NULL");}
if(!pdo_fieldexists('tiger_tkxcx_set','cjsjcimg')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `cjsjcimg` varchar(500) NOT NULL");}
if(!pdo_fieldexists('tiger_tkxcx_set','weburl')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `weburl` varchar(500) NOT NULL");}
if(!pdo_fieldexists('tiger_tkxcx_set','fxtype')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `fxtype` varchar(10) NOT NULL");}
if(!pdo_fieldexists('tiger_tkxcx_set','dlkgtype')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `dlkgtype` varchar(10) NOT NULL");}
if(!pdo_fieldexists('tiger_tkxcx_set','hybjimg')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `hybjimg` varchar(500) NOT NULL");}
if(!pdo_fieldexists('tiger_tkxcx_set','viewhelpid')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `viewhelpid` varchar(500) NOT NULL");}
if(!pdo_fieldexists('tiger_tkxcx_set','ggtype')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `ggtype` varchar(10) NOT NULL");}
if(!pdo_fieldexists('tiger_tkxcx_set','mstype')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `mstype` varchar(10) NOT NULL");}
if(!pdo_fieldexists('tiger_tkxcx_set','tlad')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `tlad` varchar(500) NOT NULL");}
if(!pdo_fieldexists('tiger_tkxcx_set','tladurl')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `tladurl` varchar(500) NOT NULL");}
if(!pdo_fieldexists('tiger_tkxcx_set','flmsg')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `flmsg` varchar(500) NOT NULL");}
if(!pdo_fieldexists('tiger_tkxcx_set','stimg')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `stimg` varchar(500) NOT NULL");}
if(!pdo_fieldexists('tiger_tkxcx_set','bottomtype')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `bottomtype` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_tkxcx_set','qiandaomsg')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `qiandaomsg` varchar(500) DEFAULT ''");}
if(!pdo_fieldexists('tiger_tkxcx_set','tztype')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `tztype` varchar(10) DEFAULT ''");}
if(!pdo_fieldexists('tiger_tkxcx_set','tzimg')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `tzimg` varchar(500) DEFAULT ''");}
if(!pdo_fieldexists('tiger_tkxcx_set','tzcurl')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `tzcurl` varchar(500) DEFAULT ''");}
if(!pdo_fieldexists('tiger_tkxcx_set','tztitle')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `tztitle` varchar(500) DEFAULT ''");}
if(!pdo_fieldexists('tiger_tkxcx_set','hometkltype')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `hometkltype` varchar(10) DEFAULT ''");}
if(!pdo_fieldexists('tiger_tkxcx_set','kltype')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `kltype` varchar(10) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_tkxcx_set','zctype')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `zctype` varchar(10) DEFAULT '0' COMMENT '0正常 1 计算器 2相册'");}
if(!pdo_fieldexists('tiger_tkxcx_set','zdyurl')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   `zdyurl` varchar(500) DEFAULT '' COMMENT '小程序自定义域名'");}
if(!pdo_fieldexists('tiger_tkxcx_set','id')) {pdo_query("ALTER TABLE ".tablename('tiger_tkxcx_set')." ADD   PRIMARY KEY (`id`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_wxdaili_ad` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `type` int(11) DEFAULT '0',
  `title` varchar(250) DEFAULT '0',
  `pic` varchar(250) DEFAULT '0',
  `url` varchar(250) DEFAULT '0',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_wxdaili_ad','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_ad')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_wxdaili_ad','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_ad')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_ad','type')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_ad')." ADD   `type` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_ad','title')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_ad')." ADD   `title` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_ad','pic')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_ad')." ADD   `pic` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_ad','url')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_ad')." ADD   `url` varchar(250) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_ad','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_ad')." ADD   `createtime` int(10) NOT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_wxdaili_dailidjset` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `title` varchar(100) DEFAULT NULL COMMENT '代理名称',
  `px` int(3) DEFAULT '0' COMMENT '排序 等级权限',
  `fssum` int(10) DEFAULT '0' COMMENT '满多少粉丝升级',
  `dlbl1` int(11) DEFAULT NULL COMMENT '一级-自己产生佣金比率',
  `dlbl1t2` int(11) DEFAULT NULL COMMENT '一级-提取二级佣金比率',
  `dlbl1t3` int(11) DEFAULT NULL COMMENT '一级-提取三级佣金比率',
  `dlbl2` int(11) DEFAULT NULL COMMENT '二级-自己产生佣金比率',
  `dlbl2t3` int(11) DEFAULT NULL COMMENT '二级-提取三级佣金比率',
  `dlbl3` int(11) DEFAULT NULL COMMENT '三级-自己产生佣金比率',
  `sm` text COMMENT '权益说明',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idx_weid` (`weid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_wxdaili_dailidjset','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dailidjset')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_wxdaili_dailidjset','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dailidjset')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_dailidjset','title')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dailidjset')." ADD   `title` varchar(100) DEFAULT NULL COMMENT '代理名称'");}
if(!pdo_fieldexists('tiger_wxdaili_dailidjset','px')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dailidjset')." ADD   `px` int(3) DEFAULT '0' COMMENT '排序 等级权限'");}
if(!pdo_fieldexists('tiger_wxdaili_dailidjset','fssum')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dailidjset')." ADD   `fssum` int(10) DEFAULT '0' COMMENT '满多少粉丝升级'");}
if(!pdo_fieldexists('tiger_wxdaili_dailidjset','dlbl1')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dailidjset')." ADD   `dlbl1` int(11) DEFAULT NULL COMMENT '一级-自己产生佣金比率'");}
if(!pdo_fieldexists('tiger_wxdaili_dailidjset','dlbl1t2')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dailidjset')." ADD   `dlbl1t2` int(11) DEFAULT NULL COMMENT '一级-提取二级佣金比率'");}
if(!pdo_fieldexists('tiger_wxdaili_dailidjset','dlbl1t3')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dailidjset')." ADD   `dlbl1t3` int(11) DEFAULT NULL COMMENT '一级-提取三级佣金比率'");}
if(!pdo_fieldexists('tiger_wxdaili_dailidjset','dlbl2')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dailidjset')." ADD   `dlbl2` int(11) DEFAULT NULL COMMENT '二级-自己产生佣金比率'");}
if(!pdo_fieldexists('tiger_wxdaili_dailidjset','dlbl2t3')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dailidjset')." ADD   `dlbl2t3` int(11) DEFAULT NULL COMMENT '二级-提取三级佣金比率'");}
if(!pdo_fieldexists('tiger_wxdaili_dailidjset','dlbl3')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dailidjset')." ADD   `dlbl3` int(11) DEFAULT NULL COMMENT '三级-自己产生佣金比率'");}
if(!pdo_fieldexists('tiger_wxdaili_dailidjset','sm')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dailidjset')." ADD   `sm` text COMMENT '权益说明'");}
if(!pdo_fieldexists('tiger_wxdaili_dailidjset','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dailidjset')." ADD   `createtime` int(10) NOT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_dailidjset','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dailidjset')." ADD   PRIMARY KEY (`id`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_wxdaili_dlshuju` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `uid` int(11) DEFAULT '0' COMMENT '用户ID',
  `tb1` int(11) DEFAULT '0' COMMENT '本人-今天已付款订单数',
  `tb2` decimal(10,2) DEFAULT '0.00' COMMENT '本人-今天已付款佣预估金数',
  `tb3` int(11) DEFAULT '0' COMMENT '本人-昨天已付款订单',
  `tb4` decimal(10,2) DEFAULT '0.00' COMMENT '本人-昨天已付款预估佣金数',
  `tb5` int(11) DEFAULT '0' COMMENT '本人-本月已付款订单数',
  `tb6` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已付款预估佣金数',
  `tb7` int(11) DEFAULT '0' COMMENT '本人-上月已结算订单数',
  `tb8` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已结算预估佣金数',
  `tb9` int(11) DEFAULT '0' COMMENT '本人-上月已付款订单数',
  `tb10` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已付款预估佣金数',
  `tb11` int(11) DEFAULT '0' COMMENT '二级-今天已付款订单数',
  `tb12` decimal(10,2) DEFAULT '0.00' COMMENT '本人-今天已付款佣预估金数',
  `tb13` int(11) DEFAULT '0' COMMENT '二级-昨天已付款订单',
  `tb14` decimal(10,2) DEFAULT '0.00' COMMENT '本人-昨天已付款预估佣金数',
  `tb15` int(11) DEFAULT '0' COMMENT '二级-本月已付款订单数',
  `tb16` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已付款预估佣金数',
  `tb17` int(11) DEFAULT '0' COMMENT '二级-上月已结算订单数',
  `tb18` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已结算预估佣金数',
  `tb19` int(11) DEFAULT '0' COMMENT '二级-上月已付款订单数',
  `tb20` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已付款预估佣金数',
  `tb21` int(11) DEFAULT '0' COMMENT '三级-今天已付款订单数',
  `tb22` decimal(10,2) DEFAULT '0.00' COMMENT '本人-今天已付款佣预估金数',
  `tb23` int(11) DEFAULT '0' COMMENT '三级-昨天已付款订单',
  `tb24` decimal(10,2) DEFAULT '0.00' COMMENT '本人-昨天已付款预估佣金数',
  `tb25` int(11) DEFAULT '0' COMMENT '三级-本月已付款订单数',
  `tb26` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已付款预估佣金数',
  `tb27` int(11) DEFAULT '0' COMMENT '三级-上月已结算订单数',
  `tb28` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已结算预估佣金数',
  `tb29` int(11) DEFAULT '0' COMMENT '三级-上月已付款订单数',
  `tb30` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已付款预估佣金数',
  `pdd1` int(11) DEFAULT '0' COMMENT '本人-今天已付款订单数',
  `pdd2` decimal(10,2) DEFAULT '0.00' COMMENT '本人-今天已付款佣预估金数',
  `pdd3` int(11) DEFAULT '0' COMMENT '本人-昨天已付款订单',
  `pdd4` decimal(10,2) DEFAULT '0.00' COMMENT '本人-昨天已付款预估佣金数',
  `pdd5` int(11) DEFAULT '0' COMMENT '本人-本月已付款订单数',
  `pdd6` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已付款预估佣金数',
  `pdd7` int(11) DEFAULT '0' COMMENT '本人-上月已结算订单数',
  `pdd8` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已结算预估佣金数',
  `pdd9` int(11) DEFAULT '0' COMMENT '本人-上月已付款订单数',
  `pdd10` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已付款预估佣金数',
  `pdd11` int(11) DEFAULT '0' COMMENT '二级-今天已付款订单数',
  `pdd12` decimal(10,2) DEFAULT '0.00' COMMENT '本人-今天已付款佣预估金数',
  `pdd13` int(11) DEFAULT '0' COMMENT '二级-昨天已付款订单',
  `pdd14` decimal(10,2) DEFAULT '0.00' COMMENT '本人-昨天已付款预估佣金数',
  `pdd15` int(11) DEFAULT '0' COMMENT '二级-本月已付款订单数',
  `pdd16` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已付款预估佣金数',
  `pdd17` int(11) DEFAULT '0' COMMENT '二级-上月已结算订单数',
  `pdd18` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已结算预估佣金数',
  `pdd19` int(11) DEFAULT '0' COMMENT '二级-上月已付款订单数',
  `pdd20` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已付款预估佣金数',
  `pdd21` int(11) DEFAULT '0' COMMENT '三级-今天已付款订单数',
  `pdd22` decimal(10,2) DEFAULT '0.00' COMMENT '本人-今天已付款佣预估金数',
  `pdd23` int(11) DEFAULT '0' COMMENT '三级-昨天已付款订单',
  `pdd24` decimal(10,2) DEFAULT '0.00' COMMENT '本人-昨天已付款预估佣金数',
  `pdd25` int(11) DEFAULT '0' COMMENT '三级-本月已付款订单数',
  `pdd26` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已付款预估佣金数',
  `pdd27` int(11) DEFAULT '0' COMMENT '三级-上月已结算订单数',
  `pdd28` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已结算预估佣金数',
  `pdd29` int(11) DEFAULT '0' COMMENT '三级-上月已付款订单数',
  `pdd30` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已付款预估佣金数',
  `jd1` int(11) DEFAULT '0' COMMENT '本人-今天已付款订单数',
  `jd2` decimal(10,2) DEFAULT '0.00' COMMENT '本人-今天已付款佣预估金数',
  `jd3` int(11) DEFAULT '0' COMMENT '本人-昨天已付款订单',
  `jd4` decimal(10,2) DEFAULT '0.00' COMMENT '本人-昨天已付款预估佣金数',
  `jd5` int(11) DEFAULT '0' COMMENT '本人-本月已付款订单数',
  `jd6` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已付款预估佣金数',
  `jd7` int(11) DEFAULT '0' COMMENT '本人-上月已结算订单数',
  `jd8` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已结算预估佣金数',
  `jd9` int(11) DEFAULT '0' COMMENT '本人-上月已付款订单数',
  `jd10` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已付款预估佣金数',
  `jd11` int(11) DEFAULT '0' COMMENT '二级-今天已付款订单数',
  `jd12` decimal(10,2) DEFAULT '0.00' COMMENT '本人-今天已付款佣预估金数',
  `jd13` int(11) DEFAULT '0' COMMENT '二级-昨天已付款订单',
  `jd14` decimal(10,2) DEFAULT '0.00' COMMENT '本人-昨天已付款预估佣金数',
  `jd15` int(11) DEFAULT '0' COMMENT '二级-本月已付款订单数',
  `jd16` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已付款预估佣金数',
  `jd17` int(11) DEFAULT '0' COMMENT '二级-上月已结算订单数',
  `jd18` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已结算预估佣金数',
  `jd19` int(11) DEFAULT '0' COMMENT '二级-上月已付款订单数',
  `jd20` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已付款预估佣金数',
  `jd21` int(11) DEFAULT '0' COMMENT '三级-今天已付款订单数',
  `jd22` decimal(10,2) DEFAULT '0.00' COMMENT '本人-今天已付款佣预估金数',
  `jd23` int(11) DEFAULT '0' COMMENT '三级-昨天已付款订单',
  `jd24` decimal(10,2) DEFAULT '0.00' COMMENT '本人-昨天已付款预估佣金数',
  `jd25` int(11) DEFAULT '0' COMMENT '三级-本月已付款订单数',
  `jd26` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已付款预估佣金数',
  `jd27` int(11) DEFAULT '0' COMMENT '三级-上月已结算订单数',
  `jd28` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已结算预估佣金数',
  `jd29` int(11) DEFAULT '0' COMMENT '三级-上月已付款订单数',
  `jd30` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已付款预估佣金数',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `tb31` int(10) DEFAULT '0' COMMENT '本人-本月已结算订单数',
  `tb32` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已结算预估佣金数',
  `tb33` int(10) DEFAULT '0' COMMENT '二级-本月已结算订单数',
  `tb34` decimal(10,2) DEFAULT '0.00' COMMENT '二级-本月已结算预估佣金数',
  `tb35` int(10) DEFAULT '0' COMMENT '三级-本月已结算订单数',
  `tb36` decimal(10,2) DEFAULT '0.00' COMMENT '三级-本月已结算预估佣金数',
  `pdd31` int(10) DEFAULT '0' COMMENT '本人-本月已结算订单数',
  `pdd32` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已结算预估佣金数',
  `pdd33` int(10) DEFAULT '0' COMMENT '三级级-本月已结算订单数',
  `pdd34` decimal(10,2) DEFAULT '0.00' COMMENT '三级级-本月已结算预估佣金数',
  `pdd35` int(10) DEFAULT '0' COMMENT '三级级-本月已结算订单数',
  `pdd36` decimal(10,2) DEFAULT '0.00' COMMENT '三级级-本月已结算预估佣金数',
  `jd31` int(10) DEFAULT '0' COMMENT '本人-本月已结算订单数',
  `jd32` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已结算预估佣金数',
  `jd33` int(10) DEFAULT '0' COMMENT '三级级-本月已结算订单数',
  `jd34` decimal(10,2) DEFAULT '0.00' COMMENT '三级级-本月已结算预估佣金数',
  `jd35` int(10) DEFAULT '0' COMMENT '三级级-本月已结算订单数',
  `jd36` decimal(10,2) DEFAULT '0.00' COMMENT '三级级-本月已结算预估佣金数',
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_w` (`uid`,`weid`),
  KEY `weid` (`weid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_wxdaili_dlshuju','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `uid` int(11) DEFAULT '0' COMMENT '用户ID'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb1')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb1` int(11) DEFAULT '0' COMMENT '本人-今天已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb2')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb2` decimal(10,2) DEFAULT '0.00' COMMENT '本人-今天已付款佣预估金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb3')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb3` int(11) DEFAULT '0' COMMENT '本人-昨天已付款订单'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb4')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb4` decimal(10,2) DEFAULT '0.00' COMMENT '本人-昨天已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb5')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb5` int(11) DEFAULT '0' COMMENT '本人-本月已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb6')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb6` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb7')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb7` int(11) DEFAULT '0' COMMENT '本人-上月已结算订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb8')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb8` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已结算预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb9')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb9` int(11) DEFAULT '0' COMMENT '本人-上月已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb10')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb10` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb11')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb11` int(11) DEFAULT '0' COMMENT '二级-今天已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb12')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb12` decimal(10,2) DEFAULT '0.00' COMMENT '本人-今天已付款佣预估金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb13')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb13` int(11) DEFAULT '0' COMMENT '二级-昨天已付款订单'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb14')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb14` decimal(10,2) DEFAULT '0.00' COMMENT '本人-昨天已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb15')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb15` int(11) DEFAULT '0' COMMENT '二级-本月已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb16')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb16` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb17')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb17` int(11) DEFAULT '0' COMMENT '二级-上月已结算订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb18')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb18` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已结算预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb19')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb19` int(11) DEFAULT '0' COMMENT '二级-上月已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb20')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb20` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb21')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb21` int(11) DEFAULT '0' COMMENT '三级-今天已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb22')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb22` decimal(10,2) DEFAULT '0.00' COMMENT '本人-今天已付款佣预估金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb23')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb23` int(11) DEFAULT '0' COMMENT '三级-昨天已付款订单'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb24')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb24` decimal(10,2) DEFAULT '0.00' COMMENT '本人-昨天已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb25')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb25` int(11) DEFAULT '0' COMMENT '三级-本月已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb26')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb26` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb27')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb27` int(11) DEFAULT '0' COMMENT '三级-上月已结算订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb28')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb28` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已结算预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb29')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb29` int(11) DEFAULT '0' COMMENT '三级-上月已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb30')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb30` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd1')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd1` int(11) DEFAULT '0' COMMENT '本人-今天已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd2')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd2` decimal(10,2) DEFAULT '0.00' COMMENT '本人-今天已付款佣预估金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd3')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd3` int(11) DEFAULT '0' COMMENT '本人-昨天已付款订单'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd4')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd4` decimal(10,2) DEFAULT '0.00' COMMENT '本人-昨天已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd5')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd5` int(11) DEFAULT '0' COMMENT '本人-本月已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd6')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd6` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd7')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd7` int(11) DEFAULT '0' COMMENT '本人-上月已结算订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd8')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd8` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已结算预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd9')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd9` int(11) DEFAULT '0' COMMENT '本人-上月已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd10')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd10` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd11')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd11` int(11) DEFAULT '0' COMMENT '二级-今天已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd12')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd12` decimal(10,2) DEFAULT '0.00' COMMENT '本人-今天已付款佣预估金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd13')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd13` int(11) DEFAULT '0' COMMENT '二级-昨天已付款订单'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd14')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd14` decimal(10,2) DEFAULT '0.00' COMMENT '本人-昨天已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd15')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd15` int(11) DEFAULT '0' COMMENT '二级-本月已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd16')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd16` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd17')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd17` int(11) DEFAULT '0' COMMENT '二级-上月已结算订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd18')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd18` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已结算预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd19')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd19` int(11) DEFAULT '0' COMMENT '二级-上月已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd20')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd20` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd21')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd21` int(11) DEFAULT '0' COMMENT '三级-今天已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd22')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd22` decimal(10,2) DEFAULT '0.00' COMMENT '本人-今天已付款佣预估金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd23')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd23` int(11) DEFAULT '0' COMMENT '三级-昨天已付款订单'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd24')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd24` decimal(10,2) DEFAULT '0.00' COMMENT '本人-昨天已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd25')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd25` int(11) DEFAULT '0' COMMENT '三级-本月已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd26')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd26` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd27')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd27` int(11) DEFAULT '0' COMMENT '三级-上月已结算订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd28')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd28` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已结算预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd29')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd29` int(11) DEFAULT '0' COMMENT '三级-上月已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd30')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd30` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd1')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd1` int(11) DEFAULT '0' COMMENT '本人-今天已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd2')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd2` decimal(10,2) DEFAULT '0.00' COMMENT '本人-今天已付款佣预估金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd3')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd3` int(11) DEFAULT '0' COMMENT '本人-昨天已付款订单'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd4')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd4` decimal(10,2) DEFAULT '0.00' COMMENT '本人-昨天已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd5')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd5` int(11) DEFAULT '0' COMMENT '本人-本月已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd6')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd6` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd7')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd7` int(11) DEFAULT '0' COMMENT '本人-上月已结算订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd8')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd8` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已结算预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd9')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd9` int(11) DEFAULT '0' COMMENT '本人-上月已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd10')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd10` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd11')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd11` int(11) DEFAULT '0' COMMENT '二级-今天已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd12')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd12` decimal(10,2) DEFAULT '0.00' COMMENT '本人-今天已付款佣预估金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd13')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd13` int(11) DEFAULT '0' COMMENT '二级-昨天已付款订单'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd14')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd14` decimal(10,2) DEFAULT '0.00' COMMENT '本人-昨天已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd15')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd15` int(11) DEFAULT '0' COMMENT '二级-本月已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd16')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd16` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd17')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd17` int(11) DEFAULT '0' COMMENT '二级-上月已结算订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd18')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd18` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已结算预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd19')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd19` int(11) DEFAULT '0' COMMENT '二级-上月已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd20')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd20` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd21')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd21` int(11) DEFAULT '0' COMMENT '三级-今天已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd22')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd22` decimal(10,2) DEFAULT '0.00' COMMENT '本人-今天已付款佣预估金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd23')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd23` int(11) DEFAULT '0' COMMENT '三级-昨天已付款订单'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd24')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd24` decimal(10,2) DEFAULT '0.00' COMMENT '本人-昨天已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd25')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd25` int(11) DEFAULT '0' COMMENT '三级-本月已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd26')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd26` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd27')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd27` int(11) DEFAULT '0' COMMENT '三级-上月已结算订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd28')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd28` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已结算预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd29')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd29` int(11) DEFAULT '0' COMMENT '三级-上月已付款订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd30')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd30` decimal(10,2) DEFAULT '0.00' COMMENT '本人-上月已付款预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb31')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb31` int(10) DEFAULT '0' COMMENT '本人-本月已结算订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb32')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb32` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已结算预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb33')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb33` int(10) DEFAULT '0' COMMENT '二级-本月已结算订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb34')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb34` decimal(10,2) DEFAULT '0.00' COMMENT '二级-本月已结算预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb35')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb35` int(10) DEFAULT '0' COMMENT '三级-本月已结算订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','tb36')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `tb36` decimal(10,2) DEFAULT '0.00' COMMENT '三级-本月已结算预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd31')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd31` int(10) DEFAULT '0' COMMENT '本人-本月已结算订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd32')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd32` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已结算预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd33')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd33` int(10) DEFAULT '0' COMMENT '三级级-本月已结算订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd34')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd34` decimal(10,2) DEFAULT '0.00' COMMENT '三级级-本月已结算预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd35')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd35` int(10) DEFAULT '0' COMMENT '三级级-本月已结算订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','pdd36')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `pdd36` decimal(10,2) DEFAULT '0.00' COMMENT '三级级-本月已结算预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd31')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd31` int(10) DEFAULT '0' COMMENT '本人-本月已结算订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd32')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd32` decimal(10,2) DEFAULT '0.00' COMMENT '本人-本月已结算预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd33')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd33` int(10) DEFAULT '0' COMMENT '三级级-本月已结算订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd34')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd34` decimal(10,2) DEFAULT '0.00' COMMENT '三级级-本月已结算预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd35')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd35` int(10) DEFAULT '0' COMMENT '三级级-本月已结算订单数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','jd36')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   `jd36` decimal(10,2) DEFAULT '0.00' COMMENT '三级级-本月已结算预估佣金数'");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','u_w')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   UNIQUE KEY `u_w` (`uid`,`weid`)");}
if(!pdo_fieldexists('tiger_wxdaili_dlshuju','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_dlshuju')." ADD   KEY `weid` (`weid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_wxdaili_jdpid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `px` int(11) DEFAULT '0',
  `type` int(1) DEFAULT '0' COMMENT '状态1 已分配 ',
  `nickname` varchar(200) DEFAULT NULL COMMENT '分配昵称',
  `uid` varchar(50) DEFAULT NULL COMMENT '分配会员ID',
  `pid` varchar(250) DEFAULT NULL COMMENT '淘客PID',
  `tgwname` varchar(100) DEFAULT NULL COMMENT '推广位名称',
  `fptime` varchar(50) DEFAULT NULL COMMENT '分配时间',
  `createtime` varchar(50) DEFAULT NULL COMMENT '生成时间',
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `pid` (`pid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_wxdaili_jdpid','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_jdpid')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_wxdaili_jdpid','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_jdpid')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_jdpid','px')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_jdpid')." ADD   `px` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_jdpid','type')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_jdpid')." ADD   `type` int(1) DEFAULT '0' COMMENT '状态1 已分配 '");}
if(!pdo_fieldexists('tiger_wxdaili_jdpid','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_jdpid')." ADD   `nickname` varchar(200) DEFAULT NULL COMMENT '分配昵称'");}
if(!pdo_fieldexists('tiger_wxdaili_jdpid','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_jdpid')." ADD   `uid` varchar(50) DEFAULT NULL COMMENT '分配会员ID'");}
if(!pdo_fieldexists('tiger_wxdaili_jdpid','pid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_jdpid')." ADD   `pid` varchar(250) DEFAULT NULL COMMENT '淘客PID'");}
if(!pdo_fieldexists('tiger_wxdaili_jdpid','tgwname')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_jdpid')." ADD   `tgwname` varchar(100) DEFAULT NULL COMMENT '推广位名称'");}
if(!pdo_fieldexists('tiger_wxdaili_jdpid','fptime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_jdpid')." ADD   `fptime` varchar(50) DEFAULT NULL COMMENT '分配时间'");}
if(!pdo_fieldexists('tiger_wxdaili_jdpid','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_jdpid')." ADD   `createtime` varchar(50) DEFAULT NULL COMMENT '生成时间'");}
if(!pdo_fieldexists('tiger_wxdaili_jdpid','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_jdpid')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_wxdaili_jdpid','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_jdpid')." ADD   KEY `weid` (`weid`)");}
if(!pdo_fieldexists('tiger_wxdaili_jdpid','pid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_jdpid')." ADD   KEY `pid` (`pid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_wxdaili_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(10) unsigned NOT NULL,
  `ddtype` int(2) DEFAULT '0' COMMENT '订单类型，代理订单0',
  `ffqdtype` int(2) DEFAULT '0' COMMENT '代理支付渠道',
  `memberid` int(11) unsigned DEFAULT NULL COMMENT 'member用户ID',
  `usernames` varchar(50) DEFAULT NULL,
  `nickname` varchar(100) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `tel` varchar(200) DEFAULT NULL,
  `openid` varchar(50) DEFAULT NULL COMMENT '自有OPENID',
  `city` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `province` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `goods_id` int(10) unsigned DEFAULT NULL,
  `orderno` varchar(50) DEFAULT NULL COMMENT '订单号',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0',
  `price` decimal(10,4) DEFAULT '0.0000',
  `level1` decimal(10,4) DEFAULT '0.0000',
  `level2` decimal(10,4) DEFAULT '0.0000',
  `level3` decimal(10,4) DEFAULT '0.0000',
  `state` int(2) DEFAULT '0' COMMENT '状态',
  `paytime` int(10) unsigned DEFAULT '0',
  `txtime` int(10) unsigned DEFAULT '0' COMMENT '提现时间',
  `paystate` int(2) DEFAULT '0' COMMENT '支付状态 0 已支付1',
  `txtype` int(2) DEFAULT '0' COMMENT '未提现 0 已提现1 审核中2',
  `msg` varchar(200) DEFAULT NULL COMMENT '如：小虎的会员费奖励',
  `cengji` int(2) unsigned DEFAULT NULL COMMENT '层级 自购 0  一级 1 二级2 三级3',
  `kuaidi` varchar(200) DEFAULT NULL,
  `tzday` int(10) DEFAULT '0' COMMENT '团长支付天数',
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `openid` (`openid`),
  KEY `orderno` (`orderno`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_wxdaili_order','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_wxdaili_order','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `weid` int(10) unsigned NOT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_order','ddtype')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `ddtype` int(2) DEFAULT '0' COMMENT '订单类型，代理订单0'");}
if(!pdo_fieldexists('tiger_wxdaili_order','ffqdtype')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `ffqdtype` int(2) DEFAULT '0' COMMENT '代理支付渠道'");}
if(!pdo_fieldexists('tiger_wxdaili_order','memberid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `memberid` int(11) unsigned DEFAULT NULL COMMENT 'member用户ID'");}
if(!pdo_fieldexists('tiger_wxdaili_order','usernames')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `usernames` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_order','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `nickname` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_order','avatar')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `avatar` varchar(255) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_order','tel')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `tel` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_order','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `openid` varchar(50) DEFAULT NULL COMMENT '自有OPENID'");}
if(!pdo_fieldexists('tiger_wxdaili_order','city')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `city` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_order','address')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `address` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_order','province')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `province` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_order','country')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `country` varchar(100) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_order','goods_id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `goods_id` int(10) unsigned DEFAULT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_order','orderno')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `orderno` varchar(50) DEFAULT NULL COMMENT '订单号'");}
if(!pdo_fieldexists('tiger_wxdaili_order','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `createtime` int(10) unsigned NOT NULL DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_order','price')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `price` decimal(10,4) DEFAULT '0.0000'");}
if(!pdo_fieldexists('tiger_wxdaili_order','level1')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `level1` decimal(10,4) DEFAULT '0.0000'");}
if(!pdo_fieldexists('tiger_wxdaili_order','level2')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `level2` decimal(10,4) DEFAULT '0.0000'");}
if(!pdo_fieldexists('tiger_wxdaili_order','level3')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `level3` decimal(10,4) DEFAULT '0.0000'");}
if(!pdo_fieldexists('tiger_wxdaili_order','state')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `state` int(2) DEFAULT '0' COMMENT '状态'");}
if(!pdo_fieldexists('tiger_wxdaili_order','paytime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `paytime` int(10) unsigned DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_order','txtime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `txtime` int(10) unsigned DEFAULT '0' COMMENT '提现时间'");}
if(!pdo_fieldexists('tiger_wxdaili_order','paystate')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `paystate` int(2) DEFAULT '0' COMMENT '支付状态 0 已支付1'");}
if(!pdo_fieldexists('tiger_wxdaili_order','txtype')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `txtype` int(2) DEFAULT '0' COMMENT '未提现 0 已提现1 审核中2'");}
if(!pdo_fieldexists('tiger_wxdaili_order','msg')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `msg` varchar(200) DEFAULT NULL COMMENT '如：小虎的会员费奖励'");}
if(!pdo_fieldexists('tiger_wxdaili_order','cengji')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `cengji` int(2) unsigned DEFAULT NULL COMMENT '层级 自购 0  一级 1 二级2 三级3'");}
if(!pdo_fieldexists('tiger_wxdaili_order','kuaidi')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `kuaidi` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_order','tzday')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   `tzday` int(10) DEFAULT '0' COMMENT '团长支付天数'");}
if(!pdo_fieldexists('tiger_wxdaili_order','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_wxdaili_order','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   KEY `weid` (`weid`)");}
if(!pdo_fieldexists('tiger_wxdaili_order','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_order')." ADD   KEY `openid` (`openid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_wxdaili_pddpid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `px` int(11) DEFAULT '0',
  `type` int(1) DEFAULT '0' COMMENT '状态1 已分配 ',
  `nickname` varchar(200) DEFAULT NULL COMMENT '分配昵称',
  `uid` varchar(50) DEFAULT NULL COMMENT '分配会员ID',
  `pid` varchar(250) DEFAULT NULL COMMENT '淘客PID',
  `tgwname` varchar(100) DEFAULT NULL COMMENT '推广位名称',
  `fptime` varchar(50) DEFAULT NULL COMMENT '分配时间',
  `createtime` varchar(50) DEFAULT NULL COMMENT '生成时间',
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `pid` (`pid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_wxdaili_pddpid','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_pddpid')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_wxdaili_pddpid','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_pddpid')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_pddpid','px')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_pddpid')." ADD   `px` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_pddpid','type')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_pddpid')." ADD   `type` int(1) DEFAULT '0' COMMENT '状态1 已分配 '");}
if(!pdo_fieldexists('tiger_wxdaili_pddpid','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_pddpid')." ADD   `nickname` varchar(200) DEFAULT NULL COMMENT '分配昵称'");}
if(!pdo_fieldexists('tiger_wxdaili_pddpid','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_pddpid')." ADD   `uid` varchar(50) DEFAULT NULL COMMENT '分配会员ID'");}
if(!pdo_fieldexists('tiger_wxdaili_pddpid','pid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_pddpid')." ADD   `pid` varchar(250) DEFAULT NULL COMMENT '淘客PID'");}
if(!pdo_fieldexists('tiger_wxdaili_pddpid','tgwname')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_pddpid')." ADD   `tgwname` varchar(100) DEFAULT NULL COMMENT '推广位名称'");}
if(!pdo_fieldexists('tiger_wxdaili_pddpid','fptime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_pddpid')." ADD   `fptime` varchar(50) DEFAULT NULL COMMENT '分配时间'");}
if(!pdo_fieldexists('tiger_wxdaili_pddpid','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_pddpid')." ADD   `createtime` varchar(50) DEFAULT NULL COMMENT '生成时间'");}
if(!pdo_fieldexists('tiger_wxdaili_pddpid','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_pddpid')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_wxdaili_pddpid','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_pddpid')." ADD   KEY `weid` (`weid`)");}
if(!pdo_fieldexists('tiger_wxdaili_pddpid','pid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_pddpid')." ADD   KEY `pid` (`pid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_wxdaili_qun` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `px` int(11) DEFAULT '0',
  `type` int(1) DEFAULT '0' COMMENT '状态1 开始',
  `title` varchar(200) DEFAULT NULL COMMENT '群名称',
  `keyw` varchar(200) DEFAULT NULL COMMENT '关键词',
  `picurl` varchar(250) DEFAULT NULL COMMENT '二维码',
  `xzrs` varchar(200) DEFAULT NULL COMMENT '上线人数',
  `qtype` varchar(200) DEFAULT NULL COMMENT '群类型 1微信群 QQ群2',
  `createtime` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `keyw` (`keyw`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_wxdaili_qun','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qun')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_wxdaili_qun','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qun')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_qun','px')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qun')." ADD   `px` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_qun','type')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qun')." ADD   `type` int(1) DEFAULT '0' COMMENT '状态1 开始'");}
if(!pdo_fieldexists('tiger_wxdaili_qun','title')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qun')." ADD   `title` varchar(200) DEFAULT NULL COMMENT '群名称'");}
if(!pdo_fieldexists('tiger_wxdaili_qun','keyw')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qun')." ADD   `keyw` varchar(200) DEFAULT NULL COMMENT '关键词'");}
if(!pdo_fieldexists('tiger_wxdaili_qun','picurl')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qun')." ADD   `picurl` varchar(250) DEFAULT NULL COMMENT '二维码'");}
if(!pdo_fieldexists('tiger_wxdaili_qun','xzrs')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qun')." ADD   `xzrs` varchar(200) DEFAULT NULL COMMENT '上线人数'");}
if(!pdo_fieldexists('tiger_wxdaili_qun','qtype')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qun')." ADD   `qtype` varchar(200) DEFAULT NULL COMMENT '群类型 1微信群 QQ群2'");}
if(!pdo_fieldexists('tiger_wxdaili_qun','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qun')." ADD   `createtime` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_qun','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qun')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_wxdaili_qun','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qun')." ADD   KEY `weid` (`weid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_wxdaili_qunmember` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `quntitle` varchar(200) DEFAULT '0',
  `qunid` int(11) DEFAULT '0' COMMENT '所属群ID',
  `openid` varchar(50) DEFAULT '0',
  `nickname` varchar(200) DEFAULT NULL COMMENT '群名称',
  `avatar` varchar(200) DEFAULT NULL,
  `province` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `sex` varchar(50) DEFAULT NULL,
  `createtime` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `qunid` (`qunid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_wxdaili_qunmember','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qunmember')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_wxdaili_qunmember','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qunmember')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_qunmember','quntitle')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qunmember')." ADD   `quntitle` varchar(200) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_qunmember','qunid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qunmember')." ADD   `qunid` int(11) DEFAULT '0' COMMENT '所属群ID'");}
if(!pdo_fieldexists('tiger_wxdaili_qunmember','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qunmember')." ADD   `openid` varchar(50) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_qunmember','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qunmember')." ADD   `nickname` varchar(200) DEFAULT NULL COMMENT '群名称'");}
if(!pdo_fieldexists('tiger_wxdaili_qunmember','avatar')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qunmember')." ADD   `avatar` varchar(200) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_qunmember','province')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qunmember')." ADD   `province` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_qunmember','city')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qunmember')." ADD   `city` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_qunmember','sex')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qunmember')." ADD   `sex` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_qunmember','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qunmember')." ADD   `createtime` varchar(50) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_qunmember','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qunmember')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_wxdaili_qunmember','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_qunmember')." ADD   KEY `weid` (`weid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_wxdaili_set` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `dltype` int(11) DEFAULT '3' COMMENT '1 级 2级 3级',
  `dlname1` varchar(100) DEFAULT NULL COMMENT '一级名称',
  `dlname2` varchar(100) DEFAULT NULL COMMENT '二级名称',
  `dlname3` varchar(100) DEFAULT NULL COMMENT '三级名称',
  `dlbl1` int(11) DEFAULT NULL COMMENT '一级-自己产生佣金比率',
  `dlbl1t2` int(11) DEFAULT NULL COMMENT '一级-提取二级佣金比率',
  `dlbl1t3` int(11) DEFAULT NULL COMMENT '一级-提取三级佣金比率',
  `dlbl2` int(11) DEFAULT NULL COMMENT '二级-自己产生佣金比率',
  `dlbl2t3` int(11) DEFAULT NULL COMMENT '二级-提取三级佣金比率',
  `dlbl3` int(11) DEFAULT NULL COMMENT '三级-自己产生佣金比率',
  `dlfftype` int(11) DEFAULT '0' COMMENT '0不开启 1开启',
  `dlffprice` varchar(100) DEFAULT NULL COMMENT '付费金额',
  `fxtype` int(11) DEFAULT '0' COMMENT '0抽成模式 1普通分销',
  `ddtype` int(11) DEFAULT '0' COMMENT '0全显示 1显示一部分',
  `seartype` int(11) DEFAULT '0' COMMENT '超级搜0显示 1不显示',
  `dlzbtype` int(11) DEFAULT '0' COMMENT '直播 1显示',
  `fzname` varchar(100) DEFAULT NULL COMMENT '分站名称',
  `zfmsg0` varchar(1000) DEFAULT NULL COMMENT '支付提醒',
  `zfmsg1` varchar(1000) DEFAULT NULL COMMENT '一级支付提醒',
  `zfmsg2` varchar(1000) DEFAULT NULL COMMENT '二级支付提醒',
  `zfmsg3` varchar(1000) DEFAULT NULL COMMENT '三级支付提醒',
  `level1` varchar(50) DEFAULT NULL COMMENT '代理付费一级奖励',
  `level2` varchar(50) DEFAULT NULL COMMENT '代理付费二级奖励',
  `level3` varchar(50) DEFAULT NULL COMMENT '代理付费三级奖励',
  `glevel1` varchar(50) DEFAULT NULL COMMENT '代理付费固定一级奖励',
  `glevel2` varchar(50) DEFAULT NULL COMMENT '代理付费固定二级奖励',
  `glevel3` varchar(50) DEFAULT NULL COMMENT '代理付费固定三级奖励',
  `dlkcbl` varchar(30) DEFAULT NULL COMMENT '扣除佣金',
  `dlyjfltype` int(3) DEFAULT '0' COMMENT '提交订单是示开启返二级 0 不开启 1开启',
  `dlfxtype` int(11) DEFAULT '0' COMMENT '代理商是否支持提交订单反现 0 支持 1 不支持',
  `tztype` int(11) DEFAULT '0' COMMENT '1开启',
  PRIMARY KEY (`id`),
  KEY `idx_weid` (`weid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_wxdaili_set','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_wxdaili_set','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_set','dltype')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `dltype` int(11) DEFAULT '3' COMMENT '1 级 2级 3级'");}
if(!pdo_fieldexists('tiger_wxdaili_set','dlname1')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `dlname1` varchar(100) DEFAULT NULL COMMENT '一级名称'");}
if(!pdo_fieldexists('tiger_wxdaili_set','dlname2')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `dlname2` varchar(100) DEFAULT NULL COMMENT '二级名称'");}
if(!pdo_fieldexists('tiger_wxdaili_set','dlname3')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `dlname3` varchar(100) DEFAULT NULL COMMENT '三级名称'");}
if(!pdo_fieldexists('tiger_wxdaili_set','dlbl1')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `dlbl1` int(11) DEFAULT NULL COMMENT '一级-自己产生佣金比率'");}
if(!pdo_fieldexists('tiger_wxdaili_set','dlbl1t2')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `dlbl1t2` int(11) DEFAULT NULL COMMENT '一级-提取二级佣金比率'");}
if(!pdo_fieldexists('tiger_wxdaili_set','dlbl1t3')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `dlbl1t3` int(11) DEFAULT NULL COMMENT '一级-提取三级佣金比率'");}
if(!pdo_fieldexists('tiger_wxdaili_set','dlbl2')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `dlbl2` int(11) DEFAULT NULL COMMENT '二级-自己产生佣金比率'");}
if(!pdo_fieldexists('tiger_wxdaili_set','dlbl2t3')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `dlbl2t3` int(11) DEFAULT NULL COMMENT '二级-提取三级佣金比率'");}
if(!pdo_fieldexists('tiger_wxdaili_set','dlbl3')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `dlbl3` int(11) DEFAULT NULL COMMENT '三级-自己产生佣金比率'");}
if(!pdo_fieldexists('tiger_wxdaili_set','dlfftype')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `dlfftype` int(11) DEFAULT '0' COMMENT '0不开启 1开启'");}
if(!pdo_fieldexists('tiger_wxdaili_set','dlffprice')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `dlffprice` varchar(100) DEFAULT NULL COMMENT '付费金额'");}
if(!pdo_fieldexists('tiger_wxdaili_set','fxtype')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `fxtype` int(11) DEFAULT '0' COMMENT '0抽成模式 1普通分销'");}
if(!pdo_fieldexists('tiger_wxdaili_set','ddtype')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `ddtype` int(11) DEFAULT '0' COMMENT '0全显示 1显示一部分'");}
if(!pdo_fieldexists('tiger_wxdaili_set','seartype')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `seartype` int(11) DEFAULT '0' COMMENT '超级搜0显示 1不显示'");}
if(!pdo_fieldexists('tiger_wxdaili_set','dlzbtype')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `dlzbtype` int(11) DEFAULT '0' COMMENT '直播 1显示'");}
if(!pdo_fieldexists('tiger_wxdaili_set','fzname')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `fzname` varchar(100) DEFAULT NULL COMMENT '分站名称'");}
if(!pdo_fieldexists('tiger_wxdaili_set','zfmsg0')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `zfmsg0` varchar(1000) DEFAULT NULL COMMENT '支付提醒'");}
if(!pdo_fieldexists('tiger_wxdaili_set','zfmsg1')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `zfmsg1` varchar(1000) DEFAULT NULL COMMENT '一级支付提醒'");}
if(!pdo_fieldexists('tiger_wxdaili_set','zfmsg2')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `zfmsg2` varchar(1000) DEFAULT NULL COMMENT '二级支付提醒'");}
if(!pdo_fieldexists('tiger_wxdaili_set','zfmsg3')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `zfmsg3` varchar(1000) DEFAULT NULL COMMENT '三级支付提醒'");}
if(!pdo_fieldexists('tiger_wxdaili_set','level1')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `level1` varchar(50) DEFAULT NULL COMMENT '代理付费一级奖励'");}
if(!pdo_fieldexists('tiger_wxdaili_set','level2')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `level2` varchar(50) DEFAULT NULL COMMENT '代理付费二级奖励'");}
if(!pdo_fieldexists('tiger_wxdaili_set','level3')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `level3` varchar(50) DEFAULT NULL COMMENT '代理付费三级奖励'");}
if(!pdo_fieldexists('tiger_wxdaili_set','glevel1')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `glevel1` varchar(50) DEFAULT NULL COMMENT '代理付费固定一级奖励'");}
if(!pdo_fieldexists('tiger_wxdaili_set','glevel2')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `glevel2` varchar(50) DEFAULT NULL COMMENT '代理付费固定二级奖励'");}
if(!pdo_fieldexists('tiger_wxdaili_set','glevel3')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `glevel3` varchar(50) DEFAULT NULL COMMENT '代理付费固定三级奖励'");}
if(!pdo_fieldexists('tiger_wxdaili_set','dlkcbl')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `dlkcbl` varchar(30) DEFAULT NULL COMMENT '扣除佣金'");}
if(!pdo_fieldexists('tiger_wxdaili_set','dlyjfltype')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `dlyjfltype` int(3) DEFAULT '0' COMMENT '提交订单是示开启返二级 0 不开启 1开启'");}
if(!pdo_fieldexists('tiger_wxdaili_set','dlfxtype')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `dlfxtype` int(11) DEFAULT '0' COMMENT '代理商是否支持提交订单反现 0 支持 1 不支持'");}
if(!pdo_fieldexists('tiger_wxdaili_set','tztype')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   `tztype` int(11) DEFAULT '0' COMMENT '1开启'");}
if(!pdo_fieldexists('tiger_wxdaili_set','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_set')." ADD   PRIMARY KEY (`id`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_wxdaili_tkpid` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `px` int(11) DEFAULT '0',
  `type` int(1) DEFAULT '0' COMMENT '状态1 已分配 ',
  `nickname` varchar(200) DEFAULT NULL COMMENT '分配昵称',
  `uid` varchar(50) DEFAULT NULL COMMENT '分配会员ID',
  `pid` varchar(250) DEFAULT NULL COMMENT '淘客PID',
  `tgwname` varchar(100) DEFAULT NULL COMMENT '推广位名称',
  `fptime` varchar(50) DEFAULT NULL COMMENT '分配时间',
  `createtime` varchar(50) DEFAULT NULL COMMENT '生成时间',
  `tbuid` varchar(20) DEFAULT '0' COMMENT '淘宝ID',
  PRIMARY KEY (`id`),
  KEY `weid` (`weid`),
  KEY `pid` (`pid`),
  KEY `uid` (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_wxdaili_tkpid','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tkpid')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_wxdaili_tkpid','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tkpid')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_tkpid','px')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tkpid')." ADD   `px` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_tkpid','type')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tkpid')." ADD   `type` int(1) DEFAULT '0' COMMENT '状态1 已分配 '");}
if(!pdo_fieldexists('tiger_wxdaili_tkpid','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tkpid')." ADD   `nickname` varchar(200) DEFAULT NULL COMMENT '分配昵称'");}
if(!pdo_fieldexists('tiger_wxdaili_tkpid','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tkpid')." ADD   `uid` varchar(50) DEFAULT NULL COMMENT '分配会员ID'");}
if(!pdo_fieldexists('tiger_wxdaili_tkpid','pid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tkpid')." ADD   `pid` varchar(250) DEFAULT NULL COMMENT '淘客PID'");}
if(!pdo_fieldexists('tiger_wxdaili_tkpid','tgwname')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tkpid')." ADD   `tgwname` varchar(100) DEFAULT NULL COMMENT '推广位名称'");}
if(!pdo_fieldexists('tiger_wxdaili_tkpid','fptime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tkpid')." ADD   `fptime` varchar(50) DEFAULT NULL COMMENT '分配时间'");}
if(!pdo_fieldexists('tiger_wxdaili_tkpid','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tkpid')." ADD   `createtime` varchar(50) DEFAULT NULL COMMENT '生成时间'");}
if(!pdo_fieldexists('tiger_wxdaili_tkpid','tbuid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tkpid')." ADD   `tbuid` varchar(20) DEFAULT '0' COMMENT '淘宝ID'");}
if(!pdo_fieldexists('tiger_wxdaili_tkpid','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tkpid')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_wxdaili_tkpid','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tkpid')." ADD   KEY `weid` (`weid`)");}
if(!pdo_fieldexists('tiger_wxdaili_tkpid','pid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tkpid')." ADD   KEY `pid` (`pid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_wxdaili_txlog` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT NULL,
  `nickname` varchar(255) DEFAULT NULL COMMENT '微信用户昵称',
  `openid` varchar(255) DEFAULT NULL COMMENT '微信用户openid',
  `avatar` varchar(255) DEFAULT '0',
  `addtime` int(11) DEFAULT NULL COMMENT '打款时间',
  `credit1` int(11) DEFAULT NULL COMMENT '消耗积分',
  `credit2` varchar(100) DEFAULT NULL COMMENT '金额，分为单位',
  `zfbuid` varchar(100) DEFAULT NULL COMMENT '支付宝帐号',
  `dmch_billno` varchar(50) DEFAULT NULL COMMENT '生成的商户订单号',
  `sh` tinyint(1) DEFAULT '0' COMMENT '是否打款成功 0未审核 1已审核',
  `dresult` varchar(255) DEFAULT NULL COMMENT '失败提示',
  `createtime` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_wxdaili_txlog','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_txlog')." ADD 
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_wxdaili_txlog','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_txlog')." ADD   `weid` int(11) DEFAULT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_txlog','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_txlog')." ADD   `nickname` varchar(255) DEFAULT NULL COMMENT '微信用户昵称'");}
if(!pdo_fieldexists('tiger_wxdaili_txlog','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_txlog')." ADD   `openid` varchar(255) DEFAULT NULL COMMENT '微信用户openid'");}
if(!pdo_fieldexists('tiger_wxdaili_txlog','avatar')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_txlog')." ADD   `avatar` varchar(255) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_txlog','addtime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_txlog')." ADD   `addtime` int(11) DEFAULT NULL COMMENT '打款时间'");}
if(!pdo_fieldexists('tiger_wxdaili_txlog','credit1')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_txlog')." ADD   `credit1` int(11) DEFAULT NULL COMMENT '消耗积分'");}
if(!pdo_fieldexists('tiger_wxdaili_txlog','credit2')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_txlog')." ADD   `credit2` varchar(100) DEFAULT NULL COMMENT '金额，分为单位'");}
if(!pdo_fieldexists('tiger_wxdaili_txlog','zfbuid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_txlog')." ADD   `zfbuid` varchar(100) DEFAULT NULL COMMENT '支付宝帐号'");}
if(!pdo_fieldexists('tiger_wxdaili_txlog','dmch_billno')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_txlog')." ADD   `dmch_billno` varchar(50) DEFAULT NULL COMMENT '生成的商户订单号'");}
if(!pdo_fieldexists('tiger_wxdaili_txlog','sh')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_txlog')." ADD   `sh` tinyint(1) DEFAULT '0' COMMENT '是否打款成功 0未审核 1已审核'");}
if(!pdo_fieldexists('tiger_wxdaili_txlog','dresult')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_txlog')." ADD   `dresult` varchar(255) DEFAULT NULL COMMENT '失败提示'");}
if(!pdo_fieldexists('tiger_wxdaili_txlog','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_txlog')." ADD   `createtime` varchar(255) DEFAULT NULL");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_wxdaili_tzyjlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `type` int(11) DEFAULT '0',
  `uid` int(11) DEFAULT '0' COMMENT 'share表用户ID',
  `month` int(11) DEFAULT '0' COMMENT '结算月份 201701',
  `nickname` varchar(100) DEFAULT NULL COMMENT '粉丝昵称',
  `openid` varchar(100) DEFAULT NULL COMMENT '粉丝OPENID',
  `msg` varchar(100) DEFAULT NULL COMMENT '如：数据更新时间：2017-3-21',
  `tbbyfkprice` decimal(10,2) DEFAULT '0.00' COMMENT '本月付款',
  `tbsyjsprice` decimal(10,2) DEFAULT '0.00' COMMENT '上月结算',
  `tbjrfkprice` decimal(10,2) DEFAULT '0.00' COMMENT '今日付款',
  `tbzrfkprice` decimal(10,2) DEFAULT '0.00' COMMENT '昨日付款',
  `pddbyfkprice` decimal(10,2) DEFAULT '0.00' COMMENT '本月付款',
  `pddsyjsprice` decimal(10,2) DEFAULT '0.00' COMMENT '上月结算',
  `pddjrfkprice` decimal(10,2) DEFAULT '0.00' COMMENT '今日付款',
  `pddzrfkprice` decimal(10,2) DEFAULT '0.00' COMMENT '昨日付款',
  `jdbyfkprice` decimal(10,2) DEFAULT '0.00' COMMENT '本月付款',
  `jdsyjsprice` decimal(10,2) DEFAULT '0.00' COMMENT '上月结算',
  `jdjrfkprice` decimal(10,2) DEFAULT '0.00' COMMENT '今日付款',
  `jdzrfkprice` decimal(10,2) DEFAULT '0.00' COMMENT '昨日付款',
  `createtime` int(14) NOT NULL,
  `jstype` int(2) DEFAULT '0' COMMENT '1已经结算',
  `jstime` int(10) DEFAULT '0' COMMENT '结算时间',
  `tbjsrmb` decimal(10,2) DEFAULT '0.00' COMMENT '淘宝结算金额',
  `pddjsrmb` decimal(10,2) DEFAULT '0.00' COMMENT '拼多多结算金额',
  `jdjsrmb` decimal(10,2) DEFAULT '0.00' COMMENT '京东结算金额',
  PRIMARY KEY (`id`),
  UNIQUE KEY `uid_month` (`uid`,`month`),
  KEY `weid` (`weid`),
  KEY `uid` (`uid`),
  KEY `month` (`month`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','type')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `type` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `uid` int(11) DEFAULT '0' COMMENT 'share表用户ID'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','month')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `month` int(11) DEFAULT '0' COMMENT '结算月份 201701'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `nickname` varchar(100) DEFAULT NULL COMMENT '粉丝昵称'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `openid` varchar(100) DEFAULT NULL COMMENT '粉丝OPENID'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','msg')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `msg` varchar(100) DEFAULT NULL COMMENT '如：数据更新时间：2017-3-21'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','tbbyfkprice')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `tbbyfkprice` decimal(10,2) DEFAULT '0.00' COMMENT '本月付款'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','tbsyjsprice')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `tbsyjsprice` decimal(10,2) DEFAULT '0.00' COMMENT '上月结算'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','tbjrfkprice')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `tbjrfkprice` decimal(10,2) DEFAULT '0.00' COMMENT '今日付款'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','tbzrfkprice')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `tbzrfkprice` decimal(10,2) DEFAULT '0.00' COMMENT '昨日付款'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','pddbyfkprice')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `pddbyfkprice` decimal(10,2) DEFAULT '0.00' COMMENT '本月付款'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','pddsyjsprice')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `pddsyjsprice` decimal(10,2) DEFAULT '0.00' COMMENT '上月结算'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','pddjrfkprice')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `pddjrfkprice` decimal(10,2) DEFAULT '0.00' COMMENT '今日付款'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','pddzrfkprice')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `pddzrfkprice` decimal(10,2) DEFAULT '0.00' COMMENT '昨日付款'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','jdbyfkprice')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `jdbyfkprice` decimal(10,2) DEFAULT '0.00' COMMENT '本月付款'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','jdsyjsprice')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `jdsyjsprice` decimal(10,2) DEFAULT '0.00' COMMENT '上月结算'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','jdjrfkprice')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `jdjrfkprice` decimal(10,2) DEFAULT '0.00' COMMENT '今日付款'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','jdzrfkprice')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `jdzrfkprice` decimal(10,2) DEFAULT '0.00' COMMENT '昨日付款'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `createtime` int(14) NOT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','jstype')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `jstype` int(2) DEFAULT '0' COMMENT '1已经结算'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','jstime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `jstime` int(10) DEFAULT '0' COMMENT '结算时间'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','tbjsrmb')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `tbjsrmb` decimal(10,2) DEFAULT '0.00' COMMENT '淘宝结算金额'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','pddjsrmb')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `pddjsrmb` decimal(10,2) DEFAULT '0.00' COMMENT '拼多多结算金额'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','jdjsrmb')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   `jdjsrmb` decimal(10,2) DEFAULT '0.00' COMMENT '京东结算金额'");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','uid_month')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   UNIQUE KEY `uid_month` (`uid`,`month`)");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   KEY `weid` (`weid`)");}
if(!pdo_fieldexists('tiger_wxdaili_tzyjlog','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_tzyjlog')." ADD   KEY `uid` (`uid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_tiger_wxdaili_yjlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `weid` int(11) DEFAULT '0',
  `type` int(11) DEFAULT '0',
  `uid` int(11) DEFAULT '0' COMMENT 'share表ID',
  `month` varchar(20) DEFAULT NULL COMMENT '结算月份',
  `memberid` int(11) unsigned DEFAULT NULL COMMENT 'member用户ID',
  `nickname` varchar(100) DEFAULT NULL COMMENT '粉丝昵称',
  `openid` varchar(100) DEFAULT NULL COMMENT '粉丝OPENID',
  `msg` varchar(100) DEFAULT NULL COMMENT '如：2017年2月份佣金，自动结算时间：2017-3-21',
  `price` varchar(20) DEFAULT NULL COMMENT '提现佣金余额',
  `createtime` int(14) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `openid_createtime` (`openid`,`createtime`),
  KEY `weid` (`weid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('tiger_wxdaili_yjlog','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_yjlog')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT");}
if(!pdo_fieldexists('tiger_wxdaili_yjlog','weid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_yjlog')." ADD   `weid` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_yjlog','type')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_yjlog')." ADD   `type` int(11) DEFAULT '0'");}
if(!pdo_fieldexists('tiger_wxdaili_yjlog','uid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_yjlog')." ADD   `uid` int(11) DEFAULT '0' COMMENT 'share表ID'");}
if(!pdo_fieldexists('tiger_wxdaili_yjlog','month')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_yjlog')." ADD   `month` varchar(20) DEFAULT NULL COMMENT '结算月份'");}
if(!pdo_fieldexists('tiger_wxdaili_yjlog','memberid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_yjlog')." ADD   `memberid` int(11) unsigned DEFAULT NULL COMMENT 'member用户ID'");}
if(!pdo_fieldexists('tiger_wxdaili_yjlog','nickname')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_yjlog')." ADD   `nickname` varchar(100) DEFAULT NULL COMMENT '粉丝昵称'");}
if(!pdo_fieldexists('tiger_wxdaili_yjlog','openid')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_yjlog')." ADD   `openid` varchar(100) DEFAULT NULL COMMENT '粉丝OPENID'");}
if(!pdo_fieldexists('tiger_wxdaili_yjlog','msg')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_yjlog')." ADD   `msg` varchar(100) DEFAULT NULL COMMENT '如：2017年2月份佣金，自动结算时间：2017-3-21'");}
if(!pdo_fieldexists('tiger_wxdaili_yjlog','price')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_yjlog')." ADD   `price` varchar(20) DEFAULT NULL COMMENT '提现佣金余额'");}
if(!pdo_fieldexists('tiger_wxdaili_yjlog','createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_yjlog')." ADD   `createtime` int(14) NOT NULL");}
if(!pdo_fieldexists('tiger_wxdaili_yjlog','id')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_yjlog')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('tiger_wxdaili_yjlog','openid_createtime')) {pdo_query("ALTER TABLE ".tablename('tiger_wxdaili_yjlog')." ADD   UNIQUE KEY `openid_createtime` (`openid`,`createtime`)");}
