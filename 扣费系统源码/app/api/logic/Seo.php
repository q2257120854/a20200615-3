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

namespace app\api\logic;


use app\api\error\CodeBase;
use app\api\error\Common as CommonError;
use think\Db;
/**
 * 接口文档逻辑
 */
class Seo extends ApiBase
{

    /**
     * 查询关键词回调设置
     */
    public function getRank($data=[])
    {
        $validate_result = $this->validateSeo->scene('vaildate')->check($data);

        if (!$validate_result) {

            return CommonError::$getKeywordErrorNo3;
        }
        //==================任务ID认证
         $validate_result=DB::name('keywords_log')->where("taskid='{$data['taskid']}'")->find();
        if (!$validate_result) {
            return CommonError::$getKeywordError;
        }
        //---------------------------------------------任务ID存在开始添加历史排名，更新排名，扣除消费
        $taskid=$data['taskid'];
        $keyword=trim($data['keyword']);
        $search_engine=$data['search_engine'];
        $url=$data['url'];
        $area=$data['area'];
        $ip=$data['ip'];
        $rank=$data['rank'];
        $page=$data['page'];
        $img_url=$data['img_url'];
        $time=$data['time'];
        //-------------------------------------获取今日时间戳
        $today_start = strtotime(date('Y-m-d 00:00:00'));
        $today_end = strtotime(date('Y-m-d 23:59:59'));
        //------------------------查询获取参数
        $web_id=Db::name("weblist")->field('id')->where("url='{$url}'")->find()['id'];
        if($web_id>0){}else{ return CommonError::$getKeywordErrorNo1;}
        $keywordinfo=Db::name("keywords")->where("keywords='{$keyword}' and web_id={$web_id} and search_engine='{$search_engine}'")->find();
        $keywordid=$keywordinfo['id'];
        if($web_id>0){}else{ return CommonError::$getKeywordErrorNo2;}
        //-------------------判断加锁--------------------------------
        if (!file_exists(RUNTIME_PATH."lock/")){mkdir (RUNTIME_PATH."lock/",0777,true);}
        $lock_name=RUNTIME_PATH."lock/lock{$keywordid}.txt";
        if(!is_file($lock_name)){file_put_contents($lock_name,'1');}
        $fp = fopen($lock_name, "r");
        if(flock($fp,LOCK_EX)) {//----------开始加锁

        //-----------------------------------------------------------------
        Db::startTrans();
        try{
             //-------------------------添加历史排名
            Db::name("keywords_rank")->insert(['keywodsid'=>$keywordid,'taskid'=>$taskid,'Rank'=>$rank,'time'=>time(),'img_url'=>$img_url,'page'=>$page,'web_id'=>$web_id,'area'=>$area,'ip'=>$ip,'search_engine'=>$search_engine]);
            //----------------------------更新排名
             if(!Db::name("keywords")->where("id={$keywordid}")->whereTime('updatetime','today')->select()){//-----------------判断是否是第一次更新--
                 $res=Db::name("keywords")->where("id={$keywordid}")->update(['rank'=>$rank,'img_url'=>$img_url,'updatetime'=>time(),'taskid'=>$taskid]);
             }else{//-----其他节点更新
                if($rank!=0 && $keywordinfo['rank']==0){
                     $res=Db::name("keywords")->where("id={$keywordid}")->update(['rank'=>$rank,'img_url'=>$img_url,'updatetime'=>time(),'taskid'=>$taskid]);
                 }elseif($rank!=0 && $keywordinfo['rank']>$rank){
                     $res=Db::name("keywords")->where("id={$keywordid}")->update(['rank'=>$rank,'img_url'=>$img_url,'updatetime'=>time(),'taskid'=>$taskid]);
                 }
             }

            //------------------------扣除费用添加消费记录
            if($page==1 && $keywordinfo['page_one']>0){
                $map['create_time']=['between',[$today_start,$today_end]];
                 $ress=Db::name("consumption")->where("userid={$keywordinfo['userid']} and keyword_id={$keywordid}")->where($map)->find();
                if(!$ress){
                    Db::name("member")->where("id={$keywordinfo['userid']}")->setDec("price",$keywordinfo['page_one']);
                    Db::name("consumption")->insert(['userid'=>$keywordinfo['userid'],'userpid'=>$keywordinfo['userpid'],'keyword_id'=>$keywordid,'keyword_name'=>$keywordinfo['keywords'],'rank'=>$rank,'page'=>$page,'create_time'=>$time,'cb'=>$keywordinfo['page_one_cb'],'price'=>$keywordinfo['page_one'],'search_engine'=>$search_engine,'img_url'=>$img_url]);
                }else{//--------------------------如果存在判断是否是第二页扣费如果是第二页扣费就更新费用
                       if($ress['page']==2){//-------------开始更新
                            //1.返回第二页扣费记录
                           Db::name("member")->where("id={$keywordinfo['userid']}")->setInc("price",$ress['price']);
                           //-2.更新扣费价格
                           Db::name("consumption")->where("id={$ress['id']}")->update(['price'=>$keywordinfo['page_one'],'cb'=>$keywordinfo['page_one_cb'],'rank'=>$rank,'page'=>$page,'img_url'=>$img_url]);
                           //3.扣第一页份费用
                           Db::name("member")->where("id={$keywordinfo['userid']}")->setDec("price",$keywordinfo['page_one']);
                       }
                }

            }elseif($page==2 && $keywordinfo['page_tow']>0){
                $map['create_time']=['between',[$today_start,$today_end]];
                $ress=Db::name("consumption")->where("userid={$keywordinfo['userid']} and keyword_id={$keywordid}")->where($map)->find();
                if(!$ress) {
                    Db::name("member")->where("id={$keywordinfo['userid']}")->setDec("price", $keywordinfo['page_tow']);
                    Db::name("consumption")->insert(['userid' => $keywordinfo['userid'],'userpid'=>$keywordinfo['userpid'], 'keyword_id' => $keywordid, 'keyword_name' => $keywordinfo['keywords'], 'rank' => $rank,'cb'=>$keywordinfo['page_one_cb'], 'page' => $page, 'create_time' => $time, 'price' => $keywordinfo['page_tow'], 'search_engine' => $search_engine, 'img_url' => $img_url]);
                }
            }

            // 提交事务
            Db::commit();
        } catch (\Exception $e) {
            // 回滚事务
            Db::rollback();
            //执行完成解锁
            flock($fp,LOCK_UN);
            //关闭文件
            fclose($fp);
            return CommonError::$getKeywordErrorNo;
        }
            //执行完成解锁
            flock($fp,LOCK_UN);
        }
          //关闭文件
        fclose($fp);

    }



    /**
     * 实时推送关键词
     */

    public function runing(){
        set_time_limit(0);//设置超时时间哦
        ini_set('memory_limit', '1024M');
        //=========================删除昨天前的数据
        $today= strtotime(date("Y-m-d"));
        Db::name("runlog")->where("times<{$today}")->delete();
        //======================================================
        $list=Db::name("runlog")->field("id,search_engine,url,keywords,notify_url,app_key")->where("is_status=0")->limit(100)->select();
		
        if($list){
            foreach($list as $k=>$v){
                $id=$v['id'];unset($v['id']);
                $res=self::http_curl(config('TD_API_URL')."/seo/morerank",$v);
                $resArray=json_decode($res,true);
                if(is_array($resArray) && $resArray['code']=='0'){
                    Db::name('runlog')->where("id={$id}")->update(['is_status'=>1]);
                    Db::name('keywords_log')->insert(['taskid'=>$resArray['data']['taskid'],'keywords'=>$v['keywords'],'create_time'=>time(),'url'=>$v['url'],'search_engine'=>$v['search_engine']]);
                }
            }
        }
		
    }

    /**
     * @param array $data
     * 调用关键词查询接口
     */

    public function getTiming($data=[]){
        if(!self::is_run()){
            echo "频繁请求";die();
        }
        ignore_user_abort(true);
        set_time_limit(0);//设置超时时间哦
        ini_set('memory_limit', '1024M');
        
		$count=Db::name("keywords")->where(['youhua' => [['neq','-2'],['neq','2']]])->count();
		
        $Numer=50;///每一页数量
        $pageNum=ceil($count/$Numer);//总页数

        for($i=1;$i<=$pageNum;$i++){
            $start_from = ($i-1) * $Numer;
            //-----------------------------------------------
           
			$list = Db('keywords')->alias('a')->join('kf_weblist b','a.web_id = b.id')->where(['a.youhua' => [['neq','-2'],['neq','2']]])->field('a.keywords,a.search_engine,b.url')->limit($start_from,$Numer)->order("a.id desc")->select();
			
            if($list){
                $postArr=getKeywordPost($list);
                $insertData=[];
                foreach($postArr as $k=>$v){
                    $v['times']=time();
                    $insertData[]=$v;
                }
                Db::name('runlog')->insertAll($insertData);
            }
			
        }
	
		

        //-----------------------------------------------------------------------
       /* $count=Db::name("keywords")->where("status=1 and jk_status=1")->count();
        $Numer=50;///每一页数量
        $pageNum=ceil($count/$Numer);//总页数
        if(!empty($data['page'])){
            $page=$data['page'];
        }else{
            $page=1;
          if(!self::is_run()){
                 echo "频繁请求";die();
             }
        }
        td_echo("当前页数".$page."/".$pageNum);
        $start_from = ($page-1) * $Numer;
        $list=Db::name("keywords")->table("kf_keywords a,kf_weblist b")->field("a.keywords,a.search_engine,b.url")
            ->where("a.web_id=b.id")->limit($start_from,$Numer)->order("a.id desc")->select();
        if($list){
            $postArr=getKeywordPost($list);
            foreach($postArr as $k=>$v) {
                td_echo(implode("---",$v));
            }
            if($page==$pageNum){
                echo "完成";
            }else{
                td_jump(url("timing",["page"=>$page+1]),3);
            }
        }


        die();*/

  /*
        $count=Db::name("keywords")->where("status=1 and jk_status=1")->count();
        $Numer=50;///每一页数量
        $pageNum=ceil($count/$Numer);//总页数
        if(!empty($data['page'])){
            $page=$data['page'];
        }else{
            $page=1;
            if(!self::is_run()){
                echo "频繁请求";die();
            }
        }
        $start_from = ($page-1) * $Numer;
        //-----------------------------------------------
        $list=Db::name("keywords")->table("kf_keywords a,kf_weblist b")->field("a.keywords,a.search_engine,b.url")
            ->where("a.web_id=b.id and a.jk_status=1 and a.status=1")->limit($start_from,$Numer)->order("a.id desc")->select();
        if($list){
          //  td_echo("<style type=\"text/css\">body{font-size:12px;color: #333333;line-height:21px;}span{font-weight:bold;color:#FF0000}</style>");
            //td_echo("当前页数".$page."/".$pageNum);
            file_put_contents("page.txt","当前页数".$page."/".$pageNum."----".date("Y-m-d H:i:s"));
            $postArr=getKeywordPost($list);
            foreach($postArr as $k=>$v){
               // td_echo(implode("---",$v));
                $res=self::http_curl(config('TD_API_URL')."/seo/morerank",$v);
                $resArray=json_decode($res,true);
                if(is_array($resArray) && $resArray['code']=='0'){
                    Db::name('keywords_log')->insert(['taskid'=>$resArray['data']['taskid'],'keywords'=>$v['keywords'],'create_time'=>time(),'url'=>$v['url'],'search_engine'=>$v['search_engine']]);
                }

            }

            if($page==$pageNum){
                echo "完成";
            }else{
                //td_jump(url("timing",["page"=>$page+1]),5);
                self::http_get(config("api_domain").url("timing",["page"=>$page+1]));
            }
        }*/

    }

    /**
     * 判断是否运行
     */
    static function is_run(){
        if(!is_file("./timeming.txt")){
            $runtime=time();
            file_put_contents("./timeming.txt",$runtime);
            return true;
        }else{
            $runtime=file_get_contents("./timeming.txt");
            if(time()-$runtime>2*3600){
                $runtime=time();
                file_put_contents("./timeming.txt",$runtime);
                return true;
            }else{
                return false;
            }
        }
    }
     /**
     * @param $url
     * @param string $data
     * @param int $type
     * @return mixed|string
     * httpcurl请求
     */
    static function http_curl($url,$data="",$type=0){
        if($type==0){
            $usergent= 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)';
        }else{
            $usergent="Mozilla/5.0 (Linux; Android 8.0.0; BKL-AL00 Build/HUAWEIBKL-AL00; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/63.0.3239.83 Mobile Safari/537.36 T7/10.13 baiduboxapp/10.13.0.11 (Baidu; P1 8.0.0)";
        }
        ///开始使用curl
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
        curl_setopt($ch, CURLOPT_USERAGENT,$usergent);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt($ch, CURLOPT_AUTOREFERER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $output = curl_exec($ch);
        if (curl_errno($ch)) {
            return curl_error($ch);
        }
        curl_close($ch);
        return $output;
    }


    static function http_get($url,$herder=[]) {

        //初始化
        $curl = curl_init();
        //设置抓取的url
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);

        curl_setopt($curl, CURLOPT_TIMEOUT,3);
        //设置头文件的信息作为数据流输出
        curl_setopt($curl, CURLOPT_HEADER, 1);
        //设置获取的信息以文件流的形式返回，而不是直接输出。
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        curl_setopt($curl, CURLOPT_HTTPHEADER, $herder);
        //执行命令
        $data = curl_exec($curl);
        //关闭URL请求
        curl_close($curl);
        return  $data;
    }
}
