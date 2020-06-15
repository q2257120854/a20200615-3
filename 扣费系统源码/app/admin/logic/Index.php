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

namespace app\admin\logic;
use think\Db;
/**
 * 会员逻辑
 */
class Index extends AdminBase
{
    //首页关键词搜索占比
    public function keyword()
	{
		$member = session('member_info');
		$data = [];
		if($member['leader_id'] == 0){
			//百度
			$data['baidu'] = Db('keywords')->where('search_engine','baidupc')->count();
			//百度移动
			$data['baidumobile'] = Db('keywords')->where('search_engine','baidumobile')->count();
			//360
			$data['sll'] = Db('keywords')->where('search_engine','360pc')->count();
			//360移动
			$data['sllmobile'] = Db('keywords')->where('search_engine','360mobile')->count();
			//搜狗
			$data['sogou'] = Db('keywords')->where('search_engine','sogoupc')->count();
			//搜狗移动
			$data['sogoumobile'] = Db('keywords')->where('search_engine','sogoumobile')->count();
			//神马
			$data['smmobile'] = Db('keywords')->where('search_engine','smmobile')->count();
		}elseif($member['leader_id'] == 1){
			//百度
			$data['baidu'] = Db('keywords')->where(['search_engine' => 'baidupc','userpid' => $member['id']])->count();
			//百度移动
			$data['baidumobile'] = Db('keywords')->where(['search_engine' => 'baidumobile','userpid' => $member['id']])->count();
			//360
			$data['sll'] = Db('keywords')->where(['search_engine' => '360pc','userpid' => $member['id']])->count();
			//360移动
			$data['sllmobile'] = Db('keywords')->where(['search_engine' => '360mobile','userpid' => $member['id']])->count();
			//搜狗
			$data['sogou'] = Db('keywords')->where(['search_engine' => 'sogoupc','userpid' => $member['id']])->count();
			//搜狗移动
			$data['sogoumobile'] = Db('keywords')->where(['search_engine' => 'sogoumobile','userpid' => $member['id']])->count();
			//神马
			$data['smmobile'] = Db('keywords')->where(['search_engine' => 'smmobile','userpid' => $member['id']])->count();
		}else{
			//百度
			$data['baidu'] = Db('keywords')->where(['search_engine' => 'baidupc','userid' => $member['id']])->count();
			//百度移动
			$data['baidumobile'] = Db('keywords')->where(['search_engine' => 'baidumobile','userid' => $member['id']])->count();
			//360
			$data['sll'] = Db('keywords')->where(['search_engine' => '360pc','userid' => $member['id']])->count();
			//360移动
			$data['sllmobile'] = Db('keywords')->where(['search_engine' => '360mobile','userid' => $member['id']])->count();
			//搜狗
			$data['sogou'] = Db('keywords')->where(['search_engine' => 'sogoupc','userid' => $member['id']])->count();
			//搜狗移动
			$data['sogoumobile'] = Db('keywords')->where(['search_engine' => 'sogoumobile','userid' => $member['id']])->count();
			//神马
			$data['smmobile'] = Db('keywords')->where(['search_engine' => 'smmobile','userid' => $member['id']])->count();
		}
	
		return $data;
	}

	
	/*
	 * 各个搜索引擎消费记录总额
	 */    
	public function searchprice()
	{
		$member = session('member_info');
		if($member['leader_id'] == 0){
			//百度
			$data['baidu'] = Db('consumption')->where('search_engine','baidupc')->sum('price');
			//百度移动
			$data['baidumobile'] = Db('consumption')->where('search_engine','baidumobile')->sum('price');
			//360
			$data['sll'] = Db('consumption')->where('search_engine','360pc')->sum('price');
			//360移动
			$data['sllmobile'] = Db('consumption')->where('search_engine','360mobile')->sum('price');
			//搜狗
			$data['sogou'] = Db('consumption')->where('search_engine','sogoupc')->sum('price');
			//搜狗移动
			$data['sogoumobile'] = Db('consumption')->where('search_engine','sogoumobile')->sum('price');
			//神马
			$data['smmobile'] = Db('consumption')->where('search_engine','smmobile')->sum('price');
		}elseif($member['leader_id'] == 1){
			//百度
			$data['baidu'] = Db('consumption')->where(['search_engine' => 'baidupc','userpid' => $member['id']])->sum('price');
			//百度移动
			$data['baidumobile'] = Db('consumption')->where(['search_engine' => 'baidumobile','userpid' => $member['id']])->sum('price');
			//360
			$data['sll'] = Db('consumption')->where(['search_engine' => '360pc','userpid' => $member['id']])->sum('price');
			//360移动
			$data['sllmobile'] = Db('consumption')->where(['search_engine' => '360mobile','userpid' => $member['id']])->sum('price');
			//搜狗
			$data['sogou'] = Db('consumption')->where(['search_engine' => 'sogoupc','userpid' => $member['id']])->sum('price');
			//搜狗移动
			$data['sogoumobile'] = Db('consumption')->where(['search_engine' => 'sogoumobile','userpid' => $member['id']])->sum('price');
			//神马
			$data['smmobile'] = Db('consumption')->where(['search_engine' => 'smmobile','userpid' => $member['id']])->sum('price');
		}else{
			//百度
			$data['baidu'] = Db('consumption')->where(['search_engine' => 'baidupc','userid' => $member['id']])->sum('price');
			//百度移动
			$data['baidumobile'] = Db('consumption')->where(['search_engine' => 'baidumobile','userid' => $member['id']])->sum('price');
			//360
			$data['sll'] = Db('consumption')->where(['search_engine' => '360pc','userid' => $member['id']])->sum('price');
			//360移动
			$data['sllmobile'] = Db('consumption')->where(['search_engine' => '360mobile','userid' => $member['id']])->sum('price');
			//搜狗
			$data['sogou'] = Db('consumption')->where(['search_engine' => 'sogoupc','userid' => $member['id']])->sum('price');
			//搜狗移动
			$data['sogoumobile'] = Db('consumption')->where(['search_engine' => 'sogoumobile','userid' => $member['id']])->sum('price');
			//神马
			$data['smmobile'] = Db('consumption')->where(['search_engine' => 'smmobile','userid' => $member['id']])->sum('price');
		}
		
		return $data;
	}

	/*
	 * 今日消费
	 */
	public function todayprice()
	{
		$member = session('member_info');
		$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));//今日开始时间戳
        $endToday=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1;//今日结束时间戳
        if($member['leader_id'] == 0){
			//百度
			$data['baidu'] = Db('consumption')->where('search_engine','baidupc')->where('create_time','between',[$beginToday,$endToday])->sum('price');
			//百度移动
			$data['baidumobile'] = Db('consumption')->where('search_engine','baidumobile')->where('create_time','between',[$beginToday,$endToday])->sum('price');
			//360
			$data['sll'] = Db('consumption')->where('search_engine','360pc')->where('create_time','between',[$beginToday,$endToday])->sum('price');
			//360移动
			$data['sllmobile'] = Db('consumption')->where('search_engine','360mobile')->where('create_time','between',[$beginToday,$endToday])->sum('price');
			//搜狗
			$data['sogou'] = Db('consumption')->where('search_engine','sogoupc')->where('create_time','between',[$beginToday,$endToday])->sum('price');
			//搜狗移动
			$data['sogoumobile'] = Db('consumption')->where('search_engine','sogoumobile')->where('create_time','between',[$beginToday,$endToday])->sum('price');
			//神马
			$data['smmobile'] = Db('consumption')->where('search_engine','smmobile')->where('create_time','between',[$beginToday,$endToday])->sum('price');
		}elseif($member['leader_id'] == 1){
			//百度
			$data['baidu'] = Db('consumption')->where(['search_engine' => 'baidupc','userpid' => $member['id']])->where('create_time','between',[$beginToday,$endToday])->sum('price');
			//百度移动
			$data['baidumobile'] = Db('consumption')->where(['search_engine' => 'baidumobile','userpid' => $member['id']])->where('create_time','between',[$beginToday,$endToday])->sum('price');
			//360
			$data['sll'] = Db('consumption')->where(['search_engine' => '360pc','userpid' => $member['id']])->where('create_time','between',[$beginToday,$endToday])->sum('price');
			//360移动
			$data['sllmobile'] = Db('consumption')->where(['search_engine' => '360mobile','userpid' => $member['id']])->where('create_time','between',[$beginToday,$endToday])->sum('price');
			//搜狗
			$data['sogou'] = Db('consumption')->where(['search_engine' => 'sogoupc','userpid' => $member['id']])->where('create_time','between',[$beginToday,$endToday])->sum('price');
			//搜狗移动
			$data['sogoumobile'] = Db('consumption')->where(['search_engine' => 'sogoumobile','userpid' => $member['id']])->where('create_time','between',[$beginToday,$endToday])->sum('price');
			//神马
			$data['smmobile'] = Db('consumption')->where(['search_engine' => 'smmobile','userpid' => $member['id']])->where('create_time','between',[$beginToday,$endToday])->sum('price');
		}else{
			//百度
			$data['baidu'] = Db('consumption')->where(['search_engine' => 'baidupc','userid' => $member['id']])->where('create_time','between',[$beginToday,$endToday])->sum('price');
			//百度移动
			$data['baidumobile'] = Db('consumption')->where(['search_engine' => 'baidumobile','userid' => $member['id']])->where('create_time','between',[$beginToday,$endToday])->sum('price');
			//360
			$data['sll'] = Db('consumption')->where(['search_engine' => '360pc','userid' => $member['id']])->where('create_time','between',[$beginToday,$endToday])->sum('price');
			//360移动
			$data['sllmobile'] = Db('consumption')->where(['search_engine' => '360mobile','userid' => $member['id']])->where('create_time','between',[$beginToday,$endToday])->sum('price');
			//搜狗
			$data['sogou'] = Db('consumption')->where(['search_engine' => 'sogoupc','userid' => $member['id']])->where('create_time','between',[$beginToday,$endToday])->sum('price');
			//搜狗移动
			$data['sogoumobile'] = Db('consumption')->where(['search_engine' => 'sogoumobile','userid' => $member['id']])->where('create_time','between',[$beginToday,$endToday])->sum('price');
			//神马
			$data['smmobile'] = Db('consumption')->where(['search_engine' => 'smmobile','userid' => $member['id']])->where('create_time','between',[$beginToday,$endToday])->sum('price');
		}

		return $data;	
	}

	/*
	 * 系统消息
	 */
	public function systemMessage(){
		$member = session('member_info');
		
		if($member['leader_id'] == 0){
			//待审核的关键词
			$system['jkkeyword'] = Db('keywords')->where(['jk_status' => [['gt','-2'],['lt',1]]])->count();
			//申请停止优化的关键词
			$system['yhkeyword'] = Db('keywords')->where(['youhua' => [['elt',0],['egt','-1']]])->count();
			//申请报错的任务
			$system['errkeyword'] = Db('keywords')->where(['applyerror' => 0])->count();
			//已经处理的报错任务
			//$system['succkeyword'] = Db('keywords')->where(['applyerror' => 2])->count();
		}elseif($member['leader_id'] == 1){
			//待审核的关键词
			$system['jkkeyword'] = Db('keywords')->where(['jk_status' => '-1','userpid' => $member['id']])->count();
			//申请停止优化的关键词
			$system['yhkeyword'] = Db('keywords')->where(['youhua' => 0,'userpid' => $member['id']])->count();
			//申请报错的任务
			$system['errkeyword'] = Db('keywords')->where(['applyerror' => 0,'userpid' => $member['id']])->count();
			//已经处理的报错任务
			//$system['succkeyword'] = Db('keywords')->where(['applyerror' => 2,'userpid' => $member['id']])->count();
		}else{
			//待审核的关键词
			$system['jkkeyword'] = Db('keywords')->where(['jk_status' => [['gt','-2'],['lt',1]],'userid' => $member['id']])->count();
			//申请停止优化的关键词
			$system['yhkeyword'] = Db('keywords')->where(['youhua' => [['gt','-2'],['lt','1']],'userid' => $member['id']])->count();
			//申请报错的任务
			$system['errkeyword'] = Db('keywords')->where(['applyerror' => 0,'userid' => $member['id']])->count();
			//已经处理的报错任务
			//$system['succkeyword'] = Db('keywords')->where(['applyerror' => 2,'userid' => $member['id']])->count();
		}
		
		$system['allmessage'] = array_sum($system);
	
		
		return $system;
	}
}
