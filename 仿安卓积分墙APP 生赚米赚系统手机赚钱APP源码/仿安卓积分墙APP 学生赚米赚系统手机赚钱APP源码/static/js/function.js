function show(a){
  var objz=$("#z"+a);
  var obja=$("#a"+a);
  var objm=document.getElementById('m'+a);
  if(a==1){
      objm.innerHTML="<img src='/static/images/onLoad.gif'><font style='color:green;'>正在检测账号......</font>";
     $.post("ajax.php",{username:objz.val()},function(result){
        obja.val(result);
        if(result=="null"){
          objm.innerHTML="<img src='/static/images/error.png'><font style='color:red;'>请输入一个账号！</font>";
        }else if(result=="no"){
          objm.innerHTML="<img src='/static/images/error.png'><font style='color:red;'>此账号已存在！</font>";
        }else if(result=="ok"){
          objm.innerHTML="<img src='/static/images/right.png'><font style='color:green;'>此账号可用！</font>";
        }else{
          objm.innerHTML="<img src='/static/images/error.png'><font style='color:red;'>未知错误</font>";
        }
      });
  }
  if(a==2){
    objm.innerHTML="<img src='/static/images/onLoad.gif'><font style='color:green;'>正在检测密码......</font>";
     $.post("ajax.php",{password:objz.val()},function(result){
        obja.val(result);
        if(result=="null"){
          objm.innerHTML="<img src='/static/images/error.png'><font style='color:red;'>请输入一个6-22位的密码！</font>";
        }else if(result=="no"){
          objm.innerHTML="<img src='/static/images/error.png'><font style='color:red;'>请输入一个6-22位的密码！</font>";
        }else if(result=="ok"){
          objm.innerHTML="<img src='/static/images/right.png'><font style='color:green;'>密码可用！</font>";
        }else{
          objm.innerHTML="<img src='/static/images/error.png'><font style='color:red;'>未知错误！请联系技术QQ：185951958</font>";
        }
      });
  }
  if(a==3){
    c=a-1;
    var objc=$("#z"+c);
    objm.innerHTML="<img src='/static/images/onLoad.gif'><font style='color:green;'>正在确认密码......</font>";
     $.post("ajax.php",{password:objc.val(),rpassword:objz.val()},function(result){
        obja.val(result);
        if(result=="null"){
          objm.innerHTML="<img src='/static/images/error.png'><font style='color:red;'>请输入一个6-22位的密码！</font>";
        }else if(result=="no"){
          objm.innerHTML="<img src='/static/images/error.png'><font style='color:red;'>两次密码不一致，请检查！</font>";
        }else if(result=="ok"){
          objm.innerHTML="<img src='/static/images/right.png'><font style='color:green;'>密码可用！</font>";
        }else{
          objm.innerHTML="<img src='/static/images/error.png'><font style='color:red;'>未知错误！请联系技术QQ：185951958</font>";
        }
      });
  }
  if(a==4){
    objm.innerHTML="<img src='/static/images/onLoad.gif'><font style='color:green;'>正在检测邮箱......</font>";
     $.post("ajax.php",{email:objz.val()},function(result){
        obja.val(result);
        if(result=="null"){
          objm.innerHTML="<img src='/static/images/error.png'><font style='color:red;'>这不是一个邮箱！</font>";
        }else if(result=="no"){
          objm.innerHTML="<img src='/static/images/error.png'><font style='color:red;'>此邮箱已被注册！</font>";
        }else if(result=="ok"){
          objm.innerHTML="<img src='/static/images/right.png'><font style='color:green;'>此邮箱可用！</font>";
        }else{
          objm.innerHTML="<img src='/static/images/error.png'><font style='color:red;'>未知错误！请联系技术QQ：185951958</font>";
        }
      });
  }
}

function login(a){
  var objz=$("#z"+a);
  var obja=$("#a"+a);
  var objm=document.getElementById('m'+a);
  if(a==1){
      objm.innerHTML="<img src='/static/images/onLoad.gif'><font style='color:green;'>正在检测账号......</font>";
     $.post("ajax.php",{username:objz.val()},function(result){
        obja.val(result);
        if(result=="null"){
          objm.innerHTML="<img src='/static/images/error.png'><font style='color:red;'>请输入一个账号！</font>";
        }else if(result=="no"){
          objm.innerHTML="<img src='/static/images/right.png'><font style='color:green;'>账号正确！</font>";
        }else if(result=="ok"){
          objm.innerHTML="<img src='/static/images/error.png'><font style='color:red;'>此账号不存在！</font>";
        }else{
          objm.innerHTML="<img src='/static/images/error.png'><font style='color:red;'>未知错误！请联系技术QQ：185951958</font>";
        }
      });
  }
  if(a==2){
    objm.innerHTML="<img src='/static/images/onLoad.gif'><font style='color:green;'>正在检测密码......</font>";
     $.post("ajax.php",{password:objz.val()},function(result){
        obja.val(result);
        if(result=="null"){
          objm.innerHTML="<img src='/static/images/error.png'><font style='color:red;'>请输入一个6-22位的密码！</font>";
        }else if(result=="no"){
          objm.innerHTML="<img src='/static/images/error.png'><font style='color:red;'>请输入一个6-22位的密码！</font>";
        }else if(result=="ok"){
          objm.innerHTML="<img src='/static/images/right.png'><font style='color:green;'>密码可用！</font>";
        }else{
          objm.innerHTML="<img src='/static/images/error.png'><font style='color:red;'>未知错误！请联系技术QQ：185951958</font>";
        }
      });
  }
}
$(document).ready(function(){
  $("#reg").click(function(){
      if($("#z1").val()==""){
        alert('用户名不能为空！');
        $("#z1").focus();
        return false;
      }else if($("#a1").val()!="ok"){
        alert("请检查您的用户名！")
        $("#z1").focus();
        return false;
      }
        

      if($("#z2").val()==""){
        alert('密码不能为空！');
        $("#z2").focus();
        return false;
      }else if($("#a2").val()!="ok"){
        alert("请检查您的密码！")
        $("#z2").focus();
        return false;
      }

      if($("#z3").val()==""){
        alert('确认密码不能为空！');
        $("#z3").focus();
        return false;
      }else if($("#a3").val()!="ok"){
        alert("请检查您的确认密码！")
        $("#z3").focus();
        return false;
      }

      if($("#z4").val()==""){
        alert('邮箱不能为空！');
        $("#z4").focus();
        return false;
      }else if($("#a4").val()!="ok"){
        alert("请检查您的邮箱！")
        $("#z4").focus();
        return false;
      }
      document.regform.action = "doreg.php";
      document.regform.submit();
  })

  $("#login").click(function(){
    if($("#z1").val()==""){
        alert('用户名不能为空！');
        $("#z1").focus();
        return false;
      }else if($("#a1").val()!="no"){
        alert("请检查您的用户名！")
        $("#z1").focus();
        return false;
      }
        

      if($("#z2").val()==""){
        alert('密码不能为空！');
        $("#z2").focus();
        return false;
      }else if($("#a2").val()!="ok"){
        alert("请检查您的密码！")
        $("#z2").focus();
        return false;
      }
      document.loginform.action = "./Center/login.php";
      document.loginform.submit();
  })
});