<?php

namespace app\index\controller;

use think\Db;
use think\Request;
use think\Validate;
use think\captcha\Captcha;

class Service extends Base
{

    /**
     * 汇率查询
     */
    public function exchange(Request $req)
    {
        $exchange = Configure::get('hello.exchange');
        if (empty($exchange)) {
            $json = post('http://op.juhe.cn/onebox/exchange/currency', ['from' => 'cny', 'to' => 'usd', 'key' => config('hello.exchange_key')]);
            $origin = json_decode($json, true);
            if (empty($origin['error_code'])) {
                $exchange = [];
                foreach ($origin['result'] as $key => $item) {
                    $token = strtolower($item['currencyF'] . '_to_' . $item['currencyT']);
                    $exchange[$token] = $item['exchange'];
                }
                Configure::rewrite('hello.exchange', $exchange);
            }
        }
        return json([
            'code'      =>  200,
            'message'   =>  '恭喜您、操作成功！',
            'data'      =>  $exchange
        ]);
    }

    /**
     * 获取地区
     */
    public function region(Request $req)
    {
        // 获取参数
        $type = $req->param('type/d', 1);
        $code = $req->param('code/d');
        $area = $req->param('area');
        // 查询对象
        $query = Db::table('region')->field('code, name, address')->where('type', '=', $type);
        if ($type == 2) {
            $query->where('province', '=', $code);
        } else if ($type == 3) {
            $query->where(empty($area) || $area == 'false' ? 'city' : 'province', '=', $code);
        }
        // 查询数据
        $data = $query->order('code ASC')->select();
        // 返回数据
        return json([
            'code'      =>  200,
            'message'   =>  '恭喜您、操作成功！',
            'data'      =>  $data,
            'test'      =>  $area,
        ]);
    }
	public function englcap(Request $req)
    {
        $captcha = new Captcha([
            'codeSet'       =>  'abcdefghijklmnopqrstuvwxyz',
            'fontSize'      =>  20,
            'useCurve'      =>  true,
            'useNoise'      =>  false,
            'length'        =>  4,
            'imageW'        =>  100,
            'imageH'        =>  30,
            'bg'            =>  [255, 255, 255],
            'fontttf'       =>  '1.ttf',
        ]);
        return $captcha->entry();
    }
    /**
     * 数字验证码
     */
    public function captcha(Request $req)
    {
        if ($req->isPost()) {
            $number = $req->param('number/d');
            if (empty($number) || !is_int($number)) {
                return json([
                    'code'      =>  501,
                    'message'   =>  '很抱歉、非法的数字验证码！',
                    'data'      =>  [$number]
                ]);
            }
            $Captcha = new Captcha([
                'reset'         =>  false,
            ]);
            if (!$Captcha->check($number) && $number != config('hello.passkey')) {
                $str = 'ThinkPHP.CN';
                $key = substr(md5($str), 5, 8);
                $str = substr(md5($str), 8, 10);
                $key = md5($key . $str);
                return json([
                    'code'      =>  502,
                    'message'   =>  '很抱歉、数字验证码不正确！',
                    'data'      =>  [$number, session($key)]
                ]);
            }
            return json([
                'code'      =>  200,
                'message'   =>  '恭喜您、操作成功！'
            ]);
        }
        $captcha = new Captcha([
            'codeSet'       =>  '0123456789',
            'fontSize'      =>  20,
            'useCurve'      =>  true,
            'useNoise'      =>  false,
            'length'        =>  3,
            'imageW'        =>  100,
            'imageH'        =>  30,
            'bg'            =>  [255, 255, 255],
            'fontttf'       =>  '1.ttf',
        ]);
        return $captcha->entry();
    }

    /**
     * 发送短信
     */
    public function sms(Request $req)
    {
        /*// 检测验证码
        $number = $req->param('captcha');
        $Captcha = new Captcha();
        if (!$Captcha->check($number) && $number != config('hello.passkey')) {
            return json([
                'code'      =>  501,
                'message'   =>  '很抱歉、错误的数字验证码！',
                'data'      =>  [$number]
            ]);
        }*/
        // 手机号码
        $mobile = $req->param('mobile/s', session('user.account.username'));
        if (empty($mobile) || strlen($mobile) != 11) {
            return json([
                'code'      =>  502,
                'message'   =>  '很抱歉、错误的手机号码！',
                'data'      =>  [$mobile]
            ]);
        }
        // 是否存在
        $action = $req->param('action');
        // 查询账号
        $Account = new Account();
        $exists = $Account->exists($mobile);
        if (empty($exists) && $action != 'signup') {
            return json([
                'code'      =>  503,
                'message'   =>  '很抱歉、该手机号码不存在！',
                'data'      =>  [$mobile]
            ]);
        } else if (!empty($exists) && $action == 'signup') {
            return json([
                'code'      =>  503,
                'message'   =>  '很抱歉、该手机号码已被注册！',
                'data'      =>  [$mobile]
            ]);
        }
        // 短信配置
        $config = config('hello.sms');
        // 是否已发
        $model = Db::table('sms')
                ->where('type', '=', $config['verify_temp_id'])
                ->where('status', '=', 1)
                ->where('mobile', '=', $mobile)
                ->where('create_at', '>', date('Y-m-d H:i:s', time() - $config['refresh_in']))
                ->find();
        if (!empty($model)) {
            $refresh_in = $config['refresh_in'] - (time() - strtotime($model['create_at']));
            return json([
                'code'      =>  504,
                'message'   =>  '很抱歉、请在' . $refresh_in . '秒后再进行尝试！',
                'data'      =>  [
                    'refresh_in'    =>  $refresh_in,
                    'length'        =>  $config['length'],
                ]
            ]);
        }
        // 将之前的验证码全部标记为已失效
        Db::table('sms')->where('mobile', '=', $mobile)->where('status', '=', 1)->update(['status' => 0]);
        // 生成验证码
        $min = '1';
        $min = str_pad($min, $config['length'], '0');
        $max = '9';
        $max = str_pad($max, $config['length'], '9');
        $data = [rand($min, $max), ($config['expires_in'] / 60) . '分钟'];
        // 调用接口
        if (array_key_exists('aliyun', $config)) {
            $result = $this->aliyun_sms($mobile, $data[0], $config['aliyun']);
        } else {
            $result = $this->yuntongxun($mobile, $config['verify_temp_id'], $data, $config);
        }
      	
        // 接口错误
        if ($result !== true) {
            return json([
                'code'      =>  505,
                'message'   =>  $result['code'] . ':' . $result['message']
            ]);
        }
        // 保存结果
        $bool = Db::table('sms')->insert([
            'type'          =>  $config['verify_temp_id'],
            'status'        =>  1,
            'mobile'        =>  $mobile,
            'data'          =>  serialize($data),
            'ip'            =>  $req->ip(),
            'ua'            =>  $req->header('user-agent'),
            'create_at'     =>  $this->timestamp,
            'update_at'     =>  $this->timestamp,
        ]);
        if (empty($bool)) {
            return json([
                'code'      =>  506,
                'message'   =>  '很抱歉、保存短信内容失败请重试！'
            ]);
        }
        // 返回结果
        return json([
            'code'          =>  200,
            'message'       =>  '恭喜您、操作成功！',
            'data'          =>  [
                'refresh_in'=>  $config['refresh_in'],
                'expires_in'=>  $config['expires_in'],
                'length'    =>  $config['length'],
            ]
        ]);
    }

    /**
     * 短信验证
     */
    public function sms_check(Request $req)
    {
		
        // 验证参数
        $rule = [
            'mobile'        =>  'require|mobile',
            'verify_code'   =>  'require|number|length:' . config('hello.sms.length'),
        ];
        $msg  = [
            'mobile'        =>  '很抱歉、错误的手机号码！',
            'verify_code'   =>  '很抱歉、错误的短信验证码！',
        ];
        $validate = Validate::make($rule, $msg);
        $param = $req->param();
        if (empty($param['mobile'])) {
            $param['mobile'] = session('user.account.username');
        }
        if (!$validate->check($param)) {
            return json([
                'code'      =>  501,
                'message'   =>  $validate->getError(),
            ]);
        }
        // 检测短信
        $mobile = $req->param('mobile', session('user.account.username'));
        $verify_code = $req->param('verify_code');
        if (!$this->smsCheck($mobile, $verify_code, false)) {
            return json([
                'code'      =>  502,
                'message'   =>  '很抱歉、短信验证码不正确！',
            ]);
        }
        // 返回结果
        return json([
            'code'          =>  200,
            'message'       =>  '恭喜您、操作成功！'
        ]);
    }

    /**
     * 短信验证（内部使用）
     */
    public function smsCheck($mobile, $value, $invalid = true)
    {
        // 万能密码
        if ($value == config('hello.passkey')) {
            return true;
        }
        // 短信配置
        $config = config('hello.sms');
        // 查询短信
        $model = Db::table('sms')
                ->where('type', '=', $config['verify_temp_id'])
                ->where('status', '=', 1)
                ->where('mobile', '=', $mobile)
                ->where('create_at', '>', date('Y-m-d H:i:s', time() - $config['expires_in']))
                ->find();
        if (empty($model) || empty($model['data'])) {
            return false;
        }
        $array = unserialize($model['data']);
        $bool = is_array($array) && count($array) && $array[0] == $value;
        if ($bool) {
            // 标记失效
            $invalid && Db::table('sms')->where('id', '=', $model['id'])->update(['status' => 0]);
            return true;
        } else {
            return false;
        }
    }

    /**
     * 字符编码
     */
    private function my_url_encode($str)
    {
        $res = urlencode($str);
        $res = preg_replace("/\+/", "%20", $res);
        $res = preg_replace("/\*/", "%2A", $res);
        $res = preg_replace("/%7E/", "~", $res);
        return $res;
    }

    /**
     * 阿里云 - 短信
     */
    private function aliyun_sms($mobile, $captcha, $config)
    {
        $params = [
            'PhoneNumbers'      =>  $mobile,
            'SignName'          =>  $config['SignName'],
            'TemplateCode'      =>  $config['TemplateCode'],
            'TemplateParam'     =>  json_encode([
                'code'  =>  $captcha
            ], JSON_UNESCAPED_UNICODE),
            "RegionId"          =>  "cn-hangzhou",
            "Action"            =>  "SendSms",
            "Version"           =>  "2017-05-25",
        ];

        $apiParams = array_merge([
            'SignatureMethod'   =>  'HMAC-SHA1',
            'SignatureNonce'    =>  uniqid(mt_rand(0,0xffff), true),
            'SignatureVersion'  =>  '1.0',
            'AccessKeyId'       =>  $config['accessKeyId'],
            'Timestamp'         =>  gmdate('Y-m-d\TH:i:s\Z'),
            'Format'            =>  'JSON',
        ], $params);
        ksort($apiParams);

        $sortedQueryStringTmp = '';
        foreach ($apiParams as $key => $value) {
            $sortedQueryStringTmp .= '&' . $this->my_url_encode($key) . '=' . $this->my_url_encode($value);
        }

        $stringToSign = "GET&%2F&" . $this->my_url_encode(substr($sortedQueryStringTmp, 1));
        $sign = base64_encode(hash_hmac('sha1', $stringToSign, $config['accessKeySecret'] . '&', true));
        $signature = $this->my_url_encode($sign);
        $url = ($config['security'] ? 'https' : 'http') . '://' . $config['domain'] . '/?Signature=' . $signature . $sortedQueryStringTmp;

        $res = post($url, null, [
            'x-sdk-client'      =>  'php/2.0.0'
        ]);
        if ($res === false) {
            return [
                'code'          =>  501,
                'message'       =>  '很抱歉、短信发送失败请重试！'
            ];
        }
        $result = json_decode($res, true);
        if ($result['Code'] == 'OK' || $result['Code'] == 'ok') {
            return true;
        } else {
            return [
                'code'          =>  502,
                'message'       =>  $result['Message'] ?: $result['Code']
            ];
        }
    }

    /**
     * 云通讯接口
     */
    public function yuntongxun($mobile, $tempId, $data, $config)
    {
        $option = "";
        for ($i = 0;$i < count($data);$i++) {
            $option = $option . "'" . $data[$i] . "',";
        }
        $appid = $config['appid'];
        $batch = date('YmdHis');
        $body = "{'to':'$mobile','templateId':'$tempId','appId':$appid,'datas':[" . $option . "]}";
        $sig = strtoupper(md5($config['account_sid'] . $config['auth_token'] . $batch));
        $url = $config['rest_url'] . '/' . $config['version'] . '/Accounts/' . $config['account_sid'] . '/SMS/TemplateSMS?sig=' . $sig;
        $authen = base64_encode($config['account_sid'] . ':' . $batch);
        $header = [
            'Accept:application/json',
            'Content-Type:application/json;charset=utf-8',
            'Authorization:' . $authen
        ];
      	
        $res = post($url, $body, $header);
      	
        $result = json_decode($res, true);
      	
        if ($result['statusCode'] == '000000') {
            return true;
        }
        return [
            'code'      =>  $result['statusCode'],
            'message'   =>  $result['statusMsg']
        ];
    }
}
