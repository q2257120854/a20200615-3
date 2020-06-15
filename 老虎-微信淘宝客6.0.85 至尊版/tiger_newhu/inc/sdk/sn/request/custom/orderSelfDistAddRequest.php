<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2018-1-12
 */
class orderSelfDistAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $deliveryPerName;
	
	/**
	 * 
	 */
	private $deliveryPerPhone;
	
	/**
	 * 
	 */
	private $deliveryTime;
	
	/**
	 * 
	 */
	private $orderCode;
	
	/**
	 * 
	 */
	private $orderLineNumbers;
	
	/**
	 * 
	 */
	private $phoneIdentifyCodes;
	
	/**
	 * 
	 */
	private $productCodes;
	
	public function getDeliveryPerName() {
		return $this->deliveryPerName;
	}
	
	public function setDeliveryPerName($deliveryPerName) {
		$this->deliveryPerName = $deliveryPerName;
		$this->apiParams["deliveryPerName"] = $deliveryPerName;
	}
	
	public function getDeliveryPerPhone() {
		return $this->deliveryPerPhone;
	}
	
	public function setDeliveryPerPhone($deliveryPerPhone) {
		$this->deliveryPerPhone = $deliveryPerPhone;
		$this->apiParams["deliveryPerPhone"] = $deliveryPerPhone;
	}
	
	public function getDeliveryTime() {
		return $this->deliveryTime;
	}
	
	public function setDeliveryTime($deliveryTime) {
		$this->deliveryTime = $deliveryTime;
		$this->apiParams["deliveryTime"] = $deliveryTime;
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
		$this->apiParams["orderLineNumbers"] = $orderLineNumbers->getApiParams();
	}
	
	public function getPhoneIdentifyCodes() {
		return $this->phoneIdentifyCodes;
	}
	
	public function setPhoneIdentifyCodes($phoneIdentifyCodes) {
		$this->phoneIdentifyCodes = $phoneIdentifyCodes;
		$arr = array();
		foreach ($phoneIdentifyCodes as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["phoneIdentifyCodes"] = $arr;
	}
	
	public function getProductCodes() {
		return $this->productCodes;
	}
	
	public function setProductCodes($productCodes) {
		$this->productCodes = $productCodes;
		$this->apiParams["productCodes"] = $productCodes->getApiParams();
	}
	
	public function getApiMethodName(){
		return 'suning.custom.orderselfdist.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->deliveryPerName, 'deliveryPerName');
		RequestCheckUtil::checkNotNull($this->deliveryPerPhone, 'deliveryPerPhone');
		RequestCheckUtil::checkNotNull($this->orderCode, 'orderCode');
	}
	
	public function getBizName(){
		return "orderSelfDist";
	}
	
}

class OrderLineNumbers {

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

class ProductCodes {

	private $apiParams = array();
	
	private $productCode;
	
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

class PhoneIdentifyCodes {

	private $apiParams = array();
	
	private $orderLineNumber;
	
	private $phoneIdentifyCode;
	
	private $productCode;
	
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