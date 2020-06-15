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
include 'includes/common.php';
if($my == "getcomp"){
$key = daddslashes($_POST['key']);
$getkey=$DB->get_row("select * from ku_complain");
if ($key=='') {
@header('Content-Type: text/html; charset=UTF-8');
exit("<script language='javascript'>alert('查询秘钥不能为空！');history.go(-1);</script>"); 
}elseif ($key!=$getkey['key']) {
@header('Content-Type: text/html; charset=UTF-8');
exit("<script language='javascript'>alert('查询秘钥有误，请重新输入或联系客服咨询！');history.go(-1);</script>"); 
}
if ($key==$getkey['key']) {
$list = $DB->get_row("SELECT * FROM `ku_complain` WHERE `key` = '{$key}'");
}else{
@header('Content-Type: text/html; charset=UTF-8');
exit("<script language='javascript'>alert('获取异常！');history.go(-1);</script>");  
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
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-volume-up"></span> 公告
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-info">
                            <?=$conf['ts-line_tips']?>
                        </div>
                        <ur> 
                        <?php if ($list['hfconte']==null) { ?>
                            <li class="list-group-item">处理状态：<?=complain_zt($list['status'])?></li>
                            <li class="list-group-item">投诉产品类型：<?=$list['title']?></li>
                            <li class="list-group-item">投诉类型：<?=complain_sta($list['type'])?></li>
                            <li class="list-group-item">投诉内容：<?=$list['content']?></li>
                            <li class="list-group-item">发送人： <?=$list['qq']?>   发送时间：<?=$list['addtime']?></li> 
                        <?php }else{ ?>

                            <li class="list-group-item">处理状态：<?=complain_zt($list['status'])?></li>
                            <li class="list-group-item">投诉产品类型：<?=$list['title']?></li>
                            <li class="list-group-item">投诉类型：<?=complain_sta($list['type'])?></li>
                            <li class="list-group-item">投诉内容：<?=$list['content']?></li>
                            <li class="list-group-item">回复内容：<?=$list['hfconte']?></li>
                            <li class="list-group-item">回复人： <?=$list['name']?>   回复时间：<?=$list['hftime']?></li>
                       <?php } ?>
                           
                        </ur><br>
                       
                        <a href="./complain.html" target="_blank"><button type="button" class="btn btn-block btn-lg btn-dark">返回</button></a>
                        </form>
                    </div>
                </div>
            </div>

</div>
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
        <title><?=$conf['title']?>-在线问题投诉</title>
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
                            <span class="glyphicon glyphicon-volume-up"></span> 公告
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-info">
                            <?=$conf['ts-line_tips']?>
                        </div>
                        <ur> 
                        <?php if ($list['hfconte']==null) { ?>
                            <li class="list-group-item">处理状态：<?=complain_zt($list['status'])?></li>
                            <li class="list-group-item">投诉产品类型：<?=$list['title']?></li>
                            <li class="list-group-item">投诉类型：<?=complain_sta($list['type'])?></li>
                            <li class="list-group-item">投诉内容：<?=$list['content']?></li>
                            <li class="list-group-item">发送人： <?=$list['qq']?>   发送时间：<?=$list['addtime']?></li> 
                        <?php }else{ ?>

                            <li class="list-group-item">处理状态：<?=complain_zt($list['status'])?></li>
                            <li class="list-group-item">投诉产品类型：<?=$list['title']?></li>
                            <li class="list-group-item">投诉类型：<?=complain_sta($list['type'])?></li>
                            <li class="list-group-item">投诉内容：<?=$list['content']?></li>
                            <li class="list-group-item">回复内容：<?=$list['hfconte']?></li>
                            <li class="list-group-item">回复人： <?=$list['name']?>   回复时间：<?=$list['hftime']?></li>
                       <?php } ?>
                           
                        </ur><br>
                         <form action="?my=getcomp" method="POST" role="form">
                        <div class="form-group">
                                <label class="label label-dark">查询秘钥</label>
                                <div class="smart-padding-top-10"></div>
                                <input type="text" name="key" placeholder="这里填入查询秘钥" class="form-control">
                         </div>
                         <button type="submit" class="btn btn-block btn-lg btn-dark">查询</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-edit"></span> 投诉建议
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" role="form">
                            <div class="form-group">
                                <label class="label label-dark">投诉产品类型</label>
                                <div class="smart-padding-top-10"></div>
                                <input type="text" name="title" placeholder="这里填入要投诉产品类型" class="form-control" value="">
                            </div>

                            <div class="form-group">
                                <label class="label label-dark">投诉类型</label>
                                <div class="smart-padding-top-10"></div>
                                <select class="form-control" name="Product">
                              <option value="0">
                                BUG反馈
                              </option>
                              <option value="1">
                                账号问题 
                              </option>
                              <option value="2">
                               代理问题
                              </option>
                              <option value="3">
                               订单问题
                              </option>
                              <option value="4">
                               授权问题
                              </option>
                              <option value="5" selected>
                               其他/建议
                              </option>
                           </select>
                            </div>
                            <div class="form-group">
                                <label class="label label-dark">投诉内容</label>
                                <div class="smart-padding-top-10"></div>
                                <textarea rows="3" cols="5" name="comp" class="form-control" placeholder="这里填写您的投诉内容" value=""></textarea>
                            </div>
                           <div class="form-group">
                                <label class="label label-dark">联系QQ</label>
                                <div class="smart-padding-top-10"></div>
                                <input type="text" name="qq" placeholder="这里填入您的联系QQ" class="form-control" value="">
                            </div>
                            <button type="button" id="complain" class="btn btn-block btn-lg btn-dark">确定投诉</button>
                        </form>
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
            $("#complain").click(function(){
                var title=$("input[name='title']").val();
                var Product=$("select[name='Product']").val();
                var comp=$("textarea[name='comp']").val();
                var qq=$("input[name='qq']").val();
                if (title == '' || comp == '' || qq == ''){
                    layer.alert('请确保每项都不为空！',{icon:5,title:'提示信息！'});
                        return false;}
                var load = layer.load(2, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "ajax.php?act=complain",
                    data : {title:title,Product:Product,comp:comp,qq:qq},
                    dataType : 'json',
                    success : function(data) {
                        layer.close(load);
                        if(data.code == -1){
                            layer.alert(data.msg,{icon:5,title:'提示信息！'});
                        }else{
                            if (data.code ==1){
                               layer.alert(data.msg,{icon:6,title:'提示信息！'});
                            }else{
                               layer.alert(data.msg,{icon:5,title:'提示信息！'});
                            }
                        }
                    }
                });
            });

          });
    </script>
    </body>
    </html>
   <?php } ?>