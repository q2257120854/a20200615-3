<?php
include '../includes/common.php';
include 'header.php';
include 'nav.php';
$my = isset($_GET['my']) ? $_GET['my'] : null;
            if($my == "modify"){
                foreach ($_POST as $k => $value) {
                        $value=daddslashes($value);
                        $DB->query("insert into ku_config set `k`='{$k}',`v`='{$value}' on duplicate key update `v`='{$value}'"); 
                }
       exit("<script language='javascript'>alert('修改成功！');window.location.href='./business.html';</script>");
    }

?> 
<div class="row">
<div class="col-md-12">
         <div class="alert alert-info fade in">
                      <i class="icon-remove close" data-dismiss="alert">
                      </i>
                       1、金币说明：列如；设置金币数量为1金币，则金币价格请设置为1元<br>
                      2、价格说明：生成卡密价格为生成单张卡密的价格，授权价格为添加一条授权的价格，添加代理为开通单个代理账号的价格。<br>
                    </button></a>
                    </div>
                    </div>
                    </div>

        <div class="row"> 
            <div class="col-md-6">
              <div class="white-box">
                <div class="widget-header">
                                 <h4 class="header-title">充值设置</h4>
                             <div class="widget-content">
                              <form class="form-horizontal row-border" action="business.php?my=modify" method="post">
                      <div class="form-group">
                      <label class="col-md-2 control-label">
                       点卡类型①:
                      </label>
                    <label class="col-md-2 control-label">
                      金币数量
                      <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-2">
                        <input type="text" name="coin_nb" class="form-control" placeholder="金币数量" value="<?=$conf['coin_nb']?>" >
                      </div>
                      <label class="col-md-2 control-label">
                      金币价格
                      <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-2">
                        <input type="text" name="coin_money" placeholder="金币价格" class="form-control" value="<?=$conf['coin_money']?>" >
                      </div>
                      <label class="control-label">
                      元
                      </label>
                    </div>
                     <div class="form-group">
                      <label class="col-md-2 control-label">
                      点卡类型②:
                      </label>
                    <label class="col-md-2 control-label">
                      金币数量
                      <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-2">
                        <input type="text" name="coin_nb_1" class="form-control" placeholder="金币数量" value="<?=$conf['coin_nb_1']?>" >
                      </div>
                      <label class="col-md-2 control-label">
                      金币价格
                      <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-2">
                        <input type="text" name="coin_money_1" placeholder="金币价格" class="form-control" value="<?=$conf['coin_money_1']?>" >
                      </div>
                       <label class="control-label">
                      元
                      </label>
                    </div>
                    
                       <div class="form-group">
                      <label class="col-md-2 control-label">
                     点卡类型③:

                      </label>
                      <label class="col-md-2 control-label">
                      金币数量
                      <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-2">
                        <input type="text" name="coin_nb_2" class="form-control" placeholder="金币数量" value="<?=$conf['coin_nb_2']?>" >
                      </div>
                      <label class="col-md-2 control-label">
                      金币价格
                      <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-2">
                        <input type="text" name="coin_money_2" placeholder="金币价格" class="form-control" value="<?=$conf['coin_money_2']?>" >
                      </div>
                      <label class="control-label">
                      元
                      </label>
                    </div>
                     <div class="form-actions">
                      <input type="submit" value="确定设置" class="btn btn-primary pull-right">
                    </div>
                    </form>
                     </div>
                  </div>
            </div>
         </div>

     <div class="col-md-6">
              <div class="white-box">
                <div class="widget-header">
                <h4 class="header-title">版本价格</h4>
                                    <div class="widget-content">
                              <form class="form-horizontal row-border" action="business.php?my=modify" method="post">
                        <div class="form-group">
                      <label class="col-md-3 control-label">
                       商业授权版价格
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="pay_fee" class="form-control required digits" min="5" placeholder="请输入商业授权版价格！" value="<?=$conf['pay_fee']?>" required>
                      </div>
                    </div>
                      <div class="form-group">
                      <label class="col-md-3 control-label">
                       开源版价格
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="pay_fee_kai" class="form-control required digits" min="5" placeholder="请输入开源版价格！" value="<?=$conf['pay_fee_kai']?>" required>
                      </div>
                    </div>
                       <div class="form-group">
                   
                      <label class="col-md-3 control-label">
                      开源赠送授权数
                      <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-2">
                        <input type="text" name="user_lv" class="form-control" placeholder="赠送授权数量" value="<?=$conf['user_lv']?>" >
                      </div>
                      <label class="col-md-3 control-label">
                      开源赠送金币数
                      <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-2">
                        <input type="text" name="reward_money" placeholder="赠送金币数量" class="form-control" value="<?=$conf['reward_money']?>" >
                      </div>
                      <label class="control-label">
                      个
                      </label>
                    </div>
                    
                    
                     <div class="form-actions">
                      <input type="submit" value="确定设置" class="btn btn-primary pull-right">
                    </div>
                    </form>
                     </div>
                  </div>
            </div>
         </div>
 </div>

<div class="row">
<div class="col-md-6">
              <div class="white-box">
                <div class="widget-header">
                   <h4 class="header-title">会员升级价格</h4>
                                    <div class="widget-content">
                              <form class="form-horizontal row-border" action="business.php?my=modify" method="post">
                        <div class="form-group">
                      <label class="col-md-3 control-label">
                      升级普通代理价格
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="reward" class="form-control required digits" min="5" placeholder="请输入商业授权版价格！" value="<?=$conf['reward']?>" required>
                      </div>
                       <label class="control-label">
                      个
                      </label>
                    </div>
                      <div class="form-group">
                      <label class="col-md-3 control-label">
                       升级高级代理价格
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="reward_gj" class="form-control required digits" min="5" placeholder="请输入开源版价格！" value="<?=$conf['reward_gj']?>" required>
                      </div>
                      <label class="control-label">
                      个
                      </label>
                    </div>
                     <div class="form-group">
                      <label class="col-md-3 control-label">
                       升级砖石代理价格
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="reward_zs" class="form-control required digits" min="5" placeholder="请输入开源版价格！" value="<?=$conf['reward_zs']?>" required>
                      </div>
                        <label class="control-label">
                      个
                      </label>
                    </div>
                   
                     <div class="form-actions">
                      <input type="submit" value="确定设置" class="btn btn-primary pull-right">
                    </div>
                    </form>
                     </div>
                  </div>
            </div>
         </div>

         <div class="col-md-6">
              <div class="white-box">
                <div class="widget-header">
                   <h4 class="header-title">生成卡密价格</h4>
                                    <div class="widget-content">
                              <form class="form-horizontal row-border" action="business.php?my=modify" method="post">

                      <div class="form-group">
                      <label class="col-md-3 control-label">
                        高级代理生成卡密价格
                        <span class="required"> 
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="kami_price" class="form-control required" value="<?=$conf['kami_price']?>" oninput ="value=value.replace(/[^\d]/g,'')" required>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-3 control-label">
                        钻石代理生成卡密价格
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="z_kami_price" class="form-control required" value="<?=$conf['z_kami_price']?>" oninput ="value=value.replace(/[^\d]/g,'')" required>
                      </div>
                    </div>
                  <div class="form-actions">
                      <input type="submit" value="确定设置" class="btn btn-primary pull-right">
                    </div>

                          </form>
                        </div>
                    </div>
              </div>
        </div>
    </div>

    <div class="row white-box">
<div class="col-md-6">
                <div class="widget-header">
                   <h4 class="header-title">代理手动授权与开通代理账号价格</h4>
                                    <div class="widget-content">
                              <form class="form-horizontal row-border" action="business.php?my=modify" method="post">
                      <div class="form-group">
                      <label class="col-md-3 control-label">
                        普通代理后台授权价格
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="psq_price" class="form-control required email" value="<?=$conf['psq_price']?>" oninput ="value=value.replace(/[^\d]/g,'')" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">
                        高级代理后台授权价格
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="sq_price" class="form-control required email" value="<?=$conf['sq_price']?>" oninput ="value=value.replace(/[^\d]/g,'')" required>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-3 control-label">
                        钻石代理后台授权价格
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="zssq_price" class="form-control required email" value="<?=$conf['zssq_price']?>" oninput ="value=value.replace(/[^\d]/g,'')" required>
                      </div>
                    </div>
                                  
                    </div>
              </div>
         </div>
         <div class="col-md-6">
                <div class="widget-header">
                                    <div class="widget-content">
                             
                          <div class="form-group">
                      <label class="col-md-3 control-label">
                        高级代理添加普通代理价格
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="gjaddpu_price" class="form-control required url" value="<?=$conf['gjaddpu_price']?>" oninput ="value=value.replace(/[^\d]/g,'')" required>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-3 control-label">
                        高级代理添加高级代理价格
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="gjaddgj_price" class="form-control required url" value="<?=$conf['gjaddgj_price']?>" oninput ="value=value.replace(/[^\d]/g,'')" required>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-3 control-label">
                        钻石代理添加普通代理价格
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="adding_price" class="form-control required url" value="<?=$conf['adding_price']?>" oninput ="value=value.replace(/[^\d]/g,'')" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="col-md-3 control-label">
                       钻石代理添加高级代理价格
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="zsadding_price" class="form-control required" minlength="5" value="<?=$conf['zsadding_price']?>" oninput ="value=value.replace(/[^\d]/g,'')" required>
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="col-md-3 control-label">
                       钻石代理添加钻石代理价格
                        <span class="required">
                          *
                        </span>
                      </label>
                      <div class="col-md-7">
                        <input type="text" name="zsadd_price" class="form-control required" minlength="5" value="<?=$conf['zsadd_price']?>" oninput ="value=value.replace(/[^\d]/g,'')" required>
                      </div>
                    </div>
                  <div class="form-actions">
                      <input type="submit" value="确定设置" class="btn btn-primary pull-right">
                    </div>

                    </form>
                        </div>
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
</body>
</html>