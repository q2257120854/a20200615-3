<?php

class Session extends Service
{
    const SESSION_NAMESPACE = 'mirrormx_customer_chat_pro';

    public function __construct()
    {
        // Check if custom session ID header is used

        if(isset($_SERVER['HTTP_X_SID']))
        {
            session_id($_SERVER['HTTP_X_SID']);
        }
        else if(isset($_GET['_sid']))
        {
            session_id($_GET['_sid']);
        }

        // Set cookie expiration time to browser's session

        session_set_cookie_params(0);

        // Start session handling

        @session_start();

        // Create the namespace

        if(empty($_SESSION[self::SESSION_NAMESPACE]))
        {
            $_SESSION[self::SESSION_NAMESPACE] = array();
        }
    }

    public function get($key)
    {
        return isset($_SESSION[self::SESSION_NAMESPACE][$key]) ? $_SESSION[self::SESSION_NAMESPACE][$key] : null;
    }

    public function set($key, $value)
    {
        $_SESSION[self::SESSION_NAMESPACE][$key] = $value;
    }

    public function remove($key)
    {
        unset($_SESSION[self::SESSION_NAMESPACE][$key]);
    }

    public function destroy()
    {
        session_destroy();
    }

    public function getId()
    {
        return session_id();
    }
}

?>
