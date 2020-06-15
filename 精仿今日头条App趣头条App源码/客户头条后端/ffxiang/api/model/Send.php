<?php
namespace app\api\model;
use think\Validate;
use think\Db;
use think\Loader;
class Send extends \think\Model
{
	public function sms($data=[])
	{
		$validate = new Validate([
			['param','require|array','参数必填|参数必须为数组'],
			['mobile','require|/1[34578]{1}\d{9}$/','手机号错误|手机号错误'],
			['template','require','模板id错误'],
		]);
		if (!$validate->check($data)) {
			return $validate->getError();
		}
		$config = Db::name('member_config')->where('type','sdkMobile')->select();
		$sdkAppkey=$config[0]['text'];		//appkey
		$sdkSecretKey=$config[1]['text'];	//secretKey
		$sdkQianming=$config[2]['text'];	//短信签名
		
		$sdkReg=$config[3]['text'];			//注册会员模板ID
		$sdkPwd=$config[4]['text'];			//找回密码模板ID
		$sdkMobile=$config[5]['text'];		//绑定通知模板ID
		include EXTEND_PATH.'sms/sdkcore/Config.php';
        Loader::import('sms.Dysmsapi.Request.V20170525.SendSmsRequest');
        Loader::import('sms.Dysmsapi.Request.V20170525.QuerySendDetailsRequest');
        //此处需要替换成自己的AK信息
        $accessKeyId = $sdkAppkey;
        $accessKeySecret =$sdkSecretKey;
        //短信API产品名
        $product = "Dysmsapi";
        //短信API产品域名
        $domain = "dysmsapi.aliyuncs.com";
        //暂时不支持多Region
        $region = "cn-hangzhou";
        //初始化访问的acsCleint
        $profile = \sms\sdkcore\Profile\DefaultProfile::getProfile($region, $accessKeyId, $accessKeySecret);
        \sms\sdkcore\Profile\DefaultProfile::addEndpoint("cn-hangzhou", "cn-hangzhou", $product, $domain);
        $acsClient= new \sms\sdkcore\DefaultAcsClient($profile);
        $request = new \sms\Dysmsapi\Request\V20170525\SendSmsRequest;
        //必填-短信接收号码
        $request->setPhoneNumbers($data['mobile']);
        //必填-短信签名
        $request->setSignName($sdkQianming);
        //必填-短信模板Code
        $request->setTemplateCode($data['template']);
        //选填-假如模板中存在变量需要替换则为必填(JSON格式)
        $request->setTemplateParam(json_encode($data['param']));//放入模板json串
        //选填-发送短信流水号
       // $request->setOutId("1234");
        //发起访问请求
        $acsResponse = $acsClient->getAcsResponse($request);//返回的结果串
  
  
 		if($acsResponse->Message=='OK'){
 			return true;
 		}else{
 			return $acsResponse->Message;
 		}
		
		
    
exit();
		if(isset($result['code'])){
			return $result['sub_code'];
		}
		return true;

		// 下面是阿里大于
		$validate = new Validate([
			['param','require|array','参数必填|参数必须为数组'],
			['mobile','require|/1[34578]{1}\d{9}$/','手机号错误|手机号错误'],
			['template','require','模板id错误'],
		]);
		if (!$validate->check($data)) {
			return $validate->getError();
		}
		define('TOP_SDK_WORK_DIR', CACHE_PATH.'sms_tmp/');
		define('TOP_SDK_DEV_MODE', false);
		vendor('alidayu.TopClient');
		vendor('alidayu.AlibabaAliqinFcSmsNumSendRequest');
		vendor('alidayu.RequestCheckUtil');
		vendor('alidayu.ResultSet');
		vendor('alidayu.TopLogger');
		$config = Db::name('member_config')->where('type','sdkMobile')->select();
		$sdkAppkey=$config[0]['text'];		//appkey
		$sdkSecretKey=$config[1]['text'];	//secretKey
		$sdkQianming=$config[2]['text'];	//短信签名
		$sdkReg=$config[3]['text'];			//注册会员模板ID
		$sdkPwd=$config[4]['text'];			//找回密码模板ID
		$sdkMobile=$config[5]['text'];		//绑定通知模板ID
		$c = new \TopClient;
		$c->appkey = $sdkAppkey;
		$c->secretKey = $sdkSecretKey;
		$req = new \AlibabaAliqinFcSmsNumSendRequest;
		$req->setExtend('');
		$req->setSmsType('normal');
		$req->setSmsFreeSignName($sdkQianming);
		$req->setSmsParam(json_encode($data['param']));
		$req->setRecNum($data['mobile']);
		$req->setSmsTemplateCode($data['template']);
		$result = $c->execute($req);
		dump($result);
		exit();
		$result = $this->_simplexml_to_array($result);
		if(isset($result['code'])){
			return $result['sub_code'];
		}
		return true;
	}

	private function _simplexml_to_array($obj)
	{
		if(count($obj) >= 1){
			$result = $keys = [];
			foreach($obj as $key=>$value){
				isset($keys[$key]) ? ($keys[$key] += 1) : ($keys[$key] = 1);
				if( $keys[$key] == 1 ){
					$result[$key] = $this->_simplexml_to_array($value);
				}elseif( $keys[$key] == 2 ){
					$result[$key] = [$result[$key], $this->_simplexml_to_array($value)];
				}else if( $keys[$key] > 2 ){
					$result[$key][] = $this->_simplexml_to_array($value);
				}
			}
			return $result;
		}else if(count($obj) == 0){
			return (string)$obj;
		}
	}
	public function email($data=[]){
		$validate = new Validate([
			['email','require|email','邮箱输入错误|邮箱输入错误'],
			['content','require','请输入邮件内容'],
		]);
		if (!$validate->check($data)) {
			return $validate->getError();
		}
		$config = Db::name('member_config')->where('type','sdkEmail')->select();
		$sdkEmailHhost=$config[0]['text'];
		$sdkEmailUsername=$config[1]['text'];
		$sdkEmailPwd=$config[2]['text'];
		$title=config('config')['title'];
		vendor('phpmailer.phpmailer');
		$phpmailer = new \phpmailer(); //实例化
		$phpmailer->Host		=	$sdkEmailHhost; //smtp服务器的名称（这里以QQ邮箱为例）
		$phpmailer->SMTPAuth 	= 	TRUE; //启用smtp认证
		$phpmailer->Username 	= 	$sdkEmailUsername; //你的邮箱名
		$phpmailer->Password 	= 	$sdkEmailPwd; //邮箱密码
		$phpmailer->From 		= 	$sdkEmailUsername; //发件人地址（也就是你的邮箱地址）
		$phpmailer->FromName 	=	$title; //发件人姓名
		$phpmailer->CharSet		=	'utf-8'; //设置邮件编码
		$phpmailer->Subject 	=	$title; //邮件主题
		$phpmailer->Body 		=	$data['content']; //邮件内容
		$phpmailer->AltBody 	=	$data['content']; //邮件正文不支持HTML的备用显示
		$phpmailer->WordWrap 	=	50; //设置每行字符长度
		$phpmailer->IsSMTP(true);	 // 启用SMTP
		$phpmailer->IsHTML(true); 	// 是否HTML格式邮件
		$phpmailer->AddAddress($data['email']);
		$status = $phpmailer->Send();
		return true;
	}



}
?>