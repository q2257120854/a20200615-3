<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-28
 */
class PreoccupyphnumUpdateRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $phoneNumber;
	
	/**
	 * 
	 */
	private $operType;
	
	/**
	 * 
	 */
	private $opId;
	
	/**
	 * 
	 */
	private $channelCode;
	
	public function getPhoneNumber() {
		return $this->phoneNumber;
	}
	
	public function setPhoneNumber($phoneNumber) {
		$this->phoneNumber = $phoneNumber;
		$this->apiParams["phoneNumber"] = $phoneNumber;
	}
	
	public function getOperType() {
		return $this->operType;
	}
	
	public function setOperType($operType) {
		$this->operType = $operType;
		$this->apiParams["operType"] = $operType;
	}
	
	public function getOpId() {
		return $this->opId;
	}
	
	public function setOpId($opId) {
		$this->opId = $opId;
		$this->apiParams["opId"] = $opId;
	}
	
	public function getChannelCode() {
		return $this->channelCode;
	}
	
	public function setChannelCode($channelCode) {
		$this->channelCode = $channelCode;
		$this->apiParams["channelCode"] = $channelCode;
	}
	
	public function getApiMethodName(){
		return 'suning.operasale.preoccupyphnum.update';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->phoneNumber, 'phoneNumber');
		RequestCheckUtil::checkNotNull($this->operType, 'operType');
		RequestCheckUtil::checkNotNull($this->opId, 'opId');
		RequestCheckUtil::checkNotNull($this->channelCode, 'channelCode');
	}
	
	public function getBizName(){
		return "updatePreoccupyphnum";
	}
	
}

?>