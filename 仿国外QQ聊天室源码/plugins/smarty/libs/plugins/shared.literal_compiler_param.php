<?php

/* ========================================================================
 * $Id: shared.literal_compiler_param.php 1050 2016-12-15 05:57:25Z onez $
 * 
 * Email: www@onez.cn
 * QQ: 6200103
 * HomePage: http://www.yunziyuan.com
 * ========================================================================
 * Copyright 2016-2017 佳蓝科技.
 * 
 * ======================================================================== */

/**
 * Smarty plugin
 *
 * @package    Smarty
 * @subpackage PluginsShared
 */

/**
 * evaluate compiler parameter
 *
 * @param array   $params  parameter array as given to the compiler function
 * @param integer $index   array index of the parameter to convert
 * @param mixed   $default value to be returned if the parameter is not present
 *
 * @return mixed evaluated value of parameter or $default
 * @throws SmartyException if parameter is not a literal (but an expression, variable, …)
 * @author Rodney Rehm
 */
function smarty_literal_compiler_param($params, $index, $default = null)
{
    // not set, go default
    if (!isset($params[ $index ])) {
        return $default;
    }
    // test if param is a literal
    if (!preg_match('/^([\'"]?)[a-zA-Z0-9-]+(\\1)$/', $params[ $index ])) {
        throw new SmartyException('$param[' . $index .
                                  '] is not a literal and is thus not evaluatable at compile time');
    }

    $t = null;
    eval("\$t = " . $params[ $index ] . ";");

    return $t;
}
