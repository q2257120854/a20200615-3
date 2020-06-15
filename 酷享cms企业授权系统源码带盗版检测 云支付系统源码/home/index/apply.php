<?php
include '../../includes/common.php';
include '../../home/index/head.php';
if ($conf['squan']==0) {
    sysmsg('卡密授权通道已经关闭，请使用在线授权通道！');
}
;?>

<div class="applyEmpower">
<div class="publicHeader min_wrapper_1200">
        <div class="headerBg"></div>
        <div class="text wrapper_1200">
            <div class="title">在线商业授权</div>
            <div class="infor">您的支持是我们不断进步的动力，商业授权更多是一个保障和附加的增值服务，让您优先享受新版本的强大功能和安全保障</div>
        </div>
    </div>
    <div class="wrapper_1200"> 
        <div class="form">
             
            <div class="item">
                <div class="name"><span class="symbol">*</span>授权域名</div>
                <input type="text" placeholder="请输入域名 格式：gzyus.cn" name="kuhost">
            </div>
            <div class="item">
                <div class="name"><span class="symbol">*</span>联系QQ</div>
                <input type="text" placeholder="请填写您的联系QQ" name="ku_qq">
            </div>
            <div class="item">
                <div class="name"><span class="symbol">*</span>卡密</div>
                <input type="text" placeholder="请输入卡密授权" name="carmine">
            </div>
            <div class="item">
                <div class="name"><span class="symbol">*</span>验证码</div>
                <input type="text" class="form-control" id="verify" name="code" placeholder="验证码" required="" style="width: 78%;">
                <span class="input-group-btn" style="padding: 0;margin:5px 0 0 0;position: relative;
    font-size: 0;
    white-space: nowrap;">
                        <img src="../../code.php?r=<?php echo time();?>" alt="验证码" style="padding: 0;height: 40px;margin: 0;position:absolute;top:-27px;left: 0;" onclick="this.src='../../code.php?r='+Math.random();">
                    </span>
            </div>
            <div class="submit">立即提交</div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div id="advers" class="min_wrapper_1200" >
        <div class="wrapper_1200 wrapper1">免费体验CoolYun支付系统<span>立即体验</span></div>
    </div>
<?php
include '../../home/index/footer.php';
?>
<script src="/public/layer/layer.js"></script>
<script src="/public/home/js/jquery-1.11.3.min.js"></script>
<script>
    var experience_url="<?=$conf['yan_url']?>";
    $(function () {
        $('.wrapper1').on('click',function () {
            window.open(experience_url);
        });
        var id=0;
        $('.submit').on('click',function () {
            var kuhost=$("input[name='kuhost']").val();
            var ku_qq=$("input[name='ku_qq']").val();
            var carmine=$("input[name='carmine']").val();
            var code=$("input[name='code']").val();
            var patrn = /^[0-9]*$/;
             if (kuhost == '' || carmine == '' || ku_qq == ''){
             	 layer.msg('请确保每项都不为空！', {icon: 5});
                        return false;}
            if (!patrn.test(ku_qq)) {
             layer.msg('联系QQ格式有误！', {icon: 5});
                        return false;}
          var load = layer.load(2, {shade:[0.1,'#fff']});
            $.ajax({
                    type : "POST",
                    url : "ajax.php?act=shouquan",
                    data : {kuhost:kuhost,ku_qq:ku_qq,carmine:carmine,code:code},
                    dataType : 'json',
                success:function (res) {
                       layer.close(load);
                        if(res.code== -1){
                        	layer.alert(res.msg,{icon:5,title:'提示信息！'});
                        }else{
                            if (res.code ==1){
                               layer.alert(res.msg,{icon:6,title:'提示信息！'});
                            }else{
                               layer.alert(res.msg,{icon:5,title:'提示信息！'});
                            }
                        }
                }
            })
        });
    });
</script>