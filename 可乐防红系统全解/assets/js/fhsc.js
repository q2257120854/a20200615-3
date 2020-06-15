$(document).ready(function(){
        $('#cx').click(function(){
          var api = $('#api').val(),
          longurl = $('#longurl').val();
          if (longurl) {
            longurl = longurl.replace(/http:\/\//i, "");
            longurl = longurl.replace(/\//, "");
            window.location.href = './fhincludes/tj.php?longurl='+longurl
          }else{
            alert('请输入查询网址！');
          }
        });
        
                $('#start1').click(function(){
          var api = $('#api').val(),
          dwzapi = $('#dwzapi').val(),
          longurl = $('#longurl').val();
          if (!longurl) return alert('请输入生成网址！'); 
          $.post(api+'?'+dwzapi, {longurl: longurl}, function(json, textStatus, xhr) {
          
            if (json.code == 1) {
              $('#dwzdate').html(json.ae_url);
              $('#your-modal').modal();
              $('#your-modal').css('margin-top',0);
              $('#qrcode').html('');
              $('#qrcode').qrcode({
                  width: 200,
                  height: 200,
                  text: json.ae_url
              });
               $('#qrcode').removeClass('am-hide');
            }else{
              alert(json.msg);
            }
            console.log(json);
          },'json');

        });
      });
        
        
        
    function sub() {
        url = $(':input[name=\'longurl\']').val();
        if (!longurl || longurl == '') {
            layer.alert('域名不能空好吗？');
            return false;
        }
        var load = layer.load();
            $.ajax({
            type:"post",
             url: "/"+$("select[id='api']").val(),
            dataType: "json",
            data:"?&longurl="+$("input[id='longurl']").val()+$("select[id='dwzapi']").val(),
            async:true,
             success: function(a) {
                console.log(a); 
                var strJson = JSON.stringify(a) 
                //alert(strJson);
                var data = $.parseJSON(strJson);
                layer.close(load);
                if (data.code == 1) {
                    $('#dwzdate').html(data.ae_url);
                   var $modal = $('#your-modal');
                    var qrcode = $('#qrcode');
                    $modal.modal();
                    qrcode.html('');
                    qrcode.qrcode({
                        width: 200,
                        height: 200,
                        text: data.ae_url
                    });
                    qrcode.removeClass('am-hide');
                    console.log(data); 
                } else {
                    layer.alert(data.msg);
                }
            },
             error: function () {
                layer.alert('出问题咯，请联系站长！');
            }
        })
}