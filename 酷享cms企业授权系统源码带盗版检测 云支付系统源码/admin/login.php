<?php
include '../includes/common.php';
/*******************ip*****************************/
$user_IP = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
$user_IP = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"];
/************************************************/
$verifycode = 1;//验证码开关
if(!function_exists("imagecreate") || !file_exists('../code.php'))$verifycode=0;
if(isset($_POST['user']) && isset($_POST['pass'])){
    $user=daddslashes($_POST['user']);
    $pass=daddslashes($_POST['pass']);
    $code=daddslashes($_POST['code']);
    $pass = md5($pass.$password_hash."/");
    $sql = "select * from ku_admin where username = '{$user}'";
    $row = $DB->get_row($sql);
    if ($verifycode==1 && (!$code || strtolower($code) != $_SESSION['vc_code'])) {
        unset($_SESSION['vc_code']);
        @header('Content-Type: text/html; charset=UTF-8');
        exit("<script language='javascript'>alert('验证码错误！');history.go(-1);</script>");
    }elseif($user == $row['username'] &&  $pass== $row['userpass']) {
        unset($_SESSION['vc_code']);
        if($row['active'] == 1){
                    exit("<script language='javascript'>alert('您的管理账号异常,已被禁止登陆！请联系BOSS!');window.location.href='./login.html';</script>");
               
                }
        if($conf['limit_ip']==1){         
        if ($row['userip']==null) {
        $session=md5($user.$pass.$password_hash);
        $token=authcode("{$user}\t{$session}", 'ENCODE', SYS_KEY);
        setcookie("admin_token", $token, time() + 604800);
        @header('Content-Type: text/html; charset=UTF-8');
         $DB->query("insert into `ku_admin_log` (`name`,`type`,`grade`,`date`,`ip`) values ('".$user."','管理员登入','".$row['grade']."','".$date."','IP:".$user_IP."')");
         exit("<script language='javascript'>alert('登陆管理中心成功！');window.location.href='./';</script>");

            }elseif($row['userip']!=$user_IP){
           $yic=8;
           if ($row['grade']!=0) {
           $DB->query("update ku_admin set active='1' where username='{$user}'");
           $DB->query("insert into `ku_admin_log` (`name`,`type`,`grade`,`date`,`ip`) values ('".$user."','登入异常','".$yic."','".$date."','异常IP:".$user_IP."')");
           exit("<script language='javascript'>alert('系统检测到您登入IP异常，账号已封禁！!');window.location.href='./login.html';</script>");
        }
        exit("<script language='javascript'>alert('系统检测到您登入IP不在白名单，！请使用白名单ip登入!');window.location.href='./login.html';</script>");
        }
    }else{
        $session=md5($user.$pass.$password_hash);
        $token=authcode("{$user}\t{$session}", 'ENCODE', SYS_KEY);
        setcookie("admin_token", $token, time() + 604800);
        @header('Content-Type: text/html; charset=UTF-8');
         $DB->query("insert into `ku_admin_log` (`name`,`type`,`grade`,`date`,`ip`) values ('".$user."','管理员登入','".$row['grade']."','".$date."','IP:".$user_IP."')");
         exit("<script language='javascript'>alert('登陆管理中心成功！');window.location.href='./';</script>");
    }
    }else {
        unset($_SESSION['vc_code']);
        @header('Content-Type: text/html; charset=UTF-8');
        exit("<script language='javascript'>alert('用户名或密码不正确！');history.go(-1);</script>");
    }
}elseif(isset($_GET['logout'])){
    setcookie("admin_token", "", time() - 604800);
    @header('Content-Type: text/html; charset=UTF-8');
    exit("<script language='javascript'>alert('您已成功注销本次登陆！');window.location.href='./login.html';</script>");
}elseif($islogin==1){
    @header('Content-Type: text/html; charset=UTF-8');
    exit("<script language='javascript'>alert('您已登陆！');window.location.href='./';</script>");
}
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>管理员登陆 | <?=$conf['title']?></title>
    <link rel="stylesheet" href="./login/css/base.css">
    <link rel="stylesheet" href="./login/css/style.css">
</head>
<body>
    <div class="bg"></div>
    <div class="container">
        <div class="line bouncein">
            <div class="xs6 xm4 xs3-move xm4-move">
                <div style="height:150px;"></div>
                <div class="media media-y margin-big-bottom">
                </div>
                <form action="?act=login" method="post" role="form">
                    <div class="panel loginbox">
                        <div class="text-center margin-big padding-big-top">
                            <h1>管理员登陆</h1>
                        </div>
                        <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                            <div class="form-group">
                                <div class="field field-icon-right">
                                    <input type="text" class="input input-big" name="user" id="user" placeholder="登录账号" required=""/>
                                    <span class="icon icon-user margin-small"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="field field-icon-right">
                                    <input type="password" class="input input-big" name="pass" id="pass"   placeholder="登录密码" required="" />
                                    <span class="icon icon-key margin-small"></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="field">
                                    <input type="text" class="input input-big" name="code" placeholder="填写右侧的验证码" required=""/>
                                    <img src="../code.php?r=<?php echo time();?>" width="100" height="32" class="passcode" style="height:44px;cursor:pointer;" onclick="this.src='../code.php?r='+Math.random();" title="点击更换验证码">
                                </div>
                            </div>
                        </div>
                        <div style="padding:30px;">
                            <input type="submit" class="button button-block bg-main text-big input-big" value="登录">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
