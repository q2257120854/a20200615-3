<?php
/*
 * 更新sql
 */
namespace app\common\logic;
use think\Db;
class Upsql extends LogicBase
{
	/*
	 * 更新sql
	 */
	public function sql()
	{
		//--------------------------------------------------------2019-6-27更新关键词指数查询价格的数据表
		$table = Db::execute("show tables like 'kf_keyzsprice'");
		if(!$table)
		{
			
	         Db::execute("INSERT INTO `kf_menu` VALUES(234, '关键词价格查询', 213, 0, 'admin', 'seo/keywselect', 0, 0, '', 1, 1559469113, 1559468716)");
			 Db::execute("INSERT INTO `kf_menu` VALUES(235, '关键词指数价格', 213, 0, 'admin', 'seo/kwzsprice', 0, 0, '', 1, 1559468753, 1559468753)");
			 Db::execute("INSERT INTO `kf_menu` VALUES(236, '导出', 213, 0, 'admin', 'seo/excel', 1, 0, '', 1, 1559528994, 1559528994)");
			 Db::execute("INSERT INTO `kf_menu` VALUES(237, '充值记录编辑', 224, 0, 'admin', 'seo/chongzhiedit', 1, 0, '', 1, 1560505095, 1560504907)");
			 Db::execute("CREATE TABLE `kf_keyzsprice` ( `id` int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL COMMENT 'ID', `page_one` varchar(200) NOT NULL COMMENT '第一页价格',`page_two` varchar(200) DEFAULT NULL COMMENT '第二页价格',`zhisu_range` int(11) DEFAULT NULL COMMENT '指数范围',`status` int(3) NOT NULL DEFAULT '1' COMMENT '状态',`create_time` varchar(200) DEFAULT NULL COMMENT '创建时间',`search_engin` varchar(50) DEFAULT NULL COMMENT '搜索引擎',`chenben_one` varchar(200) DEFAULT NULL COMMENT '成本价第一页',`chenben_two` varchar(200) DEFAULT NULL COMMENT '成本价第二页') ENGINE=MyISAM DEFAULT CHARSET=utf8");
		}
		//--------------------------------------------------------2019-6-27更新结束
		
		//--------------------------------------------------------2019-7-4更新公众号查询,微信二维码上传
		$wechat_img = Db('config')->where(['id' => 70,'name' => 'wechat_code','title' => '微信公众号二维码'])->select();
		if(empty($wechat_img))
		{
			
			Db::execute("insert into `kf_config` (`id`, `name`, `type`, `title`, `group`, `extra`, `describe`, `create_time`, `update_time`, `status`, `value`, `sort`) values('70','wechat_code','5','微信公众号二维码','1','','','0','0','1','3','0')");
		}
		//--------------------------------------------------------2019-7-4更新结束
		
		//--------------------------------------------------------2019-8-9更新注册会员自动归到测试代理下
		$memberlist = Db('member')->where(['leader_id' => 1])->select();
		$data = [];
		foreach($memberlist as $k => $v)
		{
			$data[] = Db('auth_group_access')->where(['member_id' => $v['id']])->find();
			if($data[$k]['group_id'] == 19)
			{
				Db('member')->where(['id' => $data[$k]['member_id']])->update(['leader_id' => '967']);
			}
			
		
		}
		$list = Db('member')->where(['id' => 967])->find();
		if(empty($list)){
			Db::execute("INSERT INTO `kf_member` (`id`, `nickname`, `username`, `password`, `email`, `mobile`, `update_time`, `create_time`, `status`, `leader_id`, `is_share_member`, `is_inside`, `price`, `beizhu`) VALUES(967, '测试代理', '测试代理', '592e1e2b60358e3310d1c7ad674c5264', 'sadsada@qq.com', '', 1564974062, 1550406527, 1, 1, 1, 1, '90.00', '')");
		}else if($list['status'] == '-1'){
			Db('member')->where(['id' => $list['id']])->update(['status' => '1']);
		}
		//--------------------------------------------------------2019-8-9更新结束
		
		
		//--------------------------------------------------------2019-8-19更新
		//----------会员表下新增字段rank
		$rank = Db::execute('describe `kf_member` `rank`');//判断member表下rank字段是否存在,不存在就创建rank,wechat,qq字段
		if(!$rank){
				Db::execute('alter table `kf_member` add (rank tinyint(1) default 0,wechat varchar(50),qq varchar(50))');
		}
		
		//-------删除菜单表创建
		$menu = Db('menu')->where(['id' => 275])->find();
		if(empty($menu)){
			Db::execute('drop table kf_menu');
			Db::execute("CREATE TABLE `kf_menu` (
				  `id` int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL COMMENT '文档ID',
				  `name` varchar(50) NOT NULL DEFAULT '' COMMENT '菜单名称',
				  `pid` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '上级分类ID',
				  `sort` int(10) UNSIGNED NOT NULL DEFAULT '0' COMMENT '排序（同级有效）',
				  `module` char(20) NOT NULL DEFAULT '' COMMENT '模块',
				  `url` char(255) NOT NULL DEFAULT '' COMMENT '链接地址',
				  `is_hide` tinyint(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT '是否隐藏',
				  `is_shortcut` tinyint(1) UNSIGNED NOT NULL DEFAULT '0' COMMENT '是否快捷操作',
				  `icon` char(30) NOT NULL DEFAULT '' COMMENT '图标',
				  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '状态',
				  `update_time` int(11) UNSIGNED NOT NULL DEFAULT '0',
				  `create_time` int(11) UNSIGNED NOT NULL DEFAULT '0'
				) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='菜单表'");
			Db::execute("INSERT INTO `kf_menu` (`id`, `name`, `pid`, `sort`, `module`, `url`, `is_hide`, `is_shortcut`, `icon`, `status`, `update_time`, `create_time`) VALUES
				(1, '系统首页', 0, 0, 'admin', 'index/index', 0, 0, 'fa-home', 1, 1565449921, 0),
				(16, '会员管理', 0, 4, 'admin', 'member/index', 0, 0, 'fa-users', 1, 1565450592, 0),
				(17, '代理列表', 16, 1, 'admin', 'member/memberlist', 0, 1, 'fa-list', 1, 1550407287, 0),
				(18, '代理添加', 16, 2, 'admin', 'member/memberadd', 1, 0, 'fa-user-plus', 1, 1550408948, 0),
				(27, '权限管理', 16, 3, 'admin', 'auth/grouplist', 0, 0, 'fa-key', 1, 1561517055, 0),
				(32, '权限组编辑', 27, 0, 'admin', 'auth/groupedit', 1, 0, '', 1, 1492002620, 0),
				(34, '授权', 27, 0, 'admin', 'auth_manager/group', 1, 0, '', 1, 0, 0),
				(35, '菜单授权', 27, 0, 'admin', 'auth/menuauth', 1, 0, '', 1, 1492095653, 0),
				(36, '会员授权', 27, 0, 'admin', 'auth_manager/memberaccess', 1, 0, '', 1, 0, 0),
				(68, '系统管理', 0, 1, 'admin', 'config/group', 0, 0, 'fa-wrench', 1, 1565450579, 0),
				(69, '系统设置', 68, 3, 'admin', 'config/setting', 0, 0, 'fa-cogs', 1, 1520505460, 0),
				(70, '配置管理', 68, 2, 'admin', 'config/index', 0, 0, 'fa-cog', 1, 1520505457, 0),
				(71, '配置编辑', 70, 0, 'admin', 'config/configedit', 1, 0, '', 1, 1491674180, 0),
				(72, '配置删除', 70, 0, 'admin', 'config/configDel', 1, 0, '', 1, 1491674201, 0),
				(73, '配置添加', 70, 0, 'admin', 'config/configadd', 0, 0, 'fa-plus', 1, 1491666947, 0),
				(75, '菜单管理', 68, 1, 'admin', 'menu/index', 0, 0, 'fa-th-large', 1, 1520505453, 0),
				(98, '菜单编辑', 75, 0, 'admin', 'menu/menuedit', 1, 0, '', 1, 1512459021, 0),
				(124, '菜单列表', 75, 0, 'admin', 'menu/menulist', 0, 1, 'fa-list', 1, 1491318271, 0),
				(125, '菜单添加', 75, 0, 'admin', 'menu/menuadd', 0, 0, 'fa-plus', 1, 1491318307, 0),
				(126, '配置列表', 70, 0, 'admin', 'config/configlist', 0, 1, 'fa-list', 1, 1491666890, 1491666890),
				(127, '菜单状态', 75, 0, 'admin', 'menu/setstatus', 1, 0, '', 1, 1520506673, 1491674128),
				(128, '权限组添加', 27, 0, 'admin', 'auth/groupadd', 1, 0, '', 1, 1492002635, 1492002635),
				(134, '授权', 17, 0, 'admin', 'member/memberauth', 1, 0, '', 1, 1492238568, 1492101426),
				(135, '回收站', 68, 4, 'admin', 'trash/trashlist', 0, 0, ' fa-recycle', 1, 1520505468, 1492311462),
				(136, '回收站数据', 135, 0, 'admin', 'trash/trashdatalist', 1, 0, 'fa-database', 1, 1492319477, 1492319392),
				(140, '服务管理', 68, 5, 'admin', 'service/servicelist', 0, 0, 'fa-server', 1, 1520505473, 1492352972),
				(141, '插件管理', 68, 6, 'admin', 'addon/index', 0, 0, 'fa-puzzle-piece', 1, 1520505475, 1492427605),
				(142, '钩子列表', 141, 0, 'admin', 'addon/hooklist', 0, 0, 'fa-anchor', 1, 1492427665, 1492427665),
				(143, '插件列表', 141, 0, 'admin', 'addon/addonlist', 0, 0, 'fa-list', 1, 1492428116, 1492427838),
				(144, '文章管理', 0, 6, 'admin', 'article/index', 0, 0, 'fa-edit', 1, 1565450676, 1492480187),
				(145, '文章列表', 144, 0, 'admin', 'article/articlelist', 0, 1, 'fa-list', 1, 1492480245, 1492480245),
				(146, '文章分类', 144, 0, 'admin', 'article/articlecategorylist', 0, 0, 'fa-list', 1, 1492480359, 1492480342),
				(147, '文章分类编辑', 146, 0, 'admin', 'article/articlecategoryedit', 1, 0, '', 1, 1492485294, 1492485294),
				(148, '分类添加', 144, 0, 'admin', 'article/articlecategoryadd', 0, 0, 'fa-plus', 1, 1492486590, 1492486576),
				(149, '文章添加', 144, 0, 'admin', 'article/articleadd', 0, 0, 'fa-plus', 1, 1492518453, 1492518453),
				(150, '文章编辑', 145, 0, 'admin', 'article/articleedit', 1, 0, '', 1, 1492879589, 1492879589),
				(151, '插件安装', 143, 0, 'admin', 'addon/addoninstall', 1, 0, '', 1, 1492879763, 1492879763),
				(152, '插件卸载', 143, 0, 'admin', 'addon/addonuninstall', 1, 0, '', 1, 1492879789, 1492879789),
				(153, '文章删除', 145, 0, 'admin', 'article/articledel', 1, 0, '', 1, 1492879960, 1492879960),
				(154, '文章分类删除', 146, 0, 'admin', 'article/articlecategorydel', 1, 0, '', 1, 1492879995, 1492879995),
				(156, '驱动安装', 140, 0, 'admin', 'service/driverinstall', 1, 0, '', 1, 1502267009, 1502267009),
				(157, '接口管理', 0, 7, 'admin', 'api/index', 0, 0, 'fa fa-book', 1, 1565450682, 1504000434),
				(158, '分组管理', 157, 0, 'admin', 'api/apigrouplist', 0, 0, 'fa fa-fw fa-th-list', 1, 1504000977, 1504000723),
				(159, '分组添加', 157, 0, 'admin', 'api/apigroupadd', 0, 0, 'fa fa-fw fa-plus', 1, 1504004646, 1504004646),
				(160, '分组编辑', 157, 0, 'admin', 'api/apigroupedit', 1, 0, '', 1, 1504004710, 1504004710),
				(161, '分组删除', 157, 0, 'admin', 'api/apigroupdel', 1, 0, '', 1, 1504004732, 1504004732),
				(162, '接口列表', 157, 0, 'admin', 'api/apilist', 0, 0, 'fa fa-fw fa-th-list', 1, 1504172326, 1504172326),
				(163, '接口添加', 157, 0, 'admin', 'api/apiadd', 0, 0, 'fa fa-fw fa-plus', 1, 1504172352, 1504172352),
				(164, '接口编辑', 157, 0, 'admin', 'api/apiedit', 1, 0, '', 1, 1504172414, 1504172414),
				(165, '接口删除', 157, 0, 'admin', 'api/apidel', 1, 0, '', 1, 1504172435, 1504172435),
				(166, '优化维护', 0, 6, 'admin', 'maintain/index', 0, 0, 'fa-legal', 1, 1520506753, 1505387256),
				(168, '数据库', 166, 0, 'admin', 'maintain/database', 0, 0, 'fa-database', 1, 1505539670, 1505539394),
				(169, '数据备份', 168, 0, 'admin', 'database/databackup', 0, 0, 'fa-download', 1, 1506309900, 1505539428),
				(170, '数据还原', 168, 0, 'admin', 'database/datarestore', 0, 0, 'fa-exchange', 1, 1506309911, 1505539492),
				(171, '文件清理', 166, 0, 'admin', 'fileclean/cleanlist', 0, 0, 'fa-file', 1, 1506310152, 1505788517),
				(174, '行为日志', 166, 0, 'admin', 'log/loglist', 0, 1, 'fa-street-view', 1, 1507201516, 1507200836),
				(203, '友情链接', 68, 7, 'admin', 'blogroll/index', 0, 0, 'fa-link', 1, 1520505723, 1520505717),
				(204, '链接列表', 203, 0, 'admin', 'blogroll/blogrolllist', 0, 0, 'fa-th', 1, 1520505777, 1520505777),
				(205, '链接添加', 203, 0, 'admin', 'blogroll/blogrolladd', 0, 0, 'fa-plus', 1, 1520505826, 1520505826),
				(206, '链接编辑', 203, 0, 'admin', 'blogroll/blogrolledit', 1, 0, 'fa-edit', 1, 1520505863, 1520505863),
				(207, '链接删除', 203, 0, 'admin', 'blogroll/blogrolldel', 1, 0, 'fa-minus', 1, 1520505889, 1520505889),
				(208, '菜单排序', 75, 0, 'admin', 'menu/setsort', 1, 0, '', 1, 1520506696, 1520506696),
				(209, '会员编辑', 16, 2, 'admin', 'member/memberedit', 1, 0, 'fa-edit', 1, 1520505510, 0),
				(210, '修改密码', 1, 2, 'admin', 'member/editpassword', 1, 0, 'fa-edit', 1, 1520505510, 0),
				(211, '用户列表', 16, 2, 'admin', 'member/memberyhlist', 0, 0, 'fa-user', 1, 1550408937, 1550408902),
				(212, '用户添加', 16, 0, 'admin', 'member/memberaddyh', 1, 0, 'fa-plus', 1, 1550410632, 1550410632),
				(213, '关键词管理', 0, 3, 'admin', 'seo', 0, 0, 'fa-cloud', 1, 1565572203, 1550563051),
				(214, '网站管理', 0, 2, 'admin', 'seo/', 0, 0, 'fa-stop-circle', 1, 1565450639, 1550563157),
				(215, '添加网站', 214, 1, 'admin', 'seo/webadd', 0, 0, 'fa-plus', 1, 1565428420, 1550567601),
				(216, 'ajax获取用户数据', 213, 0, 'admin', 'seo/getuser', 1, 0, '', 1, 1550582437, 1550582437),
				(217, '修改网站', 214, 1, 'admin', 'seo/webedit', 1, 0, '', 1, 1565428582, 1550624332),
				(218, '关键词列表', 213, 2, 'admin', 'seo/keywordlist', 0, 0, '', 1, 1550736613, 1550634320),
				(219, '添加关键词', 213, 2, 'admin', 'seo/keywordadd', 1, 0, '', 1, 1559629617, 1550653114),
				(220, '删除网站', 214, 1, 'admin', 'seo/webdel', 1, 0, '', 1, 1565428585, 1550734430),
				(221, '修改关键词', 213, 2, 'admin', 'seo/keywordedit', 1, 0, '', 1, 1559629114, 1550736676),
				(222, '删除关键词', 213, 2, 'admin', 'seo/keyworddel', 1, 0, '', 1, 1550736728, 1550736712),
				(223, '充值', 213, 3, 'admin', 'seo/chongzhi', 1, 0, '', 1, 1550888775, 1550796537),
				(224, '充值记录', 232, 3, 'admin', 'seo/chongzhilist', 0, 0, '', 1, 1553325029, 1550802296),
				(225, '消费记录', 232, 0, 'admin', 'seo/xiaofeilist', 0, 0, '', 1, 1553325015, 1550802311),
				(226, '关键词历史排名', 213, 10, 'admin', 'seo/keywordlistlog', 0, 0, '', 1, 1565785753, 1550911994),
				(227, '短信接口管理', 0, 1, 'admin', 'sms', 0, 0, '', -1, 1551099505, 1551096541),
				(228, '短信接口列表', 227, 0, 'admin', 'sms/smslist', 0, 0, '', 1, 1551096570, 1551096570),
				(229, '修改网站状态', 214, 0, 'admin', 'seo/webstatus', 1, 0, '', 1, 1565428576, 1551841370),
				(230, '批量修改关键词', 213, 0, 'admin', 'seo/kewords_update_all', 1, 0, '', 1, 1565320810, 1553324836),
				(231, '客户消费统计', 232, 0, 'admin', 'seo/consume', 0, 0, '', 1, 1553325000, 1553324928),
				(232, '财务统计', 0, 5, 'admin', 'seo/cw', 0, 0, 'fa-credit-card', 1, 1565450668, 1553324975),
				(233, '补录排名', 213, 0, 'admin', 'seo/bulu', 1, 0, '', 1, 1553406888, 1553406888),
				(234, '关键词价格查询', 213, 0, 'admin', 'keyword/keywselect', 0, 0, '', 1, 1564994796, 1559468716),
				(235, '关键词指数价格', 213, 0, 'admin', 'seo/kwzsprice', 0, 0, '', 1, 1564995537, 1559468753),
				(236, '导出', 213, 0, 'admin', 'seo/excel', 1, 0, '', 1, 1559528994, 1559528994),
				(237, '充值记录编辑', 224, 0, 'admin', 'seo/chongzhiedit', 1, 0, '', 1, 1560505095, 1560504907),
				(238, '网站列表导出', 214, 0, 'admin', 'seo/webexcel', 1, 0, '', 1, 1565428573, 1562404643),
				(241, '微信支付', 232, 0, 'admin', 'payment/wechatpay', 0, 0, 'fa-weixin', 1, 1562807627, 1562807627),
				(245, '微信支付', 232, 0, 'admin', 'payment/wechatpay', 1, 0, 'fa-weixin', -1, 1562807627, 1562807627),
				(246, '微信支付调用', 232, 0, 'admin', 'payment/prepay', 1, 0, 'fa-weixin', 1, 1562807627, 1562807627),
				(247, '价格比例', 16, 0, 'admin', 'discount', 0, 0, 'fa-credit-card-alt', 1, 1564823807, 1564823807),
				(248, '代理折扣比例', 247, 0, 'admin', 'discount/agency', 0, 0, 'fa-credit-card-alt', -1, 1564824746, 1564824746),
				(249, '会员关键词比例', 247, 1, 'admin', 'discount/member', 0, 0, 'fa-credit-card-alt', 1, 1564824960, 1564824960),
				(250, '关键词比例列表', 247, 2, 'admin', 'discount/discountlist', 0, 0, 'fa-credit-card-alt', 1, 1564824996, 1564824991),
				(251, '折扣编辑', 247, 0, 'admin', 'discount/discountedit', 1, 0, '', 1, 1564975178, 1564975092),
				(252, '关键词搜索', 213, 0, 'admin', 'keyword/keysearch', 1, 0, '', 1, 1565139987, 1565139987),
				(253, '提交关键词', 213, 0, 'admin', 'keyword/addkeyword', 1, 0, '', 1, 1565231373, 1565231373),
				(254, '网站列表', 214, 0, 'admin', 'Seo/weblist', 0, 0, '', 1, 1565428564, 1565428564),
				(255, '未优化的站点', 214, 0, 'admin', 'seo/weblist?status=0', 0, 0, '', 1, 1565428722, 1565428670),
				(256, '收入', 214, 0, 'admin', 'seo/money', 1, 0, 'fa-money', 1, 1565579430, 1565579430),
				(257, '图形数据列表', 214, 0, 'admin', 'seo/webtuxing', 1, 0, '', 1, 1565579882, 1565579882),
				(266, '停用关键词', 213, 0, 'admin', 'seo/stopkeyword', 1, 0, '', 1, 1565773936, 1565773420),
				(267, '待审核任务', 213, 3, 'admin', 'seo/keywordlist?shenhe=1', 0, 0, '', 1, 1565785431, 1565785431),
				(268, '审核不通过任务', 213, 4, 'admin', 'seo/keywordlist?shenhebtg=1', 0, 0, '', 1, 1565785455, 1565785455),
				(269, '申请停止优化的任务', 213, 5, 'admin', 'seo/keywordlist?tzshyouhua=1', 0, 0, '', 1, 1565785652, 1565785501),
				(270, '已停止优化的任务', 213, 6, 'admin', 'seo/keywordlist?tzyouhua=1', 0, 0, '', 1, 1565785550, 1565785519),
				(271, '申请报错的任务', 213, 7, 'admin', 'seo/keywordlist?applyerror=1', 0, 0, '', 1, 1565785572, 1565785572),
				(272, '已处理报错任务', 213, 8, 'admin', 'seo/keywordlist?applysuccess=1', 0, 0, '', 1, 1565785586, 1565785586),
				(273, '提交报错', 213, 0, 'admin', 'seo/applyerror', 1, 0, '', 1, 1566292399, 1566292399),
				(274, '删除网站需审核', 214, 0, 'admin', 'seo/delweb', 1, 0, '', 1, 1566348007, 1566348007),
				(275, '关键词按钮审核', 213, 0, 'admin', 'seo/statuskeyword', 1, 0, '', 1, 1566352232, 1566352232)");
			
		}
		//-------删除menu创建结束
		
		//-------创建discount数据表
		$discount = Db::execute("show tables like 'kf_discount'");
		if(!$discount){
			Db::execute("CREATE TABLE `kf_discount` (
			  `id` int(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL COMMENT '主键id',
			  `user_id` int(11) NOT NULL COMMENT '用户id',
			  `rank_id` int(1) NOT NULL COMMENT '级别id',
			  `discount` decimal(5,2) DEFAULT NULL COMMENT '折扣',
			  `create_time` varchar(20) DEFAULT NULL COMMENT '创建时间',
			  `status` tinyint(1) DEFAULT '1'
			) ENGINE=MyISAM DEFAULT CHARSET=utf8");
		}
		//-----创建discount数据表结束
		
		//-----关键词表增加字段
		$keywordbeizhu = Db::execute('describe `kf_keywords` `youhua`');
		if(!$keywordbeizhu){
			Db::execute('alter table `kf_keywords` add (youhua tinyint(1) default 1,beizhu varchar(255) default null,applyerror tinyint(1) default 1,applyerrbeizhu varchar(255) default null,dllirun_one decimal(10,2),ptlirun_one decimal(10,2),dllirun_two decimal(10,2),ptlirun_two decimal(10,2),jujue varchar(255))');
		
		}
		//-----关键词表增加字段结束
		
		//------weblist表字段下增加delweb字段
		$delweb = Db::execute('describe `kf_weblist` `delweb`');
		if(!$delweb){
			Db::execute('alter table `kf_weblist` add `delweb` tinyint(1) default 1');
		}
		//-----weblist表下增加字段结束
		//-----修改config下的常用配置项
		$apiweb = Db('config')->where(['id' => '56'])->find();
		if($apiweb['group'] != 1){
			Db('config')->where(['id' => '56'])->update(['group' => 1]);
			Db('config')->where(['id' => '67'])->update(['group' => 1]);
			Db('config')->where(['id' => '68'])->update(['group' => 1]);
			Db('config')->where(['id' => '49'])->update(['status' => '-1']);
			Db('config')->where(['id' => '55'])->update(['status' => '-1']);
			
		}
		//-----修改config下的常用配置项结束
		
		
		
		//---------------------------------------------2019-8-19更新结束


		//--------------------------------------------2020-1-9更新
		if(Db::name('menu')->where(['id' => 267, 'is_hide' => 0, 'name' => '待审核任务'])->find()){
			Db::name('menu')->where('id', 267)->update(['is_hide' => 1, 'update_time' => time()]);//待审核关键词
			Db::name('menu')->where('id', 268)->update(['is_hide' => 1, 'update_time' => time()]);//审核不通过任务
			Db::name('menu')->where('id', 269)->update(['is_hide' => 1, 'update_time' => time()]);//申请停止优化的任务
			Db::name('menu')->where('id', 270)->update(['is_hide' => 1, 'update_time' => time()]);//	已停止优化的任务
			Db::name('menu')->where('id', 271)->update(['is_hide' => 1, 'update_time' => time()]);//	申请报错的任务
			Db::name('menu')->where('id', 272)->update(['is_hide' => 1, 'update_time' => time()]);//	已处理报错任务
		}
		
		//--------------------------------------------2020-1-9更新结束
		
		//-----------------------------------------------------2020-3-2更新
		if(!Db::name('menu')->where(['name' => '消费记录导出'])->find()){
			Db::name('menu')->insert(['name' => '消费记录导出', 'pid'  => 213, 'sort' => 222, 'module' => 'admin', 'url' => 'Seo/xiaofeiexcel', 'is_hide' => 1, 'is_shortcut' => 0, 'icon' => '', 'status' => 1, 'update_time' => time(), 'create_time' => time()]);
		}
		
		
		
		//-----修改权限表
		
		$this->access();
		
		//-----修改权限表结束
	}//sqlend
	
	
	/*
	 * 修改权限表
	 */
	public function access()
	{
		$access18 = Db('auth_group')->where(['id' => 18])->find();
		if(!empty($access18)){
			Db::execute("UPDATE `kf_auth_group` SET rules='1,210,214,256,257,274,229,238,254,255,215,217,220,213,266,273,275,216,230,233,234,236,252,253,218,221,267,223,268,269,270,271,272,276,16,212,247,251,249,250,209,211,232,225,231,241,246,224' where id=18");
		}
		$access19 = Db('auth_group')->where(['id' => 19])->find();
		if(!empty($access19)){
			Db::execute("UPDATE `kf_auth_group` SET rules='1,210,214,257,274,229,238,254,255,215,217,220,213,266,273,275,216,233,234,236,252,253,218,221,267,223,268,269,270,271,272,276,232,225,241,246,224' where id=19");
		}
		
		
	}
	
}//classend
