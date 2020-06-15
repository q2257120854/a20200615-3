<?php
/**
 * Created by PhpStorm.
 * User: childeYin<尹少爷>
 * Date: 18/07/2018
 * Time: 8:45 AM
 */

class ZalyException extends Exception
{
    private $errCode;
    private $errInfo;


    public function __construct($errCode, $errInfo, Throwable $previous = null)
    {
        parent::__construct($errInfo, 0, $previous);
        $this->errCode = $errCode;
        $this->errInfo = $errInfo;
    }


}