<?php
namespace app\index\controller;

use think\Controller;

use think\Request;

class Index extends Controller
{
    public function __construct(Request $request = null)
    {
    
        parent::__construct($request);
        $data = db('broadcast')->select();
        $this->assign('data',$data);
    }

    public function index()
    {	
      $urlxx = $_SERVER['REQUEST_URI'];
//       if($urlxx != '/index/index.html'){
//          $this->redirect('http:///');
//       exit;
//       }
       
        $loan = config('loan');
        $data = explode(',',$loan['loanmoney']);
        $key  = max(array_flip($data));
        $zixun =db('zixun')->select();
        $loand = db('loan')->where(['uid'=>session('id')])->order('id desc')->find();
        if($loand){
            switch ($loand['status'])
            {
                case 0:
                    $msg='正在审核';
                    break;
                case 1:
                    if($loand['viptype'] =='1'){
                        $msg='通过未支付';
                    }else{
                        $msg='已支付等待放款';
                    }
                    break;
                case 2:
                    $msg='已放款';
                    break;
                case 3:
                    $msg='已提现';
                    break;
                case 5:
                    $msg='立即申请';
                    break;
                case 6:
                    $msg='立即申请';
                    break;
            }

        }else{
            $msg ='立即申请';
        }
        $this->assign('msg',$msg);
        $this->assign('maxm',$data[$key]);
        $this->assign('zixun',$zixun);
        $this->assign('user',GetUser());
        $this->assign('loan',db('loan')->where(['uid'=>session('id'),'status'=>['lt',4]])->find());
       return $this->fetch();
    }
    public function newindex()
    {
        $loan = db('loan')->where(['uid'=>session('id')])->order('id desc')->find();
        if($loan){
            switch ($loan['status'])
            {
                case 0:
                    $msg='正在未审核';
                  break;
                case 1:
                    if($loan['viptype'] =='1'){
                    $msg='通过未支付';
                    }else{
                    $msg='已支付';
                    }
                  break;
                case 2:
                    $msg='已放款';
                    break;
                case 3:
                    $msg='已提现';
                    break;
                case 5:
                    $msg='已还款';
                    break;
                case 6:
                    $msg='已拒绝';
                    break;
            }

        }else{
            $msg ='暂无借款';
        }
        $this->assign('msg',$msg);
        return $this->fetch();
    }
    /*
     * 关于我们
     */
    public function auto()
    {
        $data = db('sutext')->where('id',1)->find();
        $this->assign('data',$data);
        return $this->fetch();
    }
    /*
     * 借款协议
     */
    public function xieyi()
    {
        $data = db('sutext')->where('id',2)->find();
        $this->assign('data',$data);
        return $this->fetch();
    }
      /*
     * 注册协议
     */
    public function regtext()
    {
        $data = db('sutext')->where('id',3)->find();
        $this->assign('data',$data);
        return $this->fetch();
    }
}
