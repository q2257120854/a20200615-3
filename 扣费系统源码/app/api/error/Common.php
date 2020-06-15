<?php
// +---------------------------------------------------------------------+
// | OneBase    | [ WE CAN DO IT JUST THINK ]                            |
// +---------------------------------------------------------------------+
// | Licensed   | http://www.apache.org/licenses/LICENSE-2.0 )           |
// +---------------------------------------------------------------------+
// | Author     | Bigotry <3162875@qq.com>                               |
// +---------------------------------------------------------------------+
// | Repository | https://gitee.com/Bigotry/OneBase                      |
// +---------------------------------------------------------------------+

namespace app\api\error;

class Common
{
    
    public static $passwordError            = [API_CODE_NAME => 1010001, API_MSG_NAME => '登录密码错误'];
    
    public static $usernameOrPasswordEmpty  = [API_CODE_NAME => 1010002, API_MSG_NAME => '用户名或密码不能为空'];
    
    public static $registerFail             = [API_CODE_NAME => 1010003, API_MSG_NAME => '注册失败'];
    
    public static $oldOrNewPassword         = [API_CODE_NAME => 1010004, API_MSG_NAME => '旧密码或新密码不能为空'];
    
    public static $changePasswordFail       = [API_CODE_NAME => 1010005, API_MSG_NAME => '密码修改失败'];


    public static $getKeywordError       = [API_CODE_NAME => 1000006,   API_MSG_NAME => '任务ID错误'];

    public static $getKeywordErrorNo       = [API_CODE_NAME => 1000007,   API_MSG_NAME => '处理失败'];

    public static $getKeywordErrorNo1       = [API_CODE_NAME => 1000008,   API_MSG_NAME => '域名不存在'];

    public static $getKeywordErrorNo2       = [API_CODE_NAME => 1000009,   API_MSG_NAME => '关键词不存在,或关键词、域名、指定浏览器不匹配'];

    public static $getKeywordErrorNo3       = [API_CODE_NAME => 10000010,   API_MSG_NAME => '参数错误'];
    
}
