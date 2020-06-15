<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
?>
  <div class="row">
                 <div class="col-md-8">
                    <div class="white-box">
                      <h2 class="header-title">添加文章</h2>
                    <form method="post" role="form">
                      <div class="form-group">
                        <label>标题</label>
                        <input type="text" class="form-control"  placeholder="请输入标题" name="title" value="">
                      </div>
                      <div class="form-group">
                        <label>栏目</label>
                        <select class="form-control input-sm m-b-15" name="typepe">
                        <option value="0">案例中心</option>
                        <option value="1">更新日志</option>
                        </select>
                        </div>

                         <div class="form-group">
                         <label>图片外链地址</label>
                       <input type="text" class="form-control"  placeholder="图片外链地址" name="img" value="">
                       </div> 
                       <div class="form-group">
                         <label>内容</label>
                        <textarea rows="5" name="content" class="form-control" placeholder="请输入内容"><?=$_POST['content']?></textarea>
                      </div>
                    <div class="form-group">
                         <label>状态：</label>
                      
                      <input type="radio" name="state" value="0" checked>
                      <label for="radio-1">显示</label>
                  

                      <input type="radio" name="state" value="1">
                      <label for="radio-1">不显示</label>
                   
                    </div>
                       
                         <button type="button" id="cleadd" class="btn btn-primary">确认提交</button>
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
            $("#cleadd").click(function(){
                var title=$("input[name='title']").val();
                var typepe=$("select[name='typepe']").val();
                var img=$("input[name='img']").val();
                var content=$("textarea[name='content']").val();
                var state=$("input[name='state']:checked").val();
                if (title == '' || typepe == '' || img == '' || content == '' || state == ''){
                    layer.alert('请确保每项都不为空！',{icon:5,title:'提示信息！'});
                        return false;}
                var load = layer.load(2, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "ajax.php?act=cleadd",
                    data : {title:title,typepe:typepe,img:img,content:content,state:state},
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