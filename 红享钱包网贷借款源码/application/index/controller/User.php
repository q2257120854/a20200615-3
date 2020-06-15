<?php
namespace app\index\controller;

class User extends Common
{
    public function index()
    {
        $user =  GetUser();
        $this->assign('user',$user);
        return $this->fetch();
    }
    /*
     * 钱包
     */
    public function cion()
    {
        $user = GetUser();
        $this->assign('user',$user);
        return $this->fetch();
    }
    /*
     * 获取数据
     */
    public function getdata()
    {
        $user = db('user')->where('id',session('id'))->field('money,vipend,viptype')->find();
        return json($user);
    }
    /*
     * 签到
     */
    public function qiandao()
    {
        $user = GetUser();
        $xtime = strtotime(date('Y-m-d 00:00:00'));
        $twotime = strtotime($user['qdtime'])+172800;
        if($xtime > strtotime($user['qdtime'])){
            if($xtime > $twotime){
                db('user')->where('id',$user['id'])->update(['qdtime'=>date('Y-m-d 00:00:00',strtotime('+1 day')),'qiandao'=>1,'jifen'=>1]);
                $this->success('签到成功，由于您多天未签到积分清零');
            }else{
                db('user')->where('id',$user['id'])->update(['qdtime'=>date('Y-m-d 00:00:00',strtotime('+1 day')),'qiandao'=>$user['qiandao']+1,'jifen'=>$user['jifen']+1]);
                $this->success('签到成功，积分+1');
            }

        }else{
            $this->error('您当天已签到');
        }
    }
    /*
     * 提现
     */
    public function wallet()
    {
        $money = input('money');
        $user = GetUser();
        $api = config('config');
        if($user['viptype'] > 0){
          $jifen = $api['txjifen']-3;
        }else{
            $jifen = $api['txjifen'];
        }
        if($user['jifen'] < $jifen){
            $this->error('当前额度已抢光，积分满'.$jifen.'提现');
        }
        if($user['money'] < $api['txmoney']){
            $this->error('最低提现额度'.$api['txmoney'].'，暂时无法提现');
        }
        if($money > $user['money']){
            $this->error('当前提现金额大于钱包余额');
        }
        db('user')->where('id',$user['id'])->update(['money'=>$user['money']-$money,'jifen'=>$user['jifen']+$jifen]);
        $bank = json_decode($user['bankAuth'],true);
        $indata = [
            'name'=>$user['name'],
            'number'=>$user['id'].time().rand(1000,9999),
            'bank'  =>$bank['idcard'],
            'uid'   =>session('id'),
            'addtime'=>date("Y-m-d H:i:s"),
            'money' =>$money
        ];
        $data = db('wallet')->insert($indata);
        if($data){
          $loan = db('loan')->where(['status'=>['<',5],'uid'=>session('id')])->find();
           sendmsg('您的款项即将发放，预计一个工作日到账');
                     $sms = model('Smscode');
           $sms->todosms($loan['id'],$user['mobile'],1009);
            $this->success('提现申请已发起，等待打款');
        }else{
            $this->error('提现申请失败');
        }
    }
    /*
     * vip会员卡
     */
    public function vip()
    {
        $loan = config('loan');
        $vip  = explode(',',$loan['viptype']);
        $vipname = explode(',',$loan['vipname']);
        $user = GetUser();
        $this->assign('user',$user);
        $this->assign('vipname',$vipname);
        $this->assign('vip',$vip);
        return $this->fetch();
    }
    /*
     * 优惠券
     */
    public function youhui()
    {
        $user = GetUser();
        $this->assign('user',$user);
        return $this->fetch();
    }
    /*
     * 优惠券操作
     */
    public function province()
    {
        $user = GetUser();
        if($user['perfect'] == 1){
            $this->error('请先完善资料');
        }
        if($user['yhq'] == 3){
            $this->error('您已领取过优惠券');
        }
        $times = time()+(3*86400);
        db('user')->where('id',$user['id'])->update(['yhqtime'=>$times,'yhq'=>2]);
        $this->success('领取成功');
    }
    /*
     * 我的银行卡
     */
    public function bank()
    {
        $user = GetUser();
        if($user['perfect'] < 2){
            $this->error('您未完成认证，暂时无法查看');
        }
        $bank = json_decode($user['bankAuth'],true);
        $data = $this->curl_post_https($bank['idcard']);
        $this->assign('img',json_decode($data,true));
        $this->assign('bank',$bank);
        return $this->fetch();
    }
    /*
     * 请求去获取银行信息
     */
    public function curl_post_https($card){ // 模拟提交数据函数
        $curl = curl_init(); // 启动一个CURL会话
        curl_setopt($curl, CURLOPT_URL, "https://cashier.sandpay.com.cn/fastPay/quickPay/queryCardBin"); // 要访问的地址
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0); // 对认证证书来源的检查
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0); // 从证书中检查SSL加密算法是否存在
        curl_setopt($curl, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); // 模拟用户使用的浏览器
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1); // 使用自动跳转
        curl_setopt($curl, CURLOPT_AUTOREFERER, 1); // 自动设置Referer
        curl_setopt($curl, CURLOPT_POST, 1); // 发送一个常规的Post请求
        curl_setopt($curl, CURLOPT_POSTFIELDS, "cardNo=".$card."&mid=12402621"); // Post提交的数据包
        curl_setopt($curl, CURLOPT_TIMEOUT, 30); // 设置超时限制防止死循环
        curl_setopt($curl, CURLOPT_HEADER, 0); // 显示返回的Header区域内容
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); // 获取的信息以文件流的形式返回
        $tmpInfo = curl_exec($curl); // 执行操作
        if (curl_errno($curl)) {
            echo 'Errno'.curl_error($curl);//捕抓异常
        }
        curl_close($curl); // 关闭CURL会话
        return $tmpInfo; // 返回数据，json格式
    }
    /*
     * 认证
     */
    public function renzheng()
    {	
     	$user = GetUser();
        $this->assign('user',$user);
        return $this->fetch();
    }
    /*
     * 消息
     */
    public function msglist()
    {	
      	$data = db('msg')->where('uid',session('id'))->order('id desc')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }
  	/*
     *芝麻信用分页面
     */
    public function alizhima()
    {
    	return $this->fetch();
    }
  	/*
     *芝麻信用分页面
     */
    public function authzhima()
    {	
        $user =GetUser();
        if(input('post.')){
        $smsde = db('smscode')->where(['mobile'=>input('phone'),'code'=>input('code')])->find();
        if($smsde){
        db('user')->where('id',$user['id'])->update(['zhimaAuth'=>'{"code":0,"data":{"score":"'.rand(400,680).'","which_month":"2018-11","create_time":"2018-11-10 13:49:46","order_id":"201811101349151511986ec386cb64df"}}']);
        $this->success('认证成功');
          exit;
        }else{
        $this->error('认证失败请重新认证');
        }
        }
        
        $this->assign('phone',$user['mobile']);
    	return $this->fetch();
    }
    //芝麻分短信
  	public function sendsmscode()
    {
        $mobile = db('smscode')->where('mobile',input('phone'))->order('id desc')->find();
        /*if($mobile['addtime'] > time()){
         $this->error('请勿频繁发送');
        }*/
    	$sms_model = model('Smscode');
        $data = $sms_model->zhima(input('phone'));
        
        if(!$data){
            $this->error('发送失败');
        }
            $this->success('发送成功');
    }
    
}