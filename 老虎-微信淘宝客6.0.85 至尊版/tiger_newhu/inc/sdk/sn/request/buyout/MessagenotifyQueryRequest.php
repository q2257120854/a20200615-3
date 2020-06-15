<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-10-14
 */
class MessagenotifyQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $messageType;
	
	public function getMessageType() {
		return $this->messageType;
	}
	
	public function setMessageType($messageType) {
		$this->messageType = $messageType;
		$this->apiParams["messageType"] = $messageType;
	}
	
	public function getApiMethodName(){
		return 'suning.buyout.messagenotify.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->messageType, 'messageType');
	}
	
	public function getBizName(){
		return "queryMessagenotify";
	}
	
}

?>