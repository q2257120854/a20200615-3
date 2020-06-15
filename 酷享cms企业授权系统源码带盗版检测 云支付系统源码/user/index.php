<?php
include '../includes/common.php';
?>
<!doctype html>
<html lang="en"> 
<head>
   <title>用户后台 | <?=$conf['title']?></title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/vendor/linearicons/style.css">
  <link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/demo.css">
  <link rel="stylesheet" href="assets/css/user.css">
  <link rel="stylesheet" href="assets/foot/iconfont.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>
<body> 
<?php
include 'header.php';
?>
<?php
 include 'nav.php';
 $kmnum = $DB->COUNT("select count(id) from ku_carmine where operator = '".$userrow['username']."'");
 $dailinum = $DB->COUNT("select count(id) from ku_user where  user_belong = '".$userrow['username']."'");
 $usersq = $DB->COUNT("select count(id) from ku_author where operation = '".$userrow['username']."'");
 ?>
 <div class="main"> 
     <div class="main-content">
        <div class="container-fluid">
          <div class="panel panel-headline">
             <div class="user-info white-bg">
              <div class="user-img fl">
                <img id="user_face" src="assets/img/user-img.png" alt="头像" class="img-circle">
                <span>默认头像</span>
              </div>
              <div class="user-text fl">
                <div class="user-name"><?=$userrow['username']?><span>（昵称：<?=$userrow['user_name']?>）</span></div>
                <div class="user-infos">
                  <span><i class='svip'></i><?=index_daili_lv($userrow['user_limit'])?></span> <span>当前时间: <font color='red'> <?=$date?></font></span> 
                  <?php if (!empty($userrow['reward_money'])) { ?>                   
                  <span> 金币：<b><?=$userrow['reward_money']?></b> 个</span>
                  <?php }else{?>
                  <span> 金币：<b>0</b> 个</span>
                  <?php }?>
                  <span>已授权数：<b><a href="myshouquan.php"></a><?=$usersq?></b>个</span>
                </div>
                <div class="user-infos">
                <span><span id="moodcontent" data-notempty="0">这个人很懒，什么都没留下。</span><a href="javascript:void(0);" data-toggle="modal" data-target="#myModal" title="设置个性签名"><i  class="fa fa-pencil"></i></a>
                </span> 
                </div>             
              </div>
             </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3">
                  <div class="metric">
                    <span class="icon"><i class="fa iconfont icon-zhanghuyue"></i></span>
                    <p>
                    <?php if (!empty($userrow['money'])) { ?>
                     <span class="number"><?=$userrow['money']?>元</span>
                      <span class="title">赏金余额</span>
                   <?php }else{?>
                      <span class="number">0元</span>
                      <span class="title">赏金余额</span>
                      <?php }?>
                    </p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="metric">
                    <span class="icon"><i class="fa iconfont icon-jinbi"></i></span>
                    <p>
                    <?php if (!empty($userrow['user_lv'])) { ?>
                      <span class="number"><?=$userrow['user_lv']?>个</span>
                      <span class="title">赠送授权</span>
                      <?php }else{?>
                      <span class="number">0个</span>
                      <span class="title">赠送授权</span>
                      <?php }?>
                    </p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="metric">
                    <span class="icon"><i class="fa fa-credit-card"></i></span>
                    <p>
                      <span class="number"><?=$kmnum?>张</span>
                      <span class="title">卡密数量</span>
                    </p>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="metric">
                    <span class="icon"><i class="fa iconfont icon-dailishang"></i></span>
                    <p>
                      <span class="number"><?=$dailinum?>个</span>
                      <span class="title">下级代理</span>
                    </p>
                  </div>
                </div>
              </div>
             
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">最近充值消费订单</h3>
                  <div class="right">
                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                  </div>
                </div>
                <div class="panel-body no-padding">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th>订单号</th>
                        <th>名称</th>
                        <th>支付方式</th>
                        <th>金额</th>
                        <th>完成 &amp; 时间</th>
                        <th>状态</th>
                      </tr>
                    </thead>
                    <?php 
                $sql = "SELECT * FROM ku_charge where  username = '".$userrow['username']."' order by addtime desc limit 2";
                 $xfei = "SELECT * FROM ku_cons where  username = '".$userrow['username']."' and data='0' order by addtime desc limit 2";
                    ?>
                    <tbody>
                    <?php
                    $rs=$DB->query($sql);
                   while($res = $DB->fetch($rs))
                    {
                          
                    ?>
                      <tr>
                        <td><a href="#"><?=$res['out_trade_no']?></a></td>
                        <td><span class="label label-primary">充值<?=$res['coin']?>金币</span></td>
                        <td><?=zhifu_sta($res['type'])?></td>
                        <td><?=$res['money']?>/元</td>
                        <td><?=$res['endtime']?></td>
                        <td><?=zhuantai_cz($res['status'])?></td>
                      </tr>
                      <?php } ?>

                      <?php
                    $rs=$DB->query($xfei);
                   while($res = $DB->fetch($rs))
                    {
                          
                    ?>
                      <tr>
                        <td><a href="#"><?=$res['out_trade_no']?></a></td>
                        <td><span class="label label-info"><?=$res['name']?></span></td>
                        <td><span class="label label-primary">金币</span></td>
                        <td><?=$res['reward']?>/个</td>
                        <td><?=$res['addtime']?></td>
                        <td><?=user_lv_zt($res['status'])?></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
                <div class="panel-footer">
                  <div class="row">
                    <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> 最近 24 小时</span></div>
                    <div class="col-md-6 text-right"><a href="cons_list.html" class="btn btn-primary">查看所有订单</a></div>
                  </div>
                </div>
              </div>
            </div>
              <div class="col-md-6">
              <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title"><span class="glyphicon glyphicon-volume-up"></span>平台公告</h3>
                </div>
                <?php if ($userrow['user_limit']==0) {?>
                <div class="panel-body">
                  <p><?=$conf['agent_notice']?></p>
                </div>
                <?php }elseif($userrow['user_limit']==1){?>
                 <div class="panel-body">
                  <p><?=$conf['agent_notice_pu']?></p>
                </div>
                <?php }elseif($userrow['user_limit']==2){?>
                 <div class="panel-body">
                  <p><?=$conf['agent_notice_gj']?></p>
                </div>
                <?php }elseif($userrow['user_limit']==3){?>
               <div class="panel-body">
                  <p><?=$conf['agent_notice_zs']?></p>
                </div>
                <?php } ?>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="widget box">
                <div class="widget-content no-padding">
                  <table class="table table-hover table-striped table-bordered table-highlight-head">
                    <tbody>
                      <tr>
                        <td>
                          <code>
                           当前版本：
                          </code>
                        </td>
                        <td>
                          <span class="iconfont icon-banbenhao"></span>  V<?=VERSION?> (Build <?=VERSIONS?>)</td>
                      </tr>
                      <tr>
                        <td>
                          <code>
                          官方QQ：
                          </code>
                        </td>
                        <td>
                      <span class="iconfont icon-QQ"></span>  <a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$conf['wap_qq']?>&Site=酷享授权&Menu=yes"><?=$conf['wap_qq']?></a>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>
                          官方电话：
                          </code>
                        </td>
                        <td>
                        <span class="iconfont icon-dianhua"></span>  <?=$conf['phone']?>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <code>
                          官方交流群：
                          </code>
                        </td>
                        <td>
                     <span class="iconfont icon-tree-round-QQgroup"></span>  <a href="<?=$conf['wap_lian']?>"><?=$conf['wap_qun']?></a>  
                      </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <footer>
      <div class="container-fluid">
        <p class="copyright"><a href="http://www.kuxiangcms.com/" title="5G云资源" target="_blank"><?php echo $conf['copyright'] ?></a></p>
      </div>
    </footer>
  </div>
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
  <script src="assets/vendor/chartist/js/chartist.min.js"></script>
  <script src="assets/scripts/klorofil-common.js"></script> 
</body>

</html>