<?php
use think\Db;
use think\Session;
use app\api\model\Send; 
// 开启数据缓存
function _cache($name=''){
    if($name=='db'){
        return true;
    }
}
// 加密和解密
// 函数encrypt($string,$operation,$key)中$string：
// 需要加密解密的字符串；$operation：判断是加密还是解密，E表示加密，D表示解密；$key：密匙。
function _encrypt($string,$operation='E',$key = 'http://www.ffxiang.cn/QQ474944111'){ 
     $key=md5($key); 
     $key_length=strlen($key); 
       $string=$operation=='D'?base64_decode($string):substr(md5($string.$key),0,8).$string; 

     $string_length=strlen($string); 
      
     $rndkey=$box=array(); 
     $result=''; 
     for($i=0;$i<=255;$i++){ 
         $rndkey[$i]=ord($key[$i%$key_length]); 
         $box[$i]=$i; 
     }
     for($j=$i=0;$i<256;$i++){ 
         $j=($j+$box[$i]+$rndkey[$i])%256; 
         $tmp=$box[$i]; 
         $box[$i]=$box[$j]; 
         $box[$j]=$tmp; 
     } 
     for($a=$j=$i=0;$i<$string_length;$i++){ 
         $a=($a+1)%256; 
         $j=($j+$box[$a])%256; 
         $tmp=$box[$a]; 
         $box[$a]=$box[$j]; 
         $box[$j]=$tmp; 
         $result.=chr(ord($string[$i])^($box[($box[$a]+$box[$j])%256])); 
     } 
     // return substr($result,8); 
     // return [$result,$box,$rndkey];
     if($operation=='D'){ 
         if(substr($result,0,8)==substr(md5(substr($result,8).$key),0,8)){ 
             return substr($result,8); 
         }else{ 
            // return '';
             return substr($result,8); 
         } 
     }else{ 
         return str_replace('=','',base64_encode($result)); 
     } 
}
// 会员解密
function _Dencrypt($text){

	if(!$text) return false;
	$text=_encrypt($text,'D');
     // return $text;
	$text= explode('|www.ffxiang.cn|',$text);
	if(!$text) return false;
	 
	$id=abs($text[0]);
	$password=$text[1];
    if(!$password){
        return false;
    }
	if($id && $password){
		$db=Db::name('member')->where(['id'=>$id,'password'=>$password,'hide'=>1])->value('id');
		if($db==$id){
			return $db;
		}else{
			return false;
		}
	}else{
		return false;
	}
}
// 获取IP地区
function _ip($ip=''){
    if(!$ip){
        $ip=request()->ip();
    }
    //  $ips=file_get_contents('http://ip.taobao.com/service/getIpInfo.php?ip='.$ip);
    //  if($ips){
    //      $ips=str_replace('var remote_ip_info','',$ips);
    //      $ips=str_replace('=','',$ips);
    //      $ips=str_replace(';','',$ips);
    //      $ips=json_decode($ips,true);
    //      if($ips){
    //         $ip=$ip;//$ips['region'].$ips['city'].','.$ip;
    //      }else{
    //         $ip='未知,'.$ip;
    //      }
          
    //  }else{
    //     $ip='未知,'.$ip;
    //  }
    return $ip;
    
 //    if(!$ip){
 //    	$ip=request()->ip();
 //        return $ip;
 //    }
 //    return $ip;
 //    // 若本地测试，无网络情况下，在下面添加 strpos("%**#".$ip."%**#","0.0") < 0 && 
 //    if(filter_var($ip, FILTER_VALIDATE_IP)) {	
 //    	$url=file_get_contents('http://apis.juhe.cn/ip/ip2addr?ip='.$ip.'&key=51601367eff4ff5de64633ff127b75e8');
 //    	$data=json_decode($url);
 //    	$data=$data->result->area;
 //        if($data){
 //            $data=$ip.','.$data;   
 //        }else{
 //            $data='IP获取地址失效，请联系开发技术：1013175107';
 //        } 
	// }else {
	// 	$data='未知,未知';
	// }
 //    return $data;
}
 
//生成缩略图 （未完成）
function _img($img){
    if($img){
        return $img;
    }else{
        $data='/Public/style/index/img/images.jpg';
    }
    return $data;
}
// 限制标题长度
// $title 字符串
// $length 限制数量
function _substr($title,$length=20,$dian='...'){
    if(mb_strlen($title) <= $length){
        $data = $title;
    }else{
        $data = mb_substr($title,0,$length,'utf-8').$dian;
    }
    return $data;
}
// 更新字段统计数字
// name     数据  必须
// addDel   加减  1加 0减  默认1 
// int      更新次数    默认1
// field    字段  默认 tongji
function _tongjiField($name,$where,$addDel=1,$field='tongji',$int=1){
    if($addDel==1){
        $db=Db::name($name)->where($where)->setInc($field,$int);
    }else{
        $db=Db::name($name)->where($where)->setDec($field,$int);
    }
    $data=$db ? 1 : 0;
    return $data;
}
// 获取模型信息
function _mychannelName($id,$name='title'){
    if($id){
        $db=Db::name('mychannel')->where('id',$id)->cache(_cache('db'))->value($name);
        if(!$db){
            return false;
        }
        return $db;
    }else{
        return false;
    } 
}
// 通过ID 调用栏目信息
// $id 分类ID
// $name 字段值
function _typeid($id='',$name='title'){
    if($name=='url'){
        $url=url('typeid',['id'=>$id]);
        return $url;
    }
    $db=Db::name('typeid')->where(['id'=>$id])->cache(_cache('db'))->value($name);
    if($db){
        return $db;
    }
}
// 根据ID 查询所有下级ID结果
function _typeidTid($arr,$tid){
    $data = array();
    foreach($arr as $v){
        if($v['tid'] == $tid){
            $data[] = $v;
            $data = array_merge($data,_typeidTid($arr,$v['id']));
        }
    }
    return $data;
}
 



// 内容函数
// ======================

// 统计数据
// $table 数据表
// $fieId 字段值
function _count($table,$where=[],$field='id'){
    if(!$table){
        $data='请输入数据表统计';
    }else{
        $data=Db::name($table)->where($where)->count($field);
    }
    return $data;
}
// 获取单个自定义属性名称
// $id 属性ID
// $name 字段属性
function _flags($id,$name='title'){
    if($id){
         $data=Db::name('flags')->where(['id'=>$id])->cache(_cache('db'))->value($name);
    }else{
        $data='';
    }
    return $data;
}


// 会员函数
// ======================

// 获取会员分组
// $jingyan 用户经验值
// $name 字段值 默认title
function _userGroups($jingyan=0,$name='title'){
    $db=Db::name('member_groups')->where('jingyan','elt',$jingyan)->order('id desc')->cache(_cache('db'))->value($name);
    return $db;
}
// 记录用户操作记录
// $uid 用户UID 唯一识别ID 必填
// $text 描述用户操作说明  必填
// $money 数字 
// $type 类型 money 金额  积分score 经验 jingyan
// $data 字符说明，比如增加1元金额，则写 + ; 减2积分，则写 - 
function _records($uid='',$text='',$money='',$type='',$data=''){
    if(!$uid && !$text){
        return '';
    }
    $where['uid']=$uid;
    $where['text']=$text;
    $where['money']=$money;
    $where['type']=$type;
    $where['data']=$data;
    $where['time']=time();
    $where['ip']=_ip();
    $where['system']=$_SERVER['HTTP_USER_AGENT'];
    $db=DB::name('member_records')->insert($where);
    return true;
}
 
// 通过ID读取会员信息
// $id 会员唯一ID
// $name 字段值
function _user($id='',$name='',$fuhao='****'){
    if(!$id) return '';
    // 昵称 > 用户名 > 手机号码 > 邮箱
    $data=Db::name('member')->where('id',$id)->find();
    if(!$data){
        return ;
    }

    // 获取会员昵称
    if($data['nickname']){
        $data['username']=$data['nickname'];
    }else if($data['user']){
        $data['username']=$data['user'];
    }else if($data['mobile']){
        if($fuhao){
            $data['username']=substr($data['mobile'],0,3).$fuhao.substr($data['mobile'],7,4);
        }else{
            $data['username']=$data['mobile'];
        }
    }else if($data['email']){   
        if(!$fuhao){
            $email = explode('@',$data['email']);            
            $data['username'] = substr($data['email'],0,2).$fuhao.$email[1];
        }else{
            $data['username']=$data['email'];
        }
    }else{
        $data['username']='用户'.$data['id'];
    }
    if(!$data['qianming']){
        $data['qianming']='这家伙好懒，什么都不留下！';
    }
    if(!$data['img']){
        $data['img']='/public/style/index/member/img/userimg.gif';
    }
    // 2018年3月11日 23:01:48 增加  邀请
    $yaoqing=Db::name('yaoqing')->where(['uid'=>$data['id']])->find();
    if(!$yaoqing){
        // 如果邀请不存在，则创建
        $yaoqing=Db::name('yaoqing')->insert(['uid'=>$data['id']]);
    }
    $data['yaoqing']=$yaoqing;
    // 邀请结束
    if($name){
        return $data[$name];
    }else{
        return $data;
    }
}
// 数组获取资料
function _userData($data,$field='nickname',$fuhao='****'){
    if(!$data) return '';
    // 获取会员昵称
    if($data['nickname']){
        $data['username']=$data['nickname'];
    }else if($data['user']){
        $data['username']=$data['user'];
    }else if($data['mobile']){
        if($fuhao){
            $data['username']=substr($data['mobile'],0,3).$fuhao.substr($data['mobile'],7,4);
        }else{
            $data['username']=$data['mobile'];
        }
    }else if($data['email']){   
        if(!$fuhao){
            $email = explode('@',$data['email']);            
            $data['username'] = substr($data['email'],0,2).$fuhao.$email[1];
        }else{
            $data['username']=$data['email'];
        }
    }else{
        $data['username']='用户'.$data['id'];
    }
    if(!$data['qianming']){
        $data['qianming']='这家伙好懒，什么都不留下！';
    }
    if(!$data['img']){
        $data['img']='/public/style/index/member/img/userimg.gif';
    }
    if($field){
        return $data[$field];
    }else{
        return $data['username'];
    }
}
// 获取用户昵称
function _username($data,$fuhao='****'){
    // 获取会员昵称
    if($data['nickname']){
        $data['username']=$data['nickname'];
    }else if($data['mobile']){
        if($fuhao){
            $data['username']=substr($data['mobile'],0,3).$fuhao.substr($data['mobile'],7,4);
        }else{
            $data['username']=$data['mobile'];
        }
    }else{
        $data['username']='用户'.$data['id'];
    }
    return $data['username'];
}
// 会员头像
function _userImg($img='',$w='',$h=''){
    if(!$img){
        return '/public/style/index/member/img/userimg.gif';
    }else{
        return $img;
    }
}
// 其他函数

/*检测是否手机*/
// $mobile 手机号码
function _isMobile($mobile=''){
    if(strlen($mobile)!=11){   
        return false;   
    }
    if (!is_numeric($mobile)) {
        return false;
    }
    return preg_match('#^13[\d]{9}$|^14[5,7]{1}\d{8}$|^15[^4]{1}\d{8}$|^17[0,6,7,8]{1}\d{8}$|^18[\d]{9}$#', $mobile) ? true : false;
}
/*检测是否邮箱*/
// $email 邮箱号码
function _isEmail($email=''){
    if(mb_strlen($email)<5){
        return false;
    }
    $res="/^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/";
    if(preg_match($res,$email)){
        return true;
    }else{
        return false;
    }
}
// 发送验证码
// 1表示验证码发送成功 其他表示都是失败
// $username 用户号码
// $content  验证码说明
function _code($username='',$content=''){
    if(!$username){
        return '号码不能为空';
    }
    if(!$content){
        return '验证码第二个参数不可为空，请检查_code()函数第二个参数';
    }
    //检测号码格式是否正确
    $mobile=$email=false;
    if(_isMobile($username)){
        $mobile=$username;
        $name='手机';
    }else if(_isEmail($username)){
        $email=$username;
        $name='邮箱';
    }else{
        return '号码格式错误，请检查号码是否正确1';
    }
    if(!$mobile && !$email){
        return '号码格式错误，请检查号码是否正确2';
    }
    $ip=_ip();
    if(!$ip) return 'IP地区异常或无法获取IP';
    // 检测验证安全、频繁的问题
    // 检测限制每天发送验证码数量   主要防止恶意轰炸机和其他攻击
    $nus=10;    // 每天发送10个验证码
    $count=Db::name('code')->where('username',$username)->whereTime('time', 'd')->fetchSql(false)->count();
    if($count > $nus){
        return '请不要频繁刷验证码，每天最多获取'.$nus.'个，请明天获取';
    }
    $time=time();
    // 验证每120秒发送1次
    $db=Db::name('code')->where('username',$username)->order('id desc')->find();
    if($db){
        $maturity=$db['time']+$db['maturity'];
        if($maturity > $time){
            return '请不要频繁操作，等待'.($maturity-$time).'秒后再获取'.$name.'验证码'; 
        }
    }
    // 检测结束
    $code=rand(100000,999999);
    $shijian=120;   // 验证码倒计时
    $where['username']=$username;
    $where['code']=$code;
    $where['time']=time();
    $where['maturity']=$shijian;
    $where['ip']=$ip;
    $where['content']=$content;
    $where['system']=$_SERVER['HTTP_USER_AGENT'];
     
  
        // 判断通知模板类型
        if($content=='注册'){
            $temp['name']='tempReg';
            $sdkMobile='sdkReg';
        }else if($content=='找回密码'){
            $temp['name']='tempPwd';
            $sdkMobile='sdkPwd';
        }else if($content=='绑定邮箱' || $content=='绑定手机'){
            $temp['name']='tempMobile';
            $sdkMobile='sdkMobile';
        }else{
            $temp=false;
            $sdkMobile=false;
        }
        if($temp){
            // 读取通知模板内容
            $temp['type']='sdkTemp';
            $temp=Db::name('member_config')->where($temp)->value('text');
            $time=2;    // 验证码有效期
            $title=config('config')['title'];
            $temp=str_replace("\${code}",$code,$temp);
            // 将验证码发送到用户邮箱
            $Send = new Send;
            if($name=='邮箱'){
                $result = $Send->email(['email'=>$username,'content'=>$temp]);
                if($result !== true){
                    $data='邮箱发送失败，请检查后台邮箱配置是否正确，'.$result;
                }else{
                    $data=1;
                }
            }else if($name=='手机'){
                // 将验证码发送到用户手机
                if(!$sdkMobile){
                    return 'sdkMobile比较值不存在';
                }
                $sdkMobile=Db::name('member_config')->where('name',$sdkMobile)->value('text');
                $result = $Send->sms([
                    'param'  => ["code"=>"$code"],
                    'mobile'  => $username,
                    'template'  => $sdkMobile,
                ]);
                if($result !== true){
                    $data='短信发送失败：'.$result;
                }else{
                    $data=1;
                    $data=Db::name('code')->insert($where);
                }
            }else{
                $data='$name比较错误';
            }
        }else{
            $data='模板通知内容获取错误';
        }
         
    
    return $data;
}
// 检测验证码
// 1表示检测成功  其他验证失败
// $code 验证码
// $username 号码类别 手机或邮箱
// 验证验证码 手机
function _codechecking($code='',$username=''){
    if(!$code) return '请输入验证码';
    if(!$username) return '请输入号码';
    // 检验手机或邮箱格式是否正确
    // 检测账户格式
    $mobile=$email=false;
    if(_isMobile($username)){   // 如果是手机
        $mobile=$username;
    }elseif(_isEmail($username)){   // 如果是邮箱
        $email=$username;
    }else{
        return '号码未知或格式错误1';
    }
    if(!$mobile && !$email) return '号码未知或格式错误2';
    // 读取数据验证
    $db=Db::name('code')->where(['code'=>$code,'username'=>$username])->find();
    // 判断验证码是否存在
    if(!$db){
        if($mobile){
            return '手机验证码错误';
        }else if($email){
            return ['邮箱验证码错误'];
        }else{
            return ['验证码错误，请重新输入'];
        }
    }
    // 判断验证码是否过期
    $time=time();
    $jdate=$db['time']+$db['maturity'];
    if($time>$jdate) return '验证码过期，请重发验证码';
    // 判断IP是否一致（可选，若验证出现问题，请删除代码）
    if(md5(_ip())!=md5($db['ip'])) return 'IP发送和IP验证不一致，请重新验证';
    // 判断提交验证和数据是否一致
    if(md5($db['code'])==md5($code) && md5($db['username'])==md5($username)){
        Db::name('code')->where('id',$db['id'])->setField('type',1);
        return 1;
    }else{
        if($mobile){
            return '手机验证码错误';
        }else if($email){
            return ['邮箱验证码错误'];
        }else{
            return ['验证码错误，请重新输入'];
        }
    }
    
}
// 隐藏中间内容
// mobile 手机号码
function _mobile($mobile){
    if(!$mobile){
        return '';
    }
    $data=substr($mobile,0,3).'****'.substr($mobile,7,4);
    return $data;
}
// 获取配置
function _imgUrl(){
    $db=db::name('member_config')->where(['type'=>'sdkQiniu'])->cache(_cache('db'))->select();
    return $db['3']['text'];
}
// 数组比较
function _inArray($b,$a){
    if(!$b || !$a){
        return;
    }
    foreach ($a as $value){
        if (strtolower($value) == strtolower($b)){
            echo true;
            break;
        }
    }
} 
// 转换视频时间00:00
function videoDate($date){
    $date=intval($date);
    if(!$date){
        return;
    }
    if($date<59){
        $data='00:'.$date;
    }else{
        $hour = floor($date/3600);
        $minute = floor(($date-3600*$hour)/60);
        if($minute<10){
            $minute="0".$minute;
        }
        $second = floor((($date-3600*$hour)-60*$minute)%60);
        if($second<10){
            $second="0".$second;
        }
        $data=$minute.':'.$second;
    }
    return $data;
} 
//调用指定ID下级所有分类ID
function _typeTid($tid) {
    $data[]=(int)$tid;  
    $typetid=Db::name('typeid')->where('tid',$tid)->field('id')->select();
    if($typetid){
        foreach ($typetid as $k => $v) {
            $data[]=$v['id'];
            _typeTid($v['id']);
        }
    }
    return $data;
}
//调用用户所有关注的UID
function _userGuanzhuList($uid) {
    $data=Db::name('member_guanzhu')->where(['uid'=>$uid])->field('gz_uid')->select();
    if($data){
        $user=[];
        foreach ($data as $v) {
            $user[]=$v['gz_uid'];
        }
        return $user;
    }
    return false;
     
}
// 时间

function _time($time){       
    $text = '';
    $time = $time === NULL || $time > time() ? time() : intval($time);
    $t = time() - $time; //时间差 （秒）
    $y = date('Y', $time)-date('Y', time());//是否跨年
    switch($t){
     case $t == 0:
       $text = '刚刚';
       break;
     case $t < 60:
      $text = $t . '秒前'; // 一分钟内
      break;
     case $t < 60 * 60:
      $text = floor($t / 60) . '分钟前'; //一小时内
      break;
     case $t < 60 * 60 * 24:
      $text = floor($t / (60 * 60)) . '小时前'; // 一天内
      break;
     case $t < 60 * 60 * 24 * 3:
      $text = floor($time/(60*60*24)) ==1 ?'昨天 ' . date('H:i', $time) : '前天 ' . date('H:i', $time) ; //昨天和前天
      break;
     case $t < 60 * 60 * 24 * 30:
      $text = date('m-d H:i', $time); //一个月内
      break;
     case $t < 60 * 60 * 24 * 365&&$y==0:
      $text = date('m-d', $time); //一年内
      break;
     default:
      $text = date('Y-m-d', $time); //一年以前
      break;
    }  
    return $text; 
}

//字符串截取

function cut_str($sourcestr,$cutlength)  

{  

   $returnstr='';  

   $i=0;  

   $n=0;  

   $str_length=strlen($sourcestr);//字符串的字节数  

   while (($n<$cutlength) and ($i<=$str_length))  

   {  

      $temp_str=substr($sourcestr,$i,1);  

      $ascnum=Ord($temp_str);//得到字符串中第$i位字符的ascii码  

      if ($ascnum>=224)    //如果ASCII位高与224，  

      {  

$returnstr=$returnstr.substr($sourcestr,$i,3); //根据UTF-8编码规范，将3个连续的字符计为单个字符          

         $i=$i+3;            //实际Byte计为3  

         $n++;            //字串长度计1  

      }  

      elseif ($ascnum>=192) //如果ASCII位高与192，  

      {  

         $returnstr=$returnstr.substr($sourcestr,$i,2); //根据UTF-8编码规范，将2个连续的字符计为单个字符  

         $i=$i+2;            //实际Byte计为2  

         $n++;            //字串长度计1  

      }  

      elseif ($ascnum>=65 && $ascnum<=90) //如果是大写字母，  

      {  

         $returnstr=$returnstr.substr($sourcestr,$i,1);  

         $i=$i+1;            //实际的Byte数仍计1个  

         $n++;            //但考虑整体美观，大写字母计成一个高位字符  

      }  

      else                //其他情况下，包括小写字母和半角标点符号，  

      {  

         $returnstr=$returnstr.substr($sourcestr,$i,1);  

         $i=$i+1;            //实际的Byte数计1个  

         $n=$n+0.5;        //小写字母和半角标点等与半个高位字符宽...  

      }  

   }  

         if ($str_length>$i){  

          $returnstr = $returnstr . "...";//超过长度时在尾处加上省略号  

      }  

    return $returnstr;  

} 

 function get_tieba_rootid(){
	return 163;
}


