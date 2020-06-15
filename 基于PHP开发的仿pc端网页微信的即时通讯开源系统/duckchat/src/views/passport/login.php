<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>站点登录</title>
    <!-- Latest compiled and minified CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="stylesheet" href="../../public/css/login.css?_version=<?php echo $versionCode?>">
    <script type="text/javascript" src="../../public/js/jquery.min.js"></script>
    <script src="../../public/js/jquery.i18n.properties.min.js"></script>
        <script src="../../public/js/zalyjsNative.js?_version=<?php echo $versionCode?>"></script>
    <script src="../../public/js/template-web.js"></script>

</head>
<body>

<div class="zaly_container" >
    <div class="zaly_login zaly_login_by_pwd" >
        <div class="login_input_div" >
            <div class="d-flex flex-row justify-content-center margin-top5 login-header" style="text-align: center;">
                <span class="login_phone_tip_font" data-local-value="loginTip">登录</span>
            </div>

            <div class=" d-flex flex-row justify-content-left login_name_div margin-top4 login_name_div_mobile" >
                <image src="../../public/img/login/loginName.png" class="img"/>
                <input type="text" class="input_login_site  login_input_loginName" datatype="s" autocapitalize="off"  data-local-placeholder="loginNamePlaceholder" placeholder="输入登录名" >
                <div class="clearLoginName" onclick="clearLoginName()"><image src="../../public/img/msg/btn-x.png" class="clearLoginName" style="width: 2rem;height:2rem;"/></div>
                <img src="../../public/img/msg/msg_failed.png" class="img-failed login_input_loginName_failed">
            </div>
            <div class="line"></div>

            <div class="login_name_div margin-top2">
                <image src="../../public/img/login/pwd.png" class="img"/>
                <input type="password" class="input_login_site phone_num  login_input_pwd" autocapitalize="off"  data-local-placeholder="enterPasswordPlaceholder"  onkeydown="loginPassportByKeyPress(event)"  placeholder="输入密码, 长度5到20个字符(无中文)" >
                <div class="pwd_div" onclick="changeImgByClickPwd()"><image src="../../public/img/login/hide_pwd.png" class="pwd" img_type="hide" /></div>
                <img src="../../public/img/msg/msg_failed.png" class="img-failed login_input_pwd_failed">
            </div>
            <div class="line"></div>


            <div class="d-flex flex-row justify-content-center ">
                <button type="button" class="btn login_button" ><span class="span_btn_tip" data-local-value="loginTip">登录</span></button>
            </div>

            <div class="d-flex flex-row register_span_div" >
                <span onclick="registerForPassportPassword()" data-local-value="registerTip">注册</span>
                <span onclick="forgetPwdForPassportPassword()" data-local-value="forgetPasswordTip">忘记密码?</span>
            </div>

        </div>
    </div>
    <div class="zaly_login zaly_site_register zaly_site_register-pwd" style="display: none;">

    </div>
    <div class="zaly_login zaly_site_register zaly_site_register-repwd" style="display: none;">
        <div class="back">
            <img src="../../public/img/back.png" style="margin-left: 2rem; width: 3rem;height:3rem; margin-top: 2rem;" onclick="returnLoginPage(); return false;"/>
        </div>
        <div class="login_input_div" >
            <div class="d-flex flex-row justify-content-center login-header " style="text-align: center;margin-top: 8rem;">
                <span class="login_phone_tip_font"  data-local-value="findPasswordTip">找回密码</span>
            </div>

            <div class="login_name_div login_name_div_mobile">
                <image src="../../public/img/login/loginName.png" class="img"/>
                <input type="text" class="input_login_site forget_input_loginName" datatype="s"  autocapitalize="off"   data-local-placeholder="loginNamePlaceholder" placeholder="输入登录名" >
                <img src="../../public/img/msg/msg_failed.png" class="img-failed forget_input_loginName_failed">
                <div class="line"></div>
            </div>

            <div class=" d-flex flex-row justify-content-left login_name_div margin-top2"  >
                <image src="../../public/img/login/code.png" class="img"/>
                <input type="text"  value="" class="input_login_site  forget_input_code" autocapitalize="off"   data-local-placeholder="enterVerifyCodePlaceholder"  placeholder="验证码"  >
                <span class="get_verify_code" onclick="getVerifyCode()" data-local-value="getVerifyCodeTip">获取邮箱验证码</span>
                <img src="../../public/img/msg/msg_failed.png" class="img-failed forget_input_code_failed">

                <div class="line"></div>
            </div>

            <div class="login_name_div forget_input_pwd_div margin-top2" style="display:none;" >
                <image src="../../public/img/login/pwd.png" class="img"/>
                <input type="password" class="input_login_site forget_input_pwd"  autocapitalize="off"  data-local-placeholder="enterPasswordPlaceholder"  placeholder="输入密码, 长度5到20个字符(无中文)" >
                <div class="pwd_div" onclick="changeImgByClickPwd()"><image src="../../public/img/login/hide_pwd.png" class="pwd" img_type="hide"/></div>
                <img src="../../public/img/msg/msg_failed.png" class="img-failed forget_input_pwd_failed">

                <div class="line"></div>
            </div>

            <div class="login_name_div forget_input_repwd_div margin-top2" style=" display:none;">
                <image src="../../public/img/login/re_pwd.png" class="img"/>
                <input type="password" class="input_login_site forget_input_repwd" autocapitalize="off"  data-local-placeholder="enterRepasswordPlaceholder"  placeholder="再次输入密码" >
                <div class="repwd_div" onclick="changeImgByClickRepwd()"><image src="../../public/img/login/hide_pwd.png" class="repwd" img_type="hide"/></div>
                <img src="../../public/img/msg/msg_failed.png" class="img-failed forget_input_repwd_failed">
                <div class="line" ></div>
            </div>

            <div class="d-flex flex-row justify-content-center ">
                <button type="button" class="btn reset_pwd_button"><span class="span_btn_tip" data-local-value="resetPwdTip">重置密码</span></button>
            </div>
        </div>
    </div>

    <div class="zaly_login zaly_site_register zaly_site_register-name" style="display: none;">

    </div>

    <div class="zaly_login zaly_site_register zaly_site_register-invitecode" style="display: none;">
        <div class="back">
            <img src="../../public/img/back.png" style="margin-left: 2rem; width: 3rem;height:3rem; margin-top: 2rem;" onclick="returnRegisterDiv(); return false;"/>
        </div>
        <div class="login_input_div" >
            <div class="d-flex flex-row justify-content-center login-header"style="text-align: center;margin-top: 8rem;margin-bottom: 1rem;">
                <span class="login_phone_tip_font" data-local-value="registerInvitationCodeTip" >输入邀请码</span>
            </div>

            <div class="code_div login_name_div_mobile" style="margin-top: 8rem;">
                <input type="text" class="input_login_site register_input_code" style="margin-left: 0rem;" data-local-placeholder="enterCodePlaceholder" autocapitalize="off"   placeholder="输入邀请码"  >
                <div class="line" ></div>
            </div>

            <div class="d-flex flex-row justify-content-center " >
                <button type="button" class="btn register_button"  style="margin-top: 7rem;"><span class="span_btn_tip" data-local-value="registerBtnTip">注册并登录</span></button>
            </div>
        </div>
    </div>

    <div class="zaly_login zaly_site_register zaly_site_update-invitecode" style="display: none;">
        <div class="back">
            <img src="../../public/img/back.png" style="margin-left: 2rem; width: 3rem;height:3rem; margin-top: 2rem;" onclick="returnRegisterDiv(); return false;"/>
        </div>
        <div class="login_input_div" >
            <div class="d-flex flex-row justify-content-center login-header "style="text-align: center;margin-top: 8rem;margin-bottom: 1rem;">
                <span class="login_phone_tip_font" data-local-value="registerInvitationCodeTip" >输入邀请码</span>
            </div>

            <div class="code_div login_name_div_mobile" style="margin-top: 8rem;">
                <input type="text" class="input_login_site update_input_code" autocapitalize="off" style="margin-left: 0rem;" data-local-placeholder="enterCodePlaceholder" onkeydown="registerAndLoginByKeyDown(event)" placeholder="输入邀请码"  >
                <div class="line" ></div>
            </div>

            <div class="d-flex flex-row justify-content-center " >
                <button type="button" class="btn update_code_btn"  style="margin-top: 7rem;"><span class="span_btn_tip" data-local-value="registerBtnTip">注册并登录</span></button>
            </div>

        </div>
    </div>
</div>
<?php include(dirname(__DIR__) . '/passport/template_login.php'); ?>

<script src="../../public/js/im/zalyKey.js?_version=<?php echo $versionCode?>"></script>
<script src="../../public/js/im/zalyAction.js?_version=<?php echo $versionCode?>"></script>
<script src="../../public/js/im/zalyClient.js?_version=<?php echo $versionCode?>"></script>
<script src="../../public/js/im/zalyBaseWs.js?_version=<?php echo $versionCode?>"></script>
<script src="../../public/js/login/login.js?_version=<?php echo $versionCode?>"></script>

</body>
</html>
