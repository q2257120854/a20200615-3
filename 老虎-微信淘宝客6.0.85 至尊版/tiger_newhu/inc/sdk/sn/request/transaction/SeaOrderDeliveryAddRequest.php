<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-1-10
 */
class SeaOrderDeliveryAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $deliveryDetails;
	
	/**
	 * 
	 */
	private $orderCode;
	
	public function getDeliveryDetails() {
		return $this->deliveryDetails;
	}
	
	public function setDeliveryDetails($deliveryDetails) {
		$this->deliveryDetails = $deliveryDetails;
		$arr = array();
		foreach ($deliveryDetails as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["deliveryDetails"] = $arr;
	}
	
	public function getOrderCode() {
		return $this->orderCode;
	}
	
	public function setOrderCode($orderCode) {
		$this->orderCode = $orderCode;
		$this->apiParams["orderCode"] = $orderCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.seaorderdelivery.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
	}
	
	public function getBizName(){
		return "seaOrderDelivery";
	}
	
}

class DeliveryDetails {

	private $apiParams = array();
	
	private $deliveryType;
	
	private $expressCompanyCode;
	
	private $expressNo;
	
	private $orderLineNumber;
	
	private $phoneIdentifyCode;
	
	public function getDeliveryType() {
		return $this->deliveryType;
	}

	public function setDeliveryType($deliveryType) {
		$this->deliveryType = $deliveryType;
		$this->apiParams["deliveryType"] = $deliveryType;
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
	
	public function getOrderLineNumber() {
		return $this->orderLineNumber;
	}

	public function setOrderLineNumber($orderLineNumber) {
		$this->orderLineNumber = $orderLineNumber;
		$this->apiParams["orderLineNumber"] = $orderLineNumber;
	}
	
	public function getPhoneIdentifyCode() {
		return $this->phoneIdentifyCode;
	}

	public function setPhoneIdentifyCode($phoneIdentifyCode) {
		$this->phoneIdentifyCode = $phoneIdentifyCode;
		$this->apiParams["phoneIdentifyCode"] = $phoneIdentifyCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>