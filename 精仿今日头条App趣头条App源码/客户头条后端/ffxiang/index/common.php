<?php
// echo "<!--\r\n 新闻资讯源码出售 \r\n 联系QQ：1013175107 \r\n 电话：1123  \r\n 官方：gw.4kbj.cn -->\r\n";
use think\Db;
use think\Session;

// 获取网站设置
// $name 获取值
function _webfig($name){
	if($name){
		$data=config()['appConfig'];
		$data=$data[$name];
	}else{
		$data='';
	}
	return $data;
}
// 获取单个广告
// $id 广告ID标志
function _ad($id){
	if($id){
         $data=Db::name('ad')->where(['id'=>$id])->cache(_cache('db'))->value('content');
    }else{
        $data='';
    }
    return $data;
}
// 已登录状态读取会员信息
// $id 会员唯一ID
// $name 字段值
function _member($name=''){
    $id=Session::get('user','ffxiangUser');
	if(!$id){
		session(null, 'ffxiangUser');
        header(_webfig('url'));
        exit();
	}
    $id=_Dencrypt($id,'D');
	if(!$id){
		session(null, 'ffxiangUser');
        header(_webfig('url'));
        exit();
	}
    if(!$id){
        session(null, 'ffxiangUser');
        header(_webfig('url'));
        exit();
    }
    // 昵称 > 用户名 > 手机号码 > 邮箱
    $data=Db::name('member')->where(['id'=>$id,'hide'=>1])->find();
    if(!$data){
        session(null, 'ffxiangUser');
        header(_webfig('url'));
        exit();
    }
   // $renzheng=Db::name('member_shenhe')->where(['hide'=>1,'uid'=>$id])->field('hide')->find();
   // if($renzheng){
    //    $data['s']=$renzheng;
   // }
    // 会员分组和图标
    $data['inco']=_userGroups($data['jingyan'],'img');
    $data['groups']=_userGroups($data['jingyan']);
    // 获取会员昵称
	if($data['nickname']){
		$data['username']=$data['nickname'];
	}elseif($data['user']){
		$data['username']=$data['user'];
	}elseif($data['mobile']){
		$data['username']=$data['mobile'];
		$data['username']=substr($data['username'],0,3).'****'.substr($data['username'],7,4);
	}elseif($data['email']){
		$email = explode('@',$data['email']);                
		$data['username'] = substr($data['email'],0,2).'*'.$email[1];
	}else{
		$data='';
	}
    if($data['img']){
        $data['img']=_imgurl().$data['img'];
    }else{
        $data['img']='/Public/style/index/img/images.jpg';
    }
    if($name){
        return $data[$name];
    }else{
        return $data;
    }
}
// 百度编辑器
function ueditor($name=''){
    if(!$name){$name='content';}
    $html='<script type="text/javascript" charset="utf-8" src="__PLUGINSA__ueditor/ueditor.config.js"></script>';
    $html.='<script type="text/javascript" charset="utf-8" src="__PLUGINSA__ueditor/ueditor.all.min.js"></script>';
    $html.='<script type="text/javascript" src="__PLUGINSA__ueditor/lang/zh-cn/zh-cn.js"></script>';
    $html.='<script type="text/javascript">';
    $html.="var ue=UE.getEditor('".$name."');";
    $html.='</script>';
    return $html;
}
// 检测是否已会员已登录
function _session(){
    if(!Session::has('user','ffxiangUser')){
        return false;
    }
    return true;
}
function _token(){
    return Session::has('user','ffxiangUser') ? Session::get('user','ffxiangUser') : '';
}
function _isMobileApp()
{ 
    // 如果有HTTP_X_WAP_PROFILE则一定是移动设备
    if (isset ($_SERVER['HTTP_X_WAP_PROFILE']))
    {
        return true;
    } 
    // 如果via信息含有wap则一定是移动设备,部分服务商会屏蔽该信息
    if (isset ($_SERVER['HTTP_VIA']))
    { 
        // 找不到为flase,否则为true
        return stristr($_SERVER['HTTP_VIA'], "wap") ? true : false;
    } 
    // 脑残法，判断手机发送的客户端标志,兼容性有待提高
    if (isset ($_SERVER['HTTP_USER_AGENT']))
    {
        $clientkeywords = array ('nokia',
            'sony',
            'ericsson',
            'mot',
            'samsung',
            'htc',
            'sgh',
            'lg',
            'sharp',
            'sie-',
            'philips',
            'panasonic',
            'alcatel',
            'lenovo',
            'iphone',
            'ipod',
            'blackberry',
            'meizu',
            'android',
            'netfront',
            'symbian',
            'ucweb',
            'windowsce',
            'palm',
            'operamini',
            'operamobi',
            'openwave',
            'nexusone',
            'cldc',
            'midp',
            'wap',
            'mobile'
            ); 
        // 从HTTP_USER_AGENT中查找手机浏览器的关键字
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", strtolower($_SERVER['HTTP_USER_AGENT'])))
        {
            return true;
        } 
    } 
    // 协议法，因为有可能不准确，放到最后判断
    if (isset ($_SERVER['HTTP_ACCEPT']))
    { 
        // 如果只支持wml并且不支持html那一定是移动设备
        // 如果支持wml和html但是wml在html之前则是移动设备
        if ((strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') !== false) && (strpos($_SERVER['HTTP_ACCEPT'], 'text/html') === false || (strpos($_SERVER['HTTP_ACCEPT'], 'vnd.wap.wml') < strpos($_SERVER['HTTP_ACCEPT'], 'text/html'))))
        {
            return true;
        } 
    } 
    return false;
}