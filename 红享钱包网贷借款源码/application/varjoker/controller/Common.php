<?php
namespace app\varjoker\controller;

use think\Controller;

class Common extends Controller
{
    /*
     * 初始化公共控制器
     */
    public function _initialize()
    {
        if(!session('adminid')){
            $this->error('未登录，请先登录后查看',url('login/index'));
        }else{
            $this->assign('admin',session('AdminX'));
            $this->desystem = db('configure')->where('id',1)->find();
        }
     }


}
