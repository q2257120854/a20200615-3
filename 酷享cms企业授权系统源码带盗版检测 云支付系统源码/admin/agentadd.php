<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
?>
 <div class="row">
                 <div class="col-md-10">
                   <div class="white-box">
                      <h2 class="header-title">添加代理</h2>
                    <form class="form-horizontal" method="post" role="form">
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">代理账号：</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="username" placeholder="请输入11位手机号码" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label  class="col-sm-3 control-label">代理密码：</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="pwd" placeholder="请填写代理密码" type="text" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-3 control-label">代理联系QQ：</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="user_qq" placeholder="请填写代理联系QQ" type="text" value="">
                            </div>
                        </div>
                       <div class="form-group">
                            <label class="col-sm-3 control-label">代理昵称：</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="user_name" placeholder="请填写代理昵称或公司名称或工作室名称" type="text" value="">
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="col-sm-3 control-label">赠送授权数：</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="user_lv" placeholder="留空默认不赠送" type="text" value="">
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">修改授权上限：</label>
                            <div class="col-sm-9">
                              <input class="form-control" name="squan_limit" placeholder="不填写默认不限制" type="text" value="">
                            </div>
                        </div>
                         <div class="form-group">
                            <label class="col-sm-3 control-label">代理等级:</label>
                            <div class="col-sm-9">
                               <select class="form-control" name="user_limit">
                              <option value="0">
                               普通会员
                              </option>
                              <option value="1" selected>
                               普通代理
                              </option>
                              <option value="2">
                               高级代理
                              </option>
                              <option value="3">
                               砖石代理
                              </option>
                           </select>
                            </div>
                        </div>
                          <div class="form-group">
                            <label class="col-sm-3 control-label">状态:</label>
                             <div class="col-md-9">
                        <label class="radio-inline">
                          <input type="radio" name="user_status" value="0" checked>
                          正常
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="user_status" value="1">
                          封禁
                        </label>
                        <label class="radio-inline">
                          <input type="radio" name="user_status" value="2">
                          冻结
                        </label>
                       
                      </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-offset-3 col-sm-9">
                              <button type="button" id="agadd"  class="btn btn-primary">确定添加</button>
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
            $("#agadd").click(function(){
                var username=$("input[name='username']").val();
                var pwd=$("input[name='pwd']").val();
                var user_qq=$("input[name='user_qq']").val();
                var user_name=$("input[name='user_name']").val();
                var user_lv=$("input[name='user_lv']").val();
                var squan_limit=$("input[name='squan_limit']").val();
                var user_limit=$("select[name='user_limit']").val();
                var user_status=$("input[name='user_status']:checked").val();
                var myreg=/^[1][3,4,5,7,8][0-9]{9}$/;
                if (username == '' || pwd == '' || user_qq == '' || user_name == ''){
                    layer.alert('请确保每项都不为空！',{icon:5,title:'提示信息！'});
                        return false;}
                if (!myreg.test(username)) {
              layer.msg('账号必须为11位手机号码！', {icon: 5});
                        return false;}        
                var load = layer.load(2, {shade:[0.1,'#fff']});
                $.ajax({
                    type : "POST",
                    url : "ajax.php?act=agadd",
                    data : {username:username,pwd:pwd,user_qq:user_qq,user_name:user_name,user_lv:user_lv,squan_limit:squan_limit,user_limit:user_limit,user_status:user_status},
                    dataType : 'json',
                    success : function(data) {
                        layer.close(load);
                        if(data.code == -1){
                            layer.alert(data.msg,{icon:5,title:'提示信息！'});
                        }else{
                            if (data.code ==1){
                                 layer.alert(data.msg,{icon:6,title:'提示信息！'},function(){
                               window.location.href = "agent_list.html";
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