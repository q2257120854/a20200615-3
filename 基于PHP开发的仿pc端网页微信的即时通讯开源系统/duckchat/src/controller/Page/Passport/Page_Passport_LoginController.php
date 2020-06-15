<?php
/**
 * Created by PhpStorm.
 * User: zhangjun
 * Date: 23/08/2018
 * Time: 11:18 AM
 */

class Page_Passport_LoginController extends  HttpBaseController
{

    public function index()
    {
        echo $this->display("passport_login");
        return;
    }
}