<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-2-7
 */
class AgentrechargeGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $channelId;
	
	/**
	 * 
	 */
	private $reqSerial;
	
	/**
	 * 
	 */
	private $reqTime;
	
	/**
	 * 
	 */
	private $serialNumber;
	
	/**
	 * 
	 */
	private $reqSign;
	
	public function getChannelId() {
		return $this->channelId;
	}
	
	public function setChannelId($channelId) {
		$this->channelId = $channelId;
		$this->apiParams["channelId"] = $channelId;
	}
	
	public function getReqSerial() {
		return $this->reqSerial;
	}
	
	public function setReqSerial($reqSerial) {
		$this->reqSerial = $reqSerial;
		$this->apiParams["reqSerial"] = $reqSerial;
	}
	
	public function getReqTime() {
		return $this->reqTime;
	}
	
	public function setReqTime($reqTime) {
		$this->reqTime = $reqTime;
		$this->apiParams["reqTime"] = $reqTime;
	}
	
	public function getSerialNumber() {
		return $this->serialNumber;
	}
	
	public function setSerialNumber($serialNumber) {
		$this->serialNumber = $serialNumber;
		$this->apiParams["serialNumber"] = $serialNumber;
	}
	
	public function getReqSign() {
		return $this->reqSign;
	}
	
	public function setReqSign($reqSign) {
		$this->reqSign = $reqSign;
		$this->apiParams["reqSign"] = $reqSign;
	}
	
	public function getApiMethodName(){
		return 'suning.operasale.agentrecharge.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->channelId, 'channelId');
		RequestCheckUtil::checkNotNull($this->reqSerial, 'reqSerial');
		RequestCheckUtil::checkNotNull($this->reqTime, 'reqTime');
		RequestCheckUtil::checkNotNull($this->serialNumber, 'serialNumber');
		RequestCheckUtil::checkNotNull($this->reqSign, 'reqSign');
	}
	
	public function getBizName(){
		return "getAgentrecharge";
	}
	
}

?>