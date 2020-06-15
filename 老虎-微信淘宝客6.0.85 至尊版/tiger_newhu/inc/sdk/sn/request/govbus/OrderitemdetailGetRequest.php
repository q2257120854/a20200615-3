<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-10-26
 */
class OrderitemdetailGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderItemIds;
	
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
		return 'suning.govbus.orderitemdetail.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getOrderitemdetail";
	}
	
}

class OrderItemIds {

	private $apiParams = array();
	
	private $orderItemId;
	
	public function getOrderItemId() {
		return $this->orderItemId;
	}

	public function setOrderItemId($orderItemId) {
		$this->orderItemId = $orderItemId;
		$this->apiParams["orderItemId"] = $orderItemId;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>