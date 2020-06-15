
history.pushState(null, null, document.URL);
window.addEventListener('popstate', function () {
    history.pushState(null, null, document.URL);
});

$(".left-body-chatsession").html("");
$(".right-chatbox").html("");


function uploadFile(obj)
{
    $("#"+obj).val("");
    $("#"+obj).click();
}

function showWebNotification(msg, msgContent)
{
    var msgId = msg.msgId;
    var nickname="";
    var name='';
    var notification;

    if(msg.roomType == "MessageRoomGroup") {
        name = msg.name;
        nickname=msg.nickname;
    } else {
         name=msg.nickname;
    }

    if(name == undefined || name.length<1) {
        name = "通知";
    }

    if(nickname == "") {
         notification = "["+name+"] "+ msgContent;
    } else {
         notification = "["+name+"] "+nickname+":" + msgContent;
    }

    if(window.Notification && Notification.permission !== "denied"){
        new Notification(notification, {"tag":msgId});
    }
}

token = $('.token').attr("data");
nickname = $(".nickname").attr("data");
loginName=$(".loginName").attr("data");
avatar = $(".self_avatar").attr("data");
jumpPage = $(".jumpPage").attr("data");
jumpRoomType = $(".jumpRoomType").attr("data");
jumpRoomId = $(".jumpRoomId").attr("data");
jumpRelation = $(".jumpRelation").attr("data");

jump();

function jump()
{
    //群，好友
    if(jumpRoomType != "" && jumpRoomId != "") {
        if(jumpRoomType == GROUP_MSG) {
            if(jumpRelation == 0) {
                ///todo add group
                var userIds = [];
                userIds.push(token);
                addMemberToGroup(userIds, jumpRoomId);
            } else if(jumpRelation == 1) {
                localStorage.setItem(chatSessionIdKey, jumpRoomId);
                localStorage.setItem(jumpRoomId, jumpRoomType);
                handleClickRowGroupProfile(jumpRoomId);
            }
        } else if(jumpRoomType == U2_MSG) {
            if(jumpRelation == 0) {
                ///todo sendAddFriend
                sendFriendApplyReq(jumpRoomId, "", handleSendFriendApplyReq);
            } else if(jumpRelation == 1) {
                localStorage.setItem(chatSessionIdKey, jumpRoomId);
                localStorage.setItem(jumpRoomId, jumpRoomType);
                sendFriendProfileReq(jumpRoomId);
                insertU2Room(jumpRoomId);
            }
        }
    }
}

function handleSendFriendApplyReq()
{
    alert("已经发送好友请求");
}

function getNotMsgImg(userId, avatarImgId)
{
    if(avatarImgId == undefined || avatarImgId == "" || avatarImgId.length<1) {
        return false;
    }
    var userImgKey = userId+avatarImgId;
    var isReqTime = sessionStorage.getItem(userImgKey);
    var nowTimeStamp = Date.parse(new Date());
    ////5分钟的过期时间，如果还没有请求回来，下一个请求会继续冲重新请求
    if(isReqTime != false &&  nowTimeStamp-isReqTime<reqTimeout) {
        return ;
    }
    sessionStorage.setItem(userImgKey, Date.parse(new Date()));

    var requestUrl =  downloadFileUrl + "&fileId="+avatarImgId+"&returnBase64=0";
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && (this.status == 200 || this.status == 304)) {
            var blob = this.response;
            var src = window.URL.createObjectURL(blob);
            // Typical action to be performed when the document is ready:
            $(".info-avatar-"+userId).attr("src", src);
            if(userId == token) {
                localStorage.setItem(selfInfoAvatar, src);
            }
            sessionStorage.removeItem(userImgKey);
        }
    };
    xhttp.open("GET", requestUrl, true);
    xhttp.responseType = "blob";
    xhttp.setRequestHeader('Cache-Control', "max-age=2592000, public");
    xhttp.send();
}


function getMsgImg(imgId, isGroupMessage, msgId)
{
    if(imgId == undefined || imgId == "" || imgId.length<1) {
        return false;
    }
    var requestUrl = downloadFileUrl +  "&fileId="+imgId + "&returnBase64=0&isGroupMessage="+isGroupMessage+"&messageId="+msgId;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && (this.status == 200 || this.status == 304)) {
            var blob = this.response;
            var src = window.URL.createObjectURL(blob);
            // Typical action to be performed when the document is ready:
            $(".msg-img-"+msgId).attr("src", src);
        }
    };
    xhttp.open("GET", requestUrl, true);
    xhttp.responseType = "blob";
    xhttp.setRequestHeader('Cache-Control', "max-age=2592000, public");
    xhttp.send();
}

getNotMsgImg(token, avatar);

unselectMemberOffset = 0;

$(document).on("click", ".invite_people", function () {
    unselectMemberOffset = 0;
    var action = "api.group.invitableFriends";
    var groupId = localStorage.getItem(chatSessionIdKey);
    var reqData = {
        "groupId": groupId,
        "offset" : unselectMemberOffset,
        "count" : defaultCountKey,
    }
    handleClientSendRequest(action, reqData, initUnselectMemberList);
});

function initUnselectMemberList(results)
{
    $(".pw-right-body").html("");
    $(".pw-left").html("");
    var list = results.list;
    var html = "";
    if(list) {
        getUnselectMemberListHtml(results);
    } else {
        html = template("tpl-invite-member-no-data", {});
        html = handleHtmlLanguage(html);
        $(".pw-left").append(html);
    }
    showWindow($("#group-invite-people"));
}

function getUnselectMemberListHtml(results)
{
    var list = results.list;
    var html = "";
    if(list) {
        $(".pw-left").html("");
        var i;
        unselectMemberOffset = Number(unselectMemberOffset+defaultCountKey);
        var length = list.length;
        for(i=0; i<length ; i++) {
            var user = list[i];
            html = template("tpl-invite-member", {
                userId : user.userId,
                nickname:user.nickname ?  user.nickname : defaultUserName
            });
            html = handleHtmlLanguage(html);
            $(".pw-left").append(html);
            getNotMsgImg(user.userId, user.avatar);
        }
    }
}

$(function(){
    ////加载邀请好友入群列表
    $('.pw-left').scroll(function(){
        var pwLeft = $(".pw-left")[0];
        var ch  = pwLeft.clientHeight;
        var sh = pwLeft.scrollHeight;
        var st = $('.pw-left').scrollTop();
        ////文档的高度-视口的高度-滚动条的高度
        if((sh - ch - st) == 0){
            groupId = localStorage.getItem(chatSessionIdKey);
            var action = "api.group.invitableFriends";
            var reqData = {
                "groupId": groupId,
                "offset" : unselectMemberOffset,
                "count"  : defaultCountKey
            }
            handleClientSendRequest(action, reqData, appendUnselectMemberList);
        }
    });
});


function appendUnselectMemberList(results)
{
    var html = getUnselectMemberListHtml(results);
    $(".pw-left").append(html);
}

$(".create_group_box_div_input").bind('input porpertychange',function() {
    if($(".create_group_box_div_input").val().length>0) {
        $(".create_group_box_div_input").addClass("rgb108");
    }
});

unselectRemoveMemberOffset = 0;

$(document).on("click", ".remove_member", function () {
    unselectRemoveMemberOffset = 0;
    showWindow($("#group-remove-people"));
    $(".remove-people-div").html("");
    getGroupMembers(unselectRemoveMemberOffset, defaultCountKey, initGroupRemoveMemberList);
});

function getGroupMembers(offset, count, callback)
{
    var action = "api.group.members";
    var groupId = localStorage.getItem(chatSessionIdKey);
    var reqData = {
        "groupId": groupId,
        "offset" : offset,
        "count" : count,
    }
    handleClientSendRequest(action, reqData, callback);
}

function initGroupRemoveMemberList(results)
{
    var list = results.list;
    if(list) {
        unselectRemoveMemberOffset = Number(unselectRemoveMemberOffset+defaultCountKey);
        var length = list.length;
        var html = "";
        for(i=0; i<length ; i++) {
            var user = list[i].profile;
            html = template("tpl-remove-member", {
                userId : user.userId,
                nickname:user.nickname
            })
            html = handleHtmlLanguage(html);
            $(".remove-people-div").append(html);
            getNotMsgImg(user.userId, user.avatar);
        }
    }
}

$(document).on("click", ".remove-people-div .choose-member", function () {

    var isSelect = $(this).find(".remove_people").attr("is_select");

    if(isSelect != "is_select") {
        var selectHtml = '<img src="../../public/img/msg/member_select.png" /> ';
        $(this).attr("is_select", "is_select");
        $(this).find(".remove_people").attr("is_select",  "is_select");
        $(this).find(".remove_people").addClass("isSelect");
        $(this).find(".remove_people").html(selectHtml);
    } else {
        var selectHtml = '<img src="../../public/img/msg/member_unselect.png" /> ';
        $(this).find(".remove_people").removeClass("isSelect");
        $(this).find(".remove_people").attr("is_select", "no_select");
        $(this).find(".remove_people").html(selectHtml);
    }
});


$(document).on("click", ".remove_member_from_group", function () {
    var groupId = localStorage.getItem(chatSessionIdKey);
    var removeList = $("#group-remove-people").find(".isSelect");
    var length = removeList.length;
    if(length == 0) {
        return;
    }
    var removeUserIds = new Array();
    for(var i=0;i<length;i++) {
        var item = removeList[i];
        var userId = $(item).attr('user-id');
        removeUserIds.push(userId);
    }
    removeMemberFromGroup(groupId, removeUserIds, removeMemberItemFromGroup)
});
removeMemberId="";
function handleRemoveMember()
{
   try{
       $("."+removeMemberId).remove();
   }catch (error) {

   }
}

$(document).on("click", ".remove_group_btn", function () {
    var groupId = localStorage.getItem(chatSessionIdKey);
    var userId = $(this).attr("userId");
    removeMemberId=userId;
    var removeUserIds = new Array();
    removeUserIds.push(userId);
    removeMemberFromGroup(groupId, removeUserIds, handleRemoveMember);
});

function removeMemberFromGroup(groupId, removeUserIds, callback)
{
    var action = "api.group.removeMember";
    var reqData = {
        "groupId": groupId,
        "userIds" : removeUserIds,
    }
    handleClientSendRequest(action, reqData, callback);
}

$(document).on("click", "#remove-group-chat", function () {
    var tip = $.i18n.map['removeMemberFromGroupJsTip'] != undefined ? $.i18n.map['removeMemberFromGroupJsTip']: "确定要移除群聊?";
   if(confirm(tip)) {
       var groupId = localStorage.getItem(chatSessionIdKey);
       var node = $(this)[0].parentNode;
       var userId = $(node).attr("userId");
       var removeUserIds = new Array();
       removeUserIds.push(userId);
       removeMemberFromGroup(groupId, removeUserIds, reloadPage);
   }
});

function  reloadPage() {
    window.location.reload();
}

function removeMemberItemFromGroup()
{
    var removeList = $("#group-remove-people").find(".isSelect").parent(".pw-contact-row");
    if(removeList == null) {
        return false;
    }
    var length = removeList.length;
    for(i=0;i<length;i++) {
        var item = removeList[i];
        $(item).remove();
    }
}

function quiteFromGroup()
{
    var action = "api.group.quit";
    var groupId = localStorage.getItem(chatSessionId);
    var reqData = {
        "groupId": groupId,
    }
    handleClientSendRequest(action, reqData, reloadPage);
}

unselectSpeakerMemberOffset = 0;
function initSpeakerGroupMemberList(results)
{
    var list = results.list;
    if(list) {
        unselectSpeakerMemberOffset = Number(unselectSpeakerMemberOffset+defaultCountKey);
        var length = list.length;
        var html = "";
        var groupId = localStorage.getItem(chatSessionIdKey);
        var groupProfile = getGroupProfile(groupId);
        var groupOwnerId = getGroupOwner(groupProfile);
        var groupAdminIds = getGroupAdmins(groupProfile);
        var speakerListMemberIds = getGroupSpeakers(groupProfile);
        var isAdmin = false;
        if(checkGroupMemberAdminType(token, groupProfile)) {
            isAdmin = true;
        }
        if(checkGroupOwnerType(token, groupProfile)){
            isAdmin = true;
        }
        for(i=0; i<length ; i++) {
            var user = list[i].profile;
            var userId = user.userId;
            var isType = "member";

            if(groupOwnerId == userId) {
                isType = "owner"
            }
            if(groupAdminIds && groupAdminIds.indexOf(userId) != -1) {
                isType = "admin";
            }

            if(speakerListMemberIds && speakerListMemberIds.indexOf(userId) != -1) {
                continue;
            }

            html = template("tpl-speaker-member", {
                userId: user.userId,
                nickname: user.nickname,
                isSpeaker: false,
                avatar: user.avatar,
                isType:isType,
                isAdmin:isAdmin
            })
            html = handleHtmlLanguage(html);
            $(".speaker-group-member-div").append(html);
            getNotMsgImg(user.userId, user.avatar);
        }
    }
}

function handelGroupSpeakerList(result)
{
    var groupProfile = result.profile;
    if(groupProfile) {
        var isAdmin = false;
        if(checkGroupMemberAdminType(token, groupProfile)) {
            isAdmin = true;
        }
        if(checkGroupOwnerType(token, groupProfile)){
            isAdmin = true;
        }
        $(".speaker-people-div").html('');
        if(isAdmin == false) {
            $(".remove-all-speaker")[0].style.display = "none";
            $(".speaker-group-member")[0].style.display = "none";
        }

        if(groupProfile.hasOwnProperty("speakers")) {
            var speakers = groupProfile.speakers;
            var speakersLength = speakers.length;
            for(var i=0; i<speakersLength;i++){
                var speaker = speakers[i];
                var html = template("tpl-speaker-member", {
                    userId:speaker.userId,
                    nickname:speaker.nickname,
                    avatar:speaker.avatar,
                    isAdmin:isAdmin,
                    isSpeaker:true,
                    isType:"member",
                });
                html = handleHtmlLanguage(html);
                $(".speaker-people-div").append(html);
                getNotMsgImg(speaker.userId, speaker.avatar)
            }
        }

        if(isAdmin) {
            $(".speaker-group-member").remove();
            var html = template("tpl-group-member-for-speaker", {});
            html = handleHtmlLanguage(html);
            $(".speaker-content").append(html);
            $(".speaker-group-member-div").html('');
            getGroupMembers(unselectSpeakerMemberOffset, defaultCountKey, initSpeakerGroupMemberList);
        }
    }
    handleGetGroupProfile(result);
}

$(".group_speakers").on("click", function () {
    showWindow($("#group-speaker-people"));
    unselectSpeakerMemberOffset =0;
    var groupId = localStorage.getItem(chatSessionIdKey);
    sendGroupProfileReq(groupId, handelGroupSpeakerList);
});

$(function () {
    ////加载设置群成员列表
    $('.speaker-content').scroll(function(){
        var pwLeft = $(".speaker-content")[0];
        var ch  = pwLeft.clientHeight;
        var sh = pwLeft.scrollHeight;
        var st = $('.speaker-content').scrollTop();

        ////文档的高度-视口的高度-滚动条的高度
        if((sh - ch - st) == 0){
            groupId = localStorage.getItem(chatSessionIdKey);
            var action = "api.group.members";
            var reqData = {
                "groupId": groupId,
                "offset" : unselectSpeakerMemberOffset,
                "count"  : defaultCountKey
            }
            handleClientSendRequest(action, reqData, initSpeakerGroupMemberList);
        }
    });
});


$(document).on("click", ".l-sb-item", function(){
    var currentActive = $(".left-sidebar").find(".l-sb-item-active");
    $(currentActive).removeClass("l-sb-item-active");
    $(this).addClass("l-sb-item-active");

    var dataType  = $(this).attr("data");
    var selectClassName   = dataType + "-select";
    var unselectClassName = dataType + "-unselect";

    var itemImgs = $(".left-sidebar").find(".item-img");
    var length = itemImgs.length;
    for(i=0; i<length; i++) {
        var item = itemImgs[i];
        var data = $(item).attr("data");
        if(data == "select") {
            $(item)[0].style.display = "none";
        } else {
            $(item)[0].style.display = "block";
        }
    }
    if($("."+unselectClassName)[0]) {
        $("."+unselectClassName)[0].style.display = "none";
        $("."+selectClassName)[0].style.display = "block";
    }

    switch (dataType){
        case "group":
            $(".left-body-chatsession").addClass("group-list");
            $(".left-body-chatsession").removeClass("friend-list");
            $(".left-body-chatsession").removeClass("chat-session-list");
            $(".group-lists")[0].style.display = "block";
            $(".chatsession-lists")[0].style.display = "none";
            $(".friend-lists")[0].style.display = "none";
            groupOffset = 0;
            getGroupList();
            break;
        case "chatSession" :
            $(".left-body-chatsession").addClass("chat-session-list");
            $(".left-body-chatsession").removeClass("group-list");
            $(".left-body-chatsession").removeClass("friend-list");
            getRoomList();
            $(".chatsession-lists")[0].style.display = "block";
            $(".group-lists")[0].style.display = "none";
            $(".friend-lists")[0].style.display = "none";
            break;
        case "friend":
            $(".left-body-chatsession").addClass("friend-list");
            $(".left-body-chatsession").removeClass("chat-session-list");
            $(".left-body-chatsession").removeClass("group-list");
            $(".friend-lists")[0].style.display = "block";
            $(".chatsession-lists")[0].style.display = "none";
            $(".group-lists")[0].style.display = "none";
            friendOffset = 0;
            getFriendList();
            break;
        case "search":
            var html = template("tpl-search-user-div", {});
            $("#search-user-div").html(html);
            showWindow($("#search-user-div"));
            break;
        case "more":
            displayDownloadApp();
            break;
    }
    displayRoomListMsgUnReadNum();
});

function displayDownloadApp() {
    var html = template("tpl-download-app-div", {});
    console.log("old html ==="+html);
    html = handleHtmlLanguage(html);
    console.log("new html ==="+html);

    $("#download-app-div").html(html);
    var urlLink = changeZalySchemeToDuckChat("", "download_app");
    var src = "../../public/img/duckchat.png";
    generateQrcode($('#qrcodeCanvas'), urlLink, src, false, "more");
    showWindow($("#download-app-div"));
}

function generateQrcode(qrCodeObj, urlLink, src, isCircle, type)
{
    var idName, className,width,height,canvasWidth,canvasHeight;

    if(type == "self") {
         idName = "selfQrcode";
         className = "selfCanvas";
        width  = getRemPx()*17;
        height = getRemPx()*17;
        canvasWidth = getRemPx()*15;
        canvasHeight = getRemPx()*15;
    } else if(type == 'group') {
         width  = getRemPx()*24.5;
         height = getRemPx()*24.5;
         canvasWidth = getRemPx()*22;
         canvasHeight = getRemPx()*22;
         className = "qrcodeCanvas";
         idName = "groupQrcode";
    } else {
         width  = getRemPx()*24.5;
         height = getRemPx()*24.5;
         canvasWidth = getRemPx()*22;
         canvasHeight = getRemPx()*22;
         idName = "appDownload";
         className = "appDownload";
    }

    qrCodeObj.qrcode({
        idName:idName,
        render : "canvas",
        text    :urlLink,
        className : className,
        canvasWidth:canvasWidth,
        canvasHeight:canvasHeight,
        width : width,               //二维码的宽度
        height : height,              //二维码的高度
        background : "#ffffff",       //二维码的后景色
        foreground : "#000000",        //二维码的前景色
        src: src, //二维码中间的图片
        isCircle:isCircle
    });
}

function setDocumentTitle(type)
{
    switch (type){
        case "new_msg" :
            document.title = " 有新消息,请及时查看！" + DefaultTitle ;
        break;
        case "add_friend":
            document.title = " 有好友请求,请及时查看！" + document.title;
            break;
        case "clear" :
            document.title = DefaultTitle;
            break;
    }
}

function displayRoomListMsgUnReadNum()
{
    if(!judgeDefaultChat()){
        return false;
    }
    var data = $(".l-sb-item-active").attr("data");
    if(data != "chatSession") {
        var unReadAllNum = localStorage.getItem(roomListMsgUnReadNum);
        if(unReadAllNum>0) {
            if(unReadAllNum>99) {
                unReadAllNum = "99+";
            }
            setDocumentTitle("new_msg");
            $(".room-list-msg-unread")[0].style.display = 'block';
            $(".room-list-msg-unread").html(unReadAllNum);
        } else {
            var mute = localStorage.getItem(roomListMsgMuteUnReadNumKey);
            if(mute >= 1) {
                $(".unread-num-mute")[0].style.display = "block";
            } else {
                setDocumentTitle("clear");
                $(".room-list-msg-unread")[0].style.display = 'none';
            }
        }
    } else {
        $(".room-list-msg-unread")[0].style.display = 'none';
        $(".unread-num-mute")[0].style.display = "none";
    }
    if(data == "friend") {
        $(".apply_friend_list_num")[0].style.display = "none";
    } else {
        $(".apply_friend_list_num")[0].style.display = "block";
    }

    var friendListNum = localStorage.getItem(applyFriendListNumKey);

    if(friendListNum > 0 && friendListNum != undefined && data != "friend" ) {
        setDocumentTitle("add_friend");
        $(".apply_friend_list_num")[0].style.display = "block";
    } else {
        $(".apply_friend_list_num")[0].style.display = "none";
    }

}

function getFriendList()
{
    var action = "api.friend.list";
    var reqData = {
        "offset" : friendOffset,
        "count"  : defaultCountKey,
    }
    handleClientSendRequest(action, reqData, initFriendList);
}

function initFriendList(results)
{
    $(".friend-lists").html("");
    var html = template("tpl-apply-friend-list",{});
    html = handleHtmlLanguage(html);
    $(".friend-lists").html(html);
    if(results != undefined && results.hasOwnProperty("friends")) {
        getFriendListHtml(results);
    }
    displayApplyFriendNum();
}

function displayApplyFriendNum()
{
    if(!judgeDefaultChat()) {
        return ;
    }
    try{
        var friendListNum = localStorage.getItem(applyFriendListNumKey);
        if(friendListNum > 0 && friendListNum != undefined) {
            $(".apply_friend_num")[0].style.display = "block";
            $(".apply_friend_num").html(friendListNum);
        } else {
            $(".apply_friend_list_num")[0].style.display = "none";
            $(".apply_friend_num")[0].style.display = "none";
        }
    }catch (error) {
        // console.log(error);
    }

}

function  getFriendListHtml(results)
{
    if(results == undefined || !results.hasOwnProperty("friends")) {
        return ;
    }
    var u2List = results.friends;
    if(u2List) {
        friendOffset = Number(friendOffset + defaultCountKey);
        var u2Length = u2List.length;
        for(i=0; i<u2Length; i++) {
            var u2 = u2List[i].profile;
            var html = template("tpl-friend-contact", {
                userId : u2.userId,
                nickname: u2.nickname ? u2.nickname : defaultUserName,
            });
            html = handleHtmlLanguage(html);
            $(".friend-lists").append(html);
            getNotMsgImg(u2.userId, u2.avatar);
        }
    }
}

////加载好友列表
$('.friend-list').scroll(function(){
    var pwLeft = $(".friend-list")[0];
    var ch  = pwLeft.clientHeight;
    var sh = pwLeft.scrollHeight;
    var st = $('.friend-list').scrollTop();
    ////文档的高度-视口的高度-滚动条的高度
    if((sh - ch - st) == 0){
        var action = "api.friend.list";
        var reqData = {
            "offset" : friendOffset,
            "count"  : defaultCountKey,
        }
        handleClientSendRequest(action, reqData, getFriendListHtml);
    }
});

function getGroupList()
{
    var action = "api.group.list";
    var reqData = {
        "offset" : groupOffset,
        "count"  : defaultCountKey,
    }
    handleClientSendRequest(action, reqData, initGroupList);
}

function initGroupList(results)
{
    $(".group-lists").html("");
    if(results == undefined || !results.hasOwnProperty("list")) {
        var html = template("tpl-group-no-data", {});
        html = handleHtmlLanguage(html);
        $(".group-lists").html(html);
    } else {
        getGroupListHtml(results);
    }
}

function getGroupListHtml(results) {
    var html = "";
    if(results == undefined || !results.hasOwnProperty("list")) {
        return ;
    }
    var groupList = results.list;
    if(groupList) {
        groupOffset = Number(groupOffset + defaultCountKey);
        var groupLength = groupList.length;
        html = "";
        for(i=0; i<groupLength; i++) {
            var group = groupList[i];
            html = template("tpl-group-contact", {
                groupId : group.id,
                groupName : group.name,
            });
            html = handleHtmlLanguage(html);
            $(".group-lists").append(html);
            getNotMsgImg(group.id, group.avatar)
        }
    }
}

$(function () {
    ////加载群组列表
    $('.group-lists').scroll(function(){
        var pwLeft = $(".group-lists")[0];
        var ch  = pwLeft.clientHeight;
        var sh = pwLeft.scrollHeight;
        var st = $('.group-lists').scrollTop();
        ////文档的高度-视口的高度-滚动条的高度
        if((sh - ch - st) == 0){
            var action = "api.group.list";
            var reqData = {
                "offset" : groupOffset,
                "count"  : defaultCountKey,
            }
            handleClientSendRequest(action, reqData, getGroupListHtml);
        }
    });
});


function displayGroupMemberForGroupInfo(results)
{
    var list = results.list;
    $(".group-member-body").html("");
    if(list) {
        var length = list.length;
        var html = "";
        var bodyDivNum = undefined;
        var divNum = 0;
        var groupId = localStorage.getItem(chatSessionIdKey);
        var groupProfile = getGroupProfile(groupId);

        for(i=0; i<length ; i++) {
            var newBodyNum=Math.floor((i/6));
            if(newBodyNum != bodyDivNum) {
                divNum = divNum+1;
                html = template("tpl-group-member-body", {
                    num:divNum
                })
                $(".group-member-body").append(html);
            }
            var user = list[i].profile;
            html = template("tpl-group-member-body-detail", {
                userId : user.userId,
                nickname:user.nickname
            });
            html = handleHtmlLanguage(html);
            $(".member_body_"+divNum).append(html);
            getNotMsgImg(user.userId, user.avatar);
            bodyDivNum = newBodyNum;
        }
    }
}

$(document).on("click", ".see_group_profile", function () {
    var chatSessionId   = localStorage.getItem(chatSessionIdKey);
    var chatSessionType = localStorage.getItem(chatSessionId);


    if(chatSessionType == U2_MSG) {
        sendFriendProfileReq(chatSessionId);
    } else {
        getGroupMembers(0, 18, displayGroupMemberForGroupInfo);
        sendGroupProfileReq(chatSessionId, handleGetGroupProfile);
    }
    $('.right-body-sidebar').show();
});

groupMemberListOffset=0;
groupMemberListAdmins=[];

function addHtmlToGroupList(user, isType)
{
    var groupId = localStorage.getItem(chatSessionIdKey);
    var groupProfile = getGroupProfile(groupId);

    var isGroupOwner = checkGroupOwnerType(token, groupProfile);
    var isGroupAdmin = checkGroupMemberAdminType(token, groupProfile);
    var isPermission = isGroupOwner || isGroupAdmin ? "admin" : "member";

    var html = template("tpl-group-member-list", {
        userId : user.userId,
        nickname:user.nickname,
        isType:isType,
        isPermission:isPermission
    })
    html = handleHtmlLanguage(html);
    $(".group-member-content").append(html);
    getNotMsgImg(user.userId, user.avatar);
}

function initGroupMemberForGroupMemberList(results)
{
    var list = results.list;
    if(list) {
        groupMemberListOffset = Number(groupMemberListOffset+defaultCountKey);
        var length = list.length;
        for(var i=0; i<length ; i++) {
            var user = list[i].profile;
            if(groupMemberListAdmins.indexOf(user.userId) == -1) {
                addHtmlToGroupList(user, "member");
            }
        }
    }
}

function addGroupMemberToGroupMemberList(result)
{
    handleGetGroupProfile(result);
    var groupProfile = result.profile;
    if(groupProfile) {
        var owner = groupProfile.owner;
        groupMemberListAdmins.push(owner.userId);
        addHtmlToGroupList(owner, "owner", "admin");

        if(groupProfile.hasOwnProperty("admins")) {
            var admins = groupProfile.admins;
            if(admins == null ){
                return false;
            }
            var length = admins.length;
            for(var i=0; i<length; i++) {
                var admin = admins[i];
                addHtmlToGroupList(admin, "admin");
                groupMemberListAdmins.push(admin.userId);
            }
        }
    }
    getGroupMembers(groupMemberListOffset, defaultCountKey, initGroupMemberForGroupMemberList);
}

function handleGetGroupMemberInfo(result)
{
    if(result == undefined) {
        return;
    }
    var profile = result.profile;

    if(profile != undefined && profile["profile"]) {
        var userProfile = profile["profile"];
        var relation = profile.relation == undefined ? FriendRelation.FriendRelationInvalid : profile.relation;

        var html = template("tpl-group-member-info", {
            userId : userProfile.userId,
            nickname:userProfile.nickname,
            loginName:userProfile.loginName,
            relation:relation
        });
        html = handleHtmlLanguage(html);
        $(".group-member-info").html(html);
        getNotMsgImg(userProfile.userId, userProfile.avatar);
        $(".group-member-info")[0].style.display='block';
    }
    handleGetFriendProfile(result);
}

$(document).on("click", ".open_chat", function () {
    var userId = $(this).attr("userId");
    sendFriendProfileReq(userId, openU2Chat);
    removeWindow($("#group-member-list-div"));
});
$(document).on("click", ".add-friend-by-group-member",function () {
    var userId = $(this).attr("userId");
    sendFriendApplyReq(userId, "", "");
    $(this).attr("disabled", "disabled");
    alert("发送申请成功");
    $(".group-member-info")[0].style.display='none';
});

function closeGroupMemberInfo()
{
    $(".group-member-info")[0].style.display='none';
}

$(document).on("click", ".group-member", function (event) {
    event.stopPropagation();
    event.preventDefault();
    var userId = $(this).attr("userId");
    var relation = localStorage.getItem(friendRelationKey+userId);
    var html = template("tpl-group-member-info", {
        userId : userId,
        nickname:$(this).attr("nickname"),
        relation:relation,
        avatar:$(".info-avatar-"+userId).attr("src"),
    });
    html = handleHtmlLanguage(html);
    $(".group-member-info").html(html);
    getFriendProfile(userId, true, handleGetGroupMemberInfo);
});

$(document).on("click", ".see_all_group_member", function () {
    groupMemberListOffset = 0;
    showWindow($("#group-member-list-div"));
    $(".group-member-info")[0].style.display="none";
    $(".group-member-content").html("");
    var groupId = localStorage.getItem(chatSessionIdKey);
    sendGroupProfileReq(groupId, addGroupMemberToGroupMemberList);
});

$(function () {
    ////加载设置群成员列表
    $('.group-member-content').scroll(function(){
        var pwLeft = $(".group-member-content")[0];
        var ch  = pwLeft.clientHeight;
        var sh = pwLeft.scrollHeight;
        var st = $('.group-member-content').scrollTop();

        ////文档的高度-视口的高度-滚动条的高度
        if((sh - ch - st) == 0){
            var groupId = localStorage.getItem(chatSessionIdKey);
            var action = "api.group.members";
            var reqData = {
                "groupId": groupId,
                "offset" : groupMemberListOffset,
                "count"  : defaultCountKey
            }
            handleClientSendRequest(action, reqData, initGroupMemberForGroupMemberList);
        }
    });
});


$(document).on("click", ".group-profile", function () {
    var groupId =  $(this).attr("chat-session-id");

    if(groupId == undefined) {
        alert("not found group-id by click group-profile");
        return ;
    }
    var groupName = $('.nickname_'+groupId).html();
    groupName = template("tpl-string", {
        string : groupName
    });
    $(".chatsession-title").html(groupName);

    sendGroupProfileReq(groupId, handleGetGroupProfileByClick);

    localStorage.setItem(chatSessionIdKey, groupId);
    localStorage.setItem(groupId, GROUP_MSG);

    $("#share_group").removeClass();
    $("#share_group").addClass("info-avatar-"+groupId);

    handleMsgRelation($(this), groupId);
});

function handleGetGroupProfileByClick(results)
{
    var groupProfile = results.profile;

    if(groupProfile == null) {
        alert("此群已经被解散");
        var chatSessionId = localStorage.getItem(chatSessionIdKey);
        localStorage.removeItem(roomKey+chatSessionId);
        removeRoomFromRoomList(chatSessionId);
    } else {
        handleGetGroupProfile(results);
    }
}
// contact-row-u2-profile
$(document).on("click", ".contact-row-group-profile", function () {
    var groupId =  $(this).attr("chat-session-id");
    if(groupId == undefined) {
        alert("not found group-id by click group-profile");
        return ;
    }
    localStorage.setItem(chatSessionIdKey, groupId);
    localStorage.setItem(groupId, GROUP_MSG);

    handleClickRowGroupProfile(groupId);
});

function handleClickRowGroupProfile(groupId)
{
    sendGroupProfileReq(groupId, handleGetGroupProfileByClick);

    var groupName = $('.nickname_'+groupId).html();
    groupName = template("tpl-string", {
            string : groupName
    });
    $(".chatsession-title").html(groupName);

    insertGroupRoom(groupId, groupName);
    handleMsgRelation($(this), groupId);
}

$(document).on("click", ".u2-profile", function () {
    var userId = $(this).attr("chat-session-id");
    if(userId == undefined) {
        return false;
    }

    $(".user-image-for-add").attr("class", "user-image-for-add");
    $(".user-image-for-add").attr("src", "../../public/img/msg/default_user.png");

    getFriendProfile(userId, true, handleGetFriendProfile);
    var nickname = $(".nickname_"+userId).html();
    var nickname = template("tpl-string", {
        string : nickname
    });
    $(".chatsession-title").html(nickname);

    localStorage.setItem(chatSessionIdKey, userId);
    localStorage.setItem(userId, U2_MSG);
    handleMsgRelation($(this), userId);
});

$(document).on("click", ".contact-row-u2-profile", function () {
    var userId = $(this).attr("chat-session-id");
    if(userId == undefined) {
        return false;
    }
    localStorage.setItem(chatSessionIdKey, userId);
    localStorage.setItem(userId, U2_MSG);
    $(".user-image-for-add").attr("class", "user-image-for-add");
    $(".user-image-for-add").attr("src", "../../public/img/msg/default_user.png");
    sendFriendProfileReq(userId);
    handleMsgRelation($(this), userId);
    insertU2Room(userId);
});

function handleMsgRelation(jqElement, chatSessionId)
{
    if(jqElement != undefined) {
        addActiveForPwContactRow(jqElement);
    }
    hideGroupUserMenu();
    getMsgFromRoom(chatSessionId);
    syncMsgForRoom();
    displayCurrentProfile();
    displayRightPage(DISPLAY_CHAT);
}

function judgeDefaultChat()
{
    var chatType = localStorage.getItem(chatTypeKey);
    if(chatType != DefaultChat) {
        return false;
    }
    return true;
}

function displayRightPage(displayType)
{
    if(!judgeDefaultChat()) {
        return ;
    }
    try{
        switch (displayType){
            case DISPLAY_CHAT:
                var chatSessionId  = localStorage.getItem(chatSessionIdKey);
                var chatSessionRowLength = $(".chatsession-row").length;
                $(".msg-chat-dialog")[0].style.display = "block";
                if(chatSessionId && chatSessionRowLength>0) {
                    $(".chat-dialog")[0].style.display = "block";
                    $(".no-chat-dialog-div")[0].style.display = "none";
                } else {
                    $(".no-chat-dialog-div")[0].style.display = "block";
                    $(".chat-dialog")[0].style.display = "none";
                }
                $(".friend-apply-dialog")[0].style.display = "none";
                break;
            case DISPLAY_APPLY_FRIEND_LIST:
                $(".msg-chat-dialog")[0].style.display = "none";
                $(".friend-apply-dialog")[0].style.display = "block";
                break;
        }
    }catch (error) {
        // console.log(error.message);
    }
}

function addActiveForPwContactRow(jqElement)
{
    var pwContactRows = $(".pw-contact-row");
    var length = pwContactRows.length;
    for(i=0;i<length;i++){
        var node = pwContactRows[i];
        $(node).removeClass("chatsession-row-active");
    }
    jqElement.addClass("chatsession-row-active");
}

$(document).on("click", ".chatsession-row", function (e) {
    addActiveForRoomList($(this));
});

function addActiveForRoomList(jqElement)
{
    var chatSessionRowNodes = $(".chatsession-row");
    var length = chatSessionRowNodes.length;
    var i;
    for(i=0;i<length;i++){
        var node = chatSessionRowNodes[i];
        $(node).removeClass("chatsession-row-active");
    }
    jqElement.addClass("chatsession-row-active");
}

function getGroupProfile(groupId)
{
    var groupInfoKey = profileKey + groupId;
    var groupProfileStr = localStorage.getItem(groupInfoKey);

    var groupInfoReqKey = reqProfile+groupId;
    var nowTimestamp = Date.parse(new Date());
    var reqProfileTime = sessionStorage.getItem(groupInfoReqKey);
    var groupProfile = false;

    if(groupProfileStr != false && groupProfileStr != null) {
        groupProfile = JSON.parse(groupProfileStr);
        if(groupProfile && (nowTimestamp - groupProfile['updateTime'])<ProfileTimeout) {
            return groupProfile;
        }
    }

    if(reqProfileTime != false && reqProfileTime != null && ((nowTimestamp-reqProfileTime)<reqTimeout) ) {
        return false;
    }
    sessionStorage.setItem(groupInfoReqKey, nowTimestamp);
    sendGroupProfileReq(groupId, handleGetGroupProfile);
    return groupProfile;
}

function sendGroupProfileReq(groupId, callback)
{
    if(!groupId || groupId == undefined) {
        return null;
    }
    var action = "api.group.profile";
    var reqData = {
        "groupId": groupId
    };
    handleClientSendRequest(action, reqData, callback);
}


function handleGetGroupProfile(result)
{
    var groupProfile = result.profile;
    if(groupProfile) {
        groupProfile.memberType = result.memberType ? result.memberType : GroupMemberType.GroupMemberGuest;
        groupProfile.permissionJoin = groupProfile.permissionJoin ? groupProfile.permissionJoin : GroupJoinPermissionType.GroupJoinPermissionPublic;
        groupProfile['updateTime'] = Date.parse(new Date());
        localStorage.setItem(groupProfile.id, GROUP_MSG);

        var groupInfoKey = profileKey + groupProfile.id;
        localStorage.setItem(groupInfoKey, JSON.stringify(groupProfile));

        sessionStorage.removeItem(reqProfile+groupProfile.id);

        var muteKey = msgMuteKey + groupProfile.id;
        localStorage.setItem(muteKey, (result.isMute ? 1 : 0) );
        displayProfile(groupProfile.id, GROUP_MSG);
    }
}

function getFriendProfile(userId, isForceSend, callback)
{
    var friendInfoReqKey = reqProfile + userId;
    var nowTimestamp = Date.parse(new Date());
    var reqProfileTime = sessionStorage.getItem(friendInfoReqKey);

    var userInfoKey = profileKey+userId;
    var userProfile = localStorage.getItem(userInfoKey);
    if(userProfile) {
        userProfile = JSON.parse(userProfile);
        var nowTimestamp = Date.parse(new Date());
        if(!userProfile.hasOwnProperty("nickname")) {
            userProfile['nickname'] = defaultUserName;
        }
        if ((nowTimestamp - userProfile['updateTime'] ) < ProfileTimeout && isForceSend == false) {
            return userProfile;
        }
    }
    if(reqProfileTime != false && reqProfileTime != null && (nowTimestamp-reqProfileTime<reqTimeout) && isForceSend == false) {
        return false;
    }
    sessionStorage.setItem(friendInfoReqKey, nowTimestamp);
    sendFriendProfileReq(userId, callback);
    return userProfile;
}

function sendFriendProfileReq(userId, callback)
{
    var action = "api.friend.profile";
    var reqData = {
        "userId" : userId
    };
    handleClientSendRequest(action, reqData, callback);
}

function handleGetFriendProfile(result)
{

    if(result == undefined) {
        return;
    }
    var profile = result.profile;

    if(profile != undefined && profile["profile"]) {
        var userProfile = profile["profile"];

        sessionStorage.removeItem(reqProfile+userProfile["userId"]);

        var userProfilekey = profileKey + userProfile["userId"];
        userProfile['updateTime'] = Date.parse(new Date());
        localStorage.setItem(userProfilekey, JSON.stringify(userProfile));

        var muteKey = msgMuteKey + userProfile["userId"];
        var mute = profile.mute ? 1 : 0;
        localStorage.setItem(muteKey, mute);

        var relationKey = friendRelationKey + userProfile["userId"];
        var relation = profile.relation == undefined ? FriendRelation.FriendRelationInvalid : profile.relation;
        localStorage.setItem(relationKey, relation);

        displayProfile(userProfile.userId, U2_MSG);
    }
}

$(document).on("click", ".send_msg" , function(){
    sendMsgBySend();
});


function sendMsgBySend()
{
    var chatSessionId   = localStorage.getItem(chatSessionIdKey);
    var chatSessionType = localStorage.getItem(chatSessionId);
    var msgContent = $(".msg_content").val();
    var imgData = $("#msgImage img").attr("src");

    if(imgData) {
        uploadMsgImgFromCopy(imgData);
    }

    if(msgContent.length < 1) {
        return false;
    }

    if(msgContent.length > 1000) {
        alert("文本过长");
        return false;
    }
    $(".msg_content").val('');

    sendMsg(chatSessionId, chatSessionType, msgContent, MessageType.MessageText);
}

document.getElementById("msg_content").addEventListener('paste', function(event) {
    var imgFile = null;
    var idx;
    var items = event.clipboardData.items;
    if(items == undefined) {
        return;
    }
    for(var i=0,len=items.length; i<len; i++) {
        var item = items[i];
        if (item.kind == 'file' ||item.type.indexOf('image') > -1) {
            var blob = item.getAsFile();
            var reader = new FileReader();
            reader.onload = function(event) {
                var data = event.target.result;
                var img = new Image();
                img.src = data;
                img.onload =  function (ev) {
                    autoMsgImgSize(img, 400, 300);
                };
                document.getElementById("msgImage").style.display = "block";
                document.getElementById("msgImage").appendChild(img);
                return false;
            }; // data url!
            reader.readAsDataURL(blob);
        }
    }
});

document.onkeydown=function(e){
    var isIE = (document.all) ? true : false;
    var key;
    if(isIE) {
        key = window.event.keyCode;
    } else {
        key = e.which;
    }
    if(key ==8 || key == 46) {
        $("#msgImage").html("");
    }
    if(key == 13) {
        sendMsgBySend();
        e.preventDefault();
    }
};

function sortRoomList(jqElement)
{
    var chatSessionRows = $(".chatsession-row");
    var chatSessionRowsLength = chatSessionRows.length;
    var i;
    for(i=0; i<chatSessionRowsLength; i++) {
        var node = chatSessionRows[i];
        $(node).removeClass("chatsession-row-up");
    }

    jqElement.addClass("chatsession-row-up");

    var activeNode = $(".chatsession-row-up");
    var activeNum = 0;
    var i;
    for(i=0; i<chatSessionRowsLength; i++) {
        var node = chatSessionRows[i];
        if($(node).hasClass("chatsession-row-up")) {
            activeNum = i;
            if(activeNum != 0) {
                $(node).remove();
            }
        }
    }
    if(activeNum != 0) {
        $(activeNode).insertBefore($(".chatsession-row")[0]);
    }
}

$(document).on("click", ".quit-group", function () {
    var tip = $.i18n.map['quitGroupJsTip'] != undefined ? $.i18n.map['quitGroupJsTip']: "退出群组?";

    if(confirm(tip)) {
        var groupId = localStorage.getItem(chatSessionIdKey);
        var action = "api.group.quit";
        var reqData = {
            "groupId": groupId
        };
        handleClientSendRequest(action, reqData, handleDeleteOrQuitGroup);
    }
});

$(document).on("click", ".delete-group", function () {
    var tip = $.i18n.map['disbandGroupJsTip'] != undefined ? $.i18n.map['disbandGroupJsTip']: "解散群?";
    if(confirm(tip)) {
        var groupId = localStorage.getItem(chatSessionIdKey);
        var action = "api.group.delete";
        var reqData = {
            "groupId": groupId
        };
        handleClientSendRequest(action, reqData, handleDeleteOrQuitGroup);
    }
});

function handleDeleteOrQuitGroup() {
    var groupId = localStorage.getItem(chatSessionIdKey);
    localStorage.removeItem(groupId);
    localStorage.setItem(chatSessionIdKey, "");
    localStorage.removeItem(roomKey + groupId);
    localStorage.removeItem(roomMsgUnReadNum + groupId);
    removeRoomFromRoomList(groupId);
    getRoomList();
}


window.onresize = function(){
    if(!judgeDefaultChat()) {
        return ;
    }
    try{
        if ($(".right-head")[0].clientWidth<680) {
            $(".right-body-sidebar").hide();
        }
    }catch (error) {
        // console.log(error.message);
    }
}

$(document).on("click", ".cancle_invite_people", function () {
    removeWindow($("#group-invite-people"));
});

$(document).on("click", ".del_select_people", function () {
    var userId = $(this).attr("user-id");
    $(this).parent().remove();
    var selectHtml = '<img src="../../public/img/msg/member_unselect.png" /> ';
    $("."+userId).find(".select_people").attr("is_select", "not_selected");
    $("."+userId).find(".select_people").html(selectHtml);
});

$(document).on("click", ".pw-left .choose-member", function(){
    var isSelect = $(this).find(".select_people").attr("is_select");
    if(isSelect != "is_select") {
        var userId = $(this).attr("user-id");
        var selectHtml = '<img src="../../public/img/msg/member_select.png" /> ';
        $(this).find(".select_people").attr("is_select", "is_select");
        $(this).find(".select_people").html(selectHtml);
        var obj = $(this).clone();
        obj.find(".select_people").remove();
        var html = '<div class="pw-contact-row-checkbox del_select_people " user-id="'+userId+'"> <img src="../../public/img/msg/btn-x.png" /> </div>';
        obj.append(html);
        obj.appendTo(".pw-right-body");
    } else {
        var userId = $(this).attr("user-id");
        $(".pw-right .pw-right-body ."+userId).remove();
        var selectHtml = '<img src="../../public/img/msg/member_unselect.png" /> ';
        $(this).find(".select_people").attr("is_select", "no_select");
        $(this).find(".select_people").html(selectHtml);
    }
});



$(document).on("click", ".add_member_to_group", function () {
    var rowList = $(".pw-right-body .pw-contact-row");
    var userIds = [];
    rowList.each(function(index, row) {
        var userId = $(row).attr("user-id");
        userIds.push(userId);
    });
    var groupId = localStorage.getItem(chatSessionIdKey);

    addMemberToGroup(userIds, groupId)

});

function addMemberToGroup(userIds, groupId)
{
    var action  = "api.group.invite";
    var reqData = {
        "groupId": groupId,
        "userIds" : userIds,
    }
    handleClientSendRequest(action, reqData, handleAddMemberToGroup);
}

function handleAddMemberToGroup()
{
    window.location.reload();
    syncMsgForRoom();
}

$(document).on("click", ".create-group-btn", function () {
    $(".group_name").val('');
    showWindow($("#create-group"));
});

$(document).on("click", ".create_group_button" , function(){
    createGroup();
});

function createGroupByKeyDown(event)
{

    if(checkIsEnterBack(event) == false) {
        return;
    }
    createGroup();
}

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

function createGroup()
{
    var groupName = $(".group_name").val();
    if(groupName.length > 10 || groupName.length < 1) {
        ////TODO 换成 页面漂浮报错
        var tip = $.i18n.map['createGroupNameTip'] != undefined ? $.i18n.map['createGroupNameTip']: "群组名称长度限制1-10";
        alert(tip);
        return false;
    }
    removeWindow($("#create-group"));
    var reqData = {
        "groupName" : groupName,
    };
    var action = "api.group.create";
    handleClientSendRequest(action, reqData, groupCreateSuccess);
}

function groupCreateSuccess(results) {
    var groupProfile = results.profile["profile"];

    localStorage.setItem(chatSessionIdKey, groupProfile.id);
    localStorage.setItem(groupProfile.id, GROUP_MSG);

    var groupName = groupProfile.name;
    groupName = template("tpl-string", {
        string : groupName
    });

    $(".chatsession-title").html(groupName);
    handleGetGroupProfile(results);
    insertGroupRoom(groupProfile.id, groupProfile.name);
    handleMsgRelation(undefined, groupProfile.id);
    $(".l-sb-item[data='chatSession']").click();
}

function insertGroupRoom(groupId, groupName)
{
    var msg = {
        "fromUserId": token,
        "name" : groupName,
        "timeServer": Date.parse(new Date()),
        "roomType": GROUP_MSG,
        "toGroupId": groupId,
        "type": "MessageText",
        "text": {
            "body": ""
        },
        "className": "group-profile",
        "chatSessionId": groupId
    };
    msg = handleMsgInfo(msg);
    appendOrInsertRoomList(msg, true, false);
}

$(document).on("click", ".group_cancle", function(){
    $(".group_name").val("");
});

$(document).on("click", ".group-user-img", function(){
    var groupId = localStorage.getItem(chatSessionIdKey);

    var userId = $(this).attr("userId");
    var node = $(this)[0].parentNode.nextSibling.nextSibling;
    $("#group-user-menu").attr("userId", userId);

    var groupProfile = getGroupProfile(groupId);
    var isOwner = groupProfile.memberType == GroupMemberType.GroupMemberOwner ? 1 : 0;
    var isAdmin = groupProfile.memberType == GroupMemberType.GroupMemberAdmin || isOwner ? 1 : 0 ;
    var memberIsAdmin = checkGroupMemberAdminType(userId, groupProfile);
    var memberIsSpeaker = checkGroupMemberSpeakerType(userId, groupProfile);
    var isFriend = localStorage.getItem(friendRelationKey+userId) == FriendRelation.FriendRelationFollow ? 1 : 0;
    var html = template("tpl-group-user-menu", {
        userId : userId,
        isFriend : isFriend,
        isOwner:isOwner,
        isAdmin:isAdmin,
        memberIsSpeaker:memberIsSpeaker == false ? false : true,
        memberIsAdmin:memberIsAdmin == false ? false : true,
    });
    html = handleHtmlLanguage(html);
    $(node).append($(html));
});


function checkGroupMemberCanSpeaker(userId, groupProfile)
{
    var users;
    var speakersAll=false;
    var usersJsonStr = localStorage.getItem(speakerUserIdsKey+groupProfile.id);
    if(groupProfile.hasOwnProperty("speakers")) {
        speakersAll = groupProfile.speakers;
    }
    var isCanSpeak = false;

    if((usersJsonStr == false || usersJsonStr == "undefined") && (speakersAll == false)) {
        return isCanSpeak;
    }

   if(usersJsonStr != false && usersJsonStr != "undefined" && usersJsonStr != null) {
       users = JSON.parse(usersJsonStr);
       if(users != null ){
           var length = users.length;
           for(var i=0; i<length; i++) {
               var speakerUserId = users[i];
               if(speakerUserId == userId) {
                   isCanSpeak = true;
               }
           }
       }
   }
    return isCanSpeak;
}

function checkGroupMemberSpeakerType(userId, groupProfile)
{
    var users = groupProfile.speakers;
    if(users == null ){
        return false;
    }
    var length = users.length;
    var i;
    for(i=0; i<length; i++) {
        var user = users[i];
        if(user.userId == userId) {
            return user;
        }
    }
    return false;
}

function checkGroupMemberAdminType(userId, groupProfile)
{
    var users = groupProfile.admins;
    if(users == null ){
        return false;
    }
    var length = users.length;
    var i;
    for(i=0; i<length; i++) {
        var user = users[i];
        if(user.userId == userId) {
            return user;
        }
    }
    return false;
}

function checkGroupOwnerType(userId, groupProfile)
{
    var owner = groupProfile.owner;
    ///检查是否为群主
    if(owner.userId == userId) {
        return true;
    }
    return false;
}


function getGroupAdmins(groupProfile)
{
    var users = groupProfile.admins;
    var groupAdminId =[];
    if(users == null ){
        return false;
    }
    var length = users.length;
    var i;
    for(i=0; i<length; i++) {
        var user = users[i];
        groupAdminId.push(user.userId);
    }
    return groupAdminId;
}

function getGroupSpeakers(groupProfile)
{
    var groupSpeakerId = [];

    var users = groupProfile.speakers;
    if(users == null ){
        return groupSpeakerId;
    }
    var length = users.length;
    var i;
    for(i=0; i<length; i++) {
        var user = users[i];
        groupSpeakerId.push(user.userId);
    }
    return groupSpeakerId;
}

function  getGroupOwner(groupProfile)
{
    var owner = groupProfile.owner;
    return  owner.userId;
}


////设置新的聊天界面
$(document).on("click", "#open-temp-chat", function () {
    var node = $(this)[0].parentNode;
    var userId = $(node).attr("userId");
    sendFriendProfileReq(userId, openU2Chat);
});

function openU2Chat(result)
{
    handleGetFriendProfile(result);

    if(result == undefined) {
        return;
    }
    var profile = result.profile;

    if(profile != undefined && profile["profile"]) {
        var userProfile = profile["profile"];
        var userId = userProfile.userId;

        if(userId == undefined) {
            return ;
        }
        localStorage.setItem(chatSessionIdKey, userId);
        localStorage.setItem(userId, U2_MSG);
        $(".user-desc-body").html(userId);
        handleMsgRelation(undefined, userId);
        insertU2Room(userId);
    }
}

function insertU2Room(userId)
{
    var msg = {
        "fromUserId": token,
        "pointer": "78",
        "timeServer": Date.parse(new Date()),
        "roomType": "MessageRoomU2",
        "toUserId": userId,
        "type": "MessageText",
        "text": {
            "body": ""
        },
        "className": "u2-profile",
        "chatSessionId": userId,
    };
    msg = handleMsgInfo(msg);
    appendOrInsertRoomList(msg, true, false);
}

function displayProfile(profileId, profileType)
{
    var chatSessionId   = localStorage.getItem(chatSessionIdKey);

    if(profileId == chatSessionId) {
        displayCurrentProfile();
        return;
    }
   updateInfo(profileId, profileType);
}

function updateInfo(profileId, profileType)
{
    var name ;
    var mute;
    if(profileType == U2_MSG) {
        var friendProfile = getFriendProfile(profileId, false, handleGetFriendProfile);
        name = friendProfile != false && friendProfile != null ? friendProfile.nickname : "";
        getNotMsgImg(friendProfile.userId, friendProfile.avatar);
    } else {
        var groupProfile = getGroupProfile(profileId);
        var groupName = groupProfile != false && groupProfile != null ? groupProfile.name : "";
        name = groupName;
    }

    var muteKey= msgMuteKey+profileId;
    mute = localStorage.getItem(muteKey);
    var name = template("tpl-string", {
        string : name
    });

    $(".nickname_"+profileId).html(name);

    try{
        if(mute>0) {
            $(".room-chatsession-mute_"+profileId)[0].style.display = "block";
        } else {
            $(".room-chatsession-mute_"+profileId)[0].style.display = "none";
        }
    }catch (error) {
    }
}

function displayCurrentProfile()
{
    try{
        var chatSessionId   = localStorage.getItem(chatSessionIdKey);
        var chatSessionType = localStorage.getItem(chatSessionId);

        var muteKey = msgMuteKey + chatSessionId;
        var mute = localStorage.getItem(muteKey);

        if(chatSessionType == U2_MSG) {
            $(".group-profile-desc")[0].style.visibility = "hidden";
            $(".user-profile-desc")[0].style.visibility = "visible";
            $(".user-profile-desc")[0].style.width = "100%";
            $(".invite_people")[0].style.visibility="hidden";
            $(".add_friend")[0].style.display="inline";
            $(".user-image-for-add").addClass("info-avatar-"+chatSessionId);

            var friendProfile = getFriendProfile(chatSessionId, false, handleGetFriendProfile);

            if(friendProfile) {
                var nickname = friendProfile.nickname;
                nickname = template("tpl-string", {
                    string : nickname
                });
                $(".chatsession-title").html(nickname);
                $(".user-desc-body").html(nickname);
            } else {
                $(".chatsession-title").html("");
                $(".user-desc-body").html("");
            }
            $(".chat_session_id_"+chatSessionId).addClass("chatsession-row-active");
            var relationKey = friendRelationKey + chatSessionId;
            var relation = localStorage.getItem(relationKey) ;
            if(relation == FriendRelation.FriendRelationFollow) {
                $(".delete-friend")[0].style.display = "flex";
                $(".add-friend")[0].style.display = "none";
                $(".add_friend")[0].style.display = "none";
                $(".edit-remark")[0].style.display = "flex";
                $(".mute-friend")[0].style.display = "flex";
            } else {
                $(".delete-friend")[0].style.display = "none";
                $(".add-friend")[0].style.display = "flex";
                $(".edit-remark")[0].style.display = "none";
                $(".mute-friend")[0].style.display = "none";
                $(".add_friend")[0].style.display = "inline";
            }

            getNotMsgImg(friendProfile.userId, friendProfile.avatar);

            if(mute == 1) {
                $(".friend_mute").attr("src", "../../public/img/msg/icon_switch_on.png");
                $(".friend_mute").attr("is_on", "on");
            } else {
                $(".friend_mute").attr("src", "../../public/img/msg/icon_switch_off.png");
                $(".friend_mute").attr("is_on", "off");
            }

        } else {
            $(".group-profile-desc")[0].style.visibility = "visible";
            $(".group-profile-desc")[0].style.width = "100%";
            $(".user-profile-desc")[0].style.visibility = "hidden";
            $(".invite_people")[0].style.visibility="visible";
            $(".add_friend")[0].style.display = "none";

            var groupProfile = getGroupProfile(chatSessionId);
            getNotMsgImg(groupProfile.id, groupProfile.avatar);

            if(groupProfile != false && groupProfile != null) {
                var groupName = groupProfile.name
                groupName = template("tpl-string", {
                    string : groupName
                });
                $(".chatsession-title").html(groupName);
                $(".nickname_"+groupProfile.id).html(groupName);
                $(".groupName").html(groupName);
            }

            $("#share_group").removeClass();
            $("#share_group").addClass("info-avatar-"+groupProfile.id);

            $(".group-desc-body").html("");

            try{
                if(groupProfile!=false && groupProfile!= null && groupProfile.hasOwnProperty("description")) {
                    var descBody = groupProfile.description["body"];
                    if(descBody != undefined && groupProfile.description['type'] == GroupDescriptionType.GroupDescriptionMarkdown) {
                        var md = window.markdownit();
                        descBody = md.render(descBody);
                        $(".mark_down").attr("src", "../../public/img/msg/icon_switch_on.png");
                        $(".mark_down").attr("is_on", "on");
                    } else {
                        descBody = template("tpl-string", {
                            string:descBody
                        });
                        $(".mark_down").attr("src", "../../public/img/msg/icon_switch_off.png");
                        $(".mark_down").attr("is_on", "off");
                    }

                    $(".group-desc-body").html(descBody);
                } else {
                    $(".mark_down").attr("src", "../../public/img/msg/icon_switch_off.png");
                    $(".mark_down").attr("is_on", "off");
                }
            }catch (error) {

            }
            getGroupMembers(0, 18, displayGroupMemberForGroupInfo);

            try{
                var permissionJoin = groupProfile.permissionJoin;
                var memberType = groupProfile != false && groupProfile != null ? groupProfile.memberType : GroupMemberType.GroupMemberGuest ;
                switch (memberType) {
                    case GroupMemberType.GroupMemberOwner:
                        $('.invite_people')[0].style.display = "inline";
                        $('.quit-group')[0].style.display = "none";
                        $('.delete-group')[0].style.display = "flex";
                        $('.permission-join')[0].style.display = "flex";
                        $(".can-guest-read-message")[0].style.display = "flex";
                        $('.remove_member')[0].style.display = "flex";
                        $(".mute-group")[0].style.display = "flex";
                        $(".group-introduce").attr("disabled", false);
                        $(".save_group_introduce")[0].style.display = "flex";
                        $(".mark-down-group")[0].style.display = "flex";
                        break;
                    case GroupMemberType.GroupMemberAdmin:
                        $('.invite_people')[0].style.display = "inline";
                        $('.quit-group')[0].style.display = "flex";
                        $('.delete-group')[0].style.display = "none";
                        $('.remove_member')[0].style.display = "none";
                        $('.permission-join')[0].style.display = "flex";
                        $(".can-guest-read-message")[0].style.display = "none";
                        $(".mute-group")[0].style.display = "flex";
                        $(".group-introduce").attr("disabled", "disabled");
                        $(".save_group_introduce")[0].style.display = "none";
                        $(".mark-down-group")[0].style.display = "none";
                        $('.permission-join')[0].style.display = "none";
                        break;
                    case GroupMemberType.GroupMemberNormal:
                        if(permissionJoin == GroupJoinPermissionType.GroupJoinPermissionMember
                            || permissionJoin == GroupJoinPermissionType.GroupJoinPermissionPublic){
                            $('.invite_people')[0].style.display = "inline";
                        } else {
                            $('.invite_people')[0].style.display = "none";
                        }

                        $('.permission-join')[0].style.display = "none";
                        $('.quit-group')[0].style.display = "flex";
                        $('.delete-group')[0].style.display = "none";
                        $('.remove_member')[0].style.display = "none";
                        $(".can-guest-read-message")[0].style.display = "none";
                        $(".mute-group")[0].style.display = "flex";
                        $(".group-introduce").attr("disabled", "disabled");
                        $(".save_group_introduce")[0].style.display = "none";
                        $(".mark-down-group")[0].style.display = "none";
                        break;
                    case GroupMemberType.GroupMemberGuest:
                        $('.quit-group')[0].style.display = "none";
                        $('.delete-group')[0].style.display = "none";
                        $('.remove_member')[0].style.display = "none";
                        $('.permission-join')[0].style.display = "none";
                        $(".can-guest-read-message")[0].style.display = "none";
                        $(".mute-group")[0].style.display = "none";
                        $(".group-introduce").attr("disabled", "disabled");
                        $(".save_group_introduce")[0].style.display = "none";
                        $(".mark-down-group")[0].style.display = "none";
                        break;
                }
            } catch (error) {

            }

            if(mute == 1) {
                $(".group_mute").attr("src", "../../public/img/msg/icon_switch_on.png");
                $(".group_mute").attr("is_on", "on");
                $(".room-chatsession-mute_"+groupProfile.id)[0].style.display = "block";
            } else {
                $(".group_mute").attr("src", "../../public/img/msg/icon_switch_off.png");
                $(".group_mute").attr("is_on", "off");
                $(".room-chatsession-mute_"+groupProfile.id)[0].style.display = "none";
            }

            var canGuestReadMsg = groupProfile != false && groupProfile != null ? groupProfile.canGuestReadMessage : 0;

            if(canGuestReadMsg == 1) {
                $(".can_guest_read_message").attr("src", "../../public/img/msg/icon_switch_on.png");
                $(".can_guest_read_message").attr("is_on", "on");
            } else {
                $(".can_guest_read_message").attr("src", "../../public/img/msg/icon_switch_off.png");
                $(".can_guest_read_message").attr("is_on", "off");
            }

        }
        $("."+chatSessionId).addClass("chatsession-row-active");
        updateInfo(chatSessionId, chatSessionType);
    }catch (error){
        // console.log(error.message)
    }
}


$(document).on("click", ".group-desc-body", function () {
    var length = $(".group-desc-body textarea").length;
    if(length >0){
        return ;
    }
    var groupId = localStorage.getItem(chatSessionIdKey);
    var groupProfile = getGroupProfile(groupId);
    var descBody = "";
    if(groupProfile != false && groupProfile!= null && groupProfile.hasOwnProperty("description")){
        descBody = groupProfile.description["body"];
    }
    descBody = descBody == undefined ? "" : descBody;
    var html = '<textarea class="group-introduce">'+descBody+'</textarea>';
    $(".group-desc-body").html(html);
});

$(document).mouseup(function(e){
    var targetId = e.target.id;
    var targetClassName = e.target.className;

    if(targetId == "wrapper-mask") {
        var wrapperMask = document.getElementById("wrapper-mask");
        var length = wrapperMask.children.length;
        var i;
        for(i=0;i<length; i++) {
            var node  = wrapperMask.children[i];
            node.remove();
            addTemplate(node);
        }
        wrapperMask.style.visibility = "hidden";
    }
    ////隐藏群组点击头像之后的弹出菜单
    if(targetClassName != "group-user-img" && targetClassName != "item p-2") {
        hideGroupUserMenu();
    }

    if(targetClassName != "emotion-item") {
        document.getElementById("emojies").style.display = "none";
    }
    if(targetId != "selfAvatarUploadDiv" && targetId != "selfNickname" && targetId != "logout" && targetId != "logout-span"
        && targetId != "self-qrcode" && targetId != "user-image-upload" && targetId != "user-img-carmera"
        &&targetClassName != "nickNameDiv" && targetId !="selfQrcodeDiv" && targetId !="selfQrcodeCanvas" && targetId != "selfQrcode"
        && targetClassName != "self-qrcode") {
        $("#selfInfo").remove();
    }
});


function hideGroupUserMenu()
{
    var groupUserMenu = document.getElementById("group-user-menu");
    if(groupUserMenu) {
        groupUserMenu.remove();
        addTemplate(groupUserMenu);
    }
}

$(document).on("click", ".edit-remark", function () {
    var userId = localStorage.getItem(chatSessionIdKey);
    $("#edit-remark").attr("userId", userId);
    var userProfile = getFriendProfile(userId, false, handleGetFriendProfile);
    if(userProfile) {
        $(".remark_name").val(userProfile['nickname']);
    }
    showWindow($('#edit-remark'));
});

/// update group Profile
$(document).on("click", ".permission-join", function () {
    var groupId = localStorage.getItem(chatSessionIdKey);
    var currentGroupProfileJson = localStorage.getItem(profileKey+groupId);
    var currentGroupProfile  = JSON.parse(currentGroupProfileJson);
    var permissionJoin = currentGroupProfile.permissionJoin;

    var imgDivs = $(".imgDiv");
    var length = imgDivs.length;
    for(i=0;i<length;i++){
        var node = imgDivs[i];
        if($(node).attr("permissionJoin") == permissionJoin) {
            $(node).attr("src",  "../../public/img/msg/member_select.png");
            $(node).addClass("permission-join-select");
        } else  {
            $(node).attr("src",  "../../public/img/msg/member_unselect.png");
            $(node).removeClass("permission-join-select");
        }
    }

    showWindow($("#permission-join"));
});

$(document).on("click", ".can_guest_read_message", function () {
    var groupId = localStorage.getItem(chatSessionIdKey);
    var canRead = $(".can_guest_read_message").attr("is_on");

    if(canRead == "on") {
        $(".can_guest_read_message").attr("is_on", "off");
        $(".can_guest_read_message").attr("src", "../../public/img/msg/icon_switch_off.png");
        canRead = false;
    } else {
        $(".can_guest_read_message").attr("is_on", "on");
        $(".can_guest_read_message").attr("src", "../../public/img/msg/icon_switch_on.png");
        canRead = true;
    }

    var values = {
        type : ApiGroupUpdateType.ApiGroupUpdateCanGuestReadMessage,
        writeType:DataWriteType.WriteUpdate,
        canGuestReadMessage :canRead,
    }
    updateGroupProfile(groupId, values);
});


$(document).on("click", ".mark_down", function () {
    var isMarkDown = $(".mark_down").attr("is_on");
    if(isMarkDown == "on") {
        $(".mark_down").attr("is_on", "off");
        $(".mark_down").attr("src", "../../public/img/msg/icon_switch_off.png");
    } else {
        $(".mark_down").attr("is_on", "on");
        $(".mark_down").attr("src", "../../public/img/msg/icon_switch_on.png");
    }
});

$(document).on("click", ".save_group_introduce", function () {
    var groupId = localStorage.getItem(chatSessionIdKey);
    var groupDesc = $(".group-introduce").val();

    var isMarkDown = $(".mark_down").attr("is_on");
    var type = isMarkDown == "on" ? GroupDescriptionType.GroupDescriptionMarkdown : GroupDescriptionType.GroupDescriptionText;
    var values = {
        type : ApiGroupUpdateType.ApiGroupUpdateDescription,
        writeType:DataWriteType.WriteUpdate,
        description : {
            type: type,
            body: groupDesc
        }
    }
    updateGroupProfile(groupId, values);
});

$(document).on("click", ".imgDiv", function () {
    var imgDivs = $(".imgDiv");
    var length = imgDivs.length;
    for(i=0;i<length;i++){
        var node = imgDivs[i];
        $(node).attr("src", "../../public/img/msg/member_unselect.png");
        $(node).removeClass("permission-join-select");
    }
    $(this).attr("src",  "../../public/img/msg/member_select.png");
    $(this).addClass("permission-join-select");
});

$(document).on("click", ".save-permission-join", function () {
    var groupId = localStorage.getItem(chatSessionIdKey);

    var permissionJoin = $(".permission-join-select").attr("permissionJoin");
    var values = {
        type : ApiGroupUpdateType.ApiGroupUpdatePermissionJoin,
        writeType:DataWriteType.WriteUpdate,
        permissionJoin : permissionJoin,
    };
    removeWindow($("#permission-join"));
    updateGroupProfile(groupId, values);
});


$(document).on("click", "#set-admin", function () {
    var groupId = localStorage.getItem(chatSessionIdKey);
    var node = $(this)[0].parentNode;
    var userId = $(node).attr("userId");
    var adminUserIds = [];
    ////追加操作
    var tip = $.i18n.map['setAdminJsTip'] != undefined ? $.i18n.map['setAdminJsTip']: "设置管理员";
    if(confirm(tip)) {
        adminUserIds.push(userId);
        var values = {
            type : ApiGroupUpdateType.ApiGroupUpdateAdmin,
            writeType:DataWriteType.WriteAdd,
            adminUserIds : adminUserIds,
        }
        updateGroupProfile(groupId, values);
        removeWindow($("#group-user-menu"));
    }
});

$(document).on("click", "#remove-admin", function () {
    var groupId = localStorage.getItem(chatSessionIdKey);
    var node = $(this)[0].parentNode;
    var userId = $(node).attr("userId");
    var adminUserIds = [];
    ////追加操作
    var tip = $.i18n.map['removeAdminJsTip'] != undefined ? $.i18n.map['removeAdminJsTip']: "移除管理员";
    if(confirm(tip)) {
        adminUserIds.push(userId);
        var values = {
            type : ApiGroupUpdateType.ApiGroupUpdateAdmin,
            writeType:DataWriteType.WriteDel,
            adminUserIds : adminUserIds,
        }
        updateGroupProfile(groupId, values);
        removeWindow($("#group-user-menu"));
    }
});

$(document).on("click", "#set-speaker", function () {
    var groupId = localStorage.getItem(chatSessionIdKey);
    var node = $(this)[0].parentNode;
    var userId = $(node).attr("userId");
    var speakerUserIds = [];
    ////追加操作
    var tip = $.i18n.map['setSpeakerJsTip'] != undefined ? $.i18n.map['setSpeakerJsTip']: "设置发言人";
    if(confirm(tip)) {
        speakerUserIds.push(userId);
        updateGroupSpeaker(groupId, speakerUserIds, SetSpeakerType.AddSpeaker, handleSetSpeaker);
        removeWindow($("#group-user-menu"));
    }
});

function updateGroupSpeaker(groupId, speakerUserIds, type, callback)
{
    var action = "api.group.setSpeaker";
    var reqData;
    if(speakerUserIds.length > 0 ) {
        reqData = {
            "groupId": groupId,
            "setType" : type,
            "speakerUserIds" :speakerUserIds,
        }
    } else {
        reqData = {
            "groupId": groupId,
            "setType" : type,
        }
    }

    handleClientSendRequest(action, reqData, callback);
}

function handleSetSpeaker(result)
{
    try{
        var speakerUserIds = result.speakerUserIds;
        var speakerKey = speakerUserIdsKey+localStorage.getItem(chatSessionIdKey);
        localStorage.setItem(speakerKey, JSON.stringify(speakerUserIds));
        var groupId = localStorage.getItem(chatSessionIdKey);
        sendGroupProfileReq(groupId, handleGetGroupProfile);
    }catch (error) {

    }
}
addSpeakerInfo=[];

function handleAddSpeaker()
{
    var groupId = localStorage.getItem(chatSessionIdKey);
    var groupProfile = getGroupProfile(groupId);

    var isAdmin = false;
    if(checkGroupMemberAdminType(token, groupProfile)) {
        isAdmin = true;
    }
    if(checkGroupOwnerType(token, groupProfile)){
        isAdmin = true;
    }

    var addSpeakerIdLenght = addSpeakerInfo.length;
    for(var i=0; i<addSpeakerIdLenght; i++) {
        var speakerInfo = addSpeakerInfo[i];
        $("."+speakerInfo.userId).remove();
        var html = template("tpl-speaker-member",{
            nickname:speakerInfo.nickname,
            userId:speakerInfo.userId,
            avatar:speakerInfo.avatar,
            isSpeaker:true,
            isType:"member",
            isAdmin:isAdmin
        });
        html = handleHtmlLanguage(html);
        $(".speaker-people-div").append(html);
        getNotMsgImg(speakerInfo.userId, speakerInfo.avatar)
    }
    addSpeakerInfo=[];
    sendGroupProfileReq(groupId, handleGetGroupProfile);
}

$(document).on("click", ".add_speaker_btn", function () {
    var userId = $(this).attr("userId");
    var groupId = localStorage.getItem(chatSessionIdKey);
    var speakerUserIds = [];
    speakerUserIds.push(userId);
    var speakerInfo = {
        userId:userId,
        nickname:$(this).attr("nickname"),
        avatar:$(this).attr("avatar"),
    }
    addSpeakerInfo.push(speakerInfo);
    updateGroupSpeaker(groupId, speakerUserIds, SetSpeakerType.AddSpeaker, handleAddSpeaker)
});

deleteSpeakerInfo=[];
function handleRemoveSpeaker()
{
    var delSpeakerLength=deleteSpeakerInfo.length;

    var groupId = localStorage.getItem(chatSessionIdKey);
    var groupProfile = getGroupProfile(groupId);

    var isAdmin = false;
    if(checkGroupMemberAdminType(token, groupProfile)) {
        isAdmin = true;
    }
    if(checkGroupOwnerType(token, groupProfile)){
        isAdmin = true;
    }
    for(var i=0; i<delSpeakerLength; i++) {
        var speakerInfo = deleteSpeakerInfo[i];
        $("."+speakerInfo.userId).remove();
        var html = template("tpl-speaker-member",{
            nickname:speakerInfo.nickname,
            userId:speakerInfo.userId,
            avatar:speakerInfo.avatar,
            isSpeaker:false,
            isType:"member",
            isAdmin:isAdmin
        });
        html = handleHtmlLanguage(html);
        $(".speaker-group-member-div").append(html);
        getNotMsgImg(speakerInfo.userId, speakerInfo.avatar)
    }
    deleteSpeakerInfo=[];
    sendGroupProfileReq(groupId, handleGetGroupProfile);
}

$(document).on("click", ".remove_speaker_btn", function () {
    var userId = $(this).attr("userId");
    var groupId = localStorage.getItem(chatSessionIdKey);
    var speakerUserIds = [];
    speakerUserIds.push(userId);
    var speakerInfo = {
        userId:userId,
        nickname:$(this).attr("nickname"),
        avatar:$(this).attr("avatar"),
    }
    deleteSpeakerInfo.push(speakerInfo);
    updateGroupSpeaker(groupId, speakerUserIds, SetSpeakerType.RemoveSpeaker, handleRemoveSpeaker)
});

$(document).on("click", ".remove-all-speaker", function () {
    var removeSpeakers = $(".remove-speaker");
    var removeSpeakersLength = removeSpeakers.length;
    var groupId = localStorage.getItem(chatSessionIdKey);
    for(var i=0; i<removeSpeakersLength;i++) {
        var speakers = removeSpeakers[i];
        var userId = $(speakers).attr("userId");
        var speakerInfo = {
            userId:userId,
            nickname:$(speakers).attr("nickname"),
            avatar:$(speakers).attr("avatar"),
        }
        deleteSpeakerInfo.push(speakerInfo);
    }
    updateGroupSpeaker(groupId, [], SetSpeakerType.CloseSpeaker, handleRemoveSpeaker)
});

$(document).on("click", "#remove-speaker", function () {
    var groupId = localStorage.getItem(chatSessionIdKey);
    var node = $(this)[0].parentNode;
    var userId = $(node).attr("userId");
    var speakerUserIds = [];
    ////追加操作
    var tip = $.i18n.map['removeSpeakerJsTip'] != undefined ? $.i18n.map['removeSpeakerJsTip']: "确定要移除发言权限?";
    if(confirm(tip)) {
        speakerUserIds.push(userId);
        updateGroupSpeaker(groupId, speakerUserIds, SetSpeakerType.RemoveSpeaker, handleSetSpeaker);
        removeWindow($("#group-user-menu"));
        sendGroupProfileReq(groupId, handleGetGroupProfile);
    }
});


$(document).on("click", ".group_mute", function () {
    var groupId = localStorage.getItem(chatSessionIdKey);
    var mute = $(".group_mute").attr("is_on");

    clearRoomUnreadMsgNum(groupId);

    if(mute == "on") {
        $(".group_mute").attr("is_on", "off");
        $(".group_mute").attr("src", "../../public/img/msg/icon_switch_off.png");
        mute = false;
    } else {
        $(".group_mute").attr("is_on", "on");
        $(".group_mute").attr("src", "../../public/img/msg/icon_switch_on.png");
        mute = true;
    }

    var values = {
        type : ApiGroupUpdateType.ApiGroupUpdateIsMute,
        writeType:DataWriteType.WriteUpdate,
        isMute :mute,
    }
    updateGroupProfile(groupId, values);
});

function updateGroupProfile(groupId, values)
{
    var reqValues = [];
    reqValues.push(values);

    var action = "api.group.update";
    var reqData = {
        "groupId": groupId,
        "values" :reqValues,
    }
    handleClientSendRequest(action, reqData, handleGetGroupProfile);
}

//添加好友
$(document).on("click", ".add-friend-btn", function(){
    var userId = localStorage.getItem(chatSessionIdKey);
    $("#add-friend-div").attr("userId", userId);
    sendFriendProfileReq(userId, displayAddFriend);
});

$(document).on("click", "#add-friend", function () {
    var node = $(this)[0].parentNode;
    var userId = $(node).attr("userId");
    sendFriendProfileReq(userId, displayAddFriend);
});

function displayAddFriend(result)
{
    handleGetFriendProfile(result);
    if(result == undefined) {
        return;
    }
    var profile = result.profile;

    if(profile != undefined && profile["profile"]) {
        var friendProfile = profile["profile"];
        $("#add-friend-div").attr("userId", friendProfile.userId);
        var html = template("tpl-add-friend-div", {
            nickname: friendProfile.nickname,
            userId : friendProfile.userId,
        });
        $("#add-friend-div").html(html);
        getNotMsgImg(friendProfile.userId, friendProfile.avatar);
        showWindow($('#add-friend-div'));
    }
}


$(document).on("click", ".apply-friend", function () {
    $(this)[0].style.disabled = "disabled";
    applyFriend();
});

function addFriendByKeyDown(event)
{
    if(checkIsEnterBack(event)) {
        applyFriend();
    }
}

function applyFriend() {
    var userId = $("#add-friend-div").attr("userId");
    var greetings = $(".apply-friend-reason").val();
    sendFriendApplyReq(userId, greetings, handleApplyFriend);
}

function sendFriendApplyReq(userId, greetings, callback)
{
    var action = "api.friend.apply";
    var reqData  = {
        "toUserId" : userId,
        "greetings" : greetings,
    };
    handleClientSendRequest(action, reqData, callback)
}

function handleApplyFriend(results)
{
    removeWindow($("#add-friend-div"));
}

////好友申请

applyFriendListOffset = 0;

$(document).on("click", ".apply-friend-list", function () {
    addActiveForPwContactRow($(this));
    applyFriendListOffset = 0;
    getFriendApplyList();
});

function getFriendApplyList()
{
    if(!judgeDefaultChat()) {
        return ;
    }
    var action = "api.friend.applyList";
    var reqData = {
        "offset" : 0,
        "count" : defaultCountKey,
    }
    handleClientSendRequest(action, reqData, handleApplyFriendList)
}

$(function () {
    if(!judgeDefaultChat()) {
        return ;
    }
    $(".friend-right-body").scroll(function () {
        var pwLeft = $(".friend-right-body")[0];
        var ch  = pwLeft.clientHeight;
        var sh = pwLeft.scrollHeight;
        var st = $('.friend-right-body').scrollTop();

        ////文档的高度-视口的高度-滚动条的高度
        if((sh - ch - st) == 0){
            var action = "api.friend.applyList";
            var reqData = {
                "offset" : applyFriendListOffset,
                "count" : defaultCountKey,
            }
            handleClientSendRequest(action, reqData, getApplyFriendListHtml);
        }
    });
});


function handleApplyFriendList(results)
{
    $(".friend-right-body").html("");
    getApplyFriendListHtml(results);
    var data = $(".l-sb-item-active").attr("data");
    if(data == "friend") {
        displayRightPage(DISPLAY_APPLY_FRIEND_LIST);
    }
    displayRoomListMsgUnReadNum();

}

function getApplyFriendListHtml(results)
{
    var lists = results.list;
    var html = "";
    setFriendListTip(results.totalCount);
    if(lists) {
        applyFriendListOffset = Number(applyFriendListOffset + defaultCountKey);
        var length = lists.length;
        for (i = 0; i < length; i++) {
            var applyInfo = lists[i];
            var user = applyInfo.public;
            html = template("tpl-apply-friend-info", {
                greetings : applyInfo.greetings,
                userId : user.userId,
                nickname : user.hasOwnProperty('nickname') ? user.nickname : defaultUserName
            });
            html = handleHtmlLanguage(html);
            $(".friend-right-body").append(html);
            getNotMsgImg(user.userId, user.avatar)
        }
    }
}

function handleHtmlLanguage(html)
{
    $(html).find("[data-local-value]").each(function () {
        var changeHtmlValue = $(this).attr("data-local-value");
        var valueHtml = $(this).html();
        var newValueHtml = $.i18n.map[changeHtmlValue];
        if(newValueHtml != undefined && newValueHtml != "" && newValueHtml != false) {
            html = html.replace(valueHtml, newValueHtml);
        }
    });

    $(html).find("[data-local-placeholder]").each(function () {
        var placeholderValue = $(this).attr("data-local-placeholder");
        var placeholder = $(this).attr("placeholder");
        var newPlaceholder = $.i18n.map[placeholderValue];
        if(newPlaceholder != undefined && newPlaceholder != false && newPlaceholder != "") {
            html = html.replace(placeholder, newPlaceholder);
        }
    });

    return html;
}

function setFriendListTip(count)
{
    localStorage.setItem(applyFriendListNumKey, count);
}

function deleteFriendListTip()
{
    var count = localStorage.getItem(applyFriendListNumKey) ? Number(localStorage.getItem(applyFriendListNumKey)) : 0;
    count = (count-1>0) ? (count-1) : 0;
    localStorage.setItem(applyFriendListNumKey, count);
    displayApplyFriendNum();
}


$(document).on("click", ".refused-apply", function () {
    var node =  $(this)[0].parentNode;
    var tip = $.i18n.map['refuseFriendJsTip'] != undefined ? $.i18n.map['refuseFriendJsTip']: "确定拒绝对方?";
    if(confirm(tip)) {
        friendApplyAccept($(node), false);
    }
});

$(document).on("click", ".agreed-apply", function () {
    var node =  $(this)[0].parentNode;
    var tip = $.i18n.map['agreeFriendJsTip'] != undefined ? $.i18n.map['agreeFriendJsTip']: "确定同意对方的好友申请?";
    if(confirm(tip)) {
        friendApplyAccept($(node), true);
    }
});

function friendApplyAccept(jqElement, agree)
{
    var userId = jqElement.attr("userId");
    var action = "api.friend.accept";
    var reqData = {
        applyUserId : userId,
        agree : agree
    };
    handleClientSendRequest(action, reqData, handleFriendApplyAccept(jqElement));
}

function handleFriendApplyAccept(jqElement)
{
    jqElement[0].parentNode.parentNode.parentNode.parentNode.remove();
    deleteFriendListTip();
}


$(document).on("click", "#logout", function (event) {
    logout(event);
});

function logout(event)
{
    event.stopPropagation();
    var tip = $.i18n.map['logoutJsTip'] != undefined ? $.i18n.map['logoutJsTip']: "退出账号，将会清空聊天记录";
    if(confirm(tip)) {
        $.ajax({
            method: "POST",
            url:"./index.php?action=page.logout",
            data: "",
            success:function (resp) {
                localStorage.clear();
                window.location.href = landingPageUrl;
            }
        });
    }
}

$(document).on("click", ".emotions", function () {
    document.getElementById("emojies").style.display = "block";
});

$(document).on("click", ".emotion-item", function () {
    var  html = $(this).html();
    var htmls = $(".msg_content").val() + html;
    $(".msg_content").val(htmls);
});

$(document).on("click", ".edit_remark_for_friend", function () {
     editFriendRemark();
});

function editFriendRemarkByKeyDown(event) {
    if(!checkIsEnterBack(event)) {
        return false;
    }
    editFriendRemark();
}


function editFriendRemark()
{
    var remarkName = $(".remark_name").val();
    var userId = $("#edit-remark").attr("userId");
    var value = {
        type :ApiFriendUpdateType.ApiFriendUpdateRemark,
        remark : remarkName,
    }
    removeWindow($("#edit-remark"));
    friendUpdate(userId, value);
}

$(document).on("click", ".friend_mute", function () {
    var userId = localStorage.getItem(chatSessionIdKey);
    var mute = $(".friend_mute").attr("is_on");
    clearRoomUnreadMsgNum(userId);
    if(mute == "on") {
        $(".friend_mute").attr("is_on", "off");
        $(".friend_mute").attr("src", "../../public/img/msg/icon_switch_off.png");
        mute = false;
    } else {
        $(".friend_mute").attr("is_on", "on");
        $(".friend_mute").attr("src", "../../public/img/msg/icon_switch_on.png");
        mute = true;
    }
    var value = {
        type :ApiFriendUpdateType.ApiFriendUpdateIsMute,
        isMute : mute,
    }
    friendUpdate(userId, value);
});

function friendUpdate(userId, value)
{
    var values = new Array();
    values.push(value);
    var reqData = {
        userId : userId,
        values : values
    };
    var action = 'api.friend.update';
    handleClientSendRequest(action, reqData, handleGetFriendProfile);
}

$(document).on("click", ".selfInfo", function () {
    var html = template("tpl-self-info", {
        userId:token,
        nickname:nickname,
        loginName:loginName,
    });
    html = handleHtmlLanguage(html);
    $(".wrapper").append(html);
    getNotMsgImg(token, avatar);
});

$(document).on("click", ".delete-friend", function () {
    var tip = $.i18n.map['deleteFriendJsTip'] != undefined ? $.i18n.map['deleteFriendJsTip']: "确定要删除好友么?";
    if(confirm(tip)){
        var userId = localStorage.getItem(chatSessionIdKey);
        var action = "api.friend.delete";
        var reqData = {
            toUserId : userId,
        };
        handleClientSendRequest(action, reqData, handleFriendDelete(userId))
    };
});

function handleFriendDelete(userId)
{
    var relation = friendRelationKey+userId;
    localStorage.setItem(relation, FriendRelation.FriendRelationFollowForWeb);
    displayCurrentProfile();
}

$(document).on("click", ".share-group", function () {
    $("#qrcodeCanvas").html("");

    var chatSessionId = localStorage.getItem(chatSessionIdKey);
    var groupProfile = getGroupProfile(chatSessionId);
    var groupName = groupProfile != false && groupProfile.name != "" ? groupProfile.name : $(".chatsession-title").html();


    var siteConfigJsonStr = localStorage.getItem(siteConfigKey);
    var siteName = "";
    if(siteConfigJsonStr ) {
        siteConfig = JSON.parse(siteConfigJsonStr);
        siteName = siteConfig.name;
    }

    var html = template("tpl-share-group-div", {
        siteName:siteName,
        groupName:groupName,
        groupId:chatSessionId
    });

    html = handleHtmlLanguage(html);
    $("#share_group").html(html);
    showWindow($("#share_group"));

    getNotMsgImg(chatSessionId, groupProfile.avatar);

    var src = $("#share_group").attr("src");

    if(src == "" || src == undefined) {
        src="../../public/img/msg/group_default_avatar.png";
    }
    var urlLink = changeZalySchemeToDuckChat(chatSessionId, "g");
    $("#share_group").attr("urlLink", urlLink);
    generateQrcode($('#qrcodeCanvas'),  urlLink, src, true, "group");
});

$(document).on("click",".copy-share-group", function(){
    var urlLink = $("#share_group").attr("urlLink");
    const input = document.createElement('input');
    document.body.appendChild(input);
    input.setAttribute('value', urlLink);
    input.select();
    if (document.execCommand('copy')) {
        document.execCommand('copy');
        alert('复制成功');
    }
    document.body.removeChild(input);

});

$(document).on("click", ".save-share-group", function () {
    downloadImgFormQrcode("groupQrcode");
});

$(document).on("click", "#selfQrcode", function () {
    downloadImgFormQrcode("selfQrcode");
});

function downloadImgFormQrcode(idName)
{
    var canvas = document.getElementById(idName);
    var image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream"); //Convert image to 'octet-stream' (Just a download, really)
    window.location.href = image;
}


function changeZalySchemeToDuckChat(chatSessionId, type)
{
    var siteConfigJsonStr = localStorage.getItem(siteConfigKey);
    var siteName = "";
    if(siteConfigJsonStr ) {
        siteConfig = JSON.parse(siteConfigJsonStr);
    }
    serverAddress = siteConfig.serverAddressForApi;

    var parser = document.createElement('a');
    parser.href = serverAddress;
    var domain = serverAddress;
    if(parser.protocol == 'zaly:') {
        var protocol = "duckchat:";
        var hostname = parser.hostname;
        var pathname = parser.pathname;
        domain =  protocol+"//"+hostname+pathname;
    }
    var urlLink = domain;
    if(chatSessionId != "") {
         urlLink = domain.indexOf("?") > -1 ? domain+"&x="+type+"-"+chatSessionId : domain+"/?x="+type+"-"+chatSessionId;
    }
    urlLink = jumpPage.indexOf("?") > -1 ? jumpPage+"&jumpUrl="+encodeURI(urlLink) :jumpPage+"?jumpUrl="+encodeURI(urlLink);
    return encodeURI(urlLink);
}

$(document).on("click", "#self-qrcode", function () {
    getSelfQrcode();
});

function getSelfQrcode() {
    $("#selfQrcodeDiv")[0].style.display = 'block';
    $("#selfInfoDiv")[0].style.display = 'none';

    $("#selfQrcodeCanvas").html("");
    var src = $(".selfInfo").attr("src");
    var urlLink = changeZalySchemeToDuckChat(token, "u");
    $("#selfQrcodeCanvas").attr("urlLink", urlLink);
    generateQrcode($('#selfQrcodeCanvas'), urlLink, src, true , "self");
}

function updateSelfNickName(event)
{
    if(checkIsEnterBack(event) == false) {
        return;
    }
    var nickname = $(".nickname").val();
    var values = new Array();
    var value = {
        type : "ApiUserUpdateNickname",
        nickname : nickname,
    };
    values.push(value);
    updateUserInfo(values);
}

function updateUserInfo(values)
{
    var reqData = {
        values : values
    };
    var action = "api.user.update";
    handleClientSendRequest(action, reqData, handleUpdateUserInfo);
}

function handleUpdateUserInfo(results)
{
    window.location.reload();
}

$(document).on("click", ".nickNameDiv",function () {
    var html = template("tpl-nickname-div", {
        nickname:nickname
    });
    $(this)[0].parentNode.replaceChild($(html)[0], $(this)[0]);
});

$(document).on("click", ".groupName",function () {
    var groupName = $(this).html();
    var html = template("tpl-group-name-div", {
        groupName:groupName,
        editor:1
    });
    $(this)[0].parentNode.replaceChild($(html)[0], $(this)[0]);
});


function updateGroupNameName(event)
{
    if(checkIsEnterBack(event) == false) {
        return;
    }

    var groupName = $("#groupName").val();
    var groupId = localStorage.getItem(chatSessionIdKey);

    var values = {
        type : ApiGroupUpdateType.ApiGroupUpdateName,
        writeType:DataWriteType.WriteUpdate,
        name :groupName,
    }
    updateGroupProfile(groupId, values);

    var html = template("tpl-group-name-div", {
        groupName:groupName,
        editor:0
    });
    $("#groupName")[0].parentNode.replaceChild($(html)[0], $("#groupName")[0]);
}


$(document).on("click", ".web-msg-click", function(){
    var url = $(this).attr("src-data");
    console.log(url);
    window.open(url);
});

function searchUserByKeyPress(event)
{
    if(checkIsEnterBack(event) == false) {
        return;
    }
    searchUser();
}

function searchUserByOnBlur(){
    searchUser();
}

function searchUser() {
    var searchValue = $(".search-user-input").val();
    if(searchValue.length<1) {
        return;
    }
    var action = "api.friend.search";
    var reqData = {
        keywords:searchValue,
        offset:0,
        count:defaultCountKey
    };
    handleClientSendRequest(action, reqData, handleSearchUser);
    $(".search-user-content").html('');
}

function handleSearchUser(results)
{
    if(results.hasOwnProperty("friends")) {
        var friends = results.friends;
        var friendsLength = friends.length;
        for(var i=0; i<friendsLength; i++) {
            var friendProfile = friends[i].profile;
            var html = template("tpl-search-user-info", {
                nickname:friendProfile.nickname,
                userId:friendProfile.userId,
                token:token
            });
            $(".search-user-content").append(html);
            getNotMsgImg(friendProfile.userId, friendProfile.avatar);
        }
    } else {
        var html = template("tpl-search-user-info-void", {});
        $(".search-user-content").append(html);
    }
}

$(document).on("click", ".search-add-friend-btn", function () {
    var userId = $(this).attr("userId");
    sendFriendApplyReq(userId, "", "");
    $(this).attr("disabled", "disabled");
    alert("发送申请成功");
});

function closeMaskDiv(str)
{
    removeWindow($(str));
}

function downloadFile(elementObject) {
    var fileId = elementObject.attr("url");
    var msgId = elementObject.attr("msgId");
    var originName = elementObject.attr("originName");
    var currentRoom = localStorage.getItem(chatSessionIdKey);
    var isGroupMessage = localStorage.getItem(currentRoom) == GROUP_MSG ? 1 : 0;
    var requestUrl = downloadFileUrl +  "&fileId="+fileId + "&returnBase64=0&isGroupMessage="+isGroupMessage+"&messageId="+msgId;
    var downloadLink = document.createElement('a');
    downloadLink.download = originName;
    downloadLink.href =requestUrl;
    document.body.appendChild(downloadLink);
    downloadLink.click();
}

$(document).on("click", ".msg_img", function () {
    var src = $(this).attr("src");
    window.open(src);
});

$(document).on("click", ".right_msg_file_div", function () {
    downloadFile($(this));

});

$(document).on("click", ".left_msg_file_div", function () {
    downloadFile($(this));
});
