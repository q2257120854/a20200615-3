<?php
namespace app\index\model;

use think\Model;

class Loan extends Model
{
    /*
     * 借款订单天
     */
    public function DayLoan($data = [],$yhq)
    {
        $user = GetUser();
        $loan = config('loan');
        $data['money'] = $data['money'];
        $lixid = Lixi($data['money'],$data['term'],$yhq);
        $lixi  =$data['money']+$lixid;
        $addtime = time()+86400*$data['term'];
        $indata = [
            'uid'=>session('id'),
            'name'=>$user['name'],
            'mobile'=>$user['mobile'],
            'number'=>Getorder(),
            'loanamount'=>$data['money'],
            'loantype'  =>$loan['typeterm'],
            'loanlixi'  =>$lixid,
            'loanend'   =>$addtime,
            'allmoney'  =>$lixi,
            'loanterm'  =>$data['term'],
          	'addtime'   =>time()+180,
            'source'    =>$user['source']
        ];
        $ret = $this->save($indata);
        if(!$ret){
            return false;
        }
            return true;
    }
    /*
     * 借款订单月
     */
    public function MonthLoan($data = [],$yhq)
    {
        $user = GetUser();
        $loan = config('loan');
        $data['money'] = $data['money'];
        $lixid = Lixi($data['money'],$data['term'],$yhq);
        $lixi  =$data['money']+$lixid;
        $addtime = time()+86400*$data['term']*30;
        $termd = $lixi/$data['term'];
        $indata = [
            'uid'       =>session('id'),
            'name'      =>$user['name'],
            'mobile'    =>$user['mobile'],
            'number'    =>Getorder(),
            'loanamount'=>$data['money'],
            'loantype'  =>$loan['typeterm'],
            'loanlixi'  =>$lixid,
            'loanend'   =>$addtime,
            'allmoney'  =>$lixi,
            'repayment' =>$termd,
            'qishu'     =>1,
            'qishutime' =>time(),
            'loanterm'  =>$data['term'],
            'addtime'   =>time()+180
        ];
        $ret = $this->save($indata);
        if(!$ret){
            return false;
        }
        db('user')->where('id',$user['id'])->update(['yhq'=>3]);
        return true;
    }
}