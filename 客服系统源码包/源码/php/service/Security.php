<?php

class Security extends Service
{
    public function escapeString($string)
    {
        return htmlspecialchars($string);
    }
    
    public function escapeArray($arr)
    {
        $result = array();
        
        foreach($arr as $key => $value)
        {
            $result[$key] = $this->escape($value);
        }
        
        return $result;
    }
    
    public function escape($value)
    {
        if(is_array($value))
        {
            return $this->escapeArray($value);
        }
        
        return $this->escapeString($value);
    }
    
    public function encodePassword($string)
    {
        return sha1(md5($string));
    }
    
    public function randomString($length)
    {
        $set    = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $result = '';
        
        for($i = 0; $i < $length; $i++) $result .= $set[rand(0, strlen($set) - 1)];
        
        return $result;
    }
}

?>
