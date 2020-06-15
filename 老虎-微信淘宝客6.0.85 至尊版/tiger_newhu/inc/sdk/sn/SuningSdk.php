<?php
/**
 * 苏宁开放平台接口-入口文件
 *
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-21
 */

// 限制最大执行时间
if (!ini_get('safe_mode')) {
	set_time_limit(10);
}

// 设置时区
date_default_timezone_set('Asia/Shanghai');

// 设置错误等级
//error_reporting(E_ERROR | E_WARNING | E_PARSE);
// error_reporting(-1); //这一行是打开错误提示

// 包含配置文件
// include_once(dirname(__FILE__).'/config/config.php');

class SuningSdk
{
    protected static $autoPath = array();

    /**
     * 注册自动加载类机制
     */
    public static function register()
    {
        // 避免其他自动加载函数加载异常，优先注册当前机制
        $func = spl_autoload_functions();
        if ($func) {
            foreach ($func as $f)
                spl_autoload_unregister($f);
        }
        spl_autoload_register(array(__CLASS__, 'autoload'));

        if ($func) {
            foreach ($func as $f)
                spl_autoload_register($f);
        }

        // 自动包含地址
        $dir = dirname(__FILE__);
        self::$autoPath = array(
        		$dir,
        		$dir.DIRECTORY_SEPARATOR.'request',
        		$dir.DIRECTORY_SEPARATOR.'request'.DIRECTORY_SEPARATOR
        );
        self::readFileFromDir($dir.DIRECTORY_SEPARATOR.'request');
    }
    
    static function readFileFromDir($dir) {
    	if (!is_dir($dir)) {
    		return false;
    	}
    	$handle = opendir($dir);
    	while (($file = readdir($handle)) !== false) {
    		if ($file == "." || $file == "..") {
    			continue;
    		}
    		$file = $dir . DIRECTORY_SEPARATOR . $file;
    		//如果是文件就打印出来，否则递归调用
    		if (is_dir($file)) {
    			array_push(self::$autoPath,$file);
    			self::readFileFromDir($file);
    		}
    	}
    }

    public static function autoload($className)
    {
        foreach (self::$autoPath as $path) {
            $f = $path.DIRECTORY_SEPARATOR.$className.'.php';
            if (file_exists($f)) {
                include_once $f;
                return;
            }
        }
    }
}
SuningSdk::register();
?>