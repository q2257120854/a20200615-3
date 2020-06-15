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

use app\common\logic\LogicBase;
use think\Db;

/**
 * Admin基础逻辑
 */
class AdminBase extends LogicBase
{

    /**
     * 权限检测
     */
    public function authCheck($url = '', $url_list = [])
    {
        
        $pass_data = [RESULT_SUCCESS, '权限检查通过'];
        
        $allow_url = config('allow_url');
        
        $allow_url_list  = parse_config_attr($allow_url);
        
        if (IS_ROOT) {
            
            return $pass_data;
        }
        
        if (!empty($allow_url_list)) {
            
            foreach ($allow_url_list as $v) {
                
                if (strpos($url, strtolower($v)) !== false) {
                    
                    return $pass_data;
                }
            }
        }
        
        $result = in_array($url, array_map("strtolower", $url_list)) ? true : false;
        
        !('index/index' == $url && !$result) ?: clear_login_session();
        
        return $result ? $pass_data : [RESULT_ERROR, '未授权操作'];
    }
    
    /**
     * 获取过滤后的菜单树
     */
    public function getMenuTree($menu_list = [], $url_list = [])
    {
        
        foreach ($menu_list as $key => $menu_info) {
            
            list($status, $message) = $this->authCheck(strtolower($menu_info['url']), $url_list);
            
            [$message];
            
            if ((!IS_ROOT && RESULT_ERROR == $status) || !empty($menu_info['is_hide'])) {
                
                unset($menu_list[$key]);
            }
        }
        
        return $this->getListTree($menu_list);
    }
    
    /**
     * 获取列表树结构
     */
    public function getListTree($list = [])
    {
        
        if (is_object($list)) {
           
            $list = $list->toArray();
        }
        
        return list_to_tree(array_values($list), 'id', 'pid', 'child');
    }
    
    /**
     * 通过完整URL获取检查标准URL
     */
    public function getCheckUrl($full_url = '')
    {
        
        $temp_url = sr($full_url, URL_ROOT);

        $url_array_tmp = explode(SYS_DS_PROS, $temp_url);
        
        $subscript = DATA_NORMAL;
        
        !defined('BIND_MODULE') && $subscript++;
        
        $return_url = $url_array_tmp[$subscript] . SYS_DS_PROS . $url_array_tmp[++$subscript];
        
        $index = strpos($return_url, '.');
        
        $index !== false && $return_url = substr($return_url, DATA_DISABLE, $index);
        
        return $return_url;
    }
    
    /**
     * 过滤页面内容
     */
    public function filter($content = '', $url_list = [])
    {
        
        $results = [];
        
        preg_match_all('/<ob_link>.*?[\s\S]*?<\/ob_link>/', $content, $results);
        
        foreach ($results[0] as $a)
        {
            
            $match_results = []; 
            
            preg_match_all('/href="(.+?)"|url="(.+?)"/', $a, $match_results);
            
            $full_url = '';
            
            if (empty($match_results[1][0]) && empty($match_results[2][0])) {
                
                continue;
            } elseif (!empty($match_results[1][0])) {
                
                $full_url = $match_results[1][0];
            } else {
                
                $full_url = $match_results[2][0];
            }
            
            if (!empty($full_url)) {
               
                $result = $this->authCheck($this->getCheckUrl($full_url), $url_list);

                $result[0] != RESULT_SUCCESS && $content = sr($content, $a);
            }
        }
        
        return $content;
    }
    
    /**
     * 获取首页数据
     */
    public function getIndexData()
    {
        
        $query = new \think\db\Query();
        
        $system_info_mysql = $query->query("select version() as v;");
        
        // 系统信息
        $data['ob_version']     = SYS_VERSION;
        $data['think_version']  = THINK_VERSION;
        $data['os']             = PHP_OS;
        $data['software']       = $_SERVER['SERVER_SOFTWARE'];
        $data['mysql_version']  = $system_info_mysql[0]['v'];
        $data['upload_max']     = ini_get('upload_max_filesize');
        $data['php_version']    = PHP_VERSION;
        
        // 获取更新包列表
        $patch_str = @file_get_contents('http://upgrade.7mb.net/seo/');
        $system_version=config('system_version');
        $pathlist = $allpathlist = array();
        // 获取所有升级包
        preg_match_all("/\"(patch_[\d]{8}+\.zip)\"/", $patch_str, $allpathlist);
        $allpathlist=$allpathlist['0'];
        foreach($allpathlist as $k=>$v){
            preg_match("/patch_([\d]{8})+\.zip/", $v, $p);
            if(empty($p) || $p[1] <= $system_version) continue;
            $pathlist[] = $p[0];
        }
        $data['pathlist']=$pathlist;
        $data['pathcont']=count($pathlist);
        //======================
        $beginToday=mktime(0,0,0,date('m'),date('d'),date('Y'));
        $endToday=mktime(0,0,0,date('m'),date('d')+1,date('Y'))-1;
        //php获取昨日起始时间戳和结束时间戳
        $beginYesterday=mktime(0,0,0,date('m'),date('d')-1,date('Y'));
        $endYesterday=mktime(0,0,0,date('m'),date('d'),date('Y'))-1;
        //php获取本月起始时间戳和结束时间戳
           $beginThismonth=mktime(0,0,0,date('m'),1,date('Y'));
        	$endThismonth=mktime(23,59,59,date('m'),date('t'),date('Y'));
        //===========================
        $info=session('member_info');
        $data['isbake']=$info['leader_id'];
        if($info['leader_id']==0){//----------超级管理员
          $res=http_curl(config('TD_API_URL')."/seo/getsearchnum",['app_key'=>config("TD_APPKEY")]);
            $resArray=json_decode($res,true);
            if(is_array($resArray) && $resArray['code']=='0'){
                $data['num']=$resArray['data']['searchNum'];
            }else{
                $data['num']=0;
            }
            $data['dlnum']=Db::name("member")->where("leader_id=1 and status=1")->count();//-------------代理用户个数
            $data['ptnum']=Db::name("member")->where("leader_id>1 and status=1")->count();//----------------普通会员个数
            $data['webnum']=Db::name("weblist")->count();//-------------网站个数
            $data['keywordnum']=Db::name("keywords")->count();//-----------关键词个数
            $data['name']="超级管理员";
            //------------------------------获取账户余额
            $data['zhye']=0;
            //-------------------获取达标词个数
            $data['dbNum']=Db::name("consumption")->where('create_time','between',[$beginToday,$endToday])->count();
            //---------------今日消费金额
            $data['todayPrice']=Db::name("consumption")->where('create_time','between',[$beginToday,$endToday])->sum('price');
            //--------------昨日消费
            $data['yesterPrice']=Db::name("consumption")->where('create_time','between',[$beginYesterday,$endYesterday])->sum('price');
            //=============本月消费
            $data['momPrice']=Db::name("consumption")->where('create_time','between',[$beginThismonth,$endThismonth])->sum('price');
            //=====================累计消费
            $data['allPrice']=Db::name("consumption")->sum('price');
            //-----------------------------------------------------总后台查询
        }elseif($info['leader_id']==1){
            $data['ptnum']=Db::name("member")->where("leader_id={$info['id']}")->count();
            $data['webnum']=Db::name("weblist")->where("userpid={$info['id']}")->count();
            $data['keywordnum']=Db::name("keywords")->where("userpid={$info['id']}")->count();
            $data['name']="代理用户";
            //------------------------------获取账户余额
            $data['zhye']=Db::name("member")->field("price")->where("id={$info['id']}")->find()['price'];
            //-------------------获取达标词个数
            $data['dbNum']=Db::name("consumption")->where("userpid={$info['id']}")->where('create_time','between',[$beginToday,$endToday])->count();
            //---------------今日消费金额
            $data['todayPrice']=Db::name("consumption")->where("userpid={$info['id']}")->where('create_time','between',[$beginToday,$endToday])->sum('price');
            //--------------昨日消费
            $data['yesterPrice']=Db::name("consumption")->where("userpid={$info['id']}")->where('create_time','between',[$beginYesterday,$endYesterday])->sum('price');
            //=============本月消费
            $data['momPrice']=Db::name("consumption")->where("userpid={$info['id']}")->where('create_time','between',[$beginThismonth,$endThismonth])->sum('price');
            //=====================累计消费
            $data['allPrice']=Db::name("consumption")->where("userpid={$info['id']}")->sum('price');
        }else{
            $data['ptnum']=0;
            $data['webnum']=Db::name("weblist")->where("userid={$info['id']}")->count();
            $data['keywordnum']=Db::name("keywords")->where("userid={$info['id']}")->count();
            $data['name']="普通用户";
            //------------------------------获取账户余额
            $data['zhye']=Db::name("member")->field("price")->where("id={$info['id']}")->find()['price'];
            //-------------------获取达标词个数
            $data['dbNum']=Db::name("consumption")->where("userid={$info['id']}")->where('create_time','between',[$beginToday,$endToday])->count();
            //---------------今日消费金额
            $data['todayPrice']=Db::name("consumption")->where("userid={$info['id']}")->where('create_time','between',[$beginToday,$endToday])->sum('price');
            //--------------昨日消费
            $data['yesterPrice']=Db::name("consumption")->where("userid={$info['id']}")->where('create_time','between',[$beginYesterday,$endYesterday])->sum('price');
            //=============本月消费
            $data['momPrice']=Db::name("consumption")->where("userid={$info['id']}")->where('create_time','between',[$beginThismonth,$endThismonth])->sum('price');
            //=====================累计消费
            $data['allPrice']=Db::name("consumption")->where("userid={$info['id']}")->sum('price');
        }

        
        return $data;
    }
    
    /**
     * 数据状态设置
     */
    public function setStatus($model = null, $param = null,$index = 'id')
    {
        
        if (empty($model) || empty($param)) {
           
            return [RESULT_ERROR, '非法操作'];
        }
        
        $status = (int)$param[DATA_STATUS_NAME];
        
        $model_str = LAYER_MODEL_NAME . $model;
        
        $obj = $this->$model_str;
        
        is_array($param['ids']) ? $ids = array_extract((array)$param['ids'], 'value') : $ids[] = (int)$param['ids'];
        
        $result = $obj->setFieldValue([$index => ['in', $ids]], DATA_STATUS_NAME, $status);
        
        $result && action_log('数据状态', '数据状态调整' . '，model：' . $model . '，ids：' . arr2str($ids) . '，status：' . $status);
        
        return $result ? [RESULT_SUCCESS, '操作成功'] : [RESULT_ERROR, $obj->getError()];
    }
    
    /**
     * 数据排序设置
     */
    public function setSort($model = null, $param = null)
    {
        
        $model_str = LAYER_MODEL_NAME . $model;
        
        $obj = $this->$model_str;
        
        $result = $obj->setFieldValue(['id' => (int)$param['id']], 'sort', (int)$param['value']);
        
        $result && action_log('数据排序', '数据排序调整' . '，model：' . $model . '，id：' . $param['id'] . '，value：' . $param['value']);
        
        return $result ? [RESULT_SUCCESS, '操作成功'] : [RESULT_ERROR, $obj->getError()];
    }
}
