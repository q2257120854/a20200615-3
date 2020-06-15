<?php

/*
 * 数据
 */
namespace app\admin\logic;
use think\Db;


class Shuju extends AdminBase
{
	/*
	 * 最近七天起始时间戳
	 */ 
	private function latelytime(){
		$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));//今日开始时间戳
        $endToday=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1;//今日结束时间戳
        $beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));//昨天起始时间
		$endYesterday=mktime(0,0,0,date('m'),date('d'),date('Y'));//昨天结束时间
		$qiantian = mktime(0,0,0,date('m'),date('d')-2,date('Y'));//前天起始时间戳
		$endqiantian = mktime(0,0,0,date('m'),date('d')-1,date('Y'));//前天结束时间戳
		$sqt = mktime(0,0,0,date('m'),date('d')-3,date('Y'));//上前天起始时间戳
		$endsqt = mktime(0,0,0,date('m'),date('d')-2,date('Y'));//上前天结束时间
		$dqt = mktime(0,0,0,date('m'),date('d')-4,date('Y'));//大前天起始时间戳
		$enddqt = mktime(0,0,0,date('m'),date('d')-3,date('Y'));//上前天结束时间
		$ddqt = mktime(0,0,0,date('m'),date('d')-5,date('Y'));//大大前天起始时间戳
		$endddqt = mktime(0,0,0,date('m'),date('d')-4,date('Y'));//大大前天结束时间
		$zuih = mktime(0,0,0,date('m'),date('d')-6,date('Y'));//大大前天起始时间戳
		$endzuih = mktime(0,0,0,date('m'),date('d')-5,date('Y'));
		return $data = [
			'today'          => $beginToday,//今天
			'endtoday'       => $endToday,//今天结束
			'yesterday'      => $beginYesterday,//昨天
			'endyesterday'   => $endYesterday,//昨天结束
			'qiantian'       => $qiantian,
			'endqiantian'    => $endqiantian,
			'sqt'            => $sqt,
			'endsqt'         => $endsqt,
			'dqt'            => $dqt,
			'enddqt'         => $enddqt,
			'ddqt'           => $ddqt,
			'endddqt'        => $endddqt,
			'zuih'           => $zuih,
			'endzuih'        => $endzuih,
		];
	}


	/*
	 * 获取最近七天所有日期
	 */ 
	public function get_weeks($time = '', $format='m-d'){
		$time = $time != '' ? $time : time();
		//组合数据
		$date = [];
		for ($i=1; $i<=7; $i++){
		    $date[$i] = date($format ,strtotime( '+' . $i-7 .' days', $time));
		}
		return $date;
	}
	/*
	 * 时间戳
	 */ 
	public function timeStamp(){
		$beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));//今日开始时间戳
        $endToday=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1;//今日结束时间戳
        $beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));//昨天起始时间
		$endYesterday=mktime(0,0,0,date('m'),date('d'),date('Y'));//昨天结束时间
		$beginWeek = mktime(0,0,0,date("m"),date("d")-date("w")+1,date("Y"));//本周起始时间
		$endWeek = mktime(23,59,59,date("m"),date("d")-date("w")+7,date("Y"));//本周结束时间
		$beginlastweek = strtotime(date('Y-m-d', strtotime("last week Monday", time())));//上周开始时间戳
        $endlastweek = strtotime(date('Y-m-d', strtotime("last week Sunday", time()))) + 24 * 3600 - 1;//上周结束时间戳
		$beginMonth = mktime(0, 0, 0, date('m'), 1, date('Y'));//本月开始时间戳
        $endMonth = mktime(23, 59, 59, date('m'), date('t'), date('Y'));//本月结束时间戳
		$beginlastMonth = mktime(0, 0, 0, date('m') - 1, 1, date('Y'));//上月开始时间戳
        $endlastMonth = mktime(23, 59, 59, date('m') - 1, date('t', $beginlastMonth), date('Y'));//上月结束时间戳
        return $time = [
        	'beginToday'      => $beginToday,//今日开始时间戳
        	'endToday'        => $endToday,//今日结束时间戳
        	'beginYesterday'  => $beginYesterday,//昨天起始时间
        	'endYesterday'    => $endYesterday,//昨天结束时间
        	'beginWeek'       => $beginWeek,//本周起始时间
        	'endWeek'         => $endWeek,//本周结束时间
        	'beginlastweek'   => $beginlastweek,//上周开始时间
        	'endlastweek'     => $endlastweek,//上周结束时间
        	'beginMonth'      => $beginMonth,//本月开始时间
        	'endMonth'        => $endMonth,//本月结束时间
        	'beginlastMonth'  => $beginlastMonth,//上月开始0时间
        	'endlastMonth'    => $endlastMonth,//上月结束时间
        ];
	}


	/*
	 * 达标词
	 */ 
	public function dabiao($id = '',$where = [])
	{
		$time = $this->latelytime();
		$keywordarr = Db('keywords')->where($where)->select();
		foreach($keywordarr as $key => $val){
			//今天达标词数
			$today[] = Db('consumption')->where(['keyword_id' => $val['id']])->where('create_time','between',[$time['today'],$time['endtoday']])->count();
			//昨天
			$yseterday[] = Db('consumption')->where(['keyword_id' => $val['id']])->where('create_time','between',[$time['yesterday'],$time['endyesterday']])->count();
			//前天
			$qt[] = Db('consumption')->where(['keyword_id' => $val['id']])->where('create_time','between',[$time['qiantian'],$time['endqiantian']])->count();
			//上前天
			$sqt[] = Db('consumption')->where(['keyword_id' => $val['id']])->where('create_time','between',[$time['sqt'],$time['endsqt']])->count();
			//大前天
			$dqt[] = Db('consumption')->where(['keyword_id' => $val['id']])->where('create_time','between',[$time['dqt'],$time['enddqt']])->count();
			//大大前天
			$ddqt[] = Db('consumption')->where(['keyword_id' => $val['id']])->where('create_time','between',[$time['ddqt'],$time['endddqt']])->count();
			//最后
			$zuih[] = Db('consumption')->where(['keyword_id' => $val['id']])->where('create_time','between',[$time['zuih'],$time['endzuih']])->count();
		}

		$countkeyword = count($keywordarr);
		if($countkeyword != 0){
			$data = [
				'keywordnum' => $countkeyword,
				'today'      => array_sum($today),
				'wtoday'     => $countkeyword - array_sum($today),
				'yesterday'  => array_sum($yseterday),
				'wyesterday' => $countkeyword - array_sum($yseterday),
				'qiantian'   => array_sum($qt),
				'wqiantian'  => $countkeyword - array_sum($qt),
				'sqt'        => array_sum($sqt),
				'wsqt'       => $countkeyword - array_sum($sqt),
				'dqt'        => array_sum($dqt),
				'wdqt'       => $countkeyword - array_sum($dqt),
				'ddqt'       => array_sum($ddqt),
				'wddqt'      => $countkeyword - array_sum($ddqt),
				'zuih'       => array_sum($zuih),
				'wzuih'      => $countkeyword - array_sum($zuih)
			];
		}else{
			$data = [
				'keywordnum' => 0,
				'today'      => 0,
				'wtoday'     => 0,
				'yesterday'  => 0,
				'wyesterday' => 0,
				'qiantian'   => 0,
				'wqiantian'  => 0,
				'sqt'        => 0,
				'wsqt'       => 0,
				'dqt'        => 0,
				'wdqt'       => 0,
				'ddqt'       => 0,
				'wddqt'      => 0,
				'zuih'       => 0,
				'wzuih'      => 0
			];
		}
		
		return $data;
	}
	
	
	/*
	 * 平台利润
	 */ 
	public function ptprice($id = ''){
		$time = $this->timeStamp();
		$keywordarr = Db('keywords')->where(['web_id' => $id])->select();
		foreach($keywordarr as $k => $v){
			//今日盈利
			$today[] = Db('consumption')->where(['keyword_id' => $v['id']])->where('create_time','between',[$time['beginToday'],$time['endToday']])->find();
			if($today[$k]['page'] == ''){
				$todayprice[$k] = 0;
			}else if($today[$k]['page'] == 1){
				$todayprice[$k] = $keywordarr[$k]['ptlirun_one'];
			}else{
				$todayprice[$k] = $keywordarr[$k]['ptlirun_two'];
			}
			//昨日盈利
			$yesterday[] = Db('consumption')->where(['keyword_id' => $v['id']])->where('create_time','between',[$time['beginYesterday'],$time['endYesterday']])->find();
			if($yesterday[$k]['page'] == ''){
				$yesterdayprice[$k] = 0;
			}else if($yesterday[$k]['page'] == 1){
				$yesterdayprice[$k] = $keywordarr[$k]['ptlirun_one'];
			}else{
				$yesterdayprice[$k] = $keywordarr[$k]['ptlirun_two'];
			}
			//本周盈利
			$toweek[] = Db('consumption')->where(['keyword_id' => $v['id']])->where('create_time','between',[$time['beginWeek'],$time['endWeek']])->select();
			//上周利润
			$lastweek[] = Db('consumption')->where(['keyword_id' => $v['id']])->where('create_time','between',[$time['beginlastweek'],$time['endlastweek']])->select();
			//本月利润
			$tomonth[] = Db('consumption')->where(['keyword_id' => $v['id']])->where('create_time','between',[$time['beginMonth'],$time['endMonth']])->select();
			//上月利润
			$lastmonth[] = Db('consumption')->where(['keyword_id' => $v['id']])->where('create_time','between',[$time['beginlastMonth'],$time['endlastMonth']])->select();
			//历史利润
			$lishi[] = Db('consumption')->where(['keyword_id' => $v['id']])->select();
		}
		
		//本周盈利
		$toweekprice = isset($toweek) ? array_sum($this->plirun($toweek)) : 0;
		//上周盈利
		$lsatweekprice = isset($lastweek) ? array_sum($this->plirun($lastweek)) : 0;
		//本月利润
		$tomonthprice  = isset($tomonth)  ? array_sum($this->plirun($tomonth)) : 0;
		//上月利润
		$lastmonthprice = isset($lastmonth) ? array_sum($this->plirun($lastmonth)) : 0;
		//历史利润
		$lishiprice = isset($lishi) ? array_sum($this->plirun($lishi)) : 0;
		
		return $data = [
			'todayprice'        => isset($todayprice) ? empty($todayprice) ? 0 :array_sum($todayprice) : 0,
			'yesterdayprice'    => isset($yesterdayprice) ? empty($yesterdayprice) ? 0 : array_sum($yesterdayprice) : 0,
			'toweekprice'       => $toweekprice,
			'lastweekprice'     => $lsatweekprice,
			'tomonthprice'      => $tomonthprice,
			'lastmonthprice'    => $lastmonthprice,
			'lishiprice'        => $lishiprice,
			
		];
	}


	public function plirun($toweek = []){
		$i = 0;
			$towprice = [];
			foreach($toweek as $k => $v){
				foreach($v as $a => $b){
					$tow[$i] = $b;
					if($tow[$i]['page'] == 1){
						$towprice[] = Db('keywords')->where(['id' => $tow[$i]['keyword_id']])->sum('ptlirun_one');
					}else{
						$towprice[] = Db('keywords')->where(['id' => $tow[$i]['keyword_id']])->sum('ptlirun_two');
					}
					++$i;
				}
			}
			return $towprice;
	}

	

	/*
	 * 代理利润
	 */ 
	public function dailiprice($id = ''){
		$time = $this->timeStamp();
		$keywordarr = Db('keywords')->where(['web_id' => $id])->select();
	
		foreach($keywordarr as $k => $v){
			//今日盈利
			$today[] = Db('consumption')->where(['keyword_id' => $v['id']])->where('create_time','between',[$time['beginToday'],$time['endToday']])->find();
			if($today[$k]['page'] == ''){
				$todayprice[$k] = 0;
			}else if($today[$k]['page'] == 1){
				$todayprice[$k] = $keywordarr[$k]['dllirun_one'];
			}else{
				$todayprice[$k] = $keywordarr[$k]['dllirun_two'];
			}
			//昨日盈利
			$yesterday[] = Db('consumption')->where(['keyword_id' => $v['id']])->where('create_time','between',[$time['beginYesterday'],$time['endYesterday']])->find();
			if($yesterday[$k]['page'] == ''){
				$yesterdayprice[$k] = 0;
			}else if($yesterday[$k]['page'] == 1){
				$yesterdayprice[$k] = $keywordarr[$k]['dllirun_one'];
			}else{
				$yesterdayprice[$k] = $keywordarr[$k]['dllirun_two'];
			}
			//本周盈利
			$toweek[] = Db('consumption')->where(['keyword_id' => $v['id']])->where('create_time','between',[$time['beginWeek'],$time['endWeek']])->select();
			//上周利润
			$lastweek[] = Db('consumption')->where(['keyword_id' => $v['id']])->where('create_time','between',[$time['beginlastweek'],$time['endlastweek']])->select();
			//本月利润
			$tomonth[] = Db('consumption')->where(['keyword_id' => $v['id']])->where('create_time','between',[$time['beginMonth'],$time['endMonth']])->select();
			//上月利润
			$lastmonth[] = Db('consumption')->where(['keyword_id' => $v['id']])->where('create_time','between',[$time['beginlastMonth'],$time['endlastMonth']])->select();
			//历史利润
			$lishi[] = Db('consumption')->where(['keyword_id' => $v['id']])->select();
			
			
		}
			//本周盈利
			$towprice = isset($toweek) ? $this->dlirun($toweek) : 0;
			//上周盈利
			$lastweekprice = isset($lastweek) ? $this->dlirun($lastweek) : 0;
			//本月利润
			$tomonthprice = isset($tomonth) ? $this->dlirun($tomonth) : 0;
			//上月利润
			$lastmonthprice = isset($lastmonth) ? $this->dlirun($lastmonth) : 0;
			//历史利润
			$lishiprice = isset($lishi) ? $this->dlirun($lishi) : 0;

		return $data = [
			'todayprice'      => isset($todayprice) ? empty($todayprice) ? 0 : array_sum($todayprice) : 0,
			'yesterdaypric'   => isset($yesterdayprice) ? empty($yesterdayprice) ? 0 : array_sum($yesterdayprice) : 0,
			'toweekprice'     => isset($towprice) ? empty($towprice) ? 0 : array_sum($towprice) : 0,
			'lastweekprice'   => isset($lastweekprice) ? empty($lastweekprice) ? 0 : array_sum($lastweekprice) : 0,
			'tomonthprice'    => isset($tomonthprice) ? empty($tomonthprice) ? 0 : array_sum($tomonthprice) : 0,
			'lastmonthprice'  => isset($lastmonthprice) ? empty($lishiprice) ? 0 : array_sum($lishiprice) : 0,
			'lishiprice'      => isset($lishiprice) ? empty($lishiprice) ? 0 : array_sum($lishiprice) : 0,
	
		];
	}
	
	public function dlirun($toweek = []){
			$i = 0;
			$towprice = [];
			foreach($toweek as $k => $v){
				foreach($v as $a => $b){
					$tow[$i] = $b;
					if($tow[$i]['page'] == 1){
						$towprice[] = Db('keywords')->where(['id' => $tow[$i]['keyword_id']])->sum('dllirun_one');
					}else{
						$towprice[] = Db('keywords')->where(['id' => $tow[$i]['keyword_id']])->sum('dllirun_two');
					}
					++$i;
				}
			}
			return $towprice;
	}
	
	
	
	
		
	/*
	 * 网站消费统计
	 */ 
	public function xiaofeiSta($id = ''){
		
		//获取时间戳
		$time = $this->timeStamp();
		
        //今日消费
        $keywordarr = Db('keywords')->where(['web_id' => $id])->field('id')->select();
		foreach($keywordarr as $key => $val){
			//今日消费
			$todayprice[] = Db('consumption')->where('create_time','between',[$time['beginToday'],$time['endToday']])->where(['keyword_id' => $val['id']])->sum('price');
			//昨日消费
			$yesterdayprice[] = Db('consumption')->where('create_time','between',[$time['beginYesterday'],$time['endYesterday']])->where(['keyword_id' => $val['id']])->sum('price');
			//本周消费
			$toweekprice[] = Db('consumption')->where('create_time','between',[$time['beginWeek'],$time['endWeek']])->where(['keyword_id' => $val['id']])->sum('price');
			//上周消费
			$lastweekprice[] = Db('consumption')->where('create_time','between',[$time['beginlastweek'],$time['endlastweek']])->where(['keyword_id' => $val['id']])->sum('price');
			//本月消费
			$toMonthprice[] = Db('consumption')->where('create_time','between',[$time['beginMonth'],$time['endMonth']])->where(['keyword_id' => $val['id']])->sum('price');
			//上月消费
			$lastMonthprice[] = Db('consumption')->where('create_time','between',[$time['beginlastMonth'],$time['endlastMonth']])->where(['keyword_id' => $val['id']])->sum('price');
			//历史消费
			$listprice[] = Db('consumption')->where(['keyword_id' => $val['id']])->sum('price');
		}

		$price = [
			'todayprice'     => isset($todayprice) ? array_sum($todayprice) : 0,//今日消费
			'yesterdayprice' => isset($yesterdayprice) ? array_sum($yesterdayprice) : 0,//昨日消费
			'toweekprice'    => isset($toweekprice) ? array_sum($toweekprice) : 0,//本周消费
			'lastweekprice'  => isset($lastweekprice) ? array_sum($lastweekprice) : 0,//上周消费
			'tomonthprice'   => isset($toMonthprice) ? array_sum($toMonthprice) : 0,//本月消费
			'lastmonthprice' => isset($lastMonthprice) ?array_sum($lastMonthprice) : 0,//上月消费
			'listprice'      => isset($listprice) ? array_sum($listprice) : 0,//历史消费
		];
		return $price;
        
	}


	/*
     * 网站图形信息
     */
    public function webtuxing($id = ''){
    	//查询该网站下所有关键词的id
		$keywordarr = Db('keywords')->where(['web_id' => $id])->field('id')->select();
		foreach($keywordarr as $k => $v){
			$keywordarr[$k] = $v['id'];
		}
        //查询用户
        $webinfo = Db('weblist')->alias('a')->join('kf_member b','a.userid = b.id')->where(['a.id' => $id])->field('a.*,b.nickname as userid')->find();
        //查询代理
        $webinfo['userpid'] = Db('weblist')->alias('a')->join('kf_member b','a.userpid = b.id')->where(['a.id' => $id])->field('b.nickname as userpid')->find()['userpid'];
		//关键词总数
		$webinfo['totalkeyword'] = Db('keywords')->where(['web_id' => $id])->count();
		//达标词总数
		$webinfo['dbnum'] = Db('keywords')->where(['web_id' => $id,'rank' => [['gt',0],['elt',20]]])->count();
		
//		//今日前十关键词数
//		$webinfo['qskeyword'] = Db('keywords')->where(['web_id' => $id,'rank' => [['gt',0],['elt',10]]])->count();
//		//前五关键词数
//		$webinfo['qwkeyword'] = Db('keywords')->where(['web_id' => $id,'rank' => [['gt',0],['elt',5]]])->count();
//		//前三关键词数
//		$webinfo['qshkeyword'] = Db('keywords')->where(['web_id' => $id,'rank' => [['gt',0],['elt',3]]])->count();
//		//前二关键词数
//		$webinfo['qekeyword'] = Db('keywords')->where(['web_id' => $id,'rank' => [['gt',0],['elt',2]]])->count();
//		//第一名关键词数
//		$webinfo['firstkeyword'] = Db('keywords')->where(['web_id' => $id,'rank' => 1])->count();
		//获取时间戳
		$time = $this->timeStamp();
		
		
		
		foreach($keywordarr as $key => $val){
			//跌落前20的关键词数
			$yesterdaykeyword20[] = Db('consumption')->where('create_time','between',[$time['beginYesterday'],$time['endYesterday']])->where(['keyword_id' => $val,'rank' => ['elt',20]])->count();
			$todaykeyword20[] = Db('consumption')->where('create_time','between',[$time['beginToday'],$time['endToday']])->where(['keyword_id' => $val,'rank' => ['elt',20]])->count();
			
			//跌落前十关键词数
			$yesterdaykeyword10[] = Db('consumption')->where('create_time','between',[$time['beginYesterday'],$time['endYesterday']])->where(['keyword_id' => $val,'rank' => ['elt',10]])->count();
			$todaykeyword10[] = Db('consumption')->where('create_time','between',[$time['beginToday'],$time['endToday']])->where(['keyword_id' => $val,'rank' => ['elt',10]])->count();
			
			//跌落前5关键词数
			$yesterdaykeyword5[] = Db('consumption')->where('create_time','between',[$time['beginYesterday'],$time['endYesterday']])->where(['keyword_id' => $val,'rank' => ['elt',5]])->count();
			$todaykeyword5[] = Db('consumption')->where('create_time','between',[$time['beginToday'],$time['endToday']])->where(['keyword_id' => $val,'rank' => ['elt',5]])->count();
			
			//跌落前3关键词数
			$yesterdaykeyword3[] = Db('consumption')->where('create_time','between',[$time['beginYesterday'],$time['endYesterday']])->where(['keyword_id' => $val,'rank' => ['elt',3]])->count();
			$todaykeyword3[] = Db('consumption')->where('create_time','between',[$time['beginToday'],$time['endToday']])->where(['keyword_id' => $val,'rank' => ['elt',3]])->count();
			
			//跌落前2关键词数
			$yesterdaykeyword2[] = Db('consumption')->where('create_time','between',[$time['beginYesterday'],$time['endYesterday']])->where(['keyword_id' => $val,'rank' => ['elt',2]])->count();
			$todaykeyword2[] = Db('consumption')->where('create_time','between',[$time['beginToday'],$time['endToday']])->where(['keyword_id' => $val,'rank' => ['elt',2]])->count();
			
			//跌落第一关键词数
			$yesterdaykeyword1[] = Db('consumption')->where('create_time','between',[$time['beginYesterday'],$time['endYesterday']])->where(['keyword_id' => $val,'rank' => ['elt',1]])->count();
			$todaykeyword1[] = Db('consumption')->where('create_time','between',[$time['beginToday'],$time['endToday']])->where(['keyword_id' => $val,'rank' => ['elt',1]])->count();
		}
		//前20的关键词
		$webinfo['qershikeyword'] = isset($todaykeyword20) ?  array_sum($todaykeyword20) : 0;
		$webinfo['qskeyword'] = isset($todaykeyword10)  ? array_sum($todaykeyword10) : 0;
		$webinfo['qwkeyword'] = isset($todaykeyword5)   ? array_sum($todaykeyword5)  : 0;
		$webinfo['qshkeyword'] = isset($todaykeyword3)  ? array_sum($todaykeyword3)  : 0;
		$webinfo['qekeyword'] =  isset($todaykeyword2)  ? array_sum($todaykeyword2)  : 0;
		$webinfo['firstkeyword'] = isset($todaykeyword1)? array_sum($todaykeyword1)  : 0;
		//跌落前20的关键词数
		$webinfo['dleskeyword'] = isset($yesterdaykeyword20) ? array_sum($yesterdaykeyword20) : 0 - $webinfo['qershikeyword'];
		$webinfo['dlqskeyword'] = isset($yesterdaykeyword10) ? array_sum($yesterdaykeyword10) : 0 - $webinfo['qskeyword'];
		$webinfo['dlqwkeyword'] = isset($yesterdaykeyword10) ? array_sum($yesterdaykeyword5)  : 0 - $webinfo['qwkeyword'];
		$webinfo['dlqshkeyword'] = isset($yesterdaykeyword3) ? array_sum($yesterdaykeyword3)  : 0 - $webinfo['qshkeyword'];
		$webinfo['dlqekeyword'] = isset($yesterdaykeyword2)  ? array_sum($yesterdaykeyword2)  : 0 - $webinfo['qekeyword'];
		$webinfo['dlfirstkeyword'] = isset($yesterdaykeyword1) ?array_sum($yesterdaykeyword1) : 0 - $webinfo['firstkeyword'];
		
		return $webinfo;
    }


	/*
	 * 累计盈利
	 */
	public function profit()
	{
		$member = session('member_info');
		//pho 获取三个月前时间戳
        $three_time=strtotime("-0 year -3 month -0 day");
		if($member['leader_id'] == 0){
			$keywordarr = Db('keywords')->select();
			$consumption = [];
			foreach($keywordarr as $key => $val){
				//累计盈利
				$consumption['price'][] = Db('consumption')->where(['keyword_id' => $val['id']])->select();
				//今日盈利
				$consumption['todayprice'][] = Db('consumption')->whereTime('create_time', 'today')->where(['keyword_id' => $val['id']])->select();
				//昨日盈利
				$consumption['yesterdayprice'][] = Db('consumption')->whereTime('create_time', 'yesterday')->where(['keyword_id' => $val['id']])->select();
				//本周盈利
				$consumption['toweekprice'][] = Db('consumption')->whereTime('create_time', 'week')->where(['keyword_id' => $val['id']])->select();
				//本月盈利
				$consumption['tomonthprice'][] = Db('consumption')->whereTime('create_time', 'month')->where(['keyword_id' => $val['id']])->select();
				//上月盈利
				$consumption['lastmonthprice'][] = Db('consumption')->whereTime('create_time', 'last month')->where(['keyword_id' => $val['id']])->select();
				//近3个月盈利
				$consumption['threemonthprice'][] = Db('consumption')->where('create_time', 'between',[$three_time,time()])->where(['keyword_id' => $val['id']])->select();
				//今年盈利
				$consumption['yearprice'][] = Db('consumption')->whereTime('create_time', 'year')->where(['keyword_id' => $val['id']])->select();
			
			}
			$profit['price'] = array_sum($this->plirun($consumption['price']));
			$profit['todayprice'] = array_sum($this->plirun($consumption['todayprice']));
			$profit['yesterdayprice'] = array_sum($this->plirun($consumption['yesterdayprice']));
			$profit['toweekprice'] = array_sum($this->plirun($consumption['toweekprice']));
			$profit['tomonthprice'] = array_sum($this->plirun($consumption['tomonthprice']));
			$profit['lastmonthprice'] = array_sum($this->plirun($consumption['lastmonthprice']));
			$profit['threemonthprice'] = array_sum($this->plirun($consumption['threemonthprice']));
			$profit['yearprice'] = array_sum($this->plirun($consumption['yearprice']));
		}else{
			$keywordarr = Db('keywords')->where(['userpid' => $member['id']])->select();
			$consumption = [];
			foreach($keywordarr as $key => $val){
				//累计盈利
				$consumption['price'][] = Db('consumption')->where(['keyword_id' => $val['id']])->select();
				//今日盈利
				$consumption['todayprice'][] = Db('consumption')->whereTime('create_time', 'today')->where(['keyword_id' => $val['id']])->select();
				//昨日盈利
				$consumption['yesterdayprice'][] = Db('consumption')->whereTime('create_time', 'yesterday')->where(['keyword_id' => $val['id']])->select();
				//本周盈利
				$consumption['toweekprice'][] = Db('consumption')->whereTime('create_time', 'week')->where(['keyword_id' => $val['id']])->select();
				//本月盈利
				$consumption['tomonthprice'][] = Db('consumption')->whereTime('create_time', 'month')->where(['keyword_id' => $val['id']])->select();
				//上月盈利
				$consumption['lastmonthprice'][] = Db('consumption')->whereTime('create_time', 'last month')->where(['keyword_id' => $val['id']])->select();
				//近3个月盈利
				$consumption['threemonthprice'][] = Db('consumption')->where('create_time', 'between',[$three_time,time()])->where(['keyword_id' => $val['id']])->select();
				//今年盈利
				$consumption['yearprice'][] = Db('consumption')->whereTime('create_time', 'year')->where(['keyword_id' => $val['id']])->select();
			
			}
			$profit['price'] = array_sum($this->dlirun($consumption['price']));

			$profit['todayprice'] = array_sum($this->dlirun($consumption['todayprice']));
			$profit['yesterdayprice'] = array_sum($this->dlirun($consumption['yesterdayprice']));
			$profit['toweekprice'] = array_sum($this->dlirun($consumption['toweekprice']));
			$profit['tomonthprice'] = array_sum($this->dlirun($consumption['tomonthprice']));
			$profit['lastmonthprice'] = array_sum($this->dlirun($consumption['lastmonthprice']));
			$profit['threemonthprice'] = array_sum($this->dlirun($consumption['threemonthprice']));
			$profit['yearprice'] = array_sum($this->dlirun($consumption['yearprice']));
		}
		
			
		return $profit;
			
	}
	
}
