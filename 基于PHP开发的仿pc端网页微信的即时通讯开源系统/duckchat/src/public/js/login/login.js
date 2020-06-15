

UserClientLangZH = "1";
UserClientLangEN = "0";

function getLanguage() {
    var nl = navigator.language;
    if ("zh-cn" == nl || "zh-CN" == nl) {
        return UserClientLangZH;
    }
    return UserClientLangEN;
}

function getLanguageName() {
    var nl = navigator.language;
    if ("zh-cn" == nl || "zh-CN" == nl) {
        return "zh";
    }
    return "en";
}
var languageName = getLanguageName();


jQuery.i18n.properties({
    name: "lang",
    path: '../../public/js/config/',
    mode: 'map',
    language: languageName,
    callback: function () {
        try {
            //初始化页面元素
            $('[data-local]').each(function () {
                var changeData = $(this).attr("data-local");
                var changeDatas = changeData.split(":");
                var changeDataName = changeDatas[0];
                var changeDataValue = changeDatas[1];
                $(this).attr(changeDataName, $.i18n.map[changeDataValue]);
            });
            $('[data-local-value]').each(function () {
                var changeHtmlValue = $(this).attr("data-local-value");
                $(this).html($.i18n.map[changeHtmlValue]);
            });
            $('[data-local-placeholder]').each(function () {
                var placeholderValue = $(this).attr("data-local-placeholder");
                $(this).attr("placeholder", $.i18n.map[placeholderValue]);
            });
        }
        catch(ex){
            console.log(ex.message);
        }
    }
});

$(":input").attr("autocapitalize", "off");

siteConfig = {};
enableInvitationCode=0;
enableRealName=0;
sitePubkPem="";
invitationCode='';
nickname="";
allowShareRealname=0;
preSessionId="";
refererUrl = document.referrer;
secondNum  = 120;
isSending  = false;
refererUrlKey = "documentReferer";
updateInvitationCodeType = "update_invitation_code";

if(refererUrl.length>0) {
    localStorage.setItem(refererUrlKey, refererUrl);
    refererUrlKeyVal = localStorage.getItem(refererUrlKey);
}

var protocol = window.location.protocol;
var host = window.location.host;
var pathname = window.location.pathname;
originDomain = protocol+"//"+host+pathname;
isRegister=false;

function zalyLoginConfig(results) {
    if(typeof results == "object" ) {
        siteConfig = results;
    } else {
        siteConfig = JSON.parse(results);
    }
    enableInvitationCode = siteConfig.enableInvitationCode;
    enableRealName=siteConfig.enableRealName;
    sitePubkPem = siteConfig.sitePubkPem;
}

function loginSuccess()
{

    handleRedirect();
}

function handleRedirect()
{
    var refererUrl = localStorage.getItem(refererUrlKey);
    if(refererUrl) {
        if(refererUrl.indexOf("?") > -1) {
            refererUrl = refererUrl+"&preSessionId="+preSessionId+"&isRegister="+isRegister;
        } else {
            refererUrl = refererUrl+"?preSessionId="+preSessionId+"&isRegister="+isRegister;
        }
        // window.location.href = refererUrl;
        refererUrl = refererUrl + " &fail_callback=failedCallBack&&success_callback=successCallBack";
        addJsByDynamic(refererUrl);
    }
}

function failedCallBack(result) {
    zalyjsAlert(result);
    $(".register_button").attr("is_type", updateInvitationCodeType);
    apiPassportPasswordLogin(failedApiPassportPasswordLogin);
}

function failedApiPassportPasswordLogin(results) {
    isRegister = false;
    preSessionId = results.preSessionId;
}

function successCallBack(result) {
    console.log(result);
    localStorage.clear();
    window.location.href = result;
}

function loginFailed()
{
    zalyjsAlert("登录失败");
}

getOsType();

if(refererUrl != undefined && refererUrl.length>1 || clientType == "PC") {
    siteConfigJsUrl = "./index.php?action=page.siteConfig&callback=zalyLoginConfig";
    addJsByDynamic(siteConfigJsUrl);
} else {
    zalyjsLoginConfig(zalyLoginConfig);
}

function addJsByDynamic(url)
{
    var script = document.createElement("script")
    script.type = "text/javascript";
    //Firefox, Opera, Chrome, Safari 3+
    script.src = url;
    $(".zaly_container")[0].appendChild(script);
}

function changeImgByClickPwd() {
    var imgType = $(".pwd").attr("img_type");
    if(imgType == "hide") {
        $(".pwd").attr("img_type", "display");
        $(".pwd").attr("src", "../../public/img/login/display_pwd.png");
        $(".login_input_pwd").attr("type", "text");
        $(".register_input_pwd").attr("type", "text");
        $(".forget_input_pwd").attr("type", "text");
    } else {
        $(".pwd").attr("img_type", "hide");
        $(".pwd").attr("src", "../../public/img/login/hide_pwd.png");
        $(".login_input_pwd").attr("type", "password");
        $(".register_input_pwd").attr("type", "password");
        $(".forget_input_pwd").attr("type", "password");
    }
}

function changeImgByClickRepwd() {
    var imgType = $(".repwd").attr("img_type");
    if(imgType == "hide") {
        $(".repwd").attr("img_type", "display");
        $(".repwd").attr("src", "../../public/img/login/display_pwd.png");
        $(".register_input_repwd").attr("type", "text");
        $(".forget_input_repwd").attr("type", "text");
    } else {
        $(".repwd").attr("img_type", "hide");
        $(".repwd").attr("src", "../../public/img/login/hide_pwd.png");
        $(".register_input_repwd").attr("type", "password");
        $(".forget_input_repwd").attr("type", "password");
    }
}

$(".input_login_site").bind('input porpertychange',function(){
    if($(this).val().length>0) {
        $(this).addClass("black");
        $(this).removeClass("outline");
    }
});

function registerForPassportPassword()
{
    var html = template("tpl-register-div", {
        enableInvitationCode : enableInvitationCode
    });
    html = handleHtmlLanguage(html);
    $(".zaly_site_register-pwd").html(html);
    $(".zaly_login_by_pwd")[0].style.display = "none";
    $(".zaly_site_register-pwd")[0].style.display = "block";
}


function returnRegisterDiv() {
    $(".zaly_site_register-pwd")[0].style.display = "none";
    $(".zaly_site_register-invitecode")[0].style.display = "none";
    $(".zaly_site_register-repwd")[0].style.display = "none";
    $(".zaly_site_update-invitecode")[0].style.display="none";
    $(".zaly_login_by_pwd")[0].style.display = "block";
}

function handleHtmlLanguage(html)
{
    $(html).find("[data-local-placeholder]").each(function () {
        var placeholderValue = $(this).attr("data-local-placeholder");
        var placeholder = $(this).attr("placeholder");
        var newPlaceholder = $.i18n.map[placeholderValue];
        html = html.replace(placeholder, newPlaceholder);
    });

    $(html).find("[data-local-value]").each(function () {
        var changeHtmlValue = $(this).attr("data-local-value");
        var valueHtml = $(this).html();
        var newValueHtml = $.i18n.map[changeHtmlValue];
        // $(this).html(newValueHtml);
        html = html.replace(valueHtml, newValueHtml);
    });

    return html;
}


function forgetPwdForPassportPassword()
{
    $(".zaly_login_by_pwd")[0].style.display = "none";
    $(".zaly_site_register-repwd")[0].style.display = "block";
}

function registerForLogin()
{
    // $(".input_login_site").val("");
    $(".zaly_login_by_pwd")[0].style.display = "block";
    $(".zaly_site_register-pwd")[0].style.display = "none";
}

$(document).on("click", ".register_code_button", function () {
    var flag = checkRegisterInfo();
    if(flag == false) {
        return false;
    }
    $(".zaly_site_register-invitecode")[0].style.display = "block";
    $(".zaly_site_register-pwd")[0].style.display = "none";
});

function checkRegisterInfo()
{
    registerLoginName = $(".register_input_loginName").val();
    registernNickname  = $(".register_input_nickname").val();
    registerPassword  = $(".register_input_pwd").val();
    repassword = $(".register_input_repwd").val();
    registerEmail = $(".register_input_email").val();
    isFocus = false;

    if(registerLoginName == "" || registerLoginName == undefined || registerLoginName.length<0 ) {
        $("#register_input_loginName").focus();
        $(".register_input_loginName_failed")[0].style.display = "block";
        isFocus = true;
    }

    if(!isLoginName(registerLoginName) || registerLoginName.length>16) {
        $("#register_input_loginName").focus();
        $(".register_input_loginName_failed")[0].style.display = "block";
        isFocus = true;
    }


    if(registerPassword == "" || registerPassword == undefined || registerPassword.length<5 || registerPassword.length>20 || !isPassword(registerPassword)) {
        $(".register_input_pwd_failed")[0].style.display = "block";
        if (isFocus == false) {
            $("#register_input_pwd").focus();
            $(".register_input_loginName_failed")[0].style.display = "none";
            isFocus = true;
        }
    }

    if(repassword == "" || repassword == undefined || repassword.length<0) {
        $(".register_input_repwd_failed")[0].style.display = "block";
        if(isFocus == false) {
            $("#register_input_repwd").focus();
            $(".register_input_pwd_failed")[0].style.display = "none";
            isFocus = true;
        }
    }

    if(registernNickname == "" || registernNickname == undefined || registernNickname.length<0 || registernNickname.length>16) {
        $(".register_input_nickname_failed")[0].style.display = "block";
        if(isFocus == false) {
            $(".register_input_repwd_failed")[0].style.display = "none";
            $("#register_input_nickname").focus();
            isFocus = true;
        }
    }

    if(registerEmail == "" || registerEmail == undefined || registerEmail.length<0) {
        $(".register_input_email_failed")[0].style.display = "block";
        if(isFocus == false) {
            $("#register_input_email").focus();
            $(".register_input_nickname_failed")[0].style.display = "none";
            isFocus = true;
        }
    }


    if(isFocus == true) {
        return false;
    }
    $(".register_input_email_failed")[0].style.display = "none";

    if(registerPassword != repassword) {
        zalyjsAlert($.i18n.map["passwordIsNotSameJsTip"]);
        return false;
    }
    if(!validateEmail(registerEmail)) {
        zalyjsAlert($.i18n.map["emailJsTip"]);
        return false;
    }
    loginName = registerLoginName;
    loginPassword = registerPassword;
    return true;
}

/**
 * 数字 字母下划线
 * @param loginName
 */
function isLoginName(loginName)
{
    var reg = /^[A-Za-z0-9_]+$/;
    return reg.test(loginName);
}

/**
 * 数字 字母下划线
 * @param password
 */
function isPassword(password) {
    var reg = /^[^\u4e00-\u9fa5]+$/;
    return reg.test(password);
}

function loginNameExist()
{
    zalyjsAlert("用户名已经在站点被注册");
}

function loginNameNotExist()
{
    if(sitePubkPem.length<1) {
        zalyjsAlert("站点公钥获取失败");
        return false;
    }

    var action = "api.passport.passwordReg";
    var reqData = {
        loginName:registerLoginName,
        password:registerPassword,
        email:registerEmail,
        nickname:registernNickname,
        sitePubkPem:sitePubkPem,
        invitationCode:invitationCode,
    }
    handleClientSendRequest(action, reqData, handlePassportPasswordReg);
}

$(document).on("click", ".register_button", function () {
    registerAndLogin();
});


function registerAndLoginByKeyDown(event)
{
    if(!checkIsEnterBack(event)){
        return false;
    }
    registerAndLogin();
}

function registerAndLogin()
{
    var isType = $(".register_button").attr("is_type");
    invitationCode = $(".register_input_code").val();

    if(isType == updateInvitationCodeType) {
        updatePassportPassword();
    } else {
        var flag = checkRegisterInfo();
        if(flag == false) {
            return false;
        }
        var jsUrl = "./index.php?action=page.js&loginName="+registerLoginName+"&success_callback=loginNameExist&fail_callback=loginNameNotExist";
        addJsByDynamic(jsUrl);
    }
}

$(document).on("click", ".update_code_btn", function () {
    invitationCode = $(".update_input_code").val();
    updatePassportPassword();
});

function updatePassportPassword()
{
    var action = "api.passport.passwordUpdateInvitationCode";
    var reqData = {
        sitePubkPem:sitePubkPem,
        invitationCode:invitationCode,
        preSessionId:preSessionId,
    }
    handleClientSendRequest(action, reqData, handlePassportPasswordUpdateInvationCode);
}

function handlePassportPasswordUpdateInvationCode(results)
{
    isRegister = true;
    preSessionId = results.preSessionId;
    if(refererUrl != undefined && refererUrl.length>1) {
        handleRedirect();
    } else {
        zalyjsLoginSuccess(loginName, preSessionId, isRegister, loginFailed);
    }
}

function handlePassportPasswordReg(results)
{
    isRegister = true;
    preSessionId = results.preSessionId;
    if(refererUrl != undefined && refererUrl.length>1 || clientType == "PC") {
        handleRedirect();
    } else {
        zalyjsLoginSuccess(registerLoginName, preSessionId, isRegister, loginFailed);
    }
}

function validateEmail(email)
{
    var re = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/;
    return re.test(email);
}


$(document).on("click", ".login_button", function () {
    loginPassport();
});

function checkIsEnterBack(event)
{
    var event = event || window.event;
    var isIE = (document.all) ? true : false;
    var key;

    if(isIE) {
        key = event.keyCode;
    } else {
        key = event.which;
    }

    if(key != 13) {
        return false;
    }
    return true;
}

function loginPassportByKeyPress(event) {
    if(checkIsEnterBack(event) == false) {
        return false;
    }
    loginPassport();
}



function loginPassport()
{
    loginName = $(".login_input_loginName").val();
    loginPassword  = $(".login_input_pwd").val();
    var isFocus = false;
    if(loginName == "" || loginName == undefined || loginName.length<0) {
        $(".login_input_loginName").focus();
        $(".login_input_loginName_failed")[0].style.display = "block";
        isFocus = true;
    }

    if(loginPassword == "" || loginPassword == undefined || loginPassword.length<0) {
        $(".login_input_pwd_failed")[0].style.display = "block";
        if (isFocus == false) {
            $(".login_input_pwd").focus();
            $(".login_input_loginName_failed")[0].style.display = "none";
            isFocus = true;
        }
    }

    if(isFocus == true ) {
        return false;
    }
    $(".login_input_pwd_failed")[0].style.display = "none";

    if(sitePubkPem.length<1) {
        zalyjsAlert("站点公钥获取失败");
        return false;
    }
    apiPassportPasswordLogin(handleApiPassportPasswordLogin);
}


function apiPassportPasswordLogin(callback)
{
    var action = "api.passport.passwordLogin";
    var reqData = {
        loginName:loginName,
        password:loginPassword,
        sitePubkPem:sitePubkPem,
    };
    handleClientSendRequest(action, reqData, callback);
}

function handleApiPassportPasswordLogin(results)
{
    isRegister = false;
    preSessionId = results.preSessionId;
    if(refererUrl != undefined && refererUrl.length>1 || clientType == "PC") {
        var jsUrl = "./index.php?action=page.js&loginName="+loginName+"&success_callback=loginSuccess&fail_callback=loginFailNeedRegister";
        addJsByDynamic(jsUrl);
    } else {
        zalyjsLoginSuccess(loginName, preSessionId, isRegister, loginFailNeedRegister);
    }
}

function loginFailNeedRegister()
{
    if(enableInvitationCode != "1") {
        if(isRegister == true) {
            return false;
        }
        isRegister = true;
        if(refererUrl != undefined && refererUrl.length>1) {
            handleRedirect();
        } else {
            zalyjsLoginSuccess(loginName, preSessionId, isRegister, loginFailed);
        }
    } else {
        $(".zaly_login_by_pwd")[0].style.display = "none";
        $(".zaly_site_update-invitecode")[0].style.display = "block";
    }
}

function getVerifyCode()
{
    if(isSending == true) {
        return;
    }
    var loginName = $(".forget_input_loginName").val();
    if(loginName.length < 1) {
        ////TODO 换成 页面漂浮报错
        zalyjsAlert($.i18n.map["loginNameNotNullJsTip"]);
        return false;
    }
    isSending = true;
    showTime();

    var action = "api.passport.passwordFindPassword";
    var reqData = {
        "loginName" : loginName,
    };

    handleClientSendRequest(action, reqData, handleVerifyCode);
}

function handleVerifyCode()
{
    $(".forget_input_repwd_div")[0].style.display = "block";
    $(".forget_input_pwd_div")[0].style.display = "block";
}

function showTime()
{
    secondNum = secondNum-1;
    if(secondNum < 0) {
        var html = "获取验证码";
        $(".get_verify_code").html(html);
        isSending = false;
        secondNum = 120;
        return false;
    }
    var html  = secondNum+$.i18n.map['sendVerifyCodeTimeJsTip']
    $(".get_verify_code").html(html);
    setTimeout(function () {
        showTime();
    },1000);
}

$(document).on("click", ".reset_pwd_button", function () {
    var action = "api.passport.passwordResetPassword";
    var isFocus = false;
    var token = $(".forget_input_code").val();
    var repassword = $(".forget_input_repwd").val();
    var password = $(".forget_input_pwd").val();
    var loginName = $(".forget_input_loginName").val();

    if(loginName == "" || loginName == undefined || loginName.length<0) {
        $(".forget_input_loginName").focus();
        $(".forget_input_loginName_failed")[0].style.display = "block";
        isFocus = true;
    }
    if(token ==  "" || token.length<1) {
        $(".forget_input_code_failed")[0].style.display = "block";
        if(isFocus == false) {
            $(".forget_input_code").focus();
            $(".forget_input_loginName_failed")[0].style.display = "none";
            isFocus = true;
        }
    }

    if(password ==  "" || password.length<1) {
        $(".forget_input_pwd_failed")[0].style.display = "block";
        if(isFocus == false) {
            $(".forget_input_pwd").focus();
            $(".forget_input_code_failed")[0].style.display = "none";
            isFocus = true;
        }
    }

    if(repassword ==  "" || repassword.length<1) {
        $(".forget_input_repwd_failed")[0].style.display = "block";
        if(isFocus == false) {
            $(".forget_input_repwd").focus();
            $(".forget_input_pwd_failed")[0].style.display = "none";
            isFocus = true;
        }
    }

    if(isFocus == true) {
        return;
    }

    if(repassword != password) {
        zalyjsAlert($.i18n.map["passwordIsNotSameJsTip"]);
        return;
    }

    var reqData = {
        "loginName" : loginName,
        "token" :token,
        "password" :password
    };

    handleClientSendRequest(action, reqData, handleResetPwd);
});

function handleResetPwd()
{
    $(".zaly_login_by_pwd")[0].style.display = "block";
    $(".zaly_site_register-pwd")[0].style.display = "none";
    $(".zaly_site_register-repwd")[0].style.display = "none";
}

function returnLoginPage()
{
    $(".zaly_site_register-repwd")[0].style.display = "none";
    $(".zaly_login_by_pwd")[0].style.display = "block";
}

function clearLoginName()
{
    $(".login_input_loginName").val("");
}
