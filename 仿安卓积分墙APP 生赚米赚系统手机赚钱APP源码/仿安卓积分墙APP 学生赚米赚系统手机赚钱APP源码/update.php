<?php
include 'conf/config.php';
date_default_timezone_set('PRC');
header("content-type:text/html;charset=utf-8");

// 查询最后的版本
$sql="SELECT * FROM `version` ORDER BY `id` DESC LIMIT 1";
$result=mysql_query($sql);
if($result&&mysql_num_rows($result)){
   $row=mysql_fetch_assoc($result);
}else{
   echo 'error';
   die;
}

$lastver = $row['name']; // 最新版本
$lastver = sprintf("%01.1f",$lastver);

$ac = $_GET['a'];
$ver = $_GET['v'];
$url = $_GET['u'];
$ip = getIP();
$file_name = $_GET['f'];
$file_dir = 'http://key.115ad.com/jsduhufysjdu45ghgg2016'; //远程升级补丁存放目录

// 版本号0.1递增
$newver = $ver+0.1;
$newver = sprintf("%01.1f",$newver);


if(!$ac){
	echo 'fuck you!';
	die;
}

// 客户端IP
if($ac=='getip'){
    echo getIP();
	die;
}

// 检查新版本更新内容
if($ac=='chanage'){
	$sql="SELECT * FROM  `version` WHERE name = $ver";
    $result=mysql_query($sql);
	if($result&&mysql_num_rows($result)){
       $row=mysql_fetch_assoc($result);
    }
    echo base64_decode($row['content']);
}

// 检查新版本
if($ac=='check'){
	 if($ver<$lastver){
        echo $newver;
        die;
	 }else{
	    echo $lastver;
		die;
	 }
}

// 升级新版本
if($ac=='update'){
    
    // 首先检查域名是否授权

	$domain_url = get_domain($url); //获得系统域名

	$sql="select * from authorize where domain='$domain_url'";
	$result=mysql_query($sql);
	if($result&&mysql_num_rows($result)){
	    $row=mysql_fetch_assoc($result);
	}else{
		echo '<font color=red>未授权域名</font>';
        die;
	}

    $time=time();
	$domain_time=$row['time'];
	$domain_ip=$row['ip'];

	if($ip!==$domain_ip){
	     //echo '<font color=red>授权IP不正确</font>';

		 // 不提示IP 不正确 迷惑他们 让他们自己找你
         //$log = date('Y-m-d H:i:s').'--域名--'.$domain_url.'--绑定IP--'.$domain_ip.'--真实IP--'.$ip."\r\n";
		 //file_put_contents('ip.txt',$log,FILE_APPEND);

		 $status = '失败:授权IP错误'.$ip;
		 $status = base64_encode($status);
		 $sql = "INSERT INTO `log` (`domain`, `time`, `version`, `status`) VALUES ('$domain_url', '$time', '$ver', '$status');";
	     mysql_query($sql);

         echo '<font color=red>已经是最新版 不需要升级</font>';
		 die;
	}

    if ($time>$domain_time){

		 $status = '失败:授权时间到期';
		 $status = base64_encode($status);
		 $sql = "INSERT INTO `log` (`domain`, `time`, `version`, `status`) VALUES ('$domain_url', '$time', '$ver', '$status');";
	     mysql_query($sql);

         echo '<font color=red>授权已经到期 到期时间为'.date("Y-m-d",$domain_time).'</font>';
         die;
    }
    
    if($ver==$lastver){

		 $status = '失败:已经是最新版';
		 $status = base64_encode($status);
		 $sql = "INSERT INTO `log` (`domain`, `time`, `version`, `status`) VALUES ('$domain_url', '$time', '$ver', '$status');";
	     mysql_query($sql);

         echo '<font color=red>已经是最新版 不需要升级</font>';
         die;
    }
    
	$status = '成功';
	$status = base64_encode($status);
	$sql = "INSERT INTO `log` (`domain`, `time`, `version`, `status`) VALUES ('$domain_url', '$time', '$ver', '$status');";
	mysql_query($sql);

    // 先升级到最近的版本
    $sql="select * from version where name='$newver'";
	$result=mysql_query($sql);
	if($result&&mysql_num_rows($result)){
	        $row=mysql_fetch_assoc($result);
	}
    echo $row['file'];
    die;
}

// 客户端检查
if($ac == 'client_check'){
    
    // 首先检查域名是否授权
	$domain_url = get_domain($url); //获得系统域名

	$sql="select * from authorize where domain='$domain_url'";
	$result=mysql_query($sql);
	if($result&&mysql_num_rows($result)){
	    $row=mysql_fetch_assoc($result);
	}else{
		echo '1'; //域名未授权
        die;
	}

    $time=time();
	$domain_time=$row['time'];

    if ($time>$domain_time){
         echo '2'; //授权过期
         die;
    }

	echo '0'; //通过
    
}

// 客户端检查
if($ac == 'client_check_time'){
    
    // 首先检查域名是否授权

	$domain_url = get_domain($url); //获得系统域名

	$sql="select * from authorize where domain='$domain_url'";
	$result=mysql_query($sql);
	if($result&&mysql_num_rows($result)){
	    $row=mysql_fetch_assoc($result);
	}else{
		echo '0'; //域名未授权
        die;
	}
	
	$domain_time=$row['time'];
    echo $domain_time;
}

//下载文件
if($ac == 'down'){
   
   // 不允许直接访问下载
   $url = $_SERVER['HTTP_REFERER'];

   if(!$url){
       //echo '来路不正确';
	   //die;
   }

   $file = $file_dir.'/'.$file_name;
   header('Location: '.$file.'');
}
?>