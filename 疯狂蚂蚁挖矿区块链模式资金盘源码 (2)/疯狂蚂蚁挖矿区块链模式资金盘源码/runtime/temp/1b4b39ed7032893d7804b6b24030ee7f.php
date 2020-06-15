<?php /*a:2:{s:64:"/www/wwwroot/77q73.cn/application/index/view/account/authen.html";i:1551505653;s:62:"/www/wwwroot/77q73.cn/application/index/view/common/world.html";i:1551429184;}*/ ?>
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
            实名认证
        </a>
        <div class="logo">
             <a id="cancle" href="javascript:history.go(-1)"><i class="icon icon-left"></i></a>
        </div>
        <a class="icon pull-right open-panel"></a>
    </header>
    
    <nav class="foot-bar">
        <div class="foot-menu"><a href="/account.html">
            <i class="iconfont icon-shouye"></i><span>首页</span></a></div>
        <div class="foot-menu"><a href="/machine.html">
            <i class="iconfont icon-wxbmingxingdianpu"></i><span>我的蚁后</span></a></div>
        <div class="foot-menu"><a href="/team.html">
            <i class="iconfont icon-friend"></i><span>我的团队</span></a></div>
        <div class="foot-menu"><a href="/market.html">
            <i class="iconfont icon-wxbdingwei"></i><span>交易中心</span></a></div>
        <div class="foot-menu"><a href="/home.html">
            <i class="iconfont icon-geren"></i><span>会员中心</span></a></div>
    </nav>
    

    <div class="content" id="main_content">
        
<style type="text/css">
    body{ background: #FFF;}
    .li_touxiang img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
    }
</style>
<div class="list-block">
    <ul>
        <li>
            <div class="item-content">
                <div class="item-media"><i class="icon icon-form-name"></i></div>
                <div class="item-inner">
                    <div class="item-title label">用户名</div>
                    <div class="item-input"> <?php echo htmlentities($user['account']['username']); ?></div>
                </div>
            </div>
        </li>

        <li>
            <div class="item-content">
                <div class="item-media"><i class="icon icon-form-name"></i></div>
                <div class="item-inner">
                    <div class="item-title label">真实姓名</div>
                    <div class="item-input">
                      
                      <input type="text" class="form-control" id="realname" placeholder="真实姓名" value="<?php echo htmlentities($user['profile']['realname']); ?>" />
                     
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
                <input type="text" class="form-control" id="alipay" placeholder="支付宝" value="<?php echo htmlentities($user['profile']['alipay']); ?>" />             
              </div>
            </div>
          </div>
        </li>
        <li>
            <div class="item-content">
                <div class="item-media"><i class="icon icon-form-name"></i></div>
                <div class="item-inner">
                    <div class="item-title label">身份证号码</div>
                    <div class="item-input">
                        <?php if(!(empty($user['profile']['idcard']) || (($user['profile']['idcard'] instanceof \think\Collection || $user['profile']['idcard'] instanceof \think\Paginator ) && $user['profile']['idcard']->isEmpty()))): ?>
                        隐藏
                        <?php else: ?>
                        <input type="text" class="form-control" id="sfz" placeholder="身份证号码" value="<?php echo htmlentities($user['profile']['idcard']); ?>" />
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
                        <?php if(!(empty($user['profile']['bankcard']) || (($user['profile']['bankcard'] instanceof \think\Collection || $user['profile']['bankcard'] instanceof \think\Paginator ) && $user['profile']['bankcard']->isEmpty()))): ?>
                        <?php echo htmlentities($user['profile']['bankcard']); else: ?>
                        <input type="text" class="form-control" id="yhkh" placeholder="银行卡号" value="<?php echo htmlentities($user['profile']['bankcard']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </li>
        <?php if(!(empty($user['profile']['idcard']) || (($user['profile']['idcard'] instanceof \think\Collection || $user['profile']['idcard'] instanceof \think\Paginator ) && $user['profile']['idcard']->isEmpty()))): ?>
        <li>
            <div class="item-content">
                <div class="item-media"><i class="icon icon-form-name"></i></div>
                <div class="item-inner">
                    <div class="item-title label">认证状态</div>
                    <div class="item-input">
                        <?php if($user['account']['authen'] == '1'): ?>
                        认证成功
                        <?php endif; if($user['account']['authen'] == '2'): ?>
                        审核中
                        <?php endif; if(!(empty($audit) || (($audit instanceof \think\Collection || $audit instanceof \think\Paginator ) && $audit->isEmpty()))): ?>
                        尚未通过审核！
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </li>
        <?php else: ?>
        <li>
            <div class="item-content">
                <div class="item-media"><i class="icon icon-form-name"></i></div>
                <div class="item-inner">
                    <div class="item-title label">交易密码</div>
                    <div class="item-input">
                        <input type="password" class="form-control" name="password" id="secpwd" placeholder="******"/>
                    </div>
                </div>
            </div>
        </li>
        <li>
            <div class="content-block">
                <div class="row">
                    <div class="col-100">
                        <input id="btnn" type="button" class="button button-big button-fill button-success js-submit"
                               style="width: 100%;" value="提交"/>
                    </div>
                </div>
            </div>
        </li>
        <?php endif; ?>
    </ul>
</div>

    </div>
</div>
<script type="text/javascript" src="/static/images/alert.js"  ></script>
<script type="text/javascript" src="/assets/js/require.min.js"></script>
<script type="text/javascript" src="/static/js/global.js?3"></script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#btnn').click(function(){
            var regIdNo = /(^\d{15}$)|(^\d{18}$)|(^\d{17}(\d|X|x)$)/;  
            if(!regIdNo.test($("#sfz").val())){  
              alert('身份证号填写有误');  
              return false;  
            }  
            if (!$("#yhkh").val()) {
                alert("银行卡号不能为空");
                return false;
            }
            if (!$("#secpwd").val()) {
                alert("二级密码不能为空");
                return false;
            }
            var params = {
                idcard : $("#sfz").val(),
                bankcard : $("#yhkh").val(),
              	realname : $("#realname").val(),
              	alipay : $("#alipay").val(),
                paypassword : $("#secpwd").val()
            };
            $.ajax({
                type: 'post',
                url: api.account.authen,
                cache: false,
                data: params,
                dataType: 'json',
                success: function(data){
                    alert(data.message);
                    if (data.code == 200) {
                        window.setTimeout("window.location='/account/authen.html'",1000);
                        //window.location.href="/shiming.html";//需要跳转的地址
                        return true;
                    }else{
                        $("#sub01").removeAttr('disabled');
                    }
                },
            });
            return false;
        });
    });
</script>

</body>
</html>