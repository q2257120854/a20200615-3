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

class CodeBase
{
    
    public static $success              = [API_CODE_NAME => 0,         API_MSG_NAME => '操作成功'];
    
    public static $accessTokenError     = [API_CODE_NAME => 1000001,   API_MSG_NAME => '访问Toekn错误'];
    
    public static $userTokenNull        = [API_CODE_NAME => 1000002,   API_MSG_NAME => '用户Toekn不能为空'];
    
    public static $apiUrlError          = [API_CODE_NAME => 1000003,   API_MSG_NAME => '接口路径错误'];
    
    public static $dataSignError        = [API_CODE_NAME => 1000004,   API_MSG_NAME => '数据签名错误'];
    
    public static $userTokenError       = [API_CODE_NAME => 1000005,   API_MSG_NAME => '用户Toekn解析错误'];

    public static $getKeywordError       = [API_CODE_NAME => 1000006,   API_MSG_NAME => '任务ID错误'];

    public static $getKeywordErrorNo       = [API_CODE_NAME => 1000007,   API_MSG_NAME => '处理失败'];

    public static $getKeywordErrorNo1       = [API_CODE_NAME => 1000008,   API_MSG_NAME => '域名不存在'];

    public static $getKeywordErrorNo2       = [API_CODE_NAME => 1000009,   API_MSG_NAME => '关键词不存在,或关键词、域名、指定浏览器不匹配'];
    
}
