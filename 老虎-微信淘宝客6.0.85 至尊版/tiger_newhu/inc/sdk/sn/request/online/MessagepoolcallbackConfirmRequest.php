<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-18
 */
class MessagepoolcallbackConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $messageList;
	
	public function getMessageList() {
		return $this->messageList;
	}
	
	public function setMessageList($messageList) {
		$this->messageList = $messageList;
		$arr = array();
		foreach ($messageList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["messageList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.online.messagepoolcallback.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "confirmMessagepoolcallback";
	}
	
}

class MessageList {

	private $apiParams = array();
	
	private $messageId;
	
	public function getMessageId() {
		return $this->messageId;
	}

	public function setMessageId($messageId) {
		$this->messageId = $messageId;
		$this->apiParams["messageId"] = $messageId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>