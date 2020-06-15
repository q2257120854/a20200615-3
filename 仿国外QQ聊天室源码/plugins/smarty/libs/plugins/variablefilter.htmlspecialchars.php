<?php

/* ========================================================================
 * $Id: variablefilter.htmlspecialchars.php 351 2016-12-15 05:57:25Z onez $
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
 * @subpackage PluginsFilter
 */

/**
 * Smarty htmlspecialchars variablefilter plugin
 *
 * @param string $source input string
 *
 * @return string filtered output
 */
function smarty_variablefilter_htmlspecialchars($source)
{
    return htmlspecialchars($source, ENT_QUOTES, Smarty::$_CHARSET);
}
