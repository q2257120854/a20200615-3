SET FOREIGN_KEY_CHECKS=0;
DROP TABLE IF EXISTS `ku_admin`;
CREATE TABLE `ku_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `userpass` varchar(255) NOT NULL,
  `addtime` datetime DEFAULT NULL,
  `userip` varchar(15) DEFAULT NULL,
  `grade` int(1) NOT NULL DEFAULT '0' COMMENT '0总管理1普通管理2授权管理3高级管理4财务管理',
  `active` int(1) NOT NULL DEFAULT '0' COMMENT '0正常1封禁',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;
--
-- 转存表中的数据 `ku_admin`
--

INSERT INTO `ku_admin` (`id`, `name`, `username`, `userpass`, `addtime`, `userip`, `grade`, `active`) VALUES
(1, '5G云资源', 'admin', 'cf7562e457998d3d3af110a217725901', '2019-09-08 07:36:23', NULL, 0, 0);

-- --------------------------------------------------------

DROP TABLE IF EXISTS `ku_admin_log`;
CREATE TABLE `ku_admin_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `grade` int(11) DEFAULT NULL,
  `date` datetime NOT NULL,
  `ip` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

DROP TABLE IF EXISTS `ku_article`;
CREATE TABLE `ku_article` (
   `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `content` text COMMENT '内容',
  `addtime` datetime DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL COMMENT '图片地址',
  `type` int(11) DEFAULT NULL COMMENT '0案例中心1更新日志2广告',
  `dada` int(11) DEFAULT NULL COMMENT '轮图',
  `state` int(11) DEFAULT '0' COMMENT '0显示1不显示',
  `oper` varchar(255) DEFAULT NULL COMMENT '操作人',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;
--
-- 转存表中的数据 `ku_article`
--

INSERT INTO `ku_article` (`id`, `title`, `content`, `addtime`, `img`, `type`, `dada`, `state`, `oper`) VALUES
(1, 'KUYUN', 'http://www.gzyus.cn/', '2019-09-09 16:27:43', 'https://www.kuxiangcms.com/public/home/images/5ce792547a4d2.jpg', 2, 0, 0, '15179086667'),
(2, '酷享云支付', 'https://pay.kuxiangcms.cn/', '2019-09-09 16:27:29', 'https://www.kuxiangcms.com/public/home/images/5cfdd5735e236.jpg', 2, 0, 0, '15179086667'),
(3, '酷享云支付', 'https://share.weiyun.com/5ek78mU', '2019-09-09 16:27:18', 'https://www.kuxiangcms.com/public/home/images/5ceb817a4a545.jpg', 2, 0, 0, '15179086667'),
(4, '官网', 'http://www.kuxiangcms.com', '2019-09-09 16:27:00', 'https://www.kuxiangcms.com/public/home/images/5ce792547a4d2.jpg', 2, 0, 0, '15179086667'),
(5, 'KUYUN', 'https://pay.kuxiangcms.cn/', '2019-09-09 16:25:42', 'https://www.kuxiangcms.com/public/home/images/5ce20fda5a2cf.png', 2, 1, 0, '15179086667'),
(6, 'KUYUN', 'https://pay.kuxiangcms.cn/', '2019-09-09 16:25:19', 'https://www.kuxiangcms.com/public/home/images/5ceb817a4a545.jpg', 2, 1, 0, '15179086667'),
(7, 'KUYUN', 'http://www.gzyus.cn/', '2019-09-09 16:24:51', 'https://www.kuxiangcms.com/public/home/images/5ce792547a4d2.jpg', 2, 2, 0, '15179086667'),
(8, '酷享云支付', '酷享云支付平台是一款免签支付第四方平台，平台于2019年1月11日正式上线，致力于解决个人站长的快捷支付结算服务，为商户及其买家提供便捷、绿色、安全、快速的支付体验。 快速是酷享云支付平台的核心理念，在日益渐新的时代，我们拒绝等待', '2019-09-08 01:30:03', 'https://s3.ax2x.com/2019/09/08/8820190908012540.png', 0, NULL, 0, '15179086667'),
(9, 'kuyun更新v3.0', '新增：微信、QQ、支付宝、普通会员、黄金会员、钻石会员、全部单独费率设置功能。', '2019-09-08 01:34:14', 'https://s3.ax2x.com/2019/09/08/8899.png', 1, NULL, 0, '15179086667');

-- --------------------------------------------------------

DROP TABLE IF EXISTS `ku_author`;
CREATE TABLE `ku_author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kuhost` varchar(40) DEFAULT NULL COMMENT '授权域名',
  `ku_qq` varchar(20) DEFAULT NULL,
  `operation` varchar(255) DEFAULT NULL,
  `addtime` datetime NOT NULL COMMENT '添加时间',
  `dhtime` datetime NOT NULL COMMENT '到期时间',
  `remarks` text NOT NULL,
  `number` varchar(255) DEFAULT NULL,
  `channel` int(11) NOT NULL COMMENT '授权渠道',
  `state` int(11) NOT NULL COMMENT '1为正常 0为冻结2封禁',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
DROP TABLE IF EXISTS `ku_authorlog`;
CREATE TABLE `ku_authorlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `host` varchar(30) DEFAULT NULL,
  `time` datetime NOT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `channel` text,
  `level` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) DEFAULT NULL,
  `data` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
DROP TABLE IF EXISTS `ku_carmine`;
CREATE TABLE `ku_carmine` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `carmine` varchar(100) DEFAULT NULL COMMENT '卡密',
  `addtime` datetime DEFAULT NULL COMMENT '生成时间',
  `sytiem` datetime DEFAULT NULL COMMENT '使用时间',
  `expire` datetime DEFAULT NULL COMMENT '到期时间',
  `operator` varchar(30) DEFAULT NULL,
  `status` int(11) DEFAULT NULL COMMENT '0正常1使用2封禁',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
DROP TABLE IF EXISTS `ku_carmlog`;
 CREATE TABLE `ku_carmlog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kuhost` varchar(40) DEFAULT NULL,
  `carmine` varchar(100) DEFAULT NULL,
  `ku_qq` varchar(20) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `operator` varchar(30) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
DROP TABLE IF EXISTS `ku_charge`;
CREATE TABLE `ku_charge` (
  `out_trade_no` varchar(64) NOT NULL COMMENT '充值单号',
  `coin` varchar(255) DEFAULT NULL COMMENT '金币数量',
  `addtime` datetime DEFAULT NULL,
  `money` decimal(10,2) NOT NULL COMMENT '金币价格',
  `type` varchar(20) NOT NULL COMMENT '支付方式',
  `endtime` datetime DEFAULT NULL COMMENT '到账时间',
  `username` varchar(255) DEFAULT NULL COMMENT '充值账号',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0未完成1已完成2已退款3充值失败',
  PRIMARY KEY (`out_trade_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
 DROP TABLE IF EXISTS `ku_complain`;
CREATE TABLE `ku_complain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL COMMENT '产品类型',
  `content` text COMMENT '投诉内容',
  `type` int(11) NOT NULL COMMENT '0bug反馈1账号问题2代理问题3订单问题4产品授权问题5其他与建议',
  `username` varchar(255) DEFAULT NULL COMMENT '提交人',
  `addtime` datetime NOT NULL COMMENT '创建时间',
  `ip` varchar(20) DEFAULT NULL COMMENT '用户IP',
  `qq` varchar(30) DEFAULT NULL COMMENT '用户联系方式',
  `key` varchar(255) DEFAULT NULL COMMENT '查看回复秘钥',
  `hfconte` varchar(255) DEFAULT NULL COMMENT '管理员回复内容',
  `hftime` varchar(255) DEFAULT NULL COMMENT '处理时间',
  `name` varchar(255) NOT NULL COMMENT '操作人',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0待处理1已回复2已完成',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
DROP TABLE IF EXISTS `ku_config`;
CREATE TABLE `ku_config` (
  `k` varchar(200) NOT NULL DEFAULT '',
  `v` text,
  PRIMARY KEY (`k`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
INSERT INTO `ku_config` VALUES ('title', '5G云资源');
INSERT INTO `ku_config` VALUES ('keywords', '酷享云支付，PHP授权系统，PHP远程授权');
INSERT INTO `ku_config` VALUES ('description', '酷享云支付授权系统，正版授权查询，自助授权购买授权代理商加盟。');
INSERT INTO `ku_config` VALUES ('pay_key', '');
INSERT INTO `ku_config` VALUES ('pay_pid', '');
INSERT INTO `ku_config` VALUES ('zsadding_price', '2');
INSERT INTO `ku_config` VALUES ('adding_price', '1');
INSERT INTO `ku_config` VALUES ('zssq_price', '5');
INSERT INTO `ku_config` VALUES ('sq_price', '2');
INSERT INTO `ku_config` VALUES ('pay_api', 'https://pay.kuxiangcms.cn/');
INSERT INTO `ku_config` VALUES ('psq_price', '10');
INSERT INTO `ku_config` VALUES ('z_kami_price', '1');
INSERT INTO `ku_config` VALUES ('kami_price', '10');
INSERT INTO `ku_config` VALUES ('agent_notice', '<h4> 代理权限详情 </h4>1.普通代理：手动授权域名<br>2.高级代理：手动授权域名 + 生成卡密<br>3.钻石代理：手动授权域名 + 生成卡密 + 开通普通/高级/砖石代理 并且享受代理分佣<br>4.代理禁止倒卖授权，接到举报或者查实之后一律冻结账户处理<br>5..程序授权价格388元（人民币），低于此价格一律冻结账户处理<br>');
INSERT INTO `ku_config` VALUES ('agent_notice_pu', '<h4> 代理权限详情 </h4>1.普通代理：手动授权域名<br>2.高级代理：手动授权域名 + 生成卡密<br>3.钻石代理：手动授权域名 + 生成卡密 + 开通普通/高级/砖石代理 并且享受代理分佣<br>4.代理禁止倒卖授权，接到举报或者查实之后一律冻结账户处理<br>5..程序授权价格388元（人民币），低于此价格一律冻结账户处理<br>');
INSERT INTO `ku_config` VALUES ('agent_notice_gj', '<h4> 代理权限详情 </h4>1.普通代理：手动授权域名<br>2.高级代理：手动授权域名 + 生成卡密<br>3.钻石代理：手动授权域名 + 生成卡密 + 开通普通/高级/砖石代理 并且享受代理分佣<br>4.代理禁止倒卖授权，接到举报或者查实之后一律冻结账户处理<br>5..程序授权价格388元（人民币），低于此价格一律冻结账户处理<br>');
INSERT INTO `ku_config` VALUES ('agent_notice_zs', '');
INSERT INTO `ku_config` VALUES ('limit_ip', '0');
INSERT INTO `ku_config` VALUES ('kunotice', '官方声明：本公司未授权任何企业或个人售卖酷享云支付系统，目前发现很多盗版网站，居然还保留我们官方联系方式，请各位擦亮眼睛，请认准正版销售QQ：2316803263，酷享授权系统源码开源包更新，至今没有人出过任何安全问题！网上已出现很多盗版源码，盗版源码存在严重安全漏洞和众多bug，如需要接入支付请认证官方pay.kuxiangcms.cn网站，商用请购买正版！感谢各位老板的支持！');
INSERT INTO `ku_config` VALUES ('copyright', 'YUSHENG© 2013-2019 西安市碑林区5G云资源');
INSERT INTO `ku_config` VALUES ('wap_qq', '1000000');
INSERT INTO `ku_config` VALUES ('loginip', '183.2.248.0');
INSERT INTO `ku_config` VALUES ('kalman', 'ku');
INSERT INTO `ku_config` VALUES ('squan', '1');
INSERT INTO `ku_config` VALUES ('squan_limit', '5');
INSERT INTO `ku_config` VALUES ('kalman_limit', '20');
INSERT INTO `ku_config` VALUES ('not_tips', '您的网站暂未授权，授权使用！');
INSERT INTO `ku_config` VALUES ('expire_tips', '该网站已到期，请续费！');
INSERT INTO `ku_config` VALUES ('abnormal', '该网站使用异常，无法继续使用！');
INSERT INTO `ku_config` VALUES ('on-line_tips', '1.卡密授权限制后请联系代理或联系网站客服。<br>2.卡密一但使用无法，并且提示授权成功，如需要更换授权请联系您代理商。<br>3.请准确核实需要授权的域名与qq，输入卡密后授权，如提示卡密有误请联系卡密的代理商或联系我们官方。<br>');
INSERT INTO `ku_config` VALUES ('pay_fee', '0.4');
INSERT INTO `ku_config` VALUES ('pay_url', 'http://127.0.0.1/online/notify_url.php');
INSERT INTO `ku_config` VALUES ('pay_tzurl', 'http://127.0.0.1/online/return_url.php');
INSERT INTO `ku_config` VALUES ('mail_stmp', 'smtp.qq.com');
INSERT INTO `ku_config` VALUES ('mail_port', '465');
INSERT INTO `ku_config` VALUES ('mail_name', '123@qq.com');
INSERT INTO `ku_config` VALUES ('mail_pwd', '');
INSERT INTO `ku_config` VALUES ('sitename', '授权系统');
INSERT INTO `ku_config` VALUES ('send_interval', '60');
INSERT INTO `ku_config` VALUES ('mail_state', '1');
INSERT INTO `ku_config` VALUES ('custom', '1');
INSERT INTO `ku_config` VALUES ('down_w_url', 'www.baidu.cn');
INSERT INTO `ku_config` VALUES ('down_file', 'demo');
INSERT INTO `ku_config` VALUES ('auth_file_path', 'application');
INSERT INTO `ku_config` VALUES ('version', '1.0.0');
INSERT INTO `ku_config` VALUES ('buiid', '10002');
INSERT INTO `ku_config` VALUES ('updatezip', 'www.kuxiangcms.com');
INSERT INTO `ku_config` VALUES ('version-msg', '');
INSERT INTO `ku_config` VALUES ('ts-line_tips', '1.工单提交友情提示：切勿提交诽谤辱骂性工单内容，如有其情况发生责将面临封号风险。');
INSERT INTO `ku_config` VALUES ('pay-line_tips', '支付成功后请扫码验证下载源码谢谢合作！');
INSERT INTO `ku_config` VALUES ('website', '0');
INSERT INTO `ku_config` VALUES ('logo_img', 'https://www.kuxiangcms.com/public/3c8dd9f4f3657cd2bf5a471f47d6d1f4.png');
INSERT INTO `ku_config` VALUES ('website_url', 'http://127.0.0.1');
INSERT INTO `ku_config` VALUES ('title_bt', '酷享授权站-5G云资源公司- 旗下开发有酷享视界双端原生APP、酷享云支付、千月影视程序');
INSERT INTO `ku_config` VALUES ('template', 'moban');
INSERT INTO `ku_config` VALUES ('icp_bei', '陕ICP备10000000号-1');
INSERT INTO `ku_config` VALUES ('phone', '10000000');
INSERT INTO `ku_config` VALUES ('wx_img', 'https://www.kuxiangcms.com/public/img_29-1.jpg');
INSERT INTO `ku_config` VALUES ('tongji', '');
INSERT INTO `ku_config` VALUES ('you-url_tips', ' <a href="http://www.thinkphp.cn/" target="_blank">ThinkPHP</a><a href="https://mp.weixin.qq.com" target="_blank">微信公众平台</a><a href="https://www.qcloud.com" target="_blank">腾讯云</a><a href="https://gitee.com/" target="_blank">码云Gitee</a><a href="https://chuangke.aliyun.com/invite?userCode=dligum2z" target="_blank">阿里云</a><a href="https://www.oschina.net" target="_blank">开源中国</a><a href="http://www.bt.cn/" target="_blank">宝塔</a>');
INSERT INTO `ku_config` VALUES ('wap_qun', '8888888');
INSERT INTO `ku_config` VALUES ('wap_lian', 'https://jq.qq.com/');
INSERT INTO `ku_config` VALUES ('yan_name', '');
INSERT INTO `ku_config` VALUES ('yan_url', '');
INSERT INTO `ku_config` VALUES ('yan_number', '');
INSERT INTO `ku_config` VALUES ('yan_pas', '');
INSERT INTO `ku_config` VALUES ('yan_url1', '');
INSERT INTO `ku_config` VALUES ('yan_number1', '');
INSERT INTO `ku_config` VALUES ('yan_pas1', '');
INSERT INTO `ku_config` VALUES ('coin_nb', '100');
INSERT INTO `ku_config` VALUES ('kaiyuan_url', '');
INSERT INTO `ku_config` VALUES ('ban_url', '');
INSERT INTO `ku_config` VALUES ('guan_url', 'http://kuxiangcms.com/');
INSERT INTO `ku_config` VALUES ('reward', '10');
INSERT INTO `ku_config` VALUES ('reward_gj', '20');
INSERT INTO `ku_config` VALUES ('reward_zs', '300');
INSERT INTO `ku_config` VALUES ('pay_fee_kai', '0.5');
INSERT INTO `ku_config` VALUES ('user_lv', '4');
INSERT INTO `ku_config` VALUES ('reward_money', '5');
INSERT INTO `ku_config` VALUES ('coin_money', '0.5');
INSERT INTO `ku_config` VALUES ('coin_nb_1', '2');
INSERT INTO `ku_config` VALUES ('coin_money_1','0.2');
INSERT INTO `ku_config` VALUES ('coin_nb_2', '3');
INSERT INTO `ku_config` VALUES ('coin_money_2', '0.3');
INSERT INTO `ku_config` VALUES ('user_gj_money', '2');
INSERT INTO `ku_config` VALUES ('gjaddpu_price', '2');
INSERT INTO `ku_config` VALUES ('gjaddgj_price','5');
INSERT INTO `ku_config` VALUES ('zsadd_price', '3');
INSERT INTO `ku_config` VALUES ('user_zs_money', '3');
INSERT INTO `ku_config` VALUES ('carrypay', '1');
INSERT INTO `ku_config` VALUES ('carrypay_money', '100');
DROP TABLE IF EXISTS `ku_cons`;
CREATE TABLE `ku_cons` (
  `out_trade_no` varchar(64) NOT NULL DEFAULT '' COMMENT '单号',
  `name` varchar(255) DEFAULT NULL COMMENT '使用详情',
  `reward` varchar(255) DEFAULT NULL COMMENT '使用金币数',
  `addtime` datetime DEFAULT NULL COMMENT '使用时间',
  `username` varchar(255) DEFAULT NULL COMMENT '付款账号',
  `money` varchar(255) DEFAULT NULL COMMENT '本单提成',
  `user_belong` varchar(255) DEFAULT NULL COMMENT '上级账号',
  `data` int(11) NOT NULL DEFAULT '0' COMMENT '0消费数据1分佣数据',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0已完成1佣金入账2佣金退回3交易无效',
  PRIMARY KEY (`out_trade_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ku_kamilog`;
CREATE TABLE `ku_kamilog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `out_trade_no` varchar(255) DEFAULT NULL COMMENT '订单号',
  `addtime` datetime DEFAULT NULL,
  `quantity` varchar(255) DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  `dhtime` datetime DEFAULT NULL,
  `money` varchar(32) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `download` varchar(255) DEFAULT NULL COMMENT '下载地址',
  `operator` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;
DROP TABLE IF EXISTS `ku_order`;
CREATE TABLE `ku_order` (
  `trade_no` varchar(64) NOT NULL,
  `out_trade_no` varchar(64) NOT NULL COMMENT '订单号',
  `notify_url` varchar(64) DEFAULT NULL,
  `return_url` varchar(64) DEFAULT NULL,
  `type` varchar(20) NOT NULL,
  `name` varchar(64) NOT NULL,
  `username` varchar(255) DEFAULT NULL COMMENT '用户账户',
  `ascription` varchar(255) DEFAULT NULL COMMENT '上级用户',
  `money` decimal(10,2) NOT NULL,
  `coin` varchar(30) DEFAULT NULL,
  `url` varchar(30) DEFAULT NULL,
  `qq` varchar(30) DEFAULT NULL,
  `addtime` datetime DEFAULT NULL,
  `endtime` datetime DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `state` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`trade_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ku_paycarry`;
CREATE TABLE `ku_paycarry` (
 `out_trade_no` varchar(64) DEFAULT NULL COMMENT '提现订单号',
  `number_nc` varchar(255) DEFAULT NULL COMMENT '结算昵称',
  `number_zh` varchar(30) DEFAULT NULL COMMENT '结算账户',
  `username` varchar(255) DEFAULT NULL COMMENT '提交人',
  `addtime` datetime DEFAULT NULL COMMENT '提交时间',
  `money` decimal(10,2) NOT NULL COMMENT '提现金额',
  `fee_money` decimal(10,2) NOT NULL COMMENT '提现扣除的手续费',
  `operation` varchar(255) DEFAULT NULL COMMENT '提现处理人',
  `eidetime` datetime DEFAULT NULL COMMENT '处理时间',
  `state` int(11) NOT NULL DEFAULT '0' COMMENT '0为待处理1处理成功2提现驳回3异常提现冻结'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ku_piracy`;
CREATE TABLE `ku_piracy` (
  `url` varchar(150) NOT NULL,
  `authcode` varchar(100) DEFAULT NULL,
  `dbuser` varchar(150) NOT NULL,
  `dbpwd` varchar(150) NOT NULL,
  `db` varchar(150) NOT NULL,
  `ip` varchar(20) DEFAULT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`url`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ku_power`;
CREATE TABLE `ku_power` (
  `out_trade_no` varchar(64) NOT NULL COMMENT '充值单号',
  `name` varchar(255) DEFAULT NULL COMMENT '产品类型',
  `addtime` datetime DEFAULT NULL COMMENT '创建时间',
  `url` varchar(30) DEFAULT NULL,
  `money` decimal(10,2) NOT NULL COMMENT '金币价格',
  `dhtime` datetime DEFAULT NULL COMMENT '到期时间',
  `type` varchar(20) NOT NULL COMMENT '支付方式',
  `endtime` datetime DEFAULT NULL COMMENT '支付时间',
  `username` varchar(255) DEFAULT NULL COMMENT '支付账号',
  `user_lv` varchar(255) DEFAULT NULL COMMENT '赠送授权数',
  `reward_money` varchar(255) DEFAULT NULL COMMENT '赠送金币数',
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0未完成1已完成2已退款',
  PRIMARY KEY (`out_trade_no`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
DROP TABLE IF EXISTS `ku_user`;
CREATE TABLE `ku_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL COMMENT '账号',
  `pwd` varchar(255) DEFAULT NULL COMMENT '密码',
  `user_qq` varchar(255) DEFAULT NULL COMMENT 'qq',
  `user_name` varchar(255) DEFAULT NULL COMMENT '用户昵称',
  `number_nc` varchar(255) DEFAULT NULL COMMENT '收款昵称',
  `number_zh` varchar(255) DEFAULT NULL COMMENT '收款账号',
  `user_addtime` datetime DEFAULT NULL,
  `user_ip` varchar(30) DEFAULT NULL COMMENT '注册的ip地址',
  `user_limit` int(11) DEFAULT NULL COMMENT '0普通会员1普通代理2高级代理3砖石代理',
  `money` decimal(10,2) NOT NULL COMMENT '赏金余额',
  `user_belong_money` varchar(255) DEFAULT NULL COMMENT '单独设置佣金比例',
  `reward_money` decimal(10,0) NOT NULL COMMENT '金币',
  `tix_money` varchar(255) DEFAULT NULL COMMENT '待提现余额',
  `user_lv` int(11) DEFAULT NULL COMMENT '赠送授权',
  `squan_limit` int(11) NOT NULL DEFAULT '0' COMMENT '修改授权上限',
  `user_belong` varchar(255) DEFAULT NULL COMMENT '上级账号',
  `user_status` int(11) DEFAULT '0' COMMENT '0为正常1为封禁2冻结',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;
--
-- 转存表中的数据 `ku_user`
--
INSERT INTO `ku_user` (`id`, `username`, `pwd`, `user_qq`, `user_name`, `number_nc`, `number_zh`, `user_addtime`, `user_ip`, `user_limit`, `money`, `user_belong_money`, `reward_money`, `tix_money`, `user_lv`, `squan_limit`, `user_belong`, `user_status`) VALUES
(1, '15179086667', 'cf7562e457998d3d3af110a217725901', '6545645565', '5G云资源', '5G云资源', '15179086667', '2019-09-09 16:31:35', '127.0.0.1', 3, '200.00', '', '100', NULL, 0, 0, '15179087228', 0),
(2, '15179087221', 'cf7562e457998d3d3af110a217725901', '2316803263', '5G云资源测试号', NULL, NULL, '2019-09-09 18:09:19', NULL, 1, '0.00', NULL, '100', NULL, 0, 0, '15179087228', 0);
