<?php

/* ========================================================================
 * $Id: shared.escape_special_chars.php 986 2016-12-15 05:57:25Z onez $
 * 
 * Email: www@onez.cn
 * QQ: 6200103
 * HomePage: http://www.yunziyuan.com
 * ========================================================================
 * Copyright 2016-2017 佳蓝科技.
 * 
 * ======================================================================== */

/**
 * Smarty shared plugin
 *
 * @package    Smarty
 * @subpackage PluginsShared
 */

/**
 * escape_special_chars common function
 * Function: smarty_function_escape_special_chars<br>
 * Purpose:  used by other smarty functions to escape
 *           special chars except for already escaped ones
 *
 * @author   Monte Ohrt <monte at ohrt dot com>
 *
 * @param  string $string text that should by escaped
 *
 * @return string
 */
function smarty_function_escape_special_chars($string)
{
    if (!is_array($string)) {
        if (version_compare(PHP_VERSION, '5.2.3', '>=')) {
            $string = htmlspecialchars($string, ENT_COMPAT, Smarty::$_CHARSET, false);
        } else {
            $string = preg_replace('!&(#?\w+);!', '%%%SMARTY_START%%%\\1%%%SMARTY_END%%%', $string);
            $string = htmlspecialchars($string);
            $string = str_replace(array('%%%SMARTY_START%%%', '%%%SMARTY_END%%%'), array('&', ';'), $string);
        }
    }

    return $string;
}
