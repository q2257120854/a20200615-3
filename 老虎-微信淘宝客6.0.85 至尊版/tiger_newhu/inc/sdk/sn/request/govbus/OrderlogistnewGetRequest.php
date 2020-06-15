<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-10-22
 */
class OrderlogistnewGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $orderItemIds;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderItemIds() {
		return $this->orderItemIds;
	}
	
	public function setOrderItemIds($orderItemIds) {
		$this->orderItemIds = $orderItemIds;
		$arr = array();
		foreach ($orderItemIds as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderItemIds"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.orderlogistnew.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "getOrderlogistnew";
	}
	
}

class OrderItemIds {

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