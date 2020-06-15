<?php
include '../includes/common.php';
function check($sql_str){  
		$check=eregi('select|inert|update|delete|\'|\/\*|\*|\.\.\/|\.\/|UNION|into|load_file|outfile', $sql_str);   
		if($check){  
			exit("<meta charset='utf8'><title>非法</title><b style='color:red'>请勿尝试SQL注入,IP[".$_SERVER['REMOTE_ADDR']."]已记录！</b>");  
		}else{  
			return strip_tags($sql_str);  
		}  
	}  
$act=isset($_GET['act'])?$_GET['act']:null;
if ($act == "login") {
if(!$_SESSION['pass_error'])$_SESSION['pass_error']=0;
$user=daddslashes(check($_POST['user']));
$pass=daddslashes($_POST['pwd']);
$code=daddslashes($_POST['code']);
$pass = md5($pass.$password_hash."/");
    $sql = "select * from ku_user where username = '{$user}'";
    $row = $DB->get_row($sql);
if (!$code || strtolower($code) != $_SESSION['vc_code']) {
        unset($_SESSION['vc_code']);
       exit('{"code":-1,"msg":"验证码错误！"}');
    }
if(!preg_match("/^1[345678]{1}\d{9}$/",$user)){
    exit('{"code":-1,"msg":"请输入正确的手机号码！"}');
}
if($_SESSION['pass_error']>5) {
  exit('{"code":-1,"msg":"账号密码错误超5次,暂时封禁登录！"}');  
  }elseif($user == $row['username'] &&  $pass== $row['pwd']) {
   if($row['user_status'] == 1){
    unset($_SESSION['vc_code']);
    exit('{"code":-1,"msg":"您的账号已经被封禁拒绝登入！"}');              
                }
$session=md5($user.$pass.$password_hash);
    $token=authcode("{$user}\t{$session}", 'ENCODE', SYS_KEY);
    setcookie("user_token", $token, time() + 604800);
  exit('{"code":1,"msg":"登入成功！"}');
  }else{
  $_SESSION['pass_error']++;
  exit('{"code":-1,"msg":"账号密码有误请重新输入！"}');
  }
}elseif($act == "logout") {
setcookie("user_token", "", time() - 604800);
  @header('Content-Type: text/html; charset=UTF-8');
  exit("<script language='javascript'>alert('您已成功注销本次登陆！');window.location.href='./login.html';</script>");
}elseif($islogin2==1){
  exit("<script language='javascript'>alert('您已登陆！');window.location.href='./';</script>");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>会员登陆 | <?=$conf['title']?></title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <link rel="stylesheet" href="/public/login/css/login.css?v=1.0.0">
  <script src="/public/js/jquery-1.12.4.min.js"></script>
</head>
<body>
 <div id="root">
  <div class="content">
    <div class="login-logo"><a href="/" title="CoolYun"><img src="<?=$conf['logo_img']?>" alt="CoolYun"></a></div>
    <div class="login-desc"></div>
    <div class="login-box">
 <div class="tit">会员登陆</div>
      <div>
        <form method="post" role="form">
          <div class="input-box">
            <i class="iconfont ico-m">&#xe690;</i>
            <input class="ant-input ant-pd" type="text" name="user" placeholder="用户名/手机号">
          </div>
          <div class="input-box">
            <i class="iconfont ico-m">&#xe632;</i>
            <input class="ant-input ant-pd" type="password" name="pwd" placeholder="登录密码">
          </div>
          <div class="input-box norwap">
            <input style="width:257px" class="ant-input" type="text" name="code" placeholder="请输入验证码">
            <img src="../code.php?r=<?php echo time();?>" width="100" height="200" class="passcode" style="height:40px;cursor:pointer; position: absolute;margin-left:10px;" onclick="this.src='../code.php?r='+Math.random();" title="点击更换验证码">  
          </div>
            <div class="input-box clearfix">
            <span><input class="fl" style="margin:4px 4px 0 0;" type="checkbox" name="keeptime" value="604800" checked="checked"><p class="fl">自动登录</p></span>
            <a class="fr pad" href="/user/resetpassword.php">忘记密码？</a>
          </div>
          <div class="input-box">
            <button type="button" id="userlogin" class="login-bt ant-btn"><span>登 录</span></button>
          </div>
          <div class="input-box">
            <span class="login-other">其他登录方式:
              <a href="#" title="QQ登录"><i class="iconfont ico-blue">&#xe66a;</i></a>
              <!-- <a href="" title="微信登录"><i class="iconfont ico-green">&#xe62c;</i></a> -->
            </span>
            <a class="fr reg-bt" href="reg.html" rel="nofollow">注册账户</a>
          </div>
        </form>
      </div>
    </div>
  </div>
 </div>
 <script src="/public/layer/layer.js"></script>
  <script>
        $(function () {
            $("#userlogin").click(function(){
                var user=$("input[name='user']").val();
                var pwd=$("input[name='pwd']").val();
                var code=$("input[name='code']").val();
                if (user == '' || pwd == '' || code == ''){
                    layer.msg('请确保每项都不为空！',{icon:5});
                        return false;}
                var load = layer.load(2, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "login.php?act=login",
                    data : {user:user,pwd:pwd,code:code},
                    dataType : 'json',
                    success : function(data) {
                        layer.close(load);
                        if(data.code == -1){
                            layer.msg(data.msg,{icon:5});
                        }else{
                            if (data.code ==1){
                              layer.msg(data.msg,{icon:6},function(){
                              window.location.href = "./index.html";
                               });
                            }else{
                               layer.msg(data.msg,{icon:5});
                            }
                        }
                    }
                });
            });
          });
    </script>
</body>
</html>
