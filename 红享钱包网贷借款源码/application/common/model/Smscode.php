<?php

namespace app\common\model;

use think\Model;

class Smscode extends Model {

    //注册验证码,找回密码短信
    public function sendsms($mobile, $tpid) {
//         $sms_return = array(
//            "-2" => "接口密钥不正确",
//            "-21" => "MD5接口密钥加密不正确",
//            "-3" => "短信数量不足",
//            "-11" => "该用户被禁用",
//            "-14" => "短信内容出现非法字符",
//            "-4" => "手机号格式不正确",
//            "-41" => "手机号码为空",
//            "-42" => "短信内容为空",
//            "-51" => "短信签名格式不正确,接口签名格式为：【签名内容】",
//            "-52" => "短信签名太长",
//            "-6" => "IP限制",
//            "0" => "短信发送数量",
//        );
        $code = rand(100000, 999999);
        $data = [
            'mobile' => $mobile,
            'code' => $code,
            'addtime' => time() + 300
        ];
        $sysapi = config('api');
        $smsapi = config('smstid');
        $smsda = str_replace('$code', $code, $smsapi[$tpid]);
        $result = file_get_contents("http://utf8.api.smschinese.cn/?Uid=" . $sysapi['smsappid'] . "&Key=" . $sysapi['smskey'] . "&smsMob=$mobile&smsText=" . $smsda . "&sendTime=&taskName=&checkcontent=0&mobilenumber=1&countnumber=1&telephonenumber=1");
       
        if ($result != 1) {
            return false;
        }
        $sms = $this->save($data);
        if (!$sms) {
            return false;
        }
        return true;
    }

    //通知借款状态
    public function todosms($id, $mobile, $tpid) {
        $code = rand(100000, 999999);
        $loan = db('loan')->where('id', $id)->find();
        $allmoney = $loan['allmoney'];
        $dtime = date("Y-m-d", $loan['loanend']);
        $sysapi = config('api');
        $smsapi = config('smstid');
        $userx = db('user')->where('mobile', $mobile)->find();
        //$smsda = str_replace('$code',$code,$smsapi[$tpid]);
        $data = str_replace('$mobile', $userx['name'], $smsapi[$tpid]);
        $data = str_replace('$allmoney', $loan['allmoney'], $data);
        $datas = file_get_contents("http://47.94.1.67:9001/sms.aspx?action=send&userid=" . $sysapi['smstmid'] . "&account=" . $sysapi['smstappid'] . "&password=" . $sysapi['smstkey'] . "&mobile=$mobile&content=" . $data . "&sendTime=&taskName=&checkcontent=0&mobilenumber=1&countnumber=1&telephonenumber=1");
        $xml = simplexml_load_string($datas);
        $xmljson = json_encode($xml);
        $arr = json_decode($xmljson, true);
        if ($arr['returnstatus'] != 'Success') {

            return false;
        }

        return true;
    }

    //通知未实名未支付
    public function redosms($mobile, $tpid) {
        $sysapi = config('api');
        $smsapi = config('smstid');
        $datas = file_get_contents("http://47.94.1.67:9001/sms.aspx?action=send&userid=" . $sysapi['smstmid'] . "&account=" . $sysapi['smstappid'] . "&password=" . $sysapi['smstkey'] . "&mobile=$mobile&content=" . $smsapi[$tpid] . "&sendTime=&taskName=&checkcontent=0&mobilenumber=1&countnumber=1&telephonenumber=1");
        $xml = simplexml_load_string($datas);
        $xmljson = json_encode($xml);
        $arr = json_decode($xmljson, true);
        if ($arr['returnstatus'] != 'Success') {

            return false;
        }

        return true;
    }

    //注册验证码,找回密码短信
    public function zhima($mobile) {
        $code = rand(100000, 999999);
        $data = [
            'mobile' => $mobile,
            'code' => $code,
            'addtime' => time() + 300
        ];
        $sysapi = config('api');
        
        
 
        $result = file_get_contents("http://utf8.api.smschinese.cn/?Uid=" . $sysapi['smsappid'] . "&Key=" . $sysapi['smskey'] . "&smsMob=$mobile&smsText=【通知】您正在授权查询您的信息，您的验证码：".$code."&sendTime=&taskName=&checkcontent=0&mobilenumber=1&countnumber=1&telephonenumber=1");
       
        if ($result != 1) {
            return false;
        }
        $sms = $this->save($data);
        if (!$sms) {
            return false;
        }
        return true;
//        $datas = file_get_contents("http://47.94.1.67:9001/sms.aspx?action=send&userid=" . $sysapi['smsmid'] . "&account=" . $sysapi['smsappid'] . "&password=" . $sysapi['smskey'] . "&mobile=$mobile&content=【通知】您正在授权查询您的信息，您的验证码：$code&sendTime=&taskName=&checkcontent=0&mobilenumber=1&countnumber=1&telephonenumber=1");
//        $xml = simplexml_load_string($datas);
//        $xmljson = json_encode($xml);
//        $arr = json_decode($xmljson, true);
//        if ($arr['returnstatus'] != 'Success') {
//            return false;
//        }
//        $sms = $this->save($data);
//        if (!$sms) {
//            return false;
//        }
//        return true;
    }

}
