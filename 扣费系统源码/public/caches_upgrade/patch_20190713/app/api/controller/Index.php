<?php
// +---------------------------------------------------------------------+
// | OneBase    | [ WE CAN DO IT JUST THINK ]                            |
// +---------------------------------------------------------------------+
// | Licensed   | http://www.apache.org/licenses/LICENSE-2.0 )           |
// +---------------------------------------------------------------------+
// | Author     | Bigotry <3162875@qq.com>                               |
// +---------------------------------------------------------------------+
// | Repository | https://gitee.com/Bigotry/OneBase                      |
// +---------------------------------------------------------------------+

namespace app\api\controller;

use app\common\controller\ControllerBase;
use think\Db;
/**
 * 首页控制器
 */
class Index extends ControllerBase
{
    
    /**
     * 首页方法
     */
    public function index()
    {
        
        $list = $this->logicDocument->getApiList([], true, 'sort');
        
        $code_list = $this->logicDocument->apiErrorCodeData();
        
        $this->assign('code_list', $code_list);
        
        $content = $this->fetch('content_default');

        $this->assign('content', $content);
        
        $this->assign('list', $list);

        return $this->fetch();
    }
    
    /**
     * API详情
     */
    public function details($id = 0)
    {

        $list = $this->logicDocument->getApiList([], true, 'sort');
        
        $info = $this->logicDocument->getApiInfo(['id' => $id]);
        
        $this->assign('info', $info);
        
        // 测试期间使用token ， 测试完成请删除
        $this->assign('test_access_token', get_access_token());
        
        $content = $this->fetch('content_template');
        
        if (IS_AJAX) {
            
            return throw_response_exception(['content' => $content]);
        }
        
        $this->assign('content', $content);
        
        $this->assign('list', $list);
        
        return $this->fetch('index');
    }
  
   //-----------------------------------------------微信公众号回复
  
  /*
   *  判断
   */
  public function getechostr()
  {
      if (isset($_GET['echostr'])) {
          // 验证
          $this->valid();
      } else {
          $this->responseMsg();
      }
  }
  
  
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
        $token = 'weixin';
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
		$weblist = Db('weblist')->where(['url' => $keyword])->select();
        if(!empty($weblist))
        {
          $list = Db('keywords')->where(['web_id' => $weblist[0]['id']])->select();
          $content = '';
       for($i=0;$i<count($list);$i++)
          {
              if($list[$i]['search_engine'] == 'baidupc')
              {
                  $list[$i]['search_engine'] = '百度PC';
              }else if($list[$i]['search_engine'] == 'baidumobile'){
                $list[$i]['search_engine'] = '百度移动';
              }else if($list[$i]['search_engine'] == 'sogoupc'){
                 $list[$i]['search_engine'] = '搜狗PC';
              }else if($list[$i]['search_engine'] == 'sogoumobile'){
                $list[$i]['search_engine'] = '搜狗移动';
              }else if($list[$i]['search_engine'] == '360pc'){
                $list[$i]['search_engine'] = '360PC';
              }else if($list[$i]['search_engine'] == '360mobile'){
                $list[$i]['search_engine'] = '360移动';
              }else if($list[$i]['search_engine'] == 'smmobile'){
                 $list[$i]['search_engine'] = '神马移动';
              }else{
                 $list[$i]['search_engine'] = '神马';
              }
         
        
          }
     foreach($list as $k => $v)
         {
             $content .=  '关键词: ' . $v['keywords'] . "\n";
             $content .=  '搜索引擎: ' . $v['search_engine'] . "\n";
             $content .=  "排名: " . $v['rank'] . "\n";
           if($v['img_url'] == ''){
             $content .= '查看截图' . "\n";
           }else{
              $content .= '<a href="' . $v['img_url'] . '">查看截图</a>' . "\n";
           }
            $content .= "\n";
             
         }
        
         
        }else{
          $content = '该网站我们没有收录哟,到后台添加吧!';
        }  
			// 2.拼接返回XML
			//$content = "你发送的是文本消息，返回输入的内容：" . $keyword;
			$result = $this->transmitTextMsg($postObj, $content);
		

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
     //---------------------------微信公众号回复结束

    //----------------------------微信支付通知
    /*
     * 微信支付通知地址
     */
    public function wxunfity()
    {
        //获取微信服务器提交过来的数据
        $xml = file_get_contents('php://input');
        //将xml格式的数据转换成数组
        $arr = $this->XmlToArr($xml);


            if($arr['result_code'] == 'SUCCESS' && $arr['return_code'] == 'SUCCESS')
            {
                $list = Db('chongzhi')->where(['pay_order' => $arr['out_trade_no'],'pay_status' => 0])->find();
                if(!empty($list))
                {
                    if($list['price'] * 100 == $arr['total_fee'])
                    {
                        $member = Db('member')->where(['id' => $list['userid']])->find();
                        $member['price'] = $member['price'] + $list['price'];
                        Db('member')->where(['id' => $list['userid']])->update(['price' => $member['price']]);
                        Db('chongzhi')->where(['pay_order' => $arr['out_trade_no']])->update(['pay_status' => 1]);
                    }
                }
            }



        $params = [
            'return_code' => 'SUCCESS',
            'return_msg'  => 'OK'
        ];
        echo $this->ArrToXml($params);

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


    //---------------------------微信支付通知结束
  
}
