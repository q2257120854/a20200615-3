<?php
namespace app\callback\controller;

use think\Controller;

class Index extends Controller
{
    /*
     * 易连开通会员回调
     */
    public function ylhyf()
    {
		  	$data = input('post.');
     // file_put_contents('/www/wwwroot/ver.txt', json_encode($data));
	if($data['trade_status'] == 1){
         $paylist = db('reorder')->where('number',$data['out_trade_no'])->find();
            if($paylist['status'] =="1"){
            db('reorder')->where('number',$data['out_trade_no'])->update(['status'=>2]);
            $loan =config('loan');
            $vipday = explode(",",$loan['vipterm']);
              if($paylist['viptype'] == '1'){
              $vipdays = $vipday['0'];
              }else if($paylist['viptype'] == '2'){
              $vipdays = $vipday['1'];
              }else if($paylist['viptype'] == '3'){
              $vipdays = $vipday['2'];
              }
              sendmsgcall($paylist['uid'],'您的VIP会员卡已获取，会员开通成功');
      $user = db('user')->where('id',$paylist['uid'])->update(['viptype'=>$paylist['viptype'],'vipend'=>strtotime("+".$vipdays." month")]);
        echo 'SUCCESS';
      }
	}
    }
  	/*
     *易连支付审核费
     */
   public function ylshf()
   {
    $data = input('post.');
     //file_put_contents('/www/wwwroot/ver.txt', json_encode($data));
	if($data['trade_status'] == 1){
         $paylist = db('pay')->where('number',$data['out_trade_no'])->find();
      sendmsgcall($paylist['uid'],'您的借款订单已成功支付，请耐心等待放款...');
            if($paylist['status'] =="1"){
                 $users = db('user')->where('id',$paylist['uid'])->find();
             if($users['shf'] == 0){
        	$datag = Place($users['mobile']);
            $sheng =db('province')->where('title',$datag)->find();
           db('user')->where('id',$users['id'])->update(['shf'=>1]);
            db('province')->where('id',$sheng['id'])->update(['count'=>$sheng['count']+1]);
            
        }
         	db('pay')->where('number',$data['out_trade_no'])->update(['status'=>2]);
      	$loan = db('loan')->where('id',$paylist['pid'])->update(['viptype'=>'2','putime'=>time()+3600]);
              
        echo 'SUCCESS';
      }
	}
   }
   /*
    *易连订单还款
    */
  public function ylhuankuan()
  {
   	$data = input('post.');
	if($data['trade_status'] == 1){
      $paylist = db('pay')->where('number',$data['out_trade_no'])->find();
            if($paylist['status'] =="1"){
              $loan = config('loan');
              if($loan['typeterm'] == '月'){
           db('pay')->where('number',$data['out_trade_no'])->update(['status'=>2]);
           $vloan = db('loan')->where('id',$paylist['pid'])->find();
           $user = db('user')->where('id',$paylist['uid'])->find();
           db('user')->where('id',$user['id'])->update(['banmoney'=>$user['banmoney']-$vloan['repayment']]);
           $qishu = $vloan['qishu']+1;
           if($qishu > $vloan['loanterm']){
           db('loan')->where('id',$paylist['pid'])->update(['status'=>5]);
            db('user')->where('id',$user['id'])->update(['banmoney'=>0]);
             sendmsgcall($paylist['uid'],'订单还款成功');
           }else{
           db('loan')->where('id',$paylist['pid'])->update(['qishu' =>$vloan['qishu']+1]);
           sendmsgcall($paylist['uid'],'当前已还款第'.$vloan['qishu']."期金额".$vloan['repayment']);
           }
      	  
              }else{
           db('pay')->where('number',$data['out_trade_no'])->update(['status'=>2]);
           db('loan')->where('id',$paylist['pid'])->update(['status'=>5]);    
            db('user')->where('id',$paylist['uid'])->update(['banmoney'=>0]);
                sendmsgcall($paylist['uid'],'订单还款成功');
              }
		
        echo 'SUCCESS';
      }
	}
  }
}
