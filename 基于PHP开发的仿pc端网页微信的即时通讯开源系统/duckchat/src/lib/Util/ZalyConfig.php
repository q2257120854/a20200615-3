<?php
/**
 * Created by PhpStorm.
 * User: childeYin<尹少爷>
 * Date: 19/07/2018
 * Time: 10:54 AM
 */

class ZalyConfig
{
    public static $config;
    private static $verifySessionKey="session_verify_";

    public static function getConfigFile()
    {
        $fileName = dirname(__FILE__) ."/../../config.php";
        if(!file_exists($fileName)) {
            $fileName = dirname(__FILE__) ."/../../config.sample.php";
        }

        self::$config = require($fileName);
    }

    public static function  getConfig($key = "")
    {
        self::getConfigFile();
        if(isset(self::$config[$key])) {
            return self::$config[$key];
        }
        return false;
    }
    public static function getAllConfig()
    {
        self::getConfigFile();
        return self::$config;
    }


    public static function getSessionVerifyUrl($pluginId)
    {
        self::getConfigFile();
        $key = self::$verifySessionKey.$pluginId;
        return self::$config[$key];
    }

    public static function getApiPageJumpUrl()
    {
        $domain = self::getDomain();
        $pageJumpUrl = self::$config['apiPageJump'];
        if(strpos($pageJumpUrl,"./") == 0) {
            $pageJumpUrl = str_replace("./", "/", $pageJumpUrl);
        }
        return $domain.$pageJumpUrl;
    }

    public static function getApiPageWidget()
    {
        $domain = self::getDomain();
        $pageWidgetUrl = self::$config['apiPageWidget'];
        if(strpos($pageWidgetUrl,"./") == 0) {
            $pageWidgetUrl = str_replace("./", "/", $pageWidgetUrl);
        }
        return $domain.$pageWidgetUrl;
    }

    public static function getDomain()
    {
        self::getConfigFile();

        $scheme = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME']."://" : "http://";
        $domain = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : "" ;

        return $scheme.$domain;
    }
}