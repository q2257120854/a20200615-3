<?php
namespace app\varjoker\controller;

class User extends Common
{
    public function index()
    {
        $where = [];
        if(input('perfect')){
           $where['perfect'] = input('perfect');
            $alluser = input('perfect');
        }else{
            $alluser = 'all';
        }
        if(input('mobile')){
            $where['mobile'] = input('mobile');
        }
        $list=db('user')->where($where)->order('id desc')->paginate(10);
        $this->assign('alluser',$alluser);
        $this->assign('list',$list);
        return $this->fetch();
    }
    public function adduser()
    {
        $data = input('post.');
        $mobile = $data['mobile'];
        $data['addtime'] = date('Y-m-d H:i:s');
        $data = db('user')->insert($data);
        if($data){
            vsyslog('添加用户'.$mobile,session('adminuser'));
            $this->success('添加用户成功');
        }else{
            $this->error('添加用户失败');
        }
    }
    public function editd()
    {
        $id = input('get.id');
        if(input('post.')){
            $data =input('post.');
            $updata['mobile'] = $data['mobile'];
            $updata['password'] = $data['password'];
            $data = db('user')->where('id',$data['id'])->update($updata);
            if($data){
                vsyslog('修改用户'.$updata['mobile'],session('adminuser'));
                $this->success('修改成功');
                exit;
            }else{
                $this->error('修改失败');
            }
        }
        $data = db('user')->where('id',$id)->field('mobile,password')->find();
        if(!$data){
            $this->error('用户不存在');
        }
        return json($data);
    }
    public function deld()
    {
        $id = input('get.id');
        $data = db('user')->where('id',$id)->delete();
        if($data){
            vsyslog('删除用户',session('adminuser'));
            $this->success('删除成功');
        }else{
            $this->error('删除失败');
        }
    }
    public function info()
    {
        $id= input('get.id');
        $data = db('user')->where('id',$id)->field('name,idcard,personal,mobileAuth,photoAuth,bankAuth,taobaoAuth,zhimaAuth')->find();
        $this->assign('data',$data);
        return $this->fetch();
    }
    /*
     * 发送通知短信
     */
    public function sendsms()
    {
        $id= input('id');
        $tid=input('tid');
        $sms = model('Smscode');
        $sms->redosms($id,$tid);
    }
    /*
     *修改银行卡
     */
  	public function editbank()
    {
    $id= input('get.id');
    $idbank= input('get.bank');
    $user = db('user')->where('id',$id)->find();
    $bank = json_decode($user['bankAuth'],true);
    $data['name'] = $bank['name'];
    $data['idcard'] = $idbank;
    db('user')->where('id',$id)->update(['bankAuth'=>json_encode($data)]);
    $this->success('修改银行卡成功');
    }
      /*
     *修改余额
     */
  	public function romoney()
    {
    $id= input('get.id');
    $money= input('get.money');
    $user = db('user')->where('id',$id)->find();
    db('user')->where('id',$id)->update(['money'=>$user['money']+$money]);
    $this->success('修改余额成功');
    }
    /*
   *导出xls
   */
	public function daochuxls()
    {
    $list = db('user')->where('perfect',1)->select();
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
            $objPHPExcel->getActiveSheet()->setCellValue('A'.($i+2),$list[$i]['id']);//ID
                        $objPHPExcel->getActiveSheet()->setCellValue('C'.($i+2),$list[$i]['name']);//标签码
            $objPHPExcel->getActiveSheet()->setCellValue('B'.($i+2),$list[$i]['mobile']);//防伪码
        }
        //7.设置保存的Excel表格名称
        $filename = '未实名信息'.date('ymd',time()).'.xls';
        //8.设置当前激活的sheet表格名称；
        $objPHPExcel->getActiveSheet()->setTitle('未实名信息');
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
