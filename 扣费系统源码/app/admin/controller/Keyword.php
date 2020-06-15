<?php
/*
 * 关键词价格查询
 * 
 */
namespace app\admin\controller;
use think\Db;


class Keyword extends AdminBase
{
	/*
	 * 关键词价格查询
	 */
	public function keywselect()
	{
		
		$this->assign('weblist',$this->logicKeyword->webList());
		$member = session('member_info');
		if($member['id'] == 1)
		{
			$this->assign('access',1);
		}else{
			$access = Db('auth_group_access')->where(['member_id' => $member['id']])->find();
			$this->assign('access',$access['group_id']);
		}
		return $this->fetch();
	}
	
	/*
	 * 新增关键词
	 */ 
	public function addkeyword()
	{
		$params = $this->param;
		
		$keywords = $params['kwd'];//关键词
		$search = $params['search_engine'];//搜索引擎
		unset($params['keyword']);//删除textarea里面的数据
		//获取网站信息
		$web = Db('weblist')->where(['id' => $params['web_name']])->find();
		//判断用户id 是1就是管理员不需要审核,如果id等于网站的userpid就是代理用户需要管理员审核,如果等于userid就需要前面两级审核
		if(MEMBER_ID == 1)
		{
			$jk_status = '1';
			$youhua = 1;
		}else if(MEMBER_ID == $web['userpid']){
			$jk_status = '0';
			$youhua = 2;
		}else if(MEMBER_ID == $web['userid']){
			$jk_status = '-1';
			$youhua = 2;
		}
		//在查询添加网站的会员比例,先查找会员信息
		$member = Db('member')->where(['id' => $web['userid']])->find();
		//在查询会员的代理是否添加了比例没添加就是原价
		$discount = Db('discount')->where(['user_id' => $member['leader_id'],'rank_id' => $member['rank']])->find();
		$data = [];//定义一个空数组
		$i = 0;
		if(empty($discount)){
			foreach($keywords as $key => $val)
			{
				$data[$val] = $this->keys($val);
			
				foreach($search as $k =>$v)
				{
					//查询关键词和该搜索引擎添加没有,没添加就添加,添加了就不再次添加
					$keys = Db('keywords')->where(['userid' => $web['userid'],'userpid' => $web['userpid'],'web_id' => $web['id'],'keywords' => $val,'search_engine' => $v])->find();
					
					if(empty($keys))
					{
						$params = [
							'web_id' => $web['id'],
							'userid' => $web['userid'],
							'userpid' => $web['userpid'],
							'create_time' => time(),
							'jk_status' => $jk_status,
							'keywords' => $val,
							'search_engine' => $v,
							'page_one' => $data[$val][$v]['page_one'],
							'page_tow' => $data[$val][$v]['page_two'],
							'page_one_cb' => $data[$val][$v]['chenben_one'],
							'page_tow_cb' => $data[$val][$v]['chenben_two'],
							'youhua' => $youhua,
							'dllirun_one' => 0,//代理利润第一页
							'ptlirun_one' => sprintf("%.2f",$data[$val][$v]['page_one'] - $data[$val][$v]['chenben_one']),//平台利润第一页
							'dllirun_two' => 0,//代理利润第二页
							'ptlirun_two' => sprintf("%.2f",$data[$val][$v]['page_two'] - $data[$val][$v]['chenben_two']),//平台利润第一页
						];
						$info[] = Db('keywords')->insert($params);
						++$i;
					}
					
				}
			}
		}else{
			foreach($keywords as $key => $val)
			{
				$data[$val] = $this->keys($val);
				foreach($search as $k =>$v)
				{
					//查询关键词和该搜索引擎添加没有,没添加就添加,添加了就提示
					$keys = Db('keywords')->where(['userid' => $web['userid'],'userpid' => $web['userpid'],'web_id' => $web['id'],'keywords' => $val,'search_engine' => $v])->find();
						if(empty($keys)){
							$params = [
								'web_id' => $web['id'],
								'userid' => $web['userid'],
								'userpid' => $web['userpid'],
								'jk_status' => $jk_status,
								'create_time' => time(),
								'keywords' => $val,
								'search_engine' => $v,
								'page_one' => sprintf("%.2f",$data[$val][$v]['page_one'] * $discount['discount'] / 100),
								'page_tow' => sprintf("%.2f",$data[$val][$v]['page_two'] * $discount['discount'] / 100),
								'youhua' => $youhua,
								'page_one_cb' => $data[$val][$v]['chenben_one'],
								'page_tow_cb' => $data[$val][$v]['chenben_two'],
								'dllirun_one' => sprintf("%.2f",$data[$val][$v]['page_one'] * $discount['discount'] / 100 - $data[$val][$v]['page_one']),//代理利润第一页
								'ptlirun_one' => sprintf("%.2f",$data[$val][$v]['page_one'] - $data[$val][$v]['chenben_one']),//平台利润第一页
								'dllirun_two' => sprintf("%.2f",$data[$val][$v]['page_two'] * $discount['discount'] / 100 - $data[$val][$v]['chenben_two']),//代理利润第二页
								'ptlirun_two' => sprintf("%.2f",$data[$val][$v]['page_two'] - $data[$val][$v]['chenben_two']),//平台利润第二页

							];
							$info[] = Db('keywords')->insert($params);
							++$i;
						}
					
				}
			}
		}
		
		if($i == array_sum($info)){
			return 1;
		}else{
			return 2;
		}
	}
	/*
	 * 字符串转换html返回
	 * 
	 */ 
	public function gethtml($data = [],$rank = '')
	{
		$result = '';
		if(empty($rank))
		{
			foreach(array_keys($data) as $k => $v)
				{
					$result .= '<tr class="text-center">
													<td>
								                        <label class="quan">
								                            <input type="checkbox" name="kwd[]" value="'. $v .'">
								                        </label>
									                </td>
													<td class="text-center">'. $v .'</td>
													<td class="text-center">'. '¥' . $data[$v]['baidupc']['page_one'] . '/¥' . $data[$v]['baidupc']['page_two'] .'</td>
													<td class="text-center">'. '¥' . $data[$v]['baidumobile']['page_one'] . '/¥' . $data[$v]['baidumobile']['page_two'] .'</td>
													<td class="text-center">'. '¥' . $data[$v]['sogoupc']['page_one'] . '/¥' . $data[$v]['sogoupc']['page_two'] .'</td>
													<td class="text-center">'. '¥' . $data[$v]['sogoumobile']['page_one'] . '/¥' . $data[$v]['sogoumobile']['page_two'] .'</td>
													<td class="text-center">'. '¥' . $data[$v]['360pc']['page_one'] . '/¥' . $data[$v]['360pc']['page_two'] .'</td>
													<td class="text-center">'. '¥' . $data[$v]['360mobile']['page_one'] . '/¥' . $data[$v]['360mobile']['page_two'] .'</td>
													<td class="text-center">'. '¥' . $data[$v]['smmobile']['page_one'] . '/¥' . $data[$v]['smmobile']['page_two'] .'</td>
												</tr>';
				}
		}else{
			foreach(array_keys($data) as $k => $v)
				{
					$result .= '<tr class="text-center">
													<td>
								                   
								                            <input type="checkbox" name="kwd[]" value="'. $v .'">
								                     
								                    </td>
													<td class="text-center">'. $v .'</td>
													<td class="text-center">'. '¥' . $data[$v]['baidupc']['new_page_one'] . '/¥' . $data[$v]['baidupc']['new_page_two'] .'</td>
													<td class="text-center">'. '¥' . $data[$v]['baidumobile']['new_page_one'] . '/¥' . $data[$v]['baidumobile']['new_page_two'] .'</td>
													<td class="text-center">'. '¥' . $data[$v]['sogoupc']['new_page_one'] . '/' . '¥' . $data[$v]['sogoupc']['new_page_two'] .'</td>
													<td class="text-center">'. '¥' . $data[$v]['sogoumobile']['new_page_one'] . '/¥' . $data[$v]['sogoumobile']['new_page_two'] .'</td>
													<td class="text-center">'. '¥' . $data[$v]['360pc']['new_page_one'] . '/¥' . $data[$v]['360pc']['new_page_two'] .'</td>
													<td class="text-center">'. '¥' . $data[$v]['360mobile']['new_page_one'] . '/¥' . $data[$v]['360mobile']['new_page_two'] .'</td>
													<td class="text-center">'. '¥' . $data[$v]['smmobile']['new_page_one'] . '/¥' . $data[$v]['smmobile']['new_page_two'] .'</td>
												</tr>';
				}
		}
		
		return $result;
	}

	/*
	 * 关键词价格搜索
	 */
	public function keysearch($keyword = '')
	{
		//if(empty($keyword)){return $this->jump([RESULT_ERROR,'关键词为空,请输入关键词']);}
		$keyword = explode("\n", $keyword);
		
		if(count($keyword) > 10){return 'keyworderror';}
		$data = [];
		foreach($keyword as $k => $v)
		{
			$data[$v] = $this->keys($v);
			if($data[$v] == 'searcherror'){return 'searcherror';}
		}
	
		//查询用户是管理员还是代理或者用户
		$member = Db('member')->where(['id' => MEMBER_ID])->find();
		if($member['leader_id'] == 0 || $member['leader_id'] == 1)
		{
			$result = $this->gethtml($data);
			
		}else{
			//判断如果是用户rank等于0 就将rank改为普通会员1
			if($member['rank'] == 0)
			{
				Db('member')->where(['id' => $member['id']])->update(['rank' => 1]);
			}
			//再次查询
			$member = Db('member')->where(['id' => MEMBER_ID])->find();
			//查询他的代理有没有添加会员比例,如果添加了,就修改值 ,没有添加就是默认值
			$discount = Db("discount")->where(['user_id' => $member['leader_id'],'rank_id' => $member['rank']])->find();
			
			if($discount == null || $discount == '')
			{
				$result = $this->gethtml($data);
			}else{
				
				foreach($data as $key => $val){
					foreach($val as $k => $v){
						$data[$key][$k]['new_page_one'] = !empty($data[$key][$k]['page_one']) ? sprintf("%.2f",$data[$key][$k]['page_one'] * $discount['discount'] / 100) : 0;
						$data[$key][$k]['new_page_two'] = !empty($data[$key][$k]['page_two']) ? sprintf("%.2f",$data[$key][$k]['page_two'] * $discount['discount'] / 100) : 0;
						
					}
				}
				$result = $this->gethtml($data,1);
				
			}
		}
		
		
		
		return $result;
	
	}
	
	/*
	 * 关键词指数查询
	 */

    public function keys($keyword = '')
	{
		

			$keyword = urlencode($keyword);
			$url = 'http://index.chinaz.com/index/' . $keyword . '/';
			
			$data = file_get_contents($url);
		
			preg_match_all("/<script.*?>(.*?)<\/script>/is",$data,$canshu);
				
			if(empty($canshu[1][16])){$info = 'searcherror';return $info;}
			$result = explode(':',$canshu[1][16]);
		
			//360
			$haosou = explode(',',$result[9]);
			$data_360 = Db('keyzsprice')->where(['zhisu_range'=>['egt',$haosou[0]],'search_engin' => '360','status' => 1])->order('zhisu_range asc')->order('zhisu_range asc')->select();
			if(!isset($data_360[0])){
				$data_360[0] = null;
			}
			//360移动
			
			$data_360_mobile = Db('keyzsprice')->where(['zhisu_range'=>['egt',$haosou[0]],'search_engin' => '360移动','status' => 1])->order('zhisu_range asc')->order('zhisu_range asc')->select();
			if(!isset($data_360_mobile[0])){
				$data_360_mobile[0] = null;
			}
			//搜狗pc
			$sougou_pc = explode(',',$result[11]);
			$data_sougou_pc = Db('keyzsprice')->where(['zhisu_range'=>['egt',$sougou_pc[0]],'search_engin' => '搜狗','status' => 1])->order('zhisu_range asc')->order('zhisu_range asc')->select();
			if(!isset($data_sougou_pc[0])){
				$data_sougou_pc[0] = null;
			}
			//搜狗移动
			$sougou_mobile = explode(',',$result[13]);
			$data_sougou_mobile = Db('keyzsprice')->where(['zhisu_range'=>['egt',$sougou_mobile[0]],'search_engin' => '搜狗移动','status' => 1])->order('zhisu_range asc')->order('zhisu_range asc')->select();
			if(!isset($data_sougou_mobile[0])){
				$data_sougou_mobile[0] = null;
			}
			//神马
			$shenma = explode('}',$result[17]);
			$data_shenma = Db('keyzsprice')->where(['zhisu_range'=>['egt',$shenma[0]],'search_engin' => '神马','status' => 1])->order('zhisu_range asc')->select();
			if(!isset($data_shenma[0])){
				$data_shenma[0] = null;
			}
		    //百度
		    $baidu = explode(',',$result[5]);
			$data_baidu = Db('keyzsprice')->where(['zhisu_range'=>['egt',$baidu[0]],'search_engin' => '百度','status' => 1])->order('zhisu_range asc')->select();
			if(!isset($data_baidu[0])){
				$data_baidu[0] = null;
			}
		    //百度移动
		    $baidu_mobile = explode(',',$result[5]);
			$data_baidu_mobile = Db('keyzsprice')->where(['zhisu_range'=>['egt',$baidu[0]],'search_engin' => '百度移动','status' => 1])->order('zhisu_range asc')->select();
			if(!isset($data_baidu_mobile[0])){
				$data_baidu_mobile[0] = null;
			}
			$info['360pc'] = $data_360[0];
			$info['360mobile'] = $data_360_mobile[0];
			$info['sogoupc'] = $data_sougou_pc[0];
			$info['sogoumobile'] = $data_sougou_mobile[0];
			$info['smmobile'] = $data_shenma[0];
			$info['baidupc'] = $data_baidu[0];
			$info['baidumobile'] = $data_baidu_mobile[0];
			
			
			
			return $info;
		
	}	
	
}//class end
