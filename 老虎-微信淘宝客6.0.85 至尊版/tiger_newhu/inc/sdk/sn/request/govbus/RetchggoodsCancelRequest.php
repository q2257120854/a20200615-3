<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-7-12
 */
class RetchggoodsCancelRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $operateType;
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $orderItems;
	
	public function getOperateType() {
		return $this->operateType;
	}
	
	public function setOperateType($operateType) {
		$this->operateType = $operateType;
		$this->apiParams["operateType"] = $operateType;
	}
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderItems() {
		return $this->orderItems;
	}
	
	public function setOrderItems($orderItems) {
		$this->orderItems = $orderItems;
		$arr = array();
		foreach ($orderItems as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderItems"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.govbus.retchggoods.cancel';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->operateType, 'operateType');
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "cancelRetchggoods";
	}
	
}

class OrderItems {

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