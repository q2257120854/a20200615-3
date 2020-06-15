<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-3-5
 */
class OrderconfirmAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderList;
	
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
	
	public function getApiMethodName(){
		return 'suning.govbus.orderconfirm.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "addOrderconfirm";
	}
	
}

class OrderItemList {

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

class OrderList {

	private $apiParams = array();
	
	private $orderId;
	
	private $orderItemList;
	
	public function getOrderId() {
		return $this->orderId;
	}

	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderItemList() {
		return $this->orderItemList;
	}

	public function setOrderItemList($orderItemList) {
		$this->orderItemList = $orderItemList;
		$arr = array();
		foreach ($orderItemList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderItemList"] = $arr;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>