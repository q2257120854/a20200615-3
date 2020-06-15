<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-8-22
 */
class ElecinvoiceQueryRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderId;
	
	/**
	 * 
	 */
	private $orderItemIdList;
	
	public function getOrderId() {
		return $this->orderId;
	}
	
	public function setOrderId($orderId) {
		$this->orderId = $orderId;
		$this->apiParams["orderId"] = $orderId;
	}
	
	public function getOrderItemIdList() {
		return $this->orderItemIdList;
	}
	
	public function setOrderItemIdList($orderItemIdList) {
		$this->orderItemIdList = $orderItemIdList;
		$arr = array();
		foreach ($orderItemIdList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderItemIdList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.online.elecinvoice.query';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderId, 'orderId');
	}
	
	public function getBizName(){
		return "queryElecinvoice";
	}
	
}

class OrderItemIdList {

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