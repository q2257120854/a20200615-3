<?php
namespace app\index\controller;

class Pay extends Common
{
    public function index()
    {

    }
    /*
     * 发起会员交易
     */
    public function payvip()
    {
        $vip   = input('vip');
        $pay_model = model('pay');
        $order = session('id').date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
        $loan = config('loan');
            $vipmoney = explode(',',$loan['vipmoney']);
            if($vip == 1){
                $money = $vipmoney['0'];
            }
      if($vip == 2){
                $money = $vipmoney['1'];
            }
      if($vip == 3){
                $money = $vipmoney['2'];
            }
        $data = $pay_model->VipOrder($vip,$order,$money);
        if($data){
          
        //构造要请求的参数数组，无需改动
        $config = config('config');
        $api = config('api');
        $notify_url = $config['domain']."/callback.php/index/ylhyf";
        $return_url = $config['domain']."/user/index.html";
       
        //建立请求
        $retdata = $this->order($api,$order,$money,$notify_url,$return_url);
        $urlcall = blsend($retdata,'post','立即支付','',$api['paykey']);
        echo $urlcall;

        }else{
            $this->error('订单生成失败');
        }

    }
      /*
     * 发起审核费支付
     */
    public function shpay()
    {
		$loan = config('loan');
        $vfuw = $loan['servicepay']/100;
        $rets = db('loan')->where(['uid'=>session('id'),'status'=>1])->find();
        if(!$rets){
        $this->error('未知错误');
        }
        $pay_model = model('pay');
        $title = '审核费';
        $user = GetUser();
        $money = number_format($rets['loanamount'] * $vfuw,2);
        $order = session('id').date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
        $push = $pay_model->Order($title,$user['name'],$rets['id'],$money,$order);
        if(!$push){
        $this->error('订单生成失败');
        }
                //构造要请求的参数数组，无需改动
        $config = config('config');
        $api = config('api');
        $notify_url = $config['domain']."/callback.php/index/ylshf";
        $return_url = $config['domain']."/loan/index.html";
       
        //建立请求
        $retdata = $this->order($api,$order,$money,$notify_url,$return_url);
        $urlcall = blsend($retdata,'post','立即支付','',$api['paykey']);
        echo $urlcall;
    }
  	/*
     *发起还款交易
     */
  	public function huankuan()
    {
      $id = input('id');
      $loan = db('loan')->where('id',$id)->find();
      	if(!$loan){
      		$this->error('订单不存在');
      	}
 		$pay_model = model('pay');
        $title = '订单还款';
        $user = GetUser();
        $money = $loan['repayment'];
        $order = session('id').date('Ymd') . str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);
        $push = $pay_model->Order($title,$user['name'],$id,$money,$order);
        if(!$push){
        $this->error('订单生成失败');
        }
                //构造要请求的参数数组，无需改动
        $config = config('config');
        $api = config('api');
        $notify_url = $config['domain']."/callback.php/index/ylhuankuan";
        $return_url = $config['domain']."/loan/index.html";
       
        //建立请求
        $retdata = $this->order($api,$order,$money,$notify_url,$return_url);
        $urlcall = blsend($retdata,'post','立即支付','',$api['paykey']);
        echo $urlcall;    
    }
    /*
     * 组装支付网关订单
     */
    public function order($api,$order,$money,$notify_url,$return_url)
    {
        $parameter = array(
            "partner" => $api['paymid'],
            "seller_email" => $api['payappid'],
            "payment_type"	=> '易连支付',
            "out_trade_no"	=> $order,
            "subject"	=> '易连支付',
            "total_fee"	=> $money,
            "notify_url"	=> $notify_url,
            "return_url"	=> $return_url,
            "exter_invoke_ip"	=> $_SERVER["REMOTE_ADDR"],
            "username"	=> session('id')
        );
        return $parameter;
    }
}