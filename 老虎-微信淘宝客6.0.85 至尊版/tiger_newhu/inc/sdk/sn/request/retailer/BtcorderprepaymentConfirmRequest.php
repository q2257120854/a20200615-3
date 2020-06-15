<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-9-29
 */
class BtcorderprepaymentConfirmRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $checkType;
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $storeCode;
	
	/**
	 * 
	 */
	private $channelCode;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getCheckType() {
		return $this->checkType;
	}
	
	public function setCheckType($checkType) {
		$this->checkType = $checkType;
		$this->apiParams["checkType"] = $checkType;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getChannelCode() {
		return $this->channelCode;
	}
	
	public function setChannelCode($channelCode) {
		$this->channelCode = $channelCode;
		$this->apiParams["channelCode"] = $channelCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.btcorderprepayment.confirm';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
		RequestCheckUtil::checkNotNull($this->checkType, 'checkType');
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
	}
	
	public function getBizName(){
		return "confirmBtcorderprepayment";
	}
	
}

?>