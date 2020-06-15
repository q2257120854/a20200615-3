<?php

class Utils
{
    private static function _arrayMergeRecursive($array1, $array2)
    {
        foreach($array2 as $key => &$value)
        {
            if(is_array($value) && isset($array1[$key]) && is_array($array1[$key]))
            {
                $array1[$key] = self::arrayMergeRecursive($array1[$key], $value);
            }
            else
            {
                $array1[$key] = $value;
            }
        }

        return $array1;
    }

    public static function arrayMergeRecursive()
    {
        $result = array();
        $arrays = func_get_args();

        foreach($arrays as $array)
        {
            $result = self::_arrayMergeRecursive($result, $array);
        }

        return $result;
    }

    public static function removeNumericKeys(&$array)
    {
        foreach($array as $k => $v)
        {
            if(is_numeric($k))
            {
                unset($array[$k]);
            }
        }
    }

    public static function xorStream($in, $out, $password, $streamChunkLength = 1024)
    {
        $passLength = strlen($password);

        while(!feof($in))
        {
            $data = fread($in, $streamChunkLength);

            for($i = 0; $i < strlen($data); $i++)
            {
                $chSource = ord($data[$i]);
                $chPass   = ord($password[$i % $passLength]);

                $data[$i] = chr($chSource ^ $chPass);
            }

            fwrite($out, $data);
        }
    }
}

?>
