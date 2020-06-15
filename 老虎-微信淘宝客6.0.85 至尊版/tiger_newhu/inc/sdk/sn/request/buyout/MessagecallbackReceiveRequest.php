<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-14
 */
class MessagecallbackReceiveRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $messageId;
	
	public function getMessageId() {
		return $this->messageId;
	}
	
	public function setMessageId($messageId) {
		$this->messageId = $messageId;
		$this->apiParams["messageId"] = $messageId;
	}
	
	public function getApiMethodName(){
		return 'suning.buyout.messagecallback.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->messageId, 'messageId');
	}
	
	public function getBizName(){
		return "receiveMessagecallback";
	}
	
}

?>