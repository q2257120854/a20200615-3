<?php
/**
 * 苏宁开放平台接口 - 海外购订单合单（海外直邮）
 *
 * @author suning
 * @date   2016-3-25
 */
class SeaOrderJoinAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $orderLineNumberList;
	
	public function getOrderLineNumberList() {
		return $this->orderLineNumberList;
	}
	
	public function setOrderLineNumberList($orderLineNumberList) {
		$this->orderLineNumberList = $orderLineNumberList;
		$arr = array();
		foreach ($orderLineNumberList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderLineNumberList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.supply.seaorderjoin.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "addSeaOrderJoin";
	}
	
}

class OrderLineNumberList {

	private $apiParams = array();
	
	private $orderLineNumber;
	
	public function getOrderLineNumber() {
		return $this->orderLineNumber;
	}

	public function setOrderLineNumber($orderLineNumber) {
		$this->orderLineNumber = $orderLineNumber;
		$this->apiParams["orderLineNumber"] = $orderLineNumber;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>