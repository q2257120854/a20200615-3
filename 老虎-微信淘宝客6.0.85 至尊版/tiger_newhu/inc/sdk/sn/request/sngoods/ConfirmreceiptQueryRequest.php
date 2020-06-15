<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2020-2-25
 */
class ConfirmreceiptQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $skuConfirmList;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getSkuConfirmList() {
		return $this->skuConfirmList;
	}
	
	public function setSkuConfirmList($skuConfirmList) {
		$this->skuConfirmList = $skuConfirmList;
		$arr = array();
		foreach ($skuConfirmList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["skuConfirmList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.sngoods.confirmreceipt.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "queryConfirmreceipt";
	}
	
}

class SkuConfirmList {

	private $apiParams = array();
	
	private $orderItemId;
	
	private $skuId;
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getSkuId() {
		return $this->skuId;
	}

	public function setSkuId($skuId) {
		$this->skuId = $skuId;
		$this->apiParams["skuId"] = $skuId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>