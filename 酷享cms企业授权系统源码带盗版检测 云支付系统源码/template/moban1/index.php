<!--///////////////////////////////////////////////////////////
//                         _ooOoo_                           //
//                        o8888888o                          //
//                        88" . "88                          //
//                        (| ^_^ |)                          //
//                        O\  =  /O                          //
//                     ____/`---'\____                       //
//                   .'  \\|     |//  `.                     //
//                  /  \\|||  :  |||//  \                    //
//                 /  _||||| -:- |||||-  \                   //
//                 |   | \\\  -  /// |   |                   //
//                 | \_|  ''\---/''  |   |                   //
//                 \  .-\__  `-`  ___/-. /                   //
//               ___`. .'  /--.--\  `. . ___                 //
//             ."" '<  `.___\_<|>_/___.'  >'"".              //
//           | | :  `- \`.;`\ _ /`;.`/ - ` : | |             //
//           \  \ `-.   \_ __\ /__ _/   .-` /  /             //
//     ========`-.____`-.___\_____/___.-`____.-'========     //
//                          `=---='                          //
//     ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^     //
//          佛祖保佑         永无BUG         永不修改        //
///////////////////////////////////////////////////////////////-->
<!--5G云资源 酷享云授权系统 作者：余生 QQ：2316803263 盗版必究 购买正版请联系作者 盗版有风险-->
<?php
$online = isset($_GET['authonline']) ? $_GET['authonline'] : null;
if ($online == 'ok'){
    $url = $_GET['url'];
    $qq = $_GET['qq'];
    $type = $_GET['type'];
    if ($url == '' || $qq == '' || $type == ''){
        exit("<script language='javascript'>alert('你觉得哪里出的问题呢？');window.location.href='./';</script>");
    }
    function Typetozh($type){
        if ($type == 'addauth'){
            echo '添加授权';
        }elseif ($type == 'addsite'){
            echo '添加站点';
        }
    }

?>
<!DOCTYPE html>
    <html lang="zh">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?=$conf['title']?>-<?=$conf['title_bt']?></title>
        <meta name="description" content="<?=$conf['description']?>">
        <meta name="keywords" content="<?=$conf['keywords']?>">
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link href="public/css/bootstrap.css" rel="stylesheet">
        <link href="public/css/font-awesome.css" rel="stylesheet">
        <link href="public/css/style.css" rel="stylesheet">
        <script src="public/js/jquery-1.12.4.min.js"></script>
    </head>
    <body>
    <div class="home">
        <div class="container">
            <header>
                <h1>Network for the rest of life
                    <span>简单 朴素</span>
                </h1>
            </header>
        </div>
    </div>
    <div class="smart-padding-top-30"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-ok"></span> 授权成功
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-info">
                            <?=$conf['pay-line_tips']?>
                        </div>
                        <ur>
                            <li class="list-group-item">授权域名：<?=$url?></li>
                            <li class="list-group-item">授权QQ：<?=$qq?></li>
                            <li class="list-group-item">类型：<?php Typetozh($type); ?></li>
                            <li class="list-group-item">投诉与建议-》<a href="./complain.html">点击投诉</a></li>
                            <li class="list-group-item">感谢您对余生网络的支持 -》 <a href="./">返回</a></li>
                        </ur>
                    </div>
                </div>
            </div>

          
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <script src="public/js/qrlogin.js"></script>
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center;"><h3 class="panel-title">
                            扫码下载</h3>
                    </div>
                    <div class="panel-body" style="text-align: center;">
                        <div class="list-group">
                            <div class="list-group-item">请使用你购买授权时的QQ扫描以下二维码，通过验证后即可下载最新版源码</div>
                            <div class="list-group-item list-group-item-default" style="font-weight: bold;" id="login">
                                <span id="loginmsg">使用QQ手机版扫描二维码</span><span id="loginload" style="padding-left: 10px;color: #790909;">.</span>
                            </div>
                            <div class="list-group-item" id="qrimg">
                            </div>
                            <div class="list-group-item" id="mobile" style="display:none;"><button type="button" id="mlogin" onclick="mloginurl()" class="btn btn-dark btn-block">跳转QQ快捷登录</button></div>
                            <div class="list-group-item" id="submit"><a href="javascript:;" onclick="loadScript();" class="btn btn-block btn-dark">点击验证</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
    </div>

    <footer class="footer">
        <p><?php echo $conf['copyright'] ?> 作者:<a href="http://www.yunziyuan.com.cn/" title="5G云资源" target="_blank">5G云资源</a></p>
        <br>
    </footer>
    </body>
    </html>

 <?php }else{ ?>   
 <!DOCTYPE html>
    <html lang="zh">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?=$conf['title']?>-<?=$conf['title_bt']?></title>
        <meta name="description" content="<?=$conf['description']?>">
        <meta name="keywords" content="<?=$conf['keywords']?>">
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link href="public/css/bootstrap.css" rel="stylesheet">
        <link href="public/css/font-awesome.css" rel="stylesheet">
        <link href="public/css/style.css" rel="stylesheet">
        <script src="public/js/jquery-1.12.4.min.js"></script>
    </head>
    <body>
    <div id="Notice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" class="modal fade" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
                    <h4 id="myModalLabel" class="modal-title">公告</h4>
                </div>
                <div class="modal-body">
                <?php
                   echo $conf['kunotice'];
                 ?>
               </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-default">ok</button>
                </div>
            </div>
        </div>
    </div>
    <div class="home">
        <div class="container">
            <header>
                <h1><?=$conf['title']?> <span>正版授权查询</span>
                </h1>
            </header>
        </div>
    </div>
    <div class="smart-padding-top-30"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-search"></span> 域名查询
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" role="form">
                            <div class="form-group">
                                <label class="label label-dark">域名</label>
                                <div class="smart-padding-top-10"></div>
                                <input type="text" name="ym" placeholder="这里填入要查询的域名" class="form-control">
                            </div>
                            <button type="button" id="domain" class="btn btn-block btn-lg btn-dark">查询</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-search"></span> 代理查询
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" role="form">
                            <div class="form-group">
                                <label class="label label-dark">代理QQ</label>
                                <div class="smart-padding-top-10"></div>
                                <input type="text" name="qq" placeholder="这里填入要查询的代理QQ" class="form-control">
                            </div>
                            <button type="button" id="agent" class="btn btn-block btn-lg btn-dark">查询</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-cloud"></span> 在线授权
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form action="online/epayapi.php" method="post" role="form">
                            <div class="alert alert-info">
                                当前授权价格为<?=$conf['pay_fee'];?>元
                                <input type="hidden" name="pay_fee" value="<?=$conf['pay_fee'];?>" />
                            </div>
                            
                            <div class="form-group">
                                <label class="label label-dark">授权域名</label>
                                <div class="smart-padding-top-10"></div>
                                <input type="text" name="sq_url" placeholder="这里填入要授权的域名" class="form-control" required="">
                            </div><br />
                            <div class="form-group">
                                <label class="label label-dark">授权QQ</label>
                                <div class="smart-padding-top-10"></div>
                                <input type="text" name="sq_qq" placeholder="这里填入要授权的QQ" class="form-control" required="">
                            </div><br />
                            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                                <div class="btn-group" role="group">
                                    <button id="check_null" type="radio" name="type" value="alipay" class="btn btn-primary" style="background: gray">支付宝</button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button id="check_null" type="radio" name="type" value="qqpay" class="btn btn-default" style="background: burlywood">QQ</button>
                                </div>
                                <div class="btn-group" role="group">
                                    <button id="check_null" type="radio" name="type" value="wxpay" class="btn btn-dark">微信</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <script src="public/js/qrlogin.js"></script>
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center;"><h3 class="panel-title">
                            扫码下载</h3>
                    </div>
                    <div class="panel-body" style="text-align: center;">
                        <div class="list-group">
                            <div class="list-group-item">请使用你购买授权时的QQ扫描以下二维码，通过验证后即可下载最新版源码</div>
                            <div class="list-group-item list-group-item-default" style="font-weight: bold;" id="login">
                                <span id="loginmsg">使用QQ手机版扫描二维码</span><span id="loginload" style="padding-left: 10px;color: #790909;">.</span>
                            </div>
                            <div class="list-group-item" id="qrimg">
                            </div>
                            <div class="list-group-item" id="mobile" style="display:none;"><button type="button" id="mlogin" onclick="mloginurl()" class="btn btn-dark btn-block">跳转QQ快捷登录</button></div>
                            <div class="list-group-item" id="submit"><a href="javascript:;" onclick="loadScript();" class="btn btn-block btn-dark">点击验证</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
    </div>

    <footer class="footer">
        <p><?php echo $conf['copyright'] ?> 作者:<a href="http://www.yunziyuan.com.cn/" title="5G云资源" target="_blank">5G云资源</a></p>
        <br>
    </footer>
    <script src="public/js/bootstrap.js"></script>
    <script src="public/js/jquery.slimscroll.js"></script>
    <script src="public/layer/layer.js"></script>
    <script>
        $(function () {
            $('#Notice').modal('show');
            $("#agent").click(function(){
                var qq=$("input[name='qq']").val();
                var check = $.isNumeric(qq);
                function checkqq(qq,check) {
                    if (qq == ''){
                        layer.alert('你不填QQ我怎么搞',{icon:5,title:'提示信息！'});
                        return false;
                    }else if (check == false){
                        layer.alert('QQ号只能是数字，请善待输入框',{icon:5,title:'提示信息！'});
                        return false;
                    }else if (qq.length < 5) {
                        layer.alert('其实余生也没见过小于5位数的QQ号',{icon:5,title:'提示信息！'});
                        return false;
                    }else if (qq.length > 10){
                        layer.alert('其实余生也没见过大于10位数的QQ号',{icon:5,title:'提示信息！'});
                        return false;
                    } else{
                        return true;
                    }
                }
                if (checkqq(qq,check) == true){
                    var load = layer.load(2, {shade:[0.1,'#fff']});
                    $.ajax({
                        type : "POST",
                        url : "ajax.php?act=agent",
                        data : {'qq':qq},
                        dataType : 'json',
                        success : function(data) {
                            layer.close(load);
                            if(data.code == 1){
                                layer.alert(data.msg+'<hr />查询QQ：'+qq,{icon:1,title:'查询提示！'});
                            }else{
                                layer.alert(data.msg+'<hr />查询QQ：'+qq,{icon:2,title:'查询提示！'});
                            }
                        }
                    });
                }
            });
            $("#domain").click(function(){
                var ym=$("input[name='ym']").val();
                if (ym == '') {
                    layer.alert('请填写要查询的域名！',{icon:5,title:'提示信息！'});
                        return false;}
                var load = layer.load(2, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "ajax.php?act=domain",
                    data : {'ym':ym},
                    dataType : 'json',
                    success : function(data) {
                        layer.close(load);
                        if(data.code == 0){
                            layer.alert(data.msg,{icon:5,title:'HA?'});
                        }else{
                            if (data.code == 1){
                                layer.alert(data.msg+'<hr />查询域名：'+ym,{icon:1,title:'查询提示！'});
                            }else{
                                layer.alert(data.msg+'<hr />查询域名：'+ym,{icon:2,title:'查询提示！'});
                            }
                        }
                    }
                });
            });
            $("#check_null").click(function(){
                var sq_url = $("input[name='sq_url']").val();
                var sq_qq = $("input[name='sq_qq']").val();
                if (sq_url == '' || sq_qq == ''){
                    layer.alert('请确保每项都不为空',{icon:5,title:'提示信息！'});
                }
            });
        });

    </script>
    </body>
    </html>
    <?php } ?>