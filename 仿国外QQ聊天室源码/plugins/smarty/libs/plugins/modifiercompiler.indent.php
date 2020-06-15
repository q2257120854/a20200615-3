<?php

/* ========================================================================
 * $Id: modifiercompiler.indent.php 723 2016-12-15 05:57:25Z onez $
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
 * @subpackage PluginsModifierCompiler
 */

/**
 * Smarty indent modifier plugin
 * Type:     modifier<br>
 * Name:     indent<br>
 * Purpose:  indent lines of text
 *
 * @link   http://www.smarty.net/manual/en/language.modifier.indent.php indent (Smarty online manual)
 * @author Uwe Tews
 *
 * @param array $params parameters
 *
 * @return string with compiled code
 */

function smarty_modifiercompiler_indent($params)
{
    if (!isset($params[ 1 ])) {
        $params[ 1 ] = 4;
    }
    if (!isset($params[ 2 ])) {
        $params[ 2 ] = "' '";
    }

    return 'preg_replace(\'!^!m\',str_repeat(' . $params[ 2 ] . ',' . $params[ 1 ] . '),' . $params[ 0 ] . ')';
}
