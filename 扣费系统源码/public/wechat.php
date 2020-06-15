<?php
header("Content-Type: text");

// 定义token令牌字符串常量, 必须和公众平台的token一致
define("TOKEN", "weixin");

// 创建实例对象，调用方法;Obj是object缩写
$wechatObj = new WechatAPI();
if (isset($_GET['echostr'])) {
	// 验证
	$wechatObj->valid();
} else {
	$wechatObj->responseMsg();
}

class WechatAPI {
	/**
	 * 验证是否是来自微信服务器请求，如果是，返回echostr；否则退出
	 *
	 * @return String： 微信服务器发送的echostr字符串
	 */
	public function valid() {
		$echoStr = $_GET['echostr'];
		if ($this->isCheckSignature()) {
			// 是微信服务器，返回echostr字符串
			echo $echoStr;
			exit;
		}
	}

	/**
	 * 验证签名算法具体实现， 返回true/false
	 *
	 * @return boolean
	 */
	private function isCheckSignature() {
		// 1）将token、timestamp、nonce三个参数进行字典序排序
		$token = TOKEN;
		$timeStamp = $_GET['timestamp'];
		$nonce = $_GET['nonce'];
		$signature = $_GET['signature'];

		$tmpArray = array($token, $timeStamp, $nonce);
		sort($tmpArray);

		// 2）将三个参数字符串拼接成一个字符串进行sha1加密
		$tmpStr = implode($tmpArray);
		$tmpStr = sha1($tmpStr);

		// 3）开发者获得加密后的字符串可与signature对比，标识该请求来源于微信
		if ($tmpStr == $signature) {
			return true;
		} else {
			return false;
		}
	}

	/**
	 * 接收用户发送消息，返回消息
	 *
	 * @return String 返回XML字符串
	 */
	public function responseMsg() {
		// 1.接收微信服务器发送XML字符串; 读取原始微信服务器发送的XML字符串
		$xmlStr = file_get_contents("php://input");
		if (!empty($xmlStr)) {
			// 2.XML解析：将$xmlStr字符串转成对象，对象属性名就是XML标签名
			$xmlObj = simplexml_load_string($xmlStr, "SimpleXMLElement", LIBXML_NOCDATA);
			// 3.判断用户发送消息类型
			$msgType = $xmlObj->MsgType;
			// 4.根据不同消息类型，做不同的而处理
			switch ($msgType) {
			case 'text': // 接收文本消息
				$result = $this->receiveTextMsg($xmlObj);
				break;
			case 'image': // 接收图片消息
				$result = $this->receiveImageMsg($xmlObj);
				break;
			default:
				$result = $this->transmitTextMsg($xmlObj, "敬请期待.....");
				break;
			}
			echo $result;
		} else {
			echo "";
			exit;
		}
	}



	
	public function selectId($text){
		$conn = mysqli_connect('localhost','test_7mb_net','FR6wHatny72xwewa','test_7mb_net'); 
		//连接数据库错误提示
		mysqli_set_charset($conn,'utf8');
		if (mysqli_connect_errno($conn)) { 
		
		    die("连接 MySQL 失败: " . mysqli_connect_error()); 
		}
		$name1 = "select id from kf_weblist where url='$text'";
		
		$result = mysqli_query($conn,$name1);
		
		$array = mysqli_fetch_all($result);
		foreach($array as $k => $v){
			$id = $v[0];
		}

		
		return $id;
		
	}
	
	public function keywords($id){
		$conn = mysqli_connect('localhost','test_7mb_net','FR6wHatny72xwewa','test_7mb_net');  
		//连接数据库错误提示
		mysqli_set_charset($conn,'utf8');
		if (mysqli_connect_errno($conn)) { 
		
		    die("连接 MySQL 失败: " . mysqli_connect_error()); 
		}
		$name1 = "select * from kf_keywords where web_id='$id'";
		
		$result = mysqli_query($conn,$name1);
		
		$array = mysqli_fetch_all($result);
	     
		return $array;

	}
	
	/**
	 * 接收用户文本消息，判断不同文本消息，做不同的处理
	 *
	 * @param  SimpleXMLElement $postObj
	 *
	 * @return String XML字符串
	 */
	private function receiveTextMsg($postObj) {
		// 1.读取XML中Content字段内容
		$keyword = trim($postObj->Content);
//		if ($keyword == "图文") {
//			// 1.准备二维数组(hard code硬编码)
//			$contentArray = array();
//			$contentArray[] = array("Title" => "标题1", "Descriptio" => "描述1", "PicUrl" => "http://1.shirleytest.applinzi.com/images/596c7157N852de046.jpg", "Url" => "http://m.baidu.com/");
//			$contentArray[] = array("Title" => "标题2", "Descriptio" => "描述2", "PicUrl" => "http://1.shirleytest.applinzi.com/images/5959f2beNbb7c699b.jpg", "Url" => "https://m.dianping.com/");
//			$contentArray[] = array("Title" => "标题3", "Descriptio" => "描述3", "PicUrl" => "http://1.shirleytest.applinzi.com/images/596c7157N852de046.jpg", "Url" => "http://m.baidu.com/");
//			$contentArray[] = array("Title" => "标题4", "Descriptio" => "描述4", "PicUrl" => "http://1.shirleytest.applinzi.com/images/5959f2beNbb7c699b.jpg", "Url" => "https://github.com/");
//			$result = $this->transmitNewsMsg($postObj, $contentArray);
//		} else {
			// 2.拼接返回XML
			
			
			
	
			$id = $this->selectId($keyword);
			$array = $this->keywords($id);
			if(count($array) == '' || count($array) == 0){
				$content = '你输入的网站地址在火星吧';
				$result = $this->transmitTextMsg($postObj, $content);
				
			}else{
				foreach($array as $k => $v){
					if($v[5] == 'baidupc'){
						$llq = '百度PC端';
					}else if($v[5] == 'baidumobile'){
                        $llq = '百度移动端';
					}else if($v[5] == 'sogoupc'){
						$llq = '搜狗PC端';
					}else if($v[5] == '360pc'){
						$llq = '360PC端';
					}else{
						$llq = $v[5];
					}
					if($v[14] == ''){
						$jietu = '暂时没有截图';
					}else{
						$jietu = "<a href='$v[14]'> 查看截图 </a>";
					}
					$content .= '关键词:' . $v[4] . "\n";
					$content .= '指定浏览器:' . $llq . "\n";
					$content .= '第一页价格:' . $v[6] . "\n";
					$content .= '排名:' . $v[12] . "\n";
					$content .= '截图:' . $jietu . "\n";
					$content .= '更新时间:' . date('Y-m-d H:i:s',$v[13]) . "\n";
					$content .= "\n";
				}
				
				$result = $this->transmitTextMsg($postObj, $content);
			}
			//$content = "你是苏舒的小可爱,不管你输入什么它就会跟复读机一样,哼:" . $keyword;
//			$result = $this->transmitTextMsg($postObj, $content);
//		}

		return $result;
	}

	/**
	 * 拼接并返回指定数组个数的图文消息XML字符串
	 *
	 * @param  SimpleXMLElement $postObj
	 * @param  Array $contentArray
	 *
	 * @return String 图文消息XML字符串
	 */
	private function transmitNewsMsg($postObj, $contentArray) {
		// 1.循环拼接item部分
		$itemStr = "<item>
<Title><![CDATA[%s]]></Title>
<Description><![CDATA[%s]]></Description>
<PicUrl><![CDATA[%s]]></PicUrl>
<Url><![CDATA[%s]]></Url>
</item>";
		$tmpItemStr = "";
		foreach ($contentArray as $itemArray) {
			$tmpItemStr .= sprintf($itemStr, $itemArray['Title'], $itemArray['Description'], $itemArray['PicUrl'], $itemArray['Url']);
		}
		// 2.剩下部分
		$leftXMLStr = "<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[news]]></MsgType>
<ArticleCount>%s</ArticleCount>
<Articles>$tmpItemStr</Articles>
</xml>";
		$resultStr = sprintf($leftXMLStr, $postObj->FromUserName, $postObj->ToUserName, time(), count($contentArray));

		// 3.整合返回
		return $resultStr;
	}

	/**
	 * 接收用户图片消息，做不同的处理
	 *
	 * @param  SimpleXMLElement $postObj
	 *
	 * @return String XML字符串
	 */
	private function receiveImageMsg($postObj) {
		// 1.读取XML中PicUrl字段
		$picUrl = $postObj->PicUrl;
		// 2.拼接返回XML
		$content = "你发送的是图片消息，返回图片url：" . $picUrl;
		$result = $this->transmitTextMsg($postObj, $content);

		return $result;
	}

	/**
	 * 拼接返回文本消息XML
	 *
	 * @param  SimpleXMLElement $postObj
	 * @param  String $content
	 *
	 * @return String XML字符串
	 */
	private function transmitTextMsg($postObj, $content) {
		// 1.拼接XML字符串
		$returnXMLStr = '<xml>
<ToUserName><![CDATA[%s]]></ToUserName>
<FromUserName><![CDATA[%s]]></FromUserName>
<CreateTime>%s</CreateTime>
<MsgType><![CDATA[text]]></MsgType>
<Content><![CDATA[%s]]></Content>
</xml>';
		// 2.填充
		$resultXML = sprintf($returnXMLStr, $postObj->FromUserName, $postObj->ToUserName, time(), $content);
		// 3.返回
		return $resultXML;
	}

}


?>