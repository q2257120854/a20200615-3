<?php

/* ========================================================================
 * $Id: modifiercompiler.unescape.php 1210 2016-12-15 05:57:25Z onez $
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
 * Smarty unescape modifier plugin
 * Type:     modifier<br>
 * Name:     unescape<br>
 * Purpose:  unescape html entities
 *
 * @author Rodney Rehm
 *
 * @param array $params parameters
 *
 * @return string with compiled code
 */
function smarty_modifiercompiler_unescape($params)
{
    if (!isset($params[ 1 ])) {
        $params[ 1 ] = 'html';
    }
    if (!isset($params[ 2 ])) {
        $params[ 2 ] = '\'' . addslashes(Smarty::$_CHARSET) . '\'';
    } else {
        $params[ 2 ] = "'" . $params[ 2 ] . "'";
    }

    switch (trim($params[ 1 ], '"\'')) {
        case 'entity':
        case 'htmlall':
            if (Smarty::$_MBSTRING) {
                return 'mb_convert_encoding(' . $params[ 0 ] . ', ' . $params[ 2 ] . ', \'HTML-ENTITIES\')';
            }

            return 'html_entity_decode(' . $params[ 0 ] . ', ENT_NOQUOTES, ' . $params[ 2 ] . ')';

        case 'html':
            return 'htmlspecialchars_decode(' . $params[ 0 ] . ', ENT_QUOTES)';

        case 'url':
            return 'rawurldecode(' . $params[ 0 ] . ')';

        default:
            return $params[ 0 ];
    }
}
