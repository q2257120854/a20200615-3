<?php
namespace app\varjoker\controller;

class Pay extends Common
{
    public function index()
    {
        $where = [];
        if(input('name')){
            $where['name'] = input('name');
        }
        if(input('number')){
            $where['number'] = input('number');
        }
        $list=db('pay')->where($where)->order('id desc')->paginate(10);
        $getd = db('pay')->where('status',2)->count();
        $money =db('pay')->where('status',2)->sum('money'); 
        $this->assign('count',$getd);
        $this->assign('money',$money);
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function putforward()
    {
        $where = [];
        if(input('name')){
            $where['name'] = input('name');
        }
        if(input('number')){
            $where['number'] = input('number');
        }
        $list=db('wallet')->where($where)->order('id desc')->paginate(10);
        $getd = db('wallet')->where('status',2)->count();
        $money =db('wallet')->where('status',2)->sum('money'); 
        $this->assign('count',$getd);
        $this->assign('money',$money);
        $this->assign('list',$list);
        return $this->fetch();
    }
   public function vip()
    {
        $where = [];
        if(input('number')){
            $where['number'] = input('number');
        }
        $where['money'] = ['>',0];
        $list=db('reorder')->where($where)->order('id desc')->paginate(10);
        $count = db('reorder')->where('status',2)->count();
        $money = db('reorder')->where('status',2)->sum('money');
     $this->assign('money',$money);
        $this->assign('count',$count);
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function successd()
    {
        $id= input('get.id');
        $data = db('wallet')->where('id',$id)->update(['status'=>3]);
        $loan = db('wallet')->where('id',$id)->find();
        db('loan')->where(['uid'=>$loan['uid'],'status'=>2])->update(['status'=>3]);
        if($data){
          $user =db('user')->where('id',$loan['uid'])->find();

            $this->success('提现审核完成');
        }else{
            $this->error('提现审核失败');
        }
   }
    public function faild()
    {
        $id= input('get.id');
        $data = db('wallet')->where('id',$id)->update(['status'=>2]);
        if($data){
            $this->success('提现驳回完成');
        }else{
            $this->error('提现驳回失败');
        }
    }
}
