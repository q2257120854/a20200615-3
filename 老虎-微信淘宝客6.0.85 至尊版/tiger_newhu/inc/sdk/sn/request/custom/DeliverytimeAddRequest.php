<?php
/**
 * 苏宁开放平台接口 - 
 *
 * @author suning
 * @date   2019-11-14
 */
class DeliverytimeAddRequest  extends SuningRequest{
	
	/**
	 * 
	 */
	private $childCmList;
	
	/**
	 * 
	 */
	private $deliveryTime;
	
	/**
	 * 
	 */
	private $deliveryTimeType;
	
	/**
	 * 
	 */
	private $isStandardSet;
	
	/**
	 * 
	 */
	private $productCode;
	
	/**
	 * 
	 */
	private $supplierCode;
	
	public function getChildCmList() {
		return $this->childCmList;
	}
	
	public function setChildCmList($childCmList) {
		$this->childCmList = $childCmList;
		$arr = array();
		foreach ($childCmList as $temp){
			array_push($arr,$temp->getApiParams());
		}
		$this->apiParams["childCmList"] = $arr;
	}
	
	public function getDeliveryTime() {
		return $this->deliveryTime;
	}
	
	public function setDeliveryTime($deliveryTime) {
		$this->deliveryTime = $deliveryTime;
		$this->apiParams["deliveryTime"] = $deliveryTime;
	}
	
	public function getDeliveryTimeType() {
		return $this->deliveryTimeType;
	}
	
	public function setDeliveryTimeType($deliveryTimeType) {
		$this->deliveryTimeType = $deliveryTimeType;
		$this->apiParams["deliveryTimeType"] = $deliveryTimeType;
	}
	
	public function getIsStandardSet() {
		return $this->isStandardSet;
	}
	
	public function setIsStandardSet($isStandardSet) {
		$this->isStandardSet = $isStandardSet;
		$this->apiParams["isStandardSet"] = $isStandardSet;
	}
	
	public function getProductCode() {
		return $this->productCode;
	}
	
	public function setProductCode($productCode) {
		$this->productCode = $productCode;
		$this->apiParams["productCode"] = $productCode;
	}
	
	public function getSupplierCode() {
		return $this->supplierCode;
	}
	
	public function setSupplierCode($supplierCode) {
		$this->supplierCode = $supplierCode;
		$this->apiParams["supplierCode"] = $supplierCode;
	}
	
	public function getApiMethodName(){
		return 'suning.custom.deliverytime.add';
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
	public function check(){
		//非空校验
		RequestCheckUtil::checkNotNull($this->deliveryTimeType, 'deliveryTimeType');
		RequestCheckUtil::checkNotNull($this->productCode, 'productCode');
		RequestCheckUtil::checkNotNull($this->supplierCode, 'supplierCode');
	}
	
	public function getBizName(){
		return "addDeliverytime";
	}
	
}

class ChildCmList {

	private $apiParams = array();
	
	private $childDeliveryTime;
	
	private $childProductCode;
	
	public function getChildDeliveryTime() {
		return $this->childDeliveryTime;
	}

	public function setChildDeliveryTime($childDeliveryTime) {
		$this->childDeliveryTime = $childDeliveryTime;
		$this->apiParams["childDeliveryTime"] = $childDeliveryTime;
	}
	
	public function getChildProductCode() {
		return $this->childProductCode;
	}

	public function setChildProductCode($childProductCode) {
		$this->childProductCode = $childProductCode;
		$this->apiParams["childProductCode"] = $childProductCode;
	}
	
	public function getApiParams(){
		return $this->apiParams;
	}
	
}

?>