<?php
/**
 * 苏宁开放平台配置文档
 *
 * @author jerry(14033184@cnsuning.com)
 * @date   2014-05-21
 */

// 分配给应用的访问令牌
define('APP_KEY', '94936c4ecf7d83d4d59b9b974afe9454');

// APP_KEY对应的密钥
define('APP_SECRET', '84096e13a3edbff93d39253a36fd6e8b');

// 服务器地址
define('SERVER_URL', 'http://openpre.cnsuning.com/api/http/sopRequest');

// 提交及返回的数据格式 json or xml
define('FORMAT', 'xml');

// 是否打开入参检查，测试及生产建议设置为TRUE
define('CHECK_REQ', TRUE);

// 签名信息 版本
define('VERSION', 'v1.2');

// SDK语言版本
define('USER_AGENT','suning-sdk-php');

// SDK版本
define('SDK_VERSION','suning-sdk-php-beta0.1');
?>