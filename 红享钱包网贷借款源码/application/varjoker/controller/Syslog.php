<?php
namespace app\varjoker\controller;

class Syslog extends Common
{
    public function index()
    {
        $list=db('syslog')->order('id desc')->paginate(10);
        $this->assign('list',$list);
        return $this->fetch();
    }
}