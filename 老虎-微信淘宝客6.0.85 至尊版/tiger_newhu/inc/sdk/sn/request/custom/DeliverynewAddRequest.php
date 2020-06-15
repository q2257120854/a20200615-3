<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-11-27
 */
class DeliverynewAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $deliveryTime;
	
	/**
	 * 
	 */
	private $expressCompanyCode;
	
	/**
	 * 
	 */
	private $expressNo;
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $orderLineNumbers;
	
	public function getDeliveryTime() {
		return $this->deliveryTime;
	}
	
	public function setDeliveryTime($deliveryTime) {
		$this->deliveryTime = $deliveryTime;
		$this->apiParams["deliveryTime"] = $deliveryTime;
	}
	
	public function getExpressCompanyCode() {
		return $this->expressCompanyCode;
	}
	
	public function setExpressCompanyCode($expressCompanyCode) {
		$this->expressCompanyCode = $expressCompanyCode;
		$this->apiParams["expressCompanyCode"] = $expressCompanyCode;
	}
	
	public function getExpressNo() {
		return $this->expressNo;
	}
	
	public function setExpressNo($expressNo) {
		$this->expressNo = $expressNo;
		$this->apiParams["expressNo"] = $expressNo;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getOrderLineNumbers() {
		return $this->orderLineNumbers;
	}
	
	public function setOrderLineNumbers($orderLineNumbers) {
		$this->orderLineNumbers = $orderLineNumbers;
		$arr = array();
		foreach ($orderLineNumbers as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["orderLineNumbers"] = $arr;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.deliverynew.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->expressCompanyCode, 'expressCompanyCode');
		RequestCheckUtil::checkNotNull($this->expressNo, 'expressNo');
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
	}
	
	public function getBizName(){
		return "addDeliverynew";
	}
	
}

class OrderLineNumbers {

	private $apiParams = array();
	
	private $orderLineNumber;
	
	private $productCode;
	
	public function getOrderLineNumber() {
		return $this->orderLineNumber;
	}

	public function setOrderLineNumber($orderLineNumber) {
		$this->orderLineNumber = $orderLineNumber;
		$this->apiParams["orderLineNumber"] = $orderLineNumber;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}

	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>