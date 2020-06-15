<?php
namespace app\index\controller;

use think\Controller;

class Common extends Controller
{
    /*
     * 初始化公共控制器
     */
    public function _initialize()
    {
    
        $config = config('config');
        $opensms = model('Smscode');
        if($config['switch'] == 2){
            $this->error($config['switchcontent']);
            exit;
        }
        if(!session('id')){
            $this->error('未登录，请先登录后查看',url('login/index'));
        }else{
            $user = GetUser();
            $this->autopass();
            $this->zidongshenhe();
            if($user['perfect'] == 2){
                if($user['ziliao'] == 1){
                    db('getdata')->where('id',1)->setInc('shiming');
                    $inuser = Place($user['mobile']);
                    db('province')->where('title',$inuser)->setInc('ziliao');
                    db('user')->where('id',session('id'))->setInc('ziliao');
                }
            }
            $loand = db('loan')->where(['uid'=>session('id'),'viptype'=>2,'status'=>1])->find();
            $apiloan = config('loan');
            if($loand){
              if(time() > $loand['putime']){
              $money = $loand['loanamount'];
              $lixi = $money*($apiloan['loanint']/100);

              if($apiloan['typeterm'] == '月'){
                  $allmoney = $money+$lixi*30*$loand['loanterm'];
              db('loan')->where('id',$loand['id'])->update(['loanamount'=>$money,'loanlixi'=>$lixi,'allmoney'=>$allmoney,'repayment'=>$allmoney/$loand['loanterm'],'status'=>2]);
              db('user')->where('id',$user['id'])->update(['money'=>$user['money']+$money]);
			
                  sendmsg('您的款项将发放至钱包账户，请进入提取');
              }else{
                  $allmoney = $money+$lixi;
              db('loan')->where('id',$loand['id'])->update(['loanamount'=>$money,'loanlixi'=>$lixi,'allmoney'=>$allmoney,'status'=>2]);
                
                  sendmsg('您的款项将发放至钱包账户，请进入提取');
              }
                  $opensms->todosms($loand['id'],$loand['mobile'],1005);
            }
                 db('getdata')->where('id',1)->setInc('loanmoney');
                 $this->assign('user',GetUser());
        }
    }
    }

    /*
     * 取小于4的借款数据
     */
    public function GetLoan()
    {
        $data = db('loan')->where(['uid'=>session('id'),'status'=>['lt',4]])->find();
        return $data;
    }
    /*
     *判断是否认证完成 
     */
  	public function autopass()
    {
    	$user = GetUser();
        if($user['perfect'] == 1){
        if($user['idcard'] && $user['personal'] && $user['photoAuth'] && $user['bankAuth']&& $user['zhimaAuth']){
        db('user')->where('id',$user['id'])->update(['perfect'=>2]);
        }
        }
    }
    /*
     *自动审核
     */
    public function zidongshenhe()
    {
       $apiloan = config('loan');
    $loan = db('loan')->where(['uid'=>session('id'),'status'=>0])->find();
    $opensms = model('Smscode');
    $user = GetUser();
    $ziliao = json_decode($user['personal'],true);
    if($loan){
    if(time() > $loan['addtime']){
              $money = $loan['loanamount']*($apiloan['loanshfv']/100);
              $lixi = $money*($apiloan['loanint']/100);
             $allmoney = $money+$lixi*30*$loan['loanterm'];
              db('loan')->where('id',$loan['id'])->update(['loanamount'=>$money,'loanlixi'=>$lixi,'allmoney'=>$allmoney,'repayment'=>$allmoney/$loan['loanterm'],'status'=>1]);
    	$api = config('loan');
        $keyarr = explode(',',$api['safekey']);
             	foreach ($keyarr as $key=>$value){
			if(strpos($ziliao['danwei'],$value) !== false){
            db('loan')->where('id',$loan['id'])->update(['status'=>6,'errortext'=>'综合评分不足']);
                $opensms->todosms($loan['id'],$loan['mobile'],1003);
              sendmsg('审核失败，原因：综合评分不足');
            break;
            }
              
		}
        $opensms->todosms($loan['id'],$loan['mobile'],1004);
            sendmsg('借款订单初审已通过，请进行下一步操作');
    }
    }
    }
}
