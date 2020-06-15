<?php

// Disable magic quotes

if(version_compare(PHP_VERSION, '5.3.0', '<'))
{
    try
    {
        @set_magic_quotes_runtime(0);
    }
    catch(Exception $e)
    {
        // Do nothing...
    }
}

// Reverse the effects of magic quotes

if(get_magic_quotes_gpc())
{
    function stripslashes_array($array)
    {
        return is_array($array) ? array_map('stripslashes_array', $array) : stripslashes($array);
    }
    
    $_GET     = stripslashes_array($_GET);
    $_POST    = stripslashes_array($_POST);
    $_COOKIE  = stripslashes_array($_COOKIE);
    $_REQUEST = stripslashes_array($_REQUEST);
}

?>