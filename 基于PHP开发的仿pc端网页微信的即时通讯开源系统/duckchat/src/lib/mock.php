<?php
/**
 * Created by PhpStorm.
 * User: sssl
 * Date: 2018/8/28
 * Time: 11:42 AM
 */

// mock bcmath
if(!extension_loaded("bcmath")) {
    function bcadd($left_operand,  $right_operand, $scale = 0 )
    {
        return (string)(intval($left_operand) + intval($right_operand));
    }

    function bccomp($left_operand, $right_operand, $scale = 0)
    {
        $left_operand = intval($left_operand);
        $right_operand = intval($right_operand);

        if($left_operand > $right_operand) {
            return 1;
        } else if($left_operand == $right_operand) {
            return 0;
        } else {
            return -1;
        }
    }

    function bcsub($left_operand, $right_operand, $scale = 0)
    {
        return (string)(intval($left_operand) - intval($right_operand));
    }
}

if (!function_exists("mb_strlen")) {
    function mb_strlen($string) {
        preg_match_all("/./us", $string, $match);
        return count($match[0]);
    }
}

if(extension_loaded("openssl")) {
    // fix OpenSSL
    //
    // 所有PHP手册中含有下述信息的，都需要wrapper一下再用:
    //  // Note: You need to have a valid openssl.cnf installed for this function to operate correctly. See the notes under the installation section for more information.
    //
    //
    define("MOCK_OPENSSL_CNF", __DIR__ . "/mock-openssl.cnf");
}

if(!function_exists('mime_content_type')) {

    function mime_content_type($path)
    {
        $mimeTypeHexs = [
            "89504e470d0a1a0a" => "image/png",
            "ffd8ffe0010"      => "image/jpg",
            "474946383961"     => 'image/gif',
            "667479704d534e56" => 'video/mp4',
            '6674797069736f6d' => 'audio/mp4',
            '667479704d344120' => 'audio/x-m4a',
            '25504446'         => 'application/pdf',
            '526172211a0700'   => 'application/x-rar-compressed',
            '57696e5a6970'     => 'application/zip',
            'cf11e0a1b11ae100' => 'application/msword',
            'eca5c100'         => 'application/msword',
            '3c3f786d6c2076657273696f6e3d' => 'application/xml',
            '4d534346' => 'application/vnd.ms-powerpoint',
            'a0461df0' => 'application/vnd.ms-powerpoint',
            'fdffffffnnnn0000' => 'application/vnd.ms-powerpoint'
        ];

        $fileContent    = file_get_contents($path);
        $fileContentHex = bin2hex($fileContent);
        $fileContentHex = substr($fileContentHex, 0, 20);

        foreach($mimeTypeHexs as $mimeHex => $mime) {
            $flag = strpos($fileContentHex, $mimeHex);
            if($flag == 0) {
                return $mime;
            }
        }
        return "application/octet-stream";
    }
}

