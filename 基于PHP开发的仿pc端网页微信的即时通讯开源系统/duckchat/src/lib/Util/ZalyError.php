<?php
/**
 * Created by PhpStorm.
 * User: anguoyue
 * Date: 31/08/2018
 * Time: 6:45 PM
 */

class ZalyError extends ZalyErrorBase
{

    private static $defaultErrors = ["request error", "请求错误"];

    public static $errors = [
        "error.group.emptyId" => ["groupId is empty", "群Id为空"],
        "error.group.permission" => ["no permission for group", "无当前群组操作权限"],
    ];

    public function getErrorInfo($errorCode)
    {
//        if (isset(self::errors[$errorCode])) {
//            return self::errors[$errorCode][$lang];
//        }
//        return self::$defaultErrors[$lang];
    }

    public static function getErrorInfo2($errorCode, $lang = Zaly\Proto\Core\UserClientLangType::UserClientLangZH)
    {
        if (isset(self::$errors[$errorCode])) {
            return self::$errors[$errorCode][$lang];
        }
        return self::$defaultErrors[$lang];
    }

}