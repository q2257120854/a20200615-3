<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
$my = isset($_GET['my']) ? $_GET['my'] : null;
if ($my==null) {
 @header('Content-Type: text/html; charset=UTF-8');
                    exit("<script language='javascript'>alert('无参数，错误页面！');window.location.href='./Article.html';</script>");
}
if ($my=='edit') {
$id = $_GET['id'];
 $row_wz = $DB->get_row("select * from ku_article where id =".$id." limit 1");
}
  
?>
  <div class="row">
                 <div class="col-md-8">
                    <div class="white-box">
                      <h2 class="header-title">修改文章内容</h2>
                    <form method="post" role="form">
                     <input type="hidden" name="id" class="form-control" value="<?=$id?>">
                      <div class="form-group">
                        <label>标题</label>
                        <input type="text" class="form-control"  placeholder="请输入标题" name="title" value="<?=$row_wz['title']?>">
                      </div>
                      <div class="form-group">
                        <label>栏目</label>
                        <select class="form-control input-sm m-b-15" name="typepe">
                        <option value="0" <?=$row_wz['type']==0?"selected":""?>>案例中心</option>
                        <option value="1" <?=$row_wz['type']==1?"selected":""?>>更新日志</option>
                        </select>
                        </div>

                         <div class="form-group">
                         <label>图片外链地址</label>
                       <input type="text" class="form-control"  placeholder="图片外链地址" name="img" value="<?=$row_wz['img']?>">
                       </div> 
                       <div class="form-group">
                         <label>内容</label>
                        <textarea rows="5" name="content" class="form-control" placeholder="请输入内容"><?=$row_wz['content']?></textarea>
                      </div>
                    <div class="form-group">
                         <label>状态：</label>
                      
                      <input type="radio" name="state" value="0"<?=$row_wz['state']==0?"checked":""?> >
                      <label for="radio-1">显示</label>
                  

                      <input type="radio" name="state" value="1" <?=$row_wz['state']==1?"checked":""?>>
                      <label for="radio-1">不显示</label>
                   
                    </div>
                       
                         <button type="button" id="cleedit" class="btn btn-primary">确认提交</button>
                    <!-- </form> -->
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
            $("#cleedit").click(function(){
                var id=$("input[name='id']").val();
                var title=$("input[name='title']").val();
                var typepe=$("select[name='typepe']").val();
                var img=$("input[name='img']").val();
                var content=$("textarea[name='content']").val();
                var state=$("input[name='state']:checked").val();
                if (title == '' || typepe == '' || img == '' || content == '' || state == ''){
                    layer.alert('请确保每项都不为空！',{icon:5,title:'提示信息！'});
                        return false;}
               if (id == ''){
                    layer.alert('缺少参数！',{icon:5,title:'提示信息！'});
                        return false;}
                var load = layer.load(2, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "ajax.php?act=cleedit",
                    data : {id:id,title:title,typepe:typepe,img:img,content:content,state:state},
                    dataType : 'json',
                    success : function(data) {
                        layer.close(load);
                        if(data.code == -1){
                            layer.alert(data.msg,{icon:5,title:'提示信息！'});
                        }else{
                            if (data.code ==1){
                                 layer.alert(data.msg,{icon:6,title:'提示信息！'},function(){
                               window.location.href = "Article.html";
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