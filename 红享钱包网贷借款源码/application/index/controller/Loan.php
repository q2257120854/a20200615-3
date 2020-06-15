<?php
namespace app\index\controller;

use think\Request;

class Loan extends Common
{

    public function index()
    {
        $loan = db('loan')->where(['uid'=>session('id'),'status'=>['lt',4]])->select();
        $count= db('loan')->where('uid',session('id'))->count();
        $sucount= db('loan')->where(['uid'=>session('id'),'status'=>['lt',4]])->find();
    
        if($sucount){
            $exc = $sucount['loanterm'];
			 if(!$loan){
            $sucount['allmoney'] = "0.00";
            $loan = 0;
        }
        }else{
            $exc = 0;
          	 if(!$loan){
            $loan = 0;
        }
        }
    
       
  
        if($sucount['status'] == 0){
            $status="1";
        }else if($sucount['status'] == 1){    
            $status="2";
        }else{
            $status=$sucount['status'];
           
        }
        if($sucount['viptype'] == 1){
            $viptype="1";
          }else{
            $viptype="2";
          }
        if(!$sucount){
        $status="5";
        $viptype="5";
        $sucount['allmoney']="0.00";
        $sucount['repayment']="0.00";
        }
      	$vuser = GetUser();
        $this->assign('vuser',$vuser);
        $this->assign('viptype',$viptype);
        $this->assign('status',$status);
        $this->assign('exc',$exc);
        $this->assign('sucount',$sucount);
        $this->assign('count',$count);
        $this->assign('loan',$loan);
        return $this->fetch();
    }
    /*
     * 发起借款
     */
    public function loanatonce()
    {
        $user = GetUser();
        $loan = $this->GetLoan();
        if($loan){
            $this->error('您有未完成订单，暂时无法发起借款',url('loan/index'));
        }
        if($user['perfect'] != 2){
            $this->error('您未实名认证，请认证后发起借款',url('user/renzheng'));
        }
        $loanx = config('loan');
        $data = explode(',',$loanx['loanmoney']);
        $term = explode(',',$loanx['loanterm']);
        $termkey = max(array_flip($term));
        $key  = max(array_flip($data));
        $this->assign('user',$user);
        $bank = json_decode($user['bankAuth'],true);
        $this->assign('bank',$bank);
        $this->assign('termmax',$term[$termkey]);
        $this->assign('termini',$term);
        $this->assign('minim',$data);
        $this->assign('maxm',$data[$key]);
        return $this->fetch();
    }
    /*
     * 保存借款信息
     */
    public function saveloan()
    {

        $data = input('post.');
        $loan = config('loan');
        $user = GetUser();
        if(empty($data['youhui'])){
            $yhq = 1;
        }else{
            if($user['yhq'] == 3){
                $this->error('您的优惠券已使用或失效');
            }else if($user['yhq'] == 1){
                $this->error('您暂未领取优惠券');
            }
            $yhq = $loan['youhui']/100;

        }
        $datax = explode(',',$loan['loanmoney']);
        $key  = max(array_flip($datax));
        $term = explode(',',$loan['loanterm']);
        $termkey = max(array_flip($term));
        if($data['money'] < $datax['0'] || $data['money'] > $datax[$key]){
            $this->error('数据错误，请重新输入');
        }
        if($data['term'] < $term['0'] || $data['term'] > $term[$termkey]){
            $this->error('数据错误，请重新输入');
        }
        $loan_model = model('loan');
        if($loan['typeterm'] == '天'){
         $ret = $loan_model->DayLoan($data,$yhq);
         if(!$ret){
             $this->error('申请借款失败，请重新发起');
         }else{
             sendmsg('您的借款订单已提交申请，正在审核中...');
             $this->success('申请借款成功',url('loan/index'));
         }

        }else if($loan['typeterm'] == '月'){
         $ret = $loan_model->MonthLoan($data,$yhq);
            if(!$ret){
                $this->error('申请借款失败，请重新发起');
            }else{
                sendmsg('您的借款订单已提交申请，正在审核中...');
                $this->success('申请借款成功',url('loan/index'));
            }
        }
    }
   
}