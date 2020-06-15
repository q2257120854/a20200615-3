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
 * SEO逻辑
 */
class Seo extends AdminBase
{
    

    
    /**
     * 获取网站列表
     * ,count(c.id) as knum
     */
    public function getWebList($where = [], $field = 'm.*,b.username', $order = 'm.create_time desc', $paginate = DB_LIST_ROWS)
    {
        $this->modelWeblist->alias('m');
        
        $join = [
                    [SYS_DB_PREFIX . 'member b', 'm.userid = b.id', 'LEFT'],
                    //[SYS_DB_PREFIX . 'keywords c', 'm.id = c.web_id', 'LEFT'],
                ];
        
        $where['m.' . DATA_STATUS_NAME] = ['neq', DATA_DELETE];
        
        $this->modelWeblist->join = $join;
        $wlist=$this->modelWeblist->getList($where, $field, $order, $paginate);



        return $wlist;
    }

    /**
     * 获取关键词列表
     */
    public function getKeywordList($where = [], $field = 'm.*,b.username,c.url', $order = 'create_time desc', $paginate = DB_LIST_ROWS){

        $this->modelKeywords->alias('m');
        $join = [
            [SYS_DB_PREFIX . 'member b', 'm.userid = b.id', 'LEFT'],
            [SYS_DB_PREFIX . 'weblist c', 'c.id = m.web_id', 'LEFT'],
        ];

        $where['m.' . DATA_STATUS_NAME] = ['neq', DATA_DELETE];

        $this->modelKeywords->join = $join;
        $wlist=$this->modelKeywords->getList($where, $field, $order, $paginate);

        return $wlist;

    }

    /**
     * 获取关键词历史查询
     */
    public function getKeywordlogList($where = [], $field = 'm.*,b.username,c.url,e.keywords', $order = 'm.time desc', $paginate = DB_LIST_ROWS){

        $this->modelKeywordsRank->alias('m');
        $join = [
            [SYS_DB_PREFIX . 'keywords e', 'e.id = m.keywodsid', 'LEFT'],
            [SYS_DB_PREFIX . 'member b', 'e.userid = b.id', 'LEFT'],
            [SYS_DB_PREFIX . 'weblist c', 'c.id = e.web_id', 'LEFT'],
        ];

        //$where['m.' . DATA_STATUS_NAME] = ['neq', DATA_DELETE];

        $this->modelKeywordsRank->join = $join;
        $wlist=$this->modelKeywordsRank->getList($where, $field, $order, $paginate);


        return $wlist;

    }

    /**
     * 获取关键词历史列表搜索条件
     */

    public function getKeywordlogListWhere($data = []){
        $where = [];

        !empty($data['search_data']) && $where['c.url'] = ['like', '%'.$data['search_data'].'%'];
        !empty($data['search_keyword']) && $where['e.keywords'] = ['like', '%'.$data['search_keyword'].'%'];
        !empty($data['search_username']) && $where['b.username'] = ['like', '%'.$data['search_username'].'%'];
        !empty($data['search_engine']) && $where['m.search_engine'] = ['eq', $data['search_engine']];
        $info=session('member_info');
        if($info['leader_id']==1){
            $where['b.leader_id']=['eq',$info['id']];
        }elseif($info['leader_id']>1){
            $where['b.id']=['eq',$info['id']];
        }
        return $where;
    }

    /**
     * 获取消费记录表
     */
    public function getXiaofeiList($where = [], $field = 'm.*,b.username,c.url', $order = 'create_time desc', $paginate = DB_LIST_ROWS){

        $this->modelConsumption->alias('m');
        $join = [
            [SYS_DB_PREFIX . 'member b', 'm.userid = b.id', 'LEFT'],
            [SYS_DB_PREFIX . 'keywords ff', 'ff.id=m.keyword_id', 'LEFT'],
            [SYS_DB_PREFIX . 'weblist c', 'c.id = ff.web_id', 'LEFT'],
        ];

        //$where['m.' . DATA_STATUS_NAME] = ['neq', DATA_DELETE];

        $this->modelConsumption->join = $join;
        $wlist=$this->modelConsumption->getList($where, $field, $order, $paginate);

        return $wlist;

    }

    /**
     * 获取消费列表搜索条件
     */
    public function getXiaofeiListWhere($data = [])
    {


        $where = [];
        !empty($data['search_data']) && $where['c.url'] = ['like', '%'.$data['search_data'].'%'];
        !empty($data['search_keyword']) && $where['ff.keywords'] = ['like', '%'.$data['search_keyword'].'%'];
        !empty($data['search_engine']) && $where['m.search_engine'] = ['eq', $data['search_engine']];
        if(!empty($data['create_time'])){
            $start_time=strtotime($data['create_time']);
            $endtime=$start_time+60*60*24;
            $where['m.create_time'] = ['between', [$start_time,$endtime]];
        }

        $info=session('member_info');
        if($info['leader_id']==1){
            $where['b.leader_id']=['eq',$info['id']];
        }elseif($info['leader_id']>1){
            $where['m.userid']=['eq',$info['id']];
        }

        return $where;
    }

    /**
     * 获取网站列表搜索条件
     */
    public function getWebListWhere($data = [])
    {
        
        $where = [];
        
        !empty($data['search_data']) && $where['m.web_name|b.username|m.url'] = ['like', '%'.$data['search_data'].'%'];

        $info=session('member_info');
        if($info['leader_id']==1){
           $where['b.leader_id']=['eq',$info['id']];
        }elseif($info['leader_id']>1){
            $where['b.id']=['eq',$info['id']];
        }

        return $where;
    }

    /**
     * 获取关键词列表搜索条件
     */

    public function getKeywordListWhere($data = []){
        $where = [];

        !empty($data['search_data']) && $where['c.url'] = ['like', '%'.$data['search_data'].'%'];
        !empty($data['search_keyword']) && $where['m.keywords'] = ['like', '%'.$data['search_keyword'].'%'];
        !empty($data['search_username']) && $where['b.username'] = ['like', '%'.$data['search_username'].'%'];
        !empty($data['search_engine']) && $where['m.search_engine'] = ['eq', $data['search_engine']];
        $info=session('member_info');
        if($info['leader_id']==1){
            $where['b.leader_id']=['eq',$info['id']];
        }elseif($info['leader_id']>1){
            $where['b.id']=['eq',$info['id']];
        }
        return $where;
    }



    /**
     * 获取用户列表返回JSON
     */

    public function getAjaxUserList($data=[]){
        $leyword=$data['term'];
        if(trim($leyword)!=''){
            $info=session('member_info');
            $where["username"]=['like', '%'.$leyword.'%'];
            $dataRes=[];
            if($info['leader_id']==0){
                $result = $this->modelMember->field("nickname,username")->where($where)->where("leader_id>1")->limit(10)->select();
                if($result){
                    foreach($result as $k=>$v){
                      $dataRes[]=$v['username'];
                    }
                    return $dataRes;
                }
                return $result;
            }elseif($info['leader_id']==1){
                $result = $this->modelMember->field("nickname,username")->where($where)->where("leader_id={$info['id']}")->limit(10)->select();
                if($result){
                    foreach($result as $k=>$v){
                        $dataRes[]=$v['username'];
                    }
                    return $dataRes;
                }
                return $result;
            }

        }
    }

    
    /**
     * 网站添加
     */
    public function webAdd($data = [])
    {
        $validate_result = $this->validateWeblist->scene('add')->check($data);
        if (!$validate_result) {
            return [RESULT_ERROR, $this->validateWeblist->getError()];
        }
        $userinfo=$this->modelMember->where("username='{$data['username']}'")->find();
        if(!$userinfo){
            return [RESULT_ERROR,"你输入的用户不存在"];
        }
        $isurl=$this->modelWeblist->where("url='{$data['url']}'")->select();
        if($isurl){
            return [RESULT_ERROR,"你输入的网站已存在，请别重复添加"];
        }
        
        $url = url('webList');
        
        $data['userid']  = $userinfo['id'];
        $data['userpid']  = $userinfo['leader_id'];
        $result = $this->modelWeblist->setInfo($data);
        
        $result && action_log('新增', '新增网站，url：' . $data['url']);
        
        return $result ? [RESULT_SUCCESS, '网站添加成功', $url] : [RESULT_ERROR, $this->modelWeblist->getError()];
    }

    /**
     * 网站修改
     */
    public function webEdit($data = [])
    {

        $validate_result = $this->validateWeblist->scene('edit')->check($data);

        if (!$validate_result) {

            return [RESULT_ERROR, $this->validateWeblist->getError()];
        }

        $url = url('webList');

        $result = $this->modelWeblist->setInfo($data);

        $result && action_log('编辑', '网站完成，id：' . $data['id']);

        return $result ? [RESULT_SUCCESS, '网站编辑成功', $url] : [RESULT_ERROR, $this->modelWeblist->getError()];
    }

    /**
     * 网站删除
     */
    public function webDel($where = [])
    {
        $url = url('webList');
        Db::startTrans();
        try{
         $info=$this->modelWeblist->where($where)->delete();
         $key=$this->modelKeywords->where("web_id={$where['id']}")->delete();
         $rank=$this->modelKeywordsRank->where("web_id={$where['id']}")->delete();
            // 提交事务
            Db::commit();
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            return [RESULT_ERROR, $this->modelMember->getError(), $url];
        }
        action_log('删除', '删除网站成功，ID：' . $where['id']);

        return [RESULT_SUCCESS, '网站删除成功，网站下关键词也被删除', $url];
    }

    /**
     * 修改网站状态
     */
    public function webstatus($where = []){
        $url = url('webList');
        Db::startTrans();
        if($where['status']==1){
            $status=0;
        }else{
            $status=1;
        }
        try{
            $info=$this->modelWeblist->where($where)->update(['status'=>$status]);
            $key=$this->modelKeywords->where("web_id={$where['id']}")->update(['jk_status'=>$status]);
            // 提交事务
            Db::commit();
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            return [RESULT_ERROR, $this->modelKeywords->getError(), $url];
        }
        action_log('修改', '修改状态成功，ID：' . $where['id']);
        if($where['status']==1){
            return [RESULT_SUCCESS, '修改状态成功，网站下关键词全部禁用', $url];
        }else{
            return [RESULT_SUCCESS, '修改状态成功，网站下关键词全部启用', $url];
        }

    }

    /**
     * 获取网站信息
     */
    public function getWebInfo($where = [], $field = true){
        $info = $this->modelWeblist->getInfo($where, $field);

        $info['username'] = $this->modelMember->getValue(['id' => $info['userid']], 'username');
        return $info;
    }

    /**
     * 获取关键词信息
     */
    public function getKeywordInfo($where = [], $field = true){
        $info = $this->modelKeywords->getInfo($where, $field);
        return $info;
    }

    /**
     * 添加网站关键词
     */

    public function keyWordAdd($data = [] ,$jump = 'keywordlist'){

        $userid=(int)tp_decrypt($data['userid']);
        $web_id=(int)tp_decrypt($data['urlid']);
		
        if($userid<=0){return [RESULT_ERROR, "参数1错误"];}
        //------------------------------判断是否存在-获取父ID
        $info=$this->modelMember->where("id={$userid}")->find();
        if(!$info){return [RESULT_ERROR, "参数1错误"];}
        if($web_id<=0){return [RESULT_ERROR, "参数2错误"];}
        if(empty($data['keyword_data']['keyword'][0])){return [RESULT_ERROR, "请输入关键词"];}
        if(empty($data['keyword_data']['price_one'][0])){return [RESULT_ERROR, "第一页价格不能为空"];}
        if(empty($data['search_engine'])|| count($data['search_engine'])==0){return [RESULT_ERROR, "请选择搜索引擎"];}
        //------------------------判断是否是启动,如果是代理或者后台添加直接调取接口
        $userinfo=session('member_info');
        $postData=[];
        if($userinfo['leader_id']<=1 && $data['jk_status']=='1'){//-------后台添加
              $webName=$this->modelWeblist->where("id={$web_id}")->find()['url'];
            foreach($data['search_engine'] as $k1=>$v1){
                $postData[]=['app_key'=>config('TD_APPKEY'),'url'=>$webName,'search_engine'=>$v1,'notify_url'=>config('api_domain')."/api.php/seo/getrank"];
            }
        }
        //---------------------------------------------------------
        $insertData=[];$keyarr=[];
        foreach($data['keyword_data']['keyword'] as $k=>$v){
            $num=$k+1;
            if(trim($v)==""){return [RESULT_ERROR, "请输入【"."第".$num."行】关键词"];}
            $pageone=$data['keyword_data']['price_one'][$k];if(trim($pageone)==''){return [RESULT_ERROR, "请输入【"."第".$num."行】第一页价格"];}
            $pagetow=$data['keyword_data']['price_tow'][$k]?$data['keyword_data']['price_tow'][$k]:0;
            $cbone=$data['keyword_data']['cb_one'][$k]?$data['keyword_data']['cb_one'][$k]:0;
            $cbtow=$data['keyword_data']['cb_tow'][$k]?$data['keyword_data']['cb_tow'][$k]:0;
            foreach($data['search_engine'] as $k3=>$v3) {
                if ($this->modelKeywords->where("web_id={$web_id} and keywords='{$v}' and search_engine='{$v3}'")->find()) {
                    return [RESULT_ERROR, "【" . "第" . $num . "行】关键词-网站-浏览器已存在，请检查"];
                }
                $insertData[] = ['userid' => $userid, 'userpid' => $info['leader_id'], 'web_id' => $web_id, 'create_time' => time(), 'keywords' => $v, 'page_one' => $pageone, 'page_tow' => $pagetow, 'page_one_cb' => $cbone, 'page_tow_cb' => $cbtow, 'search_engine' => $v3, 'jk_status' => $data['jk_status']];
            }
            $keyarr[]=$v;//-----------------------关键词数组
        }
        $result = $this->modelKeywords->insertAll($insertData);
        if($result){//------------------开始post接口
            foreach($postData as $k2=>$v2){
                $v2['keywords']=implode("|",$keyarr);
                $res=http_curl(config('TD_API_URL')."/seo/morerank",$v2);
                $resArray=json_decode($res,true);
                if(is_array($resArray) && $resArray['code']=='0'){
                    Db::name('keywords_log')->insert(['taskid'=>$resArray['data']['taskid'],'keywords'=>$v2['keywords'],'create_time'=>time(),'url'=>$v2['url'],'search_engine'=>$v2['search_engine']]);
                }
            }
        }

        $result && action_log('新增', '新增关键词，url：' . "批量添加");
        $url = url($jump);
        return $result ? [RESULT_SUCCESS, '关键词添加成功', $url] : [RESULT_ERROR, $this->modelKeywords->getError()];
    }

    /***
     * 添加关键词获取网站url跟用户名
     */
    public function addKeywordGetinfo($data=[]){

        $info = $this->modelWeblist->table(SYS_DB_PREFIX."member a,".SYS_DB_PREFIX."weblist b")->field("a.username,a.id as userid,b.url,b.id as urlid")
            ->where("b.id={$data['id']} and a.id=b.userid")->find();
         $info['id']=$data['id'];
         $info['userid']=tp_encrypt($info['userid']);
         $info['urlid']=tp_encrypt($info['urlid']);
        return $info;
    }


    /**
     * 修改关键词信息
     */

    public function keywordEdit($data=[]){

        $validate_result = $this->validateKeyword->scene('edit')->check($data);

        if (!$validate_result) {

            return [RESULT_ERROR, $this->validateKeyword->getError()];
        }

        $url = url('keywordList');

        $result = $this->modelKeywords->setInfo($data);

        $result && action_log('编辑', '关键词完成，id：' . $data['id']);

        return $result ? [RESULT_SUCCESS, '关键词编辑成功', $url] : [RESULT_ERROR, $this->modelKeywords->getError()];
    }
    /**
     * 批量修改关键词信息
     */
    public function keywordAllEdit($data=[]){
        if(count($data['ids'])==0){return [RESULT_ERROR, "参数错误"];}
        if(trim($data['page_one'])=='' && trim($data['page_tow'])=='' && trim($data['page_one_cb'])=='' && trim($data['page_tow_cb'])=='' && trim($data['jk_status'])==''){
            return [RESULT_ERROR, "请输入修改数据"];
        }
        $upInfo=[];
        if(trim($data['page_one'])!=''){$upInfo['page_one']=trim($data['page_one']);}
        if(trim($data['page_tow'])!=''){$upInfo['page_tow']=trim($data['page_tow']);}
        if(trim($data['page_one_cb'])!=''){$upInfo['page_one_cb']=trim($data['page_one_cb']);}
        if(trim($data['page_tow_cb'])!=''){$upInfo['page_tow_cb']=trim($data['page_tow_cb']);}
        if(trim($data['jk_status'])!=''){$upInfo['jk_status']=trim($data['jk_status']);}
        is_array($data['ids']) ? $ids = array_extract((array)$data['ids'], 'value') : $ids[] = (int)$data['ids'];
        foreach($ids as $k=>$v){
           $this->modelKeywords->where("id={$v}")->update($upInfo);
        }
        return [RESULT_SUCCESS, '关键词批量修改成功',$data['url']];
    }

    /**
     * 关键词删除
     */
    public function keywordDel($where = [])
    {
        $url=url("keywordlist");
        Db::startTrans();
        try{
            $key=$this->modelKeywords->where("id={$where['id']}")->delete();
            $rank=$this->modelKeywordsRank->where("keywodsid={$where['id']}")->delete();
            // 提交事务
            Db::commit();
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            return [RESULT_ERROR, $this->modelKeywords->getError(), $url];
        }
        action_log('删除', '删除关键词成功，ID：' . $where['id']);

        return [RESULT_SUCCESS, '关键词删除成功，关键词查询日志也被删除', $url];
    }





    /**
     * 获取充值列表
     */
    public function getChongzhiList($where = [], $field = 'm.*,b.username,c.username as gs', $order = 'create_time desc', $paginate = DB_LIST_ROWS){

        //=============================条件
        $userinfo=session('member_info');
        if($userinfo['leader_id']==1){
            $where['m.cz_userid']=$userinfo['id'];
        }elseif($userinfo['leader_id']>1){
            $where['m.userid']=$userinfo['id'];
        }
        //--------------------------------条件
        $this->modelChongzhi->alias('m');
        $join = [
            [SYS_DB_PREFIX . 'member b', 'm.userid = b.id', 'LEFT'],
            [SYS_DB_PREFIX . 'member c', 'm.cz_userid = c.id', 'LEFT'],
        ];

        $where['m.' . DATA_STATUS_NAME] = ['neq', DATA_DELETE];

        $this->modelChongzhi->join = $join;
        $wlist=$this->modelChongzhi->getList($where, $field, $order, $paginate);


        return $wlist;

    }

    /***
     * 补录排名
     */
    public function Bulu($data=[]){

        $validate_result = $this->validateKeyword->scene('bulu')->check($data);
        if (!$validate_result) {
            return [RESULT_ERROR, $this->validateKeyword->getError()];
        }
        $data['keyword_id']=tp_decrypt($data['keyword_id']);
        $data['create_time']=strtotime($data['create_time'])+60;
        $start_time=strtotime(date("Y-m-d",$data['create_time']))+1;
        $endtime=$start_time+60*60*24;
        $re=Db::name("consumption")->where("keyword_id={$data['keyword_id']}")->where('create_time','between',[$start_time,$endtime])->select();
        if($re){
            return [RESULT_ERROR, "你选择补录的时间已经存在扣费记录，请检查在补录"];
        }
        //------------------------------开始补录
        if($data['url']!=''){
            $url=$data['url'];
        }else{$url=url('keywordlist.');};
        unset($data['url']);
        Db::startTrans();
        try {
            //查询userid
            $res = Db::name("keywords")->where("id={$data['keyword_id']}")->select()['0'];
            if($data['page']=='1'){
                Db::name("member")->where("id={$res['userid']}")->setDec("price",$res['page_one']);
                $data['cb']=$res['page_one_cb'];
                $data['price']=$res['page_one'];
            }elseif($data['page']=='2'){
                Db::name("member")->where("id={$res['userid']}")->setDec("price",$res['page_tow']);
                $data['cb']=$res['page_tow_cb'];
                $data['price']=$res['page_tow'];
            }
            $data['rank']=$data['rand'];
            unset($data['rand']);
            $data['userid']=$res['userid'];
            $data['userpid']=$res['userpid'];
            $data['keyword_name']=$res['keywords'];
            $data['type']=1;
            if($data['cover_id']>0){
                $data['img_url']=get_picture_url($data['cover_id']);
            }else{
                $data['img_url']="";
            }
            unset($data['cover_id']);

            $result=Db::name("consumption")->insert($data);
            Db::commit();
        } catch (\Exception $e) {
            return [RESULT_ERROR, "系统错误"];
        }
        $result && action_log('补录成功', '补录成功');
        return $result ? [RESULT_SUCCESS, '补录成功', $url] : [RESULT_ERROR, "补录失败"];
    }

    /**
     * 充值
     */

    public function chongzhiAdd($data=[]){
        $validate_result = $this->validateKeyword->scene('chongzhi')->check($data);
        if (!$validate_result) {
            return [RESULT_ERROR, $this->validateKeyword->getError()];
        }
        $userid=tp_decrypt($data['userid']);
        if((int)$userid>0){}else{return [RESULT_ERROR, "参数错误"];}
        //----------------判断是否是用户
        $info=$this->modelMember->where("id={$userid}")->find();
      /*  if($info['leader_id']<=1){
            return [RESULT_ERROR, "代理用户不能充值"];
        }*/
       //---------------判断是否有权限给用户充值
        $userinfo=session('member_info');
        if($info['leader_id']!=$userinfo['id'] && $userinfo['id']!=1){
            return [RESULT_ERROR, "你没权限充值"];
        }
        //----------------------------------开始充值

        Db::startTrans();
        try{
            $this->modelMember->where("id={$userid}")->setInc('price',$data['price']);

            $data['cz_userid']=$userinfo['id'];
            $data['userid']=$userid;
            $data['pay_status'] = 1;
            $result = $this->modelChongzhi->setInfo($data);
            //--------------------如果是代理用户就取余额
            if($userinfo['leader_id']==1){//------------------扣除余额
                $this->modelMember->where("id={$userinfo['id']}")->setDec('price',$data['price']);
            }
            //提交事务
            Db::commit();
        } catch (\Exception $e) {
              // 回滚事务
            Db::rollback();
            return [RESULT_ERROR, "充值失败"];
        }
        $result && action_log('充值成功', '充值成功，id：' . $data['userid']);

        if($info['leader_id']==1){
            $url=url("member/memberlist");
        }else{
            $url=url("member/memberyhlist");
        }

        return $result ? [RESULT_SUCCESS, '充值成功', $url] : [RESULT_ERROR, $this->modelChongzhi->getError()];

    }


    /****
     *用户 消费统计
     */

    /**
     * 获取消费记录表
     */
    public function getXiaofeiTjList($where = [], $field = 'm.*,b.username as dlname', $order = 'm.create_time desc', $paginate = DB_LIST_ROWS){

        $this->modelMember->alias('m');
        $join = [
            [SYS_DB_PREFIX . 'member b', 'b.id = m.leader_id', 'LEFT'],
           // [SYS_DB_PREFIX . 'consumption ff', 'ff.userid=m.id', 'LEFT'],
            //[SYS_DB_PREFIX . 'weblist c', 'c.id = ff.web_id', 'LEFT'],
        ];

        $where['m.' . DATA_STATUS_NAME] = ['neq', DATA_DELETE];
        $this->modelMember->join = $join;
        $wlist=$this->modelMember->getList($where, $field, $order, $paginate);

        return $wlist;

    }

    /**
     * 获取消费列表搜索条件
     */
    public function getXiaofeiTjListWhere($data = [])
    {

        $where = [];

        !empty($data['search_data']) && $where['m.username'] = ['like', '%'.$data['search_data'].'%'];

        $info=session('member_info');
        if($info['leader_id']==1){
            $where['m.leader_id']=['eq',$info['id']];
        }elseif($info['leader_id']>1){
            $where['m.id']=['eq',$info['id']];
        }

        return $where;
    }
    /**
     * 合计消费
     */
    public function getHejiXfInfo($where){
        $data=[];
        //==================获取日期
        //pho 获取三个月前时间戳
        $three_time=strtotime("-0 year -3 month -0 day");

        //------------------累计消费
        $data['ljxf']=Db::name('member')->table("kf_member m,kf_consumption b")->where($where)->where("m.id=b.userid")->sum("b.price");
        //-------------上月消费
        $data['syxf']=Db::name('member')->table("kf_member m,kf_consumption b")->where($where)->where("m.id=b.userid")->whereTime('b.create_time', 'last month')->sum("b.price");
         //------------今日消费
        $data['jrxf']=Db::name('member')->table("kf_member m,kf_consumption b")->where($where)->where("m.id=b.userid")->whereTime('b.create_time','today')->sum('b.price');
        //-------------昨日消费
        $data['zrxf']=Db::name('member')->table("kf_member m,kf_consumption b")->where($where)->where("m.id=b.userid")->whereTime('b.create_time', 'yesterday')->sum("b.price");
        //--------------近七天消费
        $data['j7day']=Db::name('member')->table("kf_member m,kf_consumption b")->where($where)->where("m.id=b.userid")->whereTime('b.create_time', 'week')->sum("b.price");
        //--------------近一月消费
                $data['onemom']=Db::name('member')->table("kf_member m,kf_consumption b")->where($where)->where("m.id=b.userid")->whereTime('b.create_time', 'month')->sum("b.price");
        //--------------近三月消费
                $data['j3mom']=Db::name('member')->table("kf_member m,kf_consumption b")->where($where)->where("m.id=b.userid")->where('b.create_time','between',[$three_time,time()])->sum("b.price");
        //--------------近一年消费
                $data['onyer']=Db::name('member')->table("kf_member m,kf_consumption b")->where($where)->where("m.id=b.userid")->whereTime('b.create_time', 'year')->sum("b.price");
    return $data;
    }
    /**
     * 统计财务--
     */
    public function getXfCont($lis){
        //==================获取日期
        //pho 获取三个月前时间戳
        $three_time=strtotime("-0 year -3 month -0 day");
        $tls=[];
        foreach($lis as $k=>$v){
            //----------------------充值总金额
           // $tls[$k+1]['czAllNum']=Db::name("chongzhi")->where("userid={$v['id']}")->sum('price');
            //--------------------消费总金额
            $tls[$k+1]['xfAllNum']=Db::name("consumption")->where("userid={$v['id']}")->sum('price');
            //--------------------今日消费
            $tls[$k+1]['jrAllNum']=Db::name("consumption")->where("userid={$v['id']}")->whereTime('create_time','today')->sum('price');
            //--------------------上月消费记录
            $tls[$k+1]['syXfNum']=Db::name("consumption")->where("userid={$v['id']}")->whereTime('create_time', 'last month')->sum('price');
            //--------------------昨天消费记录
            $tls[$k+1]['zrXfNum']=Db::name("consumption")->where("userid={$v['id']}")->whereTime('create_time', 'yesterday')->sum('price');
            //-------------------近七天消费记录
            $tls[$k+1]['j7dayXfNum']=Db::name("consumption")->where("userid={$v['id']}")->whereTime('create_time', 'week')->sum('price');
            //-------------------本月消费记录
            $tls[$k+1]['byXfNum']=Db::name("consumption")->where("userid={$v['id']}")->whereTime('create_time', 'month')->sum('price');
            //-------------------三月前消费记录
            $tls[$k+1]['threeXfNum']=Db::name("consumption")->where("userid={$v['id']}")->where('create_time','between',[$three_time,time()])->sum('price');
            //-------------------一年内消费记录
            $tls[$k+1]['yyqXfNum']=Db::name("consumption")->where("userid={$v['id']}")->whereTime('create_time', 'year')->sum('price');
        }
        return $tls;
    }

    //消费记录导出
    
    public function xiaofeiexcel($where = [])
	{
		$member = session('member_info');
		
        if($member['id'] == 1){
        	$wlist = Db::table('kf_consumption')->alias('a')
        	->join('kf_member b','a.userid = b.id')
        	->join('kf_keywords c','a.keyword_id = c.id')
			->join('kf_weblist d','c.web_id = d.id')
        	->field('b.nickname,a.*,d.url')
        	->whereTime('a.create_time', $where['create_time'])
        	->select();
        }else{
        	$table = Db::table('kf_consumption')->where(['userpid' => $member['id']])->select();
			if(!empty($table)){
				$wlist = Db::table('kf_consumption')->alias('a')
				->join('kf_member b','a.userid = b.id')
	        	->join('kf_keywords c','a.keyword_id = c.id')
				->join('kf_weblist d','c.web_id = d.id')
				->field('b.nickname,a.*,d.url')
				->whereTime('a.create_time', $where['create_time'])
				->where(['a.userpid' => $member['id']])
				->select();
			}else{
				$wlist = Db::table('kf_consumption')->alias('a')
				->join('kf_member b','a.userid = b.id')
	        	->join('kf_keywords c','a.keyword_id = c.id')
				->join('kf_weblist d','c.web_id = d.id')
				->field('b.nickname,a.*,d.url')
				->whereTime('a.create_time', $where['create_time'])
				->where(['a.userid' => $member['id']])
				->select();
			}
        }
	
		$titles = "关键词,网站地址,消费金额,用户,搜索引擎,排名,第几页";
	    $keys   = "keyword_name,url,price,nickname,search_engine,rank,page";
	    action_log('导出', '导出关键词列表');   
		export_excel($titles, $keys, $wlist, '消费列表' . date("Y-m-d",time()));
	}
    
   //关键词列表导出
    public function excel()
	{
		$member = session('member_info');
		$member_id = $member['id'];
        if($member['id'] == 1){
        	$wlist = Db::table('kf_keywords')->alias('a')->join('kf_weblist w','a.web_id = w.id')->join('kf_member m','a.userid = m.id')->select();
        }else{
        	$table = Db::table('kf_keywords')->where(['userpid' => $member['id']])->select();
			if(!empty($table)){
				$wlist = Db::table('kf_keywords')->alias('a')->join('kf_weblist w','a.web_id = w.id')->join('kf_member m','a.userid = m.id')->where("a.userpid = $member_id")->select();
			}else{
				$wlist = Db::table('kf_keywords')->alias('a')->join('kf_weblist w','a.web_id = w.id')->join('kf_member m','a.userid = m.id')->where("a.userid = $member_id")->select();
			}
        }
        
	    $titles = "关键词,所属域名,引擎搜索,所属用户,第一页价格,第二页价格,当前排名";
	    $keys   = "keywords,url,search_engine,nickname,page_one,page_tow,rank";
	    action_log('导出', '导出关键词列表');   
	    
	    export_excel($titles, $keys, $wlist, '关键词列表' . date("Y-m-d",time()));
	}



    //关键词查询
    public function keywselect($data = [])
	{
		
		if(isset($data['search_keywords'])){
			$data['search_keywords'] = urlencode($data['search_keywords']);
			$url = 'http://index.chinaz.com/index/' . $data['search_keywords'] . '/';
			$data = file_get_contents($url);
			preg_match_all("/<script.*?>(.*?)<\/script>/is",$data,$canshu);
			$result = explode(':',$canshu[1][17]);
			
			//360
			$haosou = explode(',',$result[9]);
			$data_360 = Db('keyzsprice')->where(['zhisu_range'=>['egt',$haosou[0]],'search_engin' => '360','status' => 1])->select();
			if(!isset($data_360[0])){
				$data_360[0] = null;
			}
			//360移动
			
			$data_360_mobile = Db('keyzsprice')->where(['zhisu_range'=>['egt',$haosou[0]],'search_engin' => '360移动','status' => 1])->select();
			if(!isset($data_360_mobile[0])){
				$data_360_mobile[0] = null;
			}
			//搜狗pc
			$sougou_pc = explode(',',$result[11]);
			$data_sougou_pc = Db('keyzsprice')->where(['zhisu_range'=>['egt',$sougou_pc[0]],'search_engin' => '搜狗','status' => 1])->select();
			if(!isset($data_sougou_pc[0])){
				$data_sougou_pc[0] = null;
			}
			//搜狗移动
			$sougou_mobile = explode(',',$result[13]);
			$data_sougou_mobile = Db('keyzsprice')->where(['zhisu_range'=>['egt',$sougou_mobile[0]],'search_engin' => '搜狗移动','status' => 1])->select();
			if(!isset($data_sougou_mobile[0])){
				$data_sougou_mobile[0] = null;
			}
			//神马
			$shenma = explode('}',$result[17]);
			$data_shenma = Db('keyzsprice')->where(['zhisu_range'=>['egt',$shenma[0]],'search_engin' => '神马','status' => 1])->select();
			if(!isset($data_shenma[0])){
				$data_shenma[0] = null;
			}
		    //百度
		    $baidu = explode(',',$result[5]);
			$data_baidu = Db('keyzsprice')->where(['zhisu_range'=>['egt',$baidu[0]],'search_engin' => '百度','status' => 1])->select();
			if(!isset($data_baidu[0])){
				$data_baidu[0] = null;
			}
		    //百度移动
		    $baidu_mobile = explode(',',$result[5]);
			$data_baidu_mobile = Db('keyzsprice')->where(['zhisu_range'=>['egt',$baidu[0]],'search_engin' => '百度移动','status' => 1])->select();
			if(!isset($data_baidu_mobile[0])){
				$data_baidu_mobile[0] = null;
			}
			$info['360'] = $data_360[0];
			$info['360_mobile'] = $data_360_mobile[0];
			$info['sougou_pc'] = $data_sougou_pc[0];
			$info['sougou_mobile'] = $data_sougou_mobile[0];
			$info['shenma'] = $data_shenma[0];
			$info['baidu'] = $data_baidu[0];
			$info['baidu_mobile'] = $data_baidu_mobile[0];
			
			
			
			return $info;
		}
	}	
	//关键词指数列表
	public function kwzspriceList($where = [], $field = true, $order = '', $paginate = DB_LIST_ROWS)
	{	
		 	return $this->modelKeyzsprice->getList($where, $field, $order, $paginate);
	}		
		

	
    //关键词指数删除
    public function zhishudel($where = []){
    
  
        
        $result = $this->modelKeyzsprice->deleteInfo($where);
        
        $result && action_log('删除', '关键词指数删除' . '，where：' . http_build_query($where));
        
        return $result ? [RESULT_SUCCESS, '删除成功'] : [RESULT_ERROR, $this->modelKeyzsprice->getError()];
   
    }
	
	//查询单条关键词指数
	public function zhishuinfo($where = [],$field = true){
		 return $this->modelKeyzsprice->getInfo($where, $field);
	}
	
	//关键词指数编辑
	public function zhishuedit($data = [])
	{
		$where = ['id' =>$data['id']];
		$url = url('kwzsprice');
		$validate_result = $this->validateKeyzsprice->scene('edit')->check($data);
		if (!$validate_result) : return [RESULT_ERROR, $this->validateKeyzsprice->getError()]; endif;
		$result = $this->modelKeyzsprice->updateInfo($where, $data);
		$result && action_log('修改','关键词指数修改ID=' . $data['id']);
		return $result ? [RESULT_SUCCESS,'关键词指数修改成功',$url] : [RESULT_ERROR,$this->modelKeyzsprice->getError()];
	}
	
	//关键词指数新增
	public function kwzspriceadd($data = [])
	{
		$data['create_time'] = time();
		$validate_result = $this->validateKeyzsprice->scene('edit')->check($data);
		if (!$validate_result) : return [RESULT_ERROR, $this->validateKeyzsprice->getError()]; endif;
		$result = Db('keyzsprice')->insert($data);
		
		$url = url('kwzsprice');
		$result && action_log('新增','新增关键词指数价格');
		
		return $result ? [RESULT_SUCCESS,'新增关键词指数价格成功',$url] : [RESULT_ERROR,$this->modelKeyzsprice->getError()];
	}
	
	//
	public function keywseladd($data = [])
	{
		if($data['searchkey'] == '')
		{
			return [RESULT_ERROR,'请搜索关键词价格!'];
		}else{
			if($data['search_keywords'] == '')
		{
			return [RESULT_ERROR,'请添加关键词哦!'];
		}else{
			$web = Db('weblist')->where(['id' => $data['web_name']])->select();
			if(!empty($web)){
				$info = Db('keywords')->where(['search_engine'=> $data['search_engine'],'keywords' => $data['search_keywords'],'web_id' => $data['web_name']])->select();
		
				if(empty($info))
				{
				    $data['userid'] = tp_encrypt($web[0]['userid']);
					$data['urlid'] = tp_encrypt($web[0]['id']);
					$data['jk_status'] = 0;
					$data['keyword_data'][] = $data['search_keywords'];
					for($i=0;$i<count($data['search_engine']);$i++)
					{
						$data['keyword_data'][$i] = $data['search_keywords'];
					}
					unset($data['search_keywords']);
					unset($data['web_name']);
					//组装数据
					$info['userid'] = $data['userid'];
					$info['urlid']  = $data['urlid'];
					$info['search_engine'][] = $data['search_engine'];
					$info['keyword_data']['keyword'][] = $data['keyword_data'][0];
					$info['keyword_data']['price_one'][] = $data['price'][$data['search_engine']]['page_one'];
					$info['keyword_data']['price_tow'][] = $data['price'][$data['search_engine']]['page_two'];
					$info['keyword_data']['cb_one'][] = 0;
					$info['keyword_data']['cb_tow'][] = 0;
					$info['jk_status'] = $data['jk_status'];
					$jump = 'keywselect';
					return $this->keyWordAdd($info,$jump);
					
					
				}else{
					return [RESULT_ERROR,'该关键词已经添加了此搜索引擎,请选择其他搜索引擎'];
				}
				
			}else{
				
				return [RESULT_ERROR,'这个网站不存在,请到网站管理添加'];
				
			}
		}
		}
	    
		
		

	}
	
	/*
	 * 每个用户网站
	 */
	public function member_web()
	{
		if(MEMBER_ID == 1)
		{
			$data = Db('weblist')->select();
		}else{
			$info = Db('weblist')->where(['userpid' => 	MEMBER_ID])->select();
			if(!empty($info))
			{
				$data = Db('weblist')->where(['userpid' => MEMBER_ID])->select();
			}else{
				$data = Db('weblist')->where(['userid' => MEMBER_ID])->select();
			}
		}
		return $data;
	}
	
	
	/*
	 * 获取单条充值记录消息
	 */
	public function chongzhiInfo($where = [])
	{
		$data = Db('chongzhi')->where($where)->select();
//		echo "<pre>";
//		print_r($data)
		return $data;
	}
	
	/*
	 * 修改充值备注
	 */
	public function chongzhiUpdate($data = [])
	{
		$where = ['id' => $data['id']];
		$result = Db('chongzhi')->where($where)->update($data);
		action_log('修改','修改充值备注id:' . $data['id']);
		return $result ? [RESULT_SUCCESS,'修改成功',url('chongzhilist')] : [RESULT_ERROR,'修改失败'];
	}
	
	
	/*
	 * 网站导出
	 */
	public function webexcel()
	{
		$member = session('member_info');
		$member_id = $member['id'];
        if($member['id'] == 1){
        	$wlist = Db('weblist')->alias('a')->join('kf_member w','a.userid = w.id')->field('a.*,w.nickname,w.leader_id')->select();
			
		
        }else{
        	$table = Db('weblist')->where(['userpid' => $member['id']])->select();
			if(!empty($table)){
				$wlist = Db('weblist')->alias('a')->join('kf_member w','a.userid = w.id')->field('a.*,w.nickname,w.leader_id')->where(['userpid' => $member['id']])->select();

			}else{
							$wlist = Db('weblist')->alias('a')->join('kf_member w','a.userid = w.id')->field('a.*,w.nickname,w.leader_id')->where(['userid' => $member['id']])->select();
				
			}
        }
			foreach($wlist as $k => $v)
			{
				$wlist[$k]['leader_id'] = Db('member')->where(['id' => $wlist[$k]['leader_id']])->field('nickname')->find();
				$wlist[$k]['leader_id'] = $wlist[$k]['leader_id']['nickname'];
				$wlist[$k]['keynum'] = count(Db('keywords')->where(['web_id' => $wlist[$k]['id']])->select());
				$wlist[$k]['price'] = Db('keywords')->where(['web_id' => $wlist[$k]['id']])->field('id')->select();
			
				
				
			}
			
			
			

	    $titles = "域名,网站名称,所属代理,所属客户,关键词数量,网站后台地址,网站后台用户名,网站后台密码,ftp地址,ftp用户名,ftp密码,备注";
	    $keys   = "url,web_name,leader_id,nickname,keynum,bake_name,bake_username,base_pass,ftp_addr,ftp_username,ftp_pass,beizhu";
	    action_log('导出', '导出关键词列表');   
	    
	    export_excel($titles, $keys, $wlist, '网站列表' . date("Y-m-d",time()));
	}
}
