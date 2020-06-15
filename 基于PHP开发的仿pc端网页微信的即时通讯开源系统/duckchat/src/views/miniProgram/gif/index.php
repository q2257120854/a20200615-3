
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GIF小程序</title>
    <!-- Latest compiled and minified CSS -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <script type="text/javascript" src="../../../public/js/jquery.min.js"></script>
    <script src="../../../public/js/zalyjsNative.js"></script>
    <script src="../../../public/js/template-web.js"></script>
    <script src="../../../public/js/zalyHelper.js"></script>

    <style>
        body, html {
            font-size: 10.66px;
            width: 100%;
        }
        .zaly_container {
            height: 18rem;
        }
        .gif {
            width:5rem;
            height:5rem;
        }
        .gif_sub_div{
            display: flex;
        }
        .gif_div_hidden {
            display: none;
        }
        .sliding {
            margin-right: 1rem;
            width:5px;
        }
        .slide_div {
            margin-top: 3rem;
            text-align: center;
        }
        .add_gif{
            height: 5rem;
            cursor: pointer;
        }
        .del_gif{
            width: 2rem;
            height: 2rem;
            margin-top: -1rem;
            position: absolute;
            margin-left: 4.5rem;
            display: none;
        }
        .gif_content_div{
            position: relative;
            width: 5rem;
            height: 5rem;
            display: flex;
            margin-left: 2rem;
            margin-top: 3rem;
        }
    </style>
</head>
<body>

<div class="zaly_container" >

    <input type="hidden" class="roomType" value='<?php echo $roomType;?>'>
    <input type="hidden" class="toId" value='<?php echo $toId;?>'>
    <input type="hidden" class="fromUserId" value='<?php echo $fromUserId;?>'>
</div>

<div class="slide_div">

</div>

<script src="../../../public/js/im/zalyKey.js"></script>
<script src="../../../public/js/im/zalyAction.js"></script>
<script src="../../../public/js/im/zalyClient.js"></script>
<script src="../../../public/js/im/zalyBaseWs.js"></script>

<script id="tpl-gif" type="text/html">
    <div class='gif_content_div'>
        <img id="gifId_{{num}}" src='{{gifUrl}}' class='gif' gifId='{{gifId}}' isDefault='{{isDefault}}'>
        <img src='../../public/img/msg/btn-x.png' class='del_gif  {{gifId}}' gifId="{{gifId}}">
    </div>
</script>

<script type="text/javascript">
    gifs  = '<?php echo $gifs;?>';
    gifArr = JSON.parse(gifs);
    gifLength = gifArr.length ;
    var line = 0;
    roomType = $(".roomType").val();
    fromUserId = $(".fromUserId").val();
    toId = $(".toId").val();
    var startX, startY, moveEndX,moveEndY,timeOut;
    var imgObject={};
    var addGifType = "add_gif";
    var delGifType = "del_gif";

    var languageNum = getLanguage();

    if(gifLength>1) {
        for(var i=1; i<gifLength ;i ++) {
            var gif = gifArr[i];
            var gifId = "";
            var gifUrl="";
            var isDefault=0;
            try{
                gifId=gif.gifId;
                gifUrl=gif.gifUrl;
                isDefault=gif.isDefault;
            }catch (error) {
                gifId="";
            }
            if(i == 1) {
                var html = '';
                line = line+1;
                html += "<div class='gif_div gif_div_0'  gif-div='"+(line-1)+"'><div class='gif_sub_div'>";
            }
            if((i-9)%10 == 1) {
                var html = '';
                line = line+1;
                var divNum = Math.ceil(((i-9)/10));
                html += "<div class='gif_div gif_div_hidden gif_div_"+divNum+"' gif-div='"+(line-1)+"'><div class='gif_sub_div'>";
            }

            if(i==1) {
                html += "<div class='gif_content_div'><img src='../../../public/img/add.png' class='add_gif'>  " +
                    "<input id='gifFile' type='file' onchange='uploadFile(this)' accept='image/gif;capture=camera' style='display: none;'></div>";
            }

            html +=template("tpl-gif", {
                num:i,
                gifUrl:gifUrl,
                gifId:gifId,
                isDefault:isDefault
            })

            if(i==4) {
                html +="</div><div class='gif_sub_div'>";
            } else if (i>5 && (i-5)%5 == 4) {
                html +="</div><div class='gif_sub_div'>";
            }

            if((i-9)%10 == 0){
                html += "</div>";
                $(".zaly_container").append(html);
            } else if(i == gifLength-1) {
                html += "</div>";
                $(".zaly_container").append(html);
            }
        }
    }
    var slideHtml = "";
    for(var i=0; i<line; i++){
        slideHtml += "<img src='../../../public/gif/sliding_unselect.png' select_gif_div= '"+i+"' class='sliding sliding_img sliding_uncheck sliding_uncheck_"+i+"'/>";
        $(".slide_div").html(slideHtml);
    }

    currentGifDivNum = 0;

    var flag = false;

    function getImgSize(src) {
        var image = new Image();
        image.src = src;
        image.onload =  function (event) {
            imgObject.width  =image.naturalWidth;
            imgObject.height = image.naturalHeight;
        };
    }

    function uploadFile(obj) {
        if (obj) {
            if (obj.files) {
                var formData = new FormData();
                formData.append("file", obj.files.item(0));
                formData.append("fileType", "FileImage");
                formData.append("isMessageAttachment", false);
                var src = window.URL.createObjectURL(obj.files.item(0));
                getImgSize(src);
                uploadFileToServer(formData, src);
            }
            return obj.value;
        }
    }

    function isMobile() {
        if (/Android|webOS|iPhone|iPod|BlackBerry/i.test(navigator.userAgent)) {
            return true;
        }
        return false;
    }


    function uploadFileToServer(formData, src) {

        var url = "./index.php?action=http.file.uploadGif";

        if (isMobile()) {
            url = "/_api_file_upload_/?fileType=1";  //fileType=1,表示文件
        }
        $.ajax({
            url: url,
            type: "post",
            data: formData,
            contentType: false,
            processData: false,
            success: function (imageFileIdResult) {
                if (imageFileIdResult) {
                    var fileId = imageFileIdResult;
                    if (isMobile()) {
                        var res = JSON.parse(imageFileIdResult);
                        fileId = res.fileId;
                    }
                    updateServerGif(fileId);
                } else {
                    alert(getLanguage() == 1 ? "上传返回结果空 " : "empty response");
                }
            },
            error: function (err) {
                alert("update image error");
                // return false;
            }
        });
    }


    $(".add_gif").on({
        touchstart: function(event){
            event.preventDefault();
            event.stopPropagation();
        },

        touchend: function(event){
            event.preventDefault();
            event.stopPropagation();
            $("#gifFile").val("");
            $("#gifFile").click();
            return false;
        }
    });

    function longEnterPress(gifId){
        timeOutEvent = 0;
        console.log(gifId);
        var delGifObj = $(".del_gif");
        var delGifLength = $(".del_gif").length;
        for(i=0; i<delGifLength; i++) {
            var item = delGifObj[i];
            $(item)[0].style.display = "none";
        }
        $("."+gifId)[0].style.display="flex";
    }

    var timeOutEvent=0;
    $(".gif").on({
            touchstart: function(event){
                event.preventDefault();
                event.stopPropagation();
                var gifId = $(this).attr("gifId");
                var isDefault = $(this).attr("isDefault");
                if(isDefault != "0") {
                    timeOutEvent = setTimeout("longEnterPress('"+gifId+"')",500);
                }
            },
            touchend: function(event){
                event.preventDefault();
                event.stopPropagation();
                clearTimeout(timeOutEvent);
                if(timeOutEvent !=0 ){
                    var src = $(this).attr("src");
                    getImgSize(src);
                    var gifId = $(this).attr("gifId");
                    sendGifMsg(gifId);
                    setTimeout(function(){ flag = false; }, 100);
                }
                return false;
            }
        });


    $(".del_gif").on({
        touchstart: function(event){
            event.preventDefault();
            event.stopPropagation();
        },
        touchend: function(event){
            var gifId = $(this).attr("gifId");
            console.log("del gifId =="+gifId);
            var reqData = {
                gifId : gifId,
                type:delGifType,
            }
            sendPostToServer(reqData, delGifType);
            return false;
        }
    });


    $(".zaly_container").on("touchstart", function(e) {
        e.preventDefault();
        startX = e.originalEvent.changedTouches[0].pageX,
            startY = e.originalEvent.changedTouches[0].pageY;

    });

    $(".zaly_container").on("touchend", function(e) {
        e.preventDefault();
        e.stopPropagation();

        moveEndX = e.originalEvent.changedTouches[0].pageX;
        moveEndY = e.originalEvent.changedTouches[0].pageY;
        if(startX == undefined) {
            startX = moveEndX;
        }
        if(startY == undefined) {
            startY = moveEndY;
        }
        X = moveEndX - startX;
        Y = moveEndY - startY;

        if ( Math.abs(X) > Math.abs(Y) && X > 10 ) {
            ////右滑喜欢
            if(currentGifDivNum == 0) {
                return;
            }
            rightSlide();
        }
        else if ( Math.abs(X) > Math.abs(Y) && X < -10 ) {
            ////左滑不喜欢
            if(currentGifDivNum == (line-1)) {
                return;
            }
            leftSlide();
        }
        return false;
    });

    function sendPostToServer(reqData, type)
    {
        $.ajax({
            method: "POST",
            url:"./index.php?action=miniProgram.gif.index&lang="+languageNum,
            data: reqData,
            success:function (data) {
                data = JSON.parse(data);
                if(data.errorCode == 'error.alert') {
                    zalyjsAlert(data.errorInfo);
                    return false;
                }
                if(type == addGifType) {
                    window.location.reload();
                }
                if(type == delGifType) {
                    window.location.reload();
                }
            }
        });
    }

    function sendGifMsg(gifId)
    {
        var reqData = {
            "gifId" : gifId
        };

        sendPostToServer(reqData, "send_msg");
    }

    function updateServerGif(fileId)
    {
        var reqData = {
            gifId : fileId,
            type:addGifType,
            width:imgObject.width,
            height:imgObject.height
        }
        sendPostToServer(reqData, addGifType);
    }

    function leftSlide()
    {
        var oldGifDivNum = currentGifDivNum;
        $(".gif_div_"+currentGifDivNum)[0].style.display = "none";
        currentGifDivNum = currentGifDivNum + 1;
        $(".gif_div_"+currentGifDivNum)[0].style.display = "block";
        changeSlideImg(oldGifDivNum);
    }

    function rightSlide()
    {
        var oldGifDivNum = currentGifDivNum;
        $(".gif_div_"+currentGifDivNum)[0].style.display = "none";

        currentGifDivNum = currentGifDivNum -1;
        $(".gif_div_"+currentGifDivNum)[0].style.display = "block";
        changeSlideImg(oldGifDivNum);
    }

    function changeSlideImg(oldGifDivNum)
    {
        var selectImg = "../../public/gif/sliding_select.png";
        $("[select_gif_div='"+currentGifDivNum+"']").attr("src", selectImg);

        var unSelectImg = "../../public/gif/sliding_unselect.png";
        $("[select_gif_div='"+oldGifDivNum+"']").attr("src", unSelectImg);
    }

</script>
</body>
</html>