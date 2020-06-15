<?php
//获取短链地址与标题

//官方提示页面
$ti = $conf['ti'];
$tz = $conf['tz'];
$tj = $conf['tj'];
$cdn = $conf['cdn'];
$jb = $conf['wmb'];
//$tz = 2;
$str = $_SERVER["QUERY_STRING"];
$result = substr($str,strrpos($str,".")+1);
$keyu = substr($result,0 ,1);

if ($keyu == 1) {
    $t_urll = $_SERVER["QUERY_STRING"];
  
    $uid = substr($t_urll, 0, strrpos($t_urll, "."));

$myrow=$DB->get_row("select * from quan_long where uid='$uid' limit 1");
if(!$myrow){
	@header("http/1.1 404 not found"); 
	@header("status: 404 not found"); 
	echo '<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <link rel="dns-prefetch" href="https://h5.sinaimg.cn">
    <meta id="viewport" name="viewport"
          content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
<title>'.$conf['sitename'].' | 此链接不存在</title>
 <style>
        html {
            font-size: 2rem;
        }

        @media (max-width: 1024px) {
            html {
                font-size: 1.25rem;
            }
        }

        @media (max-width: 414px) {
            html {
                font-size: 1.06rem;
            }
        }

        @media (max-width: 375px) {
            html {
                font-size: 1rem;
            }
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        p {
            margin: 0;

        }

        .h5-4box {
            padding-top: 6.125rem;
            text-align: center;
        }

        .h5-4img {
            display: inline-block;

        }

        .h5-4img img {
            max-width: 100%;
        }

        .h5-4con {
            padding-top: 1.875rem;
            font-size: 0.875rem;
            line-height: 1.2;
            color: #636363;
            text-align: center;
        }

        .btn {
            display: inline-block;
            border: #e86b0f solid 1px;
            margin: 0 0 0 5px;
            padding: 0 10px;
            line-height: 25px;
            font-size: .75rem;
            vertical-align: middle;
            color: #FFF;
            border-radius: 3px;
            background-color: #ff8200;
        }
    </style>
</head>
<body>
<div class="h5-4box">
		<span class="h5-4img">
			<img src="'.$conf['cdn'].'/img/735c8b5953ac11b623bdebcb45fe9db2.jpg">
		</span>
    <p class="h5-4con"></p>
    <br/>
    </div>
</body>
</html>
'; 
	exit();

}else{




	$t_url=$myrow['longurl'];
	if ($t_url == base64_encode(base64_decode($t_url))) {
        $t_url =  base64_decode($t_url);
    }
    }

  }
if ($tz == 1) {
    $t_urll = 'http://t.cn/'.$_SERVER["QUERY_STRING"];
    //$t_url = substr($t_urll, 0,22);
    $t_url = substr($t_urll, 0, strrpos($t_urll, "."));
   
}
 // echo $t_url;   

if ($tj == 1) {
    $longurl = $t_url;
    $url_arr = parse_url($longurl);
    $domain = $url_arr['host'];
    //if ($domain == 't.cn') exit('401');
    $row = $DB->get_row("SELECT * FROM quan_list WHERE domain='$domain' limit 1");
    if ($row && $row['type'] == 2) {
    
    
    
    	echo '<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <link rel="dns-prefetch" href="https://h5.sinaimg.cn">
    <meta id="viewport" name="viewport"
          content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">
<title>'.$conf['sitename'].' | 此链接在黑名单中</title>
 <style>
        html {
            font-size: 2rem;
        }

        @media (max-width: 1024px) {
            html {
                font-size: 1.25rem;
            }
        }

        @media (max-width: 414px) {
            html {
                font-size: 1.06rem;
            }
        }

        @media (max-width: 375px) {
            html {
                font-size: 1rem;
            }
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        p {
            margin: 0;

        }

        .h5-4box {
            padding-top: 6.125rem;
            text-align: center;
        }

        .h5-4img {
            display: inline-block;

        }

        .h5-4img img {
            max-width: 100%;
        }

        .h5-4con {
            padding-top: 1.875rem;
            font-size: 0.875rem;
            line-height: 1.2;
            color: #636363;
            text-align: center;
        }

        .btn {
            display: inline-block;
            border: #e86b0f solid 1px;
            margin: 0 0 0 5px;
            padding: 0 10px;
            line-height: 25px;
            font-size: .75rem;
            vertical-align: middle;
            color: #FFF;
            border-radius: 3px;
            background-color: #ff8200;
        }
    </style>
</head>
<body>
<div class="h5-4box">
		<span class="h5-4img">
			<img src="'.$conf['cdn'].'/img/735c8b5953ac11b623bdebcb45fe9db2.jpg">
		</span>
    <p class="h5-4con"></p>
    <br/>
    </div>
</body>
</html>
'; 
	exit();     
        
        
        
        
        
        
    } else {
        $date = date("Y-m-d");
        $user_agent = $_SERVER['HTTP_USER_AGENT'];
        $remoteip = real_ip();
        $DB->query("insert into `quan_log` (`domain`,`click_time`,`user_agent`,`ip_address`) values ('".$domain."','".$date."','".$user_agent."','".$remoteip."')");
    }
}
//获取网站标题
$title = $conf['bt'];
if ($ti == 1) {
$info=file_get_contents($t_url);
preg_match('|<title>(.*?)<\/title>|',$info,$m);
$title=($m[1]);
}

$ding = $conf['ding']; //顶部广告
//设置标题
$kq = $conf['muban']; //模板选择


//防举报
if ($jb == 1) {

$jby = $conf['fjb'];
$t_rs = 'https://c.pc.qq.com/middlem.html?pfurl='.$jby;

}
?>