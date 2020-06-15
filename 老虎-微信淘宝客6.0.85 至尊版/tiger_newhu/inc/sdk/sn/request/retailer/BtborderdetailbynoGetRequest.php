<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-25
 */
class BtborderdetailbynoGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $appId;
	
	/**
	 * 
	 */
	private $orderItemNo;
	
	/**
	 * 
	 */
	private $orderNo;
	
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
	
	public function getOrderItemNo() {
		return $this->orderItemNo;
	}
	
	public function setOrderItemNo($orderItemNo) {
		$this->orderItemNo = $orderItemNo;
		$this->apiParams["orderItemNo"] = $orderItemNo;
	}
	
	public function getOrderNo() {
		return $this->orderNo;
	}
	
	public function setOrderNo($orderNo) {
		$this->orderNo = $orderNo;
		$this->apiParams["orderNo"] = $orderNo;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.btborderdetailbyno.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
		RequestCheckUtil::checkNotNull($this->orderNo, 'orderNo');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
	}
	
	public function getBizName(){
		return "getBtborderdetailbyno";
	}
	
}

?>