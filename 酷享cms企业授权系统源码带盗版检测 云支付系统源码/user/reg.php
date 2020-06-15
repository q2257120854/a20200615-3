<?php
include '../includes/common.php';
/*******************ip*****************************/
$userip = ($_SERVER["HTTP_VIA"]) ? $_SERVER["HTTP_X_FORWARDED_FOR"] : $_SERVER["REMOTE_ADDR"];
$userip = ($user_IP) ? $user_IP : $_SERVER["REMOTE_ADDR"];
/************************************************/
$act=isset($_GET['act'])?$_GET['act']:null;
if ($act == "reg") {
	if(!$_SESSION['user_error'])$_SESSION['user_error']=0;
	$user = daddslashes(trim($_POST['user']));
	$pwd = daddslashes(trim($_POST['pwd']));
	$pwd1 = daddslashes(trim($_POST['pwd1']));
	$pass = md5($pwd.$password_hash."/");
	$user_qq = daddslashes(trim($_POST['user_qq']));
	$code = daddslashes(trim($_POST['imgcode']));
  $user_name=chr(mt_rand(97, 122));
	$usersql = "select * from ku_user where username = '{$user}'";
    $userow = $DB->get_row($usersql);
    $sql = "insert into ku_user(username,pwd,user_qq,user_name,user_addtime,user_ip,user_limit,user_lv,user_belong,user_status) values('$user','$pass','$user_qq','".$user_name."','$date','$userip','','','','')";
   if($_SESSION['user_error']>1) {
   exit('{"code":-1,"msg":"你已注册账号，请直接登录！"}');
    }
    if ($userow['username']== $user) {
    exit('{"code":-1,"msg":"账号已经存在请勿重复注册！"}');
    }
   if(!preg_match("/^1[345678]{1}\d{9}$/",$user)){
    exit('{"code":-1,"msg":"请输入正确的手机号码！"}');
    }elseif(!$code || strtolower($code) != $_SESSION['vc_code']) {
        unset($_SESSION['vc_code']);
       exit('{"code":-1,"msg":"验证码错误！"}');
    }elseif ($pwd!=$pwd1) {
    	exit('{"code":-1,"msg":"两次密码输入不一致请重新输入！"}');
    }elseif (!preg_match("/^\d*$/",$user_qq))   {
    	exit('{"code":-1,"msg":"QQ格式不正确请重新输入！"}');
    }
    if($DB->query($sql)) {
    	$_SESSION['user_error']++;
    	 exit('{"code":1,"msg":"账号注册成功！"}');
    }else{
   exit('{"code":-1,"msg":"注册失败，未知原因！"}');
    }

	}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>会员注册 | <?=$conf['title']?></title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=no">
  <link rel="stylesheet" href="/public/login/css/login.css?v=1.0.0">
  <script src="/public/js/jquery-1.12.4.min.js"></script>
  <style>
		.norwap{
			white-space: nowrap;
		}
		.norwap span{
			color:red;
		}
  </style>
</head>
<body>
 <div id="root">
  <div class="content">
    <div class="login-logo"><a href="/" title="CoolYun"><img src="<?=$conf['logo_img']?>" alt="CoolYun"></a></div>
    <div class="login-desc"></div>
    <div class="login-box">
 <div class="tit">会员注册</div>
      <div>
        <form method="post" role="form">
          <div class="input-box norwap">
            <i class="iconfont ico-m">&#xe690;</i>
            <input class="ant-input ant-pd" type="text" name="user" placeholder="用户名/手机号"> <span>*</span>
          </div>
          <div class="input-box norwap">
            <i class="iconfont ico-m">&#xe632;</i>
            <input class="ant-input ant-pd" type="password" name="pwd" placeholder="登录密码"> <span>*</span>
          </div>
           <div class="input-box norwap">
            <i class="iconfont ico-m">&#xe632;</i>
            <input class="ant-input ant-pd" type="password" name="pwd1" placeholder="重复密码"> <span>*</span>
          </div>
          <div class="input-box norwap">
            <i class="iconfont ico-m">&#58986;</i>
            <input class="ant-input ant-pd" type="text" name="user_qq" placeholder="联系QQ"> <span>*</span>
          </div>
          <div class="input-box norwap">
            <input style="width:257px" class="ant-input" type="text" name="code" placeholder="请输入验证码">
            <img src="../code.php?r=<?php echo time();?>" width="100" height="200" class="passcode" style="height:40px;cursor:pointer; position: absolute;margin-left:10px;" onclick="this.src='../code.php?r='+Math.random();" title="点击更换验证码">  
          </div>
          <div class="input-box">
            <span><label><input type="checkbox" value="1" checked="checked">我已阅读并同意</label><a class="xy" href="javascript:void(0);" onclick="mianze();">《CoolYun用户注册协议》</a></span>
          </div>
          <div class="input-box">
            <button style="width:200px" type="button" id="userreg" class="login-bt ant-btn"><span>注 册</span></button>
            <a class="fr reg-bt" href="/user/login.html" rel="nofollow">已有账户？ 去登录</a>
          </div>

          <div class="input-box">
            <span class="login-other">其他登录方式:
              <a href="#" title="QQ登录"><i class="iconfont ico-blue">&#xe66a;</i></a>
              <!-- <a href="" title="微信登录"><i class="iconfont ico-green">&#xe62c;</i></a> -->
            </span>
          </div>
        </form>
      </div>
    </div>
  </div>
 </div>
 <script src="/public/layer/layer.js"></script>
 <script type="text/javascript">
   function mianze()
   {
      //iframe窗
      layer.open({
          type: 2,
          title: 'CoolYun用户协议',
          fixed: true, //不固定
          shadeClose: false,
          shade: 0.3,
          maxmin: false, //开启最大化最小化按钮
          area: ['700px','500px'],
          content: '/user/mianze.html'
      });
   }
 </script>
  <script>
        $(function () {
            $("#userreg").click(function(){
                var user=$("input[name='user']").val();
                var pwd=$("input[name='pwd']").val();
                var pwd1=$("input[name='pwd1']").val();
                var user_qq=$("input[name='user_qq']").val();
                var imgcode=$("input[name='code']").val();
                if (user == '' || pwd == '' || pwd1 == '' || user_qq == '' || imgcode == ''){
                    layer.msg('请确保每项都不为空！',{icon:5});
                        return false;}
                var load = layer.load(2, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "reg.php?act=reg",
                    data : {user:user,pwd:pwd,pwd1:pwd1,user_qq:user_qq,imgcode:imgcode},
                    dataType : 'json',
                    success : function(data) {
                        layer.close(load);
                        if(data.code == -1){
                            layer.msg(data.msg,{icon:5});
                        }else{
                            if (data.code ==1){
                              layer.msg(data.msg,{icon:6},function(){
                              window.location.href = "login.html";
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
