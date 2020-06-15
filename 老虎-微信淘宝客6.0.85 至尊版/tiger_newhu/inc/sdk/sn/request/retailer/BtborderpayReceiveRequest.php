<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-7-29
 */
class BtborderpayReceiveRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $channelCode;
	
	/**
	 * 
	 */
	private $orderAmount;
	
	/**
	 * 
	 */
	private $orderNo;
	
	/**
	 * 
	 */
	private $payBankAccount;
	
	/**
	 * 
	 */
	private $payBankName;
	
	/**
	 * 
	 */
	private $payBankNo;
	
	/**
	 * 
	 */
	private $storeCode;
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getChannelCode() {
		return $this->channelCode;
	}
	
	public function setChannelCode($channelCode) {
		$this->channelCode = $channelCode;
		$this->apiParams["channelCode"] = $channelCode;
	}
	
	public function getOrderAmount() {
		return $this->orderAmount;
	}
	
	public function setOrderAmount($orderAmount) {
		$this->orderAmount = $orderAmount;
		$this->apiParams["orderAmount"] = $orderAmount;
	}
	
	public function getOrderNo() {
		return $this->orderNo;
	}
	
	public function setOrderNo($orderNo) {
		$this->orderNo = $orderNo;
		$this->apiParams["orderNo"] = $orderNo;
	}
	
	public function getPayBankAccount() {
		return $this->payBankAccount;
	}
	
	public function setPayBankAccount($payBankAccount) {
		$this->payBankAccount = $payBankAccount;
		$this->apiParams["payBankAccount"] = $payBankAccount;
	}
	
	public function getPayBankName() {
		return $this->payBankName;
	}
	
	public function setPayBankName($payBankName) {
		$this->payBankName = $payBankName;
		$this->apiParams["payBankName"] = $payBankName;
	}
	
	public function getPayBankNo() {
		return $this->payBankNo;
	}
	
	public function setPayBankNo($payBankNo) {
		$this->payBankNo = $payBankNo;
		$this->apiParams["payBankNo"] = $payBankNo;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.btborderpay.receive';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
		RequestCheckUtil::checkNotNull($this->orderAmount, 'orderAmount');
		RequestCheckUtil::checkNotNull($this->orderNo, 'orderNo');
		RequestCheckUtil::checkNotNull($this->payBankNo, 'payBankNo');
	}
	
	public function getBizName(){
		return "receiveBtborderpay";
	}
	
}

?>