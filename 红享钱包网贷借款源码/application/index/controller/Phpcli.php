<?php
namespace app\index\controller;

use think\Controller;

class Phpcli extends Controller
{
	public function cetcall()
    {
    	$data = db('loan')->where(['addtime'=>['<',time()],'status'=>0])->limit('50')->order('id desc')->select();
      	if(!$data){
        exit('暂无订单');
        }
       $config =config('config');
      	foreach ($data as $key => $value) {
        file_get_contents($config['domain'].url('phpcli/shenhe')."?id=".$value['uid']);
	}
      echo "执行成功";
    }
  	public function shenhe()
    {	
      $id = input('id');
     $apiloan = config('loan');
    $loan = db('loan')->where(['uid'=>$id,'status'=>0])->find();
    $opensms = model('Smscode');
    $user = db('user')->where('id',$id)->find();
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
            sendmsg('借款订单审核成功');
    }
    }
    }
}