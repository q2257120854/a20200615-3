<?php
// +---------------------------------------------------------------------+
// | OneBase    | [ WE CAN DO IT JUST THINK ]                            |
// +---------------------------------------------------------------------+
// | Licensed   | http://www.apache.org/licenses/LICENSE-2.0 )           |
// +---------------------------------------------------------------------+
// | Author     | Bigotry <3162875@qq.com>                               |
// +---------------------------------------------------------------------+
// | Repository | https://gitee.com/Bigotry/OneBase                      |
// +---------------------------------------------------------------------+

namespace app\admin\controller;
use think\Db;
/**
 * 首页控制器
 */
class Index extends AdminBase
{
    
    /**
     * 首页方法
     */
    public function index()
    {
        
        // 获取首页数据
        $index_data = $this->logicAdminBase->getIndexData();
        
        $this->assign('info', $index_data);
		$this->sql();
		$this->assign('member',MEMBER_ID);
		
        return $this->fetch('index');
    }
	
	
	/*
	 * 更新sql
	 * 
	 */
	public function sql()
	{
		
		/*
		 * 更新关键词指数查询价格的数据表
		 */
		$table = Db::query("show tables like 'kf_keyzsprice'");
		
		if(!$table)
		{
			
	         Db::execute("INSERT INTO `kf_menu` VALUES(234, '关键词价格查询', 213, 0, 'admin', 'seo/keywselect', 0, 0, '', 1, 1559469113, 1559468716)");
			 Db::execute("INSERT INTO `kf_menu` VALUES(235, '关键词指数价格', 213, 0, 'admin', 'seo/kwzsprice', 0, 0, '', 1, 1559468753, 1559468753)");
			 Db::execute("INSERT INTO `kf_menu` VALUES(236, '导出', 213, 0, 'admin', 'seo/excel', 1, 0, '', 1, 1559528994, 1559528994)");
			 Db::execute("INSERT INTO `kf_menu` VALUES(237, '充值记录编辑', 224, 0, 'admin', 'seo/chongzhiedit', 1, 0, '', 1, 1560505095, 1560504907)");
			 Db::execute("CREATE TABLE `kf_keyzsprice` ( `id` int(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT NOT NULL COMMENT 'ID', `page_one` varchar(200) NOT NULL COMMENT '第一页价格',`page_two` varchar(200) DEFAULT NULL COMMENT '第二页价格',`zhisu_range` int(11) DEFAULT NULL COMMENT '指数范围',`status` int(3) NOT NULL DEFAULT '1' COMMENT '状态',`create_time` varchar(200) DEFAULT NULL COMMENT '创建时间',`search_engin` varchar(50) DEFAULT NULL COMMENT '搜索引擎',`chenben_one` varchar(200) DEFAULT NULL COMMENT '成本价第一页',`chenben_two` varchar(200) DEFAULT NULL COMMENT '成本价第二页') ENGINE=MyISAM DEFAULT CHARSET=utf8");
		}
		/*
		 * 更新微信公众号二维码
		 */
		$wechat_img = Db('config')->where(['id' => 70,'name' => 'wechat_code','title' => '微信公众号二维码'])->select();
		
		if(empty($wechat_img))
		{
			
			Db::execute("insert into `kf_config` (`id`, `name`, `type`, `title`, `group`, `extra`, `describe`, `create_time`, `update_time`, `status`, `value`, `sort`) values('70','wechat_code','5','微信公众号二维码','1','','','0','0','1','3','0')");
		}

		/*
		 * 更新微信支付
		 */
		$wechatpay = Db('menu')->where(['id' => 241,'name' => '微信支付','pid' => 232])->find();
		if(empty($wechatpay))
		{
			Db::execute("insert into `kf_menu` (`id`,`name`,`pid`,`sort`,`module`,`url`,`is_hide`,`is_shortcut`,`icon`,`status`,`update_time`,`create_time`) values('241','微信支付','232','0','admin','payment/wechatpay','0','0','fa-weixin','1','1562807627','1562807627')");
		}

	}
   
}
