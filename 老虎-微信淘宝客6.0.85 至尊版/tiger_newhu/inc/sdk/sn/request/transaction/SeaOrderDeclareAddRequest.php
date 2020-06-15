<?php
/**
 * 苏宁开放平台接口 - 海外购订单申报（海外直邮）
 *
 * @author suning
 * @date   2016-1-27
 */
class SeaOrderDeclareAddRequest  extends SuningRequest{
	
	/**
	 * B2C订单号。B2C订单号
	 */
	private $b2cOrderNo;
	
	/**
	 * 
	 */
	private $orderLineList;
	
	public function getB2cOrderNo() {
		return $this->b2cOrderNo;
	}
	
	public function setB2cOrderNo($b2cOrderNo) {
		$this->b2cOrderNo = $b2cOrderNo;
		$this->apiParams["b2cOrderNo"] = $b2cOrderNo;
	}
	
	public function getOrderLineList() {
		return $this->orderLineList;
	}
	
	public function setOrderLineList($orderLineList) {
		$this->orderLineList = $orderLineList;
		$arr = array();
		foreach ($orderLineList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderLineList"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.seaorderdeclare.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->b2cOrderNo, 'b2cOrderNo');
	}
	
	public function getBizName(){
		return "addSeaOrderDeclare";
	}
	
}

class OrderLineList {

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