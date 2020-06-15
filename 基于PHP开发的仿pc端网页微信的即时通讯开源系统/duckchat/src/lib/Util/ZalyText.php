<?php
/**
 * Created by PhpStorm.
 * User: anguoyue
 * Date: 31/08/2018
 * Time: 6:45 PM
 */

class ZalyText
{
    public static $textGroupNotExists = "text.group.notExists";
    public static $textGroupNotSpeaker = "text.group.notSpeaker";
    public static $textGroupNotMember = "text.group.notMember";
    public static $textGroupCreate = "text.group.create";

    public static $texts = [
        "text.group.notExists" => ["group is not exists", "当前群组不存在"],
        "text.group.notSpeaker" => ["only speakers and admin can speak,speakers are ", "当前只允许群管理以及发言者发言，发言人者："],
        "text.group.notMember" => ["you aren't group member", "你不是群组成员"],
        "text.group.create" => ["group created,invite your friends to join chat", "群组已创建成功,邀请你的好友加入群聊吧"],
        "upload.file.size" => ["file exceeds maximum limit", "文件超过最大限制"],
    ];

    public static $keyGroupInvite = "{key.group.invite}";
    public static $keyGroupJoin = "{key.group.join}";

    public static $keyDefaultFriendsText = "{key.defaultFriend.text}";
    public static $keyDefaultGroupsText = "{key.defaultGroup.text}";

    public static $keySpeakerSet = "{key.speaker.set}";
    public static $keySpeakerCloseUser = "{key.speaker.closeUser}";
    public static $keySpeakerAsSpeaker = "{key.speaker.asSpeaker}";
    public static $keySpeakerClose = "{key.speaker.close}";
    public static $keySpeakerStatus = "{key.speaker.status}";

    public static $templateKeys = [
        "key.group.invite" => [" invite ", " 邀请了 "],
        "key.group.join" => [" join this group", " 加入了群聊"],

        "key.defaultFriend.text" => ["we are friends, just talk to me", "我们已经成为好友，开始聊天吧"],
        "key.defaultGroup.text" => ["new member", "新成员"],

        "key.speaker.set" => [" set ", " 设置了 "],
        "key.speaker.asSpeaker" => [" as speaker", " 为发言人"],
        "key.speaker.closeUser" => [" close ", " 关闭了 "],
        "key.speaker.status" => [" speaker status", " 发言人状态"],
        "key.speaker.close" => [" close speakers function ", " 关闭了发言者功能"],
    ];

    public static function getText($textKey, $lang = Zaly\Proto\Core\UserClientLangType::UserClientLangZH)
    {
        if (isset(self::$texts[$textKey])) {
            return self::$texts[$textKey][$lang];
        }

        throw new Exception("unSupport zaly text key=" . $textKey);
    }


    public static function buildMessageNotice($noticeText, $lang = Zaly\Proto\Core\UserClientLangType::UserClientLangZH)
    {
        $contentMsg = new \Zaly\Proto\Core\NoticeMessage();
        $contentMsg->mergeFromJsonString($noticeText);

        $body = $contentMsg->getBody();
        $body = self::buildBody($body, $lang);

        $contentMsg->setBody($body);
        return $contentMsg;
    }

    public static function buildMessageText($text, $lang = Zaly\Proto\Core\UserClientLangType::UserClientLangZH)
    {
        $contentMsg = new \Zaly\Proto\Core\TextMessage();
        $contentMsg->mergeFromJsonString($text);

        $body = $contentMsg->getBody();
        $body = self::buildBody($body, $lang);

        $contentMsg->setBody($body);
        return $contentMsg;
    }

    private static function buildBody($body, $lang)
    {
        //build origin body
        $keys = self::getTemplateKey($body);

        if (!empty($keys)) {
            $values = [];
            foreach ($keys as $i => $key) {
                $keyToValue = self::$templateKeys[$key];
                if (!empty($keyToValue)) {
                    $values[] = $keyToValue[$lang];
                } else {
                    $values[] = "";
                }
                $keys[$i] = "{" . $key . "}";
            }

            $body = str_replace($keys, $values, $body);

        }

        return $body;
    }

    private static function getTemplateKey($str)
    {
        $result = array();
        preg_match_all("/(?<={)[^}]+/", $str, $result);
        return $result[0];
    }

}