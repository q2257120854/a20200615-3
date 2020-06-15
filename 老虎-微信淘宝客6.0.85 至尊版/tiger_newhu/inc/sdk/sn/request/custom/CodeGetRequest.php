<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2017-12-4
 */
class CodeGetRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $items;
	
	public function getItems() {
		return $this->items;
	}
	
	public function setItems($items) {
		$this->items = $items;
		$arr = array();
		foreach ($items as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["items"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.code.get';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
	}
	
	public function getBizName(){
		return "getCode";
	}
	
}

class Items {

	private $apiParams = array();
	
	private $orderNo;
	
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