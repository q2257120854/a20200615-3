var num = 0;
var verifycodeurl = $('#verifycodeurl').val();
var submiturl = $('#submiturl').val();
var downloadurl = $('#downloadurl').val();
function register(){
    var text = '';
    var data = {
        mid:$('#mid').val(),
        nickname:$('#nickname').val(),
        account:$('#account').val(),
        pwd:$('#pwd').val(),
        repwd:$('#repwd').val(),
        pwd2:$('#pwd2').val(),
        repwd2:$('#repwd2').val(),
        verifycode:$('#verifycode').val()
    };
    if(data.verifycode.length != 6){
        text = '请输入六位验证码';
    }else if(data.nickname == ''){
        text = '用户名不能为空';
    }else if(data.account == ''){
        text = '手机号码不能为空';
    }else if(data.pwd == ''){
        text = '密码不能为空';
    }else if(data.pwd != data.repwd){
        text = '输入的密码不一致';
    }else if(data.pwd2 == ''){
        text = '二级密码不能为空';
    }else if(data.pwd2 != data.repwd2){
        text = '输入的二级密码不一致';
    }
    if(text != ''){
        prompt(text);
    }else{
        $.ajax({
            type: "POST",
            url: submiturl,
            data: data,
            success: function(msg){
                $('.body').text(msg.msg);
                $('.success,.window').css('display','block');
                num = msg.code;
            }
        });
    }
}
function shut(){
    $('.success,.window').css('display','none');
    if(num == 1){
        window.location = downloadurl;
    }
}
function code(){
    var text = '';
    var account = $('#account').val();
    if(account.length != 11){
        text = '请输入11位手机号码';
    }else if(account.match(/^((1[3-9][0-9]{1})+\d{8})$/) == null){
        text = '手机号码格式错误';
    }
    if(text != ''){
        prompt(text);
    }else{
        $.ajax({
            type: "GET",
            url: verifycodeurl,
            data: 'mobile='+account+'&temp=sms_reg',
            success: function(msg){
                prompt(msg.msg)
                if(msg.code == 1){
                    $('.verify').html('<button class="check"></button>');
                    taintime(61);
                }
            }
        });
        
    }
}
function prompt(text){
    $('.text').text(text);
    $('.popup').css('display','block');
    setTimeout(function(){
        $('.popup').css('display','none');
    }, 1500);
}
//手机验证码获取倒计时
function taintime(time){
    if(time>60){
        $('.check').html('60 s');
    }else{
        $('.check').html(time+' s');
    }
    if (time>0){
        time--;
        setTimeout(function(){
            taintime(time);
        }, 1000);
    }else{
        $('.verify').html('<button class="check" onclick="code()">重新获取</button>');
    }
}
function back(){
    window.history.back(-1); 
}

function isWeiXin() {
    var ua = navigator.userAgent.toLowerCase();
    return ua.indexOf('micromessenger') > -1 ? true : false;
}

function isIOS() {
    var ua = navigator.userAgent.toLowerCase();
    if (ua.indexOf('iphone') > -1) return true;
    if (ua.indexOf('ipad') > -1) return true;
    if (ua.indexOf('ipod') > -1) return true;
    return false;
};
function downloadClick1() {
    var link = $('.left').data('href');
    if (isWeiXin()) {
        alert("请点击右上角...\n选择在浏览器中打开");
    } else {
        window.location = link;
        //self.location = "https://packdown.chinalilac.net/txqp.apk";
    }

}

function downloadClick2() {
    var link = $('right').data('href');
    if (isIOS()) {
        window.location = link;
    }
}