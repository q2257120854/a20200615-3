<?php /*a:2:{s:64:"/www/wwwroot/77q73.cn/application/index/view/account/signup.html";i:1552726379;s:62:"/www/wwwroot/77q73.cn/application/index/view/common/world.html";i:1551429184;}*/ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="robots" content="noindex,nofollow">
    <meta name="robots" content="noarchive">
    <title>BTE</title>
    <meta name="keywords" content=" ">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta content="IE=9; IE=EDGE" http-equiv="X-UA-Compatible">
    <link rel="stylesheet" href="/static/images/sm.css">
    <script src="/static/images/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="/static/images/sm-extend.css">
    <link rel="stylesheet" href="/static/images/iconfont.css">
    <link rel="stylesheet" href="/static/images/main.css">
    <link rel="stylesheet" href="/static/images/order.css">
    
</head>

<body>
<!-- content -->
<div class="page">
    <header class="bar bar-nav">

        <a style="position: absolute;z-index: 19;width: 94%;text-align: center;display: inline-block;line-height: 50px;font-size: 1.1rem; color:#FFF;">
            新用户注册
        </a>
        <div class="logo">
             <a id="cancle" href="javascript:history.go(-1)"><i class="icon icon-left"></i></a>
        </div>
        <a class="icon pull-right open-panel"></a>
    </header>
    

    <div class="content" id="main_content">
        
<style>
  .content {
     padding-bottom: 0;
    margin-bottom: 0;
  }
</style>
  <form class="form-signin"  id="loginForm" name="loginForm" method="post" onsubmit="return sub()">
    <div class="list-block">
        <ul>
          <li>
            <div class="item-content">
              <div class="item-media"><i class="icon icon-form-name"></i></div>
              <div class="item-inner">
                <div class="item-title label">推荐人手机号</div>
                <div class="item-input">
                  <?php if(empty($inviter) || (($inviter instanceof \think\Collection || $inviter instanceof \think\Paginator ) && $inviter->isEmpty())): ?>
                  <input class="col-20" maxlength="11" name="pemail" id="tid" type="text" value=""/>
                  <?php else: ?>
                  <input class="col-20" maxlength="11" name="pemail" id="tid" readonly="true" type="text" value="<?php echo htmlentities($inviter); ?>"/>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="item-content">
              <div class="item-media"><i class="icon icon-form-name"></i></div>
              <div class="item-inner">
                <div class="item-title label">银行卡号</div>
                <div class="item-input">
                  <input class="col-20" name="bankcard" id="bankcard" placeholder="必须填写真实资料用于云端验证" type="text" value=""/>
                </div>
              </div>
            </div>
          </li>
          
          <li>
            <div class="item-content">
              <div class="item-media"><i class="icon icon-form-name"></i></div>
              <div class="item-inner">
                <div class="item-title label">用户手机号</div>
                <div class="item-input">
                  <input class="col-20" name="username" id="username" placeholder="必须填写真实资料用于云端验证" type="text" value="" maxlength="11"/>
                </div>
              </div>
            </div>
          </li>
		  
          
		  <li>
            <div class="item-content">
              <div class="item-media"><i class="icon icon-form-name"></i></div>
              <div class="item-inner">
                <div class="item-title label">真实姓名</div>
                <div class="item-input">
                  <input class="col-20" maxlength="10" name="name" id="name" placeholder="必须填写真实资料用于云端验证" type="text" value=""/>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="item-content">
              <div class="item-media"><i class="icon icon-form-name"></i></div>
              <div class="item-inner">
                <div class="item-title label">身份证号</div>
                <div class="item-input">
                  <input class="col-20" name="idcard" id="idcard" placeholder="必须填写真实资料用于云端验证" type="text" value=""/>
                </div>
              </div>
            </div>
          </li>
		   <li>
            <div class="item-content">
              <div class="item-media"><i class="icon icon-form-name"></i></div>
              <div class="item-inner">
                <div class="item-title label">支付宝</div>
                <div class="item-input">
                  <input class="col-20" maxlength="20" name="zhifubao" id="zhifubao" placeholder="必须真实支付宝，注册后不可修改" type="text" value=""/>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="item-content">
              <div class="item-media"><i class="icon icon-form-name"></i></div>
              <div class="item-inner">
                <div class="item-title label">登录密码</div>
                <div class="item-input">
                  <input class="col-20" maxlength="16" name="password" id="password" type="password" placeholder="请输入登录密码" value=""/>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="item-content">
              <div class="item-media"><i class="icon icon-form-name"></i></div>
              <div class="item-inner">
                <div class="item-title label">确认密码</div>
                <div class="item-input">
                  <input class="col-20" maxlength="16" name="password2" id="password2" type="password" placeholder="请输入确认登录密码" value=""/>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="item-content">
              <div class="item-media"><i class="icon icon-form-name"></i></div>
              <div class="item-inner">
                <div class="item-title label">交易密码</div>
                <div class="item-input">
                  <input class="col-20" maxlength="16" name="secpwd" id="secpwd" type="password" placeholder="请输入交易密码" value=""/> 
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="item-content">
              <div class="item-media"><i class="icon icon-form-name"></i></div>
              <div class="item-inner">
                <div class="item-title label">确认交易密码</div>
                <div class="item-input">
                  <input class="col-20" maxlength="16" name="secpwd2" id="secpwd2" type="password" placeholder="请输入确认交易密码" value=""/>
                </div>
              </div>
            </div>
          </li>
          <li>
            <div class="item-content">
              <div class="item-media"><i class="icon icon-form-name"></i></div>
              <div class="item-inner">
                <div class="item-title label">验证码</div>
                <input type="text" placeholder="输入验证码" name="capcode" id="capcode" value=""/>
                <img id="img" src="<?php echo url('service/englcap'); ?>" onclick="changeCode()" width="150px"/>
              </div>
            </div>
          </li>
          <li>
            <div class="item-content">
              <div class="item-media"><i class="icon icon-form-name"></i></div>
              <div class="item-inner">
                <div class="item-title label">短信验证码</div>
                <input type="text" placeholder="短信验证码" name="mobile_code" id="mobile_code" value=""/>
                <input name="button" maxlength="5" type="button" class="button button-fill button-warning  col-20 fr reg-mobile-js" style="width:200px;" id="zphone" onclick="get_mobile_code();" value="获取验证码"/>
              </div>
            </div>
          </li>
        </ul>
    </div>
	<div style="font-size:9pt; margin:10px;line-height: 20px;"><strong>注册协议：</strong><br>
	 <input type="checkbox" id="check01" name="check01" >
	<strong style="color:#990000;"> 我已认真阅读以上规则，同意加入<?php echo htmlentities(app('config')->get('hello.title')); ?>。</strong>
    </div>
	<div class="content-block">
      <div class="row">
        <div class="col-100">
        	<input id="btnn" type="button" class="button button-big button-fill button-success js-submit" style="width: 100%;" value="注册新会员"/>
        </div>
      </div>
    </div>
    </form>

    </div>
</div>
<script type="text/javascript" src="/static/images/alert.js"  ></script>
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>

<script language="javascript">
  function changeCode(){
             var img=document.getElementById('img');
             img.setAttribute('src','/service/englcap.html?r='+Math.random());
         }
//发送短信验证码
function get_mobile_code(){
	
	document.getElementById('zphone').value = '正在发送';
	document.getElementById('zphone').disabled = true;
	
	//发送手机短信开始
        $(function() {
          ajax(api.account.encheck, {checkcode: $('#capcode').val()}, function (res) {
            if (res.code == 200) {
              var params = {
                mobile: $("#username").val(),
                action: 'signup'
              };
              $.ajax({
                type: 'post',
                url: api.service.sms,
                cache: false,
                data: params,
                dataType: 'json',
                success: function (data) {
                  alert(data.message);
                  if (data.code == 200) {
                    RemainTime();
                  } else {
                    document.getElementById('zphone').value = '重新发送';
                    document.getElementById('zphone').disabled = false;
                  }
                },
              });
            } else {
              alert('很抱歉、错误的图形验证码！');
              document.getElementById('zphone').value = '获取验证码';
              document.getElementById('zphone').disabled = false;
              return false;
            }
          });

        });
		//发送手机短信结束
	}
	var iTime = 180;
	var Account;
	//短信发送成功执行
	function RemainTime(){
		document.getElementById('zphone').disabled = true;
		var iSecond,sSecond="",sTime="";
		if (iTime >= 0){
			iSecond = parseInt(iTime%60);
			iMinute = parseInt(iTime/60)
			if (iSecond >= 0){
				if(iMinute>0){
					sSecond = iMinute + "分" + iSecond + "秒";
				}else{
					sSecond = iSecond + "秒";
				}
			}
			sTime=sSecond;
			if(iTime==0){
				clearTimeout(Account);
				sTime='获取手机验证码';
				iTime = 59;
				document.getElementById('zphone').disabled = false;
			}else{
				Account = setTimeout("RemainTime()",1000);
				iTime=iTime-1;
			}
		}else{
			sTime='没有倒计时';
		}
		document.getElementById('zphone').value = sTime;
	}	


//注册账户
$(document).ready(function(){
      
	  $('#btnn').click(function(){
				if (!$("#tid").val()) {
					alert("请填写推荐人手机号");
			        return false;
			    }
				if (!$("#username").val()) {
					alert("请填写手机号");
			        return false;
			    }
				if (!$("#name").val()) {
					alert("请填写姓名");
			        return false;
			    }
				if (!$("#zhifubao").val()) {
					alert("请填写支付宝");
			        return false;
			    }
				if($("#password").val().length<6||$("#password").val().length>16){
					 alert('登录密码长度必须在6到16之间!');
			   		return false;
				}
				if($("#password2").val().length>16||$("#password2").val().length<6){
					 alert('确认密码长度必须在6到16之间!');
			  		return false;
				}
				if ($("#password").val()!=$("#password2").val()) {
					alert("两次密码不一致");
			        return false;
			    }
				if($("#secpwd").val().length<6||$("#secpwd").val().length>16){
					 alert('交易密码长度必须在6到16之间!');
			  		return false;
				}
				if($("#secpwd2").val().length<6||$("#secpwd2").val().length>16){
					 alert('确认交易密码密码长度必须在6到16之间!');
			 		return false;
				}
				if ($("#secpwd").val()!=$("#secpwd2").val()) {
					alert("两次交易密码不一致");
			       return false;
			   }
                if (!$("#mobile_code").val()) {
                  alert("短信验证码不能为空");
                  return false;
                }
        		var isChecked = $('#check01').is(':checked');
			     if(isChecked == false){
			     	alert("请选阅读注意规则,并且勾选同意!");
			     	return false;
			     }
                $('#btnn').attr("disabled","true");
                $(function() {
                  var params = {
                    username : $("#username").val(),
                    password : $("#password").val(),
                    safeword : $("#secpwd").val(),
                    zhifubao : $("#zhifubao").val(),
                    realname  :  $("#name").val(),
                    inviter : $("#tid").val(),
                    bankcard  :  $("#bankcard").val(),
                    idcard  :  $("#idcard").val(),
                    mobile_code : $("#mobile_code").val()
                  };
                  $.ajax({  
                    type: 'post',  
                    url: api.account.signup,
                    cache: false,  
                    data: params,  
                    dataType: 'json', 
                    success: function(data){ 
                      alert(data.message);
                      if (data.code == 200) {
                        window.setTimeout("window.location='/signin.html'",1000);
                        return true;
                      }else{
                        var img=document.getElementById('img');
                        img.setAttribute('src','/service/englcap.html?r='+Math.random());
                        $("#btnn").removeAttr('disabled');
                      }

                    },      
                  });
                });
	  });
});



</script>

</body>
</html>