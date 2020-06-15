<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
$my = isset($_GET['my']) ? $_GET['my'] : null;
if ($my==null) {
 @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('无参数，错误页面！');window.location.href='./Article.html';</script>");
}
if ($my=='widedit') {
$id = $_GET['id'];
 $row_gg = $DB->get_row("select * from ku_article where type=2 and id =".$id." limit 1");
}
?>
  <div class="row">
                 <div class="col-md-8">
                    <div class="white-box">
                      <h2 class="header-title">修改广告</h2>
                    <form method="post" role="form">
                     <input type="hidden" name="id" class="form-control" value="<?=$id?>">
                     <input type="hidden" name="typepe" class="form-control" value="2">
                      <div class="form-group">
                        <label>标题</label>
                        <input type="text" class="form-control"  placeholder="请输入标题" name="title" value="<?=$row_gg['title']?>">
                      </div>
                      <div class="form-group">
                        <label>图片栏目</label>
                        <select class="form-control input-sm m-b-15" name="datape">
                        <option value="0"<?=$row_gg['dada']==0?"selected":""?>>首页轮图</option>
                        <option value="1"<?=$row_gg['dada']==1?"selected":""?>>产品介绍</option>
                        <option value="2"<?=$row_gg['dada']==2?"selected":""?>>案例中心轮图</option>
                        </select>
                        </div>
                         <div class="form-group">
                         <label>图片外链地址</label>
                       <input type="text" class="form-control"  placeholder="图片外链地址" name="img" value="<?=$row_gg['img']?>">
                       </div> 
                       <div class="form-group">
                         <label>跳转URL地址</label>
                        <input type="text" class="form-control"  placeholder="图片跳转地址格式http://或https://" name="content" value="<?=$row_gg['content']?>">
                      </div>
                    <div class="form-group">
                         <label>状态：</label>
                      
                      <input type="radio" name="state" value="0" <?=$row_gg['state']==0?"checked":""?>>
                      <label for="radio-1">显示</label>
                  

                      <input type="radio" name="state" value="1" <?=$row_gg['state']==1?"checked":""?>>
                      <label for="radio-1">不显示</label>
                   
                    </div>
                       
                         <button type="button" id="widedit" class="btn btn-primary">确认提交</button>
                  </div>
               </div>
               </div>
                   
                  </div>
        <footer class="footer-main"><a target="_blank" href="http://www.kuxiangcms.com/"><?php echo $conf['copyright'] ?></a></footer>  
       </div>
    <script src="./admin/js/jquery.min.js"></script>
    <script src="./admin/js/bootstrap.min.js"></script>
    <script src="./admin/plugins/moment/moment.js"></script>
    <script  src="./admin/js/jquery.slimscroll.js "></script>
    <script src="./admin/js/jquery.nicescroll.js"></script>
    <script src="./admin/js/functions.js"></script>
    <script src="./admin/plugins/morris-chart/morris.js"></script>
    <script src="./admin/plugins/morris-chart/raphael-min.js"></script>
    <script src="./admin/plugins/jquery-sparkline/jquery.charts-sparkline.js"></script>
    <script src="/public/layer/layer.js"></script>
    <script>
        $(function () {
            $("#widedit").click(function(){
                var id=$("input[name='id']").val();
                var typepe=$("input[name='typepe']").val();
                var title=$("input[name='title']").val();
                var datape=$("select[name='datape']").val();
                var img=$("input[name='img']").val();
                var content=$("input[name='content']").val();
                var state=$("input[name='state']:checked").val();
                if (title == '' || typepe == '' || img == '' || content == '' || state == ''){
                    layer.alert('请确保每项都不为空！',{icon:5,title:'提示信息！'});
                        return false;}
                if (id == ''){
                    layer.alert('非法参数，参数错误！',{icon:5,title:'提示信息！'});
                        return false;}
                var load = layer.load(2, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "ajax.php?act=widedit",
                    data : {id:id,typepe:typepe,title:title,datape:datape,img:img,content:content,state:state},
                    dataType : 'json',
                    success : function(data) {
                        layer.close(load);
                        if(data.code == -1){
                            layer.alert(data.msg,{icon:5,title:'提示信息！'});
                        }else{
                            if (data.code ==1){
                                 layer.alert(data.msg,{icon:6,title:'提示信息！'},function(){
                               window.location.href = "widesue.html";
                               });
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