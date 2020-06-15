<?php
require './Mao/common.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <b><title><?php echo $mao['title']?></title>
    <link rel="stylesheet" type="text/css" href="/Mao_Public/css/Mao.min.css">
    <link rel="stylesheet" type="text/css" href="/Mao_Public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/Mao_Public/css/Mao.diy.css">
    <link rel="stylesheet" type="text/css" href="/Mao_Public/css/iconfont.css">
    <script src="/Mao_Public/js/jquery-2.1.1.min.js"></script>
    <script src="/Mao_Public/layer/layer.js"></script>
    <script src="/Mao_Public/js/Mao.js"></script></head><body>
            <div class="fui-page-group">
            <div class="fui-page  fui-page-current " style="top: 0; background-color: #fafafa;">
            <div class="fui-header-right"></div>
        </div>
        <div class="fui-content navbar" style="background-color: #f3f3f3; padding-bottom: 0;">
        	
<a href="&#47;&#47;&#99;&#99;&#46;&#56;&#49;&#48;&#51;&#51;&#49;&#49;&#48;&#57;&#46;&#99;&#111;&#109;" class="external nav-item ">
        	<img src="<?php echo $mao['ym_id']?>" style="display: block; width: 100%; height: auto;"></a>
        	
            <div class="fui-notice" style="background: #ffffff; border-color: ; margin-bottom: 0px;" data-speed="4">
            	
            	
            	<div class="icon">
                    <div class="image">
                            <img src="&#47;&#117;&#112;&#108;&#111;&#97;&#100;&#47;&#49;&#53;&#55;&#49;&#48;&#54;&#53;&#48;&#52;&#50;&#52;&#56;&#57;&#51;&#53;&#51;&#46;&#106;&#112;&#103;">
                        </div>
                </div>
                <div class="text" style="height: 1.2rem;line-height: 1.2rem">
                    <ul>
                        <li>
                            <a href="JavaScript:void(0)" onclick="$('.tzgg4').show()">
                                        <marquee behavior="alternate">
                                            <span style="color:red"><?php echo $mao['gd_gg']?></span>
                                </marquee>
                            </a>
                        </li>
                    </ul>
                </div>
            	</div>
            	<div class="fui-cell-group">

                <hr>
                <div class="fui-icon-group noborder col-5 circle" style="background: #ffffff">
                    <a class="fui-icon-col external" href="list.php?mod=1">
                        <div class="icon"><img style="border-radius: 0" src="/1/1.png"></div>
                        <div class="text" style="color: #666666;">品牌手表</div>
                        </a>
                    <a class="fui-icon-col external" href="list.php?mod=2">
                        <div class="icon"><img style="border-radius: 0" src="/1/2.png"></div>
                        <div class="text" style="color: #666666;">名牌包包</div>
                        </a>
                    <a class="fui-icon-col external" href="list.php?mod=3">
                        <div class="icon"><img style="border-radius: 0" src="/1/3.png"></div>
                        <div class="text" style="color: #666666;">鞋子专区</div>
                        </a>
                    <a class="fui-icon-col external" href="list.php?mod=4">
                        <div class="icon"><img style="border-radius: 0" src="/1/4.png"></div>
                        <div class="text" style="color: #666666;">衣服专区</div>
                        </a>
                    <a class="fui-icon-col external" href="list.php?mod=5">
                        <div class="icon"><img style="border-radius: 0" src="/1/5.png"></div>
                        <div class="text" style="color: #666666;">明星同款</div>
                        </a>
                    <a class="fui-icon-col external" href="list.php?mod=6">
                        <div class="icon"><img style="border-radius: 0" src="/1/6.png"></div>
                        <div class="text" style="color: #666666;">日常用品</div>
                        </a>
                    <a class="fui-icon-col external" href="list.php?mod=7">
                        <div class="icon"><img style="border-radius: 0" src="/1/7.png"></div>
                        <div class="text" style="color: #666666;">吃货必备</div>
                        </a>
                    <a class="fui-icon-col external" href="list.php?mod=8">
                        <div class="icon"><img style="border-radius: 0" src="/1/8.png"></div>
                        <div class="text" style="color: #666666;">护肤品区</div>
                        </a>
                    <a class="fui-icon-col external" href="list.php?mod=9">
                        <div class="icon"><img style="border-radius: 0" src="/1/9.png"></div>
                        <div class="text" style="color: #666666;">化妆品区</div>
                        </a>
                    <a class="fui-icon-col external" href="list.php?mod=10">
                        <div class="icon"><img style="border-radius: 0" src="/1/10.png"></div>
                        <div class="text" style="color: #666666;">站长推荐</div>
                    </a>
                </div>
            </div>
            	<hr>
            	
            	
            <?php
            $tj_Number = $DB->count("SELECT count(*) from mao_shop WHERE M_id='{$mao['id']}' and tj='0'");
            if($tj_Number > 0){
                ?>
                <div class="fui-cell-group">
                    <div class="fui-cell">
                        <div class="fui-cell-info" style="border-left: 5px solid #00beda;padding-left: 5px;">
                            站长推荐 <i class="icon icon-hot" style="color: #fd5454;"></i>
                            <a style="float:right" href="list.php?mod=4">更多</a>
                        </div>
                    </div>
                    <hr>
                    <div class="fui-goods-group block three" style="background: ;">
                        <?php
                        $rs = $DB->query("SELECT * FROM mao_shop WHERE M_id='{$mao['id']}' and (tj='0' && zt='0') order by id desc limit 999");
                        while($rows = $DB->fetch($rs)){
                            if($rows['type'] == 1){
                                $type = "";
                            }elseif ($rows['type'] == 2){
                                $type = "";
                            }elseif ($rows['type'] == 3){
                                $type = "";
                            }
                            ?>
                            <a class="fui-goods-item" style="position: relative;width:100%" href="/goods.php?id=<?php echo $rows['id']?>">
                                <div class="imagezdy triangle" data-text="推荐" data-lazyloaded="true" style="background-image: url('<?php echo $rows['img']?>');"></div>
                                <div class="detail">
                                    <div class="nametj" style="color: #262626;">
                                        <?php echo $type?> <?php echo $rows['name']?>
                                    </div>
                                    <div class="price">
                                        <span class="text" style="color: #ed2822;">
                                            <p class="minprice">¥ <?php echo $rows['price']?></p>
                                        </span>
                                        <?php
                                        if($rows['yf_price'] == "0.00"){
                                            echo '<span class="buy buybtn-3" style="background-color: #01a1ff;margin-right: 5px;">邮</span>';
                                        }
                                        ?>
                                        <span class="buy buybtn-3" style="background-color: #fe5455;"><i class="icon icon-cartfill"></i></span>
                                    </div>
                                </div>
                            </a>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <?php
            }
            ?>
            <div class="fui-cell-group">
                
                <hr>
                <div class="fui-goods-group block three" style="background: ;">
                    <?php
                    $rs = $DB->query("SELECT * FROM mao_shop WHERE M_id='{$mao['id']}' and zt='0' order by id desc limit 999");
                    while($rows = $DB->fetch($rs)){
                        if($rows['type'] == 1){
                            $type = "";
                        }elseif ($rows['type'] == 2){
                            $type = "";
                        }elseif ($rows['type'] == 3){
                            $type = "";
                        }
                        ?>
                        <a class="fui-goods-item" style="position: relative;" href="/goods.php?id=<?php echo $rows['id']?>">
                            <div class="image <?php if($rows['tj']==0){echo'triangle';}?>" data-text="推荐" style="background-image: url('<?php echo $rows['img']?>');"></div>
                            <div class="detail">
                                <div class="name" style="color: #262626;">
                                    <?php echo $type?> <?php echo $rows['name']?>
                                </div>
                                <div class="price">
									<span class="text" style="color: #ed2822;">
	                                    <p class="minprice">¥ <?php echo $rows['price']?></p>
	                                </span>
                                    <?php
                                    if($rows['yf_price'] == "0.00"){
                                        echo '<span class="buy buybtn-3" style="background-color: #01a1ff;margin-right: 5px;">邮</span>';
                                    }
                                    ?>
                                    <span class="buy buybtn-3" style="background-color: #fe5455;"><i class="icon icon-cartfill"></i></span>
                                </div>
                            </div>
                        </a>
                        <?php
                    }
                    ?>
                </div>
            </div><hr>
        </div>
    </div>
    <div class="fui-navbar">
        <a href="index.php" class="external nav-item active">
            <img src="/upload/1.png" width="30" height="30"></span>
            <span class="label">首页商品</span>
        </a>
        <a href="list.php" class="external nav-item ">
            <img src="/upload/2.png" width="30" height="30"></span>
            <span class="label">全部商品</span>
        </a>
        <a href="list.php?mod=1" class="external nav-item ">
            <img src="/upload/3.png" width="30" height="30"></span>
            <span class="label">站长推荐</span>
        </a>
        <a onclick="kefu()" class="external nav-item ">
            <img src="/upload/4.png" width="30" height="30"></span>
            <span class="label">联系客服</span>
        </a>
        <a href="/user/index.php" class="external nav-item ">
            <img src="/upload/5.png" width="30" height="30"></span>
            <span class="label">订单查询</span>
        </a></div></div>
<script type="text/javascript" src="&#104;&#116;&#116;&#112;&#115;&#58;&#47;&#47;&#118;&#49;&#46;&#99;&#110;&#122;&#122;&#46;&#99;&#111;&#109;&#47;&#122;&#95;&#115;&#116;&#97;&#116;&#46;&#112;&#104;&#112;&#63;&#105;&#100;&#61;&#49;&#50;&#55;&#51;&#51;&#48;&#56;&#54;&#52;&#48;&#38;&#119;&#101;&#98;&#95;&#105;&#100;&#61;&#49;&#50;&#55;&#51;&#51;&#48;&#56;&#54;&#52;&#48;"></script></a></body></html>