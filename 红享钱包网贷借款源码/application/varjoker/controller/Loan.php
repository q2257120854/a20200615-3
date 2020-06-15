<?php
namespace app\varjoker\controller;

class Loan extends Common
{
    public function index()
    {
        $where = [];
        if(input('status')){
          if(input('status') == 9){
          $where['status'] = 0;
           
          }else{
          $where['status'] = input('status');
          }
           
        }
        if(input('mobile')){
            $where['mobile'] = input('mobile');
        }
        if(input('name')){
            $where['name'] = input('name');
        }
        if(input('number')){
            $where['number'] = input('number');
        }
        if(input('viptype')){
            $where['viptype'] = input('viptype');
        }
        $list=db('loan')->where($where)->paginate(10);
        $this->assign('status',input('status'));
        $this->assign('viptype',input('viptype'));
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function chushen()
    {
        $id = input('get.id');
     $apiloan = config('loan');
    $loan = db('loan')->where('id',$id)->find();
    $opensms = model('Smscode');
    $user = db('user')->where('id',$loan['uid'])->find();
    if($loan){
    if(time() > $loan['addtime']){
              $money = $loan['loanamount']*($apiloan['loanshfv']/100);
              $lixi = intval($money*($apiloan['loanint']/100));
             $allmoney = $money+$lixi*30*$loan['loanterm'];
              db('loan')->where('id',$loan['id'])->update(['loanamount'=>$money,'loanlixi'=>$lixi,'allmoney'=>$allmoney,'repayment'=>intval($allmoney/$loan['loanterm']),'status'=>1]);
       // $opensms->todosms($loan['id'],$loan['mobile'],1004);
           // sendmsg('申请借款成功1');
    }
    }
      
        $this->success('初审通过');
    }
  	/*
     *修改总金额
     */
  public function editloand()
  {
  	$id = input('get.id');
    $money= input('get.money');
    db('loan')->where('id',$id)->update(['loanamount'=>$money]);
    return json(['code'=>1,'msg'=>'修改成功']);
  }
  /*
   *确认放款
   */
  public function querenfk()
  {
  	$id = input('get.id');
    $list = db('loan')->where('id',$id)->find();
    $user = db('user')->where('id',$list['uid'])->find();
    db('user')->where('id',$list['uid'])->update(['money'=>$user['money']+$list['loanamount']]);
    db('loan')->where('id',$id)->update(['status'=>2]);
    return json(['code'=>1,'msg'=>'放款成功']);
  }
  /*
   *驳回请求
   */
  public function bohuikex()
  {
    $id = input('get.id');
    $text= input('get.texst');
     db('loan')->where('id',$id)->update(['errortext'=>$text,'status'=>6]);
    return json(['code'=>1,'msg'=>'修改成功']);
  }
   /*
    *还款
    */
  public function huandangqi()
  {
   $id = input('get.id');
        $list = db('loan')->where('id',$id)->find();
    	$user = db('user')->where('id',$list['uid'])->find();
        db('user')->where('id',$user['id'])->update(['banmoney'=>$user['banmoney']-$list['repayment']]);
        $qishu = $list['qishu']+1;
        if($list['loanterm'] == $qishu){
            db('loan')->where('id',$id)->update(['status'=>5]);
          db('user')->where('id',$user['id'])->update(['banmoney'=>0]);
        }
        db('loan')->where('id',$id)->update(['qishu'=>$qishu,'qishutime'=>strtotime(date("Y-m-d H:i:s",strtotime("+1day",$list['qishutime'])))]);
    
  }
  /*
   *还所有
   */
   public function enddan()
    {
        $id = input('get.id');
        $list = db('loan')->where('id',$id)->find();
    	$user = db('user')->where('id',$list['uid'])->find();
        db('loan')->where('id',$id)->update(['status'=>5]);
        db('user')->where('id',$user['id'])->update(['banmoney'=>0]);
    }
	/*
     *驳回内容
     */
  public function rebohui()
  {
  $id = input('get.id');

  $listp = db('loan')->where('id',$id)->find();
    
    return json(['code'=>1,'msg'=>$listp['errortext']]);
  }
  /*
   *导出xls
   */
	public function daochuxls()
    {
    $list = db('loan')->where('viptype',1)->select();
               //halt($list);
        //2.加载PHPExcle类库
        vendor('PHPExcel.PHPExcel');
        //3.实例化PHPExcel类
        $objPHPExcel = new \PHPExcel();
        //4.激活当前的sheet表
        $objPHPExcel->setActiveSheetIndex(0);
        //5.设置表格头（即excel表格的第一行）
        $objPHPExcel->setActiveSheetIndex(0)
                ->setCellValue('A1', '用户id')
                ->setCellValue('B1', '用户名')
                                ->setCellValue('C1', '手机号');
        //设置A列水平居中
        $objPHPExcel->setActiveSheetIndex(0)->getStyle('A')->getAlignment()
                    ->setHorizontal(\PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        //设置单元格宽度
        $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('A')->setWidth(10);
        $objPHPExcel->setActiveSheetIndex(0)->getColumnDimension('B')->setWidth(30); 
        //6.循环刚取出来的数组，将数据逐一添加到excel表格。
        for($i=0;$i<count($list);$i++){
            $objPHPExcel->getActiveSheet()->setCellValue('A'.($i+2),$list[$i]['uid']);//ID
                        $objPHPExcel->getActiveSheet()->setCellValue('C'.($i+2),$list[$i]['name']);//标签码
            $objPHPExcel->getActiveSheet()->setCellValue('B'.($i+2),$list[$i]['mobile']);//防伪码
        }
        //7.设置保存的Excel表格名称
        $filename = '未支付信息'.date('ymd',time()).'.xls';
        //8.设置当前激活的sheet表格名称；
        $objPHPExcel->getActiveSheet()->setTitle('未支付信息');
        //9.设置浏览器窗口下载表格
        header("Content-Type: application/force-download");  
        header("Content-Type: application/octet-stream");  
        header("Content-Type: application/download");  
        header('Content-Disposition:inline;filename="'.$filename.'"');  
        //生成excel文件
        $objWriter = \PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
        //下载文件在浏览器窗口
        $objWriter->save('php://output');
        exit;
    }
}
