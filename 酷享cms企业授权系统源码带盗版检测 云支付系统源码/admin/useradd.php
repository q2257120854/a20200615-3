<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
?>
<div class="row">
  <div class="col-md-12">
                   <div class="white-box">
                      <h2 class="header-title">添加管理员</h2>
                    <form class="form-horizontal" method="post" role="form">
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">管理昵称:</label>
                            <div class="col-sm-9">
                               <input type="text" name="name" class="form-control" value="" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">管理员账号:</label>
                            <div class="col-sm-9">
                             <input type="text" name="username" class="form-control" value="" oninput ="value=value.replace(/[^\d]/g,'')" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">管理员密码:</label>
                            <div class="col-sm-9">
                              <input type="text" name="userpass" class="form-control" value="" required>
                            </div>
                        </div>
                       
                        <div class="form-group">
                            <label class="col-sm-3 control-label">管理权限:</label>
                            <div class="col-sm-9">
                               <select class="form-control" name="grade">
                              <option value="0">
                               超级管理
                              </option>
                              <option value="1">
                               平台管理
                              </option>
                              <option value="2">
                               授权管理
                              </option>
                              <option value="3">
                               高级管理
                              </option>
                               <option value="4">
                               财务管理
                              </option>
                           </select>
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-3 control-label">状态:</label>
                             <div class="col-md-9">
                        <label class="radio-inline">
                          <input type="radio" name="active" value="0" checked>
                          正常
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="active" value="1">
                          封禁
                        </label>
                       
                      </div>
                        </div>
                       
                        <div class="form-group m-b-0">
                            <div class="col-sm-offset-3 col-sm-9">
                              <button type="button" id="useradd"  class="btn btn-primary">确认添加</button>
                            </div>
                        </div>
                     </form>
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
            $("#useradd").click(function(){
                var name=$("input[name='name']").val();
                var username=$("input[name='username']").val();
                var userpass=$("input[name='userpass']").val();
                var grade=$("select[name='grade']").val();
                var active=$("input[name='active']:checked").val();
                if (name == '' || username == '' || userpass == '' || grade == '' || active == ''){
                    layer.alert('请确保每项都不为空！',{icon:5,title:'提示信息！'});
                        return false;}
                var load = layer.load(2, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "ajax.php?act=useradd",
                    data : {name:name,username:username,userpass:userpass,grade:grade,active:active},
                    dataType : 'json',
                    success : function(data) {
                        layer.close(load);
                        if(data.code == -1){
                            layer.alert(data.msg,{icon:5,title:'提示信息！'});
                        }else{
                            if (data.code ==1){
                                 layer.alert(data.msg,{icon:6,title:'提示信息！'},function(){
                               window.location.href = "userlist.html";
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