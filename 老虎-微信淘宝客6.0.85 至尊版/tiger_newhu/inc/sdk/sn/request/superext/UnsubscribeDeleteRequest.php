<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-4-28
 */
class UnsubscribeDeleteRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appCode;
	
	/**
	 * 
	 */
	private $extSystemId;
	
	/**
	 * 
	 */
	private $mobileNum;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $payType;
	
	/**
	 * 
	 */
	private $unsubscribeTime;
	
	public function getAppCode() {
		return $this->appCode;
	}
	
	public function setAppCode($appCode) {
		$this->appCode = $appCode;
		$this->apiParams["appCode"] = $appCode;
	}
	
	public function getExtSystemId() {
		return $this->extSystemId;
	}
	
	public function setExtSystemId($extSystemId) {
		$this->extSystemId = $extSystemId;
		$this->apiParams["extSystemId"] = $extSystemId;
	}
	
	public function getMobileNum() {
		return $this->mobileNum;
	}
	
	public function setMobileNum($mobileNum) {
		$this->mobileNum = $mobileNum;
		$this->apiParams["mobileNum"] = $mobileNum;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getPayType() {
		return $this->payType;
	}
	
	public function setPayType($payType) {
		$this->payType = $payType;
		$this->apiParams["payType"] = $payType;
	}
	
	public function getUnsubscribeTime() {
		return $this->unsubscribeTime;
	}
	
	public function setUnsubscribeTime($unsubscribeTime) {
		$this->unsubscribeTime = $unsubscribeTime;
		$this->apiParams["unsubscribeTime"] = $unsubscribeTime;
	}
	
	public function getApiMethodName(){
		return 'suning.superext.unsubscribe.delete';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appCode, 'appCode');
		RequestCheckUtil::checkNotNull($this->extSystemId, 'extSystemId');
		RequestCheckUtil::checkNotNull($this->mobileNum, 'mobileNum');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "deleteUnsubscribe";
	}
	
}

?>