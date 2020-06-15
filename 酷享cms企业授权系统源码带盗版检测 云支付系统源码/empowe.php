<?php
include 'includes/common.php';
if ($conf['squan']==0) {
	sysmsg('卡密授权通道已经关闭，请使用在线授权通道！');
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
                            <span class="glyphicon glyphicon-volume-up"></span> 卡密授权公告
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="alert alert-info">
                            <?=$conf['on-line_tips']?>
                        </div>
                         <ur>
                            <li class="list-group-item">
                            卡密销售站点：http://www.yunziyuan.com.cn/&nbsp;<a target="blank" href="http://www.yunziyuan.com.cn/">点击访问</a></li>
                            <li class="list-group-item">联系QQ:<a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$conf['wap_qq']?>&Site=酷享授权&Menu=yes" title="点击直接QQ会话"><?=$conf['wap_qq']?></a></li>
                            <li class="list-group-item">服务时间:9:00-24:00</li>
                            <li class="list-group-item">投诉与建议-》<a href="./">点击投诉</a></li>
                            <li class="list-group-item">感谢您对余生网络的支持 -》 <a href="./">返回</a></li>
                        </ur> 
                    </div>
                </div>
            </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-pencil"></span>卡密授权
                        </h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" role="form">
                            <div class="form-group">
                                <label class="label label-dark">授权域名</label>
                                <div class="smart-padding-top-10"></div>
                                <input type="text" name="kuhost" placeholder="这里填入授权域名" class="form-control">
                            </div>
                             <div class="form-group">
                                <label class="label label-dark">授权QQ</label>
                                <div class="smart-padding-top-10"></div>
                                <input type="text" name="ku_qq" placeholder="这里填入授权QQ" class="form-control">
                            </div>
                             <div class="form-group">
                                <label class="label label-dark">授权卡密</label>
                                <div class="smart-padding-top-10"></div>
                                <input type="text" name="carmine" placeholder="这里填入授权卡密" class="form-control">
                            </div>

                            <button type="button" id="sqepowe" class="btn btn-block btn-lg btn-dark">提交授权</button>
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
            $("#sqepowe").click(function(){
                var kuhost=$("input[name='kuhost']").val();
                var ku_qq=$("input[name='ku_qq']").val();
                var carmine=$("input[name='carmine']").val();
                if (kuhost == '' || carmine == '' || ku_qq == ''){
                    layer.alert('请确保每项都不为空！',{icon:5,title:'提示信息！'});
                        return false;}
                var load = layer.load(2, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "ajax.php?act=sqepowe",
                    data : {kuhost:kuhost,ku_qq:ku_qq,carmine:carmine},
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
   