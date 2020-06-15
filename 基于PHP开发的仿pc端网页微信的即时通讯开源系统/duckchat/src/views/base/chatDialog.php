
<div class="right-head">
    <div class="title chatsession-title">DuckChat<sup style="font-size: 0.8rem; color: red;">抢先体验版</sup></sup> <SMALL style="font-size: 1rem;">单聊、群聊、小程序、高扩展，支持iOS、Android、Web，进QQ群咨询详情！开源！免费！</SMALL></div>
    <div class="actions">
        <img src="../../public/img/msg/invite_people.png"  class="invite_people"/>
        <img src="../../public/img/msg/add_friend.png"  class="add_friend add-friend-btn"/>
        <img src="../../public/img/msg/setting.png" class="see_group_profile"/>
    </div>
</div>

<div class="right-body">

    <div class="right-body-chat" style="position: relative;">
        <div class="right-chatbox">

        </div>

        <div id="emojies" style="display: none;position: absolute; bottom:11rem;">
            <div class="emoji-row" style="margin-top: 1rem;">
                <item class="emotion-item">🙂</item>
                <item  class="emotion-item">😂</item>
                <item  class="emotion-item">😊</item>
                <item  class="emotion-item">😉</item>
                <item  class="emotion-item">😋</item>
                <item  class="emotion-item">😎</item>
                <item  class="emotion-item">😀</item>
                <item  class="emotion-item">😍</item>
                <item  class="emotion-item">🤩</item>
            </div>
            <div class="emoji-row">
                    <item  class="emotion-item">😤</item>
                    <item  class="emotion-item" >😬</item>
                    <item class="emotion-item" >😡</item>
                    <item class="emotion-item">😠</item>
                    <item class="emotion-item">🙁</item>
                    <item class="emotion-item">😞</item>
                    <item class="emotion-item">😰</item>
                    <item class="emotion-item">😭</item>
                    <item class="emotion-item">😱</item>
                </div>

            <div class="emoji-row">
                <item  class="emotion-item">😘</item>
                <item  class="emotion-item">👄</item>
                <item  class="emotion-item">💋</item>
                <item  class="emotion-item">💘</item>
                <item  class="emotion-item">❤️</item>
                <item  class="emotion-item">💔</item>
                <item  class="emotion-item">🌹</item>
                <item  class="emotion-item">🥀</item>
                <item  class="emotion-item">😷</item>
            </div>

            <div class="emoji-row">
                <item  class="emotion-item">🙃</item>
                <item  class="emotion-item">🙄</item>
                <item  class="emotion-item">😴</item>
                <item  class="emotion-item">😓</item>
                <item  class="emotion-item">😳</item>
                <item  class="emotion-item">🤔</item>
                <item  class="emotion-item">😐</item>
                <item  class="emotion-item">🤫</item>
                <item  class="emotion-item">🤧</item>
            </div>

            <div class="emoji-row">
                <item  class="emotion-item">🤮</item>
                <item  class="emotion-item">🤪</item>
                <item  class="emotion-item">😇</item>
                <item  class="emotion-item">😏</item>
                <item  class="emotion-item">💀</item>
                <item  class="emotion-item">👻</item>
                <item  class="emotion-item">💩</item>
                <item  class="emotion-item">😝</item>
                <item  class="emotion-item">💪</item>
            </div>

            <div class="emoji-row">
                <item  class="emotion-item">✌</item>
                <item  class="emotion-item">👌</item>
                <item  class="emotion-item">👍</item>
                <item  class="emotion-item">👎</item>
                <item  class="emotion-item">✊</item>
                <item  class="emotion-item">👏</item>
                <item  class="emotion-item">🙏</item>
                <item  class="emotion-item">🍻</item>
                <item  class="emotion-item">👅</item>

            </div>
            <div class="emoji-row">
                <item  class="emotion-item">💢</item>
                <item  class="emotion-item">💣</item>
                <item  class="emotion-item">👙</item>
                <item  class="emotion-item">👑</item>
                <item  class="emotion-item">💍</item>
                <item  class="emotion-item">💎</item>
                <item  class="emotion-item">🌼</item>
                <item  class="emotion-item">💩</item>
                <item  class="emotion-item">💊</item>
            </div>
            <div class="emoji-row">
                <item  class="emotion-item">💰</item>
                <item  class="emotion-item">💳</item>
                <item  class="emotion-item">🐵</item>
                <item  class="emotion-item">🐶</item>
                <item  class="emotion-item">🦊</item>
                <item  class="emotion-item">🐱</item>
                <item  class="emotion-item">🐷</item>
            </div>
        </div>
        <div class="right-input">
            <div class="input-tools">
                <img src="../../public/img/msg/emotions.png" class="emotions"/>
                <img src="../../public/img/msg/images.png" style="height: 2.06rem;" onclick="uploadFile('file1')" class="upload-img" accept="image/gif,image/jpeg,image/jpg,image/png,image/svg"/>
                <input type="file" id="file1" style="display:none" onchange="uploadMsgFileFromInput(this, FileType.FileImage)" accept="image/gif,image/jpeg,image/jpg,image/png,image/svg">
                <img src="../../public/img/msg/file.png" style="height: 2.06rem;" onclick="uploadFile('file3')" class="upload-img" accept="image/gif,image/jpeg,image/jpg,image/png,image/svg"/>
                <input type="file" id="file3" style="display:none" onchange="uploadMsgFileFromInput(this, FileType.FileDocument)">
            </div>

            <div class="input-box">
                <div id="msgImage">
                </div>
                <textarea class="input-box-text msg_content" placeholder="输入消息…."data-local-placeholder="enterMsgContentPlaceholder"  id="msg_content"></textarea>

                <div class="input-btn">
                    <button class="send_msg" data-local-value="sendTip">发送</button>
                </div>
            </div>
            <div class="input-line"></div>

        </div>
    </div>
    <div class="right-body-sidebar">

        <div class="right-body-sidebar-menu">
            <img src="../../public/img/msg/btn-close.png" onclick="$('.right-body-sidebar').hide()" />
        </div>

        <div style="position: relative">
            <div class="group-profile-desc">

                <div class="group-desc">
                    <div class="group-desc-title" style="position: relative" data-local-value="groupMemberTip">群成员</div>
                    <div class="group-member-body">
                    </div>
                    <div class="see_all_group_member" data-local-value="allGroupMemberTip">查看全部</div>
                </div>


                <div class="group-desc">
                    <div class="group-desc-title" style="position: relative" data-local-value="groupProfileDescTip">群介绍</div>
                    <button class="save_group_introduce" style=" margin-top: -2rem;" data-local-value="saveGroupDescTip">保存</button>

                    <div class="group-desc-body">
                        <textarea class="group-introduce"></textarea>
                    </div>
                </div>

                <div class="action-group">

                    <div class="action-row action-row-disclosure edit_group_name">
                        <div class="action-title" data-local-value="groupProfileNameTip">群名称</div>
                        <div class="action-btn groupName" style="width: auto;">

                        </div>
                        <img src="../../public/img/edit.png" style="width: 1rem; height:1rem; margin-right: 2rem;margin-top: 2rem;"/>
                    </div>

<!--                    <div class="action-row action-row-disclosure remove_member">-->
<!--                        <div class="action-title" data-local-value="removeGroupMemberTip">移除成员</div>-->
<!--                        <div class="action-btn">-->
<!--                            <img src="../../public/img/msg/icon_disclosure.png" />-->
<!--                        </div>-->
<!--                    </div>-->

                    <div class="action-row mute-group">
                        <div class="action-title" data-local-value="muteTip">静音</div>
                        <div class="action-btn ">
                            <img src="../../public/img/msg/icon_switch_off.png" class="group_mute" />
                        </div>
                    </div>

                    <div class="action-row permission-join" style="display: none"  >
                        <div class="action-title" data-local-value="joinGroupPermissionsTip">邀请入群权限</div>
                    </div>

<!--                    <div class="action-row can-guest-read-message" style="display: none"  >-->
<!--                        <div class="action-title" data-local-value="canGuestReadMsgTip">游客是否可以阅读群消息</div>-->
<!--                        <div class="action-btn ">-->
<!--                            <img src="../../public/img/msg/icon_switch_off.png" class="can_guest_read_message" />-->
<!--                        </div>-->
<!--                    </div>-->

                    <div class="action-row group_speakers" >
                        <div class="action-title" data-local-value="groupSpeakersTip">群发言人</div>
                        <div class="action-btn ">
                            <img src="../../public/img/msg/icon_disclosure.png" />
                        </div>
                    </div>

<!--                    <div class="action-row share-group" >-->
<!--                        <div class="action-title" data-local-value="shareGroupTip">分享群名片</div>-->
<!--                    </div>-->

                    <div class="action-row quit-group" style="display: none;border-bottom: 1px solid rgba(223,223,223,1);" >
                        <div class="action-title" data-local-value="quitGroupTip">退群</div>
                    </div>

                    <div class="action-row delete-group" style="display: none;border-bottom: 1px solid rgba(223,223,223,1);">
                        <div class="action-title" data-local-value="disbandGroupTip">解散群</div>
                    </div>
                </div>
            </div>

            <div class="user-profile-desc" style="position:absolute; visibility:hidden;">
                <div class="user-desc" >
                    <div style="text-align: center">
                        <img class="user-image-for-add " src="../../public/img/msg/default_user.png" style="width:7rem; height: 7rem; border-radius: 50%;">
                        <div class="user-desc-body">
                        </div>
                    </div>

                </div>

                <div class="action-user">
                    <div class="action-row action-row-disclosure edit-remark">
                        <div class="action-title" data-local-value="editRemarkTip">修改备注</div>
                        <div class="action-btn ">
                            <img src="../../public/img/msg/icon_disclosure.png" />
                        </div>
                    </div>

                    <div class="action-row mute-friend">
                        <div class="action-title" data-local-value="muteTip">静音</div>
                        <div class="action-btn ">
                            <img src="../../public/img/msg/icon_switch_off.png" class="friend_mute" />
                        </div>
                    </div>

                    <div class="action-row delete-friend" style=" border-bottom: 1px solid rgba(223,223,223,1);">
                        <div class="action-title" data-local-value="deleteFriendTip">删除好友</div>
                    </div>

                    <div class="action-row add-friend add-friend-btn">
                        <div class="action-title"  data-local-value="addFriendTip">添加好友</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



