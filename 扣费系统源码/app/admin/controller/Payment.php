<?php
/*
 * 作者: Clown
 * 日期:2019-7-10
 * 邮箱:812827345@qq.com
 */

namespace app\admin\controller;

use think\Db;


Class Payment extends AdminBase
{
    //-------------------------------微信支付


    /*
    * 渲染页面
    */
    public function wechatpay()
    {
         return $this->fetch('wechatpay');
    }

    //统一下单地址
    private $unapi = 'https://api.mch.weixin.qq.com/pay/unifiedorder';
    //支付通知处理地址
    public function unfity()
    {
       return $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . '/api.php/index/wxunfity';
    }



    //获取微信配置信息
    private function wechatConfig()
    {
        $wechatConfig = Db('driver')->where(['service_name' => 'Pay','driver_name' => 'Wxpay','status' => 1])->find();
        $config = unserialize($wechatConfig['config']);
        if(!empty($config))
        {
            return $config;
        }

    }

    /*
     * 预支付
     */
    public function prepay()
    {
        $data = $this->param;
        if($data['price'] != '' && $data['price'] >= 1)
        {
                    //将元转成分
            $data['price'] = $data['price'] * 100;
            $data['pay_order'] = date('YmdHis',time()) .mt_rand(10000,99999);//订单号
                    //调用统一下单api
            $params = [
                'appid'            => $this->wechatConfig()['appid'],//公众号id
                'mch_id'           => $this->wechatConfig()['partnerid'],//商户id
                'nonce_str'        => md5(time()),//随机字符串
                'body'             => 'seo扣费系统充值',//商品描述
                'out_trade_no'     => $data['pay_order'],//内部订单号
                'total_fee'        => $data['price'],//总价单位分
                'spbill_create_ip' => $_SERVER['SERVER_ADDR'],//客户端ip
                'notify_url'       => $this->unfity(),//支付通知url
                'trade_type'       => 'NATIVE',//支付类型
                'product_id'       =>  $data['pay_order'],//产品id/订单号

            ];
            $arr = $this->unifiedoreder($params);
            //$this->logs('log.txt',$arr);
            if($arr)
            {
                $info = [
                    'userid'      => MEMBER_ID,
                    'beizhu'      => '微信充值',
                    'type'        => 1,
                    'price'       => $data['price'] / 100,//转成元
                    'create_time' => time(),
                    'pay_order'   => $data['pay_order'],
                    'pay_status'  => 0,
                ];
                $list = Db('chongzhi')->insert($info);
                if($list)
                {
                    $code_img = create_qrcode($arr['code_url']);
                    $info = $code_img;
                }else{
                    $info['msg']  = '请求错误,请重新发起支付';
                }
            }else{
                $info['msg'] = '支付请求错误,请重新发起支付';
            }

        }else{
            $info['msg'] = '充值金额必须大于一元';
        }

        return $info;



    }

    /*
     * 获取签名
     */
    public function getSign($arr)
    {
        //去除空值
        array_filter($arr);
        if(isset($arr['sign']))
        {
            unset($arr['sign']);
        }

        //排序
        ksort($arr);
        //组装字符串
        $str = $this->arrToUrl($arr) . '&key=' . $this->wechatConfig()['partnerkey'];
        //使用md5加密 转成大写
        return strtoupper(md5($str));


    }

    /*
     * 获取带签名的数组
     */
    public function setSign($arr)
    {
        $arr['sign'] = $this->getSign($arr);
        return $arr;
    }

    /*
    * 校验签名
    */
    public function checkSign($arr)
    {
        //生成新签名
        $sign = $this->getSign($arr);
        //和数组中原始签名比较
        if($sign == $arr['sign'])
        {
            return true;
        }else{
            return false;
        }
    }


    /*
    * 数组转url格式字符串,不带key
    */
    public function arrToUrl($arr)
    {
        return  urldecode(http_build_query($arr));
    }

    /*
     *记录日志到文件
     */
    public function logs($file,$data)
    {
        $data = is_array($data) ? print_r($data,true) : $data;
        file_put_contents('./' .$file,$data);
    }
    //接收微信传输过来的数据
    public function getPost()
    {
        return file_get_contents('php://input');

    }

    /*
    * xml文件转数组
    */
    public function XmlToArr($xml)
    {
        if($xml == '') return '';
        libxml_disable_entity_loader(true);
        $arr = json_decode(json_encode(simplexml_load_string($xml, 'SimpleXMLElement', LIBXML_NOCDATA)), true);
        return $arr;
    }
    /*
     * 数组转xml
     */
    public function ArrToXml($arr)
    {
        if(!is_array($arr) || count($arr) == 0) return '';

        $xml = "<xml>";
        foreach ($arr as $key=>$val)
        {
            if (is_numeric($val)){
                $xml.="<".$key.">".$val."</".$key.">";
            }else{
                $xml.="<".$key."><![CDATA[".$val."]]></".$key.">";
            }
        }
        $xml.="</xml>";
        return $xml;
    }

    //post字符串到接口
    public function postStr($url,$postfields)
    {


        $ch = curl_init();
        $params[CURLOPT_URL] = $url;    //请求url地址
        $params[CURLOPT_HEADER] = false; //是否返回响应头信息
        $params[CURLOPT_RETURNTRANSFER] = true; //是否将结果返回
        $params[CURLOPT_FOLLOWLOCATION] = true; //是否重定向
        $params[CURLOPT_POST] = true;
        $params[CURLOPT_POSTFIELDS] = $postfields;
        $params[CURLOPT_SSL_VERIFYPEER] = false;
        $params[CURLOPT_SSL_VERIFYHOST] = false;
        curl_setopt_array($ch, $params); //传入curl参数
        $content = curl_exec($ch); //执行
        curl_close($ch); //关闭连接
        return $content;
    }

    //统一下单
    public function unifiedoreder($params)
    {
        //设置签名
        $params = $this->setSign($params);
        //数组转换成xml
        $xml = $this->ArrToXml($params);
        //发送数据到统一下单api地址
        $data = $this->postStr($this->unapi,$xml);
        $arr = $this->XmlToArr($data);

        if($arr['result_code'] == 'SUCCESS' && $arr['return_code'] == 'SUCCESS')
        {
            return $arr;
        }else{
            //$this->logs('error.txt',$arr);
            return false;
        }

    }





    //--------------------------------微信支付结束

}