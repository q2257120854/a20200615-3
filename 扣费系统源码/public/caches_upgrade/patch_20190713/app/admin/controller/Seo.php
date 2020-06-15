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
 * Seo控制器
 */
class Seo extends AdminBase
{

    /**
     * @return mixed
     * 网站列表
     */

    public function weblist(){


        $where = $this->logicSeo->getWebListWhere($this->param);
        $datainfo=$this->logicSeo->getWebList($where);

        $this->assign('list', $datainfo);
        $data=[];
        //======================
        $beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
        $endToday=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1;
        foreach($datainfo as $k=>$v){
            $data[$k+1]['knum']=Db::name("keywords")->where("web_id={$v['id']}")->count();
            $data[$k+1]['priceNum']=Db::name("keywords")->table("kf_consumption a,kf_keywords b")
                ->where("b.web_id={$v['id']} and a.keyword_id=b.id")->where('a.create_time','between',[$beginToday,$endToday])->sum("a.price");
            $data[$k+1]['dbNum']=Db::name("keywords")->table("kf_consumption a,kf_keywords b")
                ->where("b.web_id={$v['id']} and a.keyword_id=b.id")->where('a.create_time','between',[$beginToday,$endToday])->count('a.id');
            $data[$k+1]['countNum']=Db::name("keywords")->table("kf_consumption a,kf_keywords b")
                ->where("b.web_id={$v['id']} and a.keyword_id=b.id")->sum("a.price");
        }
        $this->assign('info', $data);
        return $this->fetch('weblist');
    }

    /**
     * @return mixed
     * 添加网站
     */

    public function webadd(){

        $info=session('member_info');
        if($info['leader_id']>1){
            $this->param['username']=$info['username'];
        }
        IS_POST && $this->jump($this->logicSeo->webAdd($this->param));


        $this->assign("info",$info);
        return $this->fetch('webadd');
    }
    /**
     * @return mixed
     * 修改网站
     */
    public function webedit(){

        $this->param['id']=tp_decrypt($this->param['id']);
        IS_POST && $this->jump($this->logicSeo->webEdit($this->param));
        $info = $this->logicSeo->getWebInfo(['id' => $this->param['id']]);
        $this->assign('info', $info);
        return $this->fetch('webedit');
    }

    /**
     * @return mixed
     * 删除网站
     */
    public function webdel($id=0) {

        return $this->jump($this->logicSeo->webDel(['id' => tp_decrypt($id)]));
    }

    /**
     * @return mixed
     * 修改网站状态
     */
    public function webstatus($id=0,$status=0){
        return $this->jump($this->logicSeo->webstatus(['id' => tp_decrypt($id),'status'=>$status]));
    }

    /*
     * 获取用户列表
     */
    public function getuser(){

        return $this->logicSeo->getAjaxUserList($this->param);
    }


    /**
     * @return mixed
     * 关键词列表
     */

    public function keywordlist(){

        $where = $this->logicSeo->getKeywordListWhere($this->param);


        $this->assign('list', $this->logicSeo->getKeywordList($where));
        return $this->fetch('keywordlist');
    }

    /**
     * 关键词历史查询列表
     */
    public function keywordlistlog(){

        $where = $this->logicSeo->getKeywordlogListWhere($this->param);


        $this->assign('list', $this->logicSeo->getKeywordlogList($where));
        return $this->fetch('keywordloglist');
    }

    /**
     * 添加关键词
     */

    public function keywordadd(){
        set_time_limit(300);
        IS_POST && $this->jump($this->logicSeo->keyWordAdd($this->param));
        //-------------------------------------------------------------

        if(!empty($this->param['id'])){
            $this->param['id']=tp_decrypt($this->param['id']);
           $this->assign('info',$this->logicSeo->addKeywordGetinfo($this->param));
            $userinfo=session('member_info');
            $this->assign("myinfo",$userinfo);
        }else{
            die();
        }
        return $this->fetch('keywordadd');
    }

    /**
     * 修改关键词
     */
    public function keywordEdit(){
        $this->param['id']=tp_decrypt($this->param['id']);
        IS_POST && $this->jump($this->logicSeo->keywordEdit($this->param));

        $info = $this->logicSeo->getKeywordInfo(['id' => $this->param['id']]);
        $this->assign('info', $info);
        return $this->fetch('keywordedit');
    }

    /**
     * 批量修改关键词信息
     */
    public function kewords_update_all(){
        IS_POST && $this->jump($this->logicSeo->keywordAllEdit($this->param));
    }

    /**
     * 删除关键词
     */

    public function keywordDel($id=0){

        return $this->jump($this->logicSeo->keywordDel(['id' => tp_decrypt($id)]));
    }

    /**
     * 充值列表
     */
    public function chongzhilist()
    {

        $this->assign('list', $this->logicSeo->getChongzhiList());
		$this->assign('member',session('member_info'));
        return $this->fetch('chongzhilist');
    }

    /**
     * 充值
     */

    public function chongzhi(){

        IS_POST && $this->jump($this->logicSeo->chongzhiAdd($this->param));

        $this->assign('id', $this->param['id']);
        return $this->fetch('chongzhi');
    }

    /**
     * 消费记录
     */
    public function xiaofeilist(){



        $where = $this->logicSeo->getXiaofeiListWhere($this->param);
        $this->assign('list', $this->logicSeo->getXiaofeiList($where));
        return $this->fetch('xiaofeilist');
    }

    /**
     * 补录排名
     */
    public function bulu(){

        IS_POST && $this->jump($this->logicSeo->Bulu($this->param));
        $kid=tp_decrypt($this->param['id']);
        $this->assign('info', Db::name("keywords")->where("id={$kid}")->find());
        $this->assign('url',$this->param['url'] );
        return $this->fetch('bulu');
    }

    /**
     * 客户消费统计
     */
    public function consume(){


        $where = $this->logicSeo->getXiaofeiTjListWhere($this->param);
        $lis=$this->logicSeo->getXiaofeiTjList($where);
        if($lis){
            $this->assign('tls', $this->logicSeo->getXfCont($lis));
        }
        $this->assign('info', $this->logicSeo->getHejiXfInfo($where));
        $this->assign('list', $lis);
        return $this->fetch('consume');
    }
    
	//消费记录导出
	
	public function xiaofeiexcel(){
		$this->logicSeo->xiaofeiexcel();
	}
	
    //关键字查询
    public function keywselect(){
	 
		
		IS_POST && $this->jump($this->logicSeo->keywseladd($this->param));
		
		IS_GET && $where = $this->logicSeo->keywselect($this->param);
		
		
		$this->assign('info',$this->logicSeo->member_web());
//		echo "<pre>";
//		print_r($where);
        $this->assign('list',$where);
		return $this->fetch('keywselect');
	}
	
	
	//关键词指数价格
	public function kwzsprice()
	{
		$data = $this->param;

		//print_r($data);
		if(!empty($data['page'])){
			unset($data['page']);
			$this->assign('list',$this->logicSeo->kwzspriceList($data));
		}else{
			
			if(empty($data['search_engin'])){
				$this->assign('list',$this->logicSeo->kwzspriceList());
			}else{
				$data['search_engin'] = urldecode($data['search_engin']);
				$this->assign('list',$this->logicSeo->kwzspriceList(['search_engin' => $data['search_engin']]));
			}
			
		}
	    
	  
		
		
		return $this->fetch('kwzsprice');
	}
	
	//关键词指数批量导入
	public function keyzsdaoru(){
		
		$path=".".trim(str_replace("picture","file",$this->param['path']));
		$datass = get_excel_data($path);
		unset($datass[1]);
		$datass = array_values($datass);
		for($i=0;$i<count($datass);$i++){
			if($datass[$i][3] == '百度' || $datass[$i][3] == '百度移动' || $datass[$i][3] == '搜狗' || $datass[$i][3] == '搜狗移动' || $datass[$i][3] == '360' || $datass[$i][3] == '神马' || $datass[$i][3] == '360移动'){
				$data[$i]['page_one'] = $datass[$i][0];
				$data[$i]['page_two'] = $datass[$i][1];
				$data[$i]['zhisu_range'] = $datass[$i][2];
				$data[$i]['search_engin'] = $datass[$i][3];
				$data[$i]['chenben_one'] = $datass[$i][4];
				$data[$i]['chenben_two'] = $datass[$i][5];
				$data[$i]['create_time'] = time();
			}else{
				return  $this->jump([RESULT_ERROR,'请查看你的搜索引擎是否正确' . $datass[$i][3]]);
				exit;
			}
		}
		for($i=0;$i<count($data);$i++){
			$info = Db('keyzsprice')->insert($data[$i]);
		}
	    return $info ? $this->jump([RESULT_SUCCESS,'导入成功']) : $this->jump([RESULT_ERROR,'导入失败']);
		
	}
	
	//关键词指数删除
    public function zhishudel($id = ''){
    	$this->jump($this->logicSeo->zhishudel(['id' => $id]));
    }
	
	//关键词指数编辑
	public function zhishuedit($id = ''){
		IS_POST && $this->jump($this->logicSeo->zhishuedit($this->param));
		$this->assign('list',$this->logicSeo->zhishuinfo(['id' => $id]));
		return $this->fetch('zhishuedit');
	}
	
	//新增关键词指数
	public function kwzspriceadd()
	{
		IS_POST && $this->jump($this->logicSeo->kwzspriceadd($this->param));
		return $this->fetch('kwzspriceadd');
	}
	//导出
	public function excel(){
		$this->logicSeo->excel();
	}
	
	//编辑充值记录
	public function chongzhiedit($id = 0)
	{
		$id = tp_decrypt($id);
		$this->assign('info',$this->logicSeo->chongzhiInfo(['id' => $id]));
		IS_POST && $this->jump($this->logicSeo->chongzhiUpdate($this->param));
		
		return $this->fetch('chongzhiedit');
	}
	
	
	//网站批量导入
	public function webdaoru()
	{
		$path=".".trim(str_replace("picture","file",$this->param['path']));
		$data = get_excel_data($path);
		unset($data[1]);
		$data = array_values($data);
		$info = [];
		$list = [];
		foreach($data as $k => $v)
		{
			trim($data[$k][0]);
			$data[$k][0] = preg_replace('# #','',$data[$k][0]);
			$info[$k] = Db('member')->where(['nickname' => $data[$k][0]])->find();
			if($info[$k] == '')
			{
				return $this->jump([RESULT_ERROR,'用户名不存在,请检查excel表']);
			}
			
			$list[$k]['web_name'] = $data[$k][1];
			$list[$k]['url'] = $data[$k][2];
			$list[$k]['create_time'] = time();
			$list[$k]['userid'] = $info[$k]['id'];
			$list[$k]['userpid'] = $info[$k]['leader_id'];
			$list[$k]['bake_name'] = $data[$k][3];
			$list[$k]['bake_username'] = $data[$k][4];
			$list[$k]['base_pass'] = $data[$k][5];
			$list[$k]['ftp_addr'] = $data[$k][6];
			$list[$k]['ftp_username'] = $data[$k][7];
			$list[$k]['ftp_pass'] = $data[$k][8];
			$list[$k]['beizhu'] = $data[$k][9];
			
		}
		foreach($list as $k => $v)
		{
			$result = Db('weblist')->insert($list[$k]);
		}
		return $result ? $this->jump([RESULT_SUCCESS,'导入成功']) : $this->jump([RESULT_ERROR,'导入失败']);
		
	}


    //网站列表导出
    public function webexcel()
	{
		$this->logicSeo->webexcel();
	}
	
	//关键词导入
	public function keyworddaoru()
	{
		$path=".".trim(str_replace("picture","file",$this->param['path']));
		$data = get_excel_data($path);
		unset($data[1]);
		$data = array_values($data);
		$info = [];
		$list = [];
		foreach($data as $k => $v)
		{
			trim($data[$k][0]);
			$data[$k][0] = preg_replace('# #','',$data[$k][0]);
			trim($data[$k][1]);
			$data[$k][1] = preg_replace('# #','',$data[$k][1]);
			trim($data[$k][7]);
			$data[$k][7] = preg_replace('# #','',$data[$k][7]);
			$data[$k][7] = strtolower($data[$k][7]);
			switch ($data[$k][7])
			{
				case '百度pc':
					$data[$k][7] = 'baidupc';
				break;
				case '百度移动端':
					$data[$k][7] = 'baidumobile';
				break;
				case '360pc':
					$data[$k][7] = '360pc';
				break;
				case '360移动端':
					$data[$k][7] = '360mobile';
				break;
				case '搜狗pc':
					$data[$k][7] = 'sogoupc';
				break;
				case '搜狗移动端':
					$data[$k][7] = 'sogoumobile';
				break;
				case '神马搜索':
					$data[$k][7] = 'smmobile';
				break;
				default:
					return $this->jump([RESULT_ERROR,'该搜索引擎不存在,请检查excel表' . $data[$k][7]]);
			}
			
			$list[$k] = Db('member')->where(['nickname' => $data[$k][0]])->find();
			if($list[$k] == '')
			{
				return $this->jump([RESULT_ERROR,'该用户不存在,请检查excel表']);
			}
			$info[$k] = Db('weblist')->where(['url' => $data[$k][1],'userid' => $list[$k]['id']])->find();
			if($info[$k] == '')
			{
				return $this->jump([RESULT_ERROR,'该网站不在该用户下或不存在此网站,请检查excel表']);
			}
			$arr[$k] = Db('keywords')->where(['web_id' => $info[$k]['id'],'keywords' => $data[$k][2],'search_engine' => $data[$k][7]])->find();
			if($arr[$k] != '')
			{
				return $this->jump([RESULT_ERROR,'该网站已经添加了该关键词,请检查excel表']);
			}
			$array[$k]['userid'] = $list[$k]['id'];
			$array[$k]['userpid'] = $list[$k]['leader_id'];
			$array[$k]['web_id'] = $info[$k]['id'];
			$array[$k]['keywords'] = $data[$k][2];
			$array[$k]['search_engine'] = $data[$k][7];
			$array[$k]['page_one'] = $data[$k][3];
			$array[$k]['page_tow'] = $data[$k][4];
			$array[$k]['page_one_cb'] = $data[$k][5];
			$array[$k]['page_tow_cb'] = $data[$k][6];
			$array[$k]['updatetime'] = time();
			$array[$k]['create_time'] = time();
			if(MEMBER_ID == 1)
			{
				$array[$k]['jk_status'] = 1;
			}else{
				$array[$k]['jk_status'] = 0;
			}
			
			
		}
			foreach($array as $k => $v)
			{
				$result = Db('keywords')->insert($array[$k]);
			}
		return $result ? $this->jump([RESULT_SUCCESS,'导入成功']) : $this->jump([RESULT_ERROR,'导入失败']);
		
	}
}