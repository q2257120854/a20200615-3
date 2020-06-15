<?php
// 应用公共文件

//随机数
function random($length, $numeric = FALSE) {
	$seed = base_convert(md5(microtime() . $_SERVER['DOCUMENT_ROOT']), 16, $numeric ? 10 : 35);
	$seed = $numeric ? (str_replace('0', '', $seed) . '012340567890') : ($seed . 'zZ' . strtoupper($seed));
	if ($numeric) {
		$hash = '';
	} else {
		$hash = chr(rand(1, 26) + rand(0, 1) * 32 + 64);
		$length--;
	}
	$max = strlen($seed) - 1;
	for ($i = 0; $i < $length; $i++) {
		$hash .= $seed{mt_rand(0, $max)};
	}
	return $hash;
}


//生成单号
function createNO($table, $field, $prefix) {

    $billno = date('YmdHis') . random(6, true);
    while (1) {
        $count = \think\Db::name($table)->where([$field =>$billno])->count();
        if ($count <= 0) {
            break;
        }
        $billno = date('YmdHis') . random(6, true);
    }
    return $prefix . $billno;
}

function downTime($end_time){
	$today =time(); 
	$second = $end_time - $today; 
    if($second<=0) return '0秒';

	$day = floor($second/3600/24);    //倒计时还有多少天
	$hr = floor($second/3600%24);     //倒计时还有多少小时（%取余数）
	$min = floor($second/60%60);      //倒计时还有多少分钟
	$sec = floor($second%60);         //倒计时还有多少秒

	$daystr =  $day ? $day.'天' : '';
	$hrstr =  $hr ? $hr.'小时' : '';
	$minstr =  $min ? $min.'分钟' : '';
	$secstr =  $sec ? $sec.'秒' : '';
	return $daystr . $hrstr . $minstr . $secstr;
}

//获取客户端IP
function get_client_ip() {
    static $ip = NULL;
    if ($ip !== NULL)
        return $ip;
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
        $pos = array_search('unknown', $arr);
        if (false !== $pos)
            unset($arr[$pos]);
        $ip = trim($arr[0]);
    }elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (isset($_SERVER['REMOTE_ADDR'])) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    // IP地址合法验证
    $ip = (false !== ip2long($ip)) ? $ip : '0.0.0.0';
    return $ip;
}

//发送短信
function sendSms($mobile, $content, $type=0)
{
    $product = array(
        0 => '676767', //优质验证码
        1 => '887362', //优质通知
        2 => '435227' //商超会员营销
      );
    $conf = config('dayuconfig');
    $url = 'http://www.ztsms.cn/sendNSms.do';
    $tkey = date('YmdHis');
    $data = array(
        'username' => $conf['default_account'],
        'tkey' => $tkey,
        'password' => md5(md5($conf['default_password']) . $tkey),
        'mobile' => $mobile,
        'content' => $content . '【' .$conf['default_sign']. '】',
        'productid' => $product[$type]
    );

    $res = \service\HttpService::getRequest($url, $data);
    $res = explode(",", $res);
    if($res[0] == 1){
        return true;
    }else{
        return false;
    }
    
}

//获取当前域名
function domain()
{
    $request = \think\Request::instance();
    $domain=$request->domain();
    return $domain;
}

//是否在充值时间内
function isRechargeTime()
{
    $conf = config('payconfig');
    $recharge_time = $conf['recharge_time'];
    $timeArr = explode('-', $recharge_time);
    $starttime = date('Y-m-d'). ' '. trim($timeArr[0]) .':00';
    $endtime = date('Y-m-d'). ' '.  trim($timeArr[1]) .':00';
    if(strtotime($starttime) <= time() && time() <= strtotime($endtime)){
        return true;
    }else{
        return false;
    }
}

//当前时间在捕捞段之内
function isAdopt($time)
{
    $timeArr = explode('-', $time);
    $starttime = date('Y-m-d'). ' '. trim($timeArr[0]) .':00';
    $endtime = date('Y-m-d'). ' '.  trim($timeArr[1]) .':00';
    if(strtotime($starttime) <= time() && time() <= strtotime($endtime)){
        return true;
    }else{
        return false;
    }
}

//是否可以预约
function isShowAppo($time, $isclick = false)
{
	$timeArr = explode('-', $time);
    $starttime = date('Y-m-d'). ' '. trim($timeArr[0]) .':00';
    $endtime = date('Y-m-d'). ' '.  trim($timeArr[1]) .':00';
    //开始时间
    if($isclick){
        $starttime = strtotime($starttime)-300;
    }else{
         $starttime = strtotime($starttime);
    }
    if($starttime < time()){
        return false;
    }else{
        return true;
    }
}

//获取今开始捕捞时间戳和结束时间戳
function getAdoptTime($time)
{
    $timeArr = explode('-', $time);
    if(!$timeArr) return false;
    $starttime = date('Y-m-d'). ' '. trim($timeArr[0]) .':00';
    $endtime = date('Y-m-d'). ' '.  trim($timeArr[1]) .':00';

    return array('starttime' => strtotime($starttime), 'endtime' => strtotime($endtime));
}

//获取当天捕捞的倒计时
function getAdoptDownTime($time)
{
    $downTime = 0;
    $timeArr = explode('-', $time);
    if(!$timeArr) return $downTime;
    $starttime = date('Y-m-d'). ' '. trim($timeArr[0]) .':00';
    if(strtotime($starttime) >= time()){
        $downTime = strtotime($starttime) - time();
    }
    return $downTime;
}

//获取毫秒时间
function getMicrotime()
{
    list($usec, $sec) = explode(" ", microtime());
    return round((float)$usec + (float)$sec, 3)*1000;
}
//创建二维码
function createQrcode($mid)
{
        $path = ROOT_PATH . "public/qrcode";

        if (!is_dir($path)) {
            mkdir($path);
        }
        $url = url('port/reg/index', array('mid' => $mid), '',true);
        $file = 'member_register_' . $mid . '.png';
        $qrcode_file = $path . '/' . $file;
        if (!is_file($qrcode_file)) {
            \service\QrcodeService::png($url, $qrcode_file, QR_ECLEVEL_H, 4);
        }
        return domain() . '/qrcode/' . $file;
        /*$image = \think\Image::open($qrcode_file);
        // 给原图居中添加透明度为100的水印并保存到$a.png
        $bg = ROOT_PATH. '/public/bg.jpg';
        $image->water('./public/upload/qrcode_1536730572.png', \think\Image::WATER_CENTER,100)->save($qrcode_file);
        return domain() . '/qrcode/' . $file;*/

}

function getbgqrcode($imageDefault, $textDefault, $background, $filename="", $config=array()){
    //如果要看报什么错，可以先注释调这个header
    if(empty($filename)) header("content-type: image/png");
    //背景方法
    $backgroundInfo = getimagesize($background);
    $ext = image_type_to_extension($backgroundInfo[2], false);
    $backgroundFun = 'imagecreatefrom'.$ext;
    $background = $backgroundFun($background);
    $backgroundWidth = imagesx($background);  //背景宽度
    $backgroundHeight = imagesy($background);  //背景高度
    $imageRes = imageCreatetruecolor($backgroundWidth,$backgroundHeight);
    $color = imagecolorallocate($imageRes, 0, 0, 0);
    imagefill($imageRes, 0, 0, $color);
    imagecopyresampled($imageRes,$background,0,0,0,0,imagesx($background),imagesy($background),imagesx($background),imagesy($background));
    //处理了图片
    if(!empty($config['image'])){
        foreach ($config['image'] as $key => $val) {
            $val = array_merge($imageDefault,$val);
            $info = getimagesize($val['url']);
            $function = 'imagecreatefrom'.image_type_to_extension($info[2], false);
            if($val['stream']){   
                //如果传的是字符串图像流
                $info = getimagesizefromstring($val['url']);
                $function = 'imagecreatefromstring';
            }
            $res = $function($val['url']);
            $resWidth = $info[0];
            $resHeight = $info[1];
            //建立画板 ，缩放图片至指定尺寸
            $canvas=imagecreatetruecolor($val['width'], $val['height']);
            imagefill($canvas, 0, 0, $color);
            //关键函数，参数（目标资源，源，目标资源的开始坐标x,y, 源资源的开始坐标x,y,目标资源的宽高w,h,源资源的宽高w,h）
            imagecopyresampled($canvas, $res, 0, 0, 0, 0, $val['width'], $val['height'],$resWidth,$resHeight);
            $val['left'] = $val['left']<0?$backgroundWidth- abs($val['left']) - $val['width']:$val['left'];
            $val['top'] = $val['top']<0?$backgroundHeight- abs($val['top']) - $val['height']:$val['top'];
            //放置图像
            imagecopymerge($imageRes,$canvas, $val['left'],$val['top'],$val['right'],$val['bottom'],$val['width'],$val['height'],$val['opacity']);//左，上，右，下，宽度，高度，透明度
        }
    }
    //处理文字
    if(!empty($config['text'])){
        foreach ($config['text'] as $key => $val) {
            $val = array_merge($textDefault,$val);
            list($R,$G,$B) = explode(',', $val['fontColor']);
            $fontColor = imagecolorallocate($imageRes, $R, $G, $B);
            $val['left'] = $val['left']<0?$backgroundWidth- abs($val['left']):$val['left'];
            $val['top'] = $val['top']<0?$backgroundHeight- abs($val['top']):$val['top'];
            imagettftext($imageRes,$val['fontSize'],$val['angle'],$val['left'],$val['top'],$fontColor,$val['fontPath'],$val['text']);
        }
    }
    //生成图片
    if(!empty($filename)){
        $res = imagejpeg ($imageRes,$filename,90); 
        //保存到本地
        imagedestroy($imageRes);
    }else{
        imagejpeg ($imageRes);     
        //在浏览器上显示
        imagedestroy($imageRes);
    }
}

//设置用户在线
function setMemberOnline($member)
{
    try{
        $redis = new \Redis();
        $redis->connect('127.0.0.1', 6379, 2);// 127.0.0.1 连接的IP，6379 连接的端口，2 连接的超时时长，单位：秒
        $res = $redis->ping(); // 检测当前链接状态，返回PONG或者抛出异常。
        if($res === '+PONG'){
            $onlinekey = 'online_member_'.$member['account'];
            $member = $redis->get($onlinekey);
            if(!empty($member)) {
                $redis->close();
                return true;
            }
            $member = $redis->set($onlinekey, md5(json_encode($member)));
            $expireTime = time() + 300;
            $redis->expireAt($onlinekey, $expireTime); 
            $redis->close();
            return true;

        }
        //return 'redis服务连接报错!';
        return false;
    }catch (\Exception $e){
        //return '未开启redis服务!';
        return false;
    }
}

//判断用户是否在线
function isMemberOnline($account)
{
    try{
        $redis = new \Redis();
        $redis->connect('127.0.0.1', 6379, 2);// 127.0.0.1 连接的IP，6379 连接的端口，2 连接的超时时长，单位：秒
        $res = $redis->ping(); // 检测当前链接状态，返回PONG或者抛出异常。
        if($res === '+PONG'){
            $onlinekey = 'online_member_'.$account;
            $member = $redis->get($onlinekey);
            $redis->close();
            if(!empty($member)) {
                return true;
            }
            return false;
        }
        return false;
    }catch (\Exception $e){
        return false;
    }
}

//是否开启redis队列
function openRedisQueue()
{
    $webconfig = config('webconfig');
    return $webconfig['openRedisQueue'] ? 1 : 0;
}

//今天结束时间戳
function getTodayEndtime()
{
    return strtotime(date('Y-m-d').'23:59:59');
}

//获取前缀
function getPrefix()
{
    $prefix =  'block'. substr(md5(domain()), 0, 5);
    return $prefix;
}

//设置key的值
function setredis($keyname, $data)
{
    $prefix = getPrefix();
    if(empty($keyname) || empty($data)) return false;
    $keyname = $prefix . $keyname;
    $expireTime = getTodayEndtime();
    try{
        $redis = new \Redis();
        $redis->connect('127.0.0.1', 6379, 2);
        $res = $redis->ping();
        if($res === '+PONG'){
            $redis->set($keyname, serialize($data));
            $redis->expireAt($keyname, $expireTime); //过期时间
            $redis->close();
            return true;
        }
        return false;
    }catch (\Exception $e){
        return false;
    }
}

//获取key的值
function getredis($keyname)
{
    $prefix = getPrefix();
    if(empty($keyname)) return false;
    $keyname = $prefix . $keyname;
    try{
        $redis = new \Redis();
        $redis->connect('127.0.0.1', 6379, 2);
        $res = $redis->ping();
        if($res === '+PONG'){
            $data = $redis->get($keyname);
            $redis->close();
            return $data ? unserialize($data) : false;
        }
        return false;
    }catch (\Exception $e){
        return false;
    }
}

//设置hash表字段的值
function sethash($keyname, $field, $data)
{
    $prefix = getPrefix();
    if(empty($keyname) || empty($field) || empty($data)) return false;
    $keyname = $prefix . $keyname;
    $expireTime = getTodayEndtime();
    try{
        $redis = new \Redis();
        $redis->connect('127.0.0.1', 6379, 2);
        $res = $redis->ping();
        if($res === '+PONG'){
            $redis->hset($keyname, $field, serialize($data));
            $redis->expireAt($keyname, $expireTime); //过期时间
            $redis->close();
            return true;
        }
        return false;
    }catch (\Exception $e){
        return false;
    }
}

//获取hash表字段的值
function gethash($keyname, $field)
{
    $prefix = getPrefix();
    if(empty($keyname) || empty($field)) return false;
    $keyname = $prefix . $keyname;
    try{
        $redis = new \Redis();
        $redis->connect('127.0.0.1', 6379, 2);
        $res = $redis->ping();
        if($res === '+PONG'){
            $data = $redis->hget($keyname, $field);
            $redis->close();
            return $data ? unserialize($data) : false;
        }
        return false;
    }catch (\Exception $e){
        return false;
    }
}

function gethashKeys($keyname)
{
    $prefix = getPrefix();
    if(empty($keyname)) return false;
    $keyname = $prefix . $keyname;
    try{
        $redis = new \Redis();
        $redis->connect('127.0.0.1', 6379, 2);
        $res = $redis->ping();
        if($res === '+PONG'){
            $data = $redis->hkeys($keyname);
            $redis->close();
            return $data;
        }
        return false;
    }catch (\Exception $e){
        return false;
    }
}

//删除指定key的redis
function deletekey($keyname)
{
    $prefix = getPrefix();
    if(empty($keyname)) return false;
    $keyname = $prefix . $keyname;
    try{
        $redis = new \Redis();
        $redis->connect('127.0.0.1', 6379, 2);
        $res = $redis->ping();
        if($res === '+PONG'){
            $redis->delete($keyname);
            $redis->close();
            return true;
        }
        return false;
    }catch (\Exception $e){
        return false;
    }
}

//设置集合
function setaggregate($keyname, $data)
{
    $prefix = getPrefix();
    if(empty($keyname) || empty($data)) return false;
    $keyname = $prefix . $keyname;
    $expireTime = getTodayEndtime();
    try{
        $redis = new \Redis();
        $redis->connect('127.0.0.1', 6379, 2);
        $res = $redis->ping();
        if($res === '+PONG'){
            $redis->sadd($keyname, serialize($data));
            $redis->expireAt($keyname, $expireTime); //过期时间
            $redis->close();
            return true;
        }
        return false;
    }catch (\Exception $e){
        return false;
    }
}

//随机获取集合中一个值
function getaggregate($keyname)
{
    $prefix = getPrefix();
    if(empty($keyname)) return false;
    $keyname = $prefix . $keyname;
    try{
        $redis = new \Redis();
        $redis->connect('127.0.0.1', 6379, 2);
        $res = $redis->ping();
        if($res === '+PONG'){
            $data = $redis->spop($keyname);
            $redis->close();
            return $data ? unserialize($data) : false;
        }
        return false;
    }catch (\Exception $e){
        return false;
    }
}
//获取集合中值的数量
function getaggregateSize($keyname)
{
    $prefix = getPrefix();
    if(empty($keyname)) return false;
    $keyname = $prefix . $keyname;
    try{
        $redis = new \Redis();
        $redis->connect('127.0.0.1', 6379, 2);
        $res = $redis->ping();
        if($res === '+PONG'){
            $data = $redis->sSize($keyname);
            $redis->close();
            return $data;
        }
        return false;
    }catch (\Exception $e){
        return false;
    }
}

//列表中添加一个或多个值
function rpushlist($keyname, $data)
{
    $prefix = getPrefix();
    if(empty($keyname) || empty($data)) return false;
    $keyname = $prefix . $keyname;
    $expireTime = getTodayEndtime();
    try{
        $redis = new \Redis();
        $redis->connect('127.0.0.1', 6379, 2);
        $res = $redis->ping();
        if($res === '+PONG'){
            $redis->rpush($keyname, $data);
            $redis->expireAt($keyname, $expireTime); //过期时间
            $redis->close();
            return true;
        }
        return false;
    }catch (\Exception $e){
        return false;
    }
}

//移出并获取列表的第一个元素
function ipoplist($keyname)
{
    $prefix = getPrefix();
    if(empty($keyname)) return false;
    $keyname = $prefix . $keyname;
    try{
        $redis = new \Redis();
        $redis->connect('127.0.0.1', 6379, 2);
        $res = $redis->ping();
        if($res === '+PONG'){
            $data = $redis->lpop($keyname);
            $redis->close();
            return $data;
        }
        return false;
    }catch (\Exception $e){
        return false;
    }
}

function flushallRedis()
{
    try{
        $redis = new \Redis();
        $redis->connect('127.0.0.1', 6379, 2);
        $res = $redis->ping();
        if($res === '+PONG'){
            $data = $redis->flushall();
            $redis->close();
            return $data;
        }
        return false;
    }catch (\Exception $e){
        return false;
    }
}

//检查会员推荐收益权限
function checkMemberRecommend($member, $config)
{   
    //是否需要实名
    if($config['is_idverifly'] && $member['is_idverifly'] != 1){
        return false;
    }
    //是否为推广员
    if($config['is_promoter'] && $member['is_promoter'] != 1){
        return false;
    }
    //是否需要激活
    if($config['is_activation'] && $member['is_activation'] != 1){
        return false;
    }
    return true;
}