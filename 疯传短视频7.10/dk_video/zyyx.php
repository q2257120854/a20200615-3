<?php
//升级数据表
pdo_query("CREATE TABLE IF NOT EXISTS `ims_dk_video_apps` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `uniacid` int(11) unsigned NOT NULL COMMENT '平台ID',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0导航1网页',
  `title` varchar(32) NOT NULL COMMENT '标题',
  `icon` varchar(256) NOT NULL COMMENT '图标',
  `appid` varchar(64) NOT NULL COMMENT '小程序ID',
  `path` varchar(256) NOT NULL COMMENT '目录',
  `sort` int(10) NOT NULL COMMENT '排序',
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `type` (`type`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('dk_video_apps','id')) {pdo_query("ALTER TABLE ".tablename('dk_video_apps')." ADD 
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID'");}
if(!pdo_fieldexists('dk_video_apps','uniacid')) {pdo_query("ALTER TABLE ".tablename('dk_video_apps')." ADD   `uniacid` int(11) unsigned NOT NULL COMMENT '平台ID'");}
if(!pdo_fieldexists('dk_video_apps','type')) {pdo_query("ALTER TABLE ".tablename('dk_video_apps')." ADD   `type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0导航1网页'");}
if(!pdo_fieldexists('dk_video_apps','title')) {pdo_query("ALTER TABLE ".tablename('dk_video_apps')." ADD   `title` varchar(32) NOT NULL COMMENT '标题'");}
if(!pdo_fieldexists('dk_video_apps','icon')) {pdo_query("ALTER TABLE ".tablename('dk_video_apps')." ADD   `icon` varchar(256) NOT NULL COMMENT '图标'");}
if(!pdo_fieldexists('dk_video_apps','appid')) {pdo_query("ALTER TABLE ".tablename('dk_video_apps')." ADD   `appid` varchar(64) NOT NULL COMMENT '小程序ID'");}
if(!pdo_fieldexists('dk_video_apps','path')) {pdo_query("ALTER TABLE ".tablename('dk_video_apps')." ADD   `path` varchar(256) NOT NULL COMMENT '目录'");}
if(!pdo_fieldexists('dk_video_apps','sort')) {pdo_query("ALTER TABLE ".tablename('dk_video_apps')." ADD   `sort` int(10) NOT NULL COMMENT '排序'");}
if(!pdo_fieldexists('dk_video_apps','id')) {pdo_query("ALTER TABLE ".tablename('dk_video_apps')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('dk_video_apps','uniacid')) {pdo_query("ALTER TABLE ".tablename('dk_video_apps')." ADD   KEY `uniacid` (`uniacid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_dk_video_author` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `uniacid` int(10) NOT NULL COMMENT '平台ID',
  `nickname` varchar(32) NOT NULL COMMENT '昵称',
  `avatar` varchar(128) NOT NULL COMMENT '头像',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('dk_video_author','id')) {pdo_query("ALTER TABLE ".tablename('dk_video_author')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID'");}
if(!pdo_fieldexists('dk_video_author','uniacid')) {pdo_query("ALTER TABLE ".tablename('dk_video_author')." ADD   `uniacid` int(10) NOT NULL COMMENT '平台ID'");}
if(!pdo_fieldexists('dk_video_author','nickname')) {pdo_query("ALTER TABLE ".tablename('dk_video_author')." ADD   `nickname` varchar(32) NOT NULL COMMENT '昵称'");}
if(!pdo_fieldexists('dk_video_author','avatar')) {pdo_query("ALTER TABLE ".tablename('dk_video_author')." ADD   `avatar` varchar(128) NOT NULL COMMENT '头像'");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_dk_video_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `uniacid` int(10) unsigned NOT NULL COMMENT '平台ID',
  `title` varchar(32) NOT NULL,
  `bindid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '绑定采集ID',
  `sort` smallint(4) unsigned NOT NULL,
  `ishide` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否隐藏',
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`),
  KEY `bindid` (`bindid`),
  KEY `ishide` (`ishide`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('dk_video_cate','id')) {pdo_query("ALTER TABLE ".tablename('dk_video_cate')." ADD 
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '自增ID'");}
if(!pdo_fieldexists('dk_video_cate','uniacid')) {pdo_query("ALTER TABLE ".tablename('dk_video_cate')." ADD   `uniacid` int(10) unsigned NOT NULL COMMENT '平台ID'");}
if(!pdo_fieldexists('dk_video_cate','title')) {pdo_query("ALTER TABLE ".tablename('dk_video_cate')." ADD   `title` varchar(32) NOT NULL");}
if(!pdo_fieldexists('dk_video_cate','bindid')) {pdo_query("ALTER TABLE ".tablename('dk_video_cate')." ADD   `bindid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '绑定采集ID'");}
if(!pdo_fieldexists('dk_video_cate','sort')) {pdo_query("ALTER TABLE ".tablename('dk_video_cate')." ADD   `sort` smallint(4) unsigned NOT NULL");}
if(!pdo_fieldexists('dk_video_cate','ishide')) {pdo_query("ALTER TABLE ".tablename('dk_video_cate')." ADD   `ishide` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否隐藏'");}
if(!pdo_fieldexists('dk_video_cate','id')) {pdo_query("ALTER TABLE ".tablename('dk_video_cate')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('dk_video_cate','uniacid')) {pdo_query("ALTER TABLE ".tablename('dk_video_cate')." ADD   KEY `uniacid` (`uniacid`)");}
if(!pdo_fieldexists('dk_video_cate','bindid')) {pdo_query("ALTER TABLE ".tablename('dk_video_cate')." ADD   KEY `bindid` (`bindid`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_dk_video_data` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `uniacid` int(10) NOT NULL COMMENT '平台ID',
  `cateid` int(10) NOT NULL COMMENT '分类ID',
  `authorid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '作者ID',
  `title` varchar(128) NOT NULL COMMENT '视频标题',
  `thumb` varchar(128) DEFAULT NULL COMMENT '缩略图片',
  `icon` varchar(128) DEFAULT NULL COMMENT '分享图片',
  `click` int(10) NOT NULL DEFAULT '0' COMMENT '播放次数',
  `source` varchar(64) DEFAULT NULL COMMENT '来源',
  `path` varchar(512) DEFAULT NULL COMMENT '打开路径',
  `appid` varchar(32) DEFAULT NULL COMMENT '小程序APPID',
  `ad_appid` varchar(64) DEFAULT NULL COMMENT '横幅APPID',
  `ad_banner` varchar(128) DEFAULT NULL COMMENT '横幅图片',
  `ad_path` varchar(128) DEFAULT NULL COMMENT '横幅路径',
  `ishot` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '视频推荐',
  `isout` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否采集',
  `ismob` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否手机版',
  `isclose` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否隐藏',
  `isdanger` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '风险视频',
  `vid` varchar(32) DEFAULT NULL COMMENT '外部ID',
  `key` varchar(16) NOT NULL DEFAULT '0' COMMENT '视频KEY',
  `ovid` varchar(64) DEFAULT NULL COMMENT '加密ID',
  `create_time` int(11) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`),
  KEY `isclose` (`isclose`),
  KEY `isdanger` (`isdanger`)
) ENGINE=MyISAM AUTO_INCREMENT=373 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('dk_video_data','id')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD 
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID'");}
if(!pdo_fieldexists('dk_video_data','uniacid')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `uniacid` int(10) NOT NULL COMMENT '平台ID'");}
if(!pdo_fieldexists('dk_video_data','cateid')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `cateid` int(10) NOT NULL COMMENT '分类ID'");}
if(!pdo_fieldexists('dk_video_data','authorid')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `authorid` int(11) unsigned NOT NULL DEFAULT '0' COMMENT '作者ID'");}
if(!pdo_fieldexists('dk_video_data','title')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `title` varchar(128) NOT NULL COMMENT '视频标题'");}
if(!pdo_fieldexists('dk_video_data','thumb')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `thumb` varchar(128) DEFAULT NULL COMMENT '缩略图片'");}
if(!pdo_fieldexists('dk_video_data','icon')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `icon` varchar(128) DEFAULT NULL COMMENT '分享图片'");}
if(!pdo_fieldexists('dk_video_data','click')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `click` int(10) NOT NULL DEFAULT '0' COMMENT '播放次数'");}
if(!pdo_fieldexists('dk_video_data','source')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `source` varchar(64) DEFAULT NULL COMMENT '来源'");}
if(!pdo_fieldexists('dk_video_data','path')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `path` varchar(512) DEFAULT NULL COMMENT '打开路径'");}
if(!pdo_fieldexists('dk_video_data','appid')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `appid` varchar(32) DEFAULT NULL COMMENT '小程序APPID'");}
if(!pdo_fieldexists('dk_video_data','ad_appid')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `ad_appid` varchar(64) DEFAULT NULL COMMENT '横幅APPID'");}
if(!pdo_fieldexists('dk_video_data','ad_banner')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `ad_banner` varchar(128) DEFAULT NULL COMMENT '横幅图片'");}
if(!pdo_fieldexists('dk_video_data','ad_path')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `ad_path` varchar(128) DEFAULT NULL COMMENT '横幅路径'");}
if(!pdo_fieldexists('dk_video_data','ishot')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `ishot` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '视频推荐'");}
if(!pdo_fieldexists('dk_video_data','isout')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `isout` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否采集'");}
if(!pdo_fieldexists('dk_video_data','ismob')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `ismob` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否手机版'");}
if(!pdo_fieldexists('dk_video_data','isclose')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `isclose` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否隐藏'");}
if(!pdo_fieldexists('dk_video_data','isdanger')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `isdanger` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '风险视频'");}
if(!pdo_fieldexists('dk_video_data','vid')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `vid` varchar(32) DEFAULT NULL COMMENT '外部ID'");}
if(!pdo_fieldexists('dk_video_data','key')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `key` varchar(16) NOT NULL DEFAULT '0' COMMENT '视频KEY'");}
if(!pdo_fieldexists('dk_video_data','ovid')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `ovid` varchar(64) DEFAULT NULL COMMENT '加密ID'");}
if(!pdo_fieldexists('dk_video_data','create_time')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   `create_time` int(11) NOT NULL COMMENT '创建时间'");}
if(!pdo_fieldexists('dk_video_data','id')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   PRIMARY KEY (`id`)");}
if(!pdo_fieldexists('dk_video_data','isclose')) {pdo_query("ALTER TABLE ".tablename('dk_video_data')." ADD   KEY `isclose` (`isclose`)");}
pdo_query("CREATE TABLE IF NOT EXISTS `ims_dk_video_system` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `uniacid` int(10) NOT NULL COMMENT '平台ID',
  `data` text COMMENT '配置信息',
  PRIMARY KEY (`id`),
  KEY `uniacid` (`uniacid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

");

if(!pdo_fieldexists('dk_video_system','id')) {pdo_query("ALTER TABLE ".tablename('dk_video_system')." ADD 
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '自增ID'");}
if(!pdo_fieldexists('dk_video_system','uniacid')) {pdo_query("ALTER TABLE ".tablename('dk_video_system')." ADD   `uniacid` int(10) NOT NULL COMMENT '平台ID'");}
if(!pdo_fieldexists('dk_video_system','data')) {pdo_query("ALTER TABLE ".tablename('dk_video_system')." ADD   `data` text COMMENT '配置信息'");}
if(!pdo_fieldexists('dk_video_system','id')) {pdo_query("ALTER TABLE ".tablename('dk_video_system')." ADD   PRIMARY KEY (`id`)");}
