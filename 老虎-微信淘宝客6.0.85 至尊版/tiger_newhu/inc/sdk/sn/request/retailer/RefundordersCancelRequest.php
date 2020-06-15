<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-3
 */
class RefundordersCancelRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $merchantCustNo;
	
	/**
	 * 
	 */
	private $storeCode;
	
	/**
	 * 
	 */
	private $orderList;
	
	/**
	 * 
	 */
	private $appId;
	
	public function getMerchantCustNo() {
		return $this->merchantCustNo;
	}
	
	public function setMerchantCustNo($merchantCustNo) {
		$this->merchantCustNo = $merchantCustNo;
		$this->apiParams["merchantCustNo"] = $merchantCustNo;
	}
	
	public function getStoreCode() {
		return $this->storeCode;
	}
	
	public function setStoreCode($storeCode) {
		$this->storeCode = $storeCode;
		$this->apiParams["storeCode"] = $storeCode;
	}
	
	public function getOrderList() {
		return $this->orderList;
	}
	
	public function setOrderList($orderList) {
		$this->orderList = $orderList;
		$arr = array();
		foreach ($orderList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderList"] = $arr;
	}
	
	public function getAppId() {
		return $this->appId;
	}
	
	public function setAppId($appId) {
		$this->appId = $appId;
		$this->apiParams["appId"] = $appId;
	}
	
	public function getApiMethodName(){
		return 'suning.retailer.refundorders.cancel';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->merchantCustNo, 'merchantCustNo');
		RequestCheckUtil::checkNotNull($this->storeCode, 'storeCode');
		RequestCheckUtil::checkNotNull($this->appId, 'appId');
	}
	
	public function getBizName(){
		return "cancelRefundorders";
	}
	
}

class OrderList {

	private $apiParams = array();
	
	private $orderItemNo;
	
	private $cmmdtyCode;
	
	private $outerOrderItemNo;
	
	private $orderNo;
	
	public function getOrderItemNo() {
		return $this->orderItemNo;
	}

	public function setOrderItemNo($orderItemNo) {
		$this->orderItemNo = $orderItemNo;
		$this->apiParams["orderItemNo"] = $orderItemNo;
	}
	
	public function getCmmdtyCode() {
		return $this->cmmdtyCode;
	}

	public function setCmmdtyCode($cmmdtyCode) {
		$this->cmmdtyCode = $cmmdtyCode;
		$this->apiParams["cmmdtyCode"] = $cmmdtyCode;
	}
	
	public function getOuterOrderItemNo() {
		return $this->outerOrderItemNo;
	}

	public function setOuterOrderItemNo($outerOrderItemNo) {
		$this->outerOrderItemNo = $outerOrderItemNo;
		$this->apiParams["outerOrderItemNo"] = $outerOrderItemNo;
	}
	
	public function getOrderNo() {
		return $this->orderNo;
	}

	public function setOrderNo($orderNo) {
		$this->orderNo = $orderNo;
		$this->apiParams["orderNo"] = $orderNo;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>