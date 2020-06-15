<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-17
 */
class MessageConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $msgId;
	
	/**
	 * 
	 */
	private $appId;
	
	public function getMsgId() {
		return $this->msgId;
	}
	
	public function setMsgId($msgId) {
		$this->msgId = $msgId;
		$this->apiParams["msgId"] = $msgId;
	}
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.message.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->msgId, 'msgId');
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "confirmMessage";
	}
	
}

?>