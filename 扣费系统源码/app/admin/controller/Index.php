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
		
		$this->assign('member',MEMBER_ID);

		//关键词搜索引擎占比
		$this->assign('keyword',$this->logicIndex->keyword());
		//调用各个搜索引擎的消费总额
		$this->assign('price',$this->logicIndex->searchprice());
		//调用今日消费
		$this->assign('todayprice',$this->logicIndex->todayprice());
		
		
	
		
        return $this->fetch('index');
    }
   
}
